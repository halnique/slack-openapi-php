# OpenAPI\Client\AppsPermissionsResourcesApi

All URIs are relative to *https://slack.com/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**appsPermissionsResourcesList**](AppsPermissionsResourcesApi.md#appsPermissionsResourcesList) | **GET** /apps.permissions.resources.list | 



## appsPermissionsResourcesList

> map[string,object] appsPermissionsResourcesList($cursor, $token, $limit)



Returns list of resource grants this app has on a team.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: slackAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AppsPermissionsResourcesApi(
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
    echo 'Exception when calling AppsPermissionsResourcesApi->appsPermissionsResourcesList: ', $e->getMessage(), PHP_EOL;
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

