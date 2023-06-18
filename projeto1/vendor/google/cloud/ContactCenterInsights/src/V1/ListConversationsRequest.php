<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/contactcenterinsights/v1/contact_center_insights.proto

namespace Google\Cloud\ContactCenterInsights\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request to list conversations.
 *
 * Generated from protobuf message <code>google.cloud.contactcenterinsights.v1.ListConversationsRequest</code>
 */
class ListConversationsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The parent resource of the conversation.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $parent = '';
    /**
     * The maximum number of conversations to return in the response. A valid page
     * size ranges from 0 to 1,000 inclusive. If the page size is zero or
     * unspecified, a default page size of 100 will be chosen. Note that a call
     * might return fewer results than the requested page size.
     *
     * Generated from protobuf field <code>int32 page_size = 2;</code>
     */
    private $page_size = 0;
    /**
     * The value returned by the last `ListConversationsResponse`. This value
     * indicates that this is a continuation of a prior `ListConversations` call
     * and that the system should return the next page of data.
     *
     * Generated from protobuf field <code>string page_token = 3;</code>
     */
    private $page_token = '';
    /**
     * A filter to reduce results to a specific subset. Useful for querying
     * conversations with specific properties.
     *
     * Generated from protobuf field <code>string filter = 4;</code>
     */
    private $filter = '';
    /**
     * The level of details of the conversation. Default is `BASIC`.
     *
     * Generated from protobuf field <code>.google.cloud.contactcenterinsights.v1.ConversationView view = 5;</code>
     */
    private $view = 0;

    /**
     * @param string $parent Required. The parent resource of the conversation. Please see
     *                       {@see ContactCenterInsightsClient::locationName()} for help formatting this field.
     *
     * @return \Google\Cloud\ContactCenterInsights\V1\ListConversationsRequest
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
     *           Required. The parent resource of the conversation.
     *     @type int $page_size
     *           The maximum number of conversations to return in the response. A valid page
     *           size ranges from 0 to 1,000 inclusive. If the page size is zero or
     *           unspecified, a default page size of 100 will be chosen. Note that a call
     *           might return fewer results than the requested page size.
     *     @type string $page_token
     *           The value returned by the last `ListConversationsResponse`. This value
     *           indicates that this is a continuation of a prior `ListConversations` call
     *           and that the system should return the next page of data.
     *     @type string $filter
     *           A filter to reduce results to a specific subset. Useful for querying
     *           conversations with specific properties.
     *     @type int $view
     *           The level of details of the conversation. Default is `BASIC`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Contactcenterinsights\V1\ContactCenterInsights::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The parent resource of the conversation.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The parent resource of the conversation.
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
     * The maximum number of conversations to return in the response. A valid page
     * size ranges from 0 to 1,000 inclusive. If the page size is zero or
     * unspecified, a default page size of 100 will be chosen. Note that a call
     * might return fewer results than the requested page size.
     *
     * Generated from protobuf field <code>int32 page_size = 2;</code>
     * @return int
     */
    public function getPageSize()
    {
        return $this->page_size;
    }

    /**
     * The maximum number of conversations to return in the response. A valid page
     * size ranges from 0 to 1,000 inclusive. If the page size is zero or
     * unspecified, a default page size of 100 will be chosen. Note that a call
     * might return fewer results than the requested page size.
     *
     * Generated from protobuf field <code>int32 page_size = 2;</code>
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
     * The value returned by the last `ListConversationsResponse`. This value
     * indicates that this is a continuation of a prior `ListConversations` call
     * and that the system should return the next page of data.
     *
     * Generated from protobuf field <code>string page_token = 3;</code>
     * @return string
     */
    public function getPageToken()
    {
        return $this->page_token;
    }

    /**
     * The value returned by the last `ListConversationsResponse`. This value
     * indicates that this is a continuation of a prior `ListConversations` call
     * and that the system should return the next page of data.
     *
     * Generated from protobuf field <code>string page_token = 3;</code>
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
     * A filter to reduce results to a specific subset. Useful for querying
     * conversations with specific properties.
     *
     * Generated from protobuf field <code>string filter = 4;</code>
     * @return string
     */
    public function getFilter()
    {
        return $this->filter;
    }

    /**
     * A filter to reduce results to a specific subset. Useful for querying
     * conversations with specific properties.
     *
     * Generated from protobuf field <code>string filter = 4;</code>
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
     * The level of details of the conversation. Default is `BASIC`.
     *
     * Generated from protobuf field <code>.google.cloud.contactcenterinsights.v1.ConversationView view = 5;</code>
     * @return int
     */
    public function getView()
    {
        return $this->view;
    }

    /**
     * The level of details of the conversation. Default is `BASIC`.
     *
     * Generated from protobuf field <code>.google.cloud.contactcenterinsights.v1.ConversationView view = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setView($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\ContactCenterInsights\V1\ConversationView::class);
        $this->view = $var;

        return $this;
    }

}

