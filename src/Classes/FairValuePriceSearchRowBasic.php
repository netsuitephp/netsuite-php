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

class FairValuePriceSearchRowBasic extends SearchRowBasic {
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $currency;
    /**
     * @var \NetSuite\Classes\SearchColumnDateField[]
     */
    public $endDate;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $externalId;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $fairValue;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $fairValueFormula;
    /**
     * @var \NetSuite\Classes\SearchColumnEnumSelectField[]
     */
    public $fairValueRangePolicy;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $highValue;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $highValuePercent;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $internalId;
    /**
     * @var \NetSuite\Classes\SearchColumnBooleanField[]
     */
    public $isVsoePrice;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $item;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $itemRevenueCategory;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $lowValue;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $lowValuePercent;
    /**
     * @var \NetSuite\Classes\SearchColumnDateField[]
     */
    public $startDate;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $units;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
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
