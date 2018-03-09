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

class FairValuePriceSearchBasic extends SearchRecordBasic {
    public $currency;
    public $endDate;
    public $externalId;
    public $externalIdString;
    public $fairValue;
    public $fairValueFormula;
    public $fairValueRangePolicy;
    public $highValue;
    public $highValuePercent;
    public $internalId;
    public $internalIdNumber;
    public $isVsoePrice;
    public $item;
    public $itemRevenueCategory;
    public $lowValue;
    public $lowValuePercent;
    public $startDate;
    public $unitsType;
    static $paramtypesmap = array(
        "currency" => "SearchMultiSelectField",
        "endDate" => "SearchDateField",
        "externalId" => "SearchMultiSelectField",
        "externalIdString" => "SearchStringField",
        "fairValue" => "SearchDoubleField",
        "fairValueFormula" => "SearchMultiSelectField",
        "fairValueRangePolicy" => "SearchEnumMultiSelectField",
        "highValue" => "SearchDoubleField",
        "highValuePercent" => "SearchDoubleField",
        "internalId" => "SearchMultiSelectField",
        "internalIdNumber" => "SearchLongField",
        "isVsoePrice" => "SearchBooleanField",
        "item" => "SearchMultiSelectField",
        "itemRevenueCategory" => "SearchMultiSelectField",
        "lowValue" => "SearchDoubleField",
        "lowValuePercent" => "SearchDoubleField",
        "startDate" => "SearchDateField",
        "unitsType" => "SearchMultiSelectField",
    );
}
