# CompanyProfile

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Profile unique id | [optional] 
**status** | **string** | Status of profile registration | [optional] 
**lastEvent** | [**\Vertaislaina\Maventa\AutoXChange\Entity\CompanyProfileEvent**](CompanyProfileEvent.md) | Latest error related event for the registration | [optional] 
**profile** | **string** | Profile name (DEPRECATED) | [optional] 
**profiles** | **string[]** | List of profile names | [optional] 
**profileVersion** | **string** | Profile version, eg. EHF30, PEPPOLBIS30 | [optional] 
**endpointId** | **string** | Endpoint identifier | [optional] 
**scheme** | **string** | ISO6523 code of the endpoint_id scheme. eg. 0192 for NO:ORG | [optional] 
**network** | **string** | Target network, defaults to PEPPOL | [optional] 
**networkSettings** | **object** | Additional network settings | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


