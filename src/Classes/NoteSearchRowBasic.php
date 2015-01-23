<?php

class NoteSearchRowBasic extends SearchRowBasic {
	public $author;
	public $direction;
	public $externalId;
	public $internalId;
	public $note;
	public $noteDate;
	public $noteType;
	public $title;
	public $customFieldList;
	static $paramtypesmap = array(
		"author" => "SearchColumnSelectField[]",
		"direction" => "SearchColumnStringField[]",
		"externalId" => "SearchColumnSelectField[]",
		"internalId" => "SearchColumnSelectField[]",
		"note" => "SearchColumnStringField[]",
		"noteDate" => "SearchColumnDateField[]",
		"noteType" => "SearchColumnStringField[]",
		"title" => "SearchColumnStringField[]",
		"customFieldList" => "SearchColumnCustomFieldList",
	);
}

