<?php

class RevRecTemplateSearchBasic extends SearchRecordBasic {
	public $amorMethod;
	public $amorPeriod;
	public $amorStartOffset;
	public $amorTermSrc;
	public $amorType;
	public $contraAccount;
	public $deferralAccount;
	public $externalId;
	public $externalIdString;
	public $internalId;
	public $internalIdNumber;
	public $isInactive;
	public $name;
	public $periodOffset;
	public $targetAccount;
	public $useForeignAmounts;
	static $paramtypesmap = array(
		"amorMethod" => "SearchEnumMultiSelectField",
		"amorPeriod" => "SearchLongField",
		"amorStartOffset" => "SearchLongField",
		"amorTermSrc" => "SearchEnumMultiSelectField",
		"amorType" => "SearchEnumMultiSelectField",
		"contraAccount" => "SearchMultiSelectField",
		"deferralAccount" => "SearchMultiSelectField",
		"externalId" => "SearchMultiSelectField",
		"externalIdString" => "SearchStringField",
		"internalId" => "SearchMultiSelectField",
		"internalIdNumber" => "SearchLongField",
		"isInactive" => "SearchBooleanField",
		"name" => "SearchStringField",
		"periodOffset" => "SearchLongField",
		"targetAccount" => "SearchMultiSelectField",
		"useForeignAmounts" => "SearchBooleanField",
	);
}

