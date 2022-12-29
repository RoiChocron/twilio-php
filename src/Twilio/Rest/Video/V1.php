<?php
/*
 * This code was generated by
 * ___ _ _ _ _ _    _ ____    ____ ____ _    ____ ____ _  _ ____ ____ ____ ___ __   __
 *  |  | | | | |    | |  | __ |  | |__| | __ | __ |___ |\ | |___ |__/ |__|  | |  | |__/
 *  |  |_|_| | |___ | |__|    |__| |  | |    |__] |___ | \| |___ |  \ |  |  | |__| |  \
 *
 * Twilio - Video
 * This is the public Twilio REST API.
 *
 * NOTE: This class is auto generated by OpenAPI Generator.
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Twilio\Rest\Video;

use Twilio\Domain;
use Twilio\Exceptions\TwilioException;
use Twilio\InstanceContext;
use Twilio\Rest\Video\V1\CompositionList;
use Twilio\Rest\Video\V1\CompositionHookList;
use Twilio\Rest\Video\V1\CompositionSettingsList;
use Twilio\Rest\Video\V1\RecordingList;
use Twilio\Rest\Video\V1\RecordingSettingsList;
use Twilio\Rest\Video\V1\RoomList;
use Twilio\Version;

/**
 * @property CompositionList $compositions
 * @property CompositionHookList $compositionHooks
 * @property CompositionSettingsList $compositionSettings
 * @property RecordingList $recordings
 * @property RecordingSettingsList $recordingSettings
 * @property RoomList $rooms
 * @method \Twilio\Rest\Video\V1\CompositionContext compositions(string $sid)
 * @method \Twilio\Rest\Video\V1\CompositionHookContext compositionHooks(string $sid)
 * @method \Twilio\Rest\Video\V1\RecordingContext recordings(string $sid)
 * @method \Twilio\Rest\Video\V1\RoomContext rooms(string $sid)
 */

class V1 extends Version {
    protected $_compositions;
    protected $_compositionHooks;
    protected $_compositionSettings;
    protected $_recordings;
    protected $_recordingSettings;
    protected $_rooms;

    /**
     * Construct the V1 version of Video
     *
     * @param Domain $domain Domain that contains the version
     */
    public function __construct(Domain $domain) {
        parent::__construct($domain);
        $this->version = 'v1';
    }

    protected function getCompositions(): CompositionList {
        if (!$this->_compositions) {
            $this->_compositions = new CompositionList($this);
        }
        return $this->_compositions;
    }

    protected function getCompositionHooks(): CompositionHookList {
        if (!$this->_compositionHooks) {
            $this->_compositionHooks = new CompositionHookList($this);
        }
        return $this->_compositionHooks;
    }

    protected function getCompositionSettings(): CompositionSettingsList {
        if (!$this->_compositionSettings) {
            $this->_compositionSettings = new CompositionSettingsList($this);
        }
        return $this->_compositionSettings;
    }

    protected function getRecordings(): RecordingList {
        if (!$this->_recordings) {
            $this->_recordings = new RecordingList($this);
        }
        return $this->_recordings;
    }

    protected function getRecordingSettings(): RecordingSettingsList {
        if (!$this->_recordingSettings) {
            $this->_recordingSettings = new RecordingSettingsList($this);
        }
        return $this->_recordingSettings;
    }

    protected function getRooms(): RoomList {
        if (!$this->_rooms) {
            $this->_rooms = new RoomList($this);
        }
        return $this->_rooms;
    }

    /**
     * Magic getter to lazy load root resources
     *
     * @param string $name Resource to return
     * @return \Twilio\ListResource The requested resource
     * @throws TwilioException For unknown resource
     */
    public function __get(string $name) {
        $method = 'get' . \ucfirst($name);
        if (\method_exists($this, $method)) {
            return $this->$method();
        }

        throw new TwilioException('Unknown resource ' . $name);
    }

    /**
     * Magic caller to get resource contexts
     *
     * @param string $name Resource to return
     * @param array $arguments Context parameters
     * @return InstanceContext The requested resource context
     * @throws TwilioException For unknown resource
     */
    public function __call(string $name, array $arguments): InstanceContext {
        $property = $this->$name;
        if (\method_exists($property, 'getContext')) {
            return \call_user_func_array(array($property, 'getContext'), $arguments);
        }

        throw new TwilioException('Resource does not have a context');
    }

    /**
     * Provide a friendly representation
     *
     * @return string Machine friendly representation
     */
    public function __toString(): string {
        return '[Twilio.Video.V1]';
    }
}