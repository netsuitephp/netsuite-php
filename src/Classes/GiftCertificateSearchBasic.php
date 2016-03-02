<?php

namespace Fungku\NetSuite\Classes;

class GiftCertificateSearchBasic extends SearchRecordBasic {
	public $amountAvailableBilled;
	public $amountRemaining;
	public $createdDate;
	public $email;
	public $expirationDate;
	public $giftCertCode;
	public $incomeAccount;
	public $internalId;
	public $internalIdNumber;
	public $isActive;
	public $item;
	public $liabilityAccount;
	public $message;
	public $name;
	public $originalAmount;
	public $purchaseDate;
	public $sender;
	public $customFieldList;
	static $paramtypesmap = array(
		"amountAvailableBilled" => "SearchDoubleField",
		"amountRemaining" => "SearchDoubleField",
		"createdDate" => "SearchDateField",
		"email" => "SearchStringField",
		"expirationDate" => "SearchDateField",
		"giftCertCode" => "SearchStringField",
		"incomeAccount" => "SearchMultiSelectField",
		"internalId" => "SearchMultiSelectField",
		"internalIdNumber" => "SearchLongField",
		"isActive" => "SearchBooleanField",
		"item" => "SearchMultiSelectField",
		"liabilityAccount" => "SearchMultiSelectField",
		"message" => "SearchStringField",
		"name" => "SearchStringField",
		"originalAmount" => "SearchDoubleField",
		"purchaseDate" => "SearchDateField",
		"sender" => "SearchStringField",
		"customFieldList" => "SearchCustomFieldList",
	);
}

