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

class PurchaseRequisition extends Record {
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
    public $customForm;
    /**
     * @var string
     */
    public $source;
    /**
     * @var float
     */
    public $subTotal;
    /**
     * @var string
     */
    public $currencyName;
    /**
     * @var float
     */
    public $exchangeRate;
    /**
     * @var string
     */
    public $vatRegNum;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $nexus;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $taxRegNum;
    /**
     * @var boolean
     */
    public $taxRegOverride;
    /**
     * @var float
     */
    public $estimatedTotal;
    /**
     * @var string
     */
    public $status;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $currency;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $entity;
    /**
     * @var string
     */
    public $dueDate;
    /**
     * @var string
     */
    public $tranDate;
    /**
     * @var string
     */
    public $tranId;
    /**
     * @var string
     */
    public $memo;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $approvalStatus;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $nextApprover;
    /**
     * @var float
     */
    public $taxTotal;
    /**
     * @var float
     */
    public $tax2Total;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $subsidiary;
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
     * @var float
     */
    public $total;
    /**
     * @var \NetSuite\Classes\PurchaseRequisitionItemList
     */
    public $itemList;
    /**
     * @var \NetSuite\Classes\PurchaseRequisitionExpenseList
     */
    public $expenseList;
    /**
     * @var \NetSuite\Classes\AccountingBookDetailList
     */
    public $accountingBookDetailList;
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
