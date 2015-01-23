<?php

class CouponCodeSearchBasic extends SearchRecordBasic {
	public $code;
	public $dateSent;
	public $id;
	public $internalId;
	public $internalIdNumber;
	public $promotion;
	public $recipient;
	public $useCount;
	public $used;
	static $paramtypesmap = array(
		"code" => "SearchStringField",
		"dateSent" => "SearchDateField",
		"id" => "SearchLongField",
		"internalId" => "SearchMultiSelectField",
		"internalIdNumber" => "SearchLongField",
		"promotion" => "SearchMultiSelectField",
		"recipient" => "SearchMultiSelectField",
		"useCount" => "SearchLongField",
		"used" => "SearchBooleanField",
	);
}

