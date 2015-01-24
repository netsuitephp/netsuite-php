<?php namespace Fungku\NetSuite\Classes;

class Partners {
	public $partner;
	public $partnerRole;
	public $isPrimary;
	public $contribution;
	static $paramtypesmap = array(
		"partner" => "RecordRef",
		"partnerRole" => "RecordRef",
		"isPrimary" => "boolean",
		"contribution" => "float",
	);
}

