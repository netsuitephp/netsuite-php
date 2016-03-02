<?php

namespace Fungku\NetSuite\Classes;

class ChargeSearchRowBasic extends SearchRowBasic {
	public $amount;
	public $billingAccount;
	public $billingItem;
	public $billTo;
	public $chargeDate;
	public $class;
	public $chargeType;
	public $createdDate;
	public $currency;
	public $department;
	public $description;
	public $externalId;
	public $internalId;
	public $location;
	public $modifiedDate;
	public $postingPeriod;
	public $quantity;
	public $rate;
	public $rule;
	public $runId;
	public $salesOrder;
	public $stage;
	public $subscriptionLine;
	public $use;
	public $customFieldList;
	static $paramtypesmap = array(
		"amount" => "SearchColumnDoubleField[]",
		"billingAccount" => "SearchColumnSelectField[]",
		"billingItem" => "SearchColumnSelectField[]",
		"billTo" => "SearchColumnSelectField[]",
		"chargeDate" => "SearchColumnDateField[]",
		"class" => "SearchColumnSelectField[]",
		"chargeType" => "SearchColumnSelectField[]",
		"createdDate" => "SearchColumnDateField[]",
		"currency" => "SearchColumnSelectField[]",
		"department" => "SearchColumnSelectField[]",
		"description" => "SearchColumnStringField[]",
		"externalId" => "SearchColumnStringField[]",
		"internalId" => "SearchColumnSelectField[]",
		"location" => "SearchColumnSelectField[]",
		"modifiedDate" => "SearchColumnDateField[]",
		"postingPeriod" => "SearchColumnStringField[]",
		"quantity" => "SearchColumnStringField[]",
		"rate" => "SearchColumnStringField[]",
		"rule" => "SearchColumnSelectField[]",
		"runId" => "SearchColumnStringField[]",
		"salesOrder" => "SearchColumnStringField[]",
		"stage" => "SearchColumnEnumSelectField[]",
		"subscriptionLine" => "SearchColumnSelectField[]",
		"use" => "SearchColumnEnumSelectField[]",
		"customFieldList" => "SearchColumnCustomFieldList",
	);
}

