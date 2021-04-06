# VoximplantKit\HistoryApi

All URIs are relative to *https://kitapi-eu.voximplant.com/api/v3*

Method | HTTP request | Description
------------- | ------------- | -------------
[**exportCallsHistoryReport**](HistoryApi.md#exportCallsHistoryReport) | **POST** /history/exportCallsHistoryReport | 
[**searchCalls**](HistoryApi.md#searchCalls) | **GET** /history/searchCalls | 


# **exportCallsHistoryReport**
> \VoximplantKit\Model\ExportHistoryReportResponseType exportCallsHistoryReport($datetime_start, $datetime_end, $call_direction, $scenario_ids, $campaign_ids, $phone)



Start processing the call history report. To check if the processing is over, use the <b>getReportStatus</b> method; use the <b>downloadReport</b> method to get the download link.

### Example
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

$datetime_start = "datetime_start_example"; // string | 
$datetime_end = "datetime_end_example"; // string | 
$call_direction = "call_direction_example"; // string | 
$scenario_ids = "scenario_ids_example"; // string | 
$campaign_ids = "campaign_ids_example"; // string | 
$phone = "phone_example"; // string | 

try {
    $result = $kitApi->HistoryApi->exportCallsHistoryReport($datetime_start, $datetime_end, $call_direction, $scenario_ids, $campaign_ids, $phone);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling $kitApi->HistoryApi->exportCallsHistoryReport: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **datetime_start** | **string**|  | [optional]
 **datetime_end** | **string**|  | [optional]
 **call_direction** | **string**|  | [optional]
 **scenario_ids** | **string**|  | [optional]
 **campaign_ids** | **string**|  | [optional]
 **phone** | **string**|  | [optional]

### Return type

[**\VoximplantKit\Model\ExportHistoryReportResponseType**](../Model/ExportHistoryReportResponseType.md)

### Authorization

[access_token](../../README.md#access_token), [domain](../../README.md#domain)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchCalls**
> \VoximplantKit\Model\CallsHistoryResponseType searchCalls($id, $datetime_start, $datetime_end, $call_direction, $scenario_ids, $campaign_ids, $phone)



Search for the calls. The method without specifying the parameters returns the last 20 calls.

### Example
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

$id = 56; // int | Call ID.
$datetime_start = "datetime_start_example"; // string | Start date. The format is 24-h ‘YYYY-MM-DD HH:mm:ss’ in UTC
$datetime_end = "datetime_end_example"; // string | End date. The format is 24-h ‘YYYY-MM-DD HH:mm:ss’ in UTC
$call_direction = "call_direction_example"; // string | Call direction (<b>example:</b> ‘call_direction=outgoing’ or ‘call_direction=incoming’ or ‘call_direction=all’)
$scenario_ids = "scenario_ids_example"; // string | Json integer array with scenarios IDs. The ID can be retrieved via the **searchScenarios** method. (<b>example:</b> scenario_ids=[1,2,3,...,9])
$campaign_ids = "campaign_ids_example"; // string | Json integer array with campaign IDs. The ID can be retrieved via the **searchCampaigns** method. (<b>example:</b> campaign_ids=[1,2,3,...,9])
$phone = 56; // int | Phone number to filter. The response will include calls to the specified number only. The minimum number of digits is 3. (<b>example:</b> phone=15417543010)

try {
    $result = $kitApi->HistoryApi->searchCalls($id, $datetime_start, $datetime_end, $call_direction, $scenario_ids, $campaign_ids, $phone);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling $kitApi->HistoryApi->searchCalls: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Call ID. | [optional]
 **datetime_start** | **string**| Start date. The format is 24-h ‘YYYY-MM-DD HH:mm:ss’ in UTC | [optional]
 **datetime_end** | **string**| End date. The format is 24-h ‘YYYY-MM-DD HH:mm:ss’ in UTC | [optional]
 **call_direction** | **string**| Call direction (&lt;b&gt;example:&lt;/b&gt; ‘call_direction&#x3D;outgoing’ or ‘call_direction&#x3D;incoming’ or ‘call_direction&#x3D;all’) | [optional]
 **scenario_ids** | **string**| Json integer array with scenarios IDs. The ID can be retrieved via the **searchScenarios** method. (&lt;b&gt;example:&lt;/b&gt; scenario_ids&#x3D;[1,2,3,...,9]) | [optional]
 **campaign_ids** | **string**| Json integer array with campaign IDs. The ID can be retrieved via the **searchCampaigns** method. (&lt;b&gt;example:&lt;/b&gt; campaign_ids&#x3D;[1,2,3,...,9]) | [optional]
 **phone** | **int**| Phone number to filter. The response will include calls to the specified number only. The minimum number of digits is 3. (&lt;b&gt;example:&lt;/b&gt; phone&#x3D;15417543010) | [optional]

### Return type

[**\VoximplantKit\Model\CallsHistoryResponseType**](../Model/CallsHistoryResponseType.md)

### Authorization

[access_token](../../README.md#access_token), [domain](../../README.md#domain)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

