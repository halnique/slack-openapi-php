# OpenAPI\Client\EmojiApi

All URIs are relative to *https://slack.com/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**emojiList**](EmojiApi.md#emojiList) | **GET** /emoji.list | 



## emojiList

> \OpenAPI\Client\Model\DefaultSuccessTemplate emojiList($token)



Lists custom emoji for a team.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: slackAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\EmojiApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token = 'token_example'; // string | Authentication token. Requires scope: `emoji:read`

try {
    $result = $apiInstance->emojiList($token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmojiApi->emojiList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| Authentication token. Requires scope: &#x60;emoji:read&#x60; | [optional]

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

