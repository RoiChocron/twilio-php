<?php

/*
 * This code was generated by
 * ___ _ _ _ _ _    _ ____    ____ ____ _    ____ ____ _  _ ____ ____ ____ ___ __   __
 *  |  | | | | |    | |  | __ |  | |__| | __ | __ |___ |\ | |___ |__/ |__|  | |  | |__/
 *  |  |_|_| | |___ | |__|    |__| |  | |    |__] |___ | \| |___ |  \ |  |  | |__| |  \
 *
 * Twilio - Conversations
 * This is the public Twilio REST API.
 *
 * NOTE: This class is auto generated by OpenAPI Generator.
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */


namespace Twilio\Rest\Conversations\V1\Service;

use Twilio\Exceptions\TwilioException;
use Twilio\InstanceResource;
use Twilio\Options;
use Twilio\Values;
use Twilio\Version;


/**
 * @property string $chatServiceSid
 * @property string $defaultConversationCreatorRoleSid
 * @property string $defaultConversationRoleSid
 * @property string $defaultChatServiceRoleSid
 * @property string $url
 * @property array $links
 * @property bool $reachabilityEnabled
 */

class ConfigurationInstance extends InstanceResource {
    /**
     * Initialize the ConfigurationInstance
     *
     * @param Version $version Version that contains the resource
     * @param mixed[] $payload The response payload
     * @param string $chatServiceSid The SID of the Service configuration resource to fetch.
     */
    public function __construct(Version $version, array $payload, string $chatServiceSid) {
        parent::__construct($version);

        // Marshaled Properties
        $this->properties = [
            'chatServiceSid' => Values::array_get($payload, 'chat_service_sid'),
            'defaultConversationCreatorRoleSid' => Values::array_get($payload, 'default_conversation_creator_role_sid'),
            'defaultConversationRoleSid' => Values::array_get($payload, 'default_conversation_role_sid'),
            'defaultChatServiceRoleSid' => Values::array_get($payload, 'default_chat_service_role_sid'),
            'url' => Values::array_get($payload, 'url'),
            'links' => Values::array_get($payload, 'links'),
            'reachabilityEnabled' => Values::array_get($payload, 'reachability_enabled'),
        ];

        $this->solution = ['chatServiceSid' => $chatServiceSid, ];
    }

    /**
     * Generate an instance context for the instance, the context is capable of
     * performing various actions.  All instance actions are proxied to the context
     *
     * @return ConfigurationContext Context for this ConfigurationInstance
     */
    protected function proxy(): ConfigurationContext {
        if (!$this->context) {
            $this->context = new ConfigurationContext(
                $this->version,
                $this->solution['chatServiceSid']
            );
        }

        return $this->context;
    }

    /**
     * Fetch the ConfigurationInstance
     *
     * @return ConfigurationInstance Fetched ConfigurationInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function fetch(): ConfigurationInstance {
        return $this->proxy()->fetch();
    }

    /**
     * Update the ConfigurationInstance
     *
     * @param array|Options $options Optional Arguments
     * @return ConfigurationInstance Updated ConfigurationInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function update(array $options = []): ConfigurationInstance {
        return $this->proxy()->update($options);
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
        return '[Twilio.Conversations.V1.ConfigurationInstance ' . \implode(' ', $context) . ']';
    }
}

