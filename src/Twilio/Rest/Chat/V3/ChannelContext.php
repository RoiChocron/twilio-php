<?php

/*
 * This code was generated by
 * ___ _ _ _ _ _    _ ____    ____ ____ _    ____ ____ _  _ ____ ____ ____ ___ __   __
 *  |  | | | | |    | |  | __ |  | |__| | __ | __ |___ |\ | |___ |__/ |__|  | |  | |__/
 *  |  |_|_| | |___ | |__|    |__| |  | |    |__] |___ | \| |___ |  \ |  |  | |__| |  \
 *
 * Twilio - Chat
 * This is the public Twilio REST API.
 *
 * NOTE: This class is auto generated by OpenAPI Generator.
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */


namespace Twilio\Rest\Chat\V3;

use Twilio\Exceptions\TwilioException;
use Twilio\Options;
use Twilio\Values;
use Twilio\Version;
use Twilio\InstanceContext;



class ChannelContext extends InstanceContext {
    /**
     * Initialize the ChannelContext
     *
     * @param Version $version Version that contains the resource
     * @param string $serviceSid The unique SID identifier of the Service.
     * @param string $sid A 34 character string that uniquely identifies this Channel.
     */
    public function __construct(Version $version, $serviceSid , $sid ) {
        parent::__construct($version);

        // Path Solution
        $this->solution = ['serviceSid' => $serviceSid,  'sid' => $sid,  ];

        $this->uri = '/Services/' . \rawurlencode($serviceSid) . '/Channels/' . \rawurlencode($sid) . '';
    }

    /**
     * Update the ChannelInstance
     *
     * @param array|Options $options Optional Arguments
     * @return ChannelInstance Updated ChannelInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function update(array $options = []): ChannelInstance {
        $options = new Values($options);

        $data = Values::of([
            'Type' => $options['type'],
            'MessagingServiceSid' => $options['messagingServiceSid'],
        ]);

        $headers = Values::of(['X-Twilio-Webhook-Enabled' => $options['xTwilioWebhookEnabled']]);

        $payload = $this->version->update('POST', $this->uri, [], $data, $headers);

        return new ChannelInstance(
            $this->version,
            $payload
            , $this->solution['serviceSid']
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
        return '[Twilio.Chat.V3.ChannelContext ' . \implode(' ', $context) . ']';
    }
}
