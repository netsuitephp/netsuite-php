<?php

namespace Fungku\NetSuite\Classes;

class PhoneCallContact {
	public $company;
	public $contact;
	public $phone;
	public $email;
	static $paramtypesmap = array(
		"company" => "RecordRef",
		"contact" => "RecordRef",
		"phone" => "string",
		"email" => "string",
	);
}

