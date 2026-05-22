# # CreateSalesChannelsBatch200ResponseInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**meta** | [**\OpenAPI\Client\Model\Meta**](Meta.md) |  | [optional]
**id** | **string** | ID Канала продаж | [optional] [readonly]
**account_id** | **string** | ID учетной записи | [optional] [readonly]
**archived** | **bool** | Добавлен ли Канал продаж в архив | [optional]
**code** | **string** | Код Канала продаж | [optional]
**description** | **string** | Описание Канала продаж | [optional]
**external_code** | **string** | Внешний код Канала продаж | [optional]
**group** | [**\OpenAPI\Client\Model\Group**](Group.md) |  | [optional]
**name** | **string** | Наименование Канала продаж | [optional]
**owner** | [**\OpenAPI\Client\Model\Employee**](Employee.md) | Метаданные владельца (Сотрудника) | [optional]
**shared** | **bool** | Общий доступ | [optional]
**type** | **string** | Тип Канала продаж. Известные значения описаны в SalesChannelType | [optional]
**updated** | **string** | Момент последнего обновления сущности | [optional] [readonly]
**errors** | [**\OpenAPI\Client\Model\ErrorErrorsInner[]**](ErrorErrorsInner.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
