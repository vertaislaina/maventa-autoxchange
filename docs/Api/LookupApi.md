# Vertaislaina\Maventa\AutoXChange\LookupApi

All URIs are relative to *https://ax.maventa.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getV1LookupConsumers**](LookupApi.md#getV1LookupConsumers) | **GET** /v1/lookup/consumers | Lookup for consumer recipients
[**getV1LookupEndpoints**](LookupApi.md#getV1LookupEndpoints) | **GET** /v1/lookup/endpoints | 
[**getV1LookupReceivers**](LookupApi.md#getV1LookupReceivers) | **GET** /v1/lookup/receivers | 


# **getV1LookupConsumers**
> \Vertaislaina\Maventa\AutoXChange\Entity\Consumer getV1LookupConsumers($ssn, $phoneNumber, $referenceNumber, $routes)

Lookup for consumer recipients



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: company_auth
$config = Vertaislaina\Maventa\AutoXChange\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: operator_auth
$config = Vertaislaina\Maventa\AutoXChange\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Vertaislaina\Maventa\AutoXChange\Api\LookupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ssn = "ssn_example"; // string | Social security number
$phoneNumber = "phoneNumber_example"; // string | Phone number
$referenceNumber = "referenceNumber_example"; // string | Reference number for CV registry queries
$routes = array("routes_example"); // string[] | What registries to check from. Possible values:                                                 cv,yes2all,vipps,dpi

try {
    $result = $apiInstance->getV1LookupConsumers($ssn, $phoneNumber, $referenceNumber, $routes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LookupApi->getV1LookupConsumers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ssn** | **string**| Social security number | [optional]
 **phoneNumber** | **string**| Phone number | [optional]
 **referenceNumber** | **string**| Reference number for CV registry queries | [optional]
 **routes** | [**string[]**](../Model/string.md)| What registries to check from. Possible values:                                                 cv,yes2all,vipps,dpi | [optional]

### Return type

[**\Vertaislaina\Maventa\AutoXChange\Entity\Consumer**](../Model/Consumer.md)

### Authorization

[company_auth](../../README.md#company_auth), [operator_auth](../../README.md#operator_auth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getV1LookupEndpoints**
> \Vertaislaina\Maventa\AutoXChange\Entity\Endpoint getV1LookupEndpoints($businessIds, $sending, $country)



Fetch sending options for company bid

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: company_auth
$config = Vertaislaina\Maventa\AutoXChange\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: operator_auth
$config = Vertaislaina\Maventa\AutoXChange\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Vertaislaina\Maventa\AutoXChange\Api\LookupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$businessIds = array("businessIds_example"); // string[] | Business ids. Maximum number of bids: 10
$sending = array("sending_example"); // string[] | Types of documents sent. Possible values: invoice
$country = "country_example"; // string | Country in ISO 3166-1 alpha-2 format (2 letters)

try {
    $result = $apiInstance->getV1LookupEndpoints($businessIds, $sending, $country);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LookupApi->getV1LookupEndpoints: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **businessIds** | [**string[]**](../Model/string.md)| Business ids. Maximum number of bids: 10 |
 **sending** | [**string[]**](../Model/string.md)| Types of documents sent. Possible values: invoice | [optional]
 **country** | **string**| Country in ISO 3166-1 alpha-2 format (2 letters) | [optional]

### Return type

[**\Vertaislaina\Maventa\AutoXChange\Entity\Endpoint**](../Model/Endpoint.md)

### Authorization

[company_auth](../../README.md#company_auth), [operator_auth](../../README.md#operator_auth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getV1LookupReceivers**
> \Vertaislaina\Maventa\AutoXChange\Entity\LookupEntryReceiver[] getV1LookupReceivers($network, $eia, $bid, $name, $country, $documentType, $page, $perPage)



Lookup for B2B document receivers

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: company_auth
$config = Vertaislaina\Maventa\AutoXChange\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: operator_auth
$config = Vertaislaina\Maventa\AutoXChange\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Vertaislaina\Maventa\AutoXChange\Api\LookupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network = array("network_example"); // string[] | Networks to search from eg. PEPPOL, INTERNAL, EXTERNAL
$eia = "eia_example"; // string | Full Electronic Address eg: 0192:123456789
$bid = "bid_example"; // string | Business identifier
$name = "name_example"; // string | Company name
$country = array("country_example"); // string[] | Company country in ISO 3166-1 alpha-2 format (2 letters)
$documentType = array("documentType_example"); // string[] | Document types
$page = 1; // int | Page to fetch
$perPage = 100; // int | Number of items per page, values up to 100 supported

try {
    $result = $apiInstance->getV1LookupReceivers($network, $eia, $bid, $name, $country, $documentType, $page, $perPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LookupApi->getV1LookupReceivers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **network** | [**string[]**](../Model/string.md)| Networks to search from eg. PEPPOL, INTERNAL, EXTERNAL |
 **eia** | **string**| Full Electronic Address eg: 0192:123456789 | [optional]
 **bid** | **string**| Business identifier | [optional]
 **name** | **string**| Company name | [optional]
 **country** | [**string[]**](../Model/string.md)| Company country in ISO 3166-1 alpha-2 format (2 letters) | [optional]
 **documentType** | [**string[]**](../Model/string.md)| Document types | [optional]
 **page** | **int**| Page to fetch | [optional] [default to 1]
 **perPage** | **int**| Number of items per page, values up to 100 supported | [optional] [default to 100]

### Return type

[**\Vertaislaina\Maventa\AutoXChange\Entity\LookupEntryReceiver[]**](../Model/LookupEntryReceiver.md)

### Authorization

[company_auth](../../README.md#company_auth), [operator_auth](../../README.md#operator_auth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

