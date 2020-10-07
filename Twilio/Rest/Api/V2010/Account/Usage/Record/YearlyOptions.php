<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Rest\Api\V2010\Account\Usage\Record;

use Twilio\Options;
use Twilio\Values;

abstract class YearlyOptions {
	/**
	 * @param string $category Only include usage of this usage category.
	 * @param \DateTime $startDate Only include usage that has occurred on or after
	 *                             this date.
	 * @param \DateTime $endDate Only include usage that has occurred on or before
	 *                           this date.
	 * @param boolean $includeSubaccounts The include_subaccounts
	 *
	 * @return ReadYearlyOptions Options builder
	 */
	public static function read( $category = Values::NONE, $startDate = Values::NONE, $endDate = Values::NONE, $includeSubaccounts = Values::NONE ) {
		return new ReadYearlyOptions( $category, $startDate, $endDate, $includeSubaccounts );
	}
}

class ReadYearlyOptions extends Options {
	/**
	 * @param string $category Only include usage of this usage category.
	 * @param \DateTime $startDate Only include usage that has occurred on or after
	 *                             this date.
	 * @param \DateTime $endDate Only include usage that has occurred on or before
	 *                           this date.
	 * @param boolean $includeSubaccounts The include_subaccounts
	 */
	public function __construct( $category = Values::NONE, $startDate = Values::NONE, $endDate = Values::NONE, $includeSubaccounts = Values::NONE ) {
		$this->options['category']           = $category;
		$this->options['startDate']          = $startDate;
		$this->options['endDate']            = $endDate;
		$this->options['includeSubaccounts'] = $includeSubaccounts;
	}

	/**
	 * Only include usage of this [usage category](https://www.twilio.com/docs/api/rest/usage-records#usage-categories).
	 *
	 * @param string $category Only include usage of this usage category.
	 *
	 * @return $this Fluent Builder
	 */
	public function setCategory( $category ) {
		$this->options['category'] = $category;

		return $this;
	}

	/**
	 * Only include usage that has occurred on or after this date.  Format is YYYY-MM-DD.  All dates are in GMT.  As a convenience, you can also specify offsets to today.  For example, `StartDate=-30days` will make `StartDate` be 30 days before today.
	 *
	 * @param \DateTime $startDate Only include usage that has occurred on or after
	 *                             this date.
	 *
	 * @return $this Fluent Builder
	 */
	public function setStartDate( $startDate ) {
		$this->options['startDate'] = $startDate;

		return $this;
	}

	/**
	 * Only include usage that has occurred on or before this date.  Format is YYYY-MM-DD.  All dates are in GMT.  As a convenience, you can also specify offsets to today.  For example, `EndDate=+30days` will make `EndDate` be 30 days from today.
	 *
	 * @param \DateTime $endDate Only include usage that has occurred on or before
	 *                           this date.
	 *
	 * @return $this Fluent Builder
	 */
	public function setEndDate( $endDate ) {
		$this->options['endDate'] = $endDate;

		return $this;
	}

	/**
	 * The include_subaccounts
	 *
	 * @param boolean $includeSubaccounts The include_subaccounts
	 *
	 * @return $this Fluent Builder
	 */
	public function setIncludeSubaccounts( $includeSubaccounts ) {
		$this->options['includeSubaccounts'] = $includeSubaccounts;

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

		return '[Twilio.Api.V2010.ReadYearlyOptions ' . implode( ' ', $options ) . ']';
	}
}