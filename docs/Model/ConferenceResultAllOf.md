# # ConferenceResultAllOf

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**conference_id** | **string** | A string that uniquely identifies this Conference resource. | [optional]
**account_id** | **string** | ID of the account that created this Conference. | [optional]
**alias** | **string** | A description for this Conference. | [optional]
**play_beep** | **string** | Setting that controls when a beep is played. One of: always, never, entryOnly, exitOnly. Defaults to always. | [optional]
**record** | **bool** | Flag indicating whether recording is enabled for this Conference. | [optional]
**status** | **string** | The status of the Conference. One of: creating, empty, populated, inProgress, or terminated. | [optional]
**wait_url** | **string** | URL referencing the audio file to be used as default wait music for the Conference when it is in the populated state. | [optional]
**action_url** | **string** | URL invoked once the Conference is successfully created. | [optional]
**status_callback_url** | **string** | URL to inform that the Conference status has changed. | [optional]
**subresource_uris** | **object** | The list of subresources for this Conference. This includes participants and/or recordings. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
