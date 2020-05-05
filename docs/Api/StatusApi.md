# Vertaislaina\Maventa\AutoXChange\StatusApi

All URIs are relative to *https://ax.maventa.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getStatusAuthenticated**](StatusApi.md#getStatusAuthenticated) | **GET** /status/authenticated | Status requiring authentication


# **getStatusAuthenticated**
> \Vertaislaina\Maventa\AutoXChange\Entity\Status getStatusAuthenticated()

Status requiring authentication

Returns information of currently authenticated identity. Only for testing purposes.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: company_auth
$config = Vertaislaina\Maventa\AutoXChange\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Vertaislaina\Maventa\AutoXChange\Api\StatusApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getStatusAuthenticated();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StatusApi->getStatusAuthenticated: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Vertaislaina\Maventa\AutoXChange\Entity\Status**](../Model/Status.md)

### Authorization

[company_auth](../../README.md#company_auth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

