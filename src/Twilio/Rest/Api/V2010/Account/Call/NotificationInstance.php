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


namespace Twilio\Rest\Api\V2010\Account\Call;

use Twilio\Exceptions\TwilioException;
use Twilio\InstanceResource;
use Twilio\Values;
use Twilio\Version;
use Twilio\Deserialize;


/**
 * @property string $accountSid
 * @property string $apiVersion
 * @property string $callSid
 * @property \DateTime $dateCreated
 * @property \DateTime $dateUpdated
 * @property string $errorCode
 * @property string $log
 * @property \DateTime $messageDate
 * @property string $messageText
 * @property string $moreInfo
 * @property string $requestMethod
 * @property string $requestUrl
 * @property string $requestVariables
 * @property string $responseBody
 * @property string $responseHeaders
 * @property string $sid
 * @property string $uri
 */

class NotificationInstance extends InstanceResource {
    /**
     * Initialize the NotificationInstance
     *
     * @param Version $version Version that contains the resource
     * @param mixed[] $payload The response payload
     * @param string $accountSid The SID of the [Account](https://www.twilio.com/docs/iam/api/account) that created the Call Notification resource to fetch.
     * @param string $callSid The [Call](https://www.twilio.com/docs/voice/api/call-resource) SID of the Call Notification resource to fetch.
     * @param string $sid The Twilio-provided string that uniquely identifies the Call Notification resource to fetch.
     */
    public function __construct(Version $version, array $payload, string $accountSid, string $callSid, string $sid = null) {
        parent::__construct($version);

        // Marshaled Properties
        $this->properties = [
            'accountSid' => Values::array_get($payload, 'account_sid'),
            'apiVersion' => Values::array_get($payload, 'api_version'),
            'callSid' => Values::array_get($payload, 'call_sid'),
            'dateCreated' => Deserialize::dateTime(Values::array_get($payload, 'date_created')),
            'dateUpdated' => Deserialize::dateTime(Values::array_get($payload, 'date_updated')),
            'errorCode' => Values::array_get($payload, 'error_code'),
            'log' => Values::array_get($payload, 'log'),
            'messageDate' => Deserialize::dateTime(Values::array_get($payload, 'message_date')),
            'messageText' => Values::array_get($payload, 'message_text'),
            'moreInfo' => Values::array_get($payload, 'more_info'),
            'requestMethod' => Values::array_get($payload, 'request_method'),
            'requestUrl' => Values::array_get($payload, 'request_url'),
            'requestVariables' => Values::array_get($payload, 'request_variables'),
            'responseBody' => Values::array_get($payload, 'response_body'),
            'responseHeaders' => Values::array_get($payload, 'response_headers'),
            'sid' => Values::array_get($payload, 'sid'),
            'uri' => Values::array_get($payload, 'uri'),
        ];

        $this->solution = ['accountSid' => $accountSid, 'callSid' => $callSid, 'sid' => $sid ?: $this->properties['sid'], ];
    }

    /**
     * Generate an instance context for the instance, the context is capable of
     * performing various actions.  All instance actions are proxied to the context
     *
     * @return NotificationContext Context for this NotificationInstance
     */
    protected function proxy(): NotificationContext {
        if (!$this->context) {
            $this->context = new NotificationContext(
                $this->version,
                $this->solution['accountSid'],
                $this->solution['callSid'],
                $this->solution['sid']
            );
        }

        return $this->context;
    }

    /**
     * Fetch the NotificationInstance
     *
     * @return NotificationInstance Fetched NotificationInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function fetch(): NotificationInstance {
        return $this->proxy()->fetch();
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
        return '[Twilio.Api.V2010.NotificationInstance ' . \implode(' ', $context) . ']';
    }
}

