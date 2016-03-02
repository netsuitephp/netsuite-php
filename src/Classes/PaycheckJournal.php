<?php

namespace Fungku\NetSuite\Classes;

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

