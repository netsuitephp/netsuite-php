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

class InboundShipmentLandedCost {
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $landedCostCostCategory;
    /**
     * @var float
     */
    public $landedCostAmount;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $landedCostCurrency;
    /**
     * @var float
     */
    public $landedCostExchangeRate;
    /**
     * @var string
     */
    public $landedCostEffectiveDate;
    /**
     * @var \NetSuite\Classes\InboundShipmentLandedCostAllocationMethod
     */
    public $landedCostAllocationMethod;
    /**
     * @var \NetSuite\Classes\RecordRefList
     */
    public $landedCostShipmentItemsList;
    static $paramtypesmap = array(
        "landedCostCostCategory" => "RecordRef",
        "landedCostAmount" => "float",
        "landedCostCurrency" => "RecordRef",
        "landedCostExchangeRate" => "float",
        "landedCostEffectiveDate" => "dateTime",
        "landedCostAllocationMethod" => "InboundShipmentLandedCostAllocationMethod",
        "landedCostShipmentItemsList" => "RecordRefList",
    );
}
