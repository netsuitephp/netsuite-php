<?php

class GetSelectValueFieldDescription {
	public $recordType;
	public $customRecordType;
	public $sublist;
	public $field;
	public $customForm;
	public $filter;
	public $filterByValueList;
	static $paramtypesmap = array(
		"recordType" => "RecordType",
		"customRecordType" => "RecordRef",
		"sublist" => "string",
		"field" => "string",
		"customForm" => "RecordRef",
		"filter" => "GetSelectValueFilter",
		"filterByValueList" => "GetSelectFilterByFieldValueList",
	);
}

