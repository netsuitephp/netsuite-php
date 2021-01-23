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

class AccountSearchRowBasic extends SearchRowBasic {
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $accountingContext;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $balance;
    /**
     * @var \NetSuite\Classes\SearchColumnEnumSelectField[]
     */
    public $cashFlowRateType;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $category1099Misc;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $description;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $displayName;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $externalId;
    /**
     * @var \NetSuite\Classes\SearchColumnEnumSelectField[]
     */
    public $generalRateType;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $internalId;
    /**
     * @var \NetSuite\Classes\SearchColumnBooleanField[]
     */
    public $isInactive;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $legalName;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $locale;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $localizedLegalName;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $localizedName;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $localizedNumber;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $name;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $number;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $subsidiary;
    /**
     * @var \NetSuite\Classes\SearchColumnEnumSelectField[]
     */
    public $type;
    /**
     * @var \NetSuite\Classes\SearchColumnCustomFieldList
     */
    public $customFieldList;
    static $paramtypesmap = array(
        "accountingContext" => "SearchColumnStringField[]",
        "balance" => "SearchColumnDoubleField[]",
        "cashFlowRateType" => "SearchColumnEnumSelectField[]",
        "category1099Misc" => "SearchColumnSelectField[]",
        "description" => "SearchColumnStringField[]",
        "displayName" => "SearchColumnStringField[]",
        "externalId" => "SearchColumnSelectField[]",
        "generalRateType" => "SearchColumnEnumSelectField[]",
        "internalId" => "SearchColumnSelectField[]",
        "isInactive" => "SearchColumnBooleanField[]",
        "legalName" => "SearchColumnStringField[]",
        "locale" => "SearchColumnStringField[]",
        "localizedLegalName" => "SearchColumnStringField[]",
        "localizedName" => "SearchColumnStringField[]",
        "localizedNumber" => "SearchColumnStringField[]",
        "name" => "SearchColumnStringField[]",
        "number" => "SearchColumnStringField[]",
        "subsidiary" => "SearchColumnSelectField[]",
        "type" => "SearchColumnEnumSelectField[]",
        "customFieldList" => "SearchColumnCustomFieldList",
    );
}
