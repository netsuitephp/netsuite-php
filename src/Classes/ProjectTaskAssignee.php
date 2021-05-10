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

class ProjectTaskAssignee {
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $resource;
    /**
     * @var float
     */
    public $units;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $serviceItem;
    /**
     * @var float
     */
    public $estimatedWork;
    /**
     * @var float
     */
    public $unitCost;
    /**
     * @var float
     */
    public $unitPrice;
    /**
     * @var float
     */
    public $cost;
    /**
     * @var float
     */
    public $price;
    /**
     * @var float
     */
    public $plannedWork;
    static $paramtypesmap = array(
        "resource" => "RecordRef",
        "units" => "float",
        "serviceItem" => "RecordRef",
        "estimatedWork" => "float",
        "unitCost" => "float",
        "unitPrice" => "float",
        "cost" => "float",
        "price" => "float",
        "plannedWork" => "float",
    );
}
