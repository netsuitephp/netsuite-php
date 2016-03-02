<?php

namespace Fungku\NetSuite\Classes;

class PromotionCodePartners {
	public $partner;
	public $code;
	static $paramtypesmap = array(
		"partner" => "RecordRef",
		"code" => "string",
	);
}

