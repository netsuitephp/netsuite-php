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

class IssueSearchBasic extends SearchRecordBasic {
    /**
     * @var \NetSuite\Classes\SearchLongField
     */
    public $ageInMonths;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $assigned;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $buildBroken;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $buildBrokenName;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $buildFixed;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $buildFixedName;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $buildTarget;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $buildTargetName;
    /**
     * @var \NetSuite\Classes\SearchLongField
     */
    public $caseCount;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $caseNumber;
    /**
     * @var \NetSuite\Classes\SearchDateField
     */
    public $closedDate;
    /**
     * @var \NetSuite\Classes\SearchDateField
     */
    public $createdDate;
    /**
     * @var \NetSuite\Classes\SearchDateField
     */
    public $dateReleased;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $details;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $duplicateOf;
    /**
     * @var \NetSuite\Classes\SearchBooleanField
     */
    public $eFix;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $employeeOrTeam;
    /**
     * @var \NetSuite\Classes\SearchEnumMultiSelectField
     */
    public $eventStatus;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $externalAbstract;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $externalDetails;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $externalFixedIn;
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
    public $externalStatus;
    /**
     * @var \NetSuite\Classes\SearchDateField
     */
    public $fixed;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $fixedBy;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $internalId;
    /**
     * @var \NetSuite\Classes\SearchLongField
     */
    public $internalIdNumber;
    /**
     * @var \NetSuite\Classes\SearchBooleanField
     */
    public $isOwner;
    /**
     * @var \NetSuite\Classes\SearchBooleanField
     */
    public $isReviewed;
    /**
     * @var \NetSuite\Classes\SearchBooleanField
     */
    public $isShowStopper;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $issueAbstract;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $issueNumber;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $item;
    /**
     * @var \NetSuite\Classes\SearchDateField
     */
    public $lastModifiedDate;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $module;
    /**
     * @var \NetSuite\Classes\SearchLongField
     */
    public $number;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $originalFixedIn;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $priority;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $product;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $productTeam;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $relatedIssue;
    /**
     * @var \NetSuite\Classes\SearchEnumMultiSelectField
     */
    public $relationship;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $relationshipComment;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $reportedBy;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $reproduce;
    /**
     * @var \NetSuite\Classes\SearchDateField
     */
    public $resolved;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $resolvedBy;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $reviewer;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $severity;
    /**
     * @var \NetSuite\Classes\SearchEnumMultiSelectField
     */
    public $source;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $status;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $tags;
    /**
     * @var \NetSuite\Classes\SearchBooleanField
     */
    public $tracking;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $type;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $userType;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $versionBroken;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $versionFixed;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $versionTarget;
    /**
     * @var \NetSuite\Classes\SearchCustomFieldList
     */
    public $customFieldList;
    static $paramtypesmap = array(
        "ageInMonths" => "SearchLongField",
        "assigned" => "SearchMultiSelectField",
        "buildBroken" => "SearchMultiSelectField",
        "buildBrokenName" => "SearchStringField",
        "buildFixed" => "SearchMultiSelectField",
        "buildFixedName" => "SearchStringField",
        "buildTarget" => "SearchMultiSelectField",
        "buildTargetName" => "SearchStringField",
        "caseCount" => "SearchLongField",
        "caseNumber" => "SearchStringField",
        "closedDate" => "SearchDateField",
        "createdDate" => "SearchDateField",
        "dateReleased" => "SearchDateField",
        "details" => "SearchStringField",
        "duplicateOf" => "SearchMultiSelectField",
        "eFix" => "SearchBooleanField",
        "employeeOrTeam" => "SearchMultiSelectField",
        "eventStatus" => "SearchEnumMultiSelectField",
        "externalAbstract" => "SearchStringField",
        "externalDetails" => "SearchStringField",
        "externalFixedIn" => "SearchMultiSelectField",
        "externalId" => "SearchMultiSelectField",
        "externalIdString" => "SearchStringField",
        "externalStatus" => "SearchMultiSelectField",
        "fixed" => "SearchDateField",
        "fixedBy" => "SearchMultiSelectField",
        "internalId" => "SearchMultiSelectField",
        "internalIdNumber" => "SearchLongField",
        "isOwner" => "SearchBooleanField",
        "isReviewed" => "SearchBooleanField",
        "isShowStopper" => "SearchBooleanField",
        "issueAbstract" => "SearchStringField",
        "issueNumber" => "SearchStringField",
        "item" => "SearchMultiSelectField",
        "lastModifiedDate" => "SearchDateField",
        "module" => "SearchMultiSelectField",
        "number" => "SearchLongField",
        "originalFixedIn" => "SearchStringField",
        "priority" => "SearchMultiSelectField",
        "product" => "SearchMultiSelectField",
        "productTeam" => "SearchMultiSelectField",
        "relatedIssue" => "SearchMultiSelectField",
        "relationship" => "SearchEnumMultiSelectField",
        "relationshipComment" => "SearchStringField",
        "reportedBy" => "SearchMultiSelectField",
        "reproduce" => "SearchMultiSelectField",
        "resolved" => "SearchDateField",
        "resolvedBy" => "SearchMultiSelectField",
        "reviewer" => "SearchMultiSelectField",
        "severity" => "SearchMultiSelectField",
        "source" => "SearchEnumMultiSelectField",
        "status" => "SearchMultiSelectField",
        "tags" => "SearchMultiSelectField",
        "tracking" => "SearchBooleanField",
        "type" => "SearchMultiSelectField",
        "userType" => "SearchMultiSelectField",
        "versionBroken" => "SearchMultiSelectField",
        "versionFixed" => "SearchMultiSelectField",
        "versionTarget" => "SearchMultiSelectField",
        "customFieldList" => "SearchCustomFieldList",
    );
}
