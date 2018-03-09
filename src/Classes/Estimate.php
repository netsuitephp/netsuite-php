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

class Estimate extends Record {
    public $createdDate;
    public $lastModifiedDate;
    public $nexus;
    public $subsidiaryTaxRegNum;
    public $taxRegOverride;
    public $taxDetailsOverride;
    public $entity;
    public $job;
    public $tranDate;
    public $tranId;
    public $entityTaxRegNum;
    public $source;
    public $customForm;
    public $currency;
    public $title;
    public $entityStatus;
    public $probability;
    public $includeInForecast;
    public $forecastType;
    public $opportunity;
    public $department;
    public $class;
    public $terms;
    public $dueDate;
    public $location;
    public $subsidiary;
    public $billingSchedule;
    public $status;
    public $salesRep;
    public $partner;
    public $contribPct;
    public $leadSource;
    public $expectedCloseDate;
    public $otherRefNum;
    public $memo;
    public $endDate;
    public $startDate;
    public $totalCostEstimate;
    public $estGrossProfit;
    public $estGrossProfitPercent;
    public $createdFrom;
    public $exchangeRate;
    public $currencyName;
    public $promoCode;
    public $discountItem;
    public $discountRate;
    public $isTaxable;
    public $taxItem;
    public $taxRate;
    public $vatRegNum;
    public $toBePrinted;
    public $toBeEmailed;
    public $email;
    public $toBeFaxed;
    public $fax;
    public $visibleToCustomer;
    public $messageSel;
    public $message;
    public $billingAddress;
    public $billAddressList;
    public $shippingAddress;
    public $shipIsResidential;
    public $shipAddressList;
    public $fob;
    public $shipDate;
    public $shipMethod;
    public $shippingCost;
    public $shippingTax1Rate;
    public $shippingTaxCode;
    public $shippingTax2Rate;
    public $handlingTaxCode;
    public $handlingTax1Rate;
    public $handlingCost;
    public $trackingNumbers;
    public $handlingTax2Rate;
    public $linkedTrackingNumbers;
    public $salesGroup;
    public $syncSalesTeams;
    public $altSalesTotal;
    public $canHaveStackable;
    public $oneTime;
    public $recurWeekly;
    public $recurMonthly;
    public $recurQuarterly;
    public $recurAnnually;
    public $subTotal;
    public $discountTotal;
    public $taxTotal;
    public $altShippingCost;
    public $altHandlingCost;
    public $total;
    public $tax2Total;
    public $itemList;
    public $accountingBookDetailList;
    public $salesTeamList;
    public $syncPartnerTeams;
    public $partnersList;
    public $promotionsList;
    public $shipGroupList;
    public $taxDetailsList;
    public $customFieldList;
    public $internalId;
    public $externalId;
    static $paramtypesmap = array(
        "createdDate" => "dateTime",
        "lastModifiedDate" => "dateTime",
        "nexus" => "RecordRef",
        "subsidiaryTaxRegNum" => "RecordRef",
        "taxRegOverride" => "boolean",
        "taxDetailsOverride" => "boolean",
        "entity" => "RecordRef",
        "job" => "RecordRef",
        "tranDate" => "dateTime",
        "tranId" => "string",
        "entityTaxRegNum" => "RecordRef",
        "source" => "string",
        "customForm" => "RecordRef",
        "currency" => "RecordRef",
        "title" => "string",
        "entityStatus" => "RecordRef",
        "probability" => "float",
        "includeInForecast" => "boolean",
        "forecastType" => "RecordRef",
        "opportunity" => "RecordRef",
        "department" => "RecordRef",
        "class" => "RecordRef",
        "terms" => "RecordRef",
        "dueDate" => "dateTime",
        "location" => "RecordRef",
        "subsidiary" => "RecordRef",
        "billingSchedule" => "RecordRef",
        "status" => "string",
        "salesRep" => "RecordRef",
        "partner" => "RecordRef",
        "contribPct" => "string",
        "leadSource" => "RecordRef",
        "expectedCloseDate" => "dateTime",
        "otherRefNum" => "string",
        "memo" => "string",
        "endDate" => "dateTime",
        "startDate" => "dateTime",
        "totalCostEstimate" => "float",
        "estGrossProfit" => "float",
        "estGrossProfitPercent" => "float",
        "createdFrom" => "RecordRef",
        "exchangeRate" => "float",
        "currencyName" => "string",
        "promoCode" => "RecordRef",
        "discountItem" => "RecordRef",
        "discountRate" => "string",
        "isTaxable" => "boolean",
        "taxItem" => "RecordRef",
        "taxRate" => "float",
        "vatRegNum" => "string",
        "toBePrinted" => "boolean",
        "toBeEmailed" => "boolean",
        "email" => "string",
        "toBeFaxed" => "boolean",
        "fax" => "string",
        "visibleToCustomer" => "boolean",
        "messageSel" => "RecordRef",
        "message" => "string",
        "billingAddress" => "Address",
        "billAddressList" => "RecordRef",
        "shippingAddress" => "Address",
        "shipIsResidential" => "boolean",
        "shipAddressList" => "RecordRef",
        "fob" => "string",
        "shipDate" => "dateTime",
        "shipMethod" => "RecordRef",
        "shippingCost" => "float",
        "shippingTax1Rate" => "float",
        "shippingTaxCode" => "RecordRef",
        "shippingTax2Rate" => "string",
        "handlingTaxCode" => "RecordRef",
        "handlingTax1Rate" => "float",
        "handlingCost" => "float",
        "trackingNumbers" => "string",
        "handlingTax2Rate" => "string",
        "linkedTrackingNumbers" => "string",
        "salesGroup" => "RecordRef",
        "syncSalesTeams" => "boolean",
        "altSalesTotal" => "float",
        "canHaveStackable" => "boolean",
        "oneTime" => "float",
        "recurWeekly" => "float",
        "recurMonthly" => "float",
        "recurQuarterly" => "float",
        "recurAnnually" => "float",
        "subTotal" => "float",
        "discountTotal" => "float",
        "taxTotal" => "float",
        "altShippingCost" => "float",
        "altHandlingCost" => "float",
        "total" => "float",
        "tax2Total" => "float",
        "itemList" => "EstimateItemList",
        "accountingBookDetailList" => "AccountingBookDetailList",
        "salesTeamList" => "EstimateSalesTeamList",
        "syncPartnerTeams" => "boolean",
        "partnersList" => "EstimatePartnersList",
        "promotionsList" => "PromotionsList",
        "shipGroupList" => "EstimateShipGroupList",
        "taxDetailsList" => "TaxDetailsList",
        "customFieldList" => "CustomFieldList",
        "internalId" => "string",
        "externalId" => "string",
    );
}
