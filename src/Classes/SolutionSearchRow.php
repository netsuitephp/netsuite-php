<?php namespace Fungku\NetSuite\Classes;

class SolutionSearchRow extends SearchRow {
	public $basic;
	public $caseJoin;
	public $relatedSolutionJoin;
	public $topicJoin;
	public $userJoin;
	public $userNotesJoin;
	public $customSearchJoin;
	static $paramtypesmap = array(
		"basic" => "SolutionSearchRowBasic",
		"caseJoin" => "SupportCaseSearchRowBasic",
		"relatedSolutionJoin" => "SolutionSearchRowBasic",
		"topicJoin" => "TopicSearchRowBasic",
		"userJoin" => "EmployeeSearchRowBasic",
		"userNotesJoin" => "NoteSearchRowBasic",
		"customSearchJoin" => "CustomSearchRowBasic[]",
	);
}

