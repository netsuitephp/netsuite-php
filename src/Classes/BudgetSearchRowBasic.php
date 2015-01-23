<?php

class BudgetSearchRowBasic extends SearchRowBasic {
	public $account;
	public $amount;
	public $category;
	public $class;
	public $classnohierarchy;
	public $currency;
	public $customer;
	public $department;
	public $departmentnohierarchy;
	public $global;
	public $internalId;
	public $item;
	public $location;
	public $locationnohierarchy;
	public $subsidiary;
	public $subsidiarynohierarchy;
	public $year;
	public $year2;
	static $paramtypesmap = array(
		"account" => "SearchColumnStringField[]",
		"amount" => "SearchColumnDoubleField[]",
		"category" => "SearchColumnStringField[]",
		"class" => "SearchColumnStringField[]",
		"classnohierarchy" => "SearchColumnStringField[]",
		"currency" => "SearchColumnStringField[]",
		"customer" => "SearchColumnStringField[]",
		"department" => "SearchColumnStringField[]",
		"departmentnohierarchy" => "SearchColumnStringField[]",
		"global" => "SearchColumnBooleanField[]",
		"internalId" => "SearchColumnSelectField[]",
		"item" => "SearchColumnStringField[]",
		"location" => "SearchColumnStringField[]",
		"locationnohierarchy" => "SearchColumnStringField[]",
		"subsidiary" => "SearchColumnStringField[]",
		"subsidiarynohierarchy" => "SearchColumnStringField[]",
		"year" => "SearchColumnStringField[]",
		"year2" => "SearchColumnStringField[]",
	);
}

