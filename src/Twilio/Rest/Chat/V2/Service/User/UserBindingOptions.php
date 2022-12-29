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

namespace Twilio\Rest\Chat\V2\Service\User;

use Twilio\Options;
use Twilio\Values;


abstract class UserBindingOptions {


    /**
    * @param string $bindingType The push technology used by the User Binding resources to read. Can be: &#x60;apn&#x60;, &#x60;gcm&#x60;, or &#x60;fcm&#x60;.  See [push notification configuration](https://www.twilio.com/docs/chat/push-notification-configuration) for more info. 
    * @return ReadUserBindingOptions Options builder
    */
    public static function read(array  $bindingType=Values::ARRAY_NONE): ReadUserBindingOptions {
        return new ReadUserBindingOptions($bindingType);
    }

}



class ReadUserBindingOptions extends Options {
    /**
    * @param string $bindingType The push technology used by the User Binding resources to read. Can be: &#x60;apn&#x60;, &#x60;gcm&#x60;, or &#x60;fcm&#x60;.  See [push notification configuration](https://www.twilio.com/docs/chat/push-notification-configuration) for more info.
    */
    public function __construct(array  $bindingType=Values::ARRAY_NONE) {
        $this->options['bindingType'] = $bindingType;
    }

    /**
    * @param string $bindingType The push technology used by the User Binding resources to read. Can be: &#x60;apn&#x60;, &#x60;gcm&#x60;, or &#x60;fcm&#x60;.  See [push notification configuration](https://www.twilio.com/docs/chat/push-notification-configuration) for more info.
    * @return $this Fluent Builder
    */
    public function setBindingType(array $bindingType): self {
        $this->options['bindingType'] = $bindingType;
        return $this;
    }

    /**
    * Provide a friendly representation
    *
    * @return string Machine friendly representation
    */
    public function __toString(): string {
        $options = \http_build_query(Values::of($this->options), '', ' ');
        return '[Twilio.Chat.V2.ReadUserBindingOptions ' . $options . ']';
    }
}

