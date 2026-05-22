# # ProcessingPlanStage

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**meta** | [**\OpenAPI\Client\Model\Meta**](Meta.md) |  | [optional]
**id** | **string** | ID этапа Техкарты | [optional] [readonly]
**account_id** | **string** | ID учетной записи | [optional] [readonly]
**enable_hour_accounting** | **bool** | Признак активности учета по нормо-часам | [optional]
**cost** | **float** | Стоимость производства на определенном этапе | [optional]
**labour_cost** | **float** | Оплата труда на определенном этапе | [optional]
**standard_hour** | **float** | Нормо-часы на определенном этапе | [optional]
**standard_hour_cost** | **float** | Стоимость нормо-часа | [optional] [readonly]
**processing_process_position** | [**\OpenAPI\Client\Model\ProcessingProcessPosition**](ProcessingProcessPosition.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
