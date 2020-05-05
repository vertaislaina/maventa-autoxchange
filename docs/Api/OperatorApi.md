# Vertaislaina\Maventa\AutoXChange\OperatorApi

All URIs are relative to *https://ax.maventa.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteV1OperatorNotificationsId**](OperatorApi.md#deleteV1OperatorNotificationsId) | **DELETE** /v1/operator/notifications/{id} | 
[**deleteV1OperatorParticipantsId**](OperatorApi.md#deleteV1OperatorParticipantsId) | **DELETE** /v1/operator/participants/{id} | 
[**getV1OperatorNotifications**](OperatorApi.md#getV1OperatorNotifications) | **GET** /v1/operator/notifications | 
[**getV1OperatorNotificationsId**](OperatorApi.md#getV1OperatorNotificationsId) | **GET** /v1/operator/notifications/{id} | 
[**getV1OperatorParticipants**](OperatorApi.md#getV1OperatorParticipants) | **GET** /v1/operator/participants | 
[**getV1OperatorParticipantsId**](OperatorApi.md#getV1OperatorParticipantsId) | **GET** /v1/operator/participants/{id} | 
[**patchV1OperatorParticipantsId**](OperatorApi.md#patchV1OperatorParticipantsId) | **PATCH** /v1/operator/participants/{id} | 
[**postV1OperatorNotifications**](OperatorApi.md#postV1OperatorNotifications) | **POST** /v1/operator/notifications | 
[**postV1OperatorParticipants**](OperatorApi.md#postV1OperatorParticipants) | **POST** /v1/operator/participants | 


# **deleteV1OperatorNotificationsId**
> deleteV1OperatorNotificationsId($id)



Delete notification subscription

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: operator_auth
$config = Vertaislaina\Maventa\AutoXChange\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Vertaislaina\Maventa\AutoXChange\Api\OperatorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Notification id

try {
    $apiInstance->deleteV1OperatorNotificationsId($id);
} catch (Exception $e) {
    echo 'Exception when calling OperatorApi->deleteV1OperatorNotificationsId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Notification id |

### Return type

void (empty response body)

### Authorization

[operator_auth](../../README.md#operator_auth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteV1OperatorParticipantsId**
> deleteV1OperatorParticipantsId($id)



Delete participant

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: operator_auth
$config = Vertaislaina\Maventa\AutoXChange\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Vertaislaina\Maventa\AutoXChange\Api\OperatorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 

try {
    $apiInstance->deleteV1OperatorParticipantsId($id);
} catch (Exception $e) {
    echo 'Exception when calling OperatorApi->deleteV1OperatorParticipantsId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

void (empty response body)

### Authorization

[operator_auth](../../README.md#operator_auth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getV1OperatorNotifications**
> \Vertaislaina\Maventa\AutoXChange\Entity\Notification[] getV1OperatorNotifications()



List notification subscriptions

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: operator_auth
$config = Vertaislaina\Maventa\AutoXChange\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Vertaislaina\Maventa\AutoXChange\Api\OperatorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getV1OperatorNotifications();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperatorApi->getV1OperatorNotifications: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Vertaislaina\Maventa\AutoXChange\Entity\Notification[]**](../Model/Notification.md)

### Authorization

[operator_auth](../../README.md#operator_auth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getV1OperatorNotificationsId**
> \Vertaislaina\Maventa\AutoXChange\Entity\Notification getV1OperatorNotificationsId($id)



Fetch a specific notification subscription

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: operator_auth
$config = Vertaislaina\Maventa\AutoXChange\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Vertaislaina\Maventa\AutoXChange\Api\OperatorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Notification id

try {
    $result = $apiInstance->getV1OperatorNotificationsId($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperatorApi->getV1OperatorNotificationsId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Notification id |

### Return type

[**\Vertaislaina\Maventa\AutoXChange\Entity\Notification**](../Model/Notification.md)

### Authorization

[operator_auth](../../README.md#operator_auth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getV1OperatorParticipants**
> \Vertaislaina\Maventa\AutoXChange\Entity\OperatorParticipant[] getV1OperatorParticipants($externalIds, $updatedAtStart, $profiles, $updatedAtEnd, $page, $perPage)



List participants registered by operator

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: operator_auth
$config = Vertaislaina\Maventa\AutoXChange\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Vertaislaina\Maventa\AutoXChange\Api\OperatorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$externalIds = array("externalIds_example"); // string[] | Participants external ids
$updatedAtStart = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Last update time starting from
$profiles = array("profiles_example"); // string[] | Profiles
$updatedAtEnd = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Last update time ending at
$page = 1; // int | Page to fetch
$perPage = 10; // int | Number of items per page, values up to 100 supported

try {
    $result = $apiInstance->getV1OperatorParticipants($externalIds, $updatedAtStart, $profiles, $updatedAtEnd, $page, $perPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperatorApi->getV1OperatorParticipants: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **externalIds** | [**string[]**](../Model/string.md)| Participants external ids | [optional]
 **updatedAtStart** | **\DateTime**| Last update time starting from | [optional]
 **profiles** | [**string[]**](../Model/string.md)| Profiles | [optional]
 **updatedAtEnd** | **\DateTime**| Last update time ending at | [optional]
 **page** | **int**| Page to fetch | [optional] [default to 1]
 **perPage** | **int**| Number of items per page, values up to 100 supported | [optional] [default to 10]

### Return type

[**\Vertaislaina\Maventa\AutoXChange\Entity\OperatorParticipant[]**](../Model/OperatorParticipant.md)

### Authorization

[operator_auth](../../README.md#operator_auth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getV1OperatorParticipantsId**
> \Vertaislaina\Maventa\AutoXChange\Entity\OperatorParticipant getV1OperatorParticipantsId($id)



Fetch participant by id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: operator_auth
$config = Vertaislaina\Maventa\AutoXChange\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Vertaislaina\Maventa\AutoXChange\Api\OperatorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 

try {
    $result = $apiInstance->getV1OperatorParticipantsId($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperatorApi->getV1OperatorParticipantsId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

[**\Vertaislaina\Maventa\AutoXChange\Entity\OperatorParticipant**](../Model/OperatorParticipant.md)

### Authorization

[operator_auth](../../README.md#operator_auth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchV1OperatorParticipantsId**
> patchV1OperatorParticipantsId($id)



Update participant information

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: operator_auth
$config = Vertaislaina\Maventa\AutoXChange\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Vertaislaina\Maventa\AutoXChange\Api\OperatorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 

try {
    $apiInstance->patchV1OperatorParticipantsId($id);
} catch (Exception $e) {
    echo 'Exception when calling OperatorApi->patchV1OperatorParticipantsId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

void (empty response body)

### Authorization

[operator_auth](../../README.md#operator_auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postV1OperatorNotifications**
> \Vertaislaina\Maventa\AutoXChange\Entity\Notification postV1OperatorNotifications($v1OperatorNotifications)



Create new notification subscription

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: operator_auth
$config = Vertaislaina\Maventa\AutoXChange\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Vertaislaina\Maventa\AutoXChange\Api\OperatorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$v1OperatorNotifications = new \Vertaislaina\Maventa\AutoXChange\Entity\PostV1OperatorNotifications(); // \Vertaislaina\Maventa\AutoXChange\Entity\PostV1OperatorNotifications | 

try {
    $result = $apiInstance->postV1OperatorNotifications($v1OperatorNotifications);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperatorApi->postV1OperatorNotifications: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **v1OperatorNotifications** | [**\Vertaislaina\Maventa\AutoXChange\Entity\PostV1OperatorNotifications**](../Model/PostV1OperatorNotifications.md)|  |

### Return type

[**\Vertaislaina\Maventa\AutoXChange\Entity\Notification**](../Model/Notification.md)

### Authorization

[operator_auth](../../README.md#operator_auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postV1OperatorParticipants**
> \Vertaislaina\Maventa\AutoXChange\Entity\OperatorParticipant postV1OperatorParticipants($v1OperatorParticipants)



Register a participant

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: operator_auth
$config = Vertaislaina\Maventa\AutoXChange\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Vertaislaina\Maventa\AutoXChange\Api\OperatorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$v1OperatorParticipants = new \Vertaislaina\Maventa\AutoXChange\Entity\PostV1OperatorParticipants(); // \Vertaislaina\Maventa\AutoXChange\Entity\PostV1OperatorParticipants | 

try {
    $result = $apiInstance->postV1OperatorParticipants($v1OperatorParticipants);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperatorApi->postV1OperatorParticipants: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **v1OperatorParticipants** | [**\Vertaislaina\Maventa\AutoXChange\Entity\PostV1OperatorParticipants**](../Model/PostV1OperatorParticipants.md)|  |

### Return type

[**\Vertaislaina\Maventa\AutoXChange\Entity\OperatorParticipant**](../Model/OperatorParticipant.md)

### Authorization

[operator_auth](../../README.md#operator_auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

