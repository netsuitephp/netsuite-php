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

class CashSale extends Record {
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
    public $postingPeriod;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $createdFrom;
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
    public $location;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $subsidiary;
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
     * @var \NetSuite\Classes\RecordRef
     */
    public $revRecSchedule;
    /**
     * @var boolean
     */
    public $undepFunds;
    /**
     * @var boolean
     */
    public $canHaveStackable;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $currency;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $account;
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
     * @var \NetSuite\Classes\RecordRef
     */
    public $paymentOption;
    /**
     * @var string
     */
    public $inputAuthCode;
    /**
     * @var string
     */
    public $inputReferenceCode;
    /**
     * @var string
     */
    public $checkNumber;
    /**
     * @var string
     */
    public $paymentCardCsc;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $paymentProcessingProfile;
    /**
     * @var \NetSuite\Classes\CashSaleHandlingMode
     */
    public $handlingMode;
    /**
     * @var string
     */
    public $outputAuthCode;
    /**
     * @var string
     */
    public $outputReferenceCode;
    /**
     * @var \NetSuite\Classes\CashSalePaymentOperation
     */
    public $paymentOperation;
    /**
     * @var string
     */
    public $dynamicDescriptor;
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
    public $linkedTrackingNumbers;
    /**
     * @var string
     */
    public $trackingNumbers;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $salesGroup;
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
     * @var \NetSuite\Classes\RecordRef
     */
    public $paymentMethod;
    /**
     * @var string
     */
    public $payPalStatus;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $creditCard;
    /**
     * @var string
     */
    public $ccNumber;
    /**
     * @var string
     */
    public $ccExpireDate;
    /**
     * @var string
     */
    public $ccName;
    /**
     * @var string
     */
    public $ccStreet;
    /**
     * @var string
     */
    public $ccZipCode;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $creditCardProcessor;
    /**
     * @var boolean
     */
    public $ccApproved;
    /**
     * @var string
     */
    public $authCode;
    /**
     * @var \NetSuite\Classes\AvsMatchCode
     */
    public $ccAvsStreetMatch;
    /**
     * @var \NetSuite\Classes\AvsMatchCode
     */
    public $ccAvsZipMatch;
    /**
     * @var boolean
     */
    public $isRecurringPayment;
    /**
     * @var string
     */
    public $payPalTranId;
    /**
     * @var float
     */
    public $subTotal;
    /**
     * @var boolean
     */
    public $ccIsPurchaseCardBin;
    /**
     * @var boolean
     */
    public $ignoreAvs;
    /**
     * @var boolean
     */
    public $ccProcessAsPurchaseCard;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $itemCostDiscount;
    /**
     * @var string
     */
    public $itemCostDiscRate;
    /**
     * @var float
     */
    public $itemCostDiscAmount;
    /**
     * @var float
     */
    public $itemCostTaxRate1;
    /**
     * @var float
     */
    public $itemCostTaxRate2;
    /**
     * @var boolean
     */
    public $itemCostDiscTaxable;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $itemCostTaxCode;
    /**
     * @var float
     */
    public $itemCostDiscTax1Amt;
    /**
     * @var boolean
     */
    public $itemCostDiscPrint;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $expCostDiscount;
    /**
     * @var string
     */
    public $expCostDiscRate;
    /**
     * @var float
     */
    public $expCostDiscAmount;
    /**
     * @var boolean
     */
    public $expCostDiscTaxable;
    /**
     * @var boolean
     */
    public $expCostDiscprint;
    /**
     * @var float
     */
    public $expCostTaxRate1;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $timeDiscount;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $expCostTaxCode;
    /**
     * @var string
     */
    public $timeDiscRate;
    /**
     * @var float
     */
    public $expCostTaxRate2;
    /**
     * @var float
     */
    public $expCostDiscTax1Amt;
    /**
     * @var float
     */
    public $timeDiscAmount;
    /**
     * @var boolean
     */
    public $timeDiscTaxable;
    /**
     * @var boolean
     */
    public $timeDiscPrint;
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
    public $timeTaxRate1;
    /**
     * @var float
     */
    public $altShippingCost;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $timeTaxCode;
    /**
     * @var float
     */
    public $altHandlingCost;
    /**
     * @var float
     */
    public $total;
    /**
     * @var float
     */
    public $timeDiscTax1Amt;
    /**
     * @var string
     */
    public $ccSecurityCode;
    /**
     * @var float
     */
    public $timeTaxRate2;
    /**
     * @var \NetSuite\Classes\AvsMatchCode
     */
    public $ccSecurityCodeMatch;
    /**
     * @var boolean
     */
    public $chargeIt;
    /**
     * @var string
     */
    public $debitCardIssueNo;
    /**
     * @var string
     */
    public $threeDStatusCode;
    /**
     * @var string
     */
    public $pnRefNum;
    /**
     * @var string
     */
    public $paypalAuthId;
    /**
     * @var string
     */
    public $status;
    /**
     * @var boolean
     */
    public $paypalProcess;
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
    public $validFrom;
    /**
     * @var string
     */
    public $vatRegNum;
    /**
     * @var float
     */
    public $giftCertApplied;
    /**
     * @var boolean
     */
    public $tranIsVsoeBundle;
    /**
     * @var boolean
     */
    public $vsoeAutoCalc;
    /**
     * @var boolean
     */
    public $syncPartnerTeams;
    /**
     * @var \NetSuite\Classes\CashSaleSalesTeamList
     */
    public $salesTeamList;
    /**
     * @var \NetSuite\Classes\CashSalePartnersList
     */
    public $partnersList;
    /**
     * @var \NetSuite\Classes\CashSaleItemList
     */
    public $itemList;
    /**
     * @var \NetSuite\Classes\AccountingBookDetailList
     */
    public $accountingBookDetailList;
    /**
     * @var \NetSuite\Classes\CashSaleItemCostList
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
     * @var \NetSuite\Classes\CashSaleExpCostList
     */
    public $expCostList;
    /**
     * @var \NetSuite\Classes\CashSaleTimeList
     */
    public $timeList;
    /**
     * @var \NetSuite\Classes\CashSaleShipGroupList
     */
    public $shipGroupList;
    /**
     * @var \NetSuite\Classes\TaxDetailsList
     */
    public $taxDetailsList;
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
        "entity" => "RecordRef",
        "billingAccount" => "RecordRef",
        "recurringBill" => "boolean",
        "tranDate" => "dateTime",
        "tranId" => "string",
        "entityTaxRegNum" => "RecordRef",
        "taxPointDate" => "dateTime",
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
        "paymentOption" => "RecordRef",
        "inputAuthCode" => "string",
        "inputReferenceCode" => "string",
        "checkNumber" => "string",
        "paymentCardCsc" => "string",
        "paymentProcessingProfile" => "RecordRef",
        "handlingMode" => "CashSaleHandlingMode",
        "outputAuthCode" => "string",
        "outputReferenceCode" => "string",
        "paymentOperation" => "CashSalePaymentOperation",
        "dynamicDescriptor" => "string",
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
