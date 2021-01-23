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
 * generated:  2020-12-11 06:57:10 PM PST
 */

namespace NetSuite\Classes;

class OriginatingLeadSearchBasic extends SearchRecordBasic {
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $accountNumber;
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
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $assignedSite;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $assignedSiteId;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $attention;
    /**
     * @var \NetSuite\Classes\SearchBooleanField
     */
    public $availableOffline;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $balance;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $billAddress;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $boughtAmount;
    /**
     * @var \NetSuite\Classes\SearchDateField
     */
    public $boughtDate;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $buyingReason;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $buyingTimeFrame;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $category;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $ccCustomerCode;
    /**
     * @var \NetSuite\Classes\SearchBooleanField
     */
    public $ccDefault;
    /**
     * @var \NetSuite\Classes\SearchDateField
     */
    public $ccExpDate;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $ccHolderName;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $ccNumber;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $ccState;
    /**
     * @var \NetSuite\Classes\SearchDateField
     */
    public $ccStateFrom;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $ccType;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $city;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $classBought;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $comments;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $companyName;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $consolBalance;
    /**
     * @var \NetSuite\Classes\SearchLongField
     */
    public $consolDaysOverdue;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $consolDepositBalance;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $consolOverdueBalance;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $consolUnbilledOrders;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $contact;
    /**
     * @var \NetSuite\Classes\SearchLongField
     */
    public $contribution;
    /**
     * @var \NetSuite\Classes\SearchDateField
     */
    public $conversionDate;
    /**
     * @var \NetSuite\Classes\SearchEnumMultiSelectField
     */
    public $country;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $county;
    /**
     * @var \NetSuite\Classes\SearchEnumMultiSelectField
     */
    public $creditHold;
    /**
     * @var \NetSuite\Classes\SearchBooleanField
     */
    public $creditHoldOverride;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $creditLimit;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $currency;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $custStage;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $custStatus;
    /**
     * @var \NetSuite\Classes\SearchDateField
     */
    public $dateClosed;
    /**
     * @var \NetSuite\Classes\SearchDateField
     */
    public $dateCreated;
    /**
     * @var \NetSuite\Classes\SearchLongField
     */
    public $daysOverdue;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $defaultOrderPriority;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $defaultTaxReg;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $defaultTaxRegText;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $depositBalance;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $deptBought;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $drAccount;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $email;
    /**
     * @var \NetSuite\Classes\SearchEnumMultiSelectField
     */
    public $emailPreference;
    /**
     * @var \NetSuite\Classes\SearchBooleanField
     */
    public $emailTransactions;
    /**
     * @var \NetSuite\Classes\SearchDateField
     */
    public $endDate;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $entityId;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $entityStatus;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $estimatedBudget;
    /**
     * @var \NetSuite\Classes\SearchBooleanField
     */
    public $explicitConversion;
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
     * @var \NetSuite\Classes\SearchBooleanField
     */
    public $faxTransactions;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $firstName;
    /**
     * @var \NetSuite\Classes\SearchDateField
     */
    public $firstOrderDate;
    /**
     * @var \NetSuite\Classes\SearchDateField
     */
    public $firstSaleDate;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $fxAccount;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $fxBalance;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $fxConsolBalance;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $fxConsolUnbilledOrders;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $fxUnbilledOrders;
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
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $groupPricingLevel;
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
    public $isBudgetApproved;
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
     * @var \NetSuite\Classes\SearchBooleanField
     */
    public $isReportedLead;
    /**
     * @var \NetSuite\Classes\SearchBooleanField
     */
    public $isShipAddress;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $itemPricingLevel;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $itemPricingUnitPrice;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $itemsBought;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $itemsOrdered;
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
     * @var \NetSuite\Classes\SearchDateField
     */
    public $lastOrderDate;
    /**
     * @var \NetSuite\Classes\SearchDateField
     */
    public $lastSaleDate;
    /**
     * @var \NetSuite\Classes\SearchDateField
     */
    public $leadDate;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $leadSource;
    /**
     * @var \NetSuite\Classes\SearchEnumMultiSelectField
     */
    public $level;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $locationBought;
    /**
     * @var \NetSuite\Classes\SearchBooleanField
     */
    public $manualCreditHold;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $merchantAccount;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $middleName;
    /**
     * @var \NetSuite\Classes\SearchEnumMultiSelectField
     */
    public $monthlyClosing;
    /**
     * @var \NetSuite\Classes\SearchBooleanField
     */
    public $onCreditHold;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $orderedAmount;
    /**
     * @var \NetSuite\Classes\SearchDateField
     */
    public $orderedDate;
    /**
     * @var \NetSuite\Classes\SearchEnumMultiSelectField
     */
    public $otherRelationships;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $overdueBalance;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $parent;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $parentItemsBought;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $parentItemsOrdered;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $partner;
    /**
     * @var \NetSuite\Classes\SearchLongField
     */
    public $partnerContribution;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $partnerRole;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $partnerTeamMember;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $pec;
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
    public $priceLevel;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $pricingGroup;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $pricingItem;
    /**
     * @var \NetSuite\Classes\SearchBooleanField
     */
    public $printTransactions;
    /**
     * @var \NetSuite\Classes\SearchDateField
     */
    public $prospectDate;
    /**
     * @var \NetSuite\Classes\SearchBooleanField
     */
    public $pstExempt;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $receivablesAccount;
    /**
     * @var \NetSuite\Classes\SearchDateField
     */
    public $reminderDate;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $resaleNumber;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $role;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $salesReadiness;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $salesRep;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $salesTeamMember;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $salesTeamRole;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $salutation;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $shipAddress;
    /**
     * @var \NetSuite\Classes\SearchBooleanField
     */
    public $shipComplete;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $shippingItem;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $sourceSite;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $sourceSiteId;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $stage;
    /**
     * @var \NetSuite\Classes\SearchDateField
     */
    public $startDate;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $state;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $subsidBought;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $subsidiary;
    /**
     * @var \NetSuite\Classes\SearchBooleanField
     */
    public $taxable;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $terms;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $territory;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $title;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $unbilledOrders;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $url;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $vatRegNumber;
    /**
     * @var \NetSuite\Classes\SearchBooleanField
     */
    public $webLead;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $zipCode;
    /**
     * @var \NetSuite\Classes\SearchCustomFieldList
     */
    public $customFieldList;
    static $paramtypesmap = array(
        "accountNumber" => "SearchStringField",
        "address" => "SearchStringField",
        "addressee" => "SearchStringField",
        "addressLabel" => "SearchStringField",
        "addressPhone" => "SearchStringField",
        "assignedSite" => "SearchMultiSelectField",
        "assignedSiteId" => "SearchMultiSelectField",
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
        "defaultTaxReg" => "SearchMultiSelectField",
        "defaultTaxRegText" => "SearchStringField",
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
        "sourceSite" => "SearchMultiSelectField",
        "sourceSiteId" => "SearchMultiSelectField",
        "stage" => "SearchMultiSelectField",
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
