# OpenAPI\Client\PinsApi

All URIs are relative to *https://slack.com/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**pinsAdd**](PinsApi.md#pinsAdd) | **POST** /pins.add | 
[**pinsList**](PinsApi.md#pinsList) | **GET** /pins.list | 
[**pinsRemove**](PinsApi.md#pinsRemove) | **POST** /pins.remove | 



## pinsAdd

> map[string,object] pinsAdd($token, $file_comment, $timestamp, $file, $channel)



Pins an item to a channel.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: slackAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PinsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token = 'token_example'; // string | Authentication token. Requires scope: `pins:write`
$file_comment = 'file_comment_example'; // string | File comment to pin.
$timestamp = 3.4; // float | Timestamp of the message to pin.
$file = 'file_example'; // string | File to pin.
$channel = 'channel_example'; // string | Channel to pin the item in.

try {
    $result = $apiInstance->pinsAdd($token, $file_comment, $timestamp, $file, $channel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PinsApi->pinsAdd: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| Authentication token. Requires scope: &#x60;pins:write&#x60; | [optional]
 **file_comment** | **string**| File comment to pin. | [optional]
 **timestamp** | **float**| Timestamp of the message to pin. | [optional]
 **file** | **string**| File to pin. | [optional]
 **channel** | **string**| Channel to pin the item in. | [optional]

### Return type

**map[string,object]**

### Authorization

[slackAuth](../../README.md#slackAuth)

### HTTP request headers

- **Content-Type**: application/x-www-form-urlencoded, application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## pinsList

> object pinsList($token, $channel)



Lists items pinned to a channel.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: slackAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PinsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token = 'token_example'; // string | Authentication token. Requires scope: `pins:read`
$channel = 'channel_example'; // string | Channel to get pinned items for.

try {
    $result = $apiInstance->pinsList($token, $channel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PinsApi->pinsList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| Authentication token. Requires scope: &#x60;pins:read&#x60; | [optional]
 **channel** | **string**| Channel to get pinned items for. | [optional]

### Return type

**object**

### Authorization

[slackAuth](../../README.md#slackAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## pinsRemove

> map[string,object] pinsRemove($token, $file_comment, $timestamp, $file, $channel)



Un-pins an item from a channel.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: slackAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PinsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token = 'token_example'; // string | Authentication token. Requires scope: `pins:write`
$file_comment = 'file_comment_example'; // string | File comment to un-pin.
$timestamp = 3.4; // float | Timestamp of the message to un-pin.
$file = 'file_example'; // string | File to un-pin.
$channel = 'channel_example'; // string | Channel where the item is pinned to.

try {
    $result = $apiInstance->pinsRemove($token, $file_comment, $timestamp, $file, $channel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PinsApi->pinsRemove: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| Authentication token. Requires scope: &#x60;pins:write&#x60; | [optional]
 **file_comment** | **string**| File comment to un-pin. | [optional]
 **timestamp** | **float**| Timestamp of the message to un-pin. | [optional]
 **file** | **string**| File to un-pin. | [optional]
 **channel** | **string**| Channel where the item is pinned to. | [optional]

### Return type

**map[string,object]**

### Authorization

[slackAuth](../../README.md#slackAuth)

### HTTP request headers

- **Content-Type**: application/x-www-form-urlencoded, application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

