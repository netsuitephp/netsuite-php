<?php namespace Fungku\NetSuite\Classes;

class CostCategory extends Record {
	public $name;
	public $account;
	public $itemCostType;
	public $isInactive;
	public $internalId;
	public $externalId;
	static $paramtypesmap = array(
		"name" => "string",
		"account" => "RecordRef",
		"itemCostType" => "CostCategoryItemCostType",
		"isInactive" => "boolean",
		"internalId" => "string",
		"externalId" => "string",
	);
}

