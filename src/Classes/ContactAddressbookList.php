<?php

namespace Fungku\NetSuite\Classes;

class ContactAddressbookList {
	public $addressbook;
	public $replaceAll;
	static $paramtypesmap = array(
		"addressbook" => "ContactAddressbook[]",
		"replaceAll" => "boolean",
	);
}

