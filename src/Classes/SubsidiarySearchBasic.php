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

class SubsidiarySearchBasic extends SearchRecordBasic {
    public $accountingBook;
    public $accountingBookCurrency;
    public $address;
    public $city;
    public $country;
    public $currency;
    public $effectiveFrom;
    public $email;
    public $externalId;
    public $externalIdString;
    public $fax;
    public $internalId;
    public $internalIdNumber;
    public $isElimination;
    public $isInactive;
    public $legalName;
    public $name;
    public $nameNoHierarchy;
    public $nexus;
    public $phone;
    public $purchaseOrderAmount;
    public $purchaseOrderQuantity;
    public $purchaseOrderQuantityDiff;
    public $receiptAmount;
    public $receiptQuantity;
    public $receiptQuantityDiff;
    public $state;
    public $taxEngine;
    public $taxIdNum;
    public $taxRegistrationNumber;
    public $tranPrefix;
    public $url;
    public $validUntil;
    public $zip;
    public $customFieldList;
    static $paramtypesmap = array(
        "accountingBook" => "SearchMultiSelectField",
        "accountingBookCurrency" => "SearchMultiSelectField",
        "address" => "SearchStringField",
        "city" => "SearchStringField",
        "country" => "SearchEnumMultiSelectField",
        "currency" => "SearchMultiSelectField",
        "effectiveFrom" => "SearchDateField",
        "email" => "SearchStringField",
        "externalId" => "SearchMultiSelectField",
        "externalIdString" => "SearchStringField",
        "fax" => "SearchStringField",
        "internalId" => "SearchMultiSelectField",
        "internalIdNumber" => "SearchLongField",
        "isElimination" => "SearchBooleanField",
        "isInactive" => "SearchBooleanField",
        "legalName" => "SearchStringField",
        "name" => "SearchStringField",
        "nameNoHierarchy" => "SearchStringField",
        "nexus" => "SearchMultiSelectField",
        "phone" => "SearchStringField",
        "purchaseOrderAmount" => "SearchDoubleField",
        "purchaseOrderQuantity" => "SearchDoubleField",
        "purchaseOrderQuantityDiff" => "SearchDoubleField",
        "receiptAmount" => "SearchDoubleField",
        "receiptQuantity" => "SearchDoubleField",
        "receiptQuantityDiff" => "SearchDoubleField",
        "state" => "SearchStringField",
        "taxEngine" => "SearchMultiSelectField",
        "taxIdNum" => "SearchStringField",
        "taxRegistrationNumber" => "SearchStringField",
        "tranPrefix" => "SearchStringField",
        "url" => "SearchStringField",
        "validUntil" => "SearchDateField",
        "zip" => "SearchStringField",
        "customFieldList" => "SearchCustomFieldList",
    );
}
