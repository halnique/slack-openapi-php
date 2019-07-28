# OpenAPI\Client\UsergroupsUsersApi

All URIs are relative to *https://slack.com/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**usergroupsUsersList**](UsergroupsUsersApi.md#usergroupsUsersList) | **GET** /usergroups.users.list | 
[**usergroupsUsersUpdate**](UsergroupsUsersApi.md#usergroupsUsersUpdate) | **POST** /usergroups.users.update | 



## usergroupsUsersList

> map[string,object] usergroupsUsersList()



List all users in a User Group

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: slackAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\UsergroupsUsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->usergroupsUsersList();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsergroupsUsersApi->usergroupsUsersList: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new OpenAPI\Client\Api\UsergroupsUsersApi(
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
    echo 'Exception when calling UsergroupsUsersApi->usergroupsUsersUpdate: ', $e->getMessage(), PHP_EOL;
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

