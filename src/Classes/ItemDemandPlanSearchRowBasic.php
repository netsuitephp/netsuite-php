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

class ItemDemandPlanSearchRowBasic extends SearchRowBasic {
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $alternateSourceItem;
    /**
     * @var \NetSuite\Classes\SearchColumnLongField[]
     */
    public $analysisDuration;
    /**
     * @var \NetSuite\Classes\SearchColumnDateField[]
     */
    public $demandDate;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $externalId;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $internalId;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $item;
    /**
     * @var \NetSuite\Classes\SearchColumnDateField[]
     */
    public $lastModifiedDate;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $location;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $memo;
    /**
     * @var \NetSuite\Classes\SearchColumnLongField[]
     */
    public $projectionDuration;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $projectionInterval;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $projectionMethod;
    /**
     * @var \NetSuite\Classes\SearchColumnDateField[]
     */
    public $projectionStartDate;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $quantity;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $quantityUom;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $subsidiary;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $units;
    /**
     * @var \NetSuite\Classes\SearchColumnCustomFieldList
     */
    public $customFieldList;
    static $paramtypesmap = array(
        "alternateSourceItem" => "SearchColumnSelectField[]",
        "analysisDuration" => "SearchColumnLongField[]",
        "demandDate" => "SearchColumnDateField[]",
        "externalId" => "SearchColumnSelectField[]",
        "internalId" => "SearchColumnSelectField[]",
        "item" => "SearchColumnSelectField[]",
        "lastModifiedDate" => "SearchColumnDateField[]",
        "location" => "SearchColumnSelectField[]",
        "memo" => "SearchColumnStringField[]",
        "projectionDuration" => "SearchColumnLongField[]",
        "projectionInterval" => "SearchColumnStringField[]",
        "projectionMethod" => "SearchColumnStringField[]",
        "projectionStartDate" => "SearchColumnDateField[]",
        "quantity" => "SearchColumnDoubleField[]",
        "quantityUom" => "SearchColumnDoubleField[]",
        "subsidiary" => "SearchColumnSelectField[]",
        "units" => "SearchColumnSelectField[]",
        "customFieldList" => "SearchColumnCustomFieldList",
    );
}
