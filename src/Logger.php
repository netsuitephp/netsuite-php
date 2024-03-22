<?php

namespace NetSuite;

use Psr\Log\LoggerInterface;
use Psr\Log\LoggerTrait;

class Logger implements LoggerInterface
{
    use LoggerTrait;

    private $path;

    /**
     * @var string
     */
    private $format;

    /**
     * @var string
     */
    private $dateFormat;

    public const DEFAULT_LOG_FORMAT = 'netsuite-php-%date-%operation';
    public const DEFAULT_DATE_FORMAT = 'Ymd.His.u';
    public const TYPE_REQUEST = 'request';
    public const TYPE_RESPONSE = 'response';

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

    public function log($level, $message, array $context = []): void
    {
        $this->writeMessage($message, $context);
    }

    public static function getSoapCallRequestMessage(\SoapClient $client): string
    {
        $data = cleanUpNamespaces($client->__getLastRequest());

        $xml = simplexml_load_string($data, 'SimpleXMLElement', LIBXML_NOCDATA);

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

        foreach ($privateFields as &$privateField) {
            $privateField[0] = '[Content Removed for Security Reasons]';
        }

        $stringCustomFields = $xml->xpath("//customField[@xsitype='StringCustomFieldRef']");

        foreach ($stringCustomFields as $customField) {
            $customField->value = '[Content Removed for Security Reasons]';
        }

        return str_replace('xsitype', 'xsi:type', $xml->asXML());
    }

    public static function getSoapCallResponseMessage(\SoapClient $client): ?string
    {
        return $client->__getLastResponse();
    }

    /**
     * Log the last soap call as request and response XML files.
     *
     * @deprecated Left for backward compatibility only. Use PSR/Log interface instead
     *
     * @param \SoapClient $client
     * @param string $operation
     */
    public function logSoapCall($client, $operation)
    {
        $this->writeMessage(
            static::getSoapCallRequestMessage($client),
            ['operation' => $operation, 'type' => self::TYPE_REQUEST]
        );

        $this->writeMessage(
            static::getSoapCallResponseMessage($client) ?? '',
            ['operation' => $operation, 'type' => self::TYPE_RESPONSE]
        );
    }

    private function writeMessage(string $message, array $context): void
    {
        if (!file_exists($this->path)) {
            return;
        }

        $fileName = strtr($this->format, [
            '%date' => (new \DateTime())->format($this->dateFormat),
            '%operation' => $context['operation'] ?? 'log',
        ]);

        $logFile = $this->path . DIRECTORY_SEPARATOR . $fileName;

        if (isset($context['type'])) {
            $logFile .= '-' . $context['type'];
        }

        file_put_contents("{$logFile}.xml", $message . PHP_EOL, FILE_APPEND);
    }
}
