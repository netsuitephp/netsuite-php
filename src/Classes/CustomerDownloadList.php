<?php

namespace Fungku\NetSuite\Classes;

class CustomerDownloadList {
	public $download;
	public $replaceAll;
	static $paramtypesmap = array(
		"download" => "CustomerDownload[]",
		"replaceAll" => "boolean",
	);
}

