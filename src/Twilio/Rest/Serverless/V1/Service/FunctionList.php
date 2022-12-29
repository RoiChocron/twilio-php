<?php

/*
 * This code was generated by
 * ___ _ _ _ _ _    _ ____    ____ ____ _    ____ ____ _  _ ____ ____ ____ ___ __   __
 *  |  | | | | |    | |  | __ |  | |__| | __ | __ |___ |\ | |___ |__/ |__|  | |  | |__/
 *  |  |_|_| | |___ | |__|    |__| |  | |    |__] |___ | \| |___ |  \ |  |  | |__| |  \
 *
 * Twilio - Serverless
 * This is the public Twilio REST API.
 *
 * NOTE: This class is auto generated by OpenAPI Generator.
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Twilio\Rest\Serverless\V1\Service;

use Twilio\Exceptions\TwilioException;
use Twilio\ListResource;
use Twilio\Stream;
use Twilio\Values;
use Twilio\Version;



class FunctionList extends ListResource {
    /**
     * Construct the FunctionList
     *
     * @param Version $version Version that contains the resource
     * @param string $serviceSid The SID of the Service to create the Function resource under.
     */
    public function __construct(Version $version, string $serviceSid ) {
        parent::__construct($version);

        // Path Solution
        $this->solution = ['serviceSid' => $serviceSid, ];

        $this->uri = '/Services/' . \rawurlencode($serviceSid) . '/Functions';
    }

    /**
     * Create the FunctionInstance
     *
     * @param string $friendlyName A descriptive string that you create to describe the Function resource. It can be a maximum of 255 characters.
     * @return FunctionInstance Created FunctionInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function create(string $friendlyName): FunctionInstance {
        $data = Values::of([
            'FriendlyName' => $friendlyName,
        ]);

        $payload = $this->version->create('POST', $this->uri, [], $data);

        return new FunctionInstance(
            $this->version,
            $payload
            , $this->solution['serviceSid']
        );
    }

    /**
    * Reads FunctionInstance records from the API as a list.
    * Unlike stream(), this operation is eager and will load `limit` records into
    * memory before returning.
    *
    * @param int $limit Upper limit for the number of records to return. read()
    *                   guarantees to never return more than limit.  Default is no
    *                   limit
    * @param mixed $pageSize Number of records to fetch per request, when not set
    *                        will use the default value of 50 records.  If no
    *                        page_size is defined but a limit is defined, read()
    *                        will attempt to read the limit with the most
    *                        efficient page size, i.e. min(limit, 1000)
    * @return FunctionInstance[] Array of results
    */

    public function read(int $limit = null, $pageSize = null): array {
        return \iterator_to_array($this->stream($limit, $pageSize), false);
    }

    /**
    * Streams FunctionInstance records from the API as a generator stream.
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

    public function stream(int $limit = null, $pageSize = null): Stream {
        $limits = $this->version->readLimits($limit, $pageSize);

        $page = $this->page($limits['pageSize']);

        return $this->version->stream($page, $limits['limit'], $limits['pageLimit']);
    }

    /**
    * Retrieve a single page of FunctionInstance records from the API.
    * Request is executed immediately
    *
    * @param mixed $pageSize Number of records to return, defaults to 50
    * @param string $pageToken PageToken provided by the API
    * @param mixed $pageNumber Page Number, this value is simply for client state
    * @return FunctionPage Page of FunctionInstance
    */

    public function page( $pageSize = Values::NONE, string $pageToken = Values::NONE, $pageNumber = Values::NONE): FunctionPage {

        $params = Values::of([
            'PageToken' => $pageToken,
            'Page' => $pageNumber,
            'PageSize' => $pageSize,
        ]);

        $response = $this->version->page('GET', $this->uri, $params);

        return new FunctionPage($this->version, $response, $this->solution);
    }

    /**
    * Retrieve a specific page of FunctionInstance records from the API.
    * Request is executed immediately
    *
    * @param string $targetUrl API-generated URL for the requested results page
    * @return FunctionPage Page of FunctionInstance
    */

    public function getPage(string $targetUrl): FunctionPage {
        $response = $this->version->getDomain()->getClient()->request(
            'GET',
            $targetUrl
        );

        return new FunctionPage($this->version, $response, $this->solution);
    }


    /**
     * Constructs a FunctionContext
     *
     * @param string $sid The SID of the Function resource to delete.
     */
    public function getContext(string $sid): FunctionContext {
        return new FunctionContext($this->version, $this->solution['serviceSid'], $sid);
    }

    /**
     * Provide a friendly representation
     *
     * @return string Machine friendly representation
     */
    public function __toString(): string {
        return '[Twilio.Serverless.V1.FunctionList]';
    }
}
