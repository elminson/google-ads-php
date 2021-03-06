<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v1/enums/positive_geo_target_type.proto

namespace Google\Ads\GoogleAds\V1\Enums\PositiveGeoTargetTypeEnum;

use UnexpectedValueException;

/**
 * The possible positive geo target types.
 *
 * Protobuf type <code>google.ads.googleads.v1.enums.PositiveGeoTargetTypeEnum.PositiveGeoTargetType</code>
 */
class PositiveGeoTargetType
{
    /**
     * Not specified.
     *
     * Generated from protobuf enum <code>UNSPECIFIED = 0;</code>
     */
    const UNSPECIFIED = 0;
    /**
     * The value is unknown in this version.
     *
     * Generated from protobuf enum <code>UNKNOWN = 1;</code>
     */
    const UNKNOWN = 1;
    /**
     * Specifies that either Area of Interest (AOI) or
     * Location of Presence (LOP) may trigger the ad.
     *
     * Generated from protobuf enum <code>DONT_CARE = 2;</code>
     */
    const DONT_CARE = 2;
    /**
     * Specifies that the ad is triggered only if the user's Area of Interest
     * (AOI) matches.
     *
     * Generated from protobuf enum <code>AREA_OF_INTEREST = 3;</code>
     */
    const AREA_OF_INTEREST = 3;
    /**
     * Specifies that the ad is triggered only if the user's
     * Location of Presence (LOP) matches.
     *
     * Generated from protobuf enum <code>LOCATION_OF_PRESENCE = 4;</code>
     */
    const LOCATION_OF_PRESENCE = 4;

    private static $valueToName = [
        self::UNSPECIFIED => 'UNSPECIFIED',
        self::UNKNOWN => 'UNKNOWN',
        self::DONT_CARE => 'DONT_CARE',
        self::AREA_OF_INTEREST => 'AREA_OF_INTEREST',
        self::LOCATION_OF_PRESENCE => 'LOCATION_OF_PRESENCE',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(PositiveGeoTargetType::class, \Google\Ads\GoogleAds\V1\Enums\PositiveGeoTargetTypeEnum_PositiveGeoTargetType::class);

