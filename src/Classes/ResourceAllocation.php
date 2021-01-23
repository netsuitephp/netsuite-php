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

class ResourceAllocation extends Record {
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $requestedby;
    /**
     * @var \NetSuite\Classes\ResourceAllocationApprovalStatus
     */
    public $approvalStatus;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $nextApprover;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $allocationResource;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $project;
    /**
     * @var string
     */
    public $notes;
    /**
     * @var string
     */
    public $startDate;
    /**
     * @var string
     */
    public $endDate;
    /**
     * @var float
     */
    public $allocationAmount;
    /**
     * @var \NetSuite\Classes\ResourceAllocationAllocationUnit
     */
    public $allocationUnit;
    /**
     * @var float
     */
    public $numberHours;
    /**
     * @var float
     */
    public $percentOfTime;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $allocationType;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $customForm;
    /**
     * @var \NetSuite\Classes\CustomFieldList
     */
    public $customFieldList;
    /**
     * @var string
     */
    public $internalId;
    /**
     * @var string
     */
    public $externalId;
    static $paramtypesmap = array(
        "requestedby" => "RecordRef",
        "approvalStatus" => "ResourceAllocationApprovalStatus",
        "nextApprover" => "RecordRef",
        "allocationResource" => "RecordRef",
        "project" => "RecordRef",
        "notes" => "string",
        "startDate" => "dateTime",
        "endDate" => "dateTime",
        "allocationAmount" => "float",
        "allocationUnit" => "ResourceAllocationAllocationUnit",
        "numberHours" => "float",
        "percentOfTime" => "float",
        "allocationType" => "RecordRef",
        "customForm" => "RecordRef",
        "customFieldList" => "CustomFieldList",
        "internalId" => "string",
        "externalId" => "string",
    );
}
