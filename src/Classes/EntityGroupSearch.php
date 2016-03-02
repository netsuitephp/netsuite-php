<?php

namespace Fungku\NetSuite\Classes;

class EntityGroupSearch extends SearchRecord {
	public $basic;
	public $groupMemberJoin;
	public $userJoin;
	public $customSearchJoin;
	static $paramtypesmap = array(
		"basic" => "EntityGroupSearchBasic",
		"groupMemberJoin" => "EntitySearchBasic",
		"userJoin" => "EmployeeSearchBasic",
		"customSearchJoin" => "CustomSearchJoin[]",
	);
}

