<?php

class ProjectTaskSearchRow extends SearchRow {
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
		"basic" => "ProjectTaskSearchRowBasic",
		"jobJoin" => "JobSearchRowBasic",
		"predecessorJoin" => "ProjectTaskSearchRowBasic",
		"projectTaskAssignmentJoin" => "ProjectTaskAssignmentSearchRowBasic",
		"successorJoin" => "ProjectTaskSearchRowBasic",
		"timeJoin" => "TimeBillSearchRowBasic",
		"userJoin" => "EmployeeSearchRowBasic",
		"userNotesJoin" => "NoteSearchRowBasic",
		"customSearchJoin" => "CustomSearchRowBasic[]",
	);
}

