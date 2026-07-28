# # EmissionOrderPosition

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**meta** | [**\OpenAPI\Client\Model\Meta**](Meta.md) |  | [optional]
**id** | **string** | ID позиции | [optional] [readonly]
**account_id** | **string** | ID учетной записи | [optional] [readonly]
**assortment** | [**\OpenAPI\Client\Model\ProductMarker**](ProductMarker.md) | Метаданные товара/модификации/партии, которую представляет собой позиция | [optional]
**quantity** | **float** | Количество товаров данного вида в позиции | [optional]
**status** | **string** | Статус кодов. Известные значения описаны в EmissionOrderPositionStatus | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
