# # Loss

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**meta** | [**\OpenAPI\Client\Model\Meta**](Meta.md) |  | [optional]
**id** | **string** | ID Списания | [optional] [readonly]
**account_id** | **string** | ID учетной записи | [optional] [readonly]
**applicable** | **bool** | Отметка о проведении | [optional]
**attributes** | [**\OpenAPI\Client\Model\AttributeAbstract[]**](AttributeAbstract.md) | Коллекция метаданных доп. полей | [optional]
**code** | **string** | Код Списания | [optional]
**created** | **string** | Дата создания | [optional] [readonly]
**deleted** | **string** | Момент последнего удаления Списания | [optional] [readonly]
**description** | **string** | Комментарий Списания | [optional]
**expense_item** | [**\OpenAPI\Client\Model\ExpenseItem**](ExpenseItem.md) | Метаданные Статьи расходов | [optional] [readonly]
**external_code** | **string** | Внешний код Списания | [optional]
**files** | [**\OpenAPI\Client\Model\FileList**](FileList.md) | Метаданные массива Файлов (Максимальное количество файлов - 100) | [optional]
**group** | [**\OpenAPI\Client\Model\Group**](Group.md) |  | [optional]
**moment** | **string** | Дата документа | [optional]
**name** | **string** | Наименование Списания | [optional]
**organization** | [**\OpenAPI\Client\Model\Organization**](Organization.md) |  | [optional]
**owner** | [**\OpenAPI\Client\Model\Employee**](Employee.md) | Владелец (Сотрудник) | [optional]
**positions** | [**\OpenAPI\Client\Model\LossPositionList**](LossPositionList.md) |  | [optional]
**printed** | **bool** | Напечатан ли документ | [optional] [readonly]
**project** | [**\OpenAPI\Client\Model\Project**](Project.md) | Метаданные проекта | [optional]
**published** | **bool** | Опубликован ли документ | [optional] [readonly]
**rate** | [**\OpenAPI\Client\Model\CurrencyRate**](.md) | Валюта документа.  Если значение курса валюты не указано, используется курс из справочника валют. | [optional]
**shared** | **bool** | Общий доступ | [optional]
**state** | [**\OpenAPI\Client\Model\State**](State.md) | Метаданные статуса Списания | [optional]
**store** | [**\OpenAPI\Client\Model\Store**](Store.md) |  | [optional]
**sum** | **float** | Сумма Списания в копейках | [optional] [readonly]
**sync_id** | **string** | ID синхронизации | [optional]
**updated** | **string** | Момент последнего обновления Списания | [optional] [readonly]
**sales_return** | [**\OpenAPI\Client\Model\SalesReturn**](SalesReturn.md) | Связанный со Списанием возврат покупателя | [optional]
**inventory** | [**\OpenAPI\Client\Model\Inventory**](Inventory.md) | Связанная со Списанием инвентаризация | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
