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

class ReturnAuthorization extends Record {
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
     * @var string
     */
    public $source;
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
    public $intercoTransaction;
    /**
     * @var \NetSuite\Classes\IntercoStatus
     */
    public $intercoStatus;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $job;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $partner;
    /**
     * @var string
     */
    public $otherRefNum;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $leadSource;
    /**
     * @var string
     */
    public $memo;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $drAccount;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $fxAccount;
    /**
     * @var string
     */
    public $salesEffectiveDate;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $createdFrom;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $revRecSchedule;
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
    public $revRecStartDate;
    /**
     * @var string
     */
    public $revRecEndDate;
    /**
     * @var boolean
     */
    public $excludeCommission;
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
    public $discountItem;
    /**
     * @var string
     */
    public $discountRate;
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
    public $shipAddressList;
    /**
     * @var string
     */
    public $shipAddress;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $salesGroup;
    /**
     * @var boolean
     */
    public $syncSalesTeams;
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
     * @var \NetSuite\Classes\RevenueCommitStatus
     */
    public $revCommitStatus;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $paymentMethod;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $creditCard;
    /**
     * @var string
     */
    public $ccNumber;
    /**
     * @var float
     */
    public $altSalesTotal;
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
     * @var string
     */
    public $pnRefNum;
    /**
     * @var float
     */
    public $subTotal;
    /**
     * @var float
     */
    public $discountTotal;
    /**
     * @var float
     */
    public $total;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $creditCardProcessor;
    /**
     * @var string
     */
    public $payPalAuthId;
    /**
     * @var boolean
     */
    public $payPalProcess;
    /**
     * @var string
     */
    public $email;
    /**
     * @var string
     */
    public $fax;
    /**
     * @var string
     */
    public $debitCardIssueNo;
    /**
     * @var boolean
     */
    public $isTaxable;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $promoCode;
    /**
     * @var string
     */
    public $status;
    /**
     * @var float
     */
    public $taxTotal;
    /**
     * @var float
     */
    public $tax2Total;
    /**
     * @var string
     */
    public $validFrom;
    /**
     * @var \NetSuite\Classes\ReturnAuthorizationOrderStatus
     */
    public $orderStatus;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $salesRep;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $giftCert;
    /**
     * @var string
     */
    public $contribPct;
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
     * @var \NetSuite\Classes\ReturnAuthorizationItemList
     */
    public $itemList;
    /**
     * @var \NetSuite\Classes\AccountingBookDetailList
     */
    public $accountingBookDetailList;
    /**
     * @var \NetSuite\Classes\ReturnAuthorizationSalesTeamList
     */
    public $salesTeamList;
    /**
     * @var \NetSuite\Classes\ReturnAuthorizationPartnersList
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
        "currency" => "RecordRef",
        "entity" => "RecordRef",
        "vatRegNum" => "string",
        "tranDate" => "dateTime",
        "tranId" => "string",
        "entityTaxRegNum" => "RecordRef",
        "taxPointDate" => "dateTime",
        "source" => "string",
        "department" => "RecordRef",
        "class" => "RecordRef",
        "location" => "RecordRef",
        "subsidiary" => "RecordRef",
        "intercoTransaction" => "RecordRef",
        "intercoStatus" => "IntercoStatus",
        "job" => "RecordRef",
        "partner" => "RecordRef",
        "otherRefNum" => "string",
        "leadSource" => "RecordRef",
        "memo" => "string",
        "drAccount" => "RecordRef",
        "fxAccount" => "RecordRef",
        "salesEffectiveDate" => "dateTime",
        "createdFrom" => "RecordRef",
        "revRecSchedule" => "RecordRef",
        "totalCostEstimate" => "float",
        "estGrossProfit" => "float",
        "estGrossProfitPercent" => "float",
        "revRecStartDate" => "dateTime",
        "revRecEndDate" => "dateTime",
        "excludeCommission" => "boolean",
        "exchangeRate" => "float",
        "currencyName" => "string",
        "discountItem" => "RecordRef",
        "discountRate" => "string",
        "taxItem" => "RecordRef",
        "taxRate" => "float",
        "toBePrinted" => "boolean",
        "toBeEmailed" => "boolean",
        "toBeFaxed" => "boolean",
        "messageSel" => "RecordRef",
        "message" => "string",
        "billingAddress" => "Address",
        "billAddressList" => "RecordRef",
        "shipAddressList" => "RecordRef",
        "shipAddress" => "string",
        "salesGroup" => "RecordRef",
        "syncSalesTeams" => "boolean",
        "revenueStatus" => "RevenueStatus",
        "recognizedRevenue" => "float",
        "deferredRevenue" => "float",
        "revRecOnRevCommitment" => "boolean",
        "revCommitStatus" => "RevenueCommitStatus",
        "paymentMethod" => "RecordRef",
        "creditCard" => "RecordRef",
        "ccNumber" => "string",
        "altSalesTotal" => "float",
        "ccExpireDate" => "dateTime",
        "ccName" => "string",
        "ccStreet" => "string",
        "ccZipCode" => "string",
        "ccApproved" => "boolean",
        "pnRefNum" => "string",
        "subTotal" => "float",
        "discountTotal" => "float",
        "total" => "float",
        "creditCardProcessor" => "RecordRef",
        "payPalAuthId" => "string",
        "payPalProcess" => "boolean",
        "email" => "string",
        "fax" => "string",
        "debitCardIssueNo" => "string",
        "isTaxable" => "boolean",
        "promoCode" => "RecordRef",
        "status" => "string",
        "taxTotal" => "float",
        "tax2Total" => "float",
        "validFrom" => "dateTime",
        "orderStatus" => "ReturnAuthorizationOrderStatus",
        "salesRep" => "RecordRef",
        "giftCert" => "RecordRef",
        "contribPct" => "string",
        "giftCertTotal" => "float",
        "giftCertApplied" => "float",
        "giftCertAvailable" => "float",
        "tranIsVsoeBundle" => "boolean",
        "vsoeAutoCalc" => "boolean",
        "syncPartnerTeams" => "boolean",
        "itemList" => "ReturnAuthorizationItemList",
        "accountingBookDetailList" => "AccountingBookDetailList",
        "salesTeamList" => "ReturnAuthorizationSalesTeamList",
        "partnersList" => "ReturnAuthorizationPartnersList",
        "taxDetailsList" => "TaxDetailsList",
        "customFieldList" => "CustomFieldList",
        "internalId" => "string",
        "externalId" => "string",
    );
}
