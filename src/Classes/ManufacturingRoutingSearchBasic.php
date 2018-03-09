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

class ManufacturingRoutingSearchBasic extends SearchRecordBasic {
    public $autoCalculateLag;
    public $externalId;
    public $externalIdString;
    public $internalId;
    public $internalIdNumber;
    public $isDefault;
    public $isInactive;
    public $subsidiary;
    public $item;
    public $lagAmount;
    public $lagType;
    public $lagUnits;
    public $location;
    public $manufacturingCostTemplate;
    public $manufacturingWorkCenter;
    public $memo;
    public $name;
    public $operationName;
    public $operationYield;
    public $runRate;
    public $sequence;
    public $setupTime;
    public $customFieldList;
    static $paramtypesmap = array(
        "autoCalculateLag" => "SearchBooleanField",
        "externalId" => "SearchMultiSelectField",
        "externalIdString" => "SearchStringField",
        "internalId" => "SearchMultiSelectField",
        "internalIdNumber" => "SearchLongField",
        "isDefault" => "SearchBooleanField",
        "isInactive" => "SearchBooleanField",
        "subsidiary" => "SearchMultiSelectField",
        "item" => "SearchMultiSelectField",
        "lagAmount" => "SearchDoubleField",
        "lagType" => "SearchEnumMultiSelectField",
        "lagUnits" => "SearchStringField",
        "location" => "SearchMultiSelectField",
        "manufacturingCostTemplate" => "SearchMultiSelectField",
        "manufacturingWorkCenter" => "SearchMultiSelectField",
        "memo" => "SearchStringField",
        "name" => "SearchStringField",
        "operationName" => "SearchStringField",
        "operationYield" => "SearchDoubleField",
        "runRate" => "SearchDoubleField",
        "sequence" => "SearchLongField",
        "setupTime" => "SearchDoubleField",
        "customFieldList" => "SearchCustomFieldList",
    );
}
