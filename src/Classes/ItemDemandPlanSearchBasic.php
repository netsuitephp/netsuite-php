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

class ItemDemandPlanSearchBasic extends SearchRecordBasic {
    public $alternateSourceItem;
    public $analysisDuration;
    public $demandDate;
    public $externalId;
    public $externalIdString;
    public $internalId;
    public $internalIdNumber;
    public $item;
    public $lastModifiedDate;
    public $location;
    public $memo;
    public $projectionDuration;
    public $projectionInterval;
    public $projectionMethod;
    public $projectionStartDate;
    public $quantity;
    public $subsidiary;
    public $units;
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
