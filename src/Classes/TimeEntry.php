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

class TimeEntry extends Record {
    public $hours;
    public $createdDate;
    public $lastModifiedDate;
    public $customer;
    public $caseTaskEvent;
    public $item;
    public $isBillable;
    public $payrollItem;
    public $paidExternally;
    public $price;
    public $rate;
    public $overrideRate;
    public $memo;
    public $department;
    public $class;
    public $location;
    public $billingClass;
    public $subsidiary;
    public $approvalStatus;
    public $timeType;
    public $customFieldList;
    public $internalId;
    public $externalId;
    static $paramtypesmap = array(
        "hours" => "Duration",
        "createdDate" => "dateTime",
        "lastModifiedDate" => "dateTime",
        "customer" => "RecordRef",
        "caseTaskEvent" => "RecordRef",
        "item" => "RecordRef",
        "isBillable" => "boolean",
        "payrollItem" => "RecordRef",
        "paidExternally" => "boolean",
        "price" => "RecordRef",
        "rate" => "float",
        "overrideRate" => "boolean",
        "memo" => "string",
        "department" => "RecordRef",
        "class" => "RecordRef",
        "location" => "RecordRef",
        "billingClass" => "string",
        "subsidiary" => "RecordRef",
        "approvalStatus" => "RecordRef",
        "timeType" => "TimeBillTimeType",
        "customFieldList" => "CustomFieldList",
        "internalId" => "string",
        "externalId" => "string",
    );
}
