<?php

namespace Fungku\NetSuite\Classes;

class AsyncUpsertListResult extends AsyncResult {
	public $writeResponseList;
	static $paramtypesmap = array(
		"writeResponseList" => "WriteResponseList",
	);
}

