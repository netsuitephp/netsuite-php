<?php

class ProjectTaskSearch extends SearchRecord {
	public $basic;
	public $jobJoin;
	public $predecessorJoin;
	public $projectTaskAssignmentJoin;
	public $successorJoin;
	public $timeJoin;
	public $userJoin;
	public $userNotesJoin;
	public $customSearchJoin;
	static $paramtypesmap = array(
		"basic" => "ProjectTaskSearchBasic",
		"jobJoin" => "JobSearchBasic",
		"predecessorJoin" => "ProjectTaskSearchBasic",
		"projectTaskAssignmentJoin" => "ProjectTaskAssignmentSearchBasic",
		"successorJoin" => "ProjectTaskSearchBasic",
		"timeJoin" => "TimeBillSearchBasic",
		"userJoin" => "EmployeeSearchBasic",
		"userNotesJoin" => "NoteSearchBasic",
		"customSearchJoin" => "CustomSearchJoin[]",
	);
}

