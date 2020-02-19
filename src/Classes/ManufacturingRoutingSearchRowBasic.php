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
 * generated:  2020-02-19 09:58:55 AM CST
 */

namespace NetSuite\Classes;

class ManufacturingRoutingSearchRowBasic extends SearchRowBasic {
    public $autoCalculateLag;
    public $billOfMaterials;
    public $externalId;
    public $internalId;
    public $isDefault;
    public $isInactive;
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
    public $subsidiary;
    public $customFieldList;
    static $paramtypesmap = array(
        "autoCalculateLag" => "SearchColumnBooleanField[]",
        "billOfMaterials" => "SearchColumnSelectField[]",
        "externalId" => "SearchColumnSelectField[]",
        "internalId" => "SearchColumnSelectField[]",
        "isDefault" => "SearchColumnBooleanField[]",
        "isInactive" => "SearchColumnBooleanField[]",
        "item" => "SearchColumnSelectField[]",
        "lagAmount" => "SearchColumnDoubleField[]",
        "lagType" => "SearchColumnEnumSelectField[]",
        "lagUnits" => "SearchColumnStringField[]",
        "location" => "SearchColumnSelectField[]",
        "manufacturingCostTemplate" => "SearchColumnSelectField[]",
        "manufacturingWorkCenter" => "SearchColumnSelectField[]",
        "memo" => "SearchColumnStringField[]",
        "name" => "SearchColumnStringField[]",
        "operationName" => "SearchColumnStringField[]",
        "operationYield" => "SearchColumnDoubleField[]",
        "runRate" => "SearchColumnDoubleField[]",
        "sequence" => "SearchColumnLongField[]",
        "setupTime" => "SearchColumnDoubleField[]",
        "subsidiary" => "SearchColumnSelectField[]",
        "customFieldList" => "SearchColumnCustomFieldList",
    );
}
