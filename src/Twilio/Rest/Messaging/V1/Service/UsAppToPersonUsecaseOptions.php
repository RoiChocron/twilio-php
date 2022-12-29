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

namespace Twilio\Rest\Messaging\V1\Service;

use Twilio\Options;
use Twilio\Values;


abstract class UsAppToPersonUsecaseOptions {
    /**
    * @param string $brandRegistrationSid The unique string to identify the A2P brand. 
    * @return FetchUsAppToPersonUsecaseOptions Options builder
    */
    public static function fetch(string  $brandRegistrationSid=Values::NONE): FetchUsAppToPersonUsecaseOptions {
        return new FetchUsAppToPersonUsecaseOptions($brandRegistrationSid);
    }

}

class FetchUsAppToPersonUsecaseOptions extends Options {
    /**
    * @param string $brandRegistrationSid The unique string to identify the A2P brand.
    */
    public function __construct(string  $brandRegistrationSid=Values::NONE) {
        $this->options['brandRegistrationSid'] = $brandRegistrationSid;
    }

    /**
    * @param string $brandRegistrationSid The unique string to identify the A2P brand.
    * @return $this Fluent Builder
    */
    public function setBrandRegistrationSid(string $brandRegistrationSid): self {
        $this->options['brandRegistrationSid'] = $brandRegistrationSid;
        return $this;
    }

    /**
    * Provide a friendly representation
    *
    * @return string Machine friendly representation
    */
    public function __toString(): string {
        $options = \http_build_query(Values::of($this->options), '', ' ');
        return '[Twilio.Messaging.V1.FetchUsAppToPersonUsecaseOptions ' . $options . ']';
    }
}

