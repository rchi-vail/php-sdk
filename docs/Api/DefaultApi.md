# FreeClimb\Api\DefaultApi

All URIs are relative to https://www.freeclimb.com/apiserver.

Method | HTTP request | Description
------------- | ------------- | -------------
[**buyAPhoneNumber()**](DefaultApi.md#buyAPhoneNumber) | **POST** /Accounts/{accountId}/IncomingPhoneNumbers | Buy a Phone Number
[**createAConference()**](DefaultApi.md#createAConference) | **POST** /Accounts/{accountId}/Conferences | Create a Conference
[**createAQueue()**](DefaultApi.md#createAQueue) | **POST** /Accounts/{accountId}/Queues | Create a Queue
[**createAnApplication()**](DefaultApi.md#createAnApplication) | **POST** /Accounts/{accountId}/Applications | Create an application
[**deleteARecording()**](DefaultApi.md#deleteARecording) | **DELETE** /Accounts/{accountId}/Recordings/{recordingId} | Delete a Recording
[**deleteAnApplication()**](DefaultApi.md#deleteAnApplication) | **DELETE** /Accounts/{accountId}/Applications/{applicationId} | Delete an application
[**deleteAnIncomingNumber()**](DefaultApi.md#deleteAnIncomingNumber) | **DELETE** /Accounts/{accountId}/IncomingPhoneNumbers/{phoneNumberId} | Delete an Incoming Number
[**dequeueAMember()**](DefaultApi.md#dequeueAMember) | **POST** /Accounts/{accountId}/Queues/{queueId}/Members/{callId} | Dequeue a Member
[**dequeueHeadMember()**](DefaultApi.md#dequeueHeadMember) | **POST** /Accounts/{accountId}/Queues/{queueId}/Members/Front | Dequeue Head Member
[**downloadARecordingFile()**](DefaultApi.md#downloadARecordingFile) | **GET** /Accounts/{accountId}/Recordings/{recordingId}/Download | Download a Recording File
[**filterLogs()**](DefaultApi.md#filterLogs) | **POST** /Accounts/{accountId}/Logs | Filter Logs
[**getACall()**](DefaultApi.md#getACall) | **GET** /Accounts/{accountId}/Calls/{callId} | Get a Call
[**getAConference()**](DefaultApi.md#getAConference) | **GET** /Accounts/{accountId}/Conferences/{conferenceId} | Get a Conference
[**getAMember()**](DefaultApi.md#getAMember) | **GET** /Accounts/{accountId}/Queues/{queueId}/Members/{callId} | Get a Member
[**getAParticipant()**](DefaultApi.md#getAParticipant) | **GET** /Accounts/{accountId}/Conferences/{conferenceId}/Participants/{callId} | Get a Participant
[**getAQueue()**](DefaultApi.md#getAQueue) | **GET** /Accounts/{accountId}/Queues/{queueId} | Get a Queue
[**getARecording()**](DefaultApi.md#getARecording) | **GET** /Accounts/{accountId}/Recordings/{recordingId} | Get a Recording
[**getAnAccount()**](DefaultApi.md#getAnAccount) | **GET** /Accounts/{accountId} | Get an Account
[**getAnApplication()**](DefaultApi.md#getAnApplication) | **GET** /Accounts/{accountId}/Applications/{applicationId} | Get an Application
[**getAnIncomingNumber()**](DefaultApi.md#getAnIncomingNumber) | **GET** /Accounts/{accountId}/IncomingPhoneNumbers/{phoneNumberId} | Get an Incoming Number
[**getAnSmsMessage()**](DefaultApi.md#getAnSmsMessage) | **GET** /Accounts/{accountId}/Messages/{messageId} | Get an SMS Message
[**getHeadMember()**](DefaultApi.md#getHeadMember) | **GET** /Accounts/{accountId}/Queues/{queueId}/Members/Front | Get Head Member
[**listActiveQueues()**](DefaultApi.md#listActiveQueues) | **GET** /Accounts/{accountId}/Queues | List Active Queues
[**listAllAccountLogs()**](DefaultApi.md#listAllAccountLogs) | **GET** /Accounts/{accountId}/Logs | List All Account Logs
[**listApplications()**](DefaultApi.md#listApplications) | **GET** /Accounts/{accountId}/Applications | List applications
[**listAvailableNumbers()**](DefaultApi.md#listAvailableNumbers) | **GET** /AvailablePhoneNumbers | List available numbers
[**listCallLogs()**](DefaultApi.md#listCallLogs) | **GET** /Accounts/{accountId}/Calls/{callId}/Logs | List Call Logs
[**listCallRecordings()**](DefaultApi.md#listCallRecordings) | **GET** /Accounts/{accountId}/Calls/{callId}/Recordings | List Call Recordings
[**listCalls()**](DefaultApi.md#listCalls) | **GET** /Accounts/{accountId}/Calls | List Calls
[**listConferences()**](DefaultApi.md#listConferences) | **GET** /Accounts/{accountId}/Conferences | List Conferences
[**listIncomingNumbers()**](DefaultApi.md#listIncomingNumbers) | **GET** /Accounts/{accountId}/IncomingPhoneNumbers | List Incoming Numbers
[**listMembers()**](DefaultApi.md#listMembers) | **GET** /Accounts/{accountId}/Queues/{queueId}/Members | List Members
[**listParticipants()**](DefaultApi.md#listParticipants) | **GET** /Accounts/{accountId}/Conferences/{conferenceId}/Participants | List Participants
[**listRecordings()**](DefaultApi.md#listRecordings) | **GET** /Accounts/{accountId}/Recordings | List Recordings
[**listSmsMessages()**](DefaultApi.md#listSmsMessages) | **GET** /Accounts/{accountId}/Messages | List SMS Messages
[**makeACall()**](DefaultApi.md#makeACall) | **POST** /Accounts/{accountId}/Calls | Make a Call
[**removeAParticipant()**](DefaultApi.md#removeAParticipant) | **DELETE** /Accounts/{accountId}/Conferences/{conferenceId}/Participants/{callId} | Remove a Participant
[**sendAnSmsMessage()**](DefaultApi.md#sendAnSmsMessage) | **POST** /Accounts/{accountId}/Messages | Send an SMS Message
[**streamARecordingFile()**](DefaultApi.md#streamARecordingFile) | **GET** /Accounts/{accountId}/Recordings/{recordingId}/Stream | Stream a Recording File
[**updateAConference()**](DefaultApi.md#updateAConference) | **POST** /Accounts/{accountId}/Conferences/{conferenceId} | Update a Conference
[**updateALiveCall()**](DefaultApi.md#updateALiveCall) | **POST** /Accounts/{accountId}/Calls/{callId} | Update a Live Call
[**updateAParticipant()**](DefaultApi.md#updateAParticipant) | **POST** /Accounts/{accountId}/Conferences/{conferenceId}/Participants/{callId} | Update a Participant
[**updateAQueue()**](DefaultApi.md#updateAQueue) | **POST** /Accounts/{accountId}/Queues/{queueId} | Update a Queue
[**updateAnAccount()**](DefaultApi.md#updateAnAccount) | **POST** /Accounts/{accountId} | Manage an account
[**updateAnApplication()**](DefaultApi.md#updateAnApplication) | **POST** /Accounts/{accountId}/Applications/{applicationId} | Update an application
[**updateAnIncomingNumber()**](DefaultApi.md#updateAnIncomingNumber) | **POST** /Accounts/{accountId}/IncomingPhoneNumbers/{phoneNumberId} | Update an Incoming Number


## `buyAPhoneNumber()`

```php
buyAPhoneNumber($account_id, $buy_incoming_number_request): \FreeClimb\Api\Model\IncomingNumberResult
```

Buy a Phone Number

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: fc
$config = FreeClimb\Api\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new FreeClimb\Api\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | ID of the account
$buy_incoming_number_request = new \FreeClimb\Api\Model\BuyIncomingNumberRequest(); // \FreeClimb\Api\Model\BuyIncomingNumberRequest | Incoming Number transaction details

try {
    $result = $apiInstance->buyAPhoneNumber($account_id, $buy_incoming_number_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->buyAPhoneNumber: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | **string**| ID of the account |
 **buy_incoming_number_request** | [**\FreeClimb\Api\Model\BuyIncomingNumberRequest**](../Model/BuyIncomingNumberRequest.md)| Incoming Number transaction details |

### Return type

[**\FreeClimb\Api\Model\IncomingNumberResult**](../Model/IncomingNumberResult.md)

### Authorization

[fc](../../README.md#fc)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createAConference()`

```php
createAConference($account_id, $create_conference_request): \FreeClimb\Api\Model\ConferenceResult
```

Create a Conference

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: fc
$config = FreeClimb\Api\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new FreeClimb\Api\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | ID of the account
$create_conference_request = new \FreeClimb\Api\Model\CreateConferenceRequest(); // \FreeClimb\Api\Model\CreateConferenceRequest | Conference to create

try {
    $result = $apiInstance->createAConference($account_id, $create_conference_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->createAConference: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | **string**| ID of the account |
 **create_conference_request** | [**\FreeClimb\Api\Model\CreateConferenceRequest**](../Model/CreateConferenceRequest.md)| Conference to create | [optional]

### Return type

[**\FreeClimb\Api\Model\ConferenceResult**](../Model/ConferenceResult.md)

### Authorization

[fc](../../README.md#fc)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createAQueue()`

```php
createAQueue($account_id, $queue_request): \FreeClimb\Api\Model\QueueResult
```

Create a Queue

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: fc
$config = FreeClimb\Api\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new FreeClimb\Api\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | ID of the account
$queue_request = new \FreeClimb\Api\Model\QueueRequest(); // \FreeClimb\Api\Model\QueueRequest | Queue details used to create a queue

try {
    $result = $apiInstance->createAQueue($account_id, $queue_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->createAQueue: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | **string**| ID of the account |
 **queue_request** | [**\FreeClimb\Api\Model\QueueRequest**](../Model/QueueRequest.md)| Queue details used to create a queue | [optional]

### Return type

[**\FreeClimb\Api\Model\QueueResult**](../Model/QueueResult.md)

### Authorization

[fc](../../README.md#fc)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createAnApplication()`

```php
createAnApplication($account_id, $application_request): \FreeClimb\Api\Model\ApplicationResult
```

Create an application

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: fc
$config = FreeClimb\Api\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new FreeClimb\Api\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | ID of the account
$application_request = new \FreeClimb\Api\Model\ApplicationRequest(); // \FreeClimb\Api\Model\ApplicationRequest | Application Details

try {
    $result = $apiInstance->createAnApplication($account_id, $application_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->createAnApplication: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | **string**| ID of the account |
 **application_request** | [**\FreeClimb\Api\Model\ApplicationRequest**](../Model/ApplicationRequest.md)| Application Details | [optional]

### Return type

[**\FreeClimb\Api\Model\ApplicationResult**](../Model/ApplicationResult.md)

### Authorization

[fc](../../README.md#fc)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteARecording()`

```php
deleteARecording($account_id, $recording_id)
```

Delete a Recording

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: fc
$config = FreeClimb\Api\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new FreeClimb\Api\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | ID of the account
$recording_id = 'recording_id_example'; // string | String that uniquely identifies this recording resource.

try {
    $apiInstance->deleteARecording($account_id, $recording_id);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->deleteARecording: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | **string**| ID of the account |
 **recording_id** | **string**| String that uniquely identifies this recording resource. |

### Return type

void (empty response body)

### Authorization

[fc](../../README.md#fc)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteAnApplication()`

```php
deleteAnApplication($account_id, $application_id)
```

Delete an application

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: fc
$config = FreeClimb\Api\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new FreeClimb\Api\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | ID of the account
$application_id = 'application_id_example'; // string | String that uniquely identifies this application resource.

try {
    $apiInstance->deleteAnApplication($account_id, $application_id);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->deleteAnApplication: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | **string**| ID of the account |
 **application_id** | **string**| String that uniquely identifies this application resource. |

### Return type

void (empty response body)

### Authorization

[fc](../../README.md#fc)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteAnIncomingNumber()`

```php
deleteAnIncomingNumber($account_id, $phone_number_id)
```

Delete an Incoming Number

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: fc
$config = FreeClimb\Api\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new FreeClimb\Api\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | ID of the account
$phone_number_id = 'phone_number_id_example'; // string | String that uniquely identifies this phone number resource.

try {
    $apiInstance->deleteAnIncomingNumber($account_id, $phone_number_id);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->deleteAnIncomingNumber: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | **string**| ID of the account |
 **phone_number_id** | **string**| String that uniquely identifies this phone number resource. |

### Return type

void (empty response body)

### Authorization

[fc](../../README.md#fc)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `dequeueAMember()`

```php
dequeueAMember($account_id, $queue_id, $call_id): \FreeClimb\Api\Model\QueueMember
```

Dequeue a Member

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: fc
$config = FreeClimb\Api\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new FreeClimb\Api\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | ID of the account
$queue_id = 'queue_id_example'; // string | String that uniquely identifies the Queue that the Member belongs to.
$call_id = 'call_id_example'; // string | ID if the Call that the Member belongs to

try {
    $result = $apiInstance->dequeueAMember($account_id, $queue_id, $call_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->dequeueAMember: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | **string**| ID of the account |
 **queue_id** | **string**| String that uniquely identifies the Queue that the Member belongs to. |
 **call_id** | **string**| ID if the Call that the Member belongs to |

### Return type

[**\FreeClimb\Api\Model\QueueMember**](../Model/QueueMember.md)

### Authorization

[fc](../../README.md#fc)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `dequeueHeadMember()`

```php
dequeueHeadMember($account_id, $queue_id): \FreeClimb\Api\Model\QueueMember
```

Dequeue Head Member

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: fc
$config = FreeClimb\Api\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new FreeClimb\Api\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | ID of the account
$queue_id = 'queue_id_example'; // string | String that uniquely identifies this queue resource.

try {
    $result = $apiInstance->dequeueHeadMember($account_id, $queue_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->dequeueHeadMember: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | **string**| ID of the account |
 **queue_id** | **string**| String that uniquely identifies this queue resource. |

### Return type

[**\FreeClimb\Api\Model\QueueMember**](../Model/QueueMember.md)

### Authorization

[fc](../../README.md#fc)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `downloadARecordingFile()`

```php
downloadARecordingFile($account_id, $recording_id): \SplFileObject
```

Download a Recording File

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: fc
$config = FreeClimb\Api\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new FreeClimb\Api\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | ID of the account
$recording_id = 'recording_id_example'; // string | String that uniquely identifies this recording resource.

try {
    $result = $apiInstance->downloadARecordingFile($account_id, $recording_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->downloadARecordingFile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | **string**| ID of the account |
 **recording_id** | **string**| String that uniquely identifies this recording resource. |

### Return type

**\SplFileObject**

### Authorization

[fc](../../README.md#fc)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `audio/x-wav`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `filterLogs()`

```php
filterLogs($account_id, $filter_logs_request): \FreeClimb\Api\Model\LogList
```

Filter Logs

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: fc
$config = FreeClimb\Api\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new FreeClimb\Api\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | ID of the account
$filter_logs_request = new \FreeClimb\Api\Model\FilterLogsRequest(); // \FreeClimb\Api\Model\FilterLogsRequest | Filter logs request paramters

try {
    $result = $apiInstance->filterLogs($account_id, $filter_logs_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->filterLogs: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | **string**| ID of the account |
 **filter_logs_request** | [**\FreeClimb\Api\Model\FilterLogsRequest**](../Model/FilterLogsRequest.md)| Filter logs request paramters |

### Return type

[**\FreeClimb\Api\Model\LogList**](../Model/LogList.md)

### Authorization

[fc](../../README.md#fc)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getACall()`

```php
getACall($account_id, $call_id): \FreeClimb\Api\Model\CallResult
```

Get a Call

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: fc
$config = FreeClimb\Api\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new FreeClimb\Api\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | ID of the account
$call_id = 'call_id_example'; // string | String that uniquely identifies this call resource.

try {
    $result = $apiInstance->getACall($account_id, $call_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getACall: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | **string**| ID of the account |
 **call_id** | **string**| String that uniquely identifies this call resource. |

### Return type

[**\FreeClimb\Api\Model\CallResult**](../Model/CallResult.md)

### Authorization

[fc](../../README.md#fc)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAConference()`

```php
getAConference($account_id, $conference_id): \FreeClimb\Api\Model\ConferenceResult
```

Get a Conference

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: fc
$config = FreeClimb\Api\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new FreeClimb\Api\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | ID of the account
$conference_id = 'conference_id_example'; // string | A string that uniquely identifies this conference resource.

try {
    $result = $apiInstance->getAConference($account_id, $conference_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getAConference: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | **string**| ID of the account |
 **conference_id** | **string**| A string that uniquely identifies this conference resource. |

### Return type

[**\FreeClimb\Api\Model\ConferenceResult**](../Model/ConferenceResult.md)

### Authorization

[fc](../../README.md#fc)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAMember()`

```php
getAMember($account_id, $queue_id, $call_id): \FreeClimb\Api\Model\QueueMember
```

Get a Member

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: fc
$config = FreeClimb\Api\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new FreeClimb\Api\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | ID of the account
$queue_id = 'queue_id_example'; // string | String that uniquely identifies the Queue that the Member belongs to.
$call_id = 'call_id_example'; // string | ID of the Call that the Member belongs to

try {
    $result = $apiInstance->getAMember($account_id, $queue_id, $call_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getAMember: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | **string**| ID of the account |
 **queue_id** | **string**| String that uniquely identifies the Queue that the Member belongs to. |
 **call_id** | **string**| ID of the Call that the Member belongs to |

### Return type

[**\FreeClimb\Api\Model\QueueMember**](../Model/QueueMember.md)

### Authorization

[fc](../../README.md#fc)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAParticipant()`

```php
getAParticipant($account_id, $conference_id, $call_id): \FreeClimb\Api\Model\ConferenceParticipantResult
```

Get a Participant

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: fc
$config = FreeClimb\Api\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new FreeClimb\Api\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | ID of the account
$conference_id = 'conference_id_example'; // string | ID of the conference this participant is in.
$call_id = 'call_id_example'; // string | ID of the Call associated with this participant.

try {
    $result = $apiInstance->getAParticipant($account_id, $conference_id, $call_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getAParticipant: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | **string**| ID of the account |
 **conference_id** | **string**| ID of the conference this participant is in. |
 **call_id** | **string**| ID of the Call associated with this participant. |

### Return type

[**\FreeClimb\Api\Model\ConferenceParticipantResult**](../Model/ConferenceParticipantResult.md)

### Authorization

[fc](../../README.md#fc)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAQueue()`

```php
getAQueue($account_id, $queue_id): \FreeClimb\Api\Model\QueueResult
```

Get a Queue

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: fc
$config = FreeClimb\Api\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new FreeClimb\Api\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | ID of the account
$queue_id = 'queue_id_example'; // string | A string that uniquely identifies this queue resource.

try {
    $result = $apiInstance->getAQueue($account_id, $queue_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getAQueue: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | **string**| ID of the account |
 **queue_id** | **string**| A string that uniquely identifies this queue resource. |

### Return type

[**\FreeClimb\Api\Model\QueueResult**](../Model/QueueResult.md)

### Authorization

[fc](../../README.md#fc)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getARecording()`

```php
getARecording($account_id, $recording_id): \FreeClimb\Api\Model\RecordingResult
```

Get a Recording

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: fc
$config = FreeClimb\Api\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new FreeClimb\Api\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | ID of the account
$recording_id = 'recording_id_example'; // string | String that uniquely identifies this recording resource.

try {
    $result = $apiInstance->getARecording($account_id, $recording_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getARecording: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | **string**| ID of the account |
 **recording_id** | **string**| String that uniquely identifies this recording resource. |

### Return type

[**\FreeClimb\Api\Model\RecordingResult**](../Model/RecordingResult.md)

### Authorization

[fc](../../README.md#fc)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAnAccount()`

```php
getAnAccount($account_id): \FreeClimb\Api\Model\AccountResult
```

Get an Account

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: fc
$config = FreeClimb\Api\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new FreeClimb\Api\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | ID of the account

try {
    $result = $apiInstance->getAnAccount($account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getAnAccount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | **string**| ID of the account |

### Return type

[**\FreeClimb\Api\Model\AccountResult**](../Model/AccountResult.md)

### Authorization

[fc](../../README.md#fc)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAnApplication()`

```php
getAnApplication($account_id, $application_id): \FreeClimb\Api\Model\ApplicationResult
```

Get an Application

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: fc
$config = FreeClimb\Api\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new FreeClimb\Api\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | ID of the account
$application_id = 'application_id_example'; // string | A string that uniquely identifies this application resource.

try {
    $result = $apiInstance->getAnApplication($account_id, $application_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getAnApplication: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | **string**| ID of the account |
 **application_id** | **string**| A string that uniquely identifies this application resource. |

### Return type

[**\FreeClimb\Api\Model\ApplicationResult**](../Model/ApplicationResult.md)

### Authorization

[fc](../../README.md#fc)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAnIncomingNumber()`

```php
getAnIncomingNumber($account_id, $phone_number_id): \FreeClimb\Api\Model\IncomingNumberResult
```

Get an Incoming Number

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: fc
$config = FreeClimb\Api\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new FreeClimb\Api\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | ID of the account
$phone_number_id = 'phone_number_id_example'; // string | String that uniquely identifies this phone number resource.

try {
    $result = $apiInstance->getAnIncomingNumber($account_id, $phone_number_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getAnIncomingNumber: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | **string**| ID of the account |
 **phone_number_id** | **string**| String that uniquely identifies this phone number resource. |

### Return type

[**\FreeClimb\Api\Model\IncomingNumberResult**](../Model/IncomingNumberResult.md)

### Authorization

[fc](../../README.md#fc)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAnSmsMessage()`

```php
getAnSmsMessage($account_id, $message_id): \FreeClimb\Api\Model\MessageResult
```

Get an SMS Message

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: fc
$config = FreeClimb\Api\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new FreeClimb\Api\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | ID of the account
$message_id = 'message_id_example'; // string | String that uniquely identifies this Message resource.

try {
    $result = $apiInstance->getAnSmsMessage($account_id, $message_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getAnSmsMessage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | **string**| ID of the account |
 **message_id** | **string**| String that uniquely identifies this Message resource. |

### Return type

[**\FreeClimb\Api\Model\MessageResult**](../Model/MessageResult.md)

### Authorization

[fc](../../README.md#fc)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getHeadMember()`

```php
getHeadMember($account_id, $queue_id): \FreeClimb\Api\Model\QueueMember
```

Get Head Member

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: fc
$config = FreeClimb\Api\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new FreeClimb\Api\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | ID of the account
$queue_id = 'queue_id_example'; // string | String that uniquely identifies the Queue that the Member belongs to.

try {
    $result = $apiInstance->getHeadMember($account_id, $queue_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getHeadMember: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | **string**| ID of the account |
 **queue_id** | **string**| String that uniquely identifies the Queue that the Member belongs to. |

### Return type

[**\FreeClimb\Api\Model\QueueMember**](../Model/QueueMember.md)

### Authorization

[fc](../../README.md#fc)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listActiveQueues()`

```php
listActiveQueues($account_id, $alias): \FreeClimb\Api\Model\QueueList
```

List Active Queues

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: fc
$config = FreeClimb\Api\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new FreeClimb\Api\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | ID of the account
$alias = 'alias_example'; // string | Return only the Queue resources with aliases that exactly match this name.

try {
    $result = $apiInstance->listActiveQueues($account_id, $alias);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->listActiveQueues: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | **string**| ID of the account |
 **alias** | **string**| Return only the Queue resources with aliases that exactly match this name. | [optional]

### Return type

[**\FreeClimb\Api\Model\QueueList**](../Model/QueueList.md)

### Authorization

[fc](../../README.md#fc)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listAllAccountLogs()`

```php
listAllAccountLogs($account_id): \FreeClimb\Api\Model\LogList
```

List All Account Logs

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: fc
$config = FreeClimb\Api\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new FreeClimb\Api\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | ID of the account

try {
    $result = $apiInstance->listAllAccountLogs($account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->listAllAccountLogs: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | **string**| ID of the account |

### Return type

[**\FreeClimb\Api\Model\LogList**](../Model/LogList.md)

### Authorization

[fc](../../README.md#fc)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listApplications()`

```php
listApplications($account_id, $alias): \FreeClimb\Api\Model\ApplicationList
```

List applications

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: fc
$config = FreeClimb\Api\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new FreeClimb\Api\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | ID of the account
$alias = 'alias_example'; // string | Return only applications with aliases that exactly match this value.

try {
    $result = $apiInstance->listApplications($account_id, $alias);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->listApplications: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | **string**| ID of the account |
 **alias** | **string**| Return only applications with aliases that exactly match this value. | [optional]

### Return type

[**\FreeClimb\Api\Model\ApplicationList**](../Model/ApplicationList.md)

### Authorization

[fc](../../README.md#fc)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listAvailableNumbers()`

```php
listAvailableNumbers($phone_number, $region, $country, $voice_enabled, $sms_enabled, $capabilities_voice, $capabilities_sms, $capabilities_toll_free, $capabilities_ten_dlc, $capabilities_short_code): \FreeClimb\Api\Model\AvailableNumberList
```

List available numbers

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: fc
$config = FreeClimb\Api\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new FreeClimb\Api\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$phone_number = 'phone_number_example'; // string | PCRE-compatible regular expression to filter against `phoneNumber` field, which is in E.164 format.
$region = 'region_example'; // string | State or province of this phone number.
$country = 'country_example'; // string | Country of this phone number.
$voice_enabled = true; // bool | Indicates whether the phone number can handle Calls. Typically set to true for all numbers.
$sms_enabled = true; // bool | Indication of whether the phone number can handle sending and receiving SMS messages. Typically set to true for all numbers.
$capabilities_voice = True; // bool
$capabilities_sms = True; // bool
$capabilities_toll_free = True; // bool
$capabilities_ten_dlc = True; // bool
$capabilities_short_code = True; // bool

try {
    $result = $apiInstance->listAvailableNumbers($phone_number, $region, $country, $voice_enabled, $sms_enabled, $capabilities_voice, $capabilities_sms, $capabilities_toll_free, $capabilities_ten_dlc, $capabilities_short_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->listAvailableNumbers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **phone_number** | **string**| PCRE-compatible regular expression to filter against &#x60;phoneNumber&#x60; field, which is in E.164 format. | [optional]
 **region** | **string**| State or province of this phone number. | [optional]
 **country** | **string**| Country of this phone number. | [optional]
 **voice_enabled** | **bool**| Indicates whether the phone number can handle Calls. Typically set to true for all numbers. | [optional] [default to true]
 **sms_enabled** | **bool**| Indication of whether the phone number can handle sending and receiving SMS messages. Typically set to true for all numbers. | [optional] [default to true]
 **capabilities_voice** | **bool**|  | [optional]
 **capabilities_sms** | **bool**|  | [optional]
 **capabilities_toll_free** | **bool**|  | [optional]
 **capabilities_ten_dlc** | **bool**|  | [optional]
 **capabilities_short_code** | **bool**|  | [optional]

### Return type

[**\FreeClimb\Api\Model\AvailableNumberList**](../Model/AvailableNumberList.md)

### Authorization

[fc](../../README.md#fc)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listCallLogs()`

```php
listCallLogs($account_id, $call_id): \FreeClimb\Api\Model\LogList
```

List Call Logs

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: fc
$config = FreeClimb\Api\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new FreeClimb\Api\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | ID of the account
$call_id = 'call_id_example'; // string | String that uniquely identifies this call resource.

try {
    $result = $apiInstance->listCallLogs($account_id, $call_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->listCallLogs: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | **string**| ID of the account |
 **call_id** | **string**| String that uniquely identifies this call resource. |

### Return type

[**\FreeClimb\Api\Model\LogList**](../Model/LogList.md)

### Authorization

[fc](../../README.md#fc)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listCallRecordings()`

```php
listCallRecordings($account_id, $call_id, $date_created): \FreeClimb\Api\Model\RecordingList
```

List Call Recordings

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: fc
$config = FreeClimb\Api\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new FreeClimb\Api\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | ID of the account
$call_id = 'call_id_example'; // string | String that uniquely identifies this call resource.
$date_created = 'date_created_example'; // string | Only show recordings created on the specified date, in the form *YYYY-MM-DD*.

try {
    $result = $apiInstance->listCallRecordings($account_id, $call_id, $date_created);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->listCallRecordings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | **string**| ID of the account |
 **call_id** | **string**| String that uniquely identifies this call resource. |
 **date_created** | **string**| Only show recordings created on the specified date, in the form *YYYY-MM-DD*. | [optional]

### Return type

[**\FreeClimb\Api\Model\RecordingList**](../Model/RecordingList.md)

### Authorization

[fc](../../README.md#fc)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listCalls()`

```php
listCalls($account_id, $active, $to, $from, $status, $start_time, $end_time, $parent_call_id): \FreeClimb\Api\Model\CallList
```

List Calls

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: fc
$config = FreeClimb\Api\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new FreeClimb\Api\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | ID of the account
$active = false; // bool | If active is set to true then all calls of the nature queued, ringing, inProgress are returned in the query.
$to = 'to_example'; // string | Only show Calls to this phone number.
$from = 'from_example'; // string | Only show Calls from this phone number.
$status = 'status_example'; // string | Only show Calls currently in this status. May be `queued`, `ringing`, `inProgress`, `canceled`, `completed`, `failed`, `busy`, or `noAnswer`.
$start_time = 'start_time_example'; // string | Only show Calls that started at or after this time, given as YYYY-MM-DD hh:mm:ss.
$end_time = 'end_time_example'; // string | Only show Calls that ended at or before this time, given as YYYY-MM- DD hh:mm:ss.
$parent_call_id = 'parent_call_id_example'; // string | Only show Calls spawned by the call with this ID.

try {
    $result = $apiInstance->listCalls($account_id, $active, $to, $from, $status, $start_time, $end_time, $parent_call_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->listCalls: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | **string**| ID of the account |
 **active** | **bool**| If active is set to true then all calls of the nature queued, ringing, inProgress are returned in the query. | [optional] [default to false]
 **to** | **string**| Only show Calls to this phone number. | [optional]
 **from** | **string**| Only show Calls from this phone number. | [optional]
 **status** | **string**| Only show Calls currently in this status. May be &#x60;queued&#x60;, &#x60;ringing&#x60;, &#x60;inProgress&#x60;, &#x60;canceled&#x60;, &#x60;completed&#x60;, &#x60;failed&#x60;, &#x60;busy&#x60;, or &#x60;noAnswer&#x60;. | [optional]
 **start_time** | **string**| Only show Calls that started at or after this time, given as YYYY-MM-DD hh:mm:ss. | [optional]
 **end_time** | **string**| Only show Calls that ended at or before this time, given as YYYY-MM- DD hh:mm:ss. | [optional]
 **parent_call_id** | **string**| Only show Calls spawned by the call with this ID. | [optional]

### Return type

[**\FreeClimb\Api\Model\CallList**](../Model/CallList.md)

### Authorization

[fc](../../README.md#fc)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listConferences()`

```php
listConferences($account_id, $status, $alias, $date_created, $date_updated): \FreeClimb\Api\Model\ConferenceList
```

List Conferences

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: fc
$config = FreeClimb\Api\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new FreeClimb\Api\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | ID of the account
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
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | **string**| ID of the account |
 **status** | **string**| Only show conferences that currently have the specified status. Valid values: &#x60;empty&#x60;, &#x60;populated&#x60;, &#x60;inProgress&#x60;, or &#x60;terminated&#x60;. | [optional]
 **alias** | **string**| List Conferences whose alias exactly matches this string. | [optional]
 **date_created** | **string**| Only show Conferences that were created on the specified date, in the form *YYYY-MM-DD*. | [optional]
 **date_updated** | **string**| Only show Conferences that were last updated on the specified date, in the form *YYYY-MM-DD*. | [optional]

### Return type

[**\FreeClimb\Api\Model\ConferenceList**](../Model/ConferenceList.md)

### Authorization

[fc](../../README.md#fc)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listIncomingNumbers()`

```php
listIncomingNumbers($account_id, $phone_number, $alias, $region, $country, $application_id, $has_application, $voice_enabled, $sms_enabled, $capabilities_voice, $capabilities_sms, $capabilities_toll_free, $capabilities_ten_dlc, $capabilities_short_code): \FreeClimb\Api\Model\IncomingNumberList
```

List Incoming Numbers

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: fc
$config = FreeClimb\Api\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new FreeClimb\Api\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | ID of the account
$phone_number = 'phone_number_example'; // string | Only show incoming phone number resources that match this PCRE-compatible regular expression.
$alias = 'alias_example'; // string | Only show incoming phone numbers with aliases that exactly match this value.
$region = 'region_example'; // string | State or province of this phone number.
$country = 'country_example'; // string | Country of this phone number.
$application_id = 'application_id_example'; // string | ID of the Application that FreeClimb should contact if a Call or SMS arrives for this phone number or a Call from this number is placed. An incoming phone number is not useful until associated with an applicationId.
$has_application = false; // bool | Indication of whether the phone number has an application linked to it.
$voice_enabled = true; // bool | Indicates whether the phone number can handle Calls. Typically set to true for all numbers.
$sms_enabled = true; // bool | Indication of whether the phone number can handle sending and receiving SMS messages. Typically set to true for all numbers.
$capabilities_voice = True; // bool
$capabilities_sms = True; // bool
$capabilities_toll_free = True; // bool
$capabilities_ten_dlc = True; // bool
$capabilities_short_code = True; // bool

try {
    $result = $apiInstance->listIncomingNumbers($account_id, $phone_number, $alias, $region, $country, $application_id, $has_application, $voice_enabled, $sms_enabled, $capabilities_voice, $capabilities_sms, $capabilities_toll_free, $capabilities_ten_dlc, $capabilities_short_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->listIncomingNumbers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | **string**| ID of the account |
 **phone_number** | **string**| Only show incoming phone number resources that match this PCRE-compatible regular expression. | [optional]
 **alias** | **string**| Only show incoming phone numbers with aliases that exactly match this value. | [optional]
 **region** | **string**| State or province of this phone number. | [optional]
 **country** | **string**| Country of this phone number. | [optional]
 **application_id** | **string**| ID of the Application that FreeClimb should contact if a Call or SMS arrives for this phone number or a Call from this number is placed. An incoming phone number is not useful until associated with an applicationId. | [optional]
 **has_application** | **bool**| Indication of whether the phone number has an application linked to it. | [optional] [default to false]
 **voice_enabled** | **bool**| Indicates whether the phone number can handle Calls. Typically set to true for all numbers. | [optional] [default to true]
 **sms_enabled** | **bool**| Indication of whether the phone number can handle sending and receiving SMS messages. Typically set to true for all numbers. | [optional] [default to true]
 **capabilities_voice** | **bool**|  | [optional]
 **capabilities_sms** | **bool**|  | [optional]
 **capabilities_toll_free** | **bool**|  | [optional]
 **capabilities_ten_dlc** | **bool**|  | [optional]
 **capabilities_short_code** | **bool**|  | [optional]

### Return type

[**\FreeClimb\Api\Model\IncomingNumberList**](../Model/IncomingNumberList.md)

### Authorization

[fc](../../README.md#fc)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listMembers()`

```php
listMembers($account_id, $queue_id): \FreeClimb\Api\Model\QueueMemberList
```

List Members

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: fc
$config = FreeClimb\Api\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new FreeClimb\Api\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | ID of the account
$queue_id = 'queue_id_example'; // string | String that uniquely identifies the Queue that the Member belongs to.

try {
    $result = $apiInstance->listMembers($account_id, $queue_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->listMembers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | **string**| ID of the account |
 **queue_id** | **string**| String that uniquely identifies the Queue that the Member belongs to. |

### Return type

[**\FreeClimb\Api\Model\QueueMemberList**](../Model/QueueMemberList.md)

### Authorization

[fc](../../README.md#fc)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listParticipants()`

```php
listParticipants($account_id, $conference_id, $talk, $listen): \FreeClimb\Api\Model\ConferenceParticipantList
```

List Participants

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: fc
$config = FreeClimb\Api\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new FreeClimb\Api\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | ID of the account
$conference_id = 'conference_id_example'; // string | ID of the conference this participant is in.
$talk = True; // bool | Only show Participants with the talk privilege.
$listen = True; // bool | Only show Participants with the listen privilege.

try {
    $result = $apiInstance->listParticipants($account_id, $conference_id, $talk, $listen);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->listParticipants: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | **string**| ID of the account |
 **conference_id** | **string**| ID of the conference this participant is in. |
 **talk** | **bool**| Only show Participants with the talk privilege. | [optional]
 **listen** | **bool**| Only show Participants with the listen privilege. | [optional]

### Return type

[**\FreeClimb\Api\Model\ConferenceParticipantList**](../Model/ConferenceParticipantList.md)

### Authorization

[fc](../../README.md#fc)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listRecordings()`

```php
listRecordings($account_id, $call_id, $conference_id, $date_created): \FreeClimb\Api\Model\RecordingList
```

List Recordings

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: fc
$config = FreeClimb\Api\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new FreeClimb\Api\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | ID of the account
$call_id = 'call_id_example'; // string | Show only Recordings made during the Call with this ID.
$conference_id = 'conference_id_example'; // string | Show only Recordings made during the conference with this ID.
$date_created = 'date_created_example'; // string | Only show Recordings created on this date, formatted as *YYYY-MM-DD*.

try {
    $result = $apiInstance->listRecordings($account_id, $call_id, $conference_id, $date_created);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->listRecordings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | **string**| ID of the account |
 **call_id** | **string**| Show only Recordings made during the Call with this ID. | [optional]
 **conference_id** | **string**| Show only Recordings made during the conference with this ID. | [optional]
 **date_created** | **string**| Only show Recordings created on this date, formatted as *YYYY-MM-DD*. | [optional]

### Return type

[**\FreeClimb\Api\Model\RecordingList**](../Model/RecordingList.md)

### Authorization

[fc](../../README.md#fc)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listSmsMessages()`

```php
listSmsMessages($account_id, $to, $from, $begin_time, $end_time, $direction): \FreeClimb\Api\Model\MessagesList
```

List SMS Messages

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: fc
$config = FreeClimb\Api\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new FreeClimb\Api\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | ID of the account
$to = 'to_example'; // string | Only show Messages to this phone number.
$from = 'from_example'; // string | Only show Messages from this phone number.
$begin_time = 'begin_time_example'; // string | Only show Messages sent at or after this time (GMT), given as *YYYY-MM-DD hh:mm:ss*.
$end_time = 'end_time_example'; // string | Only show messages sent at or before this time (GMT), given as *YYYY-MM-DD hh:mm*..
$direction = 'direction_example'; // string | Either `inbound` or `outbound`. Only show Messages that were either *sent from* or *received by* FreeClimb.

try {
    $result = $apiInstance->listSmsMessages($account_id, $to, $from, $begin_time, $end_time, $direction);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->listSmsMessages: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | **string**| ID of the account |
 **to** | **string**| Only show Messages to this phone number. | [optional]
 **from** | **string**| Only show Messages from this phone number. | [optional]
 **begin_time** | **string**| Only show Messages sent at or after this time (GMT), given as *YYYY-MM-DD hh:mm:ss*. | [optional]
 **end_time** | **string**| Only show messages sent at or before this time (GMT), given as *YYYY-MM-DD hh:mm*.. | [optional]
 **direction** | **string**| Either &#x60;inbound&#x60; or &#x60;outbound&#x60;. Only show Messages that were either *sent from* or *received by* FreeClimb. | [optional]

### Return type

[**\FreeClimb\Api\Model\MessagesList**](../Model/MessagesList.md)

### Authorization

[fc](../../README.md#fc)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `makeACall()`

```php
makeACall($account_id, $make_call_request): \FreeClimb\Api\Model\CallResult
```

Make a Call

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: fc
$config = FreeClimb\Api\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new FreeClimb\Api\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | ID of the account
$make_call_request = new \FreeClimb\Api\Model\MakeCallRequest(); // \FreeClimb\Api\Model\MakeCallRequest | Call details for making a call

try {
    $result = $apiInstance->makeACall($account_id, $make_call_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->makeACall: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | **string**| ID of the account |
 **make_call_request** | [**\FreeClimb\Api\Model\MakeCallRequest**](../Model/MakeCallRequest.md)| Call details for making a call | [optional]

### Return type

[**\FreeClimb\Api\Model\CallResult**](../Model/CallResult.md)

### Authorization

[fc](../../README.md#fc)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `removeAParticipant()`

```php
removeAParticipant($account_id, $conference_id, $call_id)
```

Remove a Participant

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: fc
$config = FreeClimb\Api\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new FreeClimb\Api\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | ID of the account
$conference_id = 'conference_id_example'; // string | ID of the conference this participant is in.
$call_id = 'call_id_example'; // string | ID of the Call associated with this participant.

try {
    $apiInstance->removeAParticipant($account_id, $conference_id, $call_id);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->removeAParticipant: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | **string**| ID of the account |
 **conference_id** | **string**| ID of the conference this participant is in. |
 **call_id** | **string**| ID of the Call associated with this participant. |

### Return type

void (empty response body)

### Authorization

[fc](../../README.md#fc)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sendAnSmsMessage()`

```php
sendAnSmsMessage($account_id, $message_request): \FreeClimb\Api\Model\MessageResult
```

Send an SMS Message

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: fc
$config = FreeClimb\Api\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new FreeClimb\Api\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | ID of the account
$message_request = new \FreeClimb\Api\Model\MessageRequest(); // \FreeClimb\Api\Model\MessageRequest | Details to create a message

try {
    $result = $apiInstance->sendAnSmsMessage($account_id, $message_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->sendAnSmsMessage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | **string**| ID of the account |
 **message_request** | [**\FreeClimb\Api\Model\MessageRequest**](../Model/MessageRequest.md)| Details to create a message |

### Return type

[**\FreeClimb\Api\Model\MessageResult**](../Model/MessageResult.md)

### Authorization

[fc](../../README.md#fc)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `streamARecordingFile()`

```php
streamARecordingFile($account_id, $recording_id): \SplFileObject
```

Stream a Recording File

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: fc
$config = FreeClimb\Api\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new FreeClimb\Api\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | ID of the account
$recording_id = 'recording_id_example'; // string | String that uniquely identifies this recording resource.

try {
    $result = $apiInstance->streamARecordingFile($account_id, $recording_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->streamARecordingFile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | **string**| ID of the account |
 **recording_id** | **string**| String that uniquely identifies this recording resource. |

### Return type

**\SplFileObject**

### Authorization

[fc](../../README.md#fc)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `audio/x-wav`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateAConference()`

```php
updateAConference($account_id, $conference_id, $update_conference_request): \FreeClimb\Api\Model\ConferenceResult
```

Update a Conference

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: fc
$config = FreeClimb\Api\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new FreeClimb\Api\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | ID of the account
$conference_id = 'conference_id_example'; // string | String that uniquely identifies this conference resource.
$update_conference_request = new \FreeClimb\Api\Model\UpdateConferenceRequest(); // \FreeClimb\Api\Model\UpdateConferenceRequest | Conference Details to update

try {
    $result = $apiInstance->updateAConference($account_id, $conference_id, $update_conference_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->updateAConference: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | **string**| ID of the account |
 **conference_id** | **string**| String that uniquely identifies this conference resource. |
 **update_conference_request** | [**\FreeClimb\Api\Model\UpdateConferenceRequest**](../Model/UpdateConferenceRequest.md)| Conference Details to update | [optional]

### Return type

[**\FreeClimb\Api\Model\ConferenceResult**](../Model/ConferenceResult.md)

### Authorization

[fc](../../README.md#fc)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateALiveCall()`

```php
updateALiveCall($account_id, $call_id, $update_call_request)
```

Update a Live Call

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: fc
$config = FreeClimb\Api\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new FreeClimb\Api\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | ID of the account
$call_id = 'call_id_example'; // string | String that uniquely identifies this call resource.
$update_call_request = new \FreeClimb\Api\Model\UpdateCallRequest(); // \FreeClimb\Api\Model\UpdateCallRequest | Call details to update

try {
    $apiInstance->updateALiveCall($account_id, $call_id, $update_call_request);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->updateALiveCall: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | **string**| ID of the account |
 **call_id** | **string**| String that uniquely identifies this call resource. |
 **update_call_request** | [**\FreeClimb\Api\Model\UpdateCallRequest**](../Model/UpdateCallRequest.md)| Call details to update |

### Return type

void (empty response body)

### Authorization

[fc](../../README.md#fc)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateAParticipant()`

```php
updateAParticipant($account_id, $conference_id, $call_id, $update_conference_participant_request): \FreeClimb\Api\Model\ConferenceParticipantResult
```

Update a Participant

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: fc
$config = FreeClimb\Api\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new FreeClimb\Api\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | ID of the account
$conference_id = 'conference_id_example'; // string | ID of the conference this participant is in.
$call_id = 'call_id_example'; // string | ID of the Call associated with this participant.
$update_conference_participant_request = new \FreeClimb\Api\Model\UpdateConferenceParticipantRequest(); // \FreeClimb\Api\Model\UpdateConferenceParticipantRequest | Conference participant details to update

try {
    $result = $apiInstance->updateAParticipant($account_id, $conference_id, $call_id, $update_conference_participant_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->updateAParticipant: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | **string**| ID of the account |
 **conference_id** | **string**| ID of the conference this participant is in. |
 **call_id** | **string**| ID of the Call associated with this participant. |
 **update_conference_participant_request** | [**\FreeClimb\Api\Model\UpdateConferenceParticipantRequest**](../Model/UpdateConferenceParticipantRequest.md)| Conference participant details to update | [optional]

### Return type

[**\FreeClimb\Api\Model\ConferenceParticipantResult**](../Model/ConferenceParticipantResult.md)

### Authorization

[fc](../../README.md#fc)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateAQueue()`

```php
updateAQueue($account_id, $queue_id, $queue_request): \FreeClimb\Api\Model\QueueResult
```

Update a Queue

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: fc
$config = FreeClimb\Api\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new FreeClimb\Api\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | ID of the account
$queue_id = 'queue_id_example'; // string | A string that uniquely identifies this Queue resource.
$queue_request = new \FreeClimb\Api\Model\QueueRequest(); // \FreeClimb\Api\Model\QueueRequest | Queue Details to update

try {
    $result = $apiInstance->updateAQueue($account_id, $queue_id, $queue_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->updateAQueue: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | **string**| ID of the account |
 **queue_id** | **string**| A string that uniquely identifies this Queue resource. |
 **queue_request** | [**\FreeClimb\Api\Model\QueueRequest**](../Model/QueueRequest.md)| Queue Details to update | [optional]

### Return type

[**\FreeClimb\Api\Model\QueueResult**](../Model/QueueResult.md)

### Authorization

[fc](../../README.md#fc)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateAnAccount()`

```php
updateAnAccount($account_id, $account_request)
```

Manage an account

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: fc
$config = FreeClimb\Api\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new FreeClimb\Api\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | ID of the account
$account_request = new \FreeClimb\Api\Model\AccountRequest(); // \FreeClimb\Api\Model\AccountRequest | Account details to update

try {
    $apiInstance->updateAnAccount($account_id, $account_request);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->updateAnAccount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | **string**| ID of the account |
 **account_request** | [**\FreeClimb\Api\Model\AccountRequest**](../Model/AccountRequest.md)| Account details to update | [optional]

### Return type

void (empty response body)

### Authorization

[fc](../../README.md#fc)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateAnApplication()`

```php
updateAnApplication($account_id, $application_id, $application_request): \FreeClimb\Api\Model\ApplicationResult
```

Update an application

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: fc
$config = FreeClimb\Api\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new FreeClimb\Api\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | ID of the account
$application_id = 'application_id_example'; // string | A string that uniquely identifies this application resource.
$application_request = new \FreeClimb\Api\Model\ApplicationRequest(); // \FreeClimb\Api\Model\ApplicationRequest | Application details to update.

try {
    $result = $apiInstance->updateAnApplication($account_id, $application_id, $application_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->updateAnApplication: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | **string**| ID of the account |
 **application_id** | **string**| A string that uniquely identifies this application resource. |
 **application_request** | [**\FreeClimb\Api\Model\ApplicationRequest**](../Model/ApplicationRequest.md)| Application details to update. | [optional]

### Return type

[**\FreeClimb\Api\Model\ApplicationResult**](../Model/ApplicationResult.md)

### Authorization

[fc](../../README.md#fc)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateAnIncomingNumber()`

```php
updateAnIncomingNumber($account_id, $phone_number_id, $incoming_number_request): \FreeClimb\Api\Model\IncomingNumberResult
```

Update an Incoming Number

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: fc
$config = FreeClimb\Api\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new FreeClimb\Api\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | ID of the account
$phone_number_id = 'phone_number_id_example'; // string | String that uniquely identifies this phone number resource.
$incoming_number_request = new \FreeClimb\Api\Model\IncomingNumberRequest(); // \FreeClimb\Api\Model\IncomingNumberRequest | Incoming Number details to update

try {
    $result = $apiInstance->updateAnIncomingNumber($account_id, $phone_number_id, $incoming_number_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->updateAnIncomingNumber: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | **string**| ID of the account |
 **phone_number_id** | **string**| String that uniquely identifies this phone number resource. |
 **incoming_number_request** | [**\FreeClimb\Api\Model\IncomingNumberRequest**](../Model/IncomingNumberRequest.md)| Incoming Number details to update | [optional]

### Return type

[**\FreeClimb\Api\Model\IncomingNumberResult**](../Model/IncomingNumberResult.md)

### Authorization

[fc](../../README.md#fc)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
