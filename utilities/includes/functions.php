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

function base_path()
{
    return realpath(__DIR__.'/../..');
}

function app_path()
{
    return base_path().'/src';
}

function includes_path()
{
    return base_path().'/src/includes';
}

function utilities_path()
{
    return base_path().'/utilities';
}
