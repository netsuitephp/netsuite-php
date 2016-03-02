<?php

namespace Fungku\NetSuite\Classes;

class ChargeSearchBasic extends SearchRecordBasic {
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
	public $externalId;
	public $externalIdString;
	public $internalId;
	public $internalIdNumber;
	public $location;
	public $modifiedDate;
	public $postingPeriod;
	public $postingPeriodRelative;
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
		"amount" => "SearchDoubleField",
		"billingAccount" => "SearchMultiSelectField",
		"billingItem" => "SearchMultiSelectField",
		"billTo" => "SearchMultiSelectField",
		"chargeDate" => "SearchDateField",
		"class" => "SearchMultiSelectField",
		"chargeType" => "SearchMultiSelectField",
		"createdDate" => "SearchDateField",
		"currency" => "SearchMultiSelectField",
		"department" => "SearchMultiSelectField",
		"externalId" => "SearchMultiSelectField",
		"externalIdString" => "SearchStringField",
		"internalId" => "SearchMultiSelectField",
		"internalIdNumber" => "SearchLongField",
		"location" => "SearchMultiSelectField",
		"modifiedDate" => "SearchDateField",
		"postingPeriod" => "RecordRef",
		"postingPeriodRelative" => "PostingPeriodDate",
		"quantity" => "SearchDoubleField",
		"rate" => "SearchDoubleField",
		"rule" => "SearchMultiSelectField",
		"runId" => "SearchStringField",
		"salesOrder" => "SearchLongField",
		"stage" => "SearchEnumMultiSelectField",
		"subscriptionLine" => "SearchMultiSelectField",
		"use" => "SearchEnumMultiSelectField",
		"customFieldList" => "SearchCustomFieldList",
	);
}

