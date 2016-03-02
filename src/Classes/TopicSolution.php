<?php

namespace Fungku\NetSuite\Classes;

class TopicSolution {
	public $solution;
	public $message;
	static $paramtypesmap = array(
		"solution" => "RecordRef",
		"message" => "string",
	);
}

