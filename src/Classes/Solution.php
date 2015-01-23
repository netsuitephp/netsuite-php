<?php

class Solution extends Record {
	public $customForm;
	public $solutionCode;
	public $title;
	public $message;
	public $status;
	public $displayOnline;
	public $assigned;
	public $isInactive;
	public $longDescription;
	public $topicsList;
	public $createdDate;
	public $lastModifiedDate;
	public $solutionsList;
	public $customFieldList;
	public $internalId;
	public $externalId;
	static $paramtypesmap = array(
		"customForm" => "RecordRef",
		"solutionCode" => "string",
		"title" => "string",
		"message" => "string",
		"status" => "SolutionStatus",
		"displayOnline" => "boolean",
		"assigned" => "RecordRef",
		"isInactive" => "boolean",
		"longDescription" => "string",
		"topicsList" => "SolutionTopicsList",
		"createdDate" => "dateTime",
		"lastModifiedDate" => "dateTime",
		"solutionsList" => "SolutionsList",
		"customFieldList" => "CustomFieldList",
		"internalId" => "string",
		"externalId" => "string",
	);
}

