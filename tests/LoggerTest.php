<?php

namespace tests\Netsuite;

use NetSuite\Logger;
use org\bovigo\vfs\vfsStream;
use PHPUnit\Framework\TestCase;
use Prophecy\PhpUnit\ProphecyTrait;

/**
 * @coversDefault \NetSuite\Logger
 */
class LoggerTest extends TestCase
{
    /**
     * @var \org\bovigo\vfs\vfsStreamDirectory
     */
    private $root;

    public function setUp(): void
    {
        parent::setUp();
        $this->root = vfsStream::setup('/app/log');
    }

    public function testLogSoapCall()
    {
        $logger = new Logger('vfs://app/log/');
        $logger->logSoapCall($this->getSoapClient(), 'upsert');

        // Find logs in log directory. scandir() + hack because glob() doesn't support stream wrappers.
        $files = scandir('vfs://app/log/');
        $files = array_filter($files, function (string $file) { return 0 !== strncmp($file, '.', 1); });
        $this->assertCount(2, $files);

        // Find the date.
        $first = current($files);
        preg_match('/netsuite-php-(.*)-upsert/', $first, $matches);
        $this->assertNotEmpty($matches, 'Log matches format');
        $timestamp = $matches[1];

        $this->assertFileExists( "vfs://app/log/netsuite-php-$timestamp-upsert-request.xml");
        $this->assertFileExists( "vfs://app/log/netsuite-php-$timestamp-upsert-response.xml");
        $this->assertEquals(file_get_contents("vfs://app/log/netsuite-php-$timestamp-upsert-request.xml"), "<?xml version=\"1.0\"?>\n<request/>\n");
        // Should this be pretty and cleaned up too?
        $this->assertEquals(file_get_contents("vfs://app/log/netsuite-php-$timestamp-upsert-response.xml"), "<response/>");

        // @todo assert sanitization.
    }

    public function testSetPath()
    {
        $logger = new Logger(null, 'file');
        $logger->setPath($this->root->url());
        $logger->logSoapCall($this->getSoapClient(), 'upsert');
        $this->assertFileExists($this->root->url() . '/file-request.xml');
        $this->assertFileExists($this->root->url() . '/file-response.xml');
    }


    private function getSoapClient($request = '<request/>', $response = '<response/>')
    {
        // This would be easier with prophecy, but it doesn't support "virtual private" methods.
        // @see https://github.com/phpspec/prophecy/issues/108
        $client = $this->getMockBuilder(\SoapClient::class)
            ->disableOriginalConstructor()
            ->getMock();
        $client
            ->method('__getLastRequest')
            ->willReturn($request);
        $client
            ->method('__getLastResponse')
            ->willReturn($response);
        return $client;
    }

}
