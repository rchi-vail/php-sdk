# # FilterLogsRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**pql** | **string** | The filter query for retrieving logs. See **Performance Query Language** below. | 
**request_id** | **string** | RequestId for this request starting with prefix *RQ* followed by 40 hexadecimal characters. FreeClimb logs generated while processing this request will include this requestId. If it is not provided, FreeClimb will generate a requestId and return it as a header in the response (e.g., X-Pulse-Request-Id: &lt;requestId&gt;). | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


