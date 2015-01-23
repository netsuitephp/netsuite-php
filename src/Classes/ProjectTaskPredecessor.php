<?php

class ProjectTaskPredecessor {
	public $task;
	public $type;
	public $lagDays;
	public $startDate;
	public $endDate;
	static $paramtypesmap = array(
		"task" => "RecordRef",
		"type" => "ProjectTaskPredecessorPredecessorType",
		"lagDays" => "float",
		"startDate" => "dateTime",
		"endDate" => "dateTime",
	);
}

