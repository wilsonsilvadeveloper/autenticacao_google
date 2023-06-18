<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/devtools/source/v1/source_context.proto

namespace Google\Cloud\DevTools\Source\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A unique identifier for a cloud repo.
 *
 * Generated from protobuf message <code>google.devtools.source.v1.RepoId</code>
 */
class RepoId extends \Google\Protobuf\Internal\Message
{
    protected $id;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\DevTools\Source\V1\ProjectRepoId $project_repo_id
     *           A combination of a project ID and a repo name.
     *     @type string $uid
     *           A server-assigned, globally unique identifier.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Devtools\Source\V1\SourceContext::initOnce();
        parent::__construct($data);
    }

    /**
     * A combination of a project ID and a repo name.
     *
     * Generated from protobuf field <code>.google.devtools.source.v1.ProjectRepoId project_repo_id = 1;</code>
     * @return \Google\Cloud\DevTools\Source\V1\ProjectRepoId|null
     */
    public function getProjectRepoId()
    {
        return $this->readOneof(1);
    }

    public function hasProjectRepoId()
    {
        return $this->hasOneof(1);
    }

    /**
     * A combination of a project ID and a repo name.
     *
     * Generated from protobuf field <code>.google.devtools.source.v1.ProjectRepoId project_repo_id = 1;</code>
     * @param \Google\Cloud\DevTools\Source\V1\ProjectRepoId $var
     * @return $this
     */
    public function setProjectRepoId($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\DevTools\Source\V1\ProjectRepoId::class);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * A server-assigned, globally unique identifier.
     *
     * Generated from protobuf field <code>string uid = 2;</code>
     * @return string
     */
    public function getUid()
    {
        return $this->readOneof(2);
    }

    public function hasUid()
    {
        return $this->hasOneof(2);
    }

    /**
     * A server-assigned, globally unique identifier.
     *
     * Generated from protobuf field <code>string uid = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setUid($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getId()
    {
        return $this->whichOneof("id");
    }

}
