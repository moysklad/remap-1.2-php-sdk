# # CreateMovePositionsBatch200ResponseInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**meta** | [**\OpenAPI\Client\Model\Meta**](Meta.md) |  | [optional]
**id** | **string** | ID позиции | [optional] [readonly]
**account_id** | **string** | ID учетной записи | [optional] [readonly]
**assortment** | [**\OpenAPI\Client\Model\Assortment**](Assortment.md) |  | [optional]
**overhead** | **int** | Накладные расходы по позиции. Если позиции Перемещения не заданы, накладные расходы на уровне документа задать нельзя. | [optional] [readonly]
**pack** | [**\OpenAPI\Client\Model\Pack**](Pack.md) | Упаковка Товара | [optional]
**price** | **float** | Цена товара/услуги в копейках | [optional]
**quantity** | **float** | Количество товаров/услуг данного вида в позиции. Если позиция — товар с учётом по серийным номерам, значение всегда равно количеству серийных номеров для этой позиции в документе. | [optional]
**source_slot** | [**\OpenAPI\Client\Model\StoreSlot**](StoreSlot.md) | Ячейка на складе, с которого совершается перемещение | [optional]
**target_slot** | [**\OpenAPI\Client\Model\StoreSlot**](StoreSlot.md) | Ячейка на складе, на который совершается перемещение | [optional]
**things** | **string[]** | Серийные номера. Игнорируется, если товар позиции не на серийном учёте; иначе количество единиц в позиции совпадает с числом переданных серийных номеров. | [optional]
**errors** | [**\OpenAPI\Client\Model\ErrorErrorsInner[]**](ErrorErrorsInner.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
