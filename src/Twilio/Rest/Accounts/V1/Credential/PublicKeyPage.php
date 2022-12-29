<?php
/*
 * This code was generated by
 * ___ _ _ _ _ _    _ ____    ____ ____ _    ____ ____ _  _ ____ ____ ____ ___ __   __
 *  |  | | | | |    | |  | __ |  | |__| | __ | __ |___ |\ | |___ |__/ |__|  | |  | |__/
 *  |  |_|_| | |___ | |__|    |__| |  | |    |__] |___ | \| |___ |  \ |  |  | |__| |  \
 *
 * Twilio - Accounts
 * This is the public Twilio REST API.
 *
 * NOTE: This class is auto generated by OpenAPI Generator.
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Twilio\Rest\Accounts\V1\Credential;

use Twilio\Http\Response;
use Twilio\Page;
use Twilio\Version;

class PublicKeyPage extends Page {
    /**
    * @param Version $version Version that contains the resource
    * @param Response $response Response from the API
    * @param array $solution The context solution
    */
    public function __construct(Version $version, Response $response, array $solution) {
        parent::__construct($version, $response);

        // Path Solution
        $this->solution = $solution;
    }

    /**
    * @param array $payload Payload response from the API
    * @return PublicKeyInstance \Twilio\Rest\Accounts\V1\Credential\PublicKeyInstance
    */
    public function buildInstance(array $payload): PublicKeyInstance {
        return new PublicKeyInstance($this->version, $payload);
    }

    /**
    * Provide a friendly representation
    *
    * @return string Machine friendly representation
    */
    public function __toString(): string {
        return '[Twilio.Accounts.V1.PublicKeyPage]';
    }
}
