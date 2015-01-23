<?php

class NetSuiteService extends NetsuiteClient {

	public $generated_from_endpoint = "2014_2";
	

	 

	/**
	 * Service Call: login
	 * Parameter options:
	 * (LoginRequest) parameters
	 * @return LoginResponse
	 * @throws Exception invalid function signature message
	 */
	public function login(LoginRequest $arg) {
		return $this->makeSoapCall("login", $arg);
	}


	/**
	 * Service Call: ssoLogin
	 * Parameter options:
	 * (SsoLoginRequest) parameters
	 * @return SsoLoginResponse
	 * @throws Exception invalid function signature message
	 */
	public function ssoLogin(SsoLoginRequest $arg) {
		return $this->makeSoapCall("ssoLogin", $arg);
	}


	/**
	 * Service Call: mapSso
	 * Parameter options:
	 * (MapSsoRequest) parameters
	 * @return MapSsoResponse
	 * @throws Exception invalid function signature message
	 */
	public function mapSso(MapSsoRequest $arg) {
		return $this->makeSoapCall("mapSso", $arg);
	}


	/**
	 * Service Call: changePassword
	 * Parameter options:
	 * (ChangePasswordRequest) parameters
	 * @return ChangePasswordResponse
	 * @throws Exception invalid function signature message
	 */
	public function changePassword(ChangePasswordRequest $arg) {
		return $this->makeSoapCall("changePassword", $arg);
	}


	/**
	 * Service Call: changeEmail
	 * Parameter options:
	 * (ChangeEmailRequest) parameters
	 * @return ChangeEmailResponse
	 * @throws Exception invalid function signature message
	 */
	public function changeEmail(ChangeEmailRequest $arg) {
		return $this->makeSoapCall("changeEmail", $arg);
	}


	/**
	 * Service Call: logout
	 * Parameter options:
	 * (LogoutRequest) parameters
	 * @return LogoutResponse
	 * @throws Exception invalid function signature message
	 */
	public function logout(LogoutRequest $arg) {
		return $this->makeSoapCall("logout", $arg);
	}


	/**
	 * Service Call: add
	 * Parameter options:
	 * (AddRequest) parameters
	 * @return AddResponse
	 * @throws Exception invalid function signature message
	 */
	public function add(AddRequest $arg) {
		return $this->makeSoapCall("add", $arg);
	}


	/**
	 * Service Call: delete
	 * Parameter options:
	 * (DeleteRequest) parameters
	 * @return DeleteResponse
	 * @throws Exception invalid function signature message
	 */
	public function delete(DeleteRequest $arg) {
		return $this->makeSoapCall("delete", $arg);
	}


	/**
	 * Service Call: search
	 * Parameter options:
	 * (SearchRequest) parameters
	 * @return SearchResponse
	 * @throws Exception invalid function signature message
	 */
	public function search(SearchRequest $arg) {
		return $this->makeSoapCall("search", $arg);
	}


	/**
	 * Service Call: searchMore
	 * Parameter options:
	 * (SearchMoreRequest) parameters
	 * @return SearchMoreResponse
	 * @throws Exception invalid function signature message
	 */
	public function searchMore(SearchMoreRequest $arg) {
		return $this->makeSoapCall("searchMore", $arg);
	}


	/**
	 * Service Call: searchMoreWithId
	 * Parameter options:
	 * (SearchMoreWithIdRequest) parameters
	 * @return SearchMoreWithIdResponse
	 * @throws Exception invalid function signature message
	 */
	public function searchMoreWithId(SearchMoreWithIdRequest $arg) {
		return $this->makeSoapCall("searchMoreWithId", $arg);
	}


	/**
	 * Service Call: searchNext
	 * Parameter options:
	 * (SearchNextRequest) parameters
	 * @return SearchNextResponse
	 * @throws Exception invalid function signature message
	 */
	public function searchNext(SearchNextRequest $arg) {
		return $this->makeSoapCall("searchNext", $arg);
	}


	/**
	 * Service Call: update
	 * Parameter options:
	 * (UpdateRequest) parameters
	 * @return UpdateResponse
	 * @throws Exception invalid function signature message
	 */
	public function update(UpdateRequest $arg) {
		return $this->makeSoapCall("update", $arg);
	}


	/**
	 * Service Call: upsert
	 * Parameter options:
	 * (UpsertRequest) parameters
	 * @return UpsertResponse
	 * @throws Exception invalid function signature message
	 */
	public function upsert(UpsertRequest $arg) {
		return $this->makeSoapCall("upsert", $arg);
	}


	/**
	 * Service Call: addList
	 * Parameter options:
	 * (AddListRequest) parameters
	 * @return AddListResponse
	 * @throws Exception invalid function signature message
	 */
	public function addList(AddListRequest $arg) {
		return $this->makeSoapCall("addList", $arg);
	}


	/**
	 * Service Call: deleteList
	 * Parameter options:
	 * (DeleteListRequest) parameters
	 * @return DeleteListResponse
	 * @throws Exception invalid function signature message
	 */
	public function deleteList(DeleteListRequest $arg) {
		return $this->makeSoapCall("deleteList", $arg);
	}


	/**
	 * Service Call: updateList
	 * Parameter options:
	 * (UpdateListRequest) parameters
	 * @return UpdateListResponse
	 * @throws Exception invalid function signature message
	 */
	public function updateList(UpdateListRequest $arg) {
		return $this->makeSoapCall("updateList", $arg);
	}


	/**
	 * Service Call: upsertList
	 * Parameter options:
	 * (UpsertListRequest) parameters
	 * @return UpsertListResponse
	 * @throws Exception invalid function signature message
	 */
	public function upsertList(UpsertListRequest $arg) {
		return $this->makeSoapCall("upsertList", $arg);
	}


	/**
	 * Service Call: get
	 * Parameter options:
	 * (GetRequest) parameters
	 * @return GetResponse
	 * @throws Exception invalid function signature message
	 */
	public function get(GetRequest $arg) {
		return $this->makeSoapCall("get", $arg);
	}


	/**
	 * Service Call: getList
	 * Parameter options:
	 * (GetListRequest) parameters
	 * @return GetListResponse
	 * @throws Exception invalid function signature message
	 */
	public function getList(GetListRequest $arg) {
		return $this->makeSoapCall("getList", $arg);
	}


	/**
	 * Service Call: getAll
	 * Parameter options:
	 * (GetAllRequest) parameters
	 * @return GetAllResponse
	 * @throws Exception invalid function signature message
	 */
	public function getAll(GetAllRequest $arg) {
		return $this->makeSoapCall("getAll", $arg);
	}


	/**
	 * Service Call: getSavedSearch
	 * Parameter options:
	 * (GetSavedSearchRequest) parameters
	 * @return GetSavedSearchResponse
	 * @throws Exception invalid function signature message
	 */
	public function getSavedSearch(GetSavedSearchRequest $arg) {
		return $this->makeSoapCall("getSavedSearch", $arg);
	}


	/**
	 * Service Call: getCustomizationId
	 * Parameter options:
	 * (GetCustomizationIdRequest) parameters
	 * @return GetCustomizationIdResponse
	 * @throws Exception invalid function signature message
	 */
	public function getCustomizationId(GetCustomizationIdRequest $arg) {
		return $this->makeSoapCall("getCustomizationId", $arg);
	}


	/**
	 * Service Call: initialize
	 * Parameter options:
	 * (InitializeRequest) parameters
	 * @return InitializeResponse
	 * @throws Exception invalid function signature message
	 */
	public function initialize(InitializeRequest $arg) {
		return $this->makeSoapCall("initialize", $arg);
	}


	/**
	 * Service Call: initializeList
	 * Parameter options:
	 * (InitializeListRequest) parameters
	 * @return InitializeListResponse
	 * @throws Exception invalid function signature message
	 */
	public function initializeList(InitializeListRequest $arg) {
		return $this->makeSoapCall("initializeList", $arg);
	}


	/**
	 * Service Call: getSelectValue
	 * Parameter options:
	 * (getSelectValueRequest) parameters
	 * @return getSelectValueResponse
	 * @throws Exception invalid function signature message
	 */
	public function getSelectValue(getSelectValueRequest $arg) {
		return $this->makeSoapCall("getSelectValue", $arg);
	}


	/**
	 * Service Call: getItemAvailability
	 * Parameter options:
	 * (GetItemAvailabilityRequest) parameters
	 * @return GetItemAvailabilityResponse
	 * @throws Exception invalid function signature message
	 */
	public function getItemAvailability(GetItemAvailabilityRequest $arg) {
		return $this->makeSoapCall("getItemAvailability", $arg);
	}


	/**
	 * Service Call: getBudgetExchangeRate
	 * Parameter options:
	 * (GetBudgetExchangeRateRequest) parameters
	 * @return GetBudgetExchangeRateResponse
	 * @throws Exception invalid function signature message
	 */
	public function getBudgetExchangeRate(GetBudgetExchangeRateRequest $arg) {
		return $this->makeSoapCall("getBudgetExchangeRate", $arg);
	}


	/**
	 * Service Call: getConsolidatedExchangeRate
	 * Parameter options:
	 * (GetConsolidatedExchangeRateRequest) parameters
	 * @return GetConsolidatedExchangeRateResponse
	 * @throws Exception invalid function signature message
	 */
	public function getConsolidatedExchangeRate(GetConsolidatedExchangeRateRequest $arg) {
		return $this->makeSoapCall("getConsolidatedExchangeRate", $arg);
	}


	/**
	 * Service Call: getCurrencyRate
	 * Parameter options:
	 * (GetCurrencyRateRequest) parameters
	 * @return GetCurrencyRateResponse
	 * @throws Exception invalid function signature message
	 */
	public function getCurrencyRate(GetCurrencyRateRequest $arg) {
		return $this->makeSoapCall("getCurrencyRate", $arg);
	}


	/**
	 * Service Call: getDataCenterUrls
	 * Parameter options:
	 * (GetDataCenterUrlsRequest) parameters
	 * @return GetDataCenterUrlsResponse
	 * @throws Exception invalid function signature message
	 */
	public function getDataCenterUrls(GetDataCenterUrlsRequest $arg) {
		return $this->makeSoapCall("getDataCenterUrls", $arg);
	}


	/**
	 * Service Call: getPostingTransactionSummary
	 * Parameter options:
	 * (GetPostingTransactionSummaryRequest) parameters
	 * @return GetPostingTransactionSummaryResponse
	 * @throws Exception invalid function signature message
	 */
	public function getPostingTransactionSummary(GetPostingTransactionSummaryRequest $arg) {
		return $this->makeSoapCall("getPostingTransactionSummary", $arg);
	}


	/**
	 * Service Call: getServerTime
	 * Parameter options:
	 * (GetServerTimeRequest) parameters
	 * @return GetServerTimeResponse
	 * @throws Exception invalid function signature message
	 */
	public function getServerTime(GetServerTimeRequest $arg) {
		return $this->makeSoapCall("getServerTime", $arg);
	}


	/**
	 * Service Call: attach
	 * Parameter options:
	 * (AttachRequest) parameters
	 * @return AttachResponse
	 * @throws Exception invalid function signature message
	 */
	public function attach(AttachRequest $arg) {
		return $this->makeSoapCall("attach", $arg);
	}


	/**
	 * Service Call: detach
	 * Parameter options:
	 * (DetachRequest) parameters
	 * @return DetachResponse
	 * @throws Exception invalid function signature message
	 */
	public function detach(DetachRequest $arg) {
		return $this->makeSoapCall("detach", $arg);
	}


	/**
	 * Service Call: updateInviteeStatus
	 * Parameter options:
	 * (UpdateInviteeStatusRequest) parameters
	 * @return UpdateInviteeStatusResponse
	 * @throws Exception invalid function signature message
	 */
	public function updateInviteeStatus(UpdateInviteeStatusRequest $arg) {
		return $this->makeSoapCall("updateInviteeStatus", $arg);
	}


	/**
	 * Service Call: updateInviteeStatusList
	 * Parameter options:
	 * (UpdateInviteeStatusListRequest) parameters
	 * @return UpdateInviteeStatusListResponse
	 * @throws Exception invalid function signature message
	 */
	public function updateInviteeStatusList(UpdateInviteeStatusListRequest $arg) {
		return $this->makeSoapCall("updateInviteeStatusList", $arg);
	}


	/**
	 * Service Call: asyncAddList
	 * Parameter options:
	 * (AsyncAddListRequest) parameters
	 * @return AsyncStatusResponse
	 * @throws Exception invalid function signature message
	 */
	public function asyncAddList(AsyncAddListRequest $arg) {
		return $this->makeSoapCall("asyncAddList", $arg);
	}


	/**
	 * Service Call: asyncUpdateList
	 * Parameter options:
	 * (AsyncUpdateListRequest) parameters
	 * @return AsyncStatusResponse
	 * @throws Exception invalid function signature message
	 */
	public function asyncUpdateList(AsyncUpdateListRequest $arg) {
		return $this->makeSoapCall("asyncUpdateList", $arg);
	}


	/**
	 * Service Call: asyncUpsertList
	 * Parameter options:
	 * (AsyncUpsertListRequest) parameters
	 * @return AsyncStatusResponse
	 * @throws Exception invalid function signature message
	 */
	public function asyncUpsertList(AsyncUpsertListRequest $arg) {
		return $this->makeSoapCall("asyncUpsertList", $arg);
	}


	/**
	 * Service Call: asyncDeleteList
	 * Parameter options:
	 * (AsyncDeleteListRequest) parameters
	 * @return AsyncStatusResponse
	 * @throws Exception invalid function signature message
	 */
	public function asyncDeleteList(AsyncDeleteListRequest $arg) {
		return $this->makeSoapCall("asyncDeleteList", $arg);
	}


	/**
	 * Service Call: asyncGetList
	 * Parameter options:
	 * (AsyncGetListRequest) parameters
	 * @return AsyncStatusResponse
	 * @throws Exception invalid function signature message
	 */
	public function asyncGetList(AsyncGetListRequest $arg) {
		return $this->makeSoapCall("asyncGetList", $arg);
	}


	/**
	 * Service Call: asyncInitializeList
	 * Parameter options:
	 * (AsyncInitializeListRequest) parameters
	 * @return AsyncStatusResponse
	 * @throws Exception invalid function signature message
	 */
	public function asyncInitializeList(AsyncInitializeListRequest $arg) {
		return $this->makeSoapCall("asyncInitializeList", $arg);
	}


	/**
	 * Service Call: asyncSearch
	 * Parameter options:
	 * (AsyncSearchRequest) parameters
	 * @return AsyncStatusResponse
	 * @throws Exception invalid function signature message
	 */
	public function asyncSearch(AsyncSearchRequest $arg) {
		return $this->makeSoapCall("asyncSearch", $arg);
	}


	/**
	 * Service Call: getAsyncResult
	 * Parameter options:
	 * (GetAsyncResultRequest) parameters
	 * @return GetAsyncResultResponse
	 * @throws Exception invalid function signature message
	 */
	public function getAsyncResult(GetAsyncResultRequest $arg) {
		return $this->makeSoapCall("getAsyncResult", $arg);
	}


	/**
	 * Service Call: checkAsyncStatus
	 * Parameter options:
	 * (CheckAsyncStatusRequest) parameters
	 * @return AsyncStatusResponse
	 * @throws Exception invalid function signature message
	 */
	public function checkAsyncStatus(CheckAsyncStatusRequest $arg) {
		return $this->makeSoapCall("checkAsyncStatus", $arg);
	}


	/**
	 * Service Call: getDeleted
	 * Parameter options:
	 * (GetDeletedRequest) parameters
	 * @return GetDeletedResponse
	 * @throws Exception invalid function signature message
	 */
	public function getDeleted(GetDeletedRequest $arg) {
		return $this->makeSoapCall("getDeleted", $arg);
	}


}


