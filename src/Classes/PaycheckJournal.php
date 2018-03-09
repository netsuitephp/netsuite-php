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

class PaycheckJournal extends Record {
    public $subsidiary;
    public $currency;
    public $exchangeRate;
    public $createdDate;
    public $lastModifiedDate;
    public $customForm;
    public $tranId;
    public $employee;
    public $tranDate;
    public $postingPeriod;
    public $account;
    public $department;
    public $class;
    public $location;
    public $companyContributionList;
    public $deductionList;
    public $employeeTaxList;
    public $companyTaxList;
    public $earningList;
    public $customFieldList;
    public $internalId;
    public $externalId;
    static $paramtypesmap = array(
        "subsidiary" => "RecordRef",
        "currency" => "RecordRef",
        "exchangeRate" => "float",
        "createdDate" => "dateTime",
        "lastModifiedDate" => "dateTime",
        "customForm" => "RecordRef",
        "tranId" => "string",
        "employee" => "RecordRef",
        "tranDate" => "dateTime",
        "postingPeriod" => "RecordRef",
        "account" => "RecordRef",
        "department" => "RecordRef",
        "class" => "RecordRef",
        "location" => "RecordRef",
        "companyContributionList" => "PaycheckJournalCompanyContributionList",
        "deductionList" => "PaycheckJournalDeductionList",
        "employeeTaxList" => "PaycheckJournalEmployeeTaxList",
        "companyTaxList" => "PaycheckJournalCompanyTaxList",
        "earningList" => "PaycheckJournalEarningList",
        "customFieldList" => "CustomFieldList",
        "internalId" => "string",
        "externalId" => "string",
    );
}
