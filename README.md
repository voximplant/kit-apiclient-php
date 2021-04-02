# VoximplantKit
<h1>Basic description</h1> <p>HTTP API is available via the <u>https://kitapi-{{region}}.voximplant.com/api/v3/<b>{method}</b></u> endpoint. To use the methods marked with the LOCK symbol, you need to create an api token on api tokens page. Pass this token as access token to each HTTP API call.</p> <h1>Authentication</h1> <p>This API uses Custom Query Parameter for its authentication.</p> <p>The parameters that are needed to be sent for this type of authentication are as follows:</p> <ul>   <li><strong>access_token</strong></li>   <li><strong>domain</strong></li> </ul>

## Requirements

PHP 5.5 and later

## Installation & Usage
### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```
{
  "repositories": [
    {
      "type": "git",
      "url": "https://github.com/voximplant/kit-apiclient-php.git"
    }
  ],
  "require": {
    "voximplant/kit-apiclient-php": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/VoximplantKit/vendor/autoload.php');
```

## Tests

To run the unit tests:

```
composer install
./vendor/bin/phpunit
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = VoximplantKit\Configuration::getDefaultConfiguration();
$config->setHost('https://kitapi-{{region}}.voximplant.com/api/v3');

// Configure API key authorization: access_token
$config->setApiKey('access_token', 'your_access_token');
// Configure API key authorization: domain
$config->setApiKey('domain', 'your_domain');

$kitApi = new VoximplantKit\VoximplantKitClient($config);


try {
    $result = $kitApi->AccountApi->getAccountInfo();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling $kitApi->AccountApi->getAccountInfo: ', $e->getMessage(), PHP_EOL;
}

?>
```

## Documentation for API Endpoints

All URIs are relative to *https://kitapi-{{region}}.voximplant.com/api/v3*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AccountApi* | [**getAccountInfo**](docs/Api/AccountApi.md#getaccountinfo) | **GET** /account/getAccountInfo | 
*AccountApi* | [**searchSettings**](docs/Api/AccountApi.md#searchsettings) | **GET** /setting/searchSettings | 
*BotServiceApi* | [**login**](docs/Api/BotServiceApi.md#login) | **POST** /botService/login | 
*BotServiceApi* | [**refreshToken**](docs/Api/BotServiceApi.md#refreshtoken) | **POST** /botService/refreshToken | 
*BotServiceApi* | [**sendMessage**](docs/Api/BotServiceApi.md#sendmessage) | **POST** /{channel_uuid} | 
*CallsApi* | [**downloadHistoryReport**](docs/Api/CallsApi.md#downloadhistoryreport) | **POST** /calls/downloadHistoryReport | 
*CallsApi* | [**exportHistoryReport**](docs/Api/CallsApi.md#exporthistoryreport) | **POST** /calls/exportHistoryReport | 
*CallsApi* | [**getHistoryReportStatus**](docs/Api/CallsApi.md#gethistoryreportstatus) | **POST** /calls/getHistoryReportStatus | 
*CallsApi* | [**searchCalls**](docs/Api/CallsApi.md#searchcalls) | **GET** /calls/searchCalls | 
*CampaignsApi* | [**appendToCampaign**](docs/Api/CampaignsApi.md#appendtocampaign) | **POST** /outbound/appendToCampaign | 
*CampaignsApi* | [**deleteCampaign**](docs/Api/CampaignsApi.md#deletecampaign) | **POST** /outbound/deleteCampaign | 
*CampaignsApi* | [**downloadStatReport**](docs/Api/CampaignsApi.md#downloadstatreport) | **GET** /attempt/downloadStatReport | 
*CampaignsApi* | [**exportStatReport**](docs/Api/CampaignsApi.md#exportstatreport) | **POST** /attempt/exportStatReport | 
*CampaignsApi* | [**getStatReportStatus**](docs/Api/CampaignsApi.md#getstatreportstatus) | **POST** /attempt/getStatReportStatus | 
*CampaignsApi* | [**initCampaign**](docs/Api/CampaignsApi.md#initcampaign) | **POST** /outbound/initCampaign | 
*CampaignsApi* | [**pauseCampaign**](docs/Api/CampaignsApi.md#pausecampaign) | **POST** /outbound/pauseCampaign | 
*CampaignsApi* | [**resumeCampaign**](docs/Api/CampaignsApi.md#resumecampaign) | **POST** /outbound/resumeCampaign | 
*CampaignsApi* | [**searchAttempts**](docs/Api/CampaignsApi.md#searchattempts) | **GET** /attempt/searchAttempts | 
*CampaignsApi* | [**searchCampaigns**](docs/Api/CampaignsApi.md#searchcampaigns) | **GET** /outbound/searchCampaigns | 
*CampaignsApi* | [**stat**](docs/Api/CampaignsApi.md#stat) | **POST** /outbound/stat | 
*HelperApi* | [**getListTimezones**](docs/Api/HelperApi.md#getlisttimezones) | **GET** /helper/getListTimezones | 
*HelperApi* | [**getTimezonesByNumber**](docs/Api/HelperApi.md#gettimezonesbynumber) | **POST** /helper/getTimezonesByNumber | 
*HistoryApi* | [**exportCallsHistoryReport**](docs/Api/HistoryApi.md#exportcallshistoryreport) | **POST** /history/exportCallsHistoryReport | 
*HistoryApi* | [**searchCalls**](docs/Api/HistoryApi.md#searchcalls) | **GET** /history/searchCalls | 
*NumbersApi* | [**searchCallerIDs**](docs/Api/NumbersApi.md#searchcallerids) | **GET** /callerid/searchCallerIDs | 
*NumbersApi* | [**searchNumbers**](docs/Api/NumbersApi.md#searchnumbers) | **GET** /phone/searchNumbers | 
*ReportApi* | [**downloadReport**](docs/Api/ReportApi.md#downloadreport) | **POST** /report/downloadReport | 
*ReportApi* | [**getReportStatus**](docs/Api/ReportApi.md#getreportstatus) | **POST** /report/getReportStatus | 
*ScenariosApi* | [**getScenarioVariables**](docs/Api/ScenariosApi.md#getscenariovariables) | **POST** /scenario/getScenarioVariables | 
*ScenariosApi* | [**runScenario**](docs/Api/ScenariosApi.md#runscenario) | **POST** /scenario/runScenario | 
*ScenariosApi* | [**searchScenarios**](docs/Api/ScenariosApi.md#searchscenarios) | **GET** /scenario/searchScenarios | 


## Documentation For Models

 - [AccountDomainPartnerType](docs/Model/AccountDomainPartnerType.md)
 - [AccountDomainTariffType](docs/Model/AccountDomainTariffType.md)
 - [AccountDomainType](docs/Model/AccountDomainType.md)
 - [AccountProfileItemType](docs/Model/AccountProfileItemType.md)
 - [AccountProfileType](docs/Model/AccountProfileType.md)
 - [AccountType](docs/Model/AccountType.md)
 - [AccountUserType](docs/Model/AccountUserType.md)
 - [AnyOfMessagingEventMessageTypePayloadItems](docs/Model/AnyOfMessagingEventMessageTypePayloadItems.md)
 - [AppendFailType](docs/Model/AppendFailType.md)
 - [AppendToCampaignResponseType](docs/Model/AppendToCampaignResponseType.md)
 - [AppendToCampaignResponseTypeResult](docs/Model/AppendToCampaignResponseTypeResult.md)
 - [AttemptType](docs/Model/AttemptType.md)
 - [Body](docs/Model/Body.md)
 - [Body1](docs/Model/Body1.md)
 - [Body2](docs/Model/Body2.md)
 - [Body3](docs/Model/Body3.md)
 - [Body4](docs/Model/Body4.md)
 - [Body5](docs/Model/Body5.md)
 - [Body6](docs/Model/Body6.md)
 - [CallerIDType](docs/Model/CallerIDType.md)
 - [CallsHistoryResponseType](docs/Model/CallsHistoryResponseType.md)
 - [CallsHistoryType](docs/Model/CallsHistoryType.md)
 - [CallsType](docs/Model/CallsType.md)
 - [CampaignStatResponseType](docs/Model/CampaignStatResponseType.md)
 - [CampaignStatType](docs/Model/CampaignStatType.md)
 - [CampaignType](docs/Model/CampaignType.md)
 - [DeleteCampaignResponseType](docs/Model/DeleteCampaignResponseType.md)
 - [ErrorResultType](docs/Model/ErrorResultType.md)
 - [ErrorType](docs/Model/ErrorType.md)
 - [ExportHistoryReportResponseType](docs/Model/ExportHistoryReportResponseType.md)
 - [ExportStatReportResponseType](docs/Model/ExportStatReportResponseType.md)
 - [ExportStatReportResponseTypeResult](docs/Model/ExportStatReportResponseTypeResult.md)
 - [GetAccountInfoResponseType](docs/Model/GetAccountInfoResponseType.md)
 - [GetHistoryReportStatusResponseType](docs/Model/GetHistoryReportStatusResponseType.md)
 - [GetListTimezonesResponseType](docs/Model/GetListTimezonesResponseType.md)
 - [GetScenarioVariablesRequestType](docs/Model/GetScenarioVariablesRequestType.md)
 - [GetScenarioVariablesResponseType](docs/Model/GetScenarioVariablesResponseType.md)
 - [GetStatReportStatusResponseType](docs/Model/GetStatReportStatusResponseType.md)
 - [GetStatReportStatusResponseTypeResult](docs/Model/GetStatReportStatusResponseTypeResult.md)
 - [GetTimezonesByNumberRequestType](docs/Model/GetTimezonesByNumberRequestType.md)
 - [GetTimezonesByNumberResponseType](docs/Model/GetTimezonesByNumberResponseType.md)
 - [InitCampaignRequestType](docs/Model/InitCampaignRequestType.md)
 - [InitCampaignResponseType](docs/Model/InitCampaignResponseType.md)
 - [InlineResponse200](docs/Model/InlineResponse200.md)
 - [MessagingEventMessagePayloadContact](docs/Model/MessagingEventMessagePayloadContact.md)
 - [MessagingEventMessagePayloadLocation](docs/Model/MessagingEventMessagePayloadLocation.md)
 - [MessagingEventMessagePayloadMedia](docs/Model/MessagingEventMessagePayloadMedia.md)
 - [MessagingEventMessageSenderDataType](docs/Model/MessagingEventMessageSenderDataType.md)
 - [MessagingEventMessageType](docs/Model/MessagingEventMessageType.md)
 - [MessagingIncomingEventClientDataDeviceType](docs/Model/MessagingIncomingEventClientDataDeviceType.md)
 - [MessagingIncomingEventClientDataLocationType](docs/Model/MessagingIncomingEventClientDataLocationType.md)
 - [MessagingIncomingEventClientDataPageType](docs/Model/MessagingIncomingEventClientDataPageType.md)
 - [MessagingIncomingEventClientDataUtmType](docs/Model/MessagingIncomingEventClientDataUtmType.md)
 - [MessagingIncomingEventType](docs/Model/MessagingIncomingEventType.md)
 - [MessagingIncomingEventTypeClientData](docs/Model/MessagingIncomingEventTypeClientData.md)
 - [MessagingIncomingEventTypeEventData](docs/Model/MessagingIncomingEventTypeEventData.md)
 - [MessagingLoginResponseType](docs/Model/MessagingLoginResponseType.md)
 - [MessagingLoginResponseTypeResult](docs/Model/MessagingLoginResponseTypeResult.md)
 - [MessagingOutgoingChatCloseEventSenderDataType](docs/Model/MessagingOutgoingChatCloseEventSenderDataType.md)
 - [MessagingOutgoingChatCloseEventType](docs/Model/MessagingOutgoingChatCloseEventType.md)
 - [MessagingOutgoingChatCloseEventTypeEventData](docs/Model/MessagingOutgoingChatCloseEventTypeEventData.md)
 - [MessagingOutgoingNewMessageEventType](docs/Model/MessagingOutgoingNewMessageEventType.md)
 - [MessagingOutgoingNewMessageEventTypeClientData](docs/Model/MessagingOutgoingNewMessageEventTypeClientData.md)
 - [MessagingOutgoingNewMessageEventTypeEventData](docs/Model/MessagingOutgoingNewMessageEventTypeEventData.md)
 - [Meta](docs/Model/Meta.md)
 - [PauseCampaignResponseType](docs/Model/PauseCampaignResponseType.md)
 - [PhoneNumberCampaignType](docs/Model/PhoneNumberCampaignType.md)
 - [PhoneNumberScenarioType](docs/Model/PhoneNumberScenarioType.md)
 - [PhoneNumberType](docs/Model/PhoneNumberType.md)
 - [ResumeCampaignResponseType](docs/Model/ResumeCampaignResponseType.md)
 - [ScenarioCampaignType](docs/Model/ScenarioCampaignType.md)
 - [ScenarioPhoneNumberType](docs/Model/ScenarioPhoneNumberType.md)
 - [ScenarioType](docs/Model/ScenarioType.md)
 - [SearchAttemptsResponseType](docs/Model/SearchAttemptsResponseType.md)
 - [SearchCallerIDsResponseType](docs/Model/SearchCallerIDsResponseType.md)
 - [SearchCallsResponseType](docs/Model/SearchCallsResponseType.md)
 - [SearchCampaignsResponseType](docs/Model/SearchCampaignsResponseType.md)
 - [SearchNumbersResponseType](docs/Model/SearchNumbersResponseType.md)
 - [SearchScenariosResponseType](docs/Model/SearchScenariosResponseType.md)
 - [SearchSettingsResponseType](docs/Model/SearchSettingsResponseType.md)
 - [SettingType](docs/Model/SettingType.md)
 - [SettingsType](docs/Model/SettingsType.md)
 - [StatRequestType](docs/Model/StatRequestType.md)
 - [TestNumberType](docs/Model/TestNumberType.md)
 - [TimezoneByPhoneType](docs/Model/TimezoneByPhoneType.md)
 - [TimezoneType](docs/Model/TimezoneType.md)
 - [VariablesType](docs/Model/VariablesType.md)


## Documentation For Authorization

 Authentication schemes defined for the API:
## access_token
- **Type**: API key
- **API key parameter name**: access_token
- **Location**: URL query string

## domain
- **Type**: API key
- **API key parameter name**: domain
- **Location**: URL query string

## jwt_token
- **Location**: HTTP header
- **Header key parameter name**: Authorization


## Author




