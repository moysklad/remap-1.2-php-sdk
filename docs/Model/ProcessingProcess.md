# # ProcessingProcess

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**meta** | [**\OpenAPI\Client\Model\Meta**](Meta.md) |  | [optional]
**id** | **string** | ID Техпроцесса | [optional] [readonly]
**account_id** | **string** | ID учетной записи | [optional] [readonly]
**owner** | [**\OpenAPI\Client\Model\Employee**](Employee.md) | Метаданные владельца (Сотрудника) | [optional]
**shared** | **bool** | Общий доступ | [optional]
**group** | [**\OpenAPI\Client\Model\Group**](Group.md) |  | [optional]
**updated** | **string** | Момент последнего обновления Техпроцесса | [optional] [readonly]
**name** | **string** | Наименование Техпроцесса | [optional]
**description** | **string** | Комментарий Техпроцесса | [optional]
**external_code** | **string** | Внешний код Техпроцесса | [optional]
**archived** | **bool** | Добавлен ли Техпроцесс в архив | [optional]
**positions** | [**\OpenAPI\Client\Model\ProcessingProcessPositionList**](ProcessingProcessPositionList.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
