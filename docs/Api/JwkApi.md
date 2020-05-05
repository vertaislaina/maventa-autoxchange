# Vertaislaina\Maventa\AutoXChange\JwkApi

All URIs are relative to *https://ax.maventa.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getV1Jwk**](JwkApi.md#getV1Jwk) | **GET** /v1/jwk | 


# **getV1Jwk**
> \Vertaislaina\Maventa\AutoXChange\Entity\JWKEntries[] getV1Jwk()



List the public keys of this API

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Vertaislaina\Maventa\AutoXChange\Api\JwkApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getV1Jwk();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JwkApi->getV1Jwk: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Vertaislaina\Maventa\AutoXChange\Entity\JWKEntries[]**](../Model/JWKEntries.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

