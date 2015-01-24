<?php namespace Fungku\NetSuite\Classes;

class OpportunityCompetitors {
	public $competitor;
	public $url;
	public $notes;
	public $strategy;
	public $winner;
	static $paramtypesmap = array(
		"competitor" => "RecordRef",
		"url" => "string",
		"notes" => "string",
		"strategy" => "string",
		"winner" => "boolean",
	);
}

