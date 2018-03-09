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

class SubsidiarySearchRowBasic extends SearchRowBasic {
    public $accountingBook;
    public $accountingBookCurrency;
    public $address1;
    public $address2;
    public $address3;
    public $anonymousCustomerInboundEmail;
    public $anonymousCustomerOnlineForms;
    public $caseAssignmentTemplate;
    public $caseAutomaticClosureTemplate;
    public $caseCopyEmployeeTemplate;
    public $caseCreationTemplate;
    public $caseEscalationTemplate;
    public $caseUpdateTemplate;
    public $city;
    public $companyNameForSupportMessages;
    public $country;
    public $currency;
    public $effectiveFrom;
    public $email;
    public $employeeCaseUpdateTemplate;
    public $externalId;
    public $fax;
    public $internalId;
    public $isElimination;
    public $isInactive;
    public $legalName;
    public $mainSupportEmailAddress;
    public $name;
    public $nameNoHierarchy;
    public $nexus;
    public $phone;
    public $purchaseOrderAmount;
    public $purchaseOrderQuantity;
    public $purchaseOrderQuantityDiff;
    public $receiptAmount;
    public $receiptQuantity;
    public $receiptQuantityDiff;
    public $state;
    public $taxEngine;
    public $taxIdNum;
    public $taxRegistrationNumber;
    public $tranPrefix;
    public $url;
    public $validUntil;
    public $zip;
    public $customFieldList;
    static $paramtypesmap = array(
        "accountingBook" => "SearchColumnSelectField[]",
        "accountingBookCurrency" => "SearchColumnSelectField[]",
        "address1" => "SearchColumnStringField[]",
        "address2" => "SearchColumnStringField[]",
        "address3" => "SearchColumnStringField[]",
        "anonymousCustomerInboundEmail" => "SearchColumnStringField[]",
        "anonymousCustomerOnlineForms" => "SearchColumnStringField[]",
        "caseAssignmentTemplate" => "SearchColumnStringField[]",
        "caseAutomaticClosureTemplate" => "SearchColumnStringField[]",
        "caseCopyEmployeeTemplate" => "SearchColumnStringField[]",
        "caseCreationTemplate" => "SearchColumnStringField[]",
        "caseEscalationTemplate" => "SearchColumnStringField[]",
        "caseUpdateTemplate" => "SearchColumnStringField[]",
        "city" => "SearchColumnStringField[]",
        "companyNameForSupportMessages" => "SearchColumnStringField[]",
        "country" => "SearchColumnEnumSelectField[]",
        "currency" => "SearchColumnSelectField[]",
        "effectiveFrom" => "SearchColumnDateField[]",
        "email" => "SearchColumnStringField[]",
        "employeeCaseUpdateTemplate" => "SearchColumnStringField[]",
        "externalId" => "SearchColumnSelectField[]",
        "fax" => "SearchColumnStringField[]",
        "internalId" => "SearchColumnSelectField[]",
        "isElimination" => "SearchColumnBooleanField[]",
        "isInactive" => "SearchColumnBooleanField[]",
        "legalName" => "SearchColumnStringField[]",
        "mainSupportEmailAddress" => "SearchColumnStringField[]",
        "name" => "SearchColumnStringField[]",
        "nameNoHierarchy" => "SearchColumnStringField[]",
        "nexus" => "SearchColumnSelectField[]",
        "phone" => "SearchColumnStringField[]",
        "purchaseOrderAmount" => "SearchColumnDoubleField[]",
        "purchaseOrderQuantity" => "SearchColumnDoubleField[]",
        "purchaseOrderQuantityDiff" => "SearchColumnDoubleField[]",
        "receiptAmount" => "SearchColumnDoubleField[]",
        "receiptQuantity" => "SearchColumnDoubleField[]",
        "receiptQuantityDiff" => "SearchColumnDoubleField[]",
        "state" => "SearchColumnStringField[]",
        "taxEngine" => "SearchColumnSelectField[]",
        "taxIdNum" => "SearchColumnStringField[]",
        "taxRegistrationNumber" => "SearchColumnStringField[]",
        "tranPrefix" => "SearchColumnStringField[]",
        "url" => "SearchColumnStringField[]",
        "validUntil" => "SearchColumnDateField[]",
        "zip" => "SearchColumnStringField[]",
        "customFieldList" => "SearchColumnCustomFieldList",
    );
}
