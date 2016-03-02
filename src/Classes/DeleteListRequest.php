<?php

namespace Fungku\NetSuite\Classes;

class DeleteListRequest {
	public $baseRef;
	public $deletionReason;
	static $paramtypesmap = array(
		"baseRef" => "BaseRef[]",
		"deletionReason" => "DeletionReason",
	);
}

