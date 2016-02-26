<?php namespace Fungku\NetSuite;

use Fungku\NetSuite\Classes as NetSuite;

class NetSuiteService extends NetSuiteClient {

	public $generated_from_endpoint = "2015_1";

	/**
	 * Service Call: login
	 * Parameter options:
	 * (LoginRequest) parameters
	 * @param Classes\LoginRequest $arg
	 * @throws Exception invalid function signature message
	 * @return mixed
	 */
	public function login(NetSuite\LoginRequest $arg) {
		return $this->makeSoapCall("login", $arg);
	}


	/**
	 * Service Call: ssoLogin
	 * Parameter options:
	 * (SsoLoginRequest) parameters
	 * @param Classes\SsoLoginRequest $arg
	 * @return NetSuite\SsoLoginResponse
	 * @throws Exception invalid function signature message
	 */
	public function ssoLogin(NetSuite\SsoLoginRequest $arg) {
		return $this->makeSoapCall("ssoLogin", $arg);
	}


	/**
	 * Service Call: mapSso
	 * Parameter options:
	 * (MapSsoRequest) parameters
	 * @param Classes\MapSsoRequest $arg
	 * @return NetSuite\MapSsoResponse
	 * @throws Exception invalid function signature message
	 */
	public function mapSso(NetSuite\MapSsoRequest $arg) {
		return $this->makeSoapCall("mapSso", $arg);
	}


	/**
	 * Service Call: changePassword
	 * Parameter options:
	 * (ChangePasswordRequest) parameters
	 * @param Classes\ChangePasswordRequest $arg
	 * @return NetSuite\ChangePasswordResponse
	 * @throws Exception invalid function signature message
	 */
	public function changePassword(NetSuite\ChangePasswordRequest $arg) {
		return $this->makeSoapCall("changePassword", $arg);
	}


	/**
	 * Service Call: changeEmail
	 * Parameter options:
	 * (ChangeEmailRequest) parameters
	 * @param Classes\ChangeEmailRequest $arg
	 * @return NetSuite\ChangeEmailResponse
	 * @throws Exception invalid function signature message
	 */
	public function changeEmail(NetSuite\ChangeEmailRequest $arg) {
		return $this->makeSoapCall("changeEmail", $arg);
	}


	/**
	 * Service Call: logout
	 * Parameter options:
	 * (LogoutRequest) parameters
	 * @param Classes\LogoutRequest $arg
	 * @return NetSuite\LogoutResponse
	 * @throws Exception invalid function signature message
	 */
	public function logout(NetSuite\LogoutRequest $arg) {
		return $this->makeSoapCall("logout", $arg);
	}


	/**
	 * Service Call: add
	 * Parameter options:
	 * (AddRequest) parameters
	 * @param Classes\AddRequest $arg
	 * @return NetSuite\AddResponse
	 * @throws Exception invalid function signature message
	 */
	public function add(NetSuite\AddRequest $arg) {
		return $this->makeSoapCall("add", $arg);
	}


	/**
	 * Service Call: delete
	 * Parameter options:
	 * (DeleteRequest) parameters
	 * @param Classes\DeleteRequest $arg
	 * @return NetSuite\DeleteResponse
	 * @throws Exception invalid function signature message
	 */
	public function delete(NetSuite\DeleteRequest $arg) {
		return $this->makeSoapCall("delete", $arg);
	}


	/**
	 * Service Call: search
	 * Parameter options:
	 * (SearchRequest) parameters
	 * @param Classes\SearchRequest $arg
	 * @return NetSuite\SearchRequest
	 * @throws Exception invalid function signature message
	 */
	public function search(NetSuite\SearchRequest $arg) {
		return $this->makeSoapCall("search", $arg);
	}


	/**
	 * Service Call: searchMore
	 * Parameter options:
	 * (SearchMoreRequest) parameters
	 * @param Classes\SearchMoreRequest $arg
	 * @return NetSuite\SearchMoreResponse
	 * @throws Exception invalid function signature message
	 */
	public function searchMore(NetSuite\SearchMoreRequest $arg) {
		return $this->makeSoapCall("searchMore", $arg);
	}


	/**
	 * Service Call: searchMoreWithId
	 * Parameter options:
	 * (SearchMoreWithIdRequest) parameters
	 * @param Classes\SearchMoreWithIdRequest $arg
	 * @return NetSuite\SearchMoreWithIdResponse
	 * @throws Exception invalid function signature message
	 */
	public function searchMoreWithId(NetSuite\SearchMoreWithIdRequest $arg) {
		return $this->makeSoapCall("searchMoreWithId", $arg);
	}


	/**
	 * Service Call: searchNext
	 * Parameter options:
	 * (SearchNextRequest) parameters
	 * @param Classes\SearchNextRequest $arg
	 * @return NetSuite\SearchNextResponse
	 * @throws Exception invalid function signature message
	 */
	public function searchNext(NetSuite\SearchNextRequest $arg) {
		return $this->makeSoapCall("searchNext", $arg);
	}


	/**
	 * Service Call: update
	 * Parameter options:
	 * (UpdateRequest) parameters
	 * @param Classes\UpdateRequest $arg
	 * @return NetSuite\UpdateResponse
	 * @throws Exception invalid function signature message
	 */
	public function update(NetSuite\UpdateRequest $arg) {
		return $this->makeSoapCall("update", $arg);
	}


	/**
	 * Service Call: upsert
	 * Parameter options:
	 * (UpsertRequest) parameters
	 * @param Classes\UpsertRequest $arg
	 * @return NetSuite\UpsertResponse
	 * @throws Exception invalid function signature message
	 */
	public function upsert(NetSuite\UpsertRequest $arg) {
		return $this->makeSoapCall("upsert", $arg);
	}


	/**
	 * Service Call: addList
	 * Parameter options:
	 * (AddListRequest) parameters
	 * @param Classes\AddListRequest $arg
	 * @return NetSuite\AddListResponse
	 * @throws Exception invalid function signature message
	 */
	public function addList(NetSuite\AddListRequest $arg) {
		return $this->makeSoapCall("addList", $arg);
	}


	/**
	 * Service Call: deleteList
	 * Parameter options:
	 * (DeleteListRequest) parameters
	 * @param Classes\DeleteListRequest $arg
	 * @return NetSuite\DeleteListResponse
	 * @throws Exception invalid function signature message
	 */
	public function deleteList(NetSuite\DeleteListRequest $arg) {
		return $this->makeSoapCall("deleteList", $arg);
	}


	/**
	 * Service Call: updateList
	 * Parameter options:
	 * (UpdateListRequest) parameters
	 * @param Classes\UpdateListRequest $arg
	 * @return NetSuite\UpdateListResponse
	 * @throws Exception invalid function signature message
	 */
	public function updateList(NetSuite\UpdateListRequest $arg) {
		return $this->makeSoapCall("updateList", $arg);
	}


	/**
	 * Service Call: upsertList
	 * Parameter options:
	 * (UpsertListRequest) parameters
	 * @param Classes\UpsertListRequest $arg
	 * @return NetSuite\UpsertListResponse
	 * @throws Exception invalid function signature message
	 */
	public function upsertList(NetSuite\UpsertListRequest $arg) {
		return $this->makeSoapCall("upsertList", $arg);
	}


	/**
	 * Service Call: get
	 * Parameter options:
	 * (GetRequest) parameters
	 * @param Classes\GetRequest $arg
	 * @return NetSuite\GetResponse
	 * @throws Exception invalid function signature message
	 */
	public function get(NetSuite\GetRequest $arg) {
		return $this->makeSoapCall("get", $arg);
	}


	/**
	 * Service Call: getList
	 * Parameter options:
	 * (GetListRequest) parameters
	 * @param Classes\GetListRequest $arg
	 * @return NetSuite\GetListResponse
	 * @throws Exception invalid function signature message
	 */
	public function getList(NetSuite\GetListRequest $arg) {
		return $this->makeSoapCall("getList", $arg);
	}


	/**
	 * Service Call: getAll
	 * Parameter options:
	 * (GetAllRequest) parameters
	 * @param Classes\GetAllRequest $arg
	 * @return NetSuite\GetAllResponse
	 * @throws Exception invalid function signature message
	 */
	public function getAll(NetSuite\GetAllRequest $arg) {
		return $this->makeSoapCall("getAll", $arg);
	}


	/**
	 * Service Call: getSavedSearch
	 * Parameter options:
	 * (GetSavedSearchRequest) parameters
	 * @param Classes\GetSavedSearchRequest $arg
	 * @return NetSuite\GetSavedSearchResponse
	 * @throws Exception invalid function signature message
	 */
	public function getSavedSearch(NetSuite\GetSavedSearchRequest $arg) {
		return $this->makeSoapCall("getSavedSearch", $arg);
	}


	/**
	 * Service Call: getCustomizationId
	 * Parameter options:
	 * (GetCustomizationIdRequest) parameters
	 * @param Classes\GetCustomizationIdRequest $arg
	 * @return NetSuite\GetCustomizationIdResponse
	 * @throws Exception invalid function signature message
	 */
	public function getCustomizationId(NetSuite\GetCustomizationIdRequest $arg) {
		return $this->makeSoapCall("getCustomizationId", $arg);
	}


	/**
	 * Service Call: initialize
	 * Parameter options:
	 * (InitializeRequest) parameters
	 * @param Classes\InitializeRequest $arg
	 * @return NetSuite\InitializeResponse
	 * @throws Exception invalid function signature message
	 */
	public function initialize(NetSuite\InitializeRequest $arg) {
		return $this->makeSoapCall("initialize", $arg);
	}


	/**
	 * Service Call: initializeList
	 * Parameter options:
	 * (InitializeListRequest) parameters
	 * @param Classes\InitializeListRequest $arg
	 * @return NetSuite\InitializeListResponse
	 * @throws Exception invalid function signature message
	 */
	public function initializeList(NetSuite\InitializeListRequest $arg) {
		return $this->makeSoapCall("initializeList", $arg);
	}


	/**
	 * Service Call: getSelectValue
	 * Parameter options:
	 * (getSelectValueRequest) parameters
	 * @param Classes\getSelectValueRequest $arg
	 * @return NetSuite\getSelectValueResponse
	 * @throws Exception invalid function signature message
	 */
	public function getSelectValue(NetSuite\getSelectValueRequest $arg) {
		return $this->makeSoapCall("getSelectValue", $arg);
	}


	/**
	 * Service Call: getItemAvailability
	 * Parameter options:
	 * (GetItemAvailabilityRequest) parameters
	 * @param Classes\GetItemAvailabilityRequest $arg
	 * @return NetSuite\GetItemAvailabilityResponse
	 * @throws Exception invalid function signature message
	 */
	public function getItemAvailability(NetSuite\GetItemAvailabilityRequest $arg) {
		return $this->makeSoapCall("getItemAvailability", $arg);
	}


	/**
	 * Service Call: getBudgetExchangeRate
	 * Parameter options:
	 * (GetBudgetExchangeRateRequest) parameter
	 * @param Classes\GetBudgetExchangeRateRequest $arg
	 * @return NetSuite\GetBudgetExchangeRateResponse
	 * @throws Exception invalid function signature message
	 */
	public function getBudgetExchangeRate(NetSuite\GetBudgetExchangeRateRequest $arg) {
		return $this->makeSoapCall("getBudgetExchangeRate", $arg);
	}


	/**
	 * Service Call: getConsolidatedExchangeRate
	 * Parameter options:
	 * (GetConsolidatedExchangeRateRequest) parameters
	 * @param Classes\GetConsolidatedExchangeRateRequest $arg
	 * @return NetSuite\GetConsolidatedExchangeRateResponse
	 * @throws Exception invalid function signature message
	 */
	public function getConsolidatedExchangeRate(NetSuite\GetConsolidatedExchangeRateRequest $arg) {
		return $this->makeSoapCall("getConsolidatedExchangeRate", $arg);
	}


	/**
	 * Service Call: getCurrencyRate
	 * Parameter options:
	 * (GetCurrencyRateRequest) parameters
	 * @param Classes\GetCurrencyRateRequest $arg
	 * @return NetSuite\GetCurrencyRateResponse
	 * @throws Exception invalid function signature message
	 */
	public function getCurrencyRate(NetSuite\GetCurrencyRateRequest $arg) {
		return $this->makeSoapCall("getCurrencyRate", $arg);
	}


	/**
	 * Service Call: getDataCenterUrls
	 * Parameter options:
	 * (GetDataCenterUrlsRequest) parameters
	 * @param Classes\GetDataCenterUrlsRequest $arg
	 * @return NetSuite\GetDataCenterUrlsResponse
	 * @throws Exception invalid function signature message
	 */
	public function getDataCenterUrls(NetSuite\GetDataCenterUrlsRequest $arg) {
		return $this->makeSoapCall("getDataCenterUrls", $arg);
	}


	/**
	 * Service Call: getPostingTransactionSummary
	 * Parameter options:
	 * (GetPostingTransactionSummaryRequest) parameters
	 * @param Classes\GetPostingTransactionSummaryRequest $arg
	 * @return NetSuite\GetPostingTransactionSummaryResponse
	 * @throws Exception invalid function signature message
	 */
	public function getPostingTransactionSummary(NetSuite\GetPostingTransactionSummaryRequest $arg) {
		return $this->makeSoapCall("getPostingTransactionSummary", $arg);
	}


	/**
	 * Service Call: getServerTime
	 * Parameter options:
	 * (GetServerTimeRequest) parameters
	 * @param Classes\GetServerTimeRequest $arg
	 * @return NetSuite\GetServerTimeResponse
	 * @throws Exception invalid function signature message
	 */
	public function getServerTime(NetSuite\GetServerTimeRequest $arg) {
		return $this->makeSoapCall("getServerTime", $arg);
	}


	/**
	 * Service Call: attach
	 * Parameter options:
	 * (AttachRequest) parameters
	 * @param Classes\AttachRequest $arg
	 * @return NetSuite\AttachResponse
	 * @throws Exception invalid function signature message
	 */
	public function attach(NetSuite\AttachRequest $arg) {
		return $this->makeSoapCall("attach", $arg);
	}


	/**
	 * Service Call: detach
	 * Parameter options:
	 * (DetachRequest) parameters
	 * @param Classes\DetachRequest $arg
	 * @return NetSuite\DetachResponse
	 * @throws Exception invalid function signature message
	 */
	public function detach(NetSuite\DetachRequest $arg) {
		return $this->makeSoapCall("detach", $arg);
	}


	/**
	 * Service Call: updateInviteeStatus
	 * Parameter options:
	 * (UpdateInviteeStatusRequest) parameters
	 * @param Classes\UpdateInviteeStatusRequest $arg
	 * @return NetSuite\UpdateInviteeStatusResponse
	 * @throws Exception invalid function signature message
	 */
	public function updateInviteeStatus(NetSuite\UpdateInviteeStatusRequest $arg) {
		return $this->makeSoapCall("updateInviteeStatus", $arg);
	}


	/**
	 * Service Call: updateInviteeStatusList
	 * Parameter options:
	 * (UpdateInviteeStatusListRequest) parameters
	 * @param Classes\UpdateInviteeStatusListRequest $arg
	 * @return NetSuite\UpdateInviteeStatusListResponse
	 * @throws Exception invalid function signature message
	 */
	public function updateInviteeStatusList(NetSuite\UpdateInviteeStatusListRequest $arg) {
		return $this->makeSoapCall("updateInviteeStatusList", $arg);
	}


	/**
	 * Service Call: asyncAddList
	 * Parameter options:
	 * (AsyncAddListRequest) parameters
	 * @param Classes\AsyncAddListRequest $arg
	 * @return NetSuite\AsyncStatusResponse
	 * @throws Exception invalid function signature message
	 */
	public function asyncAddList(NetSuite\AsyncAddListRequest $arg) {
		return $this->makeSoapCall("asyncAddList", $arg);
	}


	/**
	 * Service Call: asyncUpdateList
	 * Parameter options:
	 * (AsyncUpdateListRequest) parameters
	 * @param Classes\AsyncUpdateListRequest $arg
	 * @return NetSuite\AsyncStatusResponse
	 * @throws Exception invalid function signature message
	 */
	public function asyncUpdateList(NetSuite\AsyncUpdateListRequest $arg) {
		return $this->makeSoapCall("asyncUpdateList", $arg);
	}


	/**
	 * Service Call: asyncUpsertList
	 * Parameter options:
	 * (AsyncUpsertListRequest) parameters
	 * @param Classes\AsyncUpsertListRequest $arg
	 * @return NetSuite\AsyncStatusResponse
	 * @throws Exception invalid function signature message
	 */
	public function asyncUpsertList(NetSuite\AsyncUpsertListRequest $arg) {
		return $this->makeSoapCall("asyncUpsertList", $arg);
	}


	/**
	 * Service Call: asyncDeleteList
	 * Parameter options:
	 * (AsyncDeleteListRequest) parameters
	 * @param Classes\AsyncDeleteListRequest $arg
	 * @return NetSuite\AsyncStatusResponse
	 * @throws Exception invalid function signature message
	 */
	public function asyncDeleteList(NetSuite\AsyncDeleteListRequest $arg) {
		return $this->makeSoapCall("asyncDeleteList", $arg);
	}


	/**
	 * Service Call: asyncGetList
	 * Parameter options:
	 * (AsyncGetListRequest) parameters
	 * @param Classes\AsyncGetListRequest $arg
	 * @return NetSuite\AsyncStatusResponse
	 * @throws Exception invalid function signature message
	 */
	public function asyncGetList(NetSuite\AsyncGetListRequest $arg) {
		return $this->makeSoapCall("asyncGetList", $arg);
	}


	/**
	 * Service Call: asyncInitializeList
	 * Parameter options:
	 * (AsyncInitializeListRequest) parameters
	 * @param Classes\AsyncInitializeListRequest $arg
	 * @return NetSuite\AsyncStatusResponse
	 * @throws Exception invalid function signature message
	 */
	public function asyncInitializeList(NetSuite\AsyncInitializeListRequest $arg) {
		return $this->makeSoapCall("asyncInitializeList", $arg);
	}


	/**
	 * Service Call: asyncSearch
	 * Parameter options:
	 * (AsyncSearchRequest) parameters
	 * @param Classes\AsyncSearchRequest $arg
	 * @return NetSuite\AsyncStatusResponse
	 * @throws Exception invalid function signature message
	 */
	public function asyncSearch(NetSuite\AsyncSearchRequest $arg) {
		return $this->makeSoapCall("asyncSearch", $arg);
	}


	/**
	 * Service Call: getAsyncResult
	 * Parameter options:
	 * (GetAsyncResultRequest) parameters
	 * @param Classes\GetAsyncResultRequest $arg
	 * @return NetSuite\GetAsyncResultResponse
	 * @throws Exception invalid function signature message
	 */
	public function getAsyncResult(NetSuite\GetAsyncResultRequest $arg) {
		return $this->makeSoapCall("getAsyncResult", $arg);
	}


	/**
	 * Service Call: checkAsyncStatus
	 * Parameter options:
	 * (CheckAsyncStatusRequest) parameters
	 * @param Classes\CheckAsyncStatusRequest $arg
	 * @return NetSuite\AsyncStatusResponse
	 * @throws Exception invalid function signature message
	 */
	public function checkAsyncStatus(NetSuite\CheckAsyncStatusRequest $arg) {
		return $this->makeSoapCall("checkAsyncStatus", $arg);
	}


	/**
	 * Service Call: getDeleted
	 * Parameter options:
	 * (GetDeletedRequest) parameters
	 * @param Classes\GetDeletedRequest $arg
	 * @return NetSuite\GetDeletedResponse
	 * @throws Exception invalid function signature message
	 */
	public function getDeleted(NetSuite\GetDeletedRequest $arg) {
		return $this->makeSoapCall("getDeleted", $arg);
	}


}


