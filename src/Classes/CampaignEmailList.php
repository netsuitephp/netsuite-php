<?php

namespace Fungku\NetSuite\Classes;

class CampaignEmailList {
	public $campaignEmail;
	public $replaceAll;
	static $paramtypesmap = array(
		"campaignEmail" => "CampaignEmail[]",
		"replaceAll" => "boolean",
	);
}

