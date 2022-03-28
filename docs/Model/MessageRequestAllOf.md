# # MessageRequestAllOf

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**from** | **string** | Phone number to use as the sender. This must be an incoming phone number that you have purchased from FreeClimb. |
**to** | **string** | Phone number to receive the message. Must be within FreeClimb&#39;s service area. |
**text** | **string** | Text contained in the message (maximum 160 characters).   **Note:** For text, only ASCII characters are supported. |
**notification_url** | **string** | When the Message changes status, this URL is invoked using HTTP POST with the messageStatus parameters.  **Note:** This is a notification only; any PerCL returned is ignored. | [optional]
**account_id** | **string** | String that uniquely identifies this account resource. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
