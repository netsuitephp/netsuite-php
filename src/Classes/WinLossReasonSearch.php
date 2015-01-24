<?php namespace Fungku\NetSuite\Classes;

class WinLossReasonSearch extends SearchRecord {
	public $basic;
	public $userJoin;
	static $paramtypesmap = array(
		"basic" => "WinLossReasonSearchBasic",
		"userJoin" => "EmployeeSearchBasic",
	);
}

