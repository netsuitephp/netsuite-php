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

class WorkOrderCompletionOperation {
    /**
     * @var integer
     */
    public $operationSequence;
    /**
     * @var string
     */
    public $operationName;
    /**
     * @var string
     */
    public $workCenter;
    /**
     * @var float
     */
    public $machineResources;
    /**
     * @var float
     */
    public $laborResources;
    /**
     * @var float
     */
    public $inputQuantity;
    /**
     * @var float
     */
    public $quantityRemaining;
    /**
     * @var float
     */
    public $predecessorCompletedQuantity;
    /**
     * @var float
     */
    public $completedQuantity;
    /**
     * @var boolean
     */
    public $recordSetup;
    /**
     * @var float
     */
    public $machineSetupTime;
    /**
     * @var float
     */
    public $laborSetupTime;
    /**
     * @var float
     */
    public $machineRunTime;
    /**
     * @var float
     */
    public $laborRunTime;
    static $paramtypesmap = array(
        "operationSequence" => "integer",
        "operationName" => "string",
        "workCenter" => "string",
        "machineResources" => "float",
        "laborResources" => "float",
        "inputQuantity" => "float",
        "quantityRemaining" => "float",
        "predecessorCompletedQuantity" => "float",
        "completedQuantity" => "float",
        "recordSetup" => "boolean",
        "machineSetupTime" => "float",
        "laborSetupTime" => "float",
        "machineRunTime" => "float",
        "laborRunTime" => "float",
    );
}
