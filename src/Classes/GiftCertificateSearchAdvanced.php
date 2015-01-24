<?php namespace Fungku\NetSuite\Classes;

class GiftCertificateSearchAdvanced extends SearchRecord {
	public $criteria;
	public $columns;
	public $savedSearchId;
	public $savedSearchScriptId;
	static $paramtypesmap = array(
		"criteria" => "GiftCertificateSearch",
		"columns" => "GiftCertificateSearchRow",
		"savedSearchId" => "string",
		"savedSearchScriptId" => "string",
	);
}

