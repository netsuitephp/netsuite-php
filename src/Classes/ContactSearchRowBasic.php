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

class ContactSearchRowBasic extends SearchRowBasic {
    public $address;
    public $address1;
    public $address2;
    public $address3;
    public $addressee;
    public $addressInternalId;
    public $addressLabel;
    public $addressPhone;
    public $altEmail;
    public $altName;
    public $altPhone;
    public $attention;
    public $availableOffline;
    public $billAddress1;
    public $billAddress2;
    public $billAddress3;
    public $billAddressee;
    public $billAttention;
    public $billCity;
    public $billCountry;
    public $billCountryCode;
    public $billPhone;
    public $billState;
    public $billZipCode;
    public $category;
    public $city;
    public $comments;
    public $company;
    public $contactRole;
    public $contactSource;
    public $country;
    public $countryCode;
    public $dateCreated;
    public $email;
    public $entityId;
    public $entityNumber;
    public $externalId;
    public $fax;
    public $firstName;
    public $giveAccess;
    public $globalSubscriptionStatus;
    public $hasDuplicates;
    public $homePhone;
    public $image;
    public $internalId;
    public $isDefaultBilling;
    public $isDefaultShipping;
    public $isInactive;
    public $language;
    public $lastModifiedDate;
    public $lastName;
    public $level;
    public $middleName;
    public $mobilePhone;
    public $owner;
    public $permission;
    public $phone;
    public $phoneticName;
    public $salutation;
    public $shipAddress1;
    public $shipAddress2;
    public $shipAddress3;
    public $shipAddressee;
    public $shipAttention;
    public $shipCity;
    public $shipCountry;
    public $shipCountryCode;
    public $shipPhone;
    public $shipState;
    public $shipZip;
    public $state;
    public $subscription;
    public $subscriptionDate;
    public $subscriptionStatus;
    public $subsidiary;
    public $title;
    public $zipCode;
    public $customFieldList;
    static $paramtypesmap = array(
        "address" => "SearchColumnStringField[]",
        "address1" => "SearchColumnStringField[]",
        "address2" => "SearchColumnStringField[]",
        "address3" => "SearchColumnStringField[]",
        "addressee" => "SearchColumnStringField[]",
        "addressInternalId" => "SearchColumnStringField[]",
        "addressLabel" => "SearchColumnStringField[]",
        "addressPhone" => "SearchColumnStringField[]",
        "altEmail" => "SearchColumnStringField[]",
        "altName" => "SearchColumnStringField[]",
        "altPhone" => "SearchColumnStringField[]",
        "attention" => "SearchColumnStringField[]",
        "availableOffline" => "SearchColumnBooleanField[]",
        "billAddress1" => "SearchColumnStringField[]",
        "billAddress2" => "SearchColumnStringField[]",
        "billAddress3" => "SearchColumnStringField[]",
        "billAddressee" => "SearchColumnStringField[]",
        "billAttention" => "SearchColumnStringField[]",
        "billCity" => "SearchColumnStringField[]",
        "billCountry" => "SearchColumnEnumSelectField[]",
        "billCountryCode" => "SearchColumnStringField[]",
        "billPhone" => "SearchColumnStringField[]",
        "billState" => "SearchColumnStringField[]",
        "billZipCode" => "SearchColumnStringField[]",
        "category" => "SearchColumnSelectField[]",
        "city" => "SearchColumnStringField[]",
        "comments" => "SearchColumnStringField[]",
        "company" => "SearchColumnSelectField[]",
        "contactRole" => "SearchColumnSelectField[]",
        "contactSource" => "SearchColumnStringField[]",
        "country" => "SearchColumnEnumSelectField[]",
        "countryCode" => "SearchColumnStringField[]",
        "dateCreated" => "SearchColumnDateField[]",
        "email" => "SearchColumnStringField[]",
        "entityId" => "SearchColumnStringField[]",
        "entityNumber" => "SearchColumnLongField[]",
        "externalId" => "SearchColumnSelectField[]",
        "fax" => "SearchColumnStringField[]",
        "firstName" => "SearchColumnStringField[]",
        "giveAccess" => "SearchColumnBooleanField[]",
        "globalSubscriptionStatus" => "SearchColumnEnumSelectField[]",
        "hasDuplicates" => "SearchColumnBooleanField[]",
        "homePhone" => "SearchColumnStringField[]",
        "image" => "SearchColumnSelectField[]",
        "internalId" => "SearchColumnSelectField[]",
        "isDefaultBilling" => "SearchColumnBooleanField[]",
        "isDefaultShipping" => "SearchColumnBooleanField[]",
        "isInactive" => "SearchColumnBooleanField[]",
        "language" => "SearchColumnEnumSelectField[]",
        "lastModifiedDate" => "SearchColumnDateField[]",
        "lastName" => "SearchColumnStringField[]",
        "level" => "SearchColumnEnumSelectField[]",
        "middleName" => "SearchColumnStringField[]",
        "mobilePhone" => "SearchColumnStringField[]",
        "owner" => "SearchColumnSelectField[]",
        "permission" => "SearchColumnEnumSelectField[]",
        "phone" => "SearchColumnStringField[]",
        "phoneticName" => "SearchColumnStringField[]",
        "salutation" => "SearchColumnStringField[]",
        "shipAddress1" => "SearchColumnStringField[]",
        "shipAddress2" => "SearchColumnStringField[]",
        "shipAddress3" => "SearchColumnStringField[]",
        "shipAddressee" => "SearchColumnStringField[]",
        "shipAttention" => "SearchColumnStringField[]",
        "shipCity" => "SearchColumnStringField[]",
        "shipCountry" => "SearchColumnEnumSelectField[]",
        "shipCountryCode" => "SearchColumnStringField[]",
        "shipPhone" => "SearchColumnStringField[]",
        "shipState" => "SearchColumnStringField[]",
        "shipZip" => "SearchColumnStringField[]",
        "state" => "SearchColumnStringField[]",
        "subscription" => "SearchColumnSelectField[]",
        "subscriptionDate" => "SearchColumnDateField[]",
        "subscriptionStatus" => "SearchColumnBooleanField[]",
        "subsidiary" => "SearchColumnSelectField[]",
        "title" => "SearchColumnStringField[]",
        "zipCode" => "SearchColumnStringField[]",
        "customFieldList" => "SearchColumnCustomFieldList",
    );
}
