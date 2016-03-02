<?php

namespace Fungku\NetSuite\Classes;

class IssueRelatedIssues {
	public $relationship;
	public $issueNumber;
	public $relationshipComment;
	static $paramtypesmap = array(
		"relationship" => "IssueRelationship",
		"issueNumber" => "RecordRef",
		"relationshipComment" => "string",
	);
}

