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

class ManufacturingOperationTaskPredecessor {
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $task;
    /**
     * @var \NetSuite\Classes\ManufacturingOperationTaskPredecessorPredecessorType
     */
    public $type;
    /**
     * @var string
     */
    public $startDate;
    /**
     * @var string
     */
    public $endDate;
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
        "task" => "RecordRef",
        "type" => "ManufacturingOperationTaskPredecessorPredecessorType",
        "startDate" => "dateTime",
        "endDate" => "dateTime",
        "lagType" => "ManufacturingLagType",
        "lagAmount" => "integer",
        "lagUnits" => "string",
    );
}
