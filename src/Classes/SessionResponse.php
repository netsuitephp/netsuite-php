<?php

class SessionResponse {
	public $status;
	public $userId;
	public $wsRoleList;
	static $paramtypesmap = array(
		"status" => "Status",
		"userId" => "RecordRef",
		"wsRoleList" => "WsRoleList",
	);
}

