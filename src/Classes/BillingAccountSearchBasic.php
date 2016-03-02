<?php

namespace Fungku\NetSuite\Classes;

class BillingAccountSearchBasic extends SearchRecordBasic {
	public $billingSchedule;
	public $cashSaleForm;
	public $class;
	public $currency;
	public $customer;
	public $customerDefault;
	public $dateCreated;
	public $department;
	public $externalId;
	public $externalIdString;
	public $frequency;
	public $idNumber;
	public $inactive;
	public $internalId;
	public $internalIdNumber;
	public $invoiceForm;
	public $lastBillCycleDate;
	public $lastBillDate;
	public $location;
	public $memo;
	public $name;
	public $nextBillCycleDate;
	public $startDate;
	public $subsidiary;
	public $customFieldList;
	static $paramtypesmap = array(
		"billingSchedule" => "SearchMultiSelectField",
		"cashSaleForm" => "SearchMultiSelectField",
		"class" => "SearchMultiSelectField",
		"currency" => "SearchMultiSelectField",
		"customer" => "SearchMultiSelectField",
		"customerDefault" => "SearchBooleanField",
		"dateCreated" => "SearchDateField",
		"department" => "SearchMultiSelectField",
		"externalId" => "SearchMultiSelectField",
		"externalIdString" => "SearchStringField",
		"frequency" => "SearchEnumMultiSelectField",
		"idNumber" => "SearchStringField",
		"inactive" => "SearchBooleanField",
		"internalId" => "SearchMultiSelectField",
		"internalIdNumber" => "SearchLongField",
		"invoiceForm" => "SearchMultiSelectField",
		"lastBillCycleDate" => "SearchDateField",
		"lastBillDate" => "SearchDateField",
		"location" => "SearchMultiSelectField",
		"memo" => "SearchStringField",
		"name" => "SearchStringField",
		"nextBillCycleDate" => "SearchDateField",
		"startDate" => "SearchDateField",
		"subsidiary" => "SearchMultiSelectField",
		"customFieldList" => "SearchCustomFieldList",
	);
}

