<?php

namespace Fungku\NetSuite\Classes;

class DepositApplication extends Record {
	public $createdDate;
	public $lastModifiedDate;
	public $arAcct;
	public $status;
	public $customer;
	public $tranDate;
	public $postingPeriod;
	public $deposit;
	public $depDate;
	public $currency;
	public $exchangeRate;
	public $memo;
	public $subsidiary;
	public $total;
	public $department;
	public $applied;
	public $class;
	public $unapplied;
	public $location;
	public $tranId;
	public $applyList;
	public $customFieldList;
	public $internalId;
	public $externalId;
	static $paramtypesmap = array(
		"createdDate" => "dateTime",
		"lastModifiedDate" => "dateTime",
		"arAcct" => "string",
		"status" => "string",
		"customer" => "RecordRef",
		"tranDate" => "dateTime",
		"postingPeriod" => "RecordRef",
		"deposit" => "RecordRef",
		"depDate" => "dateTime",
		"currency" => "RecordRef",
		"exchangeRate" => "float",
		"memo" => "string",
		"subsidiary" => "RecordRef",
		"total" => "float",
		"department" => "RecordRef",
		"applied" => "float",
		"class" => "RecordRef",
		"unapplied" => "float",
		"location" => "RecordRef",
		"tranId" => "string",
		"applyList" => "DepositApplicationApplyList",
		"customFieldList" => "CustomFieldList",
		"internalId" => "string",
		"externalId" => "string",
	);
}

