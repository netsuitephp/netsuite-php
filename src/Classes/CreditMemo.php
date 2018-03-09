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

class CreditMemo extends Record {
    public $createdDate;
    public $lastModifiedDate;
    public $nexus;
    public $subsidiaryTaxRegNum;
    public $taxRegOverride;
    public $taxDetailsOverride;
    public $customForm;
    public $currency;
    public $entity;
    public $vatRegNum;
    public $tranDate;
    public $tranId;
    public $entityTaxRegNum;
    public $createdFrom;
    public $postingPeriod;
    public $department;
    public $class;
    public $location;
    public $subsidiary;
    public $job;
    public $salesRep;
    public $partner;
    public $contribPct;
    public $otherRefNum;
    public $memo;
    public $excludeCommission;
    public $leadSource;
    public $balance;
    public $account;
    public $exchangeRate;
    public $onCreditHold;
    public $amountPaid;
    public $salesEffectiveDate;
    public $totalCostEstimate;
    public $estGrossProfit;
    public $estGrossProfitPercent;
    public $currencyName;
    public $promoCode;
    public $amountRemaining;
    public $discountItem;
    public $source;
    public $discountRate;
    public $isTaxable;
    public $taxItem;
    public $taxRate;
    public $unapplied;
    public $autoApply;
    public $applied;
    public $toBePrinted;
    public $toBeEmailed;
    public $email;
    public $toBeFaxed;
    public $fax;
    public $messageSel;
    public $message;
    public $billingAddress;
    public $billAddressList;
    public $shipMethod;
    public $shippingCost;
    public $shippingTax1Rate;
    public $shippingTaxCode;
    public $handlingTaxCode;
    public $shippingTax2Rate;
    public $handlingTax1Rate;
    public $handlingTax2Rate;
    public $handlingCost;
    public $subTotal;
    public $discountTotal;
    public $revenueStatus;
    public $recognizedRevenue;
    public $deferredRevenue;
    public $revRecOnRevCommitment;
    public $taxTotal;
    public $tax2Total;
    public $altShippingCost;
    public $altHandlingCost;
    public $isMultiShipTo;
    public $total;
    public $salesGroup;
    public $syncSalesTeams;
    public $status;
    public $giftCert;
    public $giftCertTotal;
    public $giftCertApplied;
    public $giftCertAvailable;
    public $tranIsVsoeBundle;
    public $vsoeAutoCalc;
    public $syncPartnerTeams;
    public $salesTeamList;
    public $itemList;
    public $accountingBookDetailList;
    public $partnersList;
    public $applyList;
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
        "customForm" => "RecordRef",
        "currency" => "RecordRef",
        "entity" => "RecordRef",
        "vatRegNum" => "string",
        "tranDate" => "dateTime",
        "tranId" => "string",
        "entityTaxRegNum" => "RecordRef",
        "createdFrom" => "RecordRef",
        "postingPeriod" => "RecordRef",
        "department" => "RecordRef",
        "class" => "RecordRef",
        "location" => "RecordRef",
        "subsidiary" => "RecordRef",
        "job" => "RecordRef",
        "salesRep" => "RecordRef",
        "partner" => "RecordRef",
        "contribPct" => "string",
        "otherRefNum" => "string",
        "memo" => "string",
        "excludeCommission" => "boolean",
        "leadSource" => "RecordRef",
        "balance" => "float",
        "account" => "RecordRef",
        "exchangeRate" => "float",
        "onCreditHold" => "string",
        "amountPaid" => "float",
        "salesEffectiveDate" => "dateTime",
        "totalCostEstimate" => "float",
        "estGrossProfit" => "float",
        "estGrossProfitPercent" => "float",
        "currencyName" => "string",
        "promoCode" => "RecordRef",
        "amountRemaining" => "float",
        "discountItem" => "RecordRef",
        "source" => "string",
        "discountRate" => "string",
        "isTaxable" => "boolean",
        "taxItem" => "RecordRef",
        "taxRate" => "float",
        "unapplied" => "float",
        "autoApply" => "boolean",
        "applied" => "float",
        "toBePrinted" => "boolean",
        "toBeEmailed" => "boolean",
        "email" => "string",
        "toBeFaxed" => "boolean",
        "fax" => "string",
        "messageSel" => "RecordRef",
        "message" => "string",
        "billingAddress" => "Address",
        "billAddressList" => "RecordRef",
        "shipMethod" => "RecordRef",
        "shippingCost" => "float",
        "shippingTax1Rate" => "float",
        "shippingTaxCode" => "RecordRef",
        "handlingTaxCode" => "RecordRef",
        "shippingTax2Rate" => "string",
        "handlingTax1Rate" => "float",
        "handlingTax2Rate" => "string",
        "handlingCost" => "float",
        "subTotal" => "float",
        "discountTotal" => "float",
        "revenueStatus" => "RevenueStatus",
        "recognizedRevenue" => "float",
        "deferredRevenue" => "float",
        "revRecOnRevCommitment" => "boolean",
        "taxTotal" => "float",
        "tax2Total" => "float",
        "altShippingCost" => "float",
        "altHandlingCost" => "float",
        "isMultiShipTo" => "boolean",
        "total" => "float",
        "salesGroup" => "RecordRef",
        "syncSalesTeams" => "boolean",
        "status" => "string",
        "giftCert" => "RecordRef",
        "giftCertTotal" => "float",
        "giftCertApplied" => "float",
        "giftCertAvailable" => "float",
        "tranIsVsoeBundle" => "boolean",
        "vsoeAutoCalc" => "boolean",
        "syncPartnerTeams" => "boolean",
        "salesTeamList" => "CreditMemoSalesTeamList",
        "itemList" => "CreditMemoItemList",
        "accountingBookDetailList" => "AccountingBookDetailList",
        "partnersList" => "CreditMemoPartnersList",
        "applyList" => "CreditMemoApplyList",
        "taxDetailsList" => "TaxDetailsList",
        "customFieldList" => "CustomFieldList",
        "internalId" => "string",
        "externalId" => "string",
    );
}
