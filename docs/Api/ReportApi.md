# VoximplantKit\ReportApi

All URIs are relative to *https://kitapi-eu.voximplant.com/api/v3*

Method | HTTP request | Description
------------- | ------------- | -------------
[**downloadReport**](ReportApi.md#downloadReport) | **POST** /report/downloadReport | 
[**getReportStatus**](ReportApi.md#getReportStatus) | **POST** /report/getReportStatus | 


# **downloadReport**
> string downloadReport($report_id)



Get the download link to the report file (.xsls).

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

$report_id = 56; // int | 

try {
    $result = $kitApi->ReportApi->downloadReport($report_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling $kitApi->ReportApi->downloadReport: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **report_id** | **int**|  |

### Return type

**string**

### Authorization

[access_token](../../README.md#access_token), [domain](../../README.md#domain)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getReportStatus**
> \VoximplantKit\Model\GetHistoryReportStatusResponseType getReportStatus($report_id)



Get info about report processing. If the response parameter \"processed\" is True, the report can be downloaded via the <b>downloadReport</b> method.

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

$report_id = 56; // int | 

try {
    $result = $kitApi->ReportApi->getReportStatus($report_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling $kitApi->ReportApi->getReportStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **report_id** | **int**|  |

### Return type

[**\VoximplantKit\Model\GetHistoryReportStatusResponseType**](../Model/GetHistoryReportStatusResponseType.md)

### Authorization

[access_token](../../README.md#access_token), [domain](../../README.md#domain)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

