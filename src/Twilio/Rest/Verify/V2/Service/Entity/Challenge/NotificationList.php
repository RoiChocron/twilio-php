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

namespace Twilio\Rest\Verify\V2\Service\Entity\Challenge;

use Twilio\Exceptions\TwilioException;
use Twilio\ListResource;
use Twilio\Options;
use Twilio\Values;
use Twilio\Version;



class NotificationList extends ListResource {
    /**
     * Construct the NotificationList
     *
     * @param Version $version Version that contains the resource
     * @param string $serviceSid The unique SID identifier of the Service.
     * @param string $identity Customer unique identity for the Entity owner of the Challenge. This identifier should be immutable, not PII, length between 8 and 64 characters, and generated by your external system, such as your user&#39;s UUID, GUID, or SID. It can only contain dash (-) separated alphanumeric characters.
     * @param string $challengeSid The unique SID identifier of the Challenge.
     */
    public function __construct(Version $version, string $serviceSid , string $identity , string $challengeSid ) {
        parent::__construct($version);

        // Path Solution
        $this->solution = ['serviceSid' => $serviceSid, 'identity' => $identity, 'challengeSid' => $challengeSid, ];

        $this->uri = '/Services/' . \rawurlencode($serviceSid) . '/Entities/' . \rawurlencode($identity) . '/Challenges/' . \rawurlencode($challengeSid) . '/Notifications';
    }

    /**
     * Create the NotificationInstance
     *
     * @param array|Options $options Optional Arguments
     * @return NotificationInstance Created NotificationInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function create(array $options = []): NotificationInstance {
        $options = new Values($options);

        $data = Values::of([
            'Ttl' => $options['ttl'],
        ]);

        $payload = $this->version->create('POST', $this->uri, [], $data);

        return new NotificationInstance(
            $this->version,
            $payload
            , $this->solution['serviceSid']
            , $this->solution['identity']
            , $this->solution['challengeSid']
        );
    }

    /**
     * Constructs a NotificationContext
     *
     */
    public function getContext(): NotificationContext {
        return new NotificationContext($this->version, $this->solution['serviceSid'], $this->solution['identity'], $this->solution['challengeSid']);
    }

    /**
     * Provide a friendly representation
     *
     * @return string Machine friendly representation
     */
    public function __toString(): string {
        return '[Twilio.Verify.V2.NotificationList]';
    }
}
