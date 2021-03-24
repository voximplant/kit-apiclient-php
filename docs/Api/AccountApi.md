# VoximplantKit\AccountApi

All URIs are relative to *https://kitapi-eu.voximplant.com/api/v3*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getAccountInfo**](AccountApi.md#getAccountInfo) | **GET** /account/getAccountInfo | 
[**searchSettings**](AccountApi.md#searchSettings) | **GET** /setting/searchSettings | 


# **getAccountInfo**
> \VoximplantKit\Model\GetAccountInfoResponseType getAccountInfo()



Get info about your account, such as account name, currency etc.

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


try {
    $result = $kitApi->AccountApi->getAccountInfo();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling $kitApi->AccountApi->getAccountInfo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\VoximplantKit\Model\GetAccountInfoResponseType**](../Model/GetAccountInfoResponseType.md)

### Authorization

[access_token](../../README.md#access_token), [domain](../../README.md#domain)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchSettings**
> \VoximplantKit\Model\SearchSettingsResponseType searchSettings($key)



Get current account settings.

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

$key = "key_example"; // string | Name of the setting, such as account_id, domain_name, etc

try {
    $result = $kitApi->AccountApi->searchSettings($key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling $kitApi->AccountApi->searchSettings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **key** | **string**| Name of the setting, such as account_id, domain_name, etc | [optional]

### Return type

[**\VoximplantKit\Model\SearchSettingsResponseType**](../Model/SearchSettingsResponseType.md)

### Authorization

[access_token](../../README.md#access_token), [domain](../../README.md#domain)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

