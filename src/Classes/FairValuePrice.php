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

class FairValuePrice extends Record {
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $customForm;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $item;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $itemRevenueCategory;
    /**
     * @var float
     */
    public $fairValue;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $fairValueFormula;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $currency;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $unitsType;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $units;
    /**
     * @var \NetSuite\Classes\FairValuePriceFairValueRangePolicy
     */
    public $fairValueRangePolicy;
    /**
     * @var float
     */
    public $lowValue;
    /**
     * @var float
     */
    public $lowValuePercent;
    /**
     * @var float
     */
    public $highValue;
    /**
     * @var float
     */
    public $highValuePercent;
    /**
     * @var boolean
     */
    public $isVsoePrice;
    /**
     * @var string
     */
    public $startDate;
    /**
     * @var string
     */
    public $endDate;
    /**
     * @var \NetSuite\Classes\CustomFieldList
     */
    public $customFieldList;
    /**
     * @var \NetSuite\Classes\DimensionList
     */
    public $dimensionList;
    /**
     * @var string
     */
    public $internalId;
    /**
     * @var string
     */
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
