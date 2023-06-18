<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/privacy/dlp/v2/dlp.proto

namespace Google\Cloud\Dlp\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for ListJobTriggers.
 *
 * Generated from protobuf message <code>google.privacy.dlp.v2.ListJobTriggersRequest</code>
 */
class ListJobTriggersRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Parent resource name.
     * The format of this value varies depending on whether you have [specified a
     * processing
     * location](https://cloud.google.com/dlp/docs/specifying-location):
     * + Projects scope, location specified:<br/>
     *   `projects/`<var>PROJECT_ID</var>`/locations/`<var>LOCATION_ID</var>
     * + Projects scope, no location specified (defaults to global):<br/>
     *   `projects/`<var>PROJECT_ID</var>
     * The following example `parent` string specifies a parent project with the
     * identifier `example-project`, and specifies the `europe-west3` location
     * for processing data:
     *     parent=projects/example-project/locations/europe-west3
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $parent = '';
    /**
     * Page token to continue retrieval. Comes from previous call
     * to ListJobTriggers. `order_by` field must not
     * change for subsequent calls.
     *
     * Generated from protobuf field <code>string page_token = 2;</code>
     */
    private $page_token = '';
    /**
     * Size of the page, can be limited by a server.
     *
     * Generated from protobuf field <code>int32 page_size = 3;</code>
     */
    private $page_size = 0;
    /**
     * Comma separated list of triggeredJob fields to order by,
     * followed by `asc` or `desc` postfix. This list is case-insensitive,
     * default sorting order is ascending, redundant space characters are
     * insignificant.
     * Example: `name asc,update_time, create_time desc`
     * Supported fields are:
     * - `create_time`: corresponds to the time the JobTrigger was created.
     * - `update_time`: corresponds to the time the JobTrigger was last updated.
     * - `last_run_time`: corresponds to the last time the JobTrigger ran.
     * - `name`: corresponds to the JobTrigger's name.
     * - `display_name`: corresponds to the JobTrigger's display name.
     * - `status`: corresponds to JobTrigger's status.
     *
     * Generated from protobuf field <code>string order_by = 4;</code>
     */
    private $order_by = '';
    /**
     * Allows filtering.
     * Supported syntax:
     * * Filter expressions are made up of one or more restrictions.
     * * Restrictions can be combined by `AND` or `OR` logical operators. A
     * sequence of restrictions implicitly uses `AND`.
     * * A restriction has the form of `{field} {operator} {value}`.
     * * Supported fields/values for inspect triggers:
     *     - `status` - HEALTHY|PAUSED|CANCELLED
     *     - `inspected_storage` - DATASTORE|CLOUD_STORAGE|BIGQUERY
     *     - 'last_run_time` - RFC 3339 formatted timestamp, surrounded by
     *     quotation marks. Nanoseconds are ignored.
     *     - 'error_count' - Number of errors that have occurred while running.
     * * The operator must be `=` or `!=` for status and inspected_storage.
     * Examples:
     * * inspected_storage = cloud_storage AND status = HEALTHY
     * * inspected_storage = cloud_storage OR inspected_storage = bigquery
     * * inspected_storage = cloud_storage AND (state = PAUSED OR state = HEALTHY)
     * * last_run_time > \"2017-12-12T00:00:00+00:00\"
     * The length of this field should be no more than 500 characters.
     *
     * Generated from protobuf field <code>string filter = 5;</code>
     */
    private $filter = '';
    /**
     * The type of jobs. Will use `DlpJobType.INSPECT` if not set.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.DlpJobType type = 6;</code>
     */
    private $type = 0;
    /**
     * Deprecated. This field has no effect.
     *
     * Generated from protobuf field <code>string location_id = 7;</code>
     */
    private $location_id = '';

    /**
     * @param string $parent Required. Parent resource name.
     *
     *                       The format of this value varies depending on whether you have [specified a
     *                       processing
     *                       location](https://cloud.google.com/dlp/docs/specifying-location):
     *
     *                       + Projects scope, location specified:<br/>
     *                       `projects/`<var>PROJECT_ID</var>`/locations/`<var>LOCATION_ID</var>
     *                       + Projects scope, no location specified (defaults to global):<br/>
     *                       `projects/`<var>PROJECT_ID</var>
     *
     *                       The following example `parent` string specifies a parent project with the
     *                       identifier `example-project`, and specifies the `europe-west3` location
     *                       for processing data:
     *
     *                       parent=projects/example-project/locations/europe-west3
     *                       Please see {@see DlpServiceClient::projectName()} for help formatting this field.
     *
     * @return \Google\Cloud\Dlp\V2\ListJobTriggersRequest
     *
     * @experimental
     */
    public static function build(string $parent): self
    {
        return (new self())
            ->setParent($parent);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. Parent resource name.
     *           The format of this value varies depending on whether you have [specified a
     *           processing
     *           location](https://cloud.google.com/dlp/docs/specifying-location):
     *           + Projects scope, location specified:<br/>
     *             `projects/`<var>PROJECT_ID</var>`/locations/`<var>LOCATION_ID</var>
     *           + Projects scope, no location specified (defaults to global):<br/>
     *             `projects/`<var>PROJECT_ID</var>
     *           The following example `parent` string specifies a parent project with the
     *           identifier `example-project`, and specifies the `europe-west3` location
     *           for processing data:
     *               parent=projects/example-project/locations/europe-west3
     *     @type string $page_token
     *           Page token to continue retrieval. Comes from previous call
     *           to ListJobTriggers. `order_by` field must not
     *           change for subsequent calls.
     *     @type int $page_size
     *           Size of the page, can be limited by a server.
     *     @type string $order_by
     *           Comma separated list of triggeredJob fields to order by,
     *           followed by `asc` or `desc` postfix. This list is case-insensitive,
     *           default sorting order is ascending, redundant space characters are
     *           insignificant.
     *           Example: `name asc,update_time, create_time desc`
     *           Supported fields are:
     *           - `create_time`: corresponds to the time the JobTrigger was created.
     *           - `update_time`: corresponds to the time the JobTrigger was last updated.
     *           - `last_run_time`: corresponds to the last time the JobTrigger ran.
     *           - `name`: corresponds to the JobTrigger's name.
     *           - `display_name`: corresponds to the JobTrigger's display name.
     *           - `status`: corresponds to JobTrigger's status.
     *     @type string $filter
     *           Allows filtering.
     *           Supported syntax:
     *           * Filter expressions are made up of one or more restrictions.
     *           * Restrictions can be combined by `AND` or `OR` logical operators. A
     *           sequence of restrictions implicitly uses `AND`.
     *           * A restriction has the form of `{field} {operator} {value}`.
     *           * Supported fields/values for inspect triggers:
     *               - `status` - HEALTHY|PAUSED|CANCELLED
     *               - `inspected_storage` - DATASTORE|CLOUD_STORAGE|BIGQUERY
     *               - 'last_run_time` - RFC 3339 formatted timestamp, surrounded by
     *               quotation marks. Nanoseconds are ignored.
     *               - 'error_count' - Number of errors that have occurred while running.
     *           * The operator must be `=` or `!=` for status and inspected_storage.
     *           Examples:
     *           * inspected_storage = cloud_storage AND status = HEALTHY
     *           * inspected_storage = cloud_storage OR inspected_storage = bigquery
     *           * inspected_storage = cloud_storage AND (state = PAUSED OR state = HEALTHY)
     *           * last_run_time > \"2017-12-12T00:00:00+00:00\"
     *           The length of this field should be no more than 500 characters.
     *     @type int $type
     *           The type of jobs. Will use `DlpJobType.INSPECT` if not set.
     *     @type string $location_id
     *           Deprecated. This field has no effect.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Privacy\Dlp\V2\Dlp::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Parent resource name.
     * The format of this value varies depending on whether you have [specified a
     * processing
     * location](https://cloud.google.com/dlp/docs/specifying-location):
     * + Projects scope, location specified:<br/>
     *   `projects/`<var>PROJECT_ID</var>`/locations/`<var>LOCATION_ID</var>
     * + Projects scope, no location specified (defaults to global):<br/>
     *   `projects/`<var>PROJECT_ID</var>
     * The following example `parent` string specifies a parent project with the
     * identifier `example-project`, and specifies the `europe-west3` location
     * for processing data:
     *     parent=projects/example-project/locations/europe-west3
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. Parent resource name.
     * The format of this value varies depending on whether you have [specified a
     * processing
     * location](https://cloud.google.com/dlp/docs/specifying-location):
     * + Projects scope, location specified:<br/>
     *   `projects/`<var>PROJECT_ID</var>`/locations/`<var>LOCATION_ID</var>
     * + Projects scope, no location specified (defaults to global):<br/>
     *   `projects/`<var>PROJECT_ID</var>
     * The following example `parent` string specifies a parent project with the
     * identifier `example-project`, and specifies the `europe-west3` location
     * for processing data:
     *     parent=projects/example-project/locations/europe-west3
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
     * Page token to continue retrieval. Comes from previous call
     * to ListJobTriggers. `order_by` field must not
     * change for subsequent calls.
     *
     * Generated from protobuf field <code>string page_token = 2;</code>
     * @return string
     */
    public function getPageToken()
    {
        return $this->page_token;
    }

    /**
     * Page token to continue retrieval. Comes from previous call
     * to ListJobTriggers. `order_by` field must not
     * change for subsequent calls.
     *
     * Generated from protobuf field <code>string page_token = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->page_token = $var;

        return $this;
    }

    /**
     * Size of the page, can be limited by a server.
     *
     * Generated from protobuf field <code>int32 page_size = 3;</code>
     * @return int
     */
    public function getPageSize()
    {
        return $this->page_size;
    }

    /**
     * Size of the page, can be limited by a server.
     *
     * Generated from protobuf field <code>int32 page_size = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setPageSize($var)
    {
        GPBUtil::checkInt32($var);
        $this->page_size = $var;

        return $this;
    }

    /**
     * Comma separated list of triggeredJob fields to order by,
     * followed by `asc` or `desc` postfix. This list is case-insensitive,
     * default sorting order is ascending, redundant space characters are
     * insignificant.
     * Example: `name asc,update_time, create_time desc`
     * Supported fields are:
     * - `create_time`: corresponds to the time the JobTrigger was created.
     * - `update_time`: corresponds to the time the JobTrigger was last updated.
     * - `last_run_time`: corresponds to the last time the JobTrigger ran.
     * - `name`: corresponds to the JobTrigger's name.
     * - `display_name`: corresponds to the JobTrigger's display name.
     * - `status`: corresponds to JobTrigger's status.
     *
     * Generated from protobuf field <code>string order_by = 4;</code>
     * @return string
     */
    public function getOrderBy()
    {
        return $this->order_by;
    }

    /**
     * Comma separated list of triggeredJob fields to order by,
     * followed by `asc` or `desc` postfix. This list is case-insensitive,
     * default sorting order is ascending, redundant space characters are
     * insignificant.
     * Example: `name asc,update_time, create_time desc`
     * Supported fields are:
     * - `create_time`: corresponds to the time the JobTrigger was created.
     * - `update_time`: corresponds to the time the JobTrigger was last updated.
     * - `last_run_time`: corresponds to the last time the JobTrigger ran.
     * - `name`: corresponds to the JobTrigger's name.
     * - `display_name`: corresponds to the JobTrigger's display name.
     * - `status`: corresponds to JobTrigger's status.
     *
     * Generated from protobuf field <code>string order_by = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setOrderBy($var)
    {
        GPBUtil::checkString($var, True);
        $this->order_by = $var;

        return $this;
    }

    /**
     * Allows filtering.
     * Supported syntax:
     * * Filter expressions are made up of one or more restrictions.
     * * Restrictions can be combined by `AND` or `OR` logical operators. A
     * sequence of restrictions implicitly uses `AND`.
     * * A restriction has the form of `{field} {operator} {value}`.
     * * Supported fields/values for inspect triggers:
     *     - `status` - HEALTHY|PAUSED|CANCELLED
     *     - `inspected_storage` - DATASTORE|CLOUD_STORAGE|BIGQUERY
     *     - 'last_run_time` - RFC 3339 formatted timestamp, surrounded by
     *     quotation marks. Nanoseconds are ignored.
     *     - 'error_count' - Number of errors that have occurred while running.
     * * The operator must be `=` or `!=` for status and inspected_storage.
     * Examples:
     * * inspected_storage = cloud_storage AND status = HEALTHY
     * * inspected_storage = cloud_storage OR inspected_storage = bigquery
     * * inspected_storage = cloud_storage AND (state = PAUSED OR state = HEALTHY)
     * * last_run_time > \"2017-12-12T00:00:00+00:00\"
     * The length of this field should be no more than 500 characters.
     *
     * Generated from protobuf field <code>string filter = 5;</code>
     * @return string
     */
    public function getFilter()
    {
        return $this->filter;
    }

    /**
     * Allows filtering.
     * Supported syntax:
     * * Filter expressions are made up of one or more restrictions.
     * * Restrictions can be combined by `AND` or `OR` logical operators. A
     * sequence of restrictions implicitly uses `AND`.
     * * A restriction has the form of `{field} {operator} {value}`.
     * * Supported fields/values for inspect triggers:
     *     - `status` - HEALTHY|PAUSED|CANCELLED
     *     - `inspected_storage` - DATASTORE|CLOUD_STORAGE|BIGQUERY
     *     - 'last_run_time` - RFC 3339 formatted timestamp, surrounded by
     *     quotation marks. Nanoseconds are ignored.
     *     - 'error_count' - Number of errors that have occurred while running.
     * * The operator must be `=` or `!=` for status and inspected_storage.
     * Examples:
     * * inspected_storage = cloud_storage AND status = HEALTHY
     * * inspected_storage = cloud_storage OR inspected_storage = bigquery
     * * inspected_storage = cloud_storage AND (state = PAUSED OR state = HEALTHY)
     * * last_run_time > \"2017-12-12T00:00:00+00:00\"
     * The length of this field should be no more than 500 characters.
     *
     * Generated from protobuf field <code>string filter = 5;</code>
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
     * The type of jobs. Will use `DlpJobType.INSPECT` if not set.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.DlpJobType type = 6;</code>
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * The type of jobs. Will use `DlpJobType.INSPECT` if not set.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.DlpJobType type = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Dlp\V2\DlpJobType::class);
        $this->type = $var;

        return $this;
    }

    /**
     * Deprecated. This field has no effect.
     *
     * Generated from protobuf field <code>string location_id = 7;</code>
     * @return string
     */
    public function getLocationId()
    {
        return $this->location_id;
    }

    /**
     * Deprecated. This field has no effect.
     *
     * Generated from protobuf field <code>string location_id = 7;</code>
     * @param string $var
     * @return $this
     */
    public function setLocationId($var)
    {
        GPBUtil::checkString($var, True);
        $this->location_id = $var;

        return $this;
    }

}

