<?php

class CouponCodeSearch extends SearchRecord {
	public $basic;
	public $userJoin;
	static $paramtypesmap = array(
		"basic" => "CouponCodeSearchBasic",
		"userJoin" => "EmployeeSearchBasic",
	);
}

