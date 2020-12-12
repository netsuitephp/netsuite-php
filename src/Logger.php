<?php

namespace NetSuite;

class Logger
{
    private $path;

    /**
     * @var string
     */
    private $format;

    /**
     * @var string
     */
    private $dateFormat;

    const DEFAULT_LOG_FORMAT = 'netsuite-php-%date-%operation';

    const DEFAULT_DATE_FORMAT = 'Ymd.His.u';

    public function __construct($path = null, $format = self::DEFAULT_LOG_FORMAT, $dateFormat = self::DEFAULT_DATE_FORMAT)
    {
        $this->path = $path ?: __DIR__ . '/../logs';
        $this->format = $format;
        $this->dateFormat = $dateFormat;
    }

    /**
     * Update the logging path in the Logger object
     *
     * @param string $path
     * @return void
     */
    public function setPath($path)
    {
        $this->path = $path;
    }

    /**
     * Log the last soap call as request and response XML files.
     *
     * @param \SoapClient $client
     * @param string $operation
     */
    public function logSoapCall($client, $operation)
    {
        if (file_exists($this->path)) {
            $fileName = strtr($this->format, [
                '%date' => (new \DateTime())->format($this->dateFormat),
                '%operation' => $operation,
            ]);
            $logFile = $this->path . '/' . $fileName;

            // REQUEST
            $request = $logFile . '-request.xml';
            $Handle = fopen($request, 'w');
            $Data = $client->__getLastRequest();
            $Data = cleanUpNamespaces($Data);

            $xml = simplexml_load_string($Data, 'SimpleXMLElement', LIBXML_NOCDATA);

            $privateFieldXpaths = [
                '//password',
                '//password2',
                '//currentPassword',
                '//newPassword',
                '//newPassword2',
                '//ccNumber',
                '//ccSecurityCode',
                '//socialSecurityNumber',
            ];

            $privateFields = $xml->xpath(implode(' | ', $privateFieldXpaths));

            foreach ($privateFields as &$field) {
                $field[0] = '[Content Removed for Security Reasons]';
            }

            $stringCustomFields = $xml->xpath("//customField[@xsitype='StringCustomFieldRef']");

            foreach ($stringCustomFields as $field) {
                $field->value = '[Content Removed for Security Reasons]';
            }

            $xml_string = str_replace('xsitype', 'xsi:type', $xml->asXML());

            fwrite($Handle, $xml_string);
            fclose($Handle);

            // RESPONSE
            $response = $logFile . '-response.xml';
            $Handle = fopen($response, 'w');
            $Data = $client->__getLastResponse();

            fwrite($Handle, $Data);
            fclose($Handle);
        }
    }
}
