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

class Contact extends Record {
    public $customForm;
    public $entityId;
    public $contactSource;
    public $company;
    public $salutation;
    public $firstName;
    public $middleName;
    public $lastName;
    public $title;
    public $phone;
    public $fax;
    public $email;
    public $defaultAddress;
    public $isPrivate;
    public $isInactive;
    public $subsidiary;
    public $phoneticName;
    public $categoryList;
    public $altEmail;
    public $officePhone;
    public $homePhone;
    public $mobilePhone;
    public $supervisor;
    public $supervisorPhone;
    public $assistant;
    public $assistantPhone;
    public $comments;
    public $globalSubscriptionStatus;
    public $image;
    public $billPay;
    public $dateCreated;
    public $lastModifiedDate;
    public $addressbookList;
    public $subscriptionsList;
    public $customFieldList;
    public $internalId;
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
