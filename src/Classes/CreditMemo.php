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

class CreditMemo extends Record {
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
    public $currency;
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
    public $subsidiary;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $job;
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
     * @var boolean
     */
    public $excludeCommission;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $leadSource;
    /**
     * @var float
     */
    public $balance;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $account;
    /**
     * @var float
     */
    public $exchangeRate;
    /**
     * @var string
     */
    public $onCreditHold;
    /**
     * @var float
     */
    public $amountPaid;
    /**
     * @var string
     */
    public $salesEffectiveDate;
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
     * @var string
     */
    public $currencyName;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $promoCode;
    /**
     * @var float
     */
    public $amountRemaining;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $discountItem;
    /**
     * @var string
     */
    public $source;
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
     * @var float
     */
    public $unapplied;
    /**
     * @var boolean
     */
    public $autoApply;
    /**
     * @var float
     */
    public $applied;
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
     * @var float
     */
    public $shippingCost;
    /**
     * @var float
     */
    public $shippingTax1Rate;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $shippingTaxCode;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $handlingTaxCode;
    /**
     * @var string
     */
    public $shippingTax2Rate;
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
     * @var float
     */
    public $subTotal;
    /**
     * @var float
     */
    public $discountTotal;
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
     * @var float
     */
    public $altHandlingCost;
    /**
     * @var boolean
     */
    public $isMultiShipTo;
    /**
     * @var float
     */
    public $total;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $salesGroup;
    /**
     * @var boolean
     */
    public $syncSalesTeams;
    /**
     * @var string
     */
    public $status;
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
    public $vsoeAutoCalc;
    /**
     * @var boolean
     */
    public $syncPartnerTeams;
    /**
     * @var \NetSuite\Classes\CreditMemoSalesTeamList
     */
    public $salesTeamList;
    /**
     * @var \NetSuite\Classes\CreditMemoItemList
     */
    public $itemList;
    /**
     * @var \NetSuite\Classes\AccountingBookDetailList
     */
    public $accountingBookDetailList;
    /**
     * @var \NetSuite\Classes\CreditMemoPartnersList
     */
    public $partnersList;
    /**
     * @var \NetSuite\Classes\CreditMemoApplyList
     */
    public $applyList;
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
        "currency" => "RecordRef",
        "entity" => "RecordRef",
        "vatRegNum" => "string",
        "tranDate" => "dateTime",
        "tranId" => "string",
        "entityTaxRegNum" => "RecordRef",
        "taxPointDate" => "dateTime",
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
