<?php

namespace Fungku\NetSuite\Classes;

class NexusSearchRow extends SearchRow {
	public $basic;
	public $userJoin;
	static $paramtypesmap = array(
		"basic" => "NexusSearchRowBasic",
		"userJoin" => "EmployeeSearchRowBasic",
	);
}

