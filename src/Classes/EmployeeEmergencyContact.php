<?php

namespace Fungku\NetSuite\Classes;

class EmployeeEmergencyContact {
	public $id;
	public $contact;
	public $relationship;
	public $address;
	public $phone;
	static $paramtypesmap = array(
		"id" => "integer",
		"contact" => "string",
		"relationship" => "string",
		"address" => "string",
		"phone" => "string",
	);
}

