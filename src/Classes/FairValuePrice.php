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

class FairValuePrice extends Record {
    public $customForm;
    public $item;
    public $itemRevenueCategory;
    public $fairValue;
    public $fairValueFormula;
    public $currency;
    public $unitsType;
    public $units;
    public $fairValueRangePolicy;
    public $lowValue;
    public $lowValuePercent;
    public $highValue;
    public $highValuePercent;
    public $isVsoePrice;
    public $startDate;
    public $endDate;
    public $customFieldList;
    public $dimensionList;
    public $internalId;
    public $externalId;
    static $paramtypesmap = array(
        "customForm" => "RecordRef",
        "item" => "RecordRef",
        "itemRevenueCategory" => "RecordRef",
        "fairValue" => "float",
        "fairValueFormula" => "RecordRef",
        "currency" => "RecordRef",
        "unitsType" => "RecordRef",
        "units" => "RecordRef",
        "fairValueRangePolicy" => "FairValuePriceFairValueRangePolicy",
        "lowValue" => "float",
        "lowValuePercent" => "float",
        "highValue" => "float",
        "highValuePercent" => "float",
        "isVsoePrice" => "boolean",
        "startDate" => "dateTime",
        "endDate" => "dateTime",
        "customFieldList" => "CustomFieldList",
        "dimensionList" => "DimensionList",
        "internalId" => "string",
        "externalId" => "string",
    );
}
