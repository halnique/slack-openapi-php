# OpenAPI\Client\MpimApi

All URIs are relative to *https://slack.com/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**mpimClose**](MpimApi.md#mpimClose) | **POST** /mpim.close | 
[**mpimHistory**](MpimApi.md#mpimHistory) | **GET** /mpim.history | 
[**mpimList**](MpimApi.md#mpimList) | **GET** /mpim.list | 
[**mpimMark**](MpimApi.md#mpimMark) | **POST** /mpim.mark | 
[**mpimOpen**](MpimApi.md#mpimOpen) | **POST** /mpim.open | 
[**mpimReplies**](MpimApi.md#mpimReplies) | **GET** /mpim.replies | 



## mpimClose

> map[string,object] mpimClose($token, $channel)



Closes a multiparty direct message channel.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: slackAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\MpimApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token = 'token_example'; // string | Authentication token. Requires scope: `mpim:write`
$channel = 'channel_example'; // string | MPIM to close.

try {
    $result = $apiInstance->mpimClose($token, $channel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MpimApi->mpimClose: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| Authentication token. Requires scope: &#x60;mpim:write&#x60; | [optional]
 **channel** | **string**| MPIM to close. | [optional]

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


## mpimHistory

> map[string,object] mpimHistory($count, $unreads, $inclusive, $token, $oldest, $channel, $latest)



Fetches history of messages and events from a multiparty direct message.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: slackAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\MpimApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$count = 56; // int | Number of messages to return, between 1 and 1000.
$unreads = True; // bool | Include `unread_count_display` in the output?
$inclusive = True; // bool | Include messages with latest or oldest timestamp in results.
$token = 'token_example'; // string | Authentication token. Requires scope: `mpim:history`
$oldest = 3.4; // float | Start of time range of messages to include in results.
$channel = 'channel_example'; // string | Multiparty direct message to fetch history for.
$latest = 3.4; // float | End of time range of messages to include in results.

try {
    $result = $apiInstance->mpimHistory($count, $unreads, $inclusive, $token, $oldest, $channel, $latest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MpimApi->mpimHistory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **count** | **int**| Number of messages to return, between 1 and 1000. | [optional]
 **unreads** | **bool**| Include &#x60;unread_count_display&#x60; in the output? | [optional]
 **inclusive** | **bool**| Include messages with latest or oldest timestamp in results. | [optional]
 **token** | **string**| Authentication token. Requires scope: &#x60;mpim:history&#x60; | [optional]
 **oldest** | **float**| Start of time range of messages to include in results. | [optional]
 **channel** | **string**| Multiparty direct message to fetch history for. | [optional]
 **latest** | **float**| End of time range of messages to include in results. | [optional]

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


## mpimList

> map[string,object] mpimList($cursor, $token, $limit)



Lists multiparty direct message channels for the calling user.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: slackAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\MpimApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cursor = 'cursor_example'; // string | Parameter for pagination. Set `cursor` equal to the `next_cursor` attribute returned by the previous request's `response_metadata`. This parameter is optional, but pagination is mandatory: the default value simply fetches the first \"page\" of the collection. See [pagination](/docs/pagination) for more details.
$token = 'token_example'; // string | Authentication token. Requires scope: `mpim:read`
$limit = 56; // int | The maximum number of items to return. Fewer than the requested number of items may be returned, even if the end of the list hasn't been reached.

try {
    $result = $apiInstance->mpimList($cursor, $token, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MpimApi->mpimList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cursor** | **string**| Parameter for pagination. Set &#x60;cursor&#x60; equal to the &#x60;next_cursor&#x60; attribute returned by the previous request&#39;s &#x60;response_metadata&#x60;. This parameter is optional, but pagination is mandatory: the default value simply fetches the first \&quot;page\&quot; of the collection. See [pagination](/docs/pagination) for more details. | [optional]
 **token** | **string**| Authentication token. Requires scope: &#x60;mpim:read&#x60; | [optional]
 **limit** | **int**| The maximum number of items to return. Fewer than the requested number of items may be returned, even if the end of the list hasn&#39;t been reached. | [optional]

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


## mpimMark

> map[string,object] mpimMark($token, $ts, $channel)



Sets the read cursor in a multiparty direct message channel.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: slackAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\MpimApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token = 'token_example'; // string | Authentication token. Requires scope: `mpim:write`
$ts = 3.4; // float | Timestamp of the most recently seen message.
$channel = 'channel_example'; // string | multiparty direct message channel to set reading cursor in.

try {
    $result = $apiInstance->mpimMark($token, $ts, $channel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MpimApi->mpimMark: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| Authentication token. Requires scope: &#x60;mpim:write&#x60; | [optional]
 **ts** | **float**| Timestamp of the most recently seen message. | [optional]
 **channel** | **string**| multiparty direct message channel to set reading cursor in. | [optional]

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


## mpimOpen

> map[string,object] mpimOpen($token, $users)



This method opens a multiparty direct message.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: slackAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\MpimApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token = 'token_example'; // string | Authentication token. Requires scope: `mpim:write`
$users = 'users_example'; // string | Comma separated lists of users.  The ordering of the users is preserved whenever a MPIM group is returned.

try {
    $result = $apiInstance->mpimOpen($token, $users);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MpimApi->mpimOpen: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| Authentication token. Requires scope: &#x60;mpim:write&#x60; | [optional]
 **users** | **string**| Comma separated lists of users.  The ordering of the users is preserved whenever a MPIM group is returned. | [optional]

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


## mpimReplies

> map[string,object] mpimReplies($thread_ts, $token, $channel)



Retrieve a thread of messages posted to a direct message conversation from a multiparty direct message.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: slackAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\MpimApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$thread_ts = 3.4; // float | Unique identifier of a thread's parent message.
$token = 'token_example'; // string | Authentication token. Requires scope: `mpim:history`
$channel = 'channel_example'; // string | Multiparty direct message channel to fetch thread from.

try {
    $result = $apiInstance->mpimReplies($thread_ts, $token, $channel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MpimApi->mpimReplies: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **thread_ts** | **float**| Unique identifier of a thread&#39;s parent message. | [optional]
 **token** | **string**| Authentication token. Requires scope: &#x60;mpim:history&#x60; | [optional]
 **channel** | **string**| Multiparty direct message channel to fetch thread from. | [optional]

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

