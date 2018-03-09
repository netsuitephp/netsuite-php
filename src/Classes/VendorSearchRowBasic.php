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

class VendorSearchRowBasic extends SearchRowBasic {
    public $accountNumber;
    public $address;
    public $address1;
    public $address2;
    public $address3;
    public $addressee;
    public $addressInternalId;
    public $addressLabel;
    public $addressPhone;
    public $altContact;
    public $altEmail;
    public $altName;
    public $altPhone;
    public $attention;
    public $balance;
    public $billAddress;
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
    public $companyName;
    public $contact;
    public $country;
    public $countryCode;
    public $creditLimit;
    public $currency;
    public $currentExchangeRate;
    public $dateCreated;
    public $eligibleForCommission;
    public $email;
    public $emailPreference;
    public $emailTransactions;
    public $entityId;
    public $entityNumber;
    public $expenseAccount;
    public $externalId;
    public $fax;
    public $faxTransactions;
    public $firstName;
    public $fxBalance;
    public $fxUnbilledOrders;
    public $giveAccess;
    public $globalSubscriptionStatus;
    public $hasDuplicates;
    public $homePhone;
    public $image;
    public $incoterm;
    public $internalId;
    public $is1099Eligible;
    public $isDefaultBilling;
    public $isDefaultShipping;
    public $isInactive;
    public $isJobResourceVend;
    public $isPerson;
    public $laborCost;
    public $language;
    public $lastModifiedDate;
    public $lastName;
    public $level;
    public $middleName;
    public $mobilePhone;
    public $payablesAccount;
    public $pec;
    public $permission;
    public $phone;
    public $phoneticName;
    public $printOnCheckAs;
    public $printTransactions;
    public $purchaseOrderAmount;
    public $purchaseOrderQuantity;
    public $purchaseOrderQuantityDiff;
    public $receiptAmount;
    public $receiptQuantity;
    public $receiptQuantityDiff;
    public $salutation;
    public $shipAddress;
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
    public $taxIdNum;
    public $terms;
    public $title;
    public $unbilledOrders;
    public $url;
    public $vatRegNumber;
    public $workCalendar;
    public $zipCode;
    public $customFieldList;
    static $paramtypesmap = array(
        "accountNumber" => "SearchColumnStringField[]",
        "address" => "SearchColumnStringField[]",
        "address1" => "SearchColumnStringField[]",
        "address2" => "SearchColumnStringField[]",
        "address3" => "SearchColumnStringField[]",
        "addressee" => "SearchColumnStringField[]",
        "addressInternalId" => "SearchColumnStringField[]",
        "addressLabel" => "SearchColumnStringField[]",
        "addressPhone" => "SearchColumnStringField[]",
        "altContact" => "SearchColumnStringField[]",
        "altEmail" => "SearchColumnStringField[]",
        "altName" => "SearchColumnStringField[]",
        "altPhone" => "SearchColumnStringField[]",
        "attention" => "SearchColumnStringField[]",
        "balance" => "SearchColumnDoubleField[]",
        "billAddress" => "SearchColumnStringField[]",
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
        "companyName" => "SearchColumnStringField[]",
        "contact" => "SearchColumnStringField[]",
        "country" => "SearchColumnEnumSelectField[]",
        "countryCode" => "SearchColumnStringField[]",
        "creditLimit" => "SearchColumnDoubleField[]",
        "currency" => "SearchColumnSelectField[]",
        "currentExchangeRate" => "SearchColumnDoubleField[]",
        "dateCreated" => "SearchColumnDateField[]",
        "eligibleForCommission" => "SearchColumnBooleanField[]",
        "email" => "SearchColumnStringField[]",
        "emailPreference" => "SearchColumnEnumSelectField[]",
        "emailTransactions" => "SearchColumnBooleanField[]",
        "entityId" => "SearchColumnStringField[]",
        "entityNumber" => "SearchColumnLongField[]",
        "expenseAccount" => "SearchColumnSelectField[]",
        "externalId" => "SearchColumnSelectField[]",
        "fax" => "SearchColumnStringField[]",
        "faxTransactions" => "SearchColumnBooleanField[]",
        "firstName" => "SearchColumnStringField[]",
        "fxBalance" => "SearchColumnDoubleField[]",
        "fxUnbilledOrders" => "SearchColumnDoubleField[]",
        "giveAccess" => "SearchColumnBooleanField[]",
        "globalSubscriptionStatus" => "SearchColumnEnumSelectField[]",
        "hasDuplicates" => "SearchColumnBooleanField[]",
        "homePhone" => "SearchColumnStringField[]",
        "image" => "SearchColumnSelectField[]",
        "incoterm" => "SearchColumnSelectField[]",
        "internalId" => "SearchColumnSelectField[]",
        "is1099Eligible" => "SearchColumnBooleanField[]",
        "isDefaultBilling" => "SearchColumnBooleanField[]",
        "isDefaultShipping" => "SearchColumnBooleanField[]",
        "isInactive" => "SearchColumnBooleanField[]",
        "isJobResourceVend" => "SearchColumnBooleanField[]",
        "isPerson" => "SearchColumnBooleanField[]",
        "laborCost" => "SearchColumnDoubleField[]",
        "language" => "SearchColumnEnumSelectField[]",
        "lastModifiedDate" => "SearchColumnDateField[]",
        "lastName" => "SearchColumnStringField[]",
        "level" => "SearchColumnEnumSelectField[]",
        "middleName" => "SearchColumnStringField[]",
        "mobilePhone" => "SearchColumnStringField[]",
        "payablesAccount" => "SearchColumnSelectField[]",
        "pec" => "SearchColumnStringField[]",
        "permission" => "SearchColumnEnumSelectField[]",
        "phone" => "SearchColumnStringField[]",
        "phoneticName" => "SearchColumnStringField[]",
        "printOnCheckAs" => "SearchColumnStringField[]",
        "printTransactions" => "SearchColumnBooleanField[]",
        "purchaseOrderAmount" => "SearchColumnDoubleField[]",
        "purchaseOrderQuantity" => "SearchColumnDoubleField[]",
        "purchaseOrderQuantityDiff" => "SearchColumnDoubleField[]",
        "receiptAmount" => "SearchColumnDoubleField[]",
        "receiptQuantity" => "SearchColumnDoubleField[]",
        "receiptQuantityDiff" => "SearchColumnDoubleField[]",
        "salutation" => "SearchColumnStringField[]",
        "shipAddress" => "SearchColumnStringField[]",
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
        "taxIdNum" => "SearchColumnStringField[]",
        "terms" => "SearchColumnSelectField[]",
        "title" => "SearchColumnStringField[]",
        "unbilledOrders" => "SearchColumnDoubleField[]",
        "url" => "SearchColumnStringField[]",
        "vatRegNumber" => "SearchColumnStringField[]",
        "workCalendar" => "SearchColumnSelectField[]",
        "zipCode" => "SearchColumnStringField[]",
        "customFieldList" => "SearchColumnCustomFieldList",
    );
}
