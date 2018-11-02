<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v0/resources/change_status.proto

namespace Google\Ads\GoogleAds\V0\Resources;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Describes the status of returned resource.
 *
 * Generated from protobuf message <code>google.ads.googleads.v0.resources.ChangeStatus</code>
 */
class ChangeStatus extends \Google\Protobuf\Internal\Message
{
    /**
     * The resource name of the change status.
     * Change status resource names have the form:
     * `customers/{customer_id}/changeStatus/{change_status_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1;</code>
     */
    private $resource_name = '';
    /**
     * Time at which the most recent change has occurred on this resource.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue last_change_date_time = 3;</code>
     */
    private $last_change_date_time = null;
    /**
     * Represents the type of the changed resource. This dictates what fields
     * will be set. For example, for AD_GROUP, campaign and ad_group fields will
     * be set.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v0.enums.ChangeStatusResourceTypeEnum.ChangeStatusResourceType resource_type = 4;</code>
     */
    private $resource_type = 0;
    /**
     * The Campaign affected by this change.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue campaign = 5;</code>
     */
    private $campaign = null;
    /**
     * The AdGroup affected by this change.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue ad_group = 6;</code>
     */
    private $ad_group = null;
    /**
     * Represents the status of the changed resource.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v0.enums.ChangeStatusOperationEnum.ChangeStatusOperation resource_status = 8;</code>
     */
    private $resource_status = 0;
    /**
     * The AdGroupAd affected by this change.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue ad_group_ad = 9;</code>
     */
    private $ad_group_ad = null;
    /**
     * The AdGroupCriterion affected by this change.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue ad_group_criterion = 10;</code>
     */
    private $ad_group_criterion = null;
    /**
     * The CampaignCriterion affected by this change.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue campaign_criterion = 11;</code>
     */
    private $campaign_criterion = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $resource_name
     *           The resource name of the change status.
     *           Change status resource names have the form:
     *           `customers/{customer_id}/changeStatus/{change_status_id}`
     *     @type \Google\Protobuf\StringValue $last_change_date_time
     *           Time at which the most recent change has occurred on this resource.
     *     @type int $resource_type
     *           Represents the type of the changed resource. This dictates what fields
     *           will be set. For example, for AD_GROUP, campaign and ad_group fields will
     *           be set.
     *     @type \Google\Protobuf\StringValue $campaign
     *           The Campaign affected by this change.
     *     @type \Google\Protobuf\StringValue $ad_group
     *           The AdGroup affected by this change.
     *     @type int $resource_status
     *           Represents the status of the changed resource.
     *     @type \Google\Protobuf\StringValue $ad_group_ad
     *           The AdGroupAd affected by this change.
     *     @type \Google\Protobuf\StringValue $ad_group_criterion
     *           The AdGroupCriterion affected by this change.
     *     @type \Google\Protobuf\StringValue $campaign_criterion
     *           The CampaignCriterion affected by this change.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V0\Resources\ChangeStatus::initOnce();
        parent::__construct($data);
    }

    /**
     * The resource name of the change status.
     * Change status resource names have the form:
     * `customers/{customer_id}/changeStatus/{change_status_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1;</code>
     * @return string
     */
    public function getResourceName()
    {
        return $this->resource_name;
    }

    /**
     * The resource name of the change status.
     * Change status resource names have the form:
     * `customers/{customer_id}/changeStatus/{change_status_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setResourceName($var)
    {
        GPBUtil::checkString($var, True);
        $this->resource_name = $var;

        return $this;
    }

    /**
     * Time at which the most recent change has occurred on this resource.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue last_change_date_time = 3;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getLastChangeDateTime()
    {
        return $this->last_change_date_time;
    }

    /**
     * Time at which the most recent change has occurred on this resource.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue last_change_date_time = 3;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setLastChangeDateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->last_change_date_time = $var;

        return $this;
    }

    /**
     * Represents the type of the changed resource. This dictates what fields
     * will be set. For example, for AD_GROUP, campaign and ad_group fields will
     * be set.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v0.enums.ChangeStatusResourceTypeEnum.ChangeStatusResourceType resource_type = 4;</code>
     * @return int
     */
    public function getResourceType()
    {
        return $this->resource_type;
    }

    /**
     * Represents the type of the changed resource. This dictates what fields
     * will be set. For example, for AD_GROUP, campaign and ad_group fields will
     * be set.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v0.enums.ChangeStatusResourceTypeEnum.ChangeStatusResourceType resource_type = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setResourceType($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V0\Enums\ChangeStatusResourceTypeEnum_ChangeStatusResourceType::class);
        $this->resource_type = $var;

        return $this;
    }

    /**
     * The Campaign affected by this change.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue campaign = 5;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getCampaign()
    {
        return $this->campaign;
    }

    /**
     * The Campaign affected by this change.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue campaign = 5;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setCampaign($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->campaign = $var;

        return $this;
    }

    /**
     * The AdGroup affected by this change.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue ad_group = 6;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getAdGroup()
    {
        return $this->ad_group;
    }

    /**
     * The AdGroup affected by this change.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue ad_group = 6;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setAdGroup($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->ad_group = $var;

        return $this;
    }

    /**
     * Represents the status of the changed resource.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v0.enums.ChangeStatusOperationEnum.ChangeStatusOperation resource_status = 8;</code>
     * @return int
     */
    public function getResourceStatus()
    {
        return $this->resource_status;
    }

    /**
     * Represents the status of the changed resource.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v0.enums.ChangeStatusOperationEnum.ChangeStatusOperation resource_status = 8;</code>
     * @param int $var
     * @return $this
     */
    public function setResourceStatus($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V0\Enums\ChangeStatusOperationEnum_ChangeStatusOperation::class);
        $this->resource_status = $var;

        return $this;
    }

    /**
     * The AdGroupAd affected by this change.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue ad_group_ad = 9;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getAdGroupAd()
    {
        return $this->ad_group_ad;
    }

    /**
     * The AdGroupAd affected by this change.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue ad_group_ad = 9;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setAdGroupAd($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->ad_group_ad = $var;

        return $this;
    }

    /**
     * The AdGroupCriterion affected by this change.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue ad_group_criterion = 10;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getAdGroupCriterion()
    {
        return $this->ad_group_criterion;
    }

    /**
     * The AdGroupCriterion affected by this change.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue ad_group_criterion = 10;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setAdGroupCriterion($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->ad_group_criterion = $var;

        return $this;
    }

    /**
     * The CampaignCriterion affected by this change.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue campaign_criterion = 11;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getCampaignCriterion()
    {
        return $this->campaign_criterion;
    }

    /**
     * The CampaignCriterion affected by this change.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue campaign_criterion = 11;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setCampaignCriterion($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->campaign_criterion = $var;

        return $this;
    }

}

