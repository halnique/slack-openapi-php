# OpenAPI\Client\AppsPermissionsApi

All URIs are relative to *https://slack.com/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**appsPermissionsInfo**](AppsPermissionsApi.md#appsPermissionsInfo) | **GET** /apps.permissions.info | 
[**appsPermissionsRequest**](AppsPermissionsApi.md#appsPermissionsRequest) | **GET** /apps.permissions.request | 



## appsPermissionsInfo

> map[string,object] appsPermissionsInfo($token)



Returns list of permissions this app has on a team.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: slackAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AppsPermissionsApi(
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
    echo 'Exception when calling AppsPermissionsApi->appsPermissionsInfo: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new OpenAPI\Client\Api\AppsPermissionsApi(
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
    echo 'Exception when calling AppsPermissionsApi->appsPermissionsRequest: ', $e->getMessage(), PHP_EOL;
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

