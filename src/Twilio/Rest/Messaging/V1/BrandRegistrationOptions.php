<?php
/*
 * This code was generated by
 * ___ _ _ _ _ _    _ ____    ____ ____ _    ____ ____ _  _ ____ ____ ____ ___ __   __
 *  |  | | | | |    | |  | __ |  | |__| | __ | __ |___ |\ | |___ |__/ |__|  | |  | |__/
 *  |  |_|_| | |___ | |__|    |__| |  | |    |__] |___ | \| |___ |  \ |  |  | |__| |  \
 *
 * Twilio - Messaging
 * This is the public Twilio REST API.
 *
 * NOTE: This class is auto generated by OpenAPI Generator.
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Twilio\Rest\Messaging\V1;

use Twilio\Options;
use Twilio\Values;


abstract class BrandRegistrationOptions {
    /**
    * @param string $brandType Type of brand being created. One of: \\\&quot;STANDARD\\\&quot;, \\\&quot;STARTER\\\&quot;. STARTER is for low volume, starter use cases. STANDARD is for all other use cases. 
    * @param bool $mock A boolean that specifies whether brand should be a mock or not. If true, brand will be registered as a mock brand. Defaults to false if no value is provided. 
    * @param bool $skipAutomaticSecVet A flag to disable automatic secondary vetting for brands which it would otherwise be done. 
    * @return CreateBrandRegistrationOptions Options builder
    */
    public static function create(string  $brandType=Values::NONE,bool  $mock=Values::NONE,bool  $skipAutomaticSecVet=Values::NONE): CreateBrandRegistrationOptions {
        return new CreateBrandRegistrationOptions($brandType,$mock,$skipAutomaticSecVet);
    }




}

class CreateBrandRegistrationOptions extends Options {
    /**
    * @param string $brandType Type of brand being created. One of: \\\&quot;STANDARD\\\&quot;, \\\&quot;STARTER\\\&quot;. STARTER is for low volume, starter use cases. STANDARD is for all other use cases.
    * @param bool $mock A boolean that specifies whether brand should be a mock or not. If true, brand will be registered as a mock brand. Defaults to false if no value is provided.
    * @param bool $skipAutomaticSecVet A flag to disable automatic secondary vetting for brands which it would otherwise be done.
    */
    public function __construct(string  $brandType=Values::NONE,bool  $mock=Values::NONE,bool  $skipAutomaticSecVet=Values::NONE) {
        $this->options['brandType'] = $brandType;
        $this->options['mock'] = $mock;
        $this->options['skipAutomaticSecVet'] = $skipAutomaticSecVet;
    }

    /**
    * @param string $brandType Type of brand being created. One of: \\\&quot;STANDARD\\\&quot;, \\\&quot;STARTER\\\&quot;. STARTER is for low volume, starter use cases. STANDARD is for all other use cases.
    * @return $this Fluent Builder
    */
    public function setBrandType(string $brandType): self {
        $this->options['brandType'] = $brandType;
        return $this;
    }
    /**
    * @param bool $mock A boolean that specifies whether brand should be a mock or not. If true, brand will be registered as a mock brand. Defaults to false if no value is provided.
    * @return $this Fluent Builder
    */
    public function setMock(bool $mock): self {
        $this->options['mock'] = $mock;
        return $this;
    }
    /**
    * @param bool $skipAutomaticSecVet A flag to disable automatic secondary vetting for brands which it would otherwise be done.
    * @return $this Fluent Builder
    */
    public function setSkipAutomaticSecVet(bool $skipAutomaticSecVet): self {
        $this->options['skipAutomaticSecVet'] = $skipAutomaticSecVet;
        return $this;
    }

    /**
    * Provide a friendly representation
    *
    * @return string Machine friendly representation
    */
    public function __toString(): string {
        $options = \http_build_query(Values::of($this->options), '', ' ');
        return '[Twilio.Messaging.V1.CreateBrandRegistrationOptions ' . $options . ']';
    }
}




