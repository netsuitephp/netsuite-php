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

class CustomSale extends Record {
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
    public $tranType;
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
     * @var \NetSuite\Classes\RecordRef
     */
    public $tranStatus;
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
    public $isMultiShipTo;
    /**
     * @var boolean
     */
    public $isTaxable;
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
    public $handlingCost;
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
     * @var string
     */
    public $email;
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
     * @var \NetSuite\Classes\CustomSaleShipGroupList
     */
    public $shipGroupList;
    /**
     * @var boolean
     */
    public $overrideInstallments;
    /**
     * @var \NetSuite\Classes\InstallmentList
     */
    public $installmentList;
    /**
     * @var \NetSuite\Classes\CustomSalePartnersList
     */
    public $partnersList;
    /**
     * @var \NetSuite\Classes\PromotionsList
     */
    public $promotionsList;
    /**
     * @var \NetSuite\Classes\CustomSaleItemList
     */
    public $itemList;
    /**
     * @var \NetSuite\Classes\GiftCertRedemptionList
     */
    public $giftCertRedemptionList;
    /**
     * @var \NetSuite\Classes\AccountingBookDetailList
     */
    public $accountingBookDetailList;
    /**
     * @var \NetSuite\Classes\CustomSaleSalesTeamList
     */
    public $salesTeamList;
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
        "isMultiShipTo" => "boolean",
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
        "shipGroupList" => "CustomSaleShipGroupList",
        "overrideInstallments" => "boolean",
        "installmentList" => "InstallmentList",
        "partnersList" => "CustomSalePartnersList",
        "promotionsList" => "PromotionsList",
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
