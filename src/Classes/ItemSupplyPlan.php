<?php

class ItemSupplyPlan extends Record {
	public $customForm;
	public $subsidiary;
	public $location;
	public $item;
	public $units;
	public $memo;
	public $orderList;
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
		"orderList" => "ItemSupplyPlanOrderList",
		"customFieldList" => "CustomFieldList",
		"internalId" => "string",
		"externalId" => "string",
	);
}

