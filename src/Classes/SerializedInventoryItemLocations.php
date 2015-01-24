<?php namespace Fungku\NetSuite\Classes;

class SerializedInventoryItemLocations {
	public $location;
	public $quantityOnHand;
	public $onHandValueMli;
	public $serialNumbers;
	public $averageCostMli;
	public $lastPurchasePriceMli;
	public $reorderPoint;
	public $preferredStockLevel;
	public $leadTime;
	public $defaultReturnCost;
	public $isWip;
	public $safetyStockLevel;
	public $cost;
	public $inventoryCostTemplate;
	public $buildTime;
	public $lastInvtCountDate;
	public $nextInvtCountDate;
	public $invtCountInterval;
	public $invtClassification;
	public $costingLotSize;
	public $quantityOnOrder;
	public $quantityCommitted;
	public $quantityAvailable;
	public $quantityBackOrdered;
	public $locationId;
	public $supplyReplenishmentMethod;
	public $alternateDemandSourceItem;
	public $fixedLotSize;
	public $periodicLotSizeType;
	public $periodicLotSizeDays;
	public $supplyType;
	public $supplyLotSizingMethod;
	public $demandSource;
	public $backwardConsumptionDays;
	public $forwardConsumptionDays;
	public $demandTimeFence;
	public $supplyTimeFence;
	public $rescheduleInDays;
	public $rescheduleOutDays;
	static $paramtypesmap = array(
		"location" => "string",
		"quantityOnHand" => "float",
		"onHandValueMli" => "float",
		"serialNumbers" => "string",
		"averageCostMli" => "float",
		"lastPurchasePriceMli" => "float",
		"reorderPoint" => "float",
		"preferredStockLevel" => "float",
		"leadTime" => "integer",
		"defaultReturnCost" => "float",
		"isWip" => "boolean",
		"safetyStockLevel" => "float",
		"cost" => "float",
		"inventoryCostTemplate" => "RecordRef",
		"buildTime" => "float",
		"lastInvtCountDate" => "dateTime",
		"nextInvtCountDate" => "dateTime",
		"invtCountInterval" => "integer",
		"invtClassification" => "ItemInvtClassification",
		"costingLotSize" => "float",
		"quantityOnOrder" => "float",
		"quantityCommitted" => "float",
		"quantityAvailable" => "float",
		"quantityBackOrdered" => "float",
		"locationId" => "RecordRef",
		"supplyReplenishmentMethod" => "RecordRef",
		"alternateDemandSourceItem" => "RecordRef",
		"fixedLotSize" => "float",
		"periodicLotSizeType" => "PeriodicLotSizeType",
		"periodicLotSizeDays" => "integer",
		"supplyType" => "RecordRef",
		"supplyLotSizingMethod" => "RecordRef",
		"demandSource" => "RecordRef",
		"backwardConsumptionDays" => "integer",
		"forwardConsumptionDays" => "integer",
		"demandTimeFence" => "integer",
		"supplyTimeFence" => "integer",
		"rescheduleInDays" => "integer",
		"rescheduleOutDays" => "integer",
	);
}

