<?php namespace Fungku\NetSuite\Classes;

class PromotionCode extends Record {
	public $implementation;
	public $customForm;
	public $useType;
	public $displayLineDiscounts;
	public $code;
	public $codePattern;
	public $numberToGenerate;
	public $description;
	public $locationList;
	public $isInactive;
	public $discount;
	public $rate;
	public $discountType;
	public $applyDiscountTo;
	public $freeShipMethod;
	public $minimumOrderAmount;
	public $startDate;
	public $endDate;
	public $isPublic;
	public $currencyList;
	public $excludeItems;
	public $name;
	public $itemsList;
	public $partnersList;
	public $customFieldList;
	public $internalId;
	public $externalId;
	static $paramtypesmap = array(
		"implementation" => "RecordRef",
		"customForm" => "RecordRef",
		"useType" => "PromotionCodeUseType",
		"displayLineDiscounts" => "boolean",
		"code" => "string",
		"codePattern" => "string",
		"numberToGenerate" => "integer",
		"description" => "string",
		"locationList" => "RecordRefList",
		"isInactive" => "boolean",
		"discount" => "RecordRef",
		"rate" => "string",
		"discountType" => "boolean",
		"applyDiscountTo" => "PromotionCodeApplyDiscountTo",
		"freeShipMethod" => "RecordRef",
		"minimumOrderAmount" => "float",
		"startDate" => "dateTime",
		"endDate" => "dateTime",
		"isPublic" => "boolean",
		"currencyList" => "PromotionCodeCurrencyList",
		"excludeItems" => "boolean",
		"name" => "string",
		"itemsList" => "PromotionCodeItemsList",
		"partnersList" => "PromotionCodePartnersList",
		"customFieldList" => "CustomFieldList",
		"internalId" => "string",
		"externalId" => "string",
	);
}

