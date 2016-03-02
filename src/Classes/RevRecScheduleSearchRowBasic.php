<?php

namespace Fungku\NetSuite\Classes;

class RevRecScheduleSearchRowBasic extends SearchRowBasic {
	public $accountingBook;
	public $amorStatus;
	public $amorTemplate;
	public $amortizedAmount;
	public $amorType;
	public $amount;
	public $currency;
	public $deferredAmount;
	public $destAcct;
	public $initialAmt;
	public $internalId;
	public $isRecognized;
	public $jeDoc;
	public $lineSequenceNumber;
	public $name;
	public $nameUrl;
	public $pctComplete;
	public $pctRecognition;
	public $periodOffset;
	public $recurAmount;
	public $recurFxAmount;
	public $schedDate;
	public $scheduleNumber;
	public $sourceAcct;
	public $srcDocLine;
	public $srcTran;
	public $srcTranPostPeriod;
	public $startOffset;
	public $useForeignAmounts;
	static $paramtypesmap = array(
		"accountingBook" => "SearchColumnSelectField[]",
		"amorStatus" => "SearchColumnEnumSelectField[]",
		"amorTemplate" => "SearchColumnStringField[]",
		"amortizedAmount" => "SearchColumnDoubleField[]",
		"amorType" => "SearchColumnEnumSelectField[]",
		"amount" => "SearchColumnDoubleField[]",
		"currency" => "SearchColumnStringField[]",
		"deferredAmount" => "SearchColumnDoubleField[]",
		"destAcct" => "SearchColumnStringField[]",
		"initialAmt" => "SearchColumnDoubleField[]",
		"internalId" => "SearchColumnLongField[]",
		"isRecognized" => "SearchColumnBooleanField[]",
		"jeDoc" => "SearchColumnStringField[]",
		"lineSequenceNumber" => "SearchColumnLongField[]",
		"name" => "SearchColumnStringField[]",
		"nameUrl" => "SearchColumnStringField[]",
		"pctComplete" => "SearchColumnDoubleField[]",
		"pctRecognition" => "SearchColumnDoubleField[]",
		"periodOffset" => "SearchColumnLongField[]",
		"recurAmount" => "SearchColumnDoubleField[]",
		"recurFxAmount" => "SearchColumnDoubleField[]",
		"schedDate" => "SearchColumnDateField[]",
		"scheduleNumber" => "SearchColumnStringField[]",
		"sourceAcct" => "SearchColumnStringField[]",
		"srcDocLine" => "SearchColumnStringField[]",
		"srcTran" => "SearchColumnStringField[]",
		"srcTranPostPeriod" => "SearchColumnStringField[]",
		"startOffset" => "SearchColumnLongField[]",
		"useForeignAmounts" => "SearchColumnBooleanField[]",
	);
}

