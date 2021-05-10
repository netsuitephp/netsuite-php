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

class InterCompanyTransferOrder extends Record {
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
     * @var float
     */
    public $shippingCost;
    /**
     * @var float
     */
    public $subTotal;
    /**
     * @var string
     */
    public $status;
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
    public $tranDate;
    /**
     * @var string
     */
    public $tranId;
    /**
     * @var string
     */
    public $source;
    /**
     * @var \NetSuite\Classes\TransferOrderOrderStatus
     */
    public $orderStatus;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $subsidiary;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $toSubsidiary;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $employee;
    /**
     * @var boolean
     */
    public $useItemCostAsTransferCost;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $incoterm;
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
     * @var \NetSuite\Classes\RecordRef
     */
    public $transferLocation;
    /**
     * @var string
     */
    public $memo;
    /**
     * @var string
     */
    public $shipDate;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $shipMethod;
    /**
     * @var string
     */
    public $trackingNumbers;
    /**
     * @var string
     */
    public $linkedTrackingNumbers;
    /**
     * @var boolean
     */
    public $shipComplete;
    /**
     * @var float
     */
    public $altShippingCost;
    /**
     * @var float
     */
    public $shippingTax1Rate;
    /**
     * @var float
     */
    public $handlingTax1Rate;
    /**
     * @var float
     */
    public $shippingTax2Rate;
    /**
     * @var float
     */
    public $handlingTax2Rate;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $shippingTaxCode;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $handlingTaxCode;
    /**
     * @var float
     */
    public $total;
    /**
     * @var \NetSuite\Classes\InterCompanyTransferOrderItemList
     */
    public $itemList;
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
        "shippingCost" => "float",
        "subTotal" => "float",
        "status" => "string",
        "shippingAddress" => "Address",
        "shipIsResidential" => "boolean",
        "shipAddressList" => "RecordRef",
        "fob" => "string",
        "tranDate" => "dateTime",
        "tranId" => "string",
        "source" => "string",
        "orderStatus" => "TransferOrderOrderStatus",
        "subsidiary" => "RecordRef",
        "toSubsidiary" => "RecordRef",
        "employee" => "RecordRef",
        "useItemCostAsTransferCost" => "boolean",
        "incoterm" => "RecordRef",
        "department" => "RecordRef",
        "class" => "RecordRef",
        "location" => "RecordRef",
        "transferLocation" => "RecordRef",
        "memo" => "string",
        "shipDate" => "dateTime",
        "shipMethod" => "RecordRef",
        "trackingNumbers" => "string",
        "linkedTrackingNumbers" => "string",
        "shipComplete" => "boolean",
        "altShippingCost" => "float",
        "shippingTax1Rate" => "float",
        "handlingTax1Rate" => "float",
        "shippingTax2Rate" => "float",
        "handlingTax2Rate" => "float",
        "shippingTaxCode" => "RecordRef",
        "handlingTaxCode" => "RecordRef",
        "total" => "float",
        "itemList" => "InterCompanyTransferOrderItemList",
        "accountingBookDetailList" => "AccountingBookDetailList",
        "customFieldList" => "CustomFieldList",
        "internalId" => "string",
        "externalId" => "string",
    );
}
