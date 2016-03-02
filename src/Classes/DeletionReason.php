<?php

namespace Fungku\NetSuite\Classes;

class DeletionReason {
	public $deletionReasonCode;
	public $deletionReasonMemo;
	static $paramtypesmap = array(
		"deletionReasonCode" => "RecordRef",
		"deletionReasonMemo" => "string",
	);
}

