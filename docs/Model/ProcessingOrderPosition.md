# # ProcessingOrderPosition

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**meta** | [**\OpenAPI\Client\Model\Meta**](Meta.md) |  | [optional]
**id** | **string** | ID позиции | [optional] [readonly]
**account_id** | **string** | ID учетной записи | [optional] [readonly]
**quantity** | **float** | Количество товаров данного вида в позиции | [optional]
**reserve** | **float** | Резерв данной позиции | [optional]
**assortment** | [**\OpenAPI\Client\Model\ProductMarker**](ProductMarker.md) | Метаданные товара/услуги/партии/модификации позиции | [optional]
**pack** | [**\OpenAPI\Client\Model\Pack**](Pack.md) | Упаковка Товара | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
