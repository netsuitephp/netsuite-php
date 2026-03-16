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
}
