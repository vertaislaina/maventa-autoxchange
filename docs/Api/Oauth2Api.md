# Vertaislaina\Maventa\AutoXChange\Oauth2Api

All URIs are relative to *https://ax.maventa.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getOauth2Current**](Oauth2Api.md#getOauth2Current) | **GET** /oauth2/current | Fetch information about the authenticated user and company
[**postOauth2Token**](Oauth2Api.md#postOauth2Token) | **POST** /oauth2/token | OAuth2 token endpoint


# **getOauth2Current**
> \Vertaislaina\Maventa\AutoXChange\Entity\OAuthCurrent getOauth2Current()

Fetch information about the authenticated user and company



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: company_auth
$config = Vertaislaina\Maventa\AutoXChange\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Vertaislaina\Maventa\AutoXChange\Api\Oauth2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getOauth2Current();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Oauth2Api->getOauth2Current: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Vertaislaina\Maventa\AutoXChange\Entity\OAuthCurrent**](../Model/OAuthCurrent.md)

### Authorization

[company_auth](../../README.md#company_auth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postOauth2Token**
> \Vertaislaina\Maventa\AutoXChange\Entity\OAuthToken postOauth2Token($grantType, $clientId, $clientSecret, $scope, $vendorApiKey, $licenseData)

OAuth2 token endpoint

The endpoint enables a registered company to obtain a OAuth 2 Bearer Token, which can be used to access the companys data in all the future API calls.  A token will be active for 60 minutes.  #### Scopes  Scopes let you specify what type of access you need and limit access for granted OAuth tokens.   | Scope | Description |  |-------|-------------|                             eui|            Recommended to use when integrating to EUI. Alias for eui:open, company:read, company:write, lookup, receivables:assignments, document:send, document:receive, invoice:receive, invoice:send|                         global|                                                                                                                                         Alias for company:read, document:receive, document:send, lookup|                        company|                                                                                                                                                                   Alias for company:read, company:write|                         lookup|                                                                                                                                                                  grants access to the lookup operations|               document:receive|                                                                                                                                                            grants access to document receive operations|                  document:send|                                                                                                                                                               grants access to document send operations|                invoice:receive|                                                                                                                                                             grants access to invoice receive operations|                   invoice:send|                                                                                                                                                                grants access to invoice send operations|                   company:read|                                                                                                                                      grants read access to company settings, profiles and notifications|                  company:write|                                                                                                                                     grants write access to company settings, profiles and notifications|                       validate|                                                                                                                                                      grants access to the AutoInvoice validator service|        receivables:assignments|                                                                                                                                                 grants access to assignments in the receivables service|                       analysis|                                                                                                                                                                       grants access to analysis service|     operator:documents:receive|                                                                                                                                                               grants access to fetch received documents|        operator:documents:send|                                                                                                                                                                         grants access to send documents|                operator:lookup|                                                                                                                                                     grants access to perform actions related to lookups|          operator:participants|                                                                                                                                               grants access to perform actions on operator participants|         operator:notifications|                                                                                                                                              grants access to perform actions on operator notifications|              operator:validate|                                                                                                                                                      grants access to the AutoInvoice validator service| operator:receivables:assignments|                                                                                                                                                    grants access to assignments the receivables service| operator:receivables:assignments:create|                                                                                                                                         grants access to create assignments in the receivables servicee|              operator:analysis|                                                                                                                                                                       grants access to analysis service   If no scope is defined, the token request will default to use the scopes ```global``` and ```company```. The granted scopes will be returned in the response.  #### Vendor API key and license data  To identify the application a valid ```vendor_api_key``` should be provided in the token request. Additional license data can be provided as JSON in the ```license_data``` parameter:  ``` {   \"key\": \"C84411ED-5639-4B48-83D0-B718BB9DA0F7\", // License key of software making the call   \"meta\": {     \"licensing\":   \"VLS\",       // Information about the licensing system     \"erp_name\":    \"Visma ERP\", // Name of ERP     \"erp_version\": \"1.1\",       // Current version number of ERP     \"erp_user\":    \"rbaardse\"   // Local ERP user name   } } ```

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Vertaislaina\Maventa\AutoXChange\Api\Oauth2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$grantType = "grantType_example"; // string | The grant type
$clientId = "clientId_example"; // string | The client id
$clientSecret = "clientSecret_example"; // string | The client secret
$scope = "scope_example"; // string | Scope of the requested token
$vendorApiKey = "vendorApiKey_example"; // string | Software API key
$licenseData = "licenseData_example"; // string | License data

try {
    $result = $apiInstance->postOauth2Token($grantType, $clientId, $clientSecret, $scope, $vendorApiKey, $licenseData);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Oauth2Api->postOauth2Token: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **grantType** | **string**| The grant type |
 **clientId** | **string**| The client id | [optional]
 **clientSecret** | **string**| The client secret | [optional]
 **scope** | **string**| Scope of the requested token | [optional]
 **vendorApiKey** | **string**| Software API key | [optional]
 **licenseData** | **string**| License data | [optional]

### Return type

[**\Vertaislaina\Maventa\AutoXChange\Entity\OAuthToken**](../Model/OAuthToken.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

