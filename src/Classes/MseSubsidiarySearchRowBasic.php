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

class MseSubsidiarySearchRowBasic extends SearchRowBasic {
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $accountingBook;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $accountingBookCurrency;
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
    public $anonymousCustomerInboundEmail;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $anonymousCustomerOnlineForms;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $caseAssignmentTemplate;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $caseAutomaticClosureTemplate;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $caseCopyEmployeeTemplate;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $caseCreationTemplate;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $caseEscalationTemplate;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $caseUpdateTemplate;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $city;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $companyNameForSupportMessages;
    /**
     * @var \NetSuite\Classes\SearchColumnEnumSelectField[]
     */
    public $country;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $currency;
    /**
     * @var \NetSuite\Classes\SearchColumnDateField[]
     */
    public $effectiveFrom;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $email;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $employeeCaseUpdateTemplate;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $externalId;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $fax;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $internalId;
    /**
     * @var \NetSuite\Classes\SearchColumnBooleanField[]
     */
    public $isElimination;
    /**
     * @var \NetSuite\Classes\SearchColumnBooleanField[]
     */
    public $isInactive;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $legalName;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $mainSupportEmailAddress;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $name;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $nameNoHierarchy;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $nexus;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $phone;
    /**
     * @var \NetSuite\Classes\SearchColumnBooleanField[]
     */
    public $primary;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $purchaseOrderAmount;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $purchaseOrderQuantity;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $purchaseOrderQuantityDiff;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $receiptAmount;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $receiptQuantity;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $receiptQuantityDiff;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $state;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $taxEngine;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $taxIdNum;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $taxRegistrationNumber;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $tranPrefix;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $url;
    /**
     * @var \NetSuite\Classes\SearchColumnDateField[]
     */
    public $validUntil;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $zip;
    /**
     * @var \NetSuite\Classes\SearchColumnCustomFieldList
     */
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
        "primary" => "SearchColumnBooleanField[]",
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
