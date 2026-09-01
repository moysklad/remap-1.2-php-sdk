# # RetailSalesReturnPosition

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**meta** | [**\OpenAPI\Client\Model\Meta**](Meta.md) |  | [optional]
**id** | **string** | ID позиции | [optional]
**account_id** | **string** | ID учетной записи | [optional] [readonly]
**assortment** | [**\OpenAPI\Client\Model\ProductMarker**](ProductMarker.md) |  | [optional]
**cost** | **int** | Себестоимость (выводится, если документ был создан без основания) | [optional]
**discount** | **float** | Процент скидки или наценки. Наценка указывается отрицательным числом, например &#x60;-10&#x60; задает наценку 10%. | [optional]
**pack** | [**\OpenAPI\Client\Model\Pack**](Pack.md) | Упаковка Товара | [optional]
**price** | **float** | Цена товара/услуги в копейках | [optional]
**quantity** | **float** | Количество товаров/услуг данного вида в позиции. Если позиция - товар с учетом по серийным номерам, значение всегда равно количеству серийных номеров для данной позиции в документе. | [optional]
**things** | **string[]** | Серийные номера. Игнорируется, если товар позиции не находится на серийном учете; иначе количество единиц в позиции совпадает с числом переданных серийных номеров. | [optional]
**vat** | **int** | НДС, которым облагается текущая позиция | [optional]
**vat_enabled** | **bool** | Включен ли НДС для позиции. Пара &#x60;(vat &#x3D; 0, vatEnabled &#x3D; false)&#x60; соответствует НДС \&quot;без НДС\&quot;; &#x60;(vat &#x3D; 0, vatEnabled &#x3D; true)&#x60; - НДС 0%. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
