# # CreateInventoryPositionsRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**meta** | [**\OpenAPI\Client\Model\Meta**](Meta.md) |  | [optional]
**id** | **string** | ID позиции | [optional] [readonly]
**account_id** | **string** | ID учетной записи | [optional] [readonly]
**assortment** | [**\OpenAPI\Client\Model\Assortment**](Assortment.md) |  | [optional]
**calculated_quantity** | **float** | Расчетный остаток | [optional]
**correction_amount** | **float** | Разница между расчетным остатком и фактическим | [optional] [readonly]
**correction_sum** | **float** | Избыток/недостача | [optional] [readonly]
**pack** | [**\OpenAPI\Client\Model\Pack**](Pack.md) | Упаковка Товара | [optional]
**price** | **float** | Цена товара/услуги в копейках | [optional]
**things** | **string[]** | Серийные номера. Игнорируется, если товар позиции не на серийном учёте; иначе количество единиц в позиции совпадает с числом переданных серийных номеров. | [optional]
**quantity** | **float** | Количество товаров/услуг данного вида в позиции. Если позиция - товар,  у которого включен учет по серийным номерам, то значение в этом поле всегда  будет равно количеству серийных номеров для данной позиции в документе. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
