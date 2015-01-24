<?php namespace Fungku\NetSuite\Classes;

class DetachBasicReference extends DetachReference {
	public $detachedRecord;
	static $paramtypesmap = array(
		"detachedRecord" => "BaseRef",
	);
}

