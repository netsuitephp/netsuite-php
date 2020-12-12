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

class BomRevisionComponentSearchBasic extends SearchRecordBasic {
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $bomQuantity;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $bomRevision;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $componentYield;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $description;
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
     * @var \NetSuite\Classes\SearchEnumMultiSelectField
     */
    public $itemSource;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $itemSubtype;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $itemType;
    /**
     * @var \NetSuite\Classes\SearchLongField
     */
    public $lineId;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $quantity;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $units;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $weight;
    static $paramtypesmap = array(
        "bomQuantity" => "SearchDoubleField",
        "bomRevision" => "SearchMultiSelectField",
        "componentYield" => "SearchDoubleField",
        "description" => "SearchStringField",
        "internalId" => "SearchMultiSelectField",
        "internalIdNumber" => "SearchLongField",
        "item" => "SearchMultiSelectField",
        "itemSource" => "SearchEnumMultiSelectField",
        "itemSubtype" => "SearchStringField",
        "itemType" => "SearchMultiSelectField",
        "lineId" => "SearchLongField",
        "quantity" => "SearchDoubleField",
        "units" => "SearchStringField",
        "weight" => "SearchDoubleField",
    );
}
