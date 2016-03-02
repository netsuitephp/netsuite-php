<?php

namespace Fungku\NetSuite\Classes;

class PostingTransactionSummaryField {
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
		"period" => "boolean",
		"account" => "boolean",
		"parentItem" => "boolean",
		"item" => "boolean",
		"entity" => "boolean",
		"department" => "boolean",
		"class" => "boolean",
		"location" => "boolean",
		"subsidiary" => "boolean",
		"book" => "boolean",
	);
}

