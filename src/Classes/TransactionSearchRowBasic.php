<?php
/**
 * This file is part of the SevenShores/NetSuite library
 * AND originally from the NetSuite PHP Toolkit.
 *
 * New content:
 * @package    ryanwinchester/netsuite-php
 * @copyright  Copyright (c) Ryan Winchester
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache-2.0
 * @link       https://github.com/ryanwinchester/netsuite-php
 *
 * Original content:
 * @copyright  Copyright (c) NetSuite Inc.
 * @license    https://raw.githubusercontent.com/ryanwinchester/netsuite-php/master/original/NetSuite%20Application%20Developer%20License%20Agreement.txt
 * @link       http://www.netsuite.com/portal/developers/resources/suitetalk-sample-applications.shtml
 *
 * generated:  2020-12-11 06:57:10 PM PST
 */

namespace NetSuite\Classes;

class TransactionSearchRowBasic extends SearchRowBasic {
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $abbrev;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $account;
    /**
     * @var \NetSuite\Classes\SearchColumnEnumSelectField[]
     */
    public $accountType;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $acctCorpCardExp;
    /**
     * @var \NetSuite\Classes\SearchColumnDateField[]
     */
    public $actualProductionEndDate;
    /**
     * @var \NetSuite\Classes\SearchColumnDateField[]
     */
    public $actualProductionStartDate;
    /**
     * @var \NetSuite\Classes\SearchColumnDateField[]
     */
    public $actualShipDate;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $altSalesAmount;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $altSalesNetAmount;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $amount;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $amountPaid;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $amountRemaining;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $amountUnbilled;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $appliedToForeignAmount;
    /**
     * @var \NetSuite\Classes\SearchColumnBooleanField[]
     */
    public $appliedToIsFxVariance;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $appliedToLinkAmount;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $appliedToLinkType;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $appliedToTransaction;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $applyingForeignAmount;
    /**
     * @var \NetSuite\Classes\SearchColumnBooleanField[]
     */
    public $applyingIsFxVariance;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $applyingLinkAmount;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $applyingLinkType;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $applyingTransaction;
    /**
     * @var \NetSuite\Classes\SearchColumnEnumSelectField[]
     */
    public $approvalStatus;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $authCode;
    /**
     * @var \NetSuite\Classes\SearchColumnBooleanField[]
     */
    public $autoCalculateLag;
    /**
     * @var \NetSuite\Classes\SearchColumnEnumSelectField[]
     */
    public $avsStreetMatch;
    /**
     * @var \NetSuite\Classes\SearchColumnEnumSelectField[]
     */
    public $avsZipMatch;
    /**
     * @var \NetSuite\Classes\SearchColumnBooleanField[]
     */
    public $billable;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $billAddress;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $billAddress1;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $billAddress2;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $billAddress3;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $billAddressee;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $billAttention;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $billCity;
    /**
     * @var \NetSuite\Classes\SearchColumnEnumSelectField[]
     */
    public $billCountry;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $billCountryCode;
    /**
     * @var \NetSuite\Classes\SearchColumnDateField[]
     */
    public $billedDate;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $billingAccount;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $billingAmount;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $billingSchedule;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $billingTransaction;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $billPhone;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $billState;
    /**
     * @var \NetSuite\Classes\SearchColumnEnumSelectField[]
     */
    public $billVarianceStatus;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $billZip;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $binNumber;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $binNumberQuantity;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $bomQuantity;
    /**
     * @var \NetSuite\Classes\SearchColumnBooleanField[]
     */
    public $buildEntireAssembly;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $buildVariance;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $built;
    /**
     * @var \NetSuite\Classes\SearchColumnBooleanField[]
     */
    public $canHaveStackablePromotions;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $catchUpPeriod;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $ccCustomerCode;
    /**
     * @var \NetSuite\Classes\SearchColumnDateField[]
     */
    public $ccExpDate;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $ccHolderName;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $ccNumber;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $ccStreet;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $ccZipCode;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $class;
    /**
     * @var \NetSuite\Classes\SearchColumnBooleanField[]
     */
    public $cleared;
    /**
     * @var \NetSuite\Classes\SearchColumnBooleanField[]
     */
    public $closed;
    /**
     * @var \NetSuite\Classes\SearchColumnDateField[]
     */
    public $closeDate;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $cogsAmount;
    /**
     * @var \NetSuite\Classes\SearchColumnDateField[]
     */
    public $commissionEffectiveDate;
    /**
     * @var \NetSuite\Classes\SearchColumnEnumSelectField[]
     */
    public $commit;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $componentYield;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $confirmationNumber;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $contribution;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $contributionPrimary;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $costComponentAmount;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $costComponentCategory;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $costComponentItem;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $costComponentQuantity;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $costComponentStandardCost;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $costEstimate;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $costEstimateRate;
    /**
     * @var \NetSuite\Classes\SearchColumnEnumSelectField[]
     */
    public $costEstimateType;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $createdBy;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $createdFrom;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $creditAmount;
    /**
     * @var \NetSuite\Classes\SearchColumnEnumSelectField[]
     */
    public $cscMatch;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $currency;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $customForm;
    /**
     * @var \NetSuite\Classes\SearchColumnBooleanField[]
     */
    public $customGL;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $custType;
    /**
     * @var \NetSuite\Classes\SearchColumnDateField[]
     */
    public $dateCreated;
    /**
     * @var \NetSuite\Classes\SearchColumnLongField[]
     */
    public $daysOpen;
    /**
     * @var \NetSuite\Classes\SearchColumnLongField[]
     */
    public $daysOverdue;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $debitAmount;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $deferredRevenue;
    /**
     * @var \NetSuite\Classes\SearchColumnBooleanField[]
     */
    public $deferRevRec;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $department;
    /**
     * @var \NetSuite\Classes\SearchColumnDateField[]
     */
    public $depositDate;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $depositTransaction;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $discountAmount;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $docUnit;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $drAccount;
    /**
     * @var \NetSuite\Classes\SearchColumnDateField[]
     */
    public $dueDate;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $effectiveRate;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $email;
    /**
     * @var \NetSuite\Classes\SearchColumnDateField[]
     */
    public $endDate;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $entity;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $entityStatus;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $estGrossProfit;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $estGrossProfitPct;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $estGrossProfitPercent;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $exchangeRate;
    /**
     * @var \NetSuite\Classes\SearchColumnBooleanField[]
     */
    public $excludeCommission;
    /**
     * @var \NetSuite\Classes\SearchColumnBooleanField[]
     */
    public $excludeFromRateRequest;
    /**
     * @var \NetSuite\Classes\SearchColumnDateField[]
     */
    public $expectedCloseDate;
    /**
     * @var \NetSuite\Classes\SearchColumnDateField[]
     */
    public $expectedReceiptDate;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $expenseCategory;
    /**
     * @var \NetSuite\Classes\SearchColumnDateField[]
     */
    public $expenseDate;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $externalId;
    /**
     * @var \NetSuite\Classes\SearchColumnBooleanField[]
     */
    public $firmed;
    /**
     * @var \NetSuite\Classes\SearchColumnEnumSelectField[]
     */
    public $forecastType;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $fulfillingTransaction;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $fxAccount;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $fxAmount;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $fxCostEstimate;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $fxCostEstimateRate;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $fxEstGrossProfit;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $fxTranCostEstimate;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $fxVsoeAllocation;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $fxVsoeAmount;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $fxVsoePrice;
    /**
     * @var \NetSuite\Classes\SearchColumnBooleanField[]
     */
    public $gcoAvailabelToCharge;
    /**
     * @var \NetSuite\Classes\SearchColumnBooleanField[]
     */
    public $gcoAvailableToRefund;
    /**
     * @var \NetSuite\Classes\SearchColumnEnumSelectField[]
     */
    public $gcoAvsStreetMatch;
    /**
     * @var \NetSuite\Classes\SearchColumnEnumSelectField[]
     */
    public $gcoAvsZipMatch;
    /**
     * @var \NetSuite\Classes\SearchColumnLongField[]
     */
    public $gcoBuyerAccountAge;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $gcoBuyerIp;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $gcoChargeAmount;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $gcoChargebackAmount;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $gcoConfirmedChargedTotal;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $gcoConfirmedRefundedTotal;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $gcoCreditcardNumber;
    /**
     * @var \NetSuite\Classes\SearchColumnEnumSelectField[]
     */
    public $gcoCscMatch;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $gcoFinancialState;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $gcoFulfillmentState;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $gcoOrderId;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $gcoOrderTotal;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $gcoPromotionAmount;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $gcoPromotionName;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $gcoRefundAmount;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $gcoShippingTotal;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $gcoStateChangedDetail;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $giftCert;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $grossAmount;
    /**
     * @var \NetSuite\Classes\SearchColumnBooleanField[]
     */
    public $includeInForecast;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $incoterm;
    /**
     * @var \NetSuite\Classes\SearchColumnEnumSelectField[]
     */
    public $intercoStatus;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $intercoTransaction;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $internalId;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $inventoryLocation;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $inventorySubsidiary;
    /**
     * @var \NetSuite\Classes\SearchColumnBooleanField[]
     */
    public $inVsoeBundle;
    /**
     * @var \NetSuite\Classes\SearchColumnBooleanField[]
     */
    public $isAllocation;
    /**
     * @var \NetSuite\Classes\SearchColumnBooleanField[]
     */
    public $isBackflush;
    /**
     * @var \NetSuite\Classes\SearchColumnBooleanField[]
     */
    public $isGcoChargeback;
    /**
     * @var \NetSuite\Classes\SearchColumnBooleanField[]
     */
    public $isGcoChargeConfirmed;
    /**
     * @var \NetSuite\Classes\SearchColumnBooleanField[]
     */
    public $isGcoPaymentGuaranteed;
    /**
     * @var \NetSuite\Classes\SearchColumnBooleanField[]
     */
    public $isGcoRefundConfirmed;
    /**
     * @var \NetSuite\Classes\SearchColumnBooleanField[]
     */
    public $isInsideDelivery;
    /**
     * @var \NetSuite\Classes\SearchColumnBooleanField[]
     */
    public $isInsidePickup;
    /**
     * @var \NetSuite\Classes\SearchColumnBooleanField[]
     */
    public $isIntercompanyAdjustment;
    /**
     * @var \NetSuite\Classes\SearchColumnBooleanField[]
     */
    public $isInTransitPayment;
    /**
     * @var \NetSuite\Classes\SearchColumnBooleanField[]
     */
    public $isMultiShipTo;
    /**
     * @var \NetSuite\Classes\SearchColumnBooleanField[]
     */
    public $isReversal;
    /**
     * @var \NetSuite\Classes\SearchColumnBooleanField[]
     */
    public $isRevRecTransaction;
    /**
     * @var \NetSuite\Classes\SearchColumnBooleanField[]
     */
    public $isScrap;
    /**
     * @var \NetSuite\Classes\SearchColumnBooleanField[]
     */
    public $isShipAddress;
    /**
     * @var \NetSuite\Classes\SearchColumnBooleanField[]
     */
    public $isTransferPriceCosting;
    /**
     * @var \NetSuite\Classes\SearchColumnBooleanField[]
     */
    public $isWip;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $item;
    /**
     * @var \NetSuite\Classes\SearchColumnEnumSelectField[]
     */
    public $itemFulfillmentChoice;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $itemRevision;
    /**
     * @var \NetSuite\Classes\SearchColumnBooleanField[]
     */
    public $landedCostPerLine;
    /**
     * @var \NetSuite\Classes\SearchColumnDateField[]
     */
    public $lastModifiedDate;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $leadSource;
    /**
     * @var \NetSuite\Classes\SearchColumnLongField[]
     */
    public $line;
    /**
     * @var \NetSuite\Classes\SearchColumnLongField[]
     */
    public $lineSequenceNumber;
    /**
     * @var \NetSuite\Classes\SearchColumnLongField[]
     */
    public $lineUniqueKey;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $location;
    /**
     * @var \NetSuite\Classes\SearchColumnBooleanField[]
     */
    public $locationAutoAssigned;
    /**
     * @var \NetSuite\Classes\SearchColumnBooleanField[]
     */
    public $mainLine;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $mainName;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $manufacturingRouting;
    /**
     * @var \NetSuite\Classes\SearchColumnBooleanField[]
     */
    public $matchBillToReceipt;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $memo;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $memoMain;
    /**
     * @var \NetSuite\Classes\SearchColumnBooleanField[]
     */
    public $memorized;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $merchantAccount;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $message;
    /**
     * @var \NetSuite\Classes\SearchColumnBooleanField[]
     */
    public $multiSubsidiary;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $netAmount;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $netAmountNoTax;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $nextApprover;
    /**
     * @var \NetSuite\Classes\SearchColumnDateField[]
     */
    public $nextBillDate;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $nexus;
    /**
     * @var \NetSuite\Classes\SearchColumnBooleanField[]
     */
    public $noAutoAssignLocation;
    /**
     * @var \NetSuite\Classes\SearchColumnBooleanField[]
     */
    public $nonReimbursable;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $oneTimeTotal;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $opportunity;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $options;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $orderAllocationStrategy;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $orderPriority;
    /**
     * @var \NetSuite\Classes\SearchColumnEnumSelectField[]
     */
    public $originator;
    /**
     * @var \NetSuite\Classes\SearchColumnTextNumberField[]
     */
    public $otherRefNum;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $overheadParentItem;
    /**
     * @var \NetSuite\Classes\SearchColumnBooleanField[]
     */
    public $overrideInstallments;
    /**
     * @var \NetSuite\Classes\SearchColumnLongField[]
     */
    public $packageCount;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $paidAmount;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $paidTransaction;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $partner;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $partnerContribution;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $partnerRole;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $partnerTeamMember;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $payingAmount;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $payingTransaction;
    /**
     * @var \NetSuite\Classes\SearchColumnBooleanField[]
     */
    public $paymentApproved;
    /**
     * @var \NetSuite\Classes\SearchColumnDateField[]
     */
    public $paymentEventDate;
    /**
     * @var \NetSuite\Classes\SearchColumnEnumSelectField[]
     */
    public $paymentEventHoldReason;
    /**
     * @var \NetSuite\Classes\SearchColumnBooleanField[]
     */
    public $paymentEventPurchaseCardUsed;
    /**
     * @var \NetSuite\Classes\SearchColumnBooleanField[]
     */
    public $paymentEventPurchaseDataSent;
    /**
     * @var \NetSuite\Classes\SearchColumnEnumSelectField[]
     */
    public $paymentEventResult;
    /**
     * @var \NetSuite\Classes\SearchColumnEnumSelectField[]
     */
    public $paymentEventType;
    /**
     * @var \NetSuite\Classes\SearchColumnBooleanField[]
     */
    public $paymentHold;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $paymentMethod;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $paymentOption;
    /**
     * @var \NetSuite\Classes\SearchColumnBooleanField[]
     */
    public $payPalPending;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $payPalStatus;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $payPalTranId;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $payrollBatch;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $pnRefNum;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $poRate;
    /**
     * @var \NetSuite\Classes\SearchColumnBooleanField[]
     */
    public $posting;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $postingPeriod;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $priceLevel;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $print;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $probability;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $projectedAmount;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $projectTask;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $promoCode;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $purchaseOrder;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $quantity;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $quantityBilled;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $quantityCommitted;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $quantityPacked;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $quantityPicked;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $quantityRevCommitted;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $quantityShipRecv;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $quantityUom;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $rate;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $realizedGainPostingTransaction;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $recognizedRevenue;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $recordType;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $recurAnnuallyTotal;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $recurMonthlyTotal;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $recurQuarterlyTotal;
    /**
     * @var \NetSuite\Classes\SearchColumnBooleanField[]
     */
    public $recurringBill;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $recurWeeklyTotal;
    /**
     * @var \NetSuite\Classes\SearchColumnLongField[]
     */
    public $refNumber;
    /**
     * @var \NetSuite\Classes\SearchColumnDateField[]
     */
    public $requestedDate;
    /**
     * @var \NetSuite\Classes\SearchColumnEnumSelectField[]
     */
    public $revCommitStatus;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $revCommittingTransaction;
    /**
     * @var \NetSuite\Classes\SearchColumnEnumSelectField[]
     */
    public $revenueStatus;
    /**
     * @var \NetSuite\Classes\SearchColumnDateField[]
     */
    public $reversalDate;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $reversalNumber;
    /**
     * @var \NetSuite\Classes\SearchColumnDateField[]
     */
    public $revRecEndDate;
    /**
     * @var \NetSuite\Classes\SearchColumnBooleanField[]
     */
    public $revRecOnRevCommitment;
    /**
     * @var \NetSuite\Classes\SearchColumnDateField[]
     */
    public $revRecStartDate;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $rgAccount;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $rgAmount;
    /**
     * @var \NetSuite\Classes\SearchColumnDateField[]
     */
    public $salesEffectiveDate;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $salesOrder;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $salesRep;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $salesTeamMember;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $salesTeamRole;
    /**
     * @var \NetSuite\Classes\SearchColumnEnumSelectField[]
     */
    public $schedulingMethod;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $serialNumber;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $serialNumberCost;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $serialNumberCostAdjustment;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $serialNumberQuantity;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $serialNumbers;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $shipAddress;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $shipAddress1;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $shipAddress2;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $shipAddress3;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $shipAddressee;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $shipAttention;
    /**
     * @var \NetSuite\Classes\SearchColumnEnumSelectField[]
     */
    public $shipCarrier;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $shipCity;
    /**
     * @var \NetSuite\Classes\SearchColumnBooleanField[]
     */
    public $shipComplete;
    /**
     * @var \NetSuite\Classes\SearchColumnEnumSelectField[]
     */
    public $shipCountry;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $shipCountryCode;
    /**
     * @var \NetSuite\Classes\SearchColumnDateField[]
     */
    public $shipDate;
    /**
     * @var \NetSuite\Classes\SearchColumnLongField[]
     */
    public $shipGroup;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $shipMethod;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $shipPhone;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $shippingAmount;
    /**
     * @var \NetSuite\Classes\SearchColumnBooleanField[]
     */
    public $shipRecvStatusLine;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $shipState;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $shipTo;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $shipZip;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $signedAmount;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $source;
    /**
     * @var \NetSuite\Classes\SearchColumnDateField[]
     */
    public $startDate;
    /**
     * @var \NetSuite\Classes\SearchColumnEnumSelectField[]
     */
    public $status;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $subscription;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $subscriptionLine;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $subsidiary;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $subsidiaryTaxRegNum;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $taxAmount;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $taxCode;
    /**
     * @var \NetSuite\Classes\SearchColumnBooleanField[]
     */
    public $taxLine;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $taxPeriod;
    /**
     * @var \NetSuite\Classes\SearchColumnDateField[]
     */
    public $taxPointDate;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $taxTotal;
    /**
     * @var \NetSuite\Classes\SearchColumnLongField[]
     */
    public $termInMonths;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $terms;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $termsOfSale;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $title;
    /**
     * @var \NetSuite\Classes\SearchColumnBooleanField[]
     */
    public $toBeEmailed;
    /**
     * @var \NetSuite\Classes\SearchColumnBooleanField[]
     */
    public $toBePrinted;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $toSubsidiary;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $total;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $totalCostEstimate;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $trackingNumbers;
    /**
     * @var \NetSuite\Classes\SearchColumnDateField[]
     */
    public $tranDate;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $tranEstGrossProfit;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $tranFxEstGrossProfit;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $tranId;
    /**
     * @var \NetSuite\Classes\SearchColumnBooleanField[]
     */
    public $tranIsVsoeBundle;
    /**
     * @var \NetSuite\Classes\SearchColumnBooleanField[]
     */
    public $transactionDiscount;
    /**
     * @var \NetSuite\Classes\SearchColumnEnumSelectField[]
     */
    public $transactionLineType;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $transactionNumber;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $transferLocation;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $transferOrderItemLine;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $transferOrderQuantityCommitted;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $transferOrderQuantityPacked;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $transferOrderQuantityPicked;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $transferOrderQuantityReceived;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $transferOrderQuantityShipped;
    /**
     * @var \NetSuite\Classes\SearchColumnEnumSelectField[]
     */
    public $type;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $unit;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $unitCostOverride;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $vendType;
    /**
     * @var \NetSuite\Classes\SearchColumnBooleanField[]
     */
    public $visibleToCustomer;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $vsoeAllocation;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $vsoeAmount;
    /**
     * @var \NetSuite\Classes\SearchColumnEnumSelectField[]
     */
    public $vsoeDeferral;
    /**
     * @var \NetSuite\Classes\SearchColumnBooleanField[]
     */
    public $vsoeDelivered;
    /**
     * @var \NetSuite\Classes\SearchColumnEnumSelectField[]
     */
    public $vsoePermitDiscount;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $vsoePrice;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $webSite;
    /**
     * @var \NetSuite\Classes\SearchColumnCustomFieldList
     */
    public $customFieldList;
    static $paramtypesmap = array(
        "abbrev" => "SearchColumnStringField[]",
        "account" => "SearchColumnSelectField[]",
        "accountType" => "SearchColumnEnumSelectField[]",
        "acctCorpCardExp" => "SearchColumnSelectField[]",
        "actualProductionEndDate" => "SearchColumnDateField[]",
        "actualProductionStartDate" => "SearchColumnDateField[]",
        "actualShipDate" => "SearchColumnDateField[]",
        "altSalesAmount" => "SearchColumnDoubleField[]",
        "altSalesNetAmount" => "SearchColumnDoubleField[]",
        "amount" => "SearchColumnDoubleField[]",
        "amountPaid" => "SearchColumnDoubleField[]",
        "amountRemaining" => "SearchColumnDoubleField[]",
        "amountUnbilled" => "SearchColumnDoubleField[]",
        "appliedToForeignAmount" => "SearchColumnDoubleField[]",
        "appliedToIsFxVariance" => "SearchColumnBooleanField[]",
        "appliedToLinkAmount" => "SearchColumnDoubleField[]",
        "appliedToLinkType" => "SearchColumnStringField[]",
        "appliedToTransaction" => "SearchColumnSelectField[]",
        "applyingForeignAmount" => "SearchColumnDoubleField[]",
        "applyingIsFxVariance" => "SearchColumnBooleanField[]",
        "applyingLinkAmount" => "SearchColumnDoubleField[]",
        "applyingLinkType" => "SearchColumnStringField[]",
        "applyingTransaction" => "SearchColumnSelectField[]",
        "approvalStatus" => "SearchColumnEnumSelectField[]",
        "authCode" => "SearchColumnStringField[]",
        "autoCalculateLag" => "SearchColumnBooleanField[]",
        "avsStreetMatch" => "SearchColumnEnumSelectField[]",
        "avsZipMatch" => "SearchColumnEnumSelectField[]",
        "billable" => "SearchColumnBooleanField[]",
        "billAddress" => "SearchColumnStringField[]",
        "billAddress1" => "SearchColumnStringField[]",
        "billAddress2" => "SearchColumnStringField[]",
        "billAddress3" => "SearchColumnStringField[]",
        "billAddressee" => "SearchColumnStringField[]",
        "billAttention" => "SearchColumnStringField[]",
        "billCity" => "SearchColumnStringField[]",
        "billCountry" => "SearchColumnEnumSelectField[]",
        "billCountryCode" => "SearchColumnStringField[]",
        "billedDate" => "SearchColumnDateField[]",
        "billingAccount" => "SearchColumnSelectField[]",
        "billingAmount" => "SearchColumnDoubleField[]",
        "billingSchedule" => "SearchColumnSelectField[]",
        "billingTransaction" => "SearchColumnSelectField[]",
        "billPhone" => "SearchColumnStringField[]",
        "billState" => "SearchColumnStringField[]",
        "billVarianceStatus" => "SearchColumnEnumSelectField[]",
        "billZip" => "SearchColumnStringField[]",
        "binNumber" => "SearchColumnStringField[]",
        "binNumberQuantity" => "SearchColumnDoubleField[]",
        "bomQuantity" => "SearchColumnDoubleField[]",
        "buildEntireAssembly" => "SearchColumnBooleanField[]",
        "buildVariance" => "SearchColumnDoubleField[]",
        "built" => "SearchColumnDoubleField[]",
        "canHaveStackablePromotions" => "SearchColumnBooleanField[]",
        "catchUpPeriod" => "SearchColumnStringField[]",
        "ccCustomerCode" => "SearchColumnStringField[]",
        "ccExpDate" => "SearchColumnDateField[]",
        "ccHolderName" => "SearchColumnStringField[]",
        "ccNumber" => "SearchColumnStringField[]",
        "ccStreet" => "SearchColumnStringField[]",
        "ccZipCode" => "SearchColumnStringField[]",
        "class" => "SearchColumnSelectField[]",
        "cleared" => "SearchColumnBooleanField[]",
        "closed" => "SearchColumnBooleanField[]",
        "closeDate" => "SearchColumnDateField[]",
        "cogsAmount" => "SearchColumnDoubleField[]",
        "commissionEffectiveDate" => "SearchColumnDateField[]",
        "commit" => "SearchColumnEnumSelectField[]",
        "componentYield" => "SearchColumnDoubleField[]",
        "confirmationNumber" => "SearchColumnStringField[]",
        "contribution" => "SearchColumnDoubleField[]",
        "contributionPrimary" => "SearchColumnDoubleField[]",
        "costComponentAmount" => "SearchColumnDoubleField[]",
        "costComponentCategory" => "SearchColumnStringField[]",
        "costComponentItem" => "SearchColumnStringField[]",
        "costComponentQuantity" => "SearchColumnDoubleField[]",
        "costComponentStandardCost" => "SearchColumnDoubleField[]",
        "costEstimate" => "SearchColumnDoubleField[]",
        "costEstimateRate" => "SearchColumnDoubleField[]",
        "costEstimateType" => "SearchColumnEnumSelectField[]",
        "createdBy" => "SearchColumnSelectField[]",
        "createdFrom" => "SearchColumnSelectField[]",
        "creditAmount" => "SearchColumnDoubleField[]",
        "cscMatch" => "SearchColumnEnumSelectField[]",
        "currency" => "SearchColumnSelectField[]",
        "customForm" => "SearchColumnSelectField[]",
        "customGL" => "SearchColumnBooleanField[]",
        "custType" => "SearchColumnSelectField[]",
        "dateCreated" => "SearchColumnDateField[]",
        "daysOpen" => "SearchColumnLongField[]",
        "daysOverdue" => "SearchColumnLongField[]",
        "debitAmount" => "SearchColumnDoubleField[]",
        "deferredRevenue" => "SearchColumnDoubleField[]",
        "deferRevRec" => "SearchColumnBooleanField[]",
        "department" => "SearchColumnSelectField[]",
        "depositDate" => "SearchColumnDateField[]",
        "depositTransaction" => "SearchColumnSelectField[]",
        "discountAmount" => "SearchColumnDoubleField[]",
        "docUnit" => "SearchColumnStringField[]",
        "drAccount" => "SearchColumnStringField[]",
        "dueDate" => "SearchColumnDateField[]",
        "effectiveRate" => "SearchColumnDoubleField[]",
        "email" => "SearchColumnStringField[]",
        "endDate" => "SearchColumnDateField[]",
        "entity" => "SearchColumnSelectField[]",
        "entityStatus" => "SearchColumnSelectField[]",
        "estGrossProfit" => "SearchColumnDoubleField[]",
        "estGrossProfitPct" => "SearchColumnDoubleField[]",
        "estGrossProfitPercent" => "SearchColumnDoubleField[]",
        "exchangeRate" => "SearchColumnDoubleField[]",
        "excludeCommission" => "SearchColumnBooleanField[]",
        "excludeFromRateRequest" => "SearchColumnBooleanField[]",
        "expectedCloseDate" => "SearchColumnDateField[]",
        "expectedReceiptDate" => "SearchColumnDateField[]",
        "expenseCategory" => "SearchColumnSelectField[]",
        "expenseDate" => "SearchColumnDateField[]",
        "externalId" => "SearchColumnSelectField[]",
        "firmed" => "SearchColumnBooleanField[]",
        "forecastType" => "SearchColumnEnumSelectField[]",
        "fulfillingTransaction" => "SearchColumnSelectField[]",
        "fxAccount" => "SearchColumnStringField[]",
        "fxAmount" => "SearchColumnDoubleField[]",
        "fxCostEstimate" => "SearchColumnDoubleField[]",
        "fxCostEstimateRate" => "SearchColumnDoubleField[]",
        "fxEstGrossProfit" => "SearchColumnDoubleField[]",
        "fxTranCostEstimate" => "SearchColumnDoubleField[]",
        "fxVsoeAllocation" => "SearchColumnDoubleField[]",
        "fxVsoeAmount" => "SearchColumnDoubleField[]",
        "fxVsoePrice" => "SearchColumnDoubleField[]",
        "gcoAvailabelToCharge" => "SearchColumnBooleanField[]",
        "gcoAvailableToRefund" => "SearchColumnBooleanField[]",
        "gcoAvsStreetMatch" => "SearchColumnEnumSelectField[]",
        "gcoAvsZipMatch" => "SearchColumnEnumSelectField[]",
        "gcoBuyerAccountAge" => "SearchColumnLongField[]",
        "gcoBuyerIp" => "SearchColumnStringField[]",
        "gcoChargeAmount" => "SearchColumnDoubleField[]",
        "gcoChargebackAmount" => "SearchColumnDoubleField[]",
        "gcoConfirmedChargedTotal" => "SearchColumnDoubleField[]",
        "gcoConfirmedRefundedTotal" => "SearchColumnDoubleField[]",
        "gcoCreditcardNumber" => "SearchColumnStringField[]",
        "gcoCscMatch" => "SearchColumnEnumSelectField[]",
        "gcoFinancialState" => "SearchColumnStringField[]",
        "gcoFulfillmentState" => "SearchColumnStringField[]",
        "gcoOrderId" => "SearchColumnStringField[]",
        "gcoOrderTotal" => "SearchColumnDoubleField[]",
        "gcoPromotionAmount" => "SearchColumnDoubleField[]",
        "gcoPromotionName" => "SearchColumnStringField[]",
        "gcoRefundAmount" => "SearchColumnDoubleField[]",
        "gcoShippingTotal" => "SearchColumnDoubleField[]",
        "gcoStateChangedDetail" => "SearchColumnStringField[]",
        "giftCert" => "SearchColumnStringField[]",
        "grossAmount" => "SearchColumnDoubleField[]",
        "includeInForecast" => "SearchColumnBooleanField[]",
        "incoterm" => "SearchColumnSelectField[]",
        "intercoStatus" => "SearchColumnEnumSelectField[]",
        "intercoTransaction" => "SearchColumnStringField[]",
        "internalId" => "SearchColumnSelectField[]",
        "inventoryLocation" => "SearchColumnSelectField[]",
        "inventorySubsidiary" => "SearchColumnSelectField[]",
        "inVsoeBundle" => "SearchColumnBooleanField[]",
        "isAllocation" => "SearchColumnBooleanField[]",
        "isBackflush" => "SearchColumnBooleanField[]",
        "isGcoChargeback" => "SearchColumnBooleanField[]",
        "isGcoChargeConfirmed" => "SearchColumnBooleanField[]",
        "isGcoPaymentGuaranteed" => "SearchColumnBooleanField[]",
        "isGcoRefundConfirmed" => "SearchColumnBooleanField[]",
        "isInsideDelivery" => "SearchColumnBooleanField[]",
        "isInsidePickup" => "SearchColumnBooleanField[]",
        "isIntercompanyAdjustment" => "SearchColumnBooleanField[]",
        "isInTransitPayment" => "SearchColumnBooleanField[]",
        "isMultiShipTo" => "SearchColumnBooleanField[]",
        "isReversal" => "SearchColumnBooleanField[]",
        "isRevRecTransaction" => "SearchColumnBooleanField[]",
        "isScrap" => "SearchColumnBooleanField[]",
        "isShipAddress" => "SearchColumnBooleanField[]",
        "isTransferPriceCosting" => "SearchColumnBooleanField[]",
        "isWip" => "SearchColumnBooleanField[]",
        "item" => "SearchColumnSelectField[]",
        "itemFulfillmentChoice" => "SearchColumnEnumSelectField[]",
        "itemRevision" => "SearchColumnSelectField[]",
        "landedCostPerLine" => "SearchColumnBooleanField[]",
        "lastModifiedDate" => "SearchColumnDateField[]",
        "leadSource" => "SearchColumnSelectField[]",
        "line" => "SearchColumnLongField[]",
        "lineSequenceNumber" => "SearchColumnLongField[]",
        "lineUniqueKey" => "SearchColumnLongField[]",
        "location" => "SearchColumnSelectField[]",
        "locationAutoAssigned" => "SearchColumnBooleanField[]",
        "mainLine" => "SearchColumnBooleanField[]",
        "mainName" => "SearchColumnStringField[]",
        "manufacturingRouting" => "SearchColumnSelectField[]",
        "matchBillToReceipt" => "SearchColumnBooleanField[]",
        "memo" => "SearchColumnStringField[]",
        "memoMain" => "SearchColumnStringField[]",
        "memorized" => "SearchColumnBooleanField[]",
        "merchantAccount" => "SearchColumnSelectField[]",
        "message" => "SearchColumnStringField[]",
        "multiSubsidiary" => "SearchColumnBooleanField[]",
        "netAmount" => "SearchColumnDoubleField[]",
        "netAmountNoTax" => "SearchColumnDoubleField[]",
        "nextApprover" => "SearchColumnSelectField[]",
        "nextBillDate" => "SearchColumnDateField[]",
        "nexus" => "SearchColumnSelectField[]",
        "noAutoAssignLocation" => "SearchColumnBooleanField[]",
        "nonReimbursable" => "SearchColumnBooleanField[]",
        "oneTimeTotal" => "SearchColumnDoubleField[]",
        "opportunity" => "SearchColumnSelectField[]",
        "options" => "SearchColumnStringField[]",
        "orderAllocationStrategy" => "SearchColumnSelectField[]",
        "orderPriority" => "SearchColumnDoubleField[]",
        "originator" => "SearchColumnEnumSelectField[]",
        "otherRefNum" => "SearchColumnTextNumberField[]",
        "overheadParentItem" => "SearchColumnSelectField[]",
        "overrideInstallments" => "SearchColumnBooleanField[]",
        "packageCount" => "SearchColumnLongField[]",
        "paidAmount" => "SearchColumnDoubleField[]",
        "paidTransaction" => "SearchColumnSelectField[]",
        "partner" => "SearchColumnSelectField[]",
        "partnerContribution" => "SearchColumnDoubleField[]",
        "partnerRole" => "SearchColumnSelectField[]",
        "partnerTeamMember" => "SearchColumnSelectField[]",
        "payingAmount" => "SearchColumnDoubleField[]",
        "payingTransaction" => "SearchColumnSelectField[]",
        "paymentApproved" => "SearchColumnBooleanField[]",
        "paymentEventDate" => "SearchColumnDateField[]",
        "paymentEventHoldReason" => "SearchColumnEnumSelectField[]",
        "paymentEventPurchaseCardUsed" => "SearchColumnBooleanField[]",
        "paymentEventPurchaseDataSent" => "SearchColumnBooleanField[]",
        "paymentEventResult" => "SearchColumnEnumSelectField[]",
        "paymentEventType" => "SearchColumnEnumSelectField[]",
        "paymentHold" => "SearchColumnBooleanField[]",
        "paymentMethod" => "SearchColumnSelectField[]",
        "paymentOption" => "SearchColumnSelectField[]",
        "payPalPending" => "SearchColumnBooleanField[]",
        "payPalStatus" => "SearchColumnStringField[]",
        "payPalTranId" => "SearchColumnStringField[]",
        "payrollBatch" => "SearchColumnStringField[]",
        "pnRefNum" => "SearchColumnStringField[]",
        "poRate" => "SearchColumnDoubleField[]",
        "posting" => "SearchColumnBooleanField[]",
        "postingPeriod" => "SearchColumnSelectField[]",
        "priceLevel" => "SearchColumnSelectField[]",
        "print" => "SearchColumnStringField[]",
        "probability" => "SearchColumnDoubleField[]",
        "projectedAmount" => "SearchColumnDoubleField[]",
        "projectTask" => "SearchColumnSelectField[]",
        "promoCode" => "SearchColumnSelectField[]",
        "purchaseOrder" => "SearchColumnSelectField[]",
        "quantity" => "SearchColumnDoubleField[]",
        "quantityBilled" => "SearchColumnDoubleField[]",
        "quantityCommitted" => "SearchColumnDoubleField[]",
        "quantityPacked" => "SearchColumnDoubleField[]",
        "quantityPicked" => "SearchColumnDoubleField[]",
        "quantityRevCommitted" => "SearchColumnDoubleField[]",
        "quantityShipRecv" => "SearchColumnDoubleField[]",
        "quantityUom" => "SearchColumnDoubleField[]",
        "rate" => "SearchColumnDoubleField[]",
        "realizedGainPostingTransaction" => "SearchColumnStringField[]",
        "recognizedRevenue" => "SearchColumnDoubleField[]",
        "recordType" => "SearchColumnStringField[]",
        "recurAnnuallyTotal" => "SearchColumnDoubleField[]",
        "recurMonthlyTotal" => "SearchColumnDoubleField[]",
        "recurQuarterlyTotal" => "SearchColumnDoubleField[]",
        "recurringBill" => "SearchColumnBooleanField[]",
        "recurWeeklyTotal" => "SearchColumnDoubleField[]",
        "refNumber" => "SearchColumnLongField[]",
        "requestedDate" => "SearchColumnDateField[]",
        "revCommitStatus" => "SearchColumnEnumSelectField[]",
        "revCommittingTransaction" => "SearchColumnSelectField[]",
        "revenueStatus" => "SearchColumnEnumSelectField[]",
        "reversalDate" => "SearchColumnDateField[]",
        "reversalNumber" => "SearchColumnStringField[]",
        "revRecEndDate" => "SearchColumnDateField[]",
        "revRecOnRevCommitment" => "SearchColumnBooleanField[]",
        "revRecStartDate" => "SearchColumnDateField[]",
        "rgAccount" => "SearchColumnSelectField[]",
        "rgAmount" => "SearchColumnDoubleField[]",
        "salesEffectiveDate" => "SearchColumnDateField[]",
        "salesOrder" => "SearchColumnSelectField[]",
        "salesRep" => "SearchColumnSelectField[]",
        "salesTeamMember" => "SearchColumnSelectField[]",
        "salesTeamRole" => "SearchColumnSelectField[]",
        "schedulingMethod" => "SearchColumnEnumSelectField[]",
        "serialNumber" => "SearchColumnStringField[]",
        "serialNumberCost" => "SearchColumnDoubleField[]",
        "serialNumberCostAdjustment" => "SearchColumnDoubleField[]",
        "serialNumberQuantity" => "SearchColumnDoubleField[]",
        "serialNumbers" => "SearchColumnStringField[]",
        "shipAddress" => "SearchColumnStringField[]",
        "shipAddress1" => "SearchColumnStringField[]",
        "shipAddress2" => "SearchColumnStringField[]",
        "shipAddress3" => "SearchColumnStringField[]",
        "shipAddressee" => "SearchColumnStringField[]",
        "shipAttention" => "SearchColumnStringField[]",
        "shipCarrier" => "SearchColumnEnumSelectField[]",
        "shipCity" => "SearchColumnStringField[]",
        "shipComplete" => "SearchColumnBooleanField[]",
        "shipCountry" => "SearchColumnEnumSelectField[]",
        "shipCountryCode" => "SearchColumnStringField[]",
        "shipDate" => "SearchColumnDateField[]",
        "shipGroup" => "SearchColumnLongField[]",
        "shipMethod" => "SearchColumnSelectField[]",
        "shipPhone" => "SearchColumnStringField[]",
        "shippingAmount" => "SearchColumnDoubleField[]",
        "shipRecvStatusLine" => "SearchColumnBooleanField[]",
        "shipState" => "SearchColumnStringField[]",
        "shipTo" => "SearchColumnSelectField[]",
        "shipZip" => "SearchColumnStringField[]",
        "signedAmount" => "SearchColumnDoubleField[]",
        "source" => "SearchColumnStringField[]",
        "startDate" => "SearchColumnDateField[]",
        "status" => "SearchColumnEnumSelectField[]",
        "subscription" => "SearchColumnSelectField[]",
        "subscriptionLine" => "SearchColumnSelectField[]",
        "subsidiary" => "SearchColumnSelectField[]",
        "subsidiaryTaxRegNum" => "SearchColumnStringField[]",
        "taxAmount" => "SearchColumnDoubleField[]",
        "taxCode" => "SearchColumnSelectField[]",
        "taxLine" => "SearchColumnBooleanField[]",
        "taxPeriod" => "SearchColumnSelectField[]",
        "taxPointDate" => "SearchColumnDateField[]",
        "taxTotal" => "SearchColumnDoubleField[]",
        "termInMonths" => "SearchColumnLongField[]",
        "terms" => "SearchColumnSelectField[]",
        "termsOfSale" => "SearchColumnStringField[]",
        "title" => "SearchColumnStringField[]",
        "toBeEmailed" => "SearchColumnBooleanField[]",
        "toBePrinted" => "SearchColumnBooleanField[]",
        "toSubsidiary" => "SearchColumnSelectField[]",
        "total" => "SearchColumnDoubleField[]",
        "totalCostEstimate" => "SearchColumnDoubleField[]",
        "trackingNumbers" => "SearchColumnStringField[]",
        "tranDate" => "SearchColumnDateField[]",
        "tranEstGrossProfit" => "SearchColumnDoubleField[]",
        "tranFxEstGrossProfit" => "SearchColumnDoubleField[]",
        "tranId" => "SearchColumnStringField[]",
        "tranIsVsoeBundle" => "SearchColumnBooleanField[]",
        "transactionDiscount" => "SearchColumnBooleanField[]",
        "transactionLineType" => "SearchColumnEnumSelectField[]",
        "transactionNumber" => "SearchColumnStringField[]",
        "transferLocation" => "SearchColumnSelectField[]",
        "transferOrderItemLine" => "SearchColumnStringField[]",
        "transferOrderQuantityCommitted" => "SearchColumnDoubleField[]",
        "transferOrderQuantityPacked" => "SearchColumnDoubleField[]",
        "transferOrderQuantityPicked" => "SearchColumnDoubleField[]",
        "transferOrderQuantityReceived" => "SearchColumnDoubleField[]",
        "transferOrderQuantityShipped" => "SearchColumnDoubleField[]",
        "type" => "SearchColumnEnumSelectField[]",
        "unit" => "SearchColumnStringField[]",
        "unitCostOverride" => "SearchColumnDoubleField[]",
        "vendType" => "SearchColumnSelectField[]",
        "visibleToCustomer" => "SearchColumnBooleanField[]",
        "vsoeAllocation" => "SearchColumnDoubleField[]",
        "vsoeAmount" => "SearchColumnDoubleField[]",
        "vsoeDeferral" => "SearchColumnEnumSelectField[]",
        "vsoeDelivered" => "SearchColumnBooleanField[]",
        "vsoePermitDiscount" => "SearchColumnEnumSelectField[]",
        "vsoePrice" => "SearchColumnDoubleField[]",
        "webSite" => "SearchColumnStringField[]",
        "customFieldList" => "SearchColumnCustomFieldList",
    );
}
