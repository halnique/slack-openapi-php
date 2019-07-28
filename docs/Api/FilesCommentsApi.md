# OpenAPI\Client\FilesCommentsApi

All URIs are relative to *https://slack.com/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**filesCommentsDelete**](FilesCommentsApi.md#filesCommentsDelete) | **POST** /files.comments.delete | 



## filesCommentsDelete

> map[string,object] filesCommentsDelete($token, $id, $file)



Deletes an existing comment on a file.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: slackAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\FilesCommentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token = 'token_example'; // string | Authentication token. Requires scope: `files:write:user`
$id = 'id_example'; // string | The comment to delete.
$file = 'file_example'; // string | File to delete a comment from.

try {
    $result = $apiInstance->filesCommentsDelete($token, $id, $file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FilesCommentsApi->filesCommentsDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| Authentication token. Requires scope: &#x60;files:write:user&#x60; | [optional]
 **id** | **string**| The comment to delete. | [optional]
 **file** | **string**| File to delete a comment from. | [optional]

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

