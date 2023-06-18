<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dataplex/v1/data_quality.proto

namespace Google\Cloud\Dataplex\V1\DataQualityRule;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Evaluates whether each column value matches a specified regex.
 *
 * Generated from protobuf message <code>google.cloud.dataplex.v1.DataQualityRule.RegexExpectation</code>
 */
class RegexExpectation extends \Google\Protobuf\Internal\Message
{
    /**
     * A regular expression the column value is expected to match.
     *
     * Generated from protobuf field <code>string regex = 1;</code>
     */
    private $regex = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $regex
     *           A regular expression the column value is expected to match.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dataplex\V1\DataQuality::initOnce();
        parent::__construct($data);
    }

    /**
     * A regular expression the column value is expected to match.
     *
     * Generated from protobuf field <code>string regex = 1;</code>
     * @return string
     */
    public function getRegex()
    {
        return $this->regex;
    }

    /**
     * A regular expression the column value is expected to match.
     *
     * Generated from protobuf field <code>string regex = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setRegex($var)
    {
        GPBUtil::checkString($var, True);
        $this->regex = $var;

        return $this;
    }

}


