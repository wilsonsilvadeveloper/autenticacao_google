<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/sql/v1/cloud_sql_resources.proto

namespace Google\Cloud\Sql\V1\ImportContext;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>google.cloud.sql.v1.ImportContext.SqlCsvImportOptions</code>
 */
class SqlCsvImportOptions extends \Google\Protobuf\Internal\Message
{
    /**
     * The table to which CSV data is imported.
     *
     * Generated from protobuf field <code>string table = 1;</code>
     */
    private $table = '';
    /**
     * The columns to which CSV data is imported. If not specified, all columns
     * of the database table are loaded with CSV data.
     *
     * Generated from protobuf field <code>repeated string columns = 2;</code>
     */
    private $columns;
    /**
     * Specifies the character that should appear before a data character that
     * needs to be escaped.
     *
     * Generated from protobuf field <code>string escape_character = 4;</code>
     */
    private $escape_character = '';
    /**
     * Specifies the quoting character to be used when a data value is quoted.
     *
     * Generated from protobuf field <code>string quote_character = 5;</code>
     */
    private $quote_character = '';
    /**
     * Specifies the character that separates columns within each row (line) of
     * the file.
     *
     * Generated from protobuf field <code>string fields_terminated_by = 6;</code>
     */
    private $fields_terminated_by = '';
    /**
     * This is used to separate lines. If a line does not contain all fields,
     * the rest of the columns are set to their default values.
     *
     * Generated from protobuf field <code>string lines_terminated_by = 8;</code>
     */
    private $lines_terminated_by = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $table
     *           The table to which CSV data is imported.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $columns
     *           The columns to which CSV data is imported. If not specified, all columns
     *           of the database table are loaded with CSV data.
     *     @type string $escape_character
     *           Specifies the character that should appear before a data character that
     *           needs to be escaped.
     *     @type string $quote_character
     *           Specifies the quoting character to be used when a data value is quoted.
     *     @type string $fields_terminated_by
     *           Specifies the character that separates columns within each row (line) of
     *           the file.
     *     @type string $lines_terminated_by
     *           This is used to separate lines. If a line does not contain all fields,
     *           the rest of the columns are set to their default values.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Sql\V1\CloudSqlResources::initOnce();
        parent::__construct($data);
    }

    /**
     * The table to which CSV data is imported.
     *
     * Generated from protobuf field <code>string table = 1;</code>
     * @return string
     */
    public function getTable()
    {
        return $this->table;
    }

    /**
     * The table to which CSV data is imported.
     *
     * Generated from protobuf field <code>string table = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setTable($var)
    {
        GPBUtil::checkString($var, True);
        $this->table = $var;

        return $this;
    }

    /**
     * The columns to which CSV data is imported. If not specified, all columns
     * of the database table are loaded with CSV data.
     *
     * Generated from protobuf field <code>repeated string columns = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getColumns()
    {
        return $this->columns;
    }

    /**
     * The columns to which CSV data is imported. If not specified, all columns
     * of the database table are loaded with CSV data.
     *
     * Generated from protobuf field <code>repeated string columns = 2;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setColumns($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->columns = $arr;

        return $this;
    }

    /**
     * Specifies the character that should appear before a data character that
     * needs to be escaped.
     *
     * Generated from protobuf field <code>string escape_character = 4;</code>
     * @return string
     */
    public function getEscapeCharacter()
    {
        return $this->escape_character;
    }

    /**
     * Specifies the character that should appear before a data character that
     * needs to be escaped.
     *
     * Generated from protobuf field <code>string escape_character = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setEscapeCharacter($var)
    {
        GPBUtil::checkString($var, True);
        $this->escape_character = $var;

        return $this;
    }

    /**
     * Specifies the quoting character to be used when a data value is quoted.
     *
     * Generated from protobuf field <code>string quote_character = 5;</code>
     * @return string
     */
    public function getQuoteCharacter()
    {
        return $this->quote_character;
    }

    /**
     * Specifies the quoting character to be used when a data value is quoted.
     *
     * Generated from protobuf field <code>string quote_character = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setQuoteCharacter($var)
    {
        GPBUtil::checkString($var, True);
        $this->quote_character = $var;

        return $this;
    }

    /**
     * Specifies the character that separates columns within each row (line) of
     * the file.
     *
     * Generated from protobuf field <code>string fields_terminated_by = 6;</code>
     * @return string
     */
    public function getFieldsTerminatedBy()
    {
        return $this->fields_terminated_by;
    }

    /**
     * Specifies the character that separates columns within each row (line) of
     * the file.
     *
     * Generated from protobuf field <code>string fields_terminated_by = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setFieldsTerminatedBy($var)
    {
        GPBUtil::checkString($var, True);
        $this->fields_terminated_by = $var;

        return $this;
    }

    /**
     * This is used to separate lines. If a line does not contain all fields,
     * the rest of the columns are set to their default values.
     *
     * Generated from protobuf field <code>string lines_terminated_by = 8;</code>
     * @return string
     */
    public function getLinesTerminatedBy()
    {
        return $this->lines_terminated_by;
    }

    /**
     * This is used to separate lines. If a line does not contain all fields,
     * the rest of the columns are set to their default values.
     *
     * Generated from protobuf field <code>string lines_terminated_by = 8;</code>
     * @param string $var
     * @return $this
     */
    public function setLinesTerminatedBy($var)
    {
        GPBUtil::checkString($var, True);
        $this->lines_terminated_by = $var;

        return $this;
    }

}


