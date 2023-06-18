<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/tasks/v2beta3/cloudtasks.proto

namespace Google\Cloud\Tasks\V2beta3;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Response message for [ListQueues][google.cloud.tasks.v2beta3.CloudTasks.ListQueues].
 *
 * Generated from protobuf message <code>google.cloud.tasks.v2beta3.ListQueuesResponse</code>
 */
class ListQueuesResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * The list of queues.
     *
     * Generated from protobuf field <code>repeated .google.cloud.tasks.v2beta3.Queue queues = 1;</code>
     */
    private $queues;
    /**
     * A token to retrieve next page of results.
     * To return the next page of results, call
     * [ListQueues][google.cloud.tasks.v2beta3.CloudTasks.ListQueues] with this value as the
     * [page_token][google.cloud.tasks.v2beta3.ListQueuesRequest.page_token].
     * If the next_page_token is empty, there are no more results.
     * The page token is valid for only 2 hours.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     */
    private $next_page_token = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Google\Cloud\Tasks\V2beta3\Queue>|\Google\Protobuf\Internal\RepeatedField $queues
     *           The list of queues.
     *     @type string $next_page_token
     *           A token to retrieve next page of results.
     *           To return the next page of results, call
     *           [ListQueues][google.cloud.tasks.v2beta3.CloudTasks.ListQueues] with this value as the
     *           [page_token][google.cloud.tasks.v2beta3.ListQueuesRequest.page_token].
     *           If the next_page_token is empty, there are no more results.
     *           The page token is valid for only 2 hours.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Tasks\V2Beta3\Cloudtasks::initOnce();
        parent::__construct($data);
    }

    /**
     * The list of queues.
     *
     * Generated from protobuf field <code>repeated .google.cloud.tasks.v2beta3.Queue queues = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getQueues()
    {
        return $this->queues;
    }

    /**
     * The list of queues.
     *
     * Generated from protobuf field <code>repeated .google.cloud.tasks.v2beta3.Queue queues = 1;</code>
     * @param array<\Google\Cloud\Tasks\V2beta3\Queue>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setQueues($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Tasks\V2beta3\Queue::class);
        $this->queues = $arr;

        return $this;
    }

    /**
     * A token to retrieve next page of results.
     * To return the next page of results, call
     * [ListQueues][google.cloud.tasks.v2beta3.CloudTasks.ListQueues] with this value as the
     * [page_token][google.cloud.tasks.v2beta3.ListQueuesRequest.page_token].
     * If the next_page_token is empty, there are no more results.
     * The page token is valid for only 2 hours.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @return string
     */
    public function getNextPageToken()
    {
        return $this->next_page_token;
    }

    /**
     * A token to retrieve next page of results.
     * To return the next page of results, call
     * [ListQueues][google.cloud.tasks.v2beta3.CloudTasks.ListQueues] with this value as the
     * [page_token][google.cloud.tasks.v2beta3.ListQueuesRequest.page_token].
     * If the next_page_token is empty, there are no more results.
     * The page token is valid for only 2 hours.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setNextPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->next_page_token = $var;

        return $this;
    }

}

