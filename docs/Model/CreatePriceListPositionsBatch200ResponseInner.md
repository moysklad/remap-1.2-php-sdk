# # CreatePriceListPositionsBatch200ResponseInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**meta** | [**\OpenAPI\Client\Model\Meta**](Meta.md) |  | [optional]
**id** | **string** | ID позиции | [optional]
**account_id** | **string** | ID учетной записи | [optional] [readonly]
**assortment** | [**\OpenAPI\Client\Model\ProductMarker**](ProductMarker.md) | Метаданные номенклатуры, которую представляет собой позиция | [optional]
**cells** | [**\OpenAPI\Client\Model\PriceListCell[]**](PriceListCell.md) | Массив значений столбцов в позиции Прайс-листа | [optional]
**errors** | [**\OpenAPI\Client\Model\Error[]**](Error.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
