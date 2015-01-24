<?php namespace Fungku\NetSuite\Classes;

class EmployeeSubscriptionsList {
	public $subscriptions;
	public $replaceAll;
	static $paramtypesmap = array(
		"subscriptions" => "EmployeeSubscriptions[]",
		"replaceAll" => "boolean",
	);
}

