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

class TimeEntrySearchRowBasic extends SearchRowBasic {
    public $approvalStatus;
    public $billingClass;
    public $billingStatus;
    public $break;
    public $caseTaskEvent;
    public $class;
    public $classNoHierarchy;
    public $customer;
    public $date;
    public $dateCreated;
    public $department;
    public $departmentNoHierarchy;
    public $durationDecimal;
    public $employee;
    public $endTime;
    public $externalId;
    public $hours;
    public $internalId;
    public $isBillable;
    public $isExempt;
    public $isProductive;
    public $isUtilized;
    public $item;
    public $lastModified;
    public $location;
    public $locationNoHierarchy;
    public $memo;
    public $nextApprover;
    public $paidExternally;
    public $payItem;
    public $payrollDate;
    public $rate;
    public $startTime;
    public $subsidiary;
    public $subsidiaryNoHierarchy;
    public $timeSheet;
    public $type;
    public $customFieldList;
    static $paramtypesmap = array(
        "approvalStatus" => "SearchColumnSelectField[]",
        "billingClass" => "SearchColumnSelectField[]",
        "billingStatus" => "SearchColumnStringField[]",
        "break" => "SearchColumnStringField[]",
        "caseTaskEvent" => "SearchColumnSelectField[]",
        "class" => "SearchColumnSelectField[]",
        "classNoHierarchy" => "SearchColumnSelectField[]",
        "customer" => "SearchColumnSelectField[]",
        "date" => "SearchColumnDateField[]",
        "dateCreated" => "SearchColumnDateField[]",
        "department" => "SearchColumnSelectField[]",
        "departmentNoHierarchy" => "SearchColumnSelectField[]",
        "durationDecimal" => "SearchColumnDoubleField[]",
        "employee" => "SearchColumnSelectField[]",
        "endTime" => "SearchColumnDateField[]",
        "externalId" => "SearchColumnSelectField[]",
        "hours" => "SearchColumnStringField[]",
        "internalId" => "SearchColumnSelectField[]",
        "isBillable" => "SearchColumnBooleanField[]",
        "isExempt" => "SearchColumnBooleanField[]",
        "isProductive" => "SearchColumnBooleanField[]",
        "isUtilized" => "SearchColumnBooleanField[]",
        "item" => "SearchColumnStringField[]",
        "lastModified" => "SearchColumnDateField[]",
        "location" => "SearchColumnSelectField[]",
        "locationNoHierarchy" => "SearchColumnSelectField[]",
        "memo" => "SearchColumnStringField[]",
        "nextApprover" => "SearchColumnSelectField[]",
        "paidExternally" => "SearchColumnBooleanField[]",
        "payItem" => "SearchColumnSelectField[]",
        "payrollDate" => "SearchColumnDateField[]",
        "rate" => "SearchColumnDoubleField[]",
        "startTime" => "SearchColumnDateField[]",
        "subsidiary" => "SearchColumnStringField[]",
        "subsidiaryNoHierarchy" => "SearchColumnStringField[]",
        "timeSheet" => "SearchColumnStringField[]",
        "type" => "SearchColumnEnumSelectField[]",
        "customFieldList" => "SearchColumnCustomFieldList",
    );
}
