<?php

class CustomerDownload {
	public $file;
	public $licenseCode;
	public $remainingDownloads;
	public $expiration;
	static $paramtypesmap = array(
		"file" => "RecordRef",
		"licenseCode" => "string",
		"remainingDownloads" => "integer",
		"expiration" => "dateTime",
	);
}

