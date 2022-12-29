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

namespace Twilio\Rest\Api\V2010\Account\Call;

use Twilio\Exceptions\TwilioException;
use Twilio\ListResource;
use Twilio\Options;
use Twilio\Values;
use Twilio\Version;
use Twilio\Serialize;



class FeedbackSummaryList extends ListResource {
    /**
     * Construct the FeedbackSummaryList
     *
     * @param Version $version Version that contains the resource
     * @param string $accountSid The unique id of the [Account](https://www.twilio.com/docs/iam/api/account) responsible for this resource.
     */
    public function __construct(Version $version, string $accountSid ) {
        parent::__construct($version);

        // Path Solution
        $this->solution = ['accountSid' => $accountSid, ];

        $this->uri = '/Accounts/' . \rawurlencode($accountSid) . '/Calls/FeedbackSummary.json';
    }

    /**
     * Create the FeedbackSummaryInstance
     *
     * @param \DateTime $startDate Only include feedback given on or after this date. Format is &#x60;YYYY-MM-DD&#x60; and specified in UTC.
     * @param \DateTime $endDate Only include feedback given on or before this date. Format is &#x60;YYYY-MM-DD&#x60; and specified in UTC.
     * @param array|Options $options Optional Arguments
     * @return FeedbackSummaryInstance Created FeedbackSummaryInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function create(\DateTime $startDate, \DateTime $endDate, array $options = []): FeedbackSummaryInstance {
        $options = new Values($options);

        $data = Values::of([
            'StartDate' => Serialize::iso8601Date($startDate),
            'EndDate' => Serialize::iso8601Date($endDate),
            'IncludeSubaccounts' => Serialize::booleanToString($options['includeSubaccounts']),
            'StatusCallback' => $options['statusCallback'],
            'StatusCallbackMethod' => $options['statusCallbackMethod'],
        ]);

        $payload = $this->version->create('POST', $this->uri, [], $data);

        return new FeedbackSummaryInstance(
            $this->version,
            $payload
            , $this->solution['accountSid']
        );
    }

    /**
     * Constructs a FeedbackSummaryContext
     *
     * @param string $sid A 34 character string that uniquely identifies this resource.
     */
    public function getContext(string $sid): FeedbackSummaryContext {
        return new FeedbackSummaryContext($this->version, $this->solution['accountSid'], $sid);
    }

    /**
     * Provide a friendly representation
     *
     * @return string Machine friendly representation
     */
    public function __toString(): string {
        return '[Twilio.Api.V2010.FeedbackSummaryList]';
    }
}
