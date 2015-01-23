<?php

class Subscriptions {
	public $subscribed;
	public $subscription;
	public $lastModifiedDate;
	static $paramtypesmap = array(
		"subscribed" => "boolean",
		"subscription" => "RecordRef",
		"lastModifiedDate" => "dateTime",
	);
}

