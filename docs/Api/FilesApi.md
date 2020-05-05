# Vertaislaina\Maventa\AutoXChange\FilesApi

All URIs are relative to *https://ax.maventa.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getV1Files**](FilesApi.md#getV1Files) | **GET** /v1/files | 
[**getV1FilesId**](FilesApi.md#getV1FilesId) | **GET** /v1/files/{id} | 


# **getV1Files**
> \Vertaislaina\Maventa\AutoXChange\Entity\DocumentFile getV1Files($documentId)



List document files

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: company_auth
$config = Vertaislaina\Maventa\AutoXChange\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: operator_auth
$config = Vertaislaina\Maventa\AutoXChange\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Vertaislaina\Maventa\AutoXChange\Api\FilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$documentId = "documentId_example"; // string | ID of Document

try {
    $result = $apiInstance->getV1Files($documentId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FilesApi->getV1Files: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **documentId** | **string**| ID of Document |

### Return type

[**\Vertaislaina\Maventa\AutoXChange\Entity\DocumentFile**](../Model/DocumentFile.md)

### Authorization

[company_auth](../../README.md#company_auth), [operator_auth](../../README.md#operator_auth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getV1FilesId**
> getV1FilesId($id)



Get file content

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: company_auth
$config = Vertaislaina\Maventa\AutoXChange\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: operator_auth
$config = Vertaislaina\Maventa\AutoXChange\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Vertaislaina\Maventa\AutoXChange\Api\FilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | ID of DocumentFile

try {
    $apiInstance->getV1FilesId($id);
} catch (Exception $e) {
    echo 'Exception when calling FilesApi->getV1FilesId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ID of DocumentFile |

### Return type

void (empty response body)

### Authorization

[company_auth](../../README.md#company_auth), [operator_auth](../../README.md#operator_auth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

