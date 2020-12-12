<?php
/**
 * This file is part of the SevenShores/NetSuite library
 * AND originally from the NetSuite PHP Toolkit.
 *
 * New content:
 * @package    ryanwinchester/netsuite-php
 * @copyright  Copyright (c) Ryan Winchester
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache-2.0
 * @link       https://github.com/ryanwinchester/netsuite-php
 *
 * Original content:
 * @copyright  Copyright (c) NetSuite Inc.
 * @license    https://raw.githubusercontent.com/ryanwinchester/netsuite-php/master/original/NetSuite%20Application%20Developer%20License%20Agreement.txt
 * @link       http://www.netsuite.com/portal/developers/resources/suitetalk-sample-applications.shtml
 *
 * generated:  2020-12-11 06:57:10 PM PST
 */

namespace NetSuite\Classes;

class UnitsTypeUom {
    /**
     * @var string
     */
    public $internalId;
    /**
     * @var string
     */
    public $unitName;
    /**
     * @var string
     */
    public $pluralName;
    /**
     * @var string
     */
    public $abbreviation;
    /**
     * @var string
     */
    public $pluralAbbreviation;
    /**
     * @var float
     */
    public $conversionRate;
    /**
     * @var boolean
     */
    public $baseUnit;
    static $paramtypesmap = array(
        "internalId" => "string",
        "unitName" => "string",
        "pluralName" => "string",
        "abbreviation" => "string",
        "pluralAbbreviation" => "string",
        "conversionRate" => "float",
        "baseUnit" => "boolean",
    );
}
