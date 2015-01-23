<?php

class PromotionCodePartners {
	public $partner;
	public $code;
	static $paramtypesmap = array(
		"partner" => "RecordRef",
		"code" => "string",
	);
}

