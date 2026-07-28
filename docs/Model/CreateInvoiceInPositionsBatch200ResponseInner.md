# # CreateInvoiceInPositionsBatch200ResponseInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**meta** | [**\OpenAPI\Client\Model\Meta**](Meta.md) |  | [optional]
**id** | **string** | ID позиции | [optional] [readonly]
**account_id** | **string** | ID учетной записи | [optional] [readonly]
**quantity** | **float** | Количество товаров/услуг данного вида в позиции | [optional]
**price** | **float** | Цена товара/услуги в копейках | [optional]
**discount** | **float** | Процент скидки или наценки | [optional]
**vat** | **int** | НДС, которым облагается текущая позиция | [optional]
**vat_enabled** | **bool** | Включен ли НДС для позиции | [optional]
**assortment** | [**\OpenAPI\Client\Model\ProductMarker**](ProductMarker.md) | Метаданные товара/услуги/партии/модификации/комплекта, которую представляет собой позиция | [optional]
**pack** | [**\OpenAPI\Client\Model\Pack**](Pack.md) | Упаковка Товара | [optional]
**errors** | [**\OpenAPI\Client\Model\ErrorErrorsInner[]**](ErrorErrorsInner.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
