# Maventa AutoXChange

This PHP package is automatically generated by the [Swagger Codegen](https://github.com/swagger-api/swagger-codegen) project:

- API version: 0.85.82
- Build package: io.swagger.codegen.languages.PhpClientCodegen

```sh
java -jar swagger-codegen-cli.jar generate -i https://ax.maventa.com/swagger_doc -l php -DvariableNamingConvention=camelCase --invoker-package=Vertaislaina\\Maventa\\AutoXChange --git-user-id=vertaislaina --git-repo-id=maventa-autoxchange -DapiTests=false -DmodelTests=false -DsrcBasePath=src --model-package=Entity -DpackagePath=.
```

## Requirements

PHP 5.5 and later

## Installation & Usage
### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```
{
  "repositories": [
    {
      "type": "git",
      "url": "https://github.com/vertaislaina/maventa-autoxchange.git"
    }
  ],
  "require": {
    "vertaislaina/maventa-autoxchange": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/./vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

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

## Documentation for API Endpoints

All URIs are relative to *https://ax.maventa.com*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AnalysisApi* | [**getV1AnalysisId**](docs/Api/AnalysisApi.md#getv1analysisid) | **GET** /v1/analysis/{id} | 
*AnalysisApi* | [**postV1Analysis**](docs/Api/AnalysisApi.md#postv1analysis) | **POST** /v1/analysis | Trigger analysis for resource
*CompanyApi* | [**deleteV1CompanyNotificationsId**](docs/Api/CompanyApi.md#deletev1companynotificationsid) | **DELETE** /v1/company/notifications/{id} | Delete a specific notification subscription
*CompanyApi* | [**deleteV1CompanyProfilesId**](docs/Api/CompanyApi.md#deletev1companyprofilesid) | **DELETE** /v1/company/profiles/{id} | Delete a network registration
*CompanyApi* | [**getV1CompanyConsumers**](docs/Api/CompanyApi.md#getv1companyconsumers) | **GET** /v1/company/consumers | List B2CNO Consumers
*CompanyApi* | [**getV1CompanyNotifications**](docs/Api/CompanyApi.md#getv1companynotifications) | **GET** /v1/company/notifications | List notification subscriptions
*CompanyApi* | [**getV1CompanyNotificationsId**](docs/Api/CompanyApi.md#getv1companynotificationsid) | **GET** /v1/company/notifications/{id} | Fetch a specific notification subscription
*CompanyApi* | [**getV1CompanyProfiles**](docs/Api/CompanyApi.md#getv1companyprofiles) | **GET** /v1/company/profiles | List network registrations
*CompanyApi* | [**getV1CompanyProfilesId**](docs/Api/CompanyApi.md#getv1companyprofilesid) | **GET** /v1/company/profiles/{id} | Fetch a network registration
*CompanyApi* | [**getV1CompanySettings**](docs/Api/CompanyApi.md#getv1companysettings) | **GET** /v1/company/settings | Fetch company settings
*CompanyApi* | [**patchV1CompanyProfilesId**](docs/Api/CompanyApi.md#patchv1companyprofilesid) | **PATCH** /v1/company/profiles/{id} | Update a network registration
*CompanyApi* | [**patchV1CompanySettings**](docs/Api/CompanyApi.md#patchv1companysettings) | **PATCH** /v1/company/settings | Modify company settings
*CompanyApi* | [**postV1CompanyNotifications**](docs/Api/CompanyApi.md#postv1companynotifications) | **POST** /v1/company/notifications | Create new notification subscription
*CompanyApi* | [**postV1CompanyProfiles**](docs/Api/CompanyApi.md#postv1companyprofiles) | **POST** /v1/company/profiles | Create network registration request
*DocumentsApi* | [**getV1Documents**](docs/Api/DocumentsApi.md#getv1documents) | **GET** /v1/documents | Query documents
*DocumentsApi* | [**getV1DocumentsId**](docs/Api/DocumentsApi.md#getv1documentsid) | **GET** /v1/documents/{id} | 
*DocumentsApi* | [**getV1DocumentsIdEvents**](docs/Api/DocumentsApi.md#getv1documentsidevents) | **GET** /v1/documents/{id}/events | 
*DocumentsApi* | [**patchV1DocumentsId**](docs/Api/DocumentsApi.md#patchv1documentsid) | **PATCH** /v1/documents/{id} | 
*DocumentsApi* | [**postV1Documents**](docs/Api/DocumentsApi.md#postv1documents) | **POST** /v1/documents | 
*FilesApi* | [**getV1Files**](docs/Api/FilesApi.md#getv1files) | **GET** /v1/files | 
*FilesApi* | [**getV1FilesId**](docs/Api/FilesApi.md#getv1filesid) | **GET** /v1/files/{id} | 
*InvoicesApi* | [**getV1Invoices**](docs/Api/InvoicesApi.md#getv1invoices) | **GET** /v1/invoices | List invoices
*InvoicesApi* | [**getV1InvoicesId**](docs/Api/InvoicesApi.md#getv1invoicesid) | **GET** /v1/invoices/{id} | Invoice details
*InvoicesApi* | [**getV1InvoicesIdActions**](docs/Api/InvoicesApi.md#getv1invoicesidactions) | **GET** /v1/invoices/{id}/actions | List invoice actions
*InvoicesApi* | [**getV1InvoicesIdFilesFileId**](docs/Api/InvoicesApi.md#getv1invoicesidfilesfileid) | **GET** /v1/invoices/{id}/files/{file_id} | Fetch file content
*InvoicesApi* | [**postV1Invoices**](docs/Api/InvoicesApi.md#postv1invoices) | **POST** /v1/invoices | Upload new invoice
*JwkApi* | [**getV1Jwk**](docs/Api/JwkApi.md#getv1jwk) | **GET** /v1/jwk | 
*LookupApi* | [**getV1LookupConsumers**](docs/Api/LookupApi.md#getv1lookupconsumers) | **GET** /v1/lookup/consumers | Lookup for consumer recipients
*LookupApi* | [**getV1LookupEndpoints**](docs/Api/LookupApi.md#getv1lookupendpoints) | **GET** /v1/lookup/endpoints | 
*LookupApi* | [**getV1LookupReceivers**](docs/Api/LookupApi.md#getv1lookupreceivers) | **GET** /v1/lookup/receivers | 
*Oauth2Api* | [**getOauth2Current**](docs/Api/Oauth2Api.md#getoauth2current) | **GET** /oauth2/current | Fetch information about the authenticated user and company
*Oauth2Api* | [**postOauth2Token**](docs/Api/Oauth2Api.md#postoauth2token) | **POST** /oauth2/token | OAuth2 token endpoint
*OdpApi* | [**getOdpCompaniesId**](docs/Api/OdpApi.md#getodpcompaniesid) | **GET** /odp/companies/{id} | 
*OdpApi* | [**patchOdpCompaniesId**](docs/Api/OdpApi.md#patchodpcompaniesid) | **PATCH** /odp/companies/{id} | 
*OperatorApi* | [**deleteV1OperatorNotificationsId**](docs/Api/OperatorApi.md#deletev1operatornotificationsid) | **DELETE** /v1/operator/notifications/{id} | 
*OperatorApi* | [**deleteV1OperatorParticipantsId**](docs/Api/OperatorApi.md#deletev1operatorparticipantsid) | **DELETE** /v1/operator/participants/{id} | 
*OperatorApi* | [**getV1OperatorNotifications**](docs/Api/OperatorApi.md#getv1operatornotifications) | **GET** /v1/operator/notifications | 
*OperatorApi* | [**getV1OperatorNotificationsId**](docs/Api/OperatorApi.md#getv1operatornotificationsid) | **GET** /v1/operator/notifications/{id} | 
*OperatorApi* | [**getV1OperatorParticipants**](docs/Api/OperatorApi.md#getv1operatorparticipants) | **GET** /v1/operator/participants | 
*OperatorApi* | [**getV1OperatorParticipantsId**](docs/Api/OperatorApi.md#getv1operatorparticipantsid) | **GET** /v1/operator/participants/{id} | 
*OperatorApi* | [**patchV1OperatorParticipantsId**](docs/Api/OperatorApi.md#patchv1operatorparticipantsid) | **PATCH** /v1/operator/participants/{id} | 
*OperatorApi* | [**postV1OperatorNotifications**](docs/Api/OperatorApi.md#postv1operatornotifications) | **POST** /v1/operator/notifications | 
*OperatorApi* | [**postV1OperatorParticipants**](docs/Api/OperatorApi.md#postv1operatorparticipants) | **POST** /v1/operator/participants | 
*ServicesApi* | [**deleteV1ServicesReceivables**](docs/Api/ServicesApi.md#deletev1servicesreceivables) | **DELETE** /v1/services/receivables | Disable the Receivables service
*ServicesApi* | [**getV1ServicesAtg**](docs/Api/ServicesApi.md#getv1servicesatg) | **GET** /v1/services/atg | List ATG agreements
*ServicesApi* | [**getV1ServicesAtgAccountNumber**](docs/Api/ServicesApi.md#getv1servicesatgaccountnumber) | **GET** /v1/services/atg/{account_number} | Fetch ATG agreement
*ServicesApi* | [**getV1ServicesAtgMandates**](docs/Api/ServicesApi.md#getv1servicesatgmandates) | **GET** /v1/services/atg/mandates | List B2C ATG mandates
*ServicesApi* | [**getV1ServicesB2cnoConsumers**](docs/Api/ServicesApi.md#getv1servicesb2cnoconsumers) | **GET** /v1/services/b2cno/consumers | List B2CNO Consumers
*ServicesApi* | [**getV1ServicesReceivables**](docs/Api/ServicesApi.md#getv1servicesreceivables) | **GET** /v1/services/receivables | Current state of the receivables service
*ServicesApi* | [**patchV1ServicesAtgAccountNumber**](docs/Api/ServicesApi.md#patchv1servicesatgaccountnumber) | **PATCH** /v1/services/atg/{account_number} | Update existing ATG agreement
*ServicesApi* | [**postV1ServicesAtg**](docs/Api/ServicesApi.md#postv1servicesatg) | **POST** /v1/services/atg | Create a new ATG agreement
*ServicesApi* | [**putV1ServicesReceivables**](docs/Api/ServicesApi.md#putv1servicesreceivables) | **PUT** /v1/services/receivables | Start the Receivables service onboarding
*StatusApi* | [**getStatusAuthenticated**](docs/Api/StatusApi.md#getstatusauthenticated) | **GET** /status/authenticated | Status requiring authentication


## Documentation For Models

 - [AnalysisAnalysisResult](docs/Model/AnalysisAnalysisResult.md)
 - [AnalysisAnalysisResultInfo](docs/Model/AnalysisAnalysisResultInfo.md)
 - [CompanyAgreementsAtg](docs/Model/CompanyAgreementsAtg.md)
 - [CompanyConsumersConsumer](docs/Model/CompanyConsumersConsumer.md)
 - [CompanyConsumersMandate](docs/Model/CompanyConsumersMandate.md)
 - [CompanyParty](docs/Model/CompanyParty.md)
 - [CompanyProfile](docs/Model/CompanyProfile.md)
 - [CompanyProfileEvent](docs/Model/CompanyProfileEvent.md)
 - [CompanySettingsCompanyAddress](docs/Model/CompanySettingsCompanyAddress.md)
 - [CompanySettingsCompanyChecks](docs/Model/CompanySettingsCompanyChecks.md)
 - [CompanySettingsCompanyDetails](docs/Model/CompanySettingsCompanyDetails.md)
 - [CompanySettingsCompanyInvoiceNotifications](docs/Model/CompanySettingsCompanyInvoiceNotifications.md)
 - [CompanySettingsCompanyLogoData](docs/Model/CompanySettingsCompanyLogoData.md)
 - [CompanySettingsCompanyLogos](docs/Model/CompanySettingsCompanyLogos.md)
 - [CompanySettingsCompanySendInvoiceEmail](docs/Model/CompanySettingsCompanySendInvoiceEmail.md)
 - [CompanySettingsCompanySendInvoiceEmailContentData](docs/Model/CompanySettingsCompanySendInvoiceEmailContentData.md)
 - [CompanySettingsCompanySendInvoiceEmailContentDataContactData](docs/Model/CompanySettingsCompanySendInvoiceEmailContentDataContactData.md)
 - [CompanySettingsCompanySendInvoiceEmailOnReceivingData](docs/Model/CompanySettingsCompanySendInvoiceEmailOnReceivingData.md)
 - [CompanySettingsCompanySendInvoiceEmailOnSendErrorsData](docs/Model/CompanySettingsCompanySendInvoiceEmailOnSendErrorsData.md)
 - [CompanySettingsCompanySendInvoiceGeneralSettings](docs/Model/CompanySettingsCompanySendInvoiceGeneralSettings.md)
 - [CompanySettingsCompanySendInvoicePrintSettings](docs/Model/CompanySettingsCompanySendInvoicePrintSettings.md)
 - [CompanySettingsDataflyt](docs/Model/CompanySettingsDataflyt.md)
 - [CompanySettingsDataflytIn](docs/Model/CompanySettingsDataflytIn.md)
 - [CompanySettingsDataflytLink](docs/Model/CompanySettingsDataflytLink.md)
 - [CompanySettingsDataflytLinkIn](docs/Model/CompanySettingsDataflytLinkIn.md)
 - [CompanySettingsSettings](docs/Model/CompanySettingsSettings.md)
 - [Consumer](docs/Model/Consumer.md)
 - [ConsumerRoutes](docs/Model/ConsumerRoutes.md)
 - [CvRoute](docs/Model/CvRoute.md)
 - [Document](docs/Model/Document.md)
 - [DocumentEvent](docs/Model/DocumentEvent.md)
 - [DocumentFileInDocument](docs/Model/DocumentFileInDocument.md)
 - [DocumentParty](docs/Model/DocumentParty.md)
 - [DocumentRecipientParty](docs/Model/DocumentRecipientParty.md)
 - [DocumentType](docs/Model/DocumentType.md)
 - [DpiRoute](docs/Model/DpiRoute.md)
 - [Endpoint](docs/Model/Endpoint.md)
 - [Error](docs/Model/Error.md)
 - [Identifier](docs/Model/Identifier.md)
 - [Invoice](docs/Model/Invoice.md)
 - [InvoiceAction](docs/Model/InvoiceAction.md)
 - [InvoiceFile](docs/Model/InvoiceFile.md)
 - [InvoiceRecipientParty](docs/Model/InvoiceRecipientParty.md)
 - [InvoiceSenderParty](docs/Model/InvoiceSenderParty.md)
 - [JWKEntries](docs/Model/JWKEntries.md)
 - [JWKEntry](docs/Model/JWKEntry.md)
 - [LookupEntryReceiver](docs/Model/LookupEntryReceiver.md)
 - [NotificationsNotification](docs/Model/NotificationsNotification.md)
 - [OAuthCurrent](docs/Model/OAuthCurrent.md)
 - [OAuthToken](docs/Model/OAuthToken.md)
 - [OdpCompany](docs/Model/OdpCompany.md)
 - [OdpService](docs/Model/OdpService.md)
 - [OperatorParticipant](docs/Model/OperatorParticipant.md)
 - [Participant](docs/Model/Participant.md)
 - [PatchV1CompanyProfiles](docs/Model/PatchV1CompanyProfiles.md)
 - [PatchV1CompanySettings](docs/Model/PatchV1CompanySettings.md)
 - [PatchV1Documents](docs/Model/PatchV1Documents.md)
 - [PatchV1ServicesAtg](docs/Model/PatchV1ServicesAtg.md)
 - [PostV1CompanyNotifications](docs/Model/PostV1CompanyNotifications.md)
 - [PostV1CompanyProfiles](docs/Model/PostV1CompanyProfiles.md)
 - [PostV1OperatorNotifications](docs/Model/PostV1OperatorNotifications.md)
 - [PostV1OperatorParticipants](docs/Model/PostV1OperatorParticipants.md)
 - [PostV1ServicesAtg](docs/Model/PostV1ServicesAtg.md)
 - [PutV1ServicesReceivables](docs/Model/PutV1ServicesReceivables.md)
 - [PutV1ServicesReceivablesBillingAddress](docs/Model/PutV1ServicesReceivablesBillingAddress.md)
 - [PutV1ServicesReceivablesPostalAddress](docs/Model/PutV1ServicesReceivablesPostalAddress.md)
 - [ReceivablesService](docs/Model/ReceivablesService.md)
 - [Status](docs/Model/Status.md)
 - [User](docs/Model/User.md)
 - [VFSFIBillingAddress](docs/Model/VFSFIBillingAddress.md)
 - [VFSFIData](docs/Model/VFSFIData.md)
 - [VFSFINote](docs/Model/VFSFINote.md)
 - [VippsRoute](docs/Model/VippsRoute.md)
 - [Yes2AllRoute](docs/Model/Yes2AllRoute.md)


## Documentation For Authorization


## company_auth

- **Type**: OAuth
- **Flow**: application
- **Authorization URL**: 
- **Scopes**: 
 - **eui**: Recommended to use when integrating to EUI. Alias for eui:open, company:read, company:write, lookup, receivables:assignments, document:send, document:receive, invoice:receive, invoice:send
 - **global**: Alias for company:read, document:receive, document:send, lookup
 - **company**: Alias for company:read, company:write
 - **lookup**: grants access to the lookup operations
 - **document:receive**: grants access to document receive operations
 - **document:send**: grants access to document send operations
 - **invoice:receive**: grants access to invoice receive operations
 - **invoice:send**: grants access to invoice send operations
 - **company:read**: grants read access to company settings, profiles and notifications
 - **company:write**: grants write access to company settings, profiles and notifications
 - **validate**: grants access to the AutoInvoice validator service
 - **receivables:assignments**: grants access to assignments in the receivables service
 - **analysis**: grants access to analysis service

## operator_auth

- **Type**: OAuth
- **Flow**: application
- **Authorization URL**: 
- **Scopes**: 
 - **operator:documents:receive**: grants access to fetch received documents
 - **operator:documents:send**: grants access to send documents
 - **operator:lookup**: grants access to perform actions related to lookups
 - **operator:participants**: grants access to perform actions on operator participants
 - **operator:notifications**: grants access to perform actions on operator notifications
 - **operator:validate**: grants access to the AutoInvoice validator service
 - **operator:receivables:assignments**: grants access to assignments the receivables service
 - **operator:receivables:assignments:create**: grants access to create assignments in the receivables servicee
 - **operator:analysis**: grants access to analysis service
