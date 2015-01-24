<?php namespace Fungku\NetSuite\Classes;

class Customer extends Record {
	public $customForm;
	public $entityId;
	public $altName;
	public $isPerson;
	public $phoneticName;
	public $salutation;
	public $firstName;
	public $middleName;
	public $lastName;
	public $companyName;
	public $entityStatus;
	public $parent;
	public $phone;
	public $fax;
	public $email;
	public $url;
	public $defaultAddress;
	public $isInactive;
	public $category;
	public $title;
	public $printOnCheckAs;
	public $altPhone;
	public $homePhone;
	public $mobilePhone;
	public $altEmail;
	public $language;
	public $comments;
	public $numberFormat;
	public $negativeNumberFormat;
	public $dateCreated;
	public $image;
	public $emailPreference;
	public $subsidiary;
	public $representingSubsidiary;
	public $salesRep;
	public $territory;
	public $contribPct;
	public $partner;
	public $salesGroup;
	public $vatRegNumber;
	public $accountNumber;
	public $taxExempt;
	public $terms;
	public $creditLimit;
	public $creditHoldOverride;
	public $monthlyClosing;
	public $overrideCurrencyFormat;
	public $displaySymbol;
	public $symbolPlacement;
	public $balance;
	public $overdueBalance;
	public $daysOverdue;
	public $unbilledOrders;
	public $consolUnbilledOrders;
	public $consolOverdueBalance;
	public $consolDepositBalance;
	public $consolBalance;
	public $consolAging;
	public $consolDaysOverdue;
	public $priceLevel;
	public $currency;
	public $prefCCProcessor;
	public $depositBalance;
	public $shipComplete;
	public $taxable;
	public $taxItem;
	public $resaleNumber;
	public $aging;
	public $startDate;
	public $endDate;
	public $reminderDays;
	public $shippingItem;
	public $thirdPartyAcct;
	public $thirdPartyZipcode;
	public $thirdPartyCountry;
	public $giveAccess;
	public $estimatedBudget;
	public $accessRole;
	public $sendEmail;
	public $password;
	public $password2;
	public $requirePwdChange;
	public $campaignCategory;
	public $leadSource;
	public $receivablesAccount;
	public $drAccount;
	public $fxAccount;
	public $defaultOrderPriority;
	public $webLead;
	public $referrer;
	public $keywords;
	public $clickStream;
	public $lastPageVisited;
	public $visits;
	public $firstVisit;
	public $lastVisit;
	public $billPay;
	public $openingBalance;
	public $lastModifiedDate;
	public $openingBalanceDate;
	public $openingBalanceAccount;
	public $stage;
	public $emailTransactions;
	public $printTransactions;
	public $faxTransactions;
	public $syncPartnerTeams;
	public $isBudgetApproved;
	public $globalSubscriptionStatus;
	public $salesReadiness;
	public $salesTeamList;
	public $buyingReason;
	public $downloadList;
	public $buyingTimeFrame;
	public $addressbookList;
	public $subscriptionsList;
	public $contactRolesList;
	public $currencyList;
	public $creditCardsList;
	public $partnersList;
	public $groupPricingList;
	public $itemPricingList;
	public $customFieldList;
	public $internalId;
	public $externalId;
	static $paramtypesmap = array(
		"customForm" => "RecordRef",
		"entityId" => "string",
		"altName" => "string",
		"isPerson" => "boolean",
		"phoneticName" => "string",
		"salutation" => "string",
		"firstName" => "string",
		"middleName" => "string",
		"lastName" => "string",
		"companyName" => "string",
		"entityStatus" => "RecordRef",
		"parent" => "RecordRef",
		"phone" => "string",
		"fax" => "string",
		"email" => "string",
		"url" => "string",
		"defaultAddress" => "string",
		"isInactive" => "boolean",
		"category" => "RecordRef",
		"title" => "string",
		"printOnCheckAs" => "string",
		"altPhone" => "string",
		"homePhone" => "string",
		"mobilePhone" => "string",
		"altEmail" => "string",
		"language" => "Language",
		"comments" => "string",
		"numberFormat" => "CustomerNumberFormat",
		"negativeNumberFormat" => "CustomerNegativeNumberFormat",
		"dateCreated" => "dateTime",
		"image" => "RecordRef",
		"emailPreference" => "EmailPreference",
		"subsidiary" => "RecordRef",
		"representingSubsidiary" => "RecordRef",
		"salesRep" => "RecordRef",
		"territory" => "RecordRef",
		"contribPct" => "string",
		"partner" => "RecordRef",
		"salesGroup" => "RecordRef",
		"vatRegNumber" => "string",
		"accountNumber" => "string",
		"taxExempt" => "boolean",
		"terms" => "RecordRef",
		"creditLimit" => "float",
		"creditHoldOverride" => "CustomerCreditHoldOverride",
		"monthlyClosing" => "CustomerMonthlyClosing",
		"overrideCurrencyFormat" => "boolean",
		"displaySymbol" => "string",
		"symbolPlacement" => "CurrencySymbolPlacement",
		"balance" => "float",
		"overdueBalance" => "float",
		"daysOverdue" => "integer",
		"unbilledOrders" => "float",
		"consolUnbilledOrders" => "float",
		"consolOverdueBalance" => "float",
		"consolDepositBalance" => "float",
		"consolBalance" => "float",
		"consolAging" => "float",
		"consolDaysOverdue" => "integer",
		"priceLevel" => "RecordRef",
		"currency" => "RecordRef",
		"prefCCProcessor" => "RecordRef",
		"depositBalance" => "float",
		"shipComplete" => "boolean",
		"taxable" => "boolean",
		"taxItem" => "RecordRef",
		"resaleNumber" => "string",
		"aging" => "float",
		"startDate" => "dateTime",
		"endDate" => "dateTime",
		"reminderDays" => "integer",
		"shippingItem" => "RecordRef",
		"thirdPartyAcct" => "string",
		"thirdPartyZipcode" => "string",
		"thirdPartyCountry" => "Country",
		"giveAccess" => "boolean",
		"estimatedBudget" => "float",
		"accessRole" => "RecordRef",
		"sendEmail" => "boolean",
		"password" => "string",
		"password2" => "string",
		"requirePwdChange" => "boolean",
		"campaignCategory" => "RecordRef",
		"leadSource" => "RecordRef",
		"receivablesAccount" => "RecordRef",
		"drAccount" => "RecordRef",
		"fxAccount" => "RecordRef",
		"defaultOrderPriority" => "float",
		"webLead" => "string",
		"referrer" => "string",
		"keywords" => "string",
		"clickStream" => "string",
		"lastPageVisited" => "string",
		"visits" => "integer",
		"firstVisit" => "dateTime",
		"lastVisit" => "dateTime",
		"billPay" => "boolean",
		"openingBalance" => "float",
		"lastModifiedDate" => "dateTime",
		"openingBalanceDate" => "dateTime",
		"openingBalanceAccount" => "RecordRef",
		"stage" => "CustomerStage",
		"emailTransactions" => "boolean",
		"printTransactions" => "boolean",
		"faxTransactions" => "boolean",
		"syncPartnerTeams" => "boolean",
		"isBudgetApproved" => "boolean",
		"globalSubscriptionStatus" => "GlobalSubscriptionStatus",
		"salesReadiness" => "RecordRef",
		"salesTeamList" => "CustomerSalesTeamList",
		"buyingReason" => "RecordRef",
		"downloadList" => "CustomerDownloadList",
		"buyingTimeFrame" => "RecordRef",
		"addressbookList" => "CustomerAddressbookList",
		"subscriptionsList" => "SubscriptionsList",
		"contactRolesList" => "ContactAccessRolesList",
		"currencyList" => "CustomerCurrencyList",
		"creditCardsList" => "CustomerCreditCardsList",
		"partnersList" => "CustomerPartnersList",
		"groupPricingList" => "CustomerGroupPricingList",
		"itemPricingList" => "CustomerItemPricingList",
		"customFieldList" => "CustomFieldList",
		"internalId" => "string",
		"externalId" => "string",
	);
}

