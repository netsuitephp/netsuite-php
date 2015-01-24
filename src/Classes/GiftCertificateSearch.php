<?php namespace Fungku\NetSuite\Classes;

class GiftCertificateSearch extends SearchRecord {
	public $basic;
	public $userJoin;
	public $customSearchJoin;
	static $paramtypesmap = array(
		"basic" => "GiftCertificateSearchBasic",
		"userJoin" => "EmployeeSearchBasic",
		"customSearchJoin" => "CustomSearchJoin[]",
	);
}

