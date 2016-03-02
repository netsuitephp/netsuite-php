<?php

namespace Fungku\NetSuite\Classes;

class TopicSearchRow extends SearchRow {
	public $basic;
	public $solutionJoin;
	public $userJoin;
	static $paramtypesmap = array(
		"basic" => "TopicSearchRowBasic",
		"solutionJoin" => "SolutionSearchRowBasic",
		"userJoin" => "EmployeeSearchRowBasic",
	);
}

