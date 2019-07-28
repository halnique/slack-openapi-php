# OpenAPI\Client\TeamApi

All URIs are relative to *https://slack.com/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**teamAccessLogs**](TeamApi.md#teamAccessLogs) | **GET** /team.accessLogs | 
[**teamBillableInfo**](TeamApi.md#teamBillableInfo) | **GET** /team.billableInfo | 
[**teamInfo**](TeamApi.md#teamInfo) | **GET** /team.info | 
[**teamIntegrationLogs**](TeamApi.md#teamIntegrationLogs) | **GET** /team.integrationLogs | 
[**teamProfileGet**](TeamApi.md#teamProfileGet) | **GET** /team.profile.get | 



## teamAccessLogs

> map[string,object] teamAccessLogs($count, $token, $page, $before)



Gets the access logs for the current team.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: slackAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\TeamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$count = 'count_example'; // string | 
$token = 'token_example'; // string | Authentication token. Requires scope: `admin`
$page = 'page_example'; // string | 
$before = 56; // int | End of time range of logs to include in results (inclusive).

try {
    $result = $apiInstance->teamAccessLogs($count, $token, $page, $before);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamAccessLogs: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **count** | **string**|  | [optional]
 **token** | **string**| Authentication token. Requires scope: &#x60;admin&#x60; | [optional]
 **page** | **string**|  | [optional]
 **before** | **int**| End of time range of logs to include in results (inclusive). | [optional]

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


## teamBillableInfo

> map[string,object] teamBillableInfo()



Gets billable users information for the current team.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: slackAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\TeamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->teamBillableInfo();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamBillableInfo: ', $e->getMessage(), PHP_EOL;
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


## teamInfo

> map[string,object] teamInfo($token, $team)



Gets information about the current team.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: slackAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\TeamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token = 'token_example'; // string | Authentication token. Requires scope: `team:read`
$team = 'team_example'; // string | Team to get info on, if omitted, will return information about the current team. Will only return team that the authenticated token is allowed to see through external shared channels

try {
    $result = $apiInstance->teamInfo($token, $team);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamInfo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| Authentication token. Requires scope: &#x60;team:read&#x60; | [optional]
 **team** | **string**| Team to get info on, if omitted, will return information about the current team. Will only return team that the authenticated token is allowed to see through external shared channels | [optional]

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


## teamIntegrationLogs

> map[string,object] teamIntegrationLogs($count, $change_type, $app_id, $token, $user, $service_id, $page)



Gets the integration logs for the current team.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: slackAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\TeamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$count = 'count_example'; // string | 
$change_type = 'change_type_example'; // string | Filter logs with this change type. Defaults to all logs.
$app_id = 56; // int | Filter logs to this Slack app. Defaults to all logs.
$token = 'token_example'; // string | Authentication token. Requires scope: `admin`
$user = 'user_example'; // string | Filter logs generated by this user’s actions. Defaults to all logs.
$service_id = 56; // int | Filter logs to this service. Defaults to all logs.
$page = 'page_example'; // string | 

try {
    $result = $apiInstance->teamIntegrationLogs($count, $change_type, $app_id, $token, $user, $service_id, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamIntegrationLogs: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **count** | **string**|  | [optional]
 **change_type** | **string**| Filter logs with this change type. Defaults to all logs. | [optional]
 **app_id** | **int**| Filter logs to this Slack app. Defaults to all logs. | [optional]
 **token** | **string**| Authentication token. Requires scope: &#x60;admin&#x60; | [optional]
 **user** | **string**| Filter logs generated by this user’s actions. Defaults to all logs. | [optional]
 **service_id** | **int**| Filter logs to this service. Defaults to all logs. | [optional]
 **page** | **string**|  | [optional]

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


## teamProfileGet

> map[string,object] teamProfileGet($token, $visibility)



Retrieve a team's profile.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: slackAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\TeamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token = 'token_example'; // string | Authentication token. Requires scope: `users.profile:read`
$visibility = 'visibility_example'; // string | Filter by visibility.

try {
    $result = $apiInstance->teamProfileGet($token, $visibility);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->teamProfileGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| Authentication token. Requires scope: &#x60;users.profile:read&#x60; | [optional]
 **visibility** | **string**| Filter by visibility. | [optional]

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

