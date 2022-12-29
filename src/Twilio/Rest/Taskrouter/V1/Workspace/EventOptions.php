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


abstract class EventOptions {

    /**
    * @param \DateTime $endDate Only include Events that occurred on or before this date, specified in GMT as an [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) date-time. 
    * @param string $eventType The type of Events to read. Returns only Events of the type specified. 
    * @param int $minutes The period of events to read in minutes. Returns only Events that occurred since this many minutes in the past. The default is &#x60;15&#x60; minutes. Task Attributes for Events occuring more 43,200 minutes ago will be redacted. 
    * @param string $reservationSid The SID of the Reservation with the Events to read. Returns only Events that pertain to the specified Reservation. 
    * @param \DateTime $startDate Only include Events from on or after this date and time, specified in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format. Task Attributes for Events older than 30 days will be redacted. 
    * @param string $taskQueueSid The SID of the TaskQueue with the Events to read. Returns only the Events that pertain to the specified TaskQueue. 
    * @param string $taskSid The SID of the Task with the Events to read. Returns only the Events that pertain to the specified Task. 
    * @param string $workerSid The SID of the Worker with the Events to read. Returns only the Events that pertain to the specified Worker. 
    * @param string $workflowSid The SID of the Workflow with the Events to read. Returns only the Events that pertain to the specified Workflow. 
    * @param string $taskChannel The TaskChannel with the Events to read. Returns only the Events that pertain to the specified TaskChannel. 
    * @param string $sid The SID of the Event resource to read. 
    * @return ReadEventOptions Options builder
    */
    public static function read(\DateTime  $endDate=Values::NONE,string  $eventType=Values::NONE,int  $minutes=Values::NONE,string  $reservationSid=Values::NONE,\DateTime  $startDate=Values::NONE,string  $taskQueueSid=Values::NONE,string  $taskSid=Values::NONE,string  $workerSid=Values::NONE,string  $workflowSid=Values::NONE,string  $taskChannel=Values::NONE,string  $sid=Values::NONE): ReadEventOptions {
        return new ReadEventOptions($endDate,$eventType,$minutes,$reservationSid,$startDate,$taskQueueSid,$taskSid,$workerSid,$workflowSid,$taskChannel,$sid);
    }

}


class ReadEventOptions extends Options {
    /**
    * @param \DateTime $endDate Only include Events that occurred on or before this date, specified in GMT as an [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) date-time.
    * @param string $eventType The type of Events to read. Returns only Events of the type specified.
    * @param int $minutes The period of events to read in minutes. Returns only Events that occurred since this many minutes in the past. The default is &#x60;15&#x60; minutes. Task Attributes for Events occuring more 43,200 minutes ago will be redacted.
    * @param string $reservationSid The SID of the Reservation with the Events to read. Returns only Events that pertain to the specified Reservation.
    * @param \DateTime $startDate Only include Events from on or after this date and time, specified in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format. Task Attributes for Events older than 30 days will be redacted.
    * @param string $taskQueueSid The SID of the TaskQueue with the Events to read. Returns only the Events that pertain to the specified TaskQueue.
    * @param string $taskSid The SID of the Task with the Events to read. Returns only the Events that pertain to the specified Task.
    * @param string $workerSid The SID of the Worker with the Events to read. Returns only the Events that pertain to the specified Worker.
    * @param string $workflowSid The SID of the Workflow with the Events to read. Returns only the Events that pertain to the specified Workflow.
    * @param string $taskChannel The TaskChannel with the Events to read. Returns only the Events that pertain to the specified TaskChannel.
    * @param string $sid The SID of the Event resource to read.
    */
    public function __construct(\DateTime  $endDate=Values::NONE,string  $eventType=Values::NONE,int  $minutes=Values::NONE,string  $reservationSid=Values::NONE,\DateTime  $startDate=Values::NONE,string  $taskQueueSid=Values::NONE,string  $taskSid=Values::NONE,string  $workerSid=Values::NONE,string  $workflowSid=Values::NONE,string  $taskChannel=Values::NONE,string  $sid=Values::NONE) {
        $this->options['endDate'] = $endDate;
        $this->options['eventType'] = $eventType;
        $this->options['minutes'] = $minutes;
        $this->options['reservationSid'] = $reservationSid;
        $this->options['startDate'] = $startDate;
        $this->options['taskQueueSid'] = $taskQueueSid;
        $this->options['taskSid'] = $taskSid;
        $this->options['workerSid'] = $workerSid;
        $this->options['workflowSid'] = $workflowSid;
        $this->options['taskChannel'] = $taskChannel;
        $this->options['sid'] = $sid;
    }

    /**
    * @param \DateTime $endDate Only include Events that occurred on or before this date, specified in GMT as an [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) date-time.
    * @return $this Fluent Builder
    */
    public function setEndDate(\DateTime $endDate): self {
        $this->options['endDate'] = $endDate;
        return $this;
    }
    /**
    * @param string $eventType The type of Events to read. Returns only Events of the type specified.
    * @return $this Fluent Builder
    */
    public function setEventType(string $eventType): self {
        $this->options['eventType'] = $eventType;
        return $this;
    }
    /**
    * @param int $minutes The period of events to read in minutes. Returns only Events that occurred since this many minutes in the past. The default is &#x60;15&#x60; minutes. Task Attributes for Events occuring more 43,200 minutes ago will be redacted.
    * @return $this Fluent Builder
    */
    public function setMinutes(int $minutes): self {
        $this->options['minutes'] = $minutes;
        return $this;
    }
    /**
    * @param string $reservationSid The SID of the Reservation with the Events to read. Returns only Events that pertain to the specified Reservation.
    * @return $this Fluent Builder
    */
    public function setReservationSid(string $reservationSid): self {
        $this->options['reservationSid'] = $reservationSid;
        return $this;
    }
    /**
    * @param \DateTime $startDate Only include Events from on or after this date and time, specified in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format. Task Attributes for Events older than 30 days will be redacted.
    * @return $this Fluent Builder
    */
    public function setStartDate(\DateTime $startDate): self {
        $this->options['startDate'] = $startDate;
        return $this;
    }
    /**
    * @param string $taskQueueSid The SID of the TaskQueue with the Events to read. Returns only the Events that pertain to the specified TaskQueue.
    * @return $this Fluent Builder
    */
    public function setTaskQueueSid(string $taskQueueSid): self {
        $this->options['taskQueueSid'] = $taskQueueSid;
        return $this;
    }
    /**
    * @param string $taskSid The SID of the Task with the Events to read. Returns only the Events that pertain to the specified Task.
    * @return $this Fluent Builder
    */
    public function setTaskSid(string $taskSid): self {
        $this->options['taskSid'] = $taskSid;
        return $this;
    }
    /**
    * @param string $workerSid The SID of the Worker with the Events to read. Returns only the Events that pertain to the specified Worker.
    * @return $this Fluent Builder
    */
    public function setWorkerSid(string $workerSid): self {
        $this->options['workerSid'] = $workerSid;
        return $this;
    }
    /**
    * @param string $workflowSid The SID of the Workflow with the Events to read. Returns only the Events that pertain to the specified Workflow.
    * @return $this Fluent Builder
    */
    public function setWorkflowSid(string $workflowSid): self {
        $this->options['workflowSid'] = $workflowSid;
        return $this;
    }
    /**
    * @param string $taskChannel The TaskChannel with the Events to read. Returns only the Events that pertain to the specified TaskChannel.
    * @return $this Fluent Builder
    */
    public function setTaskChannel(string $taskChannel): self {
        $this->options['taskChannel'] = $taskChannel;
        return $this;
    }
    /**
    * @param string $sid The SID of the Event resource to read.
    * @return $this Fluent Builder
    */
    public function setSid(string $sid): self {
        $this->options['sid'] = $sid;
        return $this;
    }

    /**
    * Provide a friendly representation
    *
    * @return string Machine friendly representation
    */
    public function __toString(): string {
        $options = \http_build_query(Values::of($this->options), '', ' ');
        return '[Twilio.Taskrouter.V1.ReadEventOptions ' . $options . ']';
    }
}

