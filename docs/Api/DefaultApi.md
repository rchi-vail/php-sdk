# OpenAPI\Client\DefaultApi

All URIs are relative to *https://www.freeclimb.com/apiserver*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getAnAccount**](DefaultApi.md#getAnAccount) | **GET** /Accounts/{accountId} | Get an Account
[**buyAPhoneNumber**](DefaultApi.md#buyAPhoneNumber) | **POST** /Accounts/{accountId}/IncomingPhoneNumbers | Buy a Phone Number
[**createAConference**](DefaultApi.md#createAConference) | **POST** /Accounts/{accountId}/Conferences | Create a Conference
[**createAQueue**](DefaultApi.md#createAQueue) | **POST** /Accounts/{accountId}/Queues | Create a Queue
[**createAnApplication**](DefaultApi.md#createAnApplication) | **POST** /Accounts/{accountId}/Applications | Create an application
[**deleteARecording**](DefaultApi.md#deleteARecording) | **DELETE** /Accounts/{accountId}/Recordings/{recordingId} | Delete a Recording
[**deleteAnApplication**](DefaultApi.md#deleteAnApplication) | **DELETE** /Accounts/{accountId}/Applications/{applicationId} | Delete an application
[**deleteAnIncomingNumber**](DefaultApi.md#deleteAnIncomingNumber) | **DELETE** /Accounts/{accountId}/IncomingPhoneNumbers/{phoneNumberId} | Delete an Incoming Number
[**dequeueAMember**](DefaultApi.md#dequeueAMember) | **POST** /Accounts/{accountId}/Queues/{queueId}/Members/{callId} | Dequeue a Member
[**dequeueHeadMember**](DefaultApi.md#dequeueHeadMember) | **POST** /Accounts/{accountId}/Queues/{queueId}/Members/Front | Dequeue Head Member
[**downloadARecordingFile**](DefaultApi.md#downloadARecordingFile) | **GET** /Accounts/{accountId}/Recordings/{recordingId}/Download | Download a Recording File
[**filterLogs**](DefaultApi.md#filterLogs) | **POST** /Accounts/{accountId}/Logs | Filter Logs
[**getACall**](DefaultApi.md#getACall) | **GET** /Accounts/{accountId}/Calls/{callId} | Get a Call
[**getAConference**](DefaultApi.md#getAConference) | **GET** /Accounts/{accountId}/Conferences/{conferenceId} | Get a Conference
[**getAMember**](DefaultApi.md#getAMember) | **GET** /Accounts/{accountId}/Queues/{queueId}/Members/{callId} | Get a Member
[**getAParticipant**](DefaultApi.md#getAParticipant) | **GET** /Accounts/{accountId}/Conferences/{conferenceId}/Participants/{callId} | Get a Participant
[**getAQueue**](DefaultApi.md#getAQueue) | **GET** /Accounts/{accountId}/Queues/{queueId} | Get a Queue
[**getARecording**](DefaultApi.md#getARecording) | **GET** /Accounts/{accountId}/Recordings/{recordingId} | Get a Recording
[**getAnApplication**](DefaultApi.md#getAnApplication) | **GET** /Accounts/{accountId}/Applications/{applicationId} | Get an Application
[**getAnIncomingNumber**](DefaultApi.md#getAnIncomingNumber) | **GET** /Accounts/{accountId}/IncomingPhoneNumbers/{phoneNumberId} | Get an Incoming Number
[**getAnSmsMessage**](DefaultApi.md#getAnSmsMessage) | **GET** /Accounts/{accountId}/Messages/{messageId} | Get an SMS Message
[**getHeadMember**](DefaultApi.md#getHeadMember) | **GET** /Accounts/{accountId}/Queues/{queueId}/Members/Front | Get Head Member
[**listActiveQueues**](DefaultApi.md#listActiveQueues) | **GET** /Accounts/{accountId}/Queues | List Active Queues
[**listAllAccountLogs**](DefaultApi.md#listAllAccountLogs) | **GET** /Accounts/{accountId}/Logs | List All Account Logs
[**listAnApplication**](DefaultApi.md#listAnApplication) | **GET** /Accounts/{accountId}/Applications | List applications
[**listAvailableNumbers**](DefaultApi.md#listAvailableNumbers) | **GET** /AvailablePhoneNumbers | List available numbers
[**listCallLogs**](DefaultApi.md#listCallLogs) | **GET** /Accounts/{accountId}/Calls/{callId}/Logs | List Call Logs
[**listCallRecordings**](DefaultApi.md#listCallRecordings) | **GET** /Accounts/{accountId}/Calls/{callId}/Recordings | List Call Recordings
[**listCalls**](DefaultApi.md#listCalls) | **GET** /Accounts/{accountId}/Calls | List Calls
[**listConferences**](DefaultApi.md#listConferences) | **GET** /Accounts/{accountId}/Conferences | List Conferences
[**listIncomingNumbers**](DefaultApi.md#listIncomingNumbers) | **GET** /Accounts/{accountId}/IncomingPhoneNumbers | List Incoming Numbers
[**listMembers**](DefaultApi.md#listMembers) | **GET** /Accounts/{accountId}/Queues/{queueId}/Members | List Members
[**listParticipants**](DefaultApi.md#listParticipants) | **GET** /Accounts/{accountId}/Conferences/{conferenceId}/Participants | List Participants
[**listRecordings**](DefaultApi.md#listRecordings) | **GET** /Accounts/{accountId}/Recordings | List Recordings
[**listSmsMessages**](DefaultApi.md#listSmsMessages) | **GET** /Accounts/{accountId}/Messages | List SMS Messages
[**makeACall**](DefaultApi.md#makeACall) | **POST** /Accounts/{accountId}/Calls | Make a Call
[**removeAParticipant**](DefaultApi.md#removeAParticipant) | **DELETE** /Accounts/{accountId}/Conferences/{conferenceId}/Participants/{callId} | Remove a Participant
[**sendAnSmsMessage**](DefaultApi.md#sendAnSmsMessage) | **POST** /Accounts/{accountId}/Messages | Send an SMS Message
[**streamARecordingFile**](DefaultApi.md#streamARecordingFile) | **GET** /Accounts/{accountId}/Recordings/{recordingId}/Stream | Stream a Recording File
[**updateAConference**](DefaultApi.md#updateAConference) | **POST** /Accounts/{accountId}/Conferences/{conferenceId} | Update a Conference
[**updateALiveCall**](DefaultApi.md#updateALiveCall) | **POST** /Accounts/{accountId}/Calls/{callId} | Update a Live Call
[**updateAParticipant**](DefaultApi.md#updateAParticipant) | **POST** /Accounts/{accountId}/Conferences/{conferenceId}/Participants/{callId} | Update a Participant
[**updateAQueue**](DefaultApi.md#updateAQueue) | **POST** /Accounts/{accountId}/Queues/{queueId} | Update a Queue
[**updateAnAccount**](DefaultApi.md#updateAnAccount) | **POST** /Accounts/{accountId} | Manage an account
[**updateAnApplication**](DefaultApi.md#updateAnApplication) | **POST** /Accounts/{accountId}/Applications/{applicationId} | Update an application
[**updateAnIncomingNumber**](DefaultApi.md#updateAnIncomingNumber) | **POST** /Accounts/{accountId}/IncomingPhoneNumbers/{phoneNumberId} | Update an Incoming Number



## getAnAccount

> \OpenAPI\Client\Model\AccountResult getAnAccount($account_id)

Get an Account

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: fc
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('ACCOUNT_ID')
              ->setPassword('AUTH_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | String that uniquely identifies this account resource.

try {
    $result = $apiInstance->getAnAccount($account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getAnAccount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | **string**| String that uniquely identifies this account resource. |

### Return type

[**\OpenAPI\Client\Model\AccountResult**](../Model/AccountResult.md)

### Authorization

[fc](../../README.md#fc)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## buyAPhoneNumber

> \OpenAPI\Client\Model\IncomingNumberResult buyAPhoneNumber($account_id, $buy_incoming_number_request)

Buy a Phone Number

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: fc
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('ACCOUNT_ID')
              ->setPassword('AUTH_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | ID of the account that owns this phone number.
$buy_incoming_number_request = new \OpenAPI\Client\Model\BuyIncomingNumberRequest(); // \OpenAPI\Client\Model\BuyIncomingNumberRequest | Incoming Number transaction details

try {
    $result = $apiInstance->buyAPhoneNumber($account_id, $buy_incoming_number_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->buyAPhoneNumber: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | **string**| ID of the account that owns this phone number. |
 **buy_incoming_number_request** | [**\OpenAPI\Client\Model\BuyIncomingNumberRequest**](../Model/BuyIncomingNumberRequest.md)| Incoming Number transaction details | [optional]

### Return type

[**\OpenAPI\Client\Model\IncomingNumberResult**](../Model/IncomingNumberResult.md)

### Authorization

[fc](../../README.md#fc)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## createAConference

> \OpenAPI\Client\Model\ConferenceResult createAConference($account_id, $create_conference_request)

Create a Conference

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: fc
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('ACCOUNT_ID')
              ->setPassword('AUTH_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | ID of the account that created this Conference.
$create_conference_request = new \OpenAPI\Client\Model\CreateConferenceRequest(); // \OpenAPI\Client\Model\CreateConferenceRequest | Conference to create

try {
    $result = $apiInstance->createAConference($account_id, $create_conference_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->createAConference: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | **string**| ID of the account that created this Conference. |
 **create_conference_request** | [**\OpenAPI\Client\Model\CreateConferenceRequest**](../Model/CreateConferenceRequest.md)| Conference to create | [optional]

### Return type

[**\OpenAPI\Client\Model\ConferenceResult**](../Model/ConferenceResult.md)

### Authorization

[fc](../../README.md#fc)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## createAQueue

> \OpenAPI\Client\Model\QueueResult createAQueue($account_id, $queue_request)

Create a Queue

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: fc
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('ACCOUNT_ID')
              ->setPassword('AUTH_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | ID of the account that created this Queue.
$queue_request = new \OpenAPI\Client\Model\QueueRequest(); // \OpenAPI\Client\Model\QueueRequest | Queue details used to create a queue

try {
    $result = $apiInstance->createAQueue($account_id, $queue_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->createAQueue: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | **string**| ID of the account that created this Queue. |
 **queue_request** | [**\OpenAPI\Client\Model\QueueRequest**](../Model/QueueRequest.md)| Queue details used to create a queue | [optional]

### Return type

[**\OpenAPI\Client\Model\QueueResult**](../Model/QueueResult.md)

### Authorization

[fc](../../README.md#fc)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## createAnApplication

> \OpenAPI\Client\Model\ApplicationResult createAnApplication($account_id, $application_request)

Create an application

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: fc
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('ACCOUNT_ID')
              ->setPassword('AUTH_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | ID of the account that created this application.
$application_request = new \OpenAPI\Client\Model\ApplicationRequest(); // \OpenAPI\Client\Model\ApplicationRequest | Application Details

try {
    $result = $apiInstance->createAnApplication($account_id, $application_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->createAnApplication: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | **string**| ID of the account that created this application. |
 **application_request** | [**\OpenAPI\Client\Model\ApplicationRequest**](../Model/ApplicationRequest.md)| Application Details | [optional]

### Return type

[**\OpenAPI\Client\Model\ApplicationResult**](../Model/ApplicationResult.md)

### Authorization

[fc](../../README.md#fc)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## deleteARecording

> deleteARecording($account_id, $recording_id)

Delete a Recording

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: fc
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('ACCOUNT_ID')
              ->setPassword('AUTH_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | ID of the account that created this recording.
$recording_id = 'recording_id_example'; // string | String that uniquely identifies this recording resource.

try {
    $apiInstance->deleteARecording($account_id, $recording_id);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->deleteARecording: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | **string**| ID of the account that created this recording. |
 **recording_id** | **string**| String that uniquely identifies this recording resource. |

### Return type

void (empty response body)

### Authorization

[fc](../../README.md#fc)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## deleteAnApplication

> deleteAnApplication($account_id, $application_id)

Delete an application

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: fc
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('ACCOUNT_ID')
              ->setPassword('AUTH_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | ID of the account that created this application.
$application_id = 'application_id_example'; // string | String that uniquely identifies this application resource.

try {
    $apiInstance->deleteAnApplication($account_id, $application_id);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->deleteAnApplication: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | **string**| ID of the account that created this application. |
 **application_id** | **string**| String that uniquely identifies this application resource. |

### Return type

void (empty response body)

### Authorization

[fc](../../README.md#fc)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## deleteAnIncomingNumber

> deleteAnIncomingNumber($account_id, $phone_number_id)

Delete an Incoming Number

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: fc
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('ACCOUNT_ID')
              ->setPassword('AUTH_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | ID of the account that owns this phone number.
$phone_number_id = 'phone_number_id_example'; // string | String that uniquely identifies this phone number resource.

try {
    $apiInstance->deleteAnIncomingNumber($account_id, $phone_number_id);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->deleteAnIncomingNumber: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | **string**| ID of the account that owns this phone number. |
 **phone_number_id** | **string**| String that uniquely identifies this phone number resource. |

### Return type

void (empty response body)

### Authorization

[fc](../../README.md#fc)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## dequeueAMember

> \OpenAPI\Client\Model\QueueMember dequeueAMember($account_id, $queue_id, $call_id, $dequeue_member_request)

Dequeue a Member

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: fc
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('ACCOUNT_ID')
              ->setPassword('AUTH_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | ID of the account that created the Queue
$queue_id = 'queue_id_example'; // string | String that uniquely identifies the Queue that the Member belongs to.
$call_id = 'call_id_example'; // string | ID if the Call that the Member belongs to
$dequeue_member_request = new \OpenAPI\Client\Model\DequeueMemberRequest(); // \OpenAPI\Client\Model\DequeueMemberRequest | Dequeue member request details

try {
    $result = $apiInstance->dequeueAMember($account_id, $queue_id, $call_id, $dequeue_member_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->dequeueAMember: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | **string**| ID of the account that created the Queue |
 **queue_id** | **string**| String that uniquely identifies the Queue that the Member belongs to. |
 **call_id** | **string**| ID if the Call that the Member belongs to |
 **dequeue_member_request** | [**\OpenAPI\Client\Model\DequeueMemberRequest**](../Model/DequeueMemberRequest.md)| Dequeue member request details | [optional]

### Return type

[**\OpenAPI\Client\Model\QueueMember**](../Model/QueueMember.md)

### Authorization

[fc](../../README.md#fc)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## dequeueHeadMember

> \OpenAPI\Client\Model\QueueMember dequeueHeadMember($account_id, $queue_id, $dequeue_member_request)

Dequeue Head Member

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: fc
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('ACCOUNT_ID')
              ->setPassword('AUTH_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | ID of the account that created this queue.
$queue_id = 'queue_id_example'; // string | String that uniquely identifies this queue resource.
$dequeue_member_request = new \OpenAPI\Client\Model\DequeueMemberRequest(); // \OpenAPI\Client\Model\DequeueMemberRequest | Dequeue head member request details

try {
    $result = $apiInstance->dequeueHeadMember($account_id, $queue_id, $dequeue_member_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->dequeueHeadMember: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | **string**| ID of the account that created this queue. |
 **queue_id** | **string**| String that uniquely identifies this queue resource. |
 **dequeue_member_request** | [**\OpenAPI\Client\Model\DequeueMemberRequest**](../Model/DequeueMemberRequest.md)| Dequeue head member request details | [optional]

### Return type

[**\OpenAPI\Client\Model\QueueMember**](../Model/QueueMember.md)

### Authorization

[fc](../../README.md#fc)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## downloadARecordingFile

> \SplFileObject downloadARecordingFile($account_id, $recording_id)

Download a Recording File

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: fc
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('ACCOUNT_ID')
              ->setPassword('AUTH_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | ID of the account that created this recording.
$recording_id = 'recording_id_example'; // string | String that uniquely identifies this recording resource.

try {
    $result = $apiInstance->downloadARecordingFile($account_id, $recording_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->downloadARecordingFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | **string**| ID of the account that created this recording. |
 **recording_id** | **string**| String that uniquely identifies this recording resource. |

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

[fc](../../README.md#fc)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: audio/x-wav

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## filterLogs

> \OpenAPI\Client\Model\LogList filterLogs($account_id, $filter_logs_request)

Filter Logs

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: fc
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('ACCOUNT_ID')
              ->setPassword('AUTH_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | ID of the account that this log was generated under.
$filter_logs_request = new \OpenAPI\Client\Model\FilterLogsRequest(); // \OpenAPI\Client\Model\FilterLogsRequest | Filter logs request paramters

try {
    $result = $apiInstance->filterLogs($account_id, $filter_logs_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->filterLogs: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | **string**| ID of the account that this log was generated under. |
 **filter_logs_request** | [**\OpenAPI\Client\Model\FilterLogsRequest**](../Model/FilterLogsRequest.md)| Filter logs request paramters | [optional]

### Return type

[**\OpenAPI\Client\Model\LogList**](../Model/LogList.md)

### Authorization

[fc](../../README.md#fc)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getACall

> \OpenAPI\Client\Model\CallResult getACall($account_id, $call_id)

Get a Call

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: fc
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('ACCOUNT_ID')
              ->setPassword('AUTH_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | ID of the account that created this call.
$call_id = 'call_id_example'; // string | String that uniquely identifies this call resource.

try {
    $result = $apiInstance->getACall($account_id, $call_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getACall: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | **string**| ID of the account that created this call. |
 **call_id** | **string**| String that uniquely identifies this call resource. |

### Return type

[**\OpenAPI\Client\Model\CallResult**](../Model/CallResult.md)

### Authorization

[fc](../../README.md#fc)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getAConference

> \OpenAPI\Client\Model\ConferenceResult getAConference($account_id, $conference_id)

Get a Conference

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: fc
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('ACCOUNT_ID')
              ->setPassword('AUTH_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | ID of the account that created this conference.
$conference_id = 'conference_id_example'; // string | A string that uniquely identifies this conference resource.

try {
    $result = $apiInstance->getAConference($account_id, $conference_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getAConference: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | **string**| ID of the account that created this conference. |
 **conference_id** | **string**| A string that uniquely identifies this conference resource. |

### Return type

[**\OpenAPI\Client\Model\ConferenceResult**](../Model/ConferenceResult.md)

### Authorization

[fc](../../README.md#fc)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getAMember

> \OpenAPI\Client\Model\QueueMember getAMember($account_id, $queue_id, $call_id)

Get a Member

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: fc
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('ACCOUNT_ID')
              ->setPassword('AUTH_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | ID of the account that created this Queue
$queue_id = 'queue_id_example'; // string | String that uniquely identifies the Queue that the Member belongs to.
$call_id = 'call_id_example'; // string | ID of the Call that the Member belongs to

try {
    $result = $apiInstance->getAMember($account_id, $queue_id, $call_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getAMember: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | **string**| ID of the account that created this Queue |
 **queue_id** | **string**| String that uniquely identifies the Queue that the Member belongs to. |
 **call_id** | **string**| ID of the Call that the Member belongs to |

### Return type

[**\OpenAPI\Client\Model\QueueMember**](../Model/QueueMember.md)

### Authorization

[fc](../../README.md#fc)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getAParticipant

> \OpenAPI\Client\Model\ConferenceParticipantResult getAParticipant($account_id, $conference_id, $call_id)

Get a Participant

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: fc
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('ACCOUNT_ID')
              ->setPassword('AUTH_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | ID of the account that created this participant.
$conference_id = 'conference_id_example'; // string | ID of the conference this participant is in.
$call_id = 'call_id_example'; // string | ID of the Call associated with this participant.

try {
    $result = $apiInstance->getAParticipant($account_id, $conference_id, $call_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getAParticipant: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | **string**| ID of the account that created this participant. |
 **conference_id** | **string**| ID of the conference this participant is in. |
 **call_id** | **string**| ID of the Call associated with this participant. |

### Return type

[**\OpenAPI\Client\Model\ConferenceParticipantResult**](../Model/ConferenceParticipantResult.md)

### Authorization

[fc](../../README.md#fc)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getAQueue

> \OpenAPI\Client\Model\QueueResult getAQueue($account_id, $queue_id)

Get a Queue

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: fc
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('ACCOUNT_ID')
              ->setPassword('AUTH_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | ID of the account that created this queue.
$queue_id = 'queue_id_example'; // string | A string that uniquely identifies this queue resource.

try {
    $result = $apiInstance->getAQueue($account_id, $queue_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getAQueue: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | **string**| ID of the account that created this queue. |
 **queue_id** | **string**| A string that uniquely identifies this queue resource. |

### Return type

[**\OpenAPI\Client\Model\QueueResult**](../Model/QueueResult.md)

### Authorization

[fc](../../README.md#fc)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getARecording

> \OpenAPI\Client\Model\RecordingResult getARecording($account_id, $recording_id)

Get a Recording

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: fc
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('ACCOUNT_ID')
              ->setPassword('AUTH_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | ID of the account that created this recording.
$recording_id = 'recording_id_example'; // string | String that uniquely identifies this recording resource.

try {
    $result = $apiInstance->getARecording($account_id, $recording_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getARecording: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | **string**| ID of the account that created this recording. |
 **recording_id** | **string**| String that uniquely identifies this recording resource. |

### Return type

[**\OpenAPI\Client\Model\RecordingResult**](../Model/RecordingResult.md)

### Authorization

[fc](../../README.md#fc)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getAnApplication

> \OpenAPI\Client\Model\ApplicationResult getAnApplication($account_id, $application_id)

Get an Application

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: fc
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('ACCOUNT_ID')
              ->setPassword('AUTH_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | ID of the account that created this application.
$application_id = 'application_id_example'; // string | A string that uniquely identifies this application resource.

try {
    $result = $apiInstance->getAnApplication($account_id, $application_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getAnApplication: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | **string**| ID of the account that created this application. |
 **application_id** | **string**| A string that uniquely identifies this application resource. |

### Return type

[**\OpenAPI\Client\Model\ApplicationResult**](../Model/ApplicationResult.md)

### Authorization

[fc](../../README.md#fc)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getAnIncomingNumber

> \OpenAPI\Client\Model\IncomingNumberResult getAnIncomingNumber($account_id, $phone_number_id)

Get an Incoming Number

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: fc
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('ACCOUNT_ID')
              ->setPassword('AUTH_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | ID of the account that owns this phone number.
$phone_number_id = 'phone_number_id_example'; // string | String that uniquely identifies this phone number resource.

try {
    $result = $apiInstance->getAnIncomingNumber($account_id, $phone_number_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getAnIncomingNumber: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | **string**| ID of the account that owns this phone number. |
 **phone_number_id** | **string**| String that uniquely identifies this phone number resource. |

### Return type

[**\OpenAPI\Client\Model\IncomingNumberResult**](../Model/IncomingNumberResult.md)

### Authorization

[fc](../../README.md#fc)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getAnSmsMessage

> \OpenAPI\Client\Model\MessageResult getAnSmsMessage($account_id, $message_id)

Get an SMS Message

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: fc
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('ACCOUNT_ID')
              ->setPassword('AUTH_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | String that uniquely identifies this account resource.
$message_id = 'message_id_example'; // string | String that uniquely identifies this Message resource.

try {
    $result = $apiInstance->getAnSmsMessage($account_id, $message_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getAnSmsMessage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | **string**| String that uniquely identifies this account resource. |
 **message_id** | **string**| String that uniquely identifies this Message resource. |

### Return type

[**\OpenAPI\Client\Model\MessageResult**](../Model/MessageResult.md)

### Authorization

[fc](../../README.md#fc)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getHeadMember

> \OpenAPI\Client\Model\QueueMember getHeadMember($account_id, $queue_id)

Get Head Member

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: fc
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('ACCOUNT_ID')
              ->setPassword('AUTH_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | ID of the account that created this Queue
$queue_id = 'queue_id_example'; // string | String that uniquely identifies the Queue that the Member belongs to.

try {
    $result = $apiInstance->getHeadMember($account_id, $queue_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getHeadMember: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | **string**| ID of the account that created this Queue |
 **queue_id** | **string**| String that uniquely identifies the Queue that the Member belongs to. |

### Return type

[**\OpenAPI\Client\Model\QueueMember**](../Model/QueueMember.md)

### Authorization

[fc](../../README.md#fc)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## listActiveQueues

> \OpenAPI\Client\Model\QueueList listActiveQueues($account_id, $alias)

List Active Queues

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: fc
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('ACCOUNT_ID')
              ->setPassword('AUTH_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | ID of the account that created this Queue.
$alias = 'alias_example'; // string | Return only the Queue resources with aliases that exactly match this name.

try {
    $result = $apiInstance->listActiveQueues($account_id, $alias);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->listActiveQueues: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | **string**| ID of the account that created this Queue. |
 **alias** | **string**| Return only the Queue resources with aliases that exactly match this name. | [optional]

### Return type

[**\OpenAPI\Client\Model\QueueList**](../Model/QueueList.md)

### Authorization

[fc](../../README.md#fc)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## listAllAccountLogs

> \OpenAPI\Client\Model\LogList listAllAccountLogs($account_id)

List All Account Logs

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: fc
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('ACCOUNT_ID')
              ->setPassword('AUTH_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | ID of the account that these Logs were generated under.

try {
    $result = $apiInstance->listAllAccountLogs($account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->listAllAccountLogs: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | **string**| ID of the account that these Logs were generated under. |

### Return type

[**\OpenAPI\Client\Model\LogList**](../Model/LogList.md)

### Authorization

[fc](../../README.md#fc)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## listAnApplication

> \OpenAPI\Client\Model\ApplicationList listAnApplication($account_id, $alias)

List applications

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: fc
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('ACCOUNT_ID')
              ->setPassword('AUTH_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | ID of the account that created this application.
$alias = 'alias_example'; // string | Return only applications with aliases that exactly match this value.

try {
    $result = $apiInstance->listAnApplication($account_id, $alias);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->listAnApplication: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | **string**| ID of the account that created this application. |
 **alias** | **string**| Return only applications with aliases that exactly match this value. | [optional]

### Return type

[**\OpenAPI\Client\Model\ApplicationList**](../Model/ApplicationList.md)

### Authorization

[fc](../../README.md#fc)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## listAvailableNumbers

> \OpenAPI\Client\Model\AvailableNumberList listAvailableNumbers($alias, $phone_number)

List available numbers

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: fc
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('ACCOUNT_ID')
              ->setPassword('AUTH_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$alias = 'alias_example'; // string | Filter on numbers based on the formatted string of the phone number.
$phone_number = 'phone_number_example'; // string | PCRE-compatible regular expression to filter against `phoneNumber` field, which is in E.164 format.

try {
    $result = $apiInstance->listAvailableNumbers($alias, $phone_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->listAvailableNumbers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alias** | **string**| Filter on numbers based on the formatted string of the phone number. | [optional]
 **phone_number** | **string**| PCRE-compatible regular expression to filter against &#x60;phoneNumber&#x60; field, which is in E.164 format. | [optional]

### Return type

[**\OpenAPI\Client\Model\AvailableNumberList**](../Model/AvailableNumberList.md)

### Authorization

[fc](../../README.md#fc)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## listCallLogs

> \OpenAPI\Client\Model\LogList listCallLogs($account_id, $call_id)

List Call Logs

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: fc
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('ACCOUNT_ID')
              ->setPassword('AUTH_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | ID of the account that created this call.
$call_id = 'call_id_example'; // string | String that uniquely identifies this call resource.

try {
    $result = $apiInstance->listCallLogs($account_id, $call_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->listCallLogs: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | **string**| ID of the account that created this call. |
 **call_id** | **string**| String that uniquely identifies this call resource. |

### Return type

[**\OpenAPI\Client\Model\LogList**](../Model/LogList.md)

### Authorization

[fc](../../README.md#fc)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## listCallRecordings

> \OpenAPI\Client\Model\RecordingList listCallRecordings($account_id, $call_id, $date_created)

List Call Recordings

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: fc
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('ACCOUNT_ID')
              ->setPassword('AUTH_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | ID of the account that created this call.
$call_id = 'call_id_example'; // string | String that uniquely identifies this call resource.
$date_created = 'date_created_example'; // string | Only show recordings created on the specified date, in the form *YYYY-MM-DD*.

try {
    $result = $apiInstance->listCallRecordings($account_id, $call_id, $date_created);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->listCallRecordings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | **string**| ID of the account that created this call. |
 **call_id** | **string**| String that uniquely identifies this call resource. |
 **date_created** | **string**| Only show recordings created on the specified date, in the form *YYYY-MM-DD*. | [optional]

### Return type

[**\OpenAPI\Client\Model\RecordingList**](../Model/RecordingList.md)

### Authorization

[fc](../../README.md#fc)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## listCalls

> \OpenAPI\Client\Model\CallList listCalls($account_id, $to, $from, $status, $start_time, $end_time, $parent_call_id)

List Calls

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: fc
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('ACCOUNT_ID')
              ->setPassword('AUTH_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | ID of the account that created this call.
$to = 'to_example'; // string | Only show Calls to this phone number.
$from = 'from_example'; // string | Only show Calls from this phone number.
$status = 'status_example'; // string | Only show Calls currently in this status. May be `queued`, `ringing`, `inProgress`, `canceled`, `completed`, `failed`, `busy`, or `noAnswer`.
$start_time = 'start_time_example'; // string | Only show Calls that started at or after this time, given as YYYY-MM-DD hh:mm:ss.
$end_time = 'end_time_example'; // string | Only show Calls that ended at or before this time, given as YYYY-MM- DD hh:mm:ss.
$parent_call_id = 'parent_call_id_example'; // string | Only show Calls spawned by the call with this ID.

try {
    $result = $apiInstance->listCalls($account_id, $to, $from, $status, $start_time, $end_time, $parent_call_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->listCalls: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | **string**| ID of the account that created this call. |
 **to** | **string**| Only show Calls to this phone number. | [optional]
 **from** | **string**| Only show Calls from this phone number. | [optional]
 **status** | **string**| Only show Calls currently in this status. May be &#x60;queued&#x60;, &#x60;ringing&#x60;, &#x60;inProgress&#x60;, &#x60;canceled&#x60;, &#x60;completed&#x60;, &#x60;failed&#x60;, &#x60;busy&#x60;, or &#x60;noAnswer&#x60;. | [optional]
 **start_time** | **string**| Only show Calls that started at or after this time, given as YYYY-MM-DD hh:mm:ss. | [optional]
 **end_time** | **string**| Only show Calls that ended at or before this time, given as YYYY-MM- DD hh:mm:ss. | [optional]
 **parent_call_id** | **string**| Only show Calls spawned by the call with this ID. | [optional]

### Return type

[**\OpenAPI\Client\Model\CallList**](../Model/CallList.md)

### Authorization

[fc](../../README.md#fc)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## listConferences

> \OpenAPI\Client\Model\ConferenceList listConferences($account_id, $status, $alias, $date_created, $date_updated)

List Conferences

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: fc
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('ACCOUNT_ID')
              ->setPassword('AUTH_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | ID of the account that created this conference.
$status = 'status_example'; // string | Only show conferences that currently have the specified status. Valid values: `empty`, `populated`, `inProgress`, or `terminated`.
$alias = 'alias_example'; // string | List Conferences whose alias exactly matches this string.
$date_created = 'date_created_example'; // string | Only show Conferences that were created on the specified date, in the form *YYYY-MM-DD*.
$date_updated = 'date_updated_example'; // string | Only show Conferences that were last updated on the specified date, in the form *YYYY-MM-DD*.

try {
    $result = $apiInstance->listConferences($account_id, $status, $alias, $date_created, $date_updated);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->listConferences: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | **string**| ID of the account that created this conference. |
 **status** | **string**| Only show conferences that currently have the specified status. Valid values: &#x60;empty&#x60;, &#x60;populated&#x60;, &#x60;inProgress&#x60;, or &#x60;terminated&#x60;. | [optional]
 **alias** | **string**| List Conferences whose alias exactly matches this string. | [optional]
 **date_created** | **string**| Only show Conferences that were created on the specified date, in the form *YYYY-MM-DD*. | [optional]
 **date_updated** | **string**| Only show Conferences that were last updated on the specified date, in the form *YYYY-MM-DD*. | [optional]

### Return type

[**\OpenAPI\Client\Model\ConferenceList**](../Model/ConferenceList.md)

### Authorization

[fc](../../README.md#fc)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## listIncomingNumbers

> \OpenAPI\Client\Model\IncomingNumberList listIncomingNumbers($account_id, $phone_number, $alias)

List Incoming Numbers

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: fc
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('ACCOUNT_ID')
              ->setPassword('AUTH_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | ID of the account that owns this phone number.
$phone_number = 'phone_number_example'; // string | Only show incoming phone number resources that match this PCRE-compatible regular expression.
$alias = 'alias_example'; // string | Only show incoming phone numbers with aliases that exactly match this value.

try {
    $result = $apiInstance->listIncomingNumbers($account_id, $phone_number, $alias);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->listIncomingNumbers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | **string**| ID of the account that owns this phone number. |
 **phone_number** | **string**| Only show incoming phone number resources that match this PCRE-compatible regular expression. | [optional]
 **alias** | **string**| Only show incoming phone numbers with aliases that exactly match this value. | [optional]

### Return type

[**\OpenAPI\Client\Model\IncomingNumberList**](../Model/IncomingNumberList.md)

### Authorization

[fc](../../README.md#fc)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## listMembers

> \OpenAPI\Client\Model\QueueMemberList listMembers($account_id, $queue_id)

List Members

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: fc
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('ACCOUNT_ID')
              ->setPassword('AUTH_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | ID of the account that created this Queue
$queue_id = 'queue_id_example'; // string | String that uniquely identifies the Queue that the Member belongs to.

try {
    $result = $apiInstance->listMembers($account_id, $queue_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->listMembers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | **string**| ID of the account that created this Queue |
 **queue_id** | **string**| String that uniquely identifies the Queue that the Member belongs to. |

### Return type

[**\OpenAPI\Client\Model\QueueMemberList**](../Model/QueueMemberList.md)

### Authorization

[fc](../../README.md#fc)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## listParticipants

> \OpenAPI\Client\Model\ConferenceParticipantList listParticipants($account_id, $conference_id, $talk, $listen)

List Participants

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: fc
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('ACCOUNT_ID')
              ->setPassword('AUTH_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | ID of the account that created this participant.
$conference_id = 'conference_id_example'; // string | ID of the conference this participant is in.
$talk = True; // bool | Only show Participants with the talk privilege.
$listen = True; // bool | Only show Participants with the listen privilege.

try {
    $result = $apiInstance->listParticipants($account_id, $conference_id, $talk, $listen);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->listParticipants: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | **string**| ID of the account that created this participant. |
 **conference_id** | **string**| ID of the conference this participant is in. |
 **talk** | **bool**| Only show Participants with the talk privilege. | [optional]
 **listen** | **bool**| Only show Participants with the listen privilege. | [optional]

### Return type

[**\OpenAPI\Client\Model\ConferenceParticipantList**](../Model/ConferenceParticipantList.md)

### Authorization

[fc](../../README.md#fc)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## listRecordings

> \OpenAPI\Client\Model\RecordingList listRecordings($account_id, $call_id, $conference_id, $date_created)

List Recordings

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: fc
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('ACCOUNT_ID')
              ->setPassword('AUTH_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | ID of the account that created this recording.
$call_id = 'call_id_example'; // string | Show only Recordings made during the Call with this ID.
$conference_id = 'conference_id_example'; // string | Show only Recordings made during the conference with this ID.
$date_created = 'date_created_example'; // string | Only show Recordings created on this date, formatted as *YYYY-MM-DD*.

try {
    $result = $apiInstance->listRecordings($account_id, $call_id, $conference_id, $date_created);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->listRecordings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | **string**| ID of the account that created this recording. |
 **call_id** | **string**| Show only Recordings made during the Call with this ID. | [optional]
 **conference_id** | **string**| Show only Recordings made during the conference with this ID. | [optional]
 **date_created** | **string**| Only show Recordings created on this date, formatted as *YYYY-MM-DD*. | [optional]

### Return type

[**\OpenAPI\Client\Model\RecordingList**](../Model/RecordingList.md)

### Authorization

[fc](../../README.md#fc)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## listSmsMessages

> \OpenAPI\Client\Model\MessagesList listSmsMessages($account_id, $to, $from, $begin_time, $end_time, $direction, $account_id)

List SMS Messages

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: fc
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('ACCOUNT_ID')
              ->setPassword('AUTH_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | ID of the account that sent this message.
$to = 'to_example'; // string | Only show Messages to this phone number.
$from = 'from_example'; // string | Only show Messages from this phone number.
$begin_time = 'begin_time_example'; // string | Only show Messages sent at or after this time (GMT), given as *YYYY-MM-DD hh:mm:ss*.
$end_time = 'end_time_example'; // string | Only show messages sent at or before this time (GMT), given as *YYYY-MM-DD hh:mm*..
$direction = 'direction_example'; // string | Either `inbound` or `outbound`. Only show Messages that were either *sent from* or *received by* FreeClimb.
$account_id = 'account_id_example'; // string | String that uniquely identifies this account resource.

try {
    $result = $apiInstance->listSmsMessages($account_id, $to, $from, $begin_time, $end_time, $direction, $account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->listSmsMessages: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | **string**| ID of the account that sent this message. |
 **to** | **string**| Only show Messages to this phone number. | [optional]
 **from** | **string**| Only show Messages from this phone number. | [optional]
 **begin_time** | **string**| Only show Messages sent at or after this time (GMT), given as *YYYY-MM-DD hh:mm:ss*. | [optional]
 **end_time** | **string**| Only show messages sent at or before this time (GMT), given as *YYYY-MM-DD hh:mm*.. | [optional]
 **direction** | **string**| Either &#x60;inbound&#x60; or &#x60;outbound&#x60;. Only show Messages that were either *sent from* or *received by* FreeClimb. | [optional]
 **account_id** | **string**| String that uniquely identifies this account resource. | [optional]

### Return type

[**\OpenAPI\Client\Model\MessagesList**](../Model/MessagesList.md)

### Authorization

[fc](../../README.md#fc)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## makeACall

> \OpenAPI\Client\Model\CallResult makeACall($account_id, $make_call_request)

Make a Call

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: fc
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('ACCOUNT_ID')
              ->setPassword('AUTH_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | ID of the account that created this call.
$make_call_request = new \OpenAPI\Client\Model\MakeCallRequest(); // \OpenAPI\Client\Model\MakeCallRequest | Call details for making a call

try {
    $result = $apiInstance->makeACall($account_id, $make_call_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->makeACall: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | **string**| ID of the account that created this call. |
 **make_call_request** | [**\OpenAPI\Client\Model\MakeCallRequest**](../Model/MakeCallRequest.md)| Call details for making a call | [optional]

### Return type

[**\OpenAPI\Client\Model\CallResult**](../Model/CallResult.md)

### Authorization

[fc](../../README.md#fc)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## removeAParticipant

> removeAParticipant($account_id, $conference_id, $call_id)

Remove a Participant

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: fc
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('ACCOUNT_ID')
              ->setPassword('AUTH_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | ID of the account that created this participant.
$conference_id = 'conference_id_example'; // string | ID of the conference this participant is in.
$call_id = 'call_id_example'; // string | ID of the Call associated with this participant.

try {
    $apiInstance->removeAParticipant($account_id, $conference_id, $call_id);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->removeAParticipant: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | **string**| ID of the account that created this participant. |
 **conference_id** | **string**| ID of the conference this participant is in. |
 **call_id** | **string**| ID of the Call associated with this participant. |

### Return type

void (empty response body)

### Authorization

[fc](../../README.md#fc)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## sendAnSmsMessage

> \OpenAPI\Client\Model\MessageResult sendAnSmsMessage($account_id, $message_request)

Send an SMS Message

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: fc
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('ACCOUNT_ID')
              ->setPassword('AUTH_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | ID of the account that sent this message.
$message_request = new \OpenAPI\Client\Model\MessageRequest(); // \OpenAPI\Client\Model\MessageRequest | Details to create a message

try {
    $result = $apiInstance->sendAnSmsMessage($account_id, $message_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->sendAnSmsMessage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | **string**| ID of the account that sent this message. |
 **message_request** | [**\OpenAPI\Client\Model\MessageRequest**](../Model/MessageRequest.md)| Details to create a message | [optional]

### Return type

[**\OpenAPI\Client\Model\MessageResult**](../Model/MessageResult.md)

### Authorization

[fc](../../README.md#fc)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## streamARecordingFile

> \SplFileObject streamARecordingFile($account_id, $recording_id)

Stream a Recording File

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: fc
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('ACCOUNT_ID')
              ->setPassword('AUTH_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | ID of the account that created this recording.
$recording_id = 'recording_id_example'; // string | String that uniquely identifies this recording resource.

try {
    $result = $apiInstance->streamARecordingFile($account_id, $recording_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->streamARecordingFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | **string**| ID of the account that created this recording. |
 **recording_id** | **string**| String that uniquely identifies this recording resource. |

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

[fc](../../README.md#fc)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: audio/x-wav

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## updateAConference

> \OpenAPI\Client\Model\ConferenceResult updateAConference($account_id, $conference_id, $update_conference_request)

Update a Conference

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: fc
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('ACCOUNT_ID')
              ->setPassword('AUTH_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | ID of the account that created this conference.
$conference_id = 'conference_id_example'; // string | String that uniquely identifies this conference resource.
$update_conference_request = new \OpenAPI\Client\Model\UpdateConferenceRequest(); // \OpenAPI\Client\Model\UpdateConferenceRequest | Conference Details to update

try {
    $result = $apiInstance->updateAConference($account_id, $conference_id, $update_conference_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->updateAConference: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | **string**| ID of the account that created this conference. |
 **conference_id** | **string**| String that uniquely identifies this conference resource. |
 **update_conference_request** | [**\OpenAPI\Client\Model\UpdateConferenceRequest**](../Model/UpdateConferenceRequest.md)| Conference Details to update | [optional]

### Return type

[**\OpenAPI\Client\Model\ConferenceResult**](../Model/ConferenceResult.md)

### Authorization

[fc](../../README.md#fc)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## updateALiveCall

> updateALiveCall($account_id, $call_id, $update_call_request)

Update a Live Call

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: fc
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('ACCOUNT_ID')
              ->setPassword('AUTH_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | ID of the account that created this call.
$call_id = 'call_id_example'; // string | String that uniquely identifies this call resource.
$update_call_request = new \OpenAPI\Client\Model\UpdateCallRequest(); // \OpenAPI\Client\Model\UpdateCallRequest | Call details to update

try {
    $apiInstance->updateALiveCall($account_id, $call_id, $update_call_request);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->updateALiveCall: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | **string**| ID of the account that created this call. |
 **call_id** | **string**| String that uniquely identifies this call resource. |
 **update_call_request** | [**\OpenAPI\Client\Model\UpdateCallRequest**](../Model/UpdateCallRequest.md)| Call details to update | [optional]

### Return type

void (empty response body)

### Authorization

[fc](../../README.md#fc)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## updateAParticipant

> \OpenAPI\Client\Model\ConferenceParticipantResult updateAParticipant($account_id, $conference_id, $call_id, $update_conference_participant_request)

Update a Participant

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: fc
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('ACCOUNT_ID')
              ->setPassword('AUTH_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | ID of the account that created this participant.
$conference_id = 'conference_id_example'; // string | ID of the conference this participant is in.
$call_id = 'call_id_example'; // string | ID of the Call associated with this participant.
$update_conference_participant_request = new \OpenAPI\Client\Model\UpdateConferenceParticipantRequest(); // \OpenAPI\Client\Model\UpdateConferenceParticipantRequest | Conference participant details to update

try {
    $result = $apiInstance->updateAParticipant($account_id, $conference_id, $call_id, $update_conference_participant_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->updateAParticipant: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | **string**| ID of the account that created this participant. |
 **conference_id** | **string**| ID of the conference this participant is in. |
 **call_id** | **string**| ID of the Call associated with this participant. |
 **update_conference_participant_request** | [**\OpenAPI\Client\Model\UpdateConferenceParticipantRequest**](../Model/UpdateConferenceParticipantRequest.md)| Conference participant details to update | [optional]

### Return type

[**\OpenAPI\Client\Model\ConferenceParticipantResult**](../Model/ConferenceParticipantResult.md)

### Authorization

[fc](../../README.md#fc)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## updateAQueue

> \OpenAPI\Client\Model\QueueResult updateAQueue($account_id, $queue_id, $queue_request)

Update a Queue

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: fc
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('ACCOUNT_ID')
              ->setPassword('AUTH_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | ID of the account that created this queue.
$queue_id = 'queue_id_example'; // string | A string that uniquely identifies this Queue resource.
$queue_request = new \OpenAPI\Client\Model\QueueRequest(); // \OpenAPI\Client\Model\QueueRequest | Queue Details to update

try {
    $result = $apiInstance->updateAQueue($account_id, $queue_id, $queue_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->updateAQueue: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | **string**| ID of the account that created this queue. |
 **queue_id** | **string**| A string that uniquely identifies this Queue resource. |
 **queue_request** | [**\OpenAPI\Client\Model\QueueRequest**](../Model/QueueRequest.md)| Queue Details to update | [optional]

### Return type

[**\OpenAPI\Client\Model\QueueResult**](../Model/QueueResult.md)

### Authorization

[fc](../../README.md#fc)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## updateAnAccount

> updateAnAccount($account_id, $account_request)

Manage an account

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: fc
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('ACCOUNT_ID')
              ->setPassword('AUTH_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | String that uniquely identifies this account resource.
$account_request = new \OpenAPI\Client\Model\AccountRequest(); // \OpenAPI\Client\Model\AccountRequest | Account details to update

try {
    $apiInstance->updateAnAccount($account_id, $account_request);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->updateAnAccount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | **string**| String that uniquely identifies this account resource. |
 **account_request** | [**\OpenAPI\Client\Model\AccountRequest**](../Model/AccountRequest.md)| Account details to update | [optional]

### Return type

void (empty response body)

### Authorization

[fc](../../README.md#fc)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## updateAnApplication

> \OpenAPI\Client\Model\ApplicationResult updateAnApplication($account_id, $application_id, $application_request)

Update an application

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: fc
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('ACCOUNT_ID')
              ->setPassword('AUTH_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | ID of the account that created this application.
$application_id = 'application_id_example'; // string | A string that uniquely identifies this application resource.
$application_request = new \OpenAPI\Client\Model\ApplicationRequest(); // \OpenAPI\Client\Model\ApplicationRequest | Application details to update.

try {
    $result = $apiInstance->updateAnApplication($account_id, $application_id, $application_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->updateAnApplication: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | **string**| ID of the account that created this application. |
 **application_id** | **string**| A string that uniquely identifies this application resource. |
 **application_request** | [**\OpenAPI\Client\Model\ApplicationRequest**](../Model/ApplicationRequest.md)| Application details to update. | [optional]

### Return type

[**\OpenAPI\Client\Model\ApplicationResult**](../Model/ApplicationResult.md)

### Authorization

[fc](../../README.md#fc)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## updateAnIncomingNumber

> \OpenAPI\Client\Model\IncomingNumberResult updateAnIncomingNumber($account_id, $phone_number_id, $incoming_number_request)

Update an Incoming Number

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: fc
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('ACCOUNT_ID')
              ->setPassword('AUTH_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | ID of the account that owns this phone number.
$phone_number_id = 'phone_number_id_example'; // string | String that uniquely identifies this phone number resource.
$incoming_number_request = new \OpenAPI\Client\Model\IncomingNumberRequest(); // \OpenAPI\Client\Model\IncomingNumberRequest | Incoming Number details to update

try {
    $result = $apiInstance->updateAnIncomingNumber($account_id, $phone_number_id, $incoming_number_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->updateAnIncomingNumber: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | **string**| ID of the account that owns this phone number. |
 **phone_number_id** | **string**| String that uniquely identifies this phone number resource. |
 **incoming_number_request** | [**\OpenAPI\Client\Model\IncomingNumberRequest**](../Model/IncomingNumberRequest.md)| Incoming Number details to update | [optional]

### Return type

[**\OpenAPI\Client\Model\IncomingNumberResult**](../Model/IncomingNumberResult.md)

### Authorization

[fc](../../README.md#fc)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

