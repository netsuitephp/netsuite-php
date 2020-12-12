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

class EmployeeEarning {
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $payrollItem;
    /**
     * @var string
     */
    public $payRate;
    /**
     * @var boolean
     */
    public $primaryEarning;
    /**
     * @var float
     */
    public $defaultHours;
    /**
     * @var boolean
     */
    public $inactive;
    /**
     * @var boolean
     */
    public $defaultEarning;
    /**
     * @var string
     */
    public $effectiveDate;
    /**
     * @var string
     */
    public $expirationDate;
    static $paramtypesmap = array(
        "payrollItem" => "RecordRef",
        "payRate" => "string",
        "primaryEarning" => "boolean",
        "defaultHours" => "float",
        "inactive" => "boolean",
        "defaultEarning" => "boolean",
        "effectiveDate" => "dateTime",
        "expirationDate" => "dateTime",
    );
}
