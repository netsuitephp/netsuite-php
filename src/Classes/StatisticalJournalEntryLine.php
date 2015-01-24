<?php namespace Fungku\NetSuite\Classes;

class StatisticalJournalEntryLine {
	public $account;
	public $location;
	public $scheduleNum;
	public $debit;
	public $memo;
	public $entity;
	public $department;
	public $class;
	public $lineUnit;
	public $previewDebit;
	public $customFieldList;
	static $paramtypesmap = array(
		"account" => "RecordRef",
		"location" => "RecordRef",
		"scheduleNum" => "RecordRef",
		"debit" => "float",
		"memo" => "string",
		"entity" => "RecordRef",
		"department" => "RecordRef",
		"class" => "RecordRef",
		"lineUnit" => "RecordRef",
		"previewDebit" => "string",
		"customFieldList" => "CustomFieldList",
	);
}

