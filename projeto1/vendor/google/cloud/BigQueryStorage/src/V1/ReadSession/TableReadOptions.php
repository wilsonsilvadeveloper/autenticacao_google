<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/bigquery/storage/v1/stream.proto

namespace Google\Cloud\BigQuery\Storage\V1\ReadSession;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Options dictating how we read a table.
 *
 * Generated from protobuf message <code>google.cloud.bigquery.storage.v1.ReadSession.TableReadOptions</code>
 */
class TableReadOptions extends \Google\Protobuf\Internal\Message
{
    /**
     * Optional. The names of the fields in the table to be returned. If no
     * field names are specified, then all fields in the table are returned.
     * Nested fields -- the child elements of a STRUCT field -- can be selected
     * individually using their fully-qualified names, and will be returned as
     * record fields containing only the selected nested fields. If a STRUCT
     * field is specified in the selected fields list, all of the child elements
     * will be returned.
     * As an example, consider a table with the following schema:
     *   {
     *       "name": "struct_field",
     *       "type": "RECORD",
     *       "mode": "NULLABLE",
     *       "fields": [
     *           {
     *               "name": "string_field1",
     *               "type": "STRING",
     * .              "mode": "NULLABLE"
     *           },
     *           {
     *               "name": "string_field2",
     *               "type": "STRING",
     *               "mode": "NULLABLE"
     *           }
     *       ]
     *   }
     * Specifying "struct_field" in the selected fields list will result in a
     * read session schema with the following logical structure:
     *   struct_field {
     *       string_field1
     *       string_field2
     *   }
     * Specifying "struct_field.string_field1" in the selected fields list will
     * result in a read session schema with the following logical structure:
     *   struct_field {
     *       string_field1
     *   }
     * The order of the fields in the read session schema is derived from the
     * table schema and does not correspond to the order in which the fields are
     * specified in this list.
     *
     * Generated from protobuf field <code>repeated string selected_fields = 1;</code>
     */
    private $selected_fields;
    /**
     * SQL text filtering statement, similar to a WHERE clause in a query.
     * Aggregates are not supported.
     * Examples: "int_field > 5"
     *           "date_field = CAST('2014-9-27' as DATE)"
     *           "nullable_field is not NULL"
     *           "st_equals(geo_field, st_geofromtext("POINT(2, 2)"))"
     *           "numeric_field BETWEEN 1.0 AND 5.0"
     * Restricted to a maximum length for 1 MB.
     *
     * Generated from protobuf field <code>string row_restriction = 2;</code>
     */
    private $row_restriction = '';
    /**
     * Optional. Specifies a table sampling percentage. Specifically, the query
     * planner will use TABLESAMPLE SYSTEM (sample_percentage PERCENT). This
     * samples at the file-level. It will randomly choose for each file whether
     * to include that file in the sample returned. Note, that if the table only
     * has one file, then TABLESAMPLE SYSTEM will select that file and return
     * all returnable rows contained within.
     *
     * Generated from protobuf field <code>optional double sample_percentage = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $sample_percentage = null;
    protected $output_format_serialization_options;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $selected_fields
     *           Optional. The names of the fields in the table to be returned. If no
     *           field names are specified, then all fields in the table are returned.
     *           Nested fields -- the child elements of a STRUCT field -- can be selected
     *           individually using their fully-qualified names, and will be returned as
     *           record fields containing only the selected nested fields. If a STRUCT
     *           field is specified in the selected fields list, all of the child elements
     *           will be returned.
     *           As an example, consider a table with the following schema:
     *             {
     *                 "name": "struct_field",
     *                 "type": "RECORD",
     *                 "mode": "NULLABLE",
     *                 "fields": [
     *                     {
     *                         "name": "string_field1",
     *                         "type": "STRING",
     *           .              "mode": "NULLABLE"
     *                     },
     *                     {
     *                         "name": "string_field2",
     *                         "type": "STRING",
     *                         "mode": "NULLABLE"
     *                     }
     *                 ]
     *             }
     *           Specifying "struct_field" in the selected fields list will result in a
     *           read session schema with the following logical structure:
     *             struct_field {
     *                 string_field1
     *                 string_field2
     *             }
     *           Specifying "struct_field.string_field1" in the selected fields list will
     *           result in a read session schema with the following logical structure:
     *             struct_field {
     *                 string_field1
     *             }
     *           The order of the fields in the read session schema is derived from the
     *           table schema and does not correspond to the order in which the fields are
     *           specified in this list.
     *     @type string $row_restriction
     *           SQL text filtering statement, similar to a WHERE clause in a query.
     *           Aggregates are not supported.
     *           Examples: "int_field > 5"
     *                     "date_field = CAST('2014-9-27' as DATE)"
     *                     "nullable_field is not NULL"
     *                     "st_equals(geo_field, st_geofromtext("POINT(2, 2)"))"
     *                     "numeric_field BETWEEN 1.0 AND 5.0"
     *           Restricted to a maximum length for 1 MB.
     *     @type \Google\Cloud\BigQuery\Storage\V1\ArrowSerializationOptions $arrow_serialization_options
     *           Optional. Options specific to the Apache Arrow output format.
     *     @type \Google\Cloud\BigQuery\Storage\V1\AvroSerializationOptions $avro_serialization_options
     *           Optional. Options specific to the Apache Avro output format
     *     @type float $sample_percentage
     *           Optional. Specifies a table sampling percentage. Specifically, the query
     *           planner will use TABLESAMPLE SYSTEM (sample_percentage PERCENT). This
     *           samples at the file-level. It will randomly choose for each file whether
     *           to include that file in the sample returned. Note, that if the table only
     *           has one file, then TABLESAMPLE SYSTEM will select that file and return
     *           all returnable rows contained within.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Bigquery\Storage\V1\Stream::initOnce();
        parent::__construct($data);
    }

    /**
     * Optional. The names of the fields in the table to be returned. If no
     * field names are specified, then all fields in the table are returned.
     * Nested fields -- the child elements of a STRUCT field -- can be selected
     * individually using their fully-qualified names, and will be returned as
     * record fields containing only the selected nested fields. If a STRUCT
     * field is specified in the selected fields list, all of the child elements
     * will be returned.
     * As an example, consider a table with the following schema:
     *   {
     *       "name": "struct_field",
     *       "type": "RECORD",
     *       "mode": "NULLABLE",
     *       "fields": [
     *           {
     *               "name": "string_field1",
     *               "type": "STRING",
     * .              "mode": "NULLABLE"
     *           },
     *           {
     *               "name": "string_field2",
     *               "type": "STRING",
     *               "mode": "NULLABLE"
     *           }
     *       ]
     *   }
     * Specifying "struct_field" in the selected fields list will result in a
     * read session schema with the following logical structure:
     *   struct_field {
     *       string_field1
     *       string_field2
     *   }
     * Specifying "struct_field.string_field1" in the selected fields list will
     * result in a read session schema with the following logical structure:
     *   struct_field {
     *       string_field1
     *   }
     * The order of the fields in the read session schema is derived from the
     * table schema and does not correspond to the order in which the fields are
     * specified in this list.
     *
     * Generated from protobuf field <code>repeated string selected_fields = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSelectedFields()
    {
        return $this->selected_fields;
    }

    /**
     * Optional. The names of the fields in the table to be returned. If no
     * field names are specified, then all fields in the table are returned.
     * Nested fields -- the child elements of a STRUCT field -- can be selected
     * individually using their fully-qualified names, and will be returned as
     * record fields containing only the selected nested fields. If a STRUCT
     * field is specified in the selected fields list, all of the child elements
     * will be returned.
     * As an example, consider a table with the following schema:
     *   {
     *       "name": "struct_field",
     *       "type": "RECORD",
     *       "mode": "NULLABLE",
     *       "fields": [
     *           {
     *               "name": "string_field1",
     *               "type": "STRING",
     * .              "mode": "NULLABLE"
     *           },
     *           {
     *               "name": "string_field2",
     *               "type": "STRING",
     *               "mode": "NULLABLE"
     *           }
     *       ]
     *   }
     * Specifying "struct_field" in the selected fields list will result in a
     * read session schema with the following logical structure:
     *   struct_field {
     *       string_field1
     *       string_field2
     *   }
     * Specifying "struct_field.string_field1" in the selected fields list will
     * result in a read session schema with the following logical structure:
     *   struct_field {
     *       string_field1
     *   }
     * The order of the fields in the read session schema is derived from the
     * table schema and does not correspond to the order in which the fields are
     * specified in this list.
     *
     * Generated from protobuf field <code>repeated string selected_fields = 1;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSelectedFields($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->selected_fields = $arr;

        return $this;
    }

    /**
     * SQL text filtering statement, similar to a WHERE clause in a query.
     * Aggregates are not supported.
     * Examples: "int_field > 5"
     *           "date_field = CAST('2014-9-27' as DATE)"
     *           "nullable_field is not NULL"
     *           "st_equals(geo_field, st_geofromtext("POINT(2, 2)"))"
     *           "numeric_field BETWEEN 1.0 AND 5.0"
     * Restricted to a maximum length for 1 MB.
     *
     * Generated from protobuf field <code>string row_restriction = 2;</code>
     * @return string
     */
    public function getRowRestriction()
    {
        return $this->row_restriction;
    }

    /**
     * SQL text filtering statement, similar to a WHERE clause in a query.
     * Aggregates are not supported.
     * Examples: "int_field > 5"
     *           "date_field = CAST('2014-9-27' as DATE)"
     *           "nullable_field is not NULL"
     *           "st_equals(geo_field, st_geofromtext("POINT(2, 2)"))"
     *           "numeric_field BETWEEN 1.0 AND 5.0"
     * Restricted to a maximum length for 1 MB.
     *
     * Generated from protobuf field <code>string row_restriction = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setRowRestriction($var)
    {
        GPBUtil::checkString($var, True);
        $this->row_restriction = $var;

        return $this;
    }

    /**
     * Optional. Options specific to the Apache Arrow output format.
     *
     * Generated from protobuf field <code>.google.cloud.bigquery.storage.v1.ArrowSerializationOptions arrow_serialization_options = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\BigQuery\Storage\V1\ArrowSerializationOptions|null
     */
    public function getArrowSerializationOptions()
    {
        return $this->readOneof(3);
    }

    public function hasArrowSerializationOptions()
    {
        return $this->hasOneof(3);
    }

    /**
     * Optional. Options specific to the Apache Arrow output format.
     *
     * Generated from protobuf field <code>.google.cloud.bigquery.storage.v1.ArrowSerializationOptions arrow_serialization_options = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\BigQuery\Storage\V1\ArrowSerializationOptions $var
     * @return $this
     */
    public function setArrowSerializationOptions($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\BigQuery\Storage\V1\ArrowSerializationOptions::class);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * Optional. Options specific to the Apache Avro output format
     *
     * Generated from protobuf field <code>.google.cloud.bigquery.storage.v1.AvroSerializationOptions avro_serialization_options = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\BigQuery\Storage\V1\AvroSerializationOptions|null
     */
    public function getAvroSerializationOptions()
    {
        return $this->readOneof(4);
    }

    public function hasAvroSerializationOptions()
    {
        return $this->hasOneof(4);
    }

    /**
     * Optional. Options specific to the Apache Avro output format
     *
     * Generated from protobuf field <code>.google.cloud.bigquery.storage.v1.AvroSerializationOptions avro_serialization_options = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\BigQuery\Storage\V1\AvroSerializationOptions $var
     * @return $this
     */
    public function setAvroSerializationOptions($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\BigQuery\Storage\V1\AvroSerializationOptions::class);
        $this->writeOneof(4, $var);

        return $this;
    }

    /**
     * Optional. Specifies a table sampling percentage. Specifically, the query
     * planner will use TABLESAMPLE SYSTEM (sample_percentage PERCENT). This
     * samples at the file-level. It will randomly choose for each file whether
     * to include that file in the sample returned. Note, that if the table only
     * has one file, then TABLESAMPLE SYSTEM will select that file and return
     * all returnable rows contained within.
     *
     * Generated from protobuf field <code>optional double sample_percentage = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return float
     */
    public function getSamplePercentage()
    {
        return isset($this->sample_percentage) ? $this->sample_percentage : 0.0;
    }

    public function hasSamplePercentage()
    {
        return isset($this->sample_percentage);
    }

    public function clearSamplePercentage()
    {
        unset($this->sample_percentage);
    }

    /**
     * Optional. Specifies a table sampling percentage. Specifically, the query
     * planner will use TABLESAMPLE SYSTEM (sample_percentage PERCENT). This
     * samples at the file-level. It will randomly choose for each file whether
     * to include that file in the sample returned. Note, that if the table only
     * has one file, then TABLESAMPLE SYSTEM will select that file and return
     * all returnable rows contained within.
     *
     * Generated from protobuf field <code>optional double sample_percentage = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param float $var
     * @return $this
     */
    public function setSamplePercentage($var)
    {
        GPBUtil::checkDouble($var);
        $this->sample_percentage = $var;

        return $this;
    }

    /**
     * @return string
     */
    public function getOutputFormatSerializationOptions()
    {
        return $this->whichOneof("output_format_serialization_options");
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(TableReadOptions::class, \Google\Cloud\BigQuery\Storage\V1\ReadSession_TableReadOptions::class);
