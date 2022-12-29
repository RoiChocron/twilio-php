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

namespace Twilio\Rest\Autopilot\V1\Assistant\FieldType;

use Twilio\Options;
use Twilio\Values;


abstract class FieldValueOptions {
    /**
    * @param string $synonymOf The string value that indicates which word the field value is a synonym of. 
    * @return CreateFieldValueOptions Options builder
    */
    public static function create(string  $synonymOf=Values::NONE): CreateFieldValueOptions {
        return new CreateFieldValueOptions($synonymOf);
    }



    /**
    * @param string $language The [ISO language-country](https://docs.oracle.com/cd/E13214_01/wli/docs92/xref/xqisocodes.html) tag that specifies the language of the value. Currently supported tags: &#x60;en-US&#x60; 
    * @return ReadFieldValueOptions Options builder
    */
    public static function read(string  $language=Values::NONE): ReadFieldValueOptions {
        return new ReadFieldValueOptions($language);
    }

}

class CreateFieldValueOptions extends Options {
    /**
    * @param string $synonymOf The string value that indicates which word the field value is a synonym of.
    */
    public function __construct(string  $synonymOf=Values::NONE) {
        $this->options['synonymOf'] = $synonymOf;
    }

    /**
    * @param string $synonymOf The string value that indicates which word the field value is a synonym of.
    * @return $this Fluent Builder
    */
    public function setSynonymOf(string $synonymOf): self {
        $this->options['synonymOf'] = $synonymOf;
        return $this;
    }

    /**
    * Provide a friendly representation
    *
    * @return string Machine friendly representation
    */
    public function __toString(): string {
        $options = \http_build_query(Values::of($this->options), '', ' ');
        return '[Twilio.Autopilot.V1.CreateFieldValueOptions ' . $options . ']';
    }
}



class ReadFieldValueOptions extends Options {
    /**
    * @param string $language The [ISO language-country](https://docs.oracle.com/cd/E13214_01/wli/docs92/xref/xqisocodes.html) tag that specifies the language of the value. Currently supported tags: &#x60;en-US&#x60;
    */
    public function __construct(string  $language=Values::NONE) {
        $this->options['language'] = $language;
    }

    /**
    * @param string $language The [ISO language-country](https://docs.oracle.com/cd/E13214_01/wli/docs92/xref/xqisocodes.html) tag that specifies the language of the value. Currently supported tags: &#x60;en-US&#x60;
    * @return $this Fluent Builder
    */
    public function setLanguage(string $language): self {
        $this->options['language'] = $language;
        return $this;
    }

    /**
    * Provide a friendly representation
    *
    * @return string Machine friendly representation
    */
    public function __toString(): string {
        $options = \http_build_query(Values::of($this->options), '', ' ');
        return '[Twilio.Autopilot.V1.ReadFieldValueOptions ' . $options . ']';
    }
}

