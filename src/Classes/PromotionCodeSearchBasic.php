<?php

class PromotionCodeSearchBasic extends SearchRecordBasic {
	public $applyDiscountTo;
	public $code;
	public $description;
	public $discount;
	public $discountAmount;
	public $endDate;
	public $externalId;
	public $externalIdString;
	public $freeShipItem;
	public $internalId;
	public $internalIdNumber;
	public $isInactive;
	public $isPublic;
	public $item;
	public $name;
	public $partner;
	public $startDate;
	public $customFieldList;
	static $paramtypesmap = array(
		"applyDiscountTo" => "SearchEnumMultiSelectField",
		"code" => "SearchStringField",
		"description" => "SearchStringField",
		"discount" => "SearchMultiSelectField",
		"discountAmount" => "SearchDoubleField",
		"endDate" => "SearchDateField",
		"externalId" => "SearchMultiSelectField",
		"externalIdString" => "SearchStringField",
		"freeShipItem" => "SearchMultiSelectField",
		"internalId" => "SearchMultiSelectField",
		"internalIdNumber" => "SearchLongField",
		"isInactive" => "SearchBooleanField",
		"isPublic" => "SearchBooleanField",
		"item" => "SearchMultiSelectField",
		"name" => "SearchStringField",
		"partner" => "SearchMultiSelectField",
		"startDate" => "SearchDateField",
		"customFieldList" => "SearchCustomFieldList",
	);
}

