# OpenAPI\Client\ApiApi

All URIs are relative to *https://slack.com/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**apiTest**](ApiApi.md#apiTest) | **GET** /api.test | 



## apiTest

> map[string,object] apiTest($foo, $error)



Checks API calling code.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: slackAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ApiApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$foo = 'foo_example'; // string | example property to return
$error = 'error_example'; // string | Error response to return

try {
    $result = $apiInstance->apiTest($foo, $error);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApiApi->apiTest: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **foo** | **string**| example property to return | [optional]
 **error** | **string**| Error response to return | [optional]

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

