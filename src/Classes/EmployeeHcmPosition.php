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

class EmployeeHcmPosition {
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $position;
    /**
     * @var boolean
     */
    public $primaryPosition;
    /**
     * @var string
     */
    public $positionId;
    /**
     * @var float
     */
    public $positionAllocation;
    /**
     * @var float
     */
    public $fullTimeEquivalent;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $employmentCategory;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $reportsTo;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $subsidiary;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $location;
    static $paramtypesmap = array(
        "position" => "RecordRef",
        "primaryPosition" => "boolean",
        "positionId" => "string",
        "positionAllocation" => "float",
        "fullTimeEquivalent" => "float",
        "employmentCategory" => "RecordRef",
        "reportsTo" => "RecordRef",
        "subsidiary" => "RecordRef",
        "location" => "RecordRef",
    );
}
