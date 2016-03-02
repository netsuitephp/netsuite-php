<?php

namespace Fungku\NetSuite\Classes;

class MessageSearchBasic extends SearchRecordBasic {
	public $author;
	public $authorEmail;
	public $bcc;
	public $cc;
	public $externalId;
	public $externalIdString;
	public $hasAttachment;
	public $internalId;
	public $internalIdNumber;
	public $internalOnly;
	public $message;
	public $messageDate;
	public $messageType;
	public $recipient;
	public $recipientEmail;
	public $subject;
	static $paramtypesmap = array(
		"author" => "SearchMultiSelectField",
		"authorEmail" => "SearchStringField",
		"bcc" => "SearchStringField",
		"cc" => "SearchStringField",
		"externalId" => "SearchMultiSelectField",
		"externalIdString" => "SearchStringField",
		"hasAttachment" => "SearchBooleanField",
		"internalId" => "SearchMultiSelectField",
		"internalIdNumber" => "SearchLongField",
		"internalOnly" => "SearchBooleanField",
		"message" => "SearchStringField",
		"messageDate" => "SearchDateField",
		"messageType" => "SearchEnumMultiSelectField",
		"recipient" => "SearchMultiSelectField",
		"recipientEmail" => "SearchStringField",
		"subject" => "SearchStringField",
	);
}

