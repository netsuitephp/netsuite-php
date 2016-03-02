<?php

namespace Fungku\NetSuite\Classes;

class CampaignEventResponse {
	public $name;
	public $type;
	public $dateSent;
	public $sent;
	public $opened;
	public $openedRatio;
	public $clickedThru;
	public $clickedThruRatio;
	public $responded;
	public $respondedRatio;
	public $unsubscribed;
	public $unsubscribedRatio;
	public $bounced;
	public $bouncedRatio;
	static $paramtypesmap = array(
		"name" => "string",
		"type" => "string",
		"dateSent" => "dateTime",
		"sent" => "float",
		"opened" => "float",
		"openedRatio" => "float",
		"clickedThru" => "float",
		"clickedThruRatio" => "float",
		"responded" => "integer",
		"respondedRatio" => "float",
		"unsubscribed" => "integer",
		"unsubscribedRatio" => "float",
		"bounced" => "integer",
		"bouncedRatio" => "float",
	);
}

