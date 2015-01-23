<?php

class GiftCertificateSearchRowBasic extends SearchRowBasic {
	public $amountRemaining;
	public $amtAvailBilled;
	public $createdDate;
	public $email;
	public $expirationDate;
	public $gcActive;
	public $giftCertCode;
	public $incomeAcct;
	public $internalId;
	public $item;
	public $liabilityAcct;
	public $message;
	public $name;
	public $originalAmount;
	public $purchaseDate;
	public $sender;
	public $customFieldList;
	static $paramtypesmap = array(
		"amountRemaining" => "SearchColumnDoubleField[]",
		"amtAvailBilled" => "SearchColumnDoubleField[]",
		"createdDate" => "SearchColumnDateField[]",
		"email" => "SearchColumnStringField[]",
		"expirationDate" => "SearchColumnDateField[]",
		"gcActive" => "SearchColumnBooleanField[]",
		"giftCertCode" => "SearchColumnStringField[]",
		"incomeAcct" => "SearchColumnStringField[]",
		"internalId" => "SearchColumnSelectField[]",
		"item" => "SearchColumnSelectField[]",
		"liabilityAcct" => "SearchColumnStringField[]",
		"message" => "SearchColumnStringField[]",
		"name" => "SearchColumnStringField[]",
		"originalAmount" => "SearchColumnDoubleField[]",
		"purchaseDate" => "SearchColumnDateField[]",
		"sender" => "SearchColumnStringField[]",
		"customFieldList" => "SearchColumnCustomFieldList",
	);
}

