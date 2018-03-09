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

class FairValuePriceSearchRowBasic extends SearchRowBasic {
    public $currency;
    public $endDate;
    public $externalId;
    public $fairValue;
    public $fairValueFormula;
    public $fairValueRangePolicy;
    public $highValue;
    public $highValuePercent;
    public $internalId;
    public $isVsoePrice;
    public $item;
    public $itemRevenueCategory;
    public $lowValue;
    public $lowValuePercent;
    public $startDate;
    public $units;
    public $unitsType;
    static $paramtypesmap = array(
        "currency" => "SearchColumnSelectField[]",
        "endDate" => "SearchColumnDateField[]",
        "externalId" => "SearchColumnSelectField[]",
        "fairValue" => "SearchColumnDoubleField[]",
        "fairValueFormula" => "SearchColumnSelectField[]",
        "fairValueRangePolicy" => "SearchColumnEnumSelectField[]",
        "highValue" => "SearchColumnDoubleField[]",
        "highValuePercent" => "SearchColumnDoubleField[]",
        "internalId" => "SearchColumnSelectField[]",
        "isVsoePrice" => "SearchColumnBooleanField[]",
        "item" => "SearchColumnSelectField[]",
        "itemRevenueCategory" => "SearchColumnSelectField[]",
        "lowValue" => "SearchColumnDoubleField[]",
        "lowValuePercent" => "SearchColumnDoubleField[]",
        "startDate" => "SearchColumnDateField[]",
        "units" => "SearchColumnSelectField[]",
        "unitsType" => "SearchColumnSelectField[]",
    );
}
