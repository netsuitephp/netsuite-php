<?php

class CustomRecordTypePermissions {
	public $permittedRole;
	public $permittedLevel;
	public $restriction;
	public $defaultForm;
	public $restrictForm;
	public $searchForm;
	public $searchResults;
	public $listView;
	public $listViewRestricted;
	public $dashboardView;
	public $restrictDashboardView;
	public $sublistView;
	public $restrictSublistView;
	static $paramtypesmap = array(
		"permittedRole" => "RecordRef",
		"permittedLevel" => "CustomRecordTypePermissionsPermittedLevel",
		"restriction" => "CustomRecordTypePermissionsRestriction",
		"defaultForm" => "RecordRef",
		"restrictForm" => "boolean",
		"searchForm" => "RecordRef",
		"searchResults" => "RecordRef",
		"listView" => "RecordRef",
		"listViewRestricted" => "boolean",
		"dashboardView" => "RecordRef",
		"restrictDashboardView" => "boolean",
		"sublistView" => "RecordRef",
		"restrictSublistView" => "boolean",
	);
}

