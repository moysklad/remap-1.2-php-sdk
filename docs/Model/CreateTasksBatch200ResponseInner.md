# # CreateTasksBatch200ResponseInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**meta** | [**\OpenAPI\Client\Model\Meta**](Meta.md) |  | [optional]
**id** | **string** | ID Задачи | [optional] [readonly]
**account_id** | **string** | ID учетной записи | [optional] [readonly]
**agent** | [**\OpenAPI\Client\Model\TaskAgent**](TaskAgent.md) |  | [optional]
**assignee** | [**\OpenAPI\Client\Model\Employee**](Employee.md) |  | [optional]
**author** | [**\OpenAPI\Client\Model\Employee**](Employee.md) |  | [optional]
**author_application** | [**\OpenAPI\Client\Model\Application**](Application.md) |  | [optional]
**completed** | **string** | Время выполнения задачи | [optional] [readonly]
**created** | **string** | Момент создания | [optional] [readonly]
**description** | **string** | Текст задачи | [optional]
**done** | **bool** | Отметка о выполнении задачи | [optional]
**due_to_date** | **string** | Срок задачи | [optional]
**files** | [**\OpenAPI\Client\Model\FileList**](FileList.md) | Метаданные массива Файлов | [optional]
**implementer** | [**\OpenAPI\Client\Model\Employee**](Employee.md) |  | [optional]
**notes** | [**\OpenAPI\Client\Model\TaskNotes**](TaskNotes.md) |  | [optional]
**operation** | [**\OpenAPI\Client\Model\DocumentMetadata**](DocumentMetadata.md) |  | [optional]
**state** | [**\OpenAPI\Client\Model\State**](State.md) | Метаданные типа задачи | [optional]
**updated** | **string** | Момент последнего обновления Задачи | [optional] [readonly]
**errors** | [**\OpenAPI\Client\Model\ErrorErrorsInner[]**](ErrorErrorsInner.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
