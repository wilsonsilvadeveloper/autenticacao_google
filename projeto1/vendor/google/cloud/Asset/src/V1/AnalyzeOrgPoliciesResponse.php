<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/asset/v1/asset_service.proto

namespace Google\Cloud\Asset\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The response message for
 * [AssetService.AnalyzeOrgPolicies][google.cloud.asset.v1.AssetService.AnalyzeOrgPolicies].
 *
 * Generated from protobuf message <code>google.cloud.asset.v1.AnalyzeOrgPoliciesResponse</code>
 */
class AnalyzeOrgPoliciesResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * The organization policies under the
     * [AnalyzeOrgPoliciesRequest.scope][google.cloud.asset.v1.AnalyzeOrgPoliciesRequest.scope]
     * with the
     * [AnalyzeOrgPoliciesRequest.constraint][google.cloud.asset.v1.AnalyzeOrgPoliciesRequest.constraint].
     *
     * Generated from protobuf field <code>repeated .google.cloud.asset.v1.AnalyzeOrgPoliciesResponse.OrgPolicyResult org_policy_results = 1;</code>
     */
    private $org_policy_results;
    /**
     * The definition of the constraint in the request.
     *
     * Generated from protobuf field <code>.google.cloud.asset.v1.AnalyzerOrgPolicyConstraint constraint = 2;</code>
     */
    private $constraint = null;
    /**
     * The page token to fetch the next page for
     * [AnalyzeOrgPoliciesResponse.org_policy_results][google.cloud.asset.v1.AnalyzeOrgPoliciesResponse.org_policy_results].
     *
     * Generated from protobuf field <code>string next_page_token = 3;</code>
     */
    private $next_page_token = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Google\Cloud\Asset\V1\AnalyzeOrgPoliciesResponse\OrgPolicyResult>|\Google\Protobuf\Internal\RepeatedField $org_policy_results
     *           The organization policies under the
     *           [AnalyzeOrgPoliciesRequest.scope][google.cloud.asset.v1.AnalyzeOrgPoliciesRequest.scope]
     *           with the
     *           [AnalyzeOrgPoliciesRequest.constraint][google.cloud.asset.v1.AnalyzeOrgPoliciesRequest.constraint].
     *     @type \Google\Cloud\Asset\V1\AnalyzerOrgPolicyConstraint $constraint
     *           The definition of the constraint in the request.
     *     @type string $next_page_token
     *           The page token to fetch the next page for
     *           [AnalyzeOrgPoliciesResponse.org_policy_results][google.cloud.asset.v1.AnalyzeOrgPoliciesResponse.org_policy_results].
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Asset\V1\AssetService::initOnce();
        parent::__construct($data);
    }

    /**
     * The organization policies under the
     * [AnalyzeOrgPoliciesRequest.scope][google.cloud.asset.v1.AnalyzeOrgPoliciesRequest.scope]
     * with the
     * [AnalyzeOrgPoliciesRequest.constraint][google.cloud.asset.v1.AnalyzeOrgPoliciesRequest.constraint].
     *
     * Generated from protobuf field <code>repeated .google.cloud.asset.v1.AnalyzeOrgPoliciesResponse.OrgPolicyResult org_policy_results = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getOrgPolicyResults()
    {
        return $this->org_policy_results;
    }

    /**
     * The organization policies under the
     * [AnalyzeOrgPoliciesRequest.scope][google.cloud.asset.v1.AnalyzeOrgPoliciesRequest.scope]
     * with the
     * [AnalyzeOrgPoliciesRequest.constraint][google.cloud.asset.v1.AnalyzeOrgPoliciesRequest.constraint].
     *
     * Generated from protobuf field <code>repeated .google.cloud.asset.v1.AnalyzeOrgPoliciesResponse.OrgPolicyResult org_policy_results = 1;</code>
     * @param array<\Google\Cloud\Asset\V1\AnalyzeOrgPoliciesResponse\OrgPolicyResult>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setOrgPolicyResults($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Asset\V1\AnalyzeOrgPoliciesResponse\OrgPolicyResult::class);
        $this->org_policy_results = $arr;

        return $this;
    }

    /**
     * The definition of the constraint in the request.
     *
     * Generated from protobuf field <code>.google.cloud.asset.v1.AnalyzerOrgPolicyConstraint constraint = 2;</code>
     * @return \Google\Cloud\Asset\V1\AnalyzerOrgPolicyConstraint|null
     */
    public function getConstraint()
    {
        return $this->constraint;
    }

    public function hasConstraint()
    {
        return isset($this->constraint);
    }

    public function clearConstraint()
    {
        unset($this->constraint);
    }

    /**
     * The definition of the constraint in the request.
     *
     * Generated from protobuf field <code>.google.cloud.asset.v1.AnalyzerOrgPolicyConstraint constraint = 2;</code>
     * @param \Google\Cloud\Asset\V1\AnalyzerOrgPolicyConstraint $var
     * @return $this
     */
    public function setConstraint($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Asset\V1\AnalyzerOrgPolicyConstraint::class);
        $this->constraint = $var;

        return $this;
    }

    /**
     * The page token to fetch the next page for
     * [AnalyzeOrgPoliciesResponse.org_policy_results][google.cloud.asset.v1.AnalyzeOrgPoliciesResponse.org_policy_results].
     *
     * Generated from protobuf field <code>string next_page_token = 3;</code>
     * @return string
     */
    public function getNextPageToken()
    {
        return $this->next_page_token;
    }

    /**
     * The page token to fetch the next page for
     * [AnalyzeOrgPoliciesResponse.org_policy_results][google.cloud.asset.v1.AnalyzeOrgPoliciesResponse.org_policy_results].
     *
     * Generated from protobuf field <code>string next_page_token = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setNextPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->next_page_token = $var;

        return $this;
    }

}
