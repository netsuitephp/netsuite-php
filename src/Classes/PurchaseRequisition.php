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

class PurchaseRequisition extends Record {
    public $createdDate;
    public $lastModifiedDate;
    public $customForm;
    public $source;
    public $subTotal;
    public $currencyName;
    public $exchangeRate;
    public $vatRegNum;
    public $nexus;
    public $taxRegNum;
    public $taxRegOverride;
    public $estimatedTotal;
    public $status;
    public $currency;
    public $entity;
    public $dueDate;
    public $tranDate;
    public $tranId;
    public $memo;
    public $approvalStatus;
    public $nextApprover;
    public $taxTotal;
    public $tax2Total;
    public $subsidiary;
    public $department;
    public $class;
    public $location;
    public $total;
    public $itemList;
    public $expenseList;
    public $accountingBookDetailList;
    public $customFieldList;
    public $internalId;
    public $externalId;
    static $paramtypesmap = array(
        "createdDate" => "dateTime",
        "lastModifiedDate" => "dateTime",
        "customForm" => "RecordRef",
        "source" => "string",
        "subTotal" => "float",
        "currencyName" => "string",
        "exchangeRate" => "float",
        "vatRegNum" => "string",
        "nexus" => "RecordRef",
        "taxRegNum" => "RecordRef",
        "taxRegOverride" => "boolean",
        "estimatedTotal" => "float",
        "status" => "string",
        "currency" => "RecordRef",
        "entity" => "RecordRef",
        "dueDate" => "dateTime",
        "tranDate" => "dateTime",
        "tranId" => "string",
        "memo" => "string",
        "approvalStatus" => "RecordRef",
        "nextApprover" => "RecordRef",
        "taxTotal" => "float",
        "tax2Total" => "float",
        "subsidiary" => "RecordRef",
        "department" => "RecordRef",
        "class" => "RecordRef",
        "location" => "RecordRef",
        "total" => "float",
        "itemList" => "PurchaseRequisitionItemList",
        "expenseList" => "PurchaseRequisitionExpenseList",
        "accountingBookDetailList" => "AccountingBookDetailList",
        "customFieldList" => "CustomFieldList",
        "internalId" => "string",
        "externalId" => "string",
    );
}
