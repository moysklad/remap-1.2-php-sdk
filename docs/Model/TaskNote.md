# # TaskNote

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**meta** | [**\OpenAPI\Client\Model\Meta**](Meta.md) |  | [optional]
**id** | **string** | ID комментария к Задаче | [optional] [readonly]
**account_id** | **string** | ID учетной записи | [optional] [readonly]
**author** | [**\OpenAPI\Client\Model\Employee**](Employee.md) |  | [optional]
**author_application** | [**\OpenAPI\Client\Model\Application**](Application.md) |  | [optional]
**moment** | **string** | Момент создания комментария | [optional] [readonly]
**text** | **string** | Текст комментария | [optional]
**files** | [**\OpenAPI\Client\Model\TaskNoteFileList**](TaskNoteFileList.md) | Метаданные массива Файлов | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
