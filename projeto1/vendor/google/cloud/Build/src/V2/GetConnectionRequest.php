<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/devtools/cloudbuild/v2/repositories.proto

namespace Google\Cloud\Build\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Message for getting the details of a Connection.
 *
 * Generated from protobuf message <code>google.devtools.cloudbuild.v2.GetConnectionRequest</code>
 */
class GetConnectionRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The name of the Connection to retrieve.
     * Format: `projects/&#42;&#47;locations/&#42;&#47;connections/&#42;`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $name = '';

    /**
     * @param string $name Required. The name of the Connection to retrieve.
     *                     Format: `projects/&#42;/locations/&#42;/connections/*`. Please see
     *                     {@see RepositoryManagerClient::connectionName()} for help formatting this field.
     *
     * @return \Google\Cloud\Build\V2\GetConnectionRequest
     *
     * @experimental
     */
    public static function build(string $name): self
    {
        return (new self())
            ->setName($name);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. The name of the Connection to retrieve.
     *           Format: `projects/&#42;&#47;locations/&#42;&#47;connections/&#42;`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Devtools\Cloudbuild\V2\Repositories::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The name of the Connection to retrieve.
     * Format: `projects/&#42;&#47;locations/&#42;&#47;connections/&#42;`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. The name of the Connection to retrieve.
     * Format: `projects/&#42;&#47;locations/&#42;&#47;connections/&#42;`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

}

