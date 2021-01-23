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

class JobSearchRowBasic extends SearchRowBasic {
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $accountNumber;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $actualTime;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $address;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $address1;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $address2;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $address3;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $addressee;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $addressInternalId;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $addressLabel;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $addressPhone;
    /**
     * @var \NetSuite\Classes\SearchColumnBooleanField[]
     */
    public $allocatePayrollExpenses;
    /**
     * @var \NetSuite\Classes\SearchColumnBooleanField[]
     */
    public $allowAllResourcesForTasks;
    /**
     * @var \NetSuite\Classes\SearchColumnBooleanField[]
     */
    public $allowExpenses;
    /**
     * @var \NetSuite\Classes\SearchColumnBooleanField[]
     */
    public $allowTime;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $altContact;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $altEmail;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $altName;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $altPhone;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $attention;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $billAddress1;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $billAddress2;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $billAddress3;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $billAddressee;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $billAttention;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $billCity;
    /**
     * @var \NetSuite\Classes\SearchColumnEnumSelectField[]
     */
    public $billCountry;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $billCountryCode;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $billingRateCard;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $billingSchedule;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $billPhone;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $billState;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $billZipCode;
    /**
     * @var \NetSuite\Classes\SearchColumnDateField[]
     */
    public $calculatedEndDate;
    /**
     * @var \NetSuite\Classes\SearchColumnDateField[]
     */
    public $calculatedEndDateBaseline;
    /**
     * @var \NetSuite\Classes\SearchColumnDateField[]
     */
    public $calculatedStartDate;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $category;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $city;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $comments;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $companyName;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $contact;
    /**
     * @var \NetSuite\Classes\SearchColumnEnumSelectField[]
     */
    public $country;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $countryCode;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $customer;
    /**
     * @var \NetSuite\Classes\SearchColumnDateField[]
     */
    public $dateCreated;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $defaultTaxReg;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $email;
    /**
     * @var \NetSuite\Classes\SearchColumnDateField[]
     */
    public $endDate;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $entityId;
    /**
     * @var \NetSuite\Classes\SearchColumnLongField[]
     */
    public $entityNumber;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $entityStatus;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $estimatedCost;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $estimatedGrossProfit;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $estimatedGrossProfitPercent;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $estimatedLaborCost;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $estimatedLaborCostBaseline;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $estimatedLaborRevenue;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $estimatedRevenue;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $estimatedTime;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $estimatedTimeOverride;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $estimatedTimeOverrideBaseline;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $externalId;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $fax;
    /**
     * @var \NetSuite\Classes\SearchColumnEnumSelectField[]
     */
    public $globalSubscriptionStatus;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $image;
    /**
     * @var \NetSuite\Classes\SearchColumnBooleanField[]
     */
    public $includeCrmTasksInTotals;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $internalId;
    /**
     * @var \NetSuite\Classes\SearchColumnBooleanField[]
     */
    public $isDefaultBilling;
    /**
     * @var \NetSuite\Classes\SearchColumnBooleanField[]
     */
    public $isDefaultShipping;
    /**
     * @var \NetSuite\Classes\SearchColumnBooleanField[]
     */
    public $isExemptTime;
    /**
     * @var \NetSuite\Classes\SearchColumnBooleanField[]
     */
    public $isInactive;
    /**
     * @var \NetSuite\Classes\SearchColumnBooleanField[]
     */
    public $isProductiveTime;
    /**
     * @var \NetSuite\Classes\SearchColumnBooleanField[]
     */
    public $isUtilizedTime;
    /**
     * @var \NetSuite\Classes\SearchColumnEnumSelectField[]
     */
    public $jobBillingType;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $jobItem;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $jobPrice;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $jobResource;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $jobResourceRole;
    /**
     * @var \NetSuite\Classes\SearchColumnEnumSelectField[]
     */
    public $language;
    /**
     * @var \NetSuite\Classes\SearchColumnDateField[]
     */
    public $lastBaselineDate;
    /**
     * @var \NetSuite\Classes\SearchColumnDateField[]
     */
    public $lastModifiedDate;
    /**
     * @var \NetSuite\Classes\SearchColumnEnumSelectField[]
     */
    public $level;
    /**
     * @var \NetSuite\Classes\SearchColumnBooleanField[]
     */
    public $limitTimeToAssignees;
    /**
     * @var \NetSuite\Classes\SearchColumnBooleanField[]
     */
    public $materializeTime;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $percentComplete;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $percentTimeComplete;
    /**
     * @var \NetSuite\Classes\SearchColumnEnumSelectField[]
     */
    public $permission;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $phone;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $phoneticName;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $plannedWork;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $plannedWorkBaseline;
    /**
     * @var \NetSuite\Classes\SearchColumnDateField[]
     */
    public $projectedEndDate;
    /**
     * @var \NetSuite\Classes\SearchColumnDateField[]
     */
    public $projectedEndDateBaseline;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $projectExpenseType;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $projectManager;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $revRecForecastRule;
    /**
     * @var \NetSuite\Classes\SearchColumnDateField[]
     */
    public $scheduledEndDate;
    /**
     * @var \NetSuite\Classes\SearchColumnEnumSelectField[]
     */
    public $schedulingMethod;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $shipAddress1;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $shipAddress2;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $shipAddress3;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $shipAddressee;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $shipAttention;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $shipCity;
    /**
     * @var \NetSuite\Classes\SearchColumnEnumSelectField[]
     */
    public $shipCountry;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $shipCountryCode;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $shipPhone;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $shipState;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $shipZip;
    /**
     * @var \NetSuite\Classes\SearchColumnBooleanField[]
     */
    public $sourceServiceItemFromRateCard;
    /**
     * @var \NetSuite\Classes\SearchColumnDateField[]
     */
    public $startDate;
    /**
     * @var \NetSuite\Classes\SearchColumnDateField[]
     */
    public $startDateBaseline;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $state;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $subscription;
    /**
     * @var \NetSuite\Classes\SearchColumnDateField[]
     */
    public $subscriptionDate;
    /**
     * @var \NetSuite\Classes\SearchColumnBooleanField[]
     */
    public $subscriptionStatus;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $subsidiary;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $timeApproval;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $timeRemaining;
    /**
     * @var \NetSuite\Classes\SearchColumnBooleanField[]
     */
    public $usePercentCompleteOverride;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $zipCode;
    /**
     * @var \NetSuite\Classes\SearchColumnCustomFieldList
     */
    public $customFieldList;
    static $paramtypesmap = array(
        "accountNumber" => "SearchColumnStringField[]",
        "actualTime" => "SearchColumnDoubleField[]",
        "address" => "SearchColumnStringField[]",
        "address1" => "SearchColumnStringField[]",
        "address2" => "SearchColumnStringField[]",
        "address3" => "SearchColumnStringField[]",
        "addressee" => "SearchColumnStringField[]",
        "addressInternalId" => "SearchColumnStringField[]",
        "addressLabel" => "SearchColumnStringField[]",
        "addressPhone" => "SearchColumnStringField[]",
        "allocatePayrollExpenses" => "SearchColumnBooleanField[]",
        "allowAllResourcesForTasks" => "SearchColumnBooleanField[]",
        "allowExpenses" => "SearchColumnBooleanField[]",
        "allowTime" => "SearchColumnBooleanField[]",
        "altContact" => "SearchColumnStringField[]",
        "altEmail" => "SearchColumnStringField[]",
        "altName" => "SearchColumnStringField[]",
        "altPhone" => "SearchColumnStringField[]",
        "attention" => "SearchColumnStringField[]",
        "billAddress1" => "SearchColumnStringField[]",
        "billAddress2" => "SearchColumnStringField[]",
        "billAddress3" => "SearchColumnStringField[]",
        "billAddressee" => "SearchColumnStringField[]",
        "billAttention" => "SearchColumnStringField[]",
        "billCity" => "SearchColumnStringField[]",
        "billCountry" => "SearchColumnEnumSelectField[]",
        "billCountryCode" => "SearchColumnStringField[]",
        "billingRateCard" => "SearchColumnSelectField[]",
        "billingSchedule" => "SearchColumnSelectField[]",
        "billPhone" => "SearchColumnStringField[]",
        "billState" => "SearchColumnStringField[]",
        "billZipCode" => "SearchColumnStringField[]",
        "calculatedEndDate" => "SearchColumnDateField[]",
        "calculatedEndDateBaseline" => "SearchColumnDateField[]",
        "calculatedStartDate" => "SearchColumnDateField[]",
        "category" => "SearchColumnSelectField[]",
        "city" => "SearchColumnStringField[]",
        "comments" => "SearchColumnStringField[]",
        "companyName" => "SearchColumnStringField[]",
        "contact" => "SearchColumnStringField[]",
        "country" => "SearchColumnEnumSelectField[]",
        "countryCode" => "SearchColumnStringField[]",
        "customer" => "SearchColumnSelectField[]",
        "dateCreated" => "SearchColumnDateField[]",
        "defaultTaxReg" => "SearchColumnStringField[]",
        "email" => "SearchColumnStringField[]",
        "endDate" => "SearchColumnDateField[]",
        "entityId" => "SearchColumnStringField[]",
        "entityNumber" => "SearchColumnLongField[]",
        "entityStatus" => "SearchColumnSelectField[]",
        "estimatedCost" => "SearchColumnDoubleField[]",
        "estimatedGrossProfit" => "SearchColumnDoubleField[]",
        "estimatedGrossProfitPercent" => "SearchColumnDoubleField[]",
        "estimatedLaborCost" => "SearchColumnDoubleField[]",
        "estimatedLaborCostBaseline" => "SearchColumnDoubleField[]",
        "estimatedLaborRevenue" => "SearchColumnDoubleField[]",
        "estimatedRevenue" => "SearchColumnDoubleField[]",
        "estimatedTime" => "SearchColumnDoubleField[]",
        "estimatedTimeOverride" => "SearchColumnDoubleField[]",
        "estimatedTimeOverrideBaseline" => "SearchColumnDoubleField[]",
        "externalId" => "SearchColumnSelectField[]",
        "fax" => "SearchColumnStringField[]",
        "globalSubscriptionStatus" => "SearchColumnEnumSelectField[]",
        "image" => "SearchColumnSelectField[]",
        "includeCrmTasksInTotals" => "SearchColumnBooleanField[]",
        "internalId" => "SearchColumnSelectField[]",
        "isDefaultBilling" => "SearchColumnBooleanField[]",
        "isDefaultShipping" => "SearchColumnBooleanField[]",
        "isExemptTime" => "SearchColumnBooleanField[]",
        "isInactive" => "SearchColumnBooleanField[]",
        "isProductiveTime" => "SearchColumnBooleanField[]",
        "isUtilizedTime" => "SearchColumnBooleanField[]",
        "jobBillingType" => "SearchColumnEnumSelectField[]",
        "jobItem" => "SearchColumnSelectField[]",
        "jobPrice" => "SearchColumnDoubleField[]",
        "jobResource" => "SearchColumnSelectField[]",
        "jobResourceRole" => "SearchColumnSelectField[]",
        "language" => "SearchColumnEnumSelectField[]",
        "lastBaselineDate" => "SearchColumnDateField[]",
        "lastModifiedDate" => "SearchColumnDateField[]",
        "level" => "SearchColumnEnumSelectField[]",
        "limitTimeToAssignees" => "SearchColumnBooleanField[]",
        "materializeTime" => "SearchColumnBooleanField[]",
        "percentComplete" => "SearchColumnDoubleField[]",
        "percentTimeComplete" => "SearchColumnDoubleField[]",
        "permission" => "SearchColumnEnumSelectField[]",
        "phone" => "SearchColumnStringField[]",
        "phoneticName" => "SearchColumnStringField[]",
        "plannedWork" => "SearchColumnDoubleField[]",
        "plannedWorkBaseline" => "SearchColumnDoubleField[]",
        "projectedEndDate" => "SearchColumnDateField[]",
        "projectedEndDateBaseline" => "SearchColumnDateField[]",
        "projectExpenseType" => "SearchColumnSelectField[]",
        "projectManager" => "SearchColumnSelectField[]",
        "revRecForecastRule" => "SearchColumnSelectField[]",
        "scheduledEndDate" => "SearchColumnDateField[]",
        "schedulingMethod" => "SearchColumnEnumSelectField[]",
        "shipAddress1" => "SearchColumnStringField[]",
        "shipAddress2" => "SearchColumnStringField[]",
        "shipAddress3" => "SearchColumnStringField[]",
        "shipAddressee" => "SearchColumnStringField[]",
        "shipAttention" => "SearchColumnStringField[]",
        "shipCity" => "SearchColumnStringField[]",
        "shipCountry" => "SearchColumnEnumSelectField[]",
        "shipCountryCode" => "SearchColumnStringField[]",
        "shipPhone" => "SearchColumnStringField[]",
        "shipState" => "SearchColumnStringField[]",
        "shipZip" => "SearchColumnStringField[]",
        "sourceServiceItemFromRateCard" => "SearchColumnBooleanField[]",
        "startDate" => "SearchColumnDateField[]",
        "startDateBaseline" => "SearchColumnDateField[]",
        "state" => "SearchColumnStringField[]",
        "subscription" => "SearchColumnSelectField[]",
        "subscriptionDate" => "SearchColumnDateField[]",
        "subscriptionStatus" => "SearchColumnBooleanField[]",
        "subsidiary" => "SearchColumnSelectField[]",
        "timeApproval" => "SearchColumnSelectField[]",
        "timeRemaining" => "SearchColumnDoubleField[]",
        "usePercentCompleteOverride" => "SearchColumnBooleanField[]",
        "zipCode" => "SearchColumnStringField[]",
        "customFieldList" => "SearchColumnCustomFieldList",
    );
}
