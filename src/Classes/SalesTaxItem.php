<?php

class SalesTaxItem extends Record {
	public $itemId;
	public $displayName;
	public $description;
	public $rate;
	public $taxType;
	public $taxAgency;
	public $purchaseAccount;
	public $saleAccount;
	public $isInactive;
	public $effectiveFrom;
	public $validUntil;
	public $subsidiaryList;
	public $includeChildren;
	public $eccode;
	public $reverseCharge;
	public $parent;
	public $service;
	public $exempt;
	public $isDefault;
	public $excludeFromTaxReports;
	public $available;
	public $export;
	public $taxAccount;
	public $county;
	public $city;
	public $state;
	public $zip;
	public $nexusCountry;
	public $internalId;
	public $externalId;
	static $paramtypesmap = array(
		"itemId" => "string",
		"displayName" => "string",
		"description" => "string",
		"rate" => "string",
		"taxType" => "RecordRef",
		"taxAgency" => "RecordRef",
		"purchaseAccount" => "RecordRef",
		"saleAccount" => "RecordRef",
		"isInactive" => "boolean",
		"effectiveFrom" => "dateTime",
		"validUntil" => "dateTime",
		"subsidiaryList" => "RecordRefList",
		"includeChildren" => "boolean",
		"eccode" => "boolean",
		"reverseCharge" => "boolean",
		"parent" => "RecordRef",
		"service" => "boolean",
		"exempt" => "boolean",
		"isDefault" => "boolean",
		"excludeFromTaxReports" => "boolean",
		"available" => "SalesTaxItemAvailable",
		"export" => "boolean",
		"taxAccount" => "RecordRef",
		"county" => "string",
		"city" => "string",
		"state" => "string",
		"zip" => "string",
		"nexusCountry" => "RecordRef",
		"internalId" => "string",
		"externalId" => "string",
	);
}

