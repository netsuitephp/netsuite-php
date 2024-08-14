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
        foreach ($files as $file) {
            preg_match('/netsuite-php-(.*)-upsert-(.*).xml$/', $file, $matches);
            $real_file = 'vfs://app/log/' . $file;
            $this->assertNotEmpty($matches, 'Log matches format');
            $this->assertFileExists($real_file);
            if ($matches[2] === 'request') {
                $this->assertEquals(
                    "<?xml version=\"1.0\"?>\n<request/>\n\n",
                    file_get_contents($real_file),
                );
            }
            elseif (preg_match('/netsuite-php-(.*)-upsert-(.*).xml$/', $file, $matches)) {
                $this->assertEquals(
                    "<response/>\n",
                    file_get_contents($real_file),
                );
            }
        }
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
