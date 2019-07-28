# OpenAPI\Client\OauthApi

All URIs are relative to *https://slack.com/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**oauthAccess**](OauthApi.md#oauthAccess) | **GET** /oauth.access | 
[**oauthToken**](OauthApi.md#oauthToken) | **GET** /oauth.token | 



## oauthAccess

> \OpenAPI\Client\Model\DefaultSuccessTemplate oauthAccess($code, $redirect_uri, $client_id, $client_secret, $single_channel)



Exchanges a temporary OAuth verifier code for an access token.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: slackAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\OauthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$code = 'code_example'; // string | The `code` param returned via the OAuth callback.
$redirect_uri = 'redirect_uri_example'; // string | This must match the originally submitted URI (if one was sent).
$client_id = 'client_id_example'; // string | Issued when you created your application.
$client_secret = 'client_secret_example'; // string | Issued when you created your application.
$single_channel = True; // bool | Request the user to add your app only to a single channel.

try {
    $result = $apiInstance->oauthAccess($code, $redirect_uri, $client_id, $client_secret, $single_channel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OauthApi->oauthAccess: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **code** | **string**| The &#x60;code&#x60; param returned via the OAuth callback. | [optional]
 **redirect_uri** | **string**| This must match the originally submitted URI (if one was sent). | [optional]
 **client_id** | **string**| Issued when you created your application. | [optional]
 **client_secret** | **string**| Issued when you created your application. | [optional]
 **single_channel** | **bool**| Request the user to add your app only to a single channel. | [optional]

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


## oauthToken

> \OpenAPI\Client\Model\DefaultSuccessTemplate oauthToken($client_secret, $code, $single_channel, $client_id, $redirect_uri)



Exchanges a temporary OAuth verifier code for a workspace token.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: slackAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\OauthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$client_secret = 'client_secret_example'; // string | Issued when you created your application.
$code = 'code_example'; // string | The `code` param returned via the OAuth callback.
$single_channel = True; // bool | Request the user to add your app only to a single channel.
$client_id = 'client_id_example'; // string | Issued when you created your application.
$redirect_uri = 'redirect_uri_example'; // string | This must match the originally submitted URI (if one was sent).

try {
    $result = $apiInstance->oauthToken($client_secret, $code, $single_channel, $client_id, $redirect_uri);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OauthApi->oauthToken: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **client_secret** | **string**| Issued when you created your application. | [optional]
 **code** | **string**| The &#x60;code&#x60; param returned via the OAuth callback. | [optional]
 **single_channel** | **bool**| Request the user to add your app only to a single channel. | [optional]
 **client_id** | **string**| Issued when you created your application. | [optional]
 **redirect_uri** | **string**| This must match the originally submitted URI (if one was sent). | [optional]

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

