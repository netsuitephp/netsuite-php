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

class TimeItem {
    /**
     * @var integer
     */
    public $id;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $employee;
    /**
     * @var \NetSuite\Classes\TimeItemTimeType
     */
    public $timeType;
    /**
     * @var string
     */
    public $tranDate;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $customer;
    /**
     * @var boolean
     */
    public $isBillable;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $payrollItem;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $item;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $temporaryLocalJurisdiction;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $temporaryStateJurisdiction;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $department;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $class;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $location;
    /**
     * @var \NetSuite\Classes\Duration
     */
    public $hours;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $price;
    /**
     * @var float
     */
    public $rate;
    /**
     * @var boolean
     */
    public $overrideRate;
    /**
     * @var \NetSuite\Classes\Duration
     */
    public $hoursTotal;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $caseTaskEvent;
    /**
     * @var string
     */
    public $memo;
    /**
     * @var boolean
     */
    public $isUtilized;
    /**
     * @var boolean
     */
    public $isProductive;
    /**
     * @var boolean
     */
    public $isExempt;
    static $paramtypesmap = array(
        "id" => "integer",
        "employee" => "RecordRef",
        "timeType" => "TimeItemTimeType",
        "tranDate" => "dateTime",
        "customer" => "RecordRef",
        "isBillable" => "boolean",
        "payrollItem" => "RecordRef",
        "item" => "RecordRef",
        "temporaryLocalJurisdiction" => "RecordRef",
        "temporaryStateJurisdiction" => "RecordRef",
        "department" => "RecordRef",
        "class" => "RecordRef",
        "location" => "RecordRef",
        "hours" => "Duration",
        "price" => "RecordRef",
        "rate" => "float",
        "overrideRate" => "boolean",
        "hoursTotal" => "Duration",
        "caseTaskEvent" => "RecordRef",
        "memo" => "string",
        "isUtilized" => "boolean",
        "isProductive" => "boolean",
        "isExempt" => "boolean",
    );
}
