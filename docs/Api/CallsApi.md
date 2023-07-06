# VoximplantKit\CallsApi

All URIs are relative to *https://kitapi-eu.voximplant.com/api/v3*

Method | HTTP request | Description
------------- | ------------- | -------------
[**downloadHistoryReport**](CallsApi.md#downloadHistoryReport) | **POST** /calls/downloadHistoryReport | 
[**exportHistoryReport**](CallsApi.md#exportHistoryReport) | **POST** /calls/exportHistoryReport | 
[**getHistoryReportStatus**](CallsApi.md#getHistoryReportStatus) | **POST** /calls/getHistoryReportStatus | 
[**searchCalls**](CallsApi.md#searchCalls) | **GET** /calls/searchCalls | 


# **downloadHistoryReport**
> string downloadHistoryReport($report_id)



Download report file (.xlsx or .csv).

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

$report_id = 56; // int | Report ID. The ID can be retrieved via the **exportHistoryReport** method

try {
    $result = $kitApi->CallsApi->downloadHistoryReport($report_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling $kitApi->CallsApi->downloadHistoryReport: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **report_id** | **int**| Report ID. The ID can be retrieved via the **exportHistoryReport** method |

### Return type

**string**

### Authorization

[access_token](../../README.md#access_token), [domain](../../README.md#domain)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **exportHistoryReport**
> \VoximplantKit\Model\ExportHistoryReportResponseType exportHistoryReport($call_direction, $scenario_id, $from, $to)



Start processing the call history. To check if the processing is over, use the <b>getHistoryReportStatus</b> method; use the <b>downloadHistoryReport</b> method to get the download link.

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

$call_direction = "call_direction_example"; // string | Call direction (<b>example:</b> ‘call_direction=outgoing’ or ‘call_direction=incoming’ or ‘call_direction=all’)
$scenario_id = 56; // int | Scenario ID. The ID can be retrieved via the **searchScenarios** method.
$from = "from_example"; // string | Start date. The format is 24-h ‘YYYY-MM-DD HH:mm:ss’
$to = "to_example"; // string | End date. The format is 24-h ‘YYYY-MM-DD HH:mm:ss’

try {
    $result = $kitApi->CallsApi->exportHistoryReport($call_direction, $scenario_id, $from, $to);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling $kitApi->CallsApi->exportHistoryReport: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **call_direction** | **string**| Call direction (&lt;b&gt;example:&lt;/b&gt; ‘call_direction&#x3D;outgoing’ or ‘call_direction&#x3D;incoming’ or ‘call_direction&#x3D;all’) | [optional]
 **scenario_id** | **int**| Scenario ID. The ID can be retrieved via the **searchScenarios** method. | [optional]
 **from** | **string**| Start date. The format is 24-h ‘YYYY-MM-DD HH:mm:ss’ | [optional]
 **to** | **string**| End date. The format is 24-h ‘YYYY-MM-DD HH:mm:ss’ | [optional]

### Return type

[**\VoximplantKit\Model\ExportHistoryReportResponseType**](../Model/ExportHistoryReportResponseType.md)

### Authorization

[access_token](../../README.md#access_token), [domain](../../README.md#domain)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getHistoryReportStatus**
> \VoximplantKit\Model\GetHistoryReportStatusResponseType getHistoryReportStatus($report_id)



Get info about call history processing. If the response parameter \"processed\" is True, the call history can be downloaded via the <b>downloadHistoryReport</b> method.

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

$report_id = 56; // int | Report ID. The ID can be retrieved via the **exportHistoryReport** method

try {
    $result = $kitApi->CallsApi->getHistoryReportStatus($report_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling $kitApi->CallsApi->getHistoryReportStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **report_id** | **int**| Report ID. The ID can be retrieved via the **exportHistoryReport** method |

### Return type

[**\VoximplantKit\Model\GetHistoryReportStatusResponseType**](../Model/GetHistoryReportStatusResponseType.md)

### Authorization

[access_token](../../README.md#access_token), [domain](../../README.md#domain)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchCalls**
> \VoximplantKit\Model\SearchCallsResponseType searchCalls($id, $call_direction, $scenario_id, $phone, $datetime_start, $datetime_end)



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
$call_direction = "call_direction_example"; // string | Call direction (<b>example:</b> ‘call_direction=outgoing’ or ‘call_direction=incoming’ or ‘call_direction=all’)
$scenario_id = 56; // int | Scenario ID. The ID can be retrieved via the **searchScenarios** method
$phone = 56; // int | Phone number to filter. The response will include calls to the specified number only. The minimum number of digits is 3. (<b>example:</b> phone=15417543010)
$datetime_start = "datetime_start_example"; // string | Start date. The format is 24-h ‘YYYY-MM-DD HH:mm:ss’
$datetime_end = "datetime_end_example"; // string | End date. The format is 24-h ‘YYYY-MM-DD HH:mm:ss’

try {
    $result = $kitApi->CallsApi->searchCalls($id, $call_direction, $scenario_id, $phone, $datetime_start, $datetime_end);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling $kitApi->CallsApi->searchCalls: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Call ID. | [optional]
 **call_direction** | **string**| Call direction (&lt;b&gt;example:&lt;/b&gt; ‘call_direction&#x3D;outgoing’ or ‘call_direction&#x3D;incoming’ or ‘call_direction&#x3D;all’) | [optional]
 **scenario_id** | **int**| Scenario ID. The ID can be retrieved via the **searchScenarios** method | [optional]
 **phone** | **int**| Phone number to filter. The response will include calls to the specified number only. The minimum number of digits is 3. (&lt;b&gt;example:&lt;/b&gt; phone&#x3D;15417543010) | [optional]
 **datetime_start** | **string**| Start date. The format is 24-h ‘YYYY-MM-DD HH:mm:ss’ | [optional]
 **datetime_end** | **string**| End date. The format is 24-h ‘YYYY-MM-DD HH:mm:ss’ | [optional]

### Return type

[**\VoximplantKit\Model\SearchCallsResponseType**](../Model/SearchCallsResponseType.md)

### Authorization

[access_token](../../README.md#access_token), [domain](../../README.md#domain)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

