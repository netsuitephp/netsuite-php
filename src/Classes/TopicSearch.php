<?php namespace Fungku\NetSuite\Classes;

class TopicSearch extends SearchRecord {
	public $basic;
	public $solutionJoin;
	public $userJoin;
	static $paramtypesmap = array(
		"basic" => "TopicSearchBasic",
		"solutionJoin" => "SolutionSearchBasic",
		"userJoin" => "EmployeeSearchBasic",
	);
}

