<?php

namespace Fungku\NetSuite\Classes;

class JournalEntryLine {
	public $account;
	public $line;
	public $debit;
	public $credit;
	public $taxCode;
	public $memo;
	public $taxRate1;
	public $entity;
	public $grossAmt;
	public $department;
	public $class;
	public $location;
	public $revenueRecognitionRule;
	public $eliminate;
	public $schedule;
	public $startDate;
	public $endDate;
	public $residual;
	public $scheduleNum;
	public $tax1Amt;
	public $tax1Acct;
	public $customFieldList;
	static $paramtypesmap = array(
		"account" => "RecordRef",
		"line" => "integer",
		"debit" => "float",
		"credit" => "float",
		"taxCode" => "RecordRef",
		"memo" => "string",
		"taxRate1" => "float",
		"entity" => "RecordRef",
		"grossAmt" => "float",
		"department" => "RecordRef",
		"class" => "RecordRef",
		"location" => "RecordRef",
		"revenueRecognitionRule" => "RecordRef",
		"eliminate" => "boolean",
		"schedule" => "RecordRef",
		"startDate" => "dateTime",
		"endDate" => "dateTime",
		"residual" => "string",
		"scheduleNum" => "RecordRef",
		"tax1Amt" => "float",
		"tax1Acct" => "RecordRef",
		"customFieldList" => "CustomFieldList",
	);
}

