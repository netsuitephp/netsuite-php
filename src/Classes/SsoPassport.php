<?php

namespace Fungku\NetSuite\Classes;

class SsoPassport {
	public $authenticationToken;
	public $partnerId;
	public $partnerAccount;
	public $partnerUserId;
	static $paramtypesmap = array(
		"authenticationToken" => "string",
		"partnerId" => "string",
		"partnerAccount" => "string",
		"partnerUserId" => "string",
	);
}

