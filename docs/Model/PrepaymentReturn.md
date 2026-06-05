# # PrepaymentReturn

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**meta** | [**\OpenAPI\Client\Model\Meta**](Meta.md) |  | [optional]
**id** | **string** | ID Возврата предоплаты | [optional] [readonly]
**account_id** | **string** | ID учетной записи | [optional] [readonly]
**name** | **string** | Наименование Возврата предоплаты | [optional]
**code** | **string** | Код Возврата предоплаты | [optional]
**external_code** | **string** | Внешний код Возврата предоплаты | [optional]
**sync_id** | **string** | ID синхронизации | [optional]
**description** | **string** | Комментарий Возврата предоплаты | [optional]
**created** | **string** | Дата создания | [optional] [readonly]
**deleted** | **string** | Момент последнего удаления Возврата предоплаты | [optional] [readonly]
**updated** | **string** | Момент последнего обновления Возврата предоплаты | [optional] [readonly]
**moment** | **string** | Дата документа | [optional]
**applicable** | **bool** | Отметка о проведении | [optional]
**printed** | **bool** | Напечатан ли документ | [optional] [readonly]
**published** | **bool** | Опубликован ли документ | [optional] [readonly]
**shared** | **bool** | Общий доступ | [optional]
**vat_enabled** | **bool** | Учитывается ли НДС | [optional]
**vat_included** | **bool** | Включен ли НДС в цену | [optional]
**vat_sum** | **float** | Сумма НДС | [optional]
**sum** | **float** | Сумма Возврата предоплаты в копейках | [optional] [readonly]
**cash_sum** | **float** | Оплачено наличными | [optional]
**no_cash_sum** | **float** | Оплачено картой | [optional]
**qr_sum** | **float** | Оплачено по QR-коду | [optional]
**agent** | [**\OpenAPI\Client\Model\Agent**](Agent.md) | Метаданные Контрагента или юрлица | [optional]
**organization** | [**\OpenAPI\Client\Model\Organization**](Organization.md) |  | [optional]
**owner** | [**\OpenAPI\Client\Model\Employee**](Employee.md) | Владелец (Сотрудник) | [optional]
**group** | [**\OpenAPI\Client\Model\Group**](Group.md) |  | [optional]
**attributes** | [**\OpenAPI\Client\Model\AttributeAbstract[]**](AttributeAbstract.md) | Коллекция метаданных доп. полей | [optional]
**files** | [**\OpenAPI\Client\Model\FileList**](FileList.md) | Метаданные массива Файлов | [optional]
**rate** | [**\OpenAPI\Client\Model\CurrencyRate**](.md) | Валюта документа.  Если значение курса валюты не указано, используется курс из справочника валют. | [optional]
**positions** | [**\OpenAPI\Client\Model\PrepaymentReturnPositionList**](PrepaymentReturnPositionList.md) |  | [optional]
**prepayment** | [**\OpenAPI\Client\Model\Prepayment**](Prepayment.md) |  | [optional]
**retail_shift** | [**\OpenAPI\Client\Model\RetailShift**](RetailShift.md) |  | [optional]
**retail_store** | [**\OpenAPI\Client\Model\RetailStore**](RetailStore.md) |  | [optional]
**state** | [**\OpenAPI\Client\Model\State**](State.md) | Метаданные статуса Возврата предоплаты | [optional]
**tax_system** | **string** | Код системы налогообложения. Известные значения описаны в TaxSystem | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
