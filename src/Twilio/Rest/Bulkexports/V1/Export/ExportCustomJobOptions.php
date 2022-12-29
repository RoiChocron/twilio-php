<?php
/*
 * This code was generated by
 * ___ _ _ _ _ _    _ ____    ____ ____ _    ____ ____ _  _ ____ ____ ____ ___ __   __
 *  |  | | | | |    | |  | __ |  | |__| | __ | __ |___ |\ | |___ |__/ |__|  | |  | |__/
 *  |  |_|_| | |___ | |__|    |__| |  | |    |__] |___ | \| |___ |  \ |  |  | |__| |  \
 *
 * Twilio - Bulkexports
 * This is the public Twilio REST API.
 *
 * NOTE: This class is auto generated by OpenAPI Generator.
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Twilio\Rest\Bulkexports\V1\Export;

use Twilio\Options;
use Twilio\Values;


abstract class ExportCustomJobOptions {
    /**
    * @param string $webhookUrl The optional webhook url called on completion of the job. If this is supplied, &#x60;WebhookMethod&#x60; must also be supplied. If you set neither webhook nor email, you will have to check your job&#39;s status manually. 
    * @param string $webhookMethod This is the method used to call the webhook on completion of the job. If this is supplied, &#x60;WebhookUrl&#x60; must also be supplied. 
    * @param string $email The optional email to send the completion notification to. You can set both webhook, and email, or one or the other. If you set neither, the job will run but you will have to query to determine your job&#39;s status. 
    * @return CreateExportCustomJobOptions Options builder
    */
    public static function create(string  $webhookUrl=Values::NONE,string  $webhookMethod=Values::NONE,string  $email=Values::NONE): CreateExportCustomJobOptions {
        return new CreateExportCustomJobOptions($webhookUrl,$webhookMethod,$email);
    }


}

class CreateExportCustomJobOptions extends Options {
    /**
    * @param string $webhookUrl The optional webhook url called on completion of the job. If this is supplied, &#x60;WebhookMethod&#x60; must also be supplied. If you set neither webhook nor email, you will have to check your job&#39;s status manually.
    * @param string $webhookMethod This is the method used to call the webhook on completion of the job. If this is supplied, &#x60;WebhookUrl&#x60; must also be supplied.
    * @param string $email The optional email to send the completion notification to. You can set both webhook, and email, or one or the other. If you set neither, the job will run but you will have to query to determine your job&#39;s status.
    */
    public function __construct(string  $webhookUrl=Values::NONE,string  $webhookMethod=Values::NONE,string  $email=Values::NONE) {
        $this->options['webhookUrl'] = $webhookUrl;
        $this->options['webhookMethod'] = $webhookMethod;
        $this->options['email'] = $email;
    }

    /**
    * @param string $webhookUrl The optional webhook url called on completion of the job. If this is supplied, &#x60;WebhookMethod&#x60; must also be supplied. If you set neither webhook nor email, you will have to check your job&#39;s status manually.
    * @return $this Fluent Builder
    */
    public function setWebhookUrl(string $webhookUrl): self {
        $this->options['webhookUrl'] = $webhookUrl;
        return $this;
    }
    /**
    * @param string $webhookMethod This is the method used to call the webhook on completion of the job. If this is supplied, &#x60;WebhookUrl&#x60; must also be supplied.
    * @return $this Fluent Builder
    */
    public function setWebhookMethod(string $webhookMethod): self {
        $this->options['webhookMethod'] = $webhookMethod;
        return $this;
    }
    /**
    * @param string $email The optional email to send the completion notification to. You can set both webhook, and email, or one or the other. If you set neither, the job will run but you will have to query to determine your job&#39;s status.
    * @return $this Fluent Builder
    */
    public function setEmail(string $email): self {
        $this->options['email'] = $email;
        return $this;
    }

    /**
    * Provide a friendly representation
    *
    * @return string Machine friendly representation
    */
    public function __toString(): string {
        $options = \http_build_query(Values::of($this->options), '', ' ');
        return '[Twilio.Bulkexports.V1.CreateExportCustomJobOptions ' . $options . ']';
    }
}


