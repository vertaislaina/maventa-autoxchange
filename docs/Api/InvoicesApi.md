# Vertaislaina\Maventa\AutoXChange\InvoicesApi

All URIs are relative to *https://ax.maventa.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getV1Invoices**](InvoicesApi.md#getV1Invoices) | **GET** /v1/invoices | List invoices
[**getV1InvoicesId**](InvoicesApi.md#getV1InvoicesId) | **GET** /v1/invoices/{id} | Invoice details
[**getV1InvoicesIdEvents**](InvoicesApi.md#getV1InvoicesIdEvents) | **GET** /v1/invoices/{id}/events | List invoice events
[**getV1InvoicesIdFilesFileId**](InvoicesApi.md#getV1InvoicesIdFilesFileId) | **GET** /v1/invoices/{id}/files/{file_id} | Fetch file content
[**postV1Invoices**](InvoicesApi.md#postV1Invoices) | **POST** /v1/invoices | Upload new invoice


# **getV1Invoices**
> \Vertaislaina\Maventa\AutoXChange\Entity\Invoice[] getV1Invoices($direction, $status, $ids, $number, $reference, $receivedAtStart, $receivedAtEnd, $createdAtStart, $createdAtEnd, $sort, $page, $perPage)

List invoices



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: company_auth
$config = Vertaislaina\Maventa\AutoXChange\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Vertaislaina\Maventa\AutoXChange\Api\InvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$direction = "RECEIVED"; // string | Received or sent invoices
$status = array("status_example"); // string[] | Invoice status
$ids = array("ids_example"); // string[] | Batch of invoice IDs. Maximum of 100 per query
$number = "number_example"; // string | Invoice number
$reference = "reference_example"; // string | Invoice reference
$receivedAtStart = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Received at start timestamp
$receivedAtEnd = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Received at end timestamp
$createdAtStart = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Created at start timestamp
$createdAtEnd = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Created at end timestamp
$sort = array("sort_example"); // string[] | List of fields used for sorting.   Ascending by default, include \"-\" before the field name to reverse the order (descending).   Supported values: **received_at**   E.g. -received_at
$page = 1; // int | Page to fetch
$perPage = 10; // int | Number of items per page, values up to 100 supported

try {
    $result = $apiInstance->getV1Invoices($direction, $status, $ids, $number, $reference, $receivedAtStart, $receivedAtEnd, $createdAtStart, $createdAtEnd, $sort, $page, $perPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->getV1Invoices: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **direction** | **string**| Received or sent invoices | [optional] [default to RECEIVED]
 **status** | [**string[]**](../Model/string.md)| Invoice status | [optional]
 **ids** | [**string[]**](../Model/string.md)| Batch of invoice IDs. Maximum of 100 per query | [optional]
 **number** | **string**| Invoice number | [optional]
 **reference** | **string**| Invoice reference | [optional]
 **receivedAtStart** | **\DateTime**| Received at start timestamp | [optional]
 **receivedAtEnd** | **\DateTime**| Received at end timestamp | [optional]
 **createdAtStart** | **\DateTime**| Created at start timestamp | [optional]
 **createdAtEnd** | **\DateTime**| Created at end timestamp | [optional]
 **sort** | [**string[]**](../Model/string.md)| List of fields used for sorting.   Ascending by default, include \&quot;-\&quot; before the field name to reverse the order (descending).   Supported values: **received_at**   E.g. -received_at | [optional]
 **page** | **int**| Page to fetch | [optional] [default to 1]
 **perPage** | **int**| Number of items per page, values up to 100 supported | [optional] [default to 10]

### Return type

[**\Vertaislaina\Maventa\AutoXChange\Entity\Invoice[]**](../Model/Invoice.md)

### Authorization

[company_auth](../../README.md#company_auth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getV1InvoicesId**
> \Vertaislaina\Maventa\AutoXChange\Entity\Invoice getV1InvoicesId($id, $returnFormat)

Invoice details



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: company_auth
$config = Vertaislaina\Maventa\AutoXChange\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Vertaislaina\Maventa\AutoXChange\Api\InvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Invoice ID
$returnFormat = "returnFormat_example"; // string | Desired format

try {
    $result = $apiInstance->getV1InvoicesId($id, $returnFormat);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->getV1InvoicesId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Invoice ID |
 **returnFormat** | **string**| Desired format | [optional]

### Return type

[**\Vertaislaina\Maventa\AutoXChange\Entity\Invoice**](../Model/Invoice.md)

### Authorization

[company_auth](../../README.md#company_auth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getV1InvoicesIdEvents**
> \Vertaislaina\Maventa\AutoXChange\Entity\InvoiceEvent[] getV1InvoicesIdEvents($id)

List invoice events



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: company_auth
$config = Vertaislaina\Maventa\AutoXChange\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Vertaislaina\Maventa\AutoXChange\Api\InvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Invoice ID

try {
    $result = $apiInstance->getV1InvoicesIdEvents($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->getV1InvoicesIdEvents: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Invoice ID |

### Return type

[**\Vertaislaina\Maventa\AutoXChange\Entity\InvoiceEvent[]**](../Model/InvoiceEvent.md)

### Authorization

[company_auth](../../README.md#company_auth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getV1InvoicesIdFilesFileId**
> getV1InvoicesIdFilesFileId($id, $fileId)

Fetch file content



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: company_auth
$config = Vertaislaina\Maventa\AutoXChange\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Vertaislaina\Maventa\AutoXChange\Api\InvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Invoice ID
$fileId = "fileId_example"; // string | Invoice file ID

try {
    $apiInstance->getV1InvoicesIdFilesFileId($id, $fileId);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->getV1InvoicesIdFilesFileId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Invoice ID |
 **fileId** | **string**| Invoice file ID |

### Return type

void (empty response body)

### Authorization

[company_auth](../../README.md#company_auth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postV1Invoices**
> \Vertaislaina\Maventa\AutoXChange\Entity\Invoice postV1Invoices($file, $format, $recipientType, $recipientEia, $recipientEmail, $recipientOperator, $disabledRoutes, $senderComment, $routeOrder)

Upload new invoice



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: company_auth
$config = Vertaislaina\Maventa\AutoXChange\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Vertaislaina\Maventa\AutoXChange\Api\InvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$file = "/path/to/file.txt"; // \SplFileObject | File content
$format = "format_example"; // string | File format
$recipientType = "b2b"; // string | Only in Norway, set to \"consumer\" to use route_order
$recipientEia = "recipientEia_example"; // string | Recipient EIA
$recipientEmail = "recipientEmail_example"; // string | Recipient email address
$recipientOperator = "recipientOperator_example"; // string | Recipient operator
$disabledRoutes = array("disabledRoutes_example"); // string[] | Routes to explicitly disable
$senderComment = "senderComment_example"; // string | Text that will be added in the email message if invoice is delivered by email
$routeOrder = array("routeOrder_example"); // string[] | Consumer routes to use. Leave empty to use default

try {
    $result = $apiInstance->postV1Invoices($file, $format, $recipientType, $recipientEia, $recipientEmail, $recipientOperator, $disabledRoutes, $senderComment, $routeOrder);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->postV1Invoices: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **file** | **\SplFileObject**| File content |
 **format** | **string**| File format |
 **recipientType** | **string**| Only in Norway, set to \&quot;consumer\&quot; to use route_order | [optional] [default to b2b]
 **recipientEia** | **string**| Recipient EIA | [optional]
 **recipientEmail** | **string**| Recipient email address | [optional]
 **recipientOperator** | **string**| Recipient operator | [optional]
 **disabledRoutes** | [**string[]**](../Model/string.md)| Routes to explicitly disable | [optional]
 **senderComment** | **string**| Text that will be added in the email message if invoice is delivered by email | [optional]
 **routeOrder** | [**string[]**](../Model/string.md)| Consumer routes to use. Leave empty to use default | [optional]

### Return type

[**\Vertaislaina\Maventa\AutoXChange\Entity\Invoice**](../Model/Invoice.md)

### Authorization

[company_auth](../../README.md#company_auth)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

