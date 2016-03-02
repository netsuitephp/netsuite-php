<?php

namespace Fungku\NetSuite\Classes;

class IssueVersion {
	public $primary;
	public $version;
	public $build;
	static $paramtypesmap = array(
		"primary" => "boolean",
		"version" => "RecordRef",
		"build" => "RecordRef",
	);
}

