<?php

/*
 * This code was generated by
 * ___ _ _ _ _ _    _ ____    ____ ____ _    ____ ____ _  _ ____ ____ ____ ___ __   __
 *  |  | | | | |    | |  | __ |  | |__| | __ | __ |___ |\ | |___ |__/ |__|  | |  | |__/
 *  |  |_|_| | |___ | |__|    |__| |  | |    |__] |___ | \| |___ |  \ |  |  | |__| |  \
 *
 * Twilio - Preview
 * This is the public Twilio REST API.
 *
 * NOTE: This class is auto generated by OpenAPI Generator.
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */


namespace Twilio\Rest\Preview\Preview\InstalledAddOn;

use Twilio\Exceptions\TwilioException;
use Twilio\InstanceResource;
use Twilio\Values;
use Twilio\Version;


/**
 * @property string $sid
 * @property string $installedAddOnSid
 * @property string $friendlyName
 * @property string $productName
 * @property string $uniqueName
 * @property bool $enabled
 * @property string $url
 */

class InstalledAddOnExtensionInstance extends InstanceResource {
    /**
     * Initialize the InstalledAddOnExtensionInstance
     *
     * @param Version $version Version that contains the resource
     * @param mixed[] $payload The response payload
     * @param string $installedAddOnSid The SID of the InstalledAddOn resource with the extension to fetch.
     * @param string $sid The SID of the InstalledAddOn Extension resource to fetch.
     */
    public function __construct(Version $version, array $payload, string $installedAddOnSid, string $sid = null) {
        parent::__construct($version);

        // Marshaled Properties
        $this->properties = [
            'sid' => Values::array_get($payload, 'sid'),
            'installedAddOnSid' => Values::array_get($payload, 'installed_add_on_sid'),
            'friendlyName' => Values::array_get($payload, 'friendly_name'),
            'productName' => Values::array_get($payload, 'product_name'),
            'uniqueName' => Values::array_get($payload, 'unique_name'),
            'enabled' => Values::array_get($payload, 'enabled'),
            'url' => Values::array_get($payload, 'url'),
        ];

        $this->solution = ['installedAddOnSid' => $installedAddOnSid, 'sid' => $sid ?: $this->properties['sid'], ];
    }

    /**
     * Generate an instance context for the instance, the context is capable of
     * performing various actions.  All instance actions are proxied to the context
     *
     * @return InstalledAddOnExtensionContext Context for this InstalledAddOnExtensionInstance
     */
    protected function proxy(): InstalledAddOnExtensionContext {
        if (!$this->context) {
            $this->context = new InstalledAddOnExtensionContext(
                $this->version,
                $this->solution['installedAddOnSid'],
                $this->solution['sid']
            );
        }

        return $this->context;
    }

    /**
     * Fetch the InstalledAddOnExtensionInstance
     *
     * @return InstalledAddOnExtensionInstance Fetched InstalledAddOnExtensionInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function fetch(): InstalledAddOnExtensionInstance {
        return $this->proxy()->fetch();
    }

    /**
     * Update the InstalledAddOnExtensionInstance
     *
     * @param bool $enabled Whether the Extension should be invoked.
     * @return InstalledAddOnExtensionInstance Updated InstalledAddOnExtensionInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function update(bool $enabled): InstalledAddOnExtensionInstance {
        return $this->proxy()->update($enabled);
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
        return '[Twilio.Preview.Preview.InstalledAddOnExtensionInstance ' . \implode(' ', $context) . ']';
    }
}

