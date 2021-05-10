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

class PurchaseOrder extends Record {
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
    public $nexus;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $subsidiaryTaxRegNum;
    /**
     * @var boolean
     */
    public $taxRegOverride;
    /**
     * @var boolean
     */
    public $taxDetailsOverride;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $customForm;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $entity;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $purchaseContract;
    /**
     * @var string
     */
    public $vatRegNum;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $employee;
    /**
     * @var boolean
     */
    public $supervisorApproval;
    /**
     * @var string
     */
    public $tranDate;
    /**
     * @var string
     */
    public $tranId;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $entityTaxRegNum;
    /**
     * @var string
     */
    public $taxPointDate;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $createdFrom;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $terms;
    /**
     * @var string
     */
    public $dueDate;
    /**
     * @var string
     */
    public $otherRefNum;
    /**
     * @var float
     */
    public $availableVendorCredit;
    /**
     * @var string
     */
    public $memo;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $approvalStatus;
    /**
     * @var float
     */
    public $exchangeRate;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $nextApprover;
    /**
     * @var string
     */
    public $source;
    /**
     * @var string
     */
    public $currencyName;
    /**
     * @var boolean
     */
    public $toBePrinted;
    /**
     * @var boolean
     */
    public $toBeEmailed;
    /**
     * @var string
     */
    public $email;
    /**
     * @var boolean
     */
    public $toBeFaxed;
    /**
     * @var string
     */
    public $fax;
    /**
     * @var string
     */
    public $message;
    /**
     * @var \NetSuite\Classes\Address
     */
    public $billingAddress;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $billAddressList;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $currency;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $shipTo;
    /**
     * @var float
     */
    public $subTotal;
    /**
     * @var float
     */
    public $taxTotal;
    /**
     * @var float
     */
    public $tax2Total;
    /**
     * @var \NetSuite\Classes\Address
     */
    public $shippingAddress;
    /**
     * @var boolean
     */
    public $shipIsResidential;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $shipAddressList;
    /**
     * @var string
     */
    public $fob;
    /**
     * @var string
     */
    public $shipDate;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $shipMethod;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $incoterm;
    /**
     * @var string
     */
    public $trackingNumbers;
    /**
     * @var string
     */
    public $linkedTrackingNumbers;
    /**
     * @var float
     */
    public $total;
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
    public $subsidiary;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $intercoTransaction;
    /**
     * @var \NetSuite\Classes\IntercoStatus
     */
    public $intercoStatus;
    /**
     * @var string
     */
    public $status;
    /**
     * @var \NetSuite\Classes\PurchaseOrderOrderStatus
     */
    public $orderStatus;
    /**
     * @var \NetSuite\Classes\PurchaseOrderItemList
     */
    public $itemList;
    /**
     * @var \NetSuite\Classes\AccountingBookDetailList
     */
    public $accountingBookDetailList;
    /**
     * @var \NetSuite\Classes\PurchaseOrderExpenseList
     */
    public $expenseList;
    /**
     * @var \NetSuite\Classes\TaxDetailsList
     */
    public $taxDetailsList;
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
        "nexus" => "RecordRef",
        "subsidiaryTaxRegNum" => "RecordRef",
        "taxRegOverride" => "boolean",
        "taxDetailsOverride" => "boolean",
        "customForm" => "RecordRef",
        "entity" => "RecordRef",
        "purchaseContract" => "RecordRef",
        "vatRegNum" => "string",
        "employee" => "RecordRef",
        "supervisorApproval" => "boolean",
        "tranDate" => "dateTime",
        "tranId" => "string",
        "entityTaxRegNum" => "RecordRef",
        "taxPointDate" => "dateTime",
        "createdFrom" => "RecordRef",
        "terms" => "RecordRef",
        "dueDate" => "dateTime",
        "otherRefNum" => "string",
        "availableVendorCredit" => "float",
        "memo" => "string",
        "approvalStatus" => "RecordRef",
        "exchangeRate" => "float",
        "nextApprover" => "RecordRef",
        "source" => "string",
        "currencyName" => "string",
        "toBePrinted" => "boolean",
        "toBeEmailed" => "boolean",
        "email" => "string",
        "toBeFaxed" => "boolean",
        "fax" => "string",
        "message" => "string",
        "billingAddress" => "Address",
        "billAddressList" => "RecordRef",
        "currency" => "RecordRef",
        "shipTo" => "RecordRef",
        "subTotal" => "float",
        "taxTotal" => "float",
        "tax2Total" => "float",
        "shippingAddress" => "Address",
        "shipIsResidential" => "boolean",
        "shipAddressList" => "RecordRef",
        "fob" => "string",
        "shipDate" => "dateTime",
        "shipMethod" => "RecordRef",
        "incoterm" => "RecordRef",
        "trackingNumbers" => "string",
        "linkedTrackingNumbers" => "string",
        "total" => "float",
        "class" => "RecordRef",
        "department" => "RecordRef",
        "location" => "RecordRef",
        "subsidiary" => "RecordRef",
        "intercoTransaction" => "RecordRef",
        "intercoStatus" => "IntercoStatus",
        "status" => "string",
        "orderStatus" => "PurchaseOrderOrderStatus",
        "itemList" => "PurchaseOrderItemList",
        "accountingBookDetailList" => "AccountingBookDetailList",
        "expenseList" => "PurchaseOrderExpenseList",
        "taxDetailsList" => "TaxDetailsList",
        "customFieldList" => "CustomFieldList",
        "internalId" => "string",
        "externalId" => "string",
    );
}
