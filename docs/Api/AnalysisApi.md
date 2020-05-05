# Vertaislaina\Maventa\AutoXChange\AnalysisApi

All URIs are relative to *https://ax.maventa.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getV1AnalysisId**](AnalysisApi.md#getV1AnalysisId) | **GET** /v1/analysis/{id} | 
[**postV1Analysis**](AnalysisApi.md#postV1Analysis) | **POST** /v1/analysis | 


# **getV1AnalysisId**
> getV1AnalysisId($id)



Resource analysis result

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: company_auth
$config = Vertaislaina\Maventa\AutoXChange\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: operator_auth
$config = Vertaislaina\Maventa\AutoXChange\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Vertaislaina\Maventa\AutoXChange\Api\AnalysisApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | The ID of the resource

try {
    $apiInstance->getV1AnalysisId($id);
} catch (Exception $e) {
    echo 'Exception when calling AnalysisApi->getV1AnalysisId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The ID of the resource |

### Return type

void (empty response body)

### Authorization

[company_auth](../../README.md#company_auth), [operator_auth](../../README.md#operator_auth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postV1Analysis**
> postV1Analysis($resourceId, $resourceType, $checksToRun)



Trigger analysis for resource

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: company_auth
$config = Vertaislaina\Maventa\AutoXChange\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: operator_auth
$config = Vertaislaina\Maventa\AutoXChange\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Vertaislaina\Maventa\AutoXChange\Api\AnalysisApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$resourceId = "resourceId_example"; // string | The ID of the resource
$resourceType = "resourceType_example"; // string | The type of the resource to run checks for
$checksToRun = array("checksToRun_example"); // string[] | Which checks to run: e.g. VAT, SUPPLIER_ACTIVATION

try {
    $apiInstance->postV1Analysis($resourceId, $resourceType, $checksToRun);
} catch (Exception $e) {
    echo 'Exception when calling AnalysisApi->postV1Analysis: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **resourceId** | **string**| The ID of the resource |
 **resourceType** | **string**| The type of the resource to run checks for |
 **checksToRun** | [**string[]**](../Model/string.md)| Which checks to run: e.g. VAT, SUPPLIER_ACTIVATION |

### Return type

void (empty response body)

### Authorization

[company_auth](../../README.md#company_auth), [operator_auth](../../README.md#operator_auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

