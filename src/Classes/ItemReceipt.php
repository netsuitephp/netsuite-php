<?php

class ItemReceipt extends Record {
	public $createdDate;
	public $lastModifiedDate;
	public $customForm;
	public $exchangeRate;
	public $entity;
	public $currencyName;
	public $subsidiary;
	public $createdFrom;
	public $tranDate;
	public $partner;
	public $postingPeriod;
	public $tranId;
	public $memo;
	public $currency;
	public $landedCostMethod;
	public $landedCostPerLine;
	public $itemList;
	public $expenseList;
	public $landedCostsList;
	public $customFieldList;
	public $internalId;
	public $externalId;
	static $paramtypesmap = array(
		"createdDate" => "dateTime",
		"lastModifiedDate" => "dateTime",
		"customForm" => "RecordRef",
		"exchangeRate" => "float",
		"entity" => "RecordRef",
		"currencyName" => "string",
		"subsidiary" => "RecordRef",
		"createdFrom" => "RecordRef",
		"tranDate" => "dateTime",
		"partner" => "RecordRef",
		"postingPeriod" => "RecordRef",
		"tranId" => "string",
		"memo" => "string",
		"currency" => "RecordRef",
		"landedCostMethod" => "LandedCostMethod",
		"landedCostPerLine" => "boolean",
		"itemList" => "ItemReceiptItemList",
		"expenseList" => "ItemReceiptExpenseList",
		"landedCostsList" => "PurchLandedCostList",
		"customFieldList" => "CustomFieldList",
		"internalId" => "string",
		"externalId" => "string",
	);
}

