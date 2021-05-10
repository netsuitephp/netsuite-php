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

class BomRevisionComponentSearchRowBasic extends SearchRowBasic {
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $bomQuantity;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $bomRevision;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $componentYield;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $description;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $internalId;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $item;
    /**
     * @var \NetSuite\Classes\SearchColumnEnumSelectField[]
     */
    public $itemSource;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $itemSubtype;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $itemType;
    /**
     * @var \NetSuite\Classes\SearchColumnLongField[]
     */
    public $lineId;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $quantity;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $units;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $weight;
    /**
     * @var \NetSuite\Classes\SearchColumnCustomFieldList
     */
    public $customFieldList;
    static $paramtypesmap = array(
        "bomQuantity" => "SearchColumnDoubleField[]",
        "bomRevision" => "SearchColumnSelectField[]",
        "componentYield" => "SearchColumnDoubleField[]",
        "description" => "SearchColumnStringField[]",
        "internalId" => "SearchColumnSelectField[]",
        "item" => "SearchColumnSelectField[]",
        "itemSource" => "SearchColumnEnumSelectField[]",
        "itemSubtype" => "SearchColumnStringField[]",
        "itemType" => "SearchColumnSelectField[]",
        "lineId" => "SearchColumnLongField[]",
        "quantity" => "SearchColumnDoubleField[]",
        "units" => "SearchColumnStringField[]",
        "weight" => "SearchColumnDoubleField[]",
        "customFieldList" => "SearchColumnCustomFieldList",
    );
}
