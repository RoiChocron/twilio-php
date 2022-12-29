<?php

/*
 * This code was generated by
 * ___ _ _ _ _ _    _ ____    ____ ____ _    ____ ____ _  _ ____ ____ ____ ___ __   __
 *  |  | | | | |    | |  | __ |  | |__| | __ | __ |___ |\ | |___ |__/ |__|  | |  | |__/
 *  |  |_|_| | |___ | |__|    |__| |  | |    |__] |___ | \| |___ |  \ |  |  | |__| |  \
 *
 * Twilio - Studio
 * This is the public Twilio REST API.
 *
 * NOTE: This class is auto generated by OpenAPI Generator.
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */


namespace Twilio\Rest\Studio\V2\Flow\Execution;

use Twilio\Exceptions\TwilioException;
use Twilio\Version;
use Twilio\InstanceContext;



class ExecutionContextContext extends InstanceContext {
    /**
     * Initialize the ExecutionContextContext
     *
     * @param Version $version Version that contains the resource
     * @param string $flowSid The SID of the Flow with the Execution context to fetch.
     * @param string $executionSid The SID of the Execution context to fetch.
     */
    public function __construct(Version $version, $flowSid , $executionSid ) {
        parent::__construct($version);

        // Path Solution
        $this->solution = ['flowSid' => $flowSid,  'executionSid' => $executionSid,  ];

        $this->uri = '/Flows/' . \rawurlencode($flowSid) . '/Executions/' . \rawurlencode($executionSid) . '/Context';
    }

    /**
     * Fetch the ExecutionContextInstance
     *
     * @return ExecutionContextInstance Fetched ExecutionContextInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function fetch(): ExecutionContextInstance {
        $payload = $this->version->fetch('GET', $this->uri);

        return new ExecutionContextInstance(
            $this->version,
            $payload
            , $this->solution['flowSid']
            , $this->solution['executionSid']
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
        return '[Twilio.Studio.V2.ExecutionContextContext ' . \implode(' ', $context) . ']';
    }
}
