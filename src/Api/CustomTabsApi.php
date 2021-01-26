<?php
declare(strict_types=1);

/**
 * CustomTabsApi.
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  DocuSign\eSign
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * DocuSign REST API
 *
 * The DocuSign REST API provides you with a powerful, convenient, and simple Web services API for interacting with DocuSign.
 *
 * OpenAPI spec version: v2.1
 * Contact: devcenter@docusign.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.13-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace DocuSign\eSign\ApiCustomTabsApi;


class ListOptions
{
    /**
      * $custom_tab_only When set to **true**, only custom tabs are returned in the response.
      * @var string
      */
    protected string $custom_tab_only;

    /**
     * Gets custom_tab_only
     * @return string
     */
    public function getCustomTabOnly(): string
    {
        return $this->custom_tab_only;
    }

    /**
     * Sets custom_tab_only
     * @param string $custom_tab_only When set to **true**, only custom tabs are returned in the response.
     * @return self
     */
    public function setCustomTabOnly(string $custom_tab_only): self
    {
        $this->custom_tab_only = $custom_tab_only;
        return $this;
    }
}



namespace DocuSign\eSign\Api;

use DocuSign\eSign\Client\ApiClient;
use DocuSign\eSign\Client\ApiException;
use DocuSign\eSign\Configuration;
use DocuSign\eSign\ObjectSerializer;

/**
 * CustomTabsApi Class Doc Comment
 *
 * @category Class
 * @package  DocuSign\eSign
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CustomTabsApi
{
    /**
     * API Client
     *
     * @var ApiClient instance of the ApiClient
     */
    protected ApiClient $apiClient;

    /**
     * Constructor
     *
     * @param ApiClient|null $apiClient The api client to use
     * @return void
     */
    public function __construct(ApiClient $apiClient = null)
    {
        $this->apiClient = $apiClient ?? new ApiClient();
    }

    /**
     * Get API client
     *
     * @return ApiClient get the API client
     */
    public function getApiClient(): ApiClient
    {
        return $this->apiClient;
    }

    /**
     * Set the API client
     *
     * @param ApiClient $apiClient set the API client
     *
     * @return self
     */
    public function setApiClient(ApiClient $apiClient): self
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
    * Update $resourcePath with $
    *
    * @param string $resourcePath
    * @param string $baseName
    * @param string $paramName
    *
    * @return string
    */
    public function updateResourcePath(string $resourcePath, string $baseName, string $paramName): string
    {
        return str_replace(
            "{" . $baseName . "}",
            $this->apiClient->getSerializer()->toPathValue($paramName),
            $resourcePath
        );
    }


    /**
     * Operation callList
     *
     * Gets a list of all account tabs.
     *
     * @param string $account_id The external account number (int) or account ID Guid.
     * @param  \DocuSign\eSign\ApiCustomTabsApi\ListOptions for modifying the behavior of the function. (optional)
     * @throws ApiException on non-2xx response
     * @return \DocuSign\eSign\Model\TabMetadataList
     */
    public function callList($account_id, \DocuSign\eSign\ApiCustomTabsApi\ListOptions $options = null): \DocuSign\eSign\Model\TabMetadataList
    {
        list($response) = $this->callListWithHttpInfo($account_id, $options);
        return $response;
    }

    /**
     * Operation callListWithHttpInfo
     *
     * Gets a list of all account tabs.
     *
     * @param string $account_id The external account number (int) or account ID Guid.
     * @param  \DocuSign\eSign\ApiCustomTabsApi\ListOptions for modifying the behavior of the function. (optional)
     * @throws ApiException on non-2xx response
     * @return array of \DocuSign\eSign\Model\TabMetadataList, HTTP status code, HTTP response headers (array of strings)
     */
    public function callListWithHttpInfo($account_id, \DocuSign\eSign\ApiCustomTabsApi\ListOptions $options = null): array
    {
        // verify the required parameter 'account_id' is set
        if ($account_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $account_id when calling callList');
        }
        // parse inputs
        $resourcePath = "/v2.1/accounts/{accountId}/tab_definitions";
        $httpBody = $_tempBody ?? ''; // $_tempBody is the method argument, if present
        $queryParams = $headerParams = $formParams = [];
        $headerParams['Accept'] ??= $this->apiClient->selectHeaderAccept(['application/json']);
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);

        if ($options != null)
        {
            // query params
            if ($options->getCustomTabOnly() != 'null') {
                $queryParams['custom_tab_only'] = $this->apiClient->getSerializer()->toQueryValue($options->getCustomTabOnly());
            }
        }

        // path params
        if ($account_id !== null) {
            $resourcePath = self::updateResourcePath($resourcePath, "accountId", $account_id);
        }

        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);
        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires OAuth (access token)
        if (strlen($this->apiClient->getConfig()->getAccessToken()) !== 0) {
            $headerParams['Authorization'] = 'Bearer ' . $this->apiClient->getConfig()->getAccessToken();
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\DocuSign\eSign\Model\TabMetadataList',
                '/v2.1/accounts/{accountId}/tab_definitions'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\DocuSign\eSign\Model\TabMetadataList', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\DocuSign\eSign\Model\TabMetadataList', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\DocuSign\eSign\Model\ErrorDetails', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation create
     *
     * Creates a custom tab.
     *
     * @param string $account_id The external account number (int) or account ID Guid.
     * @param \DocuSign\eSign\Model\TabMetadata $tab_metadata  (optional)
     * @throws ApiException on non-2xx response
     * @return \DocuSign\eSign\Model\TabMetadata
     */
    public function create($account_id, $tab_metadata = null): \DocuSign\eSign\Model\TabMetadata
    {
        list($response) = $this->createWithHttpInfo($account_id, $tab_metadata);
        return $response;
    }

    /**
     * Operation createWithHttpInfo
     *
     * Creates a custom tab.
     *
     * @param string $account_id The external account number (int) or account ID Guid.
     * @param \DocuSign\eSign\Model\TabMetadata $tab_metadata  (optional)
     * @throws ApiException on non-2xx response
     * @return array of \DocuSign\eSign\Model\TabMetadata, HTTP status code, HTTP response headers (array of strings)
     */
    public function createWithHttpInfo($account_id, $tab_metadata = null): array
    {
        // verify the required parameter 'account_id' is set
        if ($account_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $account_id when calling create');
        }
        // parse inputs
        $resourcePath = "/v2.1/accounts/{accountId}/tab_definitions";
        $httpBody = $_tempBody ?? ''; // $_tempBody is the method argument, if present
        $queryParams = $headerParams = $formParams = [];
        $headerParams['Accept'] ??= $this->apiClient->selectHeaderAccept(['application/json']);
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);


        // path params
        if ($account_id !== null) {
            $resourcePath = self::updateResourcePath($resourcePath, "accountId", $account_id);
        }

        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);
        // body params
        $_tempBody = null;
        if (isset($tab_metadata)) {
            $_tempBody = $tab_metadata;
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires OAuth (access token)
        if (strlen($this->apiClient->getConfig()->getAccessToken()) !== 0) {
            $headerParams['Authorization'] = 'Bearer ' . $this->apiClient->getConfig()->getAccessToken();
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\DocuSign\eSign\Model\TabMetadata',
                '/v2.1/accounts/{accountId}/tab_definitions'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\DocuSign\eSign\Model\TabMetadata', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 201:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\DocuSign\eSign\Model\TabMetadata', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\DocuSign\eSign\Model\ErrorDetails', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation delete
     *
     * Deletes custom tab information.
     *
     * @param string $account_id The external account number (int) or account ID Guid.
     * @param string $custom_tab_id 
     * @throws ApiException on non-2xx response
     * @return mixed
     */
    public function delete($account_id, $custom_tab_id): mixed
    {
        list($response) = $this->deleteWithHttpInfo($account_id, $custom_tab_id);
        return $response;
    }

    /**
     * Operation deleteWithHttpInfo
     *
     * Deletes custom tab information.
     *
     * @param string $account_id The external account number (int) or account ID Guid.
     * @param string $custom_tab_id 
     * @throws ApiException on non-2xx response
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function deleteWithHttpInfo($account_id, $custom_tab_id): array
    {
        // verify the required parameter 'account_id' is set
        if ($account_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $account_id when calling delete');
        }
        // verify the required parameter 'custom_tab_id' is set
        if ($custom_tab_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $custom_tab_id when calling delete');
        }
        // parse inputs
        $resourcePath = "/v2.1/accounts/{accountId}/tab_definitions/{customTabId}";
        $httpBody = $_tempBody ?? ''; // $_tempBody is the method argument, if present
        $queryParams = $headerParams = $formParams = [];
        $headerParams['Accept'] ??= $this->apiClient->selectHeaderAccept(['application/json']);
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);


        // path params
        if ($account_id !== null) {
            $resourcePath = self::updateResourcePath($resourcePath, "accountId", $account_id);
        }
        // path params
        if ($custom_tab_id !== null) {
            $resourcePath = self::updateResourcePath($resourcePath, "customTabId", $custom_tab_id);
        }

        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);
        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires OAuth (access token)
        if (strlen($this->apiClient->getConfig()->getAccessToken()) !== 0) {
            $headerParams['Authorization'] = 'Bearer ' . $this->apiClient->getConfig()->getAccessToken();
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'DELETE',
                $queryParams,
                $httpBody,
                $headerParams,
                null,
                '/v2.1/accounts/{accountId}/tab_definitions/{customTabId}'
            );

            return [null, $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\DocuSign\eSign\Model\ErrorDetails', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation get
     *
     * Gets custom tab information.
     *
     * @param string $account_id The external account number (int) or account ID Guid.
     * @param string $custom_tab_id 
     * @throws ApiException on non-2xx response
     * @return \DocuSign\eSign\Model\TabMetadata
     */
    public function get($account_id, $custom_tab_id): \DocuSign\eSign\Model\TabMetadata
    {
        list($response) = $this->getWithHttpInfo($account_id, $custom_tab_id);
        return $response;
    }

    /**
     * Operation getWithHttpInfo
     *
     * Gets custom tab information.
     *
     * @param string $account_id The external account number (int) or account ID Guid.
     * @param string $custom_tab_id 
     * @throws ApiException on non-2xx response
     * @return array of \DocuSign\eSign\Model\TabMetadata, HTTP status code, HTTP response headers (array of strings)
     */
    public function getWithHttpInfo($account_id, $custom_tab_id): array
    {
        // verify the required parameter 'account_id' is set
        if ($account_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $account_id when calling get');
        }
        // verify the required parameter 'custom_tab_id' is set
        if ($custom_tab_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $custom_tab_id when calling get');
        }
        // parse inputs
        $resourcePath = "/v2.1/accounts/{accountId}/tab_definitions/{customTabId}";
        $httpBody = $_tempBody ?? ''; // $_tempBody is the method argument, if present
        $queryParams = $headerParams = $formParams = [];
        $headerParams['Accept'] ??= $this->apiClient->selectHeaderAccept(['application/json']);
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);


        // path params
        if ($account_id !== null) {
            $resourcePath = self::updateResourcePath($resourcePath, "accountId", $account_id);
        }
        // path params
        if ($custom_tab_id !== null) {
            $resourcePath = self::updateResourcePath($resourcePath, "customTabId", $custom_tab_id);
        }

        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);
        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires OAuth (access token)
        if (strlen($this->apiClient->getConfig()->getAccessToken()) !== 0) {
            $headerParams['Authorization'] = 'Bearer ' . $this->apiClient->getConfig()->getAccessToken();
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\DocuSign\eSign\Model\TabMetadata',
                '/v2.1/accounts/{accountId}/tab_definitions/{customTabId}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\DocuSign\eSign\Model\TabMetadata', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\DocuSign\eSign\Model\TabMetadata', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\DocuSign\eSign\Model\ErrorDetails', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation update
     *
     * Updates custom tab information.
     *
     * @param string $account_id The external account number (int) or account ID Guid.
     * @param string $custom_tab_id 
     * @param \DocuSign\eSign\Model\TabMetadata $tab_metadata  (optional)
     * @throws ApiException on non-2xx response
     * @return \DocuSign\eSign\Model\TabMetadata
     */
    public function update($account_id, $custom_tab_id, $tab_metadata = null): \DocuSign\eSign\Model\TabMetadata
    {
        list($response) = $this->updateWithHttpInfo($account_id, $custom_tab_id, $tab_metadata);
        return $response;
    }

    /**
     * Operation updateWithHttpInfo
     *
     * Updates custom tab information.
     *
     * @param string $account_id The external account number (int) or account ID Guid.
     * @param string $custom_tab_id 
     * @param \DocuSign\eSign\Model\TabMetadata $tab_metadata  (optional)
     * @throws ApiException on non-2xx response
     * @return array of \DocuSign\eSign\Model\TabMetadata, HTTP status code, HTTP response headers (array of strings)
     */
    public function updateWithHttpInfo($account_id, $custom_tab_id, $tab_metadata = null): array
    {
        // verify the required parameter 'account_id' is set
        if ($account_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $account_id when calling update');
        }
        // verify the required parameter 'custom_tab_id' is set
        if ($custom_tab_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $custom_tab_id when calling update');
        }
        // parse inputs
        $resourcePath = "/v2.1/accounts/{accountId}/tab_definitions/{customTabId}";
        $httpBody = $_tempBody ?? ''; // $_tempBody is the method argument, if present
        $queryParams = $headerParams = $formParams = [];
        $headerParams['Accept'] ??= $this->apiClient->selectHeaderAccept(['application/json']);
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);


        // path params
        if ($account_id !== null) {
            $resourcePath = self::updateResourcePath($resourcePath, "accountId", $account_id);
        }
        // path params
        if ($custom_tab_id !== null) {
            $resourcePath = self::updateResourcePath($resourcePath, "customTabId", $custom_tab_id);
        }

        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);
        // body params
        $_tempBody = null;
        if (isset($tab_metadata)) {
            $_tempBody = $tab_metadata;
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires OAuth (access token)
        if (strlen($this->apiClient->getConfig()->getAccessToken()) !== 0) {
            $headerParams['Authorization'] = 'Bearer ' . $this->apiClient->getConfig()->getAccessToken();
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'PUT',
                $queryParams,
                $httpBody,
                $headerParams,
                '\DocuSign\eSign\Model\TabMetadata',
                '/v2.1/accounts/{accountId}/tab_definitions/{customTabId}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\DocuSign\eSign\Model\TabMetadata', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\DocuSign\eSign\Model\TabMetadata', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\DocuSign\eSign\Model\ErrorDetails', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
}
