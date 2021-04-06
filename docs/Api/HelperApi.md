# VoximplantKit\HelperApi

All URIs are relative to *https://kitapi-eu.voximplant.com/api/v3*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getListTimezones**](HelperApi.md#getListTimezones) | **GET** /helper/getListTimezones | 
[**getTimezonesByNumber**](HelperApi.md#getTimezonesByNumber) | **POST** /helper/getTimezonesByNumber | 


# **getListTimezones**
> \VoximplantKit\Model\GetListTimezonesResponseType getListTimezones()



List of timezones.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = VoximplantKit\Configuration::getDefaultConfiguration();
$config->setHost('https://kitapi-{{region}}.voximplant.com/api/v3');

$kitApi = new VoximplantKit\VoximplantKitClient($config);


try {
    $result = $kitApi->HelperApi->getListTimezones();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling $kitApi->HelperApi->getListTimezones: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\VoximplantKit\Model\GetListTimezonesResponseType**](../Model/GetListTimezonesResponseType.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTimezonesByNumber**
> \VoximplantKit\Model\GetTimezonesByNumberResponseType getTimezonesByNumber($phone_number, $country)



Define the timezone by the phone number.

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

$phone_number = 56; // int | 
$country = "country_example"; // string | 

try {
    $result = $kitApi->HelperApi->getTimezonesByNumber($phone_number, $country);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling $kitApi->HelperApi->getTimezonesByNumber: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **phone_number** | **int**|  | [optional]
 **country** | **string**|  | [optional]

### Return type

[**\VoximplantKit\Model\GetTimezonesByNumberResponseType**](../Model/GetTimezonesByNumberResponseType.md)

### Authorization

[access_token](../../README.md#access_token), [domain](../../README.md#domain)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

