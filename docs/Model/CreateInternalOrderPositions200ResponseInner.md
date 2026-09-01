# # CreateInternalOrderPositions200ResponseInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**meta** | [**\OpenAPI\Client\Model\Meta**](Meta.md) |  | [optional]
**id** | **string** | ID позиции | [optional]
**account_id** | **string** | ID учетной записи | [optional] [readonly]
**quantity** | **float** | Количество товаров данного вида в позиции | [optional]
**price** | **float** | Цена товара/услуги в копейках | [optional]
**vat** | **int** | НДС, которым облагается текущая позиция | [optional]
**vat_enabled** | **bool** | Включен ли НДС для позиции | [optional]
**assortment** | [**\OpenAPI\Client\Model\ProductMarker**](ProductMarker.md) | Метаданные товара/услуги/модификации/комплекта, которую представляет собой позиция | [optional]
**pack** | [**\OpenAPI\Client\Model\Pack**](Pack.md) | Упаковка Товара | [optional]
**errors** | [**\OpenAPI\Client\Model\Error[]**](Error.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
