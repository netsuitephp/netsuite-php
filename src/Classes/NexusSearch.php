<?php

class NexusSearch extends SearchRecord {
	public $basic;
	public $userJoin;
	static $paramtypesmap = array(
		"basic" => "NexusSearchBasic",
		"userJoin" => "EmployeeSearchBasic",
	);
}

