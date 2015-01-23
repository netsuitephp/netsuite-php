<?php

class EntityGroup extends Record {
	public $groupName;
	public $groupType;
	public $email;
	public $groupOwner;
	public $isSavedSearch;
	public $parentGroupType;
	public $savedSearch;
	public $isSalesTeam;
	public $comments;
	public $isPrivate;
	public $restrictionGroup;
	public $isInactive;
	public $isSalesRep;
	public $isSupportRep;
	public $isProductTeam;
	public $isFunctionalTeam;
	public $issueRole;
	public $isManufacturingWorkCenter;
	public $calendarName;
	public $calendarStartTime;
	public $calendarEndTime;
	public $calendarDefaultView;
	public $calendarPeriod;
	public $subsidiary;
	public $machineResources;
	public $laborResources;
	public $workCalendar;
	public $customFieldList;
	public $internalId;
	public $externalId;
	static $paramtypesmap = array(
		"groupName" => "string",
		"groupType" => "EntityGroupType",
		"email" => "string",
		"groupOwner" => "RecordRef",
		"isSavedSearch" => "boolean",
		"parentGroupType" => "EntityGroupType",
		"savedSearch" => "RecordRef",
		"isSalesTeam" => "boolean",
		"comments" => "string",
		"isPrivate" => "boolean",
		"restrictionGroup" => "RecordRef",
		"isInactive" => "boolean",
		"isSalesRep" => "boolean",
		"isSupportRep" => "boolean",
		"isProductTeam" => "boolean",
		"isFunctionalTeam" => "boolean",
		"issueRole" => "RecordRef",
		"isManufacturingWorkCenter" => "boolean",
		"calendarName" => "string",
		"calendarStartTime" => "EntityGroupDailyTime",
		"calendarEndTime" => "EntityGroupDailyTime",
		"calendarDefaultView" => "EntityGroupDefView",
		"calendarPeriod" => "EntityGroupPeriodSize",
		"subsidiary" => "RecordRef",
		"machineResources" => "integer",
		"laborResources" => "integer",
		"workCalendar" => "RecordRef",
		"customFieldList" => "CustomFieldList",
		"internalId" => "string",
		"externalId" => "string",
	);
}

