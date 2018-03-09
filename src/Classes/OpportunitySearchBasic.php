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

class OpportunitySearchBasic extends SearchRecordBasic {
    public $amount;
    public $availableOffline;
    public $buyingReason;
    public $buyingTimeFrame;
    public $class;
    public $closeDate;
    public $competitor;
    public $contribution;
    public $currency;
    public $custType;
    public $dateCreated;
    public $daysOpen;
    public $daysToClose;
    public $department;
    public $entity;
    public $entityStatus;
    public $estimatedBudget;
    public $expectedCloseDate;
    public $externalId;
    public $externalIdString;
    public $forecastType;
    public $foreignProjectedAmount;
    public $foreignRangeHigh;
    public $foreignRangeLow;
    public $fxTranCostEstimate;
    public $internalId;
    public $internalIdNumber;
    public $isBudgetApproved;
    public $item;
    public $lastModifiedDate;
    public $leadSource;
    public $location;
    public $memo;
    public $number;
    public $partner;
    public $partnerContribution;
    public $partnerRole;
    public $partnerTeamMember;
    public $postingPeriod;
    public $postingPeriodRelative;
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
    public $status;
    public $subsidiary;
    public $taxPeriod;
    public $taxPeriodRelative;
    public $title;
    public $tranCostEstimate;
    public $tranDate;
    public $tranEstGrossProfit;
    public $tranEstGrossProfitPct;
    public $tranFxEstGrossProfit;
    public $tranId;
    public $winLossReason;
    public $wonBy;
    public $customFieldList;
    static $paramtypesmap = array(
        "amount" => "SearchDoubleField",
        "availableOffline" => "SearchBooleanField",
        "buyingReason" => "SearchMultiSelectField",
        "buyingTimeFrame" => "SearchMultiSelectField",
        "class" => "SearchMultiSelectField",
        "closeDate" => "SearchDateField",
        "competitor" => "SearchMultiSelectField",
        "contribution" => "SearchLongField",
        "currency" => "SearchMultiSelectField",
        "custType" => "SearchMultiSelectField",
        "dateCreated" => "SearchDateField",
        "daysOpen" => "SearchLongField",
        "daysToClose" => "SearchLongField",
        "department" => "SearchMultiSelectField",
        "entity" => "SearchMultiSelectField",
        "entityStatus" => "SearchMultiSelectField",
        "estimatedBudget" => "SearchDoubleField",
        "expectedCloseDate" => "SearchDateField",
        "externalId" => "SearchMultiSelectField",
        "externalIdString" => "SearchStringField",
        "forecastType" => "SearchEnumMultiSelectField",
        "foreignProjectedAmount" => "SearchDoubleField",
        "foreignRangeHigh" => "SearchDoubleField",
        "foreignRangeLow" => "SearchDoubleField",
        "fxTranCostEstimate" => "SearchDoubleField",
        "internalId" => "SearchMultiSelectField",
        "internalIdNumber" => "SearchLongField",
        "isBudgetApproved" => "SearchBooleanField",
        "item" => "SearchMultiSelectField",
        "lastModifiedDate" => "SearchDateField",
        "leadSource" => "SearchMultiSelectField",
        "location" => "SearchMultiSelectField",
        "memo" => "SearchStringField",
        "number" => "SearchLongField",
        "partner" => "SearchMultiSelectField",
        "partnerContribution" => "SearchLongField",
        "partnerRole" => "SearchMultiSelectField",
        "partnerTeamMember" => "SearchMultiSelectField",
        "postingPeriod" => "RecordRef",
        "postingPeriodRelative" => "PostingPeriodDate",
        "probability" => "SearchLongField",
        "projAltSalesAmt" => "SearchDoubleField",
        "projectedTotal" => "SearchDoubleField",
        "rangeHigh" => "SearchDoubleField",
        "rangeHighAlt" => "SearchDoubleField",
        "rangeLow" => "SearchDoubleField",
        "rangeLowAlt" => "SearchDoubleField",
        "salesReadiness" => "SearchMultiSelectField",
        "salesRep" => "SearchMultiSelectField",
        "salesTeamMember" => "SearchMultiSelectField",
        "salesTeamRole" => "SearchMultiSelectField",
        "status" => "SearchEnumMultiSelectField",
        "subsidiary" => "SearchMultiSelectField",
        "taxPeriod" => "RecordRef",
        "taxPeriodRelative" => "PostingPeriodDate",
        "title" => "SearchStringField",
        "tranCostEstimate" => "SearchDoubleField",
        "tranDate" => "SearchDateField",
        "tranEstGrossProfit" => "SearchDoubleField",
        "tranEstGrossProfitPct" => "SearchDoubleField",
        "tranFxEstGrossProfit" => "SearchDoubleField",
        "tranId" => "SearchStringField",
        "winLossReason" => "SearchMultiSelectField",
        "wonBy" => "SearchMultiSelectField",
        "customFieldList" => "SearchCustomFieldList",
    );
}
