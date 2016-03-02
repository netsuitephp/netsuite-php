<?php

namespace Fungku\NetSuite\Classes;

class PromotionCodeSearchRowBasic extends SearchRowBasic {
	public $code;
	public $description;
	public $discount;
	public $discountAmount;
	public $endDate;
	public $externalId;
	public $internalId;
	public $isInactive;
	public $isPublic;
	public $location;
	public $name;
	public $startDate;
	public $customFieldList;
	static $paramtypesmap = array(
		"code" => "SearchColumnStringField[]",
		"description" => "SearchColumnStringField[]",
		"discount" => "SearchColumnStringField[]",
		"discountAmount" => "SearchColumnDoubleField[]",
		"endDate" => "SearchColumnDateField[]",
		"externalId" => "SearchColumnSelectField[]",
		"internalId" => "SearchColumnSelectField[]",
		"isInactive" => "SearchColumnBooleanField[]",
		"isPublic" => "SearchColumnBooleanField[]",
		"location" => "SearchColumnSelectField[]",
		"name" => "SearchColumnStringField[]",
		"startDate" => "SearchColumnDateField[]",
		"customFieldList" => "SearchColumnCustomFieldList",
	);
}

