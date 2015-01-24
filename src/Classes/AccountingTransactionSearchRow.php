<?php namespace Fungku\NetSuite\Classes;

class AccountingTransactionSearchRow extends SearchRow {
	public $basic;
	public $accountJoin;
	public $revRecScheduleJoin;
	public $transactionJoin;
	static $paramtypesmap = array(
		"basic" => "AccountingTransactionSearchRowBasic",
		"accountJoin" => "AccountSearchRowBasic",
		"revRecScheduleJoin" => "RevRecScheduleSearchRowBasic",
		"transactionJoin" => "TransactionSearchRowBasic",
	);
}

