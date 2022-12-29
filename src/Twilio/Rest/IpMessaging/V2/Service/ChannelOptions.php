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

namespace Twilio\Rest\IpMessaging\V2\Service;

use Twilio\Options;
use Twilio\Values;


abstract class ChannelOptions {
    /**
    * @param string $xTwilioWebhookEnabled The X-Twilio-Webhook-Enabled HTTP request header 
    * @param string $friendlyName  
    * @param string $uniqueName  
    * @param string $attributes  
    * @param string $type  
    * @param \DateTime $dateCreated  
    * @param \DateTime $dateUpdated  
    * @param string $createdBy  
    * @return CreateChannelOptions Options builder
    */
    public static function create(string  $xTwilioWebhookEnabled=Values::NONE,string  $friendlyName=Values::NONE,string  $uniqueName=Values::NONE,string  $attributes=Values::NONE,string  $type=Values::NONE,\DateTime  $dateCreated=Values::NONE,\DateTime  $dateUpdated=Values::NONE,string  $createdBy=Values::NONE): CreateChannelOptions {
        return new CreateChannelOptions($xTwilioWebhookEnabled,$friendlyName,$uniqueName,$attributes,$type,$dateCreated,$dateUpdated,$createdBy);
    }

    /**
    * @param string $xTwilioWebhookEnabled The X-Twilio-Webhook-Enabled HTTP request header 
    * @return DeleteChannelOptions Options builder
    */
    public static function delete(string  $xTwilioWebhookEnabled=Values::NONE): DeleteChannelOptions {
        return new DeleteChannelOptions($xTwilioWebhookEnabled);
    }


    /**
    * @param string $type  
    * @return ReadChannelOptions Options builder
    */
    public static function read(array  $type=Values::ARRAY_NONE): ReadChannelOptions {
        return new ReadChannelOptions($type);
    }

    /**
    * @param string $xTwilioWebhookEnabled The X-Twilio-Webhook-Enabled HTTP request header 
    * @param string $friendlyName  
    * @param string $uniqueName  
    * @param string $attributes  
    * @param \DateTime $dateCreated  
    * @param \DateTime $dateUpdated  
    * @param string $createdBy  
    * @return UpdateChannelOptions Options builder
    */
    public static function update(string  $xTwilioWebhookEnabled=Values::NONE,string  $friendlyName=Values::NONE,string  $uniqueName=Values::NONE,string  $attributes=Values::NONE,\DateTime  $dateCreated=Values::NONE,\DateTime  $dateUpdated=Values::NONE,string  $createdBy=Values::NONE): UpdateChannelOptions {
        return new UpdateChannelOptions($xTwilioWebhookEnabled,$friendlyName,$uniqueName,$attributes,$dateCreated,$dateUpdated,$createdBy);
    }

}

class CreateChannelOptions extends Options {
    /**
    * @param string $xTwilioWebhookEnabled The X-Twilio-Webhook-Enabled HTTP request header
    * @param string $friendlyName 
    * @param string $uniqueName 
    * @param string $attributes 
    * @param string $type 
    * @param \DateTime $dateCreated 
    * @param \DateTime $dateUpdated 
    * @param string $createdBy 
    */
    public function __construct(string  $xTwilioWebhookEnabled=Values::NONE,string  $friendlyName=Values::NONE,string  $uniqueName=Values::NONE,string  $attributes=Values::NONE,string  $type=Values::NONE,\DateTime  $dateCreated=Values::NONE,\DateTime  $dateUpdated=Values::NONE,string  $createdBy=Values::NONE) {
        $this->options['xTwilioWebhookEnabled'] = $xTwilioWebhookEnabled;
        $this->options['friendlyName'] = $friendlyName;
        $this->options['uniqueName'] = $uniqueName;
        $this->options['attributes'] = $attributes;
        $this->options['type'] = $type;
        $this->options['dateCreated'] = $dateCreated;
        $this->options['dateUpdated'] = $dateUpdated;
        $this->options['createdBy'] = $createdBy;
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
    * @param string $friendlyName 
    * @return $this Fluent Builder
    */
    public function setFriendlyName(string $friendlyName): self {
        $this->options['friendlyName'] = $friendlyName;
        return $this;
    }
    /**
    * @param string $uniqueName 
    * @return $this Fluent Builder
    */
    public function setUniqueName(string $uniqueName): self {
        $this->options['uniqueName'] = $uniqueName;
        return $this;
    }
    /**
    * @param string $attributes 
    * @return $this Fluent Builder
    */
    public function setAttributes(string $attributes): self {
        $this->options['attributes'] = $attributes;
        return $this;
    }
    /**
    * @param string $type 
    * @return $this Fluent Builder
    */
    public function setType(string $type): self {
        $this->options['type'] = $type;
        return $this;
    }
    /**
    * @param \DateTime $dateCreated 
    * @return $this Fluent Builder
    */
    public function setDateCreated(\DateTime $dateCreated): self {
        $this->options['dateCreated'] = $dateCreated;
        return $this;
    }
    /**
    * @param \DateTime $dateUpdated 
    * @return $this Fluent Builder
    */
    public function setDateUpdated(\DateTime $dateUpdated): self {
        $this->options['dateUpdated'] = $dateUpdated;
        return $this;
    }
    /**
    * @param string $createdBy 
    * @return $this Fluent Builder
    */
    public function setCreatedBy(string $createdBy): self {
        $this->options['createdBy'] = $createdBy;
        return $this;
    }

    /**
    * Provide a friendly representation
    *
    * @return string Machine friendly representation
    */
    public function __toString(): string {
        $options = \http_build_query(Values::of($this->options), '', ' ');
        return '[Twilio.IpMessaging.V2.CreateChannelOptions ' . $options . ']';
    }
}

class DeleteChannelOptions extends Options {
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
        return '[Twilio.IpMessaging.V2.DeleteChannelOptions ' . $options . ']';
    }
}


class ReadChannelOptions extends Options {
    /**
    * @param string $type 
    */
    public function __construct(array  $type=Values::ARRAY_NONE) {
        $this->options['type'] = $type;
    }

    /**
    * @param string $type 
    * @return $this Fluent Builder
    */
    public function setType(array $type): self {
        $this->options['type'] = $type;
        return $this;
    }

    /**
    * Provide a friendly representation
    *
    * @return string Machine friendly representation
    */
    public function __toString(): string {
        $options = \http_build_query(Values::of($this->options), '', ' ');
        return '[Twilio.IpMessaging.V2.ReadChannelOptions ' . $options . ']';
    }
}

class UpdateChannelOptions extends Options {
    /**
    * @param string $xTwilioWebhookEnabled The X-Twilio-Webhook-Enabled HTTP request header
    * @param string $friendlyName 
    * @param string $uniqueName 
    * @param string $attributes 
    * @param \DateTime $dateCreated 
    * @param \DateTime $dateUpdated 
    * @param string $createdBy 
    */
    public function __construct(string  $xTwilioWebhookEnabled=Values::NONE,string  $friendlyName=Values::NONE,string  $uniqueName=Values::NONE,string  $attributes=Values::NONE,\DateTime  $dateCreated=Values::NONE,\DateTime  $dateUpdated=Values::NONE,string  $createdBy=Values::NONE) {
        $this->options['xTwilioWebhookEnabled'] = $xTwilioWebhookEnabled;
        $this->options['friendlyName'] = $friendlyName;
        $this->options['uniqueName'] = $uniqueName;
        $this->options['attributes'] = $attributes;
        $this->options['dateCreated'] = $dateCreated;
        $this->options['dateUpdated'] = $dateUpdated;
        $this->options['createdBy'] = $createdBy;
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
    * @param string $friendlyName 
    * @return $this Fluent Builder
    */
    public function setFriendlyName(string $friendlyName): self {
        $this->options['friendlyName'] = $friendlyName;
        return $this;
    }
    /**
    * @param string $uniqueName 
    * @return $this Fluent Builder
    */
    public function setUniqueName(string $uniqueName): self {
        $this->options['uniqueName'] = $uniqueName;
        return $this;
    }
    /**
    * @param string $attributes 
    * @return $this Fluent Builder
    */
    public function setAttributes(string $attributes): self {
        $this->options['attributes'] = $attributes;
        return $this;
    }
    /**
    * @param \DateTime $dateCreated 
    * @return $this Fluent Builder
    */
    public function setDateCreated(\DateTime $dateCreated): self {
        $this->options['dateCreated'] = $dateCreated;
        return $this;
    }
    /**
    * @param \DateTime $dateUpdated 
    * @return $this Fluent Builder
    */
    public function setDateUpdated(\DateTime $dateUpdated): self {
        $this->options['dateUpdated'] = $dateUpdated;
        return $this;
    }
    /**
    * @param string $createdBy 
    * @return $this Fluent Builder
    */
    public function setCreatedBy(string $createdBy): self {
        $this->options['createdBy'] = $createdBy;
        return $this;
    }

    /**
    * Provide a friendly representation
    *
    * @return string Machine friendly representation
    */
    public function __toString(): string {
        $options = \http_build_query(Values::of($this->options), '', ' ');
        return '[Twilio.IpMessaging.V2.UpdateChannelOptions ' . $options . ']';
    }
}

