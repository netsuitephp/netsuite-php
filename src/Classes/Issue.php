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

class Issue extends Record {
    public $customForm;
    public $issueNumber;
    public $createdDate;
    public $issueType;
    public $product;
    public $module;
    public $item;
    public $productTeam;
    public $source;
    public $reportedBy;
    public $reproduce;
    public $versionBroken;
    public $buildBroken;
    public $versionTarget;
    public $buildTarget;
    public $versionFixed;
    public $buildFixed;
    public $severity;
    public $priority;
    public $isShowStopper;
    public $assigned;
    public $reviewer;
    public $isReviewed;
    public $issueStatus;
    public $lastModifiedDate;
    public $issueTagsList;
    public $issueAbstract;
    public $newDetails;
    public $isOwner;
    public $trackCode;
    public $emailAssignee;
    public $emailEmployeesList;
    public $emailCellsList;
    public $externalAbstract;
    public $externalDetails;
    public $brokenInVersionList;
    public $targetVersionList;
    public $fixedInVersionList;
    public $relatedIssuesList;
    public $customFieldList;
    public $internalId;
    public $externalId;
    static $paramtypesmap = array(
        "customForm" => "RecordRef",
        "issueNumber" => "string",
        "createdDate" => "dateTime",
        "issueType" => "RecordRef",
        "product" => "RecordRef",
        "module" => "RecordRef",
        "item" => "RecordRef",
        "productTeam" => "RecordRef",
        "source" => "RecordRef",
        "reportedBy" => "RecordRef",
        "reproduce" => "RecordRef",
        "versionBroken" => "RecordRef",
        "buildBroken" => "RecordRef",
        "versionTarget" => "RecordRef",
        "buildTarget" => "RecordRef",
        "versionFixed" => "RecordRef",
        "buildFixed" => "RecordRef",
        "severity" => "RecordRef",
        "priority" => "RecordRef",
        "isShowStopper" => "boolean",
        "assigned" => "RecordRef",
        "reviewer" => "RecordRef",
        "isReviewed" => "boolean",
        "issueStatus" => "RecordRef",
        "lastModifiedDate" => "dateTime",
        "issueTagsList" => "RecordRefList",
        "issueAbstract" => "string",
        "newDetails" => "string",
        "isOwner" => "boolean",
        "trackCode" => "IssueTrackCode",
        "emailAssignee" => "boolean",
        "emailEmployeesList" => "EmailEmployeesList",
        "emailCellsList" => "RecordRefList",
        "externalAbstract" => "string",
        "externalDetails" => "string",
        "brokenInVersionList" => "IssueVersionList",
        "targetVersionList" => "IssueVersionList",
        "fixedInVersionList" => "IssueVersionList",
        "relatedIssuesList" => "IssueRelatedIssuesList",
        "customFieldList" => "CustomFieldList",
        "internalId" => "string",
        "externalId" => "string",
    );
}
