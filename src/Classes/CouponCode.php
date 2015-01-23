<?php

class CouponCode extends Record {
	public $promotion;
	public $code;
	public $recipient;
	public $dateSent;
	public $used;
	public $useCount;
	public $internalId;
	public $externalId;
	static $paramtypesmap = array(
		"promotion" => "RecordRef",
		"code" => "string",
		"recipient" => "RecordRef",
		"dateSent" => "dateTime",
		"used" => "boolean",
		"useCount" => "integer",
		"internalId" => "string",
		"externalId" => "string",
	);
}

