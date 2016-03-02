<?php

namespace Fungku\NetSuite\Classes;

class BillingScheduleMilestone {
	public $milestoneId;
	public $milestoneAmount;
	public $milestoneTerms;
	public $projectTask;
	public $milestoneDate;
	public $milestoneCompleted;
	public $milestoneActualCompletionDate;
	public $comments;
	static $paramtypesmap = array(
		"milestoneId" => "integer",
		"milestoneAmount" => "float",
		"milestoneTerms" => "RecordRef",
		"projectTask" => "RecordRef",
		"milestoneDate" => "dateTime",
		"milestoneCompleted" => "boolean",
		"milestoneActualCompletionDate" => "dateTime",
		"comments" => "string",
	);
}

