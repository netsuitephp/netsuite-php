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

class CashSale extends Record {
    public $createdDate;
    public $lastModifiedDate;
    public $nexus;
    public $subsidiaryTaxRegNum;
    public $taxRegOverride;
    public $taxDetailsOverride;
    public $customForm;
    public $entity;
    public $billingAccount;
    public $recurringBill;
    public $tranDate;
    public $tranId;
    public $entityTaxRegNum;
    public $source;
    public $postingPeriod;
    public $createdFrom;
    public $opportunity;
    public $department;
    public $class;
    public $location;
    public $subsidiary;
    public $salesRep;
    public $contribPct;
    public $partner;
    public $leadSource;
    public $startDate;
    public $endDate;
    public $otherRefNum;
    public $memo;
    public $salesEffectiveDate;
    public $excludeCommission;
    public $revRecSchedule;
    public $undepFunds;
    public $canHaveStackable;
    public $currency;
    public $account;
    public $revRecStartDate;
    public $revRecEndDate;
    public $totalCostEstimate;
    public $estGrossProfit;
    public $estGrossProfitPercent;
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
    public $shippingTax1Rate;
    public $shippingTax2Rate;
    public $shippingTaxCode;
    public $handlingTaxCode;
    public $handlingTax1Rate;
    public $handlingCost;
    public $handlingTax2Rate;
    public $linkedTrackingNumbers;
    public $trackingNumbers;
    public $salesGroup;
    public $revenueStatus;
    public $recognizedRevenue;
    public $deferredRevenue;
    public $revRecOnRevCommitment;
    public $syncSalesTeams;
    public $paymentMethod;
    public $payPalStatus;
    public $creditCard;
    public $ccNumber;
    public $ccExpireDate;
    public $ccName;
    public $ccStreet;
    public $ccZipCode;
    public $creditCardProcessor;
    public $ccApproved;
    public $authCode;
    public $ccAvsStreetMatch;
    public $ccAvsZipMatch;
    public $isRecurringPayment;
    public $payPalTranId;
    public $subTotal;
    public $ccIsPurchaseCardBin;
    public $ignoreAvs;
    public $ccProcessAsPurchaseCard;
    public $itemCostDiscount;
    public $itemCostDiscRate;
    public $itemCostDiscAmount;
    public $itemCostTaxRate1;
    public $itemCostTaxRate2;
    public $itemCostDiscTaxable;
    public $itemCostTaxCode;
    public $itemCostDiscTax1Amt;
    public $itemCostDiscPrint;
    public $expCostDiscount;
    public $expCostDiscRate;
    public $expCostDiscAmount;
    public $expCostDiscTaxable;
    public $expCostDiscprint;
    public $expCostTaxRate1;
    public $timeDiscount;
    public $expCostTaxCode;
    public $timeDiscRate;
    public $expCostTaxRate2;
    public $expCostDiscTax1Amt;
    public $timeDiscAmount;
    public $timeDiscTaxable;
    public $timeDiscPrint;
    public $discountTotal;
    public $taxTotal;
    public $timeTaxRate1;
    public $altShippingCost;
    public $timeTaxCode;
    public $altHandlingCost;
    public $total;
    public $timeDiscTax1Amt;
    public $ccSecurityCode;
    public $timeTaxRate2;
    public $ccSecurityCodeMatch;
    public $chargeIt;
    public $debitCardIssueNo;
    public $threeDStatusCode;
    public $pnRefNum;
    public $paypalAuthId;
    public $status;
    public $paypalProcess;
    public $job;
    public $billingSchedule;
    public $email;
    public $tax2Total;
    public $validFrom;
    public $vatRegNum;
    public $giftCertApplied;
    public $tranIsVsoeBundle;
    public $vsoeAutoCalc;
    public $syncPartnerTeams;
    public $salesTeamList;
    public $partnersList;
    public $itemList;
    public $accountingBookDetailList;
    public $itemCostList;
    public $giftCertRedemptionList;
    public $promotionsList;
    public $expCostList;
    public $timeList;
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
        "customForm" => "RecordRef",
        "entity" => "RecordRef",
        "billingAccount" => "RecordRef",
        "recurringBill" => "boolean",
        "tranDate" => "dateTime",
        "tranId" => "string",
        "entityTaxRegNum" => "RecordRef",
        "source" => "string",
        "postingPeriod" => "RecordRef",
        "createdFrom" => "RecordRef",
        "opportunity" => "RecordRef",
        "department" => "RecordRef",
        "class" => "RecordRef",
        "location" => "RecordRef",
        "subsidiary" => "RecordRef",
        "salesRep" => "RecordRef",
        "contribPct" => "string",
        "partner" => "RecordRef",
        "leadSource" => "RecordRef",
        "startDate" => "dateTime",
        "endDate" => "dateTime",
        "otherRefNum" => "string",
        "memo" => "string",
        "salesEffectiveDate" => "dateTime",
        "excludeCommission" => "boolean",
        "revRecSchedule" => "RecordRef",
        "undepFunds" => "boolean",
        "canHaveStackable" => "boolean",
        "currency" => "RecordRef",
        "account" => "RecordRef",
        "revRecStartDate" => "dateTime",
        "revRecEndDate" => "dateTime",
        "totalCostEstimate" => "float",
        "estGrossProfit" => "float",
        "estGrossProfitPercent" => "float",
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
        "shippingTax1Rate" => "float",
        "shippingTax2Rate" => "string",
        "shippingTaxCode" => "RecordRef",
        "handlingTaxCode" => "RecordRef",
        "handlingTax1Rate" => "float",
        "handlingCost" => "float",
        "handlingTax2Rate" => "string",
        "linkedTrackingNumbers" => "string",
        "trackingNumbers" => "string",
        "salesGroup" => "RecordRef",
        "revenueStatus" => "RevenueStatus",
        "recognizedRevenue" => "float",
        "deferredRevenue" => "float",
        "revRecOnRevCommitment" => "boolean",
        "syncSalesTeams" => "boolean",
        "paymentMethod" => "RecordRef",
        "payPalStatus" => "string",
        "creditCard" => "RecordRef",
        "ccNumber" => "string",
        "ccExpireDate" => "dateTime",
        "ccName" => "string",
        "ccStreet" => "string",
        "ccZipCode" => "string",
        "creditCardProcessor" => "RecordRef",
        "ccApproved" => "boolean",
        "authCode" => "string",
        "ccAvsStreetMatch" => "AvsMatchCode",
        "ccAvsZipMatch" => "AvsMatchCode",
        "isRecurringPayment" => "boolean",
        "payPalTranId" => "string",
        "subTotal" => "float",
        "ccIsPurchaseCardBin" => "boolean",
        "ignoreAvs" => "boolean",
        "ccProcessAsPurchaseCard" => "boolean",
        "itemCostDiscount" => "RecordRef",
        "itemCostDiscRate" => "string",
        "itemCostDiscAmount" => "float",
        "itemCostTaxRate1" => "float",
        "itemCostTaxRate2" => "float",
        "itemCostDiscTaxable" => "boolean",
        "itemCostTaxCode" => "RecordRef",
        "itemCostDiscTax1Amt" => "float",
        "itemCostDiscPrint" => "boolean",
        "expCostDiscount" => "RecordRef",
        "expCostDiscRate" => "string",
        "expCostDiscAmount" => "float",
        "expCostDiscTaxable" => "boolean",
        "expCostDiscprint" => "boolean",
        "expCostTaxRate1" => "float",
        "timeDiscount" => "RecordRef",
        "expCostTaxCode" => "RecordRef",
        "timeDiscRate" => "string",
        "expCostTaxRate2" => "float",
        "expCostDiscTax1Amt" => "float",
        "timeDiscAmount" => "float",
        "timeDiscTaxable" => "boolean",
        "timeDiscPrint" => "boolean",
        "discountTotal" => "float",
        "taxTotal" => "float",
        "timeTaxRate1" => "float",
        "altShippingCost" => "float",
        "timeTaxCode" => "RecordRef",
        "altHandlingCost" => "float",
        "total" => "float",
        "timeDiscTax1Amt" => "float",
        "ccSecurityCode" => "string",
        "timeTaxRate2" => "float",
        "ccSecurityCodeMatch" => "AvsMatchCode",
        "chargeIt" => "boolean",
        "debitCardIssueNo" => "string",
        "threeDStatusCode" => "string",
        "pnRefNum" => "string",
        "paypalAuthId" => "string",
        "status" => "string",
        "paypalProcess" => "boolean",
        "job" => "RecordRef",
        "billingSchedule" => "RecordRef",
        "email" => "string",
        "tax2Total" => "float",
        "validFrom" => "dateTime",
        "vatRegNum" => "string",
        "giftCertApplied" => "float",
        "tranIsVsoeBundle" => "boolean",
        "vsoeAutoCalc" => "boolean",
        "syncPartnerTeams" => "boolean",
        "salesTeamList" => "CashSaleSalesTeamList",
        "partnersList" => "CashSalePartnersList",
        "itemList" => "CashSaleItemList",
        "accountingBookDetailList" => "AccountingBookDetailList",
        "itemCostList" => "CashSaleItemCostList",
        "giftCertRedemptionList" => "GiftCertRedemptionList",
        "promotionsList" => "PromotionsList",
        "expCostList" => "CashSaleExpCostList",
        "timeList" => "CashSaleTimeList",
        "shipGroupList" => "CashSaleShipGroupList",
        "taxDetailsList" => "TaxDetailsList",
        "customFieldList" => "CustomFieldList",
        "internalId" => "string",
        "externalId" => "string",
    );
}
