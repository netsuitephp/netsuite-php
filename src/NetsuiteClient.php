<?php

class NetsuiteClient
{
    public $client = null;
    public $passport = null;
    public $generated_from_endpoint = "";

    protected $classmap;

    private $nsversion = "2014_2r1";
    private $userequest = true;
    private $config;
    private $soapHeaders = array();


    function __construct($config = array(), $wsdl = null, $options = array()) {
        global $debuginfo;

        $this->config = $config ?: include "../config/netsuite.php";
        $this->classmap = include "includes/classmap.php";

        if (!isset($wsdl)) {
             if (!isset($this->config['host'])) {
                throw new Exception('Webservice host must be specified');
             }
             if (!isset($this->config['endpoint'])) {
                throw new Exception('Webservice endpoint must be specified');
             }
             $wsdl = $this->config['host'] . "/wsdl/v" . $this->config['endpoint'] . "_0/netsuite.wsdl";
        }

        if (!extension_loaded('soap')) {
            // check for loaded SOAP extension
            $soap_warning = 'The SOAP PHP extension is not loaded. Please modify the extension settings in php.ini accordingly.';
            trigger_error($soap_warning, E_USER_WARNING);
        }

        if (!extension_loaded('openssl') && substr($wsdl, 0, 5) == "https") {
            // check for loaded SOAP extension
            $soap_warning = 'The Open SSL PHP extension is not loaded and you are trying to use HTTPS protocol. Please modify the extension settings in php.ini accordingly.';
            trigger_error($soap_warning, E_USER_WARNING);
        }

        if ( $this->generated_from_endpoint != $this->config['endpoint'] ) {
            // check for the endpoint compatibility failed, but it might still be compatible. Issue only warning
            $endpoint_warning = 'The NetSuiteService classes were generated from the '.$this->generated_from_endpoint .' endpoint but you are running against ' . $this->config['endpoint'];
            trigger_error($endpoint_warning, E_USER_WARNING);
        }

        $options['classmap'] = $this->classmap;
        $options['trace'] = 1;
        $options['connection_timeout'] = 5;
        $options['cache_wsdl'] = WSDL_CACHE_BOTH;
        $httpheaders = "PHP-SOAP/" . phpversion() . " + NetSuite PHP Toolkit " . $this->nsversion;

        $options['location'] = $this->config['host'] . "/services/NetSuitePort_" . $this->config['endpoint'];
        $options['keep_alive'] = false; // do not maintain http connection to the server.
        $options['features'] = SOAP_SINGLE_ELEMENT_ARRAYS;

        if (isset($debuginfo)) {
            $httpheaders .= "\r\nDebug: true";
            $httpheaders .= "\r\nUser: " . $debuginfo["email"];
            $httpheaders .= "\r\nPassword: " . $debuginfo["password"];
            $httpheaders .= "\r\nIssue: " . $debuginfo["issue"];
        }

        $options['user_agent'] =  $httpheaders;
        $this->setPassport();

        $this->client = new SoapClient($wsdl, $options);
    }

    public function setPassport() {
        $this->passport = new Passport();
        $this->passport->account = $this->config['account'];
        $this->passport->email = $this->config['email'];
        $this->passport->password = $this->config['password'];
        $this->passport->role = new RecordRef();
        $this->passport->role->internalId = $this->config['role'];
    }

    public function useRequestLevelCredentials($option) {
         $this->userequest = $option;
    }

    public function setPreferences ($warningAsError = false, $disableMandatoryCustomFieldValidation = false, $disableSystemNotesForCustomFields = false,  $ignoreReadOnlyFields = false)
    {
        $sp = new Preferences();
        $sp->warningAsError  = $warningAsError;
        $sp->disableMandatoryCustomFieldValidation = $disableMandatoryCustomFieldValidation;
        $sp->disableSystemNotesForCustomFields = $disableSystemNotesForCustomFields;
                                $sp->ignoreReadOnlyFields = $ignoreReadOnlyFields;

        $this->addHeader("preferences", $sp);
    }          
                
    public function clearPreferences() {
        $this->clearHeader("preferences");
    }        

    public function setSearchPreferences ($bodyFieldsOnly = true, $pageSize = 50, $returnSearchColumns = true)
    {
        $sp = new SearchPreferences();
        $sp->bodyFieldsOnly = $bodyFieldsOnly;
        $sp->pageSize = $pageSize;
        $sp->returnSearchColumns = $returnSearchColumns;

        $this->addHeader("searchPreferences", $sp);
    }

    public function clearSearchPreferences() {
        $this->clearHeader("searchPreferences");
    }

    public function addHeader($header_name, $header) {
        $this->soapHeaders[$header_name] = new SoapHeader("ns", $header_name, $header);
    }
    public function clearHeader($header_name) {
        unset($this->soapHeaders[$header_name]);
    }

    protected function makeSoapCall($operation, $parameter) {
        if ($this->userequest) {
            // use request level credentials, add passport as a SOAP header
            $this->addHeader("passport", $this->passport);
            // SoapClient, even with keep-alive set to false, keeps sending the JSESSIONID cookie back to the server on subsequent requests. Unsetting the cookie to prevent this.
            $this->client->__setCookie("JSESSIONID");
        } else {
            $this->clearHeader("passport");
        }

        $response = $this->client->__soapCall($operation, array($parameter), NULL, $this->soapHeaders);

        if ( file_exists(dirname(__FILE__) . '/nslog') ) {
            // log the request and response into the nslog directory. Code taken from PHP toolkit
            // REQUEST
            $req = dirname(__FILE__) . '/nslog' . "/" . date("Ymd.His") . "." . milliseconds() . "-" . $operation . "-request.xml";
            $Handle = fopen($req, 'w');
            $Data = $this->client->__getLastRequest();

            $Data = cleanUpNamespaces($Data);

            $xml = simplexml_load_string($Data, 'SimpleXMLElement', LIBXML_NOCDATA);

            $passwordFields = $xml->xpath("//password | //password2 | //currentPassword | //newPassword | //newPassword2 | //ccNumber | //ccSecurityCode | //socialSecurityNumber");

            foreach ($passwordFields as &$pwdField) {
                (string)$pwdField[0] = "[Content Removed for Security Reasons]";
            }

            $stringCustomFields = $xml->xpath("//customField[@xsitype='StringCustomFieldRef']");

            foreach ($stringCustomFields as $field) {
                (string)$field->value = "[Content Removed for Security Reasons]";
            }

            $xml_string = str_replace('xsitype', 'xsi:type', $xml->asXML());

            fwrite($Handle, $xml_string);
            fclose($Handle);

            // RESPONSE
            $resp = dirname(__FILE__) . '/nslog' . "/" . date("Ymd.His") . "." . milliseconds() . "-" . $operation . "-response.xml";
            $Handle = fopen($resp, 'w');
            $Data = $this->client->__getLastResponse();
            fwrite($Handle, $Data);
            fclose($Handle);

        }

        return $response;

    }

}
