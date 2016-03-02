<?php

namespace Fungku\NetSuite\Classes;

class ChargeSearch extends SearchRecord {
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
		"basic" => "ChargeSearchBasic",
		"billingAccountJoin" => "BillingAccountSearchBasic",
		"chargeEmployeeJoin" => "EmployeeSearchBasic",
		"invoiceJoin" => "TransactionSearchBasic",
		"jobJoin" => "JobSearchBasic",
		"salesOrderJoin" => "TransactionSearchBasic",
		"timeJoin" => "TimeBillSearchBasic",
		"transactionJoin" => "TransactionSearchBasic",
		"userJoin" => "EmployeeSearchBasic",
		"customSearchJoin" => "CustomSearchJoin[]",
	);
}

