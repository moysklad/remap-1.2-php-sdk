# # Enter

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**meta** | [**\OpenAPI\Client\Model\Meta**](Meta.md) |  | [optional]
**id** | **string** | ID Оприходования | [optional] [readonly]
**account_id** | **string** | ID учетной записи | [optional] [readonly]
**applicable** | **bool** | Отметка о проведении | [optional]
**attributes** | [**\OpenAPI\Client\Model\AttributeAbstract[]**](AttributeAbstract.md) | Коллекция метаданных доп. полей | [optional]
**code** | **string** | Код Оприходования | [optional]
**created** | **string** | Дата создания | [optional] [readonly]
**deleted** | **string** | Момент последнего удаления Оприходования | [optional] [readonly]
**description** | **string** | Комментарий Оприходования | [optional]
**external_code** | **string** | Внешний код Оприходования | [optional]
**files** | [**\OpenAPI\Client\Model\FileList**](FileList.md) | Метаданные массива Файлов | [optional]
**group** | [**\OpenAPI\Client\Model\Group**](Group.md) |  | [optional]
**moment** | **string** | Дата документа | [optional]
**name** | **string** | Номер Оприходования | [optional]
**organization** | [**\OpenAPI\Client\Model\Organization**](Organization.md) |  | [optional]
**overhead** | [**\OpenAPI\Client\Model\Overhead**](Overhead.md) |  | [optional]
**owner** | [**\OpenAPI\Client\Model\Employee**](Employee.md) | Владелец (Сотрудник) | [optional]
**positions** | [**\OpenAPI\Client\Model\EnterPositionList**](EnterPositionList.md) | Метаданные позиций Оприходования | [optional]
**printed** | **bool** | Напечатан ли документ | [optional] [readonly]
**project** | [**\OpenAPI\Client\Model\Project**](Project.md) | Метаданные проекта | [optional]
**published** | **bool** | Опубликован ли документ | [optional] [readonly]
**rate** | [**\OpenAPI\Client\Model\CurrencyRate**](.md) | Валюта документа. Если значение курса валюты не указано, используется курс из справочника валют. | [optional]
**shared** | **bool** | Общий доступ | [optional]
**state** | [**\OpenAPI\Client\Model\State**](State.md) | Метаданные статуса Оприходования | [optional]
**store** | [**\OpenAPI\Client\Model\Store**](Store.md) |  | [optional]
**sum** | **float** | Сумма Оприходования в копейках | [optional] [readonly]
**sync_id** | **string** | ID синхронизации | [optional]
**updated** | **string** | Момент последнего обновления Оприходования | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
