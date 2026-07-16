# # RetailShiftOperationRetailDrawerCashIn

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**meta** | [**\OpenAPI\Client\Model\Meta**](Meta.md) |  | [optional]
**id** | **string** | ID Внесения денег | [optional] [readonly]
**account_id** | **string** | ID учетной записи | [optional] [readonly]
**agent** | [**\OpenAPI\Client\Model\Employee**](Employee.md) |  | [optional]
**applicable** | **bool** | Отметка о проведении | [optional]
**attributes** | [**\OpenAPI\Client\Model\AttributeAbstract[]**](AttributeAbstract.md) | Коллекция метаданных доп. полей | [optional]
**created** | **string** | Дата создания | [optional] [readonly]
**deleted** | **string** | Момент последнего удаления Внесения денег | [optional] [readonly]
**description** | **string** | Комментарий Внесения денег | [optional]
**external_code** | **string** | Внешний код Внесения денег | [optional]
**files** | [**\OpenAPI\Client\Model\FileList**](FileList.md) | Метаданные массива файлов | [optional]
**group** | [**\OpenAPI\Client\Model\Group**](Group.md) |  | [optional]
**moment** | **string** | Дата документа | [optional]
**name** | **string** | Наименование Внесения денег | [optional]
**organization** | [**\OpenAPI\Client\Model\Organization**](Organization.md) |  | [optional]
**owner** | [**\OpenAPI\Client\Model\Employee**](Employee.md) | Владелец (Сотрудник) | [optional]
**printed** | **bool** | Напечатан ли документ | [optional] [readonly]
**published** | **bool** | Опубликован ли документ | [optional] [readonly]
**rate** | [**\OpenAPI\Client\Model\CurrencyRate**](CurrencyRate.md) |  | [optional]
**retail_shift** | [**\OpenAPI\Client\Model\RetailShift**](RetailShift.md) |  | [optional]
**shared** | **bool** | Общий доступ | [optional]
**state** | [**\OpenAPI\Client\Model\State**](State.md) | Метаданные статуса Внесения денег | [optional]
**sum** | **float** | Сумма Внесения денег в копейках | [optional]
**sync_id** | **string** | ID синхронизации | [optional]
**updated** | **string** | Момент последнего обновления Внесения денег | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
