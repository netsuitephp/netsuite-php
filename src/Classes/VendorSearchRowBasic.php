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

class VendorSearchRowBasic extends SearchRowBasic {
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $accountNumber;
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
    public $altContact;
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
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $balance;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $billAddress;
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
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $companyName;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $contact;
    /**
     * @var \NetSuite\Classes\SearchColumnEnumSelectField[]
     */
    public $country;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $countryCode;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $creditLimit;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $currency;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $currentExchangeRate;
    /**
     * @var \NetSuite\Classes\SearchColumnDateField[]
     */
    public $dateCreated;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $defaultTaxReg;
    /**
     * @var \NetSuite\Classes\SearchColumnBooleanField[]
     */
    public $eligibleForCommission;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $email;
    /**
     * @var \NetSuite\Classes\SearchColumnEnumSelectField[]
     */
    public $emailPreference;
    /**
     * @var \NetSuite\Classes\SearchColumnBooleanField[]
     */
    public $emailTransactions;
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
    public $expenseAccount;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $externalId;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $fax;
    /**
     * @var \NetSuite\Classes\SearchColumnBooleanField[]
     */
    public $faxTransactions;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $firstName;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $fxBalance;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $fxUnbilledOrders;
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
    public $incoterm;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $internalId;
    /**
     * @var \NetSuite\Classes\SearchColumnBooleanField[]
     */
    public $is1099Eligible;
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
     * @var \NetSuite\Classes\SearchColumnBooleanField[]
     */
    public $isJobResourceVend;
    /**
     * @var \NetSuite\Classes\SearchColumnBooleanField[]
     */
    public $isPerson;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $laborCost;
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
    public $payablesAccount;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $pec;
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
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $predConfidence;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $predictedDays;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $printOnCheckAs;
    /**
     * @var \NetSuite\Classes\SearchColumnBooleanField[]
     */
    public $printTransactions;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $purchaseOrderAmount;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $purchaseOrderQuantity;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $purchaseOrderQuantityDiff;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $receiptAmount;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $receiptQuantity;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $receiptQuantityDiff;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $salutation;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $shipAddress;
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
    public $taxIdNum;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $terms;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $timeApprover;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $title;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $unbilledOrders;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $url;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $vatRegNumber;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $workCalendar;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $zipCode;
    /**
     * @var \NetSuite\Classes\SearchColumnCustomFieldList
     */
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
        "defaultTaxReg" => "SearchColumnStringField[]",
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
        "predConfidence" => "SearchColumnDoubleField[]",
        "predictedDays" => "SearchColumnDoubleField[]",
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
        "timeApprover" => "SearchColumnSelectField[]",
        "title" => "SearchColumnStringField[]",
        "unbilledOrders" => "SearchColumnDoubleField[]",
        "url" => "SearchColumnStringField[]",
        "vatRegNumber" => "SearchColumnStringField[]",
        "workCalendar" => "SearchColumnSelectField[]",
        "zipCode" => "SearchColumnStringField[]",
        "customFieldList" => "SearchColumnCustomFieldList",
    );
}
