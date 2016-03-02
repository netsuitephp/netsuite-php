<?php

namespace Fungku\NetSuite\Classes;

class EntityGroupSearchRow extends SearchRow {
	public $basic;
	public $groupMemberJoin;
	public $userJoin;
	public $customSearchJoin;
	static $paramtypesmap = array(
		"basic" => "EntityGroupSearchRowBasic",
		"groupMemberJoin" => "EntitySearchRowBasic",
		"userJoin" => "EmployeeSearchRowBasic",
		"customSearchJoin" => "CustomSearchRowBasic[]",
	);
}

