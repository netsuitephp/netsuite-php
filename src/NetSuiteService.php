<?php namespace Fungku\NetSuite;

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
	public function login(Classes\LoginRequest $arg) {
		return $this->makeSoapCall("login", $arg);
	}


	/**
	 * Service Call: ssoLogin
	 * Parameter options:
	 * (SsoLoginRequest) parameters
	 * @param Classes\SsoLoginRequest $arg
	 * @return Classes\SsoLoginResponse
	 * @throws Exception invalid function signature message
	 */
	public function ssoLogin(Classes\SsoLoginRequest $arg) {
		return $this->makeSoapCall("ssoLogin", $arg);
	}


	/**
	 * Service Call: mapSso
	 * Parameter options:
	 * (MapSsoRequest) parameters
	 * @param Classes\MapSsoRequest $arg
	 * @return Classes\MapSsoResponse
	 * @throws Exception invalid function signature message
	 */
	public function mapSso(Classes\MapSsoRequest $arg) {
		return $this->makeSoapCall("mapSso", $arg);
	}


	/**
	 * Service Call: changePassword
	 * Parameter options:
	 * (ChangePasswordRequest) parameters
	 * @param Classes\ChangePasswordRequest $arg
	 * @return Classes\ChangePasswordResponse
	 * @throws Exception invalid function signature message
	 */
	public function changePassword(Classes\ChangePasswordRequest $arg) {
		return $this->makeSoapCall("changePassword", $arg);
	}


	/**
	 * Service Call: changeEmail
	 * Parameter options:
	 * (ChangeEmailRequest) parameters
	 * @param Classes\ChangeEmailRequest $arg
	 * @return Classes\ChangeEmailResponse
	 * @throws Exception invalid function signature message
	 */
	public function changeEmail(Classes\ChangeEmailRequest $arg) {
		return $this->makeSoapCall("changeEmail", $arg);
	}


	/**
	 * Service Call: logout
	 * Parameter options:
	 * (LogoutRequest) parameters
	 * @param Classes\LogoutRequest $arg
	 * @return Classes\LogoutResponse
	 * @throws Exception invalid function signature message
	 */
	public function logout(Classes\LogoutRequest $arg) {
		return $this->makeSoapCall("logout", $arg);
	}


	/**
	 * Service Call: add
	 * Parameter options:
	 * (AddRequest) parameters
	 * @param Classes\AddRequest $arg
	 * @return Classes\AddResponse
	 * @throws Exception invalid function signature message
	 */
	public function add(Classes\AddRequest $arg) {
		return $this->makeSoapCall("add", $arg);
	}


	/**
	 * Service Call: delete
	 * Parameter options:
	 * (DeleteRequest) parameters
	 * @param Classes\DeleteRequest $arg
	 * @return Classes\DeleteResponse
	 * @throws Exception invalid function signature message
	 */
	public function delete(Classes\DeleteRequest $arg) {
		return $this->makeSoapCall("delete", $arg);
	}


	/**
	 * Service Call: search
	 * Parameter options:
	 * (SearchRequest) parameters
	 * @param Classes\SearchRequest $arg
	 * @return Classes\SearchResponse
	 * @throws Exception invalid function signature message
	 */
	public function search(Classes\SearchRequest $arg) {
		return $this->makeSoapCall("search", $arg);
	}


	/**
	 * Service Call: searchMore
	 * Parameter options:
	 * (SearchMoreRequest) parameters
	 * @param Classes\SearchMoreRequest $arg
	 * @return Classes\SearchMoreResponse
	 * @throws Exception invalid function signature message
	 */
	public function searchMore(Classes\SearchMoreRequest $arg) {
		return $this->makeSoapCall("searchMore", $arg);
	}


	/**
	 * Service Call: searchMoreWithId
	 * Parameter options:
	 * (SearchMoreWithIdRequest) parameters
	 * @param Classes\SearchMoreWithIdRequest $arg
	 * @return Classes\SearchMoreWithIdResponse
	 * @throws Exception invalid function signature message
	 */
	public function searchMoreWithId(Classes\SearchMoreWithIdRequest $arg) {
		return $this->makeSoapCall("searchMoreWithId", $arg);
	}


	/**
	 * Service Call: searchNext
	 * Parameter options:
	 * (SearchNextRequest) parameters
	 * @param Classes\SearchNextRequest $arg
	 * @return Classes\SearchNextResponse
	 * @throws Exception invalid function signature message
	 */
	public function searchNext(Classes\SearchNextRequest $arg) {
		return $this->makeSoapCall("searchNext", $arg);
	}


	/**
	 * Service Call: update
	 * Parameter options:
	 * (UpdateRequest) parameters
	 * @param Classes\UpdateRequest $arg
	 * @return Classes\UpdateResponse
	 * @throws Exception invalid function signature message
	 */
	public function update(Classes\UpdateRequest $arg) {
		return $this->makeSoapCall("update", $arg);
	}


	/**
	 * Service Call: upsert
	 * Parameter options:
	 * (UpsertRequest) parameters
	 * @param Classes\UpsertRequest $arg
	 * @return Classes\UpsertResponse
	 * @throws Exception invalid function signature message
	 */
	public function upsert(Classes\UpsertRequest $arg) {
		return $this->makeSoapCall("upsert", $arg);
	}


	/**
	 * Service Call: addList
	 * Parameter options:
	 * (AddListRequest) parameters
	 * @param Classes\AddListRequest $arg
	 * @return Classes\AddListResponse
	 * @throws Exception invalid function signature message
	 */
	public function addList(Classes\AddListRequest $arg) {
		return $this->makeSoapCall("addList", $arg);
	}


	/**
	 * Service Call: deleteList
	 * Parameter options:
	 * (DeleteListRequest) parameters
	 * @param Classes\DeleteListRequest $arg
	 * @return Classes\DeleteListResponse
	 * @throws Exception invalid function signature message
	 */
	public function deleteList(Classes\DeleteListRequest $arg) {
		return $this->makeSoapCall("deleteList", $arg);
	}


	/**
	 * Service Call: updateList
	 * Parameter options:
	 * (UpdateListRequest) parameters
	 * @param Classes\UpdateListRequest $arg
	 * @return Classes\UpdateListResponse
	 * @throws Exception invalid function signature message
	 */
	public function updateList(Classes\UpdateListRequest $arg) {
		return $this->makeSoapCall("updateList", $arg);
	}


	/**
	 * Service Call: upsertList
	 * Parameter options:
	 * (UpsertListRequest) parameters
	 * @param Classes\UpsertListRequest $arg
	 * @return Classes\UpsertListResponse
	 * @throws Exception invalid function signature message
	 */
	public function upsertList(Classes\UpsertListRequest $arg) {
		return $this->makeSoapCall("upsertList", $arg);
	}


	/**
	 * Service Call: get
	 * Parameter options:
	 * (GetRequest) parameters
	 * @param Classes\GetRequest $arg
	 * @return Classes\GetResponse
	 * @throws Exception invalid function signature message
	 */
	public function get(Classes\GetRequest $arg) {
		return $this->makeSoapCall("get", $arg);
	}


	/**
	 * Service Call: getList
	 * Parameter options:
	 * (GetListRequest) parameters
	 * @param Classes\GetListRequest $arg
	 * @return Classes\GetListResponse
	 * @throws Exception invalid function signature message
	 */
	public function getList(Classes\GetListRequest $arg) {
		return $this->makeSoapCall("getList", $arg);
	}


	/**
	 * Service Call: getAll
	 * Parameter options:
	 * (GetAllRequest) parameters
	 * @param Classes\GetAllRequest $arg
	 * @return Classes\GetAllResponse
	 * @throws Exception invalid function signature message
	 */
	public function getAll(Classes\GetAllRequest $arg) {
		return $this->makeSoapCall("getAll", $arg);
	}


	/**
	 * Service Call: getSavedSearch
	 * Parameter options:
	 * (GetSavedSearchRequest) parameters
	 * @param Classes\GetSavedSearchRequest $arg
	 * @return Classes\GetSavedSearchResponse
	 * @throws Exception invalid function signature message
	 */
	public function getSavedSearch(Classes\GetSavedSearchRequest $arg) {
		return $this->makeSoapCall("getSavedSearch", $arg);
	}


	/**
	 * Service Call: getCustomizationId
	 * Parameter options:
	 * (GetCustomizationIdRequest) parameters
	 * @param Classes\GetCustomizationIdRequest $arg
	 * @return Classes\GetCustomizationIdResponse
	 * @throws Exception invalid function signature message
	 */
	public function getCustomizationId(Classes\GetCustomizationIdRequest $arg) {
		return $this->makeSoapCall("getCustomizationId", $arg);
	}


	/**
	 * Service Call: initialize
	 * Parameter options:
	 * (InitializeRequest) parameters
	 * @param Classes\InitializeRequest $arg
	 * @return Classes\InitializeResponse
	 * @throws Exception invalid function signature message
	 */
	public function initialize(Classes\InitializeRequest $arg) {
		return $this->makeSoapCall("initialize", $arg);
	}


	/**
	 * Service Call: initializeList
	 * Parameter options:
	 * (InitializeListRequest) parameters
	 * @param Classes\InitializeListRequest $arg
	 * @return Classes\InitializeListResponse
	 * @throws Exception invalid function signature message
	 */
	public function initializeList(Classes\InitializeListRequest $arg) {
		return $this->makeSoapCall("initializeList", $arg);
	}


	/**
	 * Service Call: getSelectValue
	 * Parameter options:
	 * (getSelectValueRequest) parameters
	 * @param Classes\getSelectValueRequest $arg
	 * @return Classes\getSelectValueResponse
	 * @throws Exception invalid function signature message
	 */
	public function getSelectValue(Classes\getSelectValueRequest $arg) {
		return $this->makeSoapCall("getSelectValue", $arg);
	}


	/**
	 * Service Call: getItemAvailability
	 * Parameter options:
	 * (GetItemAvailabilityRequest) parameters
	 * @param Classes\GetItemAvailabilityRequest $arg
	 * @return Classes\GetItemAvailabilityResponse
	 * @throws Exception invalid function signature message
	 */
	public function getItemAvailability(Classes\GetItemAvailabilityRequest $arg) {
		return $this->makeSoapCall("getItemAvailability", $arg);
	}


	/**
	 * Service Call: getBudgetExchangeRate
	 * Parameter options:
	 * (GetBudgetExchangeRateRequest) parameter
	 * @param Classes\GetBudgetExchangeRateRequest $arg
	 * @return Classes\GetBudgetExchangeRateResponse
	 * @throws Exception invalid function signature message
	 */
	public function getBudgetExchangeRate(Classes\GetBudgetExchangeRateRequest $arg) {
		return $this->makeSoapCall("getBudgetExchangeRate", $arg);
	}


	/**
	 * Service Call: getConsolidatedExchangeRate
	 * Parameter options:
	 * (GetConsolidatedExchangeRateRequest) parameters
	 * @param Classes\GetConsolidatedExchangeRateRequest $arg
	 * @return Classes\GetConsolidatedExchangeRateResponse
	 * @throws Exception invalid function signature message
	 */
	public function getConsolidatedExchangeRate(Classes\GetConsolidatedExchangeRateRequest $arg) {
		return $this->makeSoapCall("getConsolidatedExchangeRate", $arg);
	}


	/**
	 * Service Call: getCurrencyRate
	 * Parameter options:
	 * (GetCurrencyRateRequest) parameters
	 * @param Classes\GetCurrencyRateRequest $arg
	 * @return Classes\GetCurrencyRateResponse
	 * @throws Exception invalid function signature message
	 */
	public function getCurrencyRate(Classes\GetCurrencyRateRequest $arg) {
		return $this->makeSoapCall("getCurrencyRate", $arg);
	}


	/**
	 * Service Call: getDataCenterUrls
	 * Parameter options:
	 * (GetDataCenterUrlsRequest) parameters
	 * @param Classes\GetDataCenterUrlsRequest $arg
	 * @return Classes\GetDataCenterUrlsResponse
	 * @throws Exception invalid function signature message
	 */
	public function getDataCenterUrls(Classes\GetDataCenterUrlsRequest $arg) {
		return $this->makeSoapCall("getDataCenterUrls", $arg);
	}


	/**
	 * Service Call: getPostingTransactionSummary
	 * Parameter options:
	 * (GetPostingTransactionSummaryRequest) parameters
	 * @param Classes\GetPostingTransactionSummaryRequest $arg
	 * @return Classes\GetPostingTransactionSummaryResponse
	 * @throws Exception invalid function signature message
	 */
	public function getPostingTransactionSummary(Classes\GetPostingTransactionSummaryRequest $arg) {
		return $this->makeSoapCall("getPostingTransactionSummary", $arg);
	}


	/**
	 * Service Call: getServerTime
	 * Parameter options:
	 * (GetServerTimeRequest) parameters
	 * @param Classes\GetServerTimeRequest $arg
	 * @return Classes\GetServerTimeResponse
	 * @throws Exception invalid function signature message
	 */
	public function getServerTime(Classes\GetServerTimeRequest $arg) {
		return $this->makeSoapCall("getServerTime", $arg);
	}


	/**
	 * Service Call: attach
	 * Parameter options:
	 * (AttachRequest) parameters
	 * @param Classes\AttachRequest $arg
	 * @return Classes\AttachResponse
	 * @throws Exception invalid function signature message
	 */
	public function attach(Classes\AttachRequest $arg) {
		return $this->makeSoapCall("attach", $arg);
	}


	/**
	 * Service Call: detach
	 * Parameter options:
	 * (DetachRequest) parameters
	 * @param Classes\DetachRequest $arg
	 * @return Classes\DetachResponse
	 * @throws Exception invalid function signature message
	 */
	public function detach(Classes\DetachRequest $arg) {
		return $this->makeSoapCall("detach", $arg);
	}


	/**
	 * Service Call: updateInviteeStatus
	 * Parameter options:
	 * (UpdateInviteeStatusRequest) parameters
	 * @param Classes\UpdateInviteeStatusRequest $arg
	 * @return Classes\UpdateInviteeStatusResponse
	 * @throws Exception invalid function signature message
	 */
	public function updateInviteeStatus(Classes\UpdateInviteeStatusRequest $arg) {
		return $this->makeSoapCall("updateInviteeStatus", $arg);
	}


	/**
	 * Service Call: updateInviteeStatusList
	 * Parameter options:
	 * (UpdateInviteeStatusListRequest) parameters
	 * @param Classes\UpdateInviteeStatusListRequest $arg
	 * @return Classes\UpdateInviteeStatusListResponse
	 * @throws Exception invalid function signature message
	 */
	public function updateInviteeStatusList(Classes\UpdateInviteeStatusListRequest $arg) {
		return $this->makeSoapCall("updateInviteeStatusList", $arg);
	}


	/**
	 * Service Call: asyncAddList
	 * Parameter options:
	 * (AsyncAddListRequest) parameters
	 * @param Classes\AsyncAddListRequest $arg
	 * @return Classes\AsyncStatusResponse
	 * @throws Exception invalid function signature message
	 */
	public function asyncAddList(Classes\AsyncAddListRequest $arg) {
		return $this->makeSoapCall("asyncAddList", $arg);
	}


	/**
	 * Service Call: asyncUpdateList
	 * Parameter options:
	 * (AsyncUpdateListRequest) parameters
	 * @param Classes\AsyncUpdateListRequest $arg
	 * @return Classes\AsyncStatusResponse
	 * @throws Exception invalid function signature message
	 */
	public function asyncUpdateList(Classes\AsyncUpdateListRequest $arg) {
		return $this->makeSoapCall("asyncUpdateList", $arg);
	}


	/**
	 * Service Call: asyncUpsertList
	 * Parameter options:
	 * (AsyncUpsertListRequest) parameters
	 * @param Classes\AsyncUpsertListRequest $arg
	 * @return Classes\AsyncStatusResponse
	 * @throws Exception invalid function signature message
	 */
	public function asyncUpsertList(Classes\AsyncUpsertListRequest $arg) {
		return $this->makeSoapCall("asyncUpsertList", $arg);
	}


	/**
	 * Service Call: asyncDeleteList
	 * Parameter options:
	 * (AsyncDeleteListRequest) parameters
	 * @param Classes\AsyncDeleteListRequest $arg
	 * @return Classes\AsyncStatusResponse
	 * @throws Exception invalid function signature message
	 */
	public function asyncDeleteList(Classes\AsyncDeleteListRequest $arg) {
		return $this->makeSoapCall("asyncDeleteList", $arg);
	}


	/**
	 * Service Call: asyncGetList
	 * Parameter options:
	 * (AsyncGetListRequest) parameters
	 * @param Classes\AsyncGetListRequest $arg
	 * @return Classes\AsyncStatusResponse
	 * @throws Exception invalid function signature message
	 */
	public function asyncGetList(Classes\AsyncGetListRequest $arg) {
		return $this->makeSoapCall("asyncGetList", $arg);
	}


	/**
	 * Service Call: asyncInitializeList
	 * Parameter options:
	 * (AsyncInitializeListRequest) parameters
	 * @param Classes\AsyncInitializeListRequest $arg
	 * @return Classes\AsyncStatusResponse
	 * @throws Exception invalid function signature message
	 */
	public function asyncInitializeList(Classes\AsyncInitializeListRequest $arg) {
		return $this->makeSoapCall("asyncInitializeList", $arg);
	}


	/**
	 * Service Call: asyncSearch
	 * Parameter options:
	 * (AsyncSearchRequest) parameters
	 * @param Classes\AsyncSearchRequest $arg
	 * @return Classes\AsyncStatusResponse
	 * @throws Exception invalid function signature message
	 */
	public function asyncSearch(Classes\AsyncSearchRequest $arg) {
		return $this->makeSoapCall("asyncSearch", $arg);
	}


	/**
	 * Service Call: getAsyncResult
	 * Parameter options:
	 * (GetAsyncResultRequest) parameters
	 * @param Classes\GetAsyncResultRequest $arg
	 * @return Classes\GetAsyncResultResponse
	 * @throws Exception invalid function signature message
	 */
	public function getAsyncResult(Classes\GetAsyncResultRequest $arg) {
		return $this->makeSoapCall("getAsyncResult", $arg);
	}


	/**
	 * Service Call: checkAsyncStatus
	 * Parameter options:
	 * (CheckAsyncStatusRequest) parameters
	 * @param Classes\CheckAsyncStatusRequest $arg
	 * @return Classes\AsyncStatusResponse
	 * @throws Exception invalid function signature message
	 */
	public function checkAsyncStatus(Classes\CheckAsyncStatusRequest $arg) {
		return $this->makeSoapCall("checkAsyncStatus", $arg);
	}


	/**
	 * Service Call: getDeleted
	 * Parameter options:
	 * (GetDeletedRequest) parameters
	 * @param Classes\GetDeletedRequest $arg
	 * @return Classes\GetDeletedResponse
	 * @throws Exception invalid function signature message
	 */
	public function getDeleted(Classes\GetDeletedRequest $arg) {
		return $this->makeSoapCall("getDeleted", $arg);
	}


}


