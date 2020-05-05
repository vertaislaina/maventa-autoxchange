# Document

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Id as a GUID | [optional] 
**type** | **string** | Type of document | [optional] 
**documentIdentifier** | **string** | Document identifier | [optional] 
**processIdentifier** | **string** | Process identifier | [optional] 
**status** | **string** | Current status of document | [optional] 
**reference** | **string** | Document reference | [optional] 
**number** | **string** | Document number | [optional] 
**sender** | [**\Vertaislaina\Maventa\AutoXChange\Entity\DocumentParty**](DocumentParty.md) | Document sender | [optional] 
**recipient** | [**\Vertaislaina\Maventa\AutoXChange\Entity\DocumentRecipientParty**](DocumentRecipientParty.md) | Document recipient | [optional] 
**createdAt** | [**\DateTime**](\DateTime.md) | Document creation time | [optional] 
**deliveredAt** | [**\DateTime**](\DateTime.md) | The timestamp when sent document was delivered to the destination route | [optional] 
**receivedAt** | [**\DateTime**](\DateTime.md) | The timestamp when received document was delivered to the recipient | [optional] 
**lastEvent** | [**\Vertaislaina\Maventa\AutoXChange\Entity\DocumentEvent**](DocumentEvent.md) | Latest event information | [optional] 
**sourceFormat** | **string** | Source format of the document | [optional] 
**supportedFormats** | **string[]** | Supported document formats | [optional] 
**transmissionId** | **string** | Transmission id | [optional] 
**transmissionAt** | [**\DateTime**](\DateTime.md) | Document transmission time | [optional] 
**network** | **string** | The network document is originated from | [optional] 
**externalId** | **string** | External identifier linked to the document | [optional] 
**files** | [**\Vertaislaina\Maventa\AutoXChange\Entity\DocumentFileInDocument[]**](DocumentFileInDocument.md) | Files related to the document | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


