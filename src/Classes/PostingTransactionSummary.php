<?php

namespace Fungku\NetSuite\Classes;

class PostingTransactionSummary {
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
	public $amount;
	static $paramtypesmap = array(
		"period" => "RecordRef",
		"account" => "RecordRef",
		"parentItem" => "RecordRef",
		"item" => "RecordRef",
		"entity" => "RecordRef",
		"department" => "RecordRef",
		"class" => "RecordRef",
		"location" => "RecordRef",
		"subsidiary" => "RecordRef",
		"book" => "RecordRef",
		"amount" => "float",
	);
}

