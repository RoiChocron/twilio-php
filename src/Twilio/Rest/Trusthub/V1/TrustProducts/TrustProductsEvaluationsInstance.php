<?php

/*
 * This code was generated by
 * ___ _ _ _ _ _    _ ____    ____ ____ _    ____ ____ _  _ ____ ____ ____ ___ __   __
 *  |  | | | | |    | |  | __ |  | |__| | __ | __ |___ |\ | |___ |__/ |__|  | |  | |__/
 *  |  |_|_| | |___ | |__|    |__| |  | |    |__] |___ | \| |___ |  \ |  |  | |__| |  \
 *
 * Twilio - Trusthub
 * This is the public Twilio REST API.
 *
 * NOTE: This class is auto generated by OpenAPI Generator.
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */


namespace Twilio\Rest\Trusthub\V1\TrustProducts;

use Twilio\Exceptions\TwilioException;
use Twilio\InstanceResource;
use Twilio\Values;
use Twilio\Version;
use Twilio\Deserialize;


/**
 * @property string $sid
 * @property string $accountSid
 * @property string $policySid
 * @property string $trustProductSid
 * @property string $status
 * @property array[] $results
 * @property \DateTime $dateCreated
 * @property string $url
 */

class TrustProductsEvaluationsInstance extends InstanceResource {
    /**
     * Initialize the TrustProductsEvaluationsInstance
     *
     * @param Version $version Version that contains the resource
     * @param mixed[] $payload The response payload
     * @param string $trustProductSid The unique string that we created to identify the trust_product resource.
     * @param string $sid The unique string that identifies the Evaluation resource.
     */
    public function __construct(Version $version, array $payload, string $trustProductSid, string $sid = null) {
        parent::__construct($version);

        // Marshaled Properties
        $this->properties = [
            'sid' => Values::array_get($payload, 'sid'),
            'accountSid' => Values::array_get($payload, 'account_sid'),
            'policySid' => Values::array_get($payload, 'policy_sid'),
            'trustProductSid' => Values::array_get($payload, 'trust_product_sid'),
            'status' => Values::array_get($payload, 'status'),
            'results' => Values::array_get($payload, 'results'),
            'dateCreated' => Deserialize::dateTime(Values::array_get($payload, 'date_created')),
            'url' => Values::array_get($payload, 'url'),
        ];

        $this->solution = ['trustProductSid' => $trustProductSid, 'sid' => $sid ?: $this->properties['sid'], ];
    }

    /**
     * Generate an instance context for the instance, the context is capable of
     * performing various actions.  All instance actions are proxied to the context
     *
     * @return TrustProductsEvaluationsContext Context for this TrustProductsEvaluationsInstance
     */
    protected function proxy(): TrustProductsEvaluationsContext {
        if (!$this->context) {
            $this->context = new TrustProductsEvaluationsContext(
                $this->version,
                $this->solution['trustProductSid'],
                $this->solution['sid']
            );
        }

        return $this->context;
    }

    /**
     * Fetch the TrustProductsEvaluationsInstance
     *
     * @return TrustProductsEvaluationsInstance Fetched TrustProductsEvaluationsInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function fetch(): TrustProductsEvaluationsInstance {
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
        return '[Twilio.Trusthub.V1.TrustProductsEvaluationsInstance ' . \implode(' ', $context) . ']';
    }
}

