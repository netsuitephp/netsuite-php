<?php

namespace Fungku\NetSuite\Classes;

class PhoneCallSearchRowBasic extends SearchRowBasic {
	public $accessLevel;
	public $assigned;
	public $company;
	public $completedDate;
	public $contact;
	public $createdDate;
	public $endDate;
	public $externalId;
	public $internalId;
	public $lastModifiedDate;
	public $markdone;
	public $message;
	public $owner;
	public $phone;
	public $priority;
	public $startDate;
	public $startTime;
	public $status;
	public $title;
	public $transaction;
	public $customFieldList;
	static $paramtypesmap = array(
		"accessLevel" => "SearchColumnStringField[]",
		"assigned" => "SearchColumnSelectField[]",
		"company" => "SearchColumnSelectField[]",
		"completedDate" => "SearchColumnDateField[]",
		"contact" => "SearchColumnSelectField[]",
		"createdDate" => "SearchColumnDateField[]",
		"endDate" => "SearchColumnDateField[]",
		"externalId" => "SearchColumnSelectField[]",
		"internalId" => "SearchColumnSelectField[]",
		"lastModifiedDate" => "SearchColumnDateField[]",
		"markdone" => "SearchColumnStringField[]",
		"message" => "SearchColumnStringField[]",
		"owner" => "SearchColumnSelectField[]",
		"phone" => "SearchColumnStringField[]",
		"priority" => "SearchColumnEnumSelectField[]",
		"startDate" => "SearchColumnDateField[]",
		"startTime" => "SearchColumnDateField[]",
		"status" => "SearchColumnEnumSelectField[]",
		"title" => "SearchColumnStringField[]",
		"transaction" => "SearchColumnSelectField[]",
		"customFieldList" => "SearchColumnCustomFieldList",
	);
}

