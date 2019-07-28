# OpenAPI\Client\UsersProfileApi

All URIs are relative to *https://slack.com/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**usersProfileGet**](UsersProfileApi.md#usersProfileGet) | **GET** /users.profile.get | 
[**usersProfileSet**](UsersProfileApi.md#usersProfileSet) | **POST** /users.profile.set | 



## usersProfileGet

> map[string,object] usersProfileGet($token, $include_labels, $user)



Retrieves a user's profile information.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: slackAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\UsersProfileApi(
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
    echo 'Exception when calling UsersProfileApi->usersProfileGet: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new OpenAPI\Client\Api\UsersProfileApi(
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
    echo 'Exception when calling UsersProfileApi->usersProfileSet: ', $e->getMessage(), PHP_EOL;
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

