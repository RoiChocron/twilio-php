<?php

/*
 * This code was generated by
 * ___ _ _ _ _ _    _ ____    ____ ____ _    ____ ____ _  _ ____ ____ ____ ___ __   __
 *  |  | | | | |    | |  | __ |  | |__| | __ | __ |___ |\ | |___ |__/ |__|  | |  | |__/
 *  |  |_|_| | |___ | |__|    |__| |  | |    |__] |___ | \| |___ |  \ |  |  | |__| |  \
 *
 * Twilio - Pricing
 * This is the public Twilio REST API.
 *
 * NOTE: This class is auto generated by OpenAPI Generator.
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Twilio\Rest\Pricing\V2;

use Twilio\ListResource;
use Twilio\Version;



class NumberList extends ListResource {
    /**
     * Construct the NumberList
     *
     * @param Version $version Version that contains the resource
     */
    public function __construct(Version $version) {
        parent::__construct($version);

        // Path Solution
        $this->solution = [];
    }

    /**
     * Constructs a NumberContext
     *
     * @param string $destinationNumber The destination phone number, in [E.164](https://www.twilio.com/docs/glossary/what-e164) format, for which to fetch the origin-based voice pricing information. E.164 format consists of a + followed by the country code and subscriber number.
     */
    public function getContext(string $destinationNumber): NumberContext {
        return new NumberContext($this->version, $destinationNumber);
    }

    /**
     * Provide a friendly representation
     *
     * @return string Machine friendly representation
     */
    public function __toString(): string {
        return '[Twilio.Pricing.V2.NumberList]';
    }
}
