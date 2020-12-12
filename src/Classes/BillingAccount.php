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

class BillingAccount extends Record {
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $customForm;
    /**
     * @var string
     */
    public $idNumber;
    /**
     * @var boolean
     */
    public $customerDefault;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $customer;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $subsidiary;
    /**
     * @var string
     */
    public $name;
    /**
     * @var boolean
     */
    public $inactive;
    /**
     * @var string
     */
    public $memo;
    /**
     * @var string
     */
    public $createdDate;
    /**
     * @var string
     */
    public $createdBy;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $currency;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $class;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $department;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $location;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $billingSchedule;
    /**
     * @var \NetSuite\Classes\BillingAccountFrequency
     */
    public $frequency;
    /**
     * @var string
     */
    public $startDate;
    /**
     * @var string
     */
    public $lastBillDate;
    /**
     * @var string
     */
    public $lastBillCycleDate;
    /**
     * @var string
     */
    public $nextBillCycleDate;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $invoiceForm;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $cashSaleForm;
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
        "idNumber" => "string",
        "customerDefault" => "boolean",
        "customer" => "RecordRef",
        "subsidiary" => "RecordRef",
        "name" => "string",
        "inactive" => "boolean",
        "memo" => "string",
        "createdDate" => "dateTime",
        "createdBy" => "string",
        "currency" => "RecordRef",
        "class" => "RecordRef",
        "department" => "RecordRef",
        "location" => "RecordRef",
        "billingSchedule" => "RecordRef",
        "frequency" => "BillingAccountFrequency",
        "startDate" => "dateTime",
        "lastBillDate" => "dateTime",
        "lastBillCycleDate" => "dateTime",
        "nextBillCycleDate" => "dateTime",
        "invoiceForm" => "RecordRef",
        "cashSaleForm" => "RecordRef",
        "customFieldList" => "CustomFieldList",
        "internalId" => "string",
        "externalId" => "string",
    );
}
