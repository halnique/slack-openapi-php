# OpenAPI\Client\FilesApi

All URIs are relative to *https://slack.com/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**filesCommentsDelete**](FilesApi.md#filesCommentsDelete) | **POST** /files.comments.delete | 
[**filesDelete**](FilesApi.md#filesDelete) | **POST** /files.delete | 
[**filesInfo**](FilesApi.md#filesInfo) | **GET** /files.info | 
[**filesList**](FilesApi.md#filesList) | **GET** /files.list | 
[**filesRevokePublicURL**](FilesApi.md#filesRevokePublicURL) | **POST** /files.revokePublicURL | 
[**filesSharedPublicURL**](FilesApi.md#filesSharedPublicURL) | **POST** /files.sharedPublicURL | 
[**filesUpload**](FilesApi.md#filesUpload) | **POST** /files.upload | 



## filesCommentsDelete

> map[string,object] filesCommentsDelete($token, $id, $file)



Deletes an existing comment on a file.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: slackAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\FilesApi(
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
    echo 'Exception when calling FilesApi->filesCommentsDelete: ', $e->getMessage(), PHP_EOL;
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


## filesDelete

> map[string,object] filesDelete($token, $file)



Deletes a file.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: slackAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\FilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token = 'token_example'; // string | Authentication token. Requires scope: `files:write:user`
$file = 'file_example'; // string | ID of file to delete.

try {
    $result = $apiInstance->filesDelete($token, $file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FilesApi->filesDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| Authentication token. Requires scope: &#x60;files:write:user&#x60; | [optional]
 **file** | **string**| ID of file to delete. | [optional]

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


## filesInfo

> map[string,object] filesInfo($count, $cursor, $token, $limit, $file, $page)



Gets information about a team file.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: slackAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\FilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$count = 'count_example'; // string | 
$cursor = 'cursor_example'; // string | Parameter for pagination. File comments are paginated for a single file. Set `cursor` equal to the `next_cursor` attribute returned by the previous request's `response_metadata`. This parameter is optional, but pagination is mandatory: the default value simply fetches the first \"page\" of the collection of comments. See [pagination](/docs/pagination) for more details.
$token = 'token_example'; // string | Authentication token. Requires scope: `files:read`
$limit = 56; // int | The maximum number of items to return. Fewer than the requested number of items may be returned, even if the end of the list hasn't been reached.
$file = 'file_example'; // string | Specify a file by providing its ID.
$page = 'page_example'; // string | 

try {
    $result = $apiInstance->filesInfo($count, $cursor, $token, $limit, $file, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FilesApi->filesInfo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **count** | **string**|  | [optional]
 **cursor** | **string**| Parameter for pagination. File comments are paginated for a single file. Set &#x60;cursor&#x60; equal to the &#x60;next_cursor&#x60; attribute returned by the previous request&#39;s &#x60;response_metadata&#x60;. This parameter is optional, but pagination is mandatory: the default value simply fetches the first \&quot;page\&quot; of the collection of comments. See [pagination](/docs/pagination) for more details. | [optional]
 **token** | **string**| Authentication token. Requires scope: &#x60;files:read&#x60; | [optional]
 **limit** | **int**| The maximum number of items to return. Fewer than the requested number of items may be returned, even if the end of the list hasn&#39;t been reached. | [optional]
 **file** | **string**| Specify a file by providing its ID. | [optional]
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


## filesList

> map[string,object] filesList($count, $channel, $ts_to, $ts_from, $token, $user, $page, $types)



Lists & filters team files.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: slackAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\FilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$count = 'count_example'; // string | 
$channel = 'channel_example'; // string | Filter files appearing in a specific channel, indicated by its ID.
$ts_to = 3.4; // float | Filter files created before this timestamp (inclusive).
$ts_from = 3.4; // float | Filter files created after this timestamp (inclusive).
$token = 'token_example'; // string | Authentication token. Requires scope: `files:read`
$user = 'user_example'; // string | Filter files created by a single user.
$page = 'page_example'; // string | 
$types = 'types_example'; // string | Filter files by type ([see below](#file_types)). You can pass multiple values in the types argument, like `types=spaces,snippets`.The default value is `all`, which does not filter the list.

try {
    $result = $apiInstance->filesList($count, $channel, $ts_to, $ts_from, $token, $user, $page, $types);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FilesApi->filesList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **count** | **string**|  | [optional]
 **channel** | **string**| Filter files appearing in a specific channel, indicated by its ID. | [optional]
 **ts_to** | **float**| Filter files created before this timestamp (inclusive). | [optional]
 **ts_from** | **float**| Filter files created after this timestamp (inclusive). | [optional]
 **token** | **string**| Authentication token. Requires scope: &#x60;files:read&#x60; | [optional]
 **user** | **string**| Filter files created by a single user. | [optional]
 **page** | **string**|  | [optional]
 **types** | **string**| Filter files by type ([see below](#file_types)). You can pass multiple values in the types argument, like &#x60;types&#x3D;spaces,snippets&#x60;.The default value is &#x60;all&#x60;, which does not filter the list. | [optional]

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


## filesRevokePublicURL

> map[string,object] filesRevokePublicURL($token, $file)



Revokes public/external sharing access for a file

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: slackAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\FilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token = 'token_example'; // string | Authentication token. Requires scope: `files:write:user`
$file = 'file_example'; // string | File to revoke

try {
    $result = $apiInstance->filesRevokePublicURL($token, $file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FilesApi->filesRevokePublicURL: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| Authentication token. Requires scope: &#x60;files:write:user&#x60; | [optional]
 **file** | **string**| File to revoke | [optional]

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


## filesSharedPublicURL

> map[string,object] filesSharedPublicURL($token, $file)



Enables a file for public/external sharing.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: slackAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\FilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token = 'token_example'; // string | Authentication token. Requires scope: `files:write:user`
$file = 'file_example'; // string | File to share

try {
    $result = $apiInstance->filesSharedPublicURL($token, $file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FilesApi->filesSharedPublicURL: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| Authentication token. Requires scope: &#x60;files:write:user&#x60; | [optional]
 **file** | **string**| File to share | [optional]

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


## filesUpload

> map[string,object] filesUpload($channels, $title, $initial_comment, $filetype, $filename, $content, $token, $file, $thread_ts)



Uploads or creates a file.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: slackAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\FilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$channels = 'channels_example'; // string | Comma-separated list of channel names or IDs where the file will be shared.
$title = 'title_example'; // string | Title of file.
$initial_comment = 'initial_comment_example'; // string | The message text introducing the file in specified `channels`.
$filetype = 'filetype_example'; // string | A [file type](/types/file#file_types) identifier.
$filename = 'filename_example'; // string | Filename of file.
$content = 'content_example'; // string | File contents via a POST variable. If omitting this parameter, you must provide a `file`.
$token = 'token_example'; // string | Authentication token. Requires scope: `files:write:user`
$file = 'file_example'; // string | File contents via `multipart/form-data`. If omitting this parameter, you must submit `content`.
$thread_ts = 3.4; // float | Provide another message's `ts` value to upload this file as a reply. Never use a reply's `ts` value; use its parent instead.

try {
    $result = $apiInstance->filesUpload($channels, $title, $initial_comment, $filetype, $filename, $content, $token, $file, $thread_ts);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FilesApi->filesUpload: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **channels** | **string**| Comma-separated list of channel names or IDs where the file will be shared. | [optional]
 **title** | **string**| Title of file. | [optional]
 **initial_comment** | **string**| The message text introducing the file in specified &#x60;channels&#x60;. | [optional]
 **filetype** | **string**| A [file type](/types/file#file_types) identifier. | [optional]
 **filename** | **string**| Filename of file. | [optional]
 **content** | **string**| File contents via a POST variable. If omitting this parameter, you must provide a &#x60;file&#x60;. | [optional]
 **token** | **string**| Authentication token. Requires scope: &#x60;files:write:user&#x60; | [optional]
 **file** | **string**| File contents via &#x60;multipart/form-data&#x60;. If omitting this parameter, you must submit &#x60;content&#x60;. | [optional]
 **thread_ts** | **float**| Provide another message&#39;s &#x60;ts&#x60; value to upload this file as a reply. Never use a reply&#39;s &#x60;ts&#x60; value; use its parent instead. | [optional]

### Return type

**map[string,object]**

### Authorization

[slackAuth](../../README.md#slackAuth)

### HTTP request headers

- **Content-Type**: application/x-www-form-urlencoded
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

