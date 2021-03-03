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

class PromotionCode extends Record {
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $implementation;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $customForm;
    /**
     * @var \NetSuite\Classes\PromotionCodeUseType
     */
    public $useType;
    /**
     * @var boolean
     */
    public $displayLineDiscounts;
    /**
     * @var string
     */
    public $code;
    /**
     * @var string
     */
    public $codePattern;
    /**
     * @var integer
     */
    public $numberToGenerate;
    /**
     * @var string
     */
    public $description;
    /**
     * @var \NetSuite\Classes\RecordRefList
     */
    public $locationList;
    /**
     * @var boolean
     */
    public $isInactive;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $discount;
    /**
     * @var string
     */
    public $rate;
    /**
     * @var boolean
     */
    public $discountType;
    /**
     * @var \NetSuite\Classes\PromotionCodeApplyDiscountTo
     */
    public $applyDiscountTo;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $freeShipMethod;
    /**
     * @var float
     */
    public $minimumOrderAmount;
    /**
     * @var string
     */
    public $startDate;
    /**
     * @var string
     */
    public $endDate;
    /**
     * @var boolean
     */
    public $isPublic;
    /**
     * @var \NetSuite\Classes\PromotionCodeCurrencyList
     */
    public $currencyList;
    /**
     * @var boolean
     */
    public $excludeItems;
    /**
     * @var string
     */
    public $name;
    /**
     * @var \NetSuite\Classes\PromotionCodeItemsList
     */
    public $itemsList;
    /**
     * @var \NetSuite\Classes\PromotionCodePartnersList
     */
    public $partnersList;
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
