<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/bigquery/storage/v1/stream.proto

namespace GPBMetadata\Google\Cloud\Bigquery\Storage\V1;

class Stream
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Cloud\Bigquery\Storage\V1\Arrow::initOnce();
        \GPBMetadata\Google\Cloud\Bigquery\Storage\V1\Avro::initOnce();
        \GPBMetadata\Google\Cloud\Bigquery\Storage\V1\Table::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
-google/cloud/bigquery/storage/v1/stream.proto google.cloud.bigquery.storage.v1google/api/resource.proto,google/cloud/bigquery/storage/v1/arrow.proto+google/cloud/bigquery/storage/v1/avro.proto,google/cloud/bigquery/storage/v1/table.protogoogle/protobuf/timestamp.proto"�	
ReadSession
name (	B�A4
expire_time (2.google.protobuf.TimestampB�AF
data_format (2,.google.cloud.bigquery.storage.v1.DataFormatB�AH
avro_schema (2,.google.cloud.bigquery.storage.v1.AvroSchemaB�AH J
arrow_schema (2-.google.cloud.bigquery.storage.v1.ArrowSchemaB�AH 4
table (	B%�A�A
bigquery.googleapis.com/TableZ
table_modifiers (2<.google.cloud.bigquery.storage.v1.ReadSession.TableModifiersB�AY
read_options (2>.google.cloud.bigquery.storage.v1.ReadSession.TableReadOptionsB�AB
streams
 (2,.google.cloud.bigquery.storage.v1.ReadStreamB�A*
estimated_total_bytes_scanned (B�A 
estimated_row_count (B�A
trace_id (	B�AC
TableModifiers1
snapshot_time (2.google.protobuf.Timestamp�
TableReadOptions
selected_fields (	
row_restriction (	g
arrow_serialization_options (2;.google.cloud.bigquery.storage.v1.ArrowSerializationOptionsB�AH e
avro_serialization_options (2:.google.cloud.bigquery.storage.v1.AvroSerializationOptionsB�AH #
sample_percentage (B�AH�B%
#output_format_serialization_optionsB
_sample_percentage:k�Ah
*bigquerystorage.googleapis.com/ReadSession:projects/{project}/locations/{location}/sessions/{session}B
schema"�

ReadStream
name (	B�A:{�Ax
)bigquerystorage.googleapis.com/ReadStreamKprojects/{project}/locations/{location}/sessions/{session}/streams/{stream}"�
WriteStream
name (	B�AE
type (22.google.cloud.bigquery.storage.v1.WriteStream.TypeB�A4
create_time (2.google.protobuf.TimestampB�A4
commit_time (2.google.protobuf.TimestampB�AH
table_schema (2-.google.cloud.bigquery.storage.v1.TableSchemaB�AP

write_mode (27.google.cloud.bigquery.storage.v1.WriteStream.WriteModeB�A
location (	B�A"F
Type
TYPE_UNSPECIFIED 
	COMMITTED
PENDING
BUFFERED"3
	WriteMode
WRITE_MODE_UNSPECIFIED 

INSERT:v�As
*bigquerystorage.googleapis.com/WriteStreamEprojects/{project}/datasets/{dataset}/tables/{table}/streams/{stream}*>

DataFormat
DATA_FORMAT_UNSPECIFIED 
AVRO	
ARROW*I
WriteStreamView!
WRITE_STREAM_VIEW_UNSPECIFIED 	
BASIC
FULLB�
$com.google.cloud.bigquery.storage.v1BStreamProtoPZ>cloud.google.com/go/bigquery/storage/apiv1/storagepb;storagepb� Google.Cloud.BigQuery.Storage.V1� Google\\Cloud\\BigQuery\\Storage\\V1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

