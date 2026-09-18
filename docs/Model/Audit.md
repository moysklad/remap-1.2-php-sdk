# # Audit

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**meta** | [**\OpenAPI\Client\Model\Meta**](Meta.md) |  | [optional]
**id** | **string** | ID контекста аудита | [optional] [readonly]
**uid** | **string** | Логин сотрудника | [optional] [readonly]
**source** | **string** | Источник изменения. Известные значения описаны в AuditSourceType | [optional] [readonly]
**moment** | **string** | Момент изменения | [optional] [readonly]
**info** | **array<string,mixed>** | Краткое описание контекста | [optional] [readonly]
**object_count** | **int** | Количество измененных объектов | [optional] [readonly]
**event_type** | **string** | Тип события. Известные значения описаны в AuditEventType | [optional] [readonly]
**entity_type** | **string** | Тип сущности | [optional] [readonly]
**object_type** | **string** | Тип сущностей для специальных настроечных контекстов | [optional] [readonly]
**support_access** | **bool** | Признак доступа поддержки от имени пользователя | [optional] [readonly]
**events** | [**\OpenAPI\Client\Model\AuditEvents**](AuditEvents.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
