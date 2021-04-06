# VoximplantKit\CampaignsApi

All URIs are relative to *https://kitapi-eu.voximplant.com/api/v3*

Method | HTTP request | Description
------------- | ------------- | -------------
[**appendToCampaign**](CampaignsApi.md#appendToCampaign) | **POST** /outbound/appendToCampaign | 
[**deleteCampaign**](CampaignsApi.md#deleteCampaign) | **POST** /outbound/deleteCampaign | 
[**downloadStatReport**](CampaignsApi.md#downloadStatReport) | **GET** /attempt/downloadStatReport | 
[**exportStatReport**](CampaignsApi.md#exportStatReport) | **POST** /attempt/exportStatReport | 
[**getStatReportStatus**](CampaignsApi.md#getStatReportStatus) | **POST** /attempt/getStatReportStatus | 
[**initCampaign**](CampaignsApi.md#initCampaign) | **POST** /outbound/initCampaign | 
[**pauseCampaign**](CampaignsApi.md#pauseCampaign) | **POST** /outbound/pauseCampaign | 
[**resumeCampaign**](CampaignsApi.md#resumeCampaign) | **POST** /outbound/resumeCampaign | 
[**searchAttempts**](CampaignsApi.md#searchAttempts) | **GET** /attempt/searchAttempts | 
[**searchCampaigns**](CampaignsApi.md#searchCampaigns) | **GET** /outbound/searchCampaigns | 
[**stat**](CampaignsApi.md#stat) | **POST** /outbound/stat | 


# **appendToCampaign**
> \VoximplantKit\Model\AppendToCampaignResponseType appendToCampaign($campaign_id, $rows)



Append contacts to the existing campaign. It is possible to add a maximum of 100 entries in one request.

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

$campaign_id = 56; // int | 
$rows = "rows_example"; // string | 

try {
    $result = $kitApi->CampaignsApi->appendToCampaign($campaign_id, $rows);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling $kitApi->CampaignsApi->appendToCampaign: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaign_id** | **int**|  | [optional]
 **rows** | **string**|  | [optional]

### Return type

[**\VoximplantKit\Model\AppendToCampaignResponseType**](../Model/AppendToCampaignResponseType.md)

### Authorization

[access_token](../../README.md#access_token), [domain](../../README.md#domain)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteCampaign**
> \VoximplantKit\Model\DeleteCampaignResponseType deleteCampaign($id)



Delete the specified campaign. The method only works for the campaigns with the ‘draft’ status.

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

$id = 56; // int | Campaign ID. The ID can be retrieved via the **searchCampaigns** method

try {
    $result = $kitApi->CampaignsApi->deleteCampaign($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling $kitApi->CampaignsApi->deleteCampaign: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Campaign ID. The ID can be retrieved via the **searchCampaigns** method |

### Return type

[**\VoximplantKit\Model\DeleteCampaignResponseType**](../Model/DeleteCampaignResponseType.md)

### Authorization

[access_token](../../README.md#access_token), [domain](../../README.md#domain)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **downloadStatReport**
> string downloadStatReport($report_id)



Get the download link to the stats file (.XSLS).

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

$report_id = 56; // int | Report ID. The ID can be retrieved via the **exportStatReport** method

try {
    $result = $kitApi->CampaignsApi->downloadStatReport($report_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling $kitApi->CampaignsApi->downloadStatReport: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **report_id** | **int**| Report ID. The ID can be retrieved via the **exportStatReport** method |

### Return type

**string**

### Authorization

[access_token](../../README.md#access_token), [domain](../../README.md#domain)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **exportStatReport**
> \VoximplantKit\Model\ExportStatReportResponseType exportStatReport($campaign_id, $locale, $format, $from, $to)



Start processing the stats of the specified campaign. To check if the processing is over, use the **getStatReportStatus**  method; use the **downloadStatReport** method to get the download link.

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

$campaign_id = 56; // int | Campaign ID. The ID can be retrieved via the **searchCampaigns** method
$locale = "locale_example"; // string | Document language (<b>example:</b> 'en' or 'ru')
$format = "format_example"; // string | Report format. The following values are possible: csv, xlsx
$from = "from_example"; // string | Start date (<b>example:</b> 'YYYY-MM-DD HH:mm:ss')
$to = "to_example"; // string | End date (<b>example:</b> 'YYYY-MM-DD HH:mm:ss')

try {
    $result = $kitApi->CampaignsApi->exportStatReport($campaign_id, $locale, $format, $from, $to);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling $kitApi->CampaignsApi->exportStatReport: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaign_id** | **int**| Campaign ID. The ID can be retrieved via the **searchCampaigns** method |
 **locale** | **string**| Document language (&lt;b&gt;example:&lt;/b&gt; &#39;en&#39; or &#39;ru&#39;) |
 **format** | **string**| Report format. The following values are possible: csv, xlsx | [optional]
 **from** | **string**| Start date (&lt;b&gt;example:&lt;/b&gt; &#39;YYYY-MM-DD HH:mm:ss&#39;) | [optional]
 **to** | **string**| End date (&lt;b&gt;example:&lt;/b&gt; &#39;YYYY-MM-DD HH:mm:ss&#39;) | [optional]

### Return type

[**\VoximplantKit\Model\ExportStatReportResponseType**](../Model/ExportStatReportResponseType.md)

### Authorization

[access_token](../../README.md#access_token), [domain](../../README.md#domain)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getStatReportStatus**
> \VoximplantKit\Model\GetStatReportStatusResponseType getStatReportStatus($report_id)



Get info about stats processing. If the response parameter \"processed\" is True, the stats can be downloaded via the downloadStatReport method.

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

$report_id = 56; // int | Report ID. The ID can be retrieved via the **exportStatReport** method

try {
    $result = $kitApi->CampaignsApi->getStatReportStatus($report_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling $kitApi->CampaignsApi->getStatReportStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **report_id** | **int**| Report ID. The ID can be retrieved via the **exportStatReport** method |

### Return type

[**\VoximplantKit\Model\GetStatReportStatusResponseType**](../Model/GetStatReportStatusResponseType.md)

### Authorization

[access_token](../../README.md#access_token), [domain](../../README.md#domain)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **initCampaign**
> \VoximplantKit\Model\InitCampaignResponseType initCampaign($title, $max_attempts, $interval, $max_lines, $scenario_id, $phone_number_id, $caller_id, $time_start, $time_end, $date_start, $date_end, $permanent, $description)



Create a new campaign for automatic calls and start campaign. Use the **appendToCampaign** method to added contacts.

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

$title = "title_example"; // string | 
$max_attempts = 56; // int | 
$interval = 56; // int | 
$max_lines = 56; // int | 
$scenario_id = 56; // int | 
$phone_number_id = 56; // int | 
$caller_id = 56; // int | 
$time_start = "time_start_example"; // string | 
$time_end = "time_end_example"; // string | 
$date_start = "date_start_example"; // string | 
$date_end = "date_end_example"; // string | 
$permanent = true; // bool | 
$description = "description_example"; // string | 

try {
    $result = $kitApi->CampaignsApi->initCampaign($title, $max_attempts, $interval, $max_lines, $scenario_id, $phone_number_id, $caller_id, $time_start, $time_end, $date_start, $date_end, $permanent, $description);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling $kitApi->CampaignsApi->initCampaign: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **title** | **string**|  |
 **max_attempts** | **int**|  |
 **interval** | **int**|  |
 **max_lines** | **int**|  |
 **scenario_id** | **int**|  |
 **phone_number_id** | **int**|  |
 **caller_id** | **int**|  |
 **time_start** | **string**|  |
 **time_end** | **string**|  |
 **date_start** | **string**|  |
 **date_end** | **string**|  |
 **permanent** | **bool**|  |
 **description** | **string**|  |

### Return type

[**\VoximplantKit\Model\InitCampaignResponseType**](../Model/InitCampaignResponseType.md)

### Authorization

[access_token](../../README.md#access_token), [domain](../../README.md#domain)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **pauseCampaign**
> \VoximplantKit\Model\PauseCampaignResponseType pauseCampaign($id)



Pause the specified campaign. You can make the campaign active again via the **resumeCampaign** method.

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

$id = 56; // int | Campaign ID. The ID can be retrieved via the **searchCampaigns** method

try {
    $result = $kitApi->CampaignsApi->pauseCampaign($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling $kitApi->CampaignsApi->pauseCampaign: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Campaign ID. The ID can be retrieved via the **searchCampaigns** method | [optional]

### Return type

[**\VoximplantKit\Model\PauseCampaignResponseType**](../Model/PauseCampaignResponseType.md)

### Authorization

[access_token](../../README.md#access_token), [domain](../../README.md#domain)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **resumeCampaign**
> \VoximplantKit\Model\ResumeCampaignResponseType resumeCampaign($id)



Resume the specified campaign which was paused via the **pauseCampaign** method.

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

$id = 56; // int | Campaign ID. The ID can be retrieved via the **searchCampaigns** method

try {
    $result = $kitApi->CampaignsApi->resumeCampaign($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling $kitApi->CampaignsApi->resumeCampaign: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Campaign ID. The ID can be retrieved via the **searchCampaigns** method | [optional]

### Return type

[**\VoximplantKit\Model\ResumeCampaignResponseType**](../Model/ResumeCampaignResponseType.md)

### Authorization

[access_token](../../README.md#access_token), [domain](../../README.md#domain)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchAttempts**
> \VoximplantKit\Model\SearchAttemptsResponseType searchAttempts($id, $campaign_id, $datetime_start, $datetime_end, $fields, $sort, $page, $per_page)



Search for the call attempts. The method without specifying the parameters returns the last 20 call attempts performed.

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

$id = 56; // int | Attempt ID. The ID can be retrieved via the **searchAttempts** method
$campaign_id = 56; // int | Campaign ID. The ID can be retrieved via the **searchCampaigns** method
$datetime_start = "datetime_start_example"; // string | Start date. The format is 24-h ‘YYYY-MM-DD HH:mm:ss’
$datetime_end = "datetime_end_example"; // string | End date. The format is 24-h ‘YYYY-MM-DD HH:mm:ss’
$fields = "fields_example"; // string | List of the returned fields (comma separated). If it’s not specified, the response will contain the full list of fields. <br /><b>IMPORTANT: the parameter can be used only in GET requests</b>
$sort = "sort_example"; // string | Sorting data by field(s), add '-' to DESC sort, (<b>example:</b> ‘sort=id’ or ‘sort=-id’). <br /><b>IMPORTANT: the parameter can be used only in GET requests</b>
$page = 56; // int | Page to show as a response: the first one, second, etc. API methods return 20 records (one page) by default. <br /><b>IMPORTANT: the parameter can be used only in GET requests</b>
$per_page = 56; // int | Number of records per page (default value is 20, min = 1, max = 50). <br /><b>IMPORTANT: the parameter can be used only in GET requests</b>

try {
    $result = $kitApi->CampaignsApi->searchAttempts($id, $campaign_id, $datetime_start, $datetime_end, $fields, $sort, $page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling $kitApi->CampaignsApi->searchAttempts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Attempt ID. The ID can be retrieved via the **searchAttempts** method | [optional]
 **campaign_id** | **int**| Campaign ID. The ID can be retrieved via the **searchCampaigns** method | [optional]
 **datetime_start** | **string**| Start date. The format is 24-h ‘YYYY-MM-DD HH:mm:ss’ | [optional]
 **datetime_end** | **string**| End date. The format is 24-h ‘YYYY-MM-DD HH:mm:ss’ | [optional]
 **fields** | **string**| List of the returned fields (comma separated). If it’s not specified, the response will contain the full list of fields. &lt;br /&gt;&lt;b&gt;IMPORTANT: the parameter can be used only in GET requests&lt;/b&gt; | [optional]
 **sort** | **string**| Sorting data by field(s), add &#39;-&#39; to DESC sort, (&lt;b&gt;example:&lt;/b&gt; ‘sort&#x3D;id’ or ‘sort&#x3D;-id’). &lt;br /&gt;&lt;b&gt;IMPORTANT: the parameter can be used only in GET requests&lt;/b&gt; | [optional]
 **page** | **int**| Page to show as a response: the first one, second, etc. API methods return 20 records (one page) by default. &lt;br /&gt;&lt;b&gt;IMPORTANT: the parameter can be used only in GET requests&lt;/b&gt; | [optional]
 **per_page** | **int**| Number of records per page (default value is 20, min &#x3D; 1, max &#x3D; 50). &lt;br /&gt;&lt;b&gt;IMPORTANT: the parameter can be used only in GET requests&lt;/b&gt; | [optional]

### Return type

[**\VoximplantKit\Model\SearchAttemptsResponseType**](../Model/SearchAttemptsResponseType.md)

### Authorization

[access_token](../../README.md#access_token), [domain](../../README.md#domain)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchCampaigns**
> \VoximplantKit\Model\SearchCampaignsResponseType searchCampaigns($id, $status, $date_start, $date_end, $date_create, $title, $fields, $sort, $page, $per_page)



Search for the campaigns. The method without specifying the parameters returns the last 20 campaigns created.

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

$id = 56; // int | Campaign ID. The ID can be retrieved via the **searchCampaigns** method
$status = "status_example"; // string | Campaign status. The possible values are draft, error, processing, ready, canceled, completed, paused, started
$date_start = "date_start_example"; // string | Start date. The format is 24-h ‘YYYY-MM-DD HH:mm:ss’
$date_end = "date_end_example"; // string | End date. The format is 24-h ‘YYYY-MM-DD HH:mm:ss’
$date_create = "date_create_example"; // string | Date of the campaign creation. The format is 24-h ‘YYYY-MM-DD HH:mm:ss’
$title = "title_example"; // string | Title of the campaign
$fields = "fields_example"; // string | List of the return fields (comma separated). If it’s not specified the response will contain the full list of fields. <br /><b>IMPORTANT: the parameter can be used only in GET requests</b>
$sort = "sort_example"; // string | Sorting data by field(s), add '-' to DESC sort, (<b>example:</b> ‘sort=id’ or ‘sort=-datetime_start’). <br /><b>IMPORTANT: the parameter can be used only in GET requests</b>
$page = 56; // int | Page to show as a response: the first one, second, etc. API methods return 20 records (one page) by default. <br /><b>IMPORTANT: the parameter can be used only in GET requests</b>
$per_page = 56; // int | Number of records per page (default value is 20, min = 1, max = 50). <br /><b>IMPORTANT: the parameter can be used only in GET requests</b>

try {
    $result = $kitApi->CampaignsApi->searchCampaigns($id, $status, $date_start, $date_end, $date_create, $title, $fields, $sort, $page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling $kitApi->CampaignsApi->searchCampaigns: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Campaign ID. The ID can be retrieved via the **searchCampaigns** method | [optional]
 **status** | **string**| Campaign status. The possible values are draft, error, processing, ready, canceled, completed, paused, started | [optional]
 **date_start** | **string**| Start date. The format is 24-h ‘YYYY-MM-DD HH:mm:ss’ | [optional]
 **date_end** | **string**| End date. The format is 24-h ‘YYYY-MM-DD HH:mm:ss’ | [optional]
 **date_create** | **string**| Date of the campaign creation. The format is 24-h ‘YYYY-MM-DD HH:mm:ss’ | [optional]
 **title** | **string**| Title of the campaign | [optional]
 **fields** | **string**| List of the return fields (comma separated). If it’s not specified the response will contain the full list of fields. &lt;br /&gt;&lt;b&gt;IMPORTANT: the parameter can be used only in GET requests&lt;/b&gt; | [optional]
 **sort** | **string**| Sorting data by field(s), add &#39;-&#39; to DESC sort, (&lt;b&gt;example:&lt;/b&gt; ‘sort&#x3D;id’ or ‘sort&#x3D;-datetime_start’). &lt;br /&gt;&lt;b&gt;IMPORTANT: the parameter can be used only in GET requests&lt;/b&gt; | [optional]
 **page** | **int**| Page to show as a response: the first one, second, etc. API methods return 20 records (one page) by default. &lt;br /&gt;&lt;b&gt;IMPORTANT: the parameter can be used only in GET requests&lt;/b&gt; | [optional]
 **per_page** | **int**| Number of records per page (default value is 20, min &#x3D; 1, max &#x3D; 50). &lt;br /&gt;&lt;b&gt;IMPORTANT: the parameter can be used only in GET requests&lt;/b&gt; | [optional]

### Return type

[**\VoximplantKit\Model\SearchCampaignsResponseType**](../Model/SearchCampaignsResponseType.md)

### Authorization

[access_token](../../README.md#access_token), [domain](../../README.md#domain)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **stat**
> \VoximplantKit\Model\CampaignStatResponseType stat($campaign_ids)



Get the statistics of the specified campaign(s). Campaign_ids is a JSON array with the campaign ID(s).  ID(s) can be retrieved via the **searchCampaigns** method (**example**: <code>[1,2,3]</code>).

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

$campaign_ids = "campaign_ids_example"; // string | 

try {
    $result = $kitApi->CampaignsApi->stat($campaign_ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling $kitApi->CampaignsApi->stat: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaign_ids** | **string**|  |

### Return type

[**\VoximplantKit\Model\CampaignStatResponseType**](../Model/CampaignStatResponseType.md)

### Authorization

[access_token](../../README.md#access_token), [domain](../../README.md#domain)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

