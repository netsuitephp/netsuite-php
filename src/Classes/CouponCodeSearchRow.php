<?php

class CouponCodeSearchRow extends SearchRow {
	public $basic;
	public $userJoin;
	static $paramtypesmap = array(
		"basic" => "CouponCodeSearchRowBasic",
		"userJoin" => "EmployeeSearchRowBasic",
	);
}

