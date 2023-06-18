<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/security/privateca/v1/service.proto

namespace Google\Cloud\Security\PrivateCA\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for
 * [CertificateAuthorityService.FetchCertificateAuthorityCsr][google.cloud.security.privateca.v1.CertificateAuthorityService.FetchCertificateAuthorityCsr].
 *
 * Generated from protobuf message <code>google.cloud.security.privateca.v1.FetchCertificateAuthorityCsrRequest</code>
 */
class FetchCertificateAuthorityCsrRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The resource name for this
     * [CertificateAuthority][google.cloud.security.privateca.v1.CertificateAuthority]
     * in the format `projects/&#42;&#47;locations/&#42;&#47;caPools/&#42;&#47;certificateAuthorities/&#42;`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $name = '';

    /**
     * @param string $name Required. The resource name for this
     *                     [CertificateAuthority][google.cloud.security.privateca.v1.CertificateAuthority]
     *                     in the format `projects/&#42;/locations/&#42;/caPools/&#42;/certificateAuthorities/*`. Please see
     *                     {@see CertificateAuthorityServiceClient::certificateAuthorityName()} for help formatting this field.
     *
     * @return \Google\Cloud\Security\PrivateCA\V1\FetchCertificateAuthorityCsrRequest
     *
     * @experimental
     */
    public static function build(string $name): self
    {
        return (new self())
            ->setName($name);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. The resource name for this
     *           [CertificateAuthority][google.cloud.security.privateca.v1.CertificateAuthority]
     *           in the format `projects/&#42;&#47;locations/&#42;&#47;caPools/&#42;&#47;certificateAuthorities/&#42;`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Security\Privateca\V1\Service::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The resource name for this
     * [CertificateAuthority][google.cloud.security.privateca.v1.CertificateAuthority]
     * in the format `projects/&#42;&#47;locations/&#42;&#47;caPools/&#42;&#47;certificateAuthorities/&#42;`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. The resource name for this
     * [CertificateAuthority][google.cloud.security.privateca.v1.CertificateAuthority]
     * in the format `projects/&#42;&#47;locations/&#42;&#47;caPools/&#42;&#47;certificateAuthorities/&#42;`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

}

