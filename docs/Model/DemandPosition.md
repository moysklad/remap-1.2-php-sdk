# # DemandPosition

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**meta** | [**\OpenAPI\Client\Model\Meta**](Meta.md) |  | [optional]
**id** | **string** | ID позиции | [optional] [readonly]
**account_id** | **string** | ID учетной записи | [optional] [readonly]
**assortment** | [**\OpenAPI\Client\Model\ProductMarker**](ProductMarker.md) | Метаданные товара/услуги/партии/модификации/комплекта, которую представляет собой позиция | [optional]
**cost** | **int** | Себестоимость (только для услуг) | [optional]
**declaration** | [**\OpenAPI\Client\Model\DeclarationInner[]**](DeclarationInner.md) | Информация о прослеживаемости импортных товаров. Не входит в ответ по умолчанию; может быть возвращена только при явном запросе &#x60;fields&#x3D;declaration&#x60;. Только для чтения. | [optional] [readonly]
**discount** | **float** | Процент скидки или наценки. Наценка указывается отрицательным числом (например, &#x60;-10&#x60; задаёт наценку 10%). | [optional]
**pack** | [**\OpenAPI\Client\Model\Pack**](Pack.md) | Упаковка Товара | [optional]
**price** | **float** | Цена товара/услуги в копейках | [optional]
**quantity** | **float** | Количество товаров/услуг данного вида в позиции. Если позиция — товар с учётом по серийным номерам, значение всегда равно количеству серийных номеров для этой позиции в документе. | [optional]
**slot** | [**\OpenAPI\Client\Model\StoreSlot**](StoreSlot.md) | Ячейка на складе | [optional]
**things** | **string[]** | Серийные номера. Игнорируется, если товар позиции не на серийном учёте; иначе количество единиц в позиции совпадает с числом переданных серийных номеров. | [optional]
**tracking_codes** | [**\OpenAPI\Client\Model\PositionTrackingCode[]**](PositionTrackingCode.md) | Коды маркировки товаров и транспортных упаковок (иерархическая структура). Количество кодов маркировки не влияет на поле quantity позиции. | [optional]
**tracking_codes_1162** | [**\OpenAPI\Client\Model\DemandPositionTrackingCode1162[]**](DemandPositionTrackingCode1162.md) | Коды маркировки в формате тега 1162 (иерархическая структура). Только для чтения в ответе. | [optional]
**overhead** | **int** | Накладные расходы по позиции. Если позиции Отгрузки не заданы, накладные расходы на уровне документа задать нельзя. | [optional] [readonly]
**vat** | **int** | НДС, которым облагается текущая позиция | [optional]
**vat_enabled** | **bool** | Включён ли НДС для позиции. Пара &#x60;(vat &#x3D; 0, vatEnabled &#x3D; false)&#x60; соответствует НДС «без НДС»; &#x60;(vat &#x3D; 0, vatEnabled &#x3D; true)&#x60; — НДС 0%. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
