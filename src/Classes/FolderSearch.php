<?php

class FolderSearch extends SearchRecord {
	public $basic;
	public $fileJoin;
	public $userJoin;
	static $paramtypesmap = array(
		"basic" => "FolderSearchBasic",
		"fileJoin" => "FileSearchBasic",
		"userJoin" => "EmployeeSearchBasic",
	);
}

