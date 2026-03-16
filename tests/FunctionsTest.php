<?php

namespace tests\Netsuite;

use PHPUnit\Framework\TestCase;

class FunctionsTest extends TestCase
{
    // --- arrayValuesAreEmpty ---

    public function testArrayValuesAreEmptyWithEmptyArray()
    {
        $this->assertTrue(\Netsuite\arrayValuesAreEmpty([]));
    }

    public function testArrayValuesAreEmptyWithNullValues()
    {
        $this->assertTrue(\Netsuite\arrayValuesAreEmpty(['a' => null, 'b' => null]));
    }

    public function testArrayValuesAreEmptyWithEmptyStrings()
    {
        $this->assertTrue(\Netsuite\arrayValuesAreEmpty(['a' => '', 'b' => '']));
    }

    public function testArrayValuesAreEmptyWithNonEmptyValues()
    {
        $this->assertFalse(\Netsuite\arrayValuesAreEmpty(['a' => 'hello']));
    }

    public function testArrayValuesAreEmptyWithFalseValue()
    {
        $this->assertFalse(\Netsuite\arrayValuesAreEmpty(['a' => false]));
    }

    public function testArrayValuesAreEmptyWithNestedEmptyArrays()
    {
        $this->assertTrue(\Netsuite\arrayValuesAreEmpty(['a' => ['b' => null]]));
    }

    public function testArrayValuesAreEmptyWithNonArrayReturnsFalse()
    {
        $this->assertFalse(\Netsuite\arrayValuesAreEmpty('string'));
    }

    // --- array_is_associative ---

    public function testArrayIsAssociativeWithAssociativeArray()
    {
        $this->assertTrue(\Netsuite\array_is_associative(['key' => 'value']));
    }

    public function testArrayIsAssociativeWithIndexedArray()
    {
        $this->assertFalse(\Netsuite\array_is_associative(['a', 'b', 'c']));
    }

    public function testArrayIsAssociativeWithEmptyArray()
    {
        $this->assertFalse(\Netsuite\array_is_associative([]));
    }

    public function testArrayIsAssociativeWithNonArray()
    {
        $this->assertFalse(\Netsuite\array_is_associative('string'));
    }

    public function testArrayIsAssociativeWithMixedKeys()
    {
        $this->assertTrue(\Netsuite\array_is_associative([0 => 'a', 'key' => 'b']));
    }

    // --- setFields ---

    public function testSetFieldsWithSimpleScalarValues()
    {
        $ref = new \NetSuite\Classes\RecordRef();
        setFields($ref, ['internalId' => '123', 'externalId' => '456']);

        $this->assertEquals('123', $ref->internalId);
        $this->assertEquals('456', $ref->externalId);
    }

    public function testSetFieldsWithNullDoesNothing()
    {
        $ref = new \NetSuite\Classes\RecordRef();
        setFields($ref, null);

        $this->assertNull($ref->internalId);
    }

    public function testSetFieldsSkipsEmptyValues()
    {
        $ref = new \NetSuite\Classes\RecordRef();
        setFields($ref, ['internalId' => '', 'externalId' => '456']);

        $this->assertNull($ref->internalId);
        $this->assertEquals('456', $ref->externalId);
    }

    public function testSetFieldsWithNestedAssociativeArray()
    {
        $item = new \NetSuite\Classes\SalesOrderItem();
        setFields($item, [
            'item' => ['internalId' => '42'],
        ]);

        $this->assertInstanceOf(\NetSuite\Classes\RecordRef::class, $item->item);
        $this->assertEquals('42', $item->item->internalId);
    }

    public function testSetFieldsWithObjectValue()
    {
        $ref = new \NetSuite\Classes\RecordRef();
        $ref->internalId = '99';

        $item = new \NetSuite\Classes\SalesOrderItem();
        setFields($item, ['item' => $ref]);

        $this->assertSame($ref, $item->item);
    }

    public function testSetFieldsWarnsOnInvalidParameter()
    {
        $ref = new \NetSuite\Classes\RecordRef();

        $warning = null;
        set_error_handler(function (int $errno, string $errstr) use (&$warning) {
            $warning = $errstr;
            return true;
        }, E_USER_WARNING);

        try {
            setFields($ref, ['nonExistent' => 'value']);
        } finally {
            restore_error_handler();
        }

        $this->assertNotNull($warning);
        $this->assertStringContainsString('SetFields error: parameter "nonExistent" is not a valid parameter', $warning);
    }

    public function testSetFieldsWithFalseStringValue()
    {
        $ref = new \NetSuite\Classes\RecordRef();
        setFields($ref, ['internalId' => 'false']);

        $this->assertFalse($ref->internalId);
    }

    // --- cleanUpNamespaces ---

    public function testCleanUpNamespacesRemovesPrefixes()
    {
        $xml = '<?xml version="1.0"?>'
            . '<soapenv:Envelope xmlns:soapenv="http://schemas.xmlsoap.org/soap/envelope/"'
            . ' xmlns:platformMsgs="urn:messages">'
            . '<soapenv:Body><platformMsgs:add>'
            . '<record xsi:type="Customer"/>'
            . '</platformMsgs:add></soapenv:Body></soapenv:Envelope>';

        $result = cleanUpNamespaces($xml);

        $this->assertStringNotContainsString('soapenv:', $result);
        $this->assertStringNotContainsString('platformMsgs:', $result);
        $this->assertStringContainsString('xsitype', $result);
    }

    public function testCleanUpNamespacesPreservesXsiType()
    {
        $xml = '<?xml version="1.0"?>'
            . '<Envelope xmlns:ns="urn:test">'
            . '<ns:Body><record xsi:type="SomeType"/></ns:Body></Envelope>';

        $result = cleanUpNamespaces($xml);

        $this->assertStringContainsString('xsitype', $result);
    }
}
