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

class CustomerSearchBasic extends SearchRecordBasic {
    public $accountNumber;
    public $address;
    public $addressee;
    public $addressLabel;
    public $addressPhone;
    public $attention;
    public $availableOffline;
    public $balance;
    public $billAddress;
    public $boughtAmount;
    public $boughtDate;
    public $buyingReason;
    public $buyingTimeFrame;
    public $category;
    public $ccCustomerCode;
    public $ccDefault;
    public $ccExpDate;
    public $ccHolderName;
    public $ccNumber;
    public $ccState;
    public $ccStateFrom;
    public $ccType;
    public $city;
    public $classBought;
    public $comments;
    public $companyName;
    public $consolBalance;
    public $consolDaysOverdue;
    public $consolDepositBalance;
    public $consolOverdueBalance;
    public $consolUnbilledOrders;
    public $contact;
    public $contribution;
    public $conversionDate;
    public $country;
    public $county;
    public $creditHold;
    public $creditHoldOverride;
    public $creditLimit;
    public $currency;
    public $custStage;
    public $custStatus;
    public $dateClosed;
    public $dateCreated;
    public $daysOverdue;
    public $defaultOrderPriority;
    public $depositBalance;
    public $deptBought;
    public $drAccount;
    public $email;
    public $emailPreference;
    public $emailTransactions;
    public $endDate;
    public $entityId;
    public $entityStatus;
    public $estimatedBudget;
    public $explicitConversion;
    public $externalId;
    public $externalIdString;
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
    public $group;
    public $groupPricingLevel;
    public $hasDuplicates;
    public $image;
    public $internalId;
    public $internalIdNumber;
    public $isBudgetApproved;
    public $isDefaultBilling;
    public $isDefaultShipping;
    public $isInactive;
    public $isPerson;
    public $isReportedLead;
    public $isShipAddress;
    public $itemPricingLevel;
    public $itemPricingUnitPrice;
    public $itemsBought;
    public $itemsOrdered;
    public $language;
    public $lastModifiedDate;
    public $lastName;
    public $lastOrderDate;
    public $lastSaleDate;
    public $leadDate;
    public $leadSource;
    public $level;
    public $locationBought;
    public $manualCreditHold;
    public $merchantAccount;
    public $middleName;
    public $monthlyClosing;
    public $onCreditHold;
    public $orderedAmount;
    public $orderedDate;
    public $otherRelationships;
    public $overdueBalance;
    public $parent;
    public $parentItemsBought;
    public $parentItemsOrdered;
    public $partner;
    public $partnerContribution;
    public $partnerRole;
    public $partnerTeamMember;
    public $pec;
    public $permission;
    public $phone;
    public $phoneticName;
    public $priceLevel;
    public $pricingGroup;
    public $pricingItem;
    public $printTransactions;
    public $prospectDate;
    public $pstExempt;
    public $receivablesAccount;
    public $reminderDate;
    public $resaleNumber;
    public $role;
    public $salesReadiness;
    public $salesRep;
    public $salesTeamMember;
    public $salesTeamRole;
    public $salutation;
    public $shipAddress;
    public $shipComplete;
    public $shippingItem;
    public $stage;
    public $startDate;
    public $state;
    public $subsidBought;
    public $subsidiary;
    public $taxable;
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
        "accountNumber" => "SearchStringField",
        "address" => "SearchStringField",
        "addressee" => "SearchStringField",
        "addressLabel" => "SearchStringField",
        "addressPhone" => "SearchStringField",
        "attention" => "SearchStringField",
        "availableOffline" => "SearchBooleanField",
        "balance" => "SearchDoubleField",
        "billAddress" => "SearchStringField",
        "boughtAmount" => "SearchDoubleField",
        "boughtDate" => "SearchDateField",
        "buyingReason" => "SearchMultiSelectField",
        "buyingTimeFrame" => "SearchMultiSelectField",
        "category" => "SearchMultiSelectField",
        "ccCustomerCode" => "SearchStringField",
        "ccDefault" => "SearchBooleanField",
        "ccExpDate" => "SearchDateField",
        "ccHolderName" => "SearchStringField",
        "ccNumber" => "SearchStringField",
        "ccState" => "SearchMultiSelectField",
        "ccStateFrom" => "SearchDateField",
        "ccType" => "SearchMultiSelectField",
        "city" => "SearchStringField",
        "classBought" => "SearchMultiSelectField",
        "comments" => "SearchStringField",
        "companyName" => "SearchStringField",
        "consolBalance" => "SearchDoubleField",
        "consolDaysOverdue" => "SearchLongField",
        "consolDepositBalance" => "SearchDoubleField",
        "consolOverdueBalance" => "SearchDoubleField",
        "consolUnbilledOrders" => "SearchDoubleField",
        "contact" => "SearchStringField",
        "contribution" => "SearchLongField",
        "conversionDate" => "SearchDateField",
        "country" => "SearchEnumMultiSelectField",
        "county" => "SearchStringField",
        "creditHold" => "SearchEnumMultiSelectField",
        "creditHoldOverride" => "SearchBooleanField",
        "creditLimit" => "SearchDoubleField",
        "currency" => "SearchMultiSelectField",
        "custStage" => "SearchMultiSelectField",
        "custStatus" => "SearchMultiSelectField",
        "dateClosed" => "SearchDateField",
        "dateCreated" => "SearchDateField",
        "daysOverdue" => "SearchLongField",
        "defaultOrderPriority" => "SearchDoubleField",
        "depositBalance" => "SearchDoubleField",
        "deptBought" => "SearchMultiSelectField",
        "drAccount" => "SearchMultiSelectField",
        "email" => "SearchStringField",
        "emailPreference" => "SearchEnumMultiSelectField",
        "emailTransactions" => "SearchBooleanField",
        "endDate" => "SearchDateField",
        "entityId" => "SearchStringField",
        "entityStatus" => "SearchMultiSelectField",
        "estimatedBudget" => "SearchDoubleField",
        "explicitConversion" => "SearchBooleanField",
        "externalId" => "SearchMultiSelectField",
        "externalIdString" => "SearchStringField",
        "fax" => "SearchStringField",
        "faxTransactions" => "SearchBooleanField",
        "firstName" => "SearchStringField",
        "firstOrderDate" => "SearchDateField",
        "firstSaleDate" => "SearchDateField",
        "fxAccount" => "SearchMultiSelectField",
        "fxBalance" => "SearchDoubleField",
        "fxConsolBalance" => "SearchDoubleField",
        "fxConsolUnbilledOrders" => "SearchDoubleField",
        "fxUnbilledOrders" => "SearchDoubleField",
        "giveAccess" => "SearchBooleanField",
        "globalSubscriptionStatus" => "SearchEnumMultiSelectField",
        "group" => "SearchMultiSelectField",
        "groupPricingLevel" => "SearchMultiSelectField",
        "hasDuplicates" => "SearchBooleanField",
        "image" => "SearchStringField",
        "internalId" => "SearchMultiSelectField",
        "internalIdNumber" => "SearchLongField",
        "isBudgetApproved" => "SearchBooleanField",
        "isDefaultBilling" => "SearchBooleanField",
        "isDefaultShipping" => "SearchBooleanField",
        "isInactive" => "SearchBooleanField",
        "isPerson" => "SearchBooleanField",
        "isReportedLead" => "SearchBooleanField",
        "isShipAddress" => "SearchBooleanField",
        "itemPricingLevel" => "SearchMultiSelectField",
        "itemPricingUnitPrice" => "SearchDoubleField",
        "itemsBought" => "SearchMultiSelectField",
        "itemsOrdered" => "SearchMultiSelectField",
        "language" => "SearchEnumMultiSelectField",
        "lastModifiedDate" => "SearchDateField",
        "lastName" => "SearchStringField",
        "lastOrderDate" => "SearchDateField",
        "lastSaleDate" => "SearchDateField",
        "leadDate" => "SearchDateField",
        "leadSource" => "SearchMultiSelectField",
        "level" => "SearchEnumMultiSelectField",
        "locationBought" => "SearchMultiSelectField",
        "manualCreditHold" => "SearchBooleanField",
        "merchantAccount" => "SearchMultiSelectField",
        "middleName" => "SearchStringField",
        "monthlyClosing" => "SearchEnumMultiSelectField",
        "onCreditHold" => "SearchBooleanField",
        "orderedAmount" => "SearchDoubleField",
        "orderedDate" => "SearchDateField",
        "otherRelationships" => "SearchEnumMultiSelectField",
        "overdueBalance" => "SearchDoubleField",
        "parent" => "SearchMultiSelectField",
        "parentItemsBought" => "SearchMultiSelectField",
        "parentItemsOrdered" => "SearchMultiSelectField",
        "partner" => "SearchMultiSelectField",
        "partnerContribution" => "SearchLongField",
        "partnerRole" => "SearchMultiSelectField",
        "partnerTeamMember" => "SearchMultiSelectField",
        "pec" => "SearchStringField",
        "permission" => "SearchEnumMultiSelectField",
        "phone" => "SearchStringField",
        "phoneticName" => "SearchStringField",
        "priceLevel" => "SearchMultiSelectField",
        "pricingGroup" => "SearchMultiSelectField",
        "pricingItem" => "SearchMultiSelectField",
        "printTransactions" => "SearchBooleanField",
        "prospectDate" => "SearchDateField",
        "pstExempt" => "SearchBooleanField",
        "receivablesAccount" => "SearchMultiSelectField",
        "reminderDate" => "SearchDateField",
        "resaleNumber" => "SearchStringField",
        "role" => "SearchMultiSelectField",
        "salesReadiness" => "SearchMultiSelectField",
        "salesRep" => "SearchMultiSelectField",
        "salesTeamMember" => "SearchMultiSelectField",
        "salesTeamRole" => "SearchMultiSelectField",
        "salutation" => "SearchStringField",
        "shipAddress" => "SearchStringField",
        "shipComplete" => "SearchBooleanField",
        "shippingItem" => "SearchMultiSelectField",
        "stage" => "SearchEnumMultiSelectField",
        "startDate" => "SearchDateField",
        "state" => "SearchStringField",
        "subsidBought" => "SearchMultiSelectField",
        "subsidiary" => "SearchMultiSelectField",
        "taxable" => "SearchBooleanField",
        "terms" => "SearchMultiSelectField",
        "territory" => "SearchMultiSelectField",
        "title" => "SearchStringField",
        "unbilledOrders" => "SearchDoubleField",
        "url" => "SearchStringField",
        "vatRegNumber" => "SearchStringField",
        "webLead" => "SearchBooleanField",
        "zipCode" => "SearchStringField",
        "customFieldList" => "SearchCustomFieldList",
    );
}
