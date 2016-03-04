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
 * generated:  2016-03-04 07:23:27 PM UTC
 */

namespace NetSuite\Classes;

class Account extends Record {
    public $acctType;
    public $unitsType;
    public $unit;
    public $acctNumber;
    public $acctName;
    public $includeChildren;
    public $currency;
    public $exchangeRate;
    public $generalRate;
    public $parent;
    public $cashFlowRate;
    public $billableExpensesAcct;
    public $deferralAcct;
    public $description;
    public $curDocNum;
    public $isInactive;
    public $department;
    public $class;
    public $location;
    public $inventory;
    public $eliminate;
    public $subsidiaryList;
    public $category1099misc;
    public $openingBalance;
    public $tranDate;
    public $revalue;
    public $translationsList;
    public $customFieldList;
    public $internalId;
    public $externalId;
    static $paramtypesmap = array(
        "acctType" => "AccountType",
        "unitsType" => "RecordRef",
        "unit" => "RecordRef",
        "acctNumber" => "string",
        "acctName" => "string",
        "includeChildren" => "boolean",
        "currency" => "RecordRef",
        "exchangeRate" => "string",
        "generalRate" => "ConsolidatedRate",
        "parent" => "RecordRef",
        "cashFlowRate" => "ConsolidatedRate",
        "billableExpensesAcct" => "RecordRef",
        "deferralAcct" => "RecordRef",
        "description" => "string",
        "curDocNum" => "integer",
        "isInactive" => "boolean",
        "department" => "RecordRef",
        "class" => "RecordRef",
        "location" => "RecordRef",
        "inventory" => "boolean",
        "eliminate" => "boolean",
        "subsidiaryList" => "RecordRefList",
        "category1099misc" => "RecordRef",
        "openingBalance" => "float",
        "tranDate" => "dateTime",
        "revalue" => "boolean",
        "translationsList" => "AccountTranslationList",
        "customFieldList" => "CustomFieldList",
        "internalId" => "string",
        "externalId" => "string",
    );
}

