# # CreateRetailDemandPositions200ResponseInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**meta** | [**\OpenAPI\Client\Model\Meta**](Meta.md) |  | [optional]
**id** | **string** | ID позиции | [optional] [readonly]
**account_id** | **string** | ID учетной записи | [optional] [readonly]
**assortment** | [**\OpenAPI\Client\Model\ProductMarker**](ProductMarker.md) |  | [optional]
**cost** | **int** | Себестоимость (только для услуг) | [optional]
**declaration** | [**\OpenAPI\Client\Model\DeclarationInner[]**](DeclarationInner.md) | Информация о прослеживаемости импортных товаров. Не входит в ответ по умолчанию; может быть возвращена только при явном запросе &#x60;fields&#x3D;declaration&#x60;. Только для чтения. | [optional] [readonly]
**discount** | **float** | Процент скидки или наценки. Наценка указывается отрицательным числом (например, &#x60;-10&#x60; задаёт наценку 10%). | [optional]
**pack** | [**\OpenAPI\Client\Model\Pack**](Pack.md) | Упаковка товара | [optional]
**price** | **float** | Цена товара/услуги в копейках | [optional]
**quantity** | **float** | Количество товаров/услуг данного вида в позиции. Если позиция является товаром с учётом по серийным номерам, значение всегда равно количеству серийных номеров для этой позиции в документе. | [optional]
**things** | **string[]** | Серийные номера. Игнорируется, если товар позиции не на серийном учёте; иначе количество единиц в позиции совпадает с числом переданных серийных номеров. | [optional]
**vat** | **int** | НДС, которым облагается текущая позиция | [optional]
**vat_enabled** | **bool** | Включен ли НДС для позиции | [optional]
**errors** | [**\OpenAPI\Client\Model\ErrorErrorsInner[]**](ErrorErrorsInner.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
