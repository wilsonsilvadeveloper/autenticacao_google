<?php
/*
 * Copyright 2023 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     https://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/*
 * GENERATED CODE WARNING
 * Generated by gapic-generator-php from the file
 * https://github.com/googleapis/googleapis/blob/master/google/cloud/compute/v1/compute.proto
 * Updates to the above are reflected here through a refresh process.
 */

namespace Google\Cloud\Compute\V1\Client\BaseClient;

use Google\ApiCore\ApiException;
use Google\ApiCore\CredentialsWrapper;
use Google\ApiCore\GapicClientTrait;
use Google\ApiCore\OperationResponse;
use Google\ApiCore\PagedListResponse;
use Google\ApiCore\RetrySettings;
use Google\ApiCore\Transport\TransportInterface;
use Google\ApiCore\ValidationException;
use Google\Auth\FetchAuthTokenInterface;
use Google\Cloud\Compute\V1\AddAssociationRegionNetworkFirewallPolicyRequest;
use Google\Cloud\Compute\V1\AddRuleRegionNetworkFirewallPolicyRequest;
use Google\Cloud\Compute\V1\CloneRulesRegionNetworkFirewallPolicyRequest;
use Google\Cloud\Compute\V1\DeleteRegionNetworkFirewallPolicyRequest;
use Google\Cloud\Compute\V1\FirewallPolicy;
use Google\Cloud\Compute\V1\FirewallPolicyAssociation;
use Google\Cloud\Compute\V1\FirewallPolicyRule;
use Google\Cloud\Compute\V1\GetAssociationRegionNetworkFirewallPolicyRequest;
use Google\Cloud\Compute\V1\GetEffectiveFirewallsRegionNetworkFirewallPolicyRequest;
use Google\Cloud\Compute\V1\GetIamPolicyRegionNetworkFirewallPolicyRequest;
use Google\Cloud\Compute\V1\GetRegionNetworkFirewallPolicyRequest;
use Google\Cloud\Compute\V1\GetRuleRegionNetworkFirewallPolicyRequest;
use Google\Cloud\Compute\V1\InsertRegionNetworkFirewallPolicyRequest;
use Google\Cloud\Compute\V1\ListRegionNetworkFirewallPoliciesRequest;
use Google\Cloud\Compute\V1\PatchRegionNetworkFirewallPolicyRequest;
use Google\Cloud\Compute\V1\PatchRuleRegionNetworkFirewallPolicyRequest;
use Google\Cloud\Compute\V1\Policy;
use Google\Cloud\Compute\V1\RegionNetworkFirewallPoliciesGetEffectiveFirewallsResponse;
use Google\Cloud\Compute\V1\RegionOperationsClient;
use Google\Cloud\Compute\V1\RemoveAssociationRegionNetworkFirewallPolicyRequest;
use Google\Cloud\Compute\V1\RemoveRuleRegionNetworkFirewallPolicyRequest;
use Google\Cloud\Compute\V1\SetIamPolicyRegionNetworkFirewallPolicyRequest;
use Google\Cloud\Compute\V1\TestIamPermissionsRegionNetworkFirewallPolicyRequest;
use Google\Cloud\Compute\V1\TestPermissionsResponse;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * Service Description: The RegionNetworkFirewallPolicies API.
 *
 * This class provides the ability to make remote calls to the backing service through method
 * calls that map to API methods.
 *
 * This class is currently experimental and may be subject to changes.
 *
 * @experimental
 *
 * @internal
 *
 * @method PromiseInterface addAssociationAsync(AddAssociationRegionNetworkFirewallPolicyRequest $request, array $optionalArgs = [])
 * @method PromiseInterface addRuleAsync(AddRuleRegionNetworkFirewallPolicyRequest $request, array $optionalArgs = [])
 * @method PromiseInterface cloneRulesAsync(CloneRulesRegionNetworkFirewallPolicyRequest $request, array $optionalArgs = [])
 * @method PromiseInterface deleteAsync(DeleteRegionNetworkFirewallPolicyRequest $request, array $optionalArgs = [])
 * @method PromiseInterface getAsync(GetRegionNetworkFirewallPolicyRequest $request, array $optionalArgs = [])
 * @method PromiseInterface getAssociationAsync(GetAssociationRegionNetworkFirewallPolicyRequest $request, array $optionalArgs = [])
 * @method PromiseInterface getEffectiveFirewallsAsync(GetEffectiveFirewallsRegionNetworkFirewallPolicyRequest $request, array $optionalArgs = [])
 * @method PromiseInterface getIamPolicyAsync(GetIamPolicyRegionNetworkFirewallPolicyRequest $request, array $optionalArgs = [])
 * @method PromiseInterface getRuleAsync(GetRuleRegionNetworkFirewallPolicyRequest $request, array $optionalArgs = [])
 * @method PromiseInterface insertAsync(InsertRegionNetworkFirewallPolicyRequest $request, array $optionalArgs = [])
 * @method PromiseInterface listAsync(ListRegionNetworkFirewallPoliciesRequest $request, array $optionalArgs = [])
 * @method PromiseInterface patchAsync(PatchRegionNetworkFirewallPolicyRequest $request, array $optionalArgs = [])
 * @method PromiseInterface patchRuleAsync(PatchRuleRegionNetworkFirewallPolicyRequest $request, array $optionalArgs = [])
 * @method PromiseInterface removeAssociationAsync(RemoveAssociationRegionNetworkFirewallPolicyRequest $request, array $optionalArgs = [])
 * @method PromiseInterface removeRuleAsync(RemoveRuleRegionNetworkFirewallPolicyRequest $request, array $optionalArgs = [])
 * @method PromiseInterface setIamPolicyAsync(SetIamPolicyRegionNetworkFirewallPolicyRequest $request, array $optionalArgs = [])
 * @method PromiseInterface testIamPermissionsAsync(TestIamPermissionsRegionNetworkFirewallPolicyRequest $request, array $optionalArgs = [])
 */
abstract class RegionNetworkFirewallPoliciesBaseClient
{
    use GapicClientTrait;

    /** The name of the service. */
    private const SERVICE_NAME = 'google.cloud.compute.v1.RegionNetworkFirewallPolicies';

    /** The default address of the service. */
    private const SERVICE_ADDRESS = 'compute.googleapis.com';

    /** The default port of the service. */
    private const DEFAULT_SERVICE_PORT = 443;

    /** The name of the code generator, to be included in the agent header. */
    private const CODEGEN_NAME = 'gapic';

    /** The default scopes required by the service. */
    public static $serviceScopes = [
        'https://www.googleapis.com/auth/compute',
        'https://www.googleapis.com/auth/cloud-platform',
    ];

    private $operationsClient;

    private static function getClientDefaults()
    {
        return [
            'serviceName' => self::SERVICE_NAME,
            'apiEndpoint' => self::SERVICE_ADDRESS . ':' . self::DEFAULT_SERVICE_PORT,
            'clientConfig' => __DIR__ . '/../../resources/region_network_firewall_policies_client_config.json',
            'descriptorsConfigPath' => __DIR__ . '/../../resources/region_network_firewall_policies_descriptor_config.php',
            'credentialsConfig' => [
                'defaultScopes' => self::$serviceScopes,
                'useJwtAccessWithScope' => false,
            ],
            'transportConfig' => [
                'rest' => [
                    'restClientConfigPath' => __DIR__ . '/../../resources/region_network_firewall_policies_rest_client_config.php',
                ],
            ],
            'operationsClientClass' => RegionOperationsClient::class,
        ];
    }

    /** Implements GapicClientTrait::defaultTransport. */
    private static function defaultTransport()
    {
        return 'rest';
    }

    /** Implements GapicClientTrait::getSupportedTransports. */
    private static function getSupportedTransports()
    {
        return [
            'rest',
        ];
    }

    /**
     * Return an RegionOperationsClient object with the same endpoint as $this.
     *
     * @return RegionOperationsClient
     */
    public function getOperationsClient()
    {
        return $this->operationsClient;
    }

    /** Return the default longrunning operation descriptor config. */
    private function getDefaultOperationDescriptor()
    {
        return [
            'additionalArgumentMethods' => [
                'getProject',
                'getRegion',
            ],
            'getOperationMethod' => 'get',
            'cancelOperationMethod' => null,
            'deleteOperationMethod' => 'delete',
            'operationErrorCodeMethod' => 'getHttpErrorStatusCode',
            'operationErrorMessageMethod' => 'getHttpErrorMessage',
            'operationNameMethod' => 'getName',
            'operationStatusMethod' => 'getStatus',
            'operationStatusDoneValue' => \Google\Cloud\Compute\V1\Operation\Status::DONE,
        ];
    }

    /**
     * Resume an existing long running operation that was previously started by a long
     * running API method. If $methodName is not provided, or does not match a long
     * running API method, then the operation can still be resumed, but the
     * OperationResponse object will not deserialize the final response.
     *
     * @param string $operationName The name of the long running operation
     * @param string $methodName    The name of the method used to start the operation
     *
     * @return OperationResponse
     */
    public function resumeOperation($operationName, $methodName = null)
    {
        $options = isset($this->descriptors[$methodName]['longRunning']) ? $this->descriptors[$methodName]['longRunning'] : $this->getDefaultOperationDescriptor();
        $operation = new OperationResponse($operationName, $this->getOperationsClient(), $options);
        $operation->reload();
        return $operation;
    }

    /**
     * Constructor.
     *
     * @param array $options {
     *     Optional. Options for configuring the service API wrapper.
     *
     *     @type string $apiEndpoint
     *           The address of the API remote host. May optionally include the port, formatted
     *           as "<uri>:<port>". Default 'compute.googleapis.com:443'.
     *     @type string|array|FetchAuthTokenInterface|CredentialsWrapper $credentials
     *           The credentials to be used by the client to authorize API calls. This option
     *           accepts either a path to a credentials file, or a decoded credentials file as a
     *           PHP array.
     *           *Advanced usage*: In addition, this option can also accept a pre-constructed
     *           {@see \Google\Auth\FetchAuthTokenInterface} object or
     *           {@see \Google\ApiCore\CredentialsWrapper} object. Note that when one of these
     *           objects are provided, any settings in $credentialsConfig will be ignored.
     *     @type array $credentialsConfig
     *           Options used to configure credentials, including auth token caching, for the
     *           client. For a full list of supporting configuration options, see
     *           {@see \Google\ApiCore\CredentialsWrapper::build()} .
     *     @type bool $disableRetries
     *           Determines whether or not retries defined by the client configuration should be
     *           disabled. Defaults to `false`.
     *     @type string|array $clientConfig
     *           Client method configuration, including retry settings. This option can be either
     *           a path to a JSON file, or a PHP array containing the decoded JSON data. By
     *           default this settings points to the default client config file, which is
     *           provided in the resources folder.
     *     @type string|TransportInterface $transport
     *           The transport used for executing network requests. At the moment, supports only
     *           `rest`. *Advanced usage*: Additionally, it is possible to pass in an already
     *           instantiated {@see \Google\ApiCore\Transport\TransportInterface} object. Note
     *           that when this object is provided, any settings in $transportConfig, and any
     *           $apiEndpoint setting, will be ignored.
     *     @type array $transportConfig
     *           Configuration options that will be used to construct the transport. Options for
     *           each supported transport type should be passed in a key for that transport. For
     *           example:
     *           $transportConfig = [
     *               'rest' => [...],
     *           ];
     *           See the {@see \Google\ApiCore\Transport\RestTransport::build()} method for the
     *           supported options.
     *     @type callable $clientCertSource
     *           A callable which returns the client cert as a string. This can be used to
     *           provide a certificate and private key to the transport layer for mTLS.
     * }
     *
     * @throws ValidationException
     */
    public function __construct(array $options = [])
    {
        $clientOptions = $this->buildClientOptions($options);
        $this->setClientOptions($clientOptions);
        $this->operationsClient = $this->createOperationsClient($clientOptions);
    }

    /** Handles execution of the async variants for each documented method. */
    public function __call($method, $args)
    {
        if (substr($method, -5) !== 'Async') {
            trigger_error('Call to undefined method ' . __CLASS__ . "::$method()", E_USER_ERROR);
        }

        array_unshift($args, substr($method, 0, -5));
        return call_user_func_array([$this, 'startAsyncCall'], $args);
    }

    /**
     * Inserts an association for the specified network firewall policy.
     *
     * The async variant is {@see self::addAssociationAsync()} .
     *
     * @param AddAssociationRegionNetworkFirewallPolicyRequest $request     A request to house fields associated with the call.
     * @param array                                            $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return OperationResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function addAssociation(AddAssociationRegionNetworkFirewallPolicyRequest $request, array $callOptions = []): OperationResponse
    {
        return $this->startApiCall('AddAssociation', $request, $callOptions)->wait();
    }

    /**
     * Inserts a rule into a network firewall policy.
     *
     * The async variant is {@see self::addRuleAsync()} .
     *
     * @param AddRuleRegionNetworkFirewallPolicyRequest $request     A request to house fields associated with the call.
     * @param array                                     $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return OperationResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function addRule(AddRuleRegionNetworkFirewallPolicyRequest $request, array $callOptions = []): OperationResponse
    {
        return $this->startApiCall('AddRule', $request, $callOptions)->wait();
    }

    /**
     * Copies rules to the specified network firewall policy.
     *
     * The async variant is {@see self::cloneRulesAsync()} .
     *
     * @param CloneRulesRegionNetworkFirewallPolicyRequest $request     A request to house fields associated with the call.
     * @param array                                        $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return OperationResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function cloneRules(CloneRulesRegionNetworkFirewallPolicyRequest $request, array $callOptions = []): OperationResponse
    {
        return $this->startApiCall('CloneRules', $request, $callOptions)->wait();
    }

    /**
     * Deletes the specified network firewall policy.
     *
     * The async variant is {@see self::deleteAsync()} .
     *
     * @param DeleteRegionNetworkFirewallPolicyRequest $request     A request to house fields associated with the call.
     * @param array                                    $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return OperationResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function delete(DeleteRegionNetworkFirewallPolicyRequest $request, array $callOptions = []): OperationResponse
    {
        return $this->startApiCall('Delete', $request, $callOptions)->wait();
    }

    /**
     * Returns the specified network firewall policy.
     *
     * The async variant is {@see self::getAsync()} .
     *
     * @param GetRegionNetworkFirewallPolicyRequest $request     A request to house fields associated with the call.
     * @param array                                 $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return FirewallPolicy
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function get(GetRegionNetworkFirewallPolicyRequest $request, array $callOptions = []): FirewallPolicy
    {
        return $this->startApiCall('Get', $request, $callOptions)->wait();
    }

    /**
     * Gets an association with the specified name.
     *
     * The async variant is {@see self::getAssociationAsync()} .
     *
     * @param GetAssociationRegionNetworkFirewallPolicyRequest $request     A request to house fields associated with the call.
     * @param array                                            $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return FirewallPolicyAssociation
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function getAssociation(GetAssociationRegionNetworkFirewallPolicyRequest $request, array $callOptions = []): FirewallPolicyAssociation
    {
        return $this->startApiCall('GetAssociation', $request, $callOptions)->wait();
    }

    /**
     * Returns the effective firewalls on a given network.
     *
     * The async variant is {@see self::getEffectiveFirewallsAsync()} .
     *
     * @param GetEffectiveFirewallsRegionNetworkFirewallPolicyRequest $request     A request to house fields associated with the call.
     * @param array                                                   $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return RegionNetworkFirewallPoliciesGetEffectiveFirewallsResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function getEffectiveFirewalls(GetEffectiveFirewallsRegionNetworkFirewallPolicyRequest $request, array $callOptions = []): RegionNetworkFirewallPoliciesGetEffectiveFirewallsResponse
    {
        return $this->startApiCall('GetEffectiveFirewalls', $request, $callOptions)->wait();
    }

    /**
     * Gets the access control policy for a resource. May be empty if no such policy or resource exists.
     *
     * The async variant is {@see self::getIamPolicyAsync()} .
     *
     * @param GetIamPolicyRegionNetworkFirewallPolicyRequest $request     A request to house fields associated with the call.
     * @param array                                          $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return Policy
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function getIamPolicy(GetIamPolicyRegionNetworkFirewallPolicyRequest $request, array $callOptions = []): Policy
    {
        return $this->startApiCall('GetIamPolicy', $request, $callOptions)->wait();
    }

    /**
     * Gets a rule of the specified priority.
     *
     * The async variant is {@see self::getRuleAsync()} .
     *
     * @param GetRuleRegionNetworkFirewallPolicyRequest $request     A request to house fields associated with the call.
     * @param array                                     $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return FirewallPolicyRule
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function getRule(GetRuleRegionNetworkFirewallPolicyRequest $request, array $callOptions = []): FirewallPolicyRule
    {
        return $this->startApiCall('GetRule', $request, $callOptions)->wait();
    }

    /**
     * Creates a new network firewall policy in the specified project and region.
     *
     * The async variant is {@see self::insertAsync()} .
     *
     * @param InsertRegionNetworkFirewallPolicyRequest $request     A request to house fields associated with the call.
     * @param array                                    $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return OperationResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function insert(InsertRegionNetworkFirewallPolicyRequest $request, array $callOptions = []): OperationResponse
    {
        return $this->startApiCall('Insert', $request, $callOptions)->wait();
    }

    /**
     * Lists all the network firewall policies that have been configured for the specified project in the given region.
     *
     * The async variant is {@see self::listAsync()} .
     *
     * @param ListRegionNetworkFirewallPoliciesRequest $request     A request to house fields associated with the call.
     * @param array                                    $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return PagedListResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function list(ListRegionNetworkFirewallPoliciesRequest $request, array $callOptions = []): PagedListResponse
    {
        return $this->startApiCall('List', $request, $callOptions);
    }

    /**
     * Patches the specified network firewall policy.
     *
     * The async variant is {@see self::patchAsync()} .
     *
     * @param PatchRegionNetworkFirewallPolicyRequest $request     A request to house fields associated with the call.
     * @param array                                   $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return OperationResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function patch(PatchRegionNetworkFirewallPolicyRequest $request, array $callOptions = []): OperationResponse
    {
        return $this->startApiCall('Patch', $request, $callOptions)->wait();
    }

    /**
     * Patches a rule of the specified priority.
     *
     * The async variant is {@see self::patchRuleAsync()} .
     *
     * @param PatchRuleRegionNetworkFirewallPolicyRequest $request     A request to house fields associated with the call.
     * @param array                                       $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return OperationResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function patchRule(PatchRuleRegionNetworkFirewallPolicyRequest $request, array $callOptions = []): OperationResponse
    {
        return $this->startApiCall('PatchRule', $request, $callOptions)->wait();
    }

    /**
     * Removes an association for the specified network firewall policy.
     *
     * The async variant is {@see self::removeAssociationAsync()} .
     *
     * @param RemoveAssociationRegionNetworkFirewallPolicyRequest $request     A request to house fields associated with the call.
     * @param array                                               $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return OperationResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function removeAssociation(RemoveAssociationRegionNetworkFirewallPolicyRequest $request, array $callOptions = []): OperationResponse
    {
        return $this->startApiCall('RemoveAssociation', $request, $callOptions)->wait();
    }

    /**
     * Deletes a rule of the specified priority.
     *
     * The async variant is {@see self::removeRuleAsync()} .
     *
     * @param RemoveRuleRegionNetworkFirewallPolicyRequest $request     A request to house fields associated with the call.
     * @param array                                        $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return OperationResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function removeRule(RemoveRuleRegionNetworkFirewallPolicyRequest $request, array $callOptions = []): OperationResponse
    {
        return $this->startApiCall('RemoveRule', $request, $callOptions)->wait();
    }

    /**
     * Sets the access control policy on the specified resource. Replaces any existing policy.
     *
     * The async variant is {@see self::setIamPolicyAsync()} .
     *
     * @param SetIamPolicyRegionNetworkFirewallPolicyRequest $request     A request to house fields associated with the call.
     * @param array                                          $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return Policy
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function setIamPolicy(SetIamPolicyRegionNetworkFirewallPolicyRequest $request, array $callOptions = []): Policy
    {
        return $this->startApiCall('SetIamPolicy', $request, $callOptions)->wait();
    }

    /**
     * Returns permissions that a caller has on the specified resource.
     *
     * The async variant is {@see self::testIamPermissionsAsync()} .
     *
     * @param TestIamPermissionsRegionNetworkFirewallPolicyRequest $request     A request to house fields associated with the call.
     * @param array                                                $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return TestPermissionsResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function testIamPermissions(TestIamPermissionsRegionNetworkFirewallPolicyRequest $request, array $callOptions = []): TestPermissionsResponse
    {
        return $this->startApiCall('TestIamPermissions', $request, $callOptions)->wait();
    }
}