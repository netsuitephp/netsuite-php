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

class ManufacturingRoutingRoutingComponent {
    /**
     * @var string
     */
    public $itemName;
    /**
     * @var string
     */
    public $revision;
    /**
     * @var string
     */
    public $description;
    /**
     * @var float
     */
    public $yield;
    /**
     * @var float
     */
    public $bomQuantity;
    /**
     * @var float
     */
    public $quantity;
    /**
     * @var string
     */
    public $units;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $operationDisplayText;
    /**
     * @var integer
     */
    public $operationSequenceNumber;
    /**
     * @var string
     */
    public $component;
    /**
     * @var string
     */
    public $item;
    static $paramtypesmap = array(
        "itemName" => "string",
        "revision" => "string",
        "description" => "string",
        "yield" => "float",
        "bomQuantity" => "float",
        "quantity" => "float",
        "units" => "string",
        "operationDisplayText" => "RecordRef",
        "operationSequenceNumber" => "integer",
        "component" => "string",
        "item" => "string",
    );
}
