# OpenAPI\Client\AppsPermissionsUsersApi

All URIs are relative to *https://slack.com/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**appsPermissionsUsersList**](AppsPermissionsUsersApi.md#appsPermissionsUsersList) | **GET** /apps.permissions.users.list | 
[**appsPermissionsUsersRequest**](AppsPermissionsUsersApi.md#appsPermissionsUsersRequest) | **GET** /apps.permissions.users.request | 



## appsPermissionsUsersList

> \OpenAPI\Client\Model\DefaultSuccessTemplate appsPermissionsUsersList($cursor, $token, $limit)



Returns list of user grants and corresponding scopes this app has on a team.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: slackAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AppsPermissionsUsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cursor = 'cursor_example'; // string | Paginate through collections of data by setting the `cursor` parameter to a `next_cursor` attribute returned by a previous request's `response_metadata`. Default value fetches the first \"page\" of the collection. See [pagination](/docs/pagination) for more detail.
$token = 'token_example'; // string | Authentication token. Requires scope: `none`
$limit = 56; // int | The maximum number of items to return.

try {
    $result = $apiInstance->appsPermissionsUsersList($cursor, $token, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppsPermissionsUsersApi->appsPermissionsUsersList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cursor** | **string**| Paginate through collections of data by setting the &#x60;cursor&#x60; parameter to a &#x60;next_cursor&#x60; attribute returned by a previous request&#39;s &#x60;response_metadata&#x60;. Default value fetches the first \&quot;page\&quot; of the collection. See [pagination](/docs/pagination) for more detail. | [optional]
 **token** | **string**| Authentication token. Requires scope: &#x60;none&#x60; | [optional]
 **limit** | **int**| The maximum number of items to return. | [optional]

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


## appsPermissionsUsersRequest

> \OpenAPI\Client\Model\DefaultSuccessTemplate appsPermissionsUsersRequest($scopes, $token, $user, $trigger_id)



Enables an app to trigger a permissions modal to grant an app access to a user access scope.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: slackAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AppsPermissionsUsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$scopes = 'scopes_example'; // string | A comma separated list of user scopes to request for
$token = 'token_example'; // string | Authentication token. Requires scope: `none`
$user = 'user_example'; // string | The user this scope is being requested for
$trigger_id = 'trigger_id_example'; // string | Token used to trigger the request

try {
    $result = $apiInstance->appsPermissionsUsersRequest($scopes, $token, $user, $trigger_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppsPermissionsUsersApi->appsPermissionsUsersRequest: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **scopes** | **string**| A comma separated list of user scopes to request for | [optional]
 **token** | **string**| Authentication token. Requires scope: &#x60;none&#x60; | [optional]
 **user** | **string**| The user this scope is being requested for | [optional]
 **trigger_id** | **string**| Token used to trigger the request | [optional]

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

