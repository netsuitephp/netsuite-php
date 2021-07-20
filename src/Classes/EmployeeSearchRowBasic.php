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

class EmployeeSearchRowBasic extends SearchRowBasic {
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $accountNumber;
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
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $alienNumber;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $allocation;
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
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $approvalLimit;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $approver;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $attention;
    /**
     * @var \NetSuite\Classes\SearchColumnDateField[]
     */
    public $authWorkDate;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $baseWage;
    /**
     * @var \NetSuite\Classes\SearchEnumMultiSelectField[]
     */
    public $baseWageType;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $billAddress;
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
    public $billingClass;
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
    public $birthDate;
    /**
     * @var \NetSuite\Classes\SearchColumnDateField[]
     */
    public $birthDay;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $bonusTarget;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $bonusTargetComment;
    /**
     * @var \NetSuite\Classes\SearchColumnEnumSelectField[]
     */
    public $bonusTargetPayFrequency;
    /**
     * @var \NetSuite\Classes\SearchColumnEnumSelectField[]
     */
    public $bonusTargetType;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $city;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $class;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $comments;
    /**
     * @var \NetSuite\Classes\SearchColumnEnumSelectField[]
     */
    public $compensationCurrency;
    /**
     * @var \NetSuite\Classes\SearchColumnBooleanField[]
     */
    public $concurrentWebServicesUser;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $corporateCardProfile;
    /**
     * @var \NetSuite\Classes\SearchColumnEnumSelectField[]
     */
    public $country;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $countryCode;
    /**
     * @var \NetSuite\Classes\SearchColumnDateField[]
     */
    public $dateCreated;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $defaultAcctCorpCardExp;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $defaultExpenseReportCurrency;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $defaultTaxReg;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $department;
    /**
     * @var \NetSuite\Classes\SearchColumnBooleanField[]
     */
    public $eligibleForCommission;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $email;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $embossedName;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $employeeStatus;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $employeeType;
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
    public $ethnicity;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $expenseLimit;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $expenseReportCurrency;
    /**
     * @var \NetSuite\Classes\SearchColumnDateField[]
     */
    public $expiration;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $externalId;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $fax;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $firstName;
    /**
     * @var \NetSuite\Classes\SearchColumnEnumSelectField[]
     */
    public $gender;
    /**
     * @var \NetSuite\Classes\SearchColumnBooleanField[]
     */
    public $giveAccess;
    /**
     * @var \NetSuite\Classes\SearchColumnEnumSelectField[]
     */
    public $globalSubscriptionStatus;
    /**
     * @var \NetSuite\Classes\SearchColumnDateField[]
     */
    public $hireDate;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $homePhone;
    /**
     * @var \NetSuite\Classes\SearchColumnBooleanField[]
     */
    public $i9Verified;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $image;
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
    public $isInactive;
    /**
     * @var \NetSuite\Classes\SearchColumnBooleanField[]
     */
    public $isJobManager;
    /**
     * @var \NetSuite\Classes\SearchColumnBooleanField[]
     */
    public $isJobResource;
    /**
     * @var \NetSuite\Classes\SearchColumnBooleanField[]
     */
    public $isSalesRep;
    /**
     * @var \NetSuite\Classes\SearchColumnBooleanField[]
     */
    public $isSupportRep;
    /**
     * @var \NetSuite\Classes\SearchColumnBooleanField[]
     */
    public $isTemplate;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $job;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $laborCost;
    /**
     * @var \NetSuite\Classes\SearchColumnEnumSelectField[]
     */
    public $language;
    /**
     * @var \NetSuite\Classes\SearchColumnDateField[]
     */
    public $lastModifiedDate;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $lastName;
    /**
     * @var \NetSuite\Classes\SearchColumnDateField[]
     */
    public $lastPaidDate;
    /**
     * @var \NetSuite\Classes\SearchColumnDateField[]
     */
    public $lastReviewDate;
    /**
     * @var \NetSuite\Classes\SearchColumnEnumSelectField[]
     */
    public $level;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $location;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $maritalStatus;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $middleName;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $mobilePhone;
    /**
     * @var \NetSuite\Classes\SearchColumnDateField[]
     */
    public $nextReviewDate;
    /**
     * @var \NetSuite\Classes\SearchColumnBooleanField[]
     */
    public $offlineAccess;
    /**
     * @var \NetSuite\Classes\SearchColumnEnumSelectField[]
     */
    public $payFrequency;
    /**
     * @var \NetSuite\Classes\SearchColumnDateField[]
     */
    public $permChangeDate;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $permChangeLevel;
    /**
     * @var \NetSuite\Classes\SearchColumnEnumSelectField[]
     */
    public $permission;
    /**
     * @var \NetSuite\Classes\SearchColumnEnumSelectField[]
     */
    public $permissionChange;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $phone;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $phoneticName;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $positionTitle;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $primaryEarningAmount;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $primaryEarningItem;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $primaryEarningType;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $purchaseOrderApprovalLimit;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $purchaseOrderApprover;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $purchaseOrderLimit;
    /**
     * @var \NetSuite\Classes\SearchColumnDateField[]
     */
    public $releaseDate;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $residentStatus;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $role;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $roleChange;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $roleChangeAction;
    /**
     * @var \NetSuite\Classes\SearchColumnDateField[]
     */
    public $roleChangeDate;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $salesRole;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $salutation;
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
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $socialSecurityNumber;
    /**
     * @var \NetSuite\Classes\SearchColumnDateField[]
     */
    public $startDateTimeOffCalc;
    /**
     * @var \NetSuite\Classes\SearchColumnEnumSelectField[]
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
    public $supervisor;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $targetUtilization;
    /**
     * @var \NetSuite\Classes\SearchColumnEnumSelectField[]
     */
    public $terminationCategory;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $terminationDetails;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $terminationReason;
    /**
     * @var \NetSuite\Classes\SearchColumnEnumSelectField[]
     */
    public $terminationRegretted;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $timeApprover;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $timeOffPlan;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $title;
    /**
     * @var \NetSuite\Classes\SearchColumnBooleanField[]
     */
    public $usePerquest;
    /**
     * @var \NetSuite\Classes\SearchColumnBooleanField[]
     */
    public $useTimeData;
    /**
     * @var \NetSuite\Classes\SearchColumnDateField[]
     */
    public $visaExpDate;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $visaType;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $workCalendar;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $workplace;
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
        "address" => "SearchColumnStringField[]",
        "address1" => "SearchColumnStringField[]",
        "address2" => "SearchColumnStringField[]",
        "address3" => "SearchColumnStringField[]",
        "addressee" => "SearchColumnStringField[]",
        "addressInternalId" => "SearchColumnStringField[]",
        "addressLabel" => "SearchColumnStringField[]",
        "addressPhone" => "SearchColumnStringField[]",
        "alienNumber" => "SearchColumnStringField[]",
        "allocation" => "SearchColumnDoubleField[]",
        "altEmail" => "SearchColumnStringField[]",
        "altName" => "SearchColumnStringField[]",
        "altPhone" => "SearchColumnStringField[]",
        "approvalLimit" => "SearchColumnDoubleField[]",
        "approver" => "SearchColumnSelectField[]",
        "attention" => "SearchColumnStringField[]",
        "authWorkDate" => "SearchColumnDateField[]",
        "baseWage" => "SearchColumnDoubleField[]",
        "baseWageType" => "SearchEnumMultiSelectField[]",
        "billAddress" => "SearchColumnStringField[]",
        "billAddress1" => "SearchColumnStringField[]",
        "billAddress2" => "SearchColumnStringField[]",
        "billAddress3" => "SearchColumnStringField[]",
        "billAddressee" => "SearchColumnStringField[]",
        "billAttention" => "SearchColumnStringField[]",
        "billCity" => "SearchColumnStringField[]",
        "billCountry" => "SearchColumnEnumSelectField[]",
        "billCountryCode" => "SearchColumnStringField[]",
        "billingClass" => "SearchColumnSelectField[]",
        "billPhone" => "SearchColumnStringField[]",
        "billState" => "SearchColumnStringField[]",
        "billZipCode" => "SearchColumnStringField[]",
        "birthDate" => "SearchColumnDateField[]",
        "birthDay" => "SearchColumnDateField[]",
        "bonusTarget" => "SearchColumnDoubleField[]",
        "bonusTargetComment" => "SearchColumnStringField[]",
        "bonusTargetPayFrequency" => "SearchColumnEnumSelectField[]",
        "bonusTargetType" => "SearchColumnEnumSelectField[]",
        "city" => "SearchColumnStringField[]",
        "class" => "SearchColumnSelectField[]",
        "comments" => "SearchColumnStringField[]",
        "compensationCurrency" => "SearchColumnEnumSelectField[]",
        "concurrentWebServicesUser" => "SearchColumnBooleanField[]",
        "corporateCardProfile" => "SearchColumnSelectField[]",
        "country" => "SearchColumnEnumSelectField[]",
        "countryCode" => "SearchColumnStringField[]",
        "dateCreated" => "SearchColumnDateField[]",
        "defaultAcctCorpCardExp" => "SearchColumnSelectField[]",
        "defaultExpenseReportCurrency" => "SearchColumnSelectField[]",
        "defaultTaxReg" => "SearchColumnStringField[]",
        "department" => "SearchColumnSelectField[]",
        "eligibleForCommission" => "SearchColumnBooleanField[]",
        "email" => "SearchColumnStringField[]",
        "embossedName" => "SearchColumnStringField[]",
        "employeeStatus" => "SearchColumnSelectField[]",
        "employeeType" => "SearchColumnSelectField[]",
        "entityId" => "SearchColumnStringField[]",
        "entityNumber" => "SearchColumnLongField[]",
        "ethnicity" => "SearchColumnSelectField[]",
        "expenseLimit" => "SearchColumnDoubleField[]",
        "expenseReportCurrency" => "SearchColumnSelectField[]",
        "expiration" => "SearchColumnDateField[]",
        "externalId" => "SearchColumnSelectField[]",
        "fax" => "SearchColumnStringField[]",
        "firstName" => "SearchColumnStringField[]",
        "gender" => "SearchColumnEnumSelectField[]",
        "giveAccess" => "SearchColumnBooleanField[]",
        "globalSubscriptionStatus" => "SearchColumnEnumSelectField[]",
        "hireDate" => "SearchColumnDateField[]",
        "homePhone" => "SearchColumnStringField[]",
        "i9Verified" => "SearchColumnBooleanField[]",
        "image" => "SearchColumnSelectField[]",
        "internalId" => "SearchColumnSelectField[]",
        "isDefaultBilling" => "SearchColumnBooleanField[]",
        "isDefaultShipping" => "SearchColumnBooleanField[]",
        "isInactive" => "SearchColumnBooleanField[]",
        "isJobManager" => "SearchColumnBooleanField[]",
        "isJobResource" => "SearchColumnBooleanField[]",
        "isSalesRep" => "SearchColumnBooleanField[]",
        "isSupportRep" => "SearchColumnBooleanField[]",
        "isTemplate" => "SearchColumnBooleanField[]",
        "job" => "SearchColumnSelectField[]",
        "laborCost" => "SearchColumnDoubleField[]",
        "language" => "SearchColumnEnumSelectField[]",
        "lastModifiedDate" => "SearchColumnDateField[]",
        "lastName" => "SearchColumnStringField[]",
        "lastPaidDate" => "SearchColumnDateField[]",
        "lastReviewDate" => "SearchColumnDateField[]",
        "level" => "SearchColumnEnumSelectField[]",
        "location" => "SearchColumnSelectField[]",
        "maritalStatus" => "SearchColumnSelectField[]",
        "middleName" => "SearchColumnStringField[]",
        "mobilePhone" => "SearchColumnStringField[]",
        "nextReviewDate" => "SearchColumnDateField[]",
        "offlineAccess" => "SearchColumnBooleanField[]",
        "payFrequency" => "SearchColumnEnumSelectField[]",
        "permChangeDate" => "SearchColumnDateField[]",
        "permChangeLevel" => "SearchColumnStringField[]",
        "permission" => "SearchColumnEnumSelectField[]",
        "permissionChange" => "SearchColumnEnumSelectField[]",
        "phone" => "SearchColumnStringField[]",
        "phoneticName" => "SearchColumnStringField[]",
        "positionTitle" => "SearchColumnStringField[]",
        "primaryEarningAmount" => "SearchColumnDoubleField[]",
        "primaryEarningItem" => "SearchColumnStringField[]",
        "primaryEarningType" => "SearchColumnStringField[]",
        "purchaseOrderApprovalLimit" => "SearchColumnDoubleField[]",
        "purchaseOrderApprover" => "SearchColumnSelectField[]",
        "purchaseOrderLimit" => "SearchColumnDoubleField[]",
        "releaseDate" => "SearchColumnDateField[]",
        "residentStatus" => "SearchColumnSelectField[]",
        "role" => "SearchColumnSelectField[]",
        "roleChange" => "SearchColumnStringField[]",
        "roleChangeAction" => "SearchColumnStringField[]",
        "roleChangeDate" => "SearchColumnDateField[]",
        "salesRole" => "SearchColumnSelectField[]",
        "salutation" => "SearchColumnStringField[]",
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
        "socialSecurityNumber" => "SearchColumnStringField[]",
        "startDateTimeOffCalc" => "SearchColumnDateField[]",
        "state" => "SearchColumnEnumSelectField[]",
        "subscription" => "SearchColumnSelectField[]",
        "subscriptionDate" => "SearchColumnDateField[]",
        "subscriptionStatus" => "SearchColumnBooleanField[]",
        "subsidiary" => "SearchColumnSelectField[]",
        "supervisor" => "SearchColumnSelectField[]",
        "targetUtilization" => "SearchColumnDoubleField[]",
        "terminationCategory" => "SearchColumnEnumSelectField[]",
        "terminationDetails" => "SearchColumnStringField[]",
        "terminationReason" => "SearchColumnSelectField[]",
        "terminationRegretted" => "SearchColumnEnumSelectField[]",
        "timeApprover" => "SearchColumnSelectField[]",
        "timeOffPlan" => "SearchColumnStringField[]",
        "title" => "SearchColumnStringField[]",
        "usePerquest" => "SearchColumnBooleanField[]",
        "useTimeData" => "SearchColumnBooleanField[]",
        "visaExpDate" => "SearchColumnDateField[]",
        "visaType" => "SearchColumnSelectField[]",
        "workCalendar" => "SearchColumnStringField[]",
        "workplace" => "SearchColumnSelectField[]",
        "zipCode" => "SearchColumnStringField[]",
        "customFieldList" => "SearchColumnCustomFieldList",
    );
}
