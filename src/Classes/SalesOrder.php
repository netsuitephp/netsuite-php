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

class SalesOrder extends Record {
    /**
     * @var string
     */
    public $createdDate;
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
    public $job;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $currency;
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
     * @var \NetSuite\Classes\SalesOrderOrderStatus
     */
    public $orderStatus;
    /**
     * @var string
     */
    public $nextBill;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $opportunity;
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
    public $salesGroup;
    /**
     * @var boolean
     */
    public $syncSalesTeams;
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
     * @var float
     */
    public $exchangeRate;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $promoCode;
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
     * @var \NetSuite\Classes\SalesOrderHandlingMode
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
     * @var \NetSuite\Classes\SalesOrderPaymentOperation
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
     * @var string
     */
    public $actualShipDate;
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
     * @var boolean
     */
    public $isMultiShipTo;
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
     * @var string
     */
    public $handlingTax2Rate;
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
     * @var boolean
     */
    public $shipComplete;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $paymentMethod;
    /**
     * @var string
     */
    public $shopperIpAddress;
    /**
     * @var boolean
     */
    public $saveOnAuthDecline;
    /**
     * @var boolean
     */
    public $canHaveStackable;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $creditCard;
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
     * @var string
     */
    public $payPalStatus;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $creditCardProcessor;
    /**
     * @var string
     */
    public $payPalTranId;
    /**
     * @var boolean
     */
    public $ccApproved;
    /**
     * @var boolean
     */
    public $getAuth;
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
     * @var \NetSuite\Classes\AvsMatchCode
     */
    public $ccSecurityCodeMatch;
    /**
     * @var float
     */
    public $altSalesTotal;
    /**
     * @var boolean
     */
    public $ignoreAvs;
    /**
     * @var \NetSuite\Classes\TransactionPaymentEventResult
     */
    public $paymentEventResult;
    /**
     * @var \NetSuite\Classes\TransactionPaymentEventHoldReason
     */
    public $paymentEventHoldReason;
    /**
     * @var \NetSuite\Classes\TransactionPaymentEventType
     */
    public $paymentEventType;
    /**
     * @var string
     */
    public $paymentEventDate;
    /**
     * @var string
     */
    public $paymentEventUpdatedBy;
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
     * @var string
     */
    public $paypalAuthId;
    /**
     * @var float
     */
    public $balance;
    /**
     * @var boolean
     */
    public $paypalProcess;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $billingSchedule;
    /**
     * @var string
     */
    public $ccSecurityCode;
    /**
     * @var string
     */
    public $threeDStatusCode;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $class;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $department;
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
     * @var string
     */
    public $debitCardIssueNo;
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
     * @var string
     */
    public $taxPointDate;
    /**
     * @var boolean
     */
    public $taxDetailsOverride;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $location;
    /**
     * @var string
     */
    public $pnRefNum;
    /**
     * @var string
     */
    public $status;
    /**
     * @var float
     */
    public $tax2Total;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $terms;
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
     * @var float
     */
    public $oneTime;
    /**
     * @var float
     */
    public $recurWeekly;
    /**
     * @var float
     */
    public $recurMonthly;
    /**
     * @var float
     */
    public $recurQuarterly;
    /**
     * @var float
     */
    public $recurAnnually;
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
     * @var \NetSuite\Classes\SalesOrderSalesTeamList
     */
    public $salesTeamList;
    /**
     * @var \NetSuite\Classes\SalesOrderPartnersList
     */
    public $partnersList;
    /**
     * @var \NetSuite\Classes\GiftCertRedemptionList
     */
    public $giftCertRedemptionList;
    /**
     * @var \NetSuite\Classes\PromotionsList
     */
    public $promotionsList;
    /**
     * @var \NetSuite\Classes\SalesOrderItemList
     */
    public $itemList;
    /**
     * @var \NetSuite\Classes\SalesOrderShipGroupList
     */
    public $shipGroupList;
    /**
     * @var \NetSuite\Classes\AccountingBookDetailList
     */
    public $accountingBookDetailList;
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
        "customForm" => "RecordRef",
        "entity" => "RecordRef",
        "job" => "RecordRef",
        "currency" => "RecordRef",
        "drAccount" => "RecordRef",
        "fxAccount" => "RecordRef",
        "tranDate" => "dateTime",
        "tranId" => "string",
        "entityTaxRegNum" => "RecordRef",
        "source" => "string",
        "createdFrom" => "RecordRef",
        "orderStatus" => "SalesOrderOrderStatus",
        "nextBill" => "dateTime",
        "opportunity" => "RecordRef",
        "salesRep" => "RecordRef",
        "contribPct" => "string",
        "partner" => "RecordRef",
        "salesGroup" => "RecordRef",
        "syncSalesTeams" => "boolean",
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
        "exchangeRate" => "float",
        "promoCode" => "RecordRef",
        "currencyName" => "string",
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
        "handlingMode" => "SalesOrderHandlingMode",
        "outputAuthCode" => "string",
        "outputReferenceCode" => "string",
        "paymentOperation" => "SalesOrderPaymentOperation",
        "dynamicDescriptor" => "string",
        "billingAddress" => "Address",
        "billAddressList" => "RecordRef",
        "shippingAddress" => "Address",
        "shipIsResidential" => "boolean",
        "shipAddressList" => "RecordRef",
        "fob" => "string",
        "shipDate" => "dateTime",
        "actualShipDate" => "dateTime",
        "shipMethod" => "RecordRef",
        "shippingCost" => "float",
        "shippingTax1Rate" => "float",
        "isMultiShipTo" => "boolean",
        "shippingTax2Rate" => "string",
        "shippingTaxCode" => "RecordRef",
        "handlingTaxCode" => "RecordRef",
        "handlingTax1Rate" => "float",
        "handlingTax2Rate" => "string",
        "handlingCost" => "float",
        "trackingNumbers" => "string",
        "linkedTrackingNumbers" => "string",
        "shipComplete" => "boolean",
        "paymentMethod" => "RecordRef",
        "shopperIpAddress" => "string",
        "saveOnAuthDecline" => "boolean",
        "canHaveStackable" => "boolean",
        "creditCard" => "RecordRef",
        "revenueStatus" => "RevenueStatus",
        "recognizedRevenue" => "float",
        "deferredRevenue" => "float",
        "revRecOnRevCommitment" => "boolean",
        "revCommitStatus" => "RevenueCommitStatus",
        "ccNumber" => "string",
        "ccExpireDate" => "dateTime",
        "ccName" => "string",
        "ccStreet" => "string",
        "ccZipCode" => "string",
        "payPalStatus" => "string",
        "creditCardProcessor" => "RecordRef",
        "payPalTranId" => "string",
        "ccApproved" => "boolean",
        "getAuth" => "boolean",
        "authCode" => "string",
        "ccAvsStreetMatch" => "AvsMatchCode",
        "ccAvsZipMatch" => "AvsMatchCode",
        "isRecurringPayment" => "boolean",
        "ccSecurityCodeMatch" => "AvsMatchCode",
        "altSalesTotal" => "float",
        "ignoreAvs" => "boolean",
        "paymentEventResult" => "TransactionPaymentEventResult",
        "paymentEventHoldReason" => "TransactionPaymentEventHoldReason",
        "paymentEventType" => "TransactionPaymentEventType",
        "paymentEventDate" => "dateTime",
        "paymentEventUpdatedBy" => "string",
        "subTotal" => "float",
        "discountTotal" => "float",
        "taxTotal" => "float",
        "altShippingCost" => "float",
        "altHandlingCost" => "float",
        "total" => "float",
        "revRecSchedule" => "RecordRef",
        "revRecStartDate" => "dateTime",
        "revRecEndDate" => "dateTime",
        "paypalAuthId" => "string",
        "balance" => "float",
        "paypalProcess" => "boolean",
        "billingSchedule" => "RecordRef",
        "ccSecurityCode" => "string",
        "threeDStatusCode" => "string",
        "class" => "RecordRef",
        "department" => "RecordRef",
        "subsidiary" => "RecordRef",
        "intercoTransaction" => "RecordRef",
        "intercoStatus" => "IntercoStatus",
        "debitCardIssueNo" => "string",
        "lastModifiedDate" => "dateTime",
        "nexus" => "RecordRef",
        "subsidiaryTaxRegNum" => "RecordRef",
        "taxRegOverride" => "boolean",
        "taxPointDate" => "dateTime",
        "taxDetailsOverride" => "boolean",
        "location" => "RecordRef",
        "pnRefNum" => "string",
        "status" => "string",
        "tax2Total" => "float",
        "terms" => "RecordRef",
        "validFrom" => "dateTime",
        "vatRegNum" => "string",
        "giftCertApplied" => "float",
        "oneTime" => "float",
        "recurWeekly" => "float",
        "recurMonthly" => "float",
        "recurQuarterly" => "float",
        "recurAnnually" => "float",
        "tranIsVsoeBundle" => "boolean",
        "vsoeAutoCalc" => "boolean",
        "syncPartnerTeams" => "boolean",
        "salesTeamList" => "SalesOrderSalesTeamList",
        "partnersList" => "SalesOrderPartnersList",
        "giftCertRedemptionList" => "GiftCertRedemptionList",
        "promotionsList" => "PromotionsList",
        "itemList" => "SalesOrderItemList",
        "shipGroupList" => "SalesOrderShipGroupList",
        "accountingBookDetailList" => "AccountingBookDetailList",
        "taxDetailsList" => "TaxDetailsList",
        "customFieldList" => "CustomFieldList",
        "internalId" => "string",
        "externalId" => "string",
    );
}
