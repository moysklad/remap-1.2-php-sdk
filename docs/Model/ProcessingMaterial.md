# # ProcessingMaterial

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**meta** | [**\OpenAPI\Client\Model\Meta**](Meta.md) |  | [optional]
**id** | **string** | ID материала техоперации | [optional] [readonly]
**account_id** | **string** | ID учетной записи | [optional] [readonly]
**assortment** | [**\OpenAPI\Client\Model\ProductMarker**](ProductMarker.md) |  | [optional]
**quantity** | **float** | Количество товаров данного вида в позиции | [optional]
**things** | **string[]** | Серийные номера. Игнорируется, если товар позиции не на серийном учёте; иначе количество единиц в позиции совпадает с числом переданных серийных номеров. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
