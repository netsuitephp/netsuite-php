<?php

namespace Fungku\NetSuite\Classes;

class UpdateInviteeStatusReference {
	public $eventId;
	public $responseCode;
	static $paramtypesmap = array(
		"eventId" => "RecordRef",
		"responseCode" => "CalendarEventAttendeeResponse",
	);
}

