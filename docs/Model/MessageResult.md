# # MessageResult

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**uri** | **string** | The URI for this resource, relative to /apiserver. | [optional] 
**date_created** | **string** | The date that this resource was created (GMT) in RFC 1123 format (e.g., Mon, 15 Jun 2009 20:45:30 GMT). | [optional] 
**date_updated** | **string** | The date that this resource was last updated (GMT) in RFC 1123 format (e.g., Mon, 15 Jun 2009 20:45:30 GMT). | [optional] 
**revision** | **int** | Revision count for the resource. This count is set to 1 on creation and is incremented every time it is updated. | [optional] 
**account_id** | **string** | String that uniquely identifies this account resource. | [optional] 
**message_id** | **string** | String that uniquely identifies this message resource | [optional] 
**status** | **string** | Indicates the state of the message through the message lifecycle including: new, queued, rejected, sending, sent, failed, received, undelivered, expired, deleted, and unknown | [optional] 
**from** | **string** | Phone number in E.164 format that sent the message. | [optional] 
**to** | **string** | Phone number in E.164 format that received the message. | [optional] 
**text** | **string** | Message contents | [optional] 
**direction** | **string** | Noting whether the message was inbound or outbound | [optional] 
**notification_url** | **string** | URL invoked when message sent | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


