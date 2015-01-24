<?php namespace Fungku\NetSuite\Classes;

class CalendarEventAttendee {
	public $sendEmail;
	public $attendee;
	public $response;
	public $attendance;
	static $paramtypesmap = array(
		"sendEmail" => "boolean",
		"attendee" => "RecordRef",
		"response" => "CalendarEventAttendeeResponse",
		"attendance" => "CalendarEventAttendeeAttendance",
	);
}

