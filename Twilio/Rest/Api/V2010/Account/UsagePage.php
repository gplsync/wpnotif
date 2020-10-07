<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Rest\Api\V2010\Account;

use Twilio\Page;

class UsagePage extends Page {
	public function __construct( $version, $response, $solution ) {
		parent::__construct( $version, $response );

		// Path Solution
		$this->solution = $solution;
	}

	public function buildInstance( array $payload ) {
		return new UsageInstance( $this->version, $payload, $this->solution['accountSid'] );
	}

	/**
	 * Provide a friendly representation
	 *
	 * @return string Machine friendly representation
	 */
	public function __toString() {
		return '[Twilio.Api.V2010.UsagePage]';
	}
}