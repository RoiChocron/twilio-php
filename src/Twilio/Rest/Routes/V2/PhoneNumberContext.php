<?php

/*
 * This code was generated by
 * ___ _ _ _ _ _    _ ____    ____ ____ _    ____ ____ _  _ ____ ____ ____ ___ __   __
 *  |  | | | | |    | |  | __ |  | |__| | __ | __ |___ |\ | |___ |__/ |__|  | |  | |__/
 *  |  |_|_| | |___ | |__|    |__| |  | |    |__] |___ | \| |___ |  \ |  |  | |__| |  \
 *
 * Twilio - Routes
 * This is the public Twilio REST API.
 *
 * NOTE: This class is auto generated by OpenAPI Generator.
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */


namespace Twilio\Rest\Routes\V2;

use Twilio\Exceptions\TwilioException;
use Twilio\Options;
use Twilio\Values;
use Twilio\Version;
use Twilio\InstanceContext;



class PhoneNumberContext extends InstanceContext {
    /**
     * Initialize the PhoneNumberContext
     *
     * @param Version $version Version that contains the resource
     * @param string $phoneNumber The phone number in E.164 format
     */
    public function __construct(Version $version, $phoneNumber ) {
        parent::__construct($version);

        // Path Solution
        $this->solution = ['phoneNumber' => $phoneNumber,  ];

        $this->uri = '/PhoneNumbers/' . \rawurlencode($phoneNumber) . '';
    }

    /**
     * Fetch the PhoneNumberInstance
     *
     * @return PhoneNumberInstance Fetched PhoneNumberInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function fetch(): PhoneNumberInstance {
        $payload = $this->version->fetch('GET', $this->uri);

        return new PhoneNumberInstance(
            $this->version,
            $payload
            , $this->solution['phoneNumber']
        );
    }

    /**
     * Update the PhoneNumberInstance
     *
     * @param array|Options $options Optional Arguments
     * @return PhoneNumberInstance Updated PhoneNumberInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function update(array $options = []): PhoneNumberInstance {
        $options = new Values($options);

        $data = Values::of([
            'VoiceRegion' => $options['voiceRegion'],
            'FriendlyName' => $options['friendlyName'],
        ]);

        $payload = $this->version->update('POST', $this->uri, [], $data);

        return new PhoneNumberInstance(
            $this->version,
            $payload
            , $this->solution['phoneNumber']
        );
    }

    /**
     * Provide a friendly representation
     *
     * @return string Machine friendly representation
     */
    public function __toString(): string {
        $context = [];
        foreach ($this->solution as $key => $value) {
            $context[] = "$key=$value";
        }
        return '[Twilio.Routes.V2.PhoneNumberContext ' . \implode(' ', $context) . ']';
    }
}
