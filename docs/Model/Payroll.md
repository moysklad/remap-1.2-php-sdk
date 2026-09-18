# # Payroll

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**meta** | [**\OpenAPI\Client\Model\Meta**](Meta.md) |  | [optional]
**id** | **string** | ID Начисления зарплаты | [optional] [readonly]
**account_id** | **string** | ID учетной записи | [optional] [readonly]
**applicable** | **bool** | Отметка о проведении | [optional]
**attributes** | [**\OpenAPI\Client\Model\AttributeAbstract[]**](AttributeAbstract.md) | Коллекция метаданных доп. полей | [optional]
**created** | **string** | Дата создания | [optional] [readonly]
**description** | **string** | Описание Начисления зарплаты | [optional]
**end_payroll_period** | **string** | Окончание расчётного периода, за который начисляется зарплата. Разница начала и окончания расчётного периода должна быть кратна 24 часам; секунды игнорируются. | [optional]
**external_code** | **string** | Внешний код Начисления зарплаты | [optional]
**files** | [**\OpenAPI\Client\Model\FileList**](FileList.md) | Метаданные массива Файлов (максимальное количество файлов — 100) | [optional]
**group** | [**\OpenAPI\Client\Model\Group**](Group.md) |  | [optional]
**moment** | **string** | Дата документа | [optional]
**name** | **string** | Наименование Начисления зарплаты | [optional]
**organization** | [**\OpenAPI\Client\Model\Organization**](Organization.md) |  | [optional]
**owner** | [**\OpenAPI\Client\Model\Employee**](Employee.md) | Владелец (Сотрудник) | [optional]
**positions** | [**\OpenAPI\Client\Model\PayrollPositionList**](PayrollPositionList.md) |  | [optional]
**printed** | **bool** | Напечатан ли документ | [optional] [readonly]
**published** | **bool** | Опубликован ли документ | [optional] [readonly]
**shared** | **bool** | Общий доступ | [optional]
**start_payroll_period** | **string** | Начало расчётного периода, за который начисляется зарплата. Разница начала и окончания расчётного периода должна быть кратна 24 часам; секунды игнорируются. | [optional]
**state** | [**\OpenAPI\Client\Model\State**](State.md) | Метаданные статуса Начисления зарплаты | [optional]
**sum** | **float** | Сумма Начисления зарплаты в копейках | [optional] [readonly]
**sync_id** | **string** | ID синхронизации. После заполнения недоступен для изменения | [optional]
**updated** | **string** | Момент последнего обновления Начисления зарплаты | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
