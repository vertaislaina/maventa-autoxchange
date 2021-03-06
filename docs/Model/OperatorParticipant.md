# OperatorParticipant

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Profile unique id | [optional] 
**status** | **string** | Status of profile registration | [optional] 
**lastEvent** | [**\Vertaislaina\Maventa\AutoXChange\Entity\CompanyProfileEvent**](CompanyProfileEvent.md) | Latest error related event for the registration | [optional] 
**profiles** | **string[]** | List of profile names | [optional] 
**profileVersion** | **string** | Profile version, eg. EHF30, PEPPOLBIS30 | [optional] 
**endpointId** | **string** | Endpoint identifier | [optional] 
**scheme** | **string** | ISO6523 code of the endpoint_id scheme. eg. 0192 for NO:ORG | [optional] 
**network** | **string** | The participants network | 
**role** | **string** | Role of the participant in the network. For example SENDER or RECEIVER. | [optional] 
**name** | **string** | Name of the participant | 
**email** | **string** | Email address for the participant | 
**country** | **string** | Two letter country code of the party | [optional] 
**externalId** | **string** | Unique external id for the participant | 
**updatedAt** | [**\DateTime**](\DateTime.md) | Last update timestamp | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


