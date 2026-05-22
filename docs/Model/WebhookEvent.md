# # WebhookEvent

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**meta** | [**\OpenAPI\Client\Model\Meta**](Meta.md) |  | [optional]
**action** | **string** | Действие, вызвавшее срабатывание. Известные значения описаны в WebhookAction | [optional]
**account_id** | **string** | ID учетной записи | [optional]
**updated_fields** | **string[]** | Поля сущности, измененные пользователем (при diffType&#x3D;FIELDS и action&#x3D;UPDATE у настройки вебхука) | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
