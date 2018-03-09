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
 * generated:  2017-08-01 09:12:52 PM UTC
 */

namespace NetSuite\Classes;

class TimeItem {
    public $id;
    public $employee;
    public $timeType;
    public $tranDate;
    public $customer;
    public $isBillable;
    public $payrollItem;
    public $item;
    public $temporaryLocalJurisdiction;
    public $temporaryStateJurisdiction;
    public $department;
    public $class;
    public $location;
    public $hours;
    public $price;
    public $rate;
    public $overrideRate;
    public $hoursTotal;
    public $caseTaskEvent;
    public $memo;
    public $isUtilized;
    public $isProductive;
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
