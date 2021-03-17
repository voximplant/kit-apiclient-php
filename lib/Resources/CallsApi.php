<?php
/**
 * CallsApi
 * PHP version 5
 *
 * @category Class
 * @package  VoximplantKit
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Voximplant Kit API Documentation
 *
 * <h1>Basic description</h1> <p>HTTP API is available via the <u>https://kitapi-{{region}}.voximplant.com/api/v3/<b>{method}</b></u> endpoint. To use the methods marked with the LOCK symbol, you need to create an api token on api tokens page. Pass this token as access token to each HTTP API call.</p> <h1>Authentication</h1> <p>This API uses Custom Query Parameter for its authentication.</p> <p>The parameters that are needed to be sent for this type of authentication are as follows:</p> <ul>   <li><strong>access_token</strong></li>   <li><strong>domain</strong></li> </ul>
 *
 * OpenAPI spec version: 2.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.24
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace VoximplantKit\Resources;

use GuzzleHttp\Psr7\MultipartStream;
use VoximplantKit\VoximplantKitClient;
use VoximplantKit\VoximplantKitRequest;
use VoximplantKit\ObjectSerializer;

/**
 * CallsApi Class Doc Comment
 *
 * @category Class
 * @package  VoximplantKit
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CallsApi
{
    /**
     * @var VoximplantKitClient
     */
    protected $client;

    /**
     * @param VoximplantKitClient $client
     */
    public function __construct(VoximplantKitClient $client) {
        $this->client = $client;
    }

    /**
     * Operation downloadHistoryReport
     *
     * @param  int $report_id Report ID. The ID can be retrieved via the **exportHistoryReport** method (required)
     *
     * @throws \VoximplantKit\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return string
     */
    public function downloadHistoryReport($report_id)
    {
        $request = $this->downloadHistoryReportRequest($report_id);
        list($response) = $this->client->sync($request);
        return $response;
    }

    /**
     * Operation downloadHistoryReportAsync
     *
     * 
     *
     * @param  int $report_id Report ID. The ID can be retrieved via the **exportHistoryReport** method (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function downloadHistoryReportAsync($report_id)
    {
        $request = $this->downloadHistoryReportRequest($report_id);
        return $this->client->async($request)->then(
               function ($response) {
               	return $response[0];
               }
        );
    }

    /**
     * Create request for operation 'downloadHistoryReport'
     *
     * @param  int $report_id Report ID. The ID can be retrieved via the **exportHistoryReport** method (required)
     *
     * @throws \InvalidArgumentException
     * @return VoximplantKitRequest
     */
    protected function downloadHistoryReportRequest($report_id)
    {
        // verify the required parameter 'report_id' is set
        if ($report_id === null || (is_array($report_id) && count($report_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $report_id when calling downloadHistoryReport'
            );
        }

        $resourcePath = '/calls/downloadHistoryReport';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($report_id !== null) {
            $queryParams['report_id'] = ObjectSerializer::toQueryValue($report_id);
        }


        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->client->getHeaderSelector()->selectHeadersForMultipart(
                ['application/vnd.openxmlformats-officedocument.spreadsheetml.sheet', 'application/json']
            );
        } else {
            $headers = $this->client->getHeaderSelector()->selectHeaders(
                ['application/vnd.openxmlformats-officedocument.spreadsheetml.sheet', 'application/json'],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;

            if($headers['Content-Type'] === 'application/json') {
                // \stdClass has no __toString(), so we should encode it manually
                if ($httpBody instanceof \stdClass) {
                    $httpBody = \GuzzleHttp\json_encode($httpBody);
                }
                // array has no __toString(), so we should encode it manually
                if(is_array($httpBody)) {
                    $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($httpBody));
                }
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->client->getConfig()->getApiKeyWithPrefix('access_token');
        if ($apiKey !== null) {
            $queryParams['access_token'] = $apiKey;
        }
        // this endpoint requires API key authentication
        $apiKey = $this->client->getConfig()->getApiKeyWithPrefix('domain');
        if ($apiKey !== null) {
            $queryParams['domain'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->client->getConfig()->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->client->getConfig()->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        $request = new VoximplantKitRequest(
            'POST',
            $this->client->getConfig()->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
        $request->setResponseType('string');
        return $request;
    }
    /**
     * Operation exportHistoryReport
     *
     * @param  string $call_direction Call direction (&lt;b&gt;example:&lt;/b&gt; ‘call_direction&#x3D;outgoing’ or ‘call_direction&#x3D;incoming’ or ‘call_direction&#x3D;all’) (optional)
     * @param  int $scenario_id Scenario ID. The ID can be retrieved via the **searchScenarios** method. (optional)
     * @param  string $from Start date. The format is 24-h ‘YYYY-MM-DD HH:mm:ss’ (optional)
     * @param  string $to End date. The format is 24-h ‘YYYY-MM-DD HH:mm:ss’ (optional)
     *
     * @throws \VoximplantKit\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \VoximplantKit\Model\ExportHistoryReportResponseType
     */
    public function exportHistoryReport($call_direction = null, $scenario_id = null, $from = null, $to = null)
    {
        $request = $this->exportHistoryReportRequest($call_direction, $scenario_id, $from, $to);
        list($response) = $this->client->sync($request);
        return $response;
    }

    /**
     * Operation exportHistoryReportAsync
     *
     * 
     *
     * @param  string $call_direction Call direction (&lt;b&gt;example:&lt;/b&gt; ‘call_direction&#x3D;outgoing’ or ‘call_direction&#x3D;incoming’ or ‘call_direction&#x3D;all’) (optional)
     * @param  int $scenario_id Scenario ID. The ID can be retrieved via the **searchScenarios** method. (optional)
     * @param  string $from Start date. The format is 24-h ‘YYYY-MM-DD HH:mm:ss’ (optional)
     * @param  string $to End date. The format is 24-h ‘YYYY-MM-DD HH:mm:ss’ (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function exportHistoryReportAsync($call_direction = null, $scenario_id = null, $from = null, $to = null)
    {
        $request = $this->exportHistoryReportRequest($call_direction, $scenario_id, $from, $to);
        return $this->client->async($request)->then(
               function ($response) {
               	return $response[0];
               }
        );
    }

    /**
     * Create request for operation 'exportHistoryReport'
     *
     * @param  string $call_direction Call direction (&lt;b&gt;example:&lt;/b&gt; ‘call_direction&#x3D;outgoing’ or ‘call_direction&#x3D;incoming’ or ‘call_direction&#x3D;all’) (optional)
     * @param  int $scenario_id Scenario ID. The ID can be retrieved via the **searchScenarios** method. (optional)
     * @param  string $from Start date. The format is 24-h ‘YYYY-MM-DD HH:mm:ss’ (optional)
     * @param  string $to End date. The format is 24-h ‘YYYY-MM-DD HH:mm:ss’ (optional)
     *
     * @throws \InvalidArgumentException
     * @return VoximplantKitRequest
     */
    protected function exportHistoryReportRequest($call_direction = null, $scenario_id = null, $from = null, $to = null)
    {

        $resourcePath = '/calls/exportHistoryReport';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($call_direction !== null) {
            $queryParams['call_direction'] = ObjectSerializer::toQueryValue($call_direction);
        }
        // query params
        if ($scenario_id !== null) {
            $queryParams['scenario_id'] = ObjectSerializer::toQueryValue($scenario_id);
        }
        // query params
        if ($from !== null) {
            $queryParams['from'] = ObjectSerializer::toQueryValue($from);
        }
        // query params
        if ($to !== null) {
            $queryParams['to'] = ObjectSerializer::toQueryValue($to);
        }


        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->client->getHeaderSelector()->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->client->getHeaderSelector()->selectHeaders(
                ['application/json'],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;

            if($headers['Content-Type'] === 'application/json') {
                // \stdClass has no __toString(), so we should encode it manually
                if ($httpBody instanceof \stdClass) {
                    $httpBody = \GuzzleHttp\json_encode($httpBody);
                }
                // array has no __toString(), so we should encode it manually
                if(is_array($httpBody)) {
                    $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($httpBody));
                }
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->client->getConfig()->getApiKeyWithPrefix('access_token');
        if ($apiKey !== null) {
            $queryParams['access_token'] = $apiKey;
        }
        // this endpoint requires API key authentication
        $apiKey = $this->client->getConfig()->getApiKeyWithPrefix('domain');
        if ($apiKey !== null) {
            $queryParams['domain'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->client->getConfig()->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->client->getConfig()->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        $request = new VoximplantKitRequest(
            'POST',
            $this->client->getConfig()->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
        $request->setResponseType('\VoximplantKit\Model\ExportHistoryReportResponseType');
        return $request;
    }
    /**
     * Operation getHistoryReportStatus
     *
     * @param  int $report_id Report ID. The ID can be retrieved via the **exportHistoryReport** method (required)
     *
     * @throws \VoximplantKit\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \VoximplantKit\Model\GetHistoryReportStatusResponseType
     */
    public function getHistoryReportStatus($report_id)
    {
        $request = $this->getHistoryReportStatusRequest($report_id);
        list($response) = $this->client->sync($request);
        return $response;
    }

    /**
     * Operation getHistoryReportStatusAsync
     *
     * 
     *
     * @param  int $report_id Report ID. The ID can be retrieved via the **exportHistoryReport** method (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getHistoryReportStatusAsync($report_id)
    {
        $request = $this->getHistoryReportStatusRequest($report_id);
        return $this->client->async($request)->then(
               function ($response) {
               	return $response[0];
               }
        );
    }

    /**
     * Create request for operation 'getHistoryReportStatus'
     *
     * @param  int $report_id Report ID. The ID can be retrieved via the **exportHistoryReport** method (required)
     *
     * @throws \InvalidArgumentException
     * @return VoximplantKitRequest
     */
    protected function getHistoryReportStatusRequest($report_id)
    {
        // verify the required parameter 'report_id' is set
        if ($report_id === null || (is_array($report_id) && count($report_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $report_id when calling getHistoryReportStatus'
            );
        }

        $resourcePath = '/calls/getHistoryReportStatus';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($report_id !== null) {
            $queryParams['report_id'] = ObjectSerializer::toQueryValue($report_id);
        }


        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->client->getHeaderSelector()->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->client->getHeaderSelector()->selectHeaders(
                ['application/json'],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;

            if($headers['Content-Type'] === 'application/json') {
                // \stdClass has no __toString(), so we should encode it manually
                if ($httpBody instanceof \stdClass) {
                    $httpBody = \GuzzleHttp\json_encode($httpBody);
                }
                // array has no __toString(), so we should encode it manually
                if(is_array($httpBody)) {
                    $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($httpBody));
                }
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->client->getConfig()->getApiKeyWithPrefix('access_token');
        if ($apiKey !== null) {
            $queryParams['access_token'] = $apiKey;
        }
        // this endpoint requires API key authentication
        $apiKey = $this->client->getConfig()->getApiKeyWithPrefix('domain');
        if ($apiKey !== null) {
            $queryParams['domain'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->client->getConfig()->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->client->getConfig()->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        $request = new VoximplantKitRequest(
            'POST',
            $this->client->getConfig()->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
        $request->setResponseType('\VoximplantKit\Model\GetHistoryReportStatusResponseType');
        return $request;
    }
    /**
     * Operation searchCalls
     *
     * @param  int $id Call ID. (optional)
     * @param  string $call_direction Call direction (&lt;b&gt;example:&lt;/b&gt; ‘call_direction&#x3D;outgoing’ or ‘call_direction&#x3D;incoming’ or ‘call_direction&#x3D;all’) (optional)
     * @param  int $scenario_id Scenario ID. The ID can be retrieved via the **searchScenarios** method (optional)
     * @param  int $phone Phone number to filter. The response will include calls to the specified number only. The minimum number of digits is 3. (&lt;b&gt;example:&lt;/b&gt; phone&#x3D;15417543010) (optional)
     * @param  string $datetime_start Start date. The format is 24-h ‘YYYY-MM-DD HH:mm:ss’ (optional)
     * @param  string $datetime_end End date. The format is 24-h ‘YYYY-MM-DD HH:mm:ss’ (optional)
     *
     * @throws \VoximplantKit\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \VoximplantKit\Model\SearchCallsResponseType
     */
    public function searchCalls($id = null, $call_direction = null, $scenario_id = null, $phone = null, $datetime_start = null, $datetime_end = null)
    {
        $request = $this->searchCallsRequest($id, $call_direction, $scenario_id, $phone, $datetime_start, $datetime_end);
        list($response) = $this->client->sync($request);
        return $response;
    }

    /**
     * Operation searchCallsAsync
     *
     * 
     *
     * @param  int $id Call ID. (optional)
     * @param  string $call_direction Call direction (&lt;b&gt;example:&lt;/b&gt; ‘call_direction&#x3D;outgoing’ or ‘call_direction&#x3D;incoming’ or ‘call_direction&#x3D;all’) (optional)
     * @param  int $scenario_id Scenario ID. The ID can be retrieved via the **searchScenarios** method (optional)
     * @param  int $phone Phone number to filter. The response will include calls to the specified number only. The minimum number of digits is 3. (&lt;b&gt;example:&lt;/b&gt; phone&#x3D;15417543010) (optional)
     * @param  string $datetime_start Start date. The format is 24-h ‘YYYY-MM-DD HH:mm:ss’ (optional)
     * @param  string $datetime_end End date. The format is 24-h ‘YYYY-MM-DD HH:mm:ss’ (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function searchCallsAsync($id = null, $call_direction = null, $scenario_id = null, $phone = null, $datetime_start = null, $datetime_end = null)
    {
        $request = $this->searchCallsRequest($id, $call_direction, $scenario_id, $phone, $datetime_start, $datetime_end);
        return $this->client->async($request)->then(
               function ($response) {
               	return $response[0];
               }
        );
    }

    /**
     * Create request for operation 'searchCalls'
     *
     * @param  int $id Call ID. (optional)
     * @param  string $call_direction Call direction (&lt;b&gt;example:&lt;/b&gt; ‘call_direction&#x3D;outgoing’ or ‘call_direction&#x3D;incoming’ or ‘call_direction&#x3D;all’) (optional)
     * @param  int $scenario_id Scenario ID. The ID can be retrieved via the **searchScenarios** method (optional)
     * @param  int $phone Phone number to filter. The response will include calls to the specified number only. The minimum number of digits is 3. (&lt;b&gt;example:&lt;/b&gt; phone&#x3D;15417543010) (optional)
     * @param  string $datetime_start Start date. The format is 24-h ‘YYYY-MM-DD HH:mm:ss’ (optional)
     * @param  string $datetime_end End date. The format is 24-h ‘YYYY-MM-DD HH:mm:ss’ (optional)
     *
     * @throws \InvalidArgumentException
     * @return VoximplantKitRequest
     */
    protected function searchCallsRequest($id = null, $call_direction = null, $scenario_id = null, $phone = null, $datetime_start = null, $datetime_end = null)
    {

        $resourcePath = '/calls/searchCalls';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($id !== null) {
            $queryParams['id'] = ObjectSerializer::toQueryValue($id);
        }
        // query params
        if ($call_direction !== null) {
            $queryParams['call_direction'] = ObjectSerializer::toQueryValue($call_direction);
        }
        // query params
        if ($scenario_id !== null) {
            $queryParams['scenario_id'] = ObjectSerializer::toQueryValue($scenario_id);
        }
        // query params
        if ($phone !== null) {
            $queryParams['phone'] = ObjectSerializer::toQueryValue($phone);
        }
        // query params
        if ($datetime_start !== null) {
            $queryParams['datetime_start'] = ObjectSerializer::toQueryValue($datetime_start);
        }
        // query params
        if ($datetime_end !== null) {
            $queryParams['datetime_end'] = ObjectSerializer::toQueryValue($datetime_end);
        }


        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->client->getHeaderSelector()->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->client->getHeaderSelector()->selectHeaders(
                ['application/json'],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;

            if($headers['Content-Type'] === 'application/json') {
                // \stdClass has no __toString(), so we should encode it manually
                if ($httpBody instanceof \stdClass) {
                    $httpBody = \GuzzleHttp\json_encode($httpBody);
                }
                // array has no __toString(), so we should encode it manually
                if(is_array($httpBody)) {
                    $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($httpBody));
                }
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->client->getConfig()->getApiKeyWithPrefix('access_token');
        if ($apiKey !== null) {
            $queryParams['access_token'] = $apiKey;
        }
        // this endpoint requires API key authentication
        $apiKey = $this->client->getConfig()->getApiKeyWithPrefix('domain');
        if ($apiKey !== null) {
            $queryParams['domain'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->client->getConfig()->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->client->getConfig()->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        $request = new VoximplantKitRequest(
            'GET',
            $this->client->getConfig()->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
        $request->setResponseType('\VoximplantKit\Model\SearchCallsResponseType');
        return $request;
    }
}
