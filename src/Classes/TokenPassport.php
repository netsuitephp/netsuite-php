<?php

namespace Fungku\NetSuite\Classes;

class TokenPassport {
	public $account;
	public $consumerKey;
	public $token;
	public $nonce;
	public $timestamp;
	public $signature;
	static $paramtypesmap = array(
		"account" => "string",
		"consumerKey" => "string",
		"token" => "string",
		"nonce" => "string",
		"timestamp" => "integer",
		"signature" => "TokenPassportSignature",
	);
}

