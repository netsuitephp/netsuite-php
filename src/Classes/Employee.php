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

class Employee extends Record {
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $customForm;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $template;
    /**
     * @var string
     */
    public $entityId;
    /**
     * @var string
     */
    public $salutation;
    /**
     * @var string
     */
    public $firstName;
    /**
     * @var string
     */
    public $middleName;
    /**
     * @var string
     */
    public $lastName;
    /**
     * @var string
     */
    public $altName;
    /**
     * @var string
     */
    public $phone;
    /**
     * @var string
     */
    public $fax;
    /**
     * @var string
     */
    public $email;
    /**
     * @var string
     */
    public $defaultAddress;
    /**
     * @var boolean
     */
    public $isInactive;
    /**
     * @var string
     */
    public $phoneticName;
    /**
     * @var string
     */
    public $lastModifiedDate;
    /**
     * @var string
     */
    public $dateCreated;
    /**
     * @var string
     */
    public $initials;
    /**
     * @var string
     */
    public $officePhone;
    /**
     * @var string
     */
    public $homePhone;
    /**
     * @var string
     */
    public $mobilePhone;
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
    public $billingClass;
    /**
     * @var string
     */
    public $accountNumber;
    /**
     * @var \NetSuite\Classes\EmployeeCompensationCurrency
     */
    public $compensationCurrency;
    /**
     * @var \NetSuite\Classes\EmployeeBaseWageType
     */
    public $baseWageType;
    /**
     * @var float
     */
    public $baseWage;
    /**
     * @var string
     */
    public $comments;
    /**
     * @var \NetSuite\Classes\GlobalSubscriptionStatus
     */
    public $globalSubscriptionStatus;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $image;
    /**
     * @var \NetSuite\Classes\EmployeePayFrequency
     */
    public $payFrequency;
    /**
     * @var string
     */
    public $lastPaidDate;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $currency;
    /**
     * @var \NetSuite\Classes\EmployeeUseTimeData
     */
    public $useTimeData;
    /**
     * @var boolean
     */
    public $usePerquest;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $workplace;
    /**
     * @var string
     */
    public $adpId;
    /**
     * @var boolean
     */
    public $directDeposit;
    /**
     * @var float
     */
    public $expenseLimit;
    /**
     * @var float
     */
    public $purchaseOrderLimit;
    /**
     * @var float
     */
    public $purchaseOrderApprovalLimit;
    /**
     * @var string
     */
    public $socialSecurityNumber;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $supervisor;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $approver;
    /**
     * @var float
     */
    public $approvalLimit;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $timeApprover;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $employeeType;
    /**
     * @var boolean
     */
    public $isSalesRep;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $salesRole;
    /**
     * @var boolean
     */
    public $isSupportRep;
    /**
     * @var boolean
     */
    public $isJobResource;
    /**
     * @var float
     */
    public $laborCost;
    /**
     * @var string
     */
    public $birthDate;
    /**
     * @var string
     */
    public $hireDate;
    /**
     * @var string
     */
    public $releaseDate;
    /**
     * @var string
     */
    public $terminationDetails;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $terminationReason;
    /**
     * @var \NetSuite\Classes\EmployeeTerminationRegretted
     */
    public $terminationRegretted;
    /**
     * @var \NetSuite\Classes\EmployeeTerminationCategory
     */
    public $terminationCategory;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $timeOffPlan;
    /**
     * @var string
     */
    public $lastReviewDate;
    /**
     * @var string
     */
    public $nextReviewDate;
    /**
     * @var string
     */
    public $title;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $employeeStatus;
    /**
     * @var string
     */
    public $jobDescription;
    /**
     * @var \NetSuite\Classes\EmployeeWorkAssignment
     */
    public $workAssignment;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $job;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $maritalStatus;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $ethnicity;
    /**
     * @var \NetSuite\Classes\Gender
     */
    public $gender;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $purchaseOrderApprover;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $workCalendar;
    /**
     * @var boolean
     */
    public $giveAccess;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $defaultExpenseReportCurrency;
    /**
     * @var boolean
     */
    public $concurrentWebServicesUser;
    /**
     * @var boolean
     */
    public $sendEmail;
    /**
     * @var boolean
     */
    public $hasOfflineAccess;
    /**
     * @var string
     */
    public $password;
    /**
     * @var string
     */
    public $password2;
    /**
     * @var boolean
     */
    public $requirePwdChange;
    /**
     * @var boolean
     */
    public $inheritIPRules;
    /**
     * @var string
     */
    public $IPAddressRule;
    /**
     * @var string
     */
    public $startDateTimeOffCalc;
    /**
     * @var \NetSuite\Classes\EmployeeCommissionPaymentPreference
     */
    public $commissionPaymentPreference;
    /**
     * @var boolean
     */
    public $billPay;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $defaultAcctCorpCardExp;
    /**
     * @var boolean
     */
    public $eligibleForCommission;
    /**
     * @var \NetSuite\Classes\EmployeeSubscriptionsList
     */
    public $subscriptionsList;
    /**
     * @var \NetSuite\Classes\EmployeeRatesList
     */
    public $ratesList;
    /**
     * @var \NetSuite\Classes\EmployeeAddressbookList
     */
    public $addressbookList;
    /**
     * @var \NetSuite\Classes\EmployeeRolesList
     */
    public $rolesList;
    /**
     * @var \NetSuite\Classes\EmployeeHrEducationList
     */
    public $hrEducationList;
    /**
     * @var \NetSuite\Classes\EmployeeAccruedTimeList
     */
    public $accruedTimeList;
    /**
     * @var \NetSuite\Classes\EmployeeDirectDepositList
     */
    public $directDepositList;
    /**
     * @var \NetSuite\Classes\EmployeeCurrencyList
     */
    public $currencyList;
    /**
     * @var \NetSuite\Classes\EmployeeCompanyContributionList
     */
    public $companyContributionList;
    /**
     * @var \NetSuite\Classes\EmployeeEarningList
     */
    public $earningList;
    /**
     * @var \NetSuite\Classes\EmployeeEmergencyContactList
     */
    public $emergencyContactList;
    /**
     * @var \NetSuite\Classes\EmployeeHcmPositionList
     */
    public $hcmPositionList;
    /**
     * @var \NetSuite\Classes\EmployeeDeductionList
     */
    public $deductionList;
    /**
     * @var boolean
     */
    public $isJobManager;
    /**
     * @var float
     */
    public $targetUtilization;
    /**
     * @var float
     */
    public $bonusTarget;
    /**
     * @var string
     */
    public $bonusTargetComment;
    /**
     * @var \NetSuite\Classes\EmployeeBonusTargetType
     */
    public $bonusTargetType;
    /**
     * @var \NetSuite\Classes\EmployeeBonusTargetPayFrequency
     */
    public $bonusTargetPayFrequency;
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
        "customForm" => "RecordRef",
        "template" => "RecordRef",
        "entityId" => "string",
        "salutation" => "string",
        "firstName" => "string",
        "middleName" => "string",
        "lastName" => "string",
        "altName" => "string",
        "phone" => "string",
        "fax" => "string",
        "email" => "string",
        "defaultAddress" => "string",
        "isInactive" => "boolean",
        "phoneticName" => "string",
        "lastModifiedDate" => "dateTime",
        "dateCreated" => "dateTime",
        "initials" => "string",
        "officePhone" => "string",
        "homePhone" => "string",
        "mobilePhone" => "string",
        "department" => "RecordRef",
        "class" => "RecordRef",
        "location" => "RecordRef",
        "subsidiary" => "RecordRef",
        "billingClass" => "RecordRef",
        "accountNumber" => "string",
        "compensationCurrency" => "EmployeeCompensationCurrency",
        "baseWageType" => "EmployeeBaseWageType",
        "baseWage" => "float",
        "comments" => "string",
        "globalSubscriptionStatus" => "GlobalSubscriptionStatus",
        "image" => "RecordRef",
        "payFrequency" => "EmployeePayFrequency",
        "lastPaidDate" => "dateTime",
        "currency" => "RecordRef",
        "useTimeData" => "EmployeeUseTimeData",
        "usePerquest" => "boolean",
        "workplace" => "RecordRef",
        "adpId" => "string",
        "directDeposit" => "boolean",
        "expenseLimit" => "float",
        "purchaseOrderLimit" => "float",
        "purchaseOrderApprovalLimit" => "float",
        "socialSecurityNumber" => "string",
        "supervisor" => "RecordRef",
        "approver" => "RecordRef",
        "approvalLimit" => "float",
        "timeApprover" => "RecordRef",
        "employeeType" => "RecordRef",
        "isSalesRep" => "boolean",
        "salesRole" => "RecordRef",
        "isSupportRep" => "boolean",
        "isJobResource" => "boolean",
        "laborCost" => "float",
        "birthDate" => "dateTime",
        "hireDate" => "dateTime",
        "releaseDate" => "dateTime",
        "terminationDetails" => "string",
        "terminationReason" => "RecordRef",
        "terminationRegretted" => "EmployeeTerminationRegretted",
        "terminationCategory" => "EmployeeTerminationCategory",
        "timeOffPlan" => "RecordRef",
        "lastReviewDate" => "dateTime",
        "nextReviewDate" => "dateTime",
        "title" => "string",
        "employeeStatus" => "RecordRef",
        "jobDescription" => "string",
        "workAssignment" => "EmployeeWorkAssignment",
        "job" => "RecordRef",
        "maritalStatus" => "RecordRef",
        "ethnicity" => "RecordRef",
        "gender" => "Gender",
        "purchaseOrderApprover" => "RecordRef",
        "workCalendar" => "RecordRef",
        "giveAccess" => "boolean",
        "defaultExpenseReportCurrency" => "RecordRef",
        "concurrentWebServicesUser" => "boolean",
        "sendEmail" => "boolean",
        "hasOfflineAccess" => "boolean",
        "password" => "string",
        "password2" => "string",
        "requirePwdChange" => "boolean",
        "inheritIPRules" => "boolean",
        "IPAddressRule" => "string",
        "startDateTimeOffCalc" => "dateTime",
        "commissionPaymentPreference" => "EmployeeCommissionPaymentPreference",
        "billPay" => "boolean",
        "defaultAcctCorpCardExp" => "RecordRef",
        "eligibleForCommission" => "boolean",
        "subscriptionsList" => "EmployeeSubscriptionsList",
        "ratesList" => "EmployeeRatesList",
        "addressbookList" => "EmployeeAddressbookList",
        "rolesList" => "EmployeeRolesList",
        "hrEducationList" => "EmployeeHrEducationList",
        "accruedTimeList" => "EmployeeAccruedTimeList",
        "directDepositList" => "EmployeeDirectDepositList",
        "currencyList" => "EmployeeCurrencyList",
        "companyContributionList" => "EmployeeCompanyContributionList",
        "earningList" => "EmployeeEarningList",
        "emergencyContactList" => "EmployeeEmergencyContactList",
        "hcmPositionList" => "EmployeeHcmPositionList",
        "deductionList" => "EmployeeDeductionList",
        "isJobManager" => "boolean",
        "targetUtilization" => "float",
        "bonusTarget" => "float",
        "bonusTargetComment" => "string",
        "bonusTargetType" => "EmployeeBonusTargetType",
        "bonusTargetPayFrequency" => "EmployeeBonusTargetPayFrequency",
        "customFieldList" => "CustomFieldList",
        "internalId" => "string",
        "externalId" => "string",
    );
}
