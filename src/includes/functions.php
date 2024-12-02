<?php
namespace Netsuite {

    function arrayValuesAreEmpty($array)
    {
        if (!is_array($array)) {
            return false;
        }

        foreach ($array as $key => $value) {
            if ($value === false || (!is_null($value) && $value != "" && !arrayValuesAreEmpty($value))) {
                return false;
            }
        }

        return true;
    }

    function array_is_associative($array)
    {
        if (is_array($array) && !empty($array)) {
            for ($iterator = count($array) - 1; $iterator; $iterator--) {
                if (!array_key_exists($iterator, $array)) {
                    return true;
                }
            }
            return !array_key_exists(0, $array);
        }
        return false;
    }

}

namespace {

    function setFields($object, ?array $fieldArray=null): void
    {
        // helper method that allows creating objects and setting their properties based on an associative array passed as argument. Mimics functionality from PHP toolkit
        $classname = get_class($object);
        // a static map that maps class parameters to their types. needed for knowing which objects to create
        $typesmap = $classname::$paramtypesmap;

        if (!isset($typesmap)) {
            // if the class does not have paramtypesmap, consider it empty
            $typesmap = [];
        }

        if ($fieldArray == null) {
            // nothign to do
            return;
        }

        foreach ($fieldArray as $fldName => $fldValue) {
            if (((is_null($fldValue) || $fldValue == "") && $fldValue !== false) || Netsuite\arrayValuesAreEmpty($fldValue)) {
                //empty param
                continue;
            }

            if (!isset($typesmap[$fldName])) {
                // the value is not a valid class atrribute
                trigger_error("SetFields error: parameter \"" . $fldName . "\" is not a valid parameter for an object of class \"" . $classname . "\", it will be omitted", E_USER_WARNING);
                continue;
            }

            if ($fldValue === 'false') {
                // taken from the PHP toolkit, but is it really necessary?
                $object->$fldName = false;
            }
            elseif (is_object($fldValue)) {
                $object->$fldName = $fldValue;
            }
            elseif (is_array($fldValue) && Netsuite\array_is_associative($fldValue)) {
                // example: 'itemList'  => array('item' => array($item1, $item2), 'replaceAll'  => false)
                if (substr($typesmap[$fldName], -2) == "[]") {
                    trigger_error("Trying to assign an object into an array parameter \"" . $fldName . "\" of class \"" . $classname . "\", it will be omitted", E_USER_WARNING);
                    continue;
                }
                $class = 'NetSuite\\Classes\\' . $typesmap[$fldName];
                $obj = new $class();
                setFields($obj, $fldValue);
                $object->$fldName = $obj;
            }
            elseif (is_array($fldValue) && !Netsuite\array_is_associative($fldValue)) {
                // array type
                if (substr($typesmap[$fldName], -2) != "[]") {
                    // the type is not an array, skipping this value
                    trigger_error("Trying to assign an array value into parameter \"" . $fldName . "\" of class \"" . $classname . "\", it will be omitted", E_USER_WARNING);
                    continue;
                }

                // get the base type  - the string is of type <type>[]
                $basetype = substr($typesmap[$fldName], 0, -2);

                // example: 'item' => array($item1, $item2)
                foreach ($fldValue as $item) {
                    if (is_object($item)) {
                        // example: $item1 = new nsComplexObject('SalesOrderItem');
                        $val[] = $item;
                    }
                    elseif ($typesmap[$fldName] == "string") {
                        // handle enums
                        $val[] = $item;
                    }
                    else {
                        // example: $item2 = array( 'item'      => new nsComplexObject('RecordRef', array('internalId' => '17')),
                        //                          'quantity'  => '3')
                        $class = 'NetSuite\\Classes\\' . $basetype;
                        $obj = new $class();
                        setFields($obj, $item);
                        $val[] = $obj;
                    }
                }

                $object->$fldName = $val;
            }
            else {
                $object->$fldName = $fldValue;
            }
        }
    }

    function milliseconds()
    {
        $m = explode(' ', microtime());
        return (int)round($m[0]*10000, 4);
    }

    /**
     * @param string $xml_root
     *
     * @return string
     */
    function cleanUpNamespaces($xml_root)
    {
        $xml_root = str_replace('xsi:type', 'xsitype', $xml_root);
        $record_element = new SimpleXMLElement($xml_root);

        foreach ($record_element->getDocNamespaces() as $name => $ns) {
            if ($name != "") {
                $xml_root = str_replace($name . ':', '', $xml_root);
            }
        }

        $record_element = new SimpleXMLElement($xml_root);

        foreach ($record_element->children() as $field) {
            $field_element = new SimpleXMLElement($field->asXML());

            foreach ($field_element->getDocNamespaces() as $name2 => $ns2) {
                if ($name2 != "") {
                    $xml_root = str_replace($name2 . ':', '', $xml_root);
                }
            }
        }

        return $xml_root;
    }

}
