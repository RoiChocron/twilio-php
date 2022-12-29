<?php

/*
 * This code was generated by
 * ___ _ _ _ _ _    _ ____    ____ ____ _    ____ ____ _  _ ____ ____ ____ ___ __   __
 *  |  | | | | |    | |  | __ |  | |__| | __ | __ |___ |\ | |___ |__/ |__|  | |  | |__/
 *  |  |_|_| | |___ | |__|    |__| |  | |    |__] |___ | \| |___ |  \ |  |  | |__| |  \
 *
 * Twilio - Voice
 * This is the public Twilio REST API.
 *
 * NOTE: This class is auto generated by OpenAPI Generator.
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */


namespace Twilio\Rest\Voice\V1;

use Twilio\Exceptions\TwilioException;
use Twilio\Values;
use Twilio\Version;
use Twilio\InstanceContext;



class SourceIpMappingContext extends InstanceContext {
    /**
     * Initialize the SourceIpMappingContext
     *
     * @param Version $version Version that contains the resource
     * @param string $sid The Twilio-provided string that uniquely identifies the IP Record resource to delete.
     */
    public function __construct(Version $version, $sid ) {
        parent::__construct($version);

        // Path Solution
        $this->solution = ['sid' => $sid,  ];

        $this->uri = '/SourceIpMappings/' . \rawurlencode($sid) . '';
    }

    /**
     * Delete the SourceIpMappingInstance
     *
     * @return bool True if delete succeeds, false otherwise
     * @throws TwilioException When an HTTP error occurs.
     */
    public function delete(): bool {
        return $this->version->delete('DELETE', $this->uri);
    }

    /**
     * Fetch the SourceIpMappingInstance
     *
     * @return SourceIpMappingInstance Fetched SourceIpMappingInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function fetch(): SourceIpMappingInstance {
        $payload = $this->version->fetch('GET', $this->uri);

        return new SourceIpMappingInstance(
            $this->version,
            $payload
            , $this->solution['sid']
        );
    }

    /**
     * Update the SourceIpMappingInstance
     *
     * @param string $sipDomainSid The SID of the SIP Domain that the IP Record should be mapped to.
     * @return SourceIpMappingInstance Updated SourceIpMappingInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function update(string $sipDomainSid): SourceIpMappingInstance {
        $data = Values::of([
            'SipDomainSid' => $sipDomainSid,
        ]);

        $payload = $this->version->update('POST', $this->uri, [], $data);

        return new SourceIpMappingInstance(
            $this->version,
            $payload
            , $this->solution['sid']
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
        return '[Twilio.Voice.V1.SourceIpMappingContext ' . \implode(' ', $context) . ']';
    }
}
