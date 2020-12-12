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

class EmployeeSearchBasic extends SearchRecordBasic {
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
     * @var \NetSuite\Classes\SearchStringField
     */
    public $alienNumber;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $allocation;
    /**
     * @var \NetSuite\Classes\SearchDateField
     */
    public $anniversary;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $approvalLimit;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $approver;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $attention;
    /**
     * @var \NetSuite\Classes\SearchDateField
     */
    public $authWorkDate;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $baseWage;
    /**
     * @var \NetSuite\Classes\SearchEnumMultiSelectField
     */
    public $baseWageType;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $billAddress;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $billingClass;
    /**
     * @var \NetSuite\Classes\SearchDateField
     */
    public $birthDate;
    /**
     * @var \NetSuite\Classes\SearchDateField
     */
    public $birthDay;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $bonusTarget;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $bonusTargetComment;
    /**
     * @var \NetSuite\Classes\SearchEnumMultiSelectField
     */
    public $bonusTargetPayFrequency;
    /**
     * @var \NetSuite\Classes\SearchEnumMultiSelectField
     */
    public $bonusTargetType;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $cContribution;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $city;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $class;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $comments;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $commissionPlan;
    /**
     * @var \NetSuite\Classes\SearchEnumMultiSelectField
     */
    public $compensationCurrency;
    /**
     * @var \NetSuite\Classes\SearchBooleanField
     */
    public $concurrentWebServicesUser;
    /**
     * @var \NetSuite\Classes\SearchEnumMultiSelectField
     */
    public $country;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $county;
    /**
     * @var \NetSuite\Classes\SearchDateField
     */
    public $dateCreated;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $deduction;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $defaultAcctCorpCardExp;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $defaultExpenseReportCurrency;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $defaultTaxReg;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $defaultTaxRegText;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $department;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $earning;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $education;
    /**
     * @var \NetSuite\Classes\SearchBooleanField
     */
    public $eligibleForCommission;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $email;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $employeeStatus;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $employeeType;
    /**
     * @var \NetSuite\Classes\SearchBooleanField
     */
    public $employeeTypeKpi;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $entityId;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $ethnicity;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $expenseLimit;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $expenseReportCurrency;
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
     * @var \NetSuite\Classes\SearchStringField
     */
    public $firstName;
    /**
     * @var \NetSuite\Classes\SearchEnumMultiSelectField
     */
    public $gender;
    /**
     * @var \NetSuite\Classes\SearchBooleanField
     */
    public $giveAccess;
    /**
     * @var \NetSuite\Classes\SearchEnumMultiSelectField
     */
    public $globalSubscriptionStatus;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $group;
    /**
     * @var \NetSuite\Classes\SearchDateField
     */
    public $hireDate;
    /**
     * @var \NetSuite\Classes\SearchBooleanField
     */
    public $I9Verified;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $image;
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
    public $isInactive;
    /**
     * @var \NetSuite\Classes\SearchBooleanField
     */
    public $isJobManager;
    /**
     * @var \NetSuite\Classes\SearchBooleanField
     */
    public $isJobResource;
    /**
     * @var \NetSuite\Classes\SearchBooleanField
     */
    public $isTemplate;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $job;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $jobDescription;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $laborCost;
    /**
     * @var \NetSuite\Classes\SearchEnumMultiSelectField
     */
    public $language;
    /**
     * @var \NetSuite\Classes\SearchDateField
     */
    public $lastModifiedDate;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $lastName;
    /**
     * @var \NetSuite\Classes\SearchDateField
     */
    public $lastPaidDate;
    /**
     * @var \NetSuite\Classes\SearchDateField
     */
    public $lastReviewDate;
    /**
     * @var \NetSuite\Classes\SearchEnumMultiSelectField
     */
    public $level;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $location;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $maritalStatus;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $middleName;
    /**
     * @var \NetSuite\Classes\SearchDateField
     */
    public $nextReviewDate;
    /**
     * @var \NetSuite\Classes\SearchBooleanField
     */
    public $offlineAccess;
    /**
     * @var \NetSuite\Classes\SearchEnumMultiSelectField
     */
    public $payFrequency;
    /**
     * @var \NetSuite\Classes\SearchDateField
     */
    public $permChangeDate;
    /**
     * @var \NetSuite\Classes\SearchEnumMultiSelectField
     */
    public $permission;
    /**
     * @var \NetSuite\Classes\SearchEnumMultiSelectField
     */
    public $permissionChange;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $phone;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $phoneticName;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $positionTitle;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $primaryEarningAmount;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $primaryEarningItem;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $primaryEarningType;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $purchaseOrderApprovalLimit;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $purchaseOrderApprover;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $purchaseOrderLimit;
    /**
     * @var \NetSuite\Classes\SearchDateField
     */
    public $releaseDate;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $residentStatus;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $role;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $roleChange;
    /**
     * @var \NetSuite\Classes\SearchDateField
     */
    public $roleChangeDate;
    /**
     * @var \NetSuite\Classes\SearchBooleanField
     */
    public $salesRep;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $salesRole;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $salutation;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $socialSecurityNumber;
    /**
     * @var \NetSuite\Classes\SearchDateField
     */
    public $startDateTimeOffCalc;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $state;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $subsidiary;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $supervisor;
    /**
     * @var \NetSuite\Classes\SearchBooleanField
     */
    public $supportRep;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $targetUtilization;
    /**
     * @var \NetSuite\Classes\SearchEnumMultiSelectField
     */
    public $terminationCategory;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $terminationDetails;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $terminationReason;
    /**
     * @var \NetSuite\Classes\SearchEnumMultiSelectField
     */
    public $terminationRegretted;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $timeApprover;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $timeOffPlan;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $title;
    /**
     * @var \NetSuite\Classes\SearchBooleanField
     */
    public $usePerquest;
    /**
     * @var \NetSuite\Classes\SearchBooleanField
     */
    public $useTimeData;
    /**
     * @var \NetSuite\Classes\SearchDateField
     */
    public $visaExpDate;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $visaType;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $withholding;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $workCalendar;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $workplace;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $zipCode;
    /**
     * @var \NetSuite\Classes\SearchCustomFieldList
     */
    public $customFieldList;
    static $paramtypesmap = array(
        "address" => "SearchStringField",
        "addressee" => "SearchStringField",
        "addressLabel" => "SearchStringField",
        "addressPhone" => "SearchStringField",
        "alienNumber" => "SearchStringField",
        "allocation" => "SearchDoubleField",
        "anniversary" => "SearchDateField",
        "approvalLimit" => "SearchDoubleField",
        "approver" => "SearchMultiSelectField",
        "attention" => "SearchStringField",
        "authWorkDate" => "SearchDateField",
        "baseWage" => "SearchDoubleField",
        "baseWageType" => "SearchEnumMultiSelectField",
        "billAddress" => "SearchStringField",
        "billingClass" => "SearchMultiSelectField",
        "birthDate" => "SearchDateField",
        "birthDay" => "SearchDateField",
        "bonusTarget" => "SearchDoubleField",
        "bonusTargetComment" => "SearchStringField",
        "bonusTargetPayFrequency" => "SearchEnumMultiSelectField",
        "bonusTargetType" => "SearchEnumMultiSelectField",
        "cContribution" => "SearchMultiSelectField",
        "city" => "SearchStringField",
        "class" => "SearchMultiSelectField",
        "comments" => "SearchStringField",
        "commissionPlan" => "SearchMultiSelectField",
        "compensationCurrency" => "SearchEnumMultiSelectField",
        "concurrentWebServicesUser" => "SearchBooleanField",
        "country" => "SearchEnumMultiSelectField",
        "county" => "SearchStringField",
        "dateCreated" => "SearchDateField",
        "deduction" => "SearchMultiSelectField",
        "defaultAcctCorpCardExp" => "SearchMultiSelectField",
        "defaultExpenseReportCurrency" => "SearchMultiSelectField",
        "defaultTaxReg" => "SearchMultiSelectField",
        "defaultTaxRegText" => "SearchStringField",
        "department" => "SearchMultiSelectField",
        "earning" => "SearchMultiSelectField",
        "education" => "SearchMultiSelectField",
        "eligibleForCommission" => "SearchBooleanField",
        "email" => "SearchStringField",
        "employeeStatus" => "SearchMultiSelectField",
        "employeeType" => "SearchMultiSelectField",
        "employeeTypeKpi" => "SearchBooleanField",
        "entityId" => "SearchStringField",
        "ethnicity" => "SearchMultiSelectField",
        "expenseLimit" => "SearchDoubleField",
        "expenseReportCurrency" => "SearchMultiSelectField",
        "externalId" => "SearchMultiSelectField",
        "externalIdString" => "SearchStringField",
        "fax" => "SearchStringField",
        "firstName" => "SearchStringField",
        "gender" => "SearchEnumMultiSelectField",
        "giveAccess" => "SearchBooleanField",
        "globalSubscriptionStatus" => "SearchEnumMultiSelectField",
        "group" => "SearchMultiSelectField",
        "hireDate" => "SearchDateField",
        "I9Verified" => "SearchBooleanField",
        "image" => "SearchStringField",
        "internalId" => "SearchMultiSelectField",
        "internalIdNumber" => "SearchLongField",
        "isDefaultBilling" => "SearchBooleanField",
        "isDefaultShipping" => "SearchBooleanField",
        "isInactive" => "SearchBooleanField",
        "isJobManager" => "SearchBooleanField",
        "isJobResource" => "SearchBooleanField",
        "isTemplate" => "SearchBooleanField",
        "job" => "SearchMultiSelectField",
        "jobDescription" => "SearchStringField",
        "laborCost" => "SearchDoubleField",
        "language" => "SearchEnumMultiSelectField",
        "lastModifiedDate" => "SearchDateField",
        "lastName" => "SearchStringField",
        "lastPaidDate" => "SearchDateField",
        "lastReviewDate" => "SearchDateField",
        "level" => "SearchEnumMultiSelectField",
        "location" => "SearchMultiSelectField",
        "maritalStatus" => "SearchMultiSelectField",
        "middleName" => "SearchStringField",
        "nextReviewDate" => "SearchDateField",
        "offlineAccess" => "SearchBooleanField",
        "payFrequency" => "SearchEnumMultiSelectField",
        "permChangeDate" => "SearchDateField",
        "permission" => "SearchEnumMultiSelectField",
        "permissionChange" => "SearchEnumMultiSelectField",
        "phone" => "SearchStringField",
        "phoneticName" => "SearchStringField",
        "positionTitle" => "SearchMultiSelectField",
        "primaryEarningAmount" => "SearchDoubleField",
        "primaryEarningItem" => "SearchStringField",
        "primaryEarningType" => "SearchStringField",
        "purchaseOrderApprovalLimit" => "SearchDoubleField",
        "purchaseOrderApprover" => "SearchMultiSelectField",
        "purchaseOrderLimit" => "SearchDoubleField",
        "releaseDate" => "SearchDateField",
        "residentStatus" => "SearchMultiSelectField",
        "role" => "SearchMultiSelectField",
        "roleChange" => "SearchMultiSelectField",
        "roleChangeDate" => "SearchDateField",
        "salesRep" => "SearchBooleanField",
        "salesRole" => "SearchMultiSelectField",
        "salutation" => "SearchStringField",
        "socialSecurityNumber" => "SearchStringField",
        "startDateTimeOffCalc" => "SearchDateField",
        "state" => "SearchStringField",
        "subsidiary" => "SearchMultiSelectField",
        "supervisor" => "SearchMultiSelectField",
        "supportRep" => "SearchBooleanField",
        "targetUtilization" => "SearchDoubleField",
        "terminationCategory" => "SearchEnumMultiSelectField",
        "terminationDetails" => "SearchStringField",
        "terminationReason" => "SearchMultiSelectField",
        "terminationRegretted" => "SearchEnumMultiSelectField",
        "timeApprover" => "SearchMultiSelectField",
        "timeOffPlan" => "SearchMultiSelectField",
        "title" => "SearchStringField",
        "usePerquest" => "SearchBooleanField",
        "useTimeData" => "SearchBooleanField",
        "visaExpDate" => "SearchDateField",
        "visaType" => "SearchMultiSelectField",
        "withholding" => "SearchMultiSelectField",
        "workCalendar" => "SearchMultiSelectField",
        "workplace" => "SearchMultiSelectField",
        "zipCode" => "SearchStringField",
        "customFieldList" => "SearchCustomFieldList",
    );
}
