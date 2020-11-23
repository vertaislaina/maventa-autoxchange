# Vertaislaina\Maventa\AutoXChange\AnalysisApi

All URIs are relative to *https://ax.maventa.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getV1AnalysisDefinitions**](AnalysisApi.md#getV1AnalysisDefinitions) | **GET** /v1/analysis/definitions | 
[**getV1AnalysisId**](AnalysisApi.md#getV1AnalysisId) | **GET** /v1/analysis/{id} | 
[**postV1Analysis**](AnalysisApi.md#postV1Analysis) | **POST** /v1/analysis | Trigger analysis for resource


# **getV1AnalysisDefinitions**
> \Vertaislaina\Maventa\AutoXChange\Entity\CheckDefinitions getV1AnalysisDefinitions()



Get definition of all supported analysis checks

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Vertaislaina\Maventa\AutoXChange\Api\AnalysisApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getV1AnalysisDefinitions();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalysisApi->getV1AnalysisDefinitions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Vertaislaina\Maventa\AutoXChange\Entity\CheckDefinitions**](../Model/CheckDefinitions.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getV1AnalysisId**
> \Vertaislaina\Maventa\AutoXChange\Entity\Analysis getV1AnalysisId($id)



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
    $result = $apiInstance->getV1AnalysisId($id);
    print_r($result);
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

[**\Vertaislaina\Maventa\AutoXChange\Entity\Analysis**](../Model/Analysis.md)

### Authorization

[company_auth](../../README.md#company_auth), [operator_auth](../../README.md#operator_auth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postV1Analysis**
> \Vertaislaina\Maventa\AutoXChange\Entity\Analysis postV1Analysis($resourceId, $resourceType, $checksToRun)

Trigger analysis for resource

Following checks can be triggered:  **SUPPLIER_ACTIVATION** Check performed on: INVOICE For invoices received through scan service, checks if the sender has sent electronic invoices in the past and could be contacted to change to electronic sending.   **SENDER_BID_STATUS** Check performed on: INVOICE Checks the invoice sender against national company register to see that the company business ID is registered and active.  The check also returns information if the company is going through solvency or bankruptcy proceedings. The registries used to get this information, depend on the country of the sender and are as follows: 1. Finland - YTJ [ http://www.ytj.fi ] 2. Norway - Brønnøysundregistrene [ https://brreg.no ] 3. Other countries -> not supported    **SENDER_WARNING_LIST** Check performed on: INVOICE Checks the invoice sender against a list of suspicious/fraud companies.   **VAT** Check performed on: INVOICE For invoices containing value added tax, checks that the sender of the invoice is found in VAT register. Note that if the total amount of value added tax on the invoice is under 1 EUR/NOK/SEK etc., the invoice sender is not checked against the VAT register. The registries used to get this information, depend on the country of the sender and are as follows: 1. Norway - Brønnøysundregistrene [ https://brreg.no ] 2. EU countries - Vies [ https://ec.europa.eu/taxation_customs/vies/ ] 3. Other countries - not supported

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
$checksToRun = array("checksToRun_example"); // string[] | Which checks to run: e.g. SUPPLIER_ACTIVATION, SENDER_BID_STATUS, SENDER_WARNING_LIST, VAT

try {
    $result = $apiInstance->postV1Analysis($resourceId, $resourceType, $checksToRun);
    print_r($result);
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
 **checksToRun** | [**string[]**](../Model/string.md)| Which checks to run: e.g. SUPPLIER_ACTIVATION, SENDER_BID_STATUS, SENDER_WARNING_LIST, VAT |

### Return type

[**\Vertaislaina\Maventa\AutoXChange\Entity\Analysis**](../Model/Analysis.md)

### Authorization

[company_auth](../../README.md#company_auth), [operator_auth](../../README.md#operator_auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

