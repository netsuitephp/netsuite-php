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

class OriginatingLeadSearchRowBasic extends SearchRowBasic {
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
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $assignedSite;
    /**
     * @var \NetSuite\Classes\SearchColumnLongField[]
     */
    public $assignedSiteId;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $attention;
    /**
     * @var \NetSuite\Classes\SearchColumnBooleanField[]
     */
    public $availableOffline;
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
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $buyingReason;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $buyingTimeFrame;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $category;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $ccCustomerCode;
    /**
     * @var \NetSuite\Classes\SearchColumnBooleanField[]
     */
    public $ccDefault;
    /**
     * @var \NetSuite\Classes\SearchColumnDateField[]
     */
    public $ccExpDate;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $ccHolderName;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $ccInternalId;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $ccNumber;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $ccState;
    /**
     * @var \NetSuite\Classes\SearchColumnDateField[]
     */
    public $ccStateFrom;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $ccType;
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
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $consolBalance;
    /**
     * @var \NetSuite\Classes\SearchColumnLongField[]
     */
    public $consolDaysOverdue;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $consolDepositBalance;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $consolOverdueBalance;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $consolUnbilledOrders;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $contact;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $contribution;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $contributionPrimary;
    /**
     * @var \NetSuite\Classes\SearchColumnDateField[]
     */
    public $conversionDate;
    /**
     * @var \NetSuite\Classes\SearchColumnEnumSelectField[]
     */
    public $country;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $countryCode;
    /**
     * @var \NetSuite\Classes\SearchColumnEnumSelectField[]
     */
    public $creditHold;
    /**
     * @var \NetSuite\Classes\SearchColumnBooleanField[]
     */
    public $creditHoldOverride;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $creditLimit;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $currency;
    /**
     * @var \NetSuite\Classes\SearchColumnDateField[]
     */
    public $dateClosed;
    /**
     * @var \NetSuite\Classes\SearchColumnDateField[]
     */
    public $dateCreated;
    /**
     * @var \NetSuite\Classes\SearchColumnLongField[]
     */
    public $daysOverdue;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $defaultOrderPriority;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $defaultTaxReg;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $depositBalance;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $drAccount;
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
     * @var \NetSuite\Classes\SearchColumnDateField[]
     */
    public $endDate;
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
    public $entityStatus;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $estimatedBudget;
    /**
     * @var \NetSuite\Classes\SearchColumnBooleanField[]
     */
    public $explicitConversion;
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
     * @var \NetSuite\Classes\SearchColumnDateField[]
     */
    public $firstOrderDate;
    /**
     * @var \NetSuite\Classes\SearchColumnDateField[]
     */
    public $firstSaleDate;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $fxAccount;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $fxBalance;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $fxConsolBalance;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $fxConsolUnbilledOrders;
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
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $groupPricingLevel;
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
    public $isBudgetApproved;
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
    public $isPerson;
    /**
     * @var \NetSuite\Classes\SearchColumnBooleanField[]
     */
    public $isShipAddress;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $itemPricingLevel;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $itemPricingUnitPrice;
    /**
     * @var \NetSuite\Classes\SearchColumnDateField[]
     */
    public $jobEndDate;
    /**
     * @var \NetSuite\Classes\SearchColumnDateField[]
     */
    public $jobProjectedEnd;
    /**
     * @var \NetSuite\Classes\SearchColumnDateField[]
     */
    public $jobStartDate;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $jobType;
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
     * @var \NetSuite\Classes\SearchColumnDateField[]
     */
    public $lastOrderDate;
    /**
     * @var \NetSuite\Classes\SearchColumnDateField[]
     */
    public $lastSaleDate;
    /**
     * @var \NetSuite\Classes\SearchColumnDateField[]
     */
    public $leadDate;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $leadSource;
    /**
     * @var \NetSuite\Classes\SearchColumnEnumSelectField[]
     */
    public $level;
    /**
     * @var \NetSuite\Classes\SearchColumnBooleanField[]
     */
    public $manualCreditHold;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $middleName;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $mobilePhone;
    /**
     * @var \NetSuite\Classes\SearchColumnEnumSelectField[]
     */
    public $monthlyClosing;
    /**
     * @var \NetSuite\Classes\SearchColumnBooleanField[]
     */
    public $onCreditHold;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $overdueBalance;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $parent;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $partner;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $partnerContribution;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $partnerRole;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $partnerTeamMember;
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
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $prefCCProcessor;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $priceLevel;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $pricingGroup;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $pricingItem;
    /**
     * @var \NetSuite\Classes\SearchColumnBooleanField[]
     */
    public $printTransactions;
    /**
     * @var \NetSuite\Classes\SearchColumnDateField[]
     */
    public $prospectDate;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $receivablesAccount;
    /**
     * @var \NetSuite\Classes\SearchColumnLongField[]
     */
    public $reminderDays;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $resaleNumber;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $role;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $salesReadiness;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $salesRep;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $salesTeamMember;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $salesTeamRole;
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
     * @var \NetSuite\Classes\SearchColumnBooleanField[]
     */
    public $shipComplete;
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
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $shippingItem;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $shipState;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $shipZip;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $sourceSite;
    /**
     * @var \NetSuite\Classes\SearchColumnLongField[]
     */
    public $sourceSiteId;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $stage;
    /**
     * @var \NetSuite\Classes\SearchColumnDateField[]
     */
    public $startDate;
    /**
     * @var \NetSuite\Classes\SearchColumnEnumSelectField[]
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
     * @var \NetSuite\Classes\SearchColumnBooleanField[]
     */
    public $taxable;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $taxItem;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $terms;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $territory;
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
     * @var \NetSuite\Classes\SearchColumnBooleanField[]
     */
    public $webLead;
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
        "assignedSite" => "SearchColumnSelectField[]",
        "assignedSiteId" => "SearchColumnLongField[]",
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
        "defaultTaxReg" => "SearchColumnStringField[]",
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
        "sourceSite" => "SearchColumnSelectField[]",
        "sourceSiteId" => "SearchColumnLongField[]",
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
