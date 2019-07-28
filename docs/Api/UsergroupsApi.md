# OpenAPI\Client\UsergroupsApi

All URIs are relative to *https://slack.com/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**usergroupsCreate**](UsergroupsApi.md#usergroupsCreate) | **POST** /usergroups.create | 
[**usergroupsDisable**](UsergroupsApi.md#usergroupsDisable) | **POST** /usergroups.disable | 
[**usergroupsEnable**](UsergroupsApi.md#usergroupsEnable) | **POST** /usergroups.enable | 
[**usergroupsList**](UsergroupsApi.md#usergroupsList) | **GET** /usergroups.list | 
[**usergroupsUpdate**](UsergroupsApi.md#usergroupsUpdate) | **POST** /usergroups.update | 
[**usergroupsUsersList**](UsergroupsApi.md#usergroupsUsersList) | **GET** /usergroups.users.list | 
[**usergroupsUsersUpdate**](UsergroupsApi.md#usergroupsUsersUpdate) | **POST** /usergroups.users.update | 



## usergroupsCreate

> map[string,object] usergroupsCreate($token, $handle, $description, $channels, $include_count, $name)



Create a User Group

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: slackAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\UsergroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token = 'token_example'; // string | Authentication token. Requires scope: `usergroups:write`
$handle = 'handle_example'; // string | A mention handle. Must be unique among channels, users and User Groups.
$description = 'description_example'; // string | A short description of the User Group.
$channels = 'channels_example'; // string | A comma separated string of encoded channel IDs for which the User Group uses as a default.
$include_count = True; // bool | Include the number of users in each User Group.
$name = 'name_example'; // string | A name for the User Group. Must be unique among User Groups.

try {
    $result = $apiInstance->usergroupsCreate($token, $handle, $description, $channels, $include_count, $name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsergroupsApi->usergroupsCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| Authentication token. Requires scope: &#x60;usergroups:write&#x60; | [optional]
 **handle** | **string**| A mention handle. Must be unique among channels, users and User Groups. | [optional]
 **description** | **string**| A short description of the User Group. | [optional]
 **channels** | **string**| A comma separated string of encoded channel IDs for which the User Group uses as a default. | [optional]
 **include_count** | **bool**| Include the number of users in each User Group. | [optional]
 **name** | **string**| A name for the User Group. Must be unique among User Groups. | [optional]

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


## usergroupsDisable

> map[string,object] usergroupsDisable($token, $include_count, $usergroup)



Disable an existing User Group

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: slackAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\UsergroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token = 'token_example'; // string | Authentication token. Requires scope: `usergroups:write`
$include_count = True; // bool | Include the number of users in the User Group.
$usergroup = 'usergroup_example'; // string | The encoded ID of the User Group to disable.

try {
    $result = $apiInstance->usergroupsDisable($token, $include_count, $usergroup);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsergroupsApi->usergroupsDisable: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| Authentication token. Requires scope: &#x60;usergroups:write&#x60; | [optional]
 **include_count** | **bool**| Include the number of users in the User Group. | [optional]
 **usergroup** | **string**| The encoded ID of the User Group to disable. | [optional]

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


## usergroupsEnable

> map[string,object] usergroupsEnable($token, $include_count, $usergroup)



Enable a User Group

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: slackAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\UsergroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token = 'token_example'; // string | Authentication token. Requires scope: `usergroups:write`
$include_count = True; // bool | Include the number of users in the User Group.
$usergroup = 'usergroup_example'; // string | The encoded ID of the User Group to enable.

try {
    $result = $apiInstance->usergroupsEnable($token, $include_count, $usergroup);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsergroupsApi->usergroupsEnable: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| Authentication token. Requires scope: &#x60;usergroups:write&#x60; | [optional]
 **include_count** | **bool**| Include the number of users in the User Group. | [optional]
 **usergroup** | **string**| The encoded ID of the User Group to enable. | [optional]

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


## usergroupsList

> map[string,object] usergroupsList($include_users, $token, $include_count, $include_disabled)



List all User Groups for a team

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: slackAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\UsergroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$include_users = True; // bool | Include the list of users for each User Group.
$token = 'token_example'; // string | Authentication token. Requires scope: `usergroups:read`
$include_count = True; // bool | Include the number of users in each User Group.
$include_disabled = True; // bool | Include disabled User Groups.

try {
    $result = $apiInstance->usergroupsList($include_users, $token, $include_count, $include_disabled);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsergroupsApi->usergroupsList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **include_users** | **bool**| Include the list of users for each User Group. | [optional]
 **token** | **string**| Authentication token. Requires scope: &#x60;usergroups:read&#x60; | [optional]
 **include_count** | **bool**| Include the number of users in each User Group. | [optional]
 **include_disabled** | **bool**| Include disabled User Groups. | [optional]

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


## usergroupsUpdate

> map[string,object] usergroupsUpdate($token, $handle, $description, $channels, $include_count, $usergroup, $name)



Update an existing User Group

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: slackAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\UsergroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token = 'token_example'; // string | Authentication token. Requires scope: `usergroups:write`
$handle = 'handle_example'; // string | A mention handle. Must be unique among channels, users and User Groups.
$description = 'description_example'; // string | A short description of the User Group.
$channels = 'channels_example'; // string | A comma separated string of encoded channel IDs for which the User Group uses as a default.
$include_count = True; // bool | Include the number of users in the User Group.
$usergroup = 'usergroup_example'; // string | The encoded ID of the User Group to update.
$name = 'name_example'; // string | A name for the User Group. Must be unique among User Groups.

try {
    $result = $apiInstance->usergroupsUpdate($token, $handle, $description, $channels, $include_count, $usergroup, $name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsergroupsApi->usergroupsUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| Authentication token. Requires scope: &#x60;usergroups:write&#x60; | [optional]
 **handle** | **string**| A mention handle. Must be unique among channels, users and User Groups. | [optional]
 **description** | **string**| A short description of the User Group. | [optional]
 **channels** | **string**| A comma separated string of encoded channel IDs for which the User Group uses as a default. | [optional]
 **include_count** | **bool**| Include the number of users in the User Group. | [optional]
 **usergroup** | **string**| The encoded ID of the User Group to update. | [optional]
 **name** | **string**| A name for the User Group. Must be unique among User Groups. | [optional]

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


## usergroupsUsersList

> map[string,object] usergroupsUsersList()



List all users in a User Group

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: slackAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\UsergroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->usergroupsUsersList();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsergroupsApi->usergroupsUsersList: ', $e->getMessage(), PHP_EOL;
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


## usergroupsUsersUpdate

> map[string,object] usergroupsUsersUpdate($token, $users, $include_count, $usergroup)



Update the list of users for a User Group

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: slackAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\UsergroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token = 'token_example'; // string | Authentication token. Requires scope: `usergroups:write`
$users = 'users_example'; // string | A comma separated string of encoded user IDs that represent the entire list of users for the User Group.
$include_count = True; // bool | Include the number of users in the User Group.
$usergroup = 'usergroup_example'; // string | The encoded ID of the User Group to update.

try {
    $result = $apiInstance->usergroupsUsersUpdate($token, $users, $include_count, $usergroup);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsergroupsApi->usergroupsUsersUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| Authentication token. Requires scope: &#x60;usergroups:write&#x60; | [optional]
 **users** | **string**| A comma separated string of encoded user IDs that represent the entire list of users for the User Group. | [optional]
 **include_count** | **bool**| Include the number of users in the User Group. | [optional]
 **usergroup** | **string**| The encoded ID of the User Group to update. | [optional]

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

