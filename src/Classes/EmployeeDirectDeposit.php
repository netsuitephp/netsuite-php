<?php

class EmployeeDirectDeposit {
	public $id;
	public $netAccount;
	public $savingsAccount;
	public $accountPrenoted;
	public $accountStatus;
	public $bankName;
	public $bankId;
	public $bankNumber;
	public $bankRoutingNumber;
	public $bankAccountNumber;
	public $amount;
	public $inactive;
	static $paramtypesmap = array(
		"id" => "integer",
		"netAccount" => "boolean",
		"savingsAccount" => "boolean",
		"accountPrenoted" => "boolean",
		"accountStatus" => "EmployeeDirectDepositAccountStatus",
		"bankName" => "string",
		"bankId" => "string",
		"bankNumber" => "string",
		"bankRoutingNumber" => "string",
		"bankAccountNumber" => "string",
		"amount" => "float",
		"inactive" => "boolean",
	);
}

