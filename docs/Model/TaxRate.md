# # TaxRate

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**meta** | [**\OpenAPI\Client\Model\Meta**](Meta.md) |  | [optional]
**id** | **string** | ID налоговой ставки | [optional] [readonly]
**account_id** | **string** | ID учетной записи | [optional] [readonly]
**owner** | [**\OpenAPI\Client\Model\Employee**](Employee.md) | Метаданные владельца (Сотрудника) | [optional]
**shared** | **bool** | Флаг общего доступа | [optional]
**group** | [**\OpenAPI\Client\Model\Group**](Group.md) |  | [optional]
**updated** | **string** | Момент последнего обновления сущности | [optional] [readonly]
**rate** | **float** | Значение налоговой ставки | [optional]
**archived** | **bool** | Флаг принадлежности ставки к архивным ставкам | [optional]
**comment** | **string** | Комментарий к налоговой ставке | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
