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

class SupportCase extends Record {
    public $escalationMessage;
    public $lastReopenedDate;
    public $endDate;
    public $incomingMessage;
    public $insertSolution;
    public $outgoingMessage;
    public $searchSolution;
    public $emailForm;
    public $newSolutionFromMsg;
    public $internalOnly;
    public $customForm;
    public $title;
    public $caseNumber;
    public $startDate;
    public $createdDate;
    public $lastModifiedDate;
    public $lastMessageDate;
    public $company;
    public $profile;
    public $subsidiary;
    public $contact;
    public $email;
    public $phone;
    public $product;
    public $module;
    public $item;
    public $serialNumber;
    public $inboundEmail;
    public $issue;
    public $status;
    public $isInactive;
    public $priority;
    public $origin;
    public $category;
    public $assigned;
    public $helpDesk;
    public $emailEmployeesList;
    public $escalateToList;
    public $timeItemList;
    public $solutionsList;
    public $customFieldList;
    public $internalId;
    public $externalId;
    static $paramtypesmap = array(
        "escalationMessage" => "string",
        "lastReopenedDate" => "dateTime",
        "endDate" => "dateTime",
        "incomingMessage" => "string",
        "insertSolution" => "RecordRef",
        "outgoingMessage" => "string",
        "searchSolution" => "string",
        "emailForm" => "boolean",
        "newSolutionFromMsg" => "string",
        "internalOnly" => "boolean",
        "customForm" => "RecordRef",
        "title" => "string",
        "caseNumber" => "string",
        "startDate" => "dateTime",
        "createdDate" => "dateTime",
        "lastModifiedDate" => "dateTime",
        "lastMessageDate" => "dateTime",
        "company" => "RecordRef",
        "profile" => "RecordRef",
        "subsidiary" => "RecordRef",
        "contact" => "RecordRef",
        "email" => "string",
        "phone" => "string",
        "product" => "RecordRef",
        "module" => "RecordRef",
        "item" => "RecordRef",
        "serialNumber" => "RecordRef",
        "inboundEmail" => "string",
        "issue" => "RecordRef",
        "status" => "RecordRef",
        "isInactive" => "boolean",
        "priority" => "RecordRef",
        "origin" => "RecordRef",
        "category" => "RecordRef",
        "assigned" => "RecordRef",
        "helpDesk" => "boolean",
        "emailEmployeesList" => "EmailEmployeesList",
        "escalateToList" => "SupportCaseEscalateToList",
        "timeItemList" => "SupportCaseTimeItemList",
        "solutionsList" => "SupportCaseSolutionsList",
        "customFieldList" => "CustomFieldList",
        "internalId" => "string",
        "externalId" => "string",
    );
}
