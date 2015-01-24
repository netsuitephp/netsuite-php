<?php namespace Fungku\NetSuite\Classes;

class CustomRecordTypeSublists {
	public $recordSearch;
	public $recordDescr;
	public $recordDescrLanguageValueList;
	public $recordTab;
	public $recordId;
	static $paramtypesmap = array(
		"recordSearch" => "RecordRef",
		"recordDescr" => "string",
		"recordDescrLanguageValueList" => "LanguageValueList",
		"recordTab" => "RecordRef",
		"recordId" => "string",
	);
}

