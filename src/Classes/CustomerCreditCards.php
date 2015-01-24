<?php namespace Fungku\NetSuite\Classes;

class CustomerCreditCards {
	public $internalId;
	public $ccNumber;
	public $ccExpireDate;
	public $ccName;
	public $paymentMethod;
	public $cardState;
	public $stateFrom;
	public $debitcardIssueNo;
	public $ccMemo;
	public $validfrom;
	public $ccDefault;
	static $paramtypesmap = array(
		"internalId" => "string",
		"ccNumber" => "string",
		"ccExpireDate" => "dateTime",
		"ccName" => "string",
		"paymentMethod" => "RecordRef",
		"cardState" => "RecordRef",
		"stateFrom" => "dateTime",
		"debitcardIssueNo" => "string",
		"ccMemo" => "string",
		"validfrom" => "dateTime",
		"ccDefault" => "boolean",
	);
}

