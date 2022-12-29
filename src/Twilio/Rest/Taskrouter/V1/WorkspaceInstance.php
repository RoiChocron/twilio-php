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

use Twilio\Exceptions\TwilioException;
use Twilio\InstanceResource;
use Twilio\Options;
use Twilio\Values;
use Twilio\Version;
use Twilio\Deserialize;
use Twilio\Rest\Taskrouter\V1\Workspace\TaskQueueList;
use Twilio\Rest\Taskrouter\V1\Workspace\EventList;
use Twilio\Rest\Taskrouter\V1\Workspace\TaskChannelList;
use Twilio\Rest\Taskrouter\V1\Workspace\ActivityList;
use Twilio\Rest\Taskrouter\V1\Workspace\WorkerList;
use Twilio\Rest\Taskrouter\V1\Workspace\WorkflowList;
use Twilio\Rest\Taskrouter\V1\Workspace\TaskList;
use Twilio\Rest\Taskrouter\V1\Workspace\WorkspaceCumulativeStatisticsList;
use Twilio\Rest\Taskrouter\V1\Workspace\WorkspaceRealTimeStatisticsList;
use Twilio\Rest\Taskrouter\V1\Workspace\WorkspaceStatisticsList;


/**
 * @property string $accountSid
 * @property \DateTime $dateCreated
 * @property \DateTime $dateUpdated
 * @property string $defaultActivityName
 * @property string $defaultActivitySid
 * @property string $eventCallbackUrl
 * @property string $eventsFilter
 * @property string $friendlyName
 * @property bool $multiTaskEnabled
 * @property string $sid
 * @property string $timeoutActivityName
 * @property string $timeoutActivitySid
 * @property string $prioritizeQueueOrder
 * @property string $url
 * @property array $links
 */

class WorkspaceInstance extends InstanceResource {
    protected $_taskQueues;
    protected $_events;
    protected $_taskChannels;
    protected $_activities;
    protected $_workers;
    protected $_workflows;
    protected $_tasks;
    protected $_cumulativeStatistics;
    protected $_realTimeStatistics;
    protected $_statistics;

    /**
     * Initialize the WorkspaceInstance
     *
     * @param Version $version Version that contains the resource
     * @param mixed[] $payload The response payload
     * @param string $sid The SID of the Workspace resource to delete.
     */
    public function __construct(Version $version, array $payload, string $sid = null) {
        parent::__construct($version);

        // Marshaled Properties
        $this->properties = [
            'accountSid' => Values::array_get($payload, 'account_sid'),
            'dateCreated' => Deserialize::dateTime(Values::array_get($payload, 'date_created')),
            'dateUpdated' => Deserialize::dateTime(Values::array_get($payload, 'date_updated')),
            'defaultActivityName' => Values::array_get($payload, 'default_activity_name'),
            'defaultActivitySid' => Values::array_get($payload, 'default_activity_sid'),
            'eventCallbackUrl' => Values::array_get($payload, 'event_callback_url'),
            'eventsFilter' => Values::array_get($payload, 'events_filter'),
            'friendlyName' => Values::array_get($payload, 'friendly_name'),
            'multiTaskEnabled' => Values::array_get($payload, 'multi_task_enabled'),
            'sid' => Values::array_get($payload, 'sid'),
            'timeoutActivityName' => Values::array_get($payload, 'timeout_activity_name'),
            'timeoutActivitySid' => Values::array_get($payload, 'timeout_activity_sid'),
            'prioritizeQueueOrder' => Values::array_get($payload, 'prioritize_queue_order'),
            'url' => Values::array_get($payload, 'url'),
            'links' => Values::array_get($payload, 'links'),
        ];

        $this->solution = ['sid' => $sid ?: $this->properties['sid'], ];
    }

    /**
     * Generate an instance context for the instance, the context is capable of
     * performing various actions.  All instance actions are proxied to the context
     *
     * @return WorkspaceContext Context for this WorkspaceInstance
     */
    protected function proxy(): WorkspaceContext {
        if (!$this->context) {
            $this->context = new WorkspaceContext(
                $this->version,
                $this->solution['sid']
            );
        }

        return $this->context;
    }

    /**
     * Delete the WorkspaceInstance
     *
     * @return bool True if delete succeeds, false otherwise
     * @throws TwilioException When an HTTP error occurs.
     */
    public function delete(): bool {
        return $this->proxy()->delete();
    }

    /**
     * Fetch the WorkspaceInstance
     *
     * @return WorkspaceInstance Fetched WorkspaceInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function fetch(): WorkspaceInstance {
        return $this->proxy()->fetch();
    }

    /**
     * Update the WorkspaceInstance
     *
     * @param array|Options $options Optional Arguments
     * @return WorkspaceInstance Updated WorkspaceInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function update(array $options = []): WorkspaceInstance {
        return $this->proxy()->update($options);
    }

    /**
     * Access the taskQueues
     */
    protected function getTaskQueues(): TaskQueueList {
        return $this->proxy()->taskQueues;
    }

    /**
     * Access the events
     */
    protected function getEvents(): EventList {
        return $this->proxy()->events;
    }

    /**
     * Access the taskChannels
     */
    protected function getTaskChannels(): TaskChannelList {
        return $this->proxy()->taskChannels;
    }

    /**
     * Access the activities
     */
    protected function getActivities(): ActivityList {
        return $this->proxy()->activities;
    }

    /**
     * Access the workers
     */
    protected function getWorkers(): WorkerList {
        return $this->proxy()->workers;
    }

    /**
     * Access the workflows
     */
    protected function getWorkflows(): WorkflowList {
        return $this->proxy()->workflows;
    }

    /**
     * Access the tasks
     */
    protected function getTasks(): TaskList {
        return $this->proxy()->tasks;
    }

    /**
     * Access the cumulativeStatistics
     */
    protected function getCumulativeStatistics(): WorkspaceCumulativeStatisticsList {
        return $this->proxy()->cumulativeStatistics;
    }

    /**
     * Access the realTimeStatistics
     */
    protected function getRealTimeStatistics(): WorkspaceRealTimeStatisticsList {
        return $this->proxy()->realTimeStatistics;
    }

    /**
     * Access the statistics
     */
    protected function getStatistics(): WorkspaceStatisticsList {
        return $this->proxy()->statistics;
    }

    /**
     * Magic getter to access properties
     *
     * @param string $name Property to access
     * @return mixed The requested property
     * @throws TwilioException For unknown properties
     */
    public function __get(string $name) {
        if (\array_key_exists($name, $this->properties)) {
            return $this->properties[$name];
        }

        if (\property_exists($this, '_' . $name)) {
            $method = 'get' . \ucfirst($name);
            return $this->$method();
        }

        throw new TwilioException('Unknown property: ' . $name);
    }

    /**
     * Provide a friendly representation
     *
     * @return string Machine friendly representation
     */
    public function __toString(): string {
        $context = [];
        foreach ($this->solution as $key => $value) {
            $context[] = "$key=$value";
        }
        return '[Twilio.Taskrouter.V1.WorkspaceInstance ' . \implode(' ', $context) . ']';
    }
}

