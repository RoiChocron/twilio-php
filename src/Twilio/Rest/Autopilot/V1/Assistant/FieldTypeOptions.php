<?php
/*
 * This code was generated by
 * ___ _ _ _ _ _    _ ____    ____ ____ _    ____ ____ _  _ ____ ____ ____ ___ __   __
 *  |  | | | | |    | |  | __ |  | |__| | __ | __ |___ |\ | |___ |__/ |__|  | |  | |__/
 *  |  |_|_| | |___ | |__|    |__| |  | |    |__] |___ | \| |___ |  \ |  |  | |__| |  \
 *
 * Twilio - Autopilot
 * This is the public Twilio REST API.
 *
 * NOTE: This class is auto generated by OpenAPI Generator.
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Twilio\Rest\Autopilot\V1\Assistant;

use Twilio\Options;
use Twilio\Values;


abstract class FieldTypeOptions {
    /**
    * @param string $friendlyName A descriptive string that you create to describe the new resource. It is not unique and can be up to 255 characters long. 
    * @return CreateFieldTypeOptions Options builder
    */
    public static function create(string  $friendlyName=Values::NONE): CreateFieldTypeOptions {
        return new CreateFieldTypeOptions($friendlyName);
    }




    /**
    * @param string $friendlyName A descriptive string that you create to describe the resource. It is not unique and can be up to 255 characters long. 
    * @param string $uniqueName An application-defined string that uniquely identifies the resource. It can be used as an alternative to the &#x60;sid&#x60; in the URL path to address the resource. The first 64 characters must be unique. 
    * @return UpdateFieldTypeOptions Options builder
    */
    public static function update(string  $friendlyName=Values::NONE,string  $uniqueName=Values::NONE): UpdateFieldTypeOptions {
        return new UpdateFieldTypeOptions($friendlyName,$uniqueName);
    }

}

class CreateFieldTypeOptions extends Options {
    /**
    * @param string $friendlyName A descriptive string that you create to describe the new resource. It is not unique and can be up to 255 characters long.
    */
    public function __construct(string  $friendlyName=Values::NONE) {
        $this->options['friendlyName'] = $friendlyName;
    }

    /**
    * @param string $friendlyName A descriptive string that you create to describe the new resource. It is not unique and can be up to 255 characters long.
    * @return $this Fluent Builder
    */
    public function setFriendlyName(string $friendlyName): self {
        $this->options['friendlyName'] = $friendlyName;
        return $this;
    }

    /**
    * Provide a friendly representation
    *
    * @return string Machine friendly representation
    */
    public function __toString(): string {
        $options = \http_build_query(Values::of($this->options), '', ' ');
        return '[Twilio.Autopilot.V1.CreateFieldTypeOptions ' . $options . ']';
    }
}




class UpdateFieldTypeOptions extends Options {
    /**
    * @param string $friendlyName A descriptive string that you create to describe the resource. It is not unique and can be up to 255 characters long.
    * @param string $uniqueName An application-defined string that uniquely identifies the resource. It can be used as an alternative to the &#x60;sid&#x60; in the URL path to address the resource. The first 64 characters must be unique.
    */
    public function __construct(string  $friendlyName=Values::NONE,string  $uniqueName=Values::NONE) {
        $this->options['friendlyName'] = $friendlyName;
        $this->options['uniqueName'] = $uniqueName;
    }

    /**
    * @param string $friendlyName A descriptive string that you create to describe the resource. It is not unique and can be up to 255 characters long.
    * @return $this Fluent Builder
    */
    public function setFriendlyName(string $friendlyName): self {
        $this->options['friendlyName'] = $friendlyName;
        return $this;
    }
    /**
    * @param string $uniqueName An application-defined string that uniquely identifies the resource. It can be used as an alternative to the &#x60;sid&#x60; in the URL path to address the resource. The first 64 characters must be unique.
    * @return $this Fluent Builder
    */
    public function setUniqueName(string $uniqueName): self {
        $this->options['uniqueName'] = $uniqueName;
        return $this;
    }

    /**
    * Provide a friendly representation
    *
    * @return string Machine friendly representation
    */
    public function __toString(): string {
        $options = \http_build_query(Values::of($this->options), '', ' ');
        return '[Twilio.Autopilot.V1.UpdateFieldTypeOptions ' . $options . ']';
    }
}

