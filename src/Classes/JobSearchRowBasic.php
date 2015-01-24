<?php namespace Fungku\NetSuite\Classes;

class JobSearchRowBasic extends SearchRowBasic {
	public $accountNumber;
	public $actualTime;
	public $address;
	public $address1;
	public $address2;
	public $address3;
	public $addressee;
	public $addressInternalId;
	public $addressLabel;
	public $addressPhone;
	public $allocatePayrollExpenses;
	public $allowAllResourcesForTasks;
	public $allowExpenses;
	public $allowTime;
	public $altContact;
	public $altEmail;
	public $altName;
	public $altPhone;
	public $attention;
	public $billAddress1;
	public $billAddress2;
	public $billAddress3;
	public $billAddressee;
	public $billAttention;
	public $billCity;
	public $billCountry;
	public $billCountryCode;
	public $billingSchedule;
	public $billPhone;
	public $billState;
	public $billZipCode;
	public $calculatedEndDate;
	public $calculatedEndDateBaseline;
	public $category;
	public $city;
	public $comments;
	public $companyName;
	public $contact;
	public $country;
	public $countryCode;
	public $customer;
	public $dateCreated;
	public $email;
	public $endDate;
	public $entityId;
	public $entityNumber;
	public $entityStatus;
	public $estimatedCost;
	public $estimatedGrossProfit;
	public $estimatedGrossProfitPercent;
	public $estimatedLaborCost;
	public $estimatedLaborCostBaseline;
	public $estimatedLaborRevenue;
	public $estimatedRevenue;
	public $estimatedTime;
	public $estimatedTimeOverride;
	public $estimatedTimeOverrideBaseline;
	public $externalId;
	public $fax;
	public $globalSubscriptionStatus;
	public $image;
	public $includeCrmTasksInTotals;
	public $internalId;
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
	public $percentComplete;
	public $percentTimeComplete;
	public $permission;
	public $phone;
	public $phoneticName;
	public $projectedEndDate;
	public $projectedEndDateBaseline;
	public $projectExpenseType;
	public $shipAddress1;
	public $shipAddress2;
	public $shipAddress3;
	public $shipAddressee;
	public $shipAttention;
	public $shipCity;
	public $shipCountry;
	public $shipCountryCode;
	public $shipPhone;
	public $shipState;
	public $shipZip;
	public $startDate;
	public $startDateBaseline;
	public $state;
	public $subscription;
	public $subscriptionDate;
	public $subscriptionStatus;
	public $subsidiary;
	public $timeRemaining;
	public $type;
	public $zipCode;
	public $customFieldList;
	static $paramtypesmap = array(
		"accountNumber" => "SearchColumnStringField[]",
		"actualTime" => "SearchColumnDoubleField[]",
		"address" => "SearchColumnStringField[]",
		"address1" => "SearchColumnStringField[]",
		"address2" => "SearchColumnStringField[]",
		"address3" => "SearchColumnStringField[]",
		"addressee" => "SearchColumnStringField[]",
		"addressInternalId" => "SearchColumnStringField[]",
		"addressLabel" => "SearchColumnStringField[]",
		"addressPhone" => "SearchColumnStringField[]",
		"allocatePayrollExpenses" => "SearchColumnBooleanField[]",
		"allowAllResourcesForTasks" => "SearchColumnBooleanField[]",
		"allowExpenses" => "SearchColumnBooleanField[]",
		"allowTime" => "SearchColumnBooleanField[]",
		"altContact" => "SearchColumnStringField[]",
		"altEmail" => "SearchColumnStringField[]",
		"altName" => "SearchColumnStringField[]",
		"altPhone" => "SearchColumnStringField[]",
		"attention" => "SearchColumnStringField[]",
		"billAddress1" => "SearchColumnStringField[]",
		"billAddress2" => "SearchColumnStringField[]",
		"billAddress3" => "SearchColumnStringField[]",
		"billAddressee" => "SearchColumnStringField[]",
		"billAttention" => "SearchColumnStringField[]",
		"billCity" => "SearchColumnStringField[]",
		"billCountry" => "SearchColumnEnumSelectField[]",
		"billCountryCode" => "SearchColumnStringField[]",
		"billingSchedule" => "SearchColumnSelectField[]",
		"billPhone" => "SearchColumnStringField[]",
		"billState" => "SearchColumnStringField[]",
		"billZipCode" => "SearchColumnStringField[]",
		"calculatedEndDate" => "SearchColumnDateField[]",
		"calculatedEndDateBaseline" => "SearchColumnDateField[]",
		"category" => "SearchColumnSelectField[]",
		"city" => "SearchColumnStringField[]",
		"comments" => "SearchColumnStringField[]",
		"companyName" => "SearchColumnStringField[]",
		"contact" => "SearchColumnStringField[]",
		"country" => "SearchColumnEnumSelectField[]",
		"countryCode" => "SearchColumnStringField[]",
		"customer" => "SearchColumnSelectField[]",
		"dateCreated" => "SearchColumnDateField[]",
		"email" => "SearchColumnStringField[]",
		"endDate" => "SearchColumnDateField[]",
		"entityId" => "SearchColumnStringField[]",
		"entityNumber" => "SearchColumnLongField[]",
		"entityStatus" => "SearchColumnSelectField[]",
		"estimatedCost" => "SearchColumnDoubleField[]",
		"estimatedGrossProfit" => "SearchColumnDoubleField[]",
		"estimatedGrossProfitPercent" => "SearchColumnDoubleField[]",
		"estimatedLaborCost" => "SearchColumnDoubleField[]",
		"estimatedLaborCostBaseline" => "SearchColumnDoubleField[]",
		"estimatedLaborRevenue" => "SearchColumnDoubleField[]",
		"estimatedRevenue" => "SearchColumnDoubleField[]",
		"estimatedTime" => "SearchColumnDoubleField[]",
		"estimatedTimeOverride" => "SearchColumnDoubleField[]",
		"estimatedTimeOverrideBaseline" => "SearchColumnDoubleField[]",
		"externalId" => "SearchColumnStringField[]",
		"fax" => "SearchColumnStringField[]",
		"globalSubscriptionStatus" => "SearchColumnEnumSelectField[]",
		"image" => "SearchColumnSelectField[]",
		"includeCrmTasksInTotals" => "SearchColumnBooleanField[]",
		"internalId" => "SearchColumnSelectField[]",
		"isDefaultBilling" => "SearchColumnBooleanField[]",
		"isDefaultShipping" => "SearchColumnBooleanField[]",
		"isExemptTime" => "SearchColumnBooleanField[]",
		"isInactive" => "SearchColumnBooleanField[]",
		"isProductiveTime" => "SearchColumnBooleanField[]",
		"isUtilizedTime" => "SearchColumnBooleanField[]",
		"jobBillingType" => "SearchColumnEnumSelectField[]",
		"jobItem" => "SearchColumnSelectField[]",
		"jobPrice" => "SearchColumnDoubleField[]",
		"jobResource" => "SearchColumnSelectField[]",
		"jobResourceRole" => "SearchColumnSelectField[]",
		"language" => "SearchColumnEnumSelectField[]",
		"lastBaselineDate" => "SearchColumnDateField[]",
		"lastModifiedDate" => "SearchColumnDateField[]",
		"level" => "SearchColumnEnumSelectField[]",
		"limitTimeToAssignees" => "SearchColumnBooleanField[]",
		"materializeTime" => "SearchColumnBooleanField[]",
		"percentComplete" => "SearchColumnDoubleField[]",
		"percentTimeComplete" => "SearchColumnDoubleField[]",
		"permission" => "SearchColumnEnumSelectField[]",
		"phone" => "SearchColumnStringField[]",
		"phoneticName" => "SearchColumnStringField[]",
		"projectedEndDate" => "SearchColumnDateField[]",
		"projectedEndDateBaseline" => "SearchColumnDateField[]",
		"projectExpenseType" => "SearchColumnSelectField[]",
		"shipAddress1" => "SearchColumnStringField[]",
		"shipAddress2" => "SearchColumnStringField[]",
		"shipAddress3" => "SearchColumnStringField[]",
		"shipAddressee" => "SearchColumnStringField[]",
		"shipAttention" => "SearchColumnStringField[]",
		"shipCity" => "SearchColumnStringField[]",
		"shipCountry" => "SearchColumnEnumSelectField[]",
		"shipCountryCode" => "SearchColumnStringField[]",
		"shipPhone" => "SearchColumnStringField[]",
		"shipState" => "SearchColumnStringField[]",
		"shipZip" => "SearchColumnStringField[]",
		"startDate" => "SearchColumnDateField[]",
		"startDateBaseline" => "SearchColumnDateField[]",
		"state" => "SearchColumnStringField[]",
		"subscription" => "SearchColumnSelectField[]",
		"subscriptionDate" => "SearchColumnDateField[]",
		"subscriptionStatus" => "SearchColumnBooleanField[]",
		"subsidiary" => "SearchColumnSelectField[]",
		"timeRemaining" => "SearchColumnDoubleField[]",
		"type" => "SearchColumnSelectField[]",
		"zipCode" => "SearchColumnStringField[]",
		"customFieldList" => "SearchColumnCustomFieldList",
	);
}

