<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/explanation_metadata.proto

namespace Google\Cloud\AIPlatform\V1\ExplanationMetadata;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Metadata of the prediction output to be explained.
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.ExplanationMetadata.OutputMetadata</code>
 */
class OutputMetadata extends \Google\Protobuf\Internal\Message
{
    /**
     * Name of the output tensor. Required and is only applicable to Vertex
     * AI provided images for Tensorflow.
     *
     * Generated from protobuf field <code>string output_tensor_name = 3;</code>
     */
    private $output_tensor_name = '';
    protected $display_name_mapping;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\Value $index_display_name_mapping
     *           Static mapping between the index and display name.
     *           Use this if the outputs are a deterministic n-dimensional array, e.g. a
     *           list of scores of all the classes in a pre-defined order for a
     *           multi-classification Model. It's not feasible if the outputs are
     *           non-deterministic, e.g. the Model produces top-k classes or sort the
     *           outputs by their values.
     *           The shape of the value must be an n-dimensional array of strings. The
     *           number of dimensions must match that of the outputs to be explained.
     *           The
     *           [Attribution.output_display_name][google.cloud.aiplatform.v1.Attribution.output_display_name]
     *           is populated by locating in the mapping with
     *           [Attribution.output_index][google.cloud.aiplatform.v1.Attribution.output_index].
     *     @type string $display_name_mapping_key
     *           Specify a field name in the prediction to look for the display name.
     *           Use this if the prediction contains the display names for the outputs.
     *           The display names in the prediction must have the same shape of the
     *           outputs, so that it can be located by
     *           [Attribution.output_index][google.cloud.aiplatform.v1.Attribution.output_index]
     *           for a specific output.
     *     @type string $output_tensor_name
     *           Name of the output tensor. Required and is only applicable to Vertex
     *           AI provided images for Tensorflow.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\ExplanationMetadata::initOnce();
        parent::__construct($data);
    }

    /**
     * Static mapping between the index and display name.
     * Use this if the outputs are a deterministic n-dimensional array, e.g. a
     * list of scores of all the classes in a pre-defined order for a
     * multi-classification Model. It's not feasible if the outputs are
     * non-deterministic, e.g. the Model produces top-k classes or sort the
     * outputs by their values.
     * The shape of the value must be an n-dimensional array of strings. The
     * number of dimensions must match that of the outputs to be explained.
     * The
     * [Attribution.output_display_name][google.cloud.aiplatform.v1.Attribution.output_display_name]
     * is populated by locating in the mapping with
     * [Attribution.output_index][google.cloud.aiplatform.v1.Attribution.output_index].
     *
     * Generated from protobuf field <code>.google.protobuf.Value index_display_name_mapping = 1;</code>
     * @return \Google\Protobuf\Value|null
     */
    public function getIndexDisplayNameMapping()
    {
        return $this->readOneof(1);
    }

    public function hasIndexDisplayNameMapping()
    {
        return $this->hasOneof(1);
    }

    /**
     * Static mapping between the index and display name.
     * Use this if the outputs are a deterministic n-dimensional array, e.g. a
     * list of scores of all the classes in a pre-defined order for a
     * multi-classification Model. It's not feasible if the outputs are
     * non-deterministic, e.g. the Model produces top-k classes or sort the
     * outputs by their values.
     * The shape of the value must be an n-dimensional array of strings. The
     * number of dimensions must match that of the outputs to be explained.
     * The
     * [Attribution.output_display_name][google.cloud.aiplatform.v1.Attribution.output_display_name]
     * is populated by locating in the mapping with
     * [Attribution.output_index][google.cloud.aiplatform.v1.Attribution.output_index].
     *
     * Generated from protobuf field <code>.google.protobuf.Value index_display_name_mapping = 1;</code>
     * @param \Google\Protobuf\Value $var
     * @return $this
     */
    public function setIndexDisplayNameMapping($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Value::class);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * Specify a field name in the prediction to look for the display name.
     * Use this if the prediction contains the display names for the outputs.
     * The display names in the prediction must have the same shape of the
     * outputs, so that it can be located by
     * [Attribution.output_index][google.cloud.aiplatform.v1.Attribution.output_index]
     * for a specific output.
     *
     * Generated from protobuf field <code>string display_name_mapping_key = 2;</code>
     * @return string
     */
    public function getDisplayNameMappingKey()
    {
        return $this->readOneof(2);
    }

    public function hasDisplayNameMappingKey()
    {
        return $this->hasOneof(2);
    }

    /**
     * Specify a field name in the prediction to look for the display name.
     * Use this if the prediction contains the display names for the outputs.
     * The display names in the prediction must have the same shape of the
     * outputs, so that it can be located by
     * [Attribution.output_index][google.cloud.aiplatform.v1.Attribution.output_index]
     * for a specific output.
     *
     * Generated from protobuf field <code>string display_name_mapping_key = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setDisplayNameMappingKey($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * Name of the output tensor. Required and is only applicable to Vertex
     * AI provided images for Tensorflow.
     *
     * Generated from protobuf field <code>string output_tensor_name = 3;</code>
     * @return string
     */
    public function getOutputTensorName()
    {
        return $this->output_tensor_name;
    }

    /**
     * Name of the output tensor. Required and is only applicable to Vertex
     * AI provided images for Tensorflow.
     *
     * Generated from protobuf field <code>string output_tensor_name = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setOutputTensorName($var)
    {
        GPBUtil::checkString($var, True);
        $this->output_tensor_name = $var;

        return $this;
    }

    /**
     * @return string
     */
    public function getDisplayNameMapping()
    {
        return $this->whichOneof("display_name_mapping");
    }

}


