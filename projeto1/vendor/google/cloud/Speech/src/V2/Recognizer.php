<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/speech/v2/cloud_speech.proto

namespace Google\Cloud\Speech\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A Recognizer message. Stores recognition configuration and metadata.
 *
 * Generated from protobuf message <code>google.cloud.speech.v2.Recognizer</code>
 */
class Recognizer extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. The resource name of the Recognizer.
     * Format: `projects/{project}/locations/{location}/recognizers/{recognizer}`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $name = '';
    /**
     * Output only. System-assigned unique identifier for the Recognizer.
     *
     * Generated from protobuf field <code>string uid = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $uid = '';
    /**
     * User-settable, human-readable name for the Recognizer. Must be 63
     * characters or less.
     *
     * Generated from protobuf field <code>string display_name = 3;</code>
     */
    private $display_name = '';
    /**
     * Required. Which model to use for recognition requests. Select the model
     * best suited to your domain to get best results.
     * Guidance for choosing which model to use can be found in the [Transcription
     * Models
     * Documentation](https://cloud.google.com/speech-to-text/v2/docs/transcription-model)
     * and the models supported in each region can be found in the [Table Of
     * Supported
     * Models](https://cloud.google.com/speech-to-text/v2/docs/speech-to-text-supported-languages).
     *
     * Generated from protobuf field <code>string model = 4 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $model = '';
    /**
     * Required. The language of the supplied audio as a
     * [BCP-47](https://www.rfc-editor.org/rfc/bcp/bcp47.txt) language tag.
     * Supported languages for each model are listed in the [Table of Supported
     * Models](https://cloud.google.com/speech-to-text/v2/docs/speech-to-text-supported-languages).
     * If additional languages are provided, recognition result will contain
     * recognition in the most likely language detected. The recognition result
     * will include the language tag of the language detected in the audio.
     * When you create or update a Recognizer, these values are
     * stored in normalized BCP-47 form. For example, "en-us" is stored as
     * "en-US".
     *
     * Generated from protobuf field <code>repeated string language_codes = 17 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $language_codes;
    /**
     * Default configuration to use for requests with this Recognizer.
     * This can be overwritten by inline configuration in the
     * [RecognizeRequest.config][google.cloud.speech.v2.RecognizeRequest.config]
     * field.
     *
     * Generated from protobuf field <code>.google.cloud.speech.v2.RecognitionConfig default_recognition_config = 6;</code>
     */
    private $default_recognition_config = null;
    /**
     * Allows users to store small amounts of arbitrary data.
     * Both the key and the value must be 63 characters or less each.
     * At most 100 annotations.
     *
     * Generated from protobuf field <code>map<string, string> annotations = 7;</code>
     */
    private $annotations;
    /**
     * Output only. The Recognizer lifecycle state.
     *
     * Generated from protobuf field <code>.google.cloud.speech.v2.Recognizer.State state = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $state = 0;
    /**
     * Output only. Creation time.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $create_time = null;
    /**
     * Output only. The most recent time this Recognizer was modified.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 10 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $update_time = null;
    /**
     * Output only. The time at which this Recognizer was requested for deletion.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp delete_time = 11 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $delete_time = null;
    /**
     * Output only. The time at which this Recognizer will be purged.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp expire_time = 14 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $expire_time = null;
    /**
     * Output only. This checksum is computed by the server based on the value of
     * other fields. This may be sent on update, undelete, and delete requests to
     * ensure the client has an up-to-date value before proceeding.
     *
     * Generated from protobuf field <code>string etag = 12 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $etag = '';
    /**
     * Output only. Whether or not this Recognizer is in the process of being
     * updated.
     *
     * Generated from protobuf field <code>bool reconciling = 13 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $reconciling = false;
    /**
     * Output only. The [KMS key
     * name](https://cloud.google.com/kms/docs/resource-hierarchy#keys) with which
     * the Recognizer is encrypted. The expected format is
     * `projects/{project}/locations/{location}/keyRings/{key_ring}/cryptoKeys/{crypto_key}`.
     *
     * Generated from protobuf field <code>string kms_key_name = 15 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     */
    private $kms_key_name = '';
    /**
     * Output only. The [KMS key version
     * name](https://cloud.google.com/kms/docs/resource-hierarchy#key_versions)
     * with which the Recognizer is encrypted. The expected format is
     * `projects/{project}/locations/{location}/keyRings/{key_ring}/cryptoKeys/{crypto_key}/cryptoKeyVersions/{crypto_key_version}`.
     *
     * Generated from protobuf field <code>string kms_key_version_name = 16 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     */
    private $kms_key_version_name = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Output only. The resource name of the Recognizer.
     *           Format: `projects/{project}/locations/{location}/recognizers/{recognizer}`.
     *     @type string $uid
     *           Output only. System-assigned unique identifier for the Recognizer.
     *     @type string $display_name
     *           User-settable, human-readable name for the Recognizer. Must be 63
     *           characters or less.
     *     @type string $model
     *           Required. Which model to use for recognition requests. Select the model
     *           best suited to your domain to get best results.
     *           Guidance for choosing which model to use can be found in the [Transcription
     *           Models
     *           Documentation](https://cloud.google.com/speech-to-text/v2/docs/transcription-model)
     *           and the models supported in each region can be found in the [Table Of
     *           Supported
     *           Models](https://cloud.google.com/speech-to-text/v2/docs/speech-to-text-supported-languages).
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $language_codes
     *           Required. The language of the supplied audio as a
     *           [BCP-47](https://www.rfc-editor.org/rfc/bcp/bcp47.txt) language tag.
     *           Supported languages for each model are listed in the [Table of Supported
     *           Models](https://cloud.google.com/speech-to-text/v2/docs/speech-to-text-supported-languages).
     *           If additional languages are provided, recognition result will contain
     *           recognition in the most likely language detected. The recognition result
     *           will include the language tag of the language detected in the audio.
     *           When you create or update a Recognizer, these values are
     *           stored in normalized BCP-47 form. For example, "en-us" is stored as
     *           "en-US".
     *     @type \Google\Cloud\Speech\V2\RecognitionConfig $default_recognition_config
     *           Default configuration to use for requests with this Recognizer.
     *           This can be overwritten by inline configuration in the
     *           [RecognizeRequest.config][google.cloud.speech.v2.RecognizeRequest.config]
     *           field.
     *     @type array|\Google\Protobuf\Internal\MapField $annotations
     *           Allows users to store small amounts of arbitrary data.
     *           Both the key and the value must be 63 characters or less each.
     *           At most 100 annotations.
     *     @type int $state
     *           Output only. The Recognizer lifecycle state.
     *     @type \Google\Protobuf\Timestamp $create_time
     *           Output only. Creation time.
     *     @type \Google\Protobuf\Timestamp $update_time
     *           Output only. The most recent time this Recognizer was modified.
     *     @type \Google\Protobuf\Timestamp $delete_time
     *           Output only. The time at which this Recognizer was requested for deletion.
     *     @type \Google\Protobuf\Timestamp $expire_time
     *           Output only. The time at which this Recognizer will be purged.
     *     @type string $etag
     *           Output only. This checksum is computed by the server based on the value of
     *           other fields. This may be sent on update, undelete, and delete requests to
     *           ensure the client has an up-to-date value before proceeding.
     *     @type bool $reconciling
     *           Output only. Whether or not this Recognizer is in the process of being
     *           updated.
     *     @type string $kms_key_name
     *           Output only. The [KMS key
     *           name](https://cloud.google.com/kms/docs/resource-hierarchy#keys) with which
     *           the Recognizer is encrypted. The expected format is
     *           `projects/{project}/locations/{location}/keyRings/{key_ring}/cryptoKeys/{crypto_key}`.
     *     @type string $kms_key_version_name
     *           Output only. The [KMS key version
     *           name](https://cloud.google.com/kms/docs/resource-hierarchy#key_versions)
     *           with which the Recognizer is encrypted. The expected format is
     *           `projects/{project}/locations/{location}/keyRings/{key_ring}/cryptoKeys/{crypto_key}/cryptoKeyVersions/{crypto_key_version}`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Speech\V2\CloudSpeech::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. The resource name of the Recognizer.
     * Format: `projects/{project}/locations/{location}/recognizers/{recognizer}`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Output only. The resource name of the Recognizer.
     * Format: `projects/{project}/locations/{location}/recognizers/{recognizer}`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
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
     * Output only. System-assigned unique identifier for the Recognizer.
     *
     * Generated from protobuf field <code>string uid = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getUid()
    {
        return $this->uid;
    }

    /**
     * Output only. System-assigned unique identifier for the Recognizer.
     *
     * Generated from protobuf field <code>string uid = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setUid($var)
    {
        GPBUtil::checkString($var, True);
        $this->uid = $var;

        return $this;
    }

    /**
     * User-settable, human-readable name for the Recognizer. Must be 63
     * characters or less.
     *
     * Generated from protobuf field <code>string display_name = 3;</code>
     * @return string
     */
    public function getDisplayName()
    {
        return $this->display_name;
    }

    /**
     * User-settable, human-readable name for the Recognizer. Must be 63
     * characters or less.
     *
     * Generated from protobuf field <code>string display_name = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setDisplayName($var)
    {
        GPBUtil::checkString($var, True);
        $this->display_name = $var;

        return $this;
    }

    /**
     * Required. Which model to use for recognition requests. Select the model
     * best suited to your domain to get best results.
     * Guidance for choosing which model to use can be found in the [Transcription
     * Models
     * Documentation](https://cloud.google.com/speech-to-text/v2/docs/transcription-model)
     * and the models supported in each region can be found in the [Table Of
     * Supported
     * Models](https://cloud.google.com/speech-to-text/v2/docs/speech-to-text-supported-languages).
     *
     * Generated from protobuf field <code>string model = 4 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * Required. Which model to use for recognition requests. Select the model
     * best suited to your domain to get best results.
     * Guidance for choosing which model to use can be found in the [Transcription
     * Models
     * Documentation](https://cloud.google.com/speech-to-text/v2/docs/transcription-model)
     * and the models supported in each region can be found in the [Table Of
     * Supported
     * Models](https://cloud.google.com/speech-to-text/v2/docs/speech-to-text-supported-languages).
     *
     * Generated from protobuf field <code>string model = 4 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setModel($var)
    {
        GPBUtil::checkString($var, True);
        $this->model = $var;

        return $this;
    }

    /**
     * Required. The language of the supplied audio as a
     * [BCP-47](https://www.rfc-editor.org/rfc/bcp/bcp47.txt) language tag.
     * Supported languages for each model are listed in the [Table of Supported
     * Models](https://cloud.google.com/speech-to-text/v2/docs/speech-to-text-supported-languages).
     * If additional languages are provided, recognition result will contain
     * recognition in the most likely language detected. The recognition result
     * will include the language tag of the language detected in the audio.
     * When you create or update a Recognizer, these values are
     * stored in normalized BCP-47 form. For example, "en-us" is stored as
     * "en-US".
     *
     * Generated from protobuf field <code>repeated string language_codes = 17 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getLanguageCodes()
    {
        return $this->language_codes;
    }

    /**
     * Required. The language of the supplied audio as a
     * [BCP-47](https://www.rfc-editor.org/rfc/bcp/bcp47.txt) language tag.
     * Supported languages for each model are listed in the [Table of Supported
     * Models](https://cloud.google.com/speech-to-text/v2/docs/speech-to-text-supported-languages).
     * If additional languages are provided, recognition result will contain
     * recognition in the most likely language detected. The recognition result
     * will include the language tag of the language detected in the audio.
     * When you create or update a Recognizer, these values are
     * stored in normalized BCP-47 form. For example, "en-us" is stored as
     * "en-US".
     *
     * Generated from protobuf field <code>repeated string language_codes = 17 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setLanguageCodes($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->language_codes = $arr;

        return $this;
    }

    /**
     * Default configuration to use for requests with this Recognizer.
     * This can be overwritten by inline configuration in the
     * [RecognizeRequest.config][google.cloud.speech.v2.RecognizeRequest.config]
     * field.
     *
     * Generated from protobuf field <code>.google.cloud.speech.v2.RecognitionConfig default_recognition_config = 6;</code>
     * @return \Google\Cloud\Speech\V2\RecognitionConfig|null
     */
    public function getDefaultRecognitionConfig()
    {
        return $this->default_recognition_config;
    }

    public function hasDefaultRecognitionConfig()
    {
        return isset($this->default_recognition_config);
    }

    public function clearDefaultRecognitionConfig()
    {
        unset($this->default_recognition_config);
    }

    /**
     * Default configuration to use for requests with this Recognizer.
     * This can be overwritten by inline configuration in the
     * [RecognizeRequest.config][google.cloud.speech.v2.RecognizeRequest.config]
     * field.
     *
     * Generated from protobuf field <code>.google.cloud.speech.v2.RecognitionConfig default_recognition_config = 6;</code>
     * @param \Google\Cloud\Speech\V2\RecognitionConfig $var
     * @return $this
     */
    public function setDefaultRecognitionConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Speech\V2\RecognitionConfig::class);
        $this->default_recognition_config = $var;

        return $this;
    }

    /**
     * Allows users to store small amounts of arbitrary data.
     * Both the key and the value must be 63 characters or less each.
     * At most 100 annotations.
     *
     * Generated from protobuf field <code>map<string, string> annotations = 7;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getAnnotations()
    {
        return $this->annotations;
    }

    /**
     * Allows users to store small amounts of arbitrary data.
     * Both the key and the value must be 63 characters or less each.
     * At most 100 annotations.
     *
     * Generated from protobuf field <code>map<string, string> annotations = 7;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setAnnotations($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->annotations = $arr;

        return $this;
    }

    /**
     * Output only. The Recognizer lifecycle state.
     *
     * Generated from protobuf field <code>.google.cloud.speech.v2.Recognizer.State state = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Output only. The Recognizer lifecycle state.
     *
     * Generated from protobuf field <code>.google.cloud.speech.v2.Recognizer.State state = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setState($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Speech\V2\Recognizer\State::class);
        $this->state = $var;

        return $this;
    }

    /**
     * Output only. Creation time.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getCreateTime()
    {
        return $this->create_time;
    }

    public function hasCreateTime()
    {
        return isset($this->create_time);
    }

    public function clearCreateTime()
    {
        unset($this->create_time);
    }

    /**
     * Output only. Creation time.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setCreateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->create_time = $var;

        return $this;
    }

    /**
     * Output only. The most recent time this Recognizer was modified.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 10 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getUpdateTime()
    {
        return $this->update_time;
    }

    public function hasUpdateTime()
    {
        return isset($this->update_time);
    }

    public function clearUpdateTime()
    {
        unset($this->update_time);
    }

    /**
     * Output only. The most recent time this Recognizer was modified.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 10 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setUpdateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->update_time = $var;

        return $this;
    }

    /**
     * Output only. The time at which this Recognizer was requested for deletion.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp delete_time = 11 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getDeleteTime()
    {
        return $this->delete_time;
    }

    public function hasDeleteTime()
    {
        return isset($this->delete_time);
    }

    public function clearDeleteTime()
    {
        unset($this->delete_time);
    }

    /**
     * Output only. The time at which this Recognizer was requested for deletion.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp delete_time = 11 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setDeleteTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->delete_time = $var;

        return $this;
    }

    /**
     * Output only. The time at which this Recognizer will be purged.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp expire_time = 14 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getExpireTime()
    {
        return $this->expire_time;
    }

    public function hasExpireTime()
    {
        return isset($this->expire_time);
    }

    public function clearExpireTime()
    {
        unset($this->expire_time);
    }

    /**
     * Output only. The time at which this Recognizer will be purged.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp expire_time = 14 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setExpireTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->expire_time = $var;

        return $this;
    }

    /**
     * Output only. This checksum is computed by the server based on the value of
     * other fields. This may be sent on update, undelete, and delete requests to
     * ensure the client has an up-to-date value before proceeding.
     *
     * Generated from protobuf field <code>string etag = 12 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getEtag()
    {
        return $this->etag;
    }

    /**
     * Output only. This checksum is computed by the server based on the value of
     * other fields. This may be sent on update, undelete, and delete requests to
     * ensure the client has an up-to-date value before proceeding.
     *
     * Generated from protobuf field <code>string etag = 12 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setEtag($var)
    {
        GPBUtil::checkString($var, True);
        $this->etag = $var;

        return $this;
    }

    /**
     * Output only. Whether or not this Recognizer is in the process of being
     * updated.
     *
     * Generated from protobuf field <code>bool reconciling = 13 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return bool
     */
    public function getReconciling()
    {
        return $this->reconciling;
    }

    /**
     * Output only. Whether or not this Recognizer is in the process of being
     * updated.
     *
     * Generated from protobuf field <code>bool reconciling = 13 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param bool $var
     * @return $this
     */
    public function setReconciling($var)
    {
        GPBUtil::checkBool($var);
        $this->reconciling = $var;

        return $this;
    }

    /**
     * Output only. The [KMS key
     * name](https://cloud.google.com/kms/docs/resource-hierarchy#keys) with which
     * the Recognizer is encrypted. The expected format is
     * `projects/{project}/locations/{location}/keyRings/{key_ring}/cryptoKeys/{crypto_key}`.
     *
     * Generated from protobuf field <code>string kms_key_name = 15 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getKmsKeyName()
    {
        return $this->kms_key_name;
    }

    /**
     * Output only. The [KMS key
     * name](https://cloud.google.com/kms/docs/resource-hierarchy#keys) with which
     * the Recognizer is encrypted. The expected format is
     * `projects/{project}/locations/{location}/keyRings/{key_ring}/cryptoKeys/{crypto_key}`.
     *
     * Generated from protobuf field <code>string kms_key_name = 15 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setKmsKeyName($var)
    {
        GPBUtil::checkString($var, True);
        $this->kms_key_name = $var;

        return $this;
    }

    /**
     * Output only. The [KMS key version
     * name](https://cloud.google.com/kms/docs/resource-hierarchy#key_versions)
     * with which the Recognizer is encrypted. The expected format is
     * `projects/{project}/locations/{location}/keyRings/{key_ring}/cryptoKeys/{crypto_key}/cryptoKeyVersions/{crypto_key_version}`.
     *
     * Generated from protobuf field <code>string kms_key_version_name = 16 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getKmsKeyVersionName()
    {
        return $this->kms_key_version_name;
    }

    /**
     * Output only. The [KMS key version
     * name](https://cloud.google.com/kms/docs/resource-hierarchy#key_versions)
     * with which the Recognizer is encrypted. The expected format is
     * `projects/{project}/locations/{location}/keyRings/{key_ring}/cryptoKeys/{crypto_key}/cryptoKeyVersions/{crypto_key_version}`.
     *
     * Generated from protobuf field <code>string kms_key_version_name = 16 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setKmsKeyVersionName($var)
    {
        GPBUtil::checkString($var, True);
        $this->kms_key_version_name = $var;

        return $this;
    }

}

