<?php

namespace Fungku\NetSuite\Classes;

class RevRecScheduleSearch extends SearchRecord {
	public $basic;
	public $appliedToTransactionJoin;
	public $customerJoin;
	public $itemJoin;
	public $transactionJoin;
	public $userJoin;
	static $paramtypesmap = array(
		"basic" => "RevRecScheduleSearchBasic",
		"appliedToTransactionJoin" => "TransactionSearchBasic",
		"customerJoin" => "CustomerSearchBasic",
		"itemJoin" => "ItemSearchBasic",
		"transactionJoin" => "TransactionSearchBasic",
		"userJoin" => "EmployeeSearchBasic",
	);
}

