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

class Estimate extends Record {
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
    public $entity;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $job;
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
    public $customForm;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $currency;
    /**
     * @var string
     */
    public $title;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $entityStatus;
    /**
     * @var float
     */
    public $probability;
    /**
     * @var boolean
     */
    public $includeInForecast;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $forecastType;
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
     * @var string
     */
    public $dueDate;
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
    public $billingSchedule;
    /**
     * @var string
     */
    public $status;
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
     * @var \NetSuite\Classes\RecordRef
     */
    public $leadSource;
    /**
     * @var string
     */
    public $expectedCloseDate;
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
    public $endDate;
    /**
     * @var string
     */
    public $startDate;
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
    public $createdFrom;
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
     * @var string
     */
    public $vatRegNum;
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
     * @var boolean
     */
    public $visibleToCustomer;
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
     * @var \NetSuite\Classes\RecordRef
     */
    public $shippingTaxCode;
    /**
     * @var string
     */
    public $shippingTax2Rate;
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
    public $trackingNumbers;
    /**
     * @var string
     */
    public $handlingTax2Rate;
    /**
     * @var string
     */
    public $linkedTrackingNumbers;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $salesGroup;
    /**
     * @var boolean
     */
    public $syncSalesTeams;
    /**
     * @var float
     */
    public $altSalesTotal;
    /**
     * @var boolean
     */
    public $canHaveStackable;
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
     * @var float
     */
    public $tax2Total;
    /**
     * @var \NetSuite\Classes\EstimateItemList
     */
    public $itemList;
    /**
     * @var \NetSuite\Classes\AccountingBookDetailList
     */
    public $accountingBookDetailList;
    /**
     * @var \NetSuite\Classes\EstimateSalesTeamList
     */
    public $salesTeamList;
    /**
     * @var boolean
     */
    public $syncPartnerTeams;
    /**
     * @var \NetSuite\Classes\EstimatePartnersList
     */
    public $partnersList;
    /**
     * @var \NetSuite\Classes\PromotionsList
     */
    public $promotionsList;
    /**
     * @var \NetSuite\Classes\EstimateShipGroupList
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
        "entity" => "RecordRef",
        "job" => "RecordRef",
        "tranDate" => "dateTime",
        "tranId" => "string",
        "entityTaxRegNum" => "RecordRef",
        "taxPointDate" => "dateTime",
        "source" => "string",
        "customForm" => "RecordRef",
        "currency" => "RecordRef",
        "title" => "string",
        "entityStatus" => "RecordRef",
        "probability" => "float",
        "includeInForecast" => "boolean",
        "forecastType" => "RecordRef",
        "opportunity" => "RecordRef",
        "department" => "RecordRef",
        "class" => "RecordRef",
        "terms" => "RecordRef",
        "dueDate" => "dateTime",
        "location" => "RecordRef",
        "subsidiary" => "RecordRef",
        "billingSchedule" => "RecordRef",
        "status" => "string",
        "salesRep" => "RecordRef",
        "partner" => "RecordRef",
        "contribPct" => "string",
        "leadSource" => "RecordRef",
        "expectedCloseDate" => "dateTime",
        "otherRefNum" => "string",
        "memo" => "string",
        "endDate" => "dateTime",
        "startDate" => "dateTime",
        "totalCostEstimate" => "float",
        "estGrossProfit" => "float",
        "estGrossProfitPercent" => "float",
        "createdFrom" => "RecordRef",
        "exchangeRate" => "float",
        "currencyName" => "string",
        "promoCode" => "RecordRef",
        "discountItem" => "RecordRef",
        "discountRate" => "string",
        "isTaxable" => "boolean",
        "taxItem" => "RecordRef",
        "taxRate" => "float",
        "vatRegNum" => "string",
        "toBePrinted" => "boolean",
        "toBeEmailed" => "boolean",
        "email" => "string",
        "toBeFaxed" => "boolean",
        "fax" => "string",
        "visibleToCustomer" => "boolean",
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
        "shippingTaxCode" => "RecordRef",
        "shippingTax2Rate" => "string",
        "handlingTaxCode" => "RecordRef",
        "handlingTax1Rate" => "float",
        "handlingCost" => "float",
        "trackingNumbers" => "string",
        "handlingTax2Rate" => "string",
        "linkedTrackingNumbers" => "string",
        "salesGroup" => "RecordRef",
        "syncSalesTeams" => "boolean",
        "altSalesTotal" => "float",
        "canHaveStackable" => "boolean",
        "oneTime" => "float",
        "recurWeekly" => "float",
        "recurMonthly" => "float",
        "recurQuarterly" => "float",
        "recurAnnually" => "float",
        "subTotal" => "float",
        "discountTotal" => "float",
        "taxTotal" => "float",
        "altShippingCost" => "float",
        "altHandlingCost" => "float",
        "total" => "float",
        "tax2Total" => "float",
        "itemList" => "EstimateItemList",
        "accountingBookDetailList" => "AccountingBookDetailList",
        "salesTeamList" => "EstimateSalesTeamList",
        "syncPartnerTeams" => "boolean",
        "partnersList" => "EstimatePartnersList",
        "promotionsList" => "PromotionsList",
        "shipGroupList" => "EstimateShipGroupList",
        "taxDetailsList" => "TaxDetailsList",
        "customFieldList" => "CustomFieldList",
        "internalId" => "string",
        "externalId" => "string",
    );
}
