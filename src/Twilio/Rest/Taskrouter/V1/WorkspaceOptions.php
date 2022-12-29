<?php
/*
 * This code was generated by
 * ___ _ _ _ _ _    _ ____    ____ ____ _    ____ ____ _  _ ____ ____ ____ ___ __   __
 *  |  | | | | |    | |  | __ |  | |__| | __ | __ |___ |\ | |___ |__/ |__|  | |  | |__/
 *  |  |_|_| | |___ | |__|    |__| |  | |    |__] |___ | \| |___ |  \ |  |  | |__| |  \
 *
 * Twilio - Taskrouter
 * This is the public Twilio REST API.
 *
 * NOTE: This class is auto generated by OpenAPI Generator.
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Twilio\Rest\Taskrouter\V1;

use Twilio\Options;
use Twilio\Values;


abstract class WorkspaceOptions {
    /**
    * @param string $eventCallbackUrl The URL we should call when an event occurs. If provided, the Workspace will publish events to this URL, for example, to collect data for reporting. See [Workspace Events](https://www.twilio.com/docs/taskrouter/api/event) for more information. This parameter supports Twilio&#39;s [Webhooks (HTTP callbacks) Connection Overrides](https://www.twilio.com/docs/usage/webhooks/webhooks-connection-overrides). 
    * @param string $eventsFilter The list of Workspace events for which to call event_callback_url. For example, if &#x60;EventsFilter&#x3D;task.created, task.canceled, worker.activity.update&#x60;, then TaskRouter will call event_callback_url only when a task is created, canceled, or a Worker activity is updated. 
    * @param bool $multiTaskEnabled Whether to enable multi-tasking. Can be: &#x60;true&#x60; to enable multi-tasking, or &#x60;false&#x60; to disable it. However, all workspaces should be created as multi-tasking. The default is &#x60;true&#x60;. Multi-tasking allows Workers to handle multiple Tasks simultaneously. When enabled (&#x60;true&#x60;), each Worker can receive parallel reservations up to the per-channel maximums defined in the Workers section. In single-tasking mode (legacy mode), each Worker will only receive a new reservation when the previous task is completed. Learn more at [Multitasking](https://www.twilio.com/docs/taskrouter/multitasking). 
    * @param string $template An available template name. Can be: &#x60;NONE&#x60; or &#x60;FIFO&#x60; and the default is &#x60;NONE&#x60;. Pre-configures the Workspace with the Workflow and Activities specified in the template. &#x60;NONE&#x60; will create a Workspace with only a set of default activities. &#x60;FIFO&#x60; will configure TaskRouter with a set of default activities and a single TaskQueue for first-in, first-out distribution, which can be useful when you are getting started with TaskRouter. 
    * @param string $prioritizeQueueOrder  
    * @return CreateWorkspaceOptions Options builder
    */
    public static function create(string  $eventCallbackUrl=Values::NONE,string  $eventsFilter=Values::NONE,bool  $multiTaskEnabled=Values::NONE,string  $template=Values::NONE,string  $prioritizeQueueOrder=Values::NONE): CreateWorkspaceOptions {
        return new CreateWorkspaceOptions($eventCallbackUrl,$eventsFilter,$multiTaskEnabled,$template,$prioritizeQueueOrder);
    }



    /**
    * @param string $friendlyName The &#x60;friendly_name&#x60; of the Workspace resources to read. For example &#x60;Customer Support&#x60; or &#x60;2014 Election Campaign&#x60;. 
    * @return ReadWorkspaceOptions Options builder
    */
    public static function read(string  $friendlyName=Values::NONE): ReadWorkspaceOptions {
        return new ReadWorkspaceOptions($friendlyName);
    }

    /**
    * @param string $defaultActivitySid The SID of the Activity that will be used when new Workers are created in the Workspace. 
    * @param string $eventCallbackUrl The URL we should call when an event occurs. See [Workspace Events](https://www.twilio.com/docs/taskrouter/api/event) for more information. This parameter supports Twilio&#39;s [Webhooks (HTTP callbacks) Connection Overrides](https://www.twilio.com/docs/usage/webhooks/webhooks-connection-overrides). 
    * @param string $eventsFilter The list of Workspace events for which to call event_callback_url. For example if &#x60;EventsFilter&#x3D;task.created,task.canceled,worker.activity.update&#x60;, then TaskRouter will call event_callback_url only when a task is created, canceled, or a Worker activity is updated. 
    * @param string $friendlyName A descriptive string that you create to describe the Workspace resource. For example: &#x60;Sales Call Center&#x60; or &#x60;Customer Support Team&#x60;. 
    * @param bool $multiTaskEnabled Whether to enable multi-tasking. Can be: &#x60;true&#x60; to enable multi-tasking, or &#x60;false&#x60; to disable it. However, all workspaces should be maintained as multi-tasking. There is no default when omitting this parameter. A multi-tasking Workspace can&#39;t be updated to single-tasking unless it is not a Flex Project and another (legacy) single-tasking Workspace exists. Multi-tasking allows Workers to handle multiple Tasks simultaneously. In multi-tasking mode, each Worker can receive parallel reservations up to the per-channel maximums defined in the Workers section. In single-tasking mode (legacy mode), each Worker will only receive a new reservation when the previous task is completed. Learn more at [Multitasking](https://www.twilio.com/docs/taskrouter/multitasking). 
    * @param string $timeoutActivitySid The SID of the Activity that will be assigned to a Worker when a Task reservation times out without a response. 
    * @param string $prioritizeQueueOrder  
    * @return UpdateWorkspaceOptions Options builder
    */
    public static function update(string  $defaultActivitySid=Values::NONE,string  $eventCallbackUrl=Values::NONE,string  $eventsFilter=Values::NONE,string  $friendlyName=Values::NONE,bool  $multiTaskEnabled=Values::NONE,string  $timeoutActivitySid=Values::NONE,string  $prioritizeQueueOrder=Values::NONE): UpdateWorkspaceOptions {
        return new UpdateWorkspaceOptions($defaultActivitySid,$eventCallbackUrl,$eventsFilter,$friendlyName,$multiTaskEnabled,$timeoutActivitySid,$prioritizeQueueOrder);
    }

}

class CreateWorkspaceOptions extends Options {
    /**
    * @param string $eventCallbackUrl The URL we should call when an event occurs. If provided, the Workspace will publish events to this URL, for example, to collect data for reporting. See [Workspace Events](https://www.twilio.com/docs/taskrouter/api/event) for more information. This parameter supports Twilio&#39;s [Webhooks (HTTP callbacks) Connection Overrides](https://www.twilio.com/docs/usage/webhooks/webhooks-connection-overrides).
    * @param string $eventsFilter The list of Workspace events for which to call event_callback_url. For example, if &#x60;EventsFilter&#x3D;task.created, task.canceled, worker.activity.update&#x60;, then TaskRouter will call event_callback_url only when a task is created, canceled, or a Worker activity is updated.
    * @param bool $multiTaskEnabled Whether to enable multi-tasking. Can be: &#x60;true&#x60; to enable multi-tasking, or &#x60;false&#x60; to disable it. However, all workspaces should be created as multi-tasking. The default is &#x60;true&#x60;. Multi-tasking allows Workers to handle multiple Tasks simultaneously. When enabled (&#x60;true&#x60;), each Worker can receive parallel reservations up to the per-channel maximums defined in the Workers section. In single-tasking mode (legacy mode), each Worker will only receive a new reservation when the previous task is completed. Learn more at [Multitasking](https://www.twilio.com/docs/taskrouter/multitasking).
    * @param string $template An available template name. Can be: &#x60;NONE&#x60; or &#x60;FIFO&#x60; and the default is &#x60;NONE&#x60;. Pre-configures the Workspace with the Workflow and Activities specified in the template. &#x60;NONE&#x60; will create a Workspace with only a set of default activities. &#x60;FIFO&#x60; will configure TaskRouter with a set of default activities and a single TaskQueue for first-in, first-out distribution, which can be useful when you are getting started with TaskRouter.
    * @param string $prioritizeQueueOrder 
    */
    public function __construct(string  $eventCallbackUrl=Values::NONE,string  $eventsFilter=Values::NONE,bool  $multiTaskEnabled=Values::NONE,string  $template=Values::NONE,string  $prioritizeQueueOrder=Values::NONE) {
        $this->options['eventCallbackUrl'] = $eventCallbackUrl;
        $this->options['eventsFilter'] = $eventsFilter;
        $this->options['multiTaskEnabled'] = $multiTaskEnabled;
        $this->options['template'] = $template;
        $this->options['prioritizeQueueOrder'] = $prioritizeQueueOrder;
    }

    /**
    * @param string $eventCallbackUrl The URL we should call when an event occurs. If provided, the Workspace will publish events to this URL, for example, to collect data for reporting. See [Workspace Events](https://www.twilio.com/docs/taskrouter/api/event) for more information. This parameter supports Twilio&#39;s [Webhooks (HTTP callbacks) Connection Overrides](https://www.twilio.com/docs/usage/webhooks/webhooks-connection-overrides).
    * @return $this Fluent Builder
    */
    public function setEventCallbackUrl(string $eventCallbackUrl): self {
        $this->options['eventCallbackUrl'] = $eventCallbackUrl;
        return $this;
    }
    /**
    * @param string $eventsFilter The list of Workspace events for which to call event_callback_url. For example, if &#x60;EventsFilter&#x3D;task.created, task.canceled, worker.activity.update&#x60;, then TaskRouter will call event_callback_url only when a task is created, canceled, or a Worker activity is updated.
    * @return $this Fluent Builder
    */
    public function setEventsFilter(string $eventsFilter): self {
        $this->options['eventsFilter'] = $eventsFilter;
        return $this;
    }
    /**
    * @param bool $multiTaskEnabled Whether to enable multi-tasking. Can be: &#x60;true&#x60; to enable multi-tasking, or &#x60;false&#x60; to disable it. However, all workspaces should be created as multi-tasking. The default is &#x60;true&#x60;. Multi-tasking allows Workers to handle multiple Tasks simultaneously. When enabled (&#x60;true&#x60;), each Worker can receive parallel reservations up to the per-channel maximums defined in the Workers section. In single-tasking mode (legacy mode), each Worker will only receive a new reservation when the previous task is completed. Learn more at [Multitasking](https://www.twilio.com/docs/taskrouter/multitasking).
    * @return $this Fluent Builder
    */
    public function setMultiTaskEnabled(bool $multiTaskEnabled): self {
        $this->options['multiTaskEnabled'] = $multiTaskEnabled;
        return $this;
    }
    /**
    * @param string $template An available template name. Can be: &#x60;NONE&#x60; or &#x60;FIFO&#x60; and the default is &#x60;NONE&#x60;. Pre-configures the Workspace with the Workflow and Activities specified in the template. &#x60;NONE&#x60; will create a Workspace with only a set of default activities. &#x60;FIFO&#x60; will configure TaskRouter with a set of default activities and a single TaskQueue for first-in, first-out distribution, which can be useful when you are getting started with TaskRouter.
    * @return $this Fluent Builder
    */
    public function setTemplate(string $template): self {
        $this->options['template'] = $template;
        return $this;
    }
    /**
    * @param string $prioritizeQueueOrder 
    * @return $this Fluent Builder
    */
    public function setPrioritizeQueueOrder(string $prioritizeQueueOrder): self {
        $this->options['prioritizeQueueOrder'] = $prioritizeQueueOrder;
        return $this;
    }

    /**
    * Provide a friendly representation
    *
    * @return string Machine friendly representation
    */
    public function __toString(): string {
        $options = \http_build_query(Values::of($this->options), '', ' ');
        return '[Twilio.Taskrouter.V1.CreateWorkspaceOptions ' . $options . ']';
    }
}



class ReadWorkspaceOptions extends Options {
    /**
    * @param string $friendlyName The &#x60;friendly_name&#x60; of the Workspace resources to read. For example &#x60;Customer Support&#x60; or &#x60;2014 Election Campaign&#x60;.
    */
    public function __construct(string  $friendlyName=Values::NONE) {
        $this->options['friendlyName'] = $friendlyName;
    }

    /**
    * @param string $friendlyName The &#x60;friendly_name&#x60; of the Workspace resources to read. For example &#x60;Customer Support&#x60; or &#x60;2014 Election Campaign&#x60;.
    * @return $this Fluent Builder
    */
    public function setFriendlyName(string $friendlyName): self {
        $this->options['friendlyName'] = $friendlyName;
        return $this;
    }

    /**
    * Provide a friendly representation
    *
    * @return string Machine friendly representation
    */
    public function __toString(): string {
        $options = \http_build_query(Values::of($this->options), '', ' ');
        return '[Twilio.Taskrouter.V1.ReadWorkspaceOptions ' . $options . ']';
    }
}

class UpdateWorkspaceOptions extends Options {
    /**
    * @param string $defaultActivitySid The SID of the Activity that will be used when new Workers are created in the Workspace.
    * @param string $eventCallbackUrl The URL we should call when an event occurs. See [Workspace Events](https://www.twilio.com/docs/taskrouter/api/event) for more information. This parameter supports Twilio&#39;s [Webhooks (HTTP callbacks) Connection Overrides](https://www.twilio.com/docs/usage/webhooks/webhooks-connection-overrides).
    * @param string $eventsFilter The list of Workspace events for which to call event_callback_url. For example if &#x60;EventsFilter&#x3D;task.created,task.canceled,worker.activity.update&#x60;, then TaskRouter will call event_callback_url only when a task is created, canceled, or a Worker activity is updated.
    * @param string $friendlyName A descriptive string that you create to describe the Workspace resource. For example: &#x60;Sales Call Center&#x60; or &#x60;Customer Support Team&#x60;.
    * @param bool $multiTaskEnabled Whether to enable multi-tasking. Can be: &#x60;true&#x60; to enable multi-tasking, or &#x60;false&#x60; to disable it. However, all workspaces should be maintained as multi-tasking. There is no default when omitting this parameter. A multi-tasking Workspace can&#39;t be updated to single-tasking unless it is not a Flex Project and another (legacy) single-tasking Workspace exists. Multi-tasking allows Workers to handle multiple Tasks simultaneously. In multi-tasking mode, each Worker can receive parallel reservations up to the per-channel maximums defined in the Workers section. In single-tasking mode (legacy mode), each Worker will only receive a new reservation when the previous task is completed. Learn more at [Multitasking](https://www.twilio.com/docs/taskrouter/multitasking).
    * @param string $timeoutActivitySid The SID of the Activity that will be assigned to a Worker when a Task reservation times out without a response.
    * @param string $prioritizeQueueOrder 
    */
    public function __construct(string  $defaultActivitySid=Values::NONE,string  $eventCallbackUrl=Values::NONE,string  $eventsFilter=Values::NONE,string  $friendlyName=Values::NONE,bool  $multiTaskEnabled=Values::NONE,string  $timeoutActivitySid=Values::NONE,string  $prioritizeQueueOrder=Values::NONE) {
        $this->options['defaultActivitySid'] = $defaultActivitySid;
        $this->options['eventCallbackUrl'] = $eventCallbackUrl;
        $this->options['eventsFilter'] = $eventsFilter;
        $this->options['friendlyName'] = $friendlyName;
        $this->options['multiTaskEnabled'] = $multiTaskEnabled;
        $this->options['timeoutActivitySid'] = $timeoutActivitySid;
        $this->options['prioritizeQueueOrder'] = $prioritizeQueueOrder;
    }

    /**
    * @param string $defaultActivitySid The SID of the Activity that will be used when new Workers are created in the Workspace.
    * @return $this Fluent Builder
    */
    public function setDefaultActivitySid(string $defaultActivitySid): self {
        $this->options['defaultActivitySid'] = $defaultActivitySid;
        return $this;
    }
    /**
    * @param string $eventCallbackUrl The URL we should call when an event occurs. See [Workspace Events](https://www.twilio.com/docs/taskrouter/api/event) for more information. This parameter supports Twilio&#39;s [Webhooks (HTTP callbacks) Connection Overrides](https://www.twilio.com/docs/usage/webhooks/webhooks-connection-overrides).
    * @return $this Fluent Builder
    */
    public function setEventCallbackUrl(string $eventCallbackUrl): self {
        $this->options['eventCallbackUrl'] = $eventCallbackUrl;
        return $this;
    }
    /**
    * @param string $eventsFilter The list of Workspace events for which to call event_callback_url. For example if &#x60;EventsFilter&#x3D;task.created,task.canceled,worker.activity.update&#x60;, then TaskRouter will call event_callback_url only when a task is created, canceled, or a Worker activity is updated.
    * @return $this Fluent Builder
    */
    public function setEventsFilter(string $eventsFilter): self {
        $this->options['eventsFilter'] = $eventsFilter;
        return $this;
    }
    /**
    * @param string $friendlyName A descriptive string that you create to describe the Workspace resource. For example: &#x60;Sales Call Center&#x60; or &#x60;Customer Support Team&#x60;.
    * @return $this Fluent Builder
    */
    public function setFriendlyName(string $friendlyName): self {
        $this->options['friendlyName'] = $friendlyName;
        return $this;
    }
    /**
    * @param bool $multiTaskEnabled Whether to enable multi-tasking. Can be: &#x60;true&#x60; to enable multi-tasking, or &#x60;false&#x60; to disable it. However, all workspaces should be maintained as multi-tasking. There is no default when omitting this parameter. A multi-tasking Workspace can&#39;t be updated to single-tasking unless it is not a Flex Project and another (legacy) single-tasking Workspace exists. Multi-tasking allows Workers to handle multiple Tasks simultaneously. In multi-tasking mode, each Worker can receive parallel reservations up to the per-channel maximums defined in the Workers section. In single-tasking mode (legacy mode), each Worker will only receive a new reservation when the previous task is completed. Learn more at [Multitasking](https://www.twilio.com/docs/taskrouter/multitasking).
    * @return $this Fluent Builder
    */
    public function setMultiTaskEnabled(bool $multiTaskEnabled): self {
        $this->options['multiTaskEnabled'] = $multiTaskEnabled;
        return $this;
    }
    /**
    * @param string $timeoutActivitySid The SID of the Activity that will be assigned to a Worker when a Task reservation times out without a response.
    * @return $this Fluent Builder
    */
    public function setTimeoutActivitySid(string $timeoutActivitySid): self {
        $this->options['timeoutActivitySid'] = $timeoutActivitySid;
        return $this;
    }
    /**
    * @param string $prioritizeQueueOrder 
    * @return $this Fluent Builder
    */
    public function setPrioritizeQueueOrder(string $prioritizeQueueOrder): self {
        $this->options['prioritizeQueueOrder'] = $prioritizeQueueOrder;
        return $this;
    }

    /**
    * Provide a friendly representation
    *
    * @return string Machine friendly representation
    */
    public function __toString(): string {
        $options = \http_build_query(Values::of($this->options), '', ' ');
        return '[Twilio.Taskrouter.V1.UpdateWorkspaceOptions ' . $options . ']';
    }
}

