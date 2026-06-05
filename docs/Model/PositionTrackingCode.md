# # PositionTrackingCode

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**cis** | **string** | Значение кода маркировки | [optional]
**type** | **string** | Тип кода маркировки. Известные значения описаны в PositionTrackingCodeType | [optional]
**tracking_codes** | [**\OpenAPI\Client\Model\PositionTrackingCode[]**](PositionTrackingCode.md) | Вложенные коды маркировки. Может присутствовать только если type имеет значения &#x60;consumerpack&#x60; или &#x60;transportpack&#x60;. Допустима вложенность кодов маркировки товаров в транспортные упаковки; транспортные упаковки не могут иметь вложенных упаковок. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
