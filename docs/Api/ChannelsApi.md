# OpenAPI\Client\ChannelsApi

All URIs are relative to *https://slack.com/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**channelsArchive**](ChannelsApi.md#channelsArchive) | **POST** /channels.archive | 
[**channelsCreate**](ChannelsApi.md#channelsCreate) | **POST** /channels.create | 
[**channelsHistory**](ChannelsApi.md#channelsHistory) | **GET** /channels.history | 
[**channelsInfo**](ChannelsApi.md#channelsInfo) | **GET** /channels.info | 
[**channelsInvite**](ChannelsApi.md#channelsInvite) | **POST** /channels.invite | 
[**channelsJoin**](ChannelsApi.md#channelsJoin) | **POST** /channels.join | 
[**channelsKick**](ChannelsApi.md#channelsKick) | **POST** /channels.kick | 
[**channelsLeave**](ChannelsApi.md#channelsLeave) | **POST** /channels.leave | 
[**channelsList**](ChannelsApi.md#channelsList) | **GET** /channels.list | 
[**channelsMark**](ChannelsApi.md#channelsMark) | **POST** /channels.mark | 
[**channelsRename**](ChannelsApi.md#channelsRename) | **POST** /channels.rename | 
[**channelsReplies**](ChannelsApi.md#channelsReplies) | **GET** /channels.replies | 
[**channelsSetPurpose**](ChannelsApi.md#channelsSetPurpose) | **POST** /channels.setPurpose | 
[**channelsSetTopic**](ChannelsApi.md#channelsSetTopic) | **POST** /channels.setTopic | 
[**channelsUnarchive**](ChannelsApi.md#channelsUnarchive) | **POST** /channels.unarchive | 



## channelsArchive

> map[string,object] channelsArchive($token, $channel)



Archives a channel.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: slackAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ChannelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token = 'token_example'; // string | Authentication token. Requires scope: `channels:write`
$channel = 'channel_example'; // string | Channel to archive

try {
    $result = $apiInstance->channelsArchive($token, $channel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChannelsApi->channelsArchive: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| Authentication token. Requires scope: &#x60;channels:write&#x60; | [optional]
 **channel** | **string**| Channel to archive | [optional]

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


## channelsCreate

> map[string,object] channelsCreate($token, $validate, $name)



Creates a channel.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: slackAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ChannelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token = 'token_example'; // string | Authentication token. Requires scope: `channels:write`
$validate = True; // bool | Whether to return errors on invalid channel name instead of modifying it to meet the specified criteria.
$name = 'name_example'; // string | Name of channel to create

try {
    $result = $apiInstance->channelsCreate($token, $validate, $name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChannelsApi->channelsCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| Authentication token. Requires scope: &#x60;channels:write&#x60; | [optional]
 **validate** | **bool**| Whether to return errors on invalid channel name instead of modifying it to meet the specified criteria. | [optional]
 **name** | **string**| Name of channel to create | [optional]

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


## channelsHistory

> map[string,object] channelsHistory($count, $unreads, $inclusive, $token, $oldest, $channel, $latest)



Fetches history of messages and events from a channel.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: slackAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ChannelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$count = 56; // int | Number of messages to return, between 1 and 1000.
$unreads = True; // bool | Include `unread_count_display` in the output?
$inclusive = True; // bool | Include messages with latest or oldest timestamp in results.
$token = 'token_example'; // string | Authentication token. Requires scope: `channels:history`
$oldest = 3.4; // float | Start of time range of messages to include in results.
$channel = 'channel_example'; // string | Channel to fetch history for.
$latest = 3.4; // float | End of time range of messages to include in results.

try {
    $result = $apiInstance->channelsHistory($count, $unreads, $inclusive, $token, $oldest, $channel, $latest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChannelsApi->channelsHistory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **count** | **int**| Number of messages to return, between 1 and 1000. | [optional]
 **unreads** | **bool**| Include &#x60;unread_count_display&#x60; in the output? | [optional]
 **inclusive** | **bool**| Include messages with latest or oldest timestamp in results. | [optional]
 **token** | **string**| Authentication token. Requires scope: &#x60;channels:history&#x60; | [optional]
 **oldest** | **float**| Start of time range of messages to include in results. | [optional]
 **channel** | **string**| Channel to fetch history for. | [optional]
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


## channelsInfo

> map[string,object] channelsInfo($token, $include_locale, $channel)



Gets information about a channel.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: slackAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ChannelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token = 'token_example'; // string | Authentication token. Requires scope: `channels:read`
$include_locale = True; // bool | Set this to `true` to receive the locale for this channel. Defaults to `false`
$channel = 'channel_example'; // string | Channel to get info on

try {
    $result = $apiInstance->channelsInfo($token, $include_locale, $channel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChannelsApi->channelsInfo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| Authentication token. Requires scope: &#x60;channels:read&#x60; | [optional]
 **include_locale** | **bool**| Set this to &#x60;true&#x60; to receive the locale for this channel. Defaults to &#x60;false&#x60; | [optional]
 **channel** | **string**| Channel to get info on | [optional]

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


## channelsInvite

> map[string,object] channelsInvite($token, $user, $channel)



Invites a user to a channel.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: slackAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ChannelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token = 'token_example'; // string | Authentication token. Requires scope: `channels:write`
$user = 'user_example'; // string | User to invite to channel.
$channel = 'channel_example'; // string | Channel to invite user to.

try {
    $result = $apiInstance->channelsInvite($token, $user, $channel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChannelsApi->channelsInvite: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| Authentication token. Requires scope: &#x60;channels:write&#x60; | [optional]
 **user** | **string**| User to invite to channel. | [optional]
 **channel** | **string**| Channel to invite user to. | [optional]

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


## channelsJoin

> map[string,object] channelsJoin($token, $validate, $name)



Joins a channel, creating it if needed.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: slackAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ChannelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token = 'token_example'; // string | Authentication token. Requires scope: `channels:write`
$validate = True; // bool | Whether to return errors on invalid channel name instead of modifying it to meet the specified criteria.
$name = 'name_example'; // string | Name of channel to join

try {
    $result = $apiInstance->channelsJoin($token, $validate, $name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChannelsApi->channelsJoin: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| Authentication token. Requires scope: &#x60;channels:write&#x60; | [optional]
 **validate** | **bool**| Whether to return errors on invalid channel name instead of modifying it to meet the specified criteria. | [optional]
 **name** | **string**| Name of channel to join | [optional]

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


## channelsKick

> map[string,object] channelsKick($token, $user, $channel)



Removes a user from a channel.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: slackAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ChannelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token = 'token_example'; // string | Authentication token. Requires scope: `channels:write`
$user = 'user_example'; // string | User to remove from channel.
$channel = 'channel_example'; // string | Channel to remove user from.

try {
    $result = $apiInstance->channelsKick($token, $user, $channel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChannelsApi->channelsKick: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| Authentication token. Requires scope: &#x60;channels:write&#x60; | [optional]
 **user** | **string**| User to remove from channel. | [optional]
 **channel** | **string**| Channel to remove user from. | [optional]

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


## channelsLeave

> map[string,object] channelsLeave($token, $channel)



Leaves a channel.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: slackAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ChannelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token = 'token_example'; // string | Authentication token. Requires scope: `channels:write`
$channel = 'channel_example'; // string | Channel to leave

try {
    $result = $apiInstance->channelsLeave($token, $channel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChannelsApi->channelsLeave: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| Authentication token. Requires scope: &#x60;channels:write&#x60; | [optional]
 **channel** | **string**| Channel to leave | [optional]

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


## channelsList

> map[string,object] channelsList($exclude_members, $cursor, $token, $limit, $exclude_archived)



Lists all channels in a Slack team.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: slackAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ChannelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$exclude_members = True; // bool | Exclude the `members` collection from each `channel`
$cursor = 'cursor_example'; // string | Paginate through collections of data by setting the `cursor` parameter to a `next_cursor` attribute returned by a previous request's `response_metadata`. Default value fetches the first \"page\" of the collection. See [pagination](/docs/pagination) for more detail.
$token = 'token_example'; // string | Authentication token. Requires scope: `channels:read`
$limit = 56; // int | The maximum number of items to return. Fewer than the requested number of items may be returned, even if the end of the users list hasn't been reached.
$exclude_archived = True; // bool | Exclude archived channels from the list

try {
    $result = $apiInstance->channelsList($exclude_members, $cursor, $token, $limit, $exclude_archived);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChannelsApi->channelsList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **exclude_members** | **bool**| Exclude the &#x60;members&#x60; collection from each &#x60;channel&#x60; | [optional]
 **cursor** | **string**| Paginate through collections of data by setting the &#x60;cursor&#x60; parameter to a &#x60;next_cursor&#x60; attribute returned by a previous request&#39;s &#x60;response_metadata&#x60;. Default value fetches the first \&quot;page\&quot; of the collection. See [pagination](/docs/pagination) for more detail. | [optional]
 **token** | **string**| Authentication token. Requires scope: &#x60;channels:read&#x60; | [optional]
 **limit** | **int**| The maximum number of items to return. Fewer than the requested number of items may be returned, even if the end of the users list hasn&#39;t been reached. | [optional]
 **exclude_archived** | **bool**| Exclude archived channels from the list | [optional]

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


## channelsMark

> map[string,object] channelsMark($token, $ts, $channel)



Sets the read cursor in a channel.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: slackAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ChannelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token = 'token_example'; // string | Authentication token. Requires scope: `channels:write`
$ts = 3.4; // float | Timestamp of the most recently seen message.
$channel = 'channel_example'; // string | Channel to set reading cursor in.

try {
    $result = $apiInstance->channelsMark($token, $ts, $channel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChannelsApi->channelsMark: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| Authentication token. Requires scope: &#x60;channels:write&#x60; | [optional]
 **ts** | **float**| Timestamp of the most recently seen message. | [optional]
 **channel** | **string**| Channel to set reading cursor in. | [optional]

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


## channelsRename

> map[string,object] channelsRename($token, $validate, $name, $channel)



Renames a channel.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: slackAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ChannelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token = 'token_example'; // string | Authentication token. Requires scope: `channels:write`
$validate = True; // bool | Whether to return errors on invalid channel name instead of modifying it to meet the specified criteria.
$name = 'name_example'; // string | New name for channel.
$channel = 'channel_example'; // string | Channel to rename

try {
    $result = $apiInstance->channelsRename($token, $validate, $name, $channel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChannelsApi->channelsRename: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| Authentication token. Requires scope: &#x60;channels:write&#x60; | [optional]
 **validate** | **bool**| Whether to return errors on invalid channel name instead of modifying it to meet the specified criteria. | [optional]
 **name** | **string**| New name for channel. | [optional]
 **channel** | **string**| Channel to rename | [optional]

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


## channelsReplies

> map[string,object] channelsReplies($thread_ts, $token, $channel)



Retrieve a thread of messages posted to a channel

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: slackAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ChannelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$thread_ts = 3.4; // float | Unique identifier of a thread's parent message
$token = 'token_example'; // string | Authentication token. Requires scope: `channels:history`
$channel = 'channel_example'; // string | Channel to fetch thread from

try {
    $result = $apiInstance->channelsReplies($thread_ts, $token, $channel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChannelsApi->channelsReplies: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **thread_ts** | **float**| Unique identifier of a thread&#39;s parent message | [optional]
 **token** | **string**| Authentication token. Requires scope: &#x60;channels:history&#x60; | [optional]
 **channel** | **string**| Channel to fetch thread from | [optional]

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


## channelsSetPurpose

> map[string,object] channelsSetPurpose($token, $purpose, $channel)



Sets the purpose for a channel.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: slackAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ChannelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token = 'token_example'; // string | Authentication token. Requires scope: `channels:write`
$purpose = 'purpose_example'; // string | The new purpose
$channel = 'channel_example'; // string | Channel to set the purpose of

try {
    $result = $apiInstance->channelsSetPurpose($token, $purpose, $channel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChannelsApi->channelsSetPurpose: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| Authentication token. Requires scope: &#x60;channels:write&#x60; | [optional]
 **purpose** | **string**| The new purpose | [optional]
 **channel** | **string**| Channel to set the purpose of | [optional]

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


## channelsSetTopic

> map[string,object] channelsSetTopic($token, $topic, $channel)



Sets the topic for a channel.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: slackAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ChannelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token = 'token_example'; // string | Authentication token. Requires scope: `channels:write`
$topic = 'topic_example'; // string | The new topic
$channel = 'channel_example'; // string | Channel to set the topic of

try {
    $result = $apiInstance->channelsSetTopic($token, $topic, $channel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChannelsApi->channelsSetTopic: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| Authentication token. Requires scope: &#x60;channels:write&#x60; | [optional]
 **topic** | **string**| The new topic | [optional]
 **channel** | **string**| Channel to set the topic of | [optional]

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


## channelsUnarchive

> map[string,object] channelsUnarchive($token, $channel)



Unarchives a channel.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: slackAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ChannelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token = 'token_example'; // string | Authentication token. Requires scope: `channels:write`
$channel = 'channel_example'; // string | Channel to unarchive

try {
    $result = $apiInstance->channelsUnarchive($token, $channel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChannelsApi->channelsUnarchive: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| Authentication token. Requires scope: &#x60;channels:write&#x60; | [optional]
 **channel** | **string**| Channel to unarchive | [optional]

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

