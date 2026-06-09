# # FactureIn

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**meta** | [**\OpenAPI\Client\Model\Meta**](Meta.md) |  | [optional]
**id** | **string** | ID Счета-фактуры полученного | [optional] [readonly]
**account_id** | **string** | ID учетной записи | [optional] [readonly]
**agent** | [**\OpenAPI\Client\Model\Agent**](Agent.md) | Метаданные контрагента или юрлица | [optional]
**applicable** | **bool** | Отметка о проведении | [optional]
**attributes** | [**\OpenAPI\Client\Model\AttributeAbstract[]**](AttributeAbstract.md) | Коллекция метаданных доп. полей | [optional]
**code** | **string** | Код Счета-фактуры полученного | [optional]
**contract** | [**\OpenAPI\Client\Model\Contract**](Contract.md) | Метаданные договора | [optional]
**created** | **string** | Дата создания | [optional] [readonly]
**deleted** | **string** | Момент последнего удаления Счета-фактуры полученного | [optional] [readonly]
**description** | **string** | Комментарий Счета-фактуры полученного | [optional]
**external_code** | **string** | Внешний код Счета-фактуры полученного | [optional]
**files** | [**\OpenAPI\Client\Model\FileList**](FileList.md) | Метаданные массива файлов | [optional]
**group** | [**\OpenAPI\Client\Model\Group**](Group.md) |  | [optional]
**moment** | **string** | Дата документа | [optional]
**name** | **string** | Наименование Счета-фактуры полученного | [optional]
**organization** | [**\OpenAPI\Client\Model\Organization**](Organization.md) |  | [optional]
**owner** | [**\OpenAPI\Client\Model\Employee**](Employee.md) | Владелец (Сотрудник) | [optional]
**printed** | **bool** | Напечатан ли документ | [optional] [readonly]
**published** | **bool** | Опубликован ли документ | [optional] [readonly]
**rate** | [**\OpenAPI\Client\Model\CurrencyRate**](.md) | Валюта документа. Если значение курса валюты не указано, используется курс из справочника валют. | [optional]
**shared** | **bool** | Общий доступ | [optional]
**state** | [**\OpenAPI\Client\Model\State**](State.md) | Метаданные статуса Счета-фактуры полученного | [optional]
**sum** | **float** | Сумма Счета-фактуры полученного в установленной валюте | [optional] [readonly]
**sync_id** | **string** | ID синхронизации | [optional]
**updated** | **string** | Момент последнего обновления Счета-фактуры полученного | [optional] [readonly]
**supplies** | [**\OpenAPI\Client\Model\Supply[]**](Supply.md) | Массив ссылок на связанные приемки | [optional]
**payments** | [**\OpenAPI\Client\Model\PaymentOut[]**](PaymentOut.md) | Массив ссылок на связанные исходящие платежи | [optional]
**incoming_number** | **string** | Входящий номер | [optional]
**incoming_date** | **string** | Входящая дата | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
