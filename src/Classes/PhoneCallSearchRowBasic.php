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

class PhoneCallSearchRowBasic extends SearchRowBasic {
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $accessLevel;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $assigned;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $company;
    /**
     * @var \NetSuite\Classes\SearchColumnDateField[]
     */
    public $completedDate;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $contact;
    /**
     * @var \NetSuite\Classes\SearchColumnDateField[]
     */
    public $createdDate;
    /**
     * @var \NetSuite\Classes\SearchColumnDateField[]
     */
    public $endDate;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $externalId;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $internalId;
    /**
     * @var \NetSuite\Classes\SearchColumnDateField[]
     */
    public $lastModifiedDate;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $markdone;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $message;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $owner;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $phone;
    /**
     * @var \NetSuite\Classes\SearchColumnEnumSelectField[]
     */
    public $priority;
    /**
     * @var \NetSuite\Classes\SearchColumnDateField[]
     */
    public $startDate;
    /**
     * @var \NetSuite\Classes\SearchColumnDateField[]
     */
    public $startTime;
    /**
     * @var \NetSuite\Classes\SearchColumnEnumSelectField[]
     */
    public $status;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $title;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $transaction;
    /**
     * @var \NetSuite\Classes\SearchColumnCustomFieldList
     */
    public $customFieldList;
    static $paramtypesmap = array(
        "accessLevel" => "SearchColumnStringField[]",
        "assigned" => "SearchColumnSelectField[]",
        "company" => "SearchColumnSelectField[]",
        "completedDate" => "SearchColumnDateField[]",
        "contact" => "SearchColumnSelectField[]",
        "createdDate" => "SearchColumnDateField[]",
        "endDate" => "SearchColumnDateField[]",
        "externalId" => "SearchColumnSelectField[]",
        "internalId" => "SearchColumnSelectField[]",
        "lastModifiedDate" => "SearchColumnDateField[]",
        "markdone" => "SearchColumnStringField[]",
        "message" => "SearchColumnStringField[]",
        "owner" => "SearchColumnSelectField[]",
        "phone" => "SearchColumnStringField[]",
        "priority" => "SearchColumnEnumSelectField[]",
        "startDate" => "SearchColumnDateField[]",
        "startTime" => "SearchColumnDateField[]",
        "status" => "SearchColumnEnumSelectField[]",
        "title" => "SearchColumnStringField[]",
        "transaction" => "SearchColumnSelectField[]",
        "customFieldList" => "SearchColumnCustomFieldList",
    );
}
