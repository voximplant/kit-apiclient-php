# Body2

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**datetime_start** | **string** | Start date. The format is 24-h ‘YYYY-MM-DD HH:mm:ss’ in UTC | [optional] 
**datetime_end** | **string** | End date. The format is 24-h ‘YYYY-MM-DD HH:mm:ss’ in UTC | [optional] 
**call_direction** | **string** | Call direction (&lt;b&gt;example:&lt;/b&gt; ‘call_direction&#x3D;outgoing’ or ‘call_direction&#x3D;incoming’ or ‘call_direction&#x3D;all’) | [optional] 
**scenario_ids** | **string** | Json integer array with scenarios IDs. The ID can be retrieved via the **searchScenarios** method. (&lt;b&gt;example:&lt;/b&gt; scenario_ids&#x3D;[1,2,3,...,9]) | [optional] 
**campaign_ids** | **string** | Json integer array with campaign IDs. The ID can be retrieved via the **searchCampaigns** method. (&lt;b&gt;example:&lt;/b&gt; campaign_ids&#x3D;[1,2,3,...,9]) | [optional] 
**phone** | **string** | Phone number to filter. The response will include calls to the specified number only. The minimum number of digits is 3. (&lt;b&gt;example:&lt;/b&gt; phone&#x3D;15417543010) | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


