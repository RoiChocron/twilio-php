<?php

/*
 * This code was generated by
 * ___ _ _ _ _ _    _ ____    ____ ____ _    ____ ____ _  _ ____ ____ ____ ___ __   __
 *  |  | | | | |    | |  | __ |  | |__| | __ | __ |___ |\ | |___ |__/ |__|  | |  | |__/
 *  |  |_|_| | |___ | |__|    |__| |  | |    |__] |___ | \| |___ |  \ |  |  | |__| |  \
 *
 * Twilio - Wireless
 * This is the public Twilio REST API.
 *
 * NOTE: This class is auto generated by OpenAPI Generator.
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */


namespace Twilio\Rest\Wireless\V1;

use Twilio\Exceptions\TwilioException;
use Twilio\ListResource;
use Twilio\Options;
use Twilio\Values;
use Twilio\Version;
use Twilio\InstanceContext;
use Twilio\Rest\Wireless\V1\Sim\DataSessionList;
use Twilio\Rest\Wireless\V1\Sim\UsageRecordList;


/**
 * @property DataSessionList $dataSessions
 * @property UsageRecordList $usageRecords
 */

class SimContext extends InstanceContext {
    protected $_dataSessions;
    protected $_usageRecords;

    /**
     * Initialize the SimContext
     *
     * @param Version $version Version that contains the resource
     * @param string $sid The SID or the &#x60;unique_name&#x60; of the Sim resource to delete.
     */
    public function __construct(Version $version, $sid ) {
        parent::__construct($version);

        // Path Solution
        $this->solution = ['sid' => $sid,  ];

        $this->uri = '/Sims/' . \rawurlencode($sid) . '';
    }

    /**
     * Delete the SimInstance
     *
     * @return bool True if delete succeeds, false otherwise
     * @throws TwilioException When an HTTP error occurs.
     */
    public function delete(): bool {
        return $this->version->delete('DELETE', $this->uri);
    }

    /**
     * Fetch the SimInstance
     *
     * @return SimInstance Fetched SimInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function fetch(): SimInstance {
        $payload = $this->version->fetch('GET', $this->uri);

        return new SimInstance(
            $this->version,
            $payload
            , $this->solution['sid']
        );
    }

    /**
     * Update the SimInstance
     *
     * @param array|Options $options Optional Arguments
     * @return SimInstance Updated SimInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function update(array $options = []): SimInstance {
        $options = new Values($options);

        $data = Values::of([
            'UniqueName' => $options['uniqueName'],
            'CallbackMethod' => $options['callbackMethod'],
            'CallbackUrl' => $options['callbackUrl'],
            'FriendlyName' => $options['friendlyName'],
            'RatePlan' => $options['ratePlan'],
            'Status' => $options['status'],
            'CommandsCallbackMethod' => $options['commandsCallbackMethod'],
            'CommandsCallbackUrl' => $options['commandsCallbackUrl'],
            'SmsFallbackMethod' => $options['smsFallbackMethod'],
            'SmsFallbackUrl' => $options['smsFallbackUrl'],
            'SmsMethod' => $options['smsMethod'],
            'SmsUrl' => $options['smsUrl'],
            'VoiceFallbackMethod' => $options['voiceFallbackMethod'],
            'VoiceFallbackUrl' => $options['voiceFallbackUrl'],
            'VoiceMethod' => $options['voiceMethod'],
            'VoiceUrl' => $options['voiceUrl'],
            'ResetStatus' => $options['resetStatus'],
            'AccountSid' => $options['accountSid'],
        ]);

        $payload = $this->version->update('POST', $this->uri, [], $data);

        return new SimInstance(
            $this->version,
            $payload
            , $this->solution['sid']
        );
    }

    /**
     * Access the dataSessions
     */
    protected function getDataSessions(): DataSessionList {
        if (!$this->_dataSessions) {
            $this->_dataSessions = new DataSessionList(
                $this->version
                , $this->solution['sid']
            );
        }

        return $this->_dataSessions;
    }

    /**
     * Access the usageRecords
     */
    protected function getUsageRecords(): UsageRecordList {
        if (!$this->_usageRecords) {
            $this->_usageRecords = new UsageRecordList(
                $this->version
                , $this->solution['sid']
            );
        }

        return $this->_usageRecords;
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
        return '[Twilio.Wireless.V1.SimContext ' . \implode(' ', $context) . ']';
    }
}
