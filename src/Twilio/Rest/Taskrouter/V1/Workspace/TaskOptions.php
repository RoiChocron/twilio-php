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

namespace Twilio\Rest\Taskrouter\V1\Workspace;

use Twilio\Options;
use Twilio\Values;


abstract class TaskOptions {
    /**
    * @param int $timeout The amount of time in seconds the new task can live before being assigned. Can be up to a maximum of 2 weeks (1,209,600 seconds). The default value is 24 hours (86,400 seconds). On timeout, the &#x60;task.canceled&#x60; event will fire with description &#x60;Task TTL Exceeded&#x60;. 
    * @param int $priority The priority to assign the new task and override the default. When supplied, the new Task will have this priority unless it matches a Workflow Target with a Priority set. When not supplied, the new Task will have the priority of the matching Workflow Target. Value can be 0 to 2^31^ (2,147,483,647). 
    * @param string $taskChannel When MultiTasking is enabled, specify the TaskChannel by passing either its &#x60;unique_name&#x60; or &#x60;sid&#x60;. Default value is &#x60;default&#x60;. 
    * @param string $workflowSid The SID of the Workflow that you would like to handle routing for the new Task. If there is only one Workflow defined for the Workspace that you are posting the new task to, this parameter is optional. 
    * @param string $attributes A URL-encoded JSON string with the attributes of the new task. This value is passed to the Workflow&#39;s &#x60;assignment_callback_url&#x60; when the Task is assigned to a Worker. For example: &#x60;{ \\\&quot;task_type\\\&quot;: \\\&quot;call\\\&quot;, \\\&quot;twilio_call_sid\\\&quot;: \\\&quot;CAxxx\\\&quot;, \\\&quot;customer_ticket_number\\\&quot;: \\\&quot;12345\\\&quot; }&#x60;. 
    * @return CreateTaskOptions Options builder
    */
    public static function create(int  $timeout=Values::NONE,int  $priority=Values::NONE,string  $taskChannel=Values::NONE,string  $workflowSid=Values::NONE,string  $attributes=Values::NONE): CreateTaskOptions {
        return new CreateTaskOptions($timeout,$priority,$taskChannel,$workflowSid,$attributes);
    }

    /**
    * @param string $ifMatch If provided, deletes this Task if (and only if) the [ETag](https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/ETag) header of the Task matches the provided value. This matches the semantics of (and is implemented with) the HTTP [If-Match header](https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/If-Match). 
    * @return DeleteTaskOptions Options builder
    */
    public static function delete(string  $ifMatch=Values::NONE): DeleteTaskOptions {
        return new DeleteTaskOptions($ifMatch);
    }


    /**
    * @param int $priority The priority value of the Tasks to read. Returns the list of all Tasks in the Workspace with the specified priority. 
    * @param string[] $assignmentStatus The &#x60;assignment_status&#x60; of the Tasks you want to read. Can be: &#x60;pending&#x60;, &#x60;reserved&#x60;, &#x60;assigned&#x60;, &#x60;canceled&#x60;, &#x60;wrapping&#x60;, or &#x60;completed&#x60;. Returns all Tasks in the Workspace with the specified &#x60;assignment_status&#x60;. 
    * @param string $workflowSid The SID of the Workflow with the Tasks to read. Returns the Tasks controlled by the Workflow identified by this SID. 
    * @param string $workflowName The friendly name of the Workflow with the Tasks to read. Returns the Tasks controlled by the Workflow identified by this friendly name. 
    * @param string $taskQueueSid The SID of the TaskQueue with the Tasks to read. Returns the Tasks waiting in the TaskQueue identified by this SID. 
    * @param string $taskQueueName The &#x60;friendly_name&#x60; of the TaskQueue with the Tasks to read. Returns the Tasks waiting in the TaskQueue identified by this friendly name. 
    * @param string $evaluateTaskAttributes The attributes of the Tasks to read. Returns the Tasks that match the attributes specified in this parameter. 
    * @param string $ordering How to order the returned Task resources. y default, Tasks are sorted by ascending DateCreated. This value is specified as: &#x60;Attribute:Order&#x60;, where &#x60;Attribute&#x60; can be either &#x60;Priority&#x60; or &#x60;DateCreated&#x60; and &#x60;Order&#x60; can be either &#x60;asc&#x60; or &#x60;desc&#x60;. For example, &#x60;Priority:desc&#x60; returns Tasks ordered in descending order of their Priority. Multiple sort orders can be specified in a comma-separated list such as &#x60;Priority:desc,DateCreated:asc&#x60;, which returns the Tasks in descending Priority order and ascending DateCreated Order. 
    * @param bool $hasAddons Whether to read Tasks with addons. If &#x60;true&#x60;, returns only Tasks with addons. If &#x60;false&#x60;, returns only Tasks without addons. 
    * @return ReadTaskOptions Options builder
    */
    public static function read(int  $priority=Values::NONE,array  $assignmentStatus=Values::ARRAY_NONE,string  $workflowSid=Values::NONE,string  $workflowName=Values::NONE,string  $taskQueueSid=Values::NONE,string  $taskQueueName=Values::NONE,string  $evaluateTaskAttributes=Values::NONE,string  $ordering=Values::NONE,bool  $hasAddons=Values::NONE): ReadTaskOptions {
        return new ReadTaskOptions($priority,$assignmentStatus,$workflowSid,$workflowName,$taskQueueSid,$taskQueueName,$evaluateTaskAttributes,$ordering,$hasAddons);
    }

    /**
    * @param string $ifMatch If provided, applies this mutation if (and only if) the [ETag](https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/ETag) header of the Task matches the provided value. This matches the semantics of (and is implemented with) the HTTP [If-Match header](https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/If-Match). 
    * @param string $attributes The JSON string that describes the custom attributes of the task. 
    * @param string $assignmentStatus  
    * @param string $reason The reason that the Task was canceled or completed. This parameter is required only if the Task is canceled or completed. Setting this value queues the task for deletion and logs the reason. 
    * @param int $priority The Task&#39;s new priority value. When supplied, the Task takes on the specified priority unless it matches a Workflow Target with a Priority set. Value can be 0 to 2^31^ (2,147,483,647). 
    * @param string $taskChannel When MultiTasking is enabled, specify the TaskChannel with the task to update. Can be the TaskChannel&#39;s SID or its &#x60;unique_name&#x60;, such as &#x60;voice&#x60;, &#x60;sms&#x60;, or &#x60;default&#x60;. 
    * @return UpdateTaskOptions Options builder
    */
    public static function update(string  $ifMatch=Values::NONE,string  $attributes=Values::NONE,string  $assignmentStatus=Values::NONE,string  $reason=Values::NONE,int  $priority=Values::NONE,string  $taskChannel=Values::NONE): UpdateTaskOptions {
        return new UpdateTaskOptions($ifMatch,$attributes,$assignmentStatus,$reason,$priority,$taskChannel);
    }

}

class CreateTaskOptions extends Options {
    /**
    * @param int $timeout The amount of time in seconds the new task can live before being assigned. Can be up to a maximum of 2 weeks (1,209,600 seconds). The default value is 24 hours (86,400 seconds). On timeout, the &#x60;task.canceled&#x60; event will fire with description &#x60;Task TTL Exceeded&#x60;.
    * @param int $priority The priority to assign the new task and override the default. When supplied, the new Task will have this priority unless it matches a Workflow Target with a Priority set. When not supplied, the new Task will have the priority of the matching Workflow Target. Value can be 0 to 2^31^ (2,147,483,647).
    * @param string $taskChannel When MultiTasking is enabled, specify the TaskChannel by passing either its &#x60;unique_name&#x60; or &#x60;sid&#x60;. Default value is &#x60;default&#x60;.
    * @param string $workflowSid The SID of the Workflow that you would like to handle routing for the new Task. If there is only one Workflow defined for the Workspace that you are posting the new task to, this parameter is optional.
    * @param string $attributes A URL-encoded JSON string with the attributes of the new task. This value is passed to the Workflow&#39;s &#x60;assignment_callback_url&#x60; when the Task is assigned to a Worker. For example: &#x60;{ \\\&quot;task_type\\\&quot;: \\\&quot;call\\\&quot;, \\\&quot;twilio_call_sid\\\&quot;: \\\&quot;CAxxx\\\&quot;, \\\&quot;customer_ticket_number\\\&quot;: \\\&quot;12345\\\&quot; }&#x60;.
    */
    public function __construct(int  $timeout=Values::NONE,int  $priority=Values::NONE,string  $taskChannel=Values::NONE,string  $workflowSid=Values::NONE,string  $attributes=Values::NONE) {
        $this->options['timeout'] = $timeout;
        $this->options['priority'] = $priority;
        $this->options['taskChannel'] = $taskChannel;
        $this->options['workflowSid'] = $workflowSid;
        $this->options['attributes'] = $attributes;
    }

    /**
    * @param int $timeout The amount of time in seconds the new task can live before being assigned. Can be up to a maximum of 2 weeks (1,209,600 seconds). The default value is 24 hours (86,400 seconds). On timeout, the &#x60;task.canceled&#x60; event will fire with description &#x60;Task TTL Exceeded&#x60;.
    * @return $this Fluent Builder
    */
    public function setTimeout(int $timeout): self {
        $this->options['timeout'] = $timeout;
        return $this;
    }
    /**
    * @param int $priority The priority to assign the new task and override the default. When supplied, the new Task will have this priority unless it matches a Workflow Target with a Priority set. When not supplied, the new Task will have the priority of the matching Workflow Target. Value can be 0 to 2^31^ (2,147,483,647).
    * @return $this Fluent Builder
    */
    public function setPriority(int $priority): self {
        $this->options['priority'] = $priority;
        return $this;
    }
    /**
    * @param string $taskChannel When MultiTasking is enabled, specify the TaskChannel by passing either its &#x60;unique_name&#x60; or &#x60;sid&#x60;. Default value is &#x60;default&#x60;.
    * @return $this Fluent Builder
    */
    public function setTaskChannel(string $taskChannel): self {
        $this->options['taskChannel'] = $taskChannel;
        return $this;
    }
    /**
    * @param string $workflowSid The SID of the Workflow that you would like to handle routing for the new Task. If there is only one Workflow defined for the Workspace that you are posting the new task to, this parameter is optional.
    * @return $this Fluent Builder
    */
    public function setWorkflowSid(string $workflowSid): self {
        $this->options['workflowSid'] = $workflowSid;
        return $this;
    }
    /**
    * @param string $attributes A URL-encoded JSON string with the attributes of the new task. This value is passed to the Workflow&#39;s &#x60;assignment_callback_url&#x60; when the Task is assigned to a Worker. For example: &#x60;{ \\\&quot;task_type\\\&quot;: \\\&quot;call\\\&quot;, \\\&quot;twilio_call_sid\\\&quot;: \\\&quot;CAxxx\\\&quot;, \\\&quot;customer_ticket_number\\\&quot;: \\\&quot;12345\\\&quot; }&#x60;.
    * @return $this Fluent Builder
    */
    public function setAttributes(string $attributes): self {
        $this->options['attributes'] = $attributes;
        return $this;
    }

    /**
    * Provide a friendly representation
    *
    * @return string Machine friendly representation
    */
    public function __toString(): string {
        $options = \http_build_query(Values::of($this->options), '', ' ');
        return '[Twilio.Taskrouter.V1.CreateTaskOptions ' . $options . ']';
    }
}

class DeleteTaskOptions extends Options {
    /**
    * @param string $ifMatch If provided, deletes this Task if (and only if) the [ETag](https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/ETag) header of the Task matches the provided value. This matches the semantics of (and is implemented with) the HTTP [If-Match header](https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/If-Match).
    */
    public function __construct(string  $ifMatch=Values::NONE) {
        $this->options['ifMatch'] = $ifMatch;
    }

    /**
    * @param string $ifMatch If provided, deletes this Task if (and only if) the [ETag](https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/ETag) header of the Task matches the provided value. This matches the semantics of (and is implemented with) the HTTP [If-Match header](https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/If-Match).
    * @return $this Fluent Builder
    */
    public function setIfMatch(string $ifMatch): self {
        $this->options['ifMatch'] = $ifMatch;
        return $this;
    }

    /**
    * Provide a friendly representation
    *
    * @return string Machine friendly representation
    */
    public function __toString(): string {
        $options = \http_build_query(Values::of($this->options), '', ' ');
        return '[Twilio.Taskrouter.V1.DeleteTaskOptions ' . $options . ']';
    }
}


class ReadTaskOptions extends Options {
    /**
    * @param int $priority The priority value of the Tasks to read. Returns the list of all Tasks in the Workspace with the specified priority.
    * @param string[] $assignmentStatus The &#x60;assignment_status&#x60; of the Tasks you want to read. Can be: &#x60;pending&#x60;, &#x60;reserved&#x60;, &#x60;assigned&#x60;, &#x60;canceled&#x60;, &#x60;wrapping&#x60;, or &#x60;completed&#x60;. Returns all Tasks in the Workspace with the specified &#x60;assignment_status&#x60;.
    * @param string $workflowSid The SID of the Workflow with the Tasks to read. Returns the Tasks controlled by the Workflow identified by this SID.
    * @param string $workflowName The friendly name of the Workflow with the Tasks to read. Returns the Tasks controlled by the Workflow identified by this friendly name.
    * @param string $taskQueueSid The SID of the TaskQueue with the Tasks to read. Returns the Tasks waiting in the TaskQueue identified by this SID.
    * @param string $taskQueueName The &#x60;friendly_name&#x60; of the TaskQueue with the Tasks to read. Returns the Tasks waiting in the TaskQueue identified by this friendly name.
    * @param string $evaluateTaskAttributes The attributes of the Tasks to read. Returns the Tasks that match the attributes specified in this parameter.
    * @param string $ordering How to order the returned Task resources. y default, Tasks are sorted by ascending DateCreated. This value is specified as: &#x60;Attribute:Order&#x60;, where &#x60;Attribute&#x60; can be either &#x60;Priority&#x60; or &#x60;DateCreated&#x60; and &#x60;Order&#x60; can be either &#x60;asc&#x60; or &#x60;desc&#x60;. For example, &#x60;Priority:desc&#x60; returns Tasks ordered in descending order of their Priority. Multiple sort orders can be specified in a comma-separated list such as &#x60;Priority:desc,DateCreated:asc&#x60;, which returns the Tasks in descending Priority order and ascending DateCreated Order.
    * @param bool $hasAddons Whether to read Tasks with addons. If &#x60;true&#x60;, returns only Tasks with addons. If &#x60;false&#x60;, returns only Tasks without addons.
    */
    public function __construct(int  $priority=Values::NONE,array  $assignmentStatus=Values::ARRAY_NONE,string  $workflowSid=Values::NONE,string  $workflowName=Values::NONE,string  $taskQueueSid=Values::NONE,string  $taskQueueName=Values::NONE,string  $evaluateTaskAttributes=Values::NONE,string  $ordering=Values::NONE,bool  $hasAddons=Values::NONE) {
        $this->options['priority'] = $priority;
        $this->options['assignmentStatus'] = $assignmentStatus;
        $this->options['workflowSid'] = $workflowSid;
        $this->options['workflowName'] = $workflowName;
        $this->options['taskQueueSid'] = $taskQueueSid;
        $this->options['taskQueueName'] = $taskQueueName;
        $this->options['evaluateTaskAttributes'] = $evaluateTaskAttributes;
        $this->options['ordering'] = $ordering;
        $this->options['hasAddons'] = $hasAddons;
    }

    /**
    * @param int $priority The priority value of the Tasks to read. Returns the list of all Tasks in the Workspace with the specified priority.
    * @return $this Fluent Builder
    */
    public function setPriority(int $priority): self {
        $this->options['priority'] = $priority;
        return $this;
    }
    /**
    * @param string[] $assignmentStatus The &#x60;assignment_status&#x60; of the Tasks you want to read. Can be: &#x60;pending&#x60;, &#x60;reserved&#x60;, &#x60;assigned&#x60;, &#x60;canceled&#x60;, &#x60;wrapping&#x60;, or &#x60;completed&#x60;. Returns all Tasks in the Workspace with the specified &#x60;assignment_status&#x60;.
    * @return $this Fluent Builder
    */
    public function setAssignmentStatus(array $assignmentStatus): self {
        $this->options['assignmentStatus'] = $assignmentStatus;
        return $this;
    }
    /**
    * @param string $workflowSid The SID of the Workflow with the Tasks to read. Returns the Tasks controlled by the Workflow identified by this SID.
    * @return $this Fluent Builder
    */
    public function setWorkflowSid(string $workflowSid): self {
        $this->options['workflowSid'] = $workflowSid;
        return $this;
    }
    /**
    * @param string $workflowName The friendly name of the Workflow with the Tasks to read. Returns the Tasks controlled by the Workflow identified by this friendly name.
    * @return $this Fluent Builder
    */
    public function setWorkflowName(string $workflowName): self {
        $this->options['workflowName'] = $workflowName;
        return $this;
    }
    /**
    * @param string $taskQueueSid The SID of the TaskQueue with the Tasks to read. Returns the Tasks waiting in the TaskQueue identified by this SID.
    * @return $this Fluent Builder
    */
    public function setTaskQueueSid(string $taskQueueSid): self {
        $this->options['taskQueueSid'] = $taskQueueSid;
        return $this;
    }
    /**
    * @param string $taskQueueName The &#x60;friendly_name&#x60; of the TaskQueue with the Tasks to read. Returns the Tasks waiting in the TaskQueue identified by this friendly name.
    * @return $this Fluent Builder
    */
    public function setTaskQueueName(string $taskQueueName): self {
        $this->options['taskQueueName'] = $taskQueueName;
        return $this;
    }
    /**
    * @param string $evaluateTaskAttributes The attributes of the Tasks to read. Returns the Tasks that match the attributes specified in this parameter.
    * @return $this Fluent Builder
    */
    public function setEvaluateTaskAttributes(string $evaluateTaskAttributes): self {
        $this->options['evaluateTaskAttributes'] = $evaluateTaskAttributes;
        return $this;
    }
    /**
    * @param string $ordering How to order the returned Task resources. y default, Tasks are sorted by ascending DateCreated. This value is specified as: &#x60;Attribute:Order&#x60;, where &#x60;Attribute&#x60; can be either &#x60;Priority&#x60; or &#x60;DateCreated&#x60; and &#x60;Order&#x60; can be either &#x60;asc&#x60; or &#x60;desc&#x60;. For example, &#x60;Priority:desc&#x60; returns Tasks ordered in descending order of their Priority. Multiple sort orders can be specified in a comma-separated list such as &#x60;Priority:desc,DateCreated:asc&#x60;, which returns the Tasks in descending Priority order and ascending DateCreated Order.
    * @return $this Fluent Builder
    */
    public function setOrdering(string $ordering): self {
        $this->options['ordering'] = $ordering;
        return $this;
    }
    /**
    * @param bool $hasAddons Whether to read Tasks with addons. If &#x60;true&#x60;, returns only Tasks with addons. If &#x60;false&#x60;, returns only Tasks without addons.
    * @return $this Fluent Builder
    */
    public function setHasAddons(bool $hasAddons): self {
        $this->options['hasAddons'] = $hasAddons;
        return $this;
    }

    /**
    * Provide a friendly representation
    *
    * @return string Machine friendly representation
    */
    public function __toString(): string {
        $options = \http_build_query(Values::of($this->options), '', ' ');
        return '[Twilio.Taskrouter.V1.ReadTaskOptions ' . $options . ']';
    }
}

class UpdateTaskOptions extends Options {
    /**
    * @param string $ifMatch If provided, applies this mutation if (and only if) the [ETag](https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/ETag) header of the Task matches the provided value. This matches the semantics of (and is implemented with) the HTTP [If-Match header](https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/If-Match).
    * @param string $attributes The JSON string that describes the custom attributes of the task.
    * @param string $assignmentStatus 
    * @param string $reason The reason that the Task was canceled or completed. This parameter is required only if the Task is canceled or completed. Setting this value queues the task for deletion and logs the reason.
    * @param int $priority The Task&#39;s new priority value. When supplied, the Task takes on the specified priority unless it matches a Workflow Target with a Priority set. Value can be 0 to 2^31^ (2,147,483,647).
    * @param string $taskChannel When MultiTasking is enabled, specify the TaskChannel with the task to update. Can be the TaskChannel&#39;s SID or its &#x60;unique_name&#x60;, such as &#x60;voice&#x60;, &#x60;sms&#x60;, or &#x60;default&#x60;.
    */
    public function __construct(string  $ifMatch=Values::NONE,string  $attributes=Values::NONE,string  $assignmentStatus=Values::NONE,string  $reason=Values::NONE,int  $priority=Values::NONE,string  $taskChannel=Values::NONE) {
        $this->options['ifMatch'] = $ifMatch;
        $this->options['attributes'] = $attributes;
        $this->options['assignmentStatus'] = $assignmentStatus;
        $this->options['reason'] = $reason;
        $this->options['priority'] = $priority;
        $this->options['taskChannel'] = $taskChannel;
    }

    /**
    * @param string $ifMatch If provided, applies this mutation if (and only if) the [ETag](https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/ETag) header of the Task matches the provided value. This matches the semantics of (and is implemented with) the HTTP [If-Match header](https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/If-Match).
    * @return $this Fluent Builder
    */
    public function setIfMatch(string $ifMatch): self {
        $this->options['ifMatch'] = $ifMatch;
        return $this;
    }
    /**
    * @param string $attributes The JSON string that describes the custom attributes of the task.
    * @return $this Fluent Builder
    */
    public function setAttributes(string $attributes): self {
        $this->options['attributes'] = $attributes;
        return $this;
    }
    /**
    * @param string $assignmentStatus 
    * @return $this Fluent Builder
    */
    public function setAssignmentStatus(string $assignmentStatus): self {
        $this->options['assignmentStatus'] = $assignmentStatus;
        return $this;
    }
    /**
    * @param string $reason The reason that the Task was canceled or completed. This parameter is required only if the Task is canceled or completed. Setting this value queues the task for deletion and logs the reason.
    * @return $this Fluent Builder
    */
    public function setReason(string $reason): self {
        $this->options['reason'] = $reason;
        return $this;
    }
    /**
    * @param int $priority The Task&#39;s new priority value. When supplied, the Task takes on the specified priority unless it matches a Workflow Target with a Priority set. Value can be 0 to 2^31^ (2,147,483,647).
    * @return $this Fluent Builder
    */
    public function setPriority(int $priority): self {
        $this->options['priority'] = $priority;
        return $this;
    }
    /**
    * @param string $taskChannel When MultiTasking is enabled, specify the TaskChannel with the task to update. Can be the TaskChannel&#39;s SID or its &#x60;unique_name&#x60;, such as &#x60;voice&#x60;, &#x60;sms&#x60;, or &#x60;default&#x60;.
    * @return $this Fluent Builder
    */
    public function setTaskChannel(string $taskChannel): self {
        $this->options['taskChannel'] = $taskChannel;
        return $this;
    }

    /**
    * Provide a friendly representation
    *
    * @return string Machine friendly representation
    */
    public function __toString(): string {
        $options = \http_build_query(Values::of($this->options), '', ' ');
        return '[Twilio.Taskrouter.V1.UpdateTaskOptions ' . $options . ']';
    }
}

