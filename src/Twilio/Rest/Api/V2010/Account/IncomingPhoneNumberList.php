<?php

/*
 * This code was generated by
 * ___ _ _ _ _ _    _ ____    ____ ____ _    ____ ____ _  _ ____ ____ ____ ___ __   __
 *  |  | | | | |    | |  | __ |  | |__| | __ | __ |___ |\ | |___ |__/ |__|  | |  | |__/
 *  |  |_|_| | |___ | |__|    |__| |  | |    |__] |___ | \| |___ |  \ |  |  | |__| |  \
 *
 * Twilio - Api
 * This is the public Twilio REST API.
 *
 * NOTE: This class is auto generated by OpenAPI Generator.
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Twilio\Rest\Api\V2010\Account;

use Twilio\Exceptions\TwilioException;
use Twilio\ListResource;
use Twilio\Options;
use Twilio\Stream;
use Twilio\Values;
use Twilio\Version;
use Twilio\InstanceContext;
use Twilio\Serialize;
use Twilio\Rest\Api\V2010\Account\IncomingPhoneNumber\TollFreeList;
use Twilio\Rest\Api\V2010\Account\IncomingPhoneNumber\LocalList;
use Twilio\Rest\Api\V2010\Account\IncomingPhoneNumber\MobileList;


/**
 * @property TollFreeList $tollFree
 * @property LocalList $local
 * @property MobileList $mobile
 */

class IncomingPhoneNumberList extends ListResource {
    protected $_tollFree = null;
    protected $_local = null;
    protected $_mobile = null;

    /**
     * Construct the IncomingPhoneNumberList
     *
     * @param Version $version Version that contains the resource
     * @param string $accountSid The SID of the [Account](https://www.twilio.com/docs/iam/api/account) that will create the resource.
     */
    public function __construct(Version $version, string $accountSid ) {
        parent::__construct($version);

        // Path Solution
        $this->solution = ['accountSid' => $accountSid, ];

        $this->uri = '/Accounts/' . \rawurlencode($accountSid) . '/IncomingPhoneNumbers.json';
    }

    /**
     * Create the IncomingPhoneNumberInstance
     *
     * @param array|Options $options Optional Arguments
     * @return IncomingPhoneNumberInstance Created IncomingPhoneNumberInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function create(array $options = []): IncomingPhoneNumberInstance {
        $options = new Values($options);

        $data = Values::of([
            'ApiVersion' => $options['apiVersion'],
            'FriendlyName' => $options['friendlyName'],
            'SmsApplicationSid' => $options['smsApplicationSid'],
            'SmsFallbackMethod' => $options['smsFallbackMethod'],
            'SmsFallbackUrl' => $options['smsFallbackUrl'],
            'SmsMethod' => $options['smsMethod'],
            'SmsUrl' => $options['smsUrl'],
            'StatusCallback' => $options['statusCallback'],
            'StatusCallbackMethod' => $options['statusCallbackMethod'],
            'VoiceApplicationSid' => $options['voiceApplicationSid'],
            'VoiceCallerIdLookup' => Serialize::booleanToString($options['voiceCallerIdLookup']),
            'VoiceFallbackMethod' => $options['voiceFallbackMethod'],
            'VoiceFallbackUrl' => $options['voiceFallbackUrl'],
            'VoiceMethod' => $options['voiceMethod'],
            'VoiceUrl' => $options['voiceUrl'],
            'EmergencyStatus' => $options['emergencyStatus'],
            'EmergencyAddressSid' => $options['emergencyAddressSid'],
            'TrunkSid' => $options['trunkSid'],
            'IdentitySid' => $options['identitySid'],
            'AddressSid' => $options['addressSid'],
            'VoiceReceiveMode' => $options['voiceReceiveMode'],
            'BundleSid' => $options['bundleSid'],
            'PhoneNumber' => $options['phoneNumber'],
            'AreaCode' => $options['areaCode'],
        ]);

        $payload = $this->version->create('POST', $this->uri, [], $data);

        return new IncomingPhoneNumberInstance(
            $this->version,
            $payload
            , $this->solution['accountSid']
        );
    }

    /**
    * Reads IncomingPhoneNumberInstance records from the API as a list.
    * Unlike stream(), this operation is eager and will load `limit` records into
    * memory before returning.
    *
    * @param array|Options $options Optional Arguments
    * @param int $limit Upper limit for the number of records to return. read()
    *                   guarantees to never return more than limit.  Default is no
    *                   limit
    * @param mixed $pageSize Number of records to fetch per request, when not set
    *                        will use the default value of 50 records.  If no
    *                        page_size is defined but a limit is defined, read()
    *                        will attempt to read the limit with the most
    *                        efficient page size, i.e. min(limit, 1000)
    * @return IncomingPhoneNumberInstance[] Array of results
    */

    public function read(array $options = [], int $limit = null, $pageSize = null): array {
        return \iterator_to_array($this->stream($options, $limit, $pageSize), false);
    }

    /**
    * Streams IncomingPhoneNumberInstance records from the API as a generator stream.
    * This operation lazily loads records as efficiently as possible until the
    * limit
    * is reached.
    * The results are returned as a generator, so this operation is memory
    * efficient.
    *
    * @param int $limit Upper limit for the number of records to return. stream()
    *                   guarantees to never return more than limit.  Default is no
    *                   limit
    * @param mixed $pageSize Number of records to fetch per request, when not set
    *                        will use the default value of 50 records.  If no
    *                        page_size is defined but a limit is defined, stream()
    *                        will attempt to read the limit with the most
    *                        efficient page size, i.e. min(limit, 1000)
    * @return Stream stream of results
    */

    public function stream(array $options = [], int $limit = null, $pageSize = null): Stream {
        $limits = $this->version->readLimits($limit, $pageSize);

        $page = $this->page( $options , $limits['pageSize']);

        return $this->version->stream($page, $limits['limit'], $limits['pageLimit']);
    }

    /**
    * Retrieve a single page of IncomingPhoneNumberInstance records from the API.
    * Request is executed immediately
    *
    * @param mixed $pageSize Number of records to return, defaults to 50
    * @param string $pageToken PageToken provided by the API
    * @param mixed $pageNumber Page Number, this value is simply for client state
    * @return IncomingPhoneNumberPage Page of IncomingPhoneNumberInstance
    */

    public function page(array $options = [],  $pageSize = Values::NONE, string $pageToken = Values::NONE, $pageNumber = Values::NONE): IncomingPhoneNumberPage {
        $options = new Values($options);

        $params = Values::of([
            'Beta' => Serialize::booleanToString($options['beta']),
            'FriendlyName' => $options['friendlyName'],
            'PhoneNumber' => $options['phoneNumber'],
            'Origin' => $options['origin'],
            'PageToken' => $pageToken,
            'Page' => $pageNumber,
            'PageSize' => $pageSize,
        ]);

        $response = $this->version->page('GET', $this->uri, $params);

        return new IncomingPhoneNumberPage($this->version, $response, $this->solution);
    }

    /**
    * Retrieve a specific page of IncomingPhoneNumberInstance records from the API.
    * Request is executed immediately
    *
    * @param string $targetUrl API-generated URL for the requested results page
    * @return IncomingPhoneNumberPage Page of IncomingPhoneNumberInstance
    */

    public function getPage(string $targetUrl): IncomingPhoneNumberPage {
        $response = $this->version->getDomain()->getClient()->request(
            'GET',
            $targetUrl
        );

        return new IncomingPhoneNumberPage($this->version, $response, $this->solution);
    }


    /**
     * Constructs a IncomingPhoneNumberContext
     *
     * @param string $sid The Twilio-provided string that uniquely identifies the IncomingPhoneNumber resource to delete.
     */
    public function getContext(string $sid): IncomingPhoneNumberContext {
        return new IncomingPhoneNumberContext($this->version, $this->solution['accountSid'], $sid);
    }

    /**
     * Access the tollFree
     */
    protected function getTollFree(): TollFreeList {
        if (!$this->_tollFree) {
            $this->_tollFree = new TollFreeList(
                $this->version
                , $this->solution['accountSid']
            );
        }

        return $this->_tollFree;
    }

    /**
     * Access the local
     */
    protected function getLocal(): LocalList {
        if (!$this->_local) {
            $this->_local = new LocalList(
                $this->version
                , $this->solution['accountSid']
            );
        }

        return $this->_local;
    }

    /**
     * Access the mobile
     */
    protected function getMobile(): MobileList {
        if (!$this->_mobile) {
            $this->_mobile = new MobileList(
                $this->version
                , $this->solution['accountSid']
            );
        }

        return $this->_mobile;
    }

    /**
     * Magic getter to lazy load subresources
     *
     * @param string $name Subresource to return
     * @return ListResource The requested subresource
     * @throws TwilioException For unknown subresources
     */
    public function __get(string $name): ListResource {
        if (\property_exists($this, '_' . $name)) {
            $method = 'get' . \ucfirst($name);
            return $this->$method();
        }

        throw new TwilioException('Unknown subresource ' . $name);
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
        return '[Twilio.Api.V2010.IncomingPhoneNumberList]';
    }
}
