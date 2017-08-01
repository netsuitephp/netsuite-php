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

class Employee extends Record {
    public $customForm;
    public $template;
    public $entityId;
    public $salutation;
    public $firstName;
    public $middleName;
    public $lastName;
    public $altName;
    public $phone;
    public $fax;
    public $email;
    public $defaultAddress;
    public $isInactive;
    public $phoneticName;
    public $lastModifiedDate;
    public $dateCreated;
    public $initials;
    public $officePhone;
    public $homePhone;
    public $mobilePhone;
    public $department;
    public $class;
    public $location;
    public $subsidiary;
    public $billingClass;
    public $accountNumber;
    public $comments;
    public $globalSubscriptionStatus;
    public $image;
    public $payFrequency;
    public $lastPaidDate;
    public $currency;
    public $useTimeData;
    public $usePerquest;
    public $workplace;
    public $adpId;
    public $directDeposit;
    public $expenseLimit;
    public $purchaseOrderLimit;
    public $purchaseOrderApprovalLimit;
    public $socialSecurityNumber;
    public $supervisor;
    public $approver;
    public $approvalLimit;
    public $timeApprover;
    public $employeeType;
    public $isSalesRep;
    public $salesRole;
    public $isSupportRep;
    public $isJobResource;
    public $laborCost;
    public $birthDate;
    public $hireDate;
    public $releaseDate;
    public $timeOffPlan;
    public $lastReviewDate;
    public $nextReviewDate;
    public $title;
    public $employeeStatus;
    public $jobDescription;
    public $workAssignment;
    public $job;
    public $maritalStatus;
    public $ethnicity;
    public $gender;
    public $purchaseOrderApprover;
    public $workCalendar;
    public $giveAccess;
    public $concurrentWebServicesUser;
    public $sendEmail;
    public $hasOfflineAccess;
    public $password;
    public $password2;
    public $requirePwdChange;
    public $inheritIPRules;
    public $IPAddressRule;
    public $startDateTimeOffCalc;
    public $commissionPaymentPreference;
    public $billPay;
    public $eligibleForCommission;
    public $subscriptionsList;
    public $ratesList;
    public $addressbookList;
    public $rolesList;
    public $hrEducationList;
    public $accruedTimeList;
    public $directDepositList;
    public $companyContributionList;
    public $earningList;
    public $emergencyContactList;
    public $hcmPositionList;
    public $deductionList;
    public $customFieldList;
    public $internalId;
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
        "eligibleForCommission" => "boolean",
        "subscriptionsList" => "EmployeeSubscriptionsList",
        "ratesList" => "EmployeeRatesList",
        "addressbookList" => "EmployeeAddressbookList",
        "rolesList" => "EmployeeRolesList",
        "hrEducationList" => "EmployeeHrEducationList",
        "accruedTimeList" => "EmployeeAccruedTimeList",
        "directDepositList" => "EmployeeDirectDepositList",
        "companyContributionList" => "EmployeeCompanyContributionList",
        "earningList" => "EmployeeEarningList",
        "emergencyContactList" => "EmployeeEmergencyContactList",
        "hcmPositionList" => "EmployeeHcmPositionList",
        "deductionList" => "EmployeeDeductionList",
        "customFieldList" => "CustomFieldList",
        "internalId" => "string",
        "externalId" => "string",
    );
}
