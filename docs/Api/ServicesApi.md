# Vertaislaina\Maventa\AutoXChange\ServicesApi

All URIs are relative to *https://ax.maventa.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteV1ServicesReceivables**](ServicesApi.md#deleteV1ServicesReceivables) | **DELETE** /v1/services/receivables | Disable the Receivables service
[**getV1ServicesAtg**](ServicesApi.md#getV1ServicesAtg) | **GET** /v1/services/atg | List ATG agreements
[**getV1ServicesAtgAccountNumber**](ServicesApi.md#getV1ServicesAtgAccountNumber) | **GET** /v1/services/atg/{account_number} | Fetch ATG agreement
[**getV1ServicesAtgMandates**](ServicesApi.md#getV1ServicesAtgMandates) | **GET** /v1/services/atg/mandates | List B2C ATG mandates
[**getV1ServicesB2cnoConsumers**](ServicesApi.md#getV1ServicesB2cnoConsumers) | **GET** /v1/services/b2cno/consumers | List B2CNO Consumers
[**getV1ServicesReceivables**](ServicesApi.md#getV1ServicesReceivables) | **GET** /v1/services/receivables | Current state of the receivables service
[**patchV1ServicesAtgAccountNumber**](ServicesApi.md#patchV1ServicesAtgAccountNumber) | **PATCH** /v1/services/atg/{account_number} | Update existing ATG agreement
[**postV1ServicesAtg**](ServicesApi.md#postV1ServicesAtg) | **POST** /v1/services/atg | Create a new ATG agreement
[**putV1ServicesReceivables**](ServicesApi.md#putV1ServicesReceivables) | **PUT** /v1/services/receivables | Start the Receivables service onboarding


# **deleteV1ServicesReceivables**
> deleteV1ServicesReceivables()

Disable the Receivables service



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: company_auth
$config = Vertaislaina\Maventa\AutoXChange\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Vertaislaina\Maventa\AutoXChange\Api\ServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->deleteV1ServicesReceivables();
} catch (Exception $e) {
    echo 'Exception when calling ServicesApi->deleteV1ServicesReceivables: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

void (empty response body)

### Authorization

[company_auth](../../README.md#company_auth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getV1ServicesAtg**
> \Vertaislaina\Maventa\AutoXChange\Entity\CompanyAgreementsAtg[] getV1ServicesAtg()

List ATG agreements



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: company_auth
$config = Vertaislaina\Maventa\AutoXChange\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Vertaislaina\Maventa\AutoXChange\Api\ServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getV1ServicesAtg();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServicesApi->getV1ServicesAtg: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Vertaislaina\Maventa\AutoXChange\Entity\CompanyAgreementsAtg[]**](../Model/CompanyAgreementsAtg.md)

### Authorization

[company_auth](../../README.md#company_auth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getV1ServicesAtgAccountNumber**
> \Vertaislaina\Maventa\AutoXChange\Entity\CompanyAgreementsAtg getV1ServicesAtgAccountNumber($accountNumber)

Fetch ATG agreement



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: company_auth
$config = Vertaislaina\Maventa\AutoXChange\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Vertaislaina\Maventa\AutoXChange\Api\ServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accountNumber = "accountNumber_example"; // string | Account number

try {
    $result = $apiInstance->getV1ServicesAtgAccountNumber($accountNumber);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServicesApi->getV1ServicesAtgAccountNumber: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accountNumber** | **string**| Account number |

### Return type

[**\Vertaislaina\Maventa\AutoXChange\Entity\CompanyAgreementsAtg**](../Model/CompanyAgreementsAtg.md)

### Authorization

[company_auth](../../README.md#company_auth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getV1ServicesAtgMandates**
> \Vertaislaina\Maventa\AutoXChange\Entity\CompanyConsumersMandate[] getV1ServicesAtgMandates($query, $timestamp, $status, $parseValues, $page, $perPage)

List B2C ATG mandates



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: company_auth
$config = Vertaislaina\Maventa\AutoXChange\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Vertaislaina\Maventa\AutoXChange\Api\ServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$query = "query_example"; // string | Find by KID or reference
$timestamp = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Timestamp for latest update
$status = "status_example"; // string | Status
$parseValues = "parseValues_example"; // string | Parse reference and payment type from KID.Only works for <20 results
$page = 1; // int | Page to fetch
$perPage = 20; // int | Number of items per page, values up to 100 supported

try {
    $result = $apiInstance->getV1ServicesAtgMandates($query, $timestamp, $status, $parseValues, $page, $perPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServicesApi->getV1ServicesAtgMandates: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **query** | **string**| Find by KID or reference | [optional]
 **timestamp** | **\DateTime**| Timestamp for latest update | [optional]
 **status** | **string**| Status | [optional]
 **parseValues** | **string**| Parse reference and payment type from KID.Only works for &lt;20 results | [optional]
 **page** | **int**| Page to fetch | [optional] [default to 1]
 **perPage** | **int**| Number of items per page, values up to 100 supported | [optional] [default to 20]

### Return type

[**\Vertaislaina\Maventa\AutoXChange\Entity\CompanyConsumersMandate[]**](../Model/CompanyConsumersMandate.md)

### Authorization

[company_auth](../../README.md#company_auth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getV1ServicesB2cnoConsumers**
> \Vertaislaina\Maventa\AutoXChange\Entity\CompanyConsumersConsumer[] getV1ServicesB2cnoConsumers($query, $status, $page, $perPage)

List B2CNO Consumers



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: company_auth
$config = Vertaislaina\Maventa\AutoXChange\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Vertaislaina\Maventa\AutoXChange\Api\ServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$query = "query_example"; // string | List by phonenumber, name, customer_number and reference_number
$status = array("status_example"); // string[] | List of statuses
$page = 1; // int | Page to fetch
$perPage = 20; // int | Number of items per page, values up to 100 supported

try {
    $result = $apiInstance->getV1ServicesB2cnoConsumers($query, $status, $page, $perPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServicesApi->getV1ServicesB2cnoConsumers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **query** | **string**| List by phonenumber, name, customer_number and reference_number | [optional]
 **status** | [**string[]**](../Model/string.md)| List of statuses | [optional]
 **page** | **int**| Page to fetch | [optional] [default to 1]
 **perPage** | **int**| Number of items per page, values up to 100 supported | [optional] [default to 20]

### Return type

[**\Vertaislaina\Maventa\AutoXChange\Entity\CompanyConsumersConsumer[]**](../Model/CompanyConsumersConsumer.md)

### Authorization

[company_auth](../../README.md#company_auth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getV1ServicesReceivables**
> \Vertaislaina\Maventa\AutoXChange\Entity\ReceivablesService getV1ServicesReceivables()

Current state of the receivables service



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: company_auth
$config = Vertaislaina\Maventa\AutoXChange\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Vertaislaina\Maventa\AutoXChange\Api\ServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getV1ServicesReceivables();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServicesApi->getV1ServicesReceivables: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Vertaislaina\Maventa\AutoXChange\Entity\ReceivablesService**](../Model/ReceivablesService.md)

### Authorization

[company_auth](../../README.md#company_auth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchV1ServicesAtgAccountNumber**
> patchV1ServicesAtgAccountNumber($accountNumber, $v1ServicesAtg)

Update existing ATG agreement



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: company_auth
$config = Vertaislaina\Maventa\AutoXChange\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Vertaislaina\Maventa\AutoXChange\Api\ServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accountNumber = "accountNumber_example"; // string | Account number linked to agreement
$v1ServicesAtg = new \Vertaislaina\Maventa\AutoXChange\Entity\PatchV1ServicesAtg(); // \Vertaislaina\Maventa\AutoXChange\Entity\PatchV1ServicesAtg | 

try {
    $apiInstance->patchV1ServicesAtgAccountNumber($accountNumber, $v1ServicesAtg);
} catch (Exception $e) {
    echo 'Exception when calling ServicesApi->patchV1ServicesAtgAccountNumber: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accountNumber** | **string**| Account number linked to agreement |
 **v1ServicesAtg** | [**\Vertaislaina\Maventa\AutoXChange\Entity\PatchV1ServicesAtg**](../Model/PatchV1ServicesAtg.md)|  |

### Return type

void (empty response body)

### Authorization

[company_auth](../../README.md#company_auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postV1ServicesAtg**
> \Vertaislaina\Maventa\AutoXChange\Entity\CompanyAgreementsAtg postV1ServicesAtg($v1ServicesAtg)

Create a new ATG agreement



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: company_auth
$config = Vertaislaina\Maventa\AutoXChange\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Vertaislaina\Maventa\AutoXChange\Api\ServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$v1ServicesAtg = new \Vertaislaina\Maventa\AutoXChange\Entity\PostV1ServicesAtg(); // \Vertaislaina\Maventa\AutoXChange\Entity\PostV1ServicesAtg | 

try {
    $result = $apiInstance->postV1ServicesAtg($v1ServicesAtg);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServicesApi->postV1ServicesAtg: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **v1ServicesAtg** | [**\Vertaislaina\Maventa\AutoXChange\Entity\PostV1ServicesAtg**](../Model/PostV1ServicesAtg.md)|  |

### Return type

[**\Vertaislaina\Maventa\AutoXChange\Entity\CompanyAgreementsAtg**](../Model/CompanyAgreementsAtg.md)

### Authorization

[company_auth](../../README.md#company_auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putV1ServicesReceivables**
> \Vertaislaina\Maventa\AutoXChange\Entity\ReceivablesService putV1ServicesReceivables($v1ServicesReceivables)

Start the Receivables service onboarding



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: company_auth
$config = Vertaislaina\Maventa\AutoXChange\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Vertaislaina\Maventa\AutoXChange\Api\ServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$v1ServicesReceivables = new \Vertaislaina\Maventa\AutoXChange\Entity\PutV1ServicesReceivables(); // \Vertaislaina\Maventa\AutoXChange\Entity\PutV1ServicesReceivables | 

try {
    $result = $apiInstance->putV1ServicesReceivables($v1ServicesReceivables);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServicesApi->putV1ServicesReceivables: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **v1ServicesReceivables** | [**\Vertaislaina\Maventa\AutoXChange\Entity\PutV1ServicesReceivables**](../Model/PutV1ServicesReceivables.md)|  |

### Return type

[**\Vertaislaina\Maventa\AutoXChange\Entity\ReceivablesService**](../Model/ReceivablesService.md)

### Authorization

[company_auth](../../README.md#company_auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

