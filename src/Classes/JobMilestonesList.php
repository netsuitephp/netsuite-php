<?php

namespace Fungku\NetSuite\Classes;

class JobMilestonesList {
	public $milestones;
	public $replaceAll;
	static $paramtypesmap = array(
		"milestones" => "JobMilestones[]",
		"replaceAll" => "boolean",
	);
}

