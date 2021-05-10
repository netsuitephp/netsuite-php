<?php
/**
 * This file is part of the netsuitephp/netsuite-php library
 * AND originally from the NetSuite PHP Toolkit.
 *
 * New content:
 * @package    ryanwinchester/netsuite-php
 * @copyright  Copyright (c) Ryan Winchester
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache-2.0
 * @link       https://github.com/netsuitephp/netsuite-php
 *
 * Original content:
 * @copyright  Copyright (c) NetSuite Inc.
 * @license    https://raw.githubusercontent.com/netsuitephp/netsuite-php/master/original/NetSuite%20Application%20Developer%20License%20Agreement.txt
 * @link       http://www.netsuite.com/portal/developers/resources/suitetalk-sample-applications.shtml
 */

namespace NetSuite\Classes;

class TimeEntrySearchRowBasic extends SearchRowBasic {
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $approvalStatus;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $billingClass;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $billingStatus;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $break;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $caseTaskEvent;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $class;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $classNoHierarchy;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $customer;
    /**
     * @var \NetSuite\Classes\SearchColumnDateField[]
     */
    public $date;
    /**
     * @var \NetSuite\Classes\SearchColumnDateField[]
     */
    public $dateCreated;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $department;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $departmentNoHierarchy;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $durationDecimal;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $employee;
    /**
     * @var \NetSuite\Classes\SearchColumnDateField[]
     */
    public $endTime;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $externalId;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $hours;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $internalId;
    /**
     * @var \NetSuite\Classes\SearchColumnBooleanField[]
     */
    public $isBillable;
    /**
     * @var \NetSuite\Classes\SearchColumnBooleanField[]
     */
    public $isExempt;
    /**
     * @var \NetSuite\Classes\SearchColumnBooleanField[]
     */
    public $isProductive;
    /**
     * @var \NetSuite\Classes\SearchColumnBooleanField[]
     */
    public $isUtilized;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $item;
    /**
     * @var \NetSuite\Classes\SearchColumnDateField[]
     */
    public $lastModified;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $location;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $locationNoHierarchy;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $memo;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $nextApprover;
    /**
     * @var \NetSuite\Classes\SearchColumnBooleanField[]
     */
    public $paidExternally;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $payItem;
    /**
     * @var \NetSuite\Classes\SearchColumnDateField[]
     */
    public $payrollDate;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $rate;
    /**
     * @var \NetSuite\Classes\SearchColumnDateField[]
     */
    public $startTime;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $subsidiary;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $subsidiaryNoHierarchy;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $timeSheet;
    /**
     * @var \NetSuite\Classes\SearchColumnEnumSelectField[]
     */
    public $type;
    /**
     * @var \NetSuite\Classes\SearchColumnCustomFieldList
     */
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
