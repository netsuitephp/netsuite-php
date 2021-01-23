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

class OpportunitySearchRowBasic extends SearchRowBasic {
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $actionItem;
    /**
     * @var \NetSuite\Classes\SearchColumnBooleanField[]
     */
    public $availableOffline;
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
    public $class;
    /**
     * @var \NetSuite\Classes\SearchColumnDateField[]
     */
    public $closeDate;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $competitor;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $contribution;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $contributionPrimary;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $currency;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $custType;
    /**
     * @var \NetSuite\Classes\SearchColumnDateField[]
     */
    public $dateCreated;
    /**
     * @var \NetSuite\Classes\SearchColumnLongField[]
     */
    public $daysOpen;
    /**
     * @var \NetSuite\Classes\SearchColumnLongField[]
     */
    public $daysToClose;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $decisionMaker;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $department;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $entity;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $entityStatus;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $estimatedBudget;
    /**
     * @var \NetSuite\Classes\SearchColumnDateField[]
     */
    public $expectedCloseDate;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $externalId;
    /**
     * @var \NetSuite\Classes\SearchColumnEnumSelectField[]
     */
    public $forecastType;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $foreignProjectedAmount;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $foreignRangeHigh;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $foreignRangeLow;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $fxTranCostEstimate;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $internalId;
    /**
     * @var \NetSuite\Classes\SearchColumnBooleanField[]
     */
    public $isBudgetApproved;
    /**
     * @var \NetSuite\Classes\SearchColumnDateField[]
     */
    public $lastModifiedDate;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $leadSource;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $location;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $memo;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $partner;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $partnerContribution;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $partnerRole;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $partnerTeamMember;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $period;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $probability;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $projAltSalesAmt;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $projectedTotal;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $rangeHigh;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $rangeHighAlt;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $rangeLow;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $rangeLowAlt;
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
     * @var \NetSuite\Classes\SearchColumnEnumSelectField[]
     */
    public $status;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $subsidiary;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $taxPeriod;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $title;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $total;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $tranCostEstimate;
    /**
     * @var \NetSuite\Classes\SearchColumnDateField[]
     */
    public $tranDate;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $tranEstGrossProfit;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $tranEstGrossProfitPct;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $tranFxEstGrossProfit;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $tranId;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $weightedTotal;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $winLossReason;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $wonBy;
    /**
     * @var \NetSuite\Classes\SearchColumnCustomFieldList
     */
    public $customFieldList;
    static $paramtypesmap = array(
        "actionItem" => "SearchColumnStringField[]",
        "availableOffline" => "SearchColumnBooleanField[]",
        "buyingReason" => "SearchColumnStringField[]",
        "buyingTimeFrame" => "SearchColumnStringField[]",
        "class" => "SearchColumnSelectField[]",
        "closeDate" => "SearchColumnDateField[]",
        "competitor" => "SearchColumnSelectField[]",
        "contribution" => "SearchColumnDoubleField[]",
        "contributionPrimary" => "SearchColumnDoubleField[]",
        "currency" => "SearchColumnSelectField[]",
        "custType" => "SearchColumnStringField[]",
        "dateCreated" => "SearchColumnDateField[]",
        "daysOpen" => "SearchColumnLongField[]",
        "daysToClose" => "SearchColumnLongField[]",
        "decisionMaker" => "SearchColumnSelectField[]",
        "department" => "SearchColumnSelectField[]",
        "entity" => "SearchColumnSelectField[]",
        "entityStatus" => "SearchColumnSelectField[]",
        "estimatedBudget" => "SearchColumnDoubleField[]",
        "expectedCloseDate" => "SearchColumnDateField[]",
        "externalId" => "SearchColumnSelectField[]",
        "forecastType" => "SearchColumnEnumSelectField[]",
        "foreignProjectedAmount" => "SearchColumnDoubleField[]",
        "foreignRangeHigh" => "SearchColumnDoubleField[]",
        "foreignRangeLow" => "SearchColumnDoubleField[]",
        "fxTranCostEstimate" => "SearchColumnDoubleField[]",
        "internalId" => "SearchColumnSelectField[]",
        "isBudgetApproved" => "SearchColumnBooleanField[]",
        "lastModifiedDate" => "SearchColumnDateField[]",
        "leadSource" => "SearchColumnSelectField[]",
        "location" => "SearchColumnSelectField[]",
        "memo" => "SearchColumnStringField[]",
        "partner" => "SearchColumnSelectField[]",
        "partnerContribution" => "SearchColumnDoubleField[]",
        "partnerRole" => "SearchColumnSelectField[]",
        "partnerTeamMember" => "SearchColumnSelectField[]",
        "period" => "SearchColumnStringField[]",
        "probability" => "SearchColumnDoubleField[]",
        "projAltSalesAmt" => "SearchColumnDoubleField[]",
        "projectedTotal" => "SearchColumnDoubleField[]",
        "rangeHigh" => "SearchColumnDoubleField[]",
        "rangeHighAlt" => "SearchColumnDoubleField[]",
        "rangeLow" => "SearchColumnDoubleField[]",
        "rangeLowAlt" => "SearchColumnDoubleField[]",
        "salesReadiness" => "SearchColumnStringField[]",
        "salesRep" => "SearchColumnSelectField[]",
        "salesTeamMember" => "SearchColumnSelectField[]",
        "salesTeamRole" => "SearchColumnSelectField[]",
        "status" => "SearchColumnEnumSelectField[]",
        "subsidiary" => "SearchColumnSelectField[]",
        "taxPeriod" => "SearchColumnSelectField[]",
        "title" => "SearchColumnStringField[]",
        "total" => "SearchColumnDoubleField[]",
        "tranCostEstimate" => "SearchColumnDoubleField[]",
        "tranDate" => "SearchColumnDateField[]",
        "tranEstGrossProfit" => "SearchColumnDoubleField[]",
        "tranEstGrossProfitPct" => "SearchColumnDoubleField[]",
        "tranFxEstGrossProfit" => "SearchColumnDoubleField[]",
        "tranId" => "SearchColumnStringField[]",
        "weightedTotal" => "SearchColumnDoubleField[]",
        "winLossReason" => "SearchColumnSelectField[]",
        "wonBy" => "SearchColumnSelectField[]",
        "customFieldList" => "SearchColumnCustomFieldList",
    );
}
