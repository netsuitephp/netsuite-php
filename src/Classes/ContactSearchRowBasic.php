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

class ContactSearchRowBasic extends SearchRowBasic {
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $address;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $address1;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $address2;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $address3;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $addressee;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $addressInternalId;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $addressLabel;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $addressPhone;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $altEmail;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $altName;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $altPhone;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $attention;
    /**
     * @var \NetSuite\Classes\SearchColumnBooleanField[]
     */
    public $availableOffline;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $billAddress1;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $billAddress2;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $billAddress3;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $billAddressee;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $billAttention;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $billCity;
    /**
     * @var \NetSuite\Classes\SearchColumnEnumSelectField[]
     */
    public $billCountry;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $billCountryCode;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $billPhone;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $billState;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $billZipCode;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $category;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $city;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $comments;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $company;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $contactRole;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $contactSource;
    /**
     * @var \NetSuite\Classes\SearchColumnEnumSelectField[]
     */
    public $country;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $countryCode;
    /**
     * @var \NetSuite\Classes\SearchColumnDateField[]
     */
    public $dateCreated;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $defaultTaxReg;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $email;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $entityId;
    /**
     * @var \NetSuite\Classes\SearchColumnLongField[]
     */
    public $entityNumber;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $externalId;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $fax;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $firstName;
    /**
     * @var \NetSuite\Classes\SearchColumnBooleanField[]
     */
    public $giveAccess;
    /**
     * @var \NetSuite\Classes\SearchColumnEnumSelectField[]
     */
    public $globalSubscriptionStatus;
    /**
     * @var \NetSuite\Classes\SearchColumnBooleanField[]
     */
    public $hasDuplicates;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $homePhone;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $image;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $internalId;
    /**
     * @var \NetSuite\Classes\SearchColumnBooleanField[]
     */
    public $isDefaultBilling;
    /**
     * @var \NetSuite\Classes\SearchColumnBooleanField[]
     */
    public $isDefaultShipping;
    /**
     * @var \NetSuite\Classes\SearchColumnBooleanField[]
     */
    public $isInactive;
    /**
     * @var \NetSuite\Classes\SearchColumnEnumSelectField[]
     */
    public $language;
    /**
     * @var \NetSuite\Classes\SearchColumnDateField[]
     */
    public $lastModifiedDate;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $lastName;
    /**
     * @var \NetSuite\Classes\SearchColumnEnumSelectField[]
     */
    public $level;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $middleName;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $mobilePhone;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $owner;
    /**
     * @var \NetSuite\Classes\SearchColumnEnumSelectField[]
     */
    public $permission;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $phone;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $phoneticName;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $salutation;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $shipAddress1;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $shipAddress2;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $shipAddress3;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $shipAddressee;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $shipAttention;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $shipCity;
    /**
     * @var \NetSuite\Classes\SearchColumnEnumSelectField[]
     */
    public $shipCountry;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $shipCountryCode;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $shipPhone;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $shipState;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $shipZip;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $state;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $subscription;
    /**
     * @var \NetSuite\Classes\SearchColumnDateField[]
     */
    public $subscriptionDate;
    /**
     * @var \NetSuite\Classes\SearchColumnBooleanField[]
     */
    public $subscriptionStatus;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $subsidiary;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $title;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $zipCode;
    /**
     * @var \NetSuite\Classes\SearchColumnCustomFieldList
     */
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
        "defaultTaxReg" => "SearchColumnStringField[]",
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
