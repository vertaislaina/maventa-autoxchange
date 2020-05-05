# Vertaislaina\Maventa\AutoXChange\OdpApi

All URIs are relative to *https://ax.maventa.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getOdpCompaniesId**](OdpApi.md#getOdpCompaniesId) | **GET** /odp/companies/{id} | 
[**patchOdpCompaniesId**](OdpApi.md#patchOdpCompaniesId) | **PATCH** /odp/companies/{id} | 


# **getOdpCompaniesId**
> \Vertaislaina\Maventa\AutoXChange\Entity\OdpCompany getOdpCompaniesId($id)



Fetch ODP company by id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: company_auth
$config = Vertaislaina\Maventa\AutoXChange\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Vertaislaina\Maventa\AutoXChange\Api\OdpApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | ID of ODP company

try {
    $result = $apiInstance->getOdpCompaniesId($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OdpApi->getOdpCompaniesId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of ODP company |

### Return type

[**\Vertaislaina\Maventa\AutoXChange\Entity\OdpCompany**](../Model/OdpCompany.md)

### Authorization

[company_auth](../../README.md#company_auth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchOdpCompaniesId**
> patchOdpCompaniesId($id, $trusted)



Update existing ODP company

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: company_auth
$config = Vertaislaina\Maventa\AutoXChange\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Vertaislaina\Maventa\AutoXChange\Api\OdpApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | ID of ODP company
$trusted = true; // bool | Is company trusted

try {
    $apiInstance->patchOdpCompaniesId($id, $trusted);
} catch (Exception $e) {
    echo 'Exception when calling OdpApi->patchOdpCompaniesId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of ODP company |
 **trusted** | **bool**| Is company trusted |

### Return type

void (empty response body)

### Authorization

[company_auth](../../README.md#company_auth)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

