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
 * generated:  2017-08-01 09:12:52 PM UTC
 */

namespace NetSuite\Classes;

class SearchDate {
    static $paramtypesmap = array(
    );
    const fiscalHalfBeforeLast = "fiscalHalfBeforeLast";
    const fiscalHalfBeforeLastToDate = "fiscalHalfBeforeLastToDate";
    const fiscalQuarterBeforeLast = "fiscalQuarterBeforeLast";
    const fiscalQuarterBeforeLastToDate = "fiscalQuarterBeforeLastToDate";
    const fiscalYearBeforeLast = "fiscalYearBeforeLast";
    const fiscalYearBeforeLastToDate = "fiscalYearBeforeLastToDate";
    const fiveDaysAgo = "fiveDaysAgo";
    const fiveDaysFromNow = "fiveDaysFromNow";
    const fourDaysAgo = "fourDaysAgo";
    const fourDaysFromNow = "fourDaysFromNow";
    const fourWeeksStartingThisWeek = "fourWeeksStartingThisWeek";
    const lastBusinessWeek = "lastBusinessWeek";
    const lastFiscalHalf = "lastFiscalHalf";
    const lastFiscalHalfOneFiscalYearAgo = "lastFiscalHalfOneFiscalYearAgo";
    const lastFiscalHalfToDate = "lastFiscalHalfToDate";
    const lastFiscalQuarter = "lastFiscalQuarter";
    const lastFiscalQuarterOneFiscalYearAgo = "lastFiscalQuarterOneFiscalYearAgo";
    const lastFiscalQuarterToDate = "lastFiscalQuarterToDate";
    const lastFiscalQuarterTwoFiscalYearsAgo = "lastFiscalQuarterTwoFiscalYearsAgo";
    const lastFiscalYear = "lastFiscalYear";
    const lastFiscalYearToDate = "lastFiscalYearToDate";
    const lastMonth = "lastMonth";
    const lastMonthOneFiscalQuarterAgo = "lastMonthOneFiscalQuarterAgo";
    const lastMonthOneFiscalYearAgo = "lastMonthOneFiscalYearAgo";
    const lastMonthToDate = "lastMonthToDate";
    const lastMonthTwoFiscalQuartersAgo = "lastMonthTwoFiscalQuartersAgo";
    const lastMonthTwoFiscalYearsAgo = "lastMonthTwoFiscalYearsAgo";
    const lastRollingHalf = "lastRollingHalf";
    const lastRollingQuarter = "lastRollingQuarter";
    const lastRollingYear = "lastRollingYear";
    const lastWeek = "lastWeek";
    const lastWeekToDate = "lastWeekToDate";
    const monthAfterNext = "monthAfterNext";
    const monthAfterNextToDate = "monthAfterNextToDate";
    const monthBeforeLast = "monthBeforeLast";
    const monthBeforeLastToDate = "monthBeforeLastToDate";
    const nextBusinessWeek = "nextBusinessWeek";
    const nextFiscalHalf = "nextFiscalHalf";
    const nextFiscalQuarter = "nextFiscalQuarter";
    const nextFiscalYear = "nextFiscalYear";
    const nextFourWeeks = "nextFourWeeks";
    const nextMonth = "nextMonth";
    const nextOneHalf = "nextOneHalf";
    const nextOneMonth = "nextOneMonth";
    const nextOneQuarter = "nextOneQuarter";
    const nextOneWeek = "nextOneWeek";
    const nextOneYear = "nextOneYear";
    const nextWeek = "nextWeek";
    const ninetyDaysAgo = "ninetyDaysAgo";
    const ninetyDaysFromNow = "ninetyDaysFromNow";
    const oneYearBeforeLast = "oneYearBeforeLast";
    const previousFiscalQuartersLastFiscalYear = "previousFiscalQuartersLastFiscalYear";
    const previousFiscalQuartersThisFiscalYear = "previousFiscalQuartersThisFiscalYear";
    const previousMonthsLastFiscalHalf = "previousMonthsLastFiscalHalf";
    const previousMonthsLastFiscalQuarter = "previousMonthsLastFiscalQuarter";
    const previousMonthsLastFiscalYear = "previousMonthsLastFiscalYear";
    const previousMonthsSameFiscalHalfLastFiscalYear = "previousMonthsSameFiscalHalfLastFiscalYear";
    const previousMonthsSameFiscalQuarterLastFiscalYear = "previousMonthsSameFiscalQuarterLastFiscalYear";
    const previousMonthsThisFiscalHalf = "previousMonthsThisFiscalHalf";
    const previousMonthsThisFiscalQuarter = "previousMonthsThisFiscalQuarter";
    const previousMonthsThisFiscalYear = "previousMonthsThisFiscalYear";
    const previousOneDay = "previousOneDay";
    const previousOneHalf = "previousOneHalf";
    const previousOneMonth = "previousOneMonth";
    const previousOneQuarter = "previousOneQuarter";
    const previousOneWeek = "previousOneWeek";
    const previousOneYear = "previousOneYear";
    const previousRollingHalf = "previousRollingHalf";
    const previousRollingQuarter = "previousRollingQuarter";
    const previousRollingYear = "previousRollingYear";
    const sameDayFiscalQuarterBeforeLast = "sameDayFiscalQuarterBeforeLast";
    const sameDayFiscalYearBeforeLast = "sameDayFiscalYearBeforeLast";
    const sameDayLastFiscalQuarter = "sameDayLastFiscalQuarter";
    const sameDayLastFiscalYear = "sameDayLastFiscalYear";
    const sameDayLastMonth = "sameDayLastMonth";
    const sameDayLastWeek = "sameDayLastWeek";
    const sameDayMonthBeforeLast = "sameDayMonthBeforeLast";
    const sameDayWeekBeforeLast = "sameDayWeekBeforeLast";
    const sameFiscalHalfLastFiscalYear = "sameFiscalHalfLastFiscalYear";
    const sameFiscalHalfLastFiscalYearToDate = "sameFiscalHalfLastFiscalYearToDate";
    const sameFiscalQuarterFiscalYearBeforeLast = "sameFiscalQuarterFiscalYearBeforeLast";
    const sameFiscalQuarterLastFiscalYear = "sameFiscalQuarterLastFiscalYear";
    const sameFiscalQuarterLastFiscalYearToDate = "sameFiscalQuarterLastFiscalYearToDate";
    const sameMonthFiscalQuarterBeforeLast = "sameMonthFiscalQuarterBeforeLast";
    const sameMonthFiscalYearBeforeLast = "sameMonthFiscalYearBeforeLast";
    const sameMonthLastFiscalQuarter = "sameMonthLastFiscalQuarter";
    const sameMonthLastFiscalQuarterToDate = "sameMonthLastFiscalQuarterToDate";
    const sameMonthLastFiscalYear = "sameMonthLastFiscalYear";
    const sameMonthLastFiscalYearToDate = "sameMonthLastFiscalYearToDate";
    const sameWeekFiscalYearBeforeLast = "sameWeekFiscalYearBeforeLast";
    const sameWeekLastFiscalYear = "sameWeekLastFiscalYear";
    const sixtyDaysAgo = "sixtyDaysAgo";
    const sixtyDaysFromNow = "sixtyDaysFromNow";
    const startOfFiscalHalfBeforeLast = "startOfFiscalHalfBeforeLast";
    const startOfFiscalQuarterBeforeLast = "startOfFiscalQuarterBeforeLast";
    const startOfFiscalYearBeforeLast = "startOfFiscalYearBeforeLast";
    const startOfLastBusinessWeek = "startOfLastBusinessWeek";
    const startOfLastFiscalHalf = "startOfLastFiscalHalf";
    const startOfLastFiscalHalfOneFiscalYearAgo = "startOfLastFiscalHalfOneFiscalYearAgo";
    const startOfLastFiscalQuarter = "startOfLastFiscalQuarter";
    const startOfLastFiscalQuarterOneFiscalYearAgo = "startOfLastFiscalQuarterOneFiscalYearAgo";
    const startOfLastFiscalYear = "startOfLastFiscalYear";
    const startOfLastMonth = "startOfLastMonth";
    const startOfLastMonthOneFiscalQuarterAgo = "startOfLastMonthOneFiscalQuarterAgo";
    const startOfLastMonthOneFiscalYearAgo = "startOfLastMonthOneFiscalYearAgo";
    const startOfLastRollingHalf = "startOfLastRollingHalf";
    const startOfLastRollingQuarter = "startOfLastRollingQuarter";
    const startOfLastRollingYear = "startOfLastRollingYear";
    const startOfLastWeek = "startOfLastWeek";
    const startOfMonthBeforeLast = "startOfMonthBeforeLast";
    const startOfNextBusinessWeek = "startOfNextBusinessWeek";
    const startOfNextFiscalHalf = "startOfNextFiscalHalf";
    const startOfNextFiscalQuarter = "startOfNextFiscalQuarter";
    const startOfNextFiscalYear = "startOfNextFiscalYear";
    const startOfNextMonth = "startOfNextMonth";
    const startOfNextWeek = "startOfNextWeek";
    const startOfPreviousRollingHalf = "startOfPreviousRollingHalf";
    const startOfPreviousRollingQuarter = "startOfPreviousRollingQuarter";
    const startOfPreviousRollingYear = "startOfPreviousRollingYear";
    const startOfSameFiscalHalfLastFiscalYear = "startOfSameFiscalHalfLastFiscalYear";
    const startOfSameFiscalQuarterLastFiscalYear = "startOfSameFiscalQuarterLastFiscalYear";
    const startOfSameMonthLastFiscalQuarter = "startOfSameMonthLastFiscalQuarter";
    const startOfSameMonthLastFiscalYear = "startOfSameMonthLastFiscalYear";
    const startOfThisBusinessWeek = "startOfThisBusinessWeek";
    const startOfThisFiscalHalf = "startOfThisFiscalHalf";
    const startOfThisFiscalQuarter = "startOfThisFiscalQuarter";
    const startOfThisFiscalYear = "startOfThisFiscalYear";
    const startOfThisMonth = "startOfThisMonth";
    const startOfThisWeek = "startOfThisWeek";
    const startOfThisYear = "startOfThisYear";
    const startOfWeekBeforeLast = "startOfWeekBeforeLast";
    const tenDaysAgo = "tenDaysAgo";
    const tenDaysFromNow = "tenDaysFromNow";
    const thirtyDaysAgo = "thirtyDaysAgo";
    const thirtyDaysFromNow = "thirtyDaysFromNow";
    const thisBusinessWeek = "thisBusinessWeek";
    const thisFiscalHalf = "thisFiscalHalf";
    const thisFiscalHalfToDate = "thisFiscalHalfToDate";
    const thisFiscalQuarter = "thisFiscalQuarter";
    const thisFiscalQuarterToDate = "thisFiscalQuarterToDate";
    const thisFiscalYear = "thisFiscalYear";
    const thisFiscalYearToDate = "thisFiscalYearToDate";
    const thisMonth = "thisMonth";
    const thisMonthToDate = "thisMonthToDate";
    const thisRollingHalf = "thisRollingHalf";
    const thisRollingQuarter = "thisRollingQuarter";
    const thisRollingYear = "thisRollingYear";
    const thisWeek = "thisWeek";
    const thisWeekToDate = "thisWeekToDate";
    const thisYear = "thisYear";
    const threeDaysAgo = "threeDaysAgo";
    const threeDaysFromNow = "threeDaysFromNow";
    const threeFiscalQuartersAgo = "threeFiscalQuartersAgo";
    const threeFiscalQuartersAgoToDate = "threeFiscalQuartersAgoToDate";
    const threeFiscalYearsAgo = "threeFiscalYearsAgo";
    const threeFiscalYearsAgoToDate = "threeFiscalYearsAgoToDate";
    const threeMonthsAgo = "threeMonthsAgo";
    const threeMonthsAgoToDate = "threeMonthsAgoToDate";
    const today = "today";
    const tomorrow = "tomorrow";
    const twoDaysAgo = "twoDaysAgo";
    const twoDaysFromNow = "twoDaysFromNow";
    const weekAfterNext = "weekAfterNext";
    const weekAfterNextToDate = "weekAfterNextToDate";
    const weekBeforeLast = "weekBeforeLast";
    const weekBeforeLastToDate = "weekBeforeLastToDate";
    const yesterday = "yesterday";
}
