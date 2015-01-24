<?php namespace Fungku\NetSuite\Classes;

class GiftCertificate extends Record {
	public $giftCertCode;
	public $sender;
	public $name;
	public $email;
	public $message;
	public $expirationDate;
	public $createdDate;
	public $lastModifiedDate;
	public $originalAmount;
	public $amountRemaining;
	public $internalId;
	static $paramtypesmap = array(
		"giftCertCode" => "string",
		"sender" => "string",
		"name" => "string",
		"email" => "string",
		"message" => "string",
		"expirationDate" => "dateTime",
		"createdDate" => "dateTime",
		"lastModifiedDate" => "dateTime",
		"originalAmount" => "float",
		"amountRemaining" => "float",
		"internalId" => "string",
	);
}

