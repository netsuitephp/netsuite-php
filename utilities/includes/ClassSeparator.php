<?php
/**
 * This file is part of the SevenShores/NetSuite library.
 *
 * @package    ryanwinchester/netsuite-php
 * @author     Ryan Winchester <fungku@gmail.com>
 * @copyright  Copyright (c) Ryan Winchester
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache-2.0
 * @link       https://github.com/ryanwinchester/netsuite-php
 * created:    2015-01-22  1:04 PM
 */

require_once "functions.php";

class ClassSeparator
{
    private $file;
    private $generated_at;

    function __construct($file)
    {
        $this->file = file_get_contents($file);
        $this->generated_at = date("Y-m-d h:i:s A T");
    }

    public function separate()
    {
        $this->removePHPTags();
        $this->removeClassExistsConditionals();

        $this->extractServiceClass();

        $this->removeDocBlocks();
        $this->file = $this->removeWhiteSpace($this->file);
        $this->file = $this->replaceTabsWithSpaces($this->file);

        $classes = $this->classesToArray();

        return $this->writeClassesToFiles($classes);
    }

    private function removePHPTags()
    {
        // Remove opening php tag
        $this->file = str_replace('<?php', '', $this->file);
        // Remove closing php tag
        $this->file = str_replace('?>', '', $this->file);
    }

    private function removeClassExistsConditionals()
    {
        // Remove "class_exists" conditionals
        $this->file = preg_replace('/.+class_exists.+/', '', $this->file);
        // Remove the trailing conditional bracket
        $this->file = str_replace('}}', '}', $this->file);
    }

    private function extractServiceClass()
    {
        $classes = explode("class ", $this->file); // separate classes into array
        $serviceClass = array_pop($classes); // pick out the last one, the service class

        // Pick out the Class map array and store it in a file
        preg_match('~\$classmap \= ([^;]+)~', $serviceClass, $classmap);
        $classmap = str_replace('=> "', '=> "NetSuite\\\\Classes\\\\', $classmap[1]);
        $this->makeClassmapFile($classmap);

        // Remove the class map from the service class
        $serviceClass = preg_replace('~\/\*\*\W+Class map[^\;]+\;~', '', $serviceClass);

        // Remove the constructor from the service class
        $serviceClass = preg_replace('~\/\*\*?\W+Constructor[^\}]+\}~', '', $serviceClass);

        // Update the name of netsuite service
        $serviceClass = str_replace('NSPHPClient', 'NetSuiteClient', $serviceClass);

        // Add namespace prefix to docblock parameter
        $serviceClass = preg_replace('~(@return)\s+~', '$1 Classes\\', $serviceClass);

        // Add variable name to docblock parameter
        $serviceClass = preg_replace('~(@return.+)~', '$1 $arg', $serviceClass);

        // Add namespace prefix to method typehint
        $serviceClass = preg_replace('~(public function \w+\()~', '$1Classes\\', $serviceClass);

        // Remove extra whitespace
        $serviceClass = preg_replace("/^\s{2,}$/m", "\n", $serviceClass);

        // Remove extra linebreaks
        $serviceClass = preg_replace("/[\r\n]{3,}/", "\r\n\r\n", $serviceClass);

        $serviceClass = $this->replaceTabsWithSpaces($serviceClass);

        // Store the NetsuiteService class
        $this->makeServiceClassFile($serviceClass);

        $this->file = implode("class ", $classes);
    }

    private function replaceTabsWithSpaces($string)
    {
        return preg_replace('~\t~', '    ', $string);
    }

    private function makeClassmapFile($classmap)
    {
        $date = $this->generated_at;
        $template = include utilities_path() . "/includes/templates/classmap.template.php";

        return file_put_contents(includes_path() . '/classmap.php', $template);
    }

    private function makeServiceClassFile($serviceClass)
    {
        $template = include utilities_path() . "/includes/templates/netsuiteservice.template.php";
        $template = preg_replace(
            '/NS_ENDPOINT;/',
            sprintf("'%s';", NS_ENDPOINT),
            $template
        );

        return file_put_contents(app_path() . '/NetSuiteService.php', $template);
    }

    private function removeDocBlocks()
    {
        $this->file = preg_replace('/\/?\*+.+/', '', $this->file);
    }

    private function removeWhiteSpace($string)
    {
        // Remove extra whitespace
        $string = preg_replace("/^\s{2,}$/m", "\n", $string);

        // Remove extra linebreaks
        return preg_replace("/[\r\n]+/", "\n", $string);
    }

    /**
     * @return array
     */
    private function classesToArray()
    {
        $classes = explode("class ", $this->file);
        array_shift($classes); // The first one is always empty
        return $classes;
    }

    /**
     * @param array $classes
     * @return bool
     */
    private function writeClassesToFiles(array $classes)
    {
        $date = $this->generated_at;

        return array_walk($classes, function ($class) use ($date) {
            $tokens = array_filter(token_get_all('<?php class ' . $class), function ($token) {
                return !(!is_array($token) || $token[0] == T_WHITESPACE);
            });
            $types = array();
            while ($token = current($tokens)) {
                // If this is the class definition, grab the name.
                if ($token[0] === T_CLASS) {
                    $token = next($tokens);
                    $name = $token[1];
                }
                // If we see the variable definition for the special
                // "paramtypesmap" property that defines all the other property
                // types then start parsing out those types.
                if ($token[0] === T_VARIABLE && $token[1] == '$paramtypesmap') {
                    while ($type_token = next($tokens)) {
                        // Throw out the opening array tag.
                        if ($type_token[0] === T_ARRAY) {
                            continue;
                        }
                        // This looks like a type definition.
                        if ($type_token[0] === T_CONSTANT_ENCAPSED_STRING) {
                            // Store the key as the property name.
                            $property_name = trim($type_token[1], '"');
                            // Throw away the => separator.
                            next($tokens);
                            // Store the value as the type.
                            $type_token = next($tokens);
                            // Store the values as the property type.
                            $property_type = trim($type_token[1], '"');
                            // If this is describing a scalar value, just use it.
                            if (FALSE !== array_search(
                                str_replace(array('[',']'), '', $property_type),
                                array('string', 'integer', 'boolean', 'float')
                            )) {
                                $types[$property_name] = $property_type;
                            }
                            // Date time is really a string containing a date.
                            elseif ($property_type == 'dateTime' || $property_type == 'dateTime[]') {
                                $types[$property_name] = str_replace('dateTime', 'string', $property_type);
                            }
                            // This is a NetSuite value so map it to a class.
                            else {
                                $types[$property_name] = '\\NetSuite\\Classes\\' . $property_type;
                            }
                        }
                        // We've fallen out of the array definition so continue.
                        else {
                            $token = $type_token;
                            break;
                        }
                    }
                }
                next($tokens);
            }
            // Add a doc comment for each property.
            foreach ($types as $variable_name => $property_type) {
                $class = preg_replace('/public \$' . $variable_name . ';/', "/**\n     * @var $property_type\n     */\n    public \$$variable_name;", $class);
            }
            // Template write the class.
            $filename = base_path() . '/src/Classes/' . $name . '.php';
            $template = include utilities_path() . '/includes/templates/class.template.php';
            file_put_contents($filename, $template);
        });
    }
}
