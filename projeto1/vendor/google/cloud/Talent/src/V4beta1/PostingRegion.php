<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/talent/v4beta1/common.proto

namespace Google\Cloud\Talent\V4beta1;

use UnexpectedValueException;

/**
 * An enum that represents the job posting region. In most cases, job postings
 * don't need to specify a region. If a region is given, jobs are
 * eligible for searches in the specified region.
 *
 * Protobuf type <code>google.cloud.talent.v4beta1.PostingRegion</code>
 */
class PostingRegion
{
    /**
     * If the region is unspecified, the job is only returned if it
     * matches the [LocationFilter][google.cloud.talent.v4beta1.LocationFilter].
     *
     * Generated from protobuf enum <code>POSTING_REGION_UNSPECIFIED = 0;</code>
     */
    const POSTING_REGION_UNSPECIFIED = 0;
    /**
     * In addition to exact location matching, job posting is returned when the
     * [LocationFilter][google.cloud.talent.v4beta1.LocationFilter] in the search
     * query is in the same administrative area as the returned job posting. For
     * example, if a `ADMINISTRATIVE_AREA` job is posted in "CA, USA", it's
     * returned if [LocationFilter][google.cloud.talent.v4beta1.LocationFilter]
     * has "Mountain View".
     * Administrative area refers to top-level administrative subdivision of this
     * country. For example, US state, IT region, UK constituent nation and
     * JP prefecture.
     *
     * Generated from protobuf enum <code>ADMINISTRATIVE_AREA = 1;</code>
     */
    const ADMINISTRATIVE_AREA = 1;
    /**
     * In addition to exact location matching, job is returned when
     * [LocationFilter][google.cloud.talent.v4beta1.LocationFilter] in search
     * query is in the same country as this job. For example, if a `NATION_WIDE`
     * job is posted in "USA", it's returned if
     * [LocationFilter][google.cloud.talent.v4beta1.LocationFilter] has 'Mountain
     * View'.
     *
     * Generated from protobuf enum <code>NATION = 2;</code>
     */
    const NATION = 2;
    /**
     * Job allows employees to work remotely (telecommute).
     * If locations are provided with this value, the job is
     * considered as having a location, but telecommuting is allowed.
     *
     * Generated from protobuf enum <code>TELECOMMUTE = 3;</code>
     */
    const TELECOMMUTE = 3;

    private static $valueToName = [
        self::POSTING_REGION_UNSPECIFIED => 'POSTING_REGION_UNSPECIFIED',
        self::ADMINISTRATIVE_AREA => 'ADMINISTRATIVE_AREA',
        self::NATION => 'NATION',
        self::TELECOMMUTE => 'TELECOMMUTE',
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

