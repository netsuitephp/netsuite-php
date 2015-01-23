<?php

class PaymentMethodSearchRow extends SearchRow {
	public $basic;
	public $userJoin;
	static $paramtypesmap = array(
		"basic" => "PaymentMethodSearchRowBasic",
		"userJoin" => "EmployeeSearchRowBasic",
	);
}

