<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/resourcemanager/v3/organizations.proto

namespace Google\Cloud\ResourceManager\V3;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The request sent to the `GetOrganization` method. The `name` field is
 * required. `organization_id` is no longer accepted.
 *
 * Generated from protobuf message <code>google.cloud.resourcemanager.v3.GetOrganizationRequest</code>
 */
class GetOrganizationRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The resource name of the Organization to fetch. This is the
     * organization's relative path in the API, formatted as
     * "organizations/[organizationId]". For example, "organizations/1234".
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $name = '';

    /**
     * @param string $name Required. The resource name of the Organization to fetch. This is the
     *                     organization's relative path in the API, formatted as
     *                     "organizations/[organizationId]". For example, "organizations/1234". Please see
     *                     {@see OrganizationsClient::organizationName()} for help formatting this field.
     *
     * @return \Google\Cloud\ResourceManager\V3\GetOrganizationRequest
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
     *           Required. The resource name of the Organization to fetch. This is the
     *           organization's relative path in the API, formatted as
     *           "organizations/[organizationId]". For example, "organizations/1234".
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Resourcemanager\V3\Organizations::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The resource name of the Organization to fetch. This is the
     * organization's relative path in the API, formatted as
     * "organizations/[organizationId]". For example, "organizations/1234".
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. The resource name of the Organization to fetch. This is the
     * organization's relative path in the API, formatted as
     * "organizations/[organizationId]". For example, "organizations/1234".
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
