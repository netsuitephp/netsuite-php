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

class ResourceAllocationSearchRowBasic extends SearchRowBasic {
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $allocationType;
    /**
     * @var \NetSuite\Classes\SearchColumnEnumSelectField[]
     */
    public $allocationUnit;
    /**
     * @var \NetSuite\Classes\SearchColumnEnumSelectField[]
     */
    public $approvalStatus;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $customer;
    /**
     * @var \NetSuite\Classes\SearchColumnDateField[]
     */
    public $endDate;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $externalId;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $internalId;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $nextApprover;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $notes;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $numberHours;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $percentOfTime;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $project;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $requestedBy;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $resource;
    /**
     * @var \NetSuite\Classes\SearchColumnDateField[]
     */
    public $startDate;
    /**
     * @var \NetSuite\Classes\SearchColumnCustomFieldList
     */
    public $customFieldList;
    static $paramtypesmap = array(
        "allocationType" => "SearchColumnSelectField[]",
        "allocationUnit" => "SearchColumnEnumSelectField[]",
        "approvalStatus" => "SearchColumnEnumSelectField[]",
        "customer" => "SearchColumnSelectField[]",
        "endDate" => "SearchColumnDateField[]",
        "externalId" => "SearchColumnSelectField[]",
        "internalId" => "SearchColumnSelectField[]",
        "nextApprover" => "SearchColumnSelectField[]",
        "notes" => "SearchColumnStringField[]",
        "numberHours" => "SearchColumnDoubleField[]",
        "percentOfTime" => "SearchColumnDoubleField[]",
        "project" => "SearchColumnSelectField[]",
        "requestedBy" => "SearchColumnSelectField[]",
        "resource" => "SearchColumnSelectField[]",
        "startDate" => "SearchColumnDateField[]",
        "customFieldList" => "SearchColumnCustomFieldList",
    );
}
