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

class TimeBill extends Record {
    public $customForm;
    public $employee;
    public $tranDate;
    public $approvalStatus;
    public $customer;
    public $caseTaskEvent;
    public $isBillable;
    public $payrollItem;
    public $paidExternally;
    public $workplace;
    public $item;
    public $department;
    public $class;
    public $location;
    public $hours;
    public $price;
    public $timeType;
    public $rate;
    public $overrideRate;
    public $temporaryLocalJurisdiction;
    public $temporaryStateJurisdiction;
    public $memo;
    public $rejectionNote;
    public $subsidiary;
    public $supervisorApproval;
    public $createdDate;
    public $lastModifiedDate;
    public $timeSheet;
    public $status;
    public $customFieldList;
    public $internalId;
    public $externalId;
    static $paramtypesmap = array(
        "customForm" => "RecordRef",
        "employee" => "RecordRef",
        "tranDate" => "dateTime",
        "approvalStatus" => "RecordRef",
        "customer" => "RecordRef",
        "caseTaskEvent" => "RecordRef",
        "isBillable" => "boolean",
        "payrollItem" => "RecordRef",
        "paidExternally" => "boolean",
        "workplace" => "RecordRef",
        "item" => "RecordRef",
        "department" => "RecordRef",
        "class" => "RecordRef",
        "location" => "RecordRef",
        "hours" => "Duration",
        "price" => "RecordRef",
        "timeType" => "TimeBillTimeType",
        "rate" => "float",
        "overrideRate" => "boolean",
        "temporaryLocalJurisdiction" => "RecordRef",
        "temporaryStateJurisdiction" => "RecordRef",
        "memo" => "string",
        "rejectionNote" => "string",
        "subsidiary" => "RecordRef",
        "supervisorApproval" => "boolean",
        "createdDate" => "dateTime",
        "lastModifiedDate" => "dateTime",
        "timeSheet" => "RecordRef",
        "status" => "string",
        "customFieldList" => "CustomFieldList",
        "internalId" => "string",
        "externalId" => "string",
    );
}
