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

class JobSearchBasic extends SearchRecordBasic {
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $accountNumber;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $actualTime;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $address;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $addressee;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $addressLabel;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $addressPhone;
    /**
     * @var \NetSuite\Classes\SearchBooleanField
     */
    public $allocatePayrollExpenses;
    /**
     * @var \NetSuite\Classes\SearchBooleanField
     */
    public $allowAllResourcesForTasks;
    /**
     * @var \NetSuite\Classes\SearchBooleanField
     */
    public $allowExpenses;
    /**
     * @var \NetSuite\Classes\SearchBooleanField
     */
    public $allowTime;
    /**
     * @var \NetSuite\Classes\SearchBooleanField
     */
    public $applyProjectExpenseTypeToAll;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $attention;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $billingRateCard;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $billingSchedule;
    /**
     * @var \NetSuite\Classes\SearchDateField
     */
    public $calculatedEndDate;
    /**
     * @var \NetSuite\Classes\SearchDateField
     */
    public $calculatedEndDateBaseline;
    /**
     * @var \NetSuite\Classes\SearchDateField
     */
    public $calculatedStartDate;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $category;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $city;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $comments;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $contact;
    /**
     * @var \NetSuite\Classes\SearchEnumMultiSelectField
     */
    public $country;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $county;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $customer;
    /**
     * @var \NetSuite\Classes\SearchDateField
     */
    public $dateCreated;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $defaultTaxReg;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $defaultTaxRegText;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $email;
    /**
     * @var \NetSuite\Classes\SearchDateField
     */
    public $endDate;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $entityId;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $estCost;
    /**
     * @var \NetSuite\Classes\SearchDateField
     */
    public $estEndDate;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $estimatedGrossProfit;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $estimatedGrossProfitPercent;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $estimatedLaborCost;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $estimatedLaborCostBaseline;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $estimatedLaborRevenue;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $estimatedTime;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $estimatedTimeOverride;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $estimatedTimeOverrideBaseline;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $estRevenue;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $externalId;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $externalIdString;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $fax;
    /**
     * @var \NetSuite\Classes\SearchBooleanField
     */
    public $giveAccess;
    /**
     * @var \NetSuite\Classes\SearchEnumMultiSelectField
     */
    public $globalSubscriptionStatus;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $image;
    /**
     * @var \NetSuite\Classes\SearchBooleanField
     */
    public $includeCrmTasksInTotals;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $internalId;
    /**
     * @var \NetSuite\Classes\SearchLongField
     */
    public $internalIdNumber;
    /**
     * @var \NetSuite\Classes\SearchBooleanField
     */
    public $isDefaultBilling;
    /**
     * @var \NetSuite\Classes\SearchBooleanField
     */
    public $isDefaultShipping;
    /**
     * @var \NetSuite\Classes\SearchBooleanField
     */
    public $isExemptTime;
    /**
     * @var \NetSuite\Classes\SearchBooleanField
     */
    public $isInactive;
    /**
     * @var \NetSuite\Classes\SearchBooleanField
     */
    public $isProductiveTime;
    /**
     * @var \NetSuite\Classes\SearchBooleanField
     */
    public $isUtilizedTime;
    /**
     * @var \NetSuite\Classes\SearchEnumMultiSelectField
     */
    public $jobBillingType;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $jobItem;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $jobPrice;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $jobResource;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $jobResourceRole;
    /**
     * @var \NetSuite\Classes\SearchEnumMultiSelectField
     */
    public $language;
    /**
     * @var \NetSuite\Classes\SearchDateField
     */
    public $lastBaselineDate;
    /**
     * @var \NetSuite\Classes\SearchDateField
     */
    public $lastModifiedDate;
    /**
     * @var \NetSuite\Classes\SearchEnumMultiSelectField
     */
    public $level;
    /**
     * @var \NetSuite\Classes\SearchBooleanField
     */
    public $limitTimeToAssignees;
    /**
     * @var \NetSuite\Classes\SearchBooleanField
     */
    public $materializeTime;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $parent;
    /**
     * @var \NetSuite\Classes\SearchLongField
     */
    public $pctComplete;
    /**
     * @var \NetSuite\Classes\SearchLongField
     */
    public $percentTimeComplete;
    /**
     * @var \NetSuite\Classes\SearchEnumMultiSelectField
     */
    public $permission;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $phone;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $phoneticName;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $plannedWork;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $plannedWorkBaseline;
    /**
     * @var \NetSuite\Classes\SearchDateField
     */
    public $projectedEndDateBaseline;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $projectExpenseType;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $projectManager;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $revRecForecastRule;
    /**
     * @var \NetSuite\Classes\SearchDateField
     */
    public $scheduledEndDate;
    /**
     * @var \NetSuite\Classes\SearchEnumMultiSelectField
     */
    public $schedulingMethod;
    /**
     * @var \NetSuite\Classes\SearchBooleanField
     */
    public $sourceServiceItemFromRateCard;
    /**
     * @var \NetSuite\Classes\SearchDateField
     */
    public $startDate;
    /**
     * @var \NetSuite\Classes\SearchDateField
     */
    public $startDateBaseline;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $state;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $status;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $subsidiary;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $timeApproval;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $timeRemaining;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $type;
    /**
     * @var \NetSuite\Classes\SearchBooleanField
     */
    public $usePercentCompleteOverride;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $zipCode;
    /**
     * @var \NetSuite\Classes\SearchCustomFieldList
     */
    public $customFieldList;
    static $paramtypesmap = array(
        "accountNumber" => "SearchStringField",
        "actualTime" => "SearchDoubleField",
        "address" => "SearchStringField",
        "addressee" => "SearchStringField",
        "addressLabel" => "SearchStringField",
        "addressPhone" => "SearchStringField",
        "allocatePayrollExpenses" => "SearchBooleanField",
        "allowAllResourcesForTasks" => "SearchBooleanField",
        "allowExpenses" => "SearchBooleanField",
        "allowTime" => "SearchBooleanField",
        "applyProjectExpenseTypeToAll" => "SearchBooleanField",
        "attention" => "SearchStringField",
        "billingRateCard" => "SearchMultiSelectField",
        "billingSchedule" => "SearchMultiSelectField",
        "calculatedEndDate" => "SearchDateField",
        "calculatedEndDateBaseline" => "SearchDateField",
        "calculatedStartDate" => "SearchDateField",
        "category" => "SearchMultiSelectField",
        "city" => "SearchStringField",
        "comments" => "SearchStringField",
        "contact" => "SearchStringField",
        "country" => "SearchEnumMultiSelectField",
        "county" => "SearchStringField",
        "customer" => "SearchMultiSelectField",
        "dateCreated" => "SearchDateField",
        "defaultTaxReg" => "SearchMultiSelectField",
        "defaultTaxRegText" => "SearchStringField",
        "email" => "SearchStringField",
        "endDate" => "SearchDateField",
        "entityId" => "SearchStringField",
        "estCost" => "SearchDoubleField",
        "estEndDate" => "SearchDateField",
        "estimatedGrossProfit" => "SearchDoubleField",
        "estimatedGrossProfitPercent" => "SearchDoubleField",
        "estimatedLaborCost" => "SearchDoubleField",
        "estimatedLaborCostBaseline" => "SearchDoubleField",
        "estimatedLaborRevenue" => "SearchDoubleField",
        "estimatedTime" => "SearchDoubleField",
        "estimatedTimeOverride" => "SearchDoubleField",
        "estimatedTimeOverrideBaseline" => "SearchDoubleField",
        "estRevenue" => "SearchDoubleField",
        "externalId" => "SearchMultiSelectField",
        "externalIdString" => "SearchStringField",
        "fax" => "SearchStringField",
        "giveAccess" => "SearchBooleanField",
        "globalSubscriptionStatus" => "SearchEnumMultiSelectField",
        "image" => "SearchStringField",
        "includeCrmTasksInTotals" => "SearchBooleanField",
        "internalId" => "SearchMultiSelectField",
        "internalIdNumber" => "SearchLongField",
        "isDefaultBilling" => "SearchBooleanField",
        "isDefaultShipping" => "SearchBooleanField",
        "isExemptTime" => "SearchBooleanField",
        "isInactive" => "SearchBooleanField",
        "isProductiveTime" => "SearchBooleanField",
        "isUtilizedTime" => "SearchBooleanField",
        "jobBillingType" => "SearchEnumMultiSelectField",
        "jobItem" => "SearchMultiSelectField",
        "jobPrice" => "SearchDoubleField",
        "jobResource" => "SearchMultiSelectField",
        "jobResourceRole" => "SearchMultiSelectField",
        "language" => "SearchEnumMultiSelectField",
        "lastBaselineDate" => "SearchDateField",
        "lastModifiedDate" => "SearchDateField",
        "level" => "SearchEnumMultiSelectField",
        "limitTimeToAssignees" => "SearchBooleanField",
        "materializeTime" => "SearchBooleanField",
        "parent" => "SearchMultiSelectField",
        "pctComplete" => "SearchLongField",
        "percentTimeComplete" => "SearchLongField",
        "permission" => "SearchEnumMultiSelectField",
        "phone" => "SearchStringField",
        "phoneticName" => "SearchStringField",
        "plannedWork" => "SearchDoubleField",
        "plannedWorkBaseline" => "SearchDoubleField",
        "projectedEndDateBaseline" => "SearchDateField",
        "projectExpenseType" => "SearchMultiSelectField",
        "projectManager" => "SearchMultiSelectField",
        "revRecForecastRule" => "SearchMultiSelectField",
        "scheduledEndDate" => "SearchDateField",
        "schedulingMethod" => "SearchEnumMultiSelectField",
        "sourceServiceItemFromRateCard" => "SearchBooleanField",
        "startDate" => "SearchDateField",
        "startDateBaseline" => "SearchDateField",
        "state" => "SearchStringField",
        "status" => "SearchMultiSelectField",
        "subsidiary" => "SearchMultiSelectField",
        "timeApproval" => "SearchMultiSelectField",
        "timeRemaining" => "SearchDoubleField",
        "type" => "SearchMultiSelectField",
        "usePercentCompleteOverride" => "SearchBooleanField",
        "zipCode" => "SearchStringField",
        "customFieldList" => "SearchCustomFieldList",
    );
}
