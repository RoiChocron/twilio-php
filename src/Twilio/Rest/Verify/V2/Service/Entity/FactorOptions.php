<?php
/*
 * This code was generated by
 * ___ _ _ _ _ _    _ ____    ____ ____ _    ____ ____ _  _ ____ ____ ____ ___ __   __
 *  |  | | | | |    | |  | __ |  | |__| | __ | __ |___ |\ | |___ |__/ |__|  | |  | |__/
 *  |  |_|_| | |___ | |__|    |__| |  | |    |__] |___ | \| |___ |  \ |  |  | |__| |  \
 *
 * Twilio - Verify
 * This is the public Twilio REST API.
 *
 * NOTE: This class is auto generated by OpenAPI Generator.
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Twilio\Rest\Verify\V2\Service\Entity;

use Twilio\Options;
use Twilio\Values;


abstract class FactorOptions {



    /**
    * @param string $authPayload The optional payload needed to verify the Factor for the first time. E.g. for a TOTP, the numeric code. 
    * @param string $friendlyName The new friendly name of this Factor. It can be up to 64 characters. 
    * @param string $configNotificationToken For APN, the device token. For FCM, the registration token. It is used to send the push notifications. Required when &#x60;factor_type&#x60; is &#x60;push&#x60;. If specified, this value must be between 32 and 255 characters long. 
    * @param string $configSdkVersion The Verify Push SDK version used to configure the factor 
    * @param int $configTimeStep Defines how often, in seconds, are TOTP codes generated. i.e, a new TOTP code is generated every time_step seconds. Must be between 20 and 60 seconds, inclusive 
    * @param int $configSkew The number of time-steps, past and future, that are valid for validation of TOTP codes. Must be between 0 and 2, inclusive 
    * @param int $configCodeLength Number of digits for generated TOTP codes. Must be between 3 and 8, inclusive 
    * @param string $configAlg  
    * @param string $configNotificationPlatform The transport technology used to generate the Notification Token. Can be &#x60;apn&#x60;, &#x60;fcm&#x60; or &#x60;none&#x60;.  Required when &#x60;factor_type&#x60; is &#x60;push&#x60;. 
    * @return UpdateFactorOptions Options builder
    */
    public static function update(string  $authPayload=Values::NONE,string  $friendlyName=Values::NONE,string  $configNotificationToken=Values::NONE,string  $configSdkVersion=Values::NONE,int  $configTimeStep=Values::NONE,int  $configSkew=Values::NONE,int  $configCodeLength=Values::NONE,string  $configAlg=Values::NONE,string  $configNotificationPlatform=Values::NONE): UpdateFactorOptions {
        return new UpdateFactorOptions($authPayload,$friendlyName,$configNotificationToken,$configSdkVersion,$configTimeStep,$configSkew,$configCodeLength,$configAlg,$configNotificationPlatform);
    }

}




class UpdateFactorOptions extends Options {
    /**
    * @param string $authPayload The optional payload needed to verify the Factor for the first time. E.g. for a TOTP, the numeric code.
    * @param string $friendlyName The new friendly name of this Factor. It can be up to 64 characters.
    * @param string $configNotificationToken For APN, the device token. For FCM, the registration token. It is used to send the push notifications. Required when &#x60;factor_type&#x60; is &#x60;push&#x60;. If specified, this value must be between 32 and 255 characters long.
    * @param string $configSdkVersion The Verify Push SDK version used to configure the factor
    * @param int $configTimeStep Defines how often, in seconds, are TOTP codes generated. i.e, a new TOTP code is generated every time_step seconds. Must be between 20 and 60 seconds, inclusive
    * @param int $configSkew The number of time-steps, past and future, that are valid for validation of TOTP codes. Must be between 0 and 2, inclusive
    * @param int $configCodeLength Number of digits for generated TOTP codes. Must be between 3 and 8, inclusive
    * @param string $configAlg 
    * @param string $configNotificationPlatform The transport technology used to generate the Notification Token. Can be &#x60;apn&#x60;, &#x60;fcm&#x60; or &#x60;none&#x60;.  Required when &#x60;factor_type&#x60; is &#x60;push&#x60;.
    */
    public function __construct(string  $authPayload=Values::NONE,string  $friendlyName=Values::NONE,string  $configNotificationToken=Values::NONE,string  $configSdkVersion=Values::NONE,int  $configTimeStep=Values::NONE,int  $configSkew=Values::NONE,int  $configCodeLength=Values::NONE,string  $configAlg=Values::NONE,string  $configNotificationPlatform=Values::NONE) {
        $this->options['authPayload'] = $authPayload;
        $this->options['friendlyName'] = $friendlyName;
        $this->options['configNotificationToken'] = $configNotificationToken;
        $this->options['configSdkVersion'] = $configSdkVersion;
        $this->options['configTimeStep'] = $configTimeStep;
        $this->options['configSkew'] = $configSkew;
        $this->options['configCodeLength'] = $configCodeLength;
        $this->options['configAlg'] = $configAlg;
        $this->options['configNotificationPlatform'] = $configNotificationPlatform;
    }

    /**
    * @param string $authPayload The optional payload needed to verify the Factor for the first time. E.g. for a TOTP, the numeric code.
    * @return $this Fluent Builder
    */
    public function setAuthPayload(string $authPayload): self {
        $this->options['authPayload'] = $authPayload;
        return $this;
    }
    /**
    * @param string $friendlyName The new friendly name of this Factor. It can be up to 64 characters.
    * @return $this Fluent Builder
    */
    public function setFriendlyName(string $friendlyName): self {
        $this->options['friendlyName'] = $friendlyName;
        return $this;
    }
    /**
    * @param string $configNotificationToken For APN, the device token. For FCM, the registration token. It is used to send the push notifications. Required when &#x60;factor_type&#x60; is &#x60;push&#x60;. If specified, this value must be between 32 and 255 characters long.
    * @return $this Fluent Builder
    */
    public function setConfigNotificationToken(string $configNotificationToken): self {
        $this->options['configNotificationToken'] = $configNotificationToken;
        return $this;
    }
    /**
    * @param string $configSdkVersion The Verify Push SDK version used to configure the factor
    * @return $this Fluent Builder
    */
    public function setConfigSdkVersion(string $configSdkVersion): self {
        $this->options['configSdkVersion'] = $configSdkVersion;
        return $this;
    }
    /**
    * @param int $configTimeStep Defines how often, in seconds, are TOTP codes generated. i.e, a new TOTP code is generated every time_step seconds. Must be between 20 and 60 seconds, inclusive
    * @return $this Fluent Builder
    */
    public function setConfigTimeStep(int $configTimeStep): self {
        $this->options['configTimeStep'] = $configTimeStep;
        return $this;
    }
    /**
    * @param int $configSkew The number of time-steps, past and future, that are valid for validation of TOTP codes. Must be between 0 and 2, inclusive
    * @return $this Fluent Builder
    */
    public function setConfigSkew(int $configSkew): self {
        $this->options['configSkew'] = $configSkew;
        return $this;
    }
    /**
    * @param int $configCodeLength Number of digits for generated TOTP codes. Must be between 3 and 8, inclusive
    * @return $this Fluent Builder
    */
    public function setConfigCodeLength(int $configCodeLength): self {
        $this->options['configCodeLength'] = $configCodeLength;
        return $this;
    }
    /**
    * @param string $configAlg 
    * @return $this Fluent Builder
    */
    public function setConfigAlg(string $configAlg): self {
        $this->options['configAlg'] = $configAlg;
        return $this;
    }
    /**
    * @param string $configNotificationPlatform The transport technology used to generate the Notification Token. Can be &#x60;apn&#x60;, &#x60;fcm&#x60; or &#x60;none&#x60;.  Required when &#x60;factor_type&#x60; is &#x60;push&#x60;.
    * @return $this Fluent Builder
    */
    public function setConfigNotificationPlatform(string $configNotificationPlatform): self {
        $this->options['configNotificationPlatform'] = $configNotificationPlatform;
        return $this;
    }

    /**
    * Provide a friendly representation
    *
    * @return string Machine friendly representation
    */
    public function __toString(): string {
        $options = \http_build_query(Values::of($this->options), '', ' ');
        return '[Twilio.Verify.V2.UpdateFactorOptions ' . $options . ']';
    }
}

