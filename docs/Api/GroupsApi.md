# OpenAPI\Client\GroupsApi

All URIs are relative to *https://slack.com/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**groupsArchive**](GroupsApi.md#groupsArchive) | **POST** /groups.archive | 
[**groupsCreate**](GroupsApi.md#groupsCreate) | **POST** /groups.create | 
[**groupsCreateChild**](GroupsApi.md#groupsCreateChild) | **POST** /groups.createChild | 
[**groupsHistory**](GroupsApi.md#groupsHistory) | **GET** /groups.history | 
[**groupsInfo**](GroupsApi.md#groupsInfo) | **GET** /groups.info | 
[**groupsInvite**](GroupsApi.md#groupsInvite) | **POST** /groups.invite | 
[**groupsKick**](GroupsApi.md#groupsKick) | **POST** /groups.kick | 
[**groupsLeave**](GroupsApi.md#groupsLeave) | **POST** /groups.leave | 
[**groupsList**](GroupsApi.md#groupsList) | **GET** /groups.list | 
[**groupsMark**](GroupsApi.md#groupsMark) | **POST** /groups.mark | 
[**groupsOpen**](GroupsApi.md#groupsOpen) | **POST** /groups.open | 
[**groupsRename**](GroupsApi.md#groupsRename) | **POST** /groups.rename | 
[**groupsReplies**](GroupsApi.md#groupsReplies) | **GET** /groups.replies | 
[**groupsSetPurpose**](GroupsApi.md#groupsSetPurpose) | **POST** /groups.setPurpose | 
[**groupsSetTopic**](GroupsApi.md#groupsSetTopic) | **POST** /groups.setTopic | 
[**groupsUnarchive**](GroupsApi.md#groupsUnarchive) | **POST** /groups.unarchive | 



## groupsArchive

> map[string,object] groupsArchive($token, $channel)



Archives a private channel.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: slackAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token = 'token_example'; // string | Authentication token. Requires scope: `groups:write`
$channel = 'channel_example'; // string | Private channel to archive

try {
    $result = $apiInstance->groupsArchive($token, $channel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->groupsArchive: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| Authentication token. Requires scope: &#x60;groups:write&#x60; | [optional]
 **channel** | **string**| Private channel to archive | [optional]

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


## groupsCreate

> map[string,object] groupsCreate($token, $validate, $name)



Creates a private channel.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: slackAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token = 'token_example'; // string | Authentication token. Requires scope: `groups:write`
$validate = True; // bool | Whether to return errors on invalid channel name instead of modifying it to meet the specified criteria.
$name = 'name_example'; // string | Name of private channel to create

try {
    $result = $apiInstance->groupsCreate($token, $validate, $name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->groupsCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| Authentication token. Requires scope: &#x60;groups:write&#x60; | [optional]
 **validate** | **bool**| Whether to return errors on invalid channel name instead of modifying it to meet the specified criteria. | [optional]
 **name** | **string**| Name of private channel to create | [optional]

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


## groupsCreateChild

> map[string,object] groupsCreateChild($token, $channel)



Clones and archives a private channel.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: slackAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token = 'token_example'; // string | Authentication token. Requires scope: `groups:write`
$channel = 'channel_example'; // string | Private channel to clone and archive.

try {
    $result = $apiInstance->groupsCreateChild($token, $channel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->groupsCreateChild: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| Authentication token. Requires scope: &#x60;groups:write&#x60; | [optional]
 **channel** | **string**| Private channel to clone and archive. | [optional]

### Return type

**map[string,object]**

### Authorization

[slackAuth](../../README.md#slackAuth)

### HTTP request headers

- **Content-Type**: application/x-www-form-urlencoded
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## groupsHistory

> map[string,object] groupsHistory($count, $unreads, $inclusive, $token, $oldest, $channel, $latest)



Fetches history of messages and events from a private channel.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: slackAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$count = 56; // int | Number of messages to return, between 1 and 1000.
$unreads = True; // bool | Include `unread_count_display` in the output?
$inclusive = True; // bool | Include messages with latest or oldest timestamp in results.
$token = 'token_example'; // string | Authentication token. Requires scope: `groups:history`
$oldest = 3.4; // float | Start of time range of messages to include in results.
$channel = 'channel_example'; // string | Private channel to fetch history for.
$latest = 3.4; // float | End of time range of messages to include in results.

try {
    $result = $apiInstance->groupsHistory($count, $unreads, $inclusive, $token, $oldest, $channel, $latest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->groupsHistory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **count** | **int**| Number of messages to return, between 1 and 1000. | [optional]
 **unreads** | **bool**| Include &#x60;unread_count_display&#x60; in the output? | [optional]
 **inclusive** | **bool**| Include messages with latest or oldest timestamp in results. | [optional]
 **token** | **string**| Authentication token. Requires scope: &#x60;groups:history&#x60; | [optional]
 **oldest** | **float**| Start of time range of messages to include in results. | [optional]
 **channel** | **string**| Private channel to fetch history for. | [optional]
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


## groupsInfo

> map[string,object] groupsInfo($token, $include_locale, $channel)



Gets information about a private channel.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: slackAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token = 'token_example'; // string | Authentication token. Requires scope: `groups:read`
$include_locale = True; // bool | Set this to `true` to receive the locale for this group. Defaults to `false`
$channel = 'channel_example'; // string | Private channel to get info on

try {
    $result = $apiInstance->groupsInfo($token, $include_locale, $channel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->groupsInfo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| Authentication token. Requires scope: &#x60;groups:read&#x60; | [optional]
 **include_locale** | **bool**| Set this to &#x60;true&#x60; to receive the locale for this group. Defaults to &#x60;false&#x60; | [optional]
 **channel** | **string**| Private channel to get info on | [optional]

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


## groupsInvite

> map[string,object] groupsInvite($token, $user, $channel)



Invites a user to a private channel.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: slackAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token = 'token_example'; // string | Authentication token. Requires scope: `groups:write`
$user = 'user_example'; // string | User to invite.
$channel = 'channel_example'; // string | Private channel to invite user to.

try {
    $result = $apiInstance->groupsInvite($token, $user, $channel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->groupsInvite: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| Authentication token. Requires scope: &#x60;groups:write&#x60; | [optional]
 **user** | **string**| User to invite. | [optional]
 **channel** | **string**| Private channel to invite user to. | [optional]

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


## groupsKick

> map[string,object] groupsKick($token, $user, $channel)



Removes a user from a private channel.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: slackAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token = 'token_example'; // string | Authentication token. Requires scope: `groups:write`
$user = 'user_example'; // string | User to remove from private channel.
$channel = 'channel_example'; // string | Private channel to remove user from.

try {
    $result = $apiInstance->groupsKick($token, $user, $channel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->groupsKick: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| Authentication token. Requires scope: &#x60;groups:write&#x60; | [optional]
 **user** | **string**| User to remove from private channel. | [optional]
 **channel** | **string**| Private channel to remove user from. | [optional]

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


## groupsLeave

> map[string,object] groupsLeave($token, $channel)



Leaves a private channel.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: slackAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token = 'token_example'; // string | Authentication token. Requires scope: `groups:write`
$channel = 'channel_example'; // string | Private channel to leave

try {
    $result = $apiInstance->groupsLeave($token, $channel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->groupsLeave: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| Authentication token. Requires scope: &#x60;groups:write&#x60; | [optional]
 **channel** | **string**| Private channel to leave | [optional]

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


## groupsList

> map[string,object] groupsList($cursor, $exclude_members, $token, $exclude_archived, $limit)



Lists private channels that the calling user has access to.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: slackAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cursor = 'cursor_example'; // string | Parameter for pagination. Set `cursor` equal to the `next_cursor` attribute returned by the previous request's `response_metadata`. This parameter is optional, but pagination is mandatory: the default value simply fetches the first \"page\" of the collection. See [pagination](/docs/pagination) for more details.
$exclude_members = True; // bool | Exclude the `members` from each `group`
$token = 'token_example'; // string | Authentication token. Requires scope: `groups:read`
$exclude_archived = True; // bool | Don't return archived private channels.
$limit = 56; // int | The maximum number of items to return. Fewer than the requested number of items may be returned, even if the end of the list hasn't been reached.

try {
    $result = $apiInstance->groupsList($cursor, $exclude_members, $token, $exclude_archived, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->groupsList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cursor** | **string**| Parameter for pagination. Set &#x60;cursor&#x60; equal to the &#x60;next_cursor&#x60; attribute returned by the previous request&#39;s &#x60;response_metadata&#x60;. This parameter is optional, but pagination is mandatory: the default value simply fetches the first \&quot;page\&quot; of the collection. See [pagination](/docs/pagination) for more details. | [optional]
 **exclude_members** | **bool**| Exclude the &#x60;members&#x60; from each &#x60;group&#x60; | [optional]
 **token** | **string**| Authentication token. Requires scope: &#x60;groups:read&#x60; | [optional]
 **exclude_archived** | **bool**| Don&#39;t return archived private channels. | [optional]
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


## groupsMark

> map[string,object] groupsMark($token, $ts, $channel)



Sets the read cursor in a private channel.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: slackAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token = 'token_example'; // string | Authentication token. Requires scope: `groups:write`
$ts = 3.4; // float | Timestamp of the most recently seen message.
$channel = 'channel_example'; // string | Private channel to set reading cursor in.

try {
    $result = $apiInstance->groupsMark($token, $ts, $channel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->groupsMark: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| Authentication token. Requires scope: &#x60;groups:write&#x60; | [optional]
 **ts** | **float**| Timestamp of the most recently seen message. | [optional]
 **channel** | **string**| Private channel to set reading cursor in. | [optional]

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


## groupsOpen

> map[string,object] groupsOpen($token, $channel)



Opens a private channel.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: slackAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token = 'token_example'; // string | Authentication token. Requires scope: `groups:write`
$channel = 'channel_example'; // string | Private channel to open.

try {
    $result = $apiInstance->groupsOpen($token, $channel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->groupsOpen: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| Authentication token. Requires scope: &#x60;groups:write&#x60; | [optional]
 **channel** | **string**| Private channel to open. | [optional]

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


## groupsRename

> map[string,object] groupsRename($token, $validate, $name, $channel)



Renames a private channel.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: slackAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token = 'token_example'; // string | Authentication token. Requires scope: `groups:write`
$validate = True; // bool | Whether to return errors on invalid channel name instead of modifying it to meet the specified criteria.
$name = 'name_example'; // string | New name for private channel.
$channel = 'channel_example'; // string | Private channel to rename

try {
    $result = $apiInstance->groupsRename($token, $validate, $name, $channel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->groupsRename: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| Authentication token. Requires scope: &#x60;groups:write&#x60; | [optional]
 **validate** | **bool**| Whether to return errors on invalid channel name instead of modifying it to meet the specified criteria. | [optional]
 **name** | **string**| New name for private channel. | [optional]
 **channel** | **string**| Private channel to rename | [optional]

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


## groupsReplies

> map[string,object] groupsReplies($thread_ts, $token, $channel)



Retrieve a thread of messages posted to a private channel

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: slackAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$thread_ts = 3.4; // float | Unique identifier of a thread's parent message
$token = 'token_example'; // string | Authentication token. Requires scope: `groups:history`
$channel = 'channel_example'; // string | Private channel to fetch thread from

try {
    $result = $apiInstance->groupsReplies($thread_ts, $token, $channel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->groupsReplies: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **thread_ts** | **float**| Unique identifier of a thread&#39;s parent message | [optional]
 **token** | **string**| Authentication token. Requires scope: &#x60;groups:history&#x60; | [optional]
 **channel** | **string**| Private channel to fetch thread from | [optional]

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


## groupsSetPurpose

> map[string,object] groupsSetPurpose($token, $purpose, $channel)



Sets the purpose for a private channel.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: slackAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token = 'token_example'; // string | Authentication token. Requires scope: `groups:write`
$purpose = 'purpose_example'; // string | The new purpose
$channel = 'channel_example'; // string | Private channel to set the purpose of

try {
    $result = $apiInstance->groupsSetPurpose($token, $purpose, $channel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->groupsSetPurpose: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| Authentication token. Requires scope: &#x60;groups:write&#x60; | [optional]
 **purpose** | **string**| The new purpose | [optional]
 **channel** | **string**| Private channel to set the purpose of | [optional]

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


## groupsSetTopic

> map[string,object] groupsSetTopic($token, $topic, $channel)



Sets the topic for a private channel.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: slackAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token = 'token_example'; // string | Authentication token. Requires scope: `groups:write`
$topic = 'topic_example'; // string | The new topic
$channel = 'channel_example'; // string | Private channel to set the topic of

try {
    $result = $apiInstance->groupsSetTopic($token, $topic, $channel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->groupsSetTopic: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| Authentication token. Requires scope: &#x60;groups:write&#x60; | [optional]
 **topic** | **string**| The new topic | [optional]
 **channel** | **string**| Private channel to set the topic of | [optional]

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


## groupsUnarchive

> map[string,object] groupsUnarchive($token, $channel)



Unarchives a private channel.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: slackAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token = 'token_example'; // string | Authentication token. Requires scope: `groups:write`
$channel = 'channel_example'; // string | Private channel to unarchive

try {
    $result = $apiInstance->groupsUnarchive($token, $channel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->groupsUnarchive: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| Authentication token. Requires scope: &#x60;groups:write&#x60; | [optional]
 **channel** | **string**| Private channel to unarchive | [optional]

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

