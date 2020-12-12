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

class OpportunitySearchBasic extends SearchRecordBasic {
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $amount;
    /**
     * @var \NetSuite\Classes\SearchBooleanField
     */
    public $availableOffline;
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
    public $class;
    /**
     * @var \NetSuite\Classes\SearchDateField
     */
    public $closeDate;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $competitor;
    /**
     * @var \NetSuite\Classes\SearchLongField
     */
    public $contribution;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $currency;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $custType;
    /**
     * @var \NetSuite\Classes\SearchDateField
     */
    public $dateCreated;
    /**
     * @var \NetSuite\Classes\SearchLongField
     */
    public $daysOpen;
    /**
     * @var \NetSuite\Classes\SearchLongField
     */
    public $daysToClose;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $department;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $entity;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $entityStatus;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $estimatedBudget;
    /**
     * @var \NetSuite\Classes\SearchDateField
     */
    public $expectedCloseDate;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $externalId;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $externalIdString;
    /**
     * @var \NetSuite\Classes\SearchEnumMultiSelectField
     */
    public $forecastType;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $foreignProjectedAmount;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $foreignRangeHigh;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $foreignRangeLow;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $fxTranCostEstimate;
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
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $item;
    /**
     * @var \NetSuite\Classes\SearchDateField
     */
    public $lastModifiedDate;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $leadSource;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $location;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $memo;
    /**
     * @var \NetSuite\Classes\SearchLongField
     */
    public $number;
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
     * @var \NetSuite\Classes\RecordRef
     */
    public $postingPeriod;
    /**
     * @var \NetSuite\Classes\PostingPeriodDate
     */
    public $postingPeriodRelative;
    /**
     * @var \NetSuite\Classes\SearchLongField
     */
    public $probability;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $projAltSalesAmt;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $projectedTotal;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $rangeHigh;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $rangeHighAlt;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $rangeLow;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $rangeLowAlt;
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
     * @var \NetSuite\Classes\SearchEnumMultiSelectField
     */
    public $status;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $subsidiary;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $taxPeriod;
    /**
     * @var \NetSuite\Classes\PostingPeriodDate
     */
    public $taxPeriodRelative;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $title;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $tranCostEstimate;
    /**
     * @var \NetSuite\Classes\SearchDateField
     */
    public $tranDate;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $tranEstGrossProfit;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $tranEstGrossProfitPct;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $tranFxEstGrossProfit;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $tranId;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $winLossReason;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $wonBy;
    /**
     * @var \NetSuite\Classes\SearchCustomFieldList
     */
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
