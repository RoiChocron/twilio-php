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


namespace Twilio\Rest\Api\V2010\Account\Sip;

use Twilio\Exceptions\TwilioException;
use Twilio\InstanceResource;
use Twilio\Options;
use Twilio\Values;
use Twilio\Version;
use Twilio\Deserialize;
use Twilio\Rest\Api\V2010\Account\Sip\Domain\CredentialListMappingList;
use Twilio\Rest\Api\V2010\Account\Sip\Domain\IpAccessControlListMappingList;
use Twilio\Rest\Api\V2010\Account\Sip\Domain\AuthTypesList;


/**
 * @property string $accountSid
 * @property string $apiVersion
 * @property string $authType
 * @property \DateTime $dateCreated
 * @property \DateTime $dateUpdated
 * @property string $domainName
 * @property string $friendlyName
 * @property string $sid
 * @property string $uri
 * @property string $voiceFallbackMethod
 * @property string $voiceFallbackUrl
 * @property string $voiceMethod
 * @property string $voiceStatusCallbackMethod
 * @property string $voiceStatusCallbackUrl
 * @property string $voiceUrl
 * @property array $subresourceUris
 * @property bool $sipRegistration
 * @property bool $emergencyCallingEnabled
 * @property bool $secure
 * @property string $byocTrunkSid
 * @property string $emergencyCallerSid
 */

class DomainInstance extends InstanceResource {
    protected $_credentialListMappings;
    protected $_ipAccessControlListMappings;
    protected $_auth;

    /**
     * Initialize the DomainInstance
     *
     * @param Version $version Version that contains the resource
     * @param mixed[] $payload The response payload
     * @param string $accountSid The SID of the [Account](https://www.twilio.com/docs/iam/api/account) that will create the resource.
     * @param string $sid The Twilio-provided string that uniquely identifies the SipDomain resource to delete.
     */
    public function __construct(Version $version, array $payload, string $accountSid, string $sid = null) {
        parent::__construct($version);

        // Marshaled Properties
        $this->properties = [
            'accountSid' => Values::array_get($payload, 'account_sid'),
            'apiVersion' => Values::array_get($payload, 'api_version'),
            'authType' => Values::array_get($payload, 'auth_type'),
            'dateCreated' => Deserialize::dateTime(Values::array_get($payload, 'date_created')),
            'dateUpdated' => Deserialize::dateTime(Values::array_get($payload, 'date_updated')),
            'domainName' => Values::array_get($payload, 'domain_name'),
            'friendlyName' => Values::array_get($payload, 'friendly_name'),
            'sid' => Values::array_get($payload, 'sid'),
            'uri' => Values::array_get($payload, 'uri'),
            'voiceFallbackMethod' => Values::array_get($payload, 'voice_fallback_method'),
            'voiceFallbackUrl' => Values::array_get($payload, 'voice_fallback_url'),
            'voiceMethod' => Values::array_get($payload, 'voice_method'),
            'voiceStatusCallbackMethod' => Values::array_get($payload, 'voice_status_callback_method'),
            'voiceStatusCallbackUrl' => Values::array_get($payload, 'voice_status_callback_url'),
            'voiceUrl' => Values::array_get($payload, 'voice_url'),
            'subresourceUris' => Values::array_get($payload, 'subresource_uris'),
            'sipRegistration' => Values::array_get($payload, 'sip_registration'),
            'emergencyCallingEnabled' => Values::array_get($payload, 'emergency_calling_enabled'),
            'secure' => Values::array_get($payload, 'secure'),
            'byocTrunkSid' => Values::array_get($payload, 'byoc_trunk_sid'),
            'emergencyCallerSid' => Values::array_get($payload, 'emergency_caller_sid'),
        ];

        $this->solution = ['accountSid' => $accountSid, 'sid' => $sid ?: $this->properties['sid'], ];
    }

    /**
     * Generate an instance context for the instance, the context is capable of
     * performing various actions.  All instance actions are proxied to the context
     *
     * @return DomainContext Context for this DomainInstance
     */
    protected function proxy(): DomainContext {
        if (!$this->context) {
            $this->context = new DomainContext(
                $this->version,
                $this->solution['accountSid'],
                $this->solution['sid']
            );
        }

        return $this->context;
    }

    /**
     * Delete the DomainInstance
     *
     * @return bool True if delete succeeds, false otherwise
     * @throws TwilioException When an HTTP error occurs.
     */
    public function delete(): bool {
        return $this->proxy()->delete();
    }

    /**
     * Fetch the DomainInstance
     *
     * @return DomainInstance Fetched DomainInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function fetch(): DomainInstance {
        return $this->proxy()->fetch();
    }

    /**
     * Update the DomainInstance
     *
     * @param array|Options $options Optional Arguments
     * @return DomainInstance Updated DomainInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function update(array $options = []): DomainInstance {
        return $this->proxy()->update($options);
    }

    /**
     * Access the credentialListMappings
     */
    protected function getCredentialListMappings(): CredentialListMappingList {
        return $this->proxy()->credentialListMappings;
    }

    /**
     * Access the ipAccessControlListMappings
     */
    protected function getIpAccessControlListMappings(): IpAccessControlListMappingList {
        return $this->proxy()->ipAccessControlListMappings;
    }

    /**
     * Access the auth
     */
    protected function getAuth(): AuthTypesList {
        return $this->proxy()->auth;
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
        return '[Twilio.Api.V2010.DomainInstance ' . \implode(' ', $context) . ']';
    }
}

