<?php

/*
 * This code was generated by
 * ___ _ _ _ _ _    _ ____    ____ ____ _    ____ ____ _  _ ____ ____ ____ ___ __   __
 *  |  | | | | |    | |  | __ |  | |__| | __ | __ |___ |\ | |___ |__/ |__|  | |  | |__/
 *  |  |_|_| | |___ | |__|    |__| |  | |    |__] |___ | \| |___ |  \ |  |  | |__| |  \
 *
 * Twilio - Trusthub
 * This is the public Twilio REST API.
 *
 * NOTE: This class is auto generated by OpenAPI Generator.
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Twilio\Rest\Trusthub\V1\CustomerProfiles;

use Twilio\Exceptions\TwilioException;
use Twilio\ListResource;
use Twilio\Options;
use Twilio\Stream;
use Twilio\Values;
use Twilio\Version;



class CustomerProfilesChannelEndpointAssignmentList extends ListResource {
    /**
     * Construct the CustomerProfilesChannelEndpointAssignmentList
     *
     * @param Version $version Version that contains the resource
     * @param string $customerProfileSid The unique string that we created to identify the CustomerProfile resource.
     */
    public function __construct(Version $version, string $customerProfileSid ) {
        parent::__construct($version);

        // Path Solution
        $this->solution = ['customerProfileSid' => $customerProfileSid, ];

        $this->uri = '/CustomerProfiles/' . \rawurlencode($customerProfileSid) . '/ChannelEndpointAssignments';
    }

    /**
     * Create the CustomerProfilesChannelEndpointAssignmentInstance
     *
     * @param string $channelEndpointType The type of channel endpoint. eg: phone-number
     * @param string $channelEndpointSid The SID of an channel endpoint
     * @return CustomerProfilesChannelEndpointAssignmentInstance Created CustomerProfilesChannelEndpointAssignmentInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function create(string $channelEndpointType, string $channelEndpointSid): CustomerProfilesChannelEndpointAssignmentInstance {
        $data = Values::of([
            'ChannelEndpointType' => $channelEndpointType,
            'ChannelEndpointSid' => $channelEndpointSid,
        ]);

        $payload = $this->version->create('POST', $this->uri, [], $data);

        return new CustomerProfilesChannelEndpointAssignmentInstance(
            $this->version,
            $payload
            , $this->solution['customerProfileSid']
        );
    }

    /**
    * Reads CustomerProfilesChannelEndpointAssignmentInstance records from the API as a list.
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
    * @return CustomerProfilesChannelEndpointAssignmentInstance[] Array of results
    */

    public function read(array $options = [], int $limit = null, $pageSize = null): array {
        return \iterator_to_array($this->stream($options, $limit, $pageSize), false);
    }

    /**
    * Streams CustomerProfilesChannelEndpointAssignmentInstance records from the API as a generator stream.
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
    * Retrieve a single page of CustomerProfilesChannelEndpointAssignmentInstance records from the API.
    * Request is executed immediately
    *
    * @param mixed $pageSize Number of records to return, defaults to 50
    * @param string $pageToken PageToken provided by the API
    * @param mixed $pageNumber Page Number, this value is simply for client state
    * @return CustomerProfilesChannelEndpointAssignmentPage Page of CustomerProfilesChannelEndpointAssignmentInstance
    */

    public function page(array $options = [],  $pageSize = Values::NONE, string $pageToken = Values::NONE, $pageNumber = Values::NONE): CustomerProfilesChannelEndpointAssignmentPage {
        $options = new Values($options);

        $params = Values::of([
            'ChannelEndpointSid' => $options['channelEndpointSid'],
            'ChannelEndpointSids' => $options['channelEndpointSids'],
            'PageToken' => $pageToken,
            'Page' => $pageNumber,
            'PageSize' => $pageSize,
        ]);

        $response = $this->version->page('GET', $this->uri, $params);

        return new CustomerProfilesChannelEndpointAssignmentPage($this->version, $response, $this->solution);
    }

    /**
    * Retrieve a specific page of CustomerProfilesChannelEndpointAssignmentInstance records from the API.
    * Request is executed immediately
    *
    * @param string $targetUrl API-generated URL for the requested results page
    * @return CustomerProfilesChannelEndpointAssignmentPage Page of CustomerProfilesChannelEndpointAssignmentInstance
    */

    public function getPage(string $targetUrl): CustomerProfilesChannelEndpointAssignmentPage {
        $response = $this->version->getDomain()->getClient()->request(
            'GET',
            $targetUrl
        );

        return new CustomerProfilesChannelEndpointAssignmentPage($this->version, $response, $this->solution);
    }


    /**
     * Constructs a CustomerProfilesChannelEndpointAssignmentContext
     *
     * @param string $sid The unique string that we created to identify the resource.
     */
    public function getContext(string $sid): CustomerProfilesChannelEndpointAssignmentContext {
        return new CustomerProfilesChannelEndpointAssignmentContext($this->version, $this->solution['customerProfileSid'], $sid);
    }

    /**
     * Provide a friendly representation
     *
     * @return string Machine friendly representation
     */
    public function __toString(): string {
        return '[Twilio.Trusthub.V1.CustomerProfilesChannelEndpointAssignmentList]';
    }
}
