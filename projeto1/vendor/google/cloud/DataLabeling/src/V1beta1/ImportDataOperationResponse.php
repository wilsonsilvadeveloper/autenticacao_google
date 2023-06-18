<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/datalabeling/v1beta1/operations.proto

namespace Google\Cloud\DataLabeling\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Response used for ImportData longrunning operation.
 *
 * Generated from protobuf message <code>google.cloud.datalabeling.v1beta1.ImportDataOperationResponse</code>
 */
class ImportDataOperationResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Ouptut only. The name of imported dataset.
     *
     * Generated from protobuf field <code>string dataset = 1;</code>
     */
    private $dataset = '';
    /**
     * Output only. Total number of examples requested to import
     *
     * Generated from protobuf field <code>int32 total_count = 2;</code>
     */
    private $total_count = 0;
    /**
     * Output only. Number of examples imported successfully.
     *
     * Generated from protobuf field <code>int32 import_count = 3;</code>
     */
    private $import_count = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $dataset
     *           Ouptut only. The name of imported dataset.
     *     @type int $total_count
     *           Output only. Total number of examples requested to import
     *     @type int $import_count
     *           Output only. Number of examples imported successfully.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Datalabeling\V1Beta1\Operations::initOnce();
        parent::__construct($data);
    }

    /**
     * Ouptut only. The name of imported dataset.
     *
     * Generated from protobuf field <code>string dataset = 1;</code>
     * @return string
     */
    public function getDataset()
    {
        return $this->dataset;
    }

    /**
     * Ouptut only. The name of imported dataset.
     *
     * Generated from protobuf field <code>string dataset = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setDataset($var)
    {
        GPBUtil::checkString($var, True);
        $this->dataset = $var;

        return $this;
    }

    /**
     * Output only. Total number of examples requested to import
     *
     * Generated from protobuf field <code>int32 total_count = 2;</code>
     * @return int
     */
    public function getTotalCount()
    {
        return $this->total_count;
    }

    /**
     * Output only. Total number of examples requested to import
     *
     * Generated from protobuf field <code>int32 total_count = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setTotalCount($var)
    {
        GPBUtil::checkInt32($var);
        $this->total_count = $var;

        return $this;
    }

    /**
     * Output only. Number of examples imported successfully.
     *
     * Generated from protobuf field <code>int32 import_count = 3;</code>
     * @return int
     */
    public function getImportCount()
    {
        return $this->import_count;
    }

    /**
     * Output only. Number of examples imported successfully.
     *
     * Generated from protobuf field <code>int32 import_count = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setImportCount($var)
    {
        GPBUtil::checkInt32($var);
        $this->import_count = $var;

        return $this;
    }

}
