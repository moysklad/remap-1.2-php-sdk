# # EnterPosition

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**meta** | [**\OpenAPI\Client\Model\Meta**](Meta.md) |  | [optional]
**id** | **string** | ID позиции | [optional] [readonly]
**account_id** | **string** | ID учетной записи | [optional] [readonly]
**assortment** | [**\OpenAPI\Client\Model\Assortment**](Assortment.md) |  | [optional]
**country** | [**\OpenAPI\Client\Model\Country**](Country.md) | Метаданные страны | [optional]
**gtd** | [**\OpenAPI\Client\Model\Gtd**](Gtd.md) |  | [optional]
**overhead** | **int** | Накладные расходы | [optional] [readonly]
**pack** | [**\OpenAPI\Client\Model\Pack**](Pack.md) | Упаковка Товара | [optional]
**price** | **float** | Цена товара/услуги в копейках | [optional]
**quantity** | **float** | Количество товаров данного вида в позиции | [optional]
**reason** | **string** | Причина оприходования данной позиции | [optional]
**slot** | [**\OpenAPI\Client\Model\StoreSlot**](StoreSlot.md) | Ячейка на складе | [optional]
**things** | **string[]** | Серийные номера. Игнорируется, если товар позиции не на серийном учёте; иначе количество единиц в позиции совпадает с числом переданных серийных номеров. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
