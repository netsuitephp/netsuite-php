<?php namespace Fungku\NetSuite\Classes;

class GiftCertRedemption {
	public $authCode;
	public $authCodeApplied;
	public $authCodeAmtRemaining;
	public $giftCertAvailable;
	static $paramtypesmap = array(
		"authCode" => "RecordRef",
		"authCodeApplied" => "float",
		"authCodeAmtRemaining" => "float",
		"giftCertAvailable" => "float",
	);
}

