<?php

/**
 * @author Ryan Winchester (fungku)
 * @license Apache 2.0
 */

$file = file_get_contents('../original/PHPToolkit/NetSuiteService.php');

// Remove opening php tag
$file = str_replace('<?php', '', $file);

// Remove closing php tag
$file = str_replace('?>', '', $file);

// Remove "class_exists" conditionals
$file = preg_replace('/.+class_exists.+/', '', $file);

// Remove the trailing conditional bracket
$file = str_replace('}}', '}', $file);

// Remove the service class before removing the rest
$file = extractServiceClass($file);

// Remove doc blocks
$file = preg_replace('/\/?\*+.+/', '', $file);

// Remove extra whitespace
$file = preg_replace("/^\s{2,}$/m", "\n", $file);

// Remove extra linebreaks
$file = preg_replace("/[\r\n]+/", "\n", $file);

// Split the classes to an array
$files = explode("class ", $file);
array_shift($files);

// Make files for each class
array_walk($files, function($value, $key) {
    preg_match('~([^ ]+)~', $value, $name);
    $filename = '../src/Classes/' . $name[0].'.php';
    $php_tag = '<?php';
    $template = <<<PHP
$php_tag

class $value

PHP;
    file_put_contents($filename, $template);
});

function extractServiceClass($file)
{
    $classes = explode("class ", $file); // separate classes into array
    $serviceClass = array_pop($classes); // pick out the last one, the service class

    // Pick out the Class map array and store it in a file
    preg_match('~\$classmap \= ([^;]+)~', $serviceClass, $classmap);
    makeClassmapFile($classmap[1]);

    // Remove the class map from the service class
    $serviceClass = preg_replace('~\/\*\*\W+Class map[^\;]+\;~', '', $serviceClass);

    // Remove the constructor from the service class
    $serviceClass = preg_replace('~\/\*\*?\W+Constructor[^\}]+\}~', '', $serviceClass);

    // Update the name of netsuite service
    $serviceClass = str_replace('NSPHPClient', 'NetsuiteClient', $serviceClass);

    // Store the NetsuiteService class
    makeServiceClassFile($serviceClass);

    // return the file
    return implode("class ", $classes);
}

function makeServiceClassFile($serviceClass)
{
    $php_tag = '<?php';
    $template = <<<PHP
$php_tag

class $serviceClass

PHP;
    // Save the serviceClass file.
    return file_put_contents('../src/NetsuiteService.php', $template);
}

function makeClassmapFile($classmap)
{
    $php_tag = '<?php';
    $template = <<<PHP
$php_tag

return $classmap;

PHP;
    // Save the classmap as a file.
    return file_put_contents('../src/includes/classmap.php', $template);
}


echo "good";
