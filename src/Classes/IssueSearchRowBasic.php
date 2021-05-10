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

class IssueSearchRowBasic extends SearchRowBasic {
    /**
     * @var \NetSuite\Classes\SearchColumnLongField[]
     */
    public $ageInMonths;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $assigned;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $buildBroken;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $buildFixed;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $buildTarget;
    /**
     * @var \NetSuite\Classes\SearchColumnLongField[]
     */
    public $caseCount;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $caseNumber;
    /**
     * @var \NetSuite\Classes\SearchColumnDateField[]
     */
    public $closedDate;
    /**
     * @var \NetSuite\Classes\SearchColumnDateField[]
     */
    public $createdDate;
    /**
     * @var \NetSuite\Classes\SearchColumnDateField[]
     */
    public $dateReleased;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $duplicateOf;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $employeeOrTeam;
    /**
     * @var \NetSuite\Classes\SearchColumnEnumSelectField[]
     */
    public $eventStatus;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $externalAbstract;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $externalDetails;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $externalFixedIn;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $externalId;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $externalStatus;
    /**
     * @var \NetSuite\Classes\SearchColumnDateField[]
     */
    public $fixed;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $fixedBy;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $internalId;
    /**
     * @var \NetSuite\Classes\SearchColumnBooleanField[]
     */
    public $isOwner;
    /**
     * @var \NetSuite\Classes\SearchColumnBooleanField[]
     */
    public $isReviewed;
    /**
     * @var \NetSuite\Classes\SearchColumnBooleanField[]
     */
    public $isShowStopper;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $issueAbstract;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $issueStatus;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $item;
    /**
     * @var \NetSuite\Classes\SearchColumnDateField[]
     */
    public $lastModifiedDate;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $module;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $number;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $originalFixedIn;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $priority;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $product;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $productTeam;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $relatedIssue;
    /**
     * @var \NetSuite\Classes\SearchColumnEnumSelectField[]
     */
    public $relationship;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $relationshipComment;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $reportedBy;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $reproduce;
    /**
     * @var \NetSuite\Classes\SearchColumnDateField[]
     */
    public $resolved;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $resolvedBy;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $reviewer;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $severity;
    /**
     * @var \NetSuite\Classes\SearchColumnEnumSelectField[]
     */
    public $source;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $tags;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $type;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $userType;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $versionBroken;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $versionFixed;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $versionTarget;
    /**
     * @var \NetSuite\Classes\SearchColumnCustomFieldList
     */
    public $customFieldList;
    static $paramtypesmap = array(
        "ageInMonths" => "SearchColumnLongField[]",
        "assigned" => "SearchColumnSelectField[]",
        "buildBroken" => "SearchColumnSelectField[]",
        "buildFixed" => "SearchColumnSelectField[]",
        "buildTarget" => "SearchColumnSelectField[]",
        "caseCount" => "SearchColumnLongField[]",
        "caseNumber" => "SearchColumnStringField[]",
        "closedDate" => "SearchColumnDateField[]",
        "createdDate" => "SearchColumnDateField[]",
        "dateReleased" => "SearchColumnDateField[]",
        "duplicateOf" => "SearchColumnSelectField[]",
        "employeeOrTeam" => "SearchColumnSelectField[]",
        "eventStatus" => "SearchColumnEnumSelectField[]",
        "externalAbstract" => "SearchColumnStringField[]",
        "externalDetails" => "SearchColumnStringField[]",
        "externalFixedIn" => "SearchColumnStringField[]",
        "externalId" => "SearchColumnSelectField[]",
        "externalStatus" => "SearchColumnSelectField[]",
        "fixed" => "SearchColumnDateField[]",
        "fixedBy" => "SearchColumnSelectField[]",
        "internalId" => "SearchColumnSelectField[]",
        "isOwner" => "SearchColumnBooleanField[]",
        "isReviewed" => "SearchColumnBooleanField[]",
        "isShowStopper" => "SearchColumnBooleanField[]",
        "issueAbstract" => "SearchColumnStringField[]",
        "issueStatus" => "SearchColumnSelectField[]",
        "item" => "SearchColumnSelectField[]",
        "lastModifiedDate" => "SearchColumnDateField[]",
        "module" => "SearchColumnStringField[]",
        "number" => "SearchColumnStringField[]",
        "originalFixedIn" => "SearchColumnStringField[]",
        "priority" => "SearchColumnSelectField[]",
        "product" => "SearchColumnSelectField[]",
        "productTeam" => "SearchColumnSelectField[]",
        "relatedIssue" => "SearchColumnSelectField[]",
        "relationship" => "SearchColumnEnumSelectField[]",
        "relationshipComment" => "SearchColumnStringField[]",
        "reportedBy" => "SearchColumnSelectField[]",
        "reproduce" => "SearchColumnSelectField[]",
        "resolved" => "SearchColumnDateField[]",
        "resolvedBy" => "SearchColumnSelectField[]",
        "reviewer" => "SearchColumnSelectField[]",
        "severity" => "SearchColumnSelectField[]",
        "source" => "SearchColumnEnumSelectField[]",
        "tags" => "SearchColumnSelectField[]",
        "type" => "SearchColumnStringField[]",
        "userType" => "SearchColumnSelectField[]",
        "versionBroken" => "SearchColumnSelectField[]",
        "versionFixed" => "SearchColumnSelectField[]",
        "versionTarget" => "SearchColumnSelectField[]",
        "customFieldList" => "SearchColumnCustomFieldList",
    );
}
