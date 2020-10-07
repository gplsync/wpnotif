<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Rest\Api\V2010\Account\Usage;

use Twilio\Options;
use Twilio\Values;

abstract class TriggerOptions {
	/**
	 * @param string $callbackMethod HTTP method to use with callback_url
	 * @param string $callbackUrl URL Twilio will request when the trigger fires
	 * @param string $friendlyName A user-specified, human-readable name for the
	 *                             trigger.
	 *
	 * @return UpdateTriggerOptions Options builder
	 */
	public static function update( $callbackMethod = Values::NONE, $callbackUrl = Values::NONE, $friendlyName = Values::NONE ) {
		return new UpdateTriggerOptions( $callbackMethod, $callbackUrl, $friendlyName );
	}

	/**
	 * @param string $callbackMethod HTTP method to use with callback_url
	 * @param string $friendlyName A user-specified, human-readable name for the
	 *                             trigger.
	 * @param string $recurring How this trigger recurs
	 * @param string $triggerBy The field in the UsageRecord that fires the trigger
	 *
	 * @return CreateTriggerOptions Options builder
	 */
	public static function create( $callbackMethod = Values::NONE, $friendlyName = Values::NONE, $recurring = Values::NONE, $triggerBy = Values::NONE ) {
		return new CreateTriggerOptions( $callbackMethod, $friendlyName, $recurring, $triggerBy );
	}

	/**
	 * @param string $recurring Filter by recurring
	 * @param string $triggerBy Filter by trigger by
	 * @param string $usageCategory Filter by Usage Category
	 *
	 * @return ReadTriggerOptions Options builder
	 */
	public static function read( $recurring = Values::NONE, $triggerBy = Values::NONE, $usageCategory = Values::NONE ) {
		return new ReadTriggerOptions( $recurring, $triggerBy, $usageCategory );
	}
}

class UpdateTriggerOptions extends Options {
	/**
	 * @param string $callbackMethod HTTP method to use with callback_url
	 * @param string $callbackUrl URL Twilio will request when the trigger fires
	 * @param string $friendlyName A user-specified, human-readable name for the
	 *                             trigger.
	 */
	public function __construct( $callbackMethod = Values::NONE, $callbackUrl = Values::NONE, $friendlyName = Values::NONE ) {
		$this->options['callbackMethod'] = $callbackMethod;
		$this->options['callbackUrl']    = $callbackUrl;
		$this->options['friendlyName']   = $friendlyName;
	}

	/**
	 * The HTTP method Twilio will use when making a request to the CallbackUrl.  `GET` or `POST`.
	 *
	 * @param string $callbackMethod HTTP method to use with callback_url
	 *
	 * @return $this Fluent Builder
	 */
	public function setCallbackMethod( $callbackMethod ) {
		$this->options['callbackMethod'] = $callbackMethod;

		return $this;
	}

	/**
	 * Twilio will make a request to this url when the trigger fires.
	 *
	 * @param string $callbackUrl URL Twilio will request when the trigger fires
	 *
	 * @return $this Fluent Builder
	 */
	public function setCallbackUrl( $callbackUrl ) {
		$this->options['callbackUrl'] = $callbackUrl;

		return $this;
	}

	/**
	 * A user-specified, human-readable name for the trigger.
	 *
	 * @param string $friendlyName A user-specified, human-readable name for the
	 *                             trigger.
	 *
	 * @return $this Fluent Builder
	 */
	public function setFriendlyName( $friendlyName ) {
		$this->options['friendlyName'] = $friendlyName;

		return $this;
	}

	/**
	 * Provide a friendly representation
	 *
	 * @return string Machine friendly representation
	 */
	public function __toString() {
		$options = array();
		foreach ( $this->options as $key => $value ) {
			if ( $value != Values::NONE ) {
				$options[] = "$key=$value";
			}
		}

		return '[Twilio.Api.V2010.UpdateTriggerOptions ' . implode( ' ', $options ) . ']';
	}
}

class CreateTriggerOptions extends Options {
	/**
	 * @param string $callbackMethod HTTP method to use with callback_url
	 * @param string $friendlyName A user-specified, human-readable name for the
	 *                             trigger.
	 * @param string $recurring How this trigger recurs
	 * @param string $triggerBy The field in the UsageRecord that fires the trigger
	 */
	public function __construct( $callbackMethod = Values::NONE, $friendlyName = Values::NONE, $recurring = Values::NONE, $triggerBy = Values::NONE ) {
		$this->options['callbackMethod'] = $callbackMethod;
		$this->options['friendlyName']   = $friendlyName;
		$this->options['recurring']      = $recurring;
		$this->options['triggerBy']      = $triggerBy;
	}

	/**
	 * Twilio will use this HTTP method when making a request to the CallbackUrl.  `GET` or `POST`.  The default is `POST`.
	 *
	 * @param string $callbackMethod HTTP method to use with callback_url
	 *
	 * @return $this Fluent Builder
	 */
	public function setCallbackMethod( $callbackMethod ) {
		$this->options['callbackMethod'] = $callbackMethod;

		return $this;
	}

	/**
	 * A human readable description of the new trigger.  Maximum 64 characters.
	 *
	 * @param string $friendlyName A user-specified, human-readable name for the
	 *                             trigger.
	 *
	 * @return $this Fluent Builder
	 */
	public function setFriendlyName( $friendlyName ) {
		$this->options['friendlyName'] = $friendlyName;

		return $this;
	}

	/**
	 * How this trigger recurs. Empty for non-recurring triggers. One of `daily`, `monthly`, or `yearly` for recurring triggers.  A trigger will only fire once during each recurring period.  Recurring periods are in GMT.
	 *
	 * @param string $recurring How this trigger recurs
	 *
	 * @return $this Fluent Builder
	 */
	public function setRecurring( $recurring ) {
		$this->options['recurring'] = $recurring;

		return $this;
	}

	/**
	 * The field in the [UsageRecord](https://www.twilio.com/docs/api/rest/usage-records) that will fire the trigger.  One of `count`, `usage`, or `price` as described in the [UsageRecords documentation](https://www.twilio.com/docs/api/rest/usage-records#usage-count-price).  The default is `usage`.
	 *
	 * @param string $triggerBy The field in the UsageRecord that fires the trigger
	 *
	 * @return $this Fluent Builder
	 */
	public function setTriggerBy( $triggerBy ) {
		$this->options['triggerBy'] = $triggerBy;

		return $this;
	}

	/**
	 * Provide a friendly representation
	 *
	 * @return string Machine friendly representation
	 */
	public function __toString() {
		$options = array();
		foreach ( $this->options as $key => $value ) {
			if ( $value != Values::NONE ) {
				$options[] = "$key=$value";
			}
		}

		return '[Twilio.Api.V2010.CreateTriggerOptions ' . implode( ' ', $options ) . ']';
	}
}

class ReadTriggerOptions extends Options {
	/**
	 * @param string $recurring Filter by recurring
	 * @param string $triggerBy Filter by trigger by
	 * @param string $usageCategory Filter by Usage Category
	 */
	public function __construct( $recurring = Values::NONE, $triggerBy = Values::NONE, $usageCategory = Values::NONE ) {
		$this->options['recurring']     = $recurring;
		$this->options['triggerBy']     = $triggerBy;
		$this->options['usageCategory'] = $usageCategory;
	}

	/**
	 * Only show UsageTriggers that count over this interval.  One of `daily`, `monthly`, or `yearly`.  To retrieve non-recurring triggers, leave this empty or use `alltime`.
	 *
	 * @param string $recurring Filter by recurring
	 *
	 * @return $this Fluent Builder
	 */
	public function setRecurring( $recurring ) {
		$this->options['recurring'] = $recurring;

		return $this;
	}

	/**
	 * Only show UsageTriggers that trigger by this field in the UsageRecord.  Must be one of: `count`, `usage`, or `price` as described in the [UsageRecords documentation](https://www.twilio.com/docs/api/rest/usage-records#usage-count-price).
	 *
	 * @param string $triggerBy Filter by trigger by
	 *
	 * @return $this Fluent Builder
	 */
	public function setTriggerBy( $triggerBy ) {
		$this->options['triggerBy'] = $triggerBy;

		return $this;
	}

	/**
	 * Only show UsageTriggers that watch this usage category.  Must be one of the supported [usage categories](https://www.twilio.com/docs/api/rest/usage-records#usage-categories).
	 *
	 * @param string $usageCategory Filter by Usage Category
	 *
	 * @return $this Fluent Builder
	 */
	public function setUsageCategory( $usageCategory ) {
		$this->options['usageCategory'] = $usageCategory;

		return $this;
	}

	/**
	 * Provide a friendly representation
	 *
	 * @return string Machine friendly representation
	 */
	public function __toString() {
		$options = array();
		foreach ( $this->options as $key => $value ) {
			if ( $value != Values::NONE ) {
				$options[] = "$key=$value";
			}
		}

		return '[Twilio.Api.V2010.ReadTriggerOptions ' . implode( ' ', $options ) . ']';
	}
}