<?php

class VendorReturnAuthorization extends Record {
	public $createdDate;
	public $lastModifiedDate;
	public $customForm;
	public $tranId;
	public $createdFrom;
	public $entity;
	public $orderStatus;
	public $tranDate;
	public $userTotal;
	public $currency;
	public $currencyName;
	public $memo;
	public $exchangeRate;
	public $department;
	public $class;
	public $location;
	public $subsidiary;
	public $intercoTransaction;
	public $intercoStatus;
	public $expenseList;
	public $itemList;
	public $customFieldList;
	public $internalId;
	public $externalId;
	static $paramtypesmap = array(
		"createdDate" => "dateTime",
		"lastModifiedDate" => "dateTime",
		"customForm" => "RecordRef",
		"tranId" => "string",
		"createdFrom" => "RecordRef",
		"entity" => "RecordRef",
		"orderStatus" => "VendorReturnAuthorizationOrderStatus",
		"tranDate" => "dateTime",
		"userTotal" => "float",
		"currency" => "RecordRef",
		"currencyName" => "string",
		"memo" => "string",
		"exchangeRate" => "float",
		"department" => "RecordRef",
		"class" => "RecordRef",
		"location" => "RecordRef",
		"subsidiary" => "RecordRef",
		"intercoTransaction" => "RecordRef",
		"intercoStatus" => "IntercoStatus",
		"expenseList" => "VendorReturnAuthorizationExpenseList",
		"itemList" => "VendorReturnAuthorizationItemList",
		"customFieldList" => "CustomFieldList",
		"internalId" => "string",
		"externalId" => "string",
	);
}

