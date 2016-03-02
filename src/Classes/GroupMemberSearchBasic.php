<?php

namespace Fungku\NetSuite\Classes;

class GroupMemberSearchBasic extends SearchRecordBasic {
	public $groupId;
	static $paramtypesmap = array(
		"groupId" => "SearchMultiSelectField",
	);
}

