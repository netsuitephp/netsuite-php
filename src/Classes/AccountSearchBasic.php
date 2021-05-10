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

class AccountSearchBasic extends SearchRecordBasic {
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $accountingContext;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $balance;
    /**
     * @var \NetSuite\Classes\SearchEnumMultiSelectField
     */
    public $cashFlowRateType;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $category1099Misc;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $description;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $displayName;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $externalId;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $externalIdString;
    /**
     * @var \NetSuite\Classes\SearchEnumMultiSelectField
     */
    public $generalRateType;
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
    public $isInactive;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $legalName;
    /**
     * @var \NetSuite\Classes\SearchEnumMultiSelectField
     */
    public $locale;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $localizedLegalName;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $localizedName;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $localizedNumber;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $name;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $number;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $parent;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $subsidiary;
    /**
     * @var \NetSuite\Classes\SearchEnumMultiSelectField
     */
    public $type;
    /**
     * @var \NetSuite\Classes\SearchCustomFieldList
     */
    public $customFieldList;
    static $paramtypesmap = array(
        "accountingContext" => "SearchMultiSelectField",
        "balance" => "SearchDoubleField",
        "cashFlowRateType" => "SearchEnumMultiSelectField",
        "category1099Misc" => "SearchMultiSelectField",
        "description" => "SearchStringField",
        "displayName" => "SearchStringField",
        "externalId" => "SearchMultiSelectField",
        "externalIdString" => "SearchStringField",
        "generalRateType" => "SearchEnumMultiSelectField",
        "internalId" => "SearchMultiSelectField",
        "internalIdNumber" => "SearchLongField",
        "isInactive" => "SearchBooleanField",
        "legalName" => "SearchStringField",
        "locale" => "SearchEnumMultiSelectField",
        "localizedLegalName" => "SearchStringField",
        "localizedName" => "SearchStringField",
        "localizedNumber" => "SearchStringField",
        "name" => "SearchStringField",
        "number" => "SearchStringField",
        "parent" => "SearchMultiSelectField",
        "subsidiary" => "SearchMultiSelectField",
        "type" => "SearchEnumMultiSelectField",
        "customFieldList" => "SearchCustomFieldList",
    );
}
