<?php

namespace Fungku\NetSuite\Classes;

class PaycheckJournalEarning {
	public $id;
	public $payrollItem;
	public $hours;
	public $amount;
	public $department;
	public $class;
	public $location;
	public $customFieldList;
	static $paramtypesmap = array(
		"id" => "integer",
		"payrollItem" => "RecordRef",
		"hours" => "float",
		"amount" => "float",
		"department" => "RecordRef",
		"class" => "RecordRef",
		"location" => "RecordRef",
		"customFieldList" => "CustomFieldList",
	);
}

