<?php

namespace Fungku\NetSuite\Classes;

class NexusSearch extends SearchRecord {
	public $basic;
	public $userJoin;
	static $paramtypesmap = array(
		"basic" => "NexusSearchBasic",
		"userJoin" => "EmployeeSearchBasic",
	);
}

