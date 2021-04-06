# VoximplantKit\NumbersApi

All URIs are relative to *https://kitapi-eu.voximplant.com/api/v3*

Method | HTTP request | Description
------------- | ------------- | -------------
[**searchCallerIDs**](NumbersApi.md#searchCallerIDs) | **GET** /callerid/searchCallerIDs | 
[**searchNumbers**](NumbersApi.md#searchNumbers) | **GET** /phone/searchNumbers | 


# **searchCallerIDs**
> \VoximplantKit\Model\SearchCallerIDsResponseType searchCallerIDs($id, $caller_number, $active, $sort)



Search for the Caller ID number. The method without specifying the parameters returns the last 20 Caller IDs.

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

$id = 56; // int | Caller ID. The ID can be retrieved via the **searchCallersIDs** method
$caller_number = "caller_number_example"; // string | Number of the caller
$active = 56; // int | Set '1' if the caller is active
$sort = "sort_example"; // string | Sorting data by field(s), add '-' to DESC sort, (<b>example:</b> ‘sort=id’, etc). <br /><b>IMPORTANT: the parameter can be used only in GET requests</b>

try {
    $result = $kitApi->NumbersApi->searchCallerIDs($id, $caller_number, $active, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling $kitApi->NumbersApi->searchCallerIDs: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Caller ID. The ID can be retrieved via the **searchCallersIDs** method | [optional]
 **caller_number** | **string**| Number of the caller | [optional]
 **active** | **int**| Set &#39;1&#39; if the caller is active | [optional]
 **sort** | **string**| Sorting data by field(s), add &#39;-&#39; to DESC sort, (&lt;b&gt;example:&lt;/b&gt; ‘sort&#x3D;id’, etc). &lt;br /&gt;&lt;b&gt;IMPORTANT: the parameter can be used only in GET requests&lt;/b&gt; | [optional]

### Return type

[**\VoximplantKit\Model\SearchCallerIDsResponseType**](../Model/SearchCallerIDsResponseType.md)

### Authorization

[access_token](../../README.md#access_token), [domain](../../README.md#domain)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchNumbers**
> \VoximplantKit\Model\SearchNumbersResponseType searchNumbers($id, $with_campaigns, $with_scenarios, $can_be_used, $phone_number, $phone_country_code, $sort)



Search for the phone numbers. The method without specifying the parameters returns the last 20 phone numbers.

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

$id = 56; // int | Phone number ID. The ID can be retrieved via the **searchNumbers** method
$with_campaigns = 56; // int | Set '1' to include campaigns in the search results
$with_scenarios = 56; // int | Set '1' to include scenarios in the search results
$can_be_used = 56; // int | Set '1' if the phone number can be used
$phone_number = "phone_number_example"; // string | Phone number to search for.
$phone_country_code = "phone_country_code_example"; // string | Phone country code (2 symbols)
$sort = "sort_example"; // string | Sorting data by field(s), add '-' to DESC sort, (<b>example:</b> ‘sort=id’, etc). <br /><b>IMPORTANT: the parameter can be used only in GET requests</b>

try {
    $result = $kitApi->NumbersApi->searchNumbers($id, $with_campaigns, $with_scenarios, $can_be_used, $phone_number, $phone_country_code, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling $kitApi->NumbersApi->searchNumbers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Phone number ID. The ID can be retrieved via the **searchNumbers** method | [optional]
 **with_campaigns** | **int**| Set &#39;1&#39; to include campaigns in the search results | [optional]
 **with_scenarios** | **int**| Set &#39;1&#39; to include scenarios in the search results | [optional]
 **can_be_used** | **int**| Set &#39;1&#39; if the phone number can be used | [optional]
 **phone_number** | **string**| Phone number to search for. | [optional]
 **phone_country_code** | **string**| Phone country code (2 symbols) | [optional]
 **sort** | **string**| Sorting data by field(s), add &#39;-&#39; to DESC sort, (&lt;b&gt;example:&lt;/b&gt; ‘sort&#x3D;id’, etc). &lt;br /&gt;&lt;b&gt;IMPORTANT: the parameter can be used only in GET requests&lt;/b&gt; | [optional]

### Return type

[**\VoximplantKit\Model\SearchNumbersResponseType**](../Model/SearchNumbersResponseType.md)

### Authorization

[access_token](../../README.md#access_token), [domain](../../README.md#domain)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

