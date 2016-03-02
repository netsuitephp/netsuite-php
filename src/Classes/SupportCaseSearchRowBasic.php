<?php

namespace Fungku\NetSuite\Classes;

class SupportCaseSearchRowBasic extends SearchRowBasic {
	public $assigned;
	public $awaitingReply;
	public $caseNumber;
	public $category;
	public $company;
	public $contact;
	public $createdDate;
	public $customerStage;
	public $email;
	public $endDate;
	public $escalatee;
	public $externalId;
	public $helpDesk;
	public $inboundEmail;
	public $internalId;
	public $isInactive;
	public $issue;
	public $issueNumber;
	public $item;
	public $lastMessageDate;
	public $lastModifiedDate;
	public $lastReopenedDate;
	public $locked;
	public $module;
	public $origin;
	public $priority;
	public $product;
	public $profile;
	public $serialNumber;
	public $stage;
	public $startDate;
	public $status;
	public $subsidiary;
	public $title;
	public $customFieldList;
	static $paramtypesmap = array(
		"assigned" => "SearchColumnSelectField[]",
		"awaitingReply" => "SearchColumnBooleanField[]",
		"caseNumber" => "SearchColumnStringField[]",
		"category" => "SearchColumnSelectField[]",
		"company" => "SearchColumnSelectField[]",
		"contact" => "SearchColumnSelectField[]",
		"createdDate" => "SearchColumnDateField[]",
		"customerStage" => "SearchColumnEnumSelectField[]",
		"email" => "SearchColumnStringField[]",
		"endDate" => "SearchColumnDateField[]",
		"escalatee" => "SearchColumnSelectField[]",
		"externalId" => "SearchColumnSelectField[]",
		"helpDesk" => "SearchColumnBooleanField[]",
		"inboundEmail" => "SearchColumnStringField[]",
		"internalId" => "SearchColumnSelectField[]",
		"isInactive" => "SearchColumnBooleanField[]",
		"issue" => "SearchColumnSelectField[]",
		"issueNumber" => "SearchColumnStringField[]",
		"item" => "SearchColumnSelectField[]",
		"lastMessageDate" => "SearchColumnDateField[]",
		"lastModifiedDate" => "SearchColumnDateField[]",
		"lastReopenedDate" => "SearchColumnDateField[]",
		"locked" => "SearchColumnBooleanField[]",
		"module" => "SearchColumnSelectField[]",
		"origin" => "SearchColumnSelectField[]",
		"priority" => "SearchColumnSelectField[]",
		"product" => "SearchColumnSelectField[]",
		"profile" => "SearchColumnSelectField[]",
		"serialNumber" => "SearchColumnStringField[]",
		"stage" => "SearchColumnEnumSelectField[]",
		"startDate" => "SearchColumnDateField[]",
		"status" => "SearchColumnSelectField[]",
		"subsidiary" => "SearchColumnSelectField[]",
		"title" => "SearchColumnStringField[]",
		"customFieldList" => "SearchColumnCustomFieldList",
	);
}

