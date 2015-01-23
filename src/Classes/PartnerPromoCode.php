<?php

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

