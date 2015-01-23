<?php

class RevRecTemplateSearchRowBasic extends SearchRowBasic {
	public $amorMethod;
	public $amorPeriod;
	public $amorStartOffset;
	public $amorTermSrc;
	public $amorType;
	public $contraAccount;
	public $deferralAccount;
	public $externalId;
	public $internalId;
	public $isInactive;
	public $name;
	public $periodOffset;
	public $targetAccount;
	public $useForeignAmounts;
	static $paramtypesmap = array(
		"amorMethod" => "SearchColumnStringField[]",
		"amorPeriod" => "SearchColumnStringField[]",
		"amorStartOffset" => "SearchColumnStringField[]",
		"amorTermSrc" => "SearchColumnStringField[]",
		"amorType" => "SearchColumnStringField[]",
		"contraAccount" => "SearchColumnStringField[]",
		"deferralAccount" => "SearchColumnStringField[]",
		"externalId" => "SearchColumnStringField[]",
		"internalId" => "SearchColumnLongField[]",
		"isInactive" => "SearchColumnStringField[]",
		"name" => "SearchColumnStringField[]",
		"periodOffset" => "SearchColumnStringField[]",
		"targetAccount" => "SearchColumnStringField[]",
		"useForeignAmounts" => "SearchColumnBooleanField[]",
	);
}

