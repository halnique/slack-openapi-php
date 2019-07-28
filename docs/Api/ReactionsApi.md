# OpenAPI\Client\ReactionsApi

All URIs are relative to *https://slack.com/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**reactionsAdd**](ReactionsApi.md#reactionsAdd) | **POST** /reactions.add | 
[**reactionsGet**](ReactionsApi.md#reactionsGet) | **GET** /reactions.get | 
[**reactionsList**](ReactionsApi.md#reactionsList) | **GET** /reactions.list | 
[**reactionsRemove**](ReactionsApi.md#reactionsRemove) | **POST** /reactions.remove | 



## reactionsAdd

> map[string,object] reactionsAdd($token, $name, $file_comment, $timestamp, $file, $channel)



Adds a reaction to an item.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: slackAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ReactionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token = 'token_example'; // string | Authentication token. Requires scope: `reactions:write`
$name = 'name_example'; // string | Reaction (emoji) name.
$file_comment = 'file_comment_example'; // string | File comment to add reaction to. Now that [file threads](/changelog/2018-05-file-threads-soon-tread#whats_changed) work the way you'd expect, this argument is deprecated. Specify the timestamp and channel of the message associated with a file instead.
$timestamp = 3.4; // float | Timestamp of the message to add reaction to.
$file = 'file_example'; // string | File to add reaction to. Now that [file threads](/changelog/2018-05-file-threads-soon-tread#whats_changed) work the way you'd expect, this argument is deprecated. Specify the timestamp and channel of the message associated with a file instead.
$channel = 'channel_example'; // string | Channel where the message to add reaction to was posted.

try {
    $result = $apiInstance->reactionsAdd($token, $name, $file_comment, $timestamp, $file, $channel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReactionsApi->reactionsAdd: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| Authentication token. Requires scope: &#x60;reactions:write&#x60; | [optional]
 **name** | **string**| Reaction (emoji) name. | [optional]
 **file_comment** | **string**| File comment to add reaction to. Now that [file threads](/changelog/2018-05-file-threads-soon-tread#whats_changed) work the way you&#39;d expect, this argument is deprecated. Specify the timestamp and channel of the message associated with a file instead. | [optional]
 **timestamp** | **float**| Timestamp of the message to add reaction to. | [optional]
 **file** | **string**| File to add reaction to. Now that [file threads](/changelog/2018-05-file-threads-soon-tread#whats_changed) work the way you&#39;d expect, this argument is deprecated. Specify the timestamp and channel of the message associated with a file instead. | [optional]
 **channel** | **string**| Channel where the message to add reaction to was posted. | [optional]

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


## reactionsGet

> object reactionsGet($full, $file_comment, $timestamp, $token, $file, $channel)



Gets reactions for an item.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: slackAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ReactionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$full = True; // bool | If true always return the complete reaction list.
$file_comment = 'file_comment_example'; // string | File comment to get reactions for.
$timestamp = 3.4; // float | Timestamp of the message to get reactions for.
$token = 'token_example'; // string | Authentication token. Requires scope: `reactions:read`
$file = 'file_example'; // string | File to get reactions for.
$channel = 'channel_example'; // string | Channel where the message to get reactions for was posted.

try {
    $result = $apiInstance->reactionsGet($full, $file_comment, $timestamp, $token, $file, $channel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReactionsApi->reactionsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **full** | **bool**| If true always return the complete reaction list. | [optional]
 **file_comment** | **string**| File comment to get reactions for. | [optional]
 **timestamp** | **float**| Timestamp of the message to get reactions for. | [optional]
 **token** | **string**| Authentication token. Requires scope: &#x60;reactions:read&#x60; | [optional]
 **file** | **string**| File to get reactions for. | [optional]
 **channel** | **string**| Channel where the message to get reactions for was posted. | [optional]

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


## reactionsList

> map[string,object] reactionsList($count, $full, $cursor, $token, $limit, $user, $page)



Lists reactions made by a user.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: slackAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ReactionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$count = 'count_example'; // string | 
$full = True; // bool | If true always return the complete reaction list.
$cursor = 'cursor_example'; // string | Parameter for pagination. Set `cursor` equal to the `next_cursor` attribute returned by the previous request's `response_metadata`. This parameter is optional, but pagination is mandatory: the default value simply fetches the first \"page\" of the collection. See [pagination](/docs/pagination) for more details.
$token = 'token_example'; // string | Authentication token. Requires scope: `reactions:read`
$limit = 56; // int | The maximum number of items to return. Fewer than the requested number of items may be returned, even if the end of the list hasn't been reached.
$user = 'user_example'; // string | Show reactions made by this user. Defaults to the authed user.
$page = 'page_example'; // string | 

try {
    $result = $apiInstance->reactionsList($count, $full, $cursor, $token, $limit, $user, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReactionsApi->reactionsList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **count** | **string**|  | [optional]
 **full** | **bool**| If true always return the complete reaction list. | [optional]
 **cursor** | **string**| Parameter for pagination. Set &#x60;cursor&#x60; equal to the &#x60;next_cursor&#x60; attribute returned by the previous request&#39;s &#x60;response_metadata&#x60;. This parameter is optional, but pagination is mandatory: the default value simply fetches the first \&quot;page\&quot; of the collection. See [pagination](/docs/pagination) for more details. | [optional]
 **token** | **string**| Authentication token. Requires scope: &#x60;reactions:read&#x60; | [optional]
 **limit** | **int**| The maximum number of items to return. Fewer than the requested number of items may be returned, even if the end of the list hasn&#39;t been reached. | [optional]
 **user** | **string**| Show reactions made by this user. Defaults to the authed user. | [optional]
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


## reactionsRemove

> map[string,object] reactionsRemove($token, $name, $file_comment, $timestamp, $file, $channel)



Removes a reaction from an item.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: slackAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ReactionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token = 'token_example'; // string | Authentication token. Requires scope: `reactions:write`
$name = 'name_example'; // string | Reaction (emoji) name.
$file_comment = 'file_comment_example'; // string | File comment to remove reaction from.
$timestamp = 3.4; // float | Timestamp of the message to remove reaction from.
$file = 'file_example'; // string | File to remove reaction from.
$channel = 'channel_example'; // string | Channel where the message to remove reaction from was posted.

try {
    $result = $apiInstance->reactionsRemove($token, $name, $file_comment, $timestamp, $file, $channel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReactionsApi->reactionsRemove: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| Authentication token. Requires scope: &#x60;reactions:write&#x60; | [optional]
 **name** | **string**| Reaction (emoji) name. | [optional]
 **file_comment** | **string**| File comment to remove reaction from. | [optional]
 **timestamp** | **float**| Timestamp of the message to remove reaction from. | [optional]
 **file** | **string**| File to remove reaction from. | [optional]
 **channel** | **string**| Channel where the message to remove reaction from was posted. | [optional]

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

