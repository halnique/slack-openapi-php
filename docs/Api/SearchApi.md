# OpenAPI\Client\SearchApi

All URIs are relative to *https://slack.com/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**searchMessages**](SearchApi.md#searchMessages) | **GET** /search.messages | 



## searchMessages

> \OpenAPI\Client\Model\DefaultSuccessTemplate searchMessages($sort_dir, $query, $sort, $count, $token, $highlight, $page)



Searches for messages matching a query.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: slackAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\SearchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sort_dir = 'sort_dir_example'; // string | Change sort direction to ascending (`asc`) or descending (`desc`).
$query = 'query_example'; // string | Search query.
$sort = 'sort_example'; // string | Return matches sorted by either `score` or `timestamp`.
$count = 'count_example'; // string | Pass the number of results you want per \"page\". Maximum of `100`.
$token = 'token_example'; // string | Authentication token. Requires scope: `search:read`
$highlight = True; // bool | Pass a value of `true` to enable query highlight markers (see below).
$page = 'page_example'; // string | 

try {
    $result = $apiInstance->searchMessages($sort_dir, $query, $sort, $count, $token, $highlight, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SearchApi->searchMessages: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sort_dir** | **string**| Change sort direction to ascending (&#x60;asc&#x60;) or descending (&#x60;desc&#x60;). | [optional]
 **query** | **string**| Search query. | [optional]
 **sort** | **string**| Return matches sorted by either &#x60;score&#x60; or &#x60;timestamp&#x60;. | [optional]
 **count** | **string**| Pass the number of results you want per \&quot;page\&quot;. Maximum of &#x60;100&#x60;. | [optional]
 **token** | **string**| Authentication token. Requires scope: &#x60;search:read&#x60; | [optional]
 **highlight** | **bool**| Pass a value of &#x60;true&#x60; to enable query highlight markers (see below). | [optional]
 **page** | **string**|  | [optional]

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

