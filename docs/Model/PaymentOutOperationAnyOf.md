# # PaymentOutOperationAnyOf

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**meta** | [**\OpenAPI\Client\Model\Meta**](Meta.md) |  | [optional]
**id** | **string** | ID Возврата покупателя | [optional] [readonly]
**account_id** | **string** | ID учетной записи | [optional] [readonly]
**name** | **string** | Наименование Возврата покупателя | [optional]
**code** | **string** | Код Возврата покупателя | [optional]
**external_code** | **string** | Внешний код Возврата покупателя | [optional]
**sync_id** | **string** | ID синхронизации | [optional]
**description** | **string** | Комментарий Возврата покупателя | [optional]
**created** | **string** | Дата создания | [optional] [readonly]
**deleted** | **string** | Момент последнего удаления Возврата покупателя | [optional] [readonly]
**updated** | **string** | Момент последнего обновления Возврата покупателя | [optional] [readonly]
**moment** | **string** | Дата документа | [optional]
**applicable** | **bool** | Отметка о проведении | [optional]
**printed** | **bool** | Напечатан ли документ | [optional] [readonly]
**published** | **bool** | Опубликован ли документ | [optional] [readonly]
**shared** | **bool** | Общий доступ | [optional]
**vat_enabled** | **bool** | Учитывается ли НДС | [optional]
**vat_included** | **bool** | Включен ли НДС в цену | [optional]
**vat_sum** | **float** | Сумма НДС | [optional]
**sum** | **float** | Сумма Возврата покупателя в копейках | [optional] [readonly]
**payed_sum** | **float** | Сумма исходящих платежей по Возврату покупателя | [optional]
**organization** | [**\OpenAPI\Client\Model\Organization**](Organization.md) |  | [optional]
**organization_account** | [**\OpenAPI\Client\Model\Account**](Account.md) | Метаданные счета юрлица | [optional]
**agent** | [**\OpenAPI\Client\Model\Agent**](Agent.md) | Метаданные Контрагента или юрлица | [optional]
**agent_account** | [**\OpenAPI\Client\Model\Account**](Account.md) | Метаданные счета контрагента | [optional]
**store** | [**\OpenAPI\Client\Model\Store**](Store.md) | Метаданные склада | [optional]
**state** | [**\OpenAPI\Client\Model\State**](State.md) | Метаданные статуса Возврата покупателя | [optional]
**contract** | [**\OpenAPI\Client\Model\Contract**](Contract.md) | Метаданные договора | [optional]
**project** | [**\OpenAPI\Client\Model\Project**](Project.md) | Метаданные проекта | [optional]
**owner** | [**\OpenAPI\Client\Model\Employee**](Employee.md) | Владелец (Сотрудник) | [optional]
**group** | [**\OpenAPI\Client\Model\Group**](Group.md) |  | [optional]
**attributes** | [**\OpenAPI\Client\Model\AttributeAbstract[]**](AttributeAbstract.md) | Коллекция метаданных доп. полей | [optional]
**files** | [**\OpenAPI\Client\Model\FileList**](FileList.md) | Метаданные массива Файлов | [optional]
**rate** | [**\OpenAPI\Client\Model\CurrencyRate**](.md) |  | [optional]
**positions** | [**\OpenAPI\Client\Model\SalesReturnPositionList**](SalesReturnPositionList.md) |  | [optional]
**sales_channel** | [**\OpenAPI\Client\Model\SalesChannel**](SalesChannel.md) | Метаданные канала продаж | [optional]
**demand** | [**\OpenAPI\Client\Model\Demand**](Demand.md) | Отгрузка, по которой произошел возврат | [optional]
**losses** | [**\OpenAPI\Client\Model\Loss[]**](Loss.md) | Массив ссылок на связанные списания | [optional]
**payments** | [**\OpenAPI\Client\Model\SalesReturnPaymentsInner[]**](SalesReturnPaymentsInner.md) | Массив ссылок на связанные платежи | [optional]
**facture_out** | [**\OpenAPI\Client\Model\FactureOut**](FactureOut.md) | Счет-фактура выданный, с которым связан этот возврат | [optional]
**linked_sum** | **float** | Сумма, оплаченная по данному документу |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
