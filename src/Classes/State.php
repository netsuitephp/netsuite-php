<?php

class State extends Record {
	public $country;
	public $fullName;
	public $shortname;
	public $internalId;
	static $paramtypesmap = array(
		"country" => "Country",
		"fullName" => "string",
		"shortname" => "string",
		"internalId" => "string",
	);
}

