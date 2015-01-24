<?php namespace Fungku\NetSuite\Classes;

class DepositPayment {
	public $deposit;
	public $id;
	public $docDate;
	public $type;
	public $docNumber;
	public $memo;
	public $paymentMethod;
	public $refNum;
	public $entity;
	public $currency;
	public $transactionAmount;
	public $paymentAmount;
	static $paramtypesmap = array(
		"deposit" => "boolean",
		"id" => "integer",
		"docDate" => "dateTime",
		"type" => "string",
		"docNumber" => "string",
		"memo" => "string",
		"paymentMethod" => "RecordRef",
		"refNum" => "string",
		"entity" => "RecordRef",
		"currency" => "RecordRef",
		"transactionAmount" => "float",
		"paymentAmount" => "float",
	);
}

