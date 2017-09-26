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

class ItemReceipt extends Record {
    public $createdDate;
    public $lastModifiedDate;
    public $customForm;
    public $exchangeRate;
    public $entity;
    public $currencyName;
    public $subsidiary;
    public $createdFrom;
    public $tranDate;
    public $partner;
    public $postingPeriod;
    public $tranId;
    public $inboundShipment;
    public $memo;
    public $itemFulfillment;
    public $currency;
    public $landedCostMethod;
    public $landedCostPerLine;
    public $itemList;
    public $expenseList;
    public $landedCostsList;
    public $accountingBookDetailList;
    public $customFieldList;
    public $internalId;
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
