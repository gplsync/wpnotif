<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Rest;

use Twilio\Domain;
use Twilio\Exceptions\TwilioException;
use Twilio\Rest\Trunking\V1;

/**
 * @property \Twilio\Rest\Trunking\V1 v1
 * @property \Twilio\Rest\Trunking\V1\TrunkList trunks
 * @method \Twilio\Rest\Trunking\V1\TrunkContext trunks( string $sid )
 */
class Trunking extends Domain {
	protected $_v1 = null;

	/**
	 * Construct the Trunking Domain
	 *
	 * @param \Twilio\Rest\Client $client Twilio\Rest\Client to communicate with
	 *                                    Twilio
	 *
	 * @return \Twilio\Rest\Trunking Domain for Trunking
	 */
	public function __construct( Client $client ) {
		parent::__construct( $client );

		$this->baseUrl = 'https://trunking.twilio.com';
	}

	/**
	 * Magic getter to lazy load version
	 *
	 * @param string $name Version to return
	 *
	 * @return \Twilio\Version The requested version
	 * @throws \Twilio\Exceptions\TwilioException For unknown versions
	 */
	public function __get( $name ) {
		$method = 'get' . ucfirst( $name );
		if ( method_exists( $this, $method ) ) {
			return $this->$method();
		}

		throw new TwilioException( 'Unknown version ' . $name );
	}

	/**
	 * Magic caller to get resource contexts
	 *
	 * @param string $name Resource to return
	 * @param array $arguments Context parameters
	 *
	 * @return \Twilio\InstanceContext The requested resource context
	 * @throws \Twilio\Exceptions\TwilioException For unknown resource
	 */
	public function __call( $name, $arguments ) {
		$method = 'context' . ucfirst( $name );
		if ( method_exists( $this, $method ) ) {
			return call_user_func_array( array( $this, $method ), $arguments );
		}

		throw new TwilioException( 'Unknown context ' . $name );
	}

	/**
	 * Provide a friendly representation
	 *
	 * @return string Machine friendly representation
	 */
	public function __toString() {
		return '[Twilio.Trunking]';
	}

	/**
	 * @return \Twilio\Rest\Trunking\V1 Version v1 of trunking
	 */
	protected function getV1() {
		if ( ! $this->_v1 ) {
			$this->_v1 = new V1( $this );
		}

		return $this->_v1;
	}

	/**
	 * @return \Twilio\Rest\Trunking\V1\TrunkList
	 */
	protected function getTrunks() {
		return $this->v1->trunks;
	}

	/**
	 * @param string $sid The sid
	 *
	 * @return \Twilio\Rest\Trunking\V1\TrunkContext
	 */
	protected function contextTrunks( $sid ) {
		return $this->v1->trunks( $sid );
	}
}