<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v0/enums/age_range_type.proto

namespace Google\Ads\GoogleAds\V0\Enums\AgeRangeTypeEnum;

/**
 * The type of demographic age ranges (e.g. between 18 and 24 years old).
 *
 * Protobuf type <code>google.ads.googleads.v0.enums.AgeRangeTypeEnum.AgeRangeType</code>
 */
class AgeRangeType
{
    /**
     * Not specified.
     *
     * Generated from protobuf enum <code>UNSPECIFIED = 0;</code>
     */
    const UNSPECIFIED = 0;
    /**
     * Used for return value only. Represents value unknown in this version.
     *
     * Generated from protobuf enum <code>UNKNOWN = 1;</code>
     */
    const UNKNOWN = 1;
    /**
     * Between 18 and 24 years old.
     *
     * Generated from protobuf enum <code>AGE_RANGE_18_24 = 503001;</code>
     */
    const AGE_RANGE_18_24 = 503001;
    /**
     * Between 25 and 34 years old.
     *
     * Generated from protobuf enum <code>AGE_RANGE_25_34 = 503002;</code>
     */
    const AGE_RANGE_25_34 = 503002;
    /**
     * Between 35 and 44 years old.
     *
     * Generated from protobuf enum <code>AGE_RANGE_35_44 = 503003;</code>
     */
    const AGE_RANGE_35_44 = 503003;
    /**
     * Between 45 and 54 years old.
     *
     * Generated from protobuf enum <code>AGE_RANGE_45_54 = 503004;</code>
     */
    const AGE_RANGE_45_54 = 503004;
    /**
     * Between 55 and 64 years old.
     *
     * Generated from protobuf enum <code>AGE_RANGE_55_64 = 503005;</code>
     */
    const AGE_RANGE_55_64 = 503005;
    /**
     * 65 years old and beyond.
     *
     * Generated from protobuf enum <code>AGE_RANGE_65_UP = 503006;</code>
     */
    const AGE_RANGE_65_UP = 503006;
    /**
     * Undetermined age range.
     *
     * Generated from protobuf enum <code>AGE_RANGE_UNDETERMINED = 503999;</code>
     */
    const AGE_RANGE_UNDETERMINED = 503999;
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AgeRangeType::class, \Google\Ads\GoogleAds\V0\Enums\AgeRangeTypeEnum_AgeRangeType::class);

