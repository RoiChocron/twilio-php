<?php
/*
 * This code was generated by
 * ___ _ _ _ _ _    _ ____    ____ ____ _    ____ ____ _  _ ____ ____ ____ ___ __   __
 *  |  | | | | |    | |  | __ |  | |__| | __ | __ |___ |\ | |___ |__/ |__|  | |  | |__/
 *  |  |_|_| | |___ | |__|    |__| |  | |    |__] |___ | \| |___ |  \ |  |  | |__| |  \
 *
 * Twilio - Supersim
 * This is the public Twilio REST API.
 *
 * NOTE: This class is auto generated by OpenAPI Generator.
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Twilio\Rest\Supersim\V1;

use Twilio\Options;
use Twilio\Values;


abstract class SettingsUpdateOptions {
    /**
    * @param string $sim Filter the Settings Updates by a Super SIM&#39;s SID or UniqueName. 
    * @param string $status Filter the Settings Updates by status. Can be &#x60;scheduled&#x60;, &#x60;in-progress&#x60;, &#x60;successful&#x60;, or &#x60;failed&#x60;. 
    * @return ReadSettingsUpdateOptions Options builder
    */
    public static function read(string  $sim=Values::NONE,string  $status=Values::NONE): ReadSettingsUpdateOptions {
        return new ReadSettingsUpdateOptions($sim,$status);
    }

}

class ReadSettingsUpdateOptions extends Options {
    /**
    * @param string $sim Filter the Settings Updates by a Super SIM&#39;s SID or UniqueName.
    * @param string $status Filter the Settings Updates by status. Can be &#x60;scheduled&#x60;, &#x60;in-progress&#x60;, &#x60;successful&#x60;, or &#x60;failed&#x60;.
    */
    public function __construct(string  $sim=Values::NONE,string  $status=Values::NONE) {
        $this->options['sim'] = $sim;
        $this->options['status'] = $status;
    }

    /**
    * @param string $sim Filter the Settings Updates by a Super SIM&#39;s SID or UniqueName.
    * @return $this Fluent Builder
    */
    public function setSim(string $sim): self {
        $this->options['sim'] = $sim;
        return $this;
    }
    /**
    * @param string $status Filter the Settings Updates by status. Can be &#x60;scheduled&#x60;, &#x60;in-progress&#x60;, &#x60;successful&#x60;, or &#x60;failed&#x60;.
    * @return $this Fluent Builder
    */
    public function setStatus(string $status): self {
        $this->options['status'] = $status;
        return $this;
    }

    /**
    * Provide a friendly representation
    *
    * @return string Machine friendly representation
    */
    public function __toString(): string {
        $options = \http_build_query(Values::of($this->options), '', ' ');
        return '[Twilio.Supersim.V1.ReadSettingsUpdateOptions ' . $options . ']';
    }
}

