<?php

namespace Fungku\NetSuite\Classes;

class Note extends Record {
	public $title;
	public $noteType;
	public $direction;
	public $noteDate;
	public $note;
	public $lastModifiedDate;
	public $activity;
	public $author;
	public $entity;
	public $folder;
	public $item;
	public $media;
	public $record;
	public $recordType;
	public $topic;
	public $transaction;
	public $customForm;
	public $customFieldList;
	public $internalId;
	public $externalId;
	static $paramtypesmap = array(
		"title" => "string",
		"noteType" => "RecordRef",
		"direction" => "NoteDirection",
		"noteDate" => "dateTime",
		"note" => "string",
		"lastModifiedDate" => "dateTime",
		"activity" => "RecordRef",
		"author" => "RecordRef",
		"entity" => "RecordRef",
		"folder" => "RecordRef",
		"item" => "RecordRef",
		"media" => "RecordRef",
		"record" => "RecordRef",
		"recordType" => "RecordRef",
		"topic" => "RecordRef",
		"transaction" => "RecordRef",
		"customForm" => "RecordRef",
		"customFieldList" => "CustomFieldList",
		"internalId" => "string",
		"externalId" => "string",
	);
}

