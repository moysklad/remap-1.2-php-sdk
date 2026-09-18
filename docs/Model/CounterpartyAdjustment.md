# # CounterpartyAdjustment

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**meta** | [**\OpenAPI\Client\Model\Meta**](Meta.md) |  | [optional]
**id** | **string** | ID Корректировки взаиморасчетов | [optional] [readonly]
**account_id** | **string** | ID учетной записи | [optional] [readonly]
**agent** | [**\OpenAPI\Client\Model\Agent**](Agent.md) | Метаданные контрагента или сотрудника | [optional]
**applicable** | **bool** | Отметка о проведении | [optional]
**attributes** | [**\OpenAPI\Client\Model\AttributeAbstract[]**](AttributeAbstract.md) | Коллекция метаданных доп. полей | [optional]
**created** | **string** | Дата создания | [optional] [readonly]
**deleted** | **string** | Момент последнего удаления Корректировки взаиморасчетов | [optional] [readonly]
**description** | **string** | Комментарий Корректировки взаиморасчетов | [optional]
**external_code** | **string** | Внешний код Корректировки взаиморасчетов | [optional]
**files** | [**\OpenAPI\Client\Model\FileList**](FileList.md) | Метаданные массива Файлов (максимум 100) | [optional]
**group** | [**\OpenAPI\Client\Model\Group**](Group.md) |  | [optional]
**moment** | **string** | Дата документа | [optional]
**name** | **string** | Наименование Корректировки взаиморасчетов | [optional]
**organization** | [**\OpenAPI\Client\Model\Organization**](Organization.md) |  | [optional]
**owner** | [**\OpenAPI\Client\Model\Employee**](Employee.md) | Владелец (Сотрудник) | [optional]
**printed** | **bool** | Напечатан ли документ | [optional] [readonly]
**published** | **bool** | Опубликован ли документ | [optional] [readonly]
**shared** | **bool** | Общий доступ | [optional]
**sum** | **float** | Сумма Корректировки взаиморасчетов в копейках | [optional]
**updated** | **string** | Момент последнего обновления Корректировки взаиморасчетов | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
