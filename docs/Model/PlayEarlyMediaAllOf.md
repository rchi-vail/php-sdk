# # PlayEarlyMediaAllOf

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**file** | **string** | RL of the audio file to be played to the caller. The URL can be the &#x60;recordingUrl&#x60; generated from the &#x60;RecordUtterance&#x60; or &#x60;StartRecordCall&#x60; PerCL commands or any accessible URL. FreeClimb will respect Cache-Control headers for this file. Use these to limit repeated requests for unchanged audio. If no Cache-Control header is provided, the file will be cached for seven days by default. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
