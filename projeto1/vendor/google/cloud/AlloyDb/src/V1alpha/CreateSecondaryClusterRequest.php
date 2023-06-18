<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/alloydb/v1alpha/service.proto

namespace Google\Cloud\AlloyDb\V1alpha;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>google.cloud.alloydb.v1alpha.CreateSecondaryClusterRequest</code>
 */
class CreateSecondaryClusterRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The name of the parent resource (the primary cluster). For the
     * required format, see the comment on the Cluster.name field.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $parent = '';
    /**
     * Required. ID of the requesting object (the secondary cluster).
     *
     * Generated from protobuf field <code>string cluster_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $cluster_id = '';
    /**
     * Required. Configuration of the requesting object (the secondary cluster).
     *
     * Generated from protobuf field <code>.google.cloud.alloydb.v1alpha.Cluster cluster = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $cluster = null;
    /**
     * Optional. An optional request ID to identify requests. Specify a unique
     * request ID so that if you must retry your request, the server will know to
     * ignore the request if it has already been completed. The server will
     * guarantee that for at least 60 minutes since the first request.
     * For example, consider a situation where you make an initial request and
     * the request times out. If you make the request again with the same request
     * ID, the server can check if original operation with the same request ID
     * was received, and if so, will ignore the second request. This prevents
     * clients from accidentally creating duplicate commitments.
     * The request ID must be a valid UUID with the exception that zero UUID is
     * not supported (00000000-0000-0000-0000-000000000000).
     *
     * Generated from protobuf field <code>string request_id = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $request_id = '';
    /**
     * Optional. If set, performs request validation (e.g. permission checks and
     * any other type of validation), but do not actually execute the create
     * request.
     *
     * Generated from protobuf field <code>bool validate_only = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $validate_only = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The name of the parent resource (the primary cluster). For the
     *           required format, see the comment on the Cluster.name field.
     *     @type string $cluster_id
     *           Required. ID of the requesting object (the secondary cluster).
     *     @type \Google\Cloud\AlloyDb\V1alpha\Cluster $cluster
     *           Required. Configuration of the requesting object (the secondary cluster).
     *     @type string $request_id
     *           Optional. An optional request ID to identify requests. Specify a unique
     *           request ID so that if you must retry your request, the server will know to
     *           ignore the request if it has already been completed. The server will
     *           guarantee that for at least 60 minutes since the first request.
     *           For example, consider a situation where you make an initial request and
     *           the request times out. If you make the request again with the same request
     *           ID, the server can check if original operation with the same request ID
     *           was received, and if so, will ignore the second request. This prevents
     *           clients from accidentally creating duplicate commitments.
     *           The request ID must be a valid UUID with the exception that zero UUID is
     *           not supported (00000000-0000-0000-0000-000000000000).
     *     @type bool $validate_only
     *           Optional. If set, performs request validation (e.g. permission checks and
     *           any other type of validation), but do not actually execute the create
     *           request.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Alloydb\V1Alpha\Service::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The name of the parent resource (the primary cluster). For the
     * required format, see the comment on the Cluster.name field.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The name of the parent resource (the primary cluster). For the
     * required format, see the comment on the Cluster.name field.
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
     * Required. ID of the requesting object (the secondary cluster).
     *
     * Generated from protobuf field <code>string cluster_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getClusterId()
    {
        return $this->cluster_id;
    }

    /**
     * Required. ID of the requesting object (the secondary cluster).
     *
     * Generated from protobuf field <code>string cluster_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setClusterId($var)
    {
        GPBUtil::checkString($var, True);
        $this->cluster_id = $var;

        return $this;
    }

    /**
     * Required. Configuration of the requesting object (the secondary cluster).
     *
     * Generated from protobuf field <code>.google.cloud.alloydb.v1alpha.Cluster cluster = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\AlloyDb\V1alpha\Cluster|null
     */
    public function getCluster()
    {
        return $this->cluster;
    }

    public function hasCluster()
    {
        return isset($this->cluster);
    }

    public function clearCluster()
    {
        unset($this->cluster);
    }

    /**
     * Required. Configuration of the requesting object (the secondary cluster).
     *
     * Generated from protobuf field <code>.google.cloud.alloydb.v1alpha.Cluster cluster = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\AlloyDb\V1alpha\Cluster $var
     * @return $this
     */
    public function setCluster($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\AlloyDb\V1alpha\Cluster::class);
        $this->cluster = $var;

        return $this;
    }

    /**
     * Optional. An optional request ID to identify requests. Specify a unique
     * request ID so that if you must retry your request, the server will know to
     * ignore the request if it has already been completed. The server will
     * guarantee that for at least 60 minutes since the first request.
     * For example, consider a situation where you make an initial request and
     * the request times out. If you make the request again with the same request
     * ID, the server can check if original operation with the same request ID
     * was received, and if so, will ignore the second request. This prevents
     * clients from accidentally creating duplicate commitments.
     * The request ID must be a valid UUID with the exception that zero UUID is
     * not supported (00000000-0000-0000-0000-000000000000).
     *
     * Generated from protobuf field <code>string request_id = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getRequestId()
    {
        return $this->request_id;
    }

    /**
     * Optional. An optional request ID to identify requests. Specify a unique
     * request ID so that if you must retry your request, the server will know to
     * ignore the request if it has already been completed. The server will
     * guarantee that for at least 60 minutes since the first request.
     * For example, consider a situation where you make an initial request and
     * the request times out. If you make the request again with the same request
     * ID, the server can check if original operation with the same request ID
     * was received, and if so, will ignore the second request. This prevents
     * clients from accidentally creating duplicate commitments.
     * The request ID must be a valid UUID with the exception that zero UUID is
     * not supported (00000000-0000-0000-0000-000000000000).
     *
     * Generated from protobuf field <code>string request_id = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setRequestId($var)
    {
        GPBUtil::checkString($var, True);
        $this->request_id = $var;

        return $this;
    }

    /**
     * Optional. If set, performs request validation (e.g. permission checks and
     * any other type of validation), but do not actually execute the create
     * request.
     *
     * Generated from protobuf field <code>bool validate_only = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return bool
     */
    public function getValidateOnly()
    {
        return $this->validate_only;
    }

    /**
     * Optional. If set, performs request validation (e.g. permission checks and
     * any other type of validation), but do not actually execute the create
     * request.
     *
     * Generated from protobuf field <code>bool validate_only = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param bool $var
     * @return $this
     */
    public function setValidateOnly($var)
    {
        GPBUtil::checkBool($var);
        $this->validate_only = $var;

        return $this;
    }

}

