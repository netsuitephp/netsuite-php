<?php

class ItemDemandPlan extends Record {
	public $customForm;
	public $subsidiary;
	public $location;
	public $item;
	public $units;
	public $memo;
	public $year;
	public $month;
	public $startDate;
	public $endDate;
	public $demandPlanCalendarType;
	public $demandPlanMatrix;
	public $customFieldList;
	public $internalId;
	public $externalId;
	static $paramtypesmap = array(
		"customForm" => "RecordRef",
		"subsidiary" => "RecordRef",
		"location" => "RecordRef",
		"item" => "RecordRef",
		"units" => "RecordRef",
		"memo" => "string",
		"year" => "integer",
		"month" => "DemandPlanMonth",
		"startDate" => "dateTime",
		"endDate" => "dateTime",
		"demandPlanCalendarType" => "DemandPlanCalendarType",
		"demandPlanMatrix" => "DemandPlanMatrix",
		"customFieldList" => "CustomFieldList",
		"internalId" => "string",
		"externalId" => "string",
	);
}

