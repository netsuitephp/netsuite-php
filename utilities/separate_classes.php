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

require_once "includes/functions.php";
require "includes/ClassSeparator.php";

// Load the NS_ENDPOINT const for generating the NetSuiteService class
require base_path() . "/original/PHPToolkit/NSconfig.php";

$file = base_path() . "/original/PHPToolkit/NetSuiteService.php";

$separator = new ClassSeparator($file);

if ($separator->separate()) {
    echo PHP_EOL. 'Good!' .PHP_EOL;
} else {
    echo PHP_EOL. 'Bad!' .PHP_EOL;
}
