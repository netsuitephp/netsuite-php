<?php

class FolderSearchRow extends SearchRow {
	public $basic;
	public $fileJoin;
	public $userJoin;
	static $paramtypesmap = array(
		"basic" => "FolderSearchRowBasic",
		"fileJoin" => "FileSearchRowBasic",
		"userJoin" => "EmployeeSearchRowBasic",
	);
}

