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
 * generated:  2020-12-11 06:57:10 PM PST
 */

namespace NetSuite\Classes;

class SupportCaseSearchRowBasic extends SearchRowBasic {
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $assigned;
    /**
     * @var \NetSuite\Classes\SearchColumnBooleanField[]
     */
    public $awaitingReply;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $caseNumber;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $category;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $company;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $contact;
    /**
     * @var \NetSuite\Classes\SearchColumnDateField[]
     */
    public $createdDate;
    /**
     * @var \NetSuite\Classes\SearchColumnEnumSelectField[]
     */
    public $customerStage;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $email;
    /**
     * @var \NetSuite\Classes\SearchColumnDateField[]
     */
    public $endDate;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $escalatee;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $externalId;
    /**
     * @var \NetSuite\Classes\SearchColumnBooleanField[]
     */
    public $helpDesk;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $inboundEmail;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $internalId;
    /**
     * @var \NetSuite\Classes\SearchColumnBooleanField[]
     */
    public $isInactive;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $issue;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $issueNumber;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $item;
    /**
     * @var \NetSuite\Classes\SearchColumnDateField[]
     */
    public $lastMessageDate;
    /**
     * @var \NetSuite\Classes\SearchColumnDateField[]
     */
    public $lastModifiedDate;
    /**
     * @var \NetSuite\Classes\SearchColumnDateField[]
     */
    public $lastReopenedDate;
    /**
     * @var \NetSuite\Classes\SearchColumnBooleanField[]
     */
    public $locked;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $module;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $origin;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $priority;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $product;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $profile;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $serialNumber;
    /**
     * @var \NetSuite\Classes\SearchColumnEnumSelectField[]
     */
    public $stage;
    /**
     * @var \NetSuite\Classes\SearchColumnDateField[]
     */
    public $startDate;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $status;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $subsidiary;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $title;
    /**
     * @var \NetSuite\Classes\SearchColumnCustomFieldList
     */
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
