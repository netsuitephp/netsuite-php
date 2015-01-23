<?php

class Message extends Record {
	public $author;
	public $recipient;
	public $cc;
	public $bcc;
	public $messageDate;
	public $recordName;
	public $recordTypeName;
	public $subject;
	public $message;
	public $emailed;
	public $activity;
	public $compressAttachments;
	public $incoming;
	public $lastModifiedDate;
	public $transaction;
	public $mediaItemList;
	public $dateTime;
	public $internalId;
	public $externalId;
	static $paramtypesmap = array(
		"author" => "RecordRef",
		"recipient" => "RecordRef",
		"cc" => "string",
		"bcc" => "string",
		"messageDate" => "dateTime",
		"recordName" => "string",
		"recordTypeName" => "string",
		"subject" => "string",
		"message" => "string",
		"emailed" => "boolean",
		"activity" => "RecordRef",
		"compressAttachments" => "boolean",
		"incoming" => "boolean",
		"lastModifiedDate" => "dateTime",
		"transaction" => "RecordRef",
		"mediaItemList" => "MessageMediaItemList",
		"dateTime" => "string",
		"internalId" => "string",
		"externalId" => "string",
	);
}

