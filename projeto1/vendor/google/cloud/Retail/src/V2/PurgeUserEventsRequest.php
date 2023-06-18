<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/retail/v2/purge_config.proto

namespace Google\Cloud\Retail\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for PurgeUserEvents method.
 *
 * Generated from protobuf message <code>google.cloud.retail.v2.PurgeUserEventsRequest</code>
 */
class PurgeUserEventsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The resource name of the catalog under which the events are
     * created. The format is
     * `projects/${projectId}/locations/global/catalogs/${catalogId}`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $parent = '';
    /**
     * Required. The filter string to specify the events to be deleted with a
     * length limit of 5,000 characters. Empty string filter is not allowed. The
     * eligible fields for filtering are:
     * * `eventType`: Double quoted
     * [UserEvent.event_type][google.cloud.retail.v2.UserEvent.event_type] string.
     * * `eventTime`: in ISO 8601 "zulu" format.
     * * `visitorId`: Double quoted string. Specifying this will delete all
     *   events associated with a visitor.
     * * `userId`: Double quoted string. Specifying this will delete all events
     *   associated with a user.
     * Examples:
     * * Deleting all events in a time range:
     *   `eventTime > "2012-04-23T18:25:43.511Z"
     *   eventTime < "2012-04-23T18:30:43.511Z"`
     * * Deleting specific eventType in time range:
     *   `eventTime > "2012-04-23T18:25:43.511Z" eventType = "detail-page-view"`
     * * Deleting all events for a specific visitor:
     *   `visitorId = "visitor1024"`
     * The filtering fields are assumed to have an implicit AND.
     *
     * Generated from protobuf field <code>string filter = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $filter = '';
    /**
     * Actually perform the purge.
     * If `force` is set to false, the method will return the expected purge count
     * without deleting any user events.
     *
     * Generated from protobuf field <code>bool force = 3;</code>
     */
    private $force = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The resource name of the catalog under which the events are
     *           created. The format is
     *           `projects/${projectId}/locations/global/catalogs/${catalogId}`
     *     @type string $filter
     *           Required. The filter string to specify the events to be deleted with a
     *           length limit of 5,000 characters. Empty string filter is not allowed. The
     *           eligible fields for filtering are:
     *           * `eventType`: Double quoted
     *           [UserEvent.event_type][google.cloud.retail.v2.UserEvent.event_type] string.
     *           * `eventTime`: in ISO 8601 "zulu" format.
     *           * `visitorId`: Double quoted string. Specifying this will delete all
     *             events associated with a visitor.
     *           * `userId`: Double quoted string. Specifying this will delete all events
     *             associated with a user.
     *           Examples:
     *           * Deleting all events in a time range:
     *             `eventTime > "2012-04-23T18:25:43.511Z"
     *             eventTime < "2012-04-23T18:30:43.511Z"`
     *           * Deleting specific eventType in time range:
     *             `eventTime > "2012-04-23T18:25:43.511Z" eventType = "detail-page-view"`
     *           * Deleting all events for a specific visitor:
     *             `visitorId = "visitor1024"`
     *           The filtering fields are assumed to have an implicit AND.
     *     @type bool $force
     *           Actually perform the purge.
     *           If `force` is set to false, the method will return the expected purge count
     *           without deleting any user events.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Retail\V2\PurgeConfig::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The resource name of the catalog under which the events are
     * created. The format is
     * `projects/${projectId}/locations/global/catalogs/${catalogId}`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The resource name of the catalog under which the events are
     * created. The format is
     * `projects/${projectId}/locations/global/catalogs/${catalogId}`
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
     * Required. The filter string to specify the events to be deleted with a
     * length limit of 5,000 characters. Empty string filter is not allowed. The
     * eligible fields for filtering are:
     * * `eventType`: Double quoted
     * [UserEvent.event_type][google.cloud.retail.v2.UserEvent.event_type] string.
     * * `eventTime`: in ISO 8601 "zulu" format.
     * * `visitorId`: Double quoted string. Specifying this will delete all
     *   events associated with a visitor.
     * * `userId`: Double quoted string. Specifying this will delete all events
     *   associated with a user.
     * Examples:
     * * Deleting all events in a time range:
     *   `eventTime > "2012-04-23T18:25:43.511Z"
     *   eventTime < "2012-04-23T18:30:43.511Z"`
     * * Deleting specific eventType in time range:
     *   `eventTime > "2012-04-23T18:25:43.511Z" eventType = "detail-page-view"`
     * * Deleting all events for a specific visitor:
     *   `visitorId = "visitor1024"`
     * The filtering fields are assumed to have an implicit AND.
     *
     * Generated from protobuf field <code>string filter = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getFilter()
    {
        return $this->filter;
    }

    /**
     * Required. The filter string to specify the events to be deleted with a
     * length limit of 5,000 characters. Empty string filter is not allowed. The
     * eligible fields for filtering are:
     * * `eventType`: Double quoted
     * [UserEvent.event_type][google.cloud.retail.v2.UserEvent.event_type] string.
     * * `eventTime`: in ISO 8601 "zulu" format.
     * * `visitorId`: Double quoted string. Specifying this will delete all
     *   events associated with a visitor.
     * * `userId`: Double quoted string. Specifying this will delete all events
     *   associated with a user.
     * Examples:
     * * Deleting all events in a time range:
     *   `eventTime > "2012-04-23T18:25:43.511Z"
     *   eventTime < "2012-04-23T18:30:43.511Z"`
     * * Deleting specific eventType in time range:
     *   `eventTime > "2012-04-23T18:25:43.511Z" eventType = "detail-page-view"`
     * * Deleting all events for a specific visitor:
     *   `visitorId = "visitor1024"`
     * The filtering fields are assumed to have an implicit AND.
     *
     * Generated from protobuf field <code>string filter = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setFilter($var)
    {
        GPBUtil::checkString($var, True);
        $this->filter = $var;

        return $this;
    }

    /**
     * Actually perform the purge.
     * If `force` is set to false, the method will return the expected purge count
     * without deleting any user events.
     *
     * Generated from protobuf field <code>bool force = 3;</code>
     * @return bool
     */
    public function getForce()
    {
        return $this->force;
    }

    /**
     * Actually perform the purge.
     * If `force` is set to false, the method will return the expected purge count
     * without deleting any user events.
     *
     * Generated from protobuf field <code>bool force = 3;</code>
     * @param bool $var
     * @return $this
     */
    public function setForce($var)
    {
        GPBUtil::checkBool($var);
        $this->force = $var;

        return $this;
    }

}

