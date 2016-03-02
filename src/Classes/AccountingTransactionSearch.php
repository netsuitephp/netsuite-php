<?php

namespace Fungku\NetSuite\Classes;

class AccountingTransactionSearch extends SearchRecord {
	public $basic;
	public $accountJoin;
	public $revRecScheduleJoin;
	public $transactionJoin;
	static $paramtypesmap = array(
		"basic" => "AccountingTransactionSearchBasic",
		"accountJoin" => "AccountSearchBasic",
		"revRecScheduleJoin" => "RevRecScheduleSearchBasic",
		"transactionJoin" => "TransactionSearchBasic",
	);
}

