<?php

class EmployeeSubscriptions {
	public $subscribed;
	public $subscription;
	public $lastModifiedDate;
	static $paramtypesmap = array(
		"subscribed" => "string",
		"subscription" => "string",
		"lastModifiedDate" => "dateTime",
	);
}

