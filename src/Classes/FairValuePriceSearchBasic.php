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

class FairValuePriceSearchBasic extends SearchRecordBasic {
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $currency;
    /**
     * @var \NetSuite\Classes\SearchDateField
     */
    public $endDate;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $externalId;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $externalIdString;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $fairValue;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $fairValueFormula;
    /**
     * @var \NetSuite\Classes\SearchEnumMultiSelectField
     */
    public $fairValueRangePolicy;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $highValue;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $highValuePercent;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $internalId;
    /**
     * @var \NetSuite\Classes\SearchLongField
     */
    public $internalIdNumber;
    /**
     * @var \NetSuite\Classes\SearchBooleanField
     */
    public $isVsoePrice;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $item;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $itemRevenueCategory;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $lowValue;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $lowValuePercent;
    /**
     * @var \NetSuite\Classes\SearchDateField
     */
    public $startDate;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
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
