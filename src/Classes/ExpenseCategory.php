<?php namespace Fungku\NetSuite\Classes;

class ExpenseCategory extends Record {
	public $customForm;
	public $name;
	public $description;
	public $expenseAcct;
	public $isInactive;
	public $rateRequired;
	public $defaultRate;
	public $ratesList;
	public $translationsList;
	public $customFieldList;
	public $internalId;
	public $externalId;
	static $paramtypesmap = array(
		"customForm" => "RecordRef",
		"name" => "string",
		"description" => "string",
		"expenseAcct" => "RecordRef",
		"isInactive" => "boolean",
		"rateRequired" => "boolean",
		"defaultRate" => "float",
		"ratesList" => "ExpenseCategoryRatesList",
		"translationsList" => "TranslationList",
		"customFieldList" => "CustomFieldList",
		"internalId" => "string",
		"externalId" => "string",
	);
}

