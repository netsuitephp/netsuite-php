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

class TimeBillSearchRowBasic extends SearchRowBasic {
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $approvalStatus;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $break;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $class;
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
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $memo;
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
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $rejectionNote;
    /**
     * @var \NetSuite\Classes\SearchColumnDateField[]
     */
    public $startTime;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $status;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $subsidiary;
    /**
     * @var \NetSuite\Classes\SearchColumnBooleanField[]
     */
    public $supervisorApproval;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $temporaryLocalJurisdiction;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $temporaryStateJurisdiction;
    /**
     * @var \NetSuite\Classes\SearchColumnBooleanField[]
     */
    public $timeModified;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
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
        "break" => "SearchColumnStringField[]",
        "class" => "SearchColumnSelectField[]",
        "customer" => "SearchColumnSelectField[]",
        "date" => "SearchColumnDateField[]",
        "dateCreated" => "SearchColumnDateField[]",
        "department" => "SearchColumnSelectField[]",
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
        "memo" => "SearchColumnStringField[]",
        "paidExternally" => "SearchColumnBooleanField[]",
        "payItem" => "SearchColumnSelectField[]",
        "payrollDate" => "SearchColumnDateField[]",
        "rate" => "SearchColumnDoubleField[]",
        "rejectionNote" => "SearchColumnStringField[]",
        "startTime" => "SearchColumnDateField[]",
        "status" => "SearchColumnStringField[]",
        "subsidiary" => "SearchColumnStringField[]",
        "supervisorApproval" => "SearchColumnBooleanField[]",
        "temporaryLocalJurisdiction" => "SearchColumnStringField[]",
        "temporaryStateJurisdiction" => "SearchColumnStringField[]",
        "timeModified" => "SearchColumnBooleanField[]",
        "timeSheet" => "SearchColumnSelectField[]",
        "type" => "SearchColumnEnumSelectField[]",
        "customFieldList" => "SearchColumnCustomFieldList",
    );
}
