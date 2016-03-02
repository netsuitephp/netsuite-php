<?php

namespace Fungku\NetSuite\Classes;

class ProjectTaskSearch extends SearchRecord {
	public $basic;
	public $jobJoin;
	public $predecessorJoin;
	public $projectTaskAssignmentJoin;
	public $resourceAllocationJoin;
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
		"resourceAllocationJoin" => "ResourceAllocationSearchBasic",
		"successorJoin" => "ProjectTaskSearchBasic",
		"timeJoin" => "TimeBillSearchBasic",
		"userJoin" => "EmployeeSearchBasic",
		"userNotesJoin" => "NoteSearchBasic",
		"customSearchJoin" => "CustomSearchJoin[]",
	);
}

