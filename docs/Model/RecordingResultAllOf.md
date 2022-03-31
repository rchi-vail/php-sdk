# # RecordingResultAllOf

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**recording_id** | **string** | String that uniquely identifies this recording resource. | [optional]
**account_id** | **string** | ID of the account that created this recording. | [optional]
**call_id** | **string** | ID of the Call that was recorded. If a Conference was recorded, this value is empty and the conferenceId property is populated. | [optional]
**duration_sec** | **int** | Length of the recording in seconds. | [optional]
**conference_id** | **string** | ID of the Conference that was recorded. If a Call was recorded, this value is empty and the callId property is populated. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
