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

class SupportCaseSearchBasic extends SearchRecordBasic {
    public $assigned;
    public $awaitingReply;
    public $caseNumber;
    public $category;
    public $closedDate;
    public $company;
    public $contact;
    public $createdDate;
    public $email;
    public $escalateTo;
    public $externalId;
    public $externalIdString;
    public $helpDesk;
    public $inboundEmail;
    public $internalId;
    public $internalIdNumber;
    public $isInactive;
    public $issue;
    public $item;
    public $lastMessage;
    public $lastModifiedDate;
    public $lastReopenedDate;
    public $locked;
    public $message;
    public $messageAuthor;
    public $messageDate;
    public $messageType;
    public $module;
    public $number;
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
        "assigned" => "SearchMultiSelectField",
        "awaitingReply" => "SearchBooleanField",
        "caseNumber" => "SearchStringField",
        "category" => "SearchMultiSelectField",
        "closedDate" => "SearchDateField",
        "company" => "SearchStringField",
        "contact" => "SearchStringField",
        "createdDate" => "SearchDateField",
        "email" => "SearchStringField",
        "escalateTo" => "SearchMultiSelectField",
        "externalId" => "SearchMultiSelectField",
        "externalIdString" => "SearchStringField",
        "helpDesk" => "SearchBooleanField",
        "inboundEmail" => "SearchStringField",
        "internalId" => "SearchMultiSelectField",
        "internalIdNumber" => "SearchLongField",
        "isInactive" => "SearchBooleanField",
        "issue" => "SearchMultiSelectField",
        "item" => "SearchMultiSelectField",
        "lastMessage" => "SearchBooleanField",
        "lastModifiedDate" => "SearchDateField",
        "lastReopenedDate" => "SearchDateField",
        "locked" => "SearchBooleanField",
        "message" => "SearchStringField",
        "messageAuthor" => "SearchMultiSelectField",
        "messageDate" => "SearchDateField",
        "messageType" => "SearchBooleanField",
        "module" => "SearchMultiSelectField",
        "number" => "SearchLongField",
        "origin" => "SearchMultiSelectField",
        "priority" => "SearchMultiSelectField",
        "product" => "SearchMultiSelectField",
        "profile" => "SearchMultiSelectField",
        "serialNumber" => "SearchStringField",
        "stage" => "SearchEnumMultiSelectField",
        "startDate" => "SearchDateField",
        "status" => "SearchMultiSelectField",
        "subsidiary" => "SearchMultiSelectField",
        "title" => "SearchStringField",
        "customFieldList" => "SearchCustomFieldList",
    );
}
