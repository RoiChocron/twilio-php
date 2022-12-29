<?php
/*
 * This code was generated by
 * ___ _ _ _ _ _    _ ____    ____ ____ _    ____ ____ _  _ ____ ____ ____ ___ __   __
 *  |  | | | | |    | |  | __ |  | |__| | __ | __ |___ |\ | |___ |__/ |__|  | |  | |__/
 *  |  |_|_| | |___ | |__|    |__| |  | |    |__] |___ | \| |___ |  \ |  |  | |__| |  \
 *
 * Twilio - Conversations
 * This is the public Twilio REST API.
 *
 * NOTE: This class is auto generated by OpenAPI Generator.
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Twilio\Rest\Conversations\V1;

use Twilio\Options;
use Twilio\Values;


abstract class ConversationOptions {
    /**
    * @param string $xTwilioWebhookEnabled The X-Twilio-Webhook-Enabled HTTP request header 
    * @param string $friendlyName The human-readable name of this conversation, limited to 256 characters. Optional. 
    * @param string $uniqueName An application-defined string that uniquely identifies the resource. It can be used to address the resource in place of the resource&#39;s &#x60;sid&#x60; in the URL. 
    * @param \DateTime $dateCreated The date that this resource was created. 
    * @param \DateTime $dateUpdated The date that this resource was last updated. 
    * @param string $messagingServiceSid The unique ID of the [Messaging Service](https://www.twilio.com/docs/sms/services/api) this conversation belongs to. 
    * @param string $attributes An optional string metadata field you can use to store any data you wish. The string value must contain structurally valid JSON if specified.  **Note** that if the attributes are not set \\\&quot;{}\\\&quot; will be returned. 
    * @param string $state  
    * @param string $timersInactive ISO8601 duration when conversation will be switched to &#x60;inactive&#x60; state. Minimum value for this timer is 1 minute. 
    * @param string $timersClosed ISO8601 duration when conversation will be switched to &#x60;closed&#x60; state. Minimum value for this timer is 10 minutes. 
    * @return CreateConversationOptions Options builder
    */
    public static function create(string  $xTwilioWebhookEnabled=Values::NONE,string  $friendlyName=Values::NONE,string  $uniqueName=Values::NONE,\DateTime  $dateCreated=Values::NONE,\DateTime  $dateUpdated=Values::NONE,string  $messagingServiceSid=Values::NONE,string  $attributes=Values::NONE,string  $state=Values::NONE,string  $timersInactive=Values::NONE,string  $timersClosed=Values::NONE): CreateConversationOptions {
        return new CreateConversationOptions($xTwilioWebhookEnabled,$friendlyName,$uniqueName,$dateCreated,$dateUpdated,$messagingServiceSid,$attributes,$state,$timersInactive,$timersClosed);
    }

    /**
    * @param string $xTwilioWebhookEnabled The X-Twilio-Webhook-Enabled HTTP request header 
    * @return DeleteConversationOptions Options builder
    */
    public static function delete(string  $xTwilioWebhookEnabled=Values::NONE): DeleteConversationOptions {
        return new DeleteConversationOptions($xTwilioWebhookEnabled);
    }



    /**
    * @param string $xTwilioWebhookEnabled The X-Twilio-Webhook-Enabled HTTP request header 
    * @param string $friendlyName The human-readable name of this conversation, limited to 256 characters. Optional. 
    * @param \DateTime $dateCreated The date that this resource was created. 
    * @param \DateTime $dateUpdated The date that this resource was last updated. 
    * @param string $attributes An optional string metadata field you can use to store any data you wish. The string value must contain structurally valid JSON if specified.  **Note** that if the attributes are not set \\\&quot;{}\\\&quot; will be returned. 
    * @param string $messagingServiceSid The unique ID of the [Messaging Service](https://www.twilio.com/docs/sms/services/api) this conversation belongs to. 
    * @param string $state  
    * @param string $timersInactive ISO8601 duration when conversation will be switched to &#x60;inactive&#x60; state. Minimum value for this timer is 1 minute. 
    * @param string $timersClosed ISO8601 duration when conversation will be switched to &#x60;closed&#x60; state. Minimum value for this timer is 10 minutes. 
    * @param string $uniqueName An application-defined string that uniquely identifies the resource. It can be used to address the resource in place of the resource&#39;s &#x60;sid&#x60; in the URL. 
    * @return UpdateConversationOptions Options builder
    */
    public static function update(string  $xTwilioWebhookEnabled=Values::NONE,string  $friendlyName=Values::NONE,\DateTime  $dateCreated=Values::NONE,\DateTime  $dateUpdated=Values::NONE,string  $attributes=Values::NONE,string  $messagingServiceSid=Values::NONE,string  $state=Values::NONE,string  $timersInactive=Values::NONE,string  $timersClosed=Values::NONE,string  $uniqueName=Values::NONE): UpdateConversationOptions {
        return new UpdateConversationOptions($xTwilioWebhookEnabled,$friendlyName,$dateCreated,$dateUpdated,$attributes,$messagingServiceSid,$state,$timersInactive,$timersClosed,$uniqueName);
    }

}

class CreateConversationOptions extends Options {
    /**
    * @param string $xTwilioWebhookEnabled The X-Twilio-Webhook-Enabled HTTP request header
    * @param string $friendlyName The human-readable name of this conversation, limited to 256 characters. Optional.
    * @param string $uniqueName An application-defined string that uniquely identifies the resource. It can be used to address the resource in place of the resource&#39;s &#x60;sid&#x60; in the URL.
    * @param \DateTime $dateCreated The date that this resource was created.
    * @param \DateTime $dateUpdated The date that this resource was last updated.
    * @param string $messagingServiceSid The unique ID of the [Messaging Service](https://www.twilio.com/docs/sms/services/api) this conversation belongs to.
    * @param string $attributes An optional string metadata field you can use to store any data you wish. The string value must contain structurally valid JSON if specified.  **Note** that if the attributes are not set \\\&quot;{}\\\&quot; will be returned.
    * @param string $state 
    * @param string $timersInactive ISO8601 duration when conversation will be switched to &#x60;inactive&#x60; state. Minimum value for this timer is 1 minute.
    * @param string $timersClosed ISO8601 duration when conversation will be switched to &#x60;closed&#x60; state. Minimum value for this timer is 10 minutes.
    */
    public function __construct(string  $xTwilioWebhookEnabled=Values::NONE,string  $friendlyName=Values::NONE,string  $uniqueName=Values::NONE,\DateTime  $dateCreated=Values::NONE,\DateTime  $dateUpdated=Values::NONE,string  $messagingServiceSid=Values::NONE,string  $attributes=Values::NONE,string  $state=Values::NONE,string  $timersInactive=Values::NONE,string  $timersClosed=Values::NONE) {
        $this->options['xTwilioWebhookEnabled'] = $xTwilioWebhookEnabled;
        $this->options['friendlyName'] = $friendlyName;
        $this->options['uniqueName'] = $uniqueName;
        $this->options['dateCreated'] = $dateCreated;
        $this->options['dateUpdated'] = $dateUpdated;
        $this->options['messagingServiceSid'] = $messagingServiceSid;
        $this->options['attributes'] = $attributes;
        $this->options['state'] = $state;
        $this->options['timersInactive'] = $timersInactive;
        $this->options['timersClosed'] = $timersClosed;
    }

    /**
    * @param string $xTwilioWebhookEnabled The X-Twilio-Webhook-Enabled HTTP request header
    * @return $this Fluent Builder
    */
    public function setXTwilioWebhookEnabled(string $xTwilioWebhookEnabled): self {
        $this->options['xTwilioWebhookEnabled'] = $xTwilioWebhookEnabled;
        return $this;
    }
    /**
    * @param string $friendlyName The human-readable name of this conversation, limited to 256 characters. Optional.
    * @return $this Fluent Builder
    */
    public function setFriendlyName(string $friendlyName): self {
        $this->options['friendlyName'] = $friendlyName;
        return $this;
    }
    /**
    * @param string $uniqueName An application-defined string that uniquely identifies the resource. It can be used to address the resource in place of the resource&#39;s &#x60;sid&#x60; in the URL.
    * @return $this Fluent Builder
    */
    public function setUniqueName(string $uniqueName): self {
        $this->options['uniqueName'] = $uniqueName;
        return $this;
    }
    /**
    * @param \DateTime $dateCreated The date that this resource was created.
    * @return $this Fluent Builder
    */
    public function setDateCreated(\DateTime $dateCreated): self {
        $this->options['dateCreated'] = $dateCreated;
        return $this;
    }
    /**
    * @param \DateTime $dateUpdated The date that this resource was last updated.
    * @return $this Fluent Builder
    */
    public function setDateUpdated(\DateTime $dateUpdated): self {
        $this->options['dateUpdated'] = $dateUpdated;
        return $this;
    }
    /**
    * @param string $messagingServiceSid The unique ID of the [Messaging Service](https://www.twilio.com/docs/sms/services/api) this conversation belongs to.
    * @return $this Fluent Builder
    */
    public function setMessagingServiceSid(string $messagingServiceSid): self {
        $this->options['messagingServiceSid'] = $messagingServiceSid;
        return $this;
    }
    /**
    * @param string $attributes An optional string metadata field you can use to store any data you wish. The string value must contain structurally valid JSON if specified.  **Note** that if the attributes are not set \\\&quot;{}\\\&quot; will be returned.
    * @return $this Fluent Builder
    */
    public function setAttributes(string $attributes): self {
        $this->options['attributes'] = $attributes;
        return $this;
    }
    /**
    * @param string $state 
    * @return $this Fluent Builder
    */
    public function setState(string $state): self {
        $this->options['state'] = $state;
        return $this;
    }
    /**
    * @param string $timersInactive ISO8601 duration when conversation will be switched to &#x60;inactive&#x60; state. Minimum value for this timer is 1 minute.
    * @return $this Fluent Builder
    */
    public function setTimersInactive(string $timersInactive): self {
        $this->options['timersInactive'] = $timersInactive;
        return $this;
    }
    /**
    * @param string $timersClosed ISO8601 duration when conversation will be switched to &#x60;closed&#x60; state. Minimum value for this timer is 10 minutes.
    * @return $this Fluent Builder
    */
    public function setTimersClosed(string $timersClosed): self {
        $this->options['timersClosed'] = $timersClosed;
        return $this;
    }

    /**
    * Provide a friendly representation
    *
    * @return string Machine friendly representation
    */
    public function __toString(): string {
        $options = \http_build_query(Values::of($this->options), '', ' ');
        return '[Twilio.Conversations.V1.CreateConversationOptions ' . $options . ']';
    }
}

class DeleteConversationOptions extends Options {
    /**
    * @param string $xTwilioWebhookEnabled The X-Twilio-Webhook-Enabled HTTP request header
    */
    public function __construct(string  $xTwilioWebhookEnabled=Values::NONE) {
        $this->options['xTwilioWebhookEnabled'] = $xTwilioWebhookEnabled;
    }

    /**
    * @param string $xTwilioWebhookEnabled The X-Twilio-Webhook-Enabled HTTP request header
    * @return $this Fluent Builder
    */
    public function setXTwilioWebhookEnabled(string $xTwilioWebhookEnabled): self {
        $this->options['xTwilioWebhookEnabled'] = $xTwilioWebhookEnabled;
        return $this;
    }

    /**
    * Provide a friendly representation
    *
    * @return string Machine friendly representation
    */
    public function __toString(): string {
        $options = \http_build_query(Values::of($this->options), '', ' ');
        return '[Twilio.Conversations.V1.DeleteConversationOptions ' . $options . ']';
    }
}



class UpdateConversationOptions extends Options {
    /**
    * @param string $xTwilioWebhookEnabled The X-Twilio-Webhook-Enabled HTTP request header
    * @param string $friendlyName The human-readable name of this conversation, limited to 256 characters. Optional.
    * @param \DateTime $dateCreated The date that this resource was created.
    * @param \DateTime $dateUpdated The date that this resource was last updated.
    * @param string $attributes An optional string metadata field you can use to store any data you wish. The string value must contain structurally valid JSON if specified.  **Note** that if the attributes are not set \\\&quot;{}\\\&quot; will be returned.
    * @param string $messagingServiceSid The unique ID of the [Messaging Service](https://www.twilio.com/docs/sms/services/api) this conversation belongs to.
    * @param string $state 
    * @param string $timersInactive ISO8601 duration when conversation will be switched to &#x60;inactive&#x60; state. Minimum value for this timer is 1 minute.
    * @param string $timersClosed ISO8601 duration when conversation will be switched to &#x60;closed&#x60; state. Minimum value for this timer is 10 minutes.
    * @param string $uniqueName An application-defined string that uniquely identifies the resource. It can be used to address the resource in place of the resource&#39;s &#x60;sid&#x60; in the URL.
    */
    public function __construct(string  $xTwilioWebhookEnabled=Values::NONE,string  $friendlyName=Values::NONE,\DateTime  $dateCreated=Values::NONE,\DateTime  $dateUpdated=Values::NONE,string  $attributes=Values::NONE,string  $messagingServiceSid=Values::NONE,string  $state=Values::NONE,string  $timersInactive=Values::NONE,string  $timersClosed=Values::NONE,string  $uniqueName=Values::NONE) {
        $this->options['xTwilioWebhookEnabled'] = $xTwilioWebhookEnabled;
        $this->options['friendlyName'] = $friendlyName;
        $this->options['dateCreated'] = $dateCreated;
        $this->options['dateUpdated'] = $dateUpdated;
        $this->options['attributes'] = $attributes;
        $this->options['messagingServiceSid'] = $messagingServiceSid;
        $this->options['state'] = $state;
        $this->options['timersInactive'] = $timersInactive;
        $this->options['timersClosed'] = $timersClosed;
        $this->options['uniqueName'] = $uniqueName;
    }

    /**
    * @param string $xTwilioWebhookEnabled The X-Twilio-Webhook-Enabled HTTP request header
    * @return $this Fluent Builder
    */
    public function setXTwilioWebhookEnabled(string $xTwilioWebhookEnabled): self {
        $this->options['xTwilioWebhookEnabled'] = $xTwilioWebhookEnabled;
        return $this;
    }
    /**
    * @param string $friendlyName The human-readable name of this conversation, limited to 256 characters. Optional.
    * @return $this Fluent Builder
    */
    public function setFriendlyName(string $friendlyName): self {
        $this->options['friendlyName'] = $friendlyName;
        return $this;
    }
    /**
    * @param \DateTime $dateCreated The date that this resource was created.
    * @return $this Fluent Builder
    */
    public function setDateCreated(\DateTime $dateCreated): self {
        $this->options['dateCreated'] = $dateCreated;
        return $this;
    }
    /**
    * @param \DateTime $dateUpdated The date that this resource was last updated.
    * @return $this Fluent Builder
    */
    public function setDateUpdated(\DateTime $dateUpdated): self {
        $this->options['dateUpdated'] = $dateUpdated;
        return $this;
    }
    /**
    * @param string $attributes An optional string metadata field you can use to store any data you wish. The string value must contain structurally valid JSON if specified.  **Note** that if the attributes are not set \\\&quot;{}\\\&quot; will be returned.
    * @return $this Fluent Builder
    */
    public function setAttributes(string $attributes): self {
        $this->options['attributes'] = $attributes;
        return $this;
    }
    /**
    * @param string $messagingServiceSid The unique ID of the [Messaging Service](https://www.twilio.com/docs/sms/services/api) this conversation belongs to.
    * @return $this Fluent Builder
    */
    public function setMessagingServiceSid(string $messagingServiceSid): self {
        $this->options['messagingServiceSid'] = $messagingServiceSid;
        return $this;
    }
    /**
    * @param string $state 
    * @return $this Fluent Builder
    */
    public function setState(string $state): self {
        $this->options['state'] = $state;
        return $this;
    }
    /**
    * @param string $timersInactive ISO8601 duration when conversation will be switched to &#x60;inactive&#x60; state. Minimum value for this timer is 1 minute.
    * @return $this Fluent Builder
    */
    public function setTimersInactive(string $timersInactive): self {
        $this->options['timersInactive'] = $timersInactive;
        return $this;
    }
    /**
    * @param string $timersClosed ISO8601 duration when conversation will be switched to &#x60;closed&#x60; state. Minimum value for this timer is 10 minutes.
    * @return $this Fluent Builder
    */
    public function setTimersClosed(string $timersClosed): self {
        $this->options['timersClosed'] = $timersClosed;
        return $this;
    }
    /**
    * @param string $uniqueName An application-defined string that uniquely identifies the resource. It can be used to address the resource in place of the resource&#39;s &#x60;sid&#x60; in the URL.
    * @return $this Fluent Builder
    */
    public function setUniqueName(string $uniqueName): self {
        $this->options['uniqueName'] = $uniqueName;
        return $this;
    }

    /**
    * Provide a friendly representation
    *
    * @return string Machine friendly representation
    */
    public function __toString(): string {
        $options = \http_build_query(Values::of($this->options), '', ' ');
        return '[Twilio.Conversations.V1.UpdateConversationOptions ' . $options . ']';
    }
}

