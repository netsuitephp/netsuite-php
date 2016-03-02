<?php

namespace Fungku\NetSuite\Classes;

class PaymentMethodSearchBasic extends SearchRecordBasic {
	public $account;
	public $creditCard;
	public $externalId;
	public $externalIdString;
	public $internalId;
	public $internalIdNumber;
	public $isDebitCard;
	public $isInactive;
	public $name;
	static $paramtypesmap = array(
		"account" => "SearchMultiSelectField",
		"creditCard" => "SearchBooleanField",
		"externalId" => "SearchMultiSelectField",
		"externalIdString" => "SearchStringField",
		"internalId" => "SearchMultiSelectField",
		"internalIdNumber" => "SearchLongField",
		"isDebitCard" => "SearchBooleanField",
		"isInactive" => "SearchBooleanField",
		"name" => "SearchStringField",
	);
}

