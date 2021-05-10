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

class Opportunity extends Record {
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $customForm;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $currency;
    /**
     * @var float
     */
    public $estimatedBudget;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $entity;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $job;
    /**
     * @var string
     */
    public $title;
    /**
     * @var string
     */
    public $tranId;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $entityTaxRegNum;
    /**
     * @var string
     */
    public $taxPointDate;
    /**
     * @var float
     */
    public $oneTime;
    /**
     * @var float
     */
    public $recurWeekly;
    /**
     * @var float
     */
    public $recurMonthly;
    /**
     * @var float
     */
    public $recurQuarterly;
    /**
     * @var float
     */
    public $recurAnnually;
    /**
     * @var string
     */
    public $source;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $salesRep;
    /**
     * @var string
     */
    public $contribPct;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $partner;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $salesGroup;
    /**
     * @var boolean
     */
    public $syncSalesTeams;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $leadSource;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $entityStatus;
    /**
     * @var float
     */
    public $probability;
    /**
     * @var string
     */
    public $tranDate;
    /**
     * @var string
     */
    public $expectedCloseDate;
    /**
     * @var integer
     */
    public $daysOpen;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $forecastType;
    /**
     * @var string
     */
    public $currencyName;
    /**
     * @var float
     */
    public $exchangeRate;
    /**
     * @var float
     */
    public $projectedTotal;
    /**
     * @var float
     */
    public $rangeLow;
    /**
     * @var float
     */
    public $rangeHigh;
    /**
     * @var float
     */
    public $projAltSalesAmt;
    /**
     * @var float
     */
    public $altSalesRangeLow;
    /**
     * @var float
     */
    public $altSalesRangeHigh;
    /**
     * @var float
     */
    public $weightedTotal;
    /**
     * @var string
     */
    public $actionItem;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $winLossReason;
    /**
     * @var string
     */
    public $memo;
    /**
     * @var float
     */
    public $taxTotal;
    /**
     * @var boolean
     */
    public $isBudgetApproved;
    /**
     * @var float
     */
    public $tax2Total;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $salesReadiness;
    /**
     * @var float
     */
    public $totalCostEstimate;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $buyingTimeFrame;
    /**
     * @var float
     */
    public $estGrossProfit;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $buyingReason;
    /**
     * @var float
     */
    public $estGrossProfitPercent;
    /**
     * @var \NetSuite\Classes\Address
     */
    public $billingAddress;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $billAddressList;
    /**
     * @var \NetSuite\Classes\Address
     */
    public $shippingAddress;
    /**
     * @var boolean
     */
    public $shipIsResidential;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $shipAddressList;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $class;
    /**
     * @var string
     */
    public $closeDate;
    /**
     * @var string
     */
    public $createdDate;
    /**
     * @var string
     */
    public $lastModifiedDate;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $nexus;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $subsidiaryTaxRegNum;
    /**
     * @var boolean
     */
    public $taxRegOverride;
    /**
     * @var boolean
     */
    public $taxDetailsOverride;
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
    public $subsidiary;
    /**
     * @var string
     */
    public $status;
    /**
     * @var string
     */
    public $vatRegNum;
    /**
     * @var boolean
     */
    public $syncPartnerTeams;
    /**
     * @var \NetSuite\Classes\OpportunitySalesTeamList
     */
    public $salesTeamList;
    /**
     * @var \NetSuite\Classes\OpportunityPartnersList
     */
    public $partnersList;
    /**
     * @var \NetSuite\Classes\OpportunityItemList
     */
    public $itemList;
    /**
     * @var \NetSuite\Classes\OpportunityCompetitorsList
     */
    public $competitorsList;
    /**
     * @var \NetSuite\Classes\AccountingBookDetailList
     */
    public $accountingBookDetailList;
    /**
     * @var \NetSuite\Classes\TaxDetailsList
     */
    public $taxDetailsList;
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
        "currency" => "RecordRef",
        "estimatedBudget" => "float",
        "entity" => "RecordRef",
        "job" => "RecordRef",
        "title" => "string",
        "tranId" => "string",
        "entityTaxRegNum" => "RecordRef",
        "taxPointDate" => "dateTime",
        "oneTime" => "float",
        "recurWeekly" => "float",
        "recurMonthly" => "float",
        "recurQuarterly" => "float",
        "recurAnnually" => "float",
        "source" => "string",
        "salesRep" => "RecordRef",
        "contribPct" => "string",
        "partner" => "RecordRef",
        "salesGroup" => "RecordRef",
        "syncSalesTeams" => "boolean",
        "leadSource" => "RecordRef",
        "entityStatus" => "RecordRef",
        "probability" => "float",
        "tranDate" => "dateTime",
        "expectedCloseDate" => "dateTime",
        "daysOpen" => "integer",
        "forecastType" => "RecordRef",
        "currencyName" => "string",
        "exchangeRate" => "float",
        "projectedTotal" => "float",
        "rangeLow" => "float",
        "rangeHigh" => "float",
        "projAltSalesAmt" => "float",
        "altSalesRangeLow" => "float",
        "altSalesRangeHigh" => "float",
        "weightedTotal" => "float",
        "actionItem" => "string",
        "winLossReason" => "RecordRef",
        "memo" => "string",
        "taxTotal" => "float",
        "isBudgetApproved" => "boolean",
        "tax2Total" => "float",
        "salesReadiness" => "RecordRef",
        "totalCostEstimate" => "float",
        "buyingTimeFrame" => "RecordRef",
        "estGrossProfit" => "float",
        "buyingReason" => "RecordRef",
        "estGrossProfitPercent" => "float",
        "billingAddress" => "Address",
        "billAddressList" => "RecordRef",
        "shippingAddress" => "Address",
        "shipIsResidential" => "boolean",
        "shipAddressList" => "RecordRef",
        "class" => "RecordRef",
        "closeDate" => "dateTime",
        "createdDate" => "dateTime",
        "lastModifiedDate" => "dateTime",
        "nexus" => "RecordRef",
        "subsidiaryTaxRegNum" => "RecordRef",
        "taxRegOverride" => "boolean",
        "taxDetailsOverride" => "boolean",
        "department" => "RecordRef",
        "location" => "RecordRef",
        "subsidiary" => "RecordRef",
        "status" => "string",
        "vatRegNum" => "string",
        "syncPartnerTeams" => "boolean",
        "salesTeamList" => "OpportunitySalesTeamList",
        "partnersList" => "OpportunityPartnersList",
        "itemList" => "OpportunityItemList",
        "competitorsList" => "OpportunityCompetitorsList",
        "accountingBookDetailList" => "AccountingBookDetailList",
        "taxDetailsList" => "TaxDetailsList",
        "customFieldList" => "CustomFieldList",
        "internalId" => "string",
        "externalId" => "string",
    );
}
