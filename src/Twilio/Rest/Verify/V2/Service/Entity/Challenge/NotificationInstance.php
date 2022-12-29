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
use Twilio\InstanceResource;
use Twilio\Values;
use Twilio\Version;
use Twilio\Deserialize;


/**
 * @property string $sid
 * @property string $accountSid
 * @property string $serviceSid
 * @property string $entitySid
 * @property string $identity
 * @property string $challengeSid
 * @property string $priority
 * @property int $ttl
 * @property \DateTime $dateCreated
 */

class NotificationInstance extends InstanceResource {
    /**
     * Initialize the NotificationInstance
     *
     * @param Version $version Version that contains the resource
     * @param mixed[] $payload The response payload
     * @param string $serviceSid The unique SID identifier of the Service.
     * @param string $identity Customer unique identity for the Entity owner of the Challenge. This identifier should be immutable, not PII, length between 8 and 64 characters, and generated by your external system, such as your user&#39;s UUID, GUID, or SID. It can only contain dash (-) separated alphanumeric characters.
     * @param string $challengeSid The unique SID identifier of the Challenge.
     */
    public function __construct(Version $version, array $payload, string $serviceSid, string $identity, string $challengeSid) {
        parent::__construct($version);

        // Marshaled Properties
        $this->properties = [
            'sid' => Values::array_get($payload, 'sid'),
            'accountSid' => Values::array_get($payload, 'account_sid'),
            'serviceSid' => Values::array_get($payload, 'service_sid'),
            'entitySid' => Values::array_get($payload, 'entity_sid'),
            'identity' => Values::array_get($payload, 'identity'),
            'challengeSid' => Values::array_get($payload, 'challenge_sid'),
            'priority' => Values::array_get($payload, 'priority'),
            'ttl' => Values::array_get($payload, 'ttl'),
            'dateCreated' => Deserialize::dateTime(Values::array_get($payload, 'date_created')),
        ];

        $this->solution = ['serviceSid' => $serviceSid, 'identity' => $identity, 'challengeSid' => $challengeSid, ];
    }

    /**
     * Magic getter to access properties
     *
     * @param string $name Property to access
     * @return mixed The requested property
     * @throws TwilioException For unknown properties
     */
    public function __get(string $name) {
        if (\array_key_exists($name, $this->properties)) {
            return $this->properties[$name];
        }

        if (\property_exists($this, '_' . $name)) {
            $method = 'get' . \ucfirst($name);
            return $this->$method();
        }

        throw new TwilioException('Unknown property: ' . $name);
    }

    /**
     * Provide a friendly representation
     *
     * @return string Machine friendly representation
     */
    public function __toString(): string {
        return '[Twilio.Verify.V2.NotificationInstance]';
    }
}

