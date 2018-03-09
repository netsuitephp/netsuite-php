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

class CashRefund extends Record {
    public $createdDate;
    public $lastModifiedDate;
    public $nexus;
    public $subsidiaryTaxRegNum;
    public $taxRegOverride;
    public $taxDetailsOverride;
    public $customForm;
    public $entity;
    public $vatRegNum;
    public $tranDate;
    public $tranId;
    public $entityTaxRegNum;
    public $source;
    public $createdFrom;
    public $postingPeriod;
    public $department;
    public $class;
    public $location;
    public $leadSource;
    public $subsidiary;
    public $salesRep;
    public $partner;
    public $contribPct;
    public $otherRefNum;
    public $memo;
    public $salesEffectiveDate;
    public $refundCheck;
    public $toPrint2;
    public $excludeCommission;
    public $totalCostEstimate;
    public $estGrossProfit;
    public $estGrossProfitPercent;
    public $account;
    public $currency;
    public $exchangeRate;
    public $currencyName;
    public $promoCode;
    public $discountItem;
    public $discountRate;
    public $isTaxable;
    public $taxItem;
    public $taxRate;
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
    public $shippingTaxCode;
    public $shippingTax1Rate;
    public $shippingTax2Rate;
    public $shippingCost;
    public $handlingTaxCode;
    public $handlingTax1Rate;
    public $handlingTax2Rate;
    public $handlingCost;
    public $salesGroup;
    public $syncSalesTeams;
    public $paymentMethod;
    public $revenueStatus;
    public $recognizedRevenue;
    public $deferredRevenue;
    public $revRecOnRevCommitment;
    public $creditCard;
    public $chargeIt;
    public $ccNumber;
    public $ccExpireDate;
    public $ccName;
    public $ccStreet;
    public $ccZipCode;
    public $ccApproved;
    public $creditCardProcessor;
    public $debitCardIssueNo;
    public $pnRefNum;
    public $validFrom;
    public $payPalTranId;
    public $subTotal;
    public $ccIsPurchaseCardBin;
    public $discountTotal;
    public $ccProcessAsPurchaseCard;
    public $taxTotal;
    public $tax2Total;
    public $altShippingCost;
    public $payPalStatus;
    public $altHandlingCost;
    public $total;
    public $payPalAuthId;
    public $status;
    public $job;
    public $giftCert;
    public $giftCertTotal;
    public $giftCertApplied;
    public $giftCertAvailable;
    public $tranIsVsoeBundle;
    public $payPalProcess;
    public $vsoeAutoCalc;
    public $syncPartnerTeams;
    public $itemList;
    public $accountingBookDetailList;
    public $salesTeamList;
    public $partnersList;
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
        "entity" => "RecordRef",
        "vatRegNum" => "string",
        "tranDate" => "dateTime",
        "tranId" => "string",
        "entityTaxRegNum" => "RecordRef",
        "source" => "string",
        "createdFrom" => "RecordRef",
        "postingPeriod" => "RecordRef",
        "department" => "RecordRef",
        "class" => "RecordRef",
        "location" => "RecordRef",
        "leadSource" => "RecordRef",
        "subsidiary" => "RecordRef",
        "salesRep" => "RecordRef",
        "partner" => "RecordRef",
        "contribPct" => "string",
        "otherRefNum" => "string",
        "memo" => "string",
        "salesEffectiveDate" => "dateTime",
        "refundCheck" => "boolean",
        "toPrint2" => "boolean",
        "excludeCommission" => "boolean",
        "totalCostEstimate" => "float",
        "estGrossProfit" => "float",
        "estGrossProfitPercent" => "float",
        "account" => "RecordRef",
        "currency" => "RecordRef",
        "exchangeRate" => "float",
        "currencyName" => "string",
        "promoCode" => "RecordRef",
        "discountItem" => "RecordRef",
        "discountRate" => "string",
        "isTaxable" => "boolean",
        "taxItem" => "RecordRef",
        "taxRate" => "float",
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
        "shippingTaxCode" => "RecordRef",
        "shippingTax1Rate" => "float",
        "shippingTax2Rate" => "string",
        "shippingCost" => "float",
        "handlingTaxCode" => "RecordRef",
        "handlingTax1Rate" => "float",
        "handlingTax2Rate" => "string",
        "handlingCost" => "float",
        "salesGroup" => "RecordRef",
        "syncSalesTeams" => "boolean",
        "paymentMethod" => "RecordRef",
        "revenueStatus" => "RevenueStatus",
        "recognizedRevenue" => "float",
        "deferredRevenue" => "float",
        "revRecOnRevCommitment" => "boolean",
        "creditCard" => "RecordRef",
        "chargeIt" => "boolean",
        "ccNumber" => "string",
        "ccExpireDate" => "dateTime",
        "ccName" => "string",
        "ccStreet" => "string",
        "ccZipCode" => "string",
        "ccApproved" => "boolean",
        "creditCardProcessor" => "RecordRef",
        "debitCardIssueNo" => "string",
        "pnRefNum" => "string",
        "validFrom" => "dateTime",
        "payPalTranId" => "string",
        "subTotal" => "float",
        "ccIsPurchaseCardBin" => "boolean",
        "discountTotal" => "float",
        "ccProcessAsPurchaseCard" => "boolean",
        "taxTotal" => "float",
        "tax2Total" => "float",
        "altShippingCost" => "float",
        "payPalStatus" => "string",
        "altHandlingCost" => "float",
        "total" => "float",
        "payPalAuthId" => "string",
        "status" => "string",
        "job" => "RecordRef",
        "giftCert" => "RecordRef",
        "giftCertTotal" => "float",
        "giftCertApplied" => "float",
        "giftCertAvailable" => "float",
        "tranIsVsoeBundle" => "boolean",
        "payPalProcess" => "boolean",
        "vsoeAutoCalc" => "boolean",
        "syncPartnerTeams" => "boolean",
        "itemList" => "CashRefundItemList",
        "accountingBookDetailList" => "AccountingBookDetailList",
        "salesTeamList" => "CashRefundSalesTeamList",
        "partnersList" => "CashRefundPartnersList",
        "taxDetailsList" => "TaxDetailsList",
        "customFieldList" => "CustomFieldList",
        "internalId" => "string",
        "externalId" => "string",
    );
}
