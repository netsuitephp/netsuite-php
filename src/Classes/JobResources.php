<?php

namespace Fungku\NetSuite\Classes;

class JobResources {
	public $jobResource;
	public $email;
	public $role;
	static $paramtypesmap = array(
		"jobResource" => "RecordRef",
		"email" => "string",
		"role" => "RecordRef",
	);
}

