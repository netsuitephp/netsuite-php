<?php

class MessageSearchRowBasic extends SearchRowBasic {
	public $author;
	public $authorEmail;
	public $bcc;
	public $cc;
	public $externalId;
	public $hasAttachment;
	public $internalId;
	public $internalOnly;
	public $isEmailed;
	public $isIncoming;
	public $message;
	public $messageDate;
	public $messageType;
	public $recipient;
	public $recipientEmail;
	public $subject;
	static $paramtypesmap = array(
		"author" => "SearchColumnSelectField[]",
		"authorEmail" => "SearchColumnStringField[]",
		"bcc" => "SearchColumnStringField[]",
		"cc" => "SearchColumnStringField[]",
		"externalId" => "SearchColumnSelectField[]",
		"hasAttachment" => "SearchColumnBooleanField[]",
		"internalId" => "SearchColumnSelectField[]",
		"internalOnly" => "SearchColumnBooleanField[]",
		"isEmailed" => "SearchColumnBooleanField[]",
		"isIncoming" => "SearchColumnBooleanField[]",
		"message" => "SearchColumnStringField[]",
		"messageDate" => "SearchColumnDateField[]",
		"messageType" => "SearchColumnEnumSelectField[]",
		"recipient" => "SearchColumnSelectField[]",
		"recipientEmail" => "SearchColumnStringField[]",
		"subject" => "SearchColumnStringField[]",
	);
}

