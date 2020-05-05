# Invoice

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Invoice ID | [optional] 
**status** | **string** | Current status of document | [optional] 
**reference** | **string** | Reference number | [optional] 
**number** | **string** | Invoice number | [optional] 
**sender** | [**\Vertaislaina\Maventa\AutoXChange\Entity\InvoiceSenderParty**](InvoiceSenderParty.md) | Sending party | [optional] 
**recipient** | [**\Vertaislaina\Maventa\AutoXChange\Entity\InvoiceRecipientParty**](InvoiceRecipientParty.md) | Recipient party | [optional] 
**receivedAt** | [**\DateTime**](\DateTime.md) | The timestamp when invoice was received | [optional] 
**createdAt** | [**\DateTime**](\DateTime.md) | The timestamp when invoice was created | [optional] 
**date** | [**\DateTime**](\DateTime.md) | Invoice date | [optional] 
**dateDue** | [**\DateTime**](\DateTime.md) | Invoice due date | [optional] 
**sourceFormat** | **string** | Format the invoice was created from | 
**sum** | **float** | Invoice sum | 
**sumTax** | **float** | Invoice sum with tax | 
**currency** | **string** | Invoice currency | 
**origin** | **string** | Invoice origin | [optional] 
**destination** | **string** | Invoice destination | [optional] 
**comment** | **string** | Custom comment | [optional] 
**files** | [**\Vertaislaina\Maventa\AutoXChange\Entity\InvoiceFile[]**](InvoiceFile.md) | Files attached to the invoice | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


