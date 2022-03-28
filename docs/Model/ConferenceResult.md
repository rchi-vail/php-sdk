# # ConferenceResult

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**uri** | **string** | The URI for this resource, relative to /apiserver. | [optional]
**date_created** | **string** | The date that this resource was created (GMT) in RFC 1123 format (e.g., Mon, 15 Jun 2009 20:45:30 GMT). | [optional]
**date_updated** | **string** | The date that this resource was last updated (GMT) in RFC 1123 format (e.g., Mon, 15 Jun 2009 20:45:30 GMT). | [optional]
**revision** | **int** | Revision count for the resource. This count is set to 1 on creation and is incremented every time it is updated. | [optional]
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
