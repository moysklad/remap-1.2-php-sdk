# # ProcessingStage

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**meta** | [**\OpenAPI\Client\Model\Meta**](Meta.md) |  | [optional]
**id** | **string** | ID Этапа производства | [optional] [readonly]
**account_id** | **string** | ID учетной записи | [optional] [readonly]
**owner** | [**\OpenAPI\Client\Model\Employee**](Employee.md) | Метаданные владельца (Сотрудника) | [optional]
**shared** | **bool** | Общий доступ | [optional]
**group** | [**\OpenAPI\Client\Model\Group**](Group.md) |  | [optional]
**updated** | **string** | Момент последнего обновления Этапа производства | [optional] [readonly]
**name** | **string** | Наименование Этапа производства | [optional]
**description** | **string** | Комментарий Этапа производства | [optional]
**external_code** | **string** | Внешний код Этапа производства | [optional]
**archived** | **bool** | Добавлен ли Этап производства в архив | [optional]
**all_performers** | **bool** | Признак доступности назначения на этап любого сотрудника | [optional]
**distribution_required** | **bool** | Признак видимости заданий для исполнителей в веб-приложении МойСклад Производство | [optional]
**performers** | [**\OpenAPI\Client\Model\Employee[]**](Employee.md) | Метаданные возможных исполнителей | [optional]
**material_store** | [**\OpenAPI\Client\Model\Store**](Store.md) | Метаданные склада материалов | [optional] [readonly]
**standard_hour_cost** | **float** | Стоимость нормо-часа | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
