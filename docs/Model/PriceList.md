# # PriceList

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**meta** | [**\OpenAPI\Client\Model\Meta**](Meta.md) |  | [optional]
**id** | **string** | ID Прайс-листа | [optional] [readonly]
**account_id** | **string** | ID учетной записи | [optional] [readonly]
**applicable** | **bool** | Отметка о проведении | [optional]
**attributes** | [**\OpenAPI\Client\Model\AttributeAbstract[]**](AttributeAbstract.md) | Коллекция метаданных доп. полей | [optional]
**code** | **string** | Код Прайс-листа | [optional]
**columns** | [**\OpenAPI\Client\Model\PriceListColumn[]**](PriceListColumn.md) | Массив столбцов описания таблицы | [optional]
**created** | **string** | Дата создания | [optional] [readonly]
**deleted** | **string** | Момент последнего удаления Прайс-листа | [optional] [readonly]
**description** | **string** | Комментарий Прайс-листа | [optional]
**external_code** | **string** | Внешний код Прайс-листа | [optional]
**files** | [**\OpenAPI\Client\Model\FileList**](FileList.md) | Метаданные массива Файлов | [optional]
**group** | [**\OpenAPI\Client\Model\Group**](Group.md) |  | [optional]
**moment** | **string** | Дата документа | [optional]
**name** | **string** | Наименование Прайс-листа | [optional]
**organization** | [**\OpenAPI\Client\Model\Organization**](Organization.md) |  | [optional]
**owner** | [**\OpenAPI\Client\Model\Employee**](Employee.md) | Владелец (Сотрудник) | [optional]
**positions** | [**\OpenAPI\Client\Model\PriceListPositionList**](PriceListPositionList.md) | Метаданные позиций Прайс-листа | [optional]
**price_type** | [**\OpenAPI\Client\Model\PriceType**](PriceType.md) | Объект типа цены | [optional]
**printed** | **bool** | Напечатан ли документ | [optional] [readonly]
**published** | **bool** | Опубликован ли документ | [optional] [readonly]
**shared** | **bool** | Общий доступ | [optional]
**state** | [**\OpenAPI\Client\Model\State**](State.md) | Метаданные статуса Прайс-листа | [optional]
**sync_id** | **string** | ID синхронизации. После заполнения недоступен для изменения | [optional]
**updated** | **string** | Момент последнего обновления Прайс-листа | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
