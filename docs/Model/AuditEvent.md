# # AuditEvent

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**additional_info** | **string** | Дополнительная информация о событии | [optional] [readonly]
**audit** | [**\OpenAPI\Client\Model\AuditEventAudit**](AuditEventAudit.md) |  | [optional]
**diff** | **array<string,mixed>** | Изменения, произошедшие в событии | [optional] [readonly]
**entity** | [**\OpenAPI\Client\Model\AuditEventEntity**](AuditEventEntity.md) |  | [optional]
**entity_type** | **string** | Тип сущности | [optional] [readonly]
**event_type** | **string** | Действие события. Известные значения описаны в AuditEventType | [optional] [readonly]
**moment** | **string** | Время создания события | [optional] [readonly]
**name** | **string** | Имя сущности | [optional] [readonly]
**object_count** | **int** | Количество измененных объектов | [optional] [readonly]
**object_type** | **string** | Тип сущностей для специальных настроечных событий | [optional] [readonly]
**source** | **string** | Источник изменения. Известные значения описаны в AuditSourceType | [optional] [readonly]
**support_access** | **bool** | Признак доступа поддержки от имени пользователя | [optional] [readonly]
**uid** | **string** | Логин сотрудника | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
