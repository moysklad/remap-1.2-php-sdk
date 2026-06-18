# # PaymentOut

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**meta** | [**\OpenAPI\Client\Model\Meta**](Meta.md) |  | [optional]
**id** | **string** | ID Исходящего платежа | [optional] [readonly]
**account_id** | **string** | ID учетной записи | [optional] [readonly]
**name** | **string** | Наименование Исходящего платежа | [optional]
**code** | **string** | Код Исходящего платежа | [optional]
**external_code** | **string** | Внешний код Исходящего платежа | [optional]
**sync_id** | **string** | ID синхронизации | [optional]
**description** | **string** | Комментарий Исходящего платежа | [optional]
**created** | **string** | Дата создания | [optional] [readonly]
**deleted** | **string** | Момент последнего удаления Исходящего платежа | [optional] [readonly]
**updated** | **string** | Момент последнего обновления Исходящего платежа | [optional] [readonly]
**moment** | **string** | Дата документа | [optional]
**owner** | [**\OpenAPI\Client\Model\Employee**](Employee.md) | Владелец (Сотрудник) | [optional]
**group** | [**\OpenAPI\Client\Model\Group**](Group.md) |  | [optional]
**applicable** | **bool** | Отметка о проведении | [optional]
**printed** | **bool** | Напечатан ли документ | [optional] [readonly]
**published** | **bool** | Опубликован ли документ | [optional] [readonly]
**rate** | [**\OpenAPI\Client\Model\CurrencyRate**](CurrencyRate.md) |  | [optional]
**organization** | [**\OpenAPI\Client\Model\Organization**](Organization.md) |  | [optional]
**agent** | [**\OpenAPI\Client\Model\Agent**](Agent.md) | Метаданные контрагента, сотрудника или юрлица | [optional]
**expense_item** | [**\OpenAPI\Client\Model\ExpenseItem**](ExpenseItem.md) | Метаданные статьи расходов | [optional]
**attributes** | [**\OpenAPI\Client\Model\AttributeAbstract[]**](AttributeAbstract.md) | Коллекция метаданных доп. полей | [optional]
**contract** | [**\OpenAPI\Client\Model\Contract**](Contract.md) | Метаданные договора | [optional]
**files** | [**\OpenAPI\Client\Model\FileList**](FileList.md) | Метаданные массива файлов | [optional]
**no_closing_docs** | **bool** | Признак \&quot;Без закрывающих документов\&quot; | [optional]
**payment_purpose** | **string** | Назначение платежа | [optional]
**project** | [**\OpenAPI\Client\Model\Project**](Project.md) | Метаданные проекта | [optional]
**sales_channel** | [**\OpenAPI\Client\Model\SalesChannel**](SalesChannel.md) | Метаданные канала продаж | [optional]
**shared** | **bool** | Общий доступ | [optional] [readonly]
**state** | [**\OpenAPI\Client\Model\State**](State.md) | Метаданные статуса Исходящего платежа | [optional]
**sum** | **float** | Сумма Исходящего платежа в установленной валюте | [optional] [readonly]
**vat_sum** | **float** | Сумма НДС | [optional] [readonly]
**facture_in** | [**\OpenAPI\Client\Model\FactureIn**](FactureIn.md) | Счет-фактура полученный, с которым связан этот платеж | [optional]
**agent_account** | [**\OpenAPI\Client\Model\Account**](Account.md) | Метаданные счета контрагента или юрлица | [optional]
**organization_account** | [**\OpenAPI\Client\Model\Account**](Account.md) | Метаданные счета юрлица | [optional]
**operations** | [**\OpenAPI\Client\Model\FinanceOutOperationAbstract[]**](FinanceOutOperationAbstract.md) | Связанные операции: полное тело документа плюс &#x60;linkedSum&#x60;. Допустимые типы по &#x60;meta.type&#x60;: salesreturn, supply, invoicein, purchaseorder, commissionreportout | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
