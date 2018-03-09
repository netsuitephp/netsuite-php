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

class AccountSearchBasic extends SearchRecordBasic {
    public $accountingContext;
    public $balance;
    public $cashFlowRateType;
    public $category1099Misc;
    public $description;
    public $externalId;
    public $externalIdString;
    public $generalRateType;
    public $internalId;
    public $internalIdNumber;
    public $isInactive;
    public $legalName;
    public $locale;
    public $localizedLegalName;
    public $localizedName;
    public $localizedNumber;
    public $name;
    public $number;
    public $parent;
    public $subsidiary;
    public $type;
    public $customFieldList;
    static $paramtypesmap = array(
        "accountingContext" => "SearchMultiSelectField",
        "balance" => "SearchDoubleField",
        "cashFlowRateType" => "SearchEnumMultiSelectField",
        "category1099Misc" => "SearchMultiSelectField",
        "description" => "SearchStringField",
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
