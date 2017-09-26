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

class EmployeeSearchBasic extends SearchRecordBasic {
    public $address;
    public $addressee;
    public $addressLabel;
    public $addressPhone;
    public $alienNumber;
    public $allocation;
    public $anniversary;
    public $approvalLimit;
    public $approver;
    public $attention;
    public $authWorkDate;
    public $billAddress;
    public $billingClass;
    public $birthDate;
    public $birthDay;
    public $cContribution;
    public $city;
    public $class;
    public $comments;
    public $commissionPlan;
    public $concurrentWebServicesUser;
    public $country;
    public $county;
    public $dateCreated;
    public $deduction;
    public $department;
    public $earning;
    public $education;
    public $eligibleForCommission;
    public $email;
    public $employeeStatus;
    public $employeeType;
    public $employeeTypeKpi;
    public $entityId;
    public $ethnicity;
    public $expenseLimit;
    public $externalId;
    public $externalIdString;
    public $fax;
    public $firstName;
    public $gender;
    public $giveAccess;
    public $globalSubscriptionStatus;
    public $group;
    public $hireDate;
    public $I9Verified;
    public $image;
    public $internalId;
    public $internalIdNumber;
    public $isDefaultBilling;
    public $isDefaultShipping;
    public $isInactive;
    public $isJobResource;
    public $isTemplate;
    public $job;
    public $jobDescription;
    public $laborCost;
    public $language;
    public $lastModifiedDate;
    public $lastName;
    public $lastPaidDate;
    public $lastReviewDate;
    public $level;
    public $location;
    public $maritalStatus;
    public $middleName;
    public $nextReviewDate;
    public $offlineAccess;
    public $payFrequency;
    public $permChangeDate;
    public $permission;
    public $permissionChange;
    public $phone;
    public $phoneticName;
    public $positionTitle;
    public $primaryEarningAmount;
    public $primaryEarningItem;
    public $primaryEarningType;
    public $purchaseOrderApprovalLimit;
    public $purchaseOrderApprover;
    public $purchaseOrderLimit;
    public $releaseDate;
    public $residentStatus;
    public $role;
    public $roleChange;
    public $roleChangeDate;
    public $salesRep;
    public $salesRole;
    public $salutation;
    public $socialSecurityNumber;
    public $startDateTimeOffCalc;
    public $state;
    public $subsidiary;
    public $supervisor;
    public $supportRep;
    public $timeApprover;
    public $timeOffPlan;
    public $title;
    public $usePerquest;
    public $useTimeData;
    public $visaExpDate;
    public $visaType;
    public $withholding;
    public $workCalendar;
    public $workplace;
    public $zipCode;
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
        "billAddress" => "SearchStringField",
        "billingClass" => "SearchMultiSelectField",
        "birthDate" => "SearchDateField",
        "birthDay" => "SearchDateField",
        "cContribution" => "SearchMultiSelectField",
        "city" => "SearchStringField",
        "class" => "SearchMultiSelectField",
        "comments" => "SearchStringField",
        "commissionPlan" => "SearchMultiSelectField",
        "concurrentWebServicesUser" => "SearchBooleanField",
        "country" => "SearchEnumMultiSelectField",
        "county" => "SearchStringField",
        "dateCreated" => "SearchDateField",
        "deduction" => "SearchMultiSelectField",
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
