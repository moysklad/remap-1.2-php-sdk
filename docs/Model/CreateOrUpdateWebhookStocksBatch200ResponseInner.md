# # CreateOrUpdateWebhookStocksBatch200ResponseInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**meta** | [**\OpenAPI\Client\Model\Meta**](Meta.md) |  | [optional]
**id** | **string** | ID вебхука на изменение остатков | [optional] [readonly]
**account_id** | **string** | ID учетной записи | [optional] [readonly]
**stock_type** | **string** | Тип остатков. Известные значения описаны в WebhookStockStockType | [optional]
**report_type** | **string** | Тип отчёта остатков. Известные значения описаны в WebhookStockReportType | [optional]
**url** | **string** | URL, по которому будет происходить обработка вебхука | [optional]
**enabled** | **bool** | Вебхук включён или отключён | [optional]
**author_application** | [**\OpenAPI\Client\Model\Application**](Application.md) |  | [optional]
**errors** | [**\OpenAPI\Client\Model\ErrorErrorsInner[]**](ErrorErrorsInner.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
