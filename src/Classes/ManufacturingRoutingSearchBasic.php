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

class ManufacturingRoutingSearchBasic extends SearchRecordBasic {
    /**
     * @var \NetSuite\Classes\SearchBooleanField
     */
    public $autoCalculateLag;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $billOfMaterials;
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
     * @var \NetSuite\Classes\SearchBooleanField
     */
    public $isDefault;
    /**
     * @var \NetSuite\Classes\SearchBooleanField
     */
    public $isInactive;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $item;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $lagAmount;
    /**
     * @var \NetSuite\Classes\SearchEnumMultiSelectField
     */
    public $lagType;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $lagUnits;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $location;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $manufacturingCostTemplate;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $manufacturingWorkCenter;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $memo;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $name;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $operationName;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $operationYield;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $runRate;
    /**
     * @var \NetSuite\Classes\SearchLongField
     */
    public $sequence;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $setupTime;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $subsidiary;
    /**
     * @var \NetSuite\Classes\SearchCustomFieldList
     */
    public $customFieldList;
    static $paramtypesmap = array(
        "autoCalculateLag" => "SearchBooleanField",
        "billOfMaterials" => "SearchMultiSelectField",
        "externalId" => "SearchMultiSelectField",
        "externalIdString" => "SearchStringField",
        "internalId" => "SearchMultiSelectField",
        "internalIdNumber" => "SearchLongField",
        "isDefault" => "SearchBooleanField",
        "isInactive" => "SearchBooleanField",
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
        "subsidiary" => "SearchMultiSelectField",
        "customFieldList" => "SearchCustomFieldList",
    );
}
