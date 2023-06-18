<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/datalabeling/v1beta1/dataset.proto

namespace Google\Cloud\DataLabeling\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Export folder destination of the data.
 *
 * Generated from protobuf message <code>google.cloud.datalabeling.v1beta1.GcsFolderDestination</code>
 */
class GcsFolderDestination extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Cloud Storage directory to export data to.
     *
     * Generated from protobuf field <code>string output_folder_uri = 1;</code>
     */
    private $output_folder_uri = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $output_folder_uri
     *           Required. Cloud Storage directory to export data to.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Datalabeling\V1Beta1\Dataset::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Cloud Storage directory to export data to.
     *
     * Generated from protobuf field <code>string output_folder_uri = 1;</code>
     * @return string
     */
    public function getOutputFolderUri()
    {
        return $this->output_folder_uri;
    }

    /**
     * Required. Cloud Storage directory to export data to.
     *
     * Generated from protobuf field <code>string output_folder_uri = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setOutputFolderUri($var)
    {
        GPBUtil::checkString($var, True);
        $this->output_folder_uri = $var;

        return $this;
    }

}

