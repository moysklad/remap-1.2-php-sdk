# # ScriptPermissions

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**view** | **string** | Смотреть. Допустимые значения — NO, AUTHOR_OR_ASSIGNEE, ALL. Известные значения описаны в ScriptPermissionValue. | [optional]
**create** | **string** | Создавать. Допустимые значения — NO, ALL. Область действия не шире view; поле может отсутствовать. Известные значения описаны в ScriptPermissionValue. | [optional]
**update** | **string** | Редактировать. Допустимые значения — NO, AUTHOR, AUTHOR_OR_ASSIGNEE, ALL. Область действия не шире view; поле может отсутствовать. Известные значения описаны в ScriptPermissionValue. | [optional]
**delete** | **string** | Удалять. Допустимые значения — NO, AUTHOR, AUTHOR_OR_ASSIGNEE, ALL. Область действия не шире update; поле может отсутствовать. Известные значения описаны в ScriptPermissionValue. | [optional]
**done** | **string** | Выполнять. Допустимые значения — NO, ASSIGNEE, AUTHOR_OR_ASSIGNEE, ALL. Область действия не шире view; при view, отличном от NO, обязательно и совпадает с view. Известные значения описаны в ScriptPermissionValue. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
