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
 * generated:  2020-02-19 09:58:55 AM CST
 */

namespace NetSuite\Classes;

class CustomSale extends Record {
    public $createdDate;
    public $lastModifiedDate;
    public $tranType;
    public $nexus;
    public $subsidiaryTaxRegNum;
    public $taxRegOverride;
    public $taxDetailsOverride;
    public $customForm;
    public $entity;
    public $billingAccount;
    public $tranDate;
    public $tranId;
    public $entityTaxRegNum;
    public $source;
    public $createdFrom;
    public $postingPeriod;
    public $opportunity;
    public $department;
    public $class;
    public $terms;
    public $location;
    public $subsidiary;
    public $currency;
    public $dueDate;
    public $discountDate;
    public $discountAmount;
    public $salesRep;
    public $partner;
    public $leadSource;
    public $startDate;
    public $endDate;
    public $otherRefNum;
    public $memo;
    public $tranStatus;
    public $salesEffectiveDate;
    public $excludeCommission;
    public $totalCostEstimate;
    public $estGrossProfit;
    public $estGrossProfitPercent;
    public $revRecSchedule;
    public $revRecStartDate;
    public $revRecEndDate;
    public $account;
    public $exchangeRate;
    public $currencyName;
    public $promoCode;
    public $discountItem;
    public $discountRate;
    public $isTaxable;
    public $toBePrinted;
    public $toBeEmailed;
    public $toBeFaxed;
    public $fax;
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
    public $handlingCost;
    public $trackingNumbers;
    public $linkedTrackingNumbers;
    public $salesGroup;
    public $subTotal;
    public $revenueStatus;
    public $recognizedRevenue;
    public $deferredRevenue;
    public $revRecOnRevCommitment;
    public $syncSalesTeams;
    public $discountTotal;
    public $taxTotal;
    public $altShippingCost;
    public $altHandlingCost;
    public $total;
    public $status;
    public $job;
    public $email;
    public $giftCertApplied;
    public $tranIsVsoeBundle;
    public $vsoeAutoCalc;
    public $syncPartnerTeams;
    public $partnersList;
    public $itemList;
    public $giftCertRedemptionList;
    public $accountingBookDetailList;
    public $salesTeamList;
    public $taxDetailsList;
    public $customFieldList;
    public $internalId;
    public $externalId;
    static $paramtypesmap = array(
        "createdDate" => "dateTime",
        "lastModifiedDate" => "dateTime",
        "tranType" => "RecordRef",
        "nexus" => "RecordRef",
        "subsidiaryTaxRegNum" => "RecordRef",
        "taxRegOverride" => "boolean",
        "taxDetailsOverride" => "boolean",
        "customForm" => "RecordRef",
        "entity" => "RecordRef",
        "billingAccount" => "RecordRef",
        "tranDate" => "dateTime",
        "tranId" => "string",
        "entityTaxRegNum" => "RecordRef",
        "source" => "string",
        "createdFrom" => "RecordRef",
        "postingPeriod" => "RecordRef",
        "opportunity" => "RecordRef",
        "department" => "RecordRef",
        "class" => "RecordRef",
        "terms" => "RecordRef",
        "location" => "RecordRef",
        "subsidiary" => "RecordRef",
        "currency" => "RecordRef",
        "dueDate" => "dateTime",
        "discountDate" => "dateTime",
        "discountAmount" => "float",
        "salesRep" => "RecordRef",
        "partner" => "RecordRef",
        "leadSource" => "RecordRef",
        "startDate" => "dateTime",
        "endDate" => "dateTime",
        "otherRefNum" => "string",
        "memo" => "string",
        "tranStatus" => "RecordRef",
        "salesEffectiveDate" => "dateTime",
        "excludeCommission" => "boolean",
        "totalCostEstimate" => "float",
        "estGrossProfit" => "float",
        "estGrossProfitPercent" => "float",
        "revRecSchedule" => "RecordRef",
        "revRecStartDate" => "dateTime",
        "revRecEndDate" => "dateTime",
        "account" => "RecordRef",
        "exchangeRate" => "float",
        "currencyName" => "string",
        "promoCode" => "RecordRef",
        "discountItem" => "RecordRef",
        "discountRate" => "string",
        "isTaxable" => "boolean",
        "toBePrinted" => "boolean",
        "toBeEmailed" => "boolean",
        "toBeFaxed" => "boolean",
        "fax" => "string",
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
        "handlingCost" => "float",
        "trackingNumbers" => "string",
        "linkedTrackingNumbers" => "string",
        "salesGroup" => "RecordRef",
        "subTotal" => "float",
        "revenueStatus" => "RevenueStatus",
        "recognizedRevenue" => "float",
        "deferredRevenue" => "float",
        "revRecOnRevCommitment" => "boolean",
        "syncSalesTeams" => "boolean",
        "discountTotal" => "float",
        "taxTotal" => "float",
        "altShippingCost" => "float",
        "altHandlingCost" => "float",
        "total" => "float",
        "status" => "string",
        "job" => "RecordRef",
        "email" => "string",
        "giftCertApplied" => "float",
        "tranIsVsoeBundle" => "boolean",
        "vsoeAutoCalc" => "boolean",
        "syncPartnerTeams" => "boolean",
        "partnersList" => "CustomSalePartnersList",
        "itemList" => "CustomSaleItemList",
        "giftCertRedemptionList" => "GiftCertRedemptionList",
        "accountingBookDetailList" => "AccountingBookDetailList",
        "salesTeamList" => "CustomSaleSalesTeamList",
        "taxDetailsList" => "TaxDetailsList",
        "customFieldList" => "CustomFieldList",
        "internalId" => "string",
        "externalId" => "string",
    );
}
