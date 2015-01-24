<?php

require_once "functions.php";

class ClassSeparator
{
    private $file;

    function __construct($file)
    {
        $this->file = file_get_contents($file);
    }

    public function separate()
    {
        $this->removePHPTags();
        $this->removeClassExistsConditionals();

        $this->extractServiceClass();

        $this->removeDocBlocks();
        $this->removeWhiteSpace();

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
        $this->makeClassmapFile($classmap[1]);

        // Remove the class map from the service class
        $serviceClass = preg_replace('~\/\*\*\W+Class map[^\;]+\;~', '', $serviceClass);

        // Remove the constructor from the service class
        $serviceClass = preg_replace('~\/\*\*?\W+Constructor[^\}]+\}~', '', $serviceClass);

        // Update the name of netsuite service
        $serviceClass = str_replace('NSPHPClient', 'NetSuiteClient', $serviceClass);

        // Store the NetsuiteService class
        $this->makeServiceClassFile($serviceClass);

        $this->file = implode("class ", $classes);
    }

    private function makeClassmapFile($classmap)
    {
        $template = include "includes/templates/classmap.template.php";
        return file_put_contents(includes_path() . '/classmap.php', $template);
    }

    private function makeServiceClassFile($serviceClass)
    {
        $template = include "includes/templates/netsuiteservice.template.php";
        return file_put_contents(app_path() . '/NetSuiteService.php', $template);
    }

    private function removeDocBlocks()
    {
        $this->file = preg_replace('/\/?\*+.+/', '', $this->file);
    }

    private function removeWhiteSpace()
    {
        // Remove extra whitespace
        $this->file = preg_replace("/^\s{2,}$/m", "\n", $this->file);
        // Remove extra linebreaks
        $this->file = preg_replace("/[\r\n]+/", "\n", $this->file);
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
        return array_walk($classes, function($class) {
            preg_match('~([^ ]+)~', $class, $name);
            $filename = '../src/Classes/' . $name[0] . '.php';
            $template = include utilities_path() . "/includes/templates/class.template.php";
            file_put_contents($filename, $template);
        });
    }
}