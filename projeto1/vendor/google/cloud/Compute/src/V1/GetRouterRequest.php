<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A request message for Routers.Get. See the method description for details.
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.GetRouterRequest</code>
 */
class GetRouterRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Project ID for this request.
     *
     * Generated from protobuf field <code>string project = 227560217 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $project = '';
    /**
     * Name of the region for this request.
     *
     * Generated from protobuf field <code>string region = 138946292 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $region = '';
    /**
     * Name of the Router resource to return.
     *
     * Generated from protobuf field <code>string router = 148608841 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $router = '';

    /**
     * @param string $project Project ID for this request.
     * @param string $region  Name of the region for this request.
     * @param string $router  Name of the Router resource to return.
     *
     * @return \Google\Cloud\Compute\V1\GetRouterRequest
     *
     * @experimental
     */
    public static function build(string $project, string $region, string $router): self
    {
        return (new self())
            ->setProject($project)
            ->setRegion($region)
            ->setRouter($router);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $project
     *           Project ID for this request.
     *     @type string $region
     *           Name of the region for this request.
     *     @type string $router
     *           Name of the Router resource to return.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * Project ID for this request.
     *
     * Generated from protobuf field <code>string project = 227560217 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getProject()
    {
        return $this->project;
    }

    /**
     * Project ID for this request.
     *
     * Generated from protobuf field <code>string project = 227560217 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setProject($var)
    {
        GPBUtil::checkString($var, True);
        $this->project = $var;

        return $this;
    }

    /**
     * Name of the region for this request.
     *
     * Generated from protobuf field <code>string region = 138946292 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getRegion()
    {
        return $this->region;
    }

    /**
     * Name of the region for this request.
     *
     * Generated from protobuf field <code>string region = 138946292 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setRegion($var)
    {
        GPBUtil::checkString($var, True);
        $this->region = $var;

        return $this;
    }

    /**
     * Name of the Router resource to return.
     *
     * Generated from protobuf field <code>string router = 148608841 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getRouter()
    {
        return $this->router;
    }

    /**
     * Name of the Router resource to return.
     *
     * Generated from protobuf field <code>string router = 148608841 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setRouter($var)
    {
        GPBUtil::checkString($var, True);
        $this->router = $var;

        return $this;
    }

}

