<?php

/*
 * This code was generated by
 * ___ _ _ _ _ _    _ ____    ____ ____ _    ____ ____ _  _ ____ ____ ____ ___ __   __
 *  |  | | | | |    | |  | __ |  | |__| | __ | __ |___ |\ | |___ |__/ |__|  | |  | |__/
 *  |  |_|_| | |___ | |__|    |__| |  | |    |__] |___ | \| |___ |  \ |  |  | |__| |  \
 *
 * Twilio - Sync
 * This is the public Twilio REST API.
 *
 * NOTE: This class is auto generated by OpenAPI Generator.
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */


namespace Twilio\Rest\Sync\V1\Service\SyncMap;

use Twilio\Exceptions\TwilioException;
use Twilio\Values;
use Twilio\Version;
use Twilio\InstanceContext;
use Twilio\Serialize;



class SyncMapPermissionContext extends InstanceContext {
    /**
     * Initialize the SyncMapPermissionContext
     *
     * @param Version $version Version that contains the resource
     * @param string $serviceSid The SID of the [Sync Service](https://www.twilio.com/docs/sync/api/service) with the Sync Map Permission resource to delete. Can be the Service&#39;s &#x60;sid&#x60; value or &#x60;default&#x60;.
     * @param string $mapSid The SID of the Sync Map with the Sync Map Permission resource to delete. Can be the Sync Map resource&#39;s &#x60;sid&#x60; or its &#x60;unique_name&#x60;.
     * @param string $identity The application-defined string that uniquely identifies the User&#39;s Sync Map Permission resource to delete.
     */
    public function __construct(Version $version, $serviceSid , $mapSid , $identity ) {
        parent::__construct($version);

        // Path Solution
        $this->solution = ['serviceSid' => $serviceSid,  'mapSid' => $mapSid,  'identity' => $identity,  ];

        $this->uri = '/Services/' . \rawurlencode($serviceSid) . '/Maps/' . \rawurlencode($mapSid) . '/Permissions/' . \rawurlencode($identity) . '';
    }

    /**
     * Delete the SyncMapPermissionInstance
     *
     * @return bool True if delete succeeds, false otherwise
     * @throws TwilioException When an HTTP error occurs.
     */
    public function delete(): bool {
        return $this->version->delete('DELETE', $this->uri);
    }

    /**
     * Fetch the SyncMapPermissionInstance
     *
     * @return SyncMapPermissionInstance Fetched SyncMapPermissionInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function fetch(): SyncMapPermissionInstance {
        $payload = $this->version->fetch('GET', $this->uri);

        return new SyncMapPermissionInstance(
            $this->version,
            $payload
            , $this->solution['serviceSid']
            , $this->solution['mapSid']
            , $this->solution['identity']
        );
    }

    /**
     * Update the SyncMapPermissionInstance
     *
     * @param bool $read Whether the identity can read the Sync Map and its Items. Default value is &#x60;false&#x60;.
     * @param bool $write Whether the identity can create, update, and delete Items in the Sync Map. Default value is &#x60;false&#x60;.
     * @param bool $manage Whether the identity can delete the Sync Map. Default value is &#x60;false&#x60;.
     * @return SyncMapPermissionInstance Updated SyncMapPermissionInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function update(bool $read, bool $write, bool $manage): SyncMapPermissionInstance {
        $data = Values::of([
            'Read' => Serialize::booleanToString($read),
            'Write' => Serialize::booleanToString($write),
            'Manage' => Serialize::booleanToString($manage),
        ]);

        $payload = $this->version->update('POST', $this->uri, [], $data);

        return new SyncMapPermissionInstance(
            $this->version,
            $payload
            , $this->solution['serviceSid']
            , $this->solution['mapSid']
            , $this->solution['identity']
        );
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
        return '[Twilio.Sync.V1.SyncMapPermissionContext ' . \implode(' ', $context) . ']';
    }
}
