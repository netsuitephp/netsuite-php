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

class OpportunitySearchRowBasic extends SearchRowBasic {
    public $actionItem;
    public $availableOffline;
    public $buyingReason;
    public $buyingTimeFrame;
    public $class;
    public $closeDate;
    public $competitor;
    public $contribution;
    public $contributionPrimary;
    public $currency;
    public $custType;
    public $dateCreated;
    public $daysOpen;
    public $daysToClose;
    public $decisionMaker;
    public $department;
    public $status;
    public $entity;
    public $entityStatus;
    public $estimatedBudget;
    public $expectedCloseDate;
    public $externalId;
    public $forecastType;
    public $foreignProjectedAmount;
    public $foreignRangeHigh;
    public $foreignRangeLow;
    public $fxTranCostEstimate;
    public $internalId;
    public $isBudgetApproved;
    public $lastModifiedDate;
    public $leadSource;
    public $location;
    public $memo;
    public $partner;
    public $partnerContribution;
    public $partnerRole;
    public $partnerTeamMember;
    public $period;
    public $probability;
    public $projAltSalesAmt;
    public $projectedTotal;
    public $rangeHigh;
    public $rangeHighAlt;
    public $rangeLow;
    public $rangeLowAlt;
    public $salesReadiness;
    public $salesRep;
    public $salesTeamMember;
    public $salesTeamRole;
    public $subsidiary;
    public $taxPeriod;
    public $title;
    public $total;
    public $tranCostEstimate;
    public $tranDate;
    public $tranEstGrossProfit;
    public $tranEstGrossProfitPct;
    public $tranFxEstGrossProfit;
    public $tranId;
    public $weightedTotal;
    public $winLossReason;
    public $wonBy;
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
        "status" => "SearchColumnEnumSelectField[]",
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
