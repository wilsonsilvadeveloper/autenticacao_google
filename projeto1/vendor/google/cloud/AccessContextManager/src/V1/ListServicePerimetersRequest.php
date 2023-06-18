<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/identity/accesscontextmanager/v1/access_context_manager.proto

namespace Google\Identity\AccessContextManager\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A request to list all `ServicePerimeters` in an `AccessPolicy`.
 *
 * Generated from protobuf message <code>google.identity.accesscontextmanager.v1.ListServicePerimetersRequest</code>
 */
class ListServicePerimetersRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Resource name for the access policy to list [Service Perimeters]
     * [google.identity.accesscontextmanager.v1.ServicePerimeter] from.
     * Format:
     * `accessPolicies/{policy_id}`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $parent = '';
    /**
     * Number of [Service Perimeters]
     * [google.identity.accesscontextmanager.v1.ServicePerimeter] to include
     * in the list. Default 100.
     *
     * Generated from protobuf field <code>int32 page_size = 2;</code>
     */
    private $page_size = 0;
    /**
     * Next page token for the next batch of [Service Perimeter]
     * [google.identity.accesscontextmanager.v1.ServicePerimeter] instances.
     * Defaults to the first page of results.
     *
     * Generated from protobuf field <code>string page_token = 3;</code>
     */
    private $page_token = '';

    /**
     * @param string $parent Required. Resource name for the access policy to list [Service Perimeters]
     *                       [google.identity.accesscontextmanager.v1.ServicePerimeter] from.
     *
     *                       Format:
     *                       `accessPolicies/{policy_id}`
     *                       Please see {@see AccessContextManagerClient::accessPolicyName()} for help formatting this field.
     *
     * @return \Google\Identity\AccessContextManager\V1\ListServicePerimetersRequest
     *
     * @experimental
     */
    public static function build(string $parent): self
    {
        return (new self())
            ->setParent($parent);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. Resource name for the access policy to list [Service Perimeters]
     *           [google.identity.accesscontextmanager.v1.ServicePerimeter] from.
     *           Format:
     *           `accessPolicies/{policy_id}`
     *     @type int $page_size
     *           Number of [Service Perimeters]
     *           [google.identity.accesscontextmanager.v1.ServicePerimeter] to include
     *           in the list. Default 100.
     *     @type string $page_token
     *           Next page token for the next batch of [Service Perimeter]
     *           [google.identity.accesscontextmanager.v1.ServicePerimeter] instances.
     *           Defaults to the first page of results.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Identity\Accesscontextmanager\V1\AccessContextManager::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Resource name for the access policy to list [Service Perimeters]
     * [google.identity.accesscontextmanager.v1.ServicePerimeter] from.
     * Format:
     * `accessPolicies/{policy_id}`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. Resource name for the access policy to list [Service Perimeters]
     * [google.identity.accesscontextmanager.v1.ServicePerimeter] from.
     * Format:
     * `accessPolicies/{policy_id}`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setParent($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent = $var;

        return $this;
    }

    /**
     * Number of [Service Perimeters]
     * [google.identity.accesscontextmanager.v1.ServicePerimeter] to include
     * in the list. Default 100.
     *
     * Generated from protobuf field <code>int32 page_size = 2;</code>
     * @return int
     */
    public function getPageSize()
    {
        return $this->page_size;
    }

    /**
     * Number of [Service Perimeters]
     * [google.identity.accesscontextmanager.v1.ServicePerimeter] to include
     * in the list. Default 100.
     *
     * Generated from protobuf field <code>int32 page_size = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setPageSize($var)
    {
        GPBUtil::checkInt32($var);
        $this->page_size = $var;

        return $this;
    }

    /**
     * Next page token for the next batch of [Service Perimeter]
     * [google.identity.accesscontextmanager.v1.ServicePerimeter] instances.
     * Defaults to the first page of results.
     *
     * Generated from protobuf field <code>string page_token = 3;</code>
     * @return string
     */
    public function getPageToken()
    {
        return $this->page_token;
    }

    /**
     * Next page token for the next batch of [Service Perimeter]
     * [google.identity.accesscontextmanager.v1.ServicePerimeter] instances.
     * Defaults to the first page of results.
     *
     * Generated from protobuf field <code>string page_token = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->page_token = $var;

        return $this;
    }

}
