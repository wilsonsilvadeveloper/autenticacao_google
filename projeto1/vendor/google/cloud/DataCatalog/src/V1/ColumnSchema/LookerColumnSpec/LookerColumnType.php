<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/datacatalog/v1/schema.proto

namespace Google\Cloud\DataCatalog\V1\ColumnSchema\LookerColumnSpec;

use UnexpectedValueException;

/**
 * Column type in Looker.
 *
 * Protobuf type <code>google.cloud.datacatalog.v1.ColumnSchema.LookerColumnSpec.LookerColumnType</code>
 */
class LookerColumnType
{
    /**
     * Unspecified.
     *
     * Generated from protobuf enum <code>LOOKER_COLUMN_TYPE_UNSPECIFIED = 0;</code>
     */
    const LOOKER_COLUMN_TYPE_UNSPECIFIED = 0;
    /**
     * Dimension.
     *
     * Generated from protobuf enum <code>DIMENSION = 1;</code>
     */
    const DIMENSION = 1;
    /**
     * Dimension group - parent for Dimension.
     *
     * Generated from protobuf enum <code>DIMENSION_GROUP = 2;</code>
     */
    const DIMENSION_GROUP = 2;
    /**
     * Filter.
     *
     * Generated from protobuf enum <code>FILTER = 3;</code>
     */
    const FILTER = 3;
    /**
     * Measure.
     *
     * Generated from protobuf enum <code>MEASURE = 4;</code>
     */
    const MEASURE = 4;
    /**
     * Parameter.
     *
     * Generated from protobuf enum <code>PARAMETER = 5;</code>
     */
    const PARAMETER = 5;

    private static $valueToName = [
        self::LOOKER_COLUMN_TYPE_UNSPECIFIED => 'LOOKER_COLUMN_TYPE_UNSPECIFIED',
        self::DIMENSION => 'DIMENSION',
        self::DIMENSION_GROUP => 'DIMENSION_GROUP',
        self::FILTER => 'FILTER',
        self::MEASURE => 'MEASURE',
        self::PARAMETER => 'PARAMETER',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(LookerColumnType::class, \Google\Cloud\DataCatalog\V1\ColumnSchema_LookerColumnSpec_LookerColumnType::class);
