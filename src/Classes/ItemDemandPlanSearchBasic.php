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

class ItemDemandPlanSearchBasic extends SearchRecordBasic {
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $alternateSourceItem;
    /**
     * @var \NetSuite\Classes\SearchLongField
     */
    public $analysisDuration;
    /**
     * @var \NetSuite\Classes\SearchDateField
     */
    public $demandDate;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $externalId;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $externalIdString;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $internalId;
    /**
     * @var \NetSuite\Classes\SearchLongField
     */
    public $internalIdNumber;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $item;
    /**
     * @var \NetSuite\Classes\SearchDateField
     */
    public $lastModifiedDate;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $location;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $memo;
    /**
     * @var \NetSuite\Classes\SearchLongField
     */
    public $projectionDuration;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $projectionInterval;
    /**
     * @var \NetSuite\Classes\SearchEnumMultiSelectField
     */
    public $projectionMethod;
    /**
     * @var \NetSuite\Classes\SearchDateField
     */
    public $projectionStartDate;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $quantity;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $subsidiary;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $units;
    /**
     * @var \NetSuite\Classes\SearchCustomFieldList
     */
    public $customFieldList;
    static $paramtypesmap = array(
        "alternateSourceItem" => "SearchMultiSelectField",
        "analysisDuration" => "SearchLongField",
        "demandDate" => "SearchDateField",
        "externalId" => "SearchMultiSelectField",
        "externalIdString" => "SearchStringField",
        "internalId" => "SearchMultiSelectField",
        "internalIdNumber" => "SearchLongField",
        "item" => "SearchMultiSelectField",
        "lastModifiedDate" => "SearchDateField",
        "location" => "SearchMultiSelectField",
        "memo" => "SearchStringField",
        "projectionDuration" => "SearchLongField",
        "projectionInterval" => "SearchMultiSelectField",
        "projectionMethod" => "SearchEnumMultiSelectField",
        "projectionStartDate" => "SearchDateField",
        "quantity" => "SearchDoubleField",
        "subsidiary" => "SearchMultiSelectField",
        "units" => "SearchMultiSelectField",
        "customFieldList" => "SearchCustomFieldList",
    );
}
