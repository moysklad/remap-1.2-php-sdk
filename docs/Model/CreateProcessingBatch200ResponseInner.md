# # CreateProcessingBatch200ResponseInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**meta** | [**\OpenAPI\Client\Model\Meta**](Meta.md) |  | [optional]
**id** | **string** | ID техоперации | [optional] [readonly]
**account_id** | **string** | ID учетной записи | [optional] [readonly]
**name** | **string** | Наименование техоперации | [optional]
**code** | **string** | Код техоперации | [optional]
**external_code** | **string** | Внешний код техоперации | [optional]
**sync_id** | **string** | ID синхронизации | [optional]
**description** | **string** | Комментарий техоперации | [optional]
**created** | **string** | Дата создания | [optional] [readonly]
**deleted** | **string** | Момент последнего удаления техоперации | [optional] [readonly]
**updated** | **string** | Момент последнего обновления техоперации | [optional] [readonly]
**moment** | **string** | Дата документа | [optional]
**applicable** | **bool** | Отметка о проведении | [optional]
**printed** | **bool** | Напечатан ли документ | [optional] [readonly]
**published** | **bool** | Опубликован ли документ | [optional] [readonly]
**shared** | **bool** | Общий доступ | [optional]
**organization** | [**\OpenAPI\Client\Model\Organization**](Organization.md) |  | [optional]
**organization_account** | [**\OpenAPI\Client\Model\Account**](Account.md) | Метаданные счета юрлица | [optional]
**processing_plan** | [**\OpenAPI\Client\Model\ProcessingPlan**](ProcessingPlan.md) | Метаданные техкарты | [optional]
**processing_order** | [**\OpenAPI\Client\Model\ProcessingOrder**](ProcessingOrder.md) | Метаданные заказа на производство | [optional]
**project** | [**\OpenAPI\Client\Model\Project**](Project.md) | Метаданные проекта | [optional]
**owner** | [**\OpenAPI\Client\Model\Employee**](Employee.md) | Владелец (Сотрудник) | [optional]
**group** | [**\OpenAPI\Client\Model\Group**](Group.md) |  | [optional]
**state** | [**\OpenAPI\Client\Model\State**](State.md) | Метаданные статуса техоперации | [optional]
**attributes** | [**\OpenAPI\Client\Model\AttributeAbstract[]**](AttributeAbstract.md) | Коллекция метаданных доп. полей | [optional]
**files** | [**\OpenAPI\Client\Model\FileList**](FileList.md) | Метаданные массива файлов | [optional]
**products_store** | [**\OpenAPI\Client\Model\Store**](Store.md) |  | [optional]
**materials_store** | [**\OpenAPI\Client\Model\Store**](Store.md) |  | [optional]
**products** | [**\OpenAPI\Client\Model\ProcessingProductList**](ProcessingProductList.md) |  | [optional]
**materials** | [**\OpenAPI\Client\Model\ProcessingMaterialList**](ProcessingMaterialList.md) |  | [optional]
**quantity** | **float** | Объем производства | [optional]
**processing_sum** | **float** | Затраты на производство за единицу объема производства | [optional]
**errors** | [**\OpenAPI\Client\Model\ErrorErrorsInner[]**](ErrorErrorsInner.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
