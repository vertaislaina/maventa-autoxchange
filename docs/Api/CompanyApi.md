# Vertaislaina\Maventa\AutoXChange\CompanyApi

All URIs are relative to *https://ax.maventa.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteV1CompanyNotificationsId**](CompanyApi.md#deleteV1CompanyNotificationsId) | **DELETE** /v1/company/notifications/{id} | Delete a specific notification subscription
[**deleteV1CompanyProfilesId**](CompanyApi.md#deleteV1CompanyProfilesId) | **DELETE** /v1/company/profiles/{id} | Delete a network registration
[**getV1CompanyConsumers**](CompanyApi.md#getV1CompanyConsumers) | **GET** /v1/company/consumers | List B2CNO Consumers
[**getV1CompanyNotifications**](CompanyApi.md#getV1CompanyNotifications) | **GET** /v1/company/notifications | List notification subscriptions
[**getV1CompanyNotificationsId**](CompanyApi.md#getV1CompanyNotificationsId) | **GET** /v1/company/notifications/{id} | Fetch a specific notification subscription
[**getV1CompanyProfiles**](CompanyApi.md#getV1CompanyProfiles) | **GET** /v1/company/profiles | List network registrations
[**getV1CompanyProfilesId**](CompanyApi.md#getV1CompanyProfilesId) | **GET** /v1/company/profiles/{id} | Fetch a network registration
[**getV1CompanySettings**](CompanyApi.md#getV1CompanySettings) | **GET** /v1/company/settings | Fetch company settings
[**patchV1CompanyProfilesId**](CompanyApi.md#patchV1CompanyProfilesId) | **PATCH** /v1/company/profiles/{id} | Update a network registration
[**patchV1CompanySettings**](CompanyApi.md#patchV1CompanySettings) | **PATCH** /v1/company/settings | Modify company settings
[**postV1CompanyNotifications**](CompanyApi.md#postV1CompanyNotifications) | **POST** /v1/company/notifications | Create new notification subscription
[**postV1CompanyProfiles**](CompanyApi.md#postV1CompanyProfiles) | **POST** /v1/company/profiles | Create network registration request


# **deleteV1CompanyNotificationsId**
> deleteV1CompanyNotificationsId($id)

Delete a specific notification subscription



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: company_auth
$config = Vertaislaina\Maventa\AutoXChange\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Vertaislaina\Maventa\AutoXChange\Api\CompanyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Notification id

try {
    $apiInstance->deleteV1CompanyNotificationsId($id);
} catch (Exception $e) {
    echo 'Exception when calling CompanyApi->deleteV1CompanyNotificationsId: ', $e->getMessage(), PHP_EOL;
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

[company_auth](../../README.md#company_auth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteV1CompanyProfilesId**
> deleteV1CompanyProfilesId($id)

Delete a network registration



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: company_auth
$config = Vertaislaina\Maventa\AutoXChange\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Vertaislaina\Maventa\AutoXChange\Api\CompanyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Profile id

try {
    $apiInstance->deleteV1CompanyProfilesId($id);
} catch (Exception $e) {
    echo 'Exception when calling CompanyApi->deleteV1CompanyProfilesId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Profile id |

### Return type

void (empty response body)

### Authorization

[company_auth](../../README.md#company_auth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getV1CompanyConsumers**
> \Vertaislaina\Maventa\AutoXChange\Entity\CompanyConsumersConsumer[] getV1CompanyConsumers($query, $status, $page, $perPage)

List B2CNO Consumers



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: company_auth
$config = Vertaislaina\Maventa\AutoXChange\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Vertaislaina\Maventa\AutoXChange\Api\CompanyApi(
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
    $result = $apiInstance->getV1CompanyConsumers($query, $status, $page, $perPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyApi->getV1CompanyConsumers: ', $e->getMessage(), PHP_EOL;
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

# **getV1CompanyNotifications**
> \Vertaislaina\Maventa\AutoXChange\Entity\NotificationsNotification[] getV1CompanyNotifications()

List notification subscriptions



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: company_auth
$config = Vertaislaina\Maventa\AutoXChange\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Vertaislaina\Maventa\AutoXChange\Api\CompanyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getV1CompanyNotifications();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyApi->getV1CompanyNotifications: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Vertaislaina\Maventa\AutoXChange\Entity\NotificationsNotification[]**](../Model/NotificationsNotification.md)

### Authorization

[company_auth](../../README.md#company_auth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getV1CompanyNotificationsId**
> \Vertaislaina\Maventa\AutoXChange\Entity\NotificationsNotification getV1CompanyNotificationsId($id)

Fetch a specific notification subscription



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: company_auth
$config = Vertaislaina\Maventa\AutoXChange\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Vertaislaina\Maventa\AutoXChange\Api\CompanyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Notification id

try {
    $result = $apiInstance->getV1CompanyNotificationsId($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyApi->getV1CompanyNotificationsId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Notification id |

### Return type

[**\Vertaislaina\Maventa\AutoXChange\Entity\NotificationsNotification**](../Model/NotificationsNotification.md)

### Authorization

[company_auth](../../README.md#company_auth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getV1CompanyProfiles**
> \Vertaislaina\Maventa\AutoXChange\Entity\CompanyProfile[] getV1CompanyProfiles($network, $status)

List network registrations



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: company_auth
$config = Vertaislaina\Maventa\AutoXChange\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Vertaislaina\Maventa\AutoXChange\Api\CompanyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network = array("network_example"); // string[] | Network filter
$status = array("status_example"); // string[] | Status filter

try {
    $result = $apiInstance->getV1CompanyProfiles($network, $status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyApi->getV1CompanyProfiles: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **network** | [**string[]**](../Model/string.md)| Network filter | [optional]
 **status** | [**string[]**](../Model/string.md)| Status filter | [optional]

### Return type

[**\Vertaislaina\Maventa\AutoXChange\Entity\CompanyProfile[]**](../Model/CompanyProfile.md)

### Authorization

[company_auth](../../README.md#company_auth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getV1CompanyProfilesId**
> \Vertaislaina\Maventa\AutoXChange\Entity\CompanyProfile getV1CompanyProfilesId($id)

Fetch a network registration



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: company_auth
$config = Vertaislaina\Maventa\AutoXChange\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Vertaislaina\Maventa\AutoXChange\Api\CompanyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Profile id

try {
    $result = $apiInstance->getV1CompanyProfilesId($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyApi->getV1CompanyProfilesId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Profile id |

### Return type

[**\Vertaislaina\Maventa\AutoXChange\Entity\CompanyProfile**](../Model/CompanyProfile.md)

### Authorization

[company_auth](../../README.md#company_auth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getV1CompanySettings**
> \Vertaislaina\Maventa\AutoXChange\Entity\CompanySettingsSettings getV1CompanySettings($fields)

Fetch company settings



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: company_auth
$config = Vertaislaina\Maventa\AutoXChange\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Vertaislaina\Maventa\AutoXChange\Api\CompanyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fields = array("fields_example"); // string[] | Filter the response to only include requested fields.                                     Possible values: dataflyt_link, dataflyt, invoice_notifications, send_invoice_email, address, details, send_invoice_print, send_invoice_general, logos, checks

try {
    $result = $apiInstance->getV1CompanySettings($fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyApi->getV1CompanySettings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fields** | [**string[]**](../Model/string.md)| Filter the response to only include requested fields.                                     Possible values: dataflyt_link, dataflyt, invoice_notifications, send_invoice_email, address, details, send_invoice_print, send_invoice_general, logos, checks | [optional]

### Return type

[**\Vertaislaina\Maventa\AutoXChange\Entity\CompanySettingsSettings**](../Model/CompanySettingsSettings.md)

### Authorization

[company_auth](../../README.md#company_auth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchV1CompanyProfilesId**
> patchV1CompanyProfilesId($id, $v1CompanyProfiles)

Update a network registration



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: company_auth
$config = Vertaislaina\Maventa\AutoXChange\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Vertaislaina\Maventa\AutoXChange\Api\CompanyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Profile id
$v1CompanyProfiles = new \Vertaislaina\Maventa\AutoXChange\Entity\PatchV1CompanyProfiles(); // \Vertaislaina\Maventa\AutoXChange\Entity\PatchV1CompanyProfiles | 

try {
    $apiInstance->patchV1CompanyProfilesId($id, $v1CompanyProfiles);
} catch (Exception $e) {
    echo 'Exception when calling CompanyApi->patchV1CompanyProfilesId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Profile id |
 **v1CompanyProfiles** | [**\Vertaislaina\Maventa\AutoXChange\Entity\PatchV1CompanyProfiles**](../Model/PatchV1CompanyProfiles.md)|  |

### Return type

void (empty response body)

### Authorization

[company_auth](../../README.md#company_auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchV1CompanySettings**
> patchV1CompanySettings($v1CompanySettings)

Modify company settings

### Company checks  Currently supported on_invoice_receive checks: SUPPLIER_ACTIVATION, SENDER_BID_STATUS, SENDER_WARNING_LIST, VAT  ``` {   \"checks\": {     \"on_invoice_receive\": [       \"SUPPLIER_ACTIVATION\"     ]   } } ```   ### Company logos  ``` {   \"logos\": {   } } ```   ### Company general settings  ``` {   \"send_invoice_general\": {     \"hold_multiple_recipients\": false,     \"stop_duplicate_numbers\": false   } } ```   ### Company invoice print settings  ``` {   \"send_invoice_print\": {     \"enabled\": false,     \"letter_class\": \"ECONOMY\",     \"color_scheme\": \"BLACK_AND_WHITE\",     \"attachment_print\": false,     \"marketing_page\": false,     \"use_own_pdf\": false   } } ```   ### Company details  ``` {   \"details\": {     \"name\": \"My Company Ltd\",     \"email\": \"info@company.com\",     \"website\": \"https://my.company.com\"   } } ```  ### Company address  ``` {   \"address\": {     \"street_address\": \"My street 1\",     \"post_code\": \"123456\",     \"post_office\": \"Oslo\",     \"city\": \"Oslo\",     \"country\": \"NO\"   } } ```    ### Company send invoice email related settings  ``` {   \"send_invoice_email\": {     \"enabled\": true,     \"how_to_send\": \"EMBEDDED | WITH_OBJECTIONS | WITH_LINK (only if enabled is true)\",     \"reminder_frequency\": 4,     \"content_data\": {       \"note_to_receiver\": \"A message added to the receiver\",       \"contact\": {         \"email\": \"invoices@company.com (this is validated by sending a link email to the email)\",         \"name\": \"Info User\",         \"phone\": \"+555 55 555 5555\"       }     }   } } ```   ### Company invoice notification settings  ``` {   \"invoice_notifications\": {     \"on_receiving\": {       \"enabled\": true,       \"how_to_send\": \"OTHER_EMAIL\",       \"other_email\": \"info@company.com\"     },     \"on_send_errors\": {       \"to_user\": true,       \"to_emails\": [         \"info@company.com\"       ]     }   } } ```   ### Landbrukets Dataflyt settings for the accounting company  To enable the receiving of invoices from Landbrukets Dataflyt the accounting company has to provide it's credentials to the Dataflyt registry.  Example of request body for setting the Dataflyt credentials:  ``` {   \"dataflyt\": {     \"username\": \"username\",     \"password\": \"password\"   } } ```   ### Landbrukets Dataflyt settings for the farmer  To enable an accounting company to start receiving invoices on behaf of the farmer, the farmer company has to create a link between itself and the accounting company. The user that creates the link has to be a user in both the farmers company and the accounting office company. Example of request body for setting the Dataflyt credentials:  ``` {   \"dataflyt_link\": {     \"acc_company_id\": \"bf10ea9e-47f6-4809-a7ae-565b17e79d84\",     \"orgnumber\": \"123456789\"   } } ```  It's also possible to set or change the ```dataflyt_id``` used for fetching the invoices, by providing the value in the request.  ``` {   \"dataflyt_link\": {     \"acc_company_id\": \"e39ab7c9-5103-4187-b215-337943ee0700\",     \"orgnumber\": \"123456789\",     \"dataflyt_id\": 2000   } } ```  To disable the receiving of self billing invoices the link between the farmers company and the accounting company has to be reset.  ``` {   \"dataflyt_link\": {     \"acc_company_id\": null   } } ```

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: company_auth
$config = Vertaislaina\Maventa\AutoXChange\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Vertaislaina\Maventa\AutoXChange\Api\CompanyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$v1CompanySettings = new \Vertaislaina\Maventa\AutoXChange\Entity\PatchV1CompanySettings(); // \Vertaislaina\Maventa\AutoXChange\Entity\PatchV1CompanySettings | 

try {
    $apiInstance->patchV1CompanySettings($v1CompanySettings);
} catch (Exception $e) {
    echo 'Exception when calling CompanyApi->patchV1CompanySettings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **v1CompanySettings** | [**\Vertaislaina\Maventa\AutoXChange\Entity\PatchV1CompanySettings**](../Model/PatchV1CompanySettings.md)|  |

### Return type

void (empty response body)

### Authorization

[company_auth](../../README.md#company_auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postV1CompanyNotifications**
> \Vertaislaina\Maventa\AutoXChange\Entity\NotificationsNotification postV1CompanyNotifications($v1CompanyNotifications)

Create new notification subscription



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: company_auth
$config = Vertaislaina\Maventa\AutoXChange\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Vertaislaina\Maventa\AutoXChange\Api\CompanyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$v1CompanyNotifications = new \Vertaislaina\Maventa\AutoXChange\Entity\PostV1CompanyNotifications(); // \Vertaislaina\Maventa\AutoXChange\Entity\PostV1CompanyNotifications | 

try {
    $result = $apiInstance->postV1CompanyNotifications($v1CompanyNotifications);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyApi->postV1CompanyNotifications: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **v1CompanyNotifications** | [**\Vertaislaina\Maventa\AutoXChange\Entity\PostV1CompanyNotifications**](../Model/PostV1CompanyNotifications.md)|  |

### Return type

[**\Vertaislaina\Maventa\AutoXChange\Entity\NotificationsNotification**](../Model/NotificationsNotification.md)

### Authorization

[company_auth](../../README.md#company_auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postV1CompanyProfiles**
> \Vertaislaina\Maventa\AutoXChange\Entity\CompanyProfile postV1CompanyProfiles($v1CompanyProfiles)

Create network registration request



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: company_auth
$config = Vertaislaina\Maventa\AutoXChange\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Vertaislaina\Maventa\AutoXChange\Api\CompanyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$v1CompanyProfiles = new \Vertaislaina\Maventa\AutoXChange\Entity\PostV1CompanyProfiles(); // \Vertaislaina\Maventa\AutoXChange\Entity\PostV1CompanyProfiles | 

try {
    $result = $apiInstance->postV1CompanyProfiles($v1CompanyProfiles);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyApi->postV1CompanyProfiles: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **v1CompanyProfiles** | [**\Vertaislaina\Maventa\AutoXChange\Entity\PostV1CompanyProfiles**](../Model/PostV1CompanyProfiles.md)|  |

### Return type

[**\Vertaislaina\Maventa\AutoXChange\Entity\CompanyProfile**](../Model/CompanyProfile.md)

### Authorization

[company_auth](../../README.md#company_auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

