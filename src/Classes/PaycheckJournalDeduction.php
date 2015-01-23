<?php

class PaycheckJournalDeduction {
	public $id;
	public $payrollItem;
	public $amount;
	public $department;
	public $class;
	public $location;
	public $customFieldList;
	static $paramtypesmap = array(
		"id" => "integer",
		"payrollItem" => "RecordRef",
		"amount" => "float",
		"department" => "RecordRef",
		"class" => "RecordRef",
		"location" => "RecordRef",
		"customFieldList" => "CustomFieldList",
	);
}

