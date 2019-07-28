# OpenAPI\Client\ConversationsApi

All URIs are relative to *https://slack.com/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**conversationsArchive**](ConversationsApi.md#conversationsArchive) | **POST** /conversations.archive | 
[**conversationsClose**](ConversationsApi.md#conversationsClose) | **POST** /conversations.close | 
[**conversationsCreate**](ConversationsApi.md#conversationsCreate) | **POST** /conversations.create | 
[**conversationsHistory**](ConversationsApi.md#conversationsHistory) | **GET** /conversations.history | 
[**conversationsInfo**](ConversationsApi.md#conversationsInfo) | **GET** /conversations.info | 
[**conversationsInvite**](ConversationsApi.md#conversationsInvite) | **POST** /conversations.invite | 
[**conversationsJoin**](ConversationsApi.md#conversationsJoin) | **POST** /conversations.join | 
[**conversationsKick**](ConversationsApi.md#conversationsKick) | **POST** /conversations.kick | 
[**conversationsLeave**](ConversationsApi.md#conversationsLeave) | **POST** /conversations.leave | 
[**conversationsList**](ConversationsApi.md#conversationsList) | **GET** /conversations.list | 
[**conversationsMembers**](ConversationsApi.md#conversationsMembers) | **GET** /conversations.members | 
[**conversationsOpen**](ConversationsApi.md#conversationsOpen) | **POST** /conversations.open | 
[**conversationsRename**](ConversationsApi.md#conversationsRename) | **POST** /conversations.rename | 
[**conversationsReplies**](ConversationsApi.md#conversationsReplies) | **GET** /conversations.replies | 
[**conversationsSetPurpose**](ConversationsApi.md#conversationsSetPurpose) | **POST** /conversations.setPurpose | 
[**conversationsSetTopic**](ConversationsApi.md#conversationsSetTopic) | **POST** /conversations.setTopic | 
[**conversationsUnarchive**](ConversationsApi.md#conversationsUnarchive) | **POST** /conversations.unarchive | 



## conversationsArchive

> map[string,object] conversationsArchive($token, $channel)



Archives a conversation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: slackAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ConversationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token = 'token_example'; // string | Authentication token. Requires scope: `conversations:write`
$channel = 'channel_example'; // string | ID of conversation to archive

try {
    $result = $apiInstance->conversationsArchive($token, $channel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConversationsApi->conversationsArchive: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| Authentication token. Requires scope: &#x60;conversations:write&#x60; | [optional]
 **channel** | **string**| ID of conversation to archive | [optional]

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


## conversationsClose

> map[string,object] conversationsClose($token, $channel)



Closes a direct message or multi-person direct message.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: slackAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ConversationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token = 'token_example'; // string | Authentication token. Requires scope: `conversations:write`
$channel = 'channel_example'; // string | Conversation to close.

try {
    $result = $apiInstance->conversationsClose($token, $channel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConversationsApi->conversationsClose: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| Authentication token. Requires scope: &#x60;conversations:write&#x60; | [optional]
 **channel** | **string**| Conversation to close. | [optional]

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


## conversationsCreate

> map[string,object] conversationsCreate($token, $user_ids, $name, $is_private)



Initiates a public or private channel-based conversation

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: slackAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ConversationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token = 'token_example'; // string | Authentication token. Requires scope: `conversations:write`
$user_ids = 'user_ids_example'; // string | **Required** for workspace apps. A list of between 1 and 30 human users that will be added to the newly-created conversation. This argument has no effect when used by classic Slack apps.
$name = 'name_example'; // string | Name of the public or private channel to create
$is_private = True; // bool | Create a private channel instead of a public one

try {
    $result = $apiInstance->conversationsCreate($token, $user_ids, $name, $is_private);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConversationsApi->conversationsCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| Authentication token. Requires scope: &#x60;conversations:write&#x60; | [optional]
 **user_ids** | **string**| **Required** for workspace apps. A list of between 1 and 30 human users that will be added to the newly-created conversation. This argument has no effect when used by classic Slack apps. | [optional]
 **name** | **string**| Name of the public or private channel to create | [optional]
 **is_private** | **bool**| Create a private channel instead of a public one | [optional]

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


## conversationsHistory

> map[string,object] conversationsHistory($inclusive, $cursor, $token, $limit, $oldest, $channel, $latest)



Fetches a conversation's history of messages and events.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: slackAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ConversationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$inclusive = True; // bool | Include messages with latest or oldest timestamp in results only when either timestamp is specified.
$cursor = 'cursor_example'; // string | Paginate through collections of data by setting the `cursor` parameter to a `next_cursor` attribute returned by a previous request's `response_metadata`. Default value fetches the first \"page\" of the collection. See [pagination](/docs/pagination) for more detail.
$token = 'token_example'; // string | Authentication token. Requires scope: `conversations:history`
$limit = 56; // int | The maximum number of items to return. Fewer than the requested number of items may be returned, even if the end of the users list hasn't been reached.
$oldest = 3.4; // float | Start of time range of messages to include in results.
$channel = 'channel_example'; // string | Conversation ID to fetch history for.
$latest = 3.4; // float | End of time range of messages to include in results.

try {
    $result = $apiInstance->conversationsHistory($inclusive, $cursor, $token, $limit, $oldest, $channel, $latest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConversationsApi->conversationsHistory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inclusive** | **bool**| Include messages with latest or oldest timestamp in results only when either timestamp is specified. | [optional]
 **cursor** | **string**| Paginate through collections of data by setting the &#x60;cursor&#x60; parameter to a &#x60;next_cursor&#x60; attribute returned by a previous request&#39;s &#x60;response_metadata&#x60;. Default value fetches the first \&quot;page\&quot; of the collection. See [pagination](/docs/pagination) for more detail. | [optional]
 **token** | **string**| Authentication token. Requires scope: &#x60;conversations:history&#x60; | [optional]
 **limit** | **int**| The maximum number of items to return. Fewer than the requested number of items may be returned, even if the end of the users list hasn&#39;t been reached. | [optional]
 **oldest** | **float**| Start of time range of messages to include in results. | [optional]
 **channel** | **string**| Conversation ID to fetch history for. | [optional]
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


## conversationsInfo

> map[string,object] conversationsInfo($include_num_members, $token, $channel, $include_locale)



Retrieve information about a conversation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: slackAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ConversationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$include_num_members = True; // bool | Set to `true` to include the member count for the specified conversation. Defaults to `false`
$token = 'token_example'; // string | Authentication token. Requires scope: `conversations:read`
$channel = 'channel_example'; // string | Conversation ID to learn more about
$include_locale = True; // bool | Set this to `true` to receive the locale for this conversation. Defaults to `false`

try {
    $result = $apiInstance->conversationsInfo($include_num_members, $token, $channel, $include_locale);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConversationsApi->conversationsInfo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **include_num_members** | **bool**| Set to &#x60;true&#x60; to include the member count for the specified conversation. Defaults to &#x60;false&#x60; | [optional]
 **token** | **string**| Authentication token. Requires scope: &#x60;conversations:read&#x60; | [optional]
 **channel** | **string**| Conversation ID to learn more about | [optional]
 **include_locale** | **bool**| Set this to &#x60;true&#x60; to receive the locale for this conversation. Defaults to &#x60;false&#x60; | [optional]

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


## conversationsInvite

> map[string,object] conversationsInvite($token, $users, $channel)



Invites users to a channel.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: slackAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ConversationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token = 'token_example'; // string | Authentication token. Requires scope: `conversations:write`
$users = 'users_example'; // string | A comma separated list of user IDs. Up to 30 users may be listed.
$channel = 'channel_example'; // string | The ID of the public or private channel to invite user(s) to.

try {
    $result = $apiInstance->conversationsInvite($token, $users, $channel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConversationsApi->conversationsInvite: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| Authentication token. Requires scope: &#x60;conversations:write&#x60; | [optional]
 **users** | **string**| A comma separated list of user IDs. Up to 30 users may be listed. | [optional]
 **channel** | **string**| The ID of the public or private channel to invite user(s) to. | [optional]

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


## conversationsJoin

> map[string,object] conversationsJoin($token, $channel)



Joins an existing conversation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: slackAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ConversationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token = 'token_example'; // string | Authentication token. Requires scope: `channels:write`
$channel = 'channel_example'; // string | ID of conversation to join

try {
    $result = $apiInstance->conversationsJoin($token, $channel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConversationsApi->conversationsJoin: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| Authentication token. Requires scope: &#x60;channels:write&#x60; | [optional]
 **channel** | **string**| ID of conversation to join | [optional]

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


## conversationsKick

> map[string,object] conversationsKick($token, $user, $channel)



Removes a user from a conversation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: slackAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ConversationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token = 'token_example'; // string | Authentication token. Requires scope: `conversations:write`
$user = 'user_example'; // string | User ID to be removed.
$channel = 'channel_example'; // string | ID of conversation to remove user from.

try {
    $result = $apiInstance->conversationsKick($token, $user, $channel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConversationsApi->conversationsKick: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| Authentication token. Requires scope: &#x60;conversations:write&#x60; | [optional]
 **user** | **string**| User ID to be removed. | [optional]
 **channel** | **string**| ID of conversation to remove user from. | [optional]

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


## conversationsLeave

> map[string,object] conversationsLeave($token, $channel)



Leaves a conversation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: slackAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ConversationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token = 'token_example'; // string | Authentication token. Requires scope: `conversations:write`
$channel = 'channel_example'; // string | Conversation to leave

try {
    $result = $apiInstance->conversationsLeave($token, $channel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConversationsApi->conversationsLeave: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| Authentication token. Requires scope: &#x60;conversations:write&#x60; | [optional]
 **channel** | **string**| Conversation to leave | [optional]

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


## conversationsList

> map[string,object] conversationsList($cursor, $token, $limit, $exclude_archived, $types)



Lists all channels in a Slack team.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: slackAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ConversationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cursor = 'cursor_example'; // string | Paginate through collections of data by setting the `cursor` parameter to a `next_cursor` attribute returned by a previous request's `response_metadata`. Default value fetches the first \"page\" of the collection. See [pagination](/docs/pagination) for more detail.
$token = 'token_example'; // string | Authentication token. Requires scope: `conversations:read`
$limit = 56; // int | The maximum number of items to return. Fewer than the requested number of items may be returned, even if the end of the list hasn't been reached. Must be an integer no larger than 1000.
$exclude_archived = True; // bool | Set to `true` to exclude archived channels from the list
$types = 'types_example'; // string | Mix and match channel types by providing a comma-separated list of any combination of `public_channel`, `private_channel`, `mpim`, `im`

try {
    $result = $apiInstance->conversationsList($cursor, $token, $limit, $exclude_archived, $types);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConversationsApi->conversationsList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cursor** | **string**| Paginate through collections of data by setting the &#x60;cursor&#x60; parameter to a &#x60;next_cursor&#x60; attribute returned by a previous request&#39;s &#x60;response_metadata&#x60;. Default value fetches the first \&quot;page\&quot; of the collection. See [pagination](/docs/pagination) for more detail. | [optional]
 **token** | **string**| Authentication token. Requires scope: &#x60;conversations:read&#x60; | [optional]
 **limit** | **int**| The maximum number of items to return. Fewer than the requested number of items may be returned, even if the end of the list hasn&#39;t been reached. Must be an integer no larger than 1000. | [optional]
 **exclude_archived** | **bool**| Set to &#x60;true&#x60; to exclude archived channels from the list | [optional]
 **types** | **string**| Mix and match channel types by providing a comma-separated list of any combination of &#x60;public_channel&#x60;, &#x60;private_channel&#x60;, &#x60;mpim&#x60;, &#x60;im&#x60; | [optional]

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


## conversationsMembers

> map[string,object] conversationsMembers($cursor, $token, $limit, $channel)



Retrieve members of a conversation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: slackAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ConversationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cursor = 'cursor_example'; // string | Paginate through collections of data by setting the `cursor` parameter to a `next_cursor` attribute returned by a previous request's `response_metadata`. Default value fetches the first \"page\" of the collection. See [pagination](/docs/pagination) for more detail.
$token = 'token_example'; // string | Authentication token. Requires scope: `conversations:read`
$limit = 56; // int | The maximum number of items to return. Fewer than the requested number of items may be returned, even if the end of the users list hasn't been reached.
$channel = 'channel_example'; // string | ID of the conversation to retrieve members for

try {
    $result = $apiInstance->conversationsMembers($cursor, $token, $limit, $channel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConversationsApi->conversationsMembers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cursor** | **string**| Paginate through collections of data by setting the &#x60;cursor&#x60; parameter to a &#x60;next_cursor&#x60; attribute returned by a previous request&#39;s &#x60;response_metadata&#x60;. Default value fetches the first \&quot;page\&quot; of the collection. See [pagination](/docs/pagination) for more detail. | [optional]
 **token** | **string**| Authentication token. Requires scope: &#x60;conversations:read&#x60; | [optional]
 **limit** | **int**| The maximum number of items to return. Fewer than the requested number of items may be returned, even if the end of the users list hasn&#39;t been reached. | [optional]
 **channel** | **string**| ID of the conversation to retrieve members for | [optional]

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


## conversationsOpen

> map[string,object] conversationsOpen($token, $return_im, $users, $channel)



Opens or resumes a direct message or multi-person direct message.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: slackAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ConversationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token = 'token_example'; // string | Authentication token. Requires scope: `conversations:write`
$return_im = True; // bool | Boolean, indicates you want the full IM channel definition in the response.
$users = 'users_example'; // string | Comma separated lists of users. If only one user is included, this creates a 1:1 DM.  The ordering of the users is preserved whenever a multi-person direct message is returned. Supply a `channel` when not supplying `users`.
$channel = 'channel_example'; // string | Resume a conversation by supplying an `im` or `mpim`'s ID. Or provide the `users` field instead.

try {
    $result = $apiInstance->conversationsOpen($token, $return_im, $users, $channel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConversationsApi->conversationsOpen: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| Authentication token. Requires scope: &#x60;conversations:write&#x60; | [optional]
 **return_im** | **bool**| Boolean, indicates you want the full IM channel definition in the response. | [optional]
 **users** | **string**| Comma separated lists of users. If only one user is included, this creates a 1:1 DM.  The ordering of the users is preserved whenever a multi-person direct message is returned. Supply a &#x60;channel&#x60; when not supplying &#x60;users&#x60;. | [optional]
 **channel** | **string**| Resume a conversation by supplying an &#x60;im&#x60; or &#x60;mpim&#x60;&#39;s ID. Or provide the &#x60;users&#x60; field instead. | [optional]

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


## conversationsRename

> map[string,object] conversationsRename($token, $name, $channel)



Renames a conversation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: slackAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ConversationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token = 'token_example'; // string | Authentication token. Requires scope: `conversations:write`
$name = 'name_example'; // string | New name for conversation.
$channel = 'channel_example'; // string | ID of conversation to rename

try {
    $result = $apiInstance->conversationsRename($token, $name, $channel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConversationsApi->conversationsRename: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| Authentication token. Requires scope: &#x60;conversations:write&#x60; | [optional]
 **name** | **string**| New name for conversation. | [optional]
 **channel** | **string**| ID of conversation to rename | [optional]

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


## conversationsReplies

> map[string,object] conversationsReplies($inclusive, $ts, $cursor, $token, $limit, $oldest, $channel, $latest)



Retrieve a thread of messages posted to a conversation

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: slackAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ConversationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$inclusive = True; // bool | Include messages with latest or oldest timestamp in results only when either timestamp is specified.
$ts = 3.4; // float | Unique identifier of a thread's parent message.
$cursor = 'cursor_example'; // string | Paginate through collections of data by setting the `cursor` parameter to a `next_cursor` attribute returned by a previous request's `response_metadata`. Default value fetches the first \"page\" of the collection. See [pagination](/docs/pagination) for more detail.
$token = 'token_example'; // string | Authentication token. Requires scope: `conversations:history`
$limit = 56; // int | The maximum number of items to return. Fewer than the requested number of items may be returned, even if the end of the users list hasn't been reached.
$oldest = 3.4; // float | Start of time range of messages to include in results.
$channel = 'channel_example'; // string | Conversation ID to fetch thread from.
$latest = 3.4; // float | End of time range of messages to include in results.

try {
    $result = $apiInstance->conversationsReplies($inclusive, $ts, $cursor, $token, $limit, $oldest, $channel, $latest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConversationsApi->conversationsReplies: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inclusive** | **bool**| Include messages with latest or oldest timestamp in results only when either timestamp is specified. | [optional]
 **ts** | **float**| Unique identifier of a thread&#39;s parent message. | [optional]
 **cursor** | **string**| Paginate through collections of data by setting the &#x60;cursor&#x60; parameter to a &#x60;next_cursor&#x60; attribute returned by a previous request&#39;s &#x60;response_metadata&#x60;. Default value fetches the first \&quot;page\&quot; of the collection. See [pagination](/docs/pagination) for more detail. | [optional]
 **token** | **string**| Authentication token. Requires scope: &#x60;conversations:history&#x60; | [optional]
 **limit** | **int**| The maximum number of items to return. Fewer than the requested number of items may be returned, even if the end of the users list hasn&#39;t been reached. | [optional]
 **oldest** | **float**| Start of time range of messages to include in results. | [optional]
 **channel** | **string**| Conversation ID to fetch thread from. | [optional]
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


## conversationsSetPurpose

> map[string,object] conversationsSetPurpose($token, $purpose, $channel)



Sets the purpose for a conversation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: slackAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ConversationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token = 'token_example'; // string | Authentication token. Requires scope: `conversations:write`
$purpose = 'purpose_example'; // string | A new, specialer purpose
$channel = 'channel_example'; // string | Conversation to set the purpose of

try {
    $result = $apiInstance->conversationsSetPurpose($token, $purpose, $channel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConversationsApi->conversationsSetPurpose: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| Authentication token. Requires scope: &#x60;conversations:write&#x60; | [optional]
 **purpose** | **string**| A new, specialer purpose | [optional]
 **channel** | **string**| Conversation to set the purpose of | [optional]

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


## conversationsSetTopic

> map[string,object] conversationsSetTopic($token, $topic, $channel)



Sets the topic for a conversation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: slackAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ConversationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token = 'token_example'; // string | Authentication token. Requires scope: `conversations:write`
$topic = 'topic_example'; // string | The new topic string. Does not support formatting or linkification.
$channel = 'channel_example'; // string | Conversation to set the topic of

try {
    $result = $apiInstance->conversationsSetTopic($token, $topic, $channel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConversationsApi->conversationsSetTopic: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| Authentication token. Requires scope: &#x60;conversations:write&#x60; | [optional]
 **topic** | **string**| The new topic string. Does not support formatting or linkification. | [optional]
 **channel** | **string**| Conversation to set the topic of | [optional]

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


## conversationsUnarchive

> map[string,object] conversationsUnarchive($token, $channel)



Reverses conversation archival.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: slackAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ConversationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token = 'token_example'; // string | Authentication token. Requires scope: `conversations:write`
$channel = 'channel_example'; // string | ID of conversation to unarchive

try {
    $result = $apiInstance->conversationsUnarchive($token, $channel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConversationsApi->conversationsUnarchive: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| Authentication token. Requires scope: &#x60;conversations:write&#x60; | [optional]
 **channel** | **string**| ID of conversation to unarchive | [optional]

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

