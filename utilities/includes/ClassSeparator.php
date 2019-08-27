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
        $date = $this->generated_at;
        $template = include utilities_path() . "/includes/templates/netsuiteservice.template.php";

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
            preg_match('~([^ ]+)~', $class, $name);
            $filename = base_path() . '/src/Classes/' . $name[0] . '.php';
            $template = include utilities_path() . "/includes/templates/class.template.php";
            file_put_contents($filename, $template);
        });
    }
}
