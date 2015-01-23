<?php

class PaymentMethodSearch extends SearchRecord {
	public $basic;
	public $userJoin;
	static $paramtypesmap = array(
		"basic" => "PaymentMethodSearchBasic",
		"userJoin" => "EmployeeSearchBasic",
	);
}

