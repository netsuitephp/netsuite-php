<?php namespace Fungku\NetSuite\Classes;

class Contact extends Record {
	public $customForm;
	public $entityId;
	public $contactSource;
	public $company;
	public $salutation;
	public $firstName;
	public $middleName;
	public $lastName;
	public $title;
	public $phone;
	public $fax;
	public $email;
	public $defaultAddress;
	public $isPrivate;
	public $isInactive;
	public $subsidiary;
	public $phoneticName;
	public $categoryList;
	public $altEmail;
	public $officePhone;
	public $homePhone;
	public $mobilePhone;
	public $supervisor;
	public $supervisorPhone;
	public $assistant;
	public $assistantPhone;
	public $comments;
	public $globalSubscriptionStatus;
	public $image;
	public $billPay;
	public $dateCreated;
	public $lastModifiedDate;
	public $addressbookList;
	public $subscriptionsList;
	public $customFieldList;
	public $internalId;
	public $externalId;
	static $paramtypesmap = array(
		"customForm" => "RecordRef",
		"entityId" => "string",
		"contactSource" => "RecordRef",
		"company" => "RecordRef",
		"salutation" => "string",
		"firstName" => "string",
		"middleName" => "string",
		"lastName" => "string",
		"title" => "string",
		"phone" => "string",
		"fax" => "string",
		"email" => "string",
		"defaultAddress" => "string",
		"isPrivate" => "boolean",
		"isInactive" => "boolean",
		"subsidiary" => "RecordRef",
		"phoneticName" => "string",
		"categoryList" => "CategoryList",
		"altEmail" => "string",
		"officePhone" => "string",
		"homePhone" => "string",
		"mobilePhone" => "string",
		"supervisor" => "RecordRef",
		"supervisorPhone" => "string",
		"assistant" => "RecordRef",
		"assistantPhone" => "string",
		"comments" => "string",
		"globalSubscriptionStatus" => "GlobalSubscriptionStatus",
		"image" => "RecordRef",
		"billPay" => "boolean",
		"dateCreated" => "dateTime",
		"lastModifiedDate" => "dateTime",
		"addressbookList" => "ContactAddressbookList",
		"subscriptionsList" => "SubscriptionsList",
		"customFieldList" => "CustomFieldList",
		"internalId" => "string",
		"externalId" => "string",
	);
}

