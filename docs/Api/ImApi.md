# OpenAPI\Client\ImApi

All URIs are relative to *https://slack.com/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**imClose**](ImApi.md#imClose) | **POST** /im.close | 
[**imHistory**](ImApi.md#imHistory) | **GET** /im.history | 
[**imList**](ImApi.md#imList) | **GET** /im.list | 
[**imMark**](ImApi.md#imMark) | **POST** /im.mark | 
[**imOpen**](ImApi.md#imOpen) | **POST** /im.open | 
[**imReplies**](ImApi.md#imReplies) | **GET** /im.replies | 



## imClose

> map[string,object] imClose()



Close a direct message channel.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: slackAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ImApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->imClose();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImApi->imClose: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

This endpoint does not need any parameter.

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


## imHistory

> map[string,object] imHistory($count, $unreads, $inclusive, $token, $oldest, $channel, $latest)



Fetches history of messages and events from direct message channel.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: slackAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ImApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$count = 56; // int | Number of messages to return, between 1 and 1000.
$unreads = True; // bool | Include `unread_count_display` in the output?
$inclusive = True; // bool | Include messages with latest or oldest timestamp in results.
$token = 'token_example'; // string | Authentication token. Requires scope: `im:history`
$oldest = 3.4; // float | Start of time range of messages to include in results.
$channel = 'channel_example'; // string | Direct message channel to fetch history for.
$latest = 3.4; // float | End of time range of messages to include in results.

try {
    $result = $apiInstance->imHistory($count, $unreads, $inclusive, $token, $oldest, $channel, $latest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImApi->imHistory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **count** | **int**| Number of messages to return, between 1 and 1000. | [optional]
 **unreads** | **bool**| Include &#x60;unread_count_display&#x60; in the output? | [optional]
 **inclusive** | **bool**| Include messages with latest or oldest timestamp in results. | [optional]
 **token** | **string**| Authentication token. Requires scope: &#x60;im:history&#x60; | [optional]
 **oldest** | **float**| Start of time range of messages to include in results. | [optional]
 **channel** | **string**| Direct message channel to fetch history for. | [optional]
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


## imList

> map[string,object] imList($cursor, $token, $limit)



Lists direct message channels for the calling user.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: slackAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ImApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cursor = 'cursor_example'; // string | Paginate through collections of data by setting the `cursor` parameter to a `next_cursor` attribute returned by a previous request's `response_metadata`. Default value fetches the first \"page\" of the collection. See [pagination](/docs/pagination) for more detail.
$token = 'token_example'; // string | Authentication token. Requires scope: `im:read`
$limit = 56; // int | The maximum number of items to return. Fewer than the requested number of items may be returned, even if the end of the users list hasn't been reached.

try {
    $result = $apiInstance->imList($cursor, $token, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImApi->imList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cursor** | **string**| Paginate through collections of data by setting the &#x60;cursor&#x60; parameter to a &#x60;next_cursor&#x60; attribute returned by a previous request&#39;s &#x60;response_metadata&#x60;. Default value fetches the first \&quot;page\&quot; of the collection. See [pagination](/docs/pagination) for more detail. | [optional]
 **token** | **string**| Authentication token. Requires scope: &#x60;im:read&#x60; | [optional]
 **limit** | **int**| The maximum number of items to return. Fewer than the requested number of items may be returned, even if the end of the users list hasn&#39;t been reached. | [optional]

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


## imMark

> map[string,object] imMark($token, $channel, $ts)



Sets the read cursor in a direct message channel.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: slackAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ImApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token = 'token_example'; // string | Authentication token. Requires scope: `im:write`
$channel = 'channel_example'; // string | Direct message channel to set reading cursor in.
$ts = 3.4; // float | Timestamp of the most recently seen message.

try {
    $result = $apiInstance->imMark($token, $channel, $ts);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImApi->imMark: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| Authentication token. Requires scope: &#x60;im:write&#x60; | [optional]
 **channel** | **string**| Direct message channel to set reading cursor in. | [optional]
 **ts** | **float**| Timestamp of the most recently seen message. | [optional]

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


## imOpen

> map[string,object] imOpen($token, $return_im, $user, $include_locale)



Opens a direct message channel.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: slackAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ImApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token = 'token_example'; // string | Authentication token. Requires scope: `im:write`
$return_im = True; // bool | Boolean, indicates you want the full IM channel definition in the response.
$user = 'user_example'; // string | User to open a direct message channel with.
$include_locale = True; // bool | Set this to `true` to receive the locale for this im. Defaults to `false`

try {
    $result = $apiInstance->imOpen($token, $return_im, $user, $include_locale);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImApi->imOpen: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| Authentication token. Requires scope: &#x60;im:write&#x60; | [optional]
 **return_im** | **bool**| Boolean, indicates you want the full IM channel definition in the response. | [optional]
 **user** | **string**| User to open a direct message channel with. | [optional]
 **include_locale** | **bool**| Set this to &#x60;true&#x60; to receive the locale for this im. Defaults to &#x60;false&#x60; | [optional]

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


## imReplies

> map[string,object] imReplies($thread_ts, $token, $channel)



Retrieve a thread of messages posted to a direct message conversation

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: slackAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ImApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$thread_ts = 3.4; // float | Unique identifier of a thread's parent message
$token = 'token_example'; // string | Authentication token. Requires scope: `im:history`
$channel = 'channel_example'; // string | Direct message channel to fetch thread from

try {
    $result = $apiInstance->imReplies($thread_ts, $token, $channel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImApi->imReplies: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **thread_ts** | **float**| Unique identifier of a thread&#39;s parent message | [optional]
 **token** | **string**| Authentication token. Requires scope: &#x60;im:history&#x60; | [optional]
 **channel** | **string**| Direct message channel to fetch thread from | [optional]

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

