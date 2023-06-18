<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/gkemulticloud/v1/azure_resources.proto

namespace Google\Cloud\GkeMultiCloud\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Identities of a user-type subject for Azure clusters.
 *
 * Generated from protobuf message <code>google.cloud.gkemulticloud.v1.AzureClusterUser</code>
 */
class AzureClusterUser extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The name of the user, e.g. `my-gcp-id&#64;gmail.com`.
     *
     * Generated from protobuf field <code>string username = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $username = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $username
     *           Required. The name of the user, e.g. `my-gcp-id&#64;gmail.com`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Gkemulticloud\V1\AzureResources::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The name of the user, e.g. `my-gcp-id&#64;gmail.com`.
     *
     * Generated from protobuf field <code>string username = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Required. The name of the user, e.g. `my-gcp-id&#64;gmail.com`.
     *
     * Generated from protobuf field <code>string username = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setUsername($var)
    {
        GPBUtil::checkString($var, True);
        $this->username = $var;

        return $this;
    }

}

