<?php
/**
 * This file is part of the netsuitephp/netsuite-php library.
 *
 * @package    ryanwinchester/netsuite-php
 * @author     Ryan Winchester <fungku@gmail.com>
 * @copyright  Copyright (c) Ryan Winchester
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache-2.0
 * @link       https://github.com/netsuitephp/netsuite-php
 * created:    2015-01-22  1:04 PM
 */

require_once "includes/functions.php";
require "includes/ClassSeparator.php";

$file = base_path() . "/original/PHPToolkit/NetSuiteService.php";
if (!file_exists($file)) {
    echo 'Original PHP Toolkit does not exist.' . PHP_EOL;
    echo 'Please download the toolkit and unzip it into the "original" directory.' . PHP_EOL;
    echo PHP_EOL;
    echo 'https://www.netsuite.com/portal/developers/resources/suitetalk-sample-applications.shtml' . PHP_EOL;
    echo PHP_EOL;
    return 1;
}

foreach (glob(base_path() . '/src/Classes/*') as $rm_file) {
    @unlink($rm_file);
}

// Load the NS_ENDPOINT const for generating the NetSuiteService class
require base_path() . "/original/PHPToolkit/NSconfig.php";
$separator = new ClassSeparator($file);

if ($separator->separate()) {
    echo PHP_EOL. 'Good!' .PHP_EOL;
} else {
    echo PHP_EOL. 'Bad!' .PHP_EOL;
}
