# OpenAPI\Client\UsersApi

All URIs are relative to *https://slack.com/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**usersConversations**](UsersApi.md#usersConversations) | **GET** /users.conversations | 
[**usersDeletePhoto**](UsersApi.md#usersDeletePhoto) | **POST** /users.deletePhoto | 
[**usersGetPresence**](UsersApi.md#usersGetPresence) | **GET** /users.getPresence | 
[**usersIdentity**](UsersApi.md#usersIdentity) | **GET** /users.identity | 
[**usersInfo**](UsersApi.md#usersInfo) | **GET** /users.info | 
[**usersList**](UsersApi.md#usersList) | **GET** /users.list | 
[**usersLookupByEmail**](UsersApi.md#usersLookupByEmail) | **GET** /users.lookupByEmail | 
[**usersProfileGet**](UsersApi.md#usersProfileGet) | **GET** /users.profile.get | 
[**usersProfileSet**](UsersApi.md#usersProfileSet) | **POST** /users.profile.set | 
[**usersSetActive**](UsersApi.md#usersSetActive) | **POST** /users.setActive | 
[**usersSetPhoto**](UsersApi.md#usersSetPhoto) | **POST** /users.setPhoto | 
[**usersSetPresence**](UsersApi.md#usersSetPresence) | **POST** /users.setPresence | 



## usersConversations

> map[string,object] usersConversations($cursor, $token, $limit, $user, $exclude_archived, $types)



List conversations the calling user may access.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: slackAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cursor = 'cursor_example'; // string | Paginate through collections of data by setting the `cursor` parameter to a `next_cursor` attribute returned by a previous request's `response_metadata`. Default value fetches the first \"page\" of the collection. See [pagination](/docs/pagination) for more detail.
$token = 'token_example'; // string | Authentication token. Requires scope: `conversations:read`
$limit = 56; // int | The maximum number of items to return. Fewer than the requested number of items may be returned, even if the end of the list hasn't been reached. Must be an integer no larger than 1000.
$user = 'user_example'; // string | Browse conversations by a specific user ID's membership. Non-public channels are restricted to those where the calling user shares membership.
$exclude_archived = True; // bool | Set to `true` to exclude archived channels from the list
$types = 'types_example'; // string | Mix and match channel types by providing a comma-separated list of any combination of `public_channel`, `private_channel`, `mpim`, `im`

try {
    $result = $apiInstance->usersConversations($cursor, $token, $limit, $user, $exclude_archived, $types);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->usersConversations: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cursor** | **string**| Paginate through collections of data by setting the &#x60;cursor&#x60; parameter to a &#x60;next_cursor&#x60; attribute returned by a previous request&#39;s &#x60;response_metadata&#x60;. Default value fetches the first \&quot;page\&quot; of the collection. See [pagination](/docs/pagination) for more detail. | [optional]
 **token** | **string**| Authentication token. Requires scope: &#x60;conversations:read&#x60; | [optional]
 **limit** | **int**| The maximum number of items to return. Fewer than the requested number of items may be returned, even if the end of the list hasn&#39;t been reached. Must be an integer no larger than 1000. | [optional]
 **user** | **string**| Browse conversations by a specific user ID&#39;s membership. Non-public channels are restricted to those where the calling user shares membership. | [optional]
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


## usersDeletePhoto

> map[string,object] usersDeletePhoto($token)



Delete the user profile photo

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: slackAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token = 'token_example'; // string | Authentication token. Requires scope: `users.profile:write`

try {
    $result = $apiInstance->usersDeletePhoto($token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->usersDeletePhoto: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| Authentication token. Requires scope: &#x60;users.profile:write&#x60; | [optional]

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


## usersGetPresence

> map[string,object] usersGetPresence($token, $user)



Gets user presence information.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: slackAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token = 'token_example'; // string | Authentication token. Requires scope: `users:read`
$user = 'user_example'; // string | User to get presence info on. Defaults to the authed user.

try {
    $result = $apiInstance->usersGetPresence($token, $user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->usersGetPresence: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| Authentication token. Requires scope: &#x60;users:read&#x60; | [optional]
 **user** | **string**| User to get presence info on. Defaults to the authed user. | [optional]

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


## usersIdentity

> object usersIdentity($token)



Get a user's identity.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: slackAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token = 'token_example'; // string | Authentication token. Requires scope: `identity.basic`

try {
    $result = $apiInstance->usersIdentity($token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->usersIdentity: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| Authentication token. Requires scope: &#x60;identity.basic&#x60; | [optional]

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


## usersInfo

> map[string,object] usersInfo($token, $user, $include_locale)



Gets information about a user.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: slackAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token = 'token_example'; // string | Authentication token. Requires scope: `users:read`
$user = 'user_example'; // string | User to get info on
$include_locale = True; // bool | Set this to `true` to receive the locale for this user. Defaults to `false`

try {
    $result = $apiInstance->usersInfo($token, $user, $include_locale);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->usersInfo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| Authentication token. Requires scope: &#x60;users:read&#x60; | [optional]
 **user** | **string**| User to get info on | [optional]
 **include_locale** | **bool**| Set this to &#x60;true&#x60; to receive the locale for this user. Defaults to &#x60;false&#x60; | [optional]

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


## usersList

> map[string,object] usersList($cursor, $token, $limit, $include_locale)



Lists all users in a Slack team.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: slackAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cursor = 'cursor_example'; // string | Paginate through collections of data by setting the `cursor` parameter to a `next_cursor` attribute returned by a previous request's `response_metadata`. Default value fetches the first \"page\" of the collection. See [pagination](/docs/pagination) for more detail.
$token = 'token_example'; // string | Authentication token. Requires scope: `users:read`
$limit = 56; // int | The maximum number of items to return. Fewer than the requested number of items may be returned, even if the end of the users list hasn't been reached.
$include_locale = True; // bool | Set this to `true` to receive the locale for users. Defaults to `false`

try {
    $result = $apiInstance->usersList($cursor, $token, $limit, $include_locale);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->usersList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cursor** | **string**| Paginate through collections of data by setting the &#x60;cursor&#x60; parameter to a &#x60;next_cursor&#x60; attribute returned by a previous request&#39;s &#x60;response_metadata&#x60;. Default value fetches the first \&quot;page\&quot; of the collection. See [pagination](/docs/pagination) for more detail. | [optional]
 **token** | **string**| Authentication token. Requires scope: &#x60;users:read&#x60; | [optional]
 **limit** | **int**| The maximum number of items to return. Fewer than the requested number of items may be returned, even if the end of the users list hasn&#39;t been reached. | [optional]
 **include_locale** | **bool**| Set this to &#x60;true&#x60; to receive the locale for users. Defaults to &#x60;false&#x60; | [optional]

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


## usersLookupByEmail

> map[string,object] usersLookupByEmail($token, $email)



Find a user with an email address.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: slackAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token = 'token_example'; // string | Authentication token. Requires scope: `users:read.email`
$email = 'email_example'; // string | An email address belonging to a user in the workspace

try {
    $result = $apiInstance->usersLookupByEmail($token, $email);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->usersLookupByEmail: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| Authentication token. Requires scope: &#x60;users:read.email&#x60; | [optional]
 **email** | **string**| An email address belonging to a user in the workspace | [optional]

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


## usersProfileGet

> map[string,object] usersProfileGet($token, $include_labels, $user)



Retrieves a user's profile information.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: slackAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token = 'token_example'; // string | Authentication token. Requires scope: `users.profile:read`
$include_labels = True; // bool | Include labels for each ID in custom profile fields
$user = 'user_example'; // string | User to retrieve profile info for

try {
    $result = $apiInstance->usersProfileGet($token, $include_labels, $user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->usersProfileGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| Authentication token. Requires scope: &#x60;users.profile:read&#x60; | [optional]
 **include_labels** | **bool**| Include labels for each ID in custom profile fields | [optional]
 **user** | **string**| User to retrieve profile info for | [optional]

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


## usersProfileSet

> map[string,object] usersProfileSet($token, $profile, $user, $value, $name)



Set the profile information for a user.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: slackAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token = 'token_example'; // string | Authentication token. Requires scope: `users.profile:write`
$profile = 'profile_example'; // string | Collection of key:value pairs presented as a URL-encoded JSON hash. At most 50 fields may be set. Each field name is limited to 255 characters.
$user = 'user_example'; // string | ID of user to change. This argument may only be specified by team admins on paid teams.
$value = 'value_example'; // string | Value to set a single key to. Usable only if `profile` is not passed.
$name = 'name_example'; // string | Name of a single key to set. Usable only if `profile` is not passed.

try {
    $result = $apiInstance->usersProfileSet($token, $profile, $user, $value, $name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->usersProfileSet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| Authentication token. Requires scope: &#x60;users.profile:write&#x60; | [optional]
 **profile** | **string**| Collection of key:value pairs presented as a URL-encoded JSON hash. At most 50 fields may be set. Each field name is limited to 255 characters. | [optional]
 **user** | **string**| ID of user to change. This argument may only be specified by team admins on paid teams. | [optional]
 **value** | **string**| Value to set a single key to. Usable only if &#x60;profile&#x60; is not passed. | [optional]
 **name** | **string**| Name of a single key to set. Usable only if &#x60;profile&#x60; is not passed. | [optional]

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


## usersSetActive

> \OpenAPI\Client\Model\DefaultSuccessTemplate usersSetActive($token)



Marked a user as active. Deprecated and non-functional.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: slackAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token = 'token_example'; // string | Authentication token. Requires scope: `users:write`

try {
    $result = $apiInstance->usersSetActive($token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->usersSetActive: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| Authentication token. Requires scope: &#x60;users:write&#x60; | [optional]

### Return type

[**\OpenAPI\Client\Model\DefaultSuccessTemplate**](../Model/DefaultSuccessTemplate.md)

### Authorization

[slackAuth](../../README.md#slackAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## usersSetPhoto

> map[string,object] usersSetPhoto($image, $crop_w, $token, $crop_y, $crop_x)



Set the user profile photo

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: slackAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$image = 'image_example'; // string | File contents via `multipart/form-data`.
$crop_w = 56; // int | Width/height of crop box (always square)
$token = 'token_example'; // string | Authentication token. Requires scope: `users.profile:write`
$crop_y = 56; // int | Y coordinate of top-left corner of crop box
$crop_x = 56; // int | X coordinate of top-left corner of crop box

try {
    $result = $apiInstance->usersSetPhoto($image, $crop_w, $token, $crop_y, $crop_x);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->usersSetPhoto: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **image** | **string**| File contents via &#x60;multipart/form-data&#x60;. | [optional]
 **crop_w** | **int**| Width/height of crop box (always square) | [optional]
 **token** | **string**| Authentication token. Requires scope: &#x60;users.profile:write&#x60; | [optional]
 **crop_y** | **int**| Y coordinate of top-left corner of crop box | [optional]
 **crop_x** | **int**| X coordinate of top-left corner of crop box | [optional]

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


## usersSetPresence

> map[string,object] usersSetPresence($token, $presence)



Manually sets user presence.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: slackAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token = 'token_example'; // string | Authentication token. Requires scope: `users:write`
$presence = 'presence_example'; // string | Either `auto` or `away`

try {
    $result = $apiInstance->usersSetPresence($token, $presence);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->usersSetPresence: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| Authentication token. Requires scope: &#x60;users:write&#x60; | [optional]
 **presence** | **string**| Either &#x60;auto&#x60; or &#x60;away&#x60; | [optional]

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

