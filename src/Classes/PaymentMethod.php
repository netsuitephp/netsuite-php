<?php

namespace Fungku\NetSuite\Classes;

class PaymentMethod extends Record {
	public $name;
	public $creditCard;
	public $undepFunds;
	public $account;
	public $isInactive;
	public $isOnline;
	public $visualsList;
	public $isDebitCard;
	public $merchantAccountsList;
	public $payPalEmailAddress;
	public $expressCheckoutArrangement;
	public $useExpressCheckout;
	public $internalId;
	public $externalId;
	static $paramtypesmap = array(
		"name" => "string",
		"creditCard" => "boolean",
		"undepFunds" => "boolean",
		"account" => "RecordRef",
		"isInactive" => "boolean",
		"isOnline" => "boolean",
		"visualsList" => "PaymentMethodVisualsList",
		"isDebitCard" => "boolean",
		"merchantAccountsList" => "RecordRefList",
		"payPalEmailAddress" => "string",
		"expressCheckoutArrangement" => "string",
		"useExpressCheckout" => "boolean",
		"internalId" => "string",
		"externalId" => "string",
	);
}

