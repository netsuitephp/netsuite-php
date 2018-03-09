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

class OriginatingLeadSearchRowBasic extends SearchRowBasic {
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
    public $availableOffline;
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
    public $buyingReason;
    public $buyingTimeFrame;
    public $category;
    public $ccCustomerCode;
    public $ccDefault;
    public $ccExpDate;
    public $ccHolderName;
    public $ccInternalId;
    public $ccNumber;
    public $ccState;
    public $ccStateFrom;
    public $ccType;
    public $city;
    public $comments;
    public $companyName;
    public $consolBalance;
    public $consolDaysOverdue;
    public $consolDepositBalance;
    public $consolOverdueBalance;
    public $consolUnbilledOrders;
    public $contact;
    public $contribution;
    public $contributionPrimary;
    public $conversionDate;
    public $country;
    public $countryCode;
    public $creditHold;
    public $creditHoldOverride;
    public $creditLimit;
    public $currency;
    public $dateClosed;
    public $dateCreated;
    public $daysOverdue;
    public $defaultOrderPriority;
    public $depositBalance;
    public $drAccount;
    public $email;
    public $emailPreference;
    public $emailTransactions;
    public $endDate;
    public $entityId;
    public $entityNumber;
    public $entityStatus;
    public $estimatedBudget;
    public $explicitConversion;
    public $externalId;
    public $fax;
    public $faxTransactions;
    public $firstName;
    public $firstOrderDate;
    public $firstSaleDate;
    public $fxAccount;
    public $fxBalance;
    public $fxConsolBalance;
    public $fxConsolUnbilledOrders;
    public $fxUnbilledOrders;
    public $giveAccess;
    public $globalSubscriptionStatus;
    public $groupPricingLevel;
    public $hasDuplicates;
    public $homePhone;
    public $image;
    public $internalId;
    public $isBudgetApproved;
    public $isDefaultBilling;
    public $isDefaultShipping;
    public $isInactive;
    public $isPerson;
    public $isShipAddress;
    public $itemPricingLevel;
    public $itemPricingUnitPrice;
    public $jobEndDate;
    public $jobProjectedEnd;
    public $jobStartDate;
    public $jobType;
    public $language;
    public $lastModifiedDate;
    public $lastName;
    public $lastOrderDate;
    public $lastSaleDate;
    public $leadDate;
    public $leadSource;
    public $level;
    public $manualCreditHold;
    public $middleName;
    public $mobilePhone;
    public $monthlyClosing;
    public $onCreditHold;
    public $overdueBalance;
    public $parent;
    public $partner;
    public $partnerContribution;
    public $partnerRole;
    public $partnerTeamMember;
    public $pec;
    public $permission;
    public $phone;
    public $phoneticName;
    public $prefCCProcessor;
    public $priceLevel;
    public $pricingGroup;
    public $pricingItem;
    public $printTransactions;
    public $prospectDate;
    public $receivablesAccount;
    public $reminderDays;
    public $resaleNumber;
    public $role;
    public $salesReadiness;
    public $salesRep;
    public $salesTeamMember;
    public $salesTeamRole;
    public $salutation;
    public $shipAddress;
    public $shipAddress1;
    public $shipAddress2;
    public $shipAddress3;
    public $shipAddressee;
    public $shipAttention;
    public $shipCity;
    public $shipComplete;
    public $shipCountry;
    public $shipCountryCode;
    public $shipPhone;
    public $shippingItem;
    public $shipState;
    public $shipZip;
    public $stage;
    public $startDate;
    public $state;
    public $subscription;
    public $subscriptionDate;
    public $subscriptionStatus;
    public $subsidiary;
    public $taxable;
    public $taxItem;
    public $terms;
    public $territory;
    public $title;
    public $unbilledOrders;
    public $url;
    public $vatRegNumber;
    public $webLead;
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
        "availableOffline" => "SearchColumnBooleanField[]",
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
        "buyingReason" => "SearchColumnStringField[]",
        "buyingTimeFrame" => "SearchColumnStringField[]",
        "category" => "SearchColumnSelectField[]",
        "ccCustomerCode" => "SearchColumnStringField[]",
        "ccDefault" => "SearchColumnBooleanField[]",
        "ccExpDate" => "SearchColumnDateField[]",
        "ccHolderName" => "SearchColumnStringField[]",
        "ccInternalId" => "SearchColumnStringField[]",
        "ccNumber" => "SearchColumnStringField[]",
        "ccState" => "SearchColumnSelectField[]",
        "ccStateFrom" => "SearchColumnDateField[]",
        "ccType" => "SearchColumnSelectField[]",
        "city" => "SearchColumnStringField[]",
        "comments" => "SearchColumnStringField[]",
        "companyName" => "SearchColumnStringField[]",
        "consolBalance" => "SearchColumnDoubleField[]",
        "consolDaysOverdue" => "SearchColumnLongField[]",
        "consolDepositBalance" => "SearchColumnDoubleField[]",
        "consolOverdueBalance" => "SearchColumnDoubleField[]",
        "consolUnbilledOrders" => "SearchColumnDoubleField[]",
        "contact" => "SearchColumnStringField[]",
        "contribution" => "SearchColumnDoubleField[]",
        "contributionPrimary" => "SearchColumnDoubleField[]",
        "conversionDate" => "SearchColumnDateField[]",
        "country" => "SearchColumnEnumSelectField[]",
        "countryCode" => "SearchColumnStringField[]",
        "creditHold" => "SearchColumnEnumSelectField[]",
        "creditHoldOverride" => "SearchColumnBooleanField[]",
        "creditLimit" => "SearchColumnDoubleField[]",
        "currency" => "SearchColumnSelectField[]",
        "dateClosed" => "SearchColumnDateField[]",
        "dateCreated" => "SearchColumnDateField[]",
        "daysOverdue" => "SearchColumnLongField[]",
        "defaultOrderPriority" => "SearchColumnDoubleField[]",
        "depositBalance" => "SearchColumnDoubleField[]",
        "drAccount" => "SearchColumnStringField[]",
        "email" => "SearchColumnStringField[]",
        "emailPreference" => "SearchColumnEnumSelectField[]",
        "emailTransactions" => "SearchColumnBooleanField[]",
        "endDate" => "SearchColumnDateField[]",
        "entityId" => "SearchColumnStringField[]",
        "entityNumber" => "SearchColumnLongField[]",
        "entityStatus" => "SearchColumnSelectField[]",
        "estimatedBudget" => "SearchColumnDoubleField[]",
        "explicitConversion" => "SearchColumnBooleanField[]",
        "externalId" => "SearchColumnSelectField[]",
        "fax" => "SearchColumnStringField[]",
        "faxTransactions" => "SearchColumnBooleanField[]",
        "firstName" => "SearchColumnStringField[]",
        "firstOrderDate" => "SearchColumnDateField[]",
        "firstSaleDate" => "SearchColumnDateField[]",
        "fxAccount" => "SearchColumnStringField[]",
        "fxBalance" => "SearchColumnDoubleField[]",
        "fxConsolBalance" => "SearchColumnDoubleField[]",
        "fxConsolUnbilledOrders" => "SearchColumnDoubleField[]",
        "fxUnbilledOrders" => "SearchColumnDoubleField[]",
        "giveAccess" => "SearchColumnBooleanField[]",
        "globalSubscriptionStatus" => "SearchColumnEnumSelectField[]",
        "groupPricingLevel" => "SearchColumnStringField[]",
        "hasDuplicates" => "SearchColumnBooleanField[]",
        "homePhone" => "SearchColumnStringField[]",
        "image" => "SearchColumnSelectField[]",
        "internalId" => "SearchColumnSelectField[]",
        "isBudgetApproved" => "SearchColumnBooleanField[]",
        "isDefaultBilling" => "SearchColumnBooleanField[]",
        "isDefaultShipping" => "SearchColumnBooleanField[]",
        "isInactive" => "SearchColumnBooleanField[]",
        "isPerson" => "SearchColumnBooleanField[]",
        "isShipAddress" => "SearchColumnBooleanField[]",
        "itemPricingLevel" => "SearchColumnStringField[]",
        "itemPricingUnitPrice" => "SearchColumnDoubleField[]",
        "jobEndDate" => "SearchColumnDateField[]",
        "jobProjectedEnd" => "SearchColumnDateField[]",
        "jobStartDate" => "SearchColumnDateField[]",
        "jobType" => "SearchColumnSelectField[]",
        "language" => "SearchColumnEnumSelectField[]",
        "lastModifiedDate" => "SearchColumnDateField[]",
        "lastName" => "SearchColumnStringField[]",
        "lastOrderDate" => "SearchColumnDateField[]",
        "lastSaleDate" => "SearchColumnDateField[]",
        "leadDate" => "SearchColumnDateField[]",
        "leadSource" => "SearchColumnSelectField[]",
        "level" => "SearchColumnEnumSelectField[]",
        "manualCreditHold" => "SearchColumnBooleanField[]",
        "middleName" => "SearchColumnStringField[]",
        "mobilePhone" => "SearchColumnStringField[]",
        "monthlyClosing" => "SearchColumnEnumSelectField[]",
        "onCreditHold" => "SearchColumnBooleanField[]",
        "overdueBalance" => "SearchColumnDoubleField[]",
        "parent" => "SearchColumnSelectField[]",
        "partner" => "SearchColumnSelectField[]",
        "partnerContribution" => "SearchColumnDoubleField[]",
        "partnerRole" => "SearchColumnStringField[]",
        "partnerTeamMember" => "SearchColumnSelectField[]",
        "pec" => "SearchColumnStringField[]",
        "permission" => "SearchColumnEnumSelectField[]",
        "phone" => "SearchColumnStringField[]",
        "phoneticName" => "SearchColumnStringField[]",
        "prefCCProcessor" => "SearchColumnSelectField[]",
        "priceLevel" => "SearchColumnSelectField[]",
        "pricingGroup" => "SearchColumnStringField[]",
        "pricingItem" => "SearchColumnStringField[]",
        "printTransactions" => "SearchColumnBooleanField[]",
        "prospectDate" => "SearchColumnDateField[]",
        "receivablesAccount" => "SearchColumnStringField[]",
        "reminderDays" => "SearchColumnLongField[]",
        "resaleNumber" => "SearchColumnStringField[]",
        "role" => "SearchColumnStringField[]",
        "salesReadiness" => "SearchColumnStringField[]",
        "salesRep" => "SearchColumnSelectField[]",
        "salesTeamMember" => "SearchColumnSelectField[]",
        "salesTeamRole" => "SearchColumnSelectField[]",
        "salutation" => "SearchColumnStringField[]",
        "shipAddress" => "SearchColumnStringField[]",
        "shipAddress1" => "SearchColumnStringField[]",
        "shipAddress2" => "SearchColumnStringField[]",
        "shipAddress3" => "SearchColumnStringField[]",
        "shipAddressee" => "SearchColumnStringField[]",
        "shipAttention" => "SearchColumnStringField[]",
        "shipCity" => "SearchColumnStringField[]",
        "shipComplete" => "SearchColumnBooleanField[]",
        "shipCountry" => "SearchColumnEnumSelectField[]",
        "shipCountryCode" => "SearchColumnStringField[]",
        "shipPhone" => "SearchColumnStringField[]",
        "shippingItem" => "SearchColumnSelectField[]",
        "shipState" => "SearchColumnStringField[]",
        "shipZip" => "SearchColumnStringField[]",
        "stage" => "SearchColumnStringField[]",
        "startDate" => "SearchColumnDateField[]",
        "state" => "SearchColumnEnumSelectField[]",
        "subscription" => "SearchColumnSelectField[]",
        "subscriptionDate" => "SearchColumnDateField[]",
        "subscriptionStatus" => "SearchColumnBooleanField[]",
        "subsidiary" => "SearchColumnSelectField[]",
        "taxable" => "SearchColumnBooleanField[]",
        "taxItem" => "SearchColumnSelectField[]",
        "terms" => "SearchColumnSelectField[]",
        "territory" => "SearchColumnSelectField[]",
        "title" => "SearchColumnStringField[]",
        "unbilledOrders" => "SearchColumnDoubleField[]",
        "url" => "SearchColumnStringField[]",
        "vatRegNumber" => "SearchColumnStringField[]",
        "webLead" => "SearchColumnBooleanField[]",
        "zipCode" => "SearchColumnStringField[]",
        "customFieldList" => "SearchColumnCustomFieldList",
    );
}
