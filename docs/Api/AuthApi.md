# OpenAPI\Client\AuthApi

All URIs are relative to *https://slack.com/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**authRevoke**](AuthApi.md#authRevoke) | **GET** /auth.revoke | 
[**authTest**](AuthApi.md#authTest) | **GET** /auth.test | 



## authRevoke

> map[string,object] authRevoke($test, $token)



Revokes a token.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: slackAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AuthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$test = True; // bool | Setting this parameter to `1` triggers a _testing mode_ where the specified token will not actually be revoked.
$token = 'token_example'; // string | Authentication token. Requires scope: `none`

try {
    $result = $apiInstance->authRevoke($test, $token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthApi->authRevoke: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **test** | **bool**| Setting this parameter to &#x60;1&#x60; triggers a _testing mode_ where the specified token will not actually be revoked. | [optional]
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


## authTest

> map[string,object] authTest()



Checks authentication & identity.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: slackAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AuthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->authTest();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthApi->authTest: ', $e->getMessage(), PHP_EOL;
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

