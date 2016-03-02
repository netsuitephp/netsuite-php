<?php

namespace Fungku\NetSuite\Classes;

class BudgetSearchBasic extends SearchRecordBasic {
	public $account;
	public $amount;
	public $category;
	public $class;
	public $currency;
	public $customer;
	public $department;
	public $global;
	public $internalId;
	public $internalIdNumber;
	public $item;
	public $location;
	public $subsidiary;
	public $year;
	public $year2;
	static $paramtypesmap = array(
		"account" => "SearchMultiSelectField",
		"amount" => "SearchDoubleField",
		"category" => "SearchMultiSelectField",
		"class" => "SearchMultiSelectField",
		"currency" => "SearchMultiSelectField",
		"customer" => "SearchMultiSelectField",
		"department" => "SearchMultiSelectField",
		"global" => "SearchBooleanField",
		"internalId" => "SearchMultiSelectField",
		"internalIdNumber" => "SearchLongField",
		"item" => "SearchMultiSelectField",
		"location" => "SearchMultiSelectField",
		"subsidiary" => "SearchMultiSelectField",
		"year" => "SearchMultiSelectField",
		"year2" => "SearchMultiSelectField",
	);
}

