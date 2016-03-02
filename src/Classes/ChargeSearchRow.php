<?php

namespace Fungku\NetSuite\Classes;

class ChargeSearchRow extends SearchRow {
	public $basic;
	public $billingAccountJoin;
	public $chargeEmployeeJoin;
	public $invoiceJoin;
	public $jobJoin;
	public $salesOrderJoin;
	public $timeJoin;
	public $transactionJoin;
	public $userJoin;
	public $customSearchJoin;
	static $paramtypesmap = array(
		"basic" => "ChargeSearchRowBasic",
		"billingAccountJoin" => "BillingAccountSearchRowBasic",
		"chargeEmployeeJoin" => "EmployeeSearchRowBasic",
		"invoiceJoin" => "TransactionSearchRowBasic",
		"jobJoin" => "JobSearchRowBasic",
		"salesOrderJoin" => "TransactionSearchRowBasic",
		"timeJoin" => "TimeBillSearchRowBasic",
		"transactionJoin" => "TransactionSearchRowBasic",
		"userJoin" => "EmployeeSearchRowBasic",
		"customSearchJoin" => "CustomSearchRowBasic[]",
	);
}

