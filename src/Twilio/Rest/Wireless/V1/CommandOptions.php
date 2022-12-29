<?php
/*
 * This code was generated by
 * ___ _ _ _ _ _    _ ____    ____ ____ _    ____ ____ _  _ ____ ____ ____ ___ __   __
 *  |  | | | | |    | |  | __ |  | |__| | __ | __ |___ |\ | |___ |__/ |__|  | |  | |__/
 *  |  |_|_| | |___ | |__|    |__| |  | |    |__] |___ | \| |___ |  \ |  |  | |__| |  \
 *
 * Twilio - Wireless
 * This is the public Twilio REST API.
 *
 * NOTE: This class is auto generated by OpenAPI Generator.
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Twilio\Rest\Wireless\V1;

use Twilio\Options;
use Twilio\Values;


abstract class CommandOptions {
    /**
    * @param string $sim The &#x60;sid&#x60; or &#x60;unique_name&#x60; of the [SIM](https://www.twilio.com/docs/wireless/api/sim-resource) to send the Command to. 
    * @param string $callbackMethod The HTTP method we use to call &#x60;callback_url&#x60;. Can be: &#x60;POST&#x60; or &#x60;GET&#x60;, and the default is &#x60;POST&#x60;. 
    * @param string $callbackUrl The URL we call using the &#x60;callback_url&#x60; when the Command has finished sending, whether the command was delivered or it failed. 
    * @param string $commandMode  
    * @param string $includeSid Whether to include the SID of the command in the message body. Can be: &#x60;none&#x60;, &#x60;start&#x60;, or &#x60;end&#x60;, and the default behavior is &#x60;none&#x60;. When sending a Command to a SIM in text mode, we can automatically include the SID of the Command in the message body, which could be used to ensure that the device does not process the same Command more than once.  A value of &#x60;start&#x60; will prepend the message with the Command SID, and &#x60;end&#x60; will append it to the end, separating the Command SID from the message body with a space. The length of the Command SID is included in the 160 character limit so the SMS body must be 128 characters or less before the Command SID is included. 
    * @param bool $deliveryReceiptRequested Whether to request delivery receipt from the recipient. For Commands that request delivery receipt, the Command state transitions to &#39;delivered&#39; once the server has received a delivery receipt from the device. The default value is &#x60;true&#x60;. 
    * @return CreateCommandOptions Options builder
    */
    public static function create(string  $sim=Values::NONE,string  $callbackMethod=Values::NONE,string  $callbackUrl=Values::NONE,string  $commandMode=Values::NONE,string  $includeSid=Values::NONE,bool  $deliveryReceiptRequested=Values::NONE): CreateCommandOptions {
        return new CreateCommandOptions($sim,$callbackMethod,$callbackUrl,$commandMode,$includeSid,$deliveryReceiptRequested);
    }



    /**
    * @param string $sim The &#x60;sid&#x60; or &#x60;unique_name&#x60; of the [Sim resources](https://www.twilio.com/docs/wireless/api/sim-resource) to read. 
    * @param string $status The status of the resources to read. Can be: &#x60;queued&#x60;, &#x60;sent&#x60;, &#x60;delivered&#x60;, &#x60;received&#x60;, or &#x60;failed&#x60;. 
    * @param string $direction Only return Commands with this direction value. 
    * @param string $transport Only return Commands with this transport value. Can be: &#x60;sms&#x60; or &#x60;ip&#x60;. 
    * @return ReadCommandOptions Options builder
    */
    public static function read(string  $sim=Values::NONE,string  $status=Values::NONE,string  $direction=Values::NONE,string  $transport=Values::NONE): ReadCommandOptions {
        return new ReadCommandOptions($sim,$status,$direction,$transport);
    }

}

class CreateCommandOptions extends Options {
    /**
    * @param string $sim The &#x60;sid&#x60; or &#x60;unique_name&#x60; of the [SIM](https://www.twilio.com/docs/wireless/api/sim-resource) to send the Command to.
    * @param string $callbackMethod The HTTP method we use to call &#x60;callback_url&#x60;. Can be: &#x60;POST&#x60; or &#x60;GET&#x60;, and the default is &#x60;POST&#x60;.
    * @param string $callbackUrl The URL we call using the &#x60;callback_url&#x60; when the Command has finished sending, whether the command was delivered or it failed.
    * @param string $commandMode 
    * @param string $includeSid Whether to include the SID of the command in the message body. Can be: &#x60;none&#x60;, &#x60;start&#x60;, or &#x60;end&#x60;, and the default behavior is &#x60;none&#x60;. When sending a Command to a SIM in text mode, we can automatically include the SID of the Command in the message body, which could be used to ensure that the device does not process the same Command more than once.  A value of &#x60;start&#x60; will prepend the message with the Command SID, and &#x60;end&#x60; will append it to the end, separating the Command SID from the message body with a space. The length of the Command SID is included in the 160 character limit so the SMS body must be 128 characters or less before the Command SID is included.
    * @param bool $deliveryReceiptRequested Whether to request delivery receipt from the recipient. For Commands that request delivery receipt, the Command state transitions to &#39;delivered&#39; once the server has received a delivery receipt from the device. The default value is &#x60;true&#x60;.
    */
    public function __construct(string  $sim=Values::NONE,string  $callbackMethod=Values::NONE,string  $callbackUrl=Values::NONE,string  $commandMode=Values::NONE,string  $includeSid=Values::NONE,bool  $deliveryReceiptRequested=Values::NONE) {
        $this->options['sim'] = $sim;
        $this->options['callbackMethod'] = $callbackMethod;
        $this->options['callbackUrl'] = $callbackUrl;
        $this->options['commandMode'] = $commandMode;
        $this->options['includeSid'] = $includeSid;
        $this->options['deliveryReceiptRequested'] = $deliveryReceiptRequested;
    }

    /**
    * @param string $sim The &#x60;sid&#x60; or &#x60;unique_name&#x60; of the [SIM](https://www.twilio.com/docs/wireless/api/sim-resource) to send the Command to.
    * @return $this Fluent Builder
    */
    public function setSim(string $sim): self {
        $this->options['sim'] = $sim;
        return $this;
    }
    /**
    * @param string $callbackMethod The HTTP method we use to call &#x60;callback_url&#x60;. Can be: &#x60;POST&#x60; or &#x60;GET&#x60;, and the default is &#x60;POST&#x60;.
    * @return $this Fluent Builder
    */
    public function setCallbackMethod(string $callbackMethod): self {
        $this->options['callbackMethod'] = $callbackMethod;
        return $this;
    }
    /**
    * @param string $callbackUrl The URL we call using the &#x60;callback_url&#x60; when the Command has finished sending, whether the command was delivered or it failed.
    * @return $this Fluent Builder
    */
    public function setCallbackUrl(string $callbackUrl): self {
        $this->options['callbackUrl'] = $callbackUrl;
        return $this;
    }
    /**
    * @param string $commandMode 
    * @return $this Fluent Builder
    */
    public function setCommandMode(string $commandMode): self {
        $this->options['commandMode'] = $commandMode;
        return $this;
    }
    /**
    * @param string $includeSid Whether to include the SID of the command in the message body. Can be: &#x60;none&#x60;, &#x60;start&#x60;, or &#x60;end&#x60;, and the default behavior is &#x60;none&#x60;. When sending a Command to a SIM in text mode, we can automatically include the SID of the Command in the message body, which could be used to ensure that the device does not process the same Command more than once.  A value of &#x60;start&#x60; will prepend the message with the Command SID, and &#x60;end&#x60; will append it to the end, separating the Command SID from the message body with a space. The length of the Command SID is included in the 160 character limit so the SMS body must be 128 characters or less before the Command SID is included.
    * @return $this Fluent Builder
    */
    public function setIncludeSid(string $includeSid): self {
        $this->options['includeSid'] = $includeSid;
        return $this;
    }
    /**
    * @param bool $deliveryReceiptRequested Whether to request delivery receipt from the recipient. For Commands that request delivery receipt, the Command state transitions to &#39;delivered&#39; once the server has received a delivery receipt from the device. The default value is &#x60;true&#x60;.
    * @return $this Fluent Builder
    */
    public function setDeliveryReceiptRequested(bool $deliveryReceiptRequested): self {
        $this->options['deliveryReceiptRequested'] = $deliveryReceiptRequested;
        return $this;
    }

    /**
    * Provide a friendly representation
    *
    * @return string Machine friendly representation
    */
    public function __toString(): string {
        $options = \http_build_query(Values::of($this->options), '', ' ');
        return '[Twilio.Wireless.V1.CreateCommandOptions ' . $options . ']';
    }
}



class ReadCommandOptions extends Options {
    /**
    * @param string $sim The &#x60;sid&#x60; or &#x60;unique_name&#x60; of the [Sim resources](https://www.twilio.com/docs/wireless/api/sim-resource) to read.
    * @param string $status The status of the resources to read. Can be: &#x60;queued&#x60;, &#x60;sent&#x60;, &#x60;delivered&#x60;, &#x60;received&#x60;, or &#x60;failed&#x60;.
    * @param string $direction Only return Commands with this direction value.
    * @param string $transport Only return Commands with this transport value. Can be: &#x60;sms&#x60; or &#x60;ip&#x60;.
    */
    public function __construct(string  $sim=Values::NONE,string  $status=Values::NONE,string  $direction=Values::NONE,string  $transport=Values::NONE) {
        $this->options['sim'] = $sim;
        $this->options['status'] = $status;
        $this->options['direction'] = $direction;
        $this->options['transport'] = $transport;
    }

    /**
    * @param string $sim The &#x60;sid&#x60; or &#x60;unique_name&#x60; of the [Sim resources](https://www.twilio.com/docs/wireless/api/sim-resource) to read.
    * @return $this Fluent Builder
    */
    public function setSim(string $sim): self {
        $this->options['sim'] = $sim;
        return $this;
    }
    /**
    * @param string $status The status of the resources to read. Can be: &#x60;queued&#x60;, &#x60;sent&#x60;, &#x60;delivered&#x60;, &#x60;received&#x60;, or &#x60;failed&#x60;.
    * @return $this Fluent Builder
    */
    public function setStatus(string $status): self {
        $this->options['status'] = $status;
        return $this;
    }
    /**
    * @param string $direction Only return Commands with this direction value.
    * @return $this Fluent Builder
    */
    public function setDirection(string $direction): self {
        $this->options['direction'] = $direction;
        return $this;
    }
    /**
    * @param string $transport Only return Commands with this transport value. Can be: &#x60;sms&#x60; or &#x60;ip&#x60;.
    * @return $this Fluent Builder
    */
    public function setTransport(string $transport): self {
        $this->options['transport'] = $transport;
        return $this;
    }

    /**
    * Provide a friendly representation
    *
    * @return string Machine friendly representation
    */
    public function __toString(): string {
        $options = \http_build_query(Values::of($this->options), '', ' ');
        return '[Twilio.Wireless.V1.ReadCommandOptions ' . $options . ']';
    }
}

