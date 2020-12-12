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

class PaymentInstrumentSearchRowBasic extends SearchRowBasic {
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $cardBrand;
    /**
     * @var \NetSuite\Classes\SearchColumnDateField[]
     */
    public $cardExpDate;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $cardLastFourDigits;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $cardTokenCardBrand;
    /**
     * @var \NetSuite\Classes\SearchColumnDateField[]
     */
    public $cardTokenCardExpDate;
    /**
     * @var \NetSuite\Classes\SearchColumnDateField[]
     */
    public $cardTokenExpDate;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $cardTokenNameOnCard;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $default;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $entity;
    /**
     * @var \NetSuite\Classes\SearchColumnDateField[]
     */
    public $generalTokenExpirationDate;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $internalId;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $isInactive;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $lastFourDigits;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $mask;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $nameOnCard;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $paymentInstrumentStateType;
    /**
     * @var \NetSuite\Classes\SearchColumnEnumSelectField[]
     */
    public $paymentInstrumentType;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $paymentMethod;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $preserveOnFile;
    static $paramtypesmap = array(
        "cardBrand" => "SearchColumnStringField[]",
        "cardExpDate" => "SearchColumnDateField[]",
        "cardLastFourDigits" => "SearchColumnStringField[]",
        "cardTokenCardBrand" => "SearchColumnStringField[]",
        "cardTokenCardExpDate" => "SearchColumnDateField[]",
        "cardTokenExpDate" => "SearchColumnDateField[]",
        "cardTokenNameOnCard" => "SearchColumnStringField[]",
        "default" => "SearchColumnStringField[]",
        "entity" => "SearchColumnSelectField[]",
        "generalTokenExpirationDate" => "SearchColumnDateField[]",
        "internalId" => "SearchColumnSelectField[]",
        "isInactive" => "SearchColumnStringField[]",
        "lastFourDigits" => "SearchColumnStringField[]",
        "mask" => "SearchColumnStringField[]",
        "nameOnCard" => "SearchColumnStringField[]",
        "paymentInstrumentStateType" => "SearchColumnSelectField[]",
        "paymentInstrumentType" => "SearchColumnEnumSelectField[]",
        "paymentMethod" => "SearchColumnSelectField[]",
        "preserveOnFile" => "SearchColumnStringField[]",
    );
}
