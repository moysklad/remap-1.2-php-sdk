# # CreatePurchaseOrderPositions200ResponseInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**meta** | [**\OpenAPI\Client\Model\Meta**](Meta.md) |  | [optional]
**id** | **string** | ID позиции | [optional]
**account_id** | **string** | ID учетной записи | [optional] [readonly]
**quantity** | **float** | Количество товаров данного вида в позиции | [optional]
**price** | **float** | Цена товара/услуги в копейках | [optional]
**discount** | **float** | Процент скидки или наценки | [optional]
**shipped** | **float** | Принято | [optional] [readonly]
**in_transit** | **float** | Ожидание | [optional] [readonly]
**vat** | **int** | НДС, которым облагается текущая позиция | [optional]
**vat_enabled** | **bool** | Включен ли НДС для позиции | [optional]
**assortment** | [**\OpenAPI\Client\Model\ProductMarker**](ProductMarker.md) | Метаданные товара/услуги/модификации/партии, которую представляет собой позиция | [optional]
**pack** | [**\OpenAPI\Client\Model\Pack**](Pack.md) | Упаковка Товара | [optional]
**stock** | [**\OpenAPI\Client\Model\PositionStock**](PositionStock.md) | Остатки и себестоимость позиции. Не выводится по умолчанию. Для получения передайте параметр &#x60;?fields&#x3D;stock&#x60;. | [optional]
**errors** | [**\OpenAPI\Client\Model\Error[]**](Error.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
