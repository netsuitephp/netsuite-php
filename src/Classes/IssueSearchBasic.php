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
 * generated:  2017-08-01 09:12:52 PM UTC
 */

namespace NetSuite\Classes;

class IssueSearchBasic extends SearchRecordBasic {
    public $ageInMonths;
    public $assigned;
    public $buildBroken;
    public $buildBrokenName;
    public $buildFixed;
    public $buildFixedName;
    public $buildTarget;
    public $buildTargetName;
    public $caseCount;
    public $caseNumber;
    public $closedDate;
    public $createdDate;
    public $dateReleased;
    public $details;
    public $duplicateOf;
    public $eFix;
    public $employeeOrTeam;
    public $eventStatus;
    public $externalAbstract;
    public $externalDetails;
    public $externalFixedIn;
    public $externalId;
    public $externalIdString;
    public $externalStatus;
    public $fixed;
    public $fixedBy;
    public $internalId;
    public $internalIdNumber;
    public $isOwner;
    public $isReviewed;
    public $isShowStopper;
    public $issueAbstract;
    public $issueNumber;
    public $item;
    public $lastModifiedDate;
    public $module;
    public $number;
    public $originalFixedIn;
    public $priority;
    public $product;
    public $productTeam;
    public $relatedIssue;
    public $relationship;
    public $relationshipComment;
    public $reportedBy;
    public $reproduce;
    public $resolved;
    public $resolvedBy;
    public $reviewer;
    public $severity;
    public $source;
    public $status;
    public $tags;
    public $tracking;
    public $type;
    public $userType;
    public $versionBroken;
    public $versionFixed;
    public $versionTarget;
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
