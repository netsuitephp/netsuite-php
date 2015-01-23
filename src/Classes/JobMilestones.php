<?php

class JobMilestones {
	public $milestoneName;
	public $milestoneOrder;
	public $milestoneEstComplete;
	public $milestoneCompleted;
	public $milestoneComments;
	static $paramtypesmap = array(
		"milestoneName" => "string",
		"milestoneOrder" => "string",
		"milestoneEstComplete" => "dateTime",
		"milestoneCompleted" => "boolean",
		"milestoneComments" => "string",
	);
}

