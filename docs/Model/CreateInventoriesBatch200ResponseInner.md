# # CreateInventoriesBatch200ResponseInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**meta** | [**\OpenAPI\Client\Model\Meta**](Meta.md) |  | [optional]
**id** | **string** | ID Инвентаризации | [optional] [readonly]
**account_id** | **string** | ID учетной записи | [optional] [readonly]
**attributes** | [**\OpenAPI\Client\Model\AttributeAbstract[]**](AttributeAbstract.md) | Коллекция метаданных доп. полей | [optional]
**code** | **string** | Код Инвентаризации | [optional]
**created** | **string** | Дата создания | [optional] [readonly]
**deleted** | **string** | Момент последнего удаления Инвентаризации | [optional] [readonly]
**description** | **string** | Комментарий Инвентаризации | [optional]
**external_code** | **string** | Внешний код Инвентаризации | [optional]
**files** | [**\OpenAPI\Client\Model\FileList**](FileList.md) | Метаданные массива Файлов (Максимальное количество файлов - 100) | [optional]
**group** | [**\OpenAPI\Client\Model\Group**](Group.md) |  | [optional]
**moment** | **string** | Дата документа | [optional]
**name** | **string** | Наименование Инвентаризации | [optional]
**organization** | [**\OpenAPI\Client\Model\Organization**](Organization.md) |  | [optional]
**owner** | [**\OpenAPI\Client\Model\Employee**](Employee.md) | Владелец (Сотрудник) | [optional]
**positions** | [**\OpenAPI\Client\Model\InventoryPositionList**](InventoryPositionList.md) | Метаданные позиций Инвентаризации | [optional]
**printed** | **bool** | Напечатан ли документ | [optional] [readonly]
**published** | **bool** | Опубликован ли документ | [optional] [readonly]
**shared** | **bool** | Общий доступ | [optional]
**state** | [**\OpenAPI\Client\Model\State**](State.md) | Метаданные статуса Инвентаризации | [optional]
**store** | [**\OpenAPI\Client\Model\Store**](Store.md) |  | [optional]
**sum** | **float** | Сумма Инвентаризации в копейках | [optional] [readonly]
**sync_id** | **string** | ID синхронизации | [optional]
**updated** | **string** | Момент последнего обновления Инвентаризации | [optional] [readonly]
**enters** | [**\OpenAPI\Client\Model\Enter[]**](Enter.md) | Связанные с Инвентаризацией оприходования | [optional]
**losses** | [**\OpenAPI\Client\Model\Loss[]**](Loss.md) | Связанные с Инвентаризацией списания | [optional]
**errors** | [**\OpenAPI\Client\Model\ErrorErrorsInner[]**](ErrorErrorsInner.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
