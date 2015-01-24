<?php namespace Fungku\NetSuite\Classes;

class RevRecScheduleSearchBasic extends SearchRecordBasic {
	public $accountingBook;
	public $amorStatus;
	public $amortizedAmount;
	public $amorType;
	public $amount;
	public $currency;
	public $deferredAmount;
	public $destAcct;
	public $initialAmt;
	public $internalId;
	public $internalIdNumber;
	public $isRecognized;
	public $jeDoc;
	public $name;
	public $pctComplete;
	public $pctRecognition;
	public $periodOffset;
	public $postPeriod;
	public $schedDate;
	public $scheduleNumber;
	public $scheduleNumberText;
	public $sourceAcct;
	public $srcTranPostPeriod;
	public $srcTranType;
	public $startOffset;
	public $templateName;
	public $useForeignAmounts;
	static $paramtypesmap = array(
		"accountingBook" => "SearchMultiSelectField",
		"amorStatus" => "SearchEnumMultiSelectField",
		"amortizedAmount" => "SearchDoubleField",
		"amorType" => "SearchEnumMultiSelectField",
		"amount" => "SearchDoubleField",
		"currency" => "SearchMultiSelectField",
		"deferredAmount" => "SearchDoubleField",
		"destAcct" => "SearchMultiSelectField",
		"initialAmt" => "SearchDoubleField",
		"internalId" => "SearchMultiSelectField",
		"internalIdNumber" => "SearchLongField",
		"isRecognized" => "SearchBooleanField",
		"jeDoc" => "SearchMultiSelectField",
		"name" => "SearchStringField",
		"pctComplete" => "SearchDoubleField",
		"pctRecognition" => "SearchDoubleField",
		"periodOffset" => "SearchLongField",
		"postPeriod" => "SearchMultiSelectField",
		"schedDate" => "SearchDateField",
		"scheduleNumber" => "SearchLongField",
		"scheduleNumberText" => "SearchStringField",
		"sourceAcct" => "SearchMultiSelectField",
		"srcTranPostPeriod" => "SearchMultiSelectField",
		"srcTranType" => "SearchMultiSelectField",
		"startOffset" => "SearchLongField",
		"templateName" => "SearchStringField",
		"useForeignAmounts" => "SearchBooleanField",
	);
}

