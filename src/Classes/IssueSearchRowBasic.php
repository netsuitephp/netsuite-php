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

class IssueSearchRowBasic extends SearchRowBasic {
    public $ageInMonths;
    public $assigned;
    public $buildBroken;
    public $buildFixed;
    public $buildTarget;
    public $caseCount;
    public $caseNumber;
    public $closedDate;
    public $createdDate;
    public $dateReleased;
    public $duplicateOf;
    public $employeeOrTeam;
    public $eventStatus;
    public $externalAbstract;
    public $externalDetails;
    public $externalFixedIn;
    public $externalId;
    public $externalStatus;
    public $fixed;
    public $fixedBy;
    public $internalId;
    public $isOwner;
    public $isReviewed;
    public $isShowStopper;
    public $issueAbstract;
    public $issueStatus;
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
    public $tags;
    public $type;
    public $userType;
    public $versionBroken;
    public $versionFixed;
    public $versionTarget;
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
