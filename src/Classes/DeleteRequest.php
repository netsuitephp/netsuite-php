<?php

namespace Fungku\NetSuite\Classes;

class DeleteRequest {
	public $baseRef;
	public $deletionReason;
	static $paramtypesmap = array(
		"baseRef" => "BaseRef",
		"deletionReason" => "DeletionReason",
	);
}

