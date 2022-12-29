<?php
/*
 * This code was generated by
 * ___ _ _ _ _ _    _ ____    ____ ____ _    ____ ____ _  _ ____ ____ ____ ___ __   __
 *  |  | | | | |    | |  | __ |  | |__| | __ | __ |___ |\ | |___ |__/ |__|  | |  | |__/
 *  |  |_|_| | |___ | |__|    |__| |  | |    |__] |___ | \| |___ |  \ |  |  | |__| |  \
 *
 * Twilio - Notify
 * This is the public Twilio REST API.
 *
 * NOTE: This class is auto generated by OpenAPI Generator.
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Twilio\Rest\Notify\V1\Service;

use Twilio\Options;
use Twilio\Values;


abstract class BindingOptions {
    /**
    * @param string[] $tag A tag that can be used to select the Bindings to notify. Repeat this parameter to specify more than one tag, up to a total of 20 tags. 
    * @param string $notificationProtocolVersion The protocol version to use to send the notification. This defaults to the value of &#x60;default_xxxx_notification_protocol_version&#x60; for the protocol in the [Service](https://www.twilio.com/docs/notify/api/service-resource). The current version is &#x60;\\\&quot;3\\\&quot;&#x60; for &#x60;apn&#x60;, &#x60;fcm&#x60;, and &#x60;gcm&#x60; type Bindings. The parameter is not applicable to &#x60;sms&#x60; and &#x60;facebook-messenger&#x60; type Bindings as the data format is fixed. 
    * @param string $credentialSid The SID of the [Credential](https://www.twilio.com/docs/notify/api/credential-resource) resource to be used to send notifications to this Binding. If present, this overrides the Credential specified in the Service resource. Applies to only &#x60;apn&#x60;, &#x60;fcm&#x60;, and &#x60;gcm&#x60; type Bindings. 
    * @param string $endpoint Deprecated. 
    * @return CreateBindingOptions Options builder
    */
    public static function create(array  $tag=Values::ARRAY_NONE,string  $notificationProtocolVersion=Values::NONE,string  $credentialSid=Values::NONE,string  $endpoint=Values::NONE): CreateBindingOptions {
        return new CreateBindingOptions($tag,$notificationProtocolVersion,$credentialSid,$endpoint);
    }



    /**
    * @param \DateTime $startDate Only include usage that has occurred on or after this date. Specify the date in GMT and format as &#x60;YYYY-MM-DD&#x60;. 
    * @param \DateTime $endDate Only include usage that occurred on or before this date. Specify the date in GMT and format as &#x60;YYYY-MM-DD&#x60;. 
    * @param string[] $identity The [User](https://www.twilio.com/docs/chat/rest/user-resource)&#39;s &#x60;identity&#x60; value of the resources to read. 
    * @param string[] $tag Only list Bindings that have all of the specified Tags. The following implicit tags are available: &#x60;all&#x60;, &#x60;apn&#x60;, &#x60;fcm&#x60;, &#x60;gcm&#x60;, &#x60;sms&#x60;, &#x60;facebook-messenger&#x60;. Up to 5 tags are allowed. 
    * @return ReadBindingOptions Options builder
    */
    public static function read(\DateTime  $startDate=Values::NONE,\DateTime  $endDate=Values::NONE,array  $identity=Values::ARRAY_NONE,array  $tag=Values::ARRAY_NONE): ReadBindingOptions {
        return new ReadBindingOptions($startDate,$endDate,$identity,$tag);
    }

}

class CreateBindingOptions extends Options {
    /**
    * @param string[] $tag A tag that can be used to select the Bindings to notify. Repeat this parameter to specify more than one tag, up to a total of 20 tags.
    * @param string $notificationProtocolVersion The protocol version to use to send the notification. This defaults to the value of &#x60;default_xxxx_notification_protocol_version&#x60; for the protocol in the [Service](https://www.twilio.com/docs/notify/api/service-resource). The current version is &#x60;\\\&quot;3\\\&quot;&#x60; for &#x60;apn&#x60;, &#x60;fcm&#x60;, and &#x60;gcm&#x60; type Bindings. The parameter is not applicable to &#x60;sms&#x60; and &#x60;facebook-messenger&#x60; type Bindings as the data format is fixed.
    * @param string $credentialSid The SID of the [Credential](https://www.twilio.com/docs/notify/api/credential-resource) resource to be used to send notifications to this Binding. If present, this overrides the Credential specified in the Service resource. Applies to only &#x60;apn&#x60;, &#x60;fcm&#x60;, and &#x60;gcm&#x60; type Bindings.
    * @param string $endpoint Deprecated.
    */
    public function __construct(array  $tag=Values::ARRAY_NONE,string  $notificationProtocolVersion=Values::NONE,string  $credentialSid=Values::NONE,string  $endpoint=Values::NONE) {
        $this->options['tag'] = $tag;
        $this->options['notificationProtocolVersion'] = $notificationProtocolVersion;
        $this->options['credentialSid'] = $credentialSid;
        $this->options['endpoint'] = $endpoint;
    }

    /**
    * @param string[] $tag A tag that can be used to select the Bindings to notify. Repeat this parameter to specify more than one tag, up to a total of 20 tags.
    * @return $this Fluent Builder
    */
    public function setTag(array $tag): self {
        $this->options['tag'] = $tag;
        return $this;
    }
    /**
    * @param string $notificationProtocolVersion The protocol version to use to send the notification. This defaults to the value of &#x60;default_xxxx_notification_protocol_version&#x60; for the protocol in the [Service](https://www.twilio.com/docs/notify/api/service-resource). The current version is &#x60;\\\&quot;3\\\&quot;&#x60; for &#x60;apn&#x60;, &#x60;fcm&#x60;, and &#x60;gcm&#x60; type Bindings. The parameter is not applicable to &#x60;sms&#x60; and &#x60;facebook-messenger&#x60; type Bindings as the data format is fixed.
    * @return $this Fluent Builder
    */
    public function setNotificationProtocolVersion(string $notificationProtocolVersion): self {
        $this->options['notificationProtocolVersion'] = $notificationProtocolVersion;
        return $this;
    }
    /**
    * @param string $credentialSid The SID of the [Credential](https://www.twilio.com/docs/notify/api/credential-resource) resource to be used to send notifications to this Binding. If present, this overrides the Credential specified in the Service resource. Applies to only &#x60;apn&#x60;, &#x60;fcm&#x60;, and &#x60;gcm&#x60; type Bindings.
    * @return $this Fluent Builder
    */
    public function setCredentialSid(string $credentialSid): self {
        $this->options['credentialSid'] = $credentialSid;
        return $this;
    }
    /**
    * @param string $endpoint Deprecated.
    * @return $this Fluent Builder
    */
    public function setEndpoint(string $endpoint): self {
        $this->options['endpoint'] = $endpoint;
        return $this;
    }

    /**
    * Provide a friendly representation
    *
    * @return string Machine friendly representation
    */
    public function __toString(): string {
        $options = \http_build_query(Values::of($this->options), '', ' ');
        return '[Twilio.Notify.V1.CreateBindingOptions ' . $options . ']';
    }
}



class ReadBindingOptions extends Options {
    /**
    * @param \DateTime $startDate Only include usage that has occurred on or after this date. Specify the date in GMT and format as &#x60;YYYY-MM-DD&#x60;.
    * @param \DateTime $endDate Only include usage that occurred on or before this date. Specify the date in GMT and format as &#x60;YYYY-MM-DD&#x60;.
    * @param string[] $identity The [User](https://www.twilio.com/docs/chat/rest/user-resource)&#39;s &#x60;identity&#x60; value of the resources to read.
    * @param string[] $tag Only list Bindings that have all of the specified Tags. The following implicit tags are available: &#x60;all&#x60;, &#x60;apn&#x60;, &#x60;fcm&#x60;, &#x60;gcm&#x60;, &#x60;sms&#x60;, &#x60;facebook-messenger&#x60;. Up to 5 tags are allowed.
    */
    public function __construct(\DateTime  $startDate=Values::NONE,\DateTime  $endDate=Values::NONE,array  $identity=Values::ARRAY_NONE,array  $tag=Values::ARRAY_NONE) {
        $this->options['startDate'] = $startDate;
        $this->options['endDate'] = $endDate;
        $this->options['identity'] = $identity;
        $this->options['tag'] = $tag;
    }

    /**
    * @param \DateTime $startDate Only include usage that has occurred on or after this date. Specify the date in GMT and format as &#x60;YYYY-MM-DD&#x60;.
    * @return $this Fluent Builder
    */
    public function setStartDate(\DateTime $startDate): self {
        $this->options['startDate'] = $startDate;
        return $this;
    }
    /**
    * @param \DateTime $endDate Only include usage that occurred on or before this date. Specify the date in GMT and format as &#x60;YYYY-MM-DD&#x60;.
    * @return $this Fluent Builder
    */
    public function setEndDate(\DateTime $endDate): self {
        $this->options['endDate'] = $endDate;
        return $this;
    }
    /**
    * @param string[] $identity The [User](https://www.twilio.com/docs/chat/rest/user-resource)&#39;s &#x60;identity&#x60; value of the resources to read.
    * @return $this Fluent Builder
    */
    public function setIdentity(array $identity): self {
        $this->options['identity'] = $identity;
        return $this;
    }
    /**
    * @param string[] $tag Only list Bindings that have all of the specified Tags. The following implicit tags are available: &#x60;all&#x60;, &#x60;apn&#x60;, &#x60;fcm&#x60;, &#x60;gcm&#x60;, &#x60;sms&#x60;, &#x60;facebook-messenger&#x60;. Up to 5 tags are allowed.
    * @return $this Fluent Builder
    */
    public function setTag(array $tag): self {
        $this->options['tag'] = $tag;
        return $this;
    }

    /**
    * Provide a friendly representation
    *
    * @return string Machine friendly representation
    */
    public function __toString(): string {
        $options = \http_build_query(Values::of($this->options), '', ' ');
        return '[Twilio.Notify.V1.ReadBindingOptions ' . $options . ']';
    }
}

