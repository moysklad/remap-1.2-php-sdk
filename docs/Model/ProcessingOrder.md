# # ProcessingOrder

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**meta** | [**\OpenAPI\Client\Model\Meta**](Meta.md) |  | [optional]
**id** | **string** | ID заказа на производство | [optional] [readonly]
**account_id** | **string** | ID учетной записи | [optional] [readonly]
**name** | **string** | Наименование заказа на производство | [optional]
**code** | **string** | Код заказа на производство | [optional]
**external_code** | **string** | Внешний код заказа на производство | [optional]
**sync_id** | **string** | ID синхронизации | [optional]
**description** | **string** | Комментарий заказа на производство | [optional]
**created** | **string** | Дата создания | [optional] [readonly]
**deleted** | **string** | Момент последнего удаления заказа на производство | [optional] [readonly]
**updated** | **string** | Момент последнего обновления заказа на производство | [optional] [readonly]
**moment** | **string** | Дата документа | [optional]
**delivery_planned_moment** | **string** | Планируемая дата производства | [optional]
**applicable** | **bool** | Отметка о проведении | [optional]
**printed** | **bool** | Напечатан ли документ | [optional] [readonly]
**published** | **bool** | Опубликован ли документ | [optional] [readonly]
**shared** | **bool** | Общий доступ | [optional] [readonly]
**organization** | [**\OpenAPI\Client\Model\Organization**](Organization.md) |  | [optional]
**store** | [**\OpenAPI\Client\Model\Store**](Store.md) |  | [optional]
**state** | [**\OpenAPI\Client\Model\State**](State.md) | Метаданные статуса Заказа на производство | [optional]
**processing_plan** | [**\OpenAPI\Client\Model\ProcessingPlan**](ProcessingPlan.md) |  | [optional]
**project** | [**\OpenAPI\Client\Model\Project**](Project.md) | Метаданные проекта | [optional]
**owner** | [**\OpenAPI\Client\Model\Employee**](Employee.md) | Владелец (Сотрудник) | [optional]
**group** | [**\OpenAPI\Client\Model\Group**](Group.md) |  | [optional]
**attributes** | [**\OpenAPI\Client\Model\AttributeAbstract[]**](AttributeAbstract.md) | Коллекция метаданных доп. полей | [optional]
**files** | [**\OpenAPI\Client\Model\FileList**](FileList.md) | Метаданные массива Файлов | [optional]
**positions** | [**\OpenAPI\Client\Model\ProcessingOrderPositionList**](.md) | Позиции Заказа на производство | [optional]
**quantity** | **float** | Объем производства | [optional]
**processings** | [**\OpenAPI\Client\Model\Processing[]**](Processing.md) | Массив ссылок на связанные техоперации | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
