# # ByOperationsStock

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**assortment** | [**\OpenAPI\Client\Model\ByOperationsStockAssortment**](ByOperationsStockAssortment.md) |  | [optional]
**operation** | [**\OpenAPI\Client\Model\ByOperationsStockOperation**](ByOperationsStockOperation.md) |  | [optional]
**moment** | **string** | Дата документа | [optional]
**store** | [**\OpenAPI\Client\Model\ByOperationsStockStore**](ByOperationsStockStore.md) |  | [optional]
**stock** | **float** | Остатки | [optional]
**cost_per_unit** | **float** | Себестоимость за единицу. Не возвращается при отсутствии пермиссии «Видеть себестоимость, цену закупки, прибыль товаров». | [optional]
**sum_cost** | **float** | Сумма себестоимости. Не возвращается при отсутствии пермиссии «Видеть себестоимость, цену закупки, прибыль товаров». | [optional]
**avg_stock_days** | **float** | Количество дней на складе | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
