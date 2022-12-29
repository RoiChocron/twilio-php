<?php

/*
 * This code was generated by
 * ___ _ _ _ _ _    _ ____    ____ ____ _    ____ ____ _  _ ____ ____ ____ ___ __   __
 *  |  | | | | |    | |  | __ |  | |__| | __ | __ |___ |\ | |___ |__/ |__|  | |  | |__/
 *  |  |_|_| | |___ | |__|    |__| |  | |    |__] |___ | \| |___ |  \ |  |  | |__| |  \
 *
 * Twilio - Autopilot
 * This is the public Twilio REST API.
 *
 * NOTE: This class is auto generated by OpenAPI Generator.
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */


namespace Twilio\Rest\Autopilot\V1\Assistant\FieldType;

use Twilio\Exceptions\TwilioException;
use Twilio\Version;
use Twilio\InstanceContext;



class FieldValueContext extends InstanceContext {
    /**
     * Initialize the FieldValueContext
     *
     * @param Version $version Version that contains the resource
     * @param string $assistantSid The SID of the [Assistant](https://www.twilio.com/docs/autopilot/api/assistant) that is the parent of the FieldType associated with the new resource.
     * @param string $fieldTypeSid The SID of the Field Type associated with the Field Value.
     * @param string $sid The Twilio-provided string that uniquely identifies the FieldValue resource to delete.
     */
    public function __construct(Version $version, $assistantSid , $fieldTypeSid , $sid ) {
        parent::__construct($version);

        // Path Solution
        $this->solution = ['assistantSid' => $assistantSid,  'fieldTypeSid' => $fieldTypeSid,  'sid' => $sid,  ];

        $this->uri = '/Assistants/' . \rawurlencode($assistantSid) . '/FieldTypes/' . \rawurlencode($fieldTypeSid) . '/FieldValues/' . \rawurlencode($sid) . '';
    }

    /**
     * Delete the FieldValueInstance
     *
     * @return bool True if delete succeeds, false otherwise
     * @throws TwilioException When an HTTP error occurs.
     */
    public function delete(): bool {
        return $this->version->delete('DELETE', $this->uri);
    }

    /**
     * Fetch the FieldValueInstance
     *
     * @return FieldValueInstance Fetched FieldValueInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function fetch(): FieldValueInstance {
        $payload = $this->version->fetch('GET', $this->uri);

        return new FieldValueInstance(
            $this->version,
            $payload
            , $this->solution['assistantSid']
            , $this->solution['fieldTypeSid']
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
        return '[Twilio.Autopilot.V1.FieldValueContext ' . \implode(' ', $context) . ']';
    }
}
