<?php

namespace tests\Netsuite;

use PHPUnit\Framework\TestCase;

/**
 * SoapClient's classmap keys on the local type name only, so a type that shares its name with a type in
 * another namespace (generated as Name_namespace, not in the classmap) is hydrated into Name's class.
 */
class SameNameTypesTest extends TestCase
{
    /**
     * @dataProvider sameNameTypes
     */
    public function testTheMappedClassDeclaresThePropertiesOfTheTypeSharingItsName($mappedClass, $otherClass)
    {
        foreach (array_keys(get_class_vars($otherClass)) as $property) {
            $this->assertTrue(
                property_exists($mappedClass, $property),
                "$mappedClass is missing \$$property from $otherClass"
            );
        }
    }

    public static function sameNameTypes()
    {
        $classmap = require __DIR__ . '/../src/includes/classmap.php';
        $types = [];
        foreach (glob(__DIR__ . '/../src/Classes/*_*.php') as $file) {
            $class = basename($file, '.php');
            $name = substr($class, 0, strrpos($class, '_'));
            if (isset($classmap[$name])) {
                $types[$class] = [$classmap[$name], 'NetSuite\\Classes\\' . $class];
            }
        }

        return $types;
    }
}
