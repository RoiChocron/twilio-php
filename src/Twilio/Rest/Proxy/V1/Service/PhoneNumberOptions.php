<?php
/*
 * This code was generated by
 * ___ _ _ _ _ _    _ ____    ____ ____ _    ____ ____ _  _ ____ ____ ____ ___ __   __
 *  |  | | | | |    | |  | __ |  | |__| | __ | __ |___ |\ | |___ |__/ |__|  | |  | |__/
 *  |  |_|_| | |___ | |__|    |__| |  | |    |__] |___ | \| |___ |  \ |  |  | |__| |  \
 *
 * Twilio - Proxy
 * This is the public Twilio REST API.
 *
 * NOTE: This class is auto generated by OpenAPI Generator.
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Twilio\Rest\Proxy\V1\Service;

use Twilio\Options;
use Twilio\Values;


abstract class PhoneNumberOptions {
    /**
    * @param string $sid The SID of a Twilio [IncomingPhoneNumber](https://www.twilio.com/docs/phone-numbers/api/incomingphonenumber-resource) resource that represents the Twilio Number you would like to assign to your Proxy Service. 
    * @param string $phoneNumber The phone number in [E.164](https://www.twilio.com/docs/glossary/what-e164) format.  E.164 phone numbers consist of a + followed by the country code and subscriber number without punctuation characters. For example, +14155551234. 
    * @param bool $isReserved Whether the new phone number should be reserved and not be assigned to a participant using proxy pool logic. See [Reserved Phone Numbers](https://www.twilio.com/docs/proxy/reserved-phone-numbers) for more information. 
    * @return CreatePhoneNumberOptions Options builder
    */
    public static function create(string  $sid=Values::NONE,string  $phoneNumber=Values::NONE,bool  $isReserved=Values::NONE): CreatePhoneNumberOptions {
        return new CreatePhoneNumberOptions($sid,$phoneNumber,$isReserved);
    }




    /**
    * @param bool $isReserved Whether the phone number should be reserved and not be assigned to a participant using proxy pool logic. See [Reserved Phone Numbers](https://www.twilio.com/docs/proxy/reserved-phone-numbers) for more information. 
    * @return UpdatePhoneNumberOptions Options builder
    */
    public static function update(bool  $isReserved=Values::NONE): UpdatePhoneNumberOptions {
        return new UpdatePhoneNumberOptions($isReserved);
    }

}

class CreatePhoneNumberOptions extends Options {
    /**
    * @param string $sid The SID of a Twilio [IncomingPhoneNumber](https://www.twilio.com/docs/phone-numbers/api/incomingphonenumber-resource) resource that represents the Twilio Number you would like to assign to your Proxy Service.
    * @param string $phoneNumber The phone number in [E.164](https://www.twilio.com/docs/glossary/what-e164) format.  E.164 phone numbers consist of a + followed by the country code and subscriber number without punctuation characters. For example, +14155551234.
    * @param bool $isReserved Whether the new phone number should be reserved and not be assigned to a participant using proxy pool logic. See [Reserved Phone Numbers](https://www.twilio.com/docs/proxy/reserved-phone-numbers) for more information.
    */
    public function __construct(string  $sid=Values::NONE,string  $phoneNumber=Values::NONE,bool  $isReserved=Values::NONE) {
        $this->options['sid'] = $sid;
        $this->options['phoneNumber'] = $phoneNumber;
        $this->options['isReserved'] = $isReserved;
    }

    /**
    * @param string $sid The SID of a Twilio [IncomingPhoneNumber](https://www.twilio.com/docs/phone-numbers/api/incomingphonenumber-resource) resource that represents the Twilio Number you would like to assign to your Proxy Service.
    * @return $this Fluent Builder
    */
    public function setSid(string $sid): self {
        $this->options['sid'] = $sid;
        return $this;
    }
    /**
    * @param string $phoneNumber The phone number in [E.164](https://www.twilio.com/docs/glossary/what-e164) format.  E.164 phone numbers consist of a + followed by the country code and subscriber number without punctuation characters. For example, +14155551234.
    * @return $this Fluent Builder
    */
    public function setPhoneNumber(string $phoneNumber): self {
        $this->options['phoneNumber'] = $phoneNumber;
        return $this;
    }
    /**
    * @param bool $isReserved Whether the new phone number should be reserved and not be assigned to a participant using proxy pool logic. See [Reserved Phone Numbers](https://www.twilio.com/docs/proxy/reserved-phone-numbers) for more information.
    * @return $this Fluent Builder
    */
    public function setIsReserved(bool $isReserved): self {
        $this->options['isReserved'] = $isReserved;
        return $this;
    }

    /**
    * Provide a friendly representation
    *
    * @return string Machine friendly representation
    */
    public function __toString(): string {
        $options = \http_build_query(Values::of($this->options), '', ' ');
        return '[Twilio.Proxy.V1.CreatePhoneNumberOptions ' . $options . ']';
    }
}




class UpdatePhoneNumberOptions extends Options {
    /**
    * @param bool $isReserved Whether the phone number should be reserved and not be assigned to a participant using proxy pool logic. See [Reserved Phone Numbers](https://www.twilio.com/docs/proxy/reserved-phone-numbers) for more information.
    */
    public function __construct(bool  $isReserved=Values::NONE) {
        $this->options['isReserved'] = $isReserved;
    }

    /**
    * @param bool $isReserved Whether the phone number should be reserved and not be assigned to a participant using proxy pool logic. See [Reserved Phone Numbers](https://www.twilio.com/docs/proxy/reserved-phone-numbers) for more information.
    * @return $this Fluent Builder
    */
    public function setIsReserved(bool $isReserved): self {
        $this->options['isReserved'] = $isReserved;
        return $this;
    }

    /**
    * Provide a friendly representation
    *
    * @return string Machine friendly representation
    */
    public function __toString(): string {
        $options = \http_build_query(Values::of($this->options), '', ' ');
        return '[Twilio.Proxy.V1.UpdatePhoneNumberOptions ' . $options . ']';
    }
}

