# Vertaislaina\Maventa\AutoXChange\DocumentsApi

All URIs are relative to *https://ax.maventa.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getV1Documents**](DocumentsApi.md#getV1Documents) | **GET** /v1/documents | Query documents
[**getV1DocumentsId**](DocumentsApi.md#getV1DocumentsId) | **GET** /v1/documents/{id} | 
[**getV1DocumentsIdEvents**](DocumentsApi.md#getV1DocumentsIdEvents) | **GET** /v1/documents/{id}/events | 
[**patchV1DocumentsId**](DocumentsApi.md#patchV1DocumentsId) | **PATCH** /v1/documents/{id} | 
[**postV1Documents**](DocumentsApi.md#postV1Documents) | **POST** /v1/documents | 


# **getV1Documents**
> \Vertaislaina\Maventa\AutoXChange\Entity\Document[] getV1Documents($direction, $type, $status, $createdAtStart, $createdAtEnd, $number, $reference, $query, $sort, $page, $perPage, $fields)

Query documents

#### Pagination and sorting The items per page parameter **per_page** will default to 10 if not provided, also the **page** parameter will default to 1 if not provided. The maximum value of the **per_page** parameter is 100. Default order of the items is descending by the created_at attribute. Additional information about returned page can be extracted from the returned header parameters:  - **X-Total**: Total number of items - **X-Total-Pages**: Total number of pages - **X-Page**: Index of the current page - **X-Next-Page**: Index of the next page - **X-Prev-Page**: Index of the previous page - **X-Per-Page**: Items per page - **Link**: Links to the first, previous, next, and last pages can be found from this header The page indexing starts from 1.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: company_auth
$config = Vertaislaina\Maventa\AutoXChange\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: operator_auth
$config = Vertaislaina\Maventa\AutoXChange\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Vertaislaina\Maventa\AutoXChange\Api\DocumentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$direction = "direction_example"; // string | Received or sent documents
$type = array("type_example"); // string[] | List of document types.                                                     Possible values: UNKNOWN, INVOICE, CREDIT_NOTE, ORDER, ORDER_RESPONSE, CATALOGUE, CATALOGUE_RESPONSE, SELF_BILLING_INVOICE, DESPATCH_ADVICE, RECEIPT, VOUCHER, BANK_FILE, REMINDER, SCAN, EXPRESSION_OF_INTEREST_REQUEST, EXPRESSION_OF_INTEREST_RESPONSE, TENDER_STATUS_REQUEST, CALL_FOR_TENDERS, TENDER, TENDER_RECEIPT
$status = array("status_example"); // string[] | List of document states.                                                     Possible values: PROCESSING, DELIVERED, CONFIRMED_DELIVERY, FAILED
$createdAtStart = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Creation time
$createdAtEnd = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Creation time
$number = "number_example"; // string | Document number
$reference = "reference_example"; // string | Document reference
$query = "query_example"; // string | Query Documents on multiple fields. (Exact matches on id, reference and number)
$sort = array("sort_example"); // string[] | List of fields used for sorting.   Ascending by default, include \"-\" before the field name to reverse the order (descending).   Supported values: **id, type, status, number, reference, created_at, received_at**   E.g. [-created_at, number]
$page = 1; // int | Page to fetch
$perPage = 10; // int | Number of items per page, values up to 100 supported
$fields = array("fields_example"); // string[] | Fields to return in response

try {
    $result = $apiInstance->getV1Documents($direction, $type, $status, $createdAtStart, $createdAtEnd, $number, $reference, $query, $sort, $page, $perPage, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentsApi->getV1Documents: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **direction** | **string**| Received or sent documents | [optional]
 **type** | [**string[]**](../Model/string.md)| List of document types.                                                     Possible values: UNKNOWN, INVOICE, CREDIT_NOTE, ORDER, ORDER_RESPONSE, CATALOGUE, CATALOGUE_RESPONSE, SELF_BILLING_INVOICE, DESPATCH_ADVICE, RECEIPT, VOUCHER, BANK_FILE, REMINDER, SCAN, EXPRESSION_OF_INTEREST_REQUEST, EXPRESSION_OF_INTEREST_RESPONSE, TENDER_STATUS_REQUEST, CALL_FOR_TENDERS, TENDER, TENDER_RECEIPT | [optional]
 **status** | [**string[]**](../Model/string.md)| List of document states.                                                     Possible values: PROCESSING, DELIVERED, CONFIRMED_DELIVERY, FAILED | [optional]
 **createdAtStart** | **\DateTime**| Creation time | [optional]
 **createdAtEnd** | **\DateTime**| Creation time | [optional]
 **number** | **string**| Document number | [optional]
 **reference** | **string**| Document reference | [optional]
 **query** | **string**| Query Documents on multiple fields. (Exact matches on id, reference and number) | [optional]
 **sort** | [**string[]**](../Model/string.md)| List of fields used for sorting.   Ascending by default, include \&quot;-\&quot; before the field name to reverse the order (descending).   Supported values: **id, type, status, number, reference, created_at, received_at**   E.g. [-created_at, number] | [optional]
 **page** | **int**| Page to fetch | [optional] [default to 1]
 **perPage** | **int**| Number of items per page, values up to 100 supported | [optional] [default to 10]
 **fields** | [**string[]**](../Model/string.md)| Fields to return in response | [optional]

### Return type

[**\Vertaislaina\Maventa\AutoXChange\Entity\Document[]**](../Model/Document.md)

### Authorization

[company_auth](../../README.md#company_auth), [operator_auth](../../README.md#operator_auth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getV1DocumentsId**
> \Vertaislaina\Maventa\AutoXChange\Entity\Document getV1DocumentsId($id, $returnFormat, $fields)



Document details

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: company_auth
$config = Vertaislaina\Maventa\AutoXChange\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: operator_auth
$config = Vertaislaina\Maventa\AutoXChange\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Vertaislaina\Maventa\AutoXChange\Api\DocumentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | ID of Document
$returnFormat = array("returnFormat_example"); // string[] | Content type for the details. Will return the stored metadata as default.
$fields = array("fields_example"); // string[] | Fields to return in response

try {
    $result = $apiInstance->getV1DocumentsId($id, $returnFormat, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentsApi->getV1DocumentsId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ID of Document |
 **returnFormat** | [**string[]**](../Model/string.md)| Content type for the details. Will return the stored metadata as default. | [optional]
 **fields** | [**string[]**](../Model/string.md)| Fields to return in response | [optional]

### Return type

[**\Vertaislaina\Maventa\AutoXChange\Entity\Document**](../Model/Document.md)

### Authorization

[company_auth](../../README.md#company_auth), [operator_auth](../../README.md#operator_auth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getV1DocumentsIdEvents**
> \Vertaislaina\Maventa\AutoXChange\Entity\DocumentEvent getV1DocumentsIdEvents($id, $fields)



Document's events

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: company_auth
$config = Vertaislaina\Maventa\AutoXChange\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: operator_auth
$config = Vertaislaina\Maventa\AutoXChange\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Vertaislaina\Maventa\AutoXChange\Api\DocumentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | ID of Document
$fields = array("fields_example"); // string[] | Fields to return in response

try {
    $result = $apiInstance->getV1DocumentsIdEvents($id, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentsApi->getV1DocumentsIdEvents: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ID of Document |
 **fields** | [**string[]**](../Model/string.md)| Fields to return in response | [optional]

### Return type

[**\Vertaislaina\Maventa\AutoXChange\Entity\DocumentEvent**](../Model/DocumentEvent.md)

### Authorization

[company_auth](../../README.md#company_auth), [operator_auth](../../README.md#operator_auth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchV1DocumentsId**
> patchV1DocumentsId($id, $v1Documents, $fields)



Update existing document

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: company_auth
$config = Vertaislaina\Maventa\AutoXChange\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: operator_auth
$config = Vertaislaina\Maventa\AutoXChange\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Vertaislaina\Maventa\AutoXChange\Api\DocumentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | ID of Document
$v1Documents = new \Vertaislaina\Maventa\AutoXChange\Entity\PatchV1Documents(); // \Vertaislaina\Maventa\AutoXChange\Entity\PatchV1Documents | 
$fields = array("fields_example"); // string[] | Fields to return in response

try {
    $apiInstance->patchV1DocumentsId($id, $v1Documents, $fields);
} catch (Exception $e) {
    echo 'Exception when calling DocumentsApi->patchV1DocumentsId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ID of Document |
 **v1Documents** | [**\Vertaislaina\Maventa\AutoXChange\Entity\PatchV1Documents**](../Model/PatchV1Documents.md)|  |
 **fields** | [**string[]**](../Model/string.md)| Fields to return in response | [optional]

### Return type

void (empty response body)

### Authorization

[company_auth](../../README.md#company_auth), [operator_auth](../../README.md#operator_auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postV1Documents**
> \Vertaislaina\Maventa\AutoXChange\Entity\Document postV1Documents($file, $filesNFile, $filesNFileType, $referencesNReferenceId, $referencesNReferenceIdType, $referencesNChecksum, $referencesNFileType, $type, $documentIdentifier, $processIdentifier, $transmissionId, $transmissionAt, $externalId, $recipientName, $recipientCountry, $recipientEia, $recipientOperator, $senderName, $senderCountry, $senderEia, $fields)



Create document

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: company_auth
$config = Vertaislaina\Maventa\AutoXChange\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: operator_auth
$config = Vertaislaina\Maventa\AutoXChange\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Vertaislaina\Maventa\AutoXChange\Api\DocumentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$file = "/path/to/file.txt"; // \SplFileObject | File content as a single file
$filesNFile = "/path/to/file.txt"; // \SplFileObject | File content as one of multiple
$filesNFileType = "filesNFileType_example"; // string | File type
$referencesNReferenceId = "referencesNReferenceId_example"; // string | Reference to use for the document
$referencesNReferenceIdType = "referencesNReferenceIdType_example"; // string | Type of reference id
$referencesNChecksum = "referencesNChecksum_example"; // string | Checksum of the referenced content
$referencesNFileType = "referencesNFileType_example"; // string | File type
$type = "type_example"; // string | Type of Document
$documentIdentifier = "documentIdentifier_example"; // string | Document identifier for the document
$processIdentifier = "processIdentifier_example"; // string | Process identifier for the document
$transmissionId = "transmissionId_example"; // string | Unique transmission ID
$transmissionAt = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Official transmission timestamp
$externalId = "externalId_example"; // string | External identifier linked to the document
$recipientName = "recipientName_example"; // string | Name of Recipient
$recipientCountry = "recipientCountry_example"; // string | Recipient country in ISO 3166-1 alpha-2 format (2 letters)
$recipientEia = "recipientEia_example"; // string | Electronic Invoicing Address of the recipient
$recipientOperator = "recipientOperator_example"; // string | Operator of Recipient
$senderName = "senderName_example"; // string | Name of Sender
$senderCountry = "senderCountry_example"; // string | Sender country in ISO 3166-1 alpha-2 format (2 letters)
$senderEia = "senderEia_example"; // string | Electronic Invoicing Address of the sender
$fields = array("fields_example"); // string[] | Fields to return in response

try {
    $result = $apiInstance->postV1Documents($file, $filesNFile, $filesNFileType, $referencesNReferenceId, $referencesNReferenceIdType, $referencesNChecksum, $referencesNFileType, $type, $documentIdentifier, $processIdentifier, $transmissionId, $transmissionAt, $externalId, $recipientName, $recipientCountry, $recipientEia, $recipientOperator, $senderName, $senderCountry, $senderEia, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentsApi->postV1Documents: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **file** | **\SplFileObject**| File content as a single file | [optional]
 **filesNFile** | **\SplFileObject**| File content as one of multiple | [optional]
 **filesNFileType** | **string**| File type | [optional]
 **referencesNReferenceId** | **string**| Reference to use for the document | [optional]
 **referencesNReferenceIdType** | **string**| Type of reference id | [optional]
 **referencesNChecksum** | **string**| Checksum of the referenced content | [optional]
 **referencesNFileType** | **string**| File type | [optional]
 **type** | **string**| Type of Document | [optional]
 **documentIdentifier** | **string**| Document identifier for the document | [optional]
 **processIdentifier** | **string**| Process identifier for the document | [optional]
 **transmissionId** | **string**| Unique transmission ID | [optional]
 **transmissionAt** | **\DateTime**| Official transmission timestamp | [optional]
 **externalId** | **string**| External identifier linked to the document | [optional]
 **recipientName** | **string**| Name of Recipient | [optional]
 **recipientCountry** | **string**| Recipient country in ISO 3166-1 alpha-2 format (2 letters) | [optional]
 **recipientEia** | **string**| Electronic Invoicing Address of the recipient | [optional]
 **recipientOperator** | **string**| Operator of Recipient | [optional]
 **senderName** | **string**| Name of Sender | [optional]
 **senderCountry** | **string**| Sender country in ISO 3166-1 alpha-2 format (2 letters) | [optional]
 **senderEia** | **string**| Electronic Invoicing Address of the sender | [optional]
 **fields** | [**string[]**](../Model/string.md)| Fields to return in response | [optional]

### Return type

[**\Vertaislaina\Maventa\AutoXChange\Entity\Document**](../Model/Document.md)

### Authorization

[company_auth](../../README.md#company_auth), [operator_auth](../../README.md#operator_auth)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

