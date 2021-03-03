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

class ItemReceipt extends Record {
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
    public $exchangeRate;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $entity;
    /**
     * @var string
     */
    public $currencyName;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $subsidiary;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $createdFrom;
    /**
     * @var string
     */
    public $tranDate;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $partner;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $postingPeriod;
    /**
     * @var string
     */
    public $tranId;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $inboundShipment;
    /**
     * @var string
     */
    public $memo;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $itemFulfillment;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $currency;
    /**
     * @var \NetSuite\Classes\LandedCostMethod
     */
    public $landedCostMethod;
    /**
     * @var boolean
     */
    public $landedCostPerLine;
    /**
     * @var \NetSuite\Classes\ItemReceiptItemList
     */
    public $itemList;
    /**
     * @var \NetSuite\Classes\ItemReceiptExpenseList
     */
    public $expenseList;
    /**
     * @var \NetSuite\Classes\PurchLandedCostList
     */
    public $landedCostsList;
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
        "exchangeRate" => "float",
        "entity" => "RecordRef",
        "currencyName" => "string",
        "subsidiary" => "RecordRef",
        "createdFrom" => "RecordRef",
        "tranDate" => "dateTime",
        "partner" => "RecordRef",
        "postingPeriod" => "RecordRef",
        "tranId" => "string",
        "inboundShipment" => "RecordRef",
        "memo" => "string",
        "itemFulfillment" => "RecordRef",
        "currency" => "RecordRef",
        "landedCostMethod" => "LandedCostMethod",
        "landedCostPerLine" => "boolean",
        "itemList" => "ItemReceiptItemList",
        "expenseList" => "ItemReceiptExpenseList",
        "landedCostsList" => "PurchLandedCostList",
        "accountingBookDetailList" => "AccountingBookDetailList",
        "customFieldList" => "CustomFieldList",
        "internalId" => "string",
        "externalId" => "string",
    );
}
