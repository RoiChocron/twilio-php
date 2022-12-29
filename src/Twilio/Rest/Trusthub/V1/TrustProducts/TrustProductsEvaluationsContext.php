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
use Twilio\Version;
use Twilio\InstanceContext;



class TrustProductsEvaluationsContext extends InstanceContext {
    /**
     * Initialize the TrustProductsEvaluationsContext
     *
     * @param Version $version Version that contains the resource
     * @param string $trustProductSid The unique string that we created to identify the trust_product resource.
     * @param string $sid The unique string that identifies the Evaluation resource.
     */
    public function __construct(Version $version, $trustProductSid , $sid ) {
        parent::__construct($version);

        // Path Solution
        $this->solution = ['trustProductSid' => $trustProductSid,  'sid' => $sid,  ];

        $this->uri = '/TrustProducts/' . \rawurlencode($trustProductSid) . '/Evaluations/' . \rawurlencode($sid) . '';
    }

    /**
     * Fetch the TrustProductsEvaluationsInstance
     *
     * @return TrustProductsEvaluationsInstance Fetched TrustProductsEvaluationsInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function fetch(): TrustProductsEvaluationsInstance {
        $payload = $this->version->fetch('GET', $this->uri);

        return new TrustProductsEvaluationsInstance(
            $this->version,
            $payload
            , $this->solution['trustProductSid']
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
        return '[Twilio.Trusthub.V1.TrustProductsEvaluationsContext ' . \implode(' ', $context) . ']';
    }
}
