<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/gkehub/v1beta1/membership.proto

namespace Google\Cloud\GkeHub\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Response message for the `GkeHubMembershipService.ListMemberships` method.
 *
 * Generated from protobuf message <code>google.cloud.gkehub.v1beta1.ListMembershipsResponse</code>
 */
class ListMembershipsResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * The list of matching Memberships.
     *
     * Generated from protobuf field <code>repeated .google.cloud.gkehub.v1beta1.Membership resources = 1;</code>
     */
    private $resources;
    /**
     * A token to request the next page of resources from the
     * `ListMemberships` method. The value of an empty string means that
     * there are no more resources to return.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     */
    private $next_page_token = '';
    /**
     * List of locations that could not be reached while fetching this list.
     *
     * Generated from protobuf field <code>repeated string unreachable = 3;</code>
     */
    private $unreachable;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Google\Cloud\GkeHub\V1beta1\Membership>|\Google\Protobuf\Internal\RepeatedField $resources
     *           The list of matching Memberships.
     *     @type string $next_page_token
     *           A token to request the next page of resources from the
     *           `ListMemberships` method. The value of an empty string means that
     *           there are no more resources to return.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $unreachable
     *           List of locations that could not be reached while fetching this list.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Gkehub\V1Beta1\Membership::initOnce();
        parent::__construct($data);
    }

    /**
     * The list of matching Memberships.
     *
     * Generated from protobuf field <code>repeated .google.cloud.gkehub.v1beta1.Membership resources = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getResources()
    {
        return $this->resources;
    }

    /**
     * The list of matching Memberships.
     *
     * Generated from protobuf field <code>repeated .google.cloud.gkehub.v1beta1.Membership resources = 1;</code>
     * @param array<\Google\Cloud\GkeHub\V1beta1\Membership>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setResources($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\GkeHub\V1beta1\Membership::class);
        $this->resources = $arr;

        return $this;
    }

    /**
     * A token to request the next page of resources from the
     * `ListMemberships` method. The value of an empty string means that
     * there are no more resources to return.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @return string
     */
    public function getNextPageToken()
    {
        return $this->next_page_token;
    }

    /**
     * A token to request the next page of resources from the
     * `ListMemberships` method. The value of an empty string means that
     * there are no more resources to return.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setNextPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->next_page_token = $var;

        return $this;
    }

    /**
     * List of locations that could not be reached while fetching this list.
     *
     * Generated from protobuf field <code>repeated string unreachable = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getUnreachable()
    {
        return $this->unreachable;
    }

    /**
     * List of locations that could not be reached while fetching this list.
     *
     * Generated from protobuf field <code>repeated string unreachable = 3;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setUnreachable($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->unreachable = $arr;

        return $this;
    }

}
