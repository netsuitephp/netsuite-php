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
 * generated:  2017-03-31 08:48:20 PM UTC
 */

namespace NetSuite\Classes;

class PurchaseOrder extends Record {
    public $createdDate;
    public $lastModifiedDate;
    public $customForm;
    public $entity;
    public $purchaseContract;
    public $vatRegNum;
    public $employee;
    public $supervisorApproval;
    public $tranDate;
    public $tranId;
    public $createdFrom;
    public $terms;
    public $dueDate;
    public $otherRefNum;
    public $availableVendorCredit;
    public $memo;
    public $approvalStatus;
    public $exchangeRate;
    public $nextApprover;
    public $source;
    public $currencyName;
    public $toBePrinted;
    public $toBeEmailed;
    public $email;
    public $toBeFaxed;
    public $fax;
    public $message;
    public $billingAddress;
    public $billAddressList;
    public $currency;
    public $shipTo;
    public $subTotal;
    public $taxTotal;
    public $tax2Total;
    public $shippingAddress;
    public $shipIsResidential;
    public $shipAddressList;
    public $fob;
    public $shipDate;
    public $shipMethod;
    public $trackingNumbers;
    public $linkedTrackingNumbers;
    public $total;
    public $class;
    public $department;
    public $location;
    public $subsidiary;
    public $intercoTransaction;
    public $intercoStatus;
    public $status;
    public $orderStatus;
    public $itemList;
    public $expenseList;
    public $customFieldList;
    public $internalId;
    public $externalId;
    static $paramtypesmap = array(
        "createdDate" => "dateTime",
        "lastModifiedDate" => "dateTime",
        "customForm" => "RecordRef",
        "entity" => "RecordRef",
        "purchaseContract" => "RecordRef",
        "vatRegNum" => "string",
        "employee" => "RecordRef",
        "supervisorApproval" => "boolean",
        "tranDate" => "dateTime",
        "tranId" => "string",
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
        "expenseList" => "PurchaseOrderExpenseList",
        "customFieldList" => "CustomFieldList",
        "internalId" => "string",
        "externalId" => "string",
    );
}
