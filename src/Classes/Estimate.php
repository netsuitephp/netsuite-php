<?php

class Estimate extends Record {
	public $createdDate;
	public $lastModifiedDate;
	public $entity;
	public $job;
	public $tranDate;
	public $tranId;
	public $source;
	public $customForm;
	public $currency;
	public $title;
	public $entityStatus;
	public $probability;
	public $includeInForecast;
	public $forecastType;
	public $opportunity;
	public $department;
	public $class;
	public $terms;
	public $dueDate;
	public $location;
	public $subsidiary;
	public $billingSchedule;
	public $status;
	public $salesRep;
	public $partner;
	public $contribPct;
	public $leadSource;
	public $expectedCloseDate;
	public $otherRefNum;
	public $memo;
	public $endDate;
	public $startDate;
	public $totalCostEstimate;
	public $estGrossProfit;
	public $estGrossProfitPercent;
	public $createdFrom;
	public $exchangeRate;
	public $currencyName;
	public $promoCode;
	public $discountItem;
	public $discountRate;
	public $isTaxable;
	public $taxItem;
	public $taxRate;
	public $vatRegNum;
	public $toBePrinted;
	public $toBeEmailed;
	public $email;
	public $toBeFaxed;
	public $fax;
	public $visibleToCustomer;
	public $messageSel;
	public $message;
	public $billingAddress;
	public $billAddressList;
	public $shippingAddress;
	public $shipIsResidential;
	public $shipAddressList;
	public $fob;
	public $shipDate;
	public $shipMethod;
	public $shippingCost;
	public $shippingTax1Rate;
	public $shippingTaxCode;
	public $shippingTax2Rate;
	public $handlingTaxCode;
	public $handlingTax1Rate;
	public $handlingCost;
	public $trackingNumbers;
	public $handlingTax2Rate;
	public $linkedTrackingNumbers;
	public $salesGroup;
	public $syncSalesTeams;
	public $altSalesTotal;
	public $subTotal;
	public $discountTotal;
	public $taxTotal;
	public $altShippingCost;
	public $altHandlingCost;
	public $total;
	public $tax2Total;
	public $itemList;
	public $salesTeamList;
	public $syncPartnerTeams;
	public $partnersList;
	public $shipGroupList;
	public $customFieldList;
	public $internalId;
	public $externalId;
	static $paramtypesmap = array(
		"createdDate" => "dateTime",
		"lastModifiedDate" => "dateTime",
		"entity" => "RecordRef",
		"job" => "RecordRef",
		"tranDate" => "dateTime",
		"tranId" => "string",
		"source" => "string",
		"customForm" => "RecordRef",
		"currency" => "RecordRef",
		"title" => "string",
		"entityStatus" => "RecordRef",
		"probability" => "float",
		"includeInForecast" => "boolean",
		"forecastType" => "RecordRef",
		"opportunity" => "RecordRef",
		"department" => "RecordRef",
		"class" => "RecordRef",
		"terms" => "RecordRef",
		"dueDate" => "dateTime",
		"location" => "RecordRef",
		"subsidiary" => "RecordRef",
		"billingSchedule" => "RecordRef",
		"status" => "string",
		"salesRep" => "RecordRef",
		"partner" => "RecordRef",
		"contribPct" => "string",
		"leadSource" => "RecordRef",
		"expectedCloseDate" => "dateTime",
		"otherRefNum" => "string",
		"memo" => "string",
		"endDate" => "dateTime",
		"startDate" => "dateTime",
		"totalCostEstimate" => "float",
		"estGrossProfit" => "float",
		"estGrossProfitPercent" => "float",
		"createdFrom" => "RecordRef",
		"exchangeRate" => "float",
		"currencyName" => "string",
		"promoCode" => "RecordRef",
		"discountItem" => "RecordRef",
		"discountRate" => "string",
		"isTaxable" => "boolean",
		"taxItem" => "RecordRef",
		"taxRate" => "float",
		"vatRegNum" => "string",
		"toBePrinted" => "boolean",
		"toBeEmailed" => "boolean",
		"email" => "string",
		"toBeFaxed" => "boolean",
		"fax" => "string",
		"visibleToCustomer" => "boolean",
		"messageSel" => "RecordRef",
		"message" => "string",
		"billingAddress" => "Address",
		"billAddressList" => "RecordRef",
		"shippingAddress" => "Address",
		"shipIsResidential" => "boolean",
		"shipAddressList" => "RecordRef",
		"fob" => "string",
		"shipDate" => "dateTime",
		"shipMethod" => "RecordRef",
		"shippingCost" => "float",
		"shippingTax1Rate" => "float",
		"shippingTaxCode" => "RecordRef",
		"shippingTax2Rate" => "string",
		"handlingTaxCode" => "RecordRef",
		"handlingTax1Rate" => "float",
		"handlingCost" => "float",
		"trackingNumbers" => "string",
		"handlingTax2Rate" => "string",
		"linkedTrackingNumbers" => "string",
		"salesGroup" => "RecordRef",
		"syncSalesTeams" => "boolean",
		"altSalesTotal" => "float",
		"subTotal" => "float",
		"discountTotal" => "float",
		"taxTotal" => "float",
		"altShippingCost" => "float",
		"altHandlingCost" => "float",
		"total" => "float",
		"tax2Total" => "float",
		"itemList" => "EstimateItemList",
		"salesTeamList" => "EstimateSalesTeamList",
		"syncPartnerTeams" => "boolean",
		"partnersList" => "EstimatePartnersList",
		"shipGroupList" => "EstimateShipGroupList",
		"customFieldList" => "CustomFieldList",
		"internalId" => "string",
		"externalId" => "string",
	);
}

