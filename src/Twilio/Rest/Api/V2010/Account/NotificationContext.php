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


namespace Twilio\Rest\Api\V2010\Account;

use Twilio\Exceptions\TwilioException;
use Twilio\Version;
use Twilio\InstanceContext;



class NotificationContext extends InstanceContext {
    /**
     * Initialize the NotificationContext
     *
     * @param Version $version Version that contains the resource
     * @param string $accountSid The SID of the [Account](https://www.twilio.com/docs/iam/api/account) that created the Notification resource to fetch.
     * @param string $sid The Twilio-provided string that uniquely identifies the Notification resource to fetch.
     */
    public function __construct(Version $version, $accountSid , $sid ) {
        parent::__construct($version);

        // Path Solution
        $this->solution = ['accountSid' => $accountSid,  'sid' => $sid,  ];

        $this->uri = '/Accounts/' . \rawurlencode($accountSid) . '/Notifications/' . \rawurlencode($sid) . '.json';
    }

    /**
     * Fetch the NotificationInstance
     *
     * @return NotificationInstance Fetched NotificationInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function fetch(): NotificationInstance {
        $payload = $this->version->fetch('GET', $this->uri);

        return new NotificationInstance(
            $this->version,
            $payload
            , $this->solution['accountSid']
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
        return '[Twilio.Api.V2010.NotificationContext ' . \implode(' ', $context) . ']';
    }
}
