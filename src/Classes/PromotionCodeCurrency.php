<?php

class PromotionCodeCurrency {
	public $currency;
	public $minimumOrderAmount;
	static $paramtypesmap = array(
		"currency" => "RecordRef",
		"minimumOrderAmount" => "float",
	);
}

