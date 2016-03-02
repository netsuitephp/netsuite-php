<?php

namespace Fungku\NetSuite;

use Fungku\NetSuite\Classes\Passport;
use Fungku\NetSuite\Classes\Preferences;
use Fungku\NetSuite\Classes\RecordRef;
use Fungku\NetSuite\Classes\SearchPreferences;
use SoapClient;
use SoapHeader;

class NetSuiteClient
{
    /**
     * @var array
     */
    private $config;
    /**
     * @var array
     */
    private $options;
    /**
     * @var SoapClient
     */
    private $client;
    /**
     * @var array
     */
    private $soapHeaders = array();

    /**
     * @param array $config
     * @param array $options
     * @param SoapClient $client
     */
    public function __construct($config, $options = array(), SoapClient $client = null)
    {
        $this->config = $config;
        $this->options = array_merge($this->createOptionsFromConfig($this->config), $options);
        $this->client = $client ?: new SoapClient($this->config['host'], $this->options);
    }

    /**
     * Make the SOAP call!
     *
     * @param string $operation
     * @param mixed $parameter
     * @return mixed
     */
    protected function makeSoapCall($operation, $parameter)
    {
        $this->fixWtfCookieBug();
        $this->addHeader("passport", $this->createPassportFromConfig($this->config));

        $response = $this->client->__soapCall($operation, array($parameter), null, $this->soapHeaders);

        $this->logSoapCall($this->client, $operation);

        return $response;
    }

    /**
     * SoapClient, even with keep-alive set to false, keeps sending the JSESSIONID cookie back to
     * the server on subsequent requests. Un-setting the cookie will prevent this.
     */
    private function fixWtfCookieBug()
    {
        $this->client->__setCookie("JSESSIONID");
    }

    /**
     * Create the options array.
     *
     * @param array $config
     * @return array
     */
    private function createOptionsFromConfig($config)
    {
        return array(
            'classmap' => require __DIR__."/includes/classmap.php",
            'trace' => 1,
            'connection_timeout' => 5,
            'cache_wsdl' => WSDL_CACHE_BOTH,
            'location' => $config['host'] . "/services/NetSuitePort_" . $config['endpoint'],
            'keep_alive' => false,
            'features' => SOAP_SINGLE_ELEMENT_ARRAYS,
            'user_agent' =>  "PHP-SOAP/" . phpversion() . " + ryanwinchester/netsuite-php",
        );
    }

    /**
     * Create the Passport.
     *
     * @param array $config
     * @return Passport
     */
    public function createPassportFromConfig($config)
    {
        $passport = new Passport();
        $passport->account = $config['account'];
        $passport->email = $config['email'];
        $passport->password = $config['password'];
        $passport->role = new RecordRef();
        $passport->role->internalId = $config['role'];

        return $passport;
    }

    /**
     * Add a header by name.
     *
     * @param string $header
     * @param mixed $value
     */
    public function addHeader($header, $value)
    {
        $this->soapHeaders[$header] = new SoapHeader("ns", $header, $value);
    }

    /**
     * Remove a header by name.
     *
     * @param string $header
     */
    public function clearHeader($header)
    {
        unset($this->soapHeaders[$header]);
    }

    /**
     * Set preferences header.
     *
     * @param bool $warningAsError
     * @param bool $disableMandatoryCustomFieldValidation
     * @param bool $disableSystemNotesForCustomFields
     * @param bool $ignoreReadOnlyFields
     */
    public function setPreferences(
        $warningAsError = false,
        $disableMandatoryCustomFieldValidation = false,
        $disableSystemNotesForCustomFields = false,
        $ignoreReadOnlyFields = false
    ) {
        $preferences = new Preferences();
        $preferences->warningAsError = $warningAsError;
        $preferences->disableMandatoryCustomFieldValidation = $disableMandatoryCustomFieldValidation;
        $preferences->disableSystemNotesForCustomFields = $disableSystemNotesForCustomFields;
        $preferences->ignoreReadOnlyFields = $ignoreReadOnlyFields;

        $this->addHeader("preferences", $preferences);
    }

    /**
     * Clear preferences header.
     */
    public function clearPreferences()
    {
        $this->clearHeader("preferences");
    }

    /**
     * Set the search preferences header.
     *
     * @param bool $bodyFieldsOnly
     * @param int $pageSize
     * @param bool $returnSearchColumns
     */
    public function setSearchPreferences($bodyFieldsOnly = true, $pageSize = 50, $returnSearchColumns = true)
    {
        $preferences = new SearchPreferences();
        $preferences->bodyFieldsOnly = $bodyFieldsOnly;
        $preferences->pageSize = $pageSize;
        $preferences->returnSearchColumns = $returnSearchColumns;

        $this->addHeader("searchPreferences", $preferences);
    }

    /**
     * Clear the search preferences.
     */
    public function clearSearchPreferences()
    {
        $this->clearHeader("searchPreferences");
    }

    /**
     * Turn request logging on or off.
     *
     * @param bool $on
     */
    public function logRequests($on = true)
    {
        $this->config['logging'] = $on;
    }

    /**
     * Set the logging path.
     *
     * @param string $logPath
     */
    public function setLogPath($logPath)
    {
        $this->config['log_path'] = $logPath;
    }

    /**
     * Log the last soap call as request and response XML files.
     *
     * @param SoapClient $client
     * @param string $operation
     */
    private function logSoapCall(SoapClient $client, $operation)
    {
        if ($this->config['logging'] && file_exists($this->config['log_path'])) {
            $fileName = "fungku-netsuite-php-" . date("Ymd.His") . "-" . $operation;
            $logFile = $this->config['log_path'] ."/". $fileName;

            // REQUEST
            $request = $logFile . "-request.xml";
            $Handle = fopen($request, 'w');
            $Data = $client->__getLastRequest();
            $Data = cleanUpNamespaces($Data);

            $xml = simplexml_load_string($Data, 'SimpleXMLElement', LIBXML_NOCDATA);

            $privateFieldXpaths = array(
                '//password',
                '//password2',
                '//currentPassword',
                '//newPassword',
                '//newPassword2',
                '//ccNumber',
                '//ccSecurityCode',
                '//socialSecurityNumber',
            );

            $privateFields = $xml->xpath(implode(" | ", $privateFieldXpaths));

            foreach ($privateFields as &$field) {
                $field[0] = "[Content Removed for Security Reasons]";
            }

            $stringCustomFields = $xml->xpath("//customField[@xsitype='StringCustomFieldRef']");

            foreach ($stringCustomFields as $field) {
                $field->value = "[Content Removed for Security Reasons]";
            }

            $xml_string = str_replace('xsitype', 'xsi:type', $xml->asXML());

            fwrite($Handle, $xml_string);
            fclose($Handle);

            // RESPONSE
            $response = $logFile . "-response.xml";
            $Handle = fopen($response, 'w');
            $Data = $client->__getLastResponse();

            fwrite($Handle, $Data);
            fclose($Handle);
        }
    }
}
