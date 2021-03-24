# VoximplantKit\BotServiceApi

All URIs are relative to *https://kitapi-eu.voximplant.com/api/v3*

Method | HTTP request | Description
------------- | ------------- | -------------
[**login**](BotServiceApi.md#login) | **POST** /botService/login | 
[**refreshToken**](BotServiceApi.md#refreshToken) | **POST** /botService/refreshToken | 
[**sendMessage**](BotServiceApi.md#sendMessage) | **POST** /{channel_uuid} | 


# **login**
> \VoximplantKit\Model\MessagingLoginResponseType login($channel_uuid)



Generating jwt token.

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

$channel_uuid = "channel_uuid_example"; // string | 

try {
    $result = $kitApi->BotServiceApi->login($channel_uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling $kitApi->BotServiceApi->login: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **channel_uuid** | **string**|  |

### Return type

[**\VoximplantKit\Model\MessagingLoginResponseType**](../Model/MessagingLoginResponseType.md)

### Authorization

[access_token](../../README.md#access_token), [domain](../../README.md#domain)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **refreshToken**
> \VoximplantKit\Model\MessagingLoginResponseType refreshToken($refresh_token)



Refreshing jwt token.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = VoximplantKit\Configuration::getDefaultConfiguration();
$config->setHost('https://kitapi-{{region}}.voximplant.com/api/v3');
$kitApi = new VoximplantKit\VoximplantKitClient($config);

$refresh_token = "refresh_token_example"; // string | 

try {
    $result = $kitApi->BotServiceApi->refreshToken($refresh_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling $kitApi->BotServiceApi->refreshToken: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **refresh_token** | **string**|  |

### Return type

[**\VoximplantKit\Model\MessagingLoginResponseType**](../Model/MessagingLoginResponseType.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sendMessage**
> \VoximplantKit\Model\InlineResponse200 sendMessage($body, $channel_uuid)



Send message to channel

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = VoximplantKit\Configuration::getDefaultConfiguration();
$config->setHost('https://kit-im-{{region}}.voximplant.com');
// Configure JWT token authorization
$config->setAccessToken('your_jwt_token');


$kitApi = new VoximplantKit\VoximplantKitClient($config);

$body = new \VoximplantKit\Model\MessagingIncomingEventType(); // \VoximplantKit\Model\MessagingIncomingEventType | 
$channel_uuid = "channel_uuid_example"; // string | Your channel uuid. Set in query path. See an example.

try {
    $result = $kitApi->BotServiceApi->sendMessage($body, $channel_uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling $kitApi->BotServiceApi->sendMessage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\VoximplantKit\Model\MessagingIncomingEventType**](../Model/MessagingIncomingEventType.md)|  |
 **channel_uuid** | **string**| Your channel uuid. Set in query path. See an example. |

### Return type

[**\VoximplantKit\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[jwt_token](../../README.md#jwt_token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

