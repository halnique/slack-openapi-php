# OpenAPI\Client\TeamProfileApi

All URIs are relative to *https://slack.com/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**teamProfileGet**](TeamProfileApi.md#teamProfileGet) | **GET** /team.profile.get | 



## teamProfileGet

> map[string,object] teamProfileGet($token, $visibility)



Retrieve a team's profile.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: slackAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\TeamProfileApi(
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
    echo 'Exception when calling TeamProfileApi->teamProfileGet: ', $e->getMessage(), PHP_EOL;
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

