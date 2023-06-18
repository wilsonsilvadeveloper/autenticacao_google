<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/certificatemanager/v1/certificate_manager.proto

namespace Google\Cloud\CertificateManager\V1\Certificate;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Configuration and state of a Managed Certificate.
 * Certificate Manager provisions and renews Managed Certificates
 * automatically, for as long as it's authorized to do so.
 *
 * Generated from protobuf message <code>google.cloud.certificatemanager.v1.Certificate.ManagedCertificate</code>
 */
class ManagedCertificate extends \Google\Protobuf\Internal\Message
{
    /**
     * Immutable. The domains for which a managed SSL certificate will be
     * generated. Wildcard domains are only supported with DNS challenge
     * resolution.
     *
     * Generated from protobuf field <code>repeated string domains = 1 [(.google.api.field_behavior) = IMMUTABLE];</code>
     */
    private $domains;
    /**
     * Immutable. Authorizations that will be used for performing domain
     * authorization.
     *
     * Generated from protobuf field <code>repeated string dns_authorizations = 2 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     */
    private $dns_authorizations;
    /**
     * Immutable. The resource name for a
     * [CertificateIssuanceConfig][google.cloud.certificatemanager.v1.CertificateIssuanceConfig]
     * used to configure private PKI certificates in the format
     * `projects/&#42;&#47;locations/&#42;&#47;certificateIssuanceConfigs/&#42;`.
     * If this field is not set, the certificates will instead be publicly
     * signed as documented at
     * https://cloud.google.com/load-balancing/docs/ssl-certificates/google-managed-certs#caa.
     *
     * Generated from protobuf field <code>string issuance_config = 6 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     */
    private $issuance_config = '';
    /**
     * Output only. State of the managed certificate resource.
     *
     * Generated from protobuf field <code>.google.cloud.certificatemanager.v1.Certificate.ManagedCertificate.State state = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $state = 0;
    /**
     * Output only. Information about issues with provisioning a Managed
     * Certificate.
     *
     * Generated from protobuf field <code>.google.cloud.certificatemanager.v1.Certificate.ManagedCertificate.ProvisioningIssue provisioning_issue = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $provisioning_issue = null;
    /**
     * Output only. Detailed state of the latest authorization attempt for each
     * domain specified for managed certificate resource.
     *
     * Generated from protobuf field <code>repeated .google.cloud.certificatemanager.v1.Certificate.ManagedCertificate.AuthorizationAttemptInfo authorization_attempt_info = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $authorization_attempt_info;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $domains
     *           Immutable. The domains for which a managed SSL certificate will be
     *           generated. Wildcard domains are only supported with DNS challenge
     *           resolution.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $dns_authorizations
     *           Immutable. Authorizations that will be used for performing domain
     *           authorization.
     *     @type string $issuance_config
     *           Immutable. The resource name for a
     *           [CertificateIssuanceConfig][google.cloud.certificatemanager.v1.CertificateIssuanceConfig]
     *           used to configure private PKI certificates in the format
     *           `projects/&#42;&#47;locations/&#42;&#47;certificateIssuanceConfigs/&#42;`.
     *           If this field is not set, the certificates will instead be publicly
     *           signed as documented at
     *           https://cloud.google.com/load-balancing/docs/ssl-certificates/google-managed-certs#caa.
     *     @type int $state
     *           Output only. State of the managed certificate resource.
     *     @type \Google\Cloud\CertificateManager\V1\Certificate\ManagedCertificate\ProvisioningIssue $provisioning_issue
     *           Output only. Information about issues with provisioning a Managed
     *           Certificate.
     *     @type array<\Google\Cloud\CertificateManager\V1\Certificate\ManagedCertificate\AuthorizationAttemptInfo>|\Google\Protobuf\Internal\RepeatedField $authorization_attempt_info
     *           Output only. Detailed state of the latest authorization attempt for each
     *           domain specified for managed certificate resource.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Certificatemanager\V1\CertificateManager::initOnce();
        parent::__construct($data);
    }

    /**
     * Immutable. The domains for which a managed SSL certificate will be
     * generated. Wildcard domains are only supported with DNS challenge
     * resolution.
     *
     * Generated from protobuf field <code>repeated string domains = 1 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getDomains()
    {
        return $this->domains;
    }

    /**
     * Immutable. The domains for which a managed SSL certificate will be
     * generated. Wildcard domains are only supported with DNS challenge
     * resolution.
     *
     * Generated from protobuf field <code>repeated string domains = 1 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setDomains($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->domains = $arr;

        return $this;
    }

    /**
     * Immutable. Authorizations that will be used for performing domain
     * authorization.
     *
     * Generated from protobuf field <code>repeated string dns_authorizations = 2 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getDnsAuthorizations()
    {
        return $this->dns_authorizations;
    }

    /**
     * Immutable. Authorizations that will be used for performing domain
     * authorization.
     *
     * Generated from protobuf field <code>repeated string dns_authorizations = 2 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setDnsAuthorizations($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->dns_authorizations = $arr;

        return $this;
    }

    /**
     * Immutable. The resource name for a
     * [CertificateIssuanceConfig][google.cloud.certificatemanager.v1.CertificateIssuanceConfig]
     * used to configure private PKI certificates in the format
     * `projects/&#42;&#47;locations/&#42;&#47;certificateIssuanceConfigs/&#42;`.
     * If this field is not set, the certificates will instead be publicly
     * signed as documented at
     * https://cloud.google.com/load-balancing/docs/ssl-certificates/google-managed-certs#caa.
     *
     * Generated from protobuf field <code>string issuance_config = 6 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getIssuanceConfig()
    {
        return $this->issuance_config;
    }

    /**
     * Immutable. The resource name for a
     * [CertificateIssuanceConfig][google.cloud.certificatemanager.v1.CertificateIssuanceConfig]
     * used to configure private PKI certificates in the format
     * `projects/&#42;&#47;locations/&#42;&#47;certificateIssuanceConfigs/&#42;`.
     * If this field is not set, the certificates will instead be publicly
     * signed as documented at
     * https://cloud.google.com/load-balancing/docs/ssl-certificates/google-managed-certs#caa.
     *
     * Generated from protobuf field <code>string issuance_config = 6 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setIssuanceConfig($var)
    {
        GPBUtil::checkString($var, True);
        $this->issuance_config = $var;

        return $this;
    }

    /**
     * Output only. State of the managed certificate resource.
     *
     * Generated from protobuf field <code>.google.cloud.certificatemanager.v1.Certificate.ManagedCertificate.State state = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Output only. State of the managed certificate resource.
     *
     * Generated from protobuf field <code>.google.cloud.certificatemanager.v1.Certificate.ManagedCertificate.State state = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setState($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\CertificateManager\V1\Certificate\ManagedCertificate\State::class);
        $this->state = $var;

        return $this;
    }

    /**
     * Output only. Information about issues with provisioning a Managed
     * Certificate.
     *
     * Generated from protobuf field <code>.google.cloud.certificatemanager.v1.Certificate.ManagedCertificate.ProvisioningIssue provisioning_issue = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Cloud\CertificateManager\V1\Certificate\ManagedCertificate\ProvisioningIssue|null
     */
    public function getProvisioningIssue()
    {
        return $this->provisioning_issue;
    }

    public function hasProvisioningIssue()
    {
        return isset($this->provisioning_issue);
    }

    public function clearProvisioningIssue()
    {
        unset($this->provisioning_issue);
    }

    /**
     * Output only. Information about issues with provisioning a Managed
     * Certificate.
     *
     * Generated from protobuf field <code>.google.cloud.certificatemanager.v1.Certificate.ManagedCertificate.ProvisioningIssue provisioning_issue = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Cloud\CertificateManager\V1\Certificate\ManagedCertificate\ProvisioningIssue $var
     * @return $this
     */
    public function setProvisioningIssue($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\CertificateManager\V1\Certificate\ManagedCertificate\ProvisioningIssue::class);
        $this->provisioning_issue = $var;

        return $this;
    }

    /**
     * Output only. Detailed state of the latest authorization attempt for each
     * domain specified for managed certificate resource.
     *
     * Generated from protobuf field <code>repeated .google.cloud.certificatemanager.v1.Certificate.ManagedCertificate.AuthorizationAttemptInfo authorization_attempt_info = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAuthorizationAttemptInfo()
    {
        return $this->authorization_attempt_info;
    }

    /**
     * Output only. Detailed state of the latest authorization attempt for each
     * domain specified for managed certificate resource.
     *
     * Generated from protobuf field <code>repeated .google.cloud.certificatemanager.v1.Certificate.ManagedCertificate.AuthorizationAttemptInfo authorization_attempt_info = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param array<\Google\Cloud\CertificateManager\V1\Certificate\ManagedCertificate\AuthorizationAttemptInfo>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAuthorizationAttemptInfo($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\CertificateManager\V1\Certificate\ManagedCertificate\AuthorizationAttemptInfo::class);
        $this->authorization_attempt_info = $arr;

        return $this;
    }

}

