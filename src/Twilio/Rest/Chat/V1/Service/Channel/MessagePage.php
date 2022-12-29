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

namespace Twilio\Rest\Chat\V1\Service\Channel;

use Twilio\Http\Response;
use Twilio\Page;
use Twilio\Version;

class MessagePage extends Page {
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
    * @return MessageInstance \Twilio\Rest\Chat\V1\Service\Channel\MessageInstance
    */
    public function buildInstance(array $payload): MessageInstance {
        return new MessageInstance($this->version, $payload, $this->solution['serviceSid'], $this->solution['channelSid']);
    }

    /**
    * Provide a friendly representation
    *
    * @return string Machine friendly representation
    */
    public function __toString(): string {
        return '[Twilio.Chat.V1.MessagePage]';
    }
}
