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

class ResourceAllocationSearchBasic extends SearchRecordBasic {
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $allocationType;
    /**
     * @var \NetSuite\Classes\SearchEnumMultiSelectField
     */
    public $allocationUnit;
    /**
     * @var \NetSuite\Classes\SearchEnumMultiSelectField
     */
    public $approvalStatus;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $customer;
    /**
     * @var \NetSuite\Classes\SearchDateField
     */
    public $endDate;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $externalId;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $externalIdString;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $internalId;
    /**
     * @var \NetSuite\Classes\SearchLongField
     */
    public $internalIdNumber;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $nextApprover;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $notes;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $numberHours;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $percentOfTime;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $project;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $requestedBy;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $resource;
    /**
     * @var \NetSuite\Classes\SearchDateField
     */
    public $startDate;
    /**
     * @var \NetSuite\Classes\SearchCustomFieldList
     */
    public $customFieldList;
    static $paramtypesmap = array(
        "allocationType" => "SearchMultiSelectField",
        "allocationUnit" => "SearchEnumMultiSelectField",
        "approvalStatus" => "SearchEnumMultiSelectField",
        "customer" => "SearchMultiSelectField",
        "endDate" => "SearchDateField",
        "externalId" => "SearchMultiSelectField",
        "externalIdString" => "SearchStringField",
        "internalId" => "SearchMultiSelectField",
        "internalIdNumber" => "SearchLongField",
        "nextApprover" => "SearchMultiSelectField",
        "notes" => "SearchStringField",
        "numberHours" => "SearchDoubleField",
        "percentOfTime" => "SearchDoubleField",
        "project" => "SearchMultiSelectField",
        "requestedBy" => "SearchMultiSelectField",
        "resource" => "SearchMultiSelectField",
        "startDate" => "SearchDateField",
        "customFieldList" => "SearchCustomFieldList",
    );
}
