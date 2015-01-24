<?php namespace Fungku\NetSuite\Classes;

class JobCreditCards {
	public $internalId;
	public $ccNumber;
	public $ccExpireDate;
	public $ccName;
	public $paymentMethod;
	public $ccMemo;
	public $ccDefault;
	public $debitCardIssueNo;
	public $validFrom;
	static $paramtypesmap = array(
		"internalId" => "string",
		"ccNumber" => "string",
		"ccExpireDate" => "dateTime",
		"ccName" => "string",
		"paymentMethod" => "RecordRef",
		"ccMemo" => "string",
		"ccDefault" => "boolean",
		"debitCardIssueNo" => "string",
		"validFrom" => "dateTime",
	);
}

