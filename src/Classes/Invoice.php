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

class Invoice extends Record {
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
    public $customForm;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $nextApprover;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $entity;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $billingAccount;
    /**
     * @var boolean
     */
    public $recurringBill;
    /**
     * @var string
     */
    public $tranDate;
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
     * @var string
     */
    public $source;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $createdFrom;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $postingPeriod;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $opportunity;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $department;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $class;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $terms;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $location;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $subsidiary;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $currency;
    /**
     * @var string
     */
    public $dueDate;
    /**
     * @var string
     */
    public $discountDate;
    /**
     * @var float
     */
    public $discountAmount;
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
    public $leadSource;
    /**
     * @var string
     */
    public $startDate;
    /**
     * @var string
     */
    public $endDate;
    /**
     * @var string
     */
    public $otherRefNum;
    /**
     * @var string
     */
    public $memo;
    /**
     * @var string
     */
    public $salesEffectiveDate;
    /**
     * @var boolean
     */
    public $excludeCommission;
    /**
     * @var float
     */
    public $totalCostEstimate;
    /**
     * @var float
     */
    public $estGrossProfit;
    /**
     * @var float
     */
    public $estGrossProfitPercent;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $revRecSchedule;
    /**
     * @var string
     */
    public $revRecStartDate;
    /**
     * @var string
     */
    public $revRecEndDate;
    /**
     * @var float
     */
    public $amountPaid;
    /**
     * @var float
     */
    public $amountRemaining;
    /**
     * @var float
     */
    public $balance;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $account;
    /**
     * @var string
     */
    public $onCreditHold;
    /**
     * @var float
     */
    public $exchangeRate;
    /**
     * @var string
     */
    public $currencyName;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $promoCode;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $discountItem;
    /**
     * @var string
     */
    public $discountRate;
    /**
     * @var boolean
     */
    public $isTaxable;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $taxItem;
    /**
     * @var float
     */
    public $taxRate;
    /**
     * @var boolean
     */
    public $toBePrinted;
    /**
     * @var boolean
     */
    public $toBeEmailed;
    /**
     * @var boolean
     */
    public $toBeFaxed;
    /**
     * @var string
     */
    public $fax;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $messageSel;
    /**
     * @var string
     */
    public $message;
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
     * @var string
     */
    public $fob;
    /**
     * @var string
     */
    public $shipDate;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $shipMethod;
    /**
     * @var float
     */
    public $shippingCost;
    /**
     * @var float
     */
    public $shippingTax1Rate;
    /**
     * @var string
     */
    public $shippingTax2Rate;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $shippingTaxCode;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $handlingTaxCode;
    /**
     * @var float
     */
    public $handlingTax1Rate;
    /**
     * @var float
     */
    public $handlingCost;
    /**
     * @var string
     */
    public $handlingTax2Rate;
    /**
     * @var string
     */
    public $trackingNumbers;
    /**
     * @var string
     */
    public $linkedTrackingNumbers;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $salesGroup;
    /**
     * @var float
     */
    public $subTotal;
    /**
     * @var boolean
     */
    public $canHaveStackable;
    /**
     * @var \NetSuite\Classes\RevenueStatus
     */
    public $revenueStatus;
    /**
     * @var float
     */
    public $recognizedRevenue;
    /**
     * @var float
     */
    public $deferredRevenue;
    /**
     * @var boolean
     */
    public $revRecOnRevCommitment;
    /**
     * @var boolean
     */
    public $syncSalesTeams;
    /**
     * @var float
     */
    public $discountTotal;
    /**
     * @var float
     */
    public $taxTotal;
    /**
     * @var float
     */
    public $altShippingCost;
    /**
     * @var float
     */
    public $altHandlingCost;
    /**
     * @var float
     */
    public $total;
    /**
     * @var string
     */
    public $status;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $job;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $billingSchedule;
    /**
     * @var string
     */
    public $email;
    /**
     * @var float
     */
    public $tax2Total;
    /**
     * @var string
     */
    public $vatRegNum;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $expCostDiscount;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $itemCostDiscount;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $timeDiscount;
    /**
     * @var string
     */
    public $expCostDiscRate;
    /**
     * @var string
     */
    public $itemCostDiscRate;
    /**
     * @var string
     */
    public $timeDiscRate;
    /**
     * @var float
     */
    public $expCostDiscAmount;
    /**
     * @var float
     */
    public $expCostTaxRate1;
    /**
     * @var float
     */
    public $expCostTaxRate2;
    /**
     * @var float
     */
    public $itemCostDiscAmount;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $expCostTaxCode;
    /**
     * @var float
     */
    public $expCostDiscTax1Amt;
    /**
     * @var float
     */
    public $itemCostTaxRate1;
    /**
     * @var float
     */
    public $timeDiscAmount;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $itemCostTaxCode;
    /**
     * @var boolean
     */
    public $expCostDiscTaxable;
    /**
     * @var boolean
     */
    public $itemCostDiscTaxable;
    /**
     * @var float
     */
    public $itemCostTaxRate2;
    /**
     * @var float
     */
    public $itemCostDiscTax1Amt;
    /**
     * @var boolean
     */
    public $itemCostDiscPrint;
    /**
     * @var boolean
     */
    public $timeDiscTaxable;
    /**
     * @var float
     */
    public $timeTaxRate1;
    /**
     * @var boolean
     */
    public $expCostDiscPrint;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $timeTaxCode;
    /**
     * @var boolean
     */
    public $timeDiscPrint;
    /**
     * @var float
     */
    public $giftCertApplied;
    /**
     * @var float
     */
    public $timeDiscTax1Amt;
    /**
     * @var boolean
     */
    public $tranIsVsoeBundle;
    /**
     * @var float
     */
    public $timeTaxRate2;
    /**
     * @var boolean
     */
    public $vsoeAutoCalc;
    /**
     * @var boolean
     */
    public $syncPartnerTeams;
    /**
     * @var \NetSuite\Classes\InvoiceSalesTeamList
     */
    public $salesTeamList;
    /**
     * @var \NetSuite\Classes\InvoicePartnersList
     */
    public $partnersList;
    /**
     * @var \NetSuite\Classes\InvoiceItemList
     */
    public $itemList;
    /**
     * @var \NetSuite\Classes\InvoiceItemCostList
     */
    public $itemCostList;
    /**
     * @var \NetSuite\Classes\GiftCertRedemptionList
     */
    public $giftCertRedemptionList;
    /**
     * @var \NetSuite\Classes\PromotionsList
     */
    public $promotionsList;
    /**
     * @var \NetSuite\Classes\InvoiceExpCostList
     */
    public $expCostList;
    /**
     * @var \NetSuite\Classes\InvoiceTimeList
     */
    public $timeList;
    /**
     * @var \NetSuite\Classes\InvoiceShipGroupList
     */
    public $shipGroupList;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $approvalStatus;
    /**
     * @var \NetSuite\Classes\AccountingBookDetailList
     */
    public $accountingBookDetailList;
    /**
     * @var \NetSuite\Classes\TaxDetailsList
     */
    public $taxDetailsList;
    /**
     * @var \NetSuite\Classes\InstallmentList
     */
    public $installmentList;
    /**
     * @var boolean
     */
    public $overrideInstallments;
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
        "createdDate" => "dateTime",
        "lastModifiedDate" => "dateTime",
        "nexus" => "RecordRef",
        "subsidiaryTaxRegNum" => "RecordRef",
        "taxRegOverride" => "boolean",
        "taxDetailsOverride" => "boolean",
        "customForm" => "RecordRef",
        "nextApprover" => "RecordRef",
        "entity" => "RecordRef",
        "billingAccount" => "RecordRef",
        "recurringBill" => "boolean",
        "tranDate" => "dateTime",
        "tranId" => "string",
        "entityTaxRegNum" => "RecordRef",
        "taxPointDate" => "dateTime",
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
        "contribPct" => "string",
        "partner" => "RecordRef",
        "leadSource" => "RecordRef",
        "startDate" => "dateTime",
        "endDate" => "dateTime",
        "otherRefNum" => "string",
        "memo" => "string",
        "salesEffectiveDate" => "dateTime",
        "excludeCommission" => "boolean",
        "totalCostEstimate" => "float",
        "estGrossProfit" => "float",
        "estGrossProfitPercent" => "float",
        "revRecSchedule" => "RecordRef",
        "revRecStartDate" => "dateTime",
        "revRecEndDate" => "dateTime",
        "amountPaid" => "float",
        "amountRemaining" => "float",
        "balance" => "float",
        "account" => "RecordRef",
        "onCreditHold" => "string",
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
        "trackingNumbers" => "string",
        "linkedTrackingNumbers" => "string",
        "salesGroup" => "RecordRef",
        "subTotal" => "float",
        "canHaveStackable" => "boolean",
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
        "billingSchedule" => "RecordRef",
        "email" => "string",
        "tax2Total" => "float",
        "vatRegNum" => "string",
        "expCostDiscount" => "RecordRef",
        "itemCostDiscount" => "RecordRef",
        "timeDiscount" => "RecordRef",
        "expCostDiscRate" => "string",
        "itemCostDiscRate" => "string",
        "timeDiscRate" => "string",
        "expCostDiscAmount" => "float",
        "expCostTaxRate1" => "float",
        "expCostTaxRate2" => "float",
        "itemCostDiscAmount" => "float",
        "expCostTaxCode" => "RecordRef",
        "expCostDiscTax1Amt" => "float",
        "itemCostTaxRate1" => "float",
        "timeDiscAmount" => "float",
        "itemCostTaxCode" => "RecordRef",
        "expCostDiscTaxable" => "boolean",
        "itemCostDiscTaxable" => "boolean",
        "itemCostTaxRate2" => "float",
        "itemCostDiscTax1Amt" => "float",
        "itemCostDiscPrint" => "boolean",
        "timeDiscTaxable" => "boolean",
        "timeTaxRate1" => "float",
        "expCostDiscPrint" => "boolean",
        "timeTaxCode" => "RecordRef",
        "timeDiscPrint" => "boolean",
        "giftCertApplied" => "float",
        "timeDiscTax1Amt" => "float",
        "tranIsVsoeBundle" => "boolean",
        "timeTaxRate2" => "float",
        "vsoeAutoCalc" => "boolean",
        "syncPartnerTeams" => "boolean",
        "salesTeamList" => "InvoiceSalesTeamList",
        "partnersList" => "InvoicePartnersList",
        "itemList" => "InvoiceItemList",
        "itemCostList" => "InvoiceItemCostList",
        "giftCertRedemptionList" => "GiftCertRedemptionList",
        "promotionsList" => "PromotionsList",
        "expCostList" => "InvoiceExpCostList",
        "timeList" => "InvoiceTimeList",
        "shipGroupList" => "InvoiceShipGroupList",
        "approvalStatus" => "RecordRef",
        "accountingBookDetailList" => "AccountingBookDetailList",
        "taxDetailsList" => "TaxDetailsList",
        "installmentList" => "InstallmentList",
        "overrideInstallments" => "boolean",
        "customFieldList" => "CustomFieldList",
        "internalId" => "string",
        "externalId" => "string",
    );
}
