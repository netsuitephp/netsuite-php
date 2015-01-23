<?php

class InterCompanyJournalEntryLine {
	public $lineSubsidiary;
	public $account;
	public $debit;
	public $credit;
	public $taxCode;
	public $memo;
	public $taxRate1;
	public $entity;
	public $grossAmt;
	public $schedule;
	public $department;
	public $startDate;
	public $class;
	public $endDate;
	public $location;
	public $eliminate;
	public $residual;
	public $amortizationSched;
	public $scheduleNum;
	public $amortizStartDate;
	public $amortizationEndDate;
	public $amortizationResidual;
	public $tax1Amt;
	public $tax1Acct;
	public $customFieldList;
	static $paramtypesmap = array(
		"lineSubsidiary" => "RecordRef",
		"account" => "RecordRef",
		"debit" => "float",
		"credit" => "float",
		"taxCode" => "RecordRef",
		"memo" => "string",
		"taxRate1" => "float",
		"entity" => "RecordRef",
		"grossAmt" => "float",
		"schedule" => "RecordRef",
		"department" => "RecordRef",
		"startDate" => "dateTime",
		"class" => "RecordRef",
		"endDate" => "dateTime",
		"location" => "RecordRef",
		"eliminate" => "boolean",
		"residual" => "string",
		"amortizationSched" => "RecordRef",
		"scheduleNum" => "RecordRef",
		"amortizStartDate" => "dateTime",
		"amortizationEndDate" => "dateTime",
		"amortizationResidual" => "string",
		"tax1Amt" => "float",
		"tax1Acct" => "RecordRef",
		"customFieldList" => "CustomFieldList",
	);
}

