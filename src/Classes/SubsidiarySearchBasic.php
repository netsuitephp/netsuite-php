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

class SubsidiarySearchBasic extends SearchRecordBasic {
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $accountingBook;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $accountingBookCurrency;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $address;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $city;
    /**
     * @var \NetSuite\Classes\SearchEnumMultiSelectField
     */
    public $country;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $currency;
    /**
     * @var \NetSuite\Classes\SearchDateField
     */
    public $effectiveFrom;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $email;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $externalId;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $externalIdString;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $fax;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $internalId;
    /**
     * @var \NetSuite\Classes\SearchLongField
     */
    public $internalIdNumber;
    /**
     * @var \NetSuite\Classes\SearchBooleanField
     */
    public $isElimination;
    /**
     * @var \NetSuite\Classes\SearchBooleanField
     */
    public $isInactive;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $legalName;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $name;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $nameNoHierarchy;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $nexus;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $phone;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $purchaseOrderAmount;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $purchaseOrderQuantity;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $purchaseOrderQuantityDiff;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $receiptAmount;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $receiptQuantity;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $receiptQuantityDiff;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $state;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $taxEngine;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $taxIdNum;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $taxRegistrationNumber;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $tranPrefix;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $url;
    /**
     * @var \NetSuite\Classes\SearchDateField
     */
    public $validUntil;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $zip;
    /**
     * @var \NetSuite\Classes\SearchCustomFieldList
     */
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
