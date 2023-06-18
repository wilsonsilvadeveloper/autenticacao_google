<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/alloydb/v1/resources.proto

namespace Google\Cloud\AlloyDb\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * EncryptionInfo describes the encryption information of a cluster or a backup.
 *
 * Generated from protobuf message <code>google.cloud.alloydb.v1.EncryptionInfo</code>
 */
class EncryptionInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. Type of encryption.
     *
     * Generated from protobuf field <code>.google.cloud.alloydb.v1.EncryptionInfo.Type encryption_type = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $encryption_type = 0;
    /**
     * Output only. Cloud KMS key versions that are being used to protect the
     * database or the backup.
     *
     * Generated from protobuf field <code>repeated string kms_key_versions = 2 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     */
    private $kms_key_versions;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $encryption_type
     *           Output only. Type of encryption.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $kms_key_versions
     *           Output only. Cloud KMS key versions that are being used to protect the
     *           database or the backup.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Alloydb\V1\Resources::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. Type of encryption.
     *
     * Generated from protobuf field <code>.google.cloud.alloydb.v1.EncryptionInfo.Type encryption_type = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getEncryptionType()
    {
        return $this->encryption_type;
    }

    /**
     * Output only. Type of encryption.
     *
     * Generated from protobuf field <code>.google.cloud.alloydb.v1.EncryptionInfo.Type encryption_type = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setEncryptionType($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\AlloyDb\V1\EncryptionInfo\Type::class);
        $this->encryption_type = $var;

        return $this;
    }

    /**
     * Output only. Cloud KMS key versions that are being used to protect the
     * database or the backup.
     *
     * Generated from protobuf field <code>repeated string kms_key_versions = 2 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getKmsKeyVersions()
    {
        return $this->kms_key_versions;
    }

    /**
     * Output only. Cloud KMS key versions that are being used to protect the
     * database or the backup.
     *
     * Generated from protobuf field <code>repeated string kms_key_versions = 2 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setKmsKeyVersions($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->kms_key_versions = $arr;

        return $this;
    }

}

