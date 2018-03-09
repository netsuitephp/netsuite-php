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

class PartnerSearchBasic extends SearchRecordBasic {
    public $address;
    public $addressee;
    public $addressLabel;
    public $addressPhone;
    public $assignTasks;
    public $attention;
    public $billAddress;
    public $category;
    public $city;
    public $class;
    public $comments;
    public $commissionPlan;
    public $country;
    public $county;
    public $dateCreated;
    public $department;
    public $eligibleForCommission;
    public $email;
    public $emailPreference;
    public $entityId;
    public $externalId;
    public $externalIdString;
    public $fax;
    public $firstName;
    public $giveAccess;
    public $globalSubscriptionStatus;
    public $group;
    public $hasDuplicates;
    public $image;
    public $internalId;
    public $internalIdNumber;
    public $isDefaultBilling;
    public $isDefaultShipping;
    public $isInactive;
    public $isPerson;
    public $language;
    public $lastModifiedDate;
    public $lastName;
    public $level;
    public $location;
    public $middleName;
    public $otherRelationships;
    public $parent;
    public $partnerCode;
    public $permission;
    public $phone;
    public $phoneticName;
    public $promoCode;
    public $salutation;
    public $shipAddress;
    public $state;
    public $subsidiary;
    public $title;
    public $URL;
    public $zipCode;
    public $customFieldList;
    static $paramtypesmap = array(
        "address" => "SearchStringField",
        "addressee" => "SearchStringField",
        "addressLabel" => "SearchStringField",
        "addressPhone" => "SearchStringField",
        "assignTasks" => "SearchBooleanField",
        "attention" => "SearchStringField",
        "billAddress" => "SearchStringField",
        "category" => "SearchMultiSelectField",
        "city" => "SearchStringField",
        "class" => "SearchMultiSelectField",
        "comments" => "SearchStringField",
        "commissionPlan" => "SearchMultiSelectField",
        "country" => "SearchEnumMultiSelectField",
        "county" => "SearchStringField",
        "dateCreated" => "SearchDateField",
        "department" => "SearchMultiSelectField",
        "eligibleForCommission" => "SearchBooleanField",
        "email" => "SearchStringField",
        "emailPreference" => "SearchEnumMultiSelectField",
        "entityId" => "SearchStringField",
        "externalId" => "SearchMultiSelectField",
        "externalIdString" => "SearchStringField",
        "fax" => "SearchStringField",
        "firstName" => "SearchStringField",
        "giveAccess" => "SearchBooleanField",
        "globalSubscriptionStatus" => "SearchEnumMultiSelectField",
        "group" => "SearchMultiSelectField",
        "hasDuplicates" => "SearchBooleanField",
        "image" => "SearchStringField",
        "internalId" => "SearchMultiSelectField",
        "internalIdNumber" => "SearchLongField",
        "isDefaultBilling" => "SearchBooleanField",
        "isDefaultShipping" => "SearchBooleanField",
        "isInactive" => "SearchBooleanField",
        "isPerson" => "SearchBooleanField",
        "language" => "SearchEnumMultiSelectField",
        "lastModifiedDate" => "SearchDateField",
        "lastName" => "SearchStringField",
        "level" => "SearchEnumMultiSelectField",
        "location" => "SearchMultiSelectField",
        "middleName" => "SearchStringField",
        "otherRelationships" => "SearchEnumMultiSelectField",
        "parent" => "SearchMultiSelectField",
        "partnerCode" => "SearchStringField",
        "permission" => "SearchEnumMultiSelectField",
        "phone" => "SearchStringField",
        "phoneticName" => "SearchStringField",
        "promoCode" => "SearchMultiSelectField",
        "salutation" => "SearchStringField",
        "shipAddress" => "SearchStringField",
        "state" => "SearchStringField",
        "subsidiary" => "SearchMultiSelectField",
        "title" => "SearchStringField",
        "URL" => "SearchStringField",
        "zipCode" => "SearchStringField",
        "customFieldList" => "SearchCustomFieldList",
    );
}
