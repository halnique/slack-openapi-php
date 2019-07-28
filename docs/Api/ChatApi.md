# OpenAPI\Client\ChatApi

All URIs are relative to *https://slack.com/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**chatDelete**](ChatApi.md#chatDelete) | **POST** /chat.delete | 
[**chatDeleteScheduledMessage**](ChatApi.md#chatDeleteScheduledMessage) | **POST** /chat.deleteScheduledMessage | 
[**chatGetPermalink**](ChatApi.md#chatGetPermalink) | **GET** /chat.getPermalink | 
[**chatMeMessage**](ChatApi.md#chatMeMessage) | **POST** /chat.meMessage | 
[**chatPostEphemeral**](ChatApi.md#chatPostEphemeral) | **POST** /chat.postEphemeral | 
[**chatPostMessage**](ChatApi.md#chatPostMessage) | **POST** /chat.postMessage | 
[**chatScheduleMessage**](ChatApi.md#chatScheduleMessage) | **POST** /chat.scheduleMessage | 
[**chatScheduledMessagesList**](ChatApi.md#chatScheduledMessagesList) | **GET** /chat.scheduledMessages.list | 
[**chatUnfurl**](ChatApi.md#chatUnfurl) | **POST** /chat.unfurl | 
[**chatUpdate**](ChatApi.md#chatUpdate) | **POST** /chat.update | 



## chatDelete

> map[string,object] chatDelete($token, $as_user, $ts, $channel)



Deletes a message.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: slackAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ChatApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token = 'token_example'; // string | Authentication token. Requires scope: `chat:write`
$as_user = True; // bool | Pass true to delete the message as the authed user with `chat:write:user` scope. [Bot users](/bot-users) in this context are considered authed users. If unused or false, the message will be deleted with `chat:write:bot` scope.
$ts = 3.4; // float | Timestamp of the message to be deleted.
$channel = 'channel_example'; // string | Channel containing the message to be deleted.

try {
    $result = $apiInstance->chatDelete($token, $as_user, $ts, $channel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChatApi->chatDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| Authentication token. Requires scope: &#x60;chat:write&#x60; | [optional]
 **as_user** | **bool**| Pass true to delete the message as the authed user with &#x60;chat:write:user&#x60; scope. [Bot users](/bot-users) in this context are considered authed users. If unused or false, the message will be deleted with &#x60;chat:write:bot&#x60; scope. | [optional]
 **ts** | **float**| Timestamp of the message to be deleted. | [optional]
 **channel** | **string**| Channel containing the message to be deleted. | [optional]

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


## chatDeleteScheduledMessage

> map[string,object] chatDeleteScheduledMessage()



Deletes a pending scheduled message from the queue.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: slackAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ChatApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->chatDeleteScheduledMessage();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChatApi->chatDeleteScheduledMessage: ', $e->getMessage(), PHP_EOL;
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


## chatGetPermalink

> map[string,object] chatGetPermalink($token, $message_ts, $channel)



Retrieve a permalink URL for a specific extant message

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: slackAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ChatApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token = 'token_example'; // string | Authentication token. Requires scope: `none`
$message_ts = 3.4; // float | A message's `ts` value, uniquely identifying it within a channel
$channel = 'channel_example'; // string | The ID of the conversation or channel containing the message

try {
    $result = $apiInstance->chatGetPermalink($token, $message_ts, $channel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChatApi->chatGetPermalink: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| Authentication token. Requires scope: &#x60;none&#x60; | [optional]
 **message_ts** | **float**| A message&#39;s &#x60;ts&#x60; value, uniquely identifying it within a channel | [optional]
 **channel** | **string**| The ID of the conversation or channel containing the message | [optional]

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


## chatMeMessage

> map[string,object] chatMeMessage($token, $text, $channel)



Share a me message into a channel.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: slackAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ChatApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token = 'token_example'; // string | Authentication token. Requires scope: `chat:write:user`
$text = 'text_example'; // string | Text of the message to send.
$channel = 'channel_example'; // string | Channel to send message to. Can be a public channel, private group or IM channel. Can be an encoded ID, or a name.

try {
    $result = $apiInstance->chatMeMessage($token, $text, $channel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChatApi->chatMeMessage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| Authentication token. Requires scope: &#x60;chat:write:user&#x60; | [optional]
 **text** | **string**| Text of the message to send. | [optional]
 **channel** | **string**| Channel to send message to. Can be a public channel, private group or IM channel. Can be an encoded ID, or a name. | [optional]

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


## chatPostEphemeral

> map[string,object] chatPostEphemeral($token, $thread_ts, $blocks, $attachments, $as_user, $parse, $text, $user, $link_names, $channel)



Sends an ephemeral message to a user in a channel.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: slackAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ChatApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token = 'token_example'; // string | Authentication token. Requires scope: `chat:write`
$thread_ts = 3.4; // float | Provide another message's `ts` value to post this message in a thread. Avoid using a reply's `ts` value; use its parent's value instead. Ephemeral messages in threads are only shown if there is already an active thread.
$blocks = 'blocks_example'; // string | A JSON-based array of structured blocks, presented as a URL-encoded string.
$attachments = 'attachments_example'; // string | A JSON-based array of structured attachments, presented as a URL-encoded string.
$as_user = True; // bool | Pass true to post the message as the authed user. Defaults to true if the chat:write:bot scope is not included. Otherwise, defaults to false.
$parse = 'parse_example'; // string | Change how messages are treated. Defaults to `none`. See [below](#formatting).
$text = 'text_example'; // string | Text of the message to send. See below for an explanation of [formatting](#formatting). This field is usually required, unless you're providing only `attachments` instead.
$user = 'user_example'; // string | `id` of the user who will receive the ephemeral message. The user should be in the channel specified by the `channel` argument.
$link_names = True; // bool | Find and link channel names and usernames.
$channel = 'channel_example'; // string | Channel, private group, or IM channel to send message to. Can be an encoded ID, or a name.

try {
    $result = $apiInstance->chatPostEphemeral($token, $thread_ts, $blocks, $attachments, $as_user, $parse, $text, $user, $link_names, $channel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChatApi->chatPostEphemeral: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| Authentication token. Requires scope: &#x60;chat:write&#x60; | [optional]
 **thread_ts** | **float**| Provide another message&#39;s &#x60;ts&#x60; value to post this message in a thread. Avoid using a reply&#39;s &#x60;ts&#x60; value; use its parent&#39;s value instead. Ephemeral messages in threads are only shown if there is already an active thread. | [optional]
 **blocks** | **string**| A JSON-based array of structured blocks, presented as a URL-encoded string. | [optional]
 **attachments** | **string**| A JSON-based array of structured attachments, presented as a URL-encoded string. | [optional]
 **as_user** | **bool**| Pass true to post the message as the authed user. Defaults to true if the chat:write:bot scope is not included. Otherwise, defaults to false. | [optional]
 **parse** | **string**| Change how messages are treated. Defaults to &#x60;none&#x60;. See [below](#formatting). | [optional]
 **text** | **string**| Text of the message to send. See below for an explanation of [formatting](#formatting). This field is usually required, unless you&#39;re providing only &#x60;attachments&#x60; instead. | [optional]
 **user** | **string**| &#x60;id&#x60; of the user who will receive the ephemeral message. The user should be in the channel specified by the &#x60;channel&#x60; argument. | [optional]
 **link_names** | **bool**| Find and link channel names and usernames. | [optional]
 **channel** | **string**| Channel, private group, or IM channel to send message to. Can be an encoded ID, or a name. | [optional]

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


## chatPostMessage

> map[string,object] chatPostMessage($token, $attachments, $unfurl_links, $text, $unfurl_media, $parse, $as_user, $mrkdwn, $channel, $username, $blocks, $icon_emoji, $link_names, $reply_broadcast, $thread_ts, $icon_url)



Sends a message to a channel.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: slackAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ChatApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token = 'token_example'; // string | Authentication token. Requires scope: `chat:write`
$attachments = 'attachments_example'; // string | A JSON-based array of structured attachments, presented as a URL-encoded string.
$unfurl_links = True; // bool | Pass true to enable unfurling of primarily text-based content.
$text = 'text_example'; // string | Text of the message to send. See below for an explanation of [formatting](#formatting). This field is usually required, unless you're providing only `attachments` instead. Provide no more than 40,000 characters or [risk truncation](/changelog/2018-04-truncating-really-long-messages).
$unfurl_media = True; // bool | Pass false to disable unfurling of media content.
$parse = 'parse_example'; // string | Change how messages are treated. Defaults to `none`. See [below](#formatting).
$as_user = True; // bool | Pass true to post the message as the authed user, instead of as a bot. Defaults to false. See [authorship](#authorship) below.
$mrkdwn = True; // bool | Disable Slack markup parsing by setting to `false`. Enabled by default.
$channel = 'channel_example'; // string | Channel, private group, or IM channel to send message to. Can be an encoded ID, or a name. See [below](#channels) for more details.
$username = 'username_example'; // string | Set your bot's user name. Must be used in conjunction with `as_user` set to false, otherwise ignored. See [authorship](#authorship) below.
$blocks = 'blocks_example'; // string | A JSON-based array of structured blocks, presented as a URL-encoded string.
$icon_emoji = 'icon_emoji_example'; // string | Emoji to use as the icon for this message. Overrides `icon_url`. Must be used in conjunction with `as_user` set to `false`, otherwise ignored. See [authorship](#authorship) below.
$link_names = True; // bool | Find and link channel names and usernames.
$reply_broadcast = True; // bool | Used in conjunction with `thread_ts` and indicates whether reply should be made visible to everyone in the channel or conversation. Defaults to `false`.
$thread_ts = 3.4; // float | Provide another message's `ts` value to make this message a reply. Avoid using a reply's `ts` value; use its parent instead.
$icon_url = 'icon_url_example'; // string | URL to an image to use as the icon for this message. Must be used in conjunction with `as_user` set to false, otherwise ignored. See [authorship](#authorship) below.

try {
    $result = $apiInstance->chatPostMessage($token, $attachments, $unfurl_links, $text, $unfurl_media, $parse, $as_user, $mrkdwn, $channel, $username, $blocks, $icon_emoji, $link_names, $reply_broadcast, $thread_ts, $icon_url);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChatApi->chatPostMessage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| Authentication token. Requires scope: &#x60;chat:write&#x60; | [optional]
 **attachments** | **string**| A JSON-based array of structured attachments, presented as a URL-encoded string. | [optional]
 **unfurl_links** | **bool**| Pass true to enable unfurling of primarily text-based content. | [optional]
 **text** | **string**| Text of the message to send. See below for an explanation of [formatting](#formatting). This field is usually required, unless you&#39;re providing only &#x60;attachments&#x60; instead. Provide no more than 40,000 characters or [risk truncation](/changelog/2018-04-truncating-really-long-messages). | [optional]
 **unfurl_media** | **bool**| Pass false to disable unfurling of media content. | [optional]
 **parse** | **string**| Change how messages are treated. Defaults to &#x60;none&#x60;. See [below](#formatting). | [optional]
 **as_user** | **bool**| Pass true to post the message as the authed user, instead of as a bot. Defaults to false. See [authorship](#authorship) below. | [optional]
 **mrkdwn** | **bool**| Disable Slack markup parsing by setting to &#x60;false&#x60;. Enabled by default. | [optional]
 **channel** | **string**| Channel, private group, or IM channel to send message to. Can be an encoded ID, or a name. See [below](#channels) for more details. | [optional]
 **username** | **string**| Set your bot&#39;s user name. Must be used in conjunction with &#x60;as_user&#x60; set to false, otherwise ignored. See [authorship](#authorship) below. | [optional]
 **blocks** | **string**| A JSON-based array of structured blocks, presented as a URL-encoded string. | [optional]
 **icon_emoji** | **string**| Emoji to use as the icon for this message. Overrides &#x60;icon_url&#x60;. Must be used in conjunction with &#x60;as_user&#x60; set to &#x60;false&#x60;, otherwise ignored. See [authorship](#authorship) below. | [optional]
 **link_names** | **bool**| Find and link channel names and usernames. | [optional]
 **reply_broadcast** | **bool**| Used in conjunction with &#x60;thread_ts&#x60; and indicates whether reply should be made visible to everyone in the channel or conversation. Defaults to &#x60;false&#x60;. | [optional]
 **thread_ts** | **float**| Provide another message&#39;s &#x60;ts&#x60; value to make this message a reply. Avoid using a reply&#39;s &#x60;ts&#x60; value; use its parent instead. | [optional]
 **icon_url** | **string**| URL to an image to use as the icon for this message. Must be used in conjunction with &#x60;as_user&#x60; set to false, otherwise ignored. See [authorship](#authorship) below. | [optional]

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


## chatScheduleMessage

> map[string,object] chatScheduleMessage($token, $thread_ts, $blocks, $attachments, $unfurl_links, $text, $link_names, $unfurl_media, $parse, $as_user, $post_at, $channel, $reply_broadcast)



Schedules a message to be sent to a channel.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: slackAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ChatApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token = 'token_example'; // string | Authentication token. Requires scope: `chat:write`
$thread_ts = 3.4; // float | Provide another message's `ts` value to make this message a reply. Avoid using a reply's `ts` value; use its parent instead.
$blocks = 'blocks_example'; // string | A JSON-based array of structured blocks, presented as a URL-encoded string.
$attachments = 'attachments_example'; // string | A JSON-based array of structured attachments, presented as a URL-encoded string.
$unfurl_links = True; // bool | Pass true to enable unfurling of primarily text-based content.
$text = 'text_example'; // string | Text of the message to send. See below for an explanation of [formatting](#formatting). This field is usually required, unless you're providing only `attachments` instead. Provide no more than 40,000 characters or [risk truncation](/changelog/2018-04-truncating-really-long-messages).
$link_names = True; // bool | Find and link channel names and usernames.
$unfurl_media = True; // bool | Pass false to disable unfurling of media content.
$parse = 'parse_example'; // string | Change how messages are treated. Defaults to `none`. See [below](#formatting).
$as_user = True; // bool | Pass true to post the message as the authed user, instead of as a bot. Defaults to false. See [authorship](#authorship) below.
$post_at = 'post_at_example'; // string | Unix EPOCH timestamp of time in future to send the message.
$channel = 'channel_example'; // string | Channel, private group, or DM channel to send message to. Can be an encoded ID, or a name. See [below](#channels) for more details.
$reply_broadcast = True; // bool | Used in conjunction with `thread_ts` and indicates whether reply should be made visible to everyone in the channel or conversation. Defaults to `false`.

try {
    $result = $apiInstance->chatScheduleMessage($token, $thread_ts, $blocks, $attachments, $unfurl_links, $text, $link_names, $unfurl_media, $parse, $as_user, $post_at, $channel, $reply_broadcast);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChatApi->chatScheduleMessage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| Authentication token. Requires scope: &#x60;chat:write&#x60; | [optional]
 **thread_ts** | **float**| Provide another message&#39;s &#x60;ts&#x60; value to make this message a reply. Avoid using a reply&#39;s &#x60;ts&#x60; value; use its parent instead. | [optional]
 **blocks** | **string**| A JSON-based array of structured blocks, presented as a URL-encoded string. | [optional]
 **attachments** | **string**| A JSON-based array of structured attachments, presented as a URL-encoded string. | [optional]
 **unfurl_links** | **bool**| Pass true to enable unfurling of primarily text-based content. | [optional]
 **text** | **string**| Text of the message to send. See below for an explanation of [formatting](#formatting). This field is usually required, unless you&#39;re providing only &#x60;attachments&#x60; instead. Provide no more than 40,000 characters or [risk truncation](/changelog/2018-04-truncating-really-long-messages). | [optional]
 **link_names** | **bool**| Find and link channel names and usernames. | [optional]
 **unfurl_media** | **bool**| Pass false to disable unfurling of media content. | [optional]
 **parse** | **string**| Change how messages are treated. Defaults to &#x60;none&#x60;. See [below](#formatting). | [optional]
 **as_user** | **bool**| Pass true to post the message as the authed user, instead of as a bot. Defaults to false. See [authorship](#authorship) below. | [optional]
 **post_at** | **string**| Unix EPOCH timestamp of time in future to send the message. | [optional]
 **channel** | **string**| Channel, private group, or DM channel to send message to. Can be an encoded ID, or a name. See [below](#channels) for more details. | [optional]
 **reply_broadcast** | **bool**| Used in conjunction with &#x60;thread_ts&#x60; and indicates whether reply should be made visible to everyone in the channel or conversation. Defaults to &#x60;false&#x60;. | [optional]

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


## chatScheduledMessagesList

> map[string,object] chatScheduledMessagesList($cursor, $token, $limit, $oldest, $channel, $latest)



Returns a list of scheduled messages.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: slackAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ChatApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cursor = 'cursor_example'; // string | For pagination purposes, this is the `cursor` value returned from a previous call to `chat.scheduledmessages.list` indicating where you want to start this call from.
$token = 'token_example'; // string | Authentication token. Requires scope: `none`
$limit = 56; // int | Maximum number of original entries to return.
$oldest = 3.4; // float | A UNIX timestamp of the oldest value in the time range
$channel = 'channel_example'; // string | The channel of the scheduled messages
$latest = 3.4; // float | A UNIX timestamp of the latest value in the time range

try {
    $result = $apiInstance->chatScheduledMessagesList($cursor, $token, $limit, $oldest, $channel, $latest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChatApi->chatScheduledMessagesList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cursor** | **string**| For pagination purposes, this is the &#x60;cursor&#x60; value returned from a previous call to &#x60;chat.scheduledmessages.list&#x60; indicating where you want to start this call from. | [optional]
 **token** | **string**| Authentication token. Requires scope: &#x60;none&#x60; | [optional]
 **limit** | **int**| Maximum number of original entries to return. | [optional]
 **oldest** | **float**| A UNIX timestamp of the oldest value in the time range | [optional]
 **channel** | **string**| The channel of the scheduled messages | [optional]
 **latest** | **float**| A UNIX timestamp of the latest value in the time range | [optional]

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


## chatUnfurl

> map[string,object] chatUnfurl($token, $user_auth_message, $user_auth_required, $unfurls, $ts, $user_auth_url, $channel)



Provide custom unfurl behavior for user-posted URLs

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: slackAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ChatApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token = 'token_example'; // string | Authentication token. Requires scope: `links:write`
$user_auth_message = 'user_auth_message_example'; // string | Provide a simply-formatted string to send as an ephemeral message to the user as invitation to authenticate further and enable full unfurling behavior
$user_auth_required = True; // bool | Set to `true` or `1` to indicate the user must install your Slack app to trigger unfurls for this domain
$unfurls = 'unfurls_example'; // string | URL-encoded JSON map with keys set to URLs featured in the the message, pointing to their unfurl blocks or message attachments.
$ts = 'ts_example'; // string | Timestamp of the message to add unfurl behavior to.
$user_auth_url = 'user_auth_url_example'; // string | Send users to this custom URL where they will complete authentication in your app to fully trigger unfurling. Value should be properly URL-encoded.
$channel = 'channel_example'; // string | Channel ID of the message

try {
    $result = $apiInstance->chatUnfurl($token, $user_auth_message, $user_auth_required, $unfurls, $ts, $user_auth_url, $channel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChatApi->chatUnfurl: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| Authentication token. Requires scope: &#x60;links:write&#x60; | [optional]
 **user_auth_message** | **string**| Provide a simply-formatted string to send as an ephemeral message to the user as invitation to authenticate further and enable full unfurling behavior | [optional]
 **user_auth_required** | **bool**| Set to &#x60;true&#x60; or &#x60;1&#x60; to indicate the user must install your Slack app to trigger unfurls for this domain | [optional]
 **unfurls** | **string**| URL-encoded JSON map with keys set to URLs featured in the the message, pointing to their unfurl blocks or message attachments. | [optional]
 **ts** | **string**| Timestamp of the message to add unfurl behavior to. | [optional]
 **user_auth_url** | **string**| Send users to this custom URL where they will complete authentication in your app to fully trigger unfurling. Value should be properly URL-encoded. | [optional]
 **channel** | **string**| Channel ID of the message | [optional]

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


## chatUpdate

> map[string,object] chatUpdate($token, $blocks, $attachments, $text, $ts, $parse, $as_user, $link_names, $channel)



Updates a message.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: slackAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ChatApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token = 'token_example'; // string | Authentication token. Requires scope: `chat:write`
$blocks = 'blocks_example'; // string | A JSON-based array of structured blocks, presented as a URL-encoded string.
$attachments = 'attachments_example'; // string | A JSON-based array of structured attachments, presented as a URL-encoded string. This field is required when not presenting `text`.
$text = 'text_example'; // string | New text for the message, using the [default formatting rules](/docs/formatting). It's not required when presenting `attachments`.
$ts = 3.4; // float | Timestamp of the message to be updated.
$parse = 'parse_example'; // string | Change how messages are treated. Defaults to `client`, unlike `chat.postMessage`. See [below](#formatting).
$as_user = True; // bool | Pass true to update the message as the authed user. [Bot users](/bot-users) in this context are considered authed users.
$link_names = True; // bool | Find and link channel names and usernames. Defaults to `none`. See [below](#formatting).
$channel = 'channel_example'; // string | Channel containing the message to be updated.

try {
    $result = $apiInstance->chatUpdate($token, $blocks, $attachments, $text, $ts, $parse, $as_user, $link_names, $channel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChatApi->chatUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| Authentication token. Requires scope: &#x60;chat:write&#x60; | [optional]
 **blocks** | **string**| A JSON-based array of structured blocks, presented as a URL-encoded string. | [optional]
 **attachments** | **string**| A JSON-based array of structured attachments, presented as a URL-encoded string. This field is required when not presenting &#x60;text&#x60;. | [optional]
 **text** | **string**| New text for the message, using the [default formatting rules](/docs/formatting). It&#39;s not required when presenting &#x60;attachments&#x60;. | [optional]
 **ts** | **float**| Timestamp of the message to be updated. | [optional]
 **parse** | **string**| Change how messages are treated. Defaults to &#x60;client&#x60;, unlike &#x60;chat.postMessage&#x60;. See [below](#formatting). | [optional]
 **as_user** | **bool**| Pass true to update the message as the authed user. [Bot users](/bot-users) in this context are considered authed users. | [optional]
 **link_names** | **bool**| Find and link channel names and usernames. Defaults to &#x60;none&#x60;. See [below](#formatting). | [optional]
 **channel** | **string**| Channel containing the message to be updated. | [optional]

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

