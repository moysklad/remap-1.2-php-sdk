# # SpecialPriceDiscount

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | ID дополнительного поля | [optional] [readonly]
**meta** | [**\OpenAPI\Client\Model\Meta**](Meta.md) |  | [optional]
**product_folders** | [**\OpenAPI\Client\Model\ProductFolder[]**](ProductFolder.md) | Группы товаров со скидкой | [optional]
**use_price_type** | **bool** | Использовать ли специальную цену | [optional]
**discount** | **float** | Процент скидки (используется при usePriceType&#x3D;false) | [optional]
**special_price** | [**\OpenAPI\Client\Model\SpecialPriceDiscountSpecialPrice**](SpecialPriceDiscountSpecialPrice.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
