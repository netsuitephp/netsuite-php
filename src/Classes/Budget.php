<?php

namespace Fungku\NetSuite\Classes;

class Budget extends Record {
	public $year;
	public $customer;
	public $item;
	public $class;
	public $department;
	public $location;
	public $account;
	public $subsidiary;
	public $category;
	public $budgetType;
	public $currency;
	public $periodAmount1;
	public $periodAmount2;
	public $periodAmount3;
	public $periodAmount4;
	public $periodAmount5;
	public $periodAmount6;
	public $periodAmount7;
	public $periodAmount8;
	public $periodAmount9;
	public $periodAmount10;
	public $periodAmount11;
	public $periodAmount12;
	public $amount;
	public $internalId;
	static $paramtypesmap = array(
		"year" => "RecordRef",
		"customer" => "RecordRef",
		"item" => "RecordRef",
		"class" => "RecordRef",
		"department" => "RecordRef",
		"location" => "RecordRef",
		"account" => "RecordRef",
		"subsidiary" => "RecordRef",
		"category" => "RecordRef",
		"budgetType" => "BudgetBudgetType",
		"currency" => "RecordRef",
		"periodAmount1" => "float",
		"periodAmount2" => "float",
		"periodAmount3" => "float",
		"periodAmount4" => "float",
		"periodAmount5" => "float",
		"periodAmount6" => "float",
		"periodAmount7" => "float",
		"periodAmount8" => "float",
		"periodAmount9" => "float",
		"periodAmount10" => "float",
		"periodAmount11" => "float",
		"periodAmount12" => "float",
		"amount" => "float",
		"internalId" => "string",
	);
}

