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

class BillingAccount extends Record {
    public $customForm;
    public $idNumber;
    public $customerDefault;
    public $customer;
    public $subsidiary;
    public $name;
    public $inactive;
    public $memo;
    public $createdDate;
    public $createdBy;
    public $currency;
    public $class;
    public $department;
    public $location;
    public $billingSchedule;
    public $frequency;
    public $startDate;
    public $lastBillDate;
    public $lastBillCycleDate;
    public $nextBillCycleDate;
    public $invoiceForm;
    public $cashSaleForm;
    public $customFieldList;
    public $internalId;
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
