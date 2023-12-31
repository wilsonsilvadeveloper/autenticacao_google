<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/workflows/executions/v1/executions.proto

namespace Google\Cloud\Workflows\Executions\V1\Execution;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A collection of stack elements (frames) where an error occurred.
 *
 * Generated from protobuf message <code>google.cloud.workflows.executions.v1.Execution.StackTrace</code>
 */
class StackTrace extends \Google\Protobuf\Internal\Message
{
    /**
     * An array of stack elements.
     *
     * Generated from protobuf field <code>repeated .google.cloud.workflows.executions.v1.Execution.StackTraceElement elements = 1;</code>
     */
    private $elements;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Google\Cloud\Workflows\Executions\V1\Execution\StackTraceElement>|\Google\Protobuf\Internal\RepeatedField $elements
     *           An array of stack elements.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Workflows\Executions\V1\Executions::initOnce();
        parent::__construct($data);
    }

    /**
     * An array of stack elements.
     *
     * Generated from protobuf field <code>repeated .google.cloud.workflows.executions.v1.Execution.StackTraceElement elements = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getElements()
    {
        return $this->elements;
    }

    /**
     * An array of stack elements.
     *
     * Generated from protobuf field <code>repeated .google.cloud.workflows.executions.v1.Execution.StackTraceElement elements = 1;</code>
     * @param array<\Google\Cloud\Workflows\Executions\V1\Execution\StackTraceElement>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setElements($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Workflows\Executions\V1\Execution\StackTraceElement::class);
        $this->elements = $arr;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(StackTrace::class, \Google\Cloud\Workflows\Executions\V1\Execution_StackTrace::class);

