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

class Partner extends Record {
    public $customForm;
    public $entityId;
    public $altName;
    public $partnerCode;
    public $isPerson;
    public $phoneticName;
    public $salutation;
    public $firstName;
    public $middleName;
    public $lastName;
    public $companyName;
    public $parent;
    public $phone;
    public $fax;
    public $email;
    public $url;
    public $defaultAddress;
    public $isInactive;
    public $lastModifiedDate;
    public $dateCreated;
    public $globalSubscriptionStatus;
    public $referringUrl;
    public $roleList;
    public $categoryList;
    public $title;
    public $printOnCheckAs;
    public $taxIdNum;
    public $vatRegNumber;
    public $comments;
    public $bcn;
    public $image;
    public $taxFractionUnit;
    public $emailPreference;
    public $taxRounding;
    public $department;
    public $location;
    public $class;
    public $subsidiary;
    public $homePhone;
    public $mobilePhone;
    public $altEmail;
    public $giveAccess;
    public $accessRole;
    public $sendEmail;
    public $password;
    public $password2;
    public $requirePwdChange;
    public $subPartnerLogin;
    public $loginAs;
    public $eligibleForCommission;
    public $contactRolesList;
    public $promoCodeList;
    public $addressbookList;
    public $subscriptionsList;
    public $customFieldList;
    public $internalId;
    public $externalId;
    static $paramtypesmap = array(
        "customForm" => "RecordRef",
        "entityId" => "string",
        "altName" => "string",
        "partnerCode" => "string",
        "isPerson" => "boolean",
        "phoneticName" => "string",
        "salutation" => "string",
        "firstName" => "string",
        "middleName" => "string",
        "lastName" => "string",
        "companyName" => "string",
        "parent" => "RecordRef",
        "phone" => "string",
        "fax" => "string",
        "email" => "string",
        "url" => "string",
        "defaultAddress" => "string",
        "isInactive" => "boolean",
        "lastModifiedDate" => "dateTime",
        "dateCreated" => "dateTime",
        "globalSubscriptionStatus" => "GlobalSubscriptionStatus",
        "referringUrl" => "string",
        "roleList" => "RecordRefList",
        "categoryList" => "CategoryList",
        "title" => "string",
        "printOnCheckAs" => "string",
        "taxIdNum" => "string",
        "vatRegNumber" => "string",
        "comments" => "string",
        "bcn" => "string",
        "image" => "RecordRef",
        "taxFractionUnit" => "TaxFractionUnit",
        "emailPreference" => "EmailPreference",
        "taxRounding" => "TaxRounding",
        "department" => "RecordRef",
        "location" => "RecordRef",
        "class" => "RecordRef",
        "subsidiary" => "RecordRef",
        "homePhone" => "string",
        "mobilePhone" => "string",
        "altEmail" => "string",
        "giveAccess" => "boolean",
        "accessRole" => "RecordRef",
        "sendEmail" => "boolean",
        "password" => "string",
        "password2" => "string",
        "requirePwdChange" => "boolean",
        "subPartnerLogin" => "boolean",
        "loginAs" => "string",
        "eligibleForCommission" => "boolean",
        "contactRolesList" => "ContactAccessRolesList",
        "promoCodeList" => "PartnerPromoCodeList",
        "addressbookList" => "PartnerAddressbookList",
        "subscriptionsList" => "SubscriptionsList",
        "customFieldList" => "CustomFieldList",
        "internalId" => "string",
        "externalId" => "string",
    );
}
