<?php namespace Fungku\NetSuite\Classes;

class JobSearchBasic extends SearchRecordBasic {
	public $accountNumber;
	public $actualTime;
	public $address;
	public $addressee;
	public $addressLabel;
	public $addressPhone;
	public $allocatePayrollExpenses;
	public $allowAllResourcesForTasks;
	public $allowExpenses;
	public $allowTime;
	public $applyProjectExpenseTypeToAll;
	public $attention;
	public $billingSchedule;
	public $calculatedEndDate;
	public $calculatedEndDateBaseline;
	public $category;
	public $city;
	public $comments;
	public $contact;
	public $country;
	public $county;
	public $customer;
	public $dateCreated;
	public $email;
	public $endDate;
	public $entityId;
	public $estCost;
	public $estEndDate;
	public $estimatedGrossProfit;
	public $estimatedGrossProfitPercent;
	public $estimatedLaborCost;
	public $estimatedLaborCostBaseline;
	public $estimatedLaborRevenue;
	public $estimatedTime;
	public $estimatedTimeOverride;
	public $estimatedTimeOverrideBaseline;
	public $estRevenue;
	public $externalId;
	public $externalIdString;
	public $fax;
	public $giveAccess;
	public $globalSubscriptionStatus;
	public $image;
	public $includeCrmTasksInTotals;
	public $internalId;
	public $internalIdNumber;
	public $isDefaultBilling;
	public $isDefaultShipping;
	public $isExemptTime;
	public $isInactive;
	public $isProductiveTime;
	public $isUtilizedTime;
	public $jobBillingType;
	public $jobItem;
	public $jobPrice;
	public $jobResource;
	public $jobResourceRole;
	public $language;
	public $lastBaselineDate;
	public $lastModifiedDate;
	public $level;
	public $limitTimeToAssignees;
	public $materializeTime;
	public $parent;
	public $pctComplete;
	public $percentTimeComplete;
	public $permission;
	public $phone;
	public $phoneticName;
	public $projectedEndDateBaseline;
	public $projectExpenseType;
	public $startDate;
	public $startDateBaseline;
	public $state;
	public $status;
	public $subsidiary;
	public $timeRemaining;
	public $type;
	public $zipCode;
	public $customFieldList;
	static $paramtypesmap = array(
		"accountNumber" => "SearchStringField",
		"actualTime" => "SearchDoubleField",
		"address" => "SearchStringField",
		"addressee" => "SearchStringField",
		"addressLabel" => "SearchStringField",
		"addressPhone" => "SearchStringField",
		"allocatePayrollExpenses" => "SearchBooleanField",
		"allowAllResourcesForTasks" => "SearchBooleanField",
		"allowExpenses" => "SearchBooleanField",
		"allowTime" => "SearchBooleanField",
		"applyProjectExpenseTypeToAll" => "SearchBooleanField",
		"attention" => "SearchStringField",
		"billingSchedule" => "SearchMultiSelectField",
		"calculatedEndDate" => "SearchDateField",
		"calculatedEndDateBaseline" => "SearchDateField",
		"category" => "SearchMultiSelectField",
		"city" => "SearchStringField",
		"comments" => "SearchStringField",
		"contact" => "SearchStringField",
		"country" => "SearchEnumMultiSelectField",
		"county" => "SearchStringField",
		"customer" => "SearchMultiSelectField",
		"dateCreated" => "SearchDateField",
		"email" => "SearchStringField",
		"endDate" => "SearchDateField",
		"entityId" => "SearchStringField",
		"estCost" => "SearchDoubleField",
		"estEndDate" => "SearchDateField",
		"estimatedGrossProfit" => "SearchDoubleField",
		"estimatedGrossProfitPercent" => "SearchDoubleField",
		"estimatedLaborCost" => "SearchDoubleField",
		"estimatedLaborCostBaseline" => "SearchDoubleField",
		"estimatedLaborRevenue" => "SearchDoubleField",
		"estimatedTime" => "SearchDoubleField",
		"estimatedTimeOverride" => "SearchDoubleField",
		"estimatedTimeOverrideBaseline" => "SearchDoubleField",
		"estRevenue" => "SearchDoubleField",
		"externalId" => "SearchMultiSelectField",
		"externalIdString" => "SearchStringField",
		"fax" => "SearchStringField",
		"giveAccess" => "SearchBooleanField",
		"globalSubscriptionStatus" => "SearchEnumMultiSelectField",
		"image" => "SearchStringField",
		"includeCrmTasksInTotals" => "SearchBooleanField",
		"internalId" => "SearchMultiSelectField",
		"internalIdNumber" => "SearchLongField",
		"isDefaultBilling" => "SearchBooleanField",
		"isDefaultShipping" => "SearchBooleanField",
		"isExemptTime" => "SearchBooleanField",
		"isInactive" => "SearchBooleanField",
		"isProductiveTime" => "SearchBooleanField",
		"isUtilizedTime" => "SearchBooleanField",
		"jobBillingType" => "SearchEnumMultiSelectField",
		"jobItem" => "SearchMultiSelectField",
		"jobPrice" => "SearchDoubleField",
		"jobResource" => "SearchMultiSelectField",
		"jobResourceRole" => "SearchMultiSelectField",
		"language" => "SearchEnumMultiSelectField",
		"lastBaselineDate" => "SearchDateField",
		"lastModifiedDate" => "SearchDateField",
		"level" => "SearchEnumMultiSelectField",
		"limitTimeToAssignees" => "SearchBooleanField",
		"materializeTime" => "SearchBooleanField",
		"parent" => "SearchMultiSelectField",
		"pctComplete" => "SearchLongField",
		"percentTimeComplete" => "SearchLongField",
		"permission" => "SearchEnumMultiSelectField",
		"phone" => "SearchStringField",
		"phoneticName" => "SearchStringField",
		"projectedEndDateBaseline" => "SearchDateField",
		"projectExpenseType" => "SearchMultiSelectField",
		"startDate" => "SearchDateField",
		"startDateBaseline" => "SearchDateField",
		"state" => "SearchStringField",
		"status" => "SearchMultiSelectField",
		"subsidiary" => "SearchMultiSelectField",
		"timeRemaining" => "SearchDoubleField",
		"type" => "SearchMultiSelectField",
		"zipCode" => "SearchStringField",
		"customFieldList" => "SearchCustomFieldList",
	);
}

