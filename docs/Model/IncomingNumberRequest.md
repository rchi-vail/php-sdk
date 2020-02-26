# # IncomingNumberRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**application_id** | **string** | ID of the Application that should handle calls to this number. | [optional] 
**alias** | **string** | Description for this phone number. | [optional] 
**request_id** | **string** | RequestId for this request starting with prefix &#x60;RQ&#x60; followed by 40 hexadecimal characters. FreeClimb logs that are generated while processing this request will include this requestId. If it is not provided, FreeClimb will generate a requestId and return it as a header in the response (e.g., &#x60;X-Pulse-Request-Id: &lt;requestId&gt;&#x60;). | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


