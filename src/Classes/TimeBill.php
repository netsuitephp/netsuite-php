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

class TimeBill extends Record {
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $customForm;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $employee;
    /**
     * @var string
     */
    public $tranDate;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $approvalStatus;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $customer;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $caseTaskEvent;
    /**
     * @var boolean
     */
    public $isBillable;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $payrollItem;
    /**
     * @var boolean
     */
    public $paidExternally;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $workplace;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $item;
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
     * @var \NetSuite\Classes\TimeBillTimeType
     */
    public $timeType;
    /**
     * @var float
     */
    public $rate;
    /**
     * @var boolean
     */
    public $overrideRate;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $temporaryLocalJurisdiction;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $temporaryStateJurisdiction;
    /**
     * @var string
     */
    public $memo;
    /**
     * @var string
     */
    public $rejectionNote;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $subsidiary;
    /**
     * @var boolean
     */
    public $supervisorApproval;
    /**
     * @var string
     */
    public $createdDate;
    /**
     * @var string
     */
    public $lastModifiedDate;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $timeSheet;
    /**
     * @var string
     */
    public $status;
    /**
     * @var boolean
     */
    public $timeModified;
    /**
     * @var \NetSuite\Classes\CustomFieldList
     */
    public $customFieldList;
    /**
     * @var string
     */
    public $internalId;
    /**
     * @var string
     */
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
        "timeModified" => "boolean",
        "customFieldList" => "CustomFieldList",
        "internalId" => "string",
        "externalId" => "string",
    );
}
