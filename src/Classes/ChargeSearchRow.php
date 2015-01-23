<?php

class ChargeSearchRow extends SearchRow {
	public $basic;
	public $invoiceJoin;
	public $jobJoin;
	public $salesOrderJoin;
	public $timeJoin;
	public $transactionJoin;
	public $userJoin;
	public $customSearchJoin;
	static $paramtypesmap = array(
		"basic" => "ChargeSearchRowBasic",
		"invoiceJoin" => "TransactionSearchRowBasic",
		"jobJoin" => "JobSearchRowBasic",
		"salesOrderJoin" => "TransactionSearchRowBasic",
		"timeJoin" => "TimeBillSearchRowBasic",
		"transactionJoin" => "TransactionSearchRowBasic",
		"userJoin" => "EmployeeSearchRowBasic",
		"customSearchJoin" => "CustomSearchRowBasic[]",
	);
}

