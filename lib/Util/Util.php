<?php
/**
 * Util
 *
 * PHP version 5
 *
 * @category Class
 * @package  FreeClimb
 * @author   wcasey@vailsys.com
 * @link     https://github.com/FreeClimbAPI
 */

/**
 * FreeClimb API
 *
 */

namespace FreeClimb\Util;

use \FreeClimb\ObjectSerializer;

/**
 * AccountRequest Class Doc Comment
 *
 * @category Class
 * @package  FreeClimb
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class Util
{
    /**
     * @var UtilInterface
     */
    protected $util;

    /**
     * Constructor
     *
     */
    public function __construct()
    {
    }

    /**
     * getResponseHeader
     *
     */
    public function getResponseHeader($header, $response) {
      foreach ($response as $key => $r) {
         // Match the header name up to ':', compare lower case
         if (stripos($r, $header . ':') === 0) {
            list($headername, $headervalue) = explode(":", $r, 2);
            return trim($headervalue);
         }
      }
    }

    /**
     * verifyRequest
     *
     */
    public function verifyRequest(
      $requestBody, 
      $signatureHeader, 
      $signingSecret, 
      $tolerance=5*60*1000)
    {
      if (!is_string($signatureHeader)) {
        throw new ErrorException(`ERROR - signatureHeader must be the string value of the 'freeclimb-signature' header`)
      }
      if (!is_string($signingSecret)) {
        throw new ErrorException(`ERROR - signingSecret must be the string value of the account's signings secret`)
      }

      $headerObject = explode(",", $signatureHeader);
      $time = $this->getResponseHeader("t", $headerObject);
      // `FreeClimb-Signature` header is a timestamp represented by a unix timestamp (in seconds)
      date_default_timezone_set("UTC");
      $currentTime = time();
      $signatureAge = $currentTime - ($time * 1000);
      if (tolerance < signatureAge) {
        throw new ErrorException(`Request rejected - signature's timestamp failed against current tolerance of ${tolerance} milliseconds. Signature age: ${signatureAge} milliseconds`);
      }
  
      $data = $time + '.' + $requestBody;
      $hmac = hash_hmac('sha256', $signingSecret);
      hash_update($hmac, $data);
      if (!str_contains($this->getResponseHeader("v1", $headerObject), $hmac)) {
        throw new ErrorException('Unverified Request Signature - FreeClimb was unable to verify that this request originated from FreeClimb. If this request was unexpected, it may be from a bad actor. Please proceed with caution. If this request was expected, to fix this issue try checking for any typos or misspelling of your signing secret.');
      }
    }

}
