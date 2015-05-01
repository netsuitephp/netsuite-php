<?php namespace Fungku\NetSuite\Classes;

class GetSelectValueFieldDescription {
	public $recordType;
	public $customRecordType;
	public $customTransactionType;
	public $sublist;
	public $field;
	public $customForm;
	public $filter;
	public $filterByValueList;
	static $paramtypesmap = array(
		"recordType" => "RecordType",
		"customRecordType" => "RecordRef",
		"customTransactionType" => "RecordRef",
		"sublist" => "string",
		"field" => "string",
		"customForm" => "RecordRef",
		"filter" => "GetSelectValueFilter",
		"filterByValueList" => "GetSelectFilterByFieldValueList",
	);
}

