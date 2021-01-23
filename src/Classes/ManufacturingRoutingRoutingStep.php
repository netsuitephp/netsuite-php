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

class ManufacturingRoutingRoutingStep {
    /**
     * @var integer
     */
    public $operationSequence;
    /**
     * @var string
     */
    public $operationName;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $manufacturingWorkCenter;
    /**
     * @var float
     */
    public $machineResources;
    /**
     * @var float
     */
    public $laborResources;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $manufacturingCostTemplate;
    /**
     * @var float
     */
    public $setupTime;
    /**
     * @var float
     */
    public $runRate;
    /**
     * @var \NetSuite\Classes\ManufacturingLagType
     */
    public $lagType;
    /**
     * @var integer
     */
    public $lagAmount;
    /**
     * @var string
     */
    public $lagUnits;
    static $paramtypesmap = array(
        "operationSequence" => "integer",
        "operationName" => "string",
        "manufacturingWorkCenter" => "RecordRef",
        "machineResources" => "float",
        "laborResources" => "float",
        "manufacturingCostTemplate" => "RecordRef",
        "setupTime" => "float",
        "runRate" => "float",
        "lagType" => "ManufacturingLagType",
        "lagAmount" => "integer",
        "lagUnits" => "string",
    );
}
