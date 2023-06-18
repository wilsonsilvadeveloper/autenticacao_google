<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dataplex/v1/service.proto

namespace Google\Cloud\Dataplex\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * List sessions response.
 *
 * Generated from protobuf message <code>google.cloud.dataplex.v1.ListSessionsResponse</code>
 */
class ListSessionsResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Sessions under a given environment.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dataplex.v1.Session sessions = 1;</code>
     */
    private $sessions;
    /**
     * Token to retrieve the next page of results, or empty if there are no more
     * results in the list.
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
     *     @type array<\Google\Cloud\Dataplex\V1\Session>|\Google\Protobuf\Internal\RepeatedField $sessions
     *           Sessions under a given environment.
     *     @type string $next_page_token
     *           Token to retrieve the next page of results, or empty if there are no more
     *           results in the list.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dataplex\V1\Service::initOnce();
        parent::__construct($data);
    }

    /**
     * Sessions under a given environment.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dataplex.v1.Session sessions = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSessions()
    {
        return $this->sessions;
    }

    /**
     * Sessions under a given environment.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dataplex.v1.Session sessions = 1;</code>
     * @param array<\Google\Cloud\Dataplex\V1\Session>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSessions($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Dataplex\V1\Session::class);
        $this->sessions = $arr;

        return $this;
    }

    /**
     * Token to retrieve the next page of results, or empty if there are no more
     * results in the list.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @return string
     */
    public function getNextPageToken()
    {
        return $this->next_page_token;
    }

    /**
     * Token to retrieve the next page of results, or empty if there are no more
     * results in the list.
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

