# # CreateProcessingPlanFoldersBatch200ResponseInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**meta** | [**\OpenAPI\Client\Model\Meta**](Meta.md) |  | [optional]
**id** | **string** | ID Группы техкарт | [optional] [readonly]
**account_id** | **string** | ID учетной записи | [optional] [readonly]
**name** | **string** | Наименование Группы техкарт | [optional]
**code** | **string** | Код Группы техкарт | [optional]
**external_code** | **string** | Внешний код Группы техкарт | [optional]
**description** | **string** | Описание Группы техкарт | [optional]
**archived** | **bool** | Добавлена ли Группа техкарт в архив | [optional]
**path_name** | **string** | Наименование группы техкарт, в которую входит данная группа (иерархия) | [optional] [readonly]
**shared** | **bool** | Общий доступ | [optional]
**updated** | **string** | Момент последнего обновления сущности | [optional] [readonly]
**group** | [**\OpenAPI\Client\Model\Group**](Group.md) |  | [optional]
**owner** | [**\OpenAPI\Client\Model\Employee**](Employee.md) | Метаданные владельца (сотрудника) | [optional]
**processingplanfolder** | [**\OpenAPI\Client\Model\ProcessingPlanFolder**](ProcessingPlanFolder.md) | Родительская Группа техкарт. Для смены иерархии и поля pathName обновите эту ссылку | [optional]
**errors** | [**\OpenAPI\Client\Model\ErrorErrorsInner[]**](ErrorErrorsInner.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
