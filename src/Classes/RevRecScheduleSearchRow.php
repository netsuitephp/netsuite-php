<?php namespace Fungku\NetSuite\Classes;

class RevRecScheduleSearchRow extends SearchRow {
	public $basic;
	public $appliedToTransactionJoin;
	public $customerJoin;
	public $itemJoin;
	public $transactionJoin;
	public $userJoin;
	static $paramtypesmap = array(
		"basic" => "RevRecScheduleSearchRowBasic",
		"appliedToTransactionJoin" => "TransactionSearchRowBasic",
		"customerJoin" => "CustomerSearchRowBasic",
		"itemJoin" => "ItemSearchRowBasic",
		"transactionJoin" => "TransactionSearchRowBasic",
		"userJoin" => "EmployeeSearchRowBasic",
	);
}

