<?php

namespace Fungku\NetSuite\Classes;

class AsyncStatusResult {
	public $jobId;
	public $status;
	public $percentCompleted;
	public $estRemainingDuration;
	static $paramtypesmap = array(
		"jobId" => "string",
		"status" => "AsyncStatusType",
		"percentCompleted" => "float",
		"estRemainingDuration" => "float",
	);
}

