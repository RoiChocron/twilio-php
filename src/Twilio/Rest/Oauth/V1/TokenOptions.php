<?php
/*
 * This code was generated by
 * ___ _ _ _ _ _    _ ____    ____ ____ _    ____ ____ _  _ ____ ____ ____ ___ __   __
 *  |  | | | | |    | |  | __ |  | |__| | __ | __ |___ |\ | |___ |__/ |__|  | |  | |__/
 *  |  |_|_| | |___ | |__|    |__| |  | |    |__] |___ | \| |___ |  \ |  |  | |__| |  \
 *
 * Twilio - Oauth
 * This is the public Twilio REST API.
 *
 * NOTE: This class is auto generated by OpenAPI Generator.
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Twilio\Rest\Oauth\V1;

use Twilio\Options;
use Twilio\Values;


abstract class TokenOptions {
    /**
    * @param string $clientSecret The credential for confidential OAuth App. 
    * @param string $code JWT token related to the authorization code grant type. 
    * @param string $codeVerifier A code which is generation cryptographically. 
    * @param string $deviceCode JWT token related to the device code grant type. 
    * @param string $refreshToken JWT token related to the refresh token grant type. 
    * @param string $deviceId The Id of the device associated with the token (refresh token). 
    * @return CreateTokenOptions Options builder
    */
    public static function create(string  $clientSecret=Values::NONE,string  $code=Values::NONE,string  $codeVerifier=Values::NONE,string  $deviceCode=Values::NONE,string  $refreshToken=Values::NONE,string  $deviceId=Values::NONE): CreateTokenOptions {
        return new CreateTokenOptions($clientSecret,$code,$codeVerifier,$deviceCode,$refreshToken,$deviceId);
    }

}

class CreateTokenOptions extends Options {
    /**
    * @param string $clientSecret The credential for confidential OAuth App.
    * @param string $code JWT token related to the authorization code grant type.
    * @param string $codeVerifier A code which is generation cryptographically.
    * @param string $deviceCode JWT token related to the device code grant type.
    * @param string $refreshToken JWT token related to the refresh token grant type.
    * @param string $deviceId The Id of the device associated with the token (refresh token).
    */
    public function __construct(string  $clientSecret=Values::NONE,string  $code=Values::NONE,string  $codeVerifier=Values::NONE,string  $deviceCode=Values::NONE,string  $refreshToken=Values::NONE,string  $deviceId=Values::NONE) {
        $this->options['clientSecret'] = $clientSecret;
        $this->options['code'] = $code;
        $this->options['codeVerifier'] = $codeVerifier;
        $this->options['deviceCode'] = $deviceCode;
        $this->options['refreshToken'] = $refreshToken;
        $this->options['deviceId'] = $deviceId;
    }

    /**
    * @param string $clientSecret The credential for confidential OAuth App.
    * @return $this Fluent Builder
    */
    public function setClientSecret(string $clientSecret): self {
        $this->options['clientSecret'] = $clientSecret;
        return $this;
    }
    /**
    * @param string $code JWT token related to the authorization code grant type.
    * @return $this Fluent Builder
    */
    public function setCode(string $code): self {
        $this->options['code'] = $code;
        return $this;
    }
    /**
    * @param string $codeVerifier A code which is generation cryptographically.
    * @return $this Fluent Builder
    */
    public function setCodeVerifier(string $codeVerifier): self {
        $this->options['codeVerifier'] = $codeVerifier;
        return $this;
    }
    /**
    * @param string $deviceCode JWT token related to the device code grant type.
    * @return $this Fluent Builder
    */
    public function setDeviceCode(string $deviceCode): self {
        $this->options['deviceCode'] = $deviceCode;
        return $this;
    }
    /**
    * @param string $refreshToken JWT token related to the refresh token grant type.
    * @return $this Fluent Builder
    */
    public function setRefreshToken(string $refreshToken): self {
        $this->options['refreshToken'] = $refreshToken;
        return $this;
    }
    /**
    * @param string $deviceId The Id of the device associated with the token (refresh token).
    * @return $this Fluent Builder
    */
    public function setDeviceId(string $deviceId): self {
        $this->options['deviceId'] = $deviceId;
        return $this;
    }

    /**
    * Provide a friendly representation
    *
    * @return string Machine friendly representation
    */
    public function __toString(): string {
        $options = \http_build_query(Values::of($this->options), '', ' ');
        return '[Twilio.Oauth.V1.CreateTokenOptions ' . $options . ']';
    }
}

