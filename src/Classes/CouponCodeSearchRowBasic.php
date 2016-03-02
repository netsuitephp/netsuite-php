<?php

namespace Fungku\NetSuite\Classes;

class CouponCodeSearchRowBasic extends SearchRowBasic {
	public $code;
	public $dateSent;
	public $id;
	public $internalId;
	public $promotion;
	public $recipient;
	public $useCount;
	public $used;
	static $paramtypesmap = array(
		"code" => "SearchColumnStringField[]",
		"dateSent" => "SearchColumnDateField[]",
		"id" => "SearchColumnLongField[]",
		"internalId" => "SearchColumnSelectField[]",
		"promotion" => "SearchColumnStringField[]",
		"recipient" => "SearchColumnStringField[]",
		"useCount" => "SearchColumnLongField[]",
		"used" => "SearchColumnBooleanField[]",
	);
}

