<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/sql/v1/cloud_sql_instances.proto

namespace Google\Cloud\Sql\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Database instance restore backup request.
 *
 * Generated from protobuf message <code>google.cloud.sql.v1.InstancesRestoreBackupRequest</code>
 */
class InstancesRestoreBackupRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Parameters required to perform the restore backup operation.
     *
     * Generated from protobuf field <code>.google.cloud.sql.v1.RestoreBackupContext restore_backup_context = 1;</code>
     */
    private $restore_backup_context = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Sql\V1\RestoreBackupContext $restore_backup_context
     *           Parameters required to perform the restore backup operation.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Sql\V1\CloudSqlInstances::initOnce();
        parent::__construct($data);
    }

    /**
     * Parameters required to perform the restore backup operation.
     *
     * Generated from protobuf field <code>.google.cloud.sql.v1.RestoreBackupContext restore_backup_context = 1;</code>
     * @return \Google\Cloud\Sql\V1\RestoreBackupContext|null
     */
    public function getRestoreBackupContext()
    {
        return $this->restore_backup_context;
    }

    public function hasRestoreBackupContext()
    {
        return isset($this->restore_backup_context);
    }

    public function clearRestoreBackupContext()
    {
        unset($this->restore_backup_context);
    }

    /**
     * Parameters required to perform the restore backup operation.
     *
     * Generated from protobuf field <code>.google.cloud.sql.v1.RestoreBackupContext restore_backup_context = 1;</code>
     * @param \Google\Cloud\Sql\V1\RestoreBackupContext $var
     * @return $this
     */
    public function setRestoreBackupContext($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Sql\V1\RestoreBackupContext::class);
        $this->restore_backup_context = $var;

        return $this;
    }

}

