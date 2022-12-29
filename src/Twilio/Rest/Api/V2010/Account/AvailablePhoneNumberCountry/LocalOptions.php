<?php
/*
 * This code was generated by
 * ___ _ _ _ _ _    _ ____    ____ ____ _    ____ ____ _  _ ____ ____ ____ ___ __   __
 *  |  | | | | |    | |  | __ |  | |__| | __ | __ |___ |\ | |___ |__/ |__|  | |  | |__/
 *  |  |_|_| | |___ | |__|    |__| |  | |    |__] |___ | \| |___ |  \ |  |  | |__| |  \
 *
 * Twilio - Api
 * This is the public Twilio REST API.
 *
 * NOTE: This class is auto generated by OpenAPI Generator.
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Twilio\Rest\Api\V2010\Account\AvailablePhoneNumberCountry;

use Twilio\Options;
use Twilio\Values;


abstract class LocalOptions {
    /**
    * @param int $areaCode The area code of the phone numbers to read. Applies to only phone numbers in the US and Canada. 
    * @param string $contains The pattern on which to match phone numbers. Valid characters are &#x60;*&#x60;, &#x60;0-9&#x60;, &#x60;a-z&#x60;, and &#x60;A-Z&#x60;. The &#x60;*&#x60; character matches any single digit. For examples, see [Example 2](https://www.twilio.com/docs/phone-numbers/api/availablephonenumberlocal-resource?code-sample&#x3D;code-find-phone-numbers-by-number-pattern) and [Example 3](https://www.twilio.com/docs/phone-numbers/api/availablephonenumberlocal-resource?code-sample&#x3D;code-find-phone-numbers-by-character-pattern). If specified, this value must have at least two characters. 
    * @param bool $smsEnabled Whether the phone numbers can receive text messages. Can be: &#x60;true&#x60; or &#x60;false&#x60;. 
    * @param bool $mmsEnabled Whether the phone numbers can receive MMS messages. Can be: &#x60;true&#x60; or &#x60;false&#x60;. 
    * @param bool $voiceEnabled Whether the phone numbers can receive calls. Can be: &#x60;true&#x60; or &#x60;false&#x60;. 
    * @param bool $excludeAllAddressRequired Whether to exclude phone numbers that require an [Address](https://www.twilio.com/docs/usage/api/address). Can be: &#x60;true&#x60; or &#x60;false&#x60; and the default is &#x60;false&#x60;. 
    * @param bool $excludeLocalAddressRequired Whether to exclude phone numbers that require a local [Address](https://www.twilio.com/docs/usage/api/address). Can be: &#x60;true&#x60; or &#x60;false&#x60; and the default is &#x60;false&#x60;. 
    * @param bool $excludeForeignAddressRequired Whether to exclude phone numbers that require a foreign [Address](https://www.twilio.com/docs/usage/api/address). Can be: &#x60;true&#x60; or &#x60;false&#x60; and the default is &#x60;false&#x60;. 
    * @param bool $beta Whether to read phone numbers that are new to the Twilio platform. Can be: &#x60;true&#x60; or &#x60;false&#x60; and the default is &#x60;true&#x60;. 
    * @param string $nearNumber Given a phone number, find a geographically close number within &#x60;distance&#x60; miles. Distance defaults to 25 miles. Applies to only phone numbers in the US and Canada. 
    * @param string $nearLatLong Given a latitude/longitude pair &#x60;lat,long&#x60; find geographically close numbers within &#x60;distance&#x60; miles. Applies to only phone numbers in the US and Canada. 
    * @param int $distance The search radius, in miles, for a &#x60;near_&#x60; query.  Can be up to &#x60;500&#x60; and the default is &#x60;25&#x60;. Applies to only phone numbers in the US and Canada. 
    * @param string $inPostalCode Limit results to a particular postal code. Given a phone number, search within the same postal code as that number. Applies to only phone numbers in the US and Canada. 
    * @param string $inRegion Limit results to a particular region, state, or province. Given a phone number, search within the same region as that number. Applies to only phone numbers in the US and Canada. 
    * @param string $inRateCenter Limit results to a specific rate center, or given a phone number search within the same rate center as that number. Requires &#x60;in_lata&#x60; to be set as well. Applies to only phone numbers in the US and Canada. 
    * @param string $inLata Limit results to a specific local access and transport area ([LATA](https://en.wikipedia.org/wiki/Local_access_and_transport_area)). Given a phone number, search within the same [LATA](https://en.wikipedia.org/wiki/Local_access_and_transport_area) as that number. Applies to only phone numbers in the US and Canada. 
    * @param string $inLocality Limit results to a particular locality or city. Given a phone number, search within the same Locality as that number. 
    * @param bool $faxEnabled Whether the phone numbers can receive faxes. Can be: &#x60;true&#x60; or &#x60;false&#x60;. 
    * @return ReadLocalOptions Options builder
    */
    public static function read(int  $areaCode=Values::NONE,string  $contains=Values::NONE,bool  $smsEnabled=Values::NONE,bool  $mmsEnabled=Values::NONE,bool  $voiceEnabled=Values::NONE,bool  $excludeAllAddressRequired=Values::NONE,bool  $excludeLocalAddressRequired=Values::NONE,bool  $excludeForeignAddressRequired=Values::NONE,bool  $beta=Values::NONE,string  $nearNumber=Values::NONE,string  $nearLatLong=Values::NONE,int  $distance=Values::NONE,string  $inPostalCode=Values::NONE,string  $inRegion=Values::NONE,string  $inRateCenter=Values::NONE,string  $inLata=Values::NONE,string  $inLocality=Values::NONE,bool  $faxEnabled=Values::NONE): ReadLocalOptions {
        return new ReadLocalOptions($areaCode,$contains,$smsEnabled,$mmsEnabled,$voiceEnabled,$excludeAllAddressRequired,$excludeLocalAddressRequired,$excludeForeignAddressRequired,$beta,$nearNumber,$nearLatLong,$distance,$inPostalCode,$inRegion,$inRateCenter,$inLata,$inLocality,$faxEnabled);
    }

}

class ReadLocalOptions extends Options {
    /**
    * @param int $areaCode The area code of the phone numbers to read. Applies to only phone numbers in the US and Canada.
    * @param string $contains The pattern on which to match phone numbers. Valid characters are &#x60;*&#x60;, &#x60;0-9&#x60;, &#x60;a-z&#x60;, and &#x60;A-Z&#x60;. The &#x60;*&#x60; character matches any single digit. For examples, see [Example 2](https://www.twilio.com/docs/phone-numbers/api/availablephonenumberlocal-resource?code-sample&#x3D;code-find-phone-numbers-by-number-pattern) and [Example 3](https://www.twilio.com/docs/phone-numbers/api/availablephonenumberlocal-resource?code-sample&#x3D;code-find-phone-numbers-by-character-pattern). If specified, this value must have at least two characters.
    * @param bool $smsEnabled Whether the phone numbers can receive text messages. Can be: &#x60;true&#x60; or &#x60;false&#x60;.
    * @param bool $mmsEnabled Whether the phone numbers can receive MMS messages. Can be: &#x60;true&#x60; or &#x60;false&#x60;.
    * @param bool $voiceEnabled Whether the phone numbers can receive calls. Can be: &#x60;true&#x60; or &#x60;false&#x60;.
    * @param bool $excludeAllAddressRequired Whether to exclude phone numbers that require an [Address](https://www.twilio.com/docs/usage/api/address). Can be: &#x60;true&#x60; or &#x60;false&#x60; and the default is &#x60;false&#x60;.
    * @param bool $excludeLocalAddressRequired Whether to exclude phone numbers that require a local [Address](https://www.twilio.com/docs/usage/api/address). Can be: &#x60;true&#x60; or &#x60;false&#x60; and the default is &#x60;false&#x60;.
    * @param bool $excludeForeignAddressRequired Whether to exclude phone numbers that require a foreign [Address](https://www.twilio.com/docs/usage/api/address). Can be: &#x60;true&#x60; or &#x60;false&#x60; and the default is &#x60;false&#x60;.
    * @param bool $beta Whether to read phone numbers that are new to the Twilio platform. Can be: &#x60;true&#x60; or &#x60;false&#x60; and the default is &#x60;true&#x60;.
    * @param string $nearNumber Given a phone number, find a geographically close number within &#x60;distance&#x60; miles. Distance defaults to 25 miles. Applies to only phone numbers in the US and Canada.
    * @param string $nearLatLong Given a latitude/longitude pair &#x60;lat,long&#x60; find geographically close numbers within &#x60;distance&#x60; miles. Applies to only phone numbers in the US and Canada.
    * @param int $distance The search radius, in miles, for a &#x60;near_&#x60; query.  Can be up to &#x60;500&#x60; and the default is &#x60;25&#x60;. Applies to only phone numbers in the US and Canada.
    * @param string $inPostalCode Limit results to a particular postal code. Given a phone number, search within the same postal code as that number. Applies to only phone numbers in the US and Canada.
    * @param string $inRegion Limit results to a particular region, state, or province. Given a phone number, search within the same region as that number. Applies to only phone numbers in the US and Canada.
    * @param string $inRateCenter Limit results to a specific rate center, or given a phone number search within the same rate center as that number. Requires &#x60;in_lata&#x60; to be set as well. Applies to only phone numbers in the US and Canada.
    * @param string $inLata Limit results to a specific local access and transport area ([LATA](https://en.wikipedia.org/wiki/Local_access_and_transport_area)). Given a phone number, search within the same [LATA](https://en.wikipedia.org/wiki/Local_access_and_transport_area) as that number. Applies to only phone numbers in the US and Canada.
    * @param string $inLocality Limit results to a particular locality or city. Given a phone number, search within the same Locality as that number.
    * @param bool $faxEnabled Whether the phone numbers can receive faxes. Can be: &#x60;true&#x60; or &#x60;false&#x60;.
    */
    public function __construct(int  $areaCode=Values::NONE,string  $contains=Values::NONE,bool  $smsEnabled=Values::NONE,bool  $mmsEnabled=Values::NONE,bool  $voiceEnabled=Values::NONE,bool  $excludeAllAddressRequired=Values::NONE,bool  $excludeLocalAddressRequired=Values::NONE,bool  $excludeForeignAddressRequired=Values::NONE,bool  $beta=Values::NONE,string  $nearNumber=Values::NONE,string  $nearLatLong=Values::NONE,int  $distance=Values::NONE,string  $inPostalCode=Values::NONE,string  $inRegion=Values::NONE,string  $inRateCenter=Values::NONE,string  $inLata=Values::NONE,string  $inLocality=Values::NONE,bool  $faxEnabled=Values::NONE) {
        $this->options['areaCode'] = $areaCode;
        $this->options['contains'] = $contains;
        $this->options['smsEnabled'] = $smsEnabled;
        $this->options['mmsEnabled'] = $mmsEnabled;
        $this->options['voiceEnabled'] = $voiceEnabled;
        $this->options['excludeAllAddressRequired'] = $excludeAllAddressRequired;
        $this->options['excludeLocalAddressRequired'] = $excludeLocalAddressRequired;
        $this->options['excludeForeignAddressRequired'] = $excludeForeignAddressRequired;
        $this->options['beta'] = $beta;
        $this->options['nearNumber'] = $nearNumber;
        $this->options['nearLatLong'] = $nearLatLong;
        $this->options['distance'] = $distance;
        $this->options['inPostalCode'] = $inPostalCode;
        $this->options['inRegion'] = $inRegion;
        $this->options['inRateCenter'] = $inRateCenter;
        $this->options['inLata'] = $inLata;
        $this->options['inLocality'] = $inLocality;
        $this->options['faxEnabled'] = $faxEnabled;
    }

    /**
    * @param int $areaCode The area code of the phone numbers to read. Applies to only phone numbers in the US and Canada.
    * @return $this Fluent Builder
    */
    public function setAreaCode(int $areaCode): self {
        $this->options['areaCode'] = $areaCode;
        return $this;
    }
    /**
    * @param string $contains The pattern on which to match phone numbers. Valid characters are &#x60;*&#x60;, &#x60;0-9&#x60;, &#x60;a-z&#x60;, and &#x60;A-Z&#x60;. The &#x60;*&#x60; character matches any single digit. For examples, see [Example 2](https://www.twilio.com/docs/phone-numbers/api/availablephonenumberlocal-resource?code-sample&#x3D;code-find-phone-numbers-by-number-pattern) and [Example 3](https://www.twilio.com/docs/phone-numbers/api/availablephonenumberlocal-resource?code-sample&#x3D;code-find-phone-numbers-by-character-pattern). If specified, this value must have at least two characters.
    * @return $this Fluent Builder
    */
    public function setContains(string $contains): self {
        $this->options['contains'] = $contains;
        return $this;
    }
    /**
    * @param bool $smsEnabled Whether the phone numbers can receive text messages. Can be: &#x60;true&#x60; or &#x60;false&#x60;.
    * @return $this Fluent Builder
    */
    public function setSmsEnabled(bool $smsEnabled): self {
        $this->options['smsEnabled'] = $smsEnabled;
        return $this;
    }
    /**
    * @param bool $mmsEnabled Whether the phone numbers can receive MMS messages. Can be: &#x60;true&#x60; or &#x60;false&#x60;.
    * @return $this Fluent Builder
    */
    public function setMmsEnabled(bool $mmsEnabled): self {
        $this->options['mmsEnabled'] = $mmsEnabled;
        return $this;
    }
    /**
    * @param bool $voiceEnabled Whether the phone numbers can receive calls. Can be: &#x60;true&#x60; or &#x60;false&#x60;.
    * @return $this Fluent Builder
    */
    public function setVoiceEnabled(bool $voiceEnabled): self {
        $this->options['voiceEnabled'] = $voiceEnabled;
        return $this;
    }
    /**
    * @param bool $excludeAllAddressRequired Whether to exclude phone numbers that require an [Address](https://www.twilio.com/docs/usage/api/address). Can be: &#x60;true&#x60; or &#x60;false&#x60; and the default is &#x60;false&#x60;.
    * @return $this Fluent Builder
    */
    public function setExcludeAllAddressRequired(bool $excludeAllAddressRequired): self {
        $this->options['excludeAllAddressRequired'] = $excludeAllAddressRequired;
        return $this;
    }
    /**
    * @param bool $excludeLocalAddressRequired Whether to exclude phone numbers that require a local [Address](https://www.twilio.com/docs/usage/api/address). Can be: &#x60;true&#x60; or &#x60;false&#x60; and the default is &#x60;false&#x60;.
    * @return $this Fluent Builder
    */
    public function setExcludeLocalAddressRequired(bool $excludeLocalAddressRequired): self {
        $this->options['excludeLocalAddressRequired'] = $excludeLocalAddressRequired;
        return $this;
    }
    /**
    * @param bool $excludeForeignAddressRequired Whether to exclude phone numbers that require a foreign [Address](https://www.twilio.com/docs/usage/api/address). Can be: &#x60;true&#x60; or &#x60;false&#x60; and the default is &#x60;false&#x60;.
    * @return $this Fluent Builder
    */
    public function setExcludeForeignAddressRequired(bool $excludeForeignAddressRequired): self {
        $this->options['excludeForeignAddressRequired'] = $excludeForeignAddressRequired;
        return $this;
    }
    /**
    * @param bool $beta Whether to read phone numbers that are new to the Twilio platform. Can be: &#x60;true&#x60; or &#x60;false&#x60; and the default is &#x60;true&#x60;.
    * @return $this Fluent Builder
    */
    public function setBeta(bool $beta): self {
        $this->options['beta'] = $beta;
        return $this;
    }
    /**
    * @param string $nearNumber Given a phone number, find a geographically close number within &#x60;distance&#x60; miles. Distance defaults to 25 miles. Applies to only phone numbers in the US and Canada.
    * @return $this Fluent Builder
    */
    public function setNearNumber(string $nearNumber): self {
        $this->options['nearNumber'] = $nearNumber;
        return $this;
    }
    /**
    * @param string $nearLatLong Given a latitude/longitude pair &#x60;lat,long&#x60; find geographically close numbers within &#x60;distance&#x60; miles. Applies to only phone numbers in the US and Canada.
    * @return $this Fluent Builder
    */
    public function setNearLatLong(string $nearLatLong): self {
        $this->options['nearLatLong'] = $nearLatLong;
        return $this;
    }
    /**
    * @param int $distance The search radius, in miles, for a &#x60;near_&#x60; query.  Can be up to &#x60;500&#x60; and the default is &#x60;25&#x60;. Applies to only phone numbers in the US and Canada.
    * @return $this Fluent Builder
    */
    public function setDistance(int $distance): self {
        $this->options['distance'] = $distance;
        return $this;
    }
    /**
    * @param string $inPostalCode Limit results to a particular postal code. Given a phone number, search within the same postal code as that number. Applies to only phone numbers in the US and Canada.
    * @return $this Fluent Builder
    */
    public function setInPostalCode(string $inPostalCode): self {
        $this->options['inPostalCode'] = $inPostalCode;
        return $this;
    }
    /**
    * @param string $inRegion Limit results to a particular region, state, or province. Given a phone number, search within the same region as that number. Applies to only phone numbers in the US and Canada.
    * @return $this Fluent Builder
    */
    public function setInRegion(string $inRegion): self {
        $this->options['inRegion'] = $inRegion;
        return $this;
    }
    /**
    * @param string $inRateCenter Limit results to a specific rate center, or given a phone number search within the same rate center as that number. Requires &#x60;in_lata&#x60; to be set as well. Applies to only phone numbers in the US and Canada.
    * @return $this Fluent Builder
    */
    public function setInRateCenter(string $inRateCenter): self {
        $this->options['inRateCenter'] = $inRateCenter;
        return $this;
    }
    /**
    * @param string $inLata Limit results to a specific local access and transport area ([LATA](https://en.wikipedia.org/wiki/Local_access_and_transport_area)). Given a phone number, search within the same [LATA](https://en.wikipedia.org/wiki/Local_access_and_transport_area) as that number. Applies to only phone numbers in the US and Canada.
    * @return $this Fluent Builder
    */
    public function setInLata(string $inLata): self {
        $this->options['inLata'] = $inLata;
        return $this;
    }
    /**
    * @param string $inLocality Limit results to a particular locality or city. Given a phone number, search within the same Locality as that number.
    * @return $this Fluent Builder
    */
    public function setInLocality(string $inLocality): self {
        $this->options['inLocality'] = $inLocality;
        return $this;
    }
    /**
    * @param bool $faxEnabled Whether the phone numbers can receive faxes. Can be: &#x60;true&#x60; or &#x60;false&#x60;.
    * @return $this Fluent Builder
    */
    public function setFaxEnabled(bool $faxEnabled): self {
        $this->options['faxEnabled'] = $faxEnabled;
        return $this;
    }

    /**
    * Provide a friendly representation
    *
    * @return string Machine friendly representation
    */
    public function __toString(): string {
        $options = \http_build_query(Values::of($this->options), '', ' ');
        return '[Twilio.Api.V2010.ReadLocalOptions ' . $options . ']';
    }
}

