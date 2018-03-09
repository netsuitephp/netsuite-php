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

class SupportCaseSearchRowBasic extends SearchRowBasic {
    public $assigned;
    public $awaitingReply;
    public $caseNumber;
    public $category;
    public $company;
    public $contact;
    public $createdDate;
    public $customerStage;
    public $email;
    public $endDate;
    public $escalatee;
    public $externalId;
    public $helpDesk;
    public $inboundEmail;
    public $internalId;
    public $isInactive;
    public $issue;
    public $issueNumber;
    public $item;
    public $lastMessageDate;
    public $lastModifiedDate;
    public $lastReopenedDate;
    public $locked;
    public $module;
    public $origin;
    public $priority;
    public $product;
    public $profile;
    public $serialNumber;
    public $stage;
    public $startDate;
    public $status;
    public $subsidiary;
    public $title;
    public $customFieldList;
    static $paramtypesmap = array(
        "assigned" => "SearchColumnSelectField[]",
        "awaitingReply" => "SearchColumnBooleanField[]",
        "caseNumber" => "SearchColumnStringField[]",
        "category" => "SearchColumnSelectField[]",
        "company" => "SearchColumnSelectField[]",
        "contact" => "SearchColumnSelectField[]",
        "createdDate" => "SearchColumnDateField[]",
        "customerStage" => "SearchColumnEnumSelectField[]",
        "email" => "SearchColumnStringField[]",
        "endDate" => "SearchColumnDateField[]",
        "escalatee" => "SearchColumnSelectField[]",
        "externalId" => "SearchColumnSelectField[]",
        "helpDesk" => "SearchColumnBooleanField[]",
        "inboundEmail" => "SearchColumnStringField[]",
        "internalId" => "SearchColumnSelectField[]",
        "isInactive" => "SearchColumnBooleanField[]",
        "issue" => "SearchColumnSelectField[]",
        "issueNumber" => "SearchColumnStringField[]",
        "item" => "SearchColumnSelectField[]",
        "lastMessageDate" => "SearchColumnDateField[]",
        "lastModifiedDate" => "SearchColumnDateField[]",
        "lastReopenedDate" => "SearchColumnDateField[]",
        "locked" => "SearchColumnBooleanField[]",
        "module" => "SearchColumnSelectField[]",
        "origin" => "SearchColumnSelectField[]",
        "priority" => "SearchColumnSelectField[]",
        "product" => "SearchColumnSelectField[]",
        "profile" => "SearchColumnSelectField[]",
        "serialNumber" => "SearchColumnStringField[]",
        "stage" => "SearchColumnEnumSelectField[]",
        "startDate" => "SearchColumnDateField[]",
        "status" => "SearchColumnSelectField[]",
        "subsidiary" => "SearchColumnSelectField[]",
        "title" => "SearchColumnStringField[]",
        "customFieldList" => "SearchColumnCustomFieldList",
    );
}
