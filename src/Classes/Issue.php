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

class Issue extends Record {
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $customForm;
    /**
     * @var string
     */
    public $issueNumber;
    /**
     * @var string
     */
    public $createdDate;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $issueType;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $product;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $module;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $item;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $productTeam;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $source;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $reportedBy;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $reproduce;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $versionBroken;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $buildBroken;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $versionTarget;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $buildTarget;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $versionFixed;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $buildFixed;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $severity;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $priority;
    /**
     * @var boolean
     */
    public $isShowStopper;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $assigned;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $reviewer;
    /**
     * @var boolean
     */
    public $isReviewed;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $issueStatus;
    /**
     * @var string
     */
    public $lastModifiedDate;
    /**
     * @var \NetSuite\Classes\RecordRefList
     */
    public $issueTagsList;
    /**
     * @var string
     */
    public $issueAbstract;
    /**
     * @var string
     */
    public $newDetails;
    /**
     * @var boolean
     */
    public $isOwner;
    /**
     * @var \NetSuite\Classes\IssueTrackCode
     */
    public $trackCode;
    /**
     * @var boolean
     */
    public $emailAssignee;
    /**
     * @var \NetSuite\Classes\EmailEmployeesList
     */
    public $emailEmployeesList;
    /**
     * @var \NetSuite\Classes\RecordRefList
     */
    public $emailCellsList;
    /**
     * @var string
     */
    public $externalAbstract;
    /**
     * @var string
     */
    public $externalDetails;
    /**
     * @var \NetSuite\Classes\IssueVersionList
     */
    public $brokenInVersionList;
    /**
     * @var \NetSuite\Classes\IssueVersionList
     */
    public $targetVersionList;
    /**
     * @var \NetSuite\Classes\IssueVersionList
     */
    public $fixedInVersionList;
    /**
     * @var \NetSuite\Classes\IssueRelatedIssuesList
     */
    public $relatedIssuesList;
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
