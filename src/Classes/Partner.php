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

class Partner extends Record {
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $customForm;
    /**
     * @var string
     */
    public $entityId;
    /**
     * @var string
     */
    public $altName;
    /**
     * @var string
     */
    public $partnerCode;
    /**
     * @var boolean
     */
    public $isPerson;
    /**
     * @var string
     */
    public $phoneticName;
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
    public $companyName;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $parent;
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
    public $url;
    /**
     * @var string
     */
    public $defaultAddress;
    /**
     * @var boolean
     */
    public $isInactive;
    /**
     * @var string
     */
    public $lastModifiedDate;
    /**
     * @var string
     */
    public $dateCreated;
    /**
     * @var \NetSuite\Classes\PartnerTaxRegistrationList
     */
    public $taxRegistrationList;
    /**
     * @var \NetSuite\Classes\GlobalSubscriptionStatus
     */
    public $globalSubscriptionStatus;
    /**
     * @var string
     */
    public $referringUrl;
    /**
     * @var \NetSuite\Classes\RecordRefList
     */
    public $roleList;
    /**
     * @var \NetSuite\Classes\CategoryList
     */
    public $categoryList;
    /**
     * @var string
     */
    public $title;
    /**
     * @var string
     */
    public $printOnCheckAs;
    /**
     * @var string
     */
    public $taxIdNum;
    /**
     * @var string
     */
    public $vatRegNumber;
    /**
     * @var string
     */
    public $comments;
    /**
     * @var string
     */
    public $bcn;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $image;
    /**
     * @var \NetSuite\Classes\TaxFractionUnit
     */
    public $taxFractionUnit;
    /**
     * @var \NetSuite\Classes\EmailPreference
     */
    public $emailPreference;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $defaultTaxReg;
    /**
     * @var \NetSuite\Classes\TaxRounding
     */
    public $taxRounding;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $department;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $location;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $class;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $subsidiary;
    /**
     * @var string
     */
    public $homePhone;
    /**
     * @var string
     */
    public $mobilePhone;
    /**
     * @var string
     */
    public $altEmail;
    /**
     * @var boolean
     */
    public $giveAccess;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $accessRole;
    /**
     * @var boolean
     */
    public $sendEmail;
    /**
     * @var string
     */
    public $password;
    /**
     * @var string
     */
    public $password2;
    /**
     * @var boolean
     */
    public $requirePwdChange;
    /**
     * @var boolean
     */
    public $subPartnerLogin;
    /**
     * @var string
     */
    public $loginAs;
    /**
     * @var boolean
     */
    public $eligibleForCommission;
    /**
     * @var \NetSuite\Classes\ContactAccessRolesList
     */
    public $contactRolesList;
    /**
     * @var \NetSuite\Classes\PartnerPromoCodeList
     */
    public $promoCodeList;
    /**
     * @var \NetSuite\Classes\PartnerAddressbookList
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
        "taxRegistrationList" => "PartnerTaxRegistrationList",
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
        "defaultTaxReg" => "RecordRef",
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
