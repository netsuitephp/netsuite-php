<?php

require "NSconfig.php";

function arrayValuesAreEmpty ($array)
{
    if (!is_array($array))
    {
        return false;
    }

    foreach ($array as $key => $value)
    {
        if ( $value === false || ( !is_null($value) && $value != "" && !arrayValuesAreEmpty($value)))
        {
            return false;
        }
    }

    return true;
}

function array_is_associative ($array)
{
    if ( is_array($array) && ! empty($array) )
    {
        for ( $iterator = count($array) - 1; $iterator; $iterator-- )
        {
            if ( ! array_key_exists($iterator, $array) ) { return true; }
        }
        return ! array_key_exists(0, $array);
    }
    return false;
}

function setFields($object, array $fieldArray=null)
{
    // helper method that allows creating objects and setting their properties based on an associative array passed as argument. Mimics functionality from PHP toolkit
    $classname = get_class($object);
    // a static map that maps class parameters to their types. needed for knowing which objects to create
    $typesmap = $classname::$paramtypesmap;

    if (!isset ($typesmap)) {
        // if the class does not have paramtypesmap, consider it empty
        $typesmap = array();
    }

    if ($fieldArray == null)
    {
        // nothign to do
        return;
    }

    foreach ($fieldArray as $fldName => $fldValue)
    {
        if (((is_null($fldValue) || $fldValue == "") && $fldValue !== false) || arrayValuesAreEmpty($fldValue))
        {
            //empty param
            continue;
        }

        if (!isset($typesmap[$fldName])) {
            // the value is not a valid class atrribute
            trigger_error("SetFields error: parameter \"" .$fldName . "\" is not a valid parameter for an object of class \"" . $classname . "\", it will be omitted", E_USER_WARNING);
            continue;
        }

        if ($fldValue === 'false')
        {
            // taken from the PHP toolkit, but is it really necessary?
            $object->$fldName = FALSE;
        }
        elseif (is_object($fldValue))
        {
            $object->$fldName = $fldValue;
        }
        elseif (is_array($fldValue) && array_is_associative($fldValue))
        {
            // example: 'itemList'  => array('item' => array($item1, $item2), 'replaceAll'  => false)
            if (substr($typesmap[$fldName],-2) == "[]") {
                trigger_error("Trying to assign an object into an array parameter \"" .$fldName . "\" of class \"" . $classname . "\", it will be omitted", E_USER_WARNING);
                continue;
            }
            $obj = new $typesmap[$fldName]();
            setFields($obj, $fldValue);
            $object->$fldName = $obj;
        }
        elseif (is_array($fldValue) && !array_is_associative($fldValue))
        {
            // array type 
            if (substr($typesmap[$fldName],-2) != "[]") {
                // the type is not an array, skipping this value
                trigger_error("Trying to assign an array value into parameter \"" .$fldName . "\" of class \"" . $classname . "\", it will be omitted", E_USER_WARNING);
                continue;
            }

            // get the base type  - the string is of type <type>[]
            $basetype = substr($typesmap[$fldName],0,-2);

            // example: 'item' => array($item1, $item2)
            foreach ($fldValue as $item)
            {
                if (is_object($item))
                {
                    // example: $item1 = new nsComplexObject('SalesOrderItem');
                    $val[] = $item;
                }
                elseif ($typesmap[$fldName] == "string")
                {
                    // handle enums
                    $val[] = $item;
                }
                else
                {
                    // example: $item2 = array( 'item'      => new nsComplexObject('RecordRef', array('internalId' => '17')),
                    //                          'quantity'  => '3')
                    $obj = new $basetype();
                    setFields($obj, $item);
                    $val[] = $obj;
                }
            }

            $object->$fldName = $val;
        }
        else
        {
            $object->$fldName = $fldValue;
        }
    }
}

function milliseconds()
{
    $m = explode(' ',microtime());
    return (int)round($m[0]*10000,4);
}

function cleanUpNamespaces($xml_root)
{
    $xml_root = str_replace('xsi:type', 'xsitype', $xml_root);
    $record_element = new SimpleXMLElement($xml_root);

    foreach ($record_element->getDocNamespaces() as $name => $ns)
    {
        if ( $name != "" )
        {
            $xml_root = str_replace($name . ':', '', $xml_root);
        }
    }

    $record_element = new SimpleXMLElement($xml_root);

    foreach($record_element->children() as $field)
    {
        $field_element = new SimpleXMLElement($field->asXML());

        foreach ($field_element->getDocNamespaces() as $name2 => $ns2)
        {
            if ($name2 != "")
            {
                $xml_root = str_replace($name2 . ':', '', $xml_root);
            }
        }
    }

    return $xml_root;
}

class NSPHPClient {
    private $nsversion = "2014_2r1";    

    public $client = null;
    public $passport = null;
    private $soapHeaders = array();
    private $userequest = true;
    protected $classmap = null;
    public $generated_from_endpoint = "";


    protected function __construct($wsdl=null, $options=array()) {
        global $nshost, $nsendpoint;
        global $nsaccount, $nsemail, $nsrole, $nspassword;
        global $debuginfo;

        if (!isset($wsdl)) {
             if (!isset($nshost)) {
                throw new Exception('Webservice host must be specified');
             }
             if (!isset($nsendpoint)) {
                throw new Exception('Webservice endpoint must be specified');
             }
             $wsdl = $nshost . "/wsdl/v" . $nsendpoint . "_0/netsuite.wsdl";
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

        if ( $this->generated_from_endpoint != $nsendpoint ) {
            // check for the endpoint compatibility failed, but it might still be compatible. Issue only warning
            $endpoint_warning = 'The NetSuiteService classes were generated from the '.$this->generated_from_endpoint .' endpoint but you are running against ' . $nsendpoint;
            trigger_error($endpoint_warning, E_USER_WARNING);
        }

        $options['classmap'] = $this->classmap;
        $options['trace'] = 1;
        $options['connection_timeout'] = 5;
        $options['cache_wsdl'] = WSDL_CACHE_BOTH;
        $httpheaders = "PHP-SOAP/" . phpversion() . " + NetSuite PHP Toolkit " . $this->nsversion;

        $options['location'] = $nshost . "/services/NetSuitePort_" . $nsendpoint;
        $options['keep_alive'] = false; // do not maintain http connection to the server.
        $options['features'] = SOAP_SINGLE_ELEMENT_ARRAYS;

        $context = array('http' =>
            array(
                'header' => 'Authorization: dnwdjewdnwe'
            )
        );
        //$options['stream_context'] = stream_context_create($context);

        if (isset($debuginfo)) {
            $httpheaders .= "\r\nDebug: true";
            $httpheaders .= "\r\nUser: " . $debuginfo["email"];
            $httpheaders .= "\r\nPassword: " . $debuginfo["password"];
            $httpheaders .= "\r\nIssue: " . $debuginfo["issue"];
        }

        $options['user_agent'] =  $httpheaders;
        $this->setPassport($nsaccount, $nsemail, $nsrole, $nspassword);

        $this->client = new SoapClient($wsdl, $options);
    }

    public function setPassport($nsaccount, $nsemail, $nsrole, $nspassword) {
        $this->passport = new Passport();
        $this->passport->account = $nsaccount;
        $this->passport->email = $nsemail;
        $this->passport->password = $nspassword;
        $this->passport->role = new RecordRef();
        $this->passport->role->internalId = $nsrole;
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


?>
