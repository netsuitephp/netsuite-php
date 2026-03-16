<?php

namespace tests\Netsuite;

use NetSuite\NetSuiteClient;
use PHPUnit\Framework\TestCase;

class NetSuiteClientTest extends TestCase
{
    private function validConfig(): array
    {
        return [
            'endpoint'       => '2025_2',
            'host'           => 'https://webservices.sandbox.netsuite.com',
            'account'        => 'TESTACCT',
            'consumerKey'    => 'consumer-key',
            'consumerSecret' => 'consumer-secret',
            'token'          => 'token-id',
            'tokenSecret'    => 'token-secret',
        ];
    }

    public function testValidateConfigPassesWithRequiredKeys()
    {
        $client = new NetSuiteClient($this->validConfig(), [], $this->createMock(\SoapClient::class));
        $this->assertTrue(true);
    }

    /**
     * @dataProvider missingConfigKeyProvider
     */
    public function testValidateConfigThrowsOnMissingKey(string $missingKey)
    {
        $this->expectException(\RuntimeException::class);
        $this->expectExceptionMessage('Config key missing: ' . $missingKey);

        $config = $this->validConfig();
        unset($config[$missingKey]);

        new NetSuiteClient($config, [], $this->createMock(\SoapClient::class));
    }

    public static function missingConfigKeyProvider(): array
    {
        return [
            'endpoint'       => ['endpoint'],
            'host'           => ['host'],
            'account'        => ['account'],
            'token'          => ['token'],
            'tokenSecret'    => ['tokenSecret'],
            'consumerKey'    => ['consumerKey'],
            'consumerSecret' => ['consumerSecret'],
        ];
    }

    public function testValidateConfigThrowsOnEmptyValue()
    {
        $this->expectException(\RuntimeException::class);
        $this->expectExceptionMessage('Config key missing: account');

        $config = $this->validConfig();
        $config['account'] = '';

        new NetSuiteClient($config, [], $this->createMock(\SoapClient::class));
    }

    public function testGetEnvConfigReturnsDefaults()
    {
        $envVars = [
            'NETSUITE_ENDPOINT', 'NETSUITE_HOST', 'NETSUITE_EMAIL',
            'NETSUITE_PASSWORD', 'NETSUITE_ROLE', 'NETSUITE_ACCOUNT',
            'NETSUITE_APP_ID', 'NETSUITE_LOGGING', 'NETSUITE_LOG_PATH',
            'NETSUITE_LOG_FORMAT', 'NETSUITE_LOG_DATEFORMAT',
            'NETSUITE_CONSUMER_KEY', 'NETSUITE_CONSUMER_SECRET',
            'NETSUITE_TOKEN_KEY', 'NETSUITE_TOKEN_SECRET',
            'NETSUITE_HASH_TYPE',
        ];
        $original = [];
        foreach ($envVars as $var) {
            $original[$var] = getenv($var);
            putenv($var);
        }

        try {
            $config = NetSuiteClient::getEnvConfig();

            $this->assertEquals('2021_1', $config['endpoint']);
            $this->assertEquals('https://webservices.sandbox.netsuite.com', $config['host']);
            $this->assertEquals('3', $config['role']);
            $this->assertArrayNotHasKey('consumerKey', $config);
            $this->assertArrayNotHasKey('consumerSecret', $config);
            $this->assertArrayNotHasKey('token', $config);
            $this->assertArrayNotHasKey('tokenSecret', $config);
        } finally {
            foreach ($original as $var => $val) {
                if ($val !== false) {
                    putenv("$var=$val");
                }
            }
        }
    }

    public function testGetEnvConfigReadsEnvVars()
    {
        $original = [];
        $setVars = [
            'NETSUITE_ENDPOINT' => '2025_2',
            'NETSUITE_ACCOUNT' => 'MYACCT',
            'NETSUITE_CONSUMER_KEY' => 'ck-123',
            'NETSUITE_CONSUMER_SECRET' => 'cs-456',
            'NETSUITE_TOKEN_KEY' => 'tk-789',
            'NETSUITE_TOKEN_SECRET' => 'ts-012',
            'NETSUITE_HASH_TYPE' => 'sha256',
        ];
        foreach ($setVars as $var => $val) {
            $original[$var] = getenv($var);
            putenv("$var=$val");
        }

        try {
            $config = NetSuiteClient::getEnvConfig();

            $this->assertEquals('2025_2', $config['endpoint']);
            $this->assertEquals('MYACCT', $config['account']);
            $this->assertEquals('ck-123', $config['consumerKey']);
            $this->assertEquals('cs-456', $config['consumerSecret']);
            $this->assertEquals('tk-789', $config['token']);
            $this->assertEquals('ts-012', $config['tokenSecret']);
            $this->assertEquals('sha256', $config['signatureAlgorithm']);
        } finally {
            foreach ($original as $var => $val) {
                if ($val !== false) {
                    putenv("$var=$val");
                } else {
                    putenv($var);
                }
            }
        }
    }
}
