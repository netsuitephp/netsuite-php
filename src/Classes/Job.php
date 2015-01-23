<?php

class Job extends Record {
	public $customForm;
	public $entityId;
	public $altName;
	public $companyName;
	public $phoneticName;
	public $entityStatus;
	public $defaultAddress;
	public $parent;
	public $isInactive;
	public $lastModifiedDate;
	public $billPay;
	public $dateCreated;
	public $category;
	public $workplace;
	public $language;
	public $comments;
	public $accountNumber;
	public $currency;
	public $fxRate;
	public $startDate;
	public $endDate;
	public $phone;
	public $altPhone;
	public $calculatedEndDate;
	public $calculatedEndDateBaseline;
	public $startDateBaseline;
	public $projectedEndDate;
	public $projectedEndDateBaseline;
	public $lastBaselineDate;
	public $jobType;
	public $percentComplete;
	public $estimatedCost;
	public $estimatedRevenue;
	public $estimatedTime;
	public $estimatedTimeOverride;
	public $fax;
	public $email;
	public $emailPreference;
	public $openingBalance;
	public $openingBalanceDate;
	public $openingBalanceAccount;
	public $subsidiary;
	public $jobBillingType;
	public $billingSchedule;
	public $jobItem;
	public $percentTimeComplete;
	public $actualTime;
	public $allowTime;
	public $timeRemaining;
	public $limitTimeToAssignees;
	public $estimatedLaborCost;
	public $estimatedLaborCostBaseline;
	public $estimateRevRecTemplate;
	public $estimatedLaborRevenue;
	public $estimatedGrossProfit;
	public $estimatedGrossProfitPercent;
	public $projectExpenseType;
	public $applyProjectExpenseTypeToAll;
	public $allowAllResourcesForTasks;
	public $jobPrice;
	public $isUtilizedTime;
	public $isProductiveTime;
	public $isExemptTime;
	public $materializeTime;
	public $allowExpenses;
	public $allocatePayrollExpenses;
	public $includeCrmTasksInTotals;
	public $globalSubscriptionStatus;
	public $jobResourcesList;
	public $plStatementList;
	public $addressbookList;
	public $milestonesList;
	public $creditCardsList;
	public $customFieldList;
	public $internalId;
	public $externalId;
	static $paramtypesmap = array(
		"customForm" => "RecordRef",
		"entityId" => "string",
		"altName" => "string",
		"companyName" => "string",
		"phoneticName" => "string",
		"entityStatus" => "RecordRef",
		"defaultAddress" => "string",
		"parent" => "RecordRef",
		"isInactive" => "boolean",
		"lastModifiedDate" => "dateTime",
		"billPay" => "boolean",
		"dateCreated" => "dateTime",
		"category" => "RecordRef",
		"workplace" => "RecordRef",
		"language" => "RecordRef",
		"comments" => "string",
		"accountNumber" => "string",
		"currency" => "RecordRef",
		"fxRate" => "float",
		"startDate" => "dateTime",
		"endDate" => "dateTime",
		"phone" => "string",
		"altPhone" => "string",
		"calculatedEndDate" => "dateTime",
		"calculatedEndDateBaseline" => "dateTime",
		"startDateBaseline" => "dateTime",
		"projectedEndDate" => "dateTime",
		"projectedEndDateBaseline" => "dateTime",
		"lastBaselineDate" => "dateTime",
		"jobType" => "RecordRef",
		"percentComplete" => "float",
		"estimatedCost" => "float",
		"estimatedRevenue" => "float",
		"estimatedTime" => "Duration",
		"estimatedTimeOverride" => "Duration",
		"fax" => "string",
		"email" => "string",
		"emailPreference" => "EmailPreference",
		"openingBalance" => "float",
		"openingBalanceDate" => "dateTime",
		"openingBalanceAccount" => "RecordRef",
		"subsidiary" => "RecordRef",
		"jobBillingType" => "JobBillingType",
		"billingSchedule" => "RecordRef",
		"jobItem" => "RecordRef",
		"percentTimeComplete" => "float",
		"actualTime" => "Duration",
		"allowTime" => "boolean",
		"timeRemaining" => "Duration",
		"limitTimeToAssignees" => "boolean",
		"estimatedLaborCost" => "float",
		"estimatedLaborCostBaseline" => "float",
		"estimateRevRecTemplate" => "RecordRef",
		"estimatedLaborRevenue" => "float",
		"estimatedGrossProfit" => "float",
		"estimatedGrossProfitPercent" => "float",
		"projectExpenseType" => "RecordRef",
		"applyProjectExpenseTypeToAll" => "boolean",
		"allowAllResourcesForTasks" => "boolean",
		"jobPrice" => "float",
		"isUtilizedTime" => "boolean",
		"isProductiveTime" => "boolean",
		"isExemptTime" => "boolean",
		"materializeTime" => "boolean",
		"allowExpenses" => "boolean",
		"allocatePayrollExpenses" => "boolean",
		"includeCrmTasksInTotals" => "boolean",
		"globalSubscriptionStatus" => "GlobalSubscriptionStatus",
		"jobResourcesList" => "JobResourcesList",
		"plStatementList" => "JobPlStatementList",
		"addressbookList" => "JobAddressbookList",
		"milestonesList" => "JobMilestonesList",
		"creditCardsList" => "JobCreditCardsList",
		"customFieldList" => "CustomFieldList",
		"internalId" => "string",
		"externalId" => "string",
	);
}

