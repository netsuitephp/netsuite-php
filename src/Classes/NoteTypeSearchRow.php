<?php

class NoteTypeSearchRow extends SearchRow {
	public $basic;
	public $userJoin;
	static $paramtypesmap = array(
		"basic" => "NoteTypeSearchRowBasic",
		"userJoin" => "EmployeeSearchRowBasic",
	);
}

