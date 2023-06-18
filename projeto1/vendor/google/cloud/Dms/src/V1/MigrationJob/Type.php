<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/clouddms/v1/clouddms_resources.proto

namespace Google\Cloud\CloudDms\V1\MigrationJob;

use UnexpectedValueException;

/**
 * The type of migration job (one-time or continuous).
 *
 * Protobuf type <code>google.cloud.clouddms.v1.MigrationJob.Type</code>
 */
class Type
{
    /**
     * The type of the migration job is unknown.
     *
     * Generated from protobuf enum <code>TYPE_UNSPECIFIED = 0;</code>
     */
    const TYPE_UNSPECIFIED = 0;
    /**
     * The migration job is a one time migration.
     *
     * Generated from protobuf enum <code>ONE_TIME = 1;</code>
     */
    const ONE_TIME = 1;
    /**
     * The migration job is a continuous migration.
     *
     * Generated from protobuf enum <code>CONTINUOUS = 2;</code>
     */
    const CONTINUOUS = 2;

    private static $valueToName = [
        self::TYPE_UNSPECIFIED => 'TYPE_UNSPECIFIED',
        self::ONE_TIME => 'ONE_TIME',
        self::CONTINUOUS => 'CONTINUOUS',
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

