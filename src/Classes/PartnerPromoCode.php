<?php

namespace Fungku\NetSuite\Classes;

class PartnerPromoCode {
	public $promoCode;
	public $discount;
	public $endDate;
	static $paramtypesmap = array(
		"promoCode" => "RecordRef",
		"discount" => "string",
		"endDate" => "dateTime",
	);
}

