<?php

namespace Fungku\NetSuite\Classes;

class AsyncSearchResult extends AsyncResult {
	public $searchResult;
	static $paramtypesmap = array(
		"searchResult" => "SearchResult",
	);
}

