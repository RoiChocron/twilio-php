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


namespace Twilio\Rest\Verify\V2\Service;

use Twilio\Exceptions\TwilioException;
use Twilio\InstanceResource;
use Twilio\Values;
use Twilio\Version;
use Twilio\Deserialize;
use Twilio\Rest\Verify\V2\Service\Entity\FactorList;
use Twilio\Rest\Verify\V2\Service\Entity\NewFactorList;
use Twilio\Rest\Verify\V2\Service\Entity\ChallengeList;


/**
 * @property string $sid
 * @property string $identity
 * @property string $accountSid
 * @property string $serviceSid
 * @property \DateTime $dateCreated
 * @property \DateTime $dateUpdated
 * @property string $url
 * @property array $links
 */

class EntityInstance extends InstanceResource {
    protected $_factors;
    protected $_newFactors;
    protected $_challenges;

    /**
     * Initialize the EntityInstance
     *
     * @param Version $version Version that contains the resource
     * @param mixed[] $payload The response payload
     * @param string $serviceSid The unique SID identifier of the Service.
     * @param string $identity The unique external identifier for the Entity of the Service. This identifier should be immutable, not PII, length between 8 and 64 characters, and generated by your external system, such as your user&#39;s UUID, GUID, or SID. It can only contain dash (-) separated alphanumeric characters.
     */
    public function __construct(Version $version, array $payload, string $serviceSid, string $identity = null) {
        parent::__construct($version);

        // Marshaled Properties
        $this->properties = [
            'sid' => Values::array_get($payload, 'sid'),
            'identity' => Values::array_get($payload, 'identity'),
            'accountSid' => Values::array_get($payload, 'account_sid'),
            'serviceSid' => Values::array_get($payload, 'service_sid'),
            'dateCreated' => Deserialize::dateTime(Values::array_get($payload, 'date_created')),
            'dateUpdated' => Deserialize::dateTime(Values::array_get($payload, 'date_updated')),
            'url' => Values::array_get($payload, 'url'),
            'links' => Values::array_get($payload, 'links'),
        ];

        $this->solution = ['serviceSid' => $serviceSid, 'identity' => $identity ?: $this->properties['identity'], ];
    }

    /**
     * Generate an instance context for the instance, the context is capable of
     * performing various actions.  All instance actions are proxied to the context
     *
     * @return EntityContext Context for this EntityInstance
     */
    protected function proxy(): EntityContext {
        if (!$this->context) {
            $this->context = new EntityContext(
                $this->version,
                $this->solution['serviceSid'],
                $this->solution['identity']
            );
        }

        return $this->context;
    }

    /**
     * Delete the EntityInstance
     *
     * @return bool True if delete succeeds, false otherwise
     * @throws TwilioException When an HTTP error occurs.
     */
    public function delete(): bool {
        return $this->proxy()->delete();
    }

    /**
     * Fetch the EntityInstance
     *
     * @return EntityInstance Fetched EntityInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function fetch(): EntityInstance {
        return $this->proxy()->fetch();
    }

    /**
     * Access the factors
     */
    protected function getFactors(): FactorList {
        return $this->proxy()->factors;
    }

    /**
     * Access the newFactors
     */
    protected function getNewFactors(): NewFactorList {
        return $this->proxy()->newFactors;
    }

    /**
     * Access the challenges
     */
    protected function getChallenges(): ChallengeList {
        return $this->proxy()->challenges;
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
        $context = [];
        foreach ($this->solution as $key => $value) {
            $context[] = "$key=$value";
        }
        return '[Twilio.Verify.V2.EntityInstance ' . \implode(' ', $context) . ']';
    }
}

