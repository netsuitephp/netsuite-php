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

class PromotionCode extends Record {
    public $implementation;
    public $customForm;
    public $useType;
    public $displayLineDiscounts;
    public $code;
    public $codePattern;
    public $numberToGenerate;
    public $description;
    public $locationList;
    public $isInactive;
    public $discount;
    public $rate;
    public $discountType;
    public $applyDiscountTo;
    public $freeShipMethod;
    public $minimumOrderAmount;
    public $startDate;
    public $endDate;
    public $isPublic;
    public $currencyList;
    public $excludeItems;
    public $name;
    public $itemsList;
    public $partnersList;
    public $customFieldList;
    public $internalId;
    public $externalId;
    static $paramtypesmap = array(
        "implementation" => "RecordRef",
        "customForm" => "RecordRef",
        "useType" => "PromotionCodeUseType",
        "displayLineDiscounts" => "boolean",
        "code" => "string",
        "codePattern" => "string",
        "numberToGenerate" => "integer",
        "description" => "string",
        "locationList" => "RecordRefList",
        "isInactive" => "boolean",
        "discount" => "RecordRef",
        "rate" => "string",
        "discountType" => "boolean",
        "applyDiscountTo" => "PromotionCodeApplyDiscountTo",
        "freeShipMethod" => "RecordRef",
        "minimumOrderAmount" => "float",
        "startDate" => "dateTime",
        "endDate" => "dateTime",
        "isPublic" => "boolean",
        "currencyList" => "PromotionCodeCurrencyList",
        "excludeItems" => "boolean",
        "name" => "string",
        "itemsList" => "PromotionCodeItemsList",
        "partnersList" => "PromotionCodePartnersList",
        "customFieldList" => "CustomFieldList",
        "internalId" => "string",
        "externalId" => "string",
    );
}
