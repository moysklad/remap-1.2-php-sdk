# # RetailShiftPaymentOperationPaymentIn

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**meta** | [**\OpenAPI\Client\Model\Meta**](Meta.md) |  | [optional]
**id** | **string** | ID Входящего платежа | [optional] [readonly]
**account_id** | **string** | ID учетной записи | [optional] [readonly]
**name** | **string** | Наименование Входящего платежа | [optional]
**code** | **string** | Код Входящего платежа | [optional]
**external_code** | **string** | Внешний код Входящего платежа | [optional]
**sync_id** | **string** | ID синхронизации | [optional]
**description** | **string** | Комментарий Входящего платежа | [optional]
**created** | **string** | Дата создания | [optional] [readonly]
**deleted** | **string** | Момент последнего удаления Входящего платежа | [optional] [readonly]
**updated** | **string** | Момент последнего обновления Входящего платежа | [optional] [readonly]
**moment** | **string** | Дата документа | [optional]
**owner** | [**\OpenAPI\Client\Model\Employee**](Employee.md) | Владелец (Сотрудник) | [optional]
**group** | [**\OpenAPI\Client\Model\Group**](Group.md) |  | [optional]
**applicable** | **bool** | Отметка о проведении | [optional]
**printed** | **bool** | Напечатан ли документ | [optional] [readonly]
**published** | **bool** | Опубликован ли документ | [optional] [readonly]
**rate** | [**\OpenAPI\Client\Model\CurrencyRate**](CurrencyRate.md) |  | [optional]
**organization** | [**\OpenAPI\Client\Model\Organization**](Organization.md) |  | [optional]
**agent** | [**\OpenAPI\Client\Model\Agent**](Agent.md) | Метаданные контрагента | [optional]
**agent_account** | [**\OpenAPI\Client\Model\Account**](Account.md) | Метаданные счета контрагента | [optional]
**organization_account** | [**\OpenAPI\Client\Model\Account**](Account.md) | Метаданные счета юрлица | [optional]
**attributes** | [**\OpenAPI\Client\Model\AttributeAbstract[]**](AttributeAbstract.md) | Коллекция метаданных доп. полей | [optional]
**contract** | [**\OpenAPI\Client\Model\Contract**](Contract.md) | Метаданные договора | [optional]
**files** | [**\OpenAPI\Client\Model\FileList**](FileList.md) | Метаданные массива файлов | [optional]
**payment_purpose** | **string** | Назначение платежа | [optional]
**project** | [**\OpenAPI\Client\Model\Project**](Project.md) | Метаданные проекта | [optional]
**sales_channel** | [**\OpenAPI\Client\Model\SalesChannel**](SalesChannel.md) | Метаданные канала продаж | [optional]
**shared** | **bool** | Общий доступ | [optional] [readonly]
**state** | [**\OpenAPI\Client\Model\State**](State.md) | Метаданные статуса Входящего платежа | [optional]
**sum** | **float** | Сумма Входящего платежа в установленной валюте | [optional] [readonly]
**vat_sum** | **float** | Сумма НДС | [optional]
**incoming_number** | **string** | Входящий номер | [optional]
**incoming_date** | **string** | Входящая дата | [optional]
**facture_out** | [**\OpenAPI\Client\Model\FactureOut**](FactureOut.md) | Счет-фактура выданный, с которым связан этот платеж | [optional]
**operations** | [**\OpenAPI\Client\Model\FinanceInOperationAbstract[]**](FinanceInOperationAbstract.md) | Связанные операции. Допустимые типы по &#x60;meta.type&#x60;: customerorder, purchasereturn, demand, invoiceout, commissionreportin, retailshift. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
