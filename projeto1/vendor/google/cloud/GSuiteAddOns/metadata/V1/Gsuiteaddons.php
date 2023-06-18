<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/gsuiteaddons/v1/gsuiteaddons.proto

namespace GPBMetadata\Google\Cloud\Gsuiteaddons\V1;

class Gsuiteaddons
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Api\Client::initOnce();
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Apps\Script\Type\Calendar\CalendarAddonManifest::initOnce();
        \GPBMetadata\Google\Apps\Script\Type\Docs\DocsAddonManifest::initOnce();
        \GPBMetadata\Google\Apps\Script\Type\Drive\DriveAddonManifest::initOnce();
        \GPBMetadata\Google\Apps\Script\Type\Gmail\GmailAddonManifest::initOnce();
        \GPBMetadata\Google\Apps\Script\Type\ScriptManifest::initOnce();
        \GPBMetadata\Google\Apps\Script\Type\Sheets\SheetsAddonManifest::initOnce();
        \GPBMetadata\Google\Apps\Script\Type\Slides\SlidesAddonManifest::initOnce();
        \GPBMetadata\Google\Protobuf\GPBEmpty::initOnce();
        \GPBMetadata\Google\Protobuf\Wrappers::initOnce();
        $pool->internalAddGeneratedFile(
            '
�%
/google/cloud/gsuiteaddons/v1/gsuiteaddons.protogoogle.cloud.gsuiteaddons.v1google/api/client.protogoogle/api/field_behavior.protogoogle/api/resource.proto>google/apps/script/type/calendar/calendar_addon_manifest.proto6google/apps/script/type/docs/docs_addon_manifest.proto8google/apps/script/type/drive/drive_addon_manifest.proto8google/apps/script/type/gmail/gmail_addon_manifest.proto-google/apps/script/type/script_manifest.proto:google/apps/script/type/sheets/sheets_addon_manifest.proto:google/apps/script/type/slides/slides_addon_manifest.protogoogle/protobuf/empty.protogoogle/protobuf/wrappers.proto"Z
GetAuthorizationRequest?
name (	B1�A�A+
)gsuiteaddons.googleapis.com/Authorization"�

name (	
service_account_email (	
oauth_client_id (	:P�AM
)gsuiteaddons.googleapis.com/Authorization projects/{project}/authorization"�
CreateDeploymentRequestC
parent (	B3�A�A-
+cloudresourcemanager.googleapis.com/Project


deployment (2(.google.cloud.gsuiteaddons.v1.DeploymentB�A"]
ReplaceDeploymentRequestA

deployment (2(.google.cloud.gsuiteaddons.v1.DeploymentB�A"T
GetDeploymentRequest<
name (	B.�A�A(
&gsuiteaddons.googleapis.com/Deployment"�
ListDeploymentsRequestC
parent (	B3�A�A-
+cloudresourcemanager.googleapis.com/Project
	page_size (

page_token (	"q
ListDeploymentsResponse=
deployments (2(.google.cloud.gsuiteaddons.v1.Deployment
next_page_token (	"e
DeleteDeploymentRequest<
name (	B.�A�A(
&gsuiteaddons.googleapis.com/Deployment
etag (	"X
InstallDeploymentRequest<
name (	B.�A�A(
&gsuiteaddons.googleapis.com/Deployment"Z
UninstallDeploymentRequest<
name (	B.�A�A(
&gsuiteaddons.googleapis.com/Deployment"Z
GetInstallStatusRequest?
name (	B1�A�A+
)gsuiteaddons.googleapis.com/InstallStatus"�

name (	-
	installed (2.google.protobuf.BoolValue:i�Af
)gsuiteaddons.googleapis.com/InstallStatus9projects/{project}/deployments/{deployment}/installStatus"�

Deployment
name (	
oauth_scopes (	5
add_ons (2$.google.cloud.gsuiteaddons.v1.AddOns
etag (	:X�AU
&gsuiteaddons.googleapis.com/Deployment+projects/{project}/deployments/{deployment}"�
AddOns<
common (2,.google.apps.script.type.CommonAddOnManifest@
gmail (21.google.apps.script.type.gmail.GmailAddOnManifest@
drive (21.google.apps.script.type.drive.DriveAddOnManifestI
calendar (27.google.apps.script.type.calendar.CalendarAddOnManifest=
docs (2/.google.apps.script.type.docs.DocsAddOnManifestC
sheets (23.google.apps.script.type.sheets.SheetsAddOnManifestC
slides
 (23.google.apps.script.type.slides.SlidesAddOnManifest:
http_options (2$.google.apps.script.type.HttpOptions2�
GSuiteAddOns�
GetAuthorization5.google.cloud.gsuiteaddons.v1.GetAuthorizationRequest+.google.cloud.gsuiteaddons.v1.Authorization"2���%#/v1/{name=projects/*/authorization}�Aname�
CreateDeployment5.google.cloud.gsuiteaddons.v1.CreateDeploymentRequest(.google.cloud.gsuiteaddons.v1.Deployment"Y���1"#/v1/{parent=projects/*}/deployments:
deployment�Aparent,deployment,deployment_id�
ReplaceDeployment6.google.cloud.gsuiteaddons.v1.ReplaceDeploymentRequest(.google.cloud.gsuiteaddons.v1.Deployment"O���<./v1/{deployment.name=projects/*/deployments/*}:
deployment�A
deployment�

ListDeployments4.google.cloud.gsuiteaddons.v1.ListDeploymentsRequest5.google.cloud.gsuiteaddons.v1.ListDeploymentsResponse"4���%#/v1/{parent=projects/*}/deployments�Aparent�
DeleteDeployment5.google.cloud.gsuiteaddons.v1.DeleteDeploymentRequest.google.protobuf.Empty"2���%*#/v1/{name=projects/*/deployments/*}�Aname�
InstallDeployment6.google.cloud.gsuiteaddons.v1.InstallDeploymentRequest.google.protobuf.Empty"=���0"+/v1/{name=projects/*/deployments/*}:install:*�Aname�
UninstallDeployment8.google.cloud.gsuiteaddons.v1.UninstallDeploymentRequest.google.protobuf.Empty"?���2"-/v1/{name=projects/*/deployments/*}:uninstall:*�Aname�
GetInstallStatus5.google.cloud.gsuiteaddons.v1.GetInstallStatusRequest+.google.cloud.gsuiteaddons.v1.InstallStatus"@���31/v1/{name=projects/*/deployments/*/installStatus}�AnameO�Agsuiteaddons.googleapis.com�A.https://www.googleapis.com/auth/cloud-platformB�
 com.google.cloud.gsuiteaddons.v1BGSuiteAddOnsProtoPZDcloud.google.com/go/gsuiteaddons/apiv1/gsuiteaddonspb;gsuiteaddonspb�Google.Cloud.GSuiteAddOns.V1�Google\\Cloud\\GSuiteAddOns\\V1�Google::Cloud::GSuiteAddOns::V1bproto3'
        , true);

        static::$is_initialized = true;
    }
}
