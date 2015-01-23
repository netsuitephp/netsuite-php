<?php

class SolutionSearch extends SearchRecord {
	public $basic;
	public $caseJoin;
	public $relatedSolutionJoin;
	public $topicJoin;
	public $userJoin;
	public $userNotesJoin;
	public $customSearchJoin;
	static $paramtypesmap = array(
		"basic" => "SolutionSearchBasic",
		"caseJoin" => "SupportCaseSearchBasic",
		"relatedSolutionJoin" => "SolutionSearchBasic",
		"topicJoin" => "TopicSearchBasic",
		"userJoin" => "EmployeeSearchBasic",
		"userNotesJoin" => "NoteSearchBasic",
		"customSearchJoin" => "CustomSearchJoin[]",
	);
}

