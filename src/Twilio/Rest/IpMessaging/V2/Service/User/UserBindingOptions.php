<?php
/*
 * This code was generated by
 * ___ _ _ _ _ _    _ ____    ____ ____ _    ____ ____ _  _ ____ ____ ____ ___ __   __
 *  |  | | | | |    | |  | __ |  | |__| | __ | __ |___ |\ | |___ |__/ |__|  | |  | |__/
 *  |  |_|_| | |___ | |__|    |__| |  | |    |__] |___ | \| |___ |  \ |  |  | |__| |  \
 *
 * Twilio - Ip_messaging
 * This is the public Twilio REST API.
 *
 * NOTE: This class is auto generated by OpenAPI Generator.
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Twilio\Rest\IpMessaging\V2\Service\User;

use Twilio\Options;
use Twilio\Values;


abstract class UserBindingOptions {


    /**
    * @param string $bindingType  
    * @return ReadUserBindingOptions Options builder
    */
    public static function read(array  $bindingType=Values::ARRAY_NONE): ReadUserBindingOptions {
        return new ReadUserBindingOptions($bindingType);
    }

}



class ReadUserBindingOptions extends Options {
    /**
    * @param string $bindingType 
    */
    public function __construct(array  $bindingType=Values::ARRAY_NONE) {
        $this->options['bindingType'] = $bindingType;
    }

    /**
    * @param string $bindingType 
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
        return '[Twilio.IpMessaging.V2.ReadUserBindingOptions ' . $options . ']';
    }
}

