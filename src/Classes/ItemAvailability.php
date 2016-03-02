<?php

namespace Fungku\NetSuite\Classes;

class ItemAvailability {
	public $item;
	public $lastQtyAvailableChange;
	public $locationId;
	public $quantityOnHand;
	public $onHandValueMli;
	public $reorderPoint;
	public $preferredStockLevel;
	public $quantityOnOrder;
	public $quantityCommitted;
	public $quantityBackOrdered;
	public $quantityAvailable;
	static $paramtypesmap = array(
		"item" => "RecordRef",
		"lastQtyAvailableChange" => "dateTime",
		"locationId" => "RecordRef",
		"quantityOnHand" => "float",
		"onHandValueMli" => "float",
		"reorderPoint" => "float",
		"preferredStockLevel" => "float",
		"quantityOnOrder" => "float",
		"quantityCommitted" => "float",
		"quantityBackOrdered" => "float",
		"quantityAvailable" => "float",
	);
}

