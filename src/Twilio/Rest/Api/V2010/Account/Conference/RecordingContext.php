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


namespace Twilio\Rest\Api\V2010\Account\Conference;

use Twilio\Exceptions\TwilioException;
use Twilio\Options;
use Twilio\Values;
use Twilio\Version;
use Twilio\InstanceContext;



class RecordingContext extends InstanceContext {
    /**
     * Initialize the RecordingContext
     *
     * @param Version $version Version that contains the resource
     * @param string $accountSid The SID of the [Account](https://www.twilio.com/docs/iam/api/account) that created the Conference Recording resources to delete.
     * @param string $conferenceSid The Conference SID that identifies the conference associated with the recording to delete.
     * @param string $sid The Twilio-provided string that uniquely identifies the Conference Recording resource to delete.
     */
    public function __construct(Version $version, $accountSid , $conferenceSid , $sid ) {
        parent::__construct($version);

        // Path Solution
        $this->solution = ['accountSid' => $accountSid,  'conferenceSid' => $conferenceSid,  'sid' => $sid,  ];

        $this->uri = '/Accounts/' . \rawurlencode($accountSid) . '/Conferences/' . \rawurlencode($conferenceSid) . '/Recordings/' . \rawurlencode($sid) . '.json';
    }

    /**
     * Delete the RecordingInstance
     *
     * @return bool True if delete succeeds, false otherwise
     * @throws TwilioException When an HTTP error occurs.
     */
    public function delete(): bool {
        return $this->version->delete('DELETE', $this->uri);
    }

    /**
     * Fetch the RecordingInstance
     *
     * @return RecordingInstance Fetched RecordingInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function fetch(): RecordingInstance {
        $payload = $this->version->fetch('GET', $this->uri);

        return new RecordingInstance(
            $this->version,
            $payload
            , $this->solution['accountSid']
            , $this->solution['conferenceSid']
            , $this->solution['sid']
        );
    }

    /**
     * Update the RecordingInstance
     *
     * @param string $status 
     * @param array|Options $options Optional Arguments
     * @return RecordingInstance Updated RecordingInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function update(string $status, array $options = []): RecordingInstance {
        $options = new Values($options);

        $data = Values::of([
            'Status' => $status,
            'PauseBehavior' => $options['pauseBehavior'],
        ]);

        $payload = $this->version->update('POST', $this->uri, [], $data);

        return new RecordingInstance(
            $this->version,
            $payload
            , $this->solution['accountSid']
            , $this->solution['conferenceSid']
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
        return '[Twilio.Api.V2010.RecordingContext ' . \implode(' ', $context) . ']';
    }
}
