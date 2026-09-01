# # CreateRetailSalesReturnsBatch200ResponseInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**meta** | [**\OpenAPI\Client\Model\Meta**](Meta.md) |  | [optional]
**id** | **string** | ID Розничного возврата | [optional] [readonly]
**account_id** | **string** | ID учетной записи | [optional] [readonly]
**agent** | [**\OpenAPI\Client\Model\Agent**](Agent.md) | Метаданные контрагента | [optional]
**agent_account** | [**\OpenAPI\Client\Model\Account**](Account.md) | Метаданные счета контрагента | [optional]
**applicable** | **bool** | Отметка о проведении | [optional]
**attributes** | [**\OpenAPI\Client\Model\AttributeAbstract[]**](AttributeAbstract.md) | Коллекция метаданных доп. полей | [optional]
**cash_sum** | **float** | Оплачено наличными | [optional]
**code** | **string** | Код Розничного возврата | [optional]
**contract** | [**\OpenAPI\Client\Model\Contract**](Contract.md) | Метаданные договора | [optional]
**created** | **string** | Дата создания | [optional] [readonly]
**deleted** | **string** | Момент последнего удаления Розничного возврата | [optional] [readonly]
**demand** | [**\OpenAPI\Client\Model\RetailDemand**](RetailDemand.md) | Метаданные связанной Розничной продажи | [optional]
**description** | **string** | Комментарий Розничного возврата | [optional]
**external_code** | **string** | Внешний код Розничного возврата | [optional]
**group** | [**\OpenAPI\Client\Model\Group**](Group.md) |  | [optional]
**moment** | **string** | Дата документа | [optional]
**name** | **string** | Наименование Розничного возврата | [optional]
**no_cash_sum** | **float** | Оплачено картой | [optional]
**organization** | [**\OpenAPI\Client\Model\Organization**](Organization.md) |  | [optional]
**organization_account** | [**\OpenAPI\Client\Model\Account**](Account.md) | Метаданные счета юрлица | [optional]
**owner** | [**\OpenAPI\Client\Model\Employee**](Employee.md) | Владелец (Сотрудник) | [optional]
**positions** | [**\OpenAPI\Client\Model\RetailSalesReturnPositionList**](RetailSalesReturnPositionList.md) |  | [optional]
**printed** | **bool** | Напечатан ли документ | [optional] [readonly]
**published** | **bool** | Опубликован ли документ | [optional] [readonly]
**qr_sum** | **float** | Оплачено по QR-коду | [optional]
**rate** | [**\OpenAPI\Client\Model\CurrencyRate**](.md) |  | [optional]
**retail_shift** | [**\OpenAPI\Client\Model\RetailShift**](RetailShift.md) |  | [optional]
**retail_store** | [**\OpenAPI\Client\Model\RetailStore**](RetailStore.md) |  | [optional]
**shared** | **bool** | Общий доступ | [optional]
**state** | [**\OpenAPI\Client\Model\State**](State.md) | Метаданные статуса Розничного возврата | [optional]
**store** | [**\OpenAPI\Client\Model\Store**](Store.md) |  | [optional]
**sum** | **float** | Сумма Розничного возврата в копейках | [optional] [readonly]
**sync_id** | **string** | ID синхронизации | [optional]
**tax_system** | **string** | Код системы налогообложения. Известные значения описаны в TaxSystem | [optional]
**updated** | **string** | Момент последнего обновления Розничного возврата | [optional] [readonly]
**vat_enabled** | **bool** | Учитывается ли НДС | [optional]
**vat_included** | **bool** | Включен ли НДС в цену | [optional]
**vat_sum** | **float** | Сумма НДС | [optional] [readonly]
**errors** | [**\OpenAPI\Client\Model\Error[]**](Error.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
