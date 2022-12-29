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

namespace Twilio\Rest\IpMessaging\V2\Service\Channel;

use Twilio\Options;
use Twilio\Values;


abstract class WebhookOptions {
    /**
    * @param string $configurationUrl  
    * @param string $configurationMethod  
    * @param string[] $configurationFilters  
    * @param string[] $configurationTriggers  
    * @param string $configurationFlowSid  
    * @param int $configurationRetryCount  
    * @return CreateWebhookOptions Options builder
    */
    public static function create(string  $configurationUrl=Values::NONE,string  $configurationMethod=Values::NONE,array  $configurationFilters=Values::ARRAY_NONE,array  $configurationTriggers=Values::ARRAY_NONE,string  $configurationFlowSid=Values::NONE,int  $configurationRetryCount=Values::NONE): CreateWebhookOptions {
        return new CreateWebhookOptions($configurationUrl,$configurationMethod,$configurationFilters,$configurationTriggers,$configurationFlowSid,$configurationRetryCount);
    }




    /**
    * @param string $configurationUrl  
    * @param string $configurationMethod  
    * @param string[] $configurationFilters  
    * @param string[] $configurationTriggers  
    * @param string $configurationFlowSid  
    * @param int $configurationRetryCount  
    * @return UpdateWebhookOptions Options builder
    */
    public static function update(string  $configurationUrl=Values::NONE,string  $configurationMethod=Values::NONE,array  $configurationFilters=Values::ARRAY_NONE,array  $configurationTriggers=Values::ARRAY_NONE,string  $configurationFlowSid=Values::NONE,int  $configurationRetryCount=Values::NONE): UpdateWebhookOptions {
        return new UpdateWebhookOptions($configurationUrl,$configurationMethod,$configurationFilters,$configurationTriggers,$configurationFlowSid,$configurationRetryCount);
    }

}

class CreateWebhookOptions extends Options {
    /**
    * @param string $configurationUrl 
    * @param string $configurationMethod 
    * @param string[] $configurationFilters 
    * @param string[] $configurationTriggers 
    * @param string $configurationFlowSid 
    * @param int $configurationRetryCount 
    */
    public function __construct(string  $configurationUrl=Values::NONE,string  $configurationMethod=Values::NONE,array  $configurationFilters=Values::ARRAY_NONE,array  $configurationTriggers=Values::ARRAY_NONE,string  $configurationFlowSid=Values::NONE,int  $configurationRetryCount=Values::NONE) {
        $this->options['configurationUrl'] = $configurationUrl;
        $this->options['configurationMethod'] = $configurationMethod;
        $this->options['configurationFilters'] = $configurationFilters;
        $this->options['configurationTriggers'] = $configurationTriggers;
        $this->options['configurationFlowSid'] = $configurationFlowSid;
        $this->options['configurationRetryCount'] = $configurationRetryCount;
    }

    /**
    * @param string $configurationUrl 
    * @return $this Fluent Builder
    */
    public function setConfigurationUrl(string $configurationUrl): self {
        $this->options['configurationUrl'] = $configurationUrl;
        return $this;
    }
    /**
    * @param string $configurationMethod 
    * @return $this Fluent Builder
    */
    public function setConfigurationMethod(string $configurationMethod): self {
        $this->options['configurationMethod'] = $configurationMethod;
        return $this;
    }
    /**
    * @param string[] $configurationFilters 
    * @return $this Fluent Builder
    */
    public function setConfigurationFilters(array $configurationFilters): self {
        $this->options['configurationFilters'] = $configurationFilters;
        return $this;
    }
    /**
    * @param string[] $configurationTriggers 
    * @return $this Fluent Builder
    */
    public function setConfigurationTriggers(array $configurationTriggers): self {
        $this->options['configurationTriggers'] = $configurationTriggers;
        return $this;
    }
    /**
    * @param string $configurationFlowSid 
    * @return $this Fluent Builder
    */
    public function setConfigurationFlowSid(string $configurationFlowSid): self {
        $this->options['configurationFlowSid'] = $configurationFlowSid;
        return $this;
    }
    /**
    * @param int $configurationRetryCount 
    * @return $this Fluent Builder
    */
    public function setConfigurationRetryCount(int $configurationRetryCount): self {
        $this->options['configurationRetryCount'] = $configurationRetryCount;
        return $this;
    }

    /**
    * Provide a friendly representation
    *
    * @return string Machine friendly representation
    */
    public function __toString(): string {
        $options = \http_build_query(Values::of($this->options), '', ' ');
        return '[Twilio.IpMessaging.V2.CreateWebhookOptions ' . $options . ']';
    }
}




class UpdateWebhookOptions extends Options {
    /**
    * @param string $configurationUrl 
    * @param string $configurationMethod 
    * @param string[] $configurationFilters 
    * @param string[] $configurationTriggers 
    * @param string $configurationFlowSid 
    * @param int $configurationRetryCount 
    */
    public function __construct(string  $configurationUrl=Values::NONE,string  $configurationMethod=Values::NONE,array  $configurationFilters=Values::ARRAY_NONE,array  $configurationTriggers=Values::ARRAY_NONE,string  $configurationFlowSid=Values::NONE,int  $configurationRetryCount=Values::NONE) {
        $this->options['configurationUrl'] = $configurationUrl;
        $this->options['configurationMethod'] = $configurationMethod;
        $this->options['configurationFilters'] = $configurationFilters;
        $this->options['configurationTriggers'] = $configurationTriggers;
        $this->options['configurationFlowSid'] = $configurationFlowSid;
        $this->options['configurationRetryCount'] = $configurationRetryCount;
    }

    /**
    * @param string $configurationUrl 
    * @return $this Fluent Builder
    */
    public function setConfigurationUrl(string $configurationUrl): self {
        $this->options['configurationUrl'] = $configurationUrl;
        return $this;
    }
    /**
    * @param string $configurationMethod 
    * @return $this Fluent Builder
    */
    public function setConfigurationMethod(string $configurationMethod): self {
        $this->options['configurationMethod'] = $configurationMethod;
        return $this;
    }
    /**
    * @param string[] $configurationFilters 
    * @return $this Fluent Builder
    */
    public function setConfigurationFilters(array $configurationFilters): self {
        $this->options['configurationFilters'] = $configurationFilters;
        return $this;
    }
    /**
    * @param string[] $configurationTriggers 
    * @return $this Fluent Builder
    */
    public function setConfigurationTriggers(array $configurationTriggers): self {
        $this->options['configurationTriggers'] = $configurationTriggers;
        return $this;
    }
    /**
    * @param string $configurationFlowSid 
    * @return $this Fluent Builder
    */
    public function setConfigurationFlowSid(string $configurationFlowSid): self {
        $this->options['configurationFlowSid'] = $configurationFlowSid;
        return $this;
    }
    /**
    * @param int $configurationRetryCount 
    * @return $this Fluent Builder
    */
    public function setConfigurationRetryCount(int $configurationRetryCount): self {
        $this->options['configurationRetryCount'] = $configurationRetryCount;
        return $this;
    }

    /**
    * Provide a friendly representation
    *
    * @return string Machine friendly representation
    */
    public function __toString(): string {
        $options = \http_build_query(Values::of($this->options), '', ' ');
        return '[Twilio.IpMessaging.V2.UpdateWebhookOptions ' . $options . ']';
    }
}

