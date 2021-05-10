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

class CashRefund extends Record {
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
     * @var string
     */
    public $vatRegNum;
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
    public $leadSource;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $subsidiary;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $salesRep;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $partner;
    /**
     * @var string
     */
    public $contribPct;
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
    public $refundCheck;
    /**
     * @var boolean
     */
    public $toPrint2;
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
    public $account;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $currency;
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
     * @var string
     */
    public $email;
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
     * @var \NetSuite\Classes\CashRefundHandlingMode
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
     * @var \NetSuite\Classes\CashRefundPaymentOperation
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
     * @var \NetSuite\Classes\RecordRef
     */
    public $shipMethod;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $shippingTaxCode;
    /**
     * @var float
     */
    public $shippingTax1Rate;
    /**
     * @var string
     */
    public $shippingTax2Rate;
    /**
     * @var float
     */
    public $shippingCost;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $handlingTaxCode;
    /**
     * @var float
     */
    public $handlingTax1Rate;
    /**
     * @var string
     */
    public $handlingTax2Rate;
    /**
     * @var float
     */
    public $handlingCost;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $salesGroup;
    /**
     * @var boolean
     */
    public $syncSalesTeams;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $paymentMethod;
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
     * @var \NetSuite\Classes\RecordRef
     */
    public $creditCard;
    /**
     * @var boolean
     */
    public $chargeIt;
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
     * @var boolean
     */
    public $ccApproved;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $creditCardProcessor;
    /**
     * @var string
     */
    public $debitCardIssueNo;
    /**
     * @var string
     */
    public $pnRefNum;
    /**
     * @var string
     */
    public $validFrom;
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
     * @var float
     */
    public $discountTotal;
    /**
     * @var boolean
     */
    public $ccProcessAsPurchaseCard;
    /**
     * @var float
     */
    public $taxTotal;
    /**
     * @var float
     */
    public $tax2Total;
    /**
     * @var float
     */
    public $altShippingCost;
    /**
     * @var string
     */
    public $payPalStatus;
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
    public $payPalAuthId;
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
    public $giftCert;
    /**
     * @var float
     */
    public $giftCertTotal;
    /**
     * @var float
     */
    public $giftCertApplied;
    /**
     * @var float
     */
    public $giftCertAvailable;
    /**
     * @var boolean
     */
    public $tranIsVsoeBundle;
    /**
     * @var boolean
     */
    public $payPalProcess;
    /**
     * @var boolean
     */
    public $vsoeAutoCalc;
    /**
     * @var boolean
     */
    public $syncPartnerTeams;
    /**
     * @var \NetSuite\Classes\CashRefundItemList
     */
    public $itemList;
    /**
     * @var \NetSuite\Classes\AccountingBookDetailList
     */
    public $accountingBookDetailList;
    /**
     * @var \NetSuite\Classes\CashRefundSalesTeamList
     */
    public $salesTeamList;
    /**
     * @var \NetSuite\Classes\CashRefundPartnersList
     */
    public $partnersList;
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
        "vatRegNum" => "string",
        "tranDate" => "dateTime",
        "tranId" => "string",
        "entityTaxRegNum" => "RecordRef",
        "taxPointDate" => "dateTime",
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
        "paymentOption" => "RecordRef",
        "inputAuthCode" => "string",
        "inputReferenceCode" => "string",
        "checkNumber" => "string",
        "paymentCardCsc" => "string",
        "paymentProcessingProfile" => "RecordRef",
        "handlingMode" => "CashRefundHandlingMode",
        "outputAuthCode" => "string",
        "outputReferenceCode" => "string",
        "paymentOperation" => "CashRefundPaymentOperation",
        "dynamicDescriptor" => "string",
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
