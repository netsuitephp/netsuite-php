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
 * generated:  2017-08-01 09:12:52 PM UTC
 */

namespace NetSuite\Classes;

class Job extends Record {
    public $customForm;
    public $entityId;
    public $altName;
    public $companyName;
    public $phoneticName;
    public $entityStatus;
    public $defaultAddress;
    public $parent;
    public $isInactive;
    public $percentCompleteOverrideList;
    public $lastModifiedDate;
    public $billPay;
    public $dateCreated;
    public $category;
    public $workplace;
    public $language;
    public $comments;
    public $accountNumber;
    public $currency;
    public $fxRate;
    public $startDate;
    public $endDate;
    public $phone;
    public $altPhone;
    public $calculatedEndDate;
    public $calculatedEndDateBaseline;
    public $startDateBaseline;
    public $projectedEndDate;
    public $projectedEndDateBaseline;
    public $lastBaselineDate;
    public $jobType;
    public $percentComplete;
    public $estimatedCost;
    public $estimatedRevenue;
    public $estimatedTime;
    public $estimatedTimeOverride;
    public $fax;
    public $email;
    public $emailPreference;
    public $openingBalance;
    public $openingBalanceDate;
    public $openingBalanceAccount;
    public $subsidiary;
    public $jobBillingType;
    public $billingSchedule;
    public $jobItem;
    public $percentTimeComplete;
    public $actualTime;
    public $allowTime;
    public $timeRemaining;
    public $limitTimeToAssignees;
    public $estimatedLaborCost;
    public $estimatedLaborCostBaseline;
    public $estimateRevRecTemplate;
    public $revRecForecastRule;
    public $usePercentCompleteOverride;
    public $estimatedLaborRevenue;
    public $estimatedGrossProfit;
    public $estimatedGrossProfitPercent;
    public $projectExpenseType;
    public $applyProjectExpenseTypeToAll;
    public $allowAllResourcesForTasks;
    public $jobPrice;
    public $isUtilizedTime;
    public $isProductiveTime;
    public $isExemptTime;
    public $materializeTime;
    public $allowExpenses;
    public $allocatePayrollExpenses;
    public $includeCrmTasksInTotals;
    public $globalSubscriptionStatus;
    public $jobResourcesList;
    public $plStatementList;
    public $addressbookList;
    public $milestonesList;
    public $creditCardsList;
    public $customFieldList;
    public $internalId;
    public $externalId;
    static $paramtypesmap = array(
        "customForm" => "RecordRef",
        "entityId" => "string",
        "altName" => "string",
        "companyName" => "string",
        "phoneticName" => "string",
        "entityStatus" => "RecordRef",
        "defaultAddress" => "string",
        "parent" => "RecordRef",
        "isInactive" => "boolean",
        "percentCompleteOverrideList" => "JobPercentCompleteOverrideList",
        "lastModifiedDate" => "dateTime",
        "billPay" => "boolean",
        "dateCreated" => "dateTime",
        "category" => "RecordRef",
        "workplace" => "RecordRef",
        "language" => "RecordRef",
        "comments" => "string",
        "accountNumber" => "string",
        "currency" => "RecordRef",
        "fxRate" => "float",
        "startDate" => "dateTime",
        "endDate" => "dateTime",
        "phone" => "string",
        "altPhone" => "string",
        "calculatedEndDate" => "dateTime",
        "calculatedEndDateBaseline" => "dateTime",
        "startDateBaseline" => "dateTime",
        "projectedEndDate" => "dateTime",
        "projectedEndDateBaseline" => "dateTime",
        "lastBaselineDate" => "dateTime",
        "jobType" => "RecordRef",
        "percentComplete" => "float",
        "estimatedCost" => "float",
        "estimatedRevenue" => "float",
        "estimatedTime" => "Duration",
        "estimatedTimeOverride" => "Duration",
        "fax" => "string",
        "email" => "string",
        "emailPreference" => "EmailPreference",
        "openingBalance" => "float",
        "openingBalanceDate" => "dateTime",
        "openingBalanceAccount" => "RecordRef",
        "subsidiary" => "RecordRef",
        "jobBillingType" => "JobBillingType",
        "billingSchedule" => "RecordRef",
        "jobItem" => "RecordRef",
        "percentTimeComplete" => "float",
        "actualTime" => "Duration",
        "allowTime" => "boolean",
        "timeRemaining" => "Duration",
        "limitTimeToAssignees" => "boolean",
        "estimatedLaborCost" => "float",
        "estimatedLaborCostBaseline" => "float",
        "estimateRevRecTemplate" => "RecordRef",
        "revRecForecastRule" => "RecordRef",
        "usePercentCompleteOverride" => "boolean",
        "estimatedLaborRevenue" => "float",
        "estimatedGrossProfit" => "float",
        "estimatedGrossProfitPercent" => "float",
        "projectExpenseType" => "RecordRef",
        "applyProjectExpenseTypeToAll" => "boolean",
        "allowAllResourcesForTasks" => "boolean",
        "jobPrice" => "float",
        "isUtilizedTime" => "boolean",
        "isProductiveTime" => "boolean",
        "isExemptTime" => "boolean",
        "materializeTime" => "boolean",
        "allowExpenses" => "boolean",
        "allocatePayrollExpenses" => "boolean",
        "includeCrmTasksInTotals" => "boolean",
        "globalSubscriptionStatus" => "GlobalSubscriptionStatus",
        "jobResourcesList" => "JobResourcesList",
        "plStatementList" => "JobPlStatementList",
        "addressbookList" => "JobAddressbookList",
        "milestonesList" => "JobMilestonesList",
        "creditCardsList" => "JobCreditCardsList",
        "customFieldList" => "CustomFieldList",
        "internalId" => "string",
        "externalId" => "string",
    );
}
