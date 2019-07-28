# OpenAPI\Client\RtmApi

All URIs are relative to *https://slack.com/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**rtmConnect**](RtmApi.md#rtmConnect) | **GET** /rtm.connect | 



## rtmConnect

> map[string,object] rtmConnect($presence_sub, $token, $batch_presence_aware)



Starts a Real Time Messaging session.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: slackAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\RtmApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$presence_sub = True; // bool | Only deliver presence events when requested by subscription. See [presence subscriptions](/docs/presence-and-status#subscriptions).
$token = 'token_example'; // string | Authentication token. Requires scope: `rtm:stream`
$batch_presence_aware = True; // bool | Batch presence deliveries via subscription. Enabling changes the shape of `presence_change` events. See [batch presence](/docs/presence-and-status#batching).

try {
    $result = $apiInstance->rtmConnect($presence_sub, $token, $batch_presence_aware);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RtmApi->rtmConnect: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **presence_sub** | **bool**| Only deliver presence events when requested by subscription. See [presence subscriptions](/docs/presence-and-status#subscriptions). | [optional]
 **token** | **string**| Authentication token. Requires scope: &#x60;rtm:stream&#x60; | [optional]
 **batch_presence_aware** | **bool**| Batch presence deliveries via subscription. Enabling changes the shape of &#x60;presence_change&#x60; events. See [batch presence](/docs/presence-and-status#batching). | [optional]

### Return type

**map[string,object]**

### Authorization

[slackAuth](../../README.md#slackAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

