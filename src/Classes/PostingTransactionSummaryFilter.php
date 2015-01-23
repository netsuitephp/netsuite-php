<?php

class PostingTransactionSummaryFilter {
	public $period;
	public $account;
	public $parentItem;
	public $item;
	public $entity;
	public $department;
	public $class;
	public $location;
	public $subsidiary;
	public $book;
	static $paramtypesmap = array(
		"period" => "RecordRefList",
		"account" => "RecordRefList",
		"parentItem" => "RecordRefList",
		"item" => "RecordRefList",
		"entity" => "RecordRefList",
		"department" => "RecordRefList",
		"class" => "RecordRefList",
		"location" => "RecordRefList",
		"subsidiary" => "RecordRefList",
		"book" => "RecordRefList",
	);
}

