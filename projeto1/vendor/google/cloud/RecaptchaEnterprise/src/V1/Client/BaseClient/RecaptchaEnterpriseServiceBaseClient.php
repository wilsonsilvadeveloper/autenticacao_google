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
 * https://github.com/googleapis/googleapis/blob/master/google/cloud/recaptchaenterprise/v1/recaptchaenterprise.proto
 * Updates to the above are reflected here through a refresh process.
 */

namespace Google\Cloud\RecaptchaEnterprise\V1\Client\BaseClient;

use Google\ApiCore\ApiException;
use Google\ApiCore\CredentialsWrapper;
use Google\ApiCore\GapicClientTrait;
use Google\ApiCore\PagedListResponse;
use Google\ApiCore\ResourceHelperTrait;
use Google\ApiCore\RetrySettings;
use Google\ApiCore\Transport\TransportInterface;
use Google\ApiCore\ValidationException;
use Google\Auth\FetchAuthTokenInterface;
use Google\Cloud\RecaptchaEnterprise\V1\AnnotateAssessmentRequest;
use Google\Cloud\RecaptchaEnterprise\V1\AnnotateAssessmentResponse;
use Google\Cloud\RecaptchaEnterprise\V1\Assessment;
use Google\Cloud\RecaptchaEnterprise\V1\CreateAssessmentRequest;
use Google\Cloud\RecaptchaEnterprise\V1\CreateKeyRequest;
use Google\Cloud\RecaptchaEnterprise\V1\DeleteKeyRequest;
use Google\Cloud\RecaptchaEnterprise\V1\GetKeyRequest;
use Google\Cloud\RecaptchaEnterprise\V1\GetMetricsRequest;
use Google\Cloud\RecaptchaEnterprise\V1\Key;
use Google\Cloud\RecaptchaEnterprise\V1\ListKeysRequest;
use Google\Cloud\RecaptchaEnterprise\V1\ListRelatedAccountGroupMembershipsRequest;
use Google\Cloud\RecaptchaEnterprise\V1\ListRelatedAccountGroupsRequest;
use Google\Cloud\RecaptchaEnterprise\V1\Metrics;
use Google\Cloud\RecaptchaEnterprise\V1\MigrateKeyRequest;
use Google\Cloud\RecaptchaEnterprise\V1\RetrieveLegacySecretKeyRequest;
use Google\Cloud\RecaptchaEnterprise\V1\RetrieveLegacySecretKeyResponse;
use Google\Cloud\RecaptchaEnterprise\V1\SearchRelatedAccountGroupMembershipsRequest;
use Google\Cloud\RecaptchaEnterprise\V1\UpdateKeyRequest;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * Service Description: Service to determine the likelihood an event is legitimate.
 *
 * This class provides the ability to make remote calls to the backing service through method
 * calls that map to API methods.
 *
 * Many parameters require resource names to be formatted in a particular way. To
 * assist with these names, this class includes a format method for each type of
 * name, and additionally a parseName method to extract the individual identifiers
 * contained within formatted names that are returned by the API.
 *
 * This class is currently experimental and may be subject to changes.
 *
 * @experimental
 *
 * @internal
 *
 * @method PromiseInterface annotateAssessmentAsync(AnnotateAssessmentRequest $request, array $optionalArgs = [])
 * @method PromiseInterface createAssessmentAsync(CreateAssessmentRequest $request, array $optionalArgs = [])
 * @method PromiseInterface createKeyAsync(CreateKeyRequest $request, array $optionalArgs = [])
 * @method PromiseInterface deleteKeyAsync(DeleteKeyRequest $request, array $optionalArgs = [])
 * @method PromiseInterface getKeyAsync(GetKeyRequest $request, array $optionalArgs = [])
 * @method PromiseInterface getMetricsAsync(GetMetricsRequest $request, array $optionalArgs = [])
 * @method PromiseInterface listKeysAsync(ListKeysRequest $request, array $optionalArgs = [])
 * @method PromiseInterface listRelatedAccountGroupMembershipsAsync(ListRelatedAccountGroupMembershipsRequest $request, array $optionalArgs = [])
 * @method PromiseInterface listRelatedAccountGroupsAsync(ListRelatedAccountGroupsRequest $request, array $optionalArgs = [])
 * @method PromiseInterface migrateKeyAsync(MigrateKeyRequest $request, array $optionalArgs = [])
 * @method PromiseInterface retrieveLegacySecretKeyAsync(RetrieveLegacySecretKeyRequest $request, array $optionalArgs = [])
 * @method PromiseInterface searchRelatedAccountGroupMembershipsAsync(SearchRelatedAccountGroupMembershipsRequest $request, array $optionalArgs = [])
 * @method PromiseInterface updateKeyAsync(UpdateKeyRequest $request, array $optionalArgs = [])
 */
abstract class RecaptchaEnterpriseServiceBaseClient
{
    use GapicClientTrait;
    use ResourceHelperTrait;

    /** The name of the service. */
    private const SERVICE_NAME = 'google.cloud.recaptchaenterprise.v1.RecaptchaEnterpriseService';

    /** The default address of the service. */
    private const SERVICE_ADDRESS = 'recaptchaenterprise.googleapis.com';

    /** The default port of the service. */
    private const DEFAULT_SERVICE_PORT = 443;

    /** The name of the code generator, to be included in the agent header. */
    private const CODEGEN_NAME = 'gapic';

    /** The default scopes required by the service. */
    public static $serviceScopes = [
        'https://www.googleapis.com/auth/cloud-platform',
    ];

    private static function getClientDefaults()
    {
        return [
            'serviceName' => self::SERVICE_NAME,
            'apiEndpoint' => self::SERVICE_ADDRESS . ':' . self::DEFAULT_SERVICE_PORT,
            'clientConfig' => __DIR__ . '/../../resources/recaptcha_enterprise_service_client_config.json',
            'descriptorsConfigPath' => __DIR__ . '/../../resources/recaptcha_enterprise_service_descriptor_config.php',
            'gcpApiConfigPath' => __DIR__ . '/../../resources/recaptcha_enterprise_service_grpc_config.json',
            'credentialsConfig' => [
                'defaultScopes' => self::$serviceScopes,
            ],
            'transportConfig' => [
                'rest' => [
                    'restClientConfigPath' => __DIR__ . '/../../resources/recaptcha_enterprise_service_rest_client_config.php',
                ],
            ],
        ];
    }

    /**
     * Formats a string containing the fully-qualified path to represent a assessment
     * resource.
     *
     * @param string $project
     * @param string $assessment
     *
     * @return string The formatted assessment resource.
     */
    public static function assessmentName(string $project, string $assessment): string
    {
        return self::getPathTemplate('assessment')->render([
            'project' => $project,
            'assessment' => $assessment,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a key
     * resource.
     *
     * @param string $project
     * @param string $key
     *
     * @return string The formatted key resource.
     */
    public static function keyName(string $project, string $key): string
    {
        return self::getPathTemplate('key')->render([
            'project' => $project,
            'key' => $key,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a metrics
     * resource.
     *
     * @param string $project
     * @param string $key
     *
     * @return string The formatted metrics resource.
     */
    public static function metricsName(string $project, string $key): string
    {
        return self::getPathTemplate('metrics')->render([
            'project' => $project,
            'key' => $key,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a project
     * resource.
     *
     * @param string $project
     *
     * @return string The formatted project resource.
     */
    public static function projectName(string $project): string
    {
        return self::getPathTemplate('project')->render([
            'project' => $project,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a
     * related_account_group resource.
     *
     * @param string $project
     * @param string $relatedaccountgroup
     *
     * @return string The formatted related_account_group resource.
     */
    public static function relatedAccountGroupName(string $project, string $relatedaccountgroup): string
    {
        return self::getPathTemplate('relatedAccountGroup')->render([
            'project' => $project,
            'relatedaccountgroup' => $relatedaccountgroup,
        ]);
    }

    /**
     * Parses a formatted name string and returns an associative array of the components in the name.
     * The following name formats are supported:
     * Template: Pattern
     * - assessment: projects/{project}/assessments/{assessment}
     * - key: projects/{project}/keys/{key}
     * - metrics: projects/{project}/keys/{key}/metrics
     * - project: projects/{project}
     * - relatedAccountGroup: projects/{project}/relatedaccountgroups/{relatedaccountgroup}
     *
     * The optional $template argument can be supplied to specify a particular pattern,
     * and must match one of the templates listed above. If no $template argument is
     * provided, or if the $template argument does not match one of the templates
     * listed, then parseName will check each of the supported templates, and return
     * the first match.
     *
     * @param string $formattedName The formatted name string
     * @param string $template      Optional name of template to match
     *
     * @return array An associative array from name component IDs to component values.
     *
     * @throws ValidationException If $formattedName could not be matched.
     */
    public static function parseName(string $formattedName, string $template = null): array
    {
        return self::parseFormattedName($formattedName, $template);
    }

    /**
     * Constructor.
     *
     * @param array $options {
     *     Optional. Options for configuring the service API wrapper.
     *
     *     @type string $apiEndpoint
     *           The address of the API remote host. May optionally include the port, formatted
     *           as "<uri>:<port>". Default 'recaptchaenterprise.googleapis.com:443'.
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
     *           The transport used for executing network requests. May be either the string
     *           `rest` or `grpc`. Defaults to `grpc` if gRPC support is detected on the system.
     *           *Advanced usage*: Additionally, it is possible to pass in an already
     *           instantiated {@see \Google\ApiCore\Transport\TransportInterface} object. Note
     *           that when this object is provided, any settings in $transportConfig, and any
     *           $apiEndpoint setting, will be ignored.
     *     @type array $transportConfig
     *           Configuration options that will be used to construct the transport. Options for
     *           each supported transport type should be passed in a key for that transport. For
     *           example:
     *           $transportConfig = [
     *               'grpc' => [...],
     *               'rest' => [...],
     *           ];
     *           See the {@see \Google\ApiCore\Transport\GrpcTransport::build()} and
     *           {@see \Google\ApiCore\Transport\RestTransport::build()} methods for the
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
     * Annotates a previously created Assessment to provide additional information
     * on whether the event turned out to be authentic or fraudulent.
     *
     * The async variant is {@see self::annotateAssessmentAsync()} .
     *
     * @param AnnotateAssessmentRequest $request     A request to house fields associated with the call.
     * @param array                     $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return AnnotateAssessmentResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function annotateAssessment(AnnotateAssessmentRequest $request, array $callOptions = []): AnnotateAssessmentResponse
    {
        return $this->startApiCall('AnnotateAssessment', $request, $callOptions)->wait();
    }

    /**
     * Creates an Assessment of the likelihood an event is legitimate.
     *
     * The async variant is {@see self::createAssessmentAsync()} .
     *
     * @param CreateAssessmentRequest $request     A request to house fields associated with the call.
     * @param array                   $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return Assessment
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function createAssessment(CreateAssessmentRequest $request, array $callOptions = []): Assessment
    {
        return $this->startApiCall('CreateAssessment', $request, $callOptions)->wait();
    }

    /**
     * Creates a new reCAPTCHA Enterprise key.
     *
     * The async variant is {@see self::createKeyAsync()} .
     *
     * @param CreateKeyRequest $request     A request to house fields associated with the call.
     * @param array            $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return Key
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function createKey(CreateKeyRequest $request, array $callOptions = []): Key
    {
        return $this->startApiCall('CreateKey', $request, $callOptions)->wait();
    }

    /**
     * Deletes the specified key.
     *
     * The async variant is {@see self::deleteKeyAsync()} .
     *
     * @param DeleteKeyRequest $request     A request to house fields associated with the call.
     * @param array            $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function deleteKey(DeleteKeyRequest $request, array $callOptions = []): void
    {
        $this->startApiCall('DeleteKey', $request, $callOptions)->wait();
    }

    /**
     * Returns the specified key.
     *
     * The async variant is {@see self::getKeyAsync()} .
     *
     * @param GetKeyRequest $request     A request to house fields associated with the call.
     * @param array         $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return Key
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function getKey(GetKeyRequest $request, array $callOptions = []): Key
    {
        return $this->startApiCall('GetKey', $request, $callOptions)->wait();
    }

    /**
     * Get some aggregated metrics for a Key. This data can be used to build
     * dashboards.
     *
     * The async variant is {@see self::getMetricsAsync()} .
     *
     * @param GetMetricsRequest $request     A request to house fields associated with the call.
     * @param array             $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return Metrics
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function getMetrics(GetMetricsRequest $request, array $callOptions = []): Metrics
    {
        return $this->startApiCall('GetMetrics', $request, $callOptions)->wait();
    }

    /**
     * Returns the list of all keys that belong to a project.
     *
     * The async variant is {@see self::listKeysAsync()} .
     *
     * @param ListKeysRequest $request     A request to house fields associated with the call.
     * @param array           $callOptions {
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
    public function listKeys(ListKeysRequest $request, array $callOptions = []): PagedListResponse
    {
        return $this->startApiCall('ListKeys', $request, $callOptions);
    }

    /**
     * Get memberships in a group of related accounts.
     *
     * The async variant is {@see self::listRelatedAccountGroupMembershipsAsync()} .
     *
     * @param ListRelatedAccountGroupMembershipsRequest $request     A request to house fields associated with the call.
     * @param array                                     $callOptions {
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
    public function listRelatedAccountGroupMemberships(ListRelatedAccountGroupMembershipsRequest $request, array $callOptions = []): PagedListResponse
    {
        return $this->startApiCall('ListRelatedAccountGroupMemberships', $request, $callOptions);
    }

    /**
     * List groups of related accounts.
     *
     * The async variant is {@see self::listRelatedAccountGroupsAsync()} .
     *
     * @param ListRelatedAccountGroupsRequest $request     A request to house fields associated with the call.
     * @param array                           $callOptions {
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
    public function listRelatedAccountGroups(ListRelatedAccountGroupsRequest $request, array $callOptions = []): PagedListResponse
    {
        return $this->startApiCall('ListRelatedAccountGroups', $request, $callOptions);
    }

    /**
     * Migrates an existing key from reCAPTCHA to reCAPTCHA Enterprise.
     * Once a key is migrated, it can be used from either product. SiteVerify
     * requests are billed as CreateAssessment calls. You must be
     * authenticated as one of the current owners of the reCAPTCHA Site Key, and
     * your user must have the reCAPTCHA Enterprise Admin IAM role in the
     * destination project.
     *
     * The async variant is {@see self::migrateKeyAsync()} .
     *
     * @param MigrateKeyRequest $request     A request to house fields associated with the call.
     * @param array             $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return Key
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function migrateKey(MigrateKeyRequest $request, array $callOptions = []): Key
    {
        return $this->startApiCall('MigrateKey', $request, $callOptions)->wait();
    }

    /**
     * Returns the secret key related to the specified public key.
     * You must use the legacy secret key only in a 3rd party integration with
     * legacy reCAPTCHA.
     *
     * The async variant is {@see self::retrieveLegacySecretKeyAsync()} .
     *
     * @param RetrieveLegacySecretKeyRequest $request     A request to house fields associated with the call.
     * @param array                          $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return RetrieveLegacySecretKeyResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function retrieveLegacySecretKey(RetrieveLegacySecretKeyRequest $request, array $callOptions = []): RetrieveLegacySecretKeyResponse
    {
        return $this->startApiCall('RetrieveLegacySecretKey', $request, $callOptions)->wait();
    }

    /**
     * Search group memberships related to a given account.
     *
     * The async variant is {@see self::searchRelatedAccountGroupMembershipsAsync()} .
     *
     * @param SearchRelatedAccountGroupMembershipsRequest $request     A request to house fields associated with the call.
     * @param array                                       $callOptions {
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
    public function searchRelatedAccountGroupMemberships(SearchRelatedAccountGroupMembershipsRequest $request, array $callOptions = []): PagedListResponse
    {
        return $this->startApiCall('SearchRelatedAccountGroupMemberships', $request, $callOptions);
    }

    /**
     * Updates the specified key.
     *
     * The async variant is {@see self::updateKeyAsync()} .
     *
     * @param UpdateKeyRequest $request     A request to house fields associated with the call.
     * @param array            $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return Key
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function updateKey(UpdateKeyRequest $request, array $callOptions = []): Key
    {
        return $this->startApiCall('UpdateKey', $request, $callOptions)->wait();
    }
}
