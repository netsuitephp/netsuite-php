<?php

namespace Fungku\NetSuite\Classes;

class StatisticalJournalEntry extends Record {
	public $createdDate;
	public $lastModifiedDate;
	public $customForm;
	public $tranId;
	public $parentExpenseAlloc;
	public $approved;
	public $tranDate;
	public $postingPeriod;
	public $reversalDate;
	public $memo;
	public $reversalDefer;
	public $subsidiary;
	public $unitsType;
	public $lineList;
	public $customFieldList;
	public $internalId;
	public $externalId;
	static $paramtypesmap = array(
		"createdDate" => "dateTime",
		"lastModifiedDate" => "dateTime",
		"customForm" => "RecordRef",
		"tranId" => "string",
		"parentExpenseAlloc" => "RecordRef",
		"approved" => "boolean",
		"tranDate" => "dateTime",
		"postingPeriod" => "RecordRef",
		"reversalDate" => "dateTime",
		"memo" => "string",
		"reversalDefer" => "boolean",
		"subsidiary" => "RecordRef",
		"unitsType" => "RecordRef",
		"lineList" => "StatisticalJournalEntryLineList",
		"customFieldList" => "CustomFieldList",
		"internalId" => "string",
		"externalId" => "string",
	);
}

