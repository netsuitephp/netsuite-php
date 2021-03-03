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

class Contact extends Record {
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $customForm;
    /**
     * @var string
     */
    public $entityId;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $contactSource;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $company;
    /**
     * @var string
     */
    public $salutation;
    /**
     * @var string
     */
    public $firstName;
    /**
     * @var string
     */
    public $middleName;
    /**
     * @var string
     */
    public $lastName;
    /**
     * @var string
     */
    public $title;
    /**
     * @var string
     */
    public $phone;
    /**
     * @var string
     */
    public $fax;
    /**
     * @var string
     */
    public $email;
    /**
     * @var string
     */
    public $defaultAddress;
    /**
     * @var boolean
     */
    public $isPrivate;
    /**
     * @var boolean
     */
    public $isInactive;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $subsidiary;
    /**
     * @var string
     */
    public $phoneticName;
    /**
     * @var \NetSuite\Classes\CategoryList
     */
    public $categoryList;
    /**
     * @var string
     */
    public $altEmail;
    /**
     * @var string
     */
    public $officePhone;
    /**
     * @var string
     */
    public $homePhone;
    /**
     * @var string
     */
    public $mobilePhone;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $supervisor;
    /**
     * @var string
     */
    public $supervisorPhone;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $assistant;
    /**
     * @var string
     */
    public $assistantPhone;
    /**
     * @var string
     */
    public $comments;
    /**
     * @var \NetSuite\Classes\GlobalSubscriptionStatus
     */
    public $globalSubscriptionStatus;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $image;
    /**
     * @var boolean
     */
    public $billPay;
    /**
     * @var string
     */
    public $dateCreated;
    /**
     * @var string
     */
    public $lastModifiedDate;
    /**
     * @var \NetSuite\Classes\ContactAddressbookList
     */
    public $addressbookList;
    /**
     * @var \NetSuite\Classes\SubscriptionsList
     */
    public $subscriptionsList;
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
        "entityId" => "string",
        "contactSource" => "RecordRef",
        "company" => "RecordRef",
        "salutation" => "string",
        "firstName" => "string",
        "middleName" => "string",
        "lastName" => "string",
        "title" => "string",
        "phone" => "string",
        "fax" => "string",
        "email" => "string",
        "defaultAddress" => "string",
        "isPrivate" => "boolean",
        "isInactive" => "boolean",
        "subsidiary" => "RecordRef",
        "phoneticName" => "string",
        "categoryList" => "CategoryList",
        "altEmail" => "string",
        "officePhone" => "string",
        "homePhone" => "string",
        "mobilePhone" => "string",
        "supervisor" => "RecordRef",
        "supervisorPhone" => "string",
        "assistant" => "RecordRef",
        "assistantPhone" => "string",
        "comments" => "string",
        "globalSubscriptionStatus" => "GlobalSubscriptionStatus",
        "image" => "RecordRef",
        "billPay" => "boolean",
        "dateCreated" => "dateTime",
        "lastModifiedDate" => "dateTime",
        "addressbookList" => "ContactAddressbookList",
        "subscriptionsList" => "SubscriptionsList",
        "customFieldList" => "CustomFieldList",
        "internalId" => "string",
        "externalId" => "string",
    );
}
