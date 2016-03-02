<?php

namespace Fungku\NetSuite\Classes;

class ManufacturingOperationTaskSearch extends SearchRecord {
	public $basic;
	public $predecessorJoin;
	public $userJoin;
	public $workOrderJoin;
	public $customSearchJoin;
	static $paramtypesmap = array(
		"basic" => "ManufacturingOperationTaskSearchBasic",
		"predecessorJoin" => "ManufacturingOperationTaskSearchBasic",
		"userJoin" => "EmployeeSearchBasic",
		"workOrderJoin" => "TransactionSearchBasic",
		"customSearchJoin" => "CustomSearchJoin[]",
	);
}

