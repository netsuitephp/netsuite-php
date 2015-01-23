<?php

class ProjectTaskAssignee {
	public $resource;
	public $units;
	public $serviceItem;
	public $estimatedWork;
	public $unitCost;
	public $unitPrice;
	public $cost;
	public $price;
	static $paramtypesmap = array(
		"resource" => "RecordRef",
		"units" => "float",
		"serviceItem" => "RecordRef",
		"estimatedWork" => "float",
		"unitCost" => "float",
		"unitPrice" => "float",
		"cost" => "float",
		"price" => "float",
	);
}

