<?php

class WinLossReasonSearchRow extends SearchRow {
	public $basic;
	public $userJoin;
	static $paramtypesmap = array(
		"basic" => "WinLossReasonSearchRowBasic",
		"userJoin" => "EmployeeSearchRowBasic",
	);
}

