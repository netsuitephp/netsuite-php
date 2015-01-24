<?php namespace Fungku\NetSuite\Classes;

class GetAsyncResultRequest {
	public $jobId;
	public $pageIndex;
	static $paramtypesmap = array(
		"jobId" => "string",
		"pageIndex" => "integer",
	);
}

