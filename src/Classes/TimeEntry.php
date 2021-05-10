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

class TimeEntry extends Record {
    /**
     * @var \NetSuite\Classes\Duration
     */
    public $hours;
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
    public $customer;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $caseTaskEvent;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $item;
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
     * @var string
     */
    public $memo;
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
     * @var string
     */
    public $billingClass;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $subsidiary;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $approvalStatus;
    /**
     * @var \NetSuite\Classes\TimeBillTimeType
     */
    public $timeType;
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
