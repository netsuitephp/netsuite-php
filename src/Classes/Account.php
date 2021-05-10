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

class Account extends Record {
    /**
     * @var \NetSuite\Classes\AccountType
     */
    public $acctType;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $unitsType;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $unit;
    /**
     * @var string
     */
    public $acctNumber;
    /**
     * @var string
     */
    public $acctName;
    /**
     * @var string
     */
    public $legalName;
    /**
     * @var boolean
     */
    public $includeChildren;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $currency;
    /**
     * @var string
     */
    public $exchangeRate;
    /**
     * @var \NetSuite\Classes\ConsolidatedRate
     */
    public $generalRate;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $parent;
    /**
     * @var \NetSuite\Classes\ConsolidatedRate
     */
    public $cashFlowRate;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $billableExpensesAcct;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $deferralAcct;
    /**
     * @var string
     */
    public $description;
    /**
     * @var integer
     */
    public $curDocNum;
    /**
     * @var boolean
     */
    public $isInactive;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $department;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $class;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $location;
    /**
     * @var \NetSuite\Classes\RecordRefList
     */
    public $restrictToAccountingBookList;
    /**
     * @var boolean
     */
    public $inventory;
    /**
     * @var boolean
     */
    public $eliminate;
    /**
     * @var \NetSuite\Classes\RecordRefList
     */
    public $subsidiaryList;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $category1099misc;
    /**
     * @var \NetSuite\Classes\AccountLocalizationsList
     */
    public $localizationsList;
    /**
     * @var float
     */
    public $openingBalance;
    /**
     * @var string
     */
    public $tranDate;
    /**
     * @var boolean
     */
    public $revalue;
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
        "acctType" => "AccountType",
        "unitsType" => "RecordRef",
        "unit" => "RecordRef",
        "acctNumber" => "string",
        "acctName" => "string",
        "legalName" => "string",
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
        "restrictToAccountingBookList" => "RecordRefList",
        "inventory" => "boolean",
        "eliminate" => "boolean",
        "subsidiaryList" => "RecordRefList",
        "category1099misc" => "RecordRef",
        "localizationsList" => "AccountLocalizationsList",
        "openingBalance" => "float",
        "tranDate" => "dateTime",
        "revalue" => "boolean",
        "customFieldList" => "CustomFieldList",
        "internalId" => "string",
        "externalId" => "string",
    );
}
