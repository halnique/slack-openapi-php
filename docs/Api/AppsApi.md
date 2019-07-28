# OpenAPI\Client\AppsApi

All URIs are relative to *https://slack.com/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**appsPermissionsInfo**](AppsApi.md#appsPermissionsInfo) | **GET** /apps.permissions.info | 
[**appsPermissionsRequest**](AppsApi.md#appsPermissionsRequest) | **GET** /apps.permissions.request | 
[**appsPermissionsResourcesList**](AppsApi.md#appsPermissionsResourcesList) | **GET** /apps.permissions.resources.list | 
[**appsPermissionsScopesList**](AppsApi.md#appsPermissionsScopesList) | **GET** /apps.permissions.scopes.list | 
[**appsPermissionsUsersList**](AppsApi.md#appsPermissionsUsersList) | **GET** /apps.permissions.users.list | 
[**appsPermissionsUsersRequest**](AppsApi.md#appsPermissionsUsersRequest) | **GET** /apps.permissions.users.request | 
[**appsUninstall**](AppsApi.md#appsUninstall) | **GET** /apps.uninstall | 



## appsPermissionsInfo

> map[string,object] appsPermissionsInfo($token)



Returns list of permissions this app has on a team.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: slackAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AppsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token = 'token_example'; // string | Authentication token. Requires scope: `none`

try {
    $result = $apiInstance->appsPermissionsInfo($token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppsApi->appsPermissionsInfo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| Authentication token. Requires scope: &#x60;none&#x60; | [optional]

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


## appsPermissionsRequest

> map[string,object] appsPermissionsRequest($scopes, $token, $trigger_id)



Allows an app to request additional scopes

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: slackAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AppsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$scopes = 'scopes_example'; // string | A comma separated list of scopes to request for
$token = 'token_example'; // string | Authentication token. Requires scope: `none`
$trigger_id = 'trigger_id_example'; // string | Token used to trigger the permissions API

try {
    $result = $apiInstance->appsPermissionsRequest($scopes, $token, $trigger_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppsApi->appsPermissionsRequest: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **scopes** | **string**| A comma separated list of scopes to request for | [optional]
 **token** | **string**| Authentication token. Requires scope: &#x60;none&#x60; | [optional]
 **trigger_id** | **string**| Token used to trigger the permissions API | [optional]

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


## appsPermissionsResourcesList

> map[string,object] appsPermissionsResourcesList($cursor, $token, $limit)



Returns list of resource grants this app has on a team.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: slackAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AppsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cursor = 'cursor_example'; // string | Paginate through collections of data by setting the `cursor` parameter to a `next_cursor` attribute returned by a previous request's `response_metadata`. Default value fetches the first \"page\" of the collection. See [pagination](/docs/pagination) for more detail.
$token = 'token_example'; // string | Authentication token. Requires scope: `none`
$limit = 56; // int | The maximum number of items to return.

try {
    $result = $apiInstance->appsPermissionsResourcesList($cursor, $token, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppsApi->appsPermissionsResourcesList: ', $e->getMessage(), PHP_EOL;
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

**map[string,object]**

### Authorization

[slackAuth](../../README.md#slackAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## appsPermissionsScopesList

> map[string,object] appsPermissionsScopesList($token)



Returns list of scopes this app has on a team.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: slackAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AppsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token = 'token_example'; // string | Authentication token. Requires scope: `none`

try {
    $result = $apiInstance->appsPermissionsScopesList($token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppsApi->appsPermissionsScopesList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| Authentication token. Requires scope: &#x60;none&#x60; | [optional]

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


## appsPermissionsUsersList

> \OpenAPI\Client\Model\DefaultSuccessTemplate appsPermissionsUsersList($cursor, $token, $limit)



Returns list of user grants and corresponding scopes this app has on a team.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: slackAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AppsApi(
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
    echo 'Exception when calling AppsApi->appsPermissionsUsersList: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new OpenAPI\Client\Api\AppsApi(
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
    echo 'Exception when calling AppsApi->appsPermissionsUsersRequest: ', $e->getMessage(), PHP_EOL;
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


## appsUninstall

> map[string,object] appsUninstall($client_secret, $token, $client_id)



Uninstalls your app from a workspace.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: slackAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AppsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$client_secret = 'client_secret_example'; // string | Issued when you created your application.
$token = 'token_example'; // string | Authentication token. Requires scope: `none`
$client_id = 'client_id_example'; // string | Issued when you created your application.

try {
    $result = $apiInstance->appsUninstall($client_secret, $token, $client_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppsApi->appsUninstall: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **client_secret** | **string**| Issued when you created your application. | [optional]
 **token** | **string**| Authentication token. Requires scope: &#x60;none&#x60; | [optional]
 **client_id** | **string**| Issued when you created your application. | [optional]

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

