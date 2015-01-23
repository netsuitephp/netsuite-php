<?php

class PaymentMethodSearchRowBasic extends SearchRowBasic {
	public $account;
	public $creditCard;
	public $externalId;
	public $internalId;
	public $isDebitCard;
	public $isInactive;
	public $name;
	static $paramtypesmap = array(
		"account" => "SearchColumnSelectField[]",
		"creditCard" => "SearchColumnBooleanField[]",
		"externalId" => "SearchColumnSelectField[]",
		"internalId" => "SearchColumnSelectField[]",
		"isDebitCard" => "SearchColumnBooleanField[]",
		"isInactive" => "SearchColumnBooleanField[]",
		"name" => "SearchColumnStringField[]",
	);
}

