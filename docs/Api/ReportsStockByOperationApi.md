# OpenAPI\Client\ReportsStockByOperationApi

All URIs are relative to https://api.moysklad.ru/api/remap/1.2, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getStockByOperation()**](ReportsStockByOperationApi.md#getStockByOperation) | **GET** /report/stock/byoperation | Получить Остатки по документу |


## `getStockByOperation()`

```php
getStockByOperation($operation_id, $accept, $accept_encoding): \OpenAPI\Client\Model\StockByOperationList
```

Получить Остатки по документу

Запрос отчета «Остатки по документам» — остатки по позициям указанного документа со склада документа, а также себестоимость позиций по FIFO с учётом количества.  Обязательный параметр — `operation.id` (ID документа).  Поддерживаемые типы документов: отгрузка, заказ покупателя, розничная продажа, счет поставщика, счет покупателю, заказ поставщику, приемка, розничный возврат, возврат поставщику, возврат покупателя.  Для отгрузки, розничной продажи, приемки, возвратов остатки рассчитываются на момент поля `moment` документа. Для заказа покупателя, счетов и заказа поставщику — на текущий момент времени.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

// Configure Bearer authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ReportsStockByOperationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$operation_id = 'operation_id_example'; // string | ID документа, по которому нужно получить остатки
$accept = 'application/json;charset=utf-8'; // string
$accept_encoding = 'gzip, deflate, br'; // string

try {
    $result = $apiInstance->getStockByOperation($operation_id, $accept, $accept_encoding);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsStockByOperationApi->getStockByOperation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **operation_id** | **string**| ID документа, по которому нужно получить остатки | |
| **accept** | **string**|  | [optional] [default to &#39;application/json;charset&#x3D;utf-8&#39;] |
| **accept_encoding** | **string**|  | [optional] [default to &#39;gzip, deflate, br&#39;] |

### Return type

[**\OpenAPI\Client\Model\StockByOperationList**](../Model/StockByOperationList.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/html;charset=UTF-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
