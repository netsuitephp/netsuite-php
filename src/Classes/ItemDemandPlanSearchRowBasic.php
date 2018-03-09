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

class ItemDemandPlanSearchRowBasic extends SearchRowBasic {
    public $alternateSourceItem;
    public $analysisDuration;
    public $demandDate;
    public $externalId;
    public $internalId;
    public $item;
    public $lastModifiedDate;
    public $location;
    public $memo;
    public $projectionDuration;
    public $projectionInterval;
    public $projectionMethod;
    public $projectionStartDate;
    public $quantity;
    public $quantityUom;
    public $subsidiary;
    public $units;
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
