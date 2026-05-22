# # Webhook

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**meta** | [**\OpenAPI\Client\Model\Meta**](Meta.md) |  | [optional]
**id** | **string** | ID вебхука | [optional] [readonly]
**account_id** | **string** | ID учетной записи | [optional] [readonly]
**entity_type** | **string** | Тип сущности, к которой привязан вебхук. Известные ограничения см. в документации (нельзя webhook, discount, notes) | [optional]
**url** | **string** | URL, по которому отправляется уведомление | [optional]
**method** | **string** | HTTP метод запроса к URL подписчика. Известные значения описаны в WebhookMethod | [optional]
**enabled** | **bool** | Вебхук включен или отключен | [optional]
**action** | **string** | Отслеживаемое действие. Известные значения описаны в WebhookAction. Значение PROCESSED допустимо только для асинхронных задач | [optional]
**diff_type** | **string** | Режим для действия UPDATE. Известные значения описаны в WebhookDiffType | [optional]
**author_application** | [**\OpenAPI\Client\Model\Application**](Application.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
