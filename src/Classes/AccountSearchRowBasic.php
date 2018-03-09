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

class AccountSearchRowBasic extends SearchRowBasic {
    public $accountingContext;
    public $balance;
    public $cashFlowRateType;
    public $category1099Misc;
    public $description;
    public $externalId;
    public $generalRateType;
    public $internalId;
    public $isInactive;
    public $legalName;
    public $locale;
    public $localizedLegalName;
    public $localizedName;
    public $localizedNumber;
    public $name;
    public $number;
    public $subsidiary;
    public $type;
    public $customFieldList;
    static $paramtypesmap = array(
        "accountingContext" => "SearchColumnStringField[]",
        "balance" => "SearchColumnDoubleField[]",
        "cashFlowRateType" => "SearchColumnEnumSelectField[]",
        "category1099Misc" => "SearchColumnSelectField[]",
        "description" => "SearchColumnStringField[]",
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
