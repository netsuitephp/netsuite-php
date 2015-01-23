<?php

class NoteSearchBasic extends SearchRecordBasic {
	public $author;
	public $direction;
	public $externalId;
	public $externalIdString;
	public $internalId;
	public $internalIdNumber;
	public $note;
	public $noteDate;
	public $noteType;
	public $title;
	public $customFieldList;
	static $paramtypesmap = array(
		"author" => "SearchMultiSelectField",
		"direction" => "SearchBooleanField",
		"externalId" => "SearchMultiSelectField",
		"externalIdString" => "SearchStringField",
		"internalId" => "SearchMultiSelectField",
		"internalIdNumber" => "SearchLongField",
		"note" => "SearchStringField",
		"noteDate" => "SearchDateField",
		"noteType" => "SearchMultiSelectField",
		"title" => "SearchStringField",
		"customFieldList" => "SearchCustomFieldList",
	);
}

