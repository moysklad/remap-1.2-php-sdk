# # Consignment

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**meta** | [**\OpenAPI\Client\Model\Meta**](Meta.md) |  | [optional]
**id** | **string** | ID Партии | [optional] [readonly]
**account_id** | **string** | ID учетной записи | [optional] [readonly]
**archived** | **bool** | Добавлена ли Партия в архив | [optional]
**attributes** | [**\OpenAPI\Client\Model\AttributeAbstract[]**](AttributeAbstract.md) | Коллекция доп. полей Партии | [optional]
**assortment** | [**\OpenAPI\Client\Model\Assortment**](Assortment.md) |  | [optional]
**barcodes** | [**\OpenAPI\Client\Model\Barcode[]**](Barcode.md) | Штрихкоды Партии | [optional]
**code** | **string** | Код Партии | [optional]
**description** | **string** | Описание Партии | [optional]
**expiry_date** | **string** | Срок годности Партии | [optional]
**external_code** | **string** | Внешний код Партии | [optional]
**images** | [**\OpenAPI\Client\Model\ImageList**](ImageList.md) | Массив метаданных Изображений товара, к которому относится данная партия | [optional] [readonly]
**label** | **string** | Метка Партии | [optional]
**name** | **string** | Наименование Партии | [optional] [readonly]
**updated** | **string** | Момент последнего обновления сущности | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
