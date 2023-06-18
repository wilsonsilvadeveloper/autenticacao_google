<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/appengine/v1/app_yaml.proto

namespace Google\Cloud\AppEngine\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Third-party Python runtime library that is required by the application.
 *
 * Generated from protobuf message <code>google.appengine.v1.Library</code>
 */
class Library extends \Google\Protobuf\Internal\Message
{
    /**
     * Name of the library. Example: "django".
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    private $name = '';
    /**
     * Version of the library to select, or "latest".
     *
     * Generated from protobuf field <code>string version = 2;</code>
     */
    private $version = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Name of the library. Example: "django".
     *     @type string $version
     *           Version of the library to select, or "latest".
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Appengine\V1\AppYaml::initOnce();
        parent::__construct($data);
    }

    /**
     * Name of the library. Example: "django".
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Name of the library. Example: "django".
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * Version of the library to select, or "latest".
     *
     * Generated from protobuf field <code>string version = 2;</code>
     * @return string
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Version of the library to select, or "latest".
     *
     * Generated from protobuf field <code>string version = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setVersion($var)
    {
        GPBUtil::checkString($var, True);
        $this->version = $var;

        return $this;
    }

}

