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

class Subsidiary extends Record {
    /**
     * @var string
     */
    public $name;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $parent;
    /**
     * @var boolean
     */
    public $isInactive;
    /**
     * @var boolean
     */
    public $showSubsidiaryName;
    /**
     * @var string
     */
    public $url;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $logo;
    /**
     * @var string
     */
    public $tranPrefix;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $pageLogo;
    /**
     * @var string
     */
    public $state;
    /**
     * @var \NetSuite\Classes\Country::*
     */
    public $country;
    /**
     * @var \NetSuite\Classes\Address
     */
    public $mainAddress;
    /**
     * @var \NetSuite\Classes\Address
     */
    public $shippingAddress;
    /**
     * @var \NetSuite\Classes\Address
     */
    public $returnAddress;
    /**
     * @var string
     */
    public $legalName;
    /**
     * @var boolean
     */
    public $isElimination;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $fiscalCalendar;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $taxFiscalCalendar;
    /**
     * @var boolean
     */
    public $allowPayroll;
    /**
     * @var string
     */
    public $email;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $currency;
    /**
     * @var float
     */
    public $purchaseOrderQuantity;
    /**
     * @var float
     */
    public $purchaseOrderAmount;
    /**
     * @var float
     */
    public $purchaseOrderQuantityDiff;
    /**
     * @var float
     */
    public $receiptQuantity;
    /**
     * @var float
     */
    public $receiptAmount;
    /**
     * @var float
     */
    public $receiptQuantityDiff;
    /**
     * @var string
     */
    public $fax;
    /**
     * @var string
     */
    public $edition;
    /**
     * @var string
     */
    public $federalIdNumber;
    /**
     * @var string
     */
    public $addrLanguage;
    /**
     * @var string
     */
    public $state1TaxNumber;
    /**
     * @var \NetSuite\Classes\SubsidiaryTaxRegistrationList
     */
    public $taxRegistrationList;
    /**
     * @var string
     */
    public $ssnOrTin;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $interCoAccount;
    /**
     * @var \NetSuite\Classes\SubsidiaryNexusList
     */
    public $nexusList;
    /**
     * @var \NetSuite\Classes\SubsidiaryAccountingBookDetailList
     */
    public $accountingBookDetailList;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $checkLayout;
    /**
     * @var \NetSuite\Classes\ClassTranslationList
     */
    public $classTranslationList;
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
        "name" => "string",
        "parent" => "RecordRef",
        "isInactive" => "boolean",
        "showSubsidiaryName" => "boolean",
        "url" => "string",
        "logo" => "RecordRef",
        "tranPrefix" => "string",
        "pageLogo" => "RecordRef",
        "state" => "string",
        "country" => "Country",
        "mainAddress" => "Address",
        "shippingAddress" => "Address",
        "returnAddress" => "Address",
        "legalName" => "string",
        "isElimination" => "boolean",
        "fiscalCalendar" => "RecordRef",
        "taxFiscalCalendar" => "RecordRef",
        "allowPayroll" => "boolean",
        "email" => "string",
        "currency" => "RecordRef",
        "purchaseOrderQuantity" => "float",
        "purchaseOrderAmount" => "float",
        "purchaseOrderQuantityDiff" => "float",
        "receiptQuantity" => "float",
        "receiptAmount" => "float",
        "receiptQuantityDiff" => "float",
        "fax" => "string",
        "edition" => "string",
        "federalIdNumber" => "string",
        "addrLanguage" => "string",
        "state1TaxNumber" => "string",
        "taxRegistrationList" => "SubsidiaryTaxRegistrationList",
        "ssnOrTin" => "string",
        "interCoAccount" => "RecordRef",
        "nexusList" => "SubsidiaryNexusList",
        "accountingBookDetailList" => "SubsidiaryAccountingBookDetailList",
        "checkLayout" => "RecordRef",
        "classTranslationList" => "ClassTranslationList",
        "customFieldList" => "CustomFieldList",
        "internalId" => "string",
        "externalId" => "string",
    );
}
