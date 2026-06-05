# # CreateMoveBatch200ResponseInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**meta** | [**\OpenAPI\Client\Model\Meta**](Meta.md) |  | [optional]
**id** | **string** | ID Перемещения | [optional] [readonly]
**account_id** | **string** | ID учетной записи | [optional] [readonly]
**name** | **string** | Наименование Перемещения | [optional]
**code** | **string** | Код Перемещения | [optional]
**external_code** | **string** | Внешний код Перемещения | [optional]
**sync_id** | **string** | ID синхронизации | [optional]
**description** | **string** | Комментарий Перемещения | [optional]
**created** | **string** | Дата создания | [optional] [readonly]
**deleted** | **string** | Момент последнего удаления Перемещения | [optional] [readonly]
**updated** | **string** | Момент последнего обновления Перемещения | [optional] [readonly]
**moment** | **string** | Дата документа | [optional]
**applicable** | **bool** | Отметка о проведении | [optional]
**printed** | **bool** | Напечатан ли документ | [optional] [readonly]
**published** | **bool** | Опубликован ли документ | [optional] [readonly]
**shared** | **bool** | Общий доступ | [optional]
**sum** | **float** | Сумма Перемещения в копейках | [optional] [readonly]
**organization** | [**\OpenAPI\Client\Model\Organization**](Organization.md) |  | [optional]
**source_store** | [**\OpenAPI\Client\Model\Store**](Store.md) | Метаданные склада, с которого совершается перемещение | [optional]
**target_store** | [**\OpenAPI\Client\Model\Store**](Store.md) | Метаданные склада, на который совершается перемещение | [optional]
**state** | [**\OpenAPI\Client\Model\State**](State.md) | Метаданные статуса Перемещения | [optional]
**project** | [**\OpenAPI\Client\Model\Project**](Project.md) | Метаданные проекта | [optional]
**owner** | [**\OpenAPI\Client\Model\Employee**](Employee.md) | Владелец (Сотрудник) | [optional]
**group** | [**\OpenAPI\Client\Model\Group**](Group.md) |  | [optional]
**attributes** | [**\OpenAPI\Client\Model\AttributeAbstract[]**](AttributeAbstract.md) | Коллекция метаданных доп. полей | [optional]
**files** | [**\OpenAPI\Client\Model\FileList**](FileList.md) | Метаданные массива Файлов | [optional]
**rate** | [**\OpenAPI\Client\Model\CurrencyRate**](CurrencyRate.md) |  | [optional]
**positions** | [**\OpenAPI\Client\Model\MovePositionList**](MovePositionList.md) |  | [optional]
**overhead** | [**\OpenAPI\Client\Model\Overhead**](Overhead.md) |  | [optional]
**internal_order** | [**\OpenAPI\Client\Model\InternalOrder**](InternalOrder.md) | Внутренний заказ, с которым связано Перемещение | [optional]
**customer_order** | [**\OpenAPI\Client\Model\CustomerOrder**](CustomerOrder.md) | Заказ покупателя, с которым связано Перемещение | [optional]
**demand** | [**\OpenAPI\Client\Model\Demand**](Demand.md) | Отгрузка, связанная с Перемещением | [optional] [readonly]
**supply** | [**\OpenAPI\Client\Model\Supply**](Supply.md) | Приемка, связанная с Перемещением | [optional] [readonly]
**production_tasks** | [**\OpenAPI\Client\Model\ProductionTask[]**](ProductionTask.md) | Связанные производственные задания | [optional]
**errors** | [**\OpenAPI\Client\Model\ErrorErrorsInner[]**](ErrorErrorsInner.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
