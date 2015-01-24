<?php namespace Fungku\NetSuite\Classes;

class ManufacturingOperationTaskSearchRow extends SearchRow {
	public $basic;
	public $predecessorJoin;
	public $userJoin;
	public $workOrderJoin;
	public $customSearchJoin;
	static $paramtypesmap = array(
		"basic" => "ManufacturingOperationTaskSearchRowBasic",
		"predecessorJoin" => "ManufacturingOperationTaskSearchRowBasic",
		"userJoin" => "EmployeeSearchRowBasic",
		"workOrderJoin" => "TransactionSearchRowBasic",
		"customSearchJoin" => "CustomSearchRowBasic[]",
	);
}

