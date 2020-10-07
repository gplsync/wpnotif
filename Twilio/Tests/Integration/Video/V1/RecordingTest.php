<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Tests\Integration\Video\V1;

use Twilio\Exceptions\DeserializeException;
use Twilio\Exceptions\TwilioException;
use Twilio\Http\Response;
use Twilio\Tests\HolodeckTestCase;
use Twilio\Tests\Request;

class RecordingTest extends HolodeckTestCase {
	public function testFetchRequest() {
		$this->holodeck->mock( new Response( 500, '' ) );

		try {
			$this->twilio->video->v1->recordings( "RTaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa" )->fetch();
		} catch ( DeserializeException $e ) {
		} catch ( TwilioException $e ) {
		}

		$this->assertRequest( new Request(
			'get',
			'https://video.twilio.com/v1/Recordings/RTaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa'
		) );
	}

	public function testFetchResponse() {
		$this->holodeck->mock( new Response(
			200,
			'
            {
                "account_sid": "ACaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "status": "processing",
                "date_created": "2015-07-30T20:00:00Z",
                "sid": "RTaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "source_sid": "MTaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "size": 0,
                "url": "https://video.twilio.com/v1/Recordings/RTaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "type": "audio",
                "duration": 0,
                "container_format": "mka",
                "codec": "OPUS",
                "grouping_sids": {
                    "room_sid": "RMaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa"
                },
                "links": {
                    "media": "https://video.twilio.com/v1/Recordings/RTaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Media"
                }
            }
            '
		) );

		$actual = $this->twilio->video->v1->recordings( "RTaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa" )->fetch();

		$this->assertNotNull( $actual );
	}

	public function testReadRequest() {
		$this->holodeck->mock( new Response( 500, '' ) );

		try {
			$this->twilio->video->v1->recordings->read();
		} catch ( DeserializeException $e ) {
		} catch ( TwilioException $e ) {
		}

		$this->assertRequest( new Request(
			'get',
			'https://video.twilio.com/v1/Recordings'
		) );
	}

	public function testReadEmptyResponse() {
		$this->holodeck->mock( new Response(
			200,
			'
            {
                "recordings": [],
                "meta": {
                    "page": 0,
                    "page_size": 50,
                    "first_page_url": "https://video.twilio.com/v1/Recordings?PageSize=50&Page=0",
                    "previous_page_url": null,
                    "url": "https://video.twilio.com/v1/Recordings?PageSize=50&Page=0",
                    "next_page_url": null,
                    "key": "recordings"
                }
            }
            '
		) );

		$actual = $this->twilio->video->v1->recordings->read();

		$this->assertNotNull( $actual );
	}

	public function testDeleteRequest() {
		$this->holodeck->mock( new Response( 500, '' ) );

		try {
			$this->twilio->video->v1->recordings( "RTaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa" )->delete();
		} catch ( DeserializeException $e ) {
		} catch ( TwilioException $e ) {
		}

		$this->assertRequest( new Request(
			'delete',
			'https://video.twilio.com/v1/Recordings/RTaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa'
		) );
	}

	public function testDeleteResponse() {
		$this->holodeck->mock( new Response(
			204,
			null
		) );

		$actual = $this->twilio->video->v1->recordings( "RTaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa" )->delete();

		$this->assertTrue( $actual );
	}
}