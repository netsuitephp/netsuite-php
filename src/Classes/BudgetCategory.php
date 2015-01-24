<?php namespace Fungku\NetSuite\Classes;

class BudgetCategory extends Record {
	public $name;
	public $budgetType;
	public $isInactive;
	public $internalId;
	static $paramtypesmap = array(
		"name" => "string",
		"budgetType" => "boolean",
		"isInactive" => "boolean",
		"internalId" => "string",
	);
}

