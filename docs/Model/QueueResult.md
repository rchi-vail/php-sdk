# # QueueResult

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**uri** | **string** | The URI for this resource, relative to /apiserver. | [optional]
**date_created** | **string** | The date that this resource was created (GMT) in RFC 1123 format (e.g., Mon, 15 Jun 2009 20:45:30 GMT). | [optional]
**date_updated** | **string** | The date that this resource was last updated (GMT) in RFC 1123 format (e.g., Mon, 15 Jun 2009 20:45:30 GMT). | [optional]
**revision** | **int** | Revision count for the resource. This count is set to 1 on creation and is incremented every time it is updated. | [optional]
**account_id** | **string** | ID of the account that created this Queue. | [optional]
**queue_id** | **string** | A string that uniquely identifies this Queue resource. | [optional]
**alias** | **string** | A description for this Queue. | [optional]
**max_size** | **int** | The maximum number of Calls permitted in the Queue. Default is 100. Maximum is 1000. | [optional]
**current_size** | **int** | Count of Calls currently in the Queue. | [optional]
**average_queue_removal_time** | **int** | The average amount of time (in seconds) for a call to be removed from the queue. | [optional]
**subresource_uris** | **object** | List of subresources for this Queue (which includes Queue members). | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
