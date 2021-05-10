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

class SupportCaseSearchBasic extends SearchRecordBasic {
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $assigned;
    /**
     * @var \NetSuite\Classes\SearchBooleanField
     */
    public $awaitingReply;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $caseNumber;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $category;
    /**
     * @var \NetSuite\Classes\SearchDateField
     */
    public $closedDate;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $company;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $contact;
    /**
     * @var \NetSuite\Classes\SearchDateField
     */
    public $createdDate;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $email;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $escalateTo;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $externalId;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $externalIdString;
    /**
     * @var \NetSuite\Classes\SearchBooleanField
     */
    public $helpDesk;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $inboundEmail;
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
    public $isInactive;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $issue;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $item;
    /**
     * @var \NetSuite\Classes\SearchBooleanField
     */
    public $lastMessage;
    /**
     * @var \NetSuite\Classes\SearchDateField
     */
    public $lastModifiedDate;
    /**
     * @var \NetSuite\Classes\SearchDateField
     */
    public $lastReopenedDate;
    /**
     * @var \NetSuite\Classes\SearchBooleanField
     */
    public $locked;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $message;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $messageAuthor;
    /**
     * @var \NetSuite\Classes\SearchDateField
     */
    public $messageDate;
    /**
     * @var \NetSuite\Classes\SearchBooleanField
     */
    public $messageType;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $module;
    /**
     * @var \NetSuite\Classes\SearchLongField
     */
    public $number;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $origin;
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
    public $profile;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $serialNumber;
    /**
     * @var \NetSuite\Classes\SearchEnumMultiSelectField
     */
    public $stage;
    /**
     * @var \NetSuite\Classes\SearchDateField
     */
    public $startDate;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $status;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $subsidiary;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $title;
    /**
     * @var \NetSuite\Classes\SearchCustomFieldList
     */
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
