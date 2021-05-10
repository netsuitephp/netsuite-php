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

class SupportCase extends Record {
    /**
     * @var string
     */
    public $escalationMessage;
    /**
     * @var string
     */
    public $lastReopenedDate;
    /**
     * @var string
     */
    public $endDate;
    /**
     * @var string
     */
    public $incomingMessage;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $insertSolution;
    /**
     * @var string
     */
    public $outgoingMessage;
    /**
     * @var string
     */
    public $searchSolution;
    /**
     * @var boolean
     */
    public $emailForm;
    /**
     * @var string
     */
    public $newSolutionFromMsg;
    /**
     * @var boolean
     */
    public $internalOnly;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $customForm;
    /**
     * @var string
     */
    public $title;
    /**
     * @var string
     */
    public $caseNumber;
    /**
     * @var string
     */
    public $startDate;
    /**
     * @var string
     */
    public $createdDate;
    /**
     * @var string
     */
    public $lastModifiedDate;
    /**
     * @var string
     */
    public $lastMessageDate;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $company;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $profile;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $subsidiary;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $contact;
    /**
     * @var string
     */
    public $email;
    /**
     * @var string
     */
    public $phone;
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
    public $serialNumber;
    /**
     * @var string
     */
    public $inboundEmail;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $issue;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $status;
    /**
     * @var boolean
     */
    public $isInactive;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $priority;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $origin;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $category;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $assigned;
    /**
     * @var boolean
     */
    public $helpDesk;
    /**
     * @var \NetSuite\Classes\EmailEmployeesList
     */
    public $emailEmployeesList;
    /**
     * @var \NetSuite\Classes\SupportCaseEscalateToList
     */
    public $escalateToList;
    /**
     * @var \NetSuite\Classes\SupportCaseTimeItemList
     */
    public $timeItemList;
    /**
     * @var \NetSuite\Classes\SupportCaseSolutionsList
     */
    public $solutionsList;
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
