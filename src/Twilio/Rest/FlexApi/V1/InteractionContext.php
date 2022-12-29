<?php

/*
 * This code was generated by
 * ___ _ _ _ _ _    _ ____    ____ ____ _    ____ ____ _  _ ____ ____ ____ ___ __   __
 *  |  | | | | |    | |  | __ |  | |__| | __ | __ |___ |\ | |___ |__/ |__|  | |  | |__/
 *  |  |_|_| | |___ | |__|    |__| |  | |    |__] |___ | \| |___ |  \ |  |  | |__| |  \
 *
 * Twilio - Flex
 * This is the public Twilio REST API.
 *
 * NOTE: This class is auto generated by OpenAPI Generator.
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */


namespace Twilio\Rest\FlexApi\V1;

use Twilio\Exceptions\TwilioException;
use Twilio\ListResource;
use Twilio\Version;
use Twilio\InstanceContext;
use Twilio\Rest\FlexApi\V1\Interaction\InteractionChannelList;


/**
 * @property InteractionChannelList $channels
 * @method \Twilio\Rest\FlexApi\V1\Interaction\InteractionChannelContext channels(string $sid)
 */

class InteractionContext extends InstanceContext {
    protected $_channels;

    /**
     * Initialize the InteractionContext
     *
     * @param Version $version Version that contains the resource
     * @param string $sid The SID of the Interaction resource to fetch.
     */
    public function __construct(Version $version, $sid ) {
        parent::__construct($version);

        // Path Solution
        $this->solution = ['sid' => $sid,  ];

        $this->uri = '/Interactions/' . \rawurlencode($sid) . '';
    }

    /**
     * Fetch the InteractionInstance
     *
     * @return InteractionInstance Fetched InteractionInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function fetch(): InteractionInstance {
        $payload = $this->version->fetch('GET', $this->uri);

        return new InteractionInstance(
            $this->version,
            $payload
            , $this->solution['sid']
        );
    }

    /**
     * Access the channels
     */
    protected function getChannels(): InteractionChannelList {
        if (!$this->_channels) {
            $this->_channels = new InteractionChannelList(
                $this->version
                , $this->solution['sid']
            );
        }

        return $this->_channels;
    }

    /**
     * Magic getter to lazy load subresources
     *
     * @param string $name Subresource to return
     * @return ListResource The requested subresource
     * @throws TwilioException For unknown subresources
     */
    public function __get(string $name): ListResource {
        if (\property_exists($this, '_' . $name)) {
            $method = 'get' . \ucfirst($name);
            return $this->$method();
        }

        throw new TwilioException('Unknown subresource ' . $name);
    }

    /**
     * Magic caller to get resource contexts
     *
     * @param string $name Resource to return
     * @param array $arguments Context parameters
     * @return InstanceContext The requested resource context
     * @throws TwilioException For unknown resource
     */
    public function __call(string $name, array $arguments): InstanceContext {
        $property = $this->$name;
        if (\method_exists($property, 'getContext')) {
            return \call_user_func_array(array($property, 'getContext'), $arguments);
        }

        throw new TwilioException('Resource does not have a context');
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
        return '[Twilio.FlexApi.V1.InteractionContext ' . \implode(' ', $context) . ']';
    }
}
