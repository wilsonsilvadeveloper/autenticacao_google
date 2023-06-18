<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/asset/v1/asset_service.proto

namespace Google\Cloud\Asset\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * QueryAssets response.
 *
 * Generated from protobuf message <code>google.cloud.asset.v1.QueryAssetsResponse</code>
 */
class QueryAssetsResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Reference to a query job.
     *
     * Generated from protobuf field <code>string job_reference = 1;</code>
     */
    private $job_reference = '';
    /**
     * The query response, which can be either an `error` or a valid `response`.
     * If `done` == `false` and the query result is being saved in a output, the
     * output_config field will be set.
     * If `done` == `true`, exactly one of
     * `error`, `query_result` or `output_config` will be set.
     *
     * Generated from protobuf field <code>bool done = 2;</code>
     */
    private $done = false;
    protected $response;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $job_reference
     *           Reference to a query job.
     *     @type bool $done
     *           The query response, which can be either an `error` or a valid `response`.
     *           If `done` == `false` and the query result is being saved in a output, the
     *           output_config field will be set.
     *           If `done` == `true`, exactly one of
     *           `error`, `query_result` or `output_config` will be set.
     *     @type \Google\Rpc\Status $error
     *           Error status.
     *     @type \Google\Cloud\Asset\V1\QueryResult $query_result
     *           Result of the query.
     *     @type \Google\Cloud\Asset\V1\QueryAssetsOutputConfig $output_config
     *           Output configuration which indicates instead of being returned in API
     *           response on the fly, the query result will be saved in a specific output.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Asset\V1\AssetService::initOnce();
        parent::__construct($data);
    }

    /**
     * Reference to a query job.
     *
     * Generated from protobuf field <code>string job_reference = 1;</code>
     * @return string
     */
    public function getJobReference()
    {
        return $this->job_reference;
    }

    /**
     * Reference to a query job.
     *
     * Generated from protobuf field <code>string job_reference = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setJobReference($var)
    {
        GPBUtil::checkString($var, True);
        $this->job_reference = $var;

        return $this;
    }

    /**
     * The query response, which can be either an `error` or a valid `response`.
     * If `done` == `false` and the query result is being saved in a output, the
     * output_config field will be set.
     * If `done` == `true`, exactly one of
     * `error`, `query_result` or `output_config` will be set.
     *
     * Generated from protobuf field <code>bool done = 2;</code>
     * @return bool
     */
    public function getDone()
    {
        return $this->done;
    }

    /**
     * The query response, which can be either an `error` or a valid `response`.
     * If `done` == `false` and the query result is being saved in a output, the
     * output_config field will be set.
     * If `done` == `true`, exactly one of
     * `error`, `query_result` or `output_config` will be set.
     *
     * Generated from protobuf field <code>bool done = 2;</code>
     * @param bool $var
     * @return $this
     */
    public function setDone($var)
    {
        GPBUtil::checkBool($var);
        $this->done = $var;

        return $this;
    }

    /**
     * Error status.
     *
     * Generated from protobuf field <code>.google.rpc.Status error = 3;</code>
     * @return \Google\Rpc\Status|null
     */
    public function getError()
    {
        return $this->readOneof(3);
    }

    public function hasError()
    {
        return $this->hasOneof(3);
    }

    /**
     * Error status.
     *
     * Generated from protobuf field <code>.google.rpc.Status error = 3;</code>
     * @param \Google\Rpc\Status $var
     * @return $this
     */
    public function setError($var)
    {
        GPBUtil::checkMessage($var, \Google\Rpc\Status::class);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * Result of the query.
     *
     * Generated from protobuf field <code>.google.cloud.asset.v1.QueryResult query_result = 4;</code>
     * @return \Google\Cloud\Asset\V1\QueryResult|null
     */
    public function getQueryResult()
    {
        return $this->readOneof(4);
    }

    public function hasQueryResult()
    {
        return $this->hasOneof(4);
    }

    /**
     * Result of the query.
     *
     * Generated from protobuf field <code>.google.cloud.asset.v1.QueryResult query_result = 4;</code>
     * @param \Google\Cloud\Asset\V1\QueryResult $var
     * @return $this
     */
    public function setQueryResult($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Asset\V1\QueryResult::class);
        $this->writeOneof(4, $var);

        return $this;
    }

    /**
     * Output configuration which indicates instead of being returned in API
     * response on the fly, the query result will be saved in a specific output.
     *
     * Generated from protobuf field <code>.google.cloud.asset.v1.QueryAssetsOutputConfig output_config = 5;</code>
     * @return \Google\Cloud\Asset\V1\QueryAssetsOutputConfig|null
     */
    public function getOutputConfig()
    {
        return $this->readOneof(5);
    }

    public function hasOutputConfig()
    {
        return $this->hasOneof(5);
    }

    /**
     * Output configuration which indicates instead of being returned in API
     * response on the fly, the query result will be saved in a specific output.
     *
     * Generated from protobuf field <code>.google.cloud.asset.v1.QueryAssetsOutputConfig output_config = 5;</code>
     * @param \Google\Cloud\Asset\V1\QueryAssetsOutputConfig $var
     * @return $this
     */
    public function setOutputConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Asset\V1\QueryAssetsOutputConfig::class);
        $this->writeOneof(5, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getResponse()
    {
        return $this->whichOneof("response");
    }

}

