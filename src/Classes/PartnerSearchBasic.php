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

class PartnerSearchBasic extends SearchRecordBasic {
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $address;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $addressee;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $addressLabel;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $addressPhone;
    /**
     * @var \NetSuite\Classes\SearchBooleanField
     */
    public $assignTasks;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $attention;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $billAddress;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $category;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $city;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $class;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $comments;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $commissionPlan;
    /**
     * @var \NetSuite\Classes\SearchEnumMultiSelectField
     */
    public $country;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $county;
    /**
     * @var \NetSuite\Classes\SearchDateField
     */
    public $dateCreated;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $defaultTaxReg;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $defaultTaxRegText;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $department;
    /**
     * @var \NetSuite\Classes\SearchBooleanField
     */
    public $eligibleForCommission;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $email;
    /**
     * @var \NetSuite\Classes\SearchEnumMultiSelectField
     */
    public $emailPreference;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $entityId;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $externalId;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $externalIdString;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $fax;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $firstName;
    /**
     * @var \NetSuite\Classes\SearchBooleanField
     */
    public $giveAccess;
    /**
     * @var \NetSuite\Classes\SearchEnumMultiSelectField
     */
    public $globalSubscriptionStatus;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $group;
    /**
     * @var \NetSuite\Classes\SearchBooleanField
     */
    public $hasDuplicates;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $image;
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
    public $isDefaultBilling;
    /**
     * @var \NetSuite\Classes\SearchBooleanField
     */
    public $isDefaultShipping;
    /**
     * @var \NetSuite\Classes\SearchBooleanField
     */
    public $isInactive;
    /**
     * @var \NetSuite\Classes\SearchBooleanField
     */
    public $isPerson;
    /**
     * @var \NetSuite\Classes\SearchEnumMultiSelectField
     */
    public $language;
    /**
     * @var \NetSuite\Classes\SearchDateField
     */
    public $lastModifiedDate;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $lastName;
    /**
     * @var \NetSuite\Classes\SearchEnumMultiSelectField
     */
    public $level;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $location;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $middleName;
    /**
     * @var \NetSuite\Classes\SearchEnumMultiSelectField
     */
    public $otherRelationships;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $parent;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $partnerCode;
    /**
     * @var \NetSuite\Classes\SearchEnumMultiSelectField
     */
    public $permission;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $phone;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $phoneticName;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $promoCode;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $salutation;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $shipAddress;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $state;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $subsidiary;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $title;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $URL;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $zipCode;
    /**
     * @var \NetSuite\Classes\SearchCustomFieldList
     */
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
        "defaultTaxReg" => "SearchMultiSelectField",
        "defaultTaxRegText" => "SearchStringField",
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
