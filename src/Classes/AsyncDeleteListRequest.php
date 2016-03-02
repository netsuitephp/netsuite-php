<?php

namespace Fungku\NetSuite\Classes;

class AsyncDeleteListRequest {
	public $baseRef;
	public $deletionReason;
	static $paramtypesmap = array(
		"baseRef" => "BaseRef[]",
		"deletionReason" => "DeletionReason",
	);
}

