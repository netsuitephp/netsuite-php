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

class Subsidiary extends Record {
    public $name;
    public $parent;
    public $isInactive;
    public $showSubsidiaryName;
    public $url;
    public $logo;
    public $tranPrefix;
    public $pageLogo;
    public $state;
    public $country;
    public $mainAddress;
    public $shippingAddress;
    public $returnAddress;
    public $legalName;
    public $isElimination;
    public $fiscalCalendar;
    public $taxFiscalCalendar;
    public $allowPayroll;
    public $email;
    public $currency;
    public $purchaseOrderQuantity;
    public $purchaseOrderAmount;
    public $purchaseOrderQuantityDiff;
    public $receiptQuantity;
    public $receiptAmount;
    public $receiptQuantityDiff;
    public $fax;
    public $edition;
    public $federalIdNumber;
    public $addrLanguage;
    public $nonConsol;
    public $consol;
    public $state1TaxNumber;
    public $taxRegistrationList;
    public $ssnOrTin;
    public $interCoAccount;
    public $nexusList;
    public $accountingBookDetailList;
    public $checkLayout;
    public $inboundEmail;
    public $classTranslationList;
    public $customFieldList;
    public $internalId;
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
        "nonConsol" => "string",
        "consol" => "string",
        "state1TaxNumber" => "string",
        "taxRegistrationList" => "SubsidiaryTaxRegistrationList",
        "ssnOrTin" => "string",
        "interCoAccount" => "RecordRef",
        "nexusList" => "SubsidiaryNexusList",
        "accountingBookDetailList" => "SubsidiaryAccountingBookDetailList",
        "checkLayout" => "RecordRef",
        "inboundEmail" => "string",
        "classTranslationList" => "ClassTranslationList",
        "customFieldList" => "CustomFieldList",
        "internalId" => "string",
        "externalId" => "string",
    );
}
