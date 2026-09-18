# # Pack

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**meta** | [**\OpenAPI\Client\Model\Meta**](Meta.md) |  | [optional]
**id** | **string** | ID упаковки товара. Обязательное при ответе | [optional] [readonly]
**uom** | [**\OpenAPI\Client\Model\Uom**](Uom.md) |  | [optional]
**quantity** | **float** | Количество товаров в упаковке. Обязательное при ответе | [optional]
**barcodes** | [**\OpenAPI\Client\Model\Barcode[]**](Barcode.md) | Штрихкоды упаковки (не более одного). Без штрихкода поле не выводится. При обновлении переданный массив полностью заменяет штрихкоды упаковки. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
