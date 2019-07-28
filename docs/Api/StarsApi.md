# OpenAPI\Client\StarsApi

All URIs are relative to *https://slack.com/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**starsAdd**](StarsApi.md#starsAdd) | **POST** /stars.add | 
[**starsList**](StarsApi.md#starsList) | **GET** /stars.list | 
[**starsRemove**](StarsApi.md#starsRemove) | **POST** /stars.remove | 



## starsAdd

> map[string,object] starsAdd($token, $file_comment, $timestamp, $channel, $file)



Adds a star to an item.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: slackAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\StarsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token = 'token_example'; // string | Authentication token. Requires scope: `stars:write`
$file_comment = 'file_comment_example'; // string | File comment to add star to.
$timestamp = 3.4; // float | Timestamp of the message to add star to.
$channel = 'channel_example'; // string | Channel to add star to, or channel where the message to add star to was posted (used with `timestamp`).
$file = 'file_example'; // string | File to add star to.

try {
    $result = $apiInstance->starsAdd($token, $file_comment, $timestamp, $channel, $file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StarsApi->starsAdd: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| Authentication token. Requires scope: &#x60;stars:write&#x60; | [optional]
 **file_comment** | **string**| File comment to add star to. | [optional]
 **timestamp** | **float**| Timestamp of the message to add star to. | [optional]
 **channel** | **string**| Channel to add star to, or channel where the message to add star to was posted (used with &#x60;timestamp&#x60;). | [optional]
 **file** | **string**| File to add star to. | [optional]

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


## starsList

> map[string,object] starsList($count, $cursor, $token, $limit, $page)



Lists stars for a user.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: slackAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\StarsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$count = 'count_example'; // string | 
$cursor = 'cursor_example'; // string | Parameter for pagination. Set `cursor` equal to the `next_cursor` attribute returned by the previous request's `response_metadata`. This parameter is optional, but pagination is mandatory: the default value simply fetches the first \"page\" of the collection. See [pagination](/docs/pagination) for more details.
$token = 'token_example'; // string | Authentication token. Requires scope: `stars:read`
$limit = 56; // int | The maximum number of items to return. Fewer than the requested number of items may be returned, even if the end of the list hasn't been reached.
$page = 'page_example'; // string | 

try {
    $result = $apiInstance->starsList($count, $cursor, $token, $limit, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StarsApi->starsList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **count** | **string**|  | [optional]
 **cursor** | **string**| Parameter for pagination. Set &#x60;cursor&#x60; equal to the &#x60;next_cursor&#x60; attribute returned by the previous request&#39;s &#x60;response_metadata&#x60;. This parameter is optional, but pagination is mandatory: the default value simply fetches the first \&quot;page\&quot; of the collection. See [pagination](/docs/pagination) for more details. | [optional]
 **token** | **string**| Authentication token. Requires scope: &#x60;stars:read&#x60; | [optional]
 **limit** | **int**| The maximum number of items to return. Fewer than the requested number of items may be returned, even if the end of the list hasn&#39;t been reached. | [optional]
 **page** | **string**|  | [optional]

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


## starsRemove

> map[string,object] starsRemove($token, $file_comment, $timestamp, $channel, $file)



Removes a star from an item.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: slackAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\StarsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token = 'token_example'; // string | Authentication token. Requires scope: `stars:write`
$file_comment = 'file_comment_example'; // string | File comment to remove star from.
$timestamp = 3.4; // float | Timestamp of the message to remove star from.
$channel = 'channel_example'; // string | Channel to remove star from, or channel where the message to remove star from was posted (used with `timestamp`).
$file = 'file_example'; // string | File to remove star from.

try {
    $result = $apiInstance->starsRemove($token, $file_comment, $timestamp, $channel, $file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StarsApi->starsRemove: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| Authentication token. Requires scope: &#x60;stars:write&#x60; | [optional]
 **file_comment** | **string**| File comment to remove star from. | [optional]
 **timestamp** | **float**| Timestamp of the message to remove star from. | [optional]
 **channel** | **string**| Channel to remove star from, or channel where the message to remove star from was posted (used with &#x60;timestamp&#x60;). | [optional]
 **file** | **string**| File to remove star from. | [optional]

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

