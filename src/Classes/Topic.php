<?php

class Topic extends Record {
	public $title;
	public $parentTopic;
	public $description;
	public $isInactive;
	public $longDescription;
	public $solutionList;
	public $internalId;
	public $externalId;
	static $paramtypesmap = array(
		"title" => "string",
		"parentTopic" => "RecordRef",
		"description" => "string",
		"isInactive" => "boolean",
		"longDescription" => "string",
		"solutionList" => "TopicSolutionList",
		"internalId" => "string",
		"externalId" => "string",
	);
}

