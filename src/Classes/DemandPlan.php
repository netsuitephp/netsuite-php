<?php

class DemandPlan {
	public $startDate;
	public $endDate;
	public $calculatedQuantity;
	public $periodDemandPlanList;
	static $paramtypesmap = array(
		"startDate" => "dateTime",
		"endDate" => "dateTime",
		"calculatedQuantity" => "float",
		"periodDemandPlanList" => "PeriodDemandPlanList",
	);
}

