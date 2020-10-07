<?php
// This file was auto-generated from sdk-root/src/data/medialive/2017-10-14/api-2.json
return [
	'metadata'   => [
		'apiVersion'          => '2017-10-14',
		'endpointPrefix'      => 'medialive',
		'signingName'         => 'medialive',
		'serviceFullName'     => 'AWS Elemental MediaLive',
		'serviceId'           => 'MediaLive',
		'protocol'            => 'rest-json',
		'jsonVersion'         => '1.1',
		'uid'                 => 'medialive-2017-10-14',
		'signatureVersion'    => 'v4',
		'serviceAbbreviation' => 'MediaLive',
	],
	'operations' => [
		'BatchUpdateSchedule'        => [
			'name'   => 'BatchUpdateSchedule',
			'http'   => [
				'method'       => 'PUT',
				'requestUri'   => '/prod/channels/{channelId}/schedule',
				'responseCode' => 200,
			],
			'input'  => [ 'shape' => 'BatchUpdateScheduleRequest', ],
			'output' => [ 'shape' => 'BatchUpdateScheduleResponse', ],
			'errors' => [
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'UnprocessableEntityException', ],
				[ 'shape' => 'InternalServerErrorException', ],
				[ 'shape' => 'ForbiddenException', ],
				[ 'shape' => 'BadGatewayException', ],
				[ 'shape' => 'NotFoundException', ],
				[ 'shape' => 'GatewayTimeoutException', ],
				[ 'shape' => 'TooManyRequestsException', ],
			],
		],
		'CreateChannel'              => [
			'name'   => 'CreateChannel',
			'http'   => [
				'method'       => 'POST',
				'requestUri'   => '/prod/channels',
				'responseCode' => 201,
			],
			'input'  => [ 'shape' => 'CreateChannelRequest', ],
			'output' => [ 'shape' => 'CreateChannelResponse', ],
			'errors' => [
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'UnprocessableEntityException', ],
				[ 'shape' => 'InternalServerErrorException', ],
				[ 'shape' => 'ForbiddenException', ],
				[ 'shape' => 'BadGatewayException', ],
				[ 'shape' => 'GatewayTimeoutException', ],
				[ 'shape' => 'TooManyRequestsException', ],
				[ 'shape' => 'ConflictException', ],
			],
		],
		'CreateInput'                => [
			'name'   => 'CreateInput',
			'http'   => [
				'method'       => 'POST',
				'requestUri'   => '/prod/inputs',
				'responseCode' => 201,
			],
			'input'  => [ 'shape' => 'CreateInputRequest', ],
			'output' => [ 'shape' => 'CreateInputResponse', ],
			'errors' => [
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'InternalServerErrorException', ],
				[ 'shape' => 'ForbiddenException', ],
				[ 'shape' => 'BadGatewayException', ],
				[ 'shape' => 'GatewayTimeoutException', ],
				[ 'shape' => 'TooManyRequestsException', ],
			],
		],
		'CreateInputSecurityGroup'   => [
			'name'   => 'CreateInputSecurityGroup',
			'http'   => [
				'method'       => 'POST',
				'requestUri'   => '/prod/inputSecurityGroups',
				'responseCode' => 200,
			],
			'input'  => [ 'shape' => 'CreateInputSecurityGroupRequest', ],
			'output' => [ 'shape' => 'CreateInputSecurityGroupResponse', ],
			'errors' => [
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'InternalServerErrorException', ],
				[ 'shape' => 'ForbiddenException', ],
				[ 'shape' => 'BadGatewayException', ],
				[ 'shape' => 'GatewayTimeoutException', ],
				[ 'shape' => 'TooManyRequestsException', ],
			],
		],
		'CreateTags'                 => [
			'name'   => 'CreateTags',
			'http'   => [
				'method'       => 'POST',
				'requestUri'   => '/prod/tags/{resource-arn}',
				'responseCode' => 204,
			],
			'input'  => [ 'shape' => 'CreateTagsRequest', ],
			'errors' => [
				[ 'shape' => 'NotFoundException', ],
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'InternalServerErrorException', ],
				[ 'shape' => 'ForbiddenException', ],
			],
		],
		'DeleteChannel'              => [
			'name'   => 'DeleteChannel',
			'http'   => [
				'method'       => 'DELETE',
				'requestUri'   => '/prod/channels/{channelId}',
				'responseCode' => 200,
			],
			'input'  => [ 'shape' => 'DeleteChannelRequest', ],
			'output' => [ 'shape' => 'DeleteChannelResponse', ],
			'errors' => [
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'InternalServerErrorException', ],
				[ 'shape' => 'ForbiddenException', ],
				[ 'shape' => 'BadGatewayException', ],
				[ 'shape' => 'NotFoundException', ],
				[ 'shape' => 'GatewayTimeoutException', ],
				[ 'shape' => 'TooManyRequestsException', ],
				[ 'shape' => 'ConflictException', ],
			],
		],
		'DeleteInput'                => [
			'name'   => 'DeleteInput',
			'http'   => [
				'method'       => 'DELETE',
				'requestUri'   => '/prod/inputs/{inputId}',
				'responseCode' => 200,
			],
			'input'  => [ 'shape' => 'DeleteInputRequest', ],
			'output' => [ 'shape' => 'DeleteInputResponse', ],
			'errors' => [
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'InternalServerErrorException', ],
				[ 'shape' => 'ForbiddenException', ],
				[ 'shape' => 'BadGatewayException', ],
				[ 'shape' => 'NotFoundException', ],
				[ 'shape' => 'GatewayTimeoutException', ],
				[ 'shape' => 'TooManyRequestsException', ],
				[ 'shape' => 'ConflictException', ],
			],
		],
		'DeleteInputSecurityGroup'   => [
			'name'   => 'DeleteInputSecurityGroup',
			'http'   => [
				'method'       => 'DELETE',
				'requestUri'   => '/prod/inputSecurityGroups/{inputSecurityGroupId}',
				'responseCode' => 200,
			],
			'input'  => [ 'shape' => 'DeleteInputSecurityGroupRequest', ],
			'output' => [ 'shape' => 'DeleteInputSecurityGroupResponse', ],
			'errors' => [
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'InternalServerErrorException', ],
				[ 'shape' => 'ForbiddenException', ],
				[ 'shape' => 'BadGatewayException', ],
				[ 'shape' => 'NotFoundException', ],
				[ 'shape' => 'GatewayTimeoutException', ],
				[ 'shape' => 'TooManyRequestsException', ],
			],
		],
		'DeleteReservation'          => [
			'name'   => 'DeleteReservation',
			'http'   => [
				'method'       => 'DELETE',
				'requestUri'   => '/prod/reservations/{reservationId}',
				'responseCode' => 200,
			],
			'input'  => [ 'shape' => 'DeleteReservationRequest', ],
			'output' => [ 'shape' => 'DeleteReservationResponse', ],
			'errors' => [
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'InternalServerErrorException', ],
				[ 'shape' => 'ForbiddenException', ],
				[ 'shape' => 'BadGatewayException', ],
				[ 'shape' => 'NotFoundException', ],
				[ 'shape' => 'GatewayTimeoutException', ],
				[ 'shape' => 'TooManyRequestsException', ],
				[ 'shape' => 'ConflictException', ],
			],
		],
		'DeleteSchedule'             => [
			'name'   => 'DeleteSchedule',
			'http'   => [
				'method'       => 'DELETE',
				'requestUri'   => '/prod/channels/{channelId}/schedule',
				'responseCode' => 200,
			],
			'input'  => [ 'shape' => 'DeleteScheduleRequest', ],
			'output' => [ 'shape' => 'DeleteScheduleResponse', ],
			'errors' => [
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'InternalServerErrorException', ],
				[ 'shape' => 'ForbiddenException', ],
				[ 'shape' => 'BadGatewayException', ],
				[ 'shape' => 'NotFoundException', ],
				[ 'shape' => 'GatewayTimeoutException', ],
				[ 'shape' => 'TooManyRequestsException', ],
			],
		],
		'DeleteTags'                 => [
			'name'   => 'DeleteTags',
			'http'   => [
				'method'       => 'DELETE',
				'requestUri'   => '/prod/tags/{resource-arn}',
				'responseCode' => 204,
			],
			'input'  => [ 'shape' => 'DeleteTagsRequest', ],
			'errors' => [
				[ 'shape' => 'NotFoundException', ],
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'InternalServerErrorException', ],
				[ 'shape' => 'ForbiddenException', ],
			],
		],
		'DescribeChannel'            => [
			'name'   => 'DescribeChannel',
			'http'   => [
				'method'       => 'GET',
				'requestUri'   => '/prod/channels/{channelId}',
				'responseCode' => 200,
			],
			'input'  => [ 'shape' => 'DescribeChannelRequest', ],
			'output' => [ 'shape' => 'DescribeChannelResponse', ],
			'errors' => [
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'InternalServerErrorException', ],
				[ 'shape' => 'ForbiddenException', ],
				[ 'shape' => 'BadGatewayException', ],
				[ 'shape' => 'NotFoundException', ],
				[ 'shape' => 'GatewayTimeoutException', ],
				[ 'shape' => 'TooManyRequestsException', ],
			],
		],
		'DescribeInput'              => [
			'name'   => 'DescribeInput',
			'http'   => [
				'method'       => 'GET',
				'requestUri'   => '/prod/inputs/{inputId}',
				'responseCode' => 200,
			],
			'input'  => [ 'shape' => 'DescribeInputRequest', ],
			'output' => [ 'shape' => 'DescribeInputResponse', ],
			'errors' => [
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'InternalServerErrorException', ],
				[ 'shape' => 'ForbiddenException', ],
				[ 'shape' => 'BadGatewayException', ],
				[ 'shape' => 'NotFoundException', ],
				[ 'shape' => 'GatewayTimeoutException', ],
				[ 'shape' => 'TooManyRequestsException', ],
			],
		],
		'DescribeInputSecurityGroup' => [
			'name'   => 'DescribeInputSecurityGroup',
			'http'   => [
				'method'       => 'GET',
				'requestUri'   => '/prod/inputSecurityGroups/{inputSecurityGroupId}',
				'responseCode' => 200,
			],
			'input'  => [ 'shape' => 'DescribeInputSecurityGroupRequest', ],
			'output' => [ 'shape' => 'DescribeInputSecurityGroupResponse', ],
			'errors' => [
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'InternalServerErrorException', ],
				[ 'shape' => 'ForbiddenException', ],
				[ 'shape' => 'BadGatewayException', ],
				[ 'shape' => 'NotFoundException', ],
				[ 'shape' => 'GatewayTimeoutException', ],
				[ 'shape' => 'TooManyRequestsException', ],
			],
		],
		'DescribeOffering'           => [
			'name'   => 'DescribeOffering',
			'http'   => [
				'method'       => 'GET',
				'requestUri'   => '/prod/offerings/{offeringId}',
				'responseCode' => 200,
			],
			'input'  => [ 'shape' => 'DescribeOfferingRequest', ],
			'output' => [ 'shape' => 'DescribeOfferingResponse', ],
			'errors' => [
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'InternalServerErrorException', ],
				[ 'shape' => 'ForbiddenException', ],
				[ 'shape' => 'BadGatewayException', ],
				[ 'shape' => 'NotFoundException', ],
				[ 'shape' => 'GatewayTimeoutException', ],
				[ 'shape' => 'TooManyRequestsException', ],
			],
		],
		'DescribeReservation'        => [
			'name'   => 'DescribeReservation',
			'http'   => [
				'method'       => 'GET',
				'requestUri'   => '/prod/reservations/{reservationId}',
				'responseCode' => 200,
			],
			'input'  => [ 'shape' => 'DescribeReservationRequest', ],
			'output' => [ 'shape' => 'DescribeReservationResponse', ],
			'errors' => [
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'InternalServerErrorException', ],
				[ 'shape' => 'ForbiddenException', ],
				[ 'shape' => 'BadGatewayException', ],
				[ 'shape' => 'NotFoundException', ],
				[ 'shape' => 'GatewayTimeoutException', ],
				[ 'shape' => 'TooManyRequestsException', ],
			],
		],
		'DescribeSchedule'           => [
			'name'   => 'DescribeSchedule',
			'http'   => [
				'method'       => 'GET',
				'requestUri'   => '/prod/channels/{channelId}/schedule',
				'responseCode' => 200,
			],
			'input'  => [ 'shape' => 'DescribeScheduleRequest', ],
			'output' => [ 'shape' => 'DescribeScheduleResponse', ],
			'errors' => [
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'InternalServerErrorException', ],
				[ 'shape' => 'ForbiddenException', ],
				[ 'shape' => 'BadGatewayException', ],
				[ 'shape' => 'NotFoundException', ],
				[ 'shape' => 'GatewayTimeoutException', ],
				[ 'shape' => 'TooManyRequestsException', ],
			],
		],
		'ListChannels'               => [
			'name'   => 'ListChannels',
			'http'   => [
				'method'       => 'GET',
				'requestUri'   => '/prod/channels',
				'responseCode' => 200,
			],
			'input'  => [ 'shape' => 'ListChannelsRequest', ],
			'output' => [ 'shape' => 'ListChannelsResponse', ],
			'errors' => [
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'InternalServerErrorException', ],
				[ 'shape' => 'ForbiddenException', ],
				[ 'shape' => 'BadGatewayException', ],
				[ 'shape' => 'GatewayTimeoutException', ],
				[ 'shape' => 'TooManyRequestsException', ],
			],
		],
		'ListInputSecurityGroups'    => [
			'name'   => 'ListInputSecurityGroups',
			'http'   => [
				'method'       => 'GET',
				'requestUri'   => '/prod/inputSecurityGroups',
				'responseCode' => 200,
			],
			'input'  => [ 'shape' => 'ListInputSecurityGroupsRequest', ],
			'output' => [ 'shape' => 'ListInputSecurityGroupsResponse', ],
			'errors' => [
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'InternalServerErrorException', ],
				[ 'shape' => 'ForbiddenException', ],
				[ 'shape' => 'BadGatewayException', ],
				[ 'shape' => 'GatewayTimeoutException', ],
				[ 'shape' => 'TooManyRequestsException', ],
			],
		],
		'ListInputs'                 => [
			'name'   => 'ListInputs',
			'http'   => [
				'method'       => 'GET',
				'requestUri'   => '/prod/inputs',
				'responseCode' => 200,
			],
			'input'  => [ 'shape' => 'ListInputsRequest', ],
			'output' => [ 'shape' => 'ListInputsResponse', ],
			'errors' => [
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'InternalServerErrorException', ],
				[ 'shape' => 'ForbiddenException', ],
				[ 'shape' => 'BadGatewayException', ],
				[ 'shape' => 'GatewayTimeoutException', ],
				[ 'shape' => 'TooManyRequestsException', ],
			],
		],
		'ListOfferings'              => [
			'name'   => 'ListOfferings',
			'http'   => [
				'method'       => 'GET',
				'requestUri'   => '/prod/offerings',
				'responseCode' => 200,
			],
			'input'  => [ 'shape' => 'ListOfferingsRequest', ],
			'output' => [ 'shape' => 'ListOfferingsResponse', ],
			'errors' => [
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'InternalServerErrorException', ],
				[ 'shape' => 'ForbiddenException', ],
				[ 'shape' => 'BadGatewayException', ],
				[ 'shape' => 'GatewayTimeoutException', ],
				[ 'shape' => 'TooManyRequestsException', ],
			],
		],
		'ListReservations'           => [
			'name'   => 'ListReservations',
			'http'   => [
				'method'       => 'GET',
				'requestUri'   => '/prod/reservations',
				'responseCode' => 200,
			],
			'input'  => [ 'shape' => 'ListReservationsRequest', ],
			'output' => [ 'shape' => 'ListReservationsResponse', ],
			'errors' => [
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'InternalServerErrorException', ],
				[ 'shape' => 'ForbiddenException', ],
				[ 'shape' => 'BadGatewayException', ],
				[ 'shape' => 'GatewayTimeoutException', ],
				[ 'shape' => 'TooManyRequestsException', ],
			],
		],
		'ListTagsForResource'        => [
			'name'   => 'ListTagsForResource',
			'http'   => [
				'method'       => 'GET',
				'requestUri'   => '/prod/tags/{resource-arn}',
				'responseCode' => 200,
			],
			'input'  => [ 'shape' => 'ListTagsForResourceRequest', ],
			'output' => [ 'shape' => 'ListTagsForResourceResponse', ],
			'errors' => [
				[ 'shape' => 'NotFoundException', ],
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'InternalServerErrorException', ],
				[ 'shape' => 'ForbiddenException', ],
			],
		],
		'PurchaseOffering'           => [
			'name'   => 'PurchaseOffering',
			'http'   => [
				'method'       => 'POST',
				'requestUri'   => '/prod/offerings/{offeringId}/purchase',
				'responseCode' => 201,
			],
			'input'  => [ 'shape' => 'PurchaseOfferingRequest', ],
			'output' => [ 'shape' => 'PurchaseOfferingResponse', ],
			'errors' => [
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'InternalServerErrorException', ],
				[ 'shape' => 'ForbiddenException', ],
				[ 'shape' => 'BadGatewayException', ],
				[ 'shape' => 'NotFoundException', ],
				[ 'shape' => 'GatewayTimeoutException', ],
				[ 'shape' => 'TooManyRequestsException', ],
				[ 'shape' => 'ConflictException', ],
			],
		],
		'StartChannel'               => [
			'name'   => 'StartChannel',
			'http'   => [
				'method'       => 'POST',
				'requestUri'   => '/prod/channels/{channelId}/start',
				'responseCode' => 200,
			],
			'input'  => [ 'shape' => 'StartChannelRequest', ],
			'output' => [ 'shape' => 'StartChannelResponse', ],
			'errors' => [
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'InternalServerErrorException', ],
				[ 'shape' => 'ForbiddenException', ],
				[ 'shape' => 'BadGatewayException', ],
				[ 'shape' => 'NotFoundException', ],
				[ 'shape' => 'GatewayTimeoutException', ],
				[ 'shape' => 'TooManyRequestsException', ],
				[ 'shape' => 'ConflictException', ],
			],
		],
		'StopChannel'                => [
			'name'   => 'StopChannel',
			'http'   => [
				'method'       => 'POST',
				'requestUri'   => '/prod/channels/{channelId}/stop',
				'responseCode' => 200,
			],
			'input'  => [ 'shape' => 'StopChannelRequest', ],
			'output' => [ 'shape' => 'StopChannelResponse', ],
			'errors' => [
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'InternalServerErrorException', ],
				[ 'shape' => 'ForbiddenException', ],
				[ 'shape' => 'BadGatewayException', ],
				[ 'shape' => 'NotFoundException', ],
				[ 'shape' => 'GatewayTimeoutException', ],
				[ 'shape' => 'TooManyRequestsException', ],
				[ 'shape' => 'ConflictException', ],
			],
		],
		'UpdateChannel'              => [
			'name'   => 'UpdateChannel',
			'http'   => [
				'method'       => 'PUT',
				'requestUri'   => '/prod/channels/{channelId}',
				'responseCode' => 200,
			],
			'input'  => [ 'shape' => 'UpdateChannelRequest', ],
			'output' => [ 'shape' => 'UpdateChannelResponse', ],
			'errors' => [
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'UnprocessableEntityException', ],
				[ 'shape' => 'InternalServerErrorException', ],
				[ 'shape' => 'ForbiddenException', ],
				[ 'shape' => 'BadGatewayException', ],
				[ 'shape' => 'GatewayTimeoutException', ],
				[ 'shape' => 'ConflictException', ],
			],
		],
		'UpdateChannelClass'         => [
			'name'   => 'UpdateChannelClass',
			'http'   => [
				'method'       => 'PUT',
				'requestUri'   => '/prod/channels/{channelId}/channelClass',
				'responseCode' => 200,
			],
			'input'  => [ 'shape' => 'UpdateChannelClassRequest', ],
			'output' => [ 'shape' => 'UpdateChannelClassResponse', ],
			'errors' => [
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'UnprocessableEntityException', ],
				[ 'shape' => 'InternalServerErrorException', ],
				[ 'shape' => 'ForbiddenException', ],
				[ 'shape' => 'BadGatewayException', ],
				[ 'shape' => 'NotFoundException', ],
				[ 'shape' => 'GatewayTimeoutException', ],
				[ 'shape' => 'TooManyRequestsException', ],
				[ 'shape' => 'ConflictException', ],
			],
		],
		'UpdateInput'                => [
			'name'   => 'UpdateInput',
			'http'   => [
				'method'       => 'PUT',
				'requestUri'   => '/prod/inputs/{inputId}',
				'responseCode' => 200,
			],
			'input'  => [ 'shape' => 'UpdateInputRequest', ],
			'output' => [ 'shape' => 'UpdateInputResponse', ],
			'errors' => [
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'InternalServerErrorException', ],
				[ 'shape' => 'ForbiddenException', ],
				[ 'shape' => 'BadGatewayException', ],
				[ 'shape' => 'NotFoundException', ],
				[ 'shape' => 'GatewayTimeoutException', ],
				[ 'shape' => 'ConflictException', ],
			],
		],
		'UpdateInputSecurityGroup'   => [
			'name'   => 'UpdateInputSecurityGroup',
			'http'   => [
				'method'       => 'PUT',
				'requestUri'   => '/prod/inputSecurityGroups/{inputSecurityGroupId}',
				'responseCode' => 200,
			],
			'input'  => [ 'shape' => 'UpdateInputSecurityGroupRequest', ],
			'output' => [ 'shape' => 'UpdateInputSecurityGroupResponse', ],
			'errors' => [
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'InternalServerErrorException', ],
				[ 'shape' => 'ForbiddenException', ],
				[ 'shape' => 'BadGatewayException', ],
				[ 'shape' => 'NotFoundException', ],
				[ 'shape' => 'GatewayTimeoutException', ],
				[ 'shape' => 'ConflictException', ],
			],
		],
		'UpdateReservation'          => [
			'name'   => 'UpdateReservation',
			'http'   => [
				'method'       => 'PUT',
				'requestUri'   => '/prod/reservations/{reservationId}',
				'responseCode' => 200,
			],
			'input'  => [ 'shape' => 'UpdateReservationRequest', ],
			'output' => [ 'shape' => 'UpdateReservationResponse', ],
			'errors' => [
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'InternalServerErrorException', ],
				[ 'shape' => 'ForbiddenException', ],
				[ 'shape' => 'BadGatewayException', ],
				[ 'shape' => 'NotFoundException', ],
				[ 'shape' => 'GatewayTimeoutException', ],
				[ 'shape' => 'TooManyRequestsException', ],
				[ 'shape' => 'ConflictException', ],
			],
		],
	],
	'shapes'     => [
		'AacCodingMode'                                 => [
			'type' => 'string',
			'enum' => [
				'AD_RECEIVER_MIX',
				'CODING_MODE_1_0',
				'CODING_MODE_1_1',
				'CODING_MODE_2_0',
				'CODING_MODE_5_1',
			],
		],
		'AacInputType'                                  => [
			'type' => 'string',
			'enum' => [ 'BROADCASTER_MIXED_AD', 'NORMAL', ],
		],
		'AacProfile'                                    => [ 'type' => 'string', 'enum' => [ 'HEV1', 'HEV2', 'LC', ], ],
		'AacRateControlMode'                            => [ 'type' => 'string', 'enum' => [ 'CBR', 'VBR', ], ],
		'AacRawFormat'                                  => [ 'type' => 'string', 'enum' => [ 'LATM_LOAS', 'NONE', ], ],
		'AacSettings'                                   => [
			'type'    => 'structure',
			'members' => [
				'Bitrate'         => [
					'shape'        => '__double',
					'locationName' => 'bitrate',
				],
				'CodingMode'      => [
					'shape'        => 'AacCodingMode',
					'locationName' => 'codingMode',
				],
				'InputType'       => [
					'shape'        => 'AacInputType',
					'locationName' => 'inputType',
				],
				'Profile'         => [
					'shape'        => 'AacProfile',
					'locationName' => 'profile',
				],
				'RateControlMode' => [
					'shape'        => 'AacRateControlMode',
					'locationName' => 'rateControlMode',
				],
				'RawFormat'       => [
					'shape'        => 'AacRawFormat',
					'locationName' => 'rawFormat',
				],
				'SampleRate'      => [
					'shape'        => '__double',
					'locationName' => 'sampleRate',
				],
				'Spec'            => [
					'shape'        => 'AacSpec',
					'locationName' => 'spec',
				],
				'VbrQuality'      => [
					'shape'        => 'AacVbrQuality',
					'locationName' => 'vbrQuality',
				],
			],
		],
		'AacSpec'                                       => [ 'type' => 'string', 'enum' => [ 'MPEG2', 'MPEG4', ], ],
		'AacVbrQuality'                                 => [
			'type' => 'string',
			'enum' => [ 'HIGH', 'LOW', 'MEDIUM_HIGH', 'MEDIUM_LOW', ],
		],
		'Ac3BitstreamMode'                              => [
			'type' => 'string',
			'enum' => [
				'COMMENTARY',
				'COMPLETE_MAIN',
				'DIALOGUE',
				'EMERGENCY',
				'HEARING_IMPAIRED',
				'MUSIC_AND_EFFECTS',
				'VISUALLY_IMPAIRED',
				'VOICE_OVER',
			],
		],
		'Ac3CodingMode'                                 => [
			'type' => 'string',
			'enum' => [
				'CODING_MODE_1_0',
				'CODING_MODE_1_1',
				'CODING_MODE_2_0',
				'CODING_MODE_3_2_LFE',
			],
		],
		'Ac3DrcProfile'                                 => [
			'type' => 'string',
			'enum' => [ 'FILM_STANDARD', 'NONE', ],
		],
		'Ac3LfeFilter'                                  => [
			'type' => 'string',
			'enum' => [ 'DISABLED', 'ENABLED', ],
		],
		'Ac3MetadataControl'                            => [
			'type' => 'string',
			'enum' => [ 'FOLLOW_INPUT', 'USE_CONFIGURED', ],
		],
		'Ac3Settings'                                   => [
			'type'    => 'structure',
			'members' => [
				'Bitrate'         => [
					'shape'        => '__double',
					'locationName' => 'bitrate',
				],
				'BitstreamMode'   => [
					'shape'        => 'Ac3BitstreamMode',
					'locationName' => 'bitstreamMode',
				],
				'CodingMode'      => [
					'shape'        => 'Ac3CodingMode',
					'locationName' => 'codingMode',
				],
				'Dialnorm'        => [
					'shape'        => '__integerMin1Max31',
					'locationName' => 'dialnorm',
				],
				'DrcProfile'      => [
					'shape'        => 'Ac3DrcProfile',
					'locationName' => 'drcProfile',
				],
				'LfeFilter'       => [
					'shape'        => 'Ac3LfeFilter',
					'locationName' => 'lfeFilter',
				],
				'MetadataControl' => [
					'shape'        => 'Ac3MetadataControl',
					'locationName' => 'metadataControl',
				],
			],
		],
		'AccessDenied'                                  => [
			'type'    => 'structure',
			'members' => [
				'Message' => [
					'shape'        => '__string',
					'locationName' => 'message',
				],
			],
		],
		'AfdSignaling'                                  => [
			'type' => 'string',
			'enum' => [ 'AUTO', 'FIXED', 'NONE', ],
		],
		'ArchiveContainerSettings'                      => [
			'type'    => 'structure',
			'members' => [
				'M2tsSettings' => [
					'shape'        => 'M2tsSettings',
					'locationName' => 'm2tsSettings',
				],
			],
		],
		'ArchiveGroupSettings'                          => [
			'type'     => 'structure',
			'members'  => [
				'Destination'      => [
					'shape'        => 'OutputLocationRef',
					'locationName' => 'destination',
				],
				'RolloverInterval' => [
					'shape'        => '__integerMin1',
					'locationName' => 'rolloverInterval',
				],
			],
			'required' => [ 'Destination', ],
		],
		'ArchiveOutputSettings'                         => [
			'type'     => 'structure',
			'members'  => [
				'ContainerSettings' => [
					'shape'        => 'ArchiveContainerSettings',
					'locationName' => 'containerSettings',
				],
				'Extension'         => [
					'shape'        => '__string',
					'locationName' => 'extension',
				],
				'NameModifier'      => [
					'shape'        => '__string',
					'locationName' => 'nameModifier',
				],
			],
			'required' => [ 'ContainerSettings', ],
		],
		'AribDestinationSettings'                       => [ 'type' => 'structure', 'members' => [], ],
		'AribSourceSettings'                            => [ 'type' => 'structure', 'members' => [], ],
		'AudioChannelMapping'                           => [
			'type'     => 'structure',
			'members'  => [
				'InputChannelLevels' => [
					'shape'        => '__listOfInputChannelLevel',
					'locationName' => 'inputChannelLevels',
				],
				'OutputChannel'      => [
					'shape'        => '__integerMin0Max7',
					'locationName' => 'outputChannel',
				],
			],
			'required' => [ 'OutputChannel', 'InputChannelLevels', ],
		],
		'AudioCodecSettings'                            => [
			'type'    => 'structure',
			'members' => [
				'AacSettings'         => [
					'shape'        => 'AacSettings',
					'locationName' => 'aacSettings',
				],
				'Ac3Settings'         => [
					'shape'        => 'Ac3Settings',
					'locationName' => 'ac3Settings',
				],
				'Eac3Settings'        => [
					'shape'        => 'Eac3Settings',
					'locationName' => 'eac3Settings',
				],
				'Mp2Settings'         => [
					'shape'        => 'Mp2Settings',
					'locationName' => 'mp2Settings',
				],
				'PassThroughSettings' => [
					'shape'        => 'PassThroughSettings',
					'locationName' => 'passThroughSettings',
				],
			],
		],
		'AudioDescription'                              => [
			'type'     => 'structure',
			'members'  => [
				'AudioNormalizationSettings' => [
					'shape'        => 'AudioNormalizationSettings',
					'locationName' => 'audioNormalizationSettings',
				],
				'AudioSelectorName'          => [
					'shape'        => '__string',
					'locationName' => 'audioSelectorName',
				],
				'AudioType'                  => [ 'shape' => 'AudioType', 'locationName' => 'audioType', ],
				'AudioTypeControl'           => [
					'shape'        => 'AudioDescriptionAudioTypeControl',
					'locationName' => 'audioTypeControl',
				],
				'CodecSettings'              => [
					'shape'        => 'AudioCodecSettings',
					'locationName' => 'codecSettings',
				],
				'LanguageCode'               => [
					'shape'        => '__stringMin3Max3',
					'locationName' => 'languageCode',
				],
				'LanguageCodeControl'        => [
					'shape'        => 'AudioDescriptionLanguageCodeControl',
					'locationName' => 'languageCodeControl',
				],
				'Name'                       => [ 'shape' => '__string', 'locationName' => 'name', ],
				'RemixSettings'              => [
					'shape'        => 'RemixSettings',
					'locationName' => 'remixSettings',
				],
				'StreamName'                 => [ 'shape' => '__string', 'locationName' => 'streamName', ],
			],
			'required' => [ 'AudioSelectorName', 'Name', ],
		],
		'AudioDescriptionAudioTypeControl'              => [
			'type' => 'string',
			'enum' => [ 'FOLLOW_INPUT', 'USE_CONFIGURED', ],
		],
		'AudioDescriptionLanguageCodeControl'           => [
			'type' => 'string',
			'enum' => [ 'FOLLOW_INPUT', 'USE_CONFIGURED', ],
		],
		'AudioLanguageSelection'                        => [
			'type'     => 'structure',
			'members'  => [
				'LanguageCode'            => [
					'shape'        => '__string',
					'locationName' => 'languageCode',
				],
				'LanguageSelectionPolicy' => [
					'shape'        => 'AudioLanguageSelectionPolicy',
					'locationName' => 'languageSelectionPolicy',
				],
			],
			'required' => [ 'LanguageCode', ],
		],
		'AudioLanguageSelectionPolicy'                  => [ 'type' => 'string', 'enum' => [ 'LOOSE', 'STRICT', ], ],
		'AudioNormalizationAlgorithm'                   => [
			'type' => 'string',
			'enum' => [ 'ITU_1770_1', 'ITU_1770_2', ],
		],
		'AudioNormalizationAlgorithmControl'            => [ 'type' => 'string', 'enum' => [ 'CORRECT_AUDIO', ], ],
		'AudioNormalizationSettings'                    => [
			'type'    => 'structure',
			'members' => [
				'Algorithm'        => [
					'shape'        => 'AudioNormalizationAlgorithm',
					'locationName' => 'algorithm',
				],
				'AlgorithmControl' => [
					'shape'        => 'AudioNormalizationAlgorithmControl',
					'locationName' => 'algorithmControl',
				],
				'TargetLkfs'       => [
					'shape'        => '__doubleMinNegative59Max0',
					'locationName' => 'targetLkfs',
				],
			],
		],
		'AudioOnlyHlsSettings'                          => [
			'type'    => 'structure',
			'members' => [
				'AudioGroupId'   => [
					'shape'        => '__string',
					'locationName' => 'audioGroupId',
				],
				'AudioOnlyImage' => [
					'shape'        => 'InputLocation',
					'locationName' => 'audioOnlyImage',
				],
				'AudioTrackType' => [
					'shape'        => 'AudioOnlyHlsTrackType',
					'locationName' => 'audioTrackType',
				],
			],
		],
		'AudioOnlyHlsTrackType'                         => [
			'type' => 'string',
			'enum' => [
				'ALTERNATE_AUDIO_AUTO_SELECT',
				'ALTERNATE_AUDIO_AUTO_SELECT_DEFAULT',
				'ALTERNATE_AUDIO_NOT_AUTO_SELECT',
				'AUDIO_ONLY_VARIANT_STREAM',
			],
		],
		'AudioPidSelection'                             => [
			'type'     => 'structure',
			'members'  => [
				'Pid' => [
					'shape'        => '__integerMin0Max8191',
					'locationName' => 'pid',
				],
			],
			'required' => [ 'Pid', ],
		],
		'AudioSelector'                                 => [
			'type'     => 'structure',
			'members'  => [
				'Name'             => [
					'shape'        => '__stringMin1',
					'locationName' => 'name',
				],
				'SelectorSettings' => [
					'shape'        => 'AudioSelectorSettings',
					'locationName' => 'selectorSettings',
				],
			],
			'required' => [ 'Name', ],
		],
		'AudioSelectorSettings'                         => [
			'type'    => 'structure',
			'members' => [
				'AudioLanguageSelection' => [
					'shape'        => 'AudioLanguageSelection',
					'locationName' => 'audioLanguageSelection',
				],
				'AudioPidSelection'      => [
					'shape'        => 'AudioPidSelection',
					'locationName' => 'audioPidSelection',
				],
			],
		],
		'AudioType'                                     => [
			'type' => 'string',
			'enum' => [
				'CLEAN_EFFECTS',
				'HEARING_IMPAIRED',
				'UNDEFINED',
				'VISUAL_IMPAIRED_COMMENTARY',
			],
		],
		'AuthenticationScheme'                          => [ 'type' => 'string', 'enum' => [ 'AKAMAI', 'COMMON', ], ],
		'AvailBlanking'                                 => [
			'type'    => 'structure',
			'members' => [
				'AvailBlankingImage' => [
					'shape'        => 'InputLocation',
					'locationName' => 'availBlankingImage',
				],
				'State'              => [
					'shape'        => 'AvailBlankingState',
					'locationName' => 'state',
				],
			],
		],
		'AvailBlankingState'                            => [
			'type' => 'string',
			'enum' => [ 'DISABLED', 'ENABLED', ],
		],
		'AvailConfiguration'                            => [
			'type'    => 'structure',
			'members' => [
				'AvailSettings' => [
					'shape'        => 'AvailSettings',
					'locationName' => 'availSettings',
				],
			],
		],
		'AvailSettings'                                 => [
			'type'    => 'structure',
			'members' => [
				'Scte35SpliceInsert'   => [
					'shape'        => 'Scte35SpliceInsert',
					'locationName' => 'scte35SpliceInsert',
				],
				'Scte35TimeSignalApos' => [
					'shape'        => 'Scte35TimeSignalApos',
					'locationName' => 'scte35TimeSignalApos',
				],
			],
		],
		'BadGatewayException'                           => [
			'type'      => 'structure',
			'members'   => [
				'Message' => [
					'shape'        => '__string',
					'locationName' => 'message',
				],
			],
			'exception' => true,
			'error'     => [ 'httpStatusCode' => 502, ],
		],
		'BadRequestException'                           => [
			'type'      => 'structure',
			'members'   => [
				'Message' => [
					'shape'        => '__string',
					'locationName' => 'message',
				],
			],
			'exception' => true,
			'error'     => [ 'httpStatusCode' => 400, ],
		],
		'BatchScheduleActionCreateRequest'              => [
			'type'     => 'structure',
			'members'  => [
				'ScheduleActions' => [
					'shape'        => '__listOfScheduleAction',
					'locationName' => 'scheduleActions',
				],
			],
			'required' => [ 'ScheduleActions', ],
		],
		'BatchScheduleActionCreateResult'               => [
			'type'     => 'structure',
			'members'  => [
				'ScheduleActions' => [
					'shape'        => '__listOfScheduleAction',
					'locationName' => 'scheduleActions',
				],
			],
			'required' => [ 'ScheduleActions', ],
		],
		'BatchScheduleActionDeleteRequest'              => [
			'type'     => 'structure',
			'members'  => [
				'ActionNames' => [
					'shape'        => '__listOf__string',
					'locationName' => 'actionNames',
				],
			],
			'required' => [ 'ActionNames', ],
		],
		'BatchScheduleActionDeleteResult'               => [
			'type'     => 'structure',
			'members'  => [
				'ScheduleActions' => [
					'shape'        => '__listOfScheduleAction',
					'locationName' => 'scheduleActions',
				],
			],
			'required' => [ 'ScheduleActions', ],
		],
		'BatchUpdateScheduleRequest'                    => [
			'type'     => 'structure',
			'members'  => [
				'ChannelId' => [
					'shape'        => '__string',
					'location'     => 'uri',
					'locationName' => 'channelId',
				],
				'Creates'   => [
					'shape'        => 'BatchScheduleActionCreateRequest',
					'locationName' => 'creates',
				],
				'Deletes'   => [
					'shape'        => 'BatchScheduleActionDeleteRequest',
					'locationName' => 'deletes',
				],
			],
			'required' => [ 'ChannelId', ],
		],
		'BatchUpdateScheduleResponse'                   => [
			'type'    => 'structure',
			'members' => [
				'Creates' => [
					'shape'        => 'BatchScheduleActionCreateResult',
					'locationName' => 'creates',
				],
				'Deletes' => [
					'shape'        => 'BatchScheduleActionDeleteResult',
					'locationName' => 'deletes',
				],
			],
		],
		'BatchUpdateScheduleResult'                     => [
			'type'    => 'structure',
			'members' => [
				'Creates' => [
					'shape'        => 'BatchScheduleActionCreateResult',
					'locationName' => 'creates',
				],
				'Deletes' => [
					'shape'        => 'BatchScheduleActionDeleteResult',
					'locationName' => 'deletes',
				],
			],
		],
		'BlackoutSlate'                                 => [
			'type'    => 'structure',
			'members' => [
				'BlackoutSlateImage'      => [
					'shape'        => 'InputLocation',
					'locationName' => 'blackoutSlateImage',
				],
				'NetworkEndBlackout'      => [
					'shape'        => 'BlackoutSlateNetworkEndBlackout',
					'locationName' => 'networkEndBlackout',
				],
				'NetworkEndBlackoutImage' => [
					'shape'        => 'InputLocation',
					'locationName' => 'networkEndBlackoutImage',
				],
				'NetworkId'               => [
					'shape'        => '__stringMin34Max34',
					'locationName' => 'networkId',
				],
				'State'                   => [
					'shape'        => 'BlackoutSlateState',
					'locationName' => 'state',
				],
			],
		],
		'BlackoutSlateNetworkEndBlackout'               => [
			'type' => 'string',
			'enum' => [ 'DISABLED', 'ENABLED', ],
		],
		'BlackoutSlateState'                            => [
			'type' => 'string',
			'enum' => [ 'DISABLED', 'ENABLED', ],
		],
		'BurnInAlignment'                               => [
			'type' => 'string',
			'enum' => [ 'CENTERED', 'LEFT', 'SMART', ],
		],
		'BurnInBackgroundColor'                         => [
			'type' => 'string',
			'enum' => [ 'BLACK', 'NONE', 'WHITE', ],
		],
		'BurnInDestinationSettings'                     => [
			'type'    => 'structure',
			'members' => [
				'Alignment'           => [ 'shape' => 'BurnInAlignment', 'locationName' => 'alignment', ],
				'BackgroundColor'     => [ 'shape' => 'BurnInBackgroundColor', 'locationName' => 'backgroundColor', ],
				'BackgroundOpacity'   => [ 'shape' => '__integerMin0Max255', 'locationName' => 'backgroundOpacity', ],
				'Font'                => [ 'shape' => 'InputLocation', 'locationName' => 'font', ],
				'FontColor'           => [ 'shape' => 'BurnInFontColor', 'locationName' => 'fontColor', ],
				'FontOpacity'         => [ 'shape' => '__integerMin0Max255', 'locationName' => 'fontOpacity', ],
				'FontResolution'      => [ 'shape' => '__integerMin96Max600', 'locationName' => 'fontResolution', ],
				'FontSize'            => [ 'shape' => '__string', 'locationName' => 'fontSize', ],
				'OutlineColor'        => [ 'shape' => 'BurnInOutlineColor', 'locationName' => 'outlineColor', ],
				'OutlineSize'         => [ 'shape' => '__integerMin0Max10', 'locationName' => 'outlineSize', ],
				'ShadowColor'         => [ 'shape' => 'BurnInShadowColor', 'locationName' => 'shadowColor', ],
				'ShadowOpacity'       => [ 'shape' => '__integerMin0Max255', 'locationName' => 'shadowOpacity', ],
				'ShadowXOffset'       => [ 'shape' => '__integer', 'locationName' => 'shadowXOffset', ],
				'ShadowYOffset'       => [ 'shape' => '__integer', 'locationName' => 'shadowYOffset', ],
				'TeletextGridControl' => [
					'shape'        => 'BurnInTeletextGridControl',
					'locationName' => 'teletextGridControl',
				],
				'XPosition'           => [ 'shape' => '__integerMin0', 'locationName' => 'xPosition', ],
				'YPosition'           => [ 'shape' => '__integerMin0', 'locationName' => 'yPosition', ],
			],
		],
		'BurnInFontColor'                               => [
			'type' => 'string',
			'enum' => [ 'BLACK', 'BLUE', 'GREEN', 'RED', 'WHITE', 'YELLOW', ],
		],
		'BurnInOutlineColor'                            => [
			'type' => 'string',
			'enum' => [ 'BLACK', 'BLUE', 'GREEN', 'RED', 'WHITE', 'YELLOW', ],
		],
		'BurnInShadowColor'                             => [
			'type' => 'string',
			'enum' => [ 'BLACK', 'NONE', 'WHITE', ],
		],
		'BurnInTeletextGridControl'                     => [ 'type' => 'string', 'enum' => [ 'FIXED', 'SCALED', ], ],
		'CaptionDescription'                            => [
			'type'     => 'structure',
			'members'  => [
				'CaptionSelectorName' => [
					'shape'        => '__string',
					'locationName' => 'captionSelectorName',
				],
				'DestinationSettings' => [
					'shape'        => 'CaptionDestinationSettings',
					'locationName' => 'destinationSettings',
				],
				'LanguageCode'        => [
					'shape'        => '__string',
					'locationName' => 'languageCode',
				],
				'LanguageDescription' => [
					'shape'        => '__string',
					'locationName' => 'languageDescription',
				],
				'Name'                => [
					'shape'        => '__string',
					'locationName' => 'name',
				],
			],
			'required' => [ 'CaptionSelectorName', 'Name', ],
		],
		'CaptionDestinationSettings'                    => [
			'type'    => 'structure',
			'members' => [
				'AribDestinationSettings'               => [
					'shape'        => 'AribDestinationSettings',
					'locationName' => 'aribDestinationSettings',
				],
				'BurnInDestinationSettings'             => [
					'shape'        => 'BurnInDestinationSettings',
					'locationName' => 'burnInDestinationSettings',
				],
				'DvbSubDestinationSettings'             => [
					'shape'        => 'DvbSubDestinationSettings',
					'locationName' => 'dvbSubDestinationSettings',
				],
				'EmbeddedDestinationSettings'           => [
					'shape'        => 'EmbeddedDestinationSettings',
					'locationName' => 'embeddedDestinationSettings',
				],
				'EmbeddedPlusScte20DestinationSettings' => [
					'shape'        => 'EmbeddedPlusScte20DestinationSettings',
					'locationName' => 'embeddedPlusScte20DestinationSettings',
				],
				'RtmpCaptionInfoDestinationSettings'    => [
					'shape'        => 'RtmpCaptionInfoDestinationSettings',
					'locationName' => 'rtmpCaptionInfoDestinationSettings',
				],
				'Scte20PlusEmbeddedDestinationSettings' => [
					'shape'        => 'Scte20PlusEmbeddedDestinationSettings',
					'locationName' => 'scte20PlusEmbeddedDestinationSettings',
				],
				'Scte27DestinationSettings'             => [
					'shape'        => 'Scte27DestinationSettings',
					'locationName' => 'scte27DestinationSettings',
				],
				'SmpteTtDestinationSettings'            => [
					'shape'        => 'SmpteTtDestinationSettings',
					'locationName' => 'smpteTtDestinationSettings',
				],
				'TeletextDestinationSettings'           => [
					'shape'        => 'TeletextDestinationSettings',
					'locationName' => 'teletextDestinationSettings',
				],
				'TtmlDestinationSettings'               => [
					'shape'        => 'TtmlDestinationSettings',
					'locationName' => 'ttmlDestinationSettings',
				],
				'WebvttDestinationSettings'             => [
					'shape'        => 'WebvttDestinationSettings',
					'locationName' => 'webvttDestinationSettings',
				],
			],
		],
		'CaptionLanguageMapping'                        => [
			'type'     => 'structure',
			'members'  => [
				'CaptionChannel'      => [
					'shape'        => '__integerMin1Max4',
					'locationName' => 'captionChannel',
				],
				'LanguageCode'        => [
					'shape'        => '__stringMin3Max3',
					'locationName' => 'languageCode',
				],
				'LanguageDescription' => [
					'shape'        => '__stringMin1',
					'locationName' => 'languageDescription',
				],
			],
			'required' => [
				'LanguageCode',
				'LanguageDescription',
				'CaptionChannel',
			],
		],
		'CaptionSelector'                               => [
			'type'     => 'structure',
			'members'  => [
				'LanguageCode'     => [
					'shape'        => '__string',
					'locationName' => 'languageCode',
				],
				'Name'             => [
					'shape'        => '__stringMin1',
					'locationName' => 'name',
				],
				'SelectorSettings' => [
					'shape'        => 'CaptionSelectorSettings',
					'locationName' => 'selectorSettings',
				],
			],
			'required' => [ 'Name', ],
		],
		'CaptionSelectorSettings'                       => [
			'type'    => 'structure',
			'members' => [
				'AribSourceSettings'     => [
					'shape'        => 'AribSourceSettings',
					'locationName' => 'aribSourceSettings',
				],
				'DvbSubSourceSettings'   => [
					'shape'        => 'DvbSubSourceSettings',
					'locationName' => 'dvbSubSourceSettings',
				],
				'EmbeddedSourceSettings' => [
					'shape'        => 'EmbeddedSourceSettings',
					'locationName' => 'embeddedSourceSettings',
				],
				'Scte20SourceSettings'   => [
					'shape'        => 'Scte20SourceSettings',
					'locationName' => 'scte20SourceSettings',
				],
				'Scte27SourceSettings'   => [
					'shape'        => 'Scte27SourceSettings',
					'locationName' => 'scte27SourceSettings',
				],
				'TeletextSourceSettings' => [
					'shape'        => 'TeletextSourceSettings',
					'locationName' => 'teletextSourceSettings',
				],
			],
		],
		'Channel'                                       => [
			'type'    => 'structure',
			'members' => [
				'Arn'                   => [ 'shape' => '__string', 'locationName' => 'arn', ],
				'ChannelClass'          => [ 'shape' => 'ChannelClass', 'locationName' => 'channelClass', ],
				'Destinations'          => [
					'shape'        => '__listOfOutputDestination',
					'locationName' => 'destinations',
				],
				'EgressEndpoints'       => [
					'shape'        => '__listOfChannelEgressEndpoint',
					'locationName' => 'egressEndpoints',
				],
				'EncoderSettings'       => [ 'shape' => 'EncoderSettings', 'locationName' => 'encoderSettings', ],
				'Id'                    => [ 'shape' => '__string', 'locationName' => 'id', ],
				'InputAttachments'      => [
					'shape'        => '__listOfInputAttachment',
					'locationName' => 'inputAttachments',
				],
				'InputSpecification'    => [ 'shape' => 'InputSpecification', 'locationName' => 'inputSpecification', ],
				'LogLevel'              => [ 'shape' => 'LogLevel', 'locationName' => 'logLevel', ],
				'Name'                  => [ 'shape' => '__string', 'locationName' => 'name', ],
				'PipelinesRunningCount' => [ 'shape' => '__integer', 'locationName' => 'pipelinesRunningCount', ],
				'RoleArn'               => [ 'shape' => '__string', 'locationName' => 'roleArn', ],
				'State'                 => [ 'shape' => 'ChannelState', 'locationName' => 'state', ],
				'Tags'                  => [ 'shape' => 'Tags', 'locationName' => 'tags', ],
			],
		],
		'ChannelClass'                                  => [
			'type' => 'string',
			'enum' => [ 'STANDARD', 'SINGLE_PIPELINE', ],
		],
		'ChannelConfigurationValidationError'           => [
			'type'    => 'structure',
			'members' => [
				'Message'          => [
					'shape'        => '__string',
					'locationName' => 'message',
				],
				'ValidationErrors' => [
					'shape'        => '__listOfValidationError',
					'locationName' => 'validationErrors',
				],
			],
		],
		'ChannelEgressEndpoint'                         => [
			'type'    => 'structure',
			'members' => [
				'SourceIp' => [
					'shape'        => '__string',
					'locationName' => 'sourceIp',
				],
			],
		],
		'ChannelState'                                  => [
			'type' => 'string',
			'enum' => [
				'CREATING',
				'CREATE_FAILED',
				'IDLE',
				'STARTING',
				'RUNNING',
				'RECOVERING',
				'STOPPING',
				'DELETING',
				'DELETED',
				'UPDATING',
				'UPDATE_FAILED',
			],
		],
		'ChannelSummary'                                => [
			'type'    => 'structure',
			'members' => [
				'Arn'                   => [ 'shape' => '__string', 'locationName' => 'arn', ],
				'ChannelClass'          => [ 'shape' => 'ChannelClass', 'locationName' => 'channelClass', ],
				'Destinations'          => [
					'shape'        => '__listOfOutputDestination',
					'locationName' => 'destinations',
				],
				'EgressEndpoints'       => [
					'shape'        => '__listOfChannelEgressEndpoint',
					'locationName' => 'egressEndpoints',
				],
				'Id'                    => [ 'shape' => '__string', 'locationName' => 'id', ],
				'InputAttachments'      => [
					'shape'        => '__listOfInputAttachment',
					'locationName' => 'inputAttachments',
				],
				'InputSpecification'    => [ 'shape' => 'InputSpecification', 'locationName' => 'inputSpecification', ],
				'LogLevel'              => [ 'shape' => 'LogLevel', 'locationName' => 'logLevel', ],
				'Name'                  => [ 'shape' => '__string', 'locationName' => 'name', ],
				'PipelinesRunningCount' => [ 'shape' => '__integer', 'locationName' => 'pipelinesRunningCount', ],
				'RoleArn'               => [ 'shape' => '__string', 'locationName' => 'roleArn', ],
				'State'                 => [ 'shape' => 'ChannelState', 'locationName' => 'state', ],
				'Tags'                  => [ 'shape' => 'Tags', 'locationName' => 'tags', ],
			],
		],
		'ConflictException'                             => [
			'type'      => 'structure',
			'members'   => [
				'Message' => [
					'shape'        => '__string',
					'locationName' => 'message',
				],
			],
			'exception' => true,
			'error'     => [ 'httpStatusCode' => 409, ],
		],
		'CreateChannel'                                 => [
			'type'    => 'structure',
			'members' => [
				'ChannelClass'       => [
					'shape'        => 'ChannelClass',
					'locationName' => 'channelClass',
				],
				'Destinations'       => [
					'shape'        => '__listOfOutputDestination',
					'locationName' => 'destinations',
				],
				'EncoderSettings'    => [
					'shape'        => 'EncoderSettings',
					'locationName' => 'encoderSettings',
				],
				'InputAttachments'   => [
					'shape'        => '__listOfInputAttachment',
					'locationName' => 'inputAttachments',
				],
				'InputSpecification' => [
					'shape'        => 'InputSpecification',
					'locationName' => 'inputSpecification',
				],
				'LogLevel'           => [
					'shape'        => 'LogLevel',
					'locationName' => 'logLevel',
				],
				'Name'               => [
					'shape'        => '__string',
					'locationName' => 'name',
				],
				'RequestId'          => [
					'shape'            => '__string',
					'locationName'     => 'requestId',
					'idempotencyToken' => true,
				],
				'Reserved'           => [
					'shape'        => '__string',
					'locationName' => 'reserved',
					'deprecated'   => true,
				],
				'RoleArn'            => [
					'shape'        => '__string',
					'locationName' => 'roleArn',
				],
				'Tags'               => [
					'shape'        => 'Tags',
					'locationName' => 'tags',
				],
			],
		],
		'CreateChannelRequest'                          => [
			'type'    => 'structure',
			'members' => [
				'ChannelClass'       => [
					'shape'        => 'ChannelClass',
					'locationName' => 'channelClass',
				],
				'Destinations'       => [
					'shape'        => '__listOfOutputDestination',
					'locationName' => 'destinations',
				],
				'EncoderSettings'    => [
					'shape'        => 'EncoderSettings',
					'locationName' => 'encoderSettings',
				],
				'InputAttachments'   => [
					'shape'        => '__listOfInputAttachment',
					'locationName' => 'inputAttachments',
				],
				'InputSpecification' => [
					'shape'        => 'InputSpecification',
					'locationName' => 'inputSpecification',
				],
				'LogLevel'           => [
					'shape'        => 'LogLevel',
					'locationName' => 'logLevel',
				],
				'Name'               => [
					'shape'        => '__string',
					'locationName' => 'name',
				],
				'RequestId'          => [
					'shape'            => '__string',
					'locationName'     => 'requestId',
					'idempotencyToken' => true,
				],
				'Reserved'           => [
					'shape'        => '__string',
					'locationName' => 'reserved',
					'deprecated'   => true,
				],
				'RoleArn'            => [
					'shape'        => '__string',
					'locationName' => 'roleArn',
				],
				'Tags'               => [
					'shape'        => 'Tags',
					'locationName' => 'tags',
				],
			],
		],
		'CreateChannelResponse'                         => [
			'type'    => 'structure',
			'members' => [
				'Channel' => [
					'shape'        => 'Channel',
					'locationName' => 'channel',
				],
			],
		],
		'CreateChannelResultModel'                      => [
			'type'    => 'structure',
			'members' => [
				'Channel' => [
					'shape'        => 'Channel',
					'locationName' => 'channel',
				],
			],
		],
		'CreateInput'                                   => [
			'type'    => 'structure',
			'members' => [
				'Destinations'        => [
					'shape'        => '__listOfInputDestinationRequest',
					'locationName' => 'destinations',
				],
				'InputSecurityGroups' => [
					'shape'        => '__listOf__string',
					'locationName' => 'inputSecurityGroups',
				],
				'MediaConnectFlows'   => [
					'shape'        => '__listOfMediaConnectFlowRequest',
					'locationName' => 'mediaConnectFlows',
				],
				'Name'                => [
					'shape'        => '__string',
					'locationName' => 'name',
				],
				'RequestId'           => [
					'shape'            => '__string',
					'locationName'     => 'requestId',
					'idempotencyToken' => true,
				],
				'RoleArn'             => [
					'shape'        => '__string',
					'locationName' => 'roleArn',
				],
				'Sources'             => [
					'shape'        => '__listOfInputSourceRequest',
					'locationName' => 'sources',
				],
				'Tags'                => [
					'shape'        => 'Tags',
					'locationName' => 'tags',
				],
				'Type'                => [
					'shape'        => 'InputType',
					'locationName' => 'type',
				],
				'Vpc'                 => [
					'shape'        => 'InputVpcRequest',
					'locationName' => 'vpc',
				],
			],
		],
		'CreateInputRequest'                            => [
			'type'    => 'structure',
			'members' => [
				'Destinations'        => [
					'shape'        => '__listOfInputDestinationRequest',
					'locationName' => 'destinations',
				],
				'InputSecurityGroups' => [
					'shape'        => '__listOf__string',
					'locationName' => 'inputSecurityGroups',
				],
				'MediaConnectFlows'   => [
					'shape'        => '__listOfMediaConnectFlowRequest',
					'locationName' => 'mediaConnectFlows',
				],
				'Name'                => [
					'shape'        => '__string',
					'locationName' => 'name',
				],
				'RequestId'           => [
					'shape'            => '__string',
					'locationName'     => 'requestId',
					'idempotencyToken' => true,
				],
				'RoleArn'             => [
					'shape'        => '__string',
					'locationName' => 'roleArn',
				],
				'Sources'             => [
					'shape'        => '__listOfInputSourceRequest',
					'locationName' => 'sources',
				],
				'Tags'                => [
					'shape'        => 'Tags',
					'locationName' => 'tags',
				],
				'Type'                => [
					'shape'        => 'InputType',
					'locationName' => 'type',
				],
				'Vpc'                 => [
					'shape'        => 'InputVpcRequest',
					'locationName' => 'vpc',
				],
			],
		],
		'CreateInputResponse'                           => [
			'type'    => 'structure',
			'members' => [
				'Input' => [
					'shape'        => 'Input',
					'locationName' => 'input',
				],
			],
		],
		'CreateInputResultModel'                        => [
			'type'    => 'structure',
			'members' => [
				'Input' => [
					'shape'        => 'Input',
					'locationName' => 'input',
				],
			],
		],
		'CreateInputSecurityGroupRequest'               => [
			'type'    => 'structure',
			'members' => [
				'Tags'           => [
					'shape'        => 'Tags',
					'locationName' => 'tags',
				],
				'WhitelistRules' => [
					'shape'        => '__listOfInputWhitelistRuleCidr',
					'locationName' => 'whitelistRules',
				],
			],
		],
		'CreateInputSecurityGroupResponse'              => [
			'type'    => 'structure',
			'members' => [
				'SecurityGroup' => [
					'shape'        => 'InputSecurityGroup',
					'locationName' => 'securityGroup',
				],
			],
		],
		'CreateInputSecurityGroupResultModel'           => [
			'type'    => 'structure',
			'members' => [
				'SecurityGroup' => [
					'shape'        => 'InputSecurityGroup',
					'locationName' => 'securityGroup',
				],
			],
		],
		'CreateTagsRequest'                             => [
			'type'     => 'structure',
			'members'  => [
				'ResourceArn' => [
					'shape'        => '__string',
					'location'     => 'uri',
					'locationName' => 'resource-arn',
				],
				'Tags'        => [
					'shape'        => 'Tags',
					'locationName' => 'tags',
				],
			],
			'required' => [ 'ResourceArn', ],
		],
		'DeleteChannelRequest'                          => [
			'type'     => 'structure',
			'members'  => [
				'ChannelId' => [
					'shape'        => '__string',
					'location'     => 'uri',
					'locationName' => 'channelId',
				],
			],
			'required' => [ 'ChannelId', ],
		],
		'DeleteChannelResponse'                         => [
			'type'    => 'structure',
			'members' => [
				'Arn'                   => [ 'shape' => '__string', 'locationName' => 'arn', ],
				'ChannelClass'          => [ 'shape' => 'ChannelClass', 'locationName' => 'channelClass', ],
				'Destinations'          => [
					'shape'        => '__listOfOutputDestination',
					'locationName' => 'destinations',
				],
				'EgressEndpoints'       => [
					'shape'        => '__listOfChannelEgressEndpoint',
					'locationName' => 'egressEndpoints',
				],
				'EncoderSettings'       => [ 'shape' => 'EncoderSettings', 'locationName' => 'encoderSettings', ],
				'Id'                    => [ 'shape' => '__string', 'locationName' => 'id', ],
				'InputAttachments'      => [
					'shape'        => '__listOfInputAttachment',
					'locationName' => 'inputAttachments',
				],
				'InputSpecification'    => [ 'shape' => 'InputSpecification', 'locationName' => 'inputSpecification', ],
				'LogLevel'              => [ 'shape' => 'LogLevel', 'locationName' => 'logLevel', ],
				'Name'                  => [ 'shape' => '__string', 'locationName' => 'name', ],
				'PipelinesRunningCount' => [ 'shape' => '__integer', 'locationName' => 'pipelinesRunningCount', ],
				'RoleArn'               => [ 'shape' => '__string', 'locationName' => 'roleArn', ],
				'State'                 => [ 'shape' => 'ChannelState', 'locationName' => 'state', ],
				'Tags'                  => [ 'shape' => 'Tags', 'locationName' => 'tags', ],
			],
		],
		'DeleteInputRequest'                            => [
			'type'     => 'structure',
			'members'  => [
				'InputId' => [
					'shape'        => '__string',
					'location'     => 'uri',
					'locationName' => 'inputId',
				],
			],
			'required' => [ 'InputId', ],
		],
		'DeleteInputResponse'                           => [ 'type' => 'structure', 'members' => [], ],
		'DeleteInputSecurityGroupRequest'               => [
			'type'     => 'structure',
			'members'  => [
				'InputSecurityGroupId' => [
					'shape'        => '__string',
					'location'     => 'uri',
					'locationName' => 'inputSecurityGroupId',
				],
			],
			'required' => [ 'InputSecurityGroupId', ],
		],
		'DeleteInputSecurityGroupResponse'              => [ 'type' => 'structure', 'members' => [], ],
		'DeleteReservationRequest'                      => [
			'type'     => 'structure',
			'members'  => [
				'ReservationId' => [
					'shape'        => '__string',
					'location'     => 'uri',
					'locationName' => 'reservationId',
				],
			],
			'required' => [ 'ReservationId', ],
		],
		'DeleteReservationResponse'                     => [
			'type'    => 'structure',
			'members' => [
				'Arn'                   => [ 'shape' => '__string', 'locationName' => 'arn', ],
				'Count'                 => [ 'shape' => '__integer', 'locationName' => 'count', ],
				'CurrencyCode'          => [ 'shape' => '__string', 'locationName' => 'currencyCode', ],
				'Duration'              => [ 'shape' => '__integer', 'locationName' => 'duration', ],
				'DurationUnits'         => [ 'shape' => 'OfferingDurationUnits', 'locationName' => 'durationUnits', ],
				'End'                   => [ 'shape' => '__string', 'locationName' => 'end', ],
				'FixedPrice'            => [ 'shape' => '__double', 'locationName' => 'fixedPrice', ],
				'Name'                  => [ 'shape' => '__string', 'locationName' => 'name', ],
				'OfferingDescription'   => [ 'shape' => '__string', 'locationName' => 'offeringDescription', ],
				'OfferingId'            => [ 'shape' => '__string', 'locationName' => 'offeringId', ],
				'OfferingType'          => [ 'shape' => 'OfferingType', 'locationName' => 'offeringType', ],
				'Region'                => [ 'shape' => '__string', 'locationName' => 'region', ],
				'ReservationId'         => [ 'shape' => '__string', 'locationName' => 'reservationId', ],
				'ResourceSpecification' => [
					'shape'        => 'ReservationResourceSpecification',
					'locationName' => 'resourceSpecification',
				],
				'Start'                 => [ 'shape' => '__string', 'locationName' => 'start', ],
				'State'                 => [ 'shape' => 'ReservationState', 'locationName' => 'state', ],
				'Tags'                  => [ 'shape' => 'Tags', 'locationName' => 'tags', ],
				'UsagePrice'            => [ 'shape' => '__double', 'locationName' => 'usagePrice', ],
			],
		],
		'DeleteScheduleRequest'                         => [
			'type'     => 'structure',
			'members'  => [
				'ChannelId' => [
					'shape'        => '__string',
					'location'     => 'uri',
					'locationName' => 'channelId',
				],
			],
			'required' => [ 'ChannelId', ],
		],
		'DeleteScheduleResponse'                        => [ 'type' => 'structure', 'members' => [], ],
		'DeleteTagsRequest'                             => [
			'type'     => 'structure',
			'members'  => [
				'ResourceArn' => [
					'shape'        => '__string',
					'location'     => 'uri',
					'locationName' => 'resource-arn',
				],
				'TagKeys'     => [
					'shape'        => '__listOf__string',
					'location'     => 'querystring',
					'locationName' => 'tagKeys',
				],
			],
			'required' => [ 'TagKeys', 'ResourceArn', ],
		],
		'DescribeChannelRequest'                        => [
			'type'     => 'structure',
			'members'  => [
				'ChannelId' => [
					'shape'        => '__string',
					'location'     => 'uri',
					'locationName' => 'channelId',
				],
			],
			'required' => [ 'ChannelId', ],
		],
		'DescribeChannelResponse'                       => [
			'type'    => 'structure',
			'members' => [
				'Arn'                   => [ 'shape' => '__string', 'locationName' => 'arn', ],
				'ChannelClass'          => [ 'shape' => 'ChannelClass', 'locationName' => 'channelClass', ],
				'Destinations'          => [
					'shape'        => '__listOfOutputDestination',
					'locationName' => 'destinations',
				],
				'EgressEndpoints'       => [
					'shape'        => '__listOfChannelEgressEndpoint',
					'locationName' => 'egressEndpoints',
				],
				'EncoderSettings'       => [ 'shape' => 'EncoderSettings', 'locationName' => 'encoderSettings', ],
				'Id'                    => [ 'shape' => '__string', 'locationName' => 'id', ],
				'InputAttachments'      => [
					'shape'        => '__listOfInputAttachment',
					'locationName' => 'inputAttachments',
				],
				'InputSpecification'    => [ 'shape' => 'InputSpecification', 'locationName' => 'inputSpecification', ],
				'LogLevel'              => [ 'shape' => 'LogLevel', 'locationName' => 'logLevel', ],
				'Name'                  => [ 'shape' => '__string', 'locationName' => 'name', ],
				'PipelinesRunningCount' => [ 'shape' => '__integer', 'locationName' => 'pipelinesRunningCount', ],
				'RoleArn'               => [ 'shape' => '__string', 'locationName' => 'roleArn', ],
				'State'                 => [ 'shape' => 'ChannelState', 'locationName' => 'state', ],
				'Tags'                  => [ 'shape' => 'Tags', 'locationName' => 'tags', ],
			],
		],
		'DescribeInputRequest'                          => [
			'type'     => 'structure',
			'members'  => [
				'InputId' => [
					'shape'        => '__string',
					'location'     => 'uri',
					'locationName' => 'inputId',
				],
			],
			'required' => [ 'InputId', ],
		],
		'DescribeInputResponse'                         => [
			'type'    => 'structure',
			'members' => [
				'Arn'               => [ 'shape' => '__string', 'locationName' => 'arn', ],
				'AttachedChannels'  => [
					'shape'        => '__listOf__string',
					'locationName' => 'attachedChannels',
				],
				'Destinations'      => [
					'shape'        => '__listOfInputDestination',
					'locationName' => 'destinations',
				],
				'Id'                => [ 'shape' => '__string', 'locationName' => 'id', ],
				'InputClass'        => [ 'shape' => 'InputClass', 'locationName' => 'inputClass', ],
				'MediaConnectFlows' => [
					'shape'        => '__listOfMediaConnectFlow',
					'locationName' => 'mediaConnectFlows',
				],
				'Name'              => [ 'shape' => '__string', 'locationName' => 'name', ],
				'RoleArn'           => [ 'shape' => '__string', 'locationName' => 'roleArn', ],
				'SecurityGroups'    => [
					'shape'        => '__listOf__string',
					'locationName' => 'securityGroups',
				],
				'Sources'           => [ 'shape' => '__listOfInputSource', 'locationName' => 'sources', ],
				'State'             => [ 'shape' => 'InputState', 'locationName' => 'state', ],
				'Tags'              => [ 'shape' => 'Tags', 'locationName' => 'tags', ],
				'Type'              => [ 'shape' => 'InputType', 'locationName' => 'type', ],
			],
		],
		'DescribeInputSecurityGroupRequest'             => [
			'type'     => 'structure',
			'members'  => [
				'InputSecurityGroupId' => [
					'shape'        => '__string',
					'location'     => 'uri',
					'locationName' => 'inputSecurityGroupId',
				],
			],
			'required' => [ 'InputSecurityGroupId', ],
		],
		'DescribeInputSecurityGroupResponse'            => [
			'type'    => 'structure',
			'members' => [
				'Arn'            => [
					'shape'        => '__string',
					'locationName' => 'arn',
				],
				'Id'             => [
					'shape'        => '__string',
					'locationName' => 'id',
				],
				'Inputs'         => [
					'shape'        => '__listOf__string',
					'locationName' => 'inputs',
				],
				'State'          => [
					'shape'        => 'InputSecurityGroupState',
					'locationName' => 'state',
				],
				'Tags'           => [
					'shape'        => 'Tags',
					'locationName' => 'tags',
				],
				'WhitelistRules' => [
					'shape'        => '__listOfInputWhitelistRule',
					'locationName' => 'whitelistRules',
				],
			],
		],
		'DescribeOfferingRequest'                       => [
			'type'     => 'structure',
			'members'  => [
				'OfferingId' => [
					'shape'        => '__string',
					'location'     => 'uri',
					'locationName' => 'offeringId',
				],
			],
			'required' => [ 'OfferingId', ],
		],
		'DescribeOfferingResponse'                      => [
			'type'    => 'structure',
			'members' => [
				'Arn'                   => [
					'shape'        => '__string',
					'locationName' => 'arn',
				],
				'CurrencyCode'          => [
					'shape'        => '__string',
					'locationName' => 'currencyCode',
				],
				'Duration'              => [
					'shape'        => '__integer',
					'locationName' => 'duration',
				],
				'DurationUnits'         => [
					'shape'        => 'OfferingDurationUnits',
					'locationName' => 'durationUnits',
				],
				'FixedPrice'            => [
					'shape'        => '__double',
					'locationName' => 'fixedPrice',
				],
				'OfferingDescription'   => [
					'shape'        => '__string',
					'locationName' => 'offeringDescription',
				],
				'OfferingId'            => [
					'shape'        => '__string',
					'locationName' => 'offeringId',
				],
				'OfferingType'          => [
					'shape'        => 'OfferingType',
					'locationName' => 'offeringType',
				],
				'Region'                => [
					'shape'        => '__string',
					'locationName' => 'region',
				],
				'ResourceSpecification' => [
					'shape'        => 'ReservationResourceSpecification',
					'locationName' => 'resourceSpecification',
				],
				'UsagePrice'            => [
					'shape'        => '__double',
					'locationName' => 'usagePrice',
				],
			],
		],
		'DescribeReservationRequest'                    => [
			'type'     => 'structure',
			'members'  => [
				'ReservationId' => [
					'shape'        => '__string',
					'location'     => 'uri',
					'locationName' => 'reservationId',
				],
			],
			'required' => [ 'ReservationId', ],
		],
		'DescribeReservationResponse'                   => [
			'type'    => 'structure',
			'members' => [
				'Arn'                   => [ 'shape' => '__string', 'locationName' => 'arn', ],
				'Count'                 => [ 'shape' => '__integer', 'locationName' => 'count', ],
				'CurrencyCode'          => [ 'shape' => '__string', 'locationName' => 'currencyCode', ],
				'Duration'              => [ 'shape' => '__integer', 'locationName' => 'duration', ],
				'DurationUnits'         => [ 'shape' => 'OfferingDurationUnits', 'locationName' => 'durationUnits', ],
				'End'                   => [ 'shape' => '__string', 'locationName' => 'end', ],
				'FixedPrice'            => [ 'shape' => '__double', 'locationName' => 'fixedPrice', ],
				'Name'                  => [ 'shape' => '__string', 'locationName' => 'name', ],
				'OfferingDescription'   => [ 'shape' => '__string', 'locationName' => 'offeringDescription', ],
				'OfferingId'            => [ 'shape' => '__string', 'locationName' => 'offeringId', ],
				'OfferingType'          => [ 'shape' => 'OfferingType', 'locationName' => 'offeringType', ],
				'Region'                => [ 'shape' => '__string', 'locationName' => 'region', ],
				'ReservationId'         => [ 'shape' => '__string', 'locationName' => 'reservationId', ],
				'ResourceSpecification' => [
					'shape'        => 'ReservationResourceSpecification',
					'locationName' => 'resourceSpecification',
				],
				'Start'                 => [ 'shape' => '__string', 'locationName' => 'start', ],
				'State'                 => [ 'shape' => 'ReservationState', 'locationName' => 'state', ],
				'Tags'                  => [ 'shape' => 'Tags', 'locationName' => 'tags', ],
				'UsagePrice'            => [ 'shape' => '__double', 'locationName' => 'usagePrice', ],
			],
		],
		'DescribeScheduleRequest'                       => [
			'type'     => 'structure',
			'members'  => [
				'ChannelId'  => [
					'shape'        => '__string',
					'location'     => 'uri',
					'locationName' => 'channelId',
				],
				'MaxResults' => [
					'shape'        => 'MaxResults',
					'location'     => 'querystring',
					'locationName' => 'maxResults',
				],
				'NextToken'  => [
					'shape'        => '__string',
					'location'     => 'querystring',
					'locationName' => 'nextToken',
				],
			],
			'required' => [ 'ChannelId', ],
		],
		'DescribeScheduleResponse'                      => [
			'type'    => 'structure',
			'members' => [
				'NextToken'       => [
					'shape'        => '__string',
					'locationName' => 'nextToken',
				],
				'ScheduleActions' => [
					'shape'        => '__listOfScheduleAction',
					'locationName' => 'scheduleActions',
				],
			],
		],
		'DvbNitSettings'                                => [
			'type'     => 'structure',
			'members'  => [
				'NetworkId'   => [
					'shape'        => '__integerMin0Max65536',
					'locationName' => 'networkId',
				],
				'NetworkName' => [
					'shape'        => '__stringMin1Max256',
					'locationName' => 'networkName',
				],
				'RepInterval' => [
					'shape'        => '__integerMin25Max10000',
					'locationName' => 'repInterval',
				],
			],
			'required' => [ 'NetworkName', 'NetworkId', ],
		],
		'DvbSdtOutputSdt'                               => [
			'type' => 'string',
			'enum' => [
				'SDT_FOLLOW',
				'SDT_FOLLOW_IF_PRESENT',
				'SDT_MANUAL',
				'SDT_NONE',
			],
		],
		'DvbSdtSettings'                                => [
			'type'    => 'structure',
			'members' => [
				'OutputSdt'           => [
					'shape'        => 'DvbSdtOutputSdt',
					'locationName' => 'outputSdt',
				],
				'RepInterval'         => [
					'shape'        => '__integerMin25Max2000',
					'locationName' => 'repInterval',
				],
				'ServiceName'         => [
					'shape'        => '__stringMin1Max256',
					'locationName' => 'serviceName',
				],
				'ServiceProviderName' => [
					'shape'        => '__stringMin1Max256',
					'locationName' => 'serviceProviderName',
				],
			],
		],
		'DvbSubDestinationAlignment'                    => [
			'type' => 'string',
			'enum' => [ 'CENTERED', 'LEFT', 'SMART', ],
		],
		'DvbSubDestinationBackgroundColor'              => [
			'type' => 'string',
			'enum' => [ 'BLACK', 'NONE', 'WHITE', ],
		],
		'DvbSubDestinationFontColor'                    => [
			'type' => 'string',
			'enum' => [ 'BLACK', 'BLUE', 'GREEN', 'RED', 'WHITE', 'YELLOW', ],
		],
		'DvbSubDestinationOutlineColor'                 => [
			'type' => 'string',
			'enum' => [ 'BLACK', 'BLUE', 'GREEN', 'RED', 'WHITE', 'YELLOW', ],
		],
		'DvbSubDestinationSettings'                     => [
			'type'    => 'structure',
			'members' => [
				'Alignment'           => [ 'shape' => 'DvbSubDestinationAlignment', 'locationName' => 'alignment', ],
				'BackgroundColor'     => [
					'shape'        => 'DvbSubDestinationBackgroundColor',
					'locationName' => 'backgroundColor',
				],
				'BackgroundOpacity'   => [ 'shape' => '__integerMin0Max255', 'locationName' => 'backgroundOpacity', ],
				'Font'                => [ 'shape' => 'InputLocation', 'locationName' => 'font', ],
				'FontColor'           => [ 'shape' => 'DvbSubDestinationFontColor', 'locationName' => 'fontColor', ],
				'FontOpacity'         => [ 'shape' => '__integerMin0Max255', 'locationName' => 'fontOpacity', ],
				'FontResolution'      => [ 'shape' => '__integerMin96Max600', 'locationName' => 'fontResolution', ],
				'FontSize'            => [ 'shape' => '__string', 'locationName' => 'fontSize', ],
				'OutlineColor'        => [
					'shape'        => 'DvbSubDestinationOutlineColor',
					'locationName' => 'outlineColor',
				],
				'OutlineSize'         => [ 'shape' => '__integerMin0Max10', 'locationName' => 'outlineSize', ],
				'ShadowColor'         => [
					'shape'        => 'DvbSubDestinationShadowColor',
					'locationName' => 'shadowColor',
				],
				'ShadowOpacity'       => [ 'shape' => '__integerMin0Max255', 'locationName' => 'shadowOpacity', ],
				'ShadowXOffset'       => [ 'shape' => '__integer', 'locationName' => 'shadowXOffset', ],
				'ShadowYOffset'       => [ 'shape' => '__integer', 'locationName' => 'shadowYOffset', ],
				'TeletextGridControl' => [
					'shape'        => 'DvbSubDestinationTeletextGridControl',
					'locationName' => 'teletextGridControl',
				],
				'XPosition'           => [ 'shape' => '__integerMin0', 'locationName' => 'xPosition', ],
				'YPosition'           => [ 'shape' => '__integerMin0', 'locationName' => 'yPosition', ],
			],
		],
		'DvbSubDestinationShadowColor'                  => [
			'type' => 'string',
			'enum' => [ 'BLACK', 'NONE', 'WHITE', ],
		],
		'DvbSubDestinationTeletextGridControl'          => [ 'type' => 'string', 'enum' => [ 'FIXED', 'SCALED', ], ],
		'DvbSubSourceSettings'                          => [
			'type'    => 'structure',
			'members' => [
				'Pid' => [
					'shape'        => '__integerMin1',
					'locationName' => 'pid',
				],
			],
		],
		'DvbTdtSettings'                                => [
			'type'    => 'structure',
			'members' => [
				'RepInterval' => [
					'shape'        => '__integerMin1000Max30000',
					'locationName' => 'repInterval',
				],
			],
		],
		'Eac3AttenuationControl'                        => [
			'type' => 'string',
			'enum' => [ 'ATTENUATE_3_DB', 'NONE', ],
		],
		'Eac3BitstreamMode'                             => [
			'type' => 'string',
			'enum' => [
				'COMMENTARY',
				'COMPLETE_MAIN',
				'EMERGENCY',
				'HEARING_IMPAIRED',
				'VISUALLY_IMPAIRED',
			],
		],
		'Eac3CodingMode'                                => [
			'type' => 'string',
			'enum' => [
				'CODING_MODE_1_0',
				'CODING_MODE_2_0',
				'CODING_MODE_3_2',
			],
		],
		'Eac3DcFilter'                                  => [
			'type' => 'string',
			'enum' => [ 'DISABLED', 'ENABLED', ],
		],
		'Eac3DrcLine'                                   => [
			'type' => 'string',
			'enum' => [
				'FILM_LIGHT',
				'FILM_STANDARD',
				'MUSIC_LIGHT',
				'MUSIC_STANDARD',
				'NONE',
				'SPEECH',
			],
		],
		'Eac3DrcRf'                                     => [
			'type' => 'string',
			'enum' => [
				'FILM_LIGHT',
				'FILM_STANDARD',
				'MUSIC_LIGHT',
				'MUSIC_STANDARD',
				'NONE',
				'SPEECH',
			],
		],
		'Eac3LfeControl'                                => [ 'type' => 'string', 'enum' => [ 'LFE', 'NO_LFE', ], ],
		'Eac3LfeFilter'                                 => [
			'type' => 'string',
			'enum' => [ 'DISABLED', 'ENABLED', ],
		],
		'Eac3MetadataControl'                           => [
			'type' => 'string',
			'enum' => [ 'FOLLOW_INPUT', 'USE_CONFIGURED', ],
		],
		'Eac3PassthroughControl'                        => [
			'type' => 'string',
			'enum' => [ 'NO_PASSTHROUGH', 'WHEN_POSSIBLE', ],
		],
		'Eac3PhaseControl'                              => [
			'type' => 'string',
			'enum' => [ 'NO_SHIFT', 'SHIFT_90_DEGREES', ],
		],
		'Eac3Settings'                                  => [
			'type'    => 'structure',
			'members' => [
				'AttenuationControl'   => [
					'shape'        => 'Eac3AttenuationControl',
					'locationName' => 'attenuationControl',
				],
				'Bitrate'              => [ 'shape' => '__double', 'locationName' => 'bitrate', ],
				'BitstreamMode'        => [ 'shape' => 'Eac3BitstreamMode', 'locationName' => 'bitstreamMode', ],
				'CodingMode'           => [ 'shape' => 'Eac3CodingMode', 'locationName' => 'codingMode', ],
				'DcFilter'             => [ 'shape' => 'Eac3DcFilter', 'locationName' => 'dcFilter', ],
				'Dialnorm'             => [ 'shape' => '__integerMin1Max31', 'locationName' => 'dialnorm', ],
				'DrcLine'              => [ 'shape' => 'Eac3DrcLine', 'locationName' => 'drcLine', ],
				'DrcRf'                => [ 'shape' => 'Eac3DrcRf', 'locationName' => 'drcRf', ],
				'LfeControl'           => [ 'shape' => 'Eac3LfeControl', 'locationName' => 'lfeControl', ],
				'LfeFilter'            => [ 'shape' => 'Eac3LfeFilter', 'locationName' => 'lfeFilter', ],
				'LoRoCenterMixLevel'   => [ 'shape' => '__double', 'locationName' => 'loRoCenterMixLevel', ],
				'LoRoSurroundMixLevel' => [ 'shape' => '__double', 'locationName' => 'loRoSurroundMixLevel', ],
				'LtRtCenterMixLevel'   => [ 'shape' => '__double', 'locationName' => 'ltRtCenterMixLevel', ],
				'LtRtSurroundMixLevel' => [ 'shape' => '__double', 'locationName' => 'ltRtSurroundMixLevel', ],
				'MetadataControl'      => [ 'shape' => 'Eac3MetadataControl', 'locationName' => 'metadataControl', ],
				'PassthroughControl'   => [
					'shape'        => 'Eac3PassthroughControl',
					'locationName' => 'passthroughControl',
				],
				'PhaseControl'         => [ 'shape' => 'Eac3PhaseControl', 'locationName' => 'phaseControl', ],
				'StereoDownmix'        => [ 'shape' => 'Eac3StereoDownmix', 'locationName' => 'stereoDownmix', ],
				'SurroundExMode'       => [ 'shape' => 'Eac3SurroundExMode', 'locationName' => 'surroundExMode', ],
				'SurroundMode'         => [ 'shape' => 'Eac3SurroundMode', 'locationName' => 'surroundMode', ],
			],
		],
		'Eac3StereoDownmix'                             => [
			'type' => 'string',
			'enum' => [ 'DPL2', 'LO_RO', 'LT_RT', 'NOT_INDICATED', ],
		],
		'Eac3SurroundExMode'                            => [
			'type' => 'string',
			'enum' => [ 'DISABLED', 'ENABLED', 'NOT_INDICATED', ],
		],
		'Eac3SurroundMode'                              => [
			'type' => 'string',
			'enum' => [ 'DISABLED', 'ENABLED', 'NOT_INDICATED', ],
		],
		'EmbeddedConvert608To708'                       => [
			'type' => 'string',
			'enum' => [ 'DISABLED', 'UPCONVERT', ],
		],
		'EmbeddedDestinationSettings'                   => [ 'type' => 'structure', 'members' => [], ],
		'EmbeddedPlusScte20DestinationSettings'         => [ 'type' => 'structure', 'members' => [], ],
		'EmbeddedScte20Detection'                       => [ 'type' => 'string', 'enum' => [ 'AUTO', 'OFF', ], ],
		'EmbeddedSourceSettings'                        => [
			'type'    => 'structure',
			'members' => [
				'Convert608To708'        => [
					'shape'        => 'EmbeddedConvert608To708',
					'locationName' => 'convert608To708',
				],
				'Scte20Detection'        => [
					'shape'        => 'EmbeddedScte20Detection',
					'locationName' => 'scte20Detection',
				],
				'Source608ChannelNumber' => [
					'shape'        => '__integerMin1Max4',
					'locationName' => 'source608ChannelNumber',
				],
				'Source608TrackNumber'   => [
					'shape'        => '__integerMin1Max5',
					'locationName' => 'source608TrackNumber',
				],
			],
		],
		'Empty'                                         => [ 'type' => 'structure', 'members' => [], ],
		'EncoderSettings'                               => [
			'type'     => 'structure',
			'members'  => [
				'AudioDescriptions'   => [
					'shape'        => '__listOfAudioDescription',
					'locationName' => 'audioDescriptions',
				],
				'AvailBlanking'       => [ 'shape' => 'AvailBlanking', 'locationName' => 'availBlanking', ],
				'AvailConfiguration'  => [
					'shape'        => 'AvailConfiguration',
					'locationName' => 'availConfiguration',
				],
				'BlackoutSlate'       => [ 'shape' => 'BlackoutSlate', 'locationName' => 'blackoutSlate', ],
				'CaptionDescriptions' => [
					'shape'        => '__listOfCaptionDescription',
					'locationName' => 'captionDescriptions',
				],
				'GlobalConfiguration' => [
					'shape'        => 'GlobalConfiguration',
					'locationName' => 'globalConfiguration',
				],
				'OutputGroups'        => [
					'shape'        => '__listOfOutputGroup',
					'locationName' => 'outputGroups',
				],
				'TimecodeConfig'      => [
					'shape'        => 'TimecodeConfig',
					'locationName' => 'timecodeConfig',
				],
				'VideoDescriptions'   => [
					'shape'        => '__listOfVideoDescription',
					'locationName' => 'videoDescriptions',
				],
			],
			'required' => [ 'VideoDescriptions', 'AudioDescriptions', 'OutputGroups', 'TimecodeConfig', ],
		],
		'FecOutputIncludeFec'                           => [
			'type' => 'string',
			'enum' => [ 'COLUMN', 'COLUMN_AND_ROW', ],
		],
		'FecOutputSettings'                             => [
			'type'    => 'structure',
			'members' => [
				'ColumnDepth' => [
					'shape'        => '__integerMin4Max20',
					'locationName' => 'columnDepth',
				],
				'IncludeFec'  => [
					'shape'        => 'FecOutputIncludeFec',
					'locationName' => 'includeFec',
				],
				'RowLength'   => [
					'shape'        => '__integerMin1Max20',
					'locationName' => 'rowLength',
				],
			],
		],
		'FixedAfd'                                      => [
			'type' => 'string',
			'enum' => [
				'AFD_0000',
				'AFD_0010',
				'AFD_0011',
				'AFD_0100',
				'AFD_1000',
				'AFD_1001',
				'AFD_1010',
				'AFD_1011',
				'AFD_1101',
				'AFD_1110',
				'AFD_1111',
			],
		],
		'FixedModeScheduleActionStartSettings'          => [
			'type'     => 'structure',
			'members'  => [
				'Time' => [
					'shape'        => '__string',
					'locationName' => 'time',
				],
			],
			'required' => [ 'Time', ],
		],
		'FollowModeScheduleActionStartSettings'         => [
			'type'     => 'structure',
			'members'  => [
				'FollowPoint'         => [
					'shape'        => 'FollowPoint',
					'locationName' => 'followPoint',
				],
				'ReferenceActionName' => [
					'shape'        => '__string',
					'locationName' => 'referenceActionName',
				],
			],
			'required' => [ 'ReferenceActionName', 'FollowPoint', ],
		],
		'FollowPoint'                                   => [ 'type' => 'string', 'enum' => [ 'END', 'START', ], ],
		'ForbiddenException'                            => [
			'type'      => 'structure',
			'members'   => [
				'Message' => [
					'shape'        => '__string',
					'locationName' => 'message',
				],
			],
			'exception' => true,
			'error'     => [ 'httpStatusCode' => 403, ],
		],
		'FrameCaptureGroupSettings'                     => [
			'type'     => 'structure',
			'members'  => [
				'Destination' => [
					'shape'        => 'OutputLocationRef',
					'locationName' => 'destination',
				],
			],
			'required' => [ 'Destination', ],
		],
		'FrameCaptureOutputSettings'                    => [
			'type'    => 'structure',
			'members' => [
				'NameModifier' => [
					'shape'        => '__string',
					'locationName' => 'nameModifier',
				],
			],
		],
		'FrameCaptureSettings'                          => [
			'type'     => 'structure',
			'members'  => [
				'CaptureInterval' => [
					'shape'        => '__integerMin1Max3600',
					'locationName' => 'captureInterval',
				],
			],
			'required' => [ 'CaptureInterval', ],
		],
		'GatewayTimeoutException'                       => [
			'type'      => 'structure',
			'members'   => [
				'Message' => [
					'shape'        => '__string',
					'locationName' => 'message',
				],
			],
			'exception' => true,
			'error'     => [ 'httpStatusCode' => 504, ],
		],
		'GlobalConfiguration'                           => [
			'type'    => 'structure',
			'members' => [
				'InitialAudioGain'          => [
					'shape'        => '__integerMinNegative60Max60',
					'locationName' => 'initialAudioGain',
				],
				'InputEndAction'            => [
					'shape'        => 'GlobalConfigurationInputEndAction',
					'locationName' => 'inputEndAction',
				],
				'InputLossBehavior'         => [
					'shape'        => 'InputLossBehavior',
					'locationName' => 'inputLossBehavior',
				],
				'OutputLockingMode'         => [
					'shape'        => 'GlobalConfigurationOutputLockingMode',
					'locationName' => 'outputLockingMode',
				],
				'OutputTimingSource'        => [
					'shape'        => 'GlobalConfigurationOutputTimingSource',
					'locationName' => 'outputTimingSource',
				],
				'SupportLowFramerateInputs' => [
					'shape'        => 'GlobalConfigurationLowFramerateInputs',
					'locationName' => 'supportLowFramerateInputs',
				],
			],
		],
		'GlobalConfigurationInputEndAction'             => [
			'type' => 'string',
			'enum' => [ 'NONE', 'SWITCH_AND_LOOP_INPUTS', ],
		],
		'GlobalConfigurationLowFramerateInputs'         => [
			'type' => 'string',
			'enum' => [ 'DISABLED', 'ENABLED', ],
		],
		'GlobalConfigurationOutputLockingMode'          => [
			'type' => 'string',
			'enum' => [ 'EPOCH_LOCKING', 'PIPELINE_LOCKING', ],
		],
		'GlobalConfigurationOutputTimingSource'         => [
			'type' => 'string',
			'enum' => [ 'INPUT_CLOCK', 'SYSTEM_CLOCK', ],
		],
		'H264AdaptiveQuantization'                      => [
			'type' => 'string',
			'enum' => [ 'HIGH', 'HIGHER', 'LOW', 'MAX', 'MEDIUM', 'OFF', ],
		],
		'H264ColorMetadata'                             => [ 'type' => 'string', 'enum' => [ 'IGNORE', 'INSERT', ], ],
		'H264EntropyEncoding'                           => [ 'type' => 'string', 'enum' => [ 'CABAC', 'CAVLC', ], ],
		'H264FlickerAq'                                 => [
			'type' => 'string',
			'enum' => [ 'DISABLED', 'ENABLED', ],
		],
		'H264FramerateControl'                          => [
			'type' => 'string',
			'enum' => [ 'INITIALIZE_FROM_SOURCE', 'SPECIFIED', ],
		],
		'H264GopBReference'                             => [
			'type' => 'string',
			'enum' => [ 'DISABLED', 'ENABLED', ],
		],
		'H264GopSizeUnits'                              => [ 'type' => 'string', 'enum' => [ 'FRAMES', 'SECONDS', ], ],
		'H264Level'                                     => [
			'type' => 'string',
			'enum' => [
				'H264_LEVEL_1',
				'H264_LEVEL_1_1',
				'H264_LEVEL_1_2',
				'H264_LEVEL_1_3',
				'H264_LEVEL_2',
				'H264_LEVEL_2_1',
				'H264_LEVEL_2_2',
				'H264_LEVEL_3',
				'H264_LEVEL_3_1',
				'H264_LEVEL_3_2',
				'H264_LEVEL_4',
				'H264_LEVEL_4_1',
				'H264_LEVEL_4_2',
				'H264_LEVEL_5',
				'H264_LEVEL_5_1',
				'H264_LEVEL_5_2',
				'H264_LEVEL_AUTO',
			],
		],
		'H264LookAheadRateControl'                      => [
			'type' => 'string',
			'enum' => [ 'HIGH', 'LOW', 'MEDIUM', ],
		],
		'H264ParControl'                                => [
			'type' => 'string',
			'enum' => [ 'INITIALIZE_FROM_SOURCE', 'SPECIFIED', ],
		],
		'H264Profile'                                   => [
			'type' => 'string',
			'enum' => [
				'BASELINE',
				'HIGH',
				'HIGH_10BIT',
				'HIGH_422',
				'HIGH_422_10BIT',
				'MAIN',
			],
		],
		'H264RateControlMode'                           => [ 'type' => 'string', 'enum' => [ 'CBR', 'QVBR', 'VBR', ], ],
		'H264ScanType'                                  => [
			'type' => 'string',
			'enum' => [ 'INTERLACED', 'PROGRESSIVE', ],
		],
		'H264SceneChangeDetect'                         => [
			'type' => 'string',
			'enum' => [ 'DISABLED', 'ENABLED', ],
		],
		'H264Settings'                                  => [
			'type'    => 'structure',
			'members' => [
				'AdaptiveQuantization' => [
					'shape'        => 'H264AdaptiveQuantization',
					'locationName' => 'adaptiveQuantization',
				],
				'AfdSignaling'         => [ 'shape' => 'AfdSignaling', 'locationName' => 'afdSignaling', ],
				'Bitrate'              => [ 'shape' => '__integerMin1000', 'locationName' => 'bitrate', ],
				'BufFillPct'           => [ 'shape' => '__integerMin0Max100', 'locationName' => 'bufFillPct', ],
				'BufSize'              => [ 'shape' => '__integerMin0', 'locationName' => 'bufSize', ],
				'ColorMetadata'        => [ 'shape' => 'H264ColorMetadata', 'locationName' => 'colorMetadata', ],
				'EntropyEncoding'      => [ 'shape' => 'H264EntropyEncoding', 'locationName' => 'entropyEncoding', ],
				'FixedAfd'             => [ 'shape' => 'FixedAfd', 'locationName' => 'fixedAfd', ],
				'FlickerAq'            => [ 'shape' => 'H264FlickerAq', 'locationName' => 'flickerAq', ],
				'FramerateControl'     => [ 'shape' => 'H264FramerateControl', 'locationName' => 'framerateControl', ],
				'FramerateDenominator' => [ 'shape' => '__integerMin1', 'locationName' => 'framerateDenominator', ],
				'FramerateNumerator'   => [ 'shape' => '__integerMin1', 'locationName' => 'framerateNumerator', ],
				'GopBReference'        => [ 'shape' => 'H264GopBReference', 'locationName' => 'gopBReference', ],
				'GopClosedCadence'     => [ 'shape' => '__integerMin0', 'locationName' => 'gopClosedCadence', ],
				'GopNumBFrames'        => [ 'shape' => '__integerMin0Max7', 'locationName' => 'gopNumBFrames', ],
				'GopSize'              => [ 'shape' => '__doubleMin1', 'locationName' => 'gopSize', ],
				'GopSizeUnits'         => [ 'shape' => 'H264GopSizeUnits', 'locationName' => 'gopSizeUnits', ],
				'Level'                => [ 'shape' => 'H264Level', 'locationName' => 'level', ],
				'LookAheadRateControl' => [
					'shape'        => 'H264LookAheadRateControl',
					'locationName' => 'lookAheadRateControl',
				],
				'MaxBitrate'           => [ 'shape' => '__integerMin1000', 'locationName' => 'maxBitrate', ],
				'MinIInterval'         => [ 'shape' => '__integerMin0Max30', 'locationName' => 'minIInterval', ],
				'NumRefFrames'         => [ 'shape' => '__integerMin1Max6', 'locationName' => 'numRefFrames', ],
				'ParControl'           => [ 'shape' => 'H264ParControl', 'locationName' => 'parControl', ],
				'ParDenominator'       => [ 'shape' => '__integerMin1', 'locationName' => 'parDenominator', ],
				'ParNumerator'         => [ 'shape' => '__integer', 'locationName' => 'parNumerator', ],
				'Profile'              => [ 'shape' => 'H264Profile', 'locationName' => 'profile', ],
				'QvbrQualityLevel'     => [ 'shape' => '__integerMin1Max10', 'locationName' => 'qvbrQualityLevel', ],
				'RateControlMode'      => [ 'shape' => 'H264RateControlMode', 'locationName' => 'rateControlMode', ],
				'ScanType'             => [ 'shape' => 'H264ScanType', 'locationName' => 'scanType', ],
				'SceneChangeDetect'    => [
					'shape'        => 'H264SceneChangeDetect',
					'locationName' => 'sceneChangeDetect',
				],
				'Slices'               => [ 'shape' => '__integerMin1Max32', 'locationName' => 'slices', ],
				'Softness'             => [ 'shape' => '__integerMin0Max128', 'locationName' => 'softness', ],
				'SpatialAq'            => [ 'shape' => 'H264SpatialAq', 'locationName' => 'spatialAq', ],
				'SubgopLength'         => [ 'shape' => 'H264SubGopLength', 'locationName' => 'subgopLength', ],
				'Syntax'               => [ 'shape' => 'H264Syntax', 'locationName' => 'syntax', ],
				'TemporalAq'           => [ 'shape' => 'H264TemporalAq', 'locationName' => 'temporalAq', ],
				'TimecodeInsertion'    => [
					'shape'        => 'H264TimecodeInsertionBehavior',
					'locationName' => 'timecodeInsertion',
				],
			],
		],
		'H264SpatialAq'                                 => [
			'type' => 'string',
			'enum' => [ 'DISABLED', 'ENABLED', ],
		],
		'H264SubGopLength'                              => [ 'type' => 'string', 'enum' => [ 'DYNAMIC', 'FIXED', ], ],
		'H264Syntax'                                    => [ 'type' => 'string', 'enum' => [ 'DEFAULT', 'RP2027', ], ],
		'H264TemporalAq'                                => [
			'type' => 'string',
			'enum' => [ 'DISABLED', 'ENABLED', ],
		],
		'H264TimecodeInsertionBehavior'                 => [
			'type' => 'string',
			'enum' => [ 'DISABLED', 'PIC_TIMING_SEI', ],
		],
		'HlsAdMarkers'                                  => [
			'type' => 'string',
			'enum' => [ 'ADOBE', 'ELEMENTAL', 'ELEMENTAL_SCTE35', ],
		],
		'HlsAkamaiHttpTransferMode'                     => [
			'type' => 'string',
			'enum' => [ 'CHUNKED', 'NON_CHUNKED', ],
		],
		'HlsAkamaiSettings'                             => [
			'type'    => 'structure',
			'members' => [
				'ConnectionRetryInterval' => [
					'shape'        => '__integerMin0',
					'locationName' => 'connectionRetryInterval',
				],
				'FilecacheDuration'       => [
					'shape'        => '__integerMin0Max600',
					'locationName' => 'filecacheDuration',
				],
				'HttpTransferMode'        => [
					'shape'        => 'HlsAkamaiHttpTransferMode',
					'locationName' => 'httpTransferMode',
				],
				'NumRetries'              => [
					'shape'        => '__integerMin0',
					'locationName' => 'numRetries',
				],
				'RestartDelay'            => [
					'shape'        => '__integerMin0Max15',
					'locationName' => 'restartDelay',
				],
				'Salt'                    => [
					'shape'        => '__string',
					'locationName' => 'salt',
				],
				'Token'                   => [
					'shape'        => '__string',
					'locationName' => 'token',
				],
			],
		],
		'HlsBasicPutSettings'                           => [
			'type'    => 'structure',
			'members' => [
				'ConnectionRetryInterval' => [
					'shape'        => '__integerMin0',
					'locationName' => 'connectionRetryInterval',
				],
				'FilecacheDuration'       => [
					'shape'        => '__integerMin0Max600',
					'locationName' => 'filecacheDuration',
				],
				'NumRetries'              => [
					'shape'        => '__integerMin0',
					'locationName' => 'numRetries',
				],
				'RestartDelay'            => [
					'shape'        => '__integerMin0Max15',
					'locationName' => 'restartDelay',
				],
			],
		],
		'HlsCaptionLanguageSetting'                     => [
			'type' => 'string',
			'enum' => [ 'INSERT', 'NONE', 'OMIT', ],
		],
		'HlsCdnSettings'                                => [
			'type'    => 'structure',
			'members' => [
				'HlsAkamaiSettings'     => [
					'shape'        => 'HlsAkamaiSettings',
					'locationName' => 'hlsAkamaiSettings',
				],
				'HlsBasicPutSettings'   => [
					'shape'        => 'HlsBasicPutSettings',
					'locationName' => 'hlsBasicPutSettings',
				],
				'HlsMediaStoreSettings' => [
					'shape'        => 'HlsMediaStoreSettings',
					'locationName' => 'hlsMediaStoreSettings',
				],
				'HlsWebdavSettings'     => [
					'shape'        => 'HlsWebdavSettings',
					'locationName' => 'hlsWebdavSettings',
				],
			],
		],
		'HlsClientCache'                                => [
			'type' => 'string',
			'enum' => [ 'DISABLED', 'ENABLED', ],
		],
		'HlsCodecSpecification'                         => [
			'type' => 'string',
			'enum' => [ 'RFC_4281', 'RFC_6381', ],
		],
		'HlsDirectoryStructure'                         => [
			'type' => 'string',
			'enum' => [ 'SINGLE_DIRECTORY', 'SUBDIRECTORY_PER_STREAM', ],
		],
		'HlsEncryptionType'                             => [
			'type' => 'string',
			'enum' => [ 'AES128', 'SAMPLE_AES', ],
		],
		'HlsGroupSettings'                              => [
			'type'     => 'structure',
			'members'  => [
				'AdMarkers'                  => [ 'shape' => '__listOfHlsAdMarkers', 'locationName' => 'adMarkers', ],
				'BaseUrlContent'             => [ 'shape' => '__string', 'locationName' => 'baseUrlContent', ],
				'BaseUrlManifest'            => [ 'shape' => '__string', 'locationName' => 'baseUrlManifest', ],
				'CaptionLanguageMappings'    => [
					'shape'        => '__listOfCaptionLanguageMapping',
					'locationName' => 'captionLanguageMappings',
				],
				'CaptionLanguageSetting'     => [
					'shape'        => 'HlsCaptionLanguageSetting',
					'locationName' => 'captionLanguageSetting',
				],
				'ClientCache'                => [ 'shape' => 'HlsClientCache', 'locationName' => 'clientCache', ],
				'CodecSpecification'         => [
					'shape'        => 'HlsCodecSpecification',
					'locationName' => 'codecSpecification',
				],
				'ConstantIv'                 => [ 'shape' => '__stringMin32Max32', 'locationName' => 'constantIv', ],
				'Destination'                => [ 'shape' => 'OutputLocationRef', 'locationName' => 'destination', ],
				'DirectoryStructure'         => [
					'shape'        => 'HlsDirectoryStructure',
					'locationName' => 'directoryStructure',
				],
				'EncryptionType'             => [ 'shape' => 'HlsEncryptionType', 'locationName' => 'encryptionType', ],
				'HlsCdnSettings'             => [ 'shape' => 'HlsCdnSettings', 'locationName' => 'hlsCdnSettings', ],
				'IFrameOnlyPlaylists'        => [
					'shape'        => 'IFrameOnlyPlaylistType',
					'locationName' => 'iFrameOnlyPlaylists',
				],
				'IndexNSegments'             => [ 'shape' => '__integerMin3', 'locationName' => 'indexNSegments', ],
				'InputLossAction'            => [
					'shape'        => 'InputLossActionForHlsOut',
					'locationName' => 'inputLossAction',
				],
				'IvInManifest'               => [ 'shape' => 'HlsIvInManifest', 'locationName' => 'ivInManifest', ],
				'IvSource'                   => [ 'shape' => 'HlsIvSource', 'locationName' => 'ivSource', ],
				'KeepSegments'               => [ 'shape' => '__integerMin1', 'locationName' => 'keepSegments', ],
				'KeyFormat'                  => [ 'shape' => '__string', 'locationName' => 'keyFormat', ],
				'KeyFormatVersions'          => [ 'shape' => '__string', 'locationName' => 'keyFormatVersions', ],
				'KeyProviderSettings'        => [
					'shape'        => 'KeyProviderSettings',
					'locationName' => 'keyProviderSettings',
				],
				'ManifestCompression'        => [
					'shape'        => 'HlsManifestCompression',
					'locationName' => 'manifestCompression',
				],
				'ManifestDurationFormat'     => [
					'shape'        => 'HlsManifestDurationFormat',
					'locationName' => 'manifestDurationFormat',
				],
				'MinSegmentLength'           => [ 'shape' => '__integerMin0', 'locationName' => 'minSegmentLength', ],
				'Mode'                       => [ 'shape' => 'HlsMode', 'locationName' => 'mode', ],
				'OutputSelection'            => [
					'shape'        => 'HlsOutputSelection',
					'locationName' => 'outputSelection',
				],
				'ProgramDateTime'            => [
					'shape'        => 'HlsProgramDateTime',
					'locationName' => 'programDateTime',
				],
				'ProgramDateTimePeriod'      => [
					'shape'        => '__integerMin0Max3600',
					'locationName' => 'programDateTimePeriod',
				],
				'RedundantManifest'          => [
					'shape'        => 'HlsRedundantManifest',
					'locationName' => 'redundantManifest',
				],
				'SegmentLength'              => [ 'shape' => '__integerMin1', 'locationName' => 'segmentLength', ],
				'SegmentationMode'           => [
					'shape'        => 'HlsSegmentationMode',
					'locationName' => 'segmentationMode',
				],
				'SegmentsPerSubdirectory'    => [
					'shape'        => '__integerMin1',
					'locationName' => 'segmentsPerSubdirectory',
				],
				'StreamInfResolution'        => [
					'shape'        => 'HlsStreamInfResolution',
					'locationName' => 'streamInfResolution',
				],
				'TimedMetadataId3Frame'      => [
					'shape'        => 'HlsTimedMetadataId3Frame',
					'locationName' => 'timedMetadataId3Frame',
				],
				'TimedMetadataId3Period'     => [
					'shape'        => '__integerMin0',
					'locationName' => 'timedMetadataId3Period',
				],
				'TimestampDeltaMilliseconds' => [
					'shape'        => '__integerMin0',
					'locationName' => 'timestampDeltaMilliseconds',
				],
				'TsFileMode'                 => [ 'shape' => 'HlsTsFileMode', 'locationName' => 'tsFileMode', ],
			],
			'required' => [ 'Destination', ],
		],
		'HlsInputSettings'                              => [
			'type'    => 'structure',
			'members' => [
				'Bandwidth'      => [
					'shape'        => '__integerMin0',
					'locationName' => 'bandwidth',
				],
				'BufferSegments' => [
					'shape'        => '__integerMin0',
					'locationName' => 'bufferSegments',
				],
				'Retries'        => [
					'shape'        => '__integerMin0',
					'locationName' => 'retries',
				],
				'RetryInterval'  => [
					'shape'        => '__integerMin0',
					'locationName' => 'retryInterval',
				],
			],
		],
		'HlsIvInManifest'                               => [ 'type' => 'string', 'enum' => [ 'EXCLUDE', 'INCLUDE', ], ],
		'HlsIvSource'                                   => [
			'type' => 'string',
			'enum' => [ 'EXPLICIT', 'FOLLOWS_SEGMENT_NUMBER', ],
		],
		'HlsManifestCompression'                        => [ 'type' => 'string', 'enum' => [ 'GZIP', 'NONE', ], ],
		'HlsManifestDurationFormat'                     => [
			'type' => 'string',
			'enum' => [ 'FLOATING_POINT', 'INTEGER', ],
		],
		'HlsMediaStoreSettings'                         => [
			'type'    => 'structure',
			'members' => [
				'ConnectionRetryInterval' => [
					'shape'        => '__integerMin0',
					'locationName' => 'connectionRetryInterval',
				],
				'FilecacheDuration'       => [
					'shape'        => '__integerMin0Max600',
					'locationName' => 'filecacheDuration',
				],
				'MediaStoreStorageClass'  => [
					'shape'        => 'HlsMediaStoreStorageClass',
					'locationName' => 'mediaStoreStorageClass',
				],
				'NumRetries'              => [
					'shape'        => '__integerMin0',
					'locationName' => 'numRetries',
				],
				'RestartDelay'            => [
					'shape'        => '__integerMin0Max15',
					'locationName' => 'restartDelay',
				],
			],
		],
		'HlsMediaStoreStorageClass'                     => [ 'type' => 'string', 'enum' => [ 'TEMPORAL', ], ],
		'HlsMode'                                       => [ 'type' => 'string', 'enum' => [ 'LIVE', 'VOD', ], ],
		'HlsOutputSelection'                            => [
			'type' => 'string',
			'enum' => [ 'MANIFESTS_AND_SEGMENTS', 'SEGMENTS_ONLY', ],
		],
		'HlsOutputSettings'                             => [
			'type'     => 'structure',
			'members'  => [
				'HlsSettings'     => [
					'shape'        => 'HlsSettings',
					'locationName' => 'hlsSettings',
				],
				'NameModifier'    => [
					'shape'        => '__stringMin1',
					'locationName' => 'nameModifier',
				],
				'SegmentModifier' => [
					'shape'        => '__string',
					'locationName' => 'segmentModifier',
				],
			],
			'required' => [ 'HlsSettings', ],
		],
		'HlsProgramDateTime'                            => [ 'type' => 'string', 'enum' => [ 'EXCLUDE', 'INCLUDE', ], ],
		'HlsRedundantManifest'                          => [
			'type' => 'string',
			'enum' => [ 'DISABLED', 'ENABLED', ],
		],
		'HlsSegmentationMode'                           => [
			'type' => 'string',
			'enum' => [ 'USE_INPUT_SEGMENTATION', 'USE_SEGMENT_DURATION', ],
		],
		'HlsSettings'                                   => [
			'type'    => 'structure',
			'members' => [
				'AudioOnlyHlsSettings' => [
					'shape'        => 'AudioOnlyHlsSettings',
					'locationName' => 'audioOnlyHlsSettings',
				],
				'StandardHlsSettings'  => [
					'shape'        => 'StandardHlsSettings',
					'locationName' => 'standardHlsSettings',
				],
			],
		],
		'HlsStreamInfResolution'                        => [ 'type' => 'string', 'enum' => [ 'EXCLUDE', 'INCLUDE', ], ],
		'HlsTimedMetadataId3Frame'                      => [
			'type' => 'string',
			'enum' => [ 'NONE', 'PRIV', 'TDRL', ],
		],
		'HlsTimedMetadataScheduleActionSettings'        => [
			'type'     => 'structure',
			'members'  => [
				'Id3' => [
					'shape'        => '__string',
					'locationName' => 'id3',
				],
			],
			'required' => [ 'Id3', ],
		],
		'HlsTsFileMode'                                 => [
			'type' => 'string',
			'enum' => [ 'SEGMENTED_FILES', 'SINGLE_FILE', ],
		],
		'HlsWebdavHttpTransferMode'                     => [
			'type' => 'string',
			'enum' => [ 'CHUNKED', 'NON_CHUNKED', ],
		],
		'HlsWebdavSettings'                             => [
			'type'    => 'structure',
			'members' => [
				'ConnectionRetryInterval' => [
					'shape'        => '__integerMin0',
					'locationName' => 'connectionRetryInterval',
				],
				'FilecacheDuration'       => [
					'shape'        => '__integerMin0Max600',
					'locationName' => 'filecacheDuration',
				],
				'HttpTransferMode'        => [
					'shape'        => 'HlsWebdavHttpTransferMode',
					'locationName' => 'httpTransferMode',
				],
				'NumRetries'              => [
					'shape'        => '__integerMin0',
					'locationName' => 'numRetries',
				],
				'RestartDelay'            => [
					'shape'        => '__integerMin0Max15',
					'locationName' => 'restartDelay',
				],
			],
		],
		'IFrameOnlyPlaylistType'                        => [
			'type' => 'string',
			'enum' => [ 'DISABLED', 'STANDARD', ],
		],
		'Input'                                         => [
			'type'    => 'structure',
			'members' => [
				'Arn'               => [ 'shape' => '__string', 'locationName' => 'arn', ],
				'AttachedChannels'  => [
					'shape'        => '__listOf__string',
					'locationName' => 'attachedChannels',
				],
				'Destinations'      => [
					'shape'        => '__listOfInputDestination',
					'locationName' => 'destinations',
				],
				'Id'                => [ 'shape' => '__string', 'locationName' => 'id', ],
				'InputClass'        => [ 'shape' => 'InputClass', 'locationName' => 'inputClass', ],
				'MediaConnectFlows' => [
					'shape'        => '__listOfMediaConnectFlow',
					'locationName' => 'mediaConnectFlows',
				],
				'Name'              => [ 'shape' => '__string', 'locationName' => 'name', ],
				'RoleArn'           => [ 'shape' => '__string', 'locationName' => 'roleArn', ],
				'SecurityGroups'    => [
					'shape'        => '__listOf__string',
					'locationName' => 'securityGroups',
				],
				'Sources'           => [ 'shape' => '__listOfInputSource', 'locationName' => 'sources', ],
				'State'             => [ 'shape' => 'InputState', 'locationName' => 'state', ],
				'Tags'              => [ 'shape' => 'Tags', 'locationName' => 'tags', ],
				'Type'              => [ 'shape' => 'InputType', 'locationName' => 'type', ],
			],
		],
		'InputAttachment'                               => [
			'type'    => 'structure',
			'members' => [
				'InputAttachmentName' => [
					'shape'        => '__string',
					'locationName' => 'inputAttachmentName',
				],
				'InputId'             => [
					'shape'        => '__string',
					'locationName' => 'inputId',
				],
				'InputSettings'       => [
					'shape'        => 'InputSettings',
					'locationName' => 'inputSettings',
				],
			],
		],
		'InputChannelLevel'                             => [
			'type'     => 'structure',
			'members'  => [
				'Gain'         => [
					'shape'        => '__integerMinNegative60Max6',
					'locationName' => 'gain',
				],
				'InputChannel' => [
					'shape'        => '__integerMin0Max15',
					'locationName' => 'inputChannel',
				],
			],
			'required' => [ 'InputChannel', 'Gain', ],
		],
		'InputClass'                                    => [
			'type' => 'string',
			'enum' => [ 'STANDARD', 'SINGLE_PIPELINE', ],
		],
		'InputCodec'                                    => [
			'type' => 'string',
			'enum' => [ 'MPEG2', 'AVC', 'HEVC', ],
		],
		'InputDeblockFilter'                            => [
			'type' => 'string',
			'enum' => [ 'DISABLED', 'ENABLED', ],
		],
		'InputDenoiseFilter'                            => [
			'type' => 'string',
			'enum' => [ 'DISABLED', 'ENABLED', ],
		],
		'InputDestination'                              => [
			'type'    => 'structure',
			'members' => [
				'Ip'   => [
					'shape'        => '__string',
					'locationName' => 'ip',
				],
				'Port' => [
					'shape'        => '__string',
					'locationName' => 'port',
				],
				'Url'  => [
					'shape'        => '__string',
					'locationName' => 'url',
				],
				'Vpc'  => [
					'shape'        => 'InputDestinationVpc',
					'locationName' => 'vpc',
				],
			],
		],
		'InputDestinationRequest'                       => [
			'type'    => 'structure',
			'members' => [
				'StreamName' => [
					'shape'        => '__string',
					'locationName' => 'streamName',
				],
			],
		],
		'InputDestinationVpc'                           => [
			'type'    => 'structure',
			'members' => [
				'AvailabilityZone'   => [
					'shape'        => '__string',
					'locationName' => 'availabilityZone',
				],
				'NetworkInterfaceId' => [
					'shape'        => '__string',
					'locationName' => 'networkInterfaceId',
				],
			],
		],
		'InputFilter'                                   => [
			'type' => 'string',
			'enum' => [ 'AUTO', 'DISABLED', 'FORCED', ],
		],
		'InputLocation'                                 => [
			'type'     => 'structure',
			'members'  => [
				'PasswordParam' => [
					'shape'        => '__string',
					'locationName' => 'passwordParam',
				],
				'Uri'           => [
					'shape'        => '__string',
					'locationName' => 'uri',
				],
				'Username'      => [
					'shape'        => '__string',
					'locationName' => 'username',
				],
			],
			'required' => [ 'Uri', ],
		],
		'InputLossActionForHlsOut'                      => [
			'type' => 'string',
			'enum' => [ 'EMIT_OUTPUT', 'PAUSE_OUTPUT', ],
		],
		'InputLossActionForMsSmoothOut'                 => [
			'type' => 'string',
			'enum' => [ 'EMIT_OUTPUT', 'PAUSE_OUTPUT', ],
		],
		'InputLossActionForRtmpOut'                     => [
			'type' => 'string',
			'enum' => [ 'EMIT_OUTPUT', 'PAUSE_OUTPUT', ],
		],
		'InputLossActionForUdpOut'                      => [
			'type' => 'string',
			'enum' => [ 'DROP_PROGRAM', 'DROP_TS', 'EMIT_PROGRAM', ],
		],
		'InputLossBehavior'                             => [
			'type'    => 'structure',
			'members' => [
				'BlackFrameMsec'      => [
					'shape'        => '__integerMin0Max1000000',
					'locationName' => 'blackFrameMsec',
				],
				'InputLossImageColor' => [
					'shape'        => '__stringMin6Max6',
					'locationName' => 'inputLossImageColor',
				],
				'InputLossImageSlate' => [
					'shape'        => 'InputLocation',
					'locationName' => 'inputLossImageSlate',
				],
				'InputLossImageType'  => [
					'shape'        => 'InputLossImageType',
					'locationName' => 'inputLossImageType',
				],
				'RepeatFrameMsec'     => [
					'shape'        => '__integerMin0Max1000000',
					'locationName' => 'repeatFrameMsec',
				],
			],
		],
		'InputLossImageType'                            => [ 'type' => 'string', 'enum' => [ 'COLOR', 'SLATE', ], ],
		'InputMaximumBitrate'                           => [
			'type' => 'string',
			'enum' => [ 'MAX_10_MBPS', 'MAX_20_MBPS', 'MAX_50_MBPS', ],
		],
		'InputResolution'                               => [ 'type' => 'string', 'enum' => [ 'SD', 'HD', 'UHD', ], ],
		'InputSecurityGroup'                            => [
			'type'    => 'structure',
			'members' => [
				'Arn'            => [
					'shape'        => '__string',
					'locationName' => 'arn',
				],
				'Id'             => [
					'shape'        => '__string',
					'locationName' => 'id',
				],
				'Inputs'         => [
					'shape'        => '__listOf__string',
					'locationName' => 'inputs',
				],
				'State'          => [
					'shape'        => 'InputSecurityGroupState',
					'locationName' => 'state',
				],
				'Tags'           => [
					'shape'        => 'Tags',
					'locationName' => 'tags',
				],
				'WhitelistRules' => [
					'shape'        => '__listOfInputWhitelistRule',
					'locationName' => 'whitelistRules',
				],
			],
		],
		'InputSecurityGroupState'                       => [
			'type' => 'string',
			'enum' => [ 'IDLE', 'IN_USE', 'UPDATING', 'DELETED', ],
		],
		'InputSecurityGroupWhitelistRequest'            => [
			'type'    => 'structure',
			'members' => [
				'Tags'           => [
					'shape'        => 'Tags',
					'locationName' => 'tags',
				],
				'WhitelistRules' => [
					'shape'        => '__listOfInputWhitelistRuleCidr',
					'locationName' => 'whitelistRules',
				],
			],
		],
		'InputSettings'                                 => [
			'type'    => 'structure',
			'members' => [
				'AudioSelectors'       => [
					'shape'        => '__listOfAudioSelector',
					'locationName' => 'audioSelectors',
				],
				'CaptionSelectors'     => [
					'shape'        => '__listOfCaptionSelector',
					'locationName' => 'captionSelectors',
				],
				'DeblockFilter'        => [
					'shape'        => 'InputDeblockFilter',
					'locationName' => 'deblockFilter',
				],
				'DenoiseFilter'        => [
					'shape'        => 'InputDenoiseFilter',
					'locationName' => 'denoiseFilter',
				],
				'FilterStrength'       => [
					'shape'        => '__integerMin1Max5',
					'locationName' => 'filterStrength',
				],
				'InputFilter'          => [
					'shape'        => 'InputFilter',
					'locationName' => 'inputFilter',
				],
				'NetworkInputSettings' => [
					'shape'        => 'NetworkInputSettings',
					'locationName' => 'networkInputSettings',
				],
				'SourceEndBehavior'    => [
					'shape'        => 'InputSourceEndBehavior',
					'locationName' => 'sourceEndBehavior',
				],
				'VideoSelector'        => [
					'shape'        => 'VideoSelector',
					'locationName' => 'videoSelector',
				],
			],
		],
		'InputSource'                                   => [
			'type'    => 'structure',
			'members' => [
				'PasswordParam' => [
					'shape'        => '__string',
					'locationName' => 'passwordParam',
				],
				'Url'           => [
					'shape'        => '__string',
					'locationName' => 'url',
				],
				'Username'      => [
					'shape'        => '__string',
					'locationName' => 'username',
				],
			],
		],
		'InputSourceEndBehavior'                        => [ 'type' => 'string', 'enum' => [ 'CONTINUE', 'LOOP', ], ],
		'InputSourceRequest'                            => [
			'type'    => 'structure',
			'members' => [
				'PasswordParam' => [
					'shape'        => '__string',
					'locationName' => 'passwordParam',
				],
				'Url'           => [
					'shape'        => '__string',
					'locationName' => 'url',
				],
				'Username'      => [
					'shape'        => '__string',
					'locationName' => 'username',
				],
			],
		],
		'InputSpecification'                            => [
			'type'    => 'structure',
			'members' => [
				'Codec'          => [
					'shape'        => 'InputCodec',
					'locationName' => 'codec',
				],
				'MaximumBitrate' => [
					'shape'        => 'InputMaximumBitrate',
					'locationName' => 'maximumBitrate',
				],
				'Resolution'     => [
					'shape'        => 'InputResolution',
					'locationName' => 'resolution',
				],
			],
		],
		'InputState'                                    => [
			'type' => 'string',
			'enum' => [
				'CREATING',
				'DETACHED',
				'ATTACHED',
				'DELETING',
				'DELETED',
			],
		],
		'InputSwitchScheduleActionSettings'             => [
			'type'     => 'structure',
			'members'  => [
				'InputAttachmentNameReference' => [
					'shape'        => '__string',
					'locationName' => 'inputAttachmentNameReference',
				],
			],
			'required' => [ 'InputAttachmentNameReference', ],
		],
		'InputType'                                     => [
			'type' => 'string',
			'enum' => [
				'UDP_PUSH',
				'RTP_PUSH',
				'RTMP_PUSH',
				'RTMP_PULL',
				'URL_PULL',
				'MP4_FILE',
				'MEDIACONNECT',
			],
		],
		'InputVpcRequest'                               => [
			'type'     => 'structure',
			'members'  => [
				'SecurityGroupIds' => [
					'shape'        => '__listOf__string',
					'locationName' => 'securityGroupIds',
				],
				'SubnetIds'        => [
					'shape'        => '__listOf__string',
					'locationName' => 'subnetIds',
				],
			],
			'required' => [ 'SubnetIds', ],
		],
		'InputWhitelistRule'                            => [
			'type'    => 'structure',
			'members' => [
				'Cidr' => [
					'shape'        => '__string',
					'locationName' => 'cidr',
				],
			],
		],
		'InputWhitelistRuleCidr'                        => [
			'type'    => 'structure',
			'members' => [
				'Cidr' => [
					'shape'        => '__string',
					'locationName' => 'cidr',
				],
			],
		],
		'InternalServerErrorException'                  => [
			'type'      => 'structure',
			'members'   => [
				'Message' => [
					'shape'        => '__string',
					'locationName' => 'message',
				],
			],
			'exception' => true,
			'error'     => [ 'httpStatusCode' => 500, ],
		],
		'InternalServiceError'                          => [
			'type'    => 'structure',
			'members' => [
				'Message' => [
					'shape'        => '__string',
					'locationName' => 'message',
				],
			],
		],
		'InvalidRequest'                                => [
			'type'    => 'structure',
			'members' => [
				'Message' => [
					'shape'        => '__string',
					'locationName' => 'message',
				],
			],
		],
		'KeyProviderSettings'                           => [
			'type'    => 'structure',
			'members' => [
				'StaticKeySettings' => [
					'shape'        => 'StaticKeySettings',
					'locationName' => 'staticKeySettings',
				],
			],
		],
		'LimitExceeded'                                 => [
			'type'    => 'structure',
			'members' => [
				'Message' => [
					'shape'        => '__string',
					'locationName' => 'message',
				],
			],
		],
		'ListChannelsRequest'                           => [
			'type'    => 'structure',
			'members' => [
				'MaxResults' => [
					'shape'        => 'MaxResults',
					'location'     => 'querystring',
					'locationName' => 'maxResults',
				],
				'NextToken'  => [
					'shape'        => '__string',
					'location'     => 'querystring',
					'locationName' => 'nextToken',
				],
			],
		],
		'ListChannelsResponse'                          => [
			'type'    => 'structure',
			'members' => [
				'Channels'  => [
					'shape'        => '__listOfChannelSummary',
					'locationName' => 'channels',
				],
				'NextToken' => [
					'shape'        => '__string',
					'locationName' => 'nextToken',
				],
			],
		],
		'ListChannelsResultModel'                       => [
			'type'    => 'structure',
			'members' => [
				'Channels'  => [
					'shape'        => '__listOfChannelSummary',
					'locationName' => 'channels',
				],
				'NextToken' => [
					'shape'        => '__string',
					'locationName' => 'nextToken',
				],
			],
		],
		'ListInputSecurityGroupsRequest'                => [
			'type'    => 'structure',
			'members' => [
				'MaxResults' => [
					'shape'        => 'MaxResults',
					'location'     => 'querystring',
					'locationName' => 'maxResults',
				],
				'NextToken'  => [
					'shape'        => '__string',
					'location'     => 'querystring',
					'locationName' => 'nextToken',
				],
			],
		],
		'ListInputSecurityGroupsResponse'               => [
			'type'    => 'structure',
			'members' => [
				'InputSecurityGroups' => [
					'shape'        => '__listOfInputSecurityGroup',
					'locationName' => 'inputSecurityGroups',
				],
				'NextToken'           => [
					'shape'        => '__string',
					'locationName' => 'nextToken',
				],
			],
		],
		'ListInputSecurityGroupsResultModel'            => [
			'type'    => 'structure',
			'members' => [
				'InputSecurityGroups' => [
					'shape'        => '__listOfInputSecurityGroup',
					'locationName' => 'inputSecurityGroups',
				],
				'NextToken'           => [
					'shape'        => '__string',
					'locationName' => 'nextToken',
				],
			],
		],
		'ListInputsRequest'                             => [
			'type'    => 'structure',
			'members' => [
				'MaxResults' => [
					'shape'        => 'MaxResults',
					'location'     => 'querystring',
					'locationName' => 'maxResults',
				],
				'NextToken'  => [
					'shape'        => '__string',
					'location'     => 'querystring',
					'locationName' => 'nextToken',
				],
			],
		],
		'ListInputsResponse'                            => [
			'type'    => 'structure',
			'members' => [
				'Inputs'    => [
					'shape'        => '__listOfInput',
					'locationName' => 'inputs',
				],
				'NextToken' => [
					'shape'        => '__string',
					'locationName' => 'nextToken',
				],
			],
		],
		'ListInputsResultModel'                         => [
			'type'    => 'structure',
			'members' => [
				'Inputs'    => [
					'shape'        => '__listOfInput',
					'locationName' => 'inputs',
				],
				'NextToken' => [
					'shape'        => '__string',
					'locationName' => 'nextToken',
				],
			],
		],
		'ListOfferingsRequest'                          => [
			'type'    => 'structure',
			'members' => [
				'ChannelClass'         => [
					'shape'        => '__string',
					'location'     => 'querystring',
					'locationName' => 'channelClass',
				],
				'ChannelConfiguration' => [
					'shape'        => '__string',
					'location'     => 'querystring',
					'locationName' => 'channelConfiguration',
				],
				'Codec'                => [
					'shape'        => '__string',
					'location'     => 'querystring',
					'locationName' => 'codec',
				],
				'MaxResults'           => [
					'shape'        => 'MaxResults',
					'location'     => 'querystring',
					'locationName' => 'maxResults',
				],
				'MaximumBitrate'       => [
					'shape'        => '__string',
					'location'     => 'querystring',
					'locationName' => 'maximumBitrate',
				],
				'MaximumFramerate'     => [
					'shape'        => '__string',
					'location'     => 'querystring',
					'locationName' => 'maximumFramerate',
				],
				'NextToken'            => [
					'shape'        => '__string',
					'location'     => 'querystring',
					'locationName' => 'nextToken',
				],
				'Resolution'           => [
					'shape'        => '__string',
					'location'     => 'querystring',
					'locationName' => 'resolution',
				],
				'ResourceType'         => [
					'shape'        => '__string',
					'location'     => 'querystring',
					'locationName' => 'resourceType',
				],
				'SpecialFeature'       => [
					'shape'        => '__string',
					'location'     => 'querystring',
					'locationName' => 'specialFeature',
				],
				'VideoQuality'         => [
					'shape'        => '__string',
					'location'     => 'querystring',
					'locationName' => 'videoQuality',
				],
			],
		],
		'ListOfferingsResponse'                         => [
			'type'    => 'structure',
			'members' => [
				'NextToken' => [
					'shape'        => '__string',
					'locationName' => 'nextToken',
				],
				'Offerings' => [
					'shape'        => '__listOfOffering',
					'locationName' => 'offerings',
				],
			],
		],
		'ListOfferingsResultModel'                      => [
			'type'    => 'structure',
			'members' => [
				'NextToken' => [
					'shape'        => '__string',
					'locationName' => 'nextToken',
				],
				'Offerings' => [
					'shape'        => '__listOfOffering',
					'locationName' => 'offerings',
				],
			],
		],
		'ListReservationsRequest'                       => [
			'type'    => 'structure',
			'members' => [
				'ChannelClass'     => [
					'shape'        => '__string',
					'location'     => 'querystring',
					'locationName' => 'channelClass',
				],
				'Codec'            => [
					'shape'        => '__string',
					'location'     => 'querystring',
					'locationName' => 'codec',
				],
				'MaxResults'       => [
					'shape'        => 'MaxResults',
					'location'     => 'querystring',
					'locationName' => 'maxResults',
				],
				'MaximumBitrate'   => [
					'shape'        => '__string',
					'location'     => 'querystring',
					'locationName' => 'maximumBitrate',
				],
				'MaximumFramerate' => [
					'shape'        => '__string',
					'location'     => 'querystring',
					'locationName' => 'maximumFramerate',
				],
				'NextToken'        => [
					'shape'        => '__string',
					'location'     => 'querystring',
					'locationName' => 'nextToken',
				],
				'Resolution'       => [
					'shape'        => '__string',
					'location'     => 'querystring',
					'locationName' => 'resolution',
				],
				'ResourceType'     => [
					'shape'        => '__string',
					'location'     => 'querystring',
					'locationName' => 'resourceType',
				],
				'SpecialFeature'   => [
					'shape'        => '__string',
					'location'     => 'querystring',
					'locationName' => 'specialFeature',
				],
				'VideoQuality'     => [
					'shape'        => '__string',
					'location'     => 'querystring',
					'locationName' => 'videoQuality',
				],
			],
		],
		'ListReservationsResponse'                      => [
			'type'    => 'structure',
			'members' => [
				'NextToken'    => [
					'shape'        => '__string',
					'locationName' => 'nextToken',
				],
				'Reservations' => [
					'shape'        => '__listOfReservation',
					'locationName' => 'reservations',
				],
			],
		],
		'ListReservationsResultModel'                   => [
			'type'    => 'structure',
			'members' => [
				'NextToken'    => [
					'shape'        => '__string',
					'locationName' => 'nextToken',
				],
				'Reservations' => [
					'shape'        => '__listOfReservation',
					'locationName' => 'reservations',
				],
			],
		],
		'ListTagsForResourceRequest'                    => [
			'type'     => 'structure',
			'members'  => [
				'ResourceArn' => [
					'shape'        => '__string',
					'location'     => 'uri',
					'locationName' => 'resource-arn',
				],
			],
			'required' => [ 'ResourceArn', ],
		],
		'ListTagsForResourceResponse'                   => [
			'type'    => 'structure',
			'members' => [
				'Tags' => [
					'shape'        => 'Tags',
					'locationName' => 'tags',
				],
			],
		],
		'LogLevel'                                      => [
			'type' => 'string',
			'enum' => [ 'ERROR', 'WARNING', 'INFO', 'DEBUG', 'DISABLED', ],
		],
		'M2tsAbsentInputAudioBehavior'                  => [
			'type' => 'string',
			'enum' => [ 'DROP', 'ENCODE_SILENCE', ],
		],
		'M2tsArib'                                      => [
			'type' => 'string',
			'enum' => [ 'DISABLED', 'ENABLED', ],
		],
		'M2tsAribCaptionsPidControl'                    => [
			'type' => 'string',
			'enum' => [ 'AUTO', 'USE_CONFIGURED', ],
		],
		'M2tsAudioBufferModel'                          => [ 'type' => 'string', 'enum' => [ 'ATSC', 'DVB', ], ],
		'M2tsAudioInterval'                             => [
			'type' => 'string',
			'enum' => [ 'VIDEO_AND_FIXED_INTERVALS', 'VIDEO_INTERVAL', ],
		],
		'M2tsAudioStreamType'                           => [ 'type' => 'string', 'enum' => [ 'ATSC', 'DVB', ], ],
		'M2tsBufferModel'                               => [ 'type' => 'string', 'enum' => [ 'MULTIPLEX', 'NONE', ], ],
		'M2tsCcDescriptor'                              => [
			'type' => 'string',
			'enum' => [ 'DISABLED', 'ENABLED', ],
		],
		'M2tsEbifControl'                               => [
			'type' => 'string',
			'enum' => [ 'NONE', 'PASSTHROUGH', ],
		],
		'M2tsEbpPlacement'                              => [
			'type' => 'string',
			'enum' => [ 'VIDEO_AND_AUDIO_PIDS', 'VIDEO_PID', ],
		],
		'M2tsEsRateInPes'                               => [ 'type' => 'string', 'enum' => [ 'EXCLUDE', 'INCLUDE', ], ],
		'M2tsKlv'                                       => [
			'type' => 'string',
			'enum' => [ 'NONE', 'PASSTHROUGH', ],
		],
		'M2tsPcrControl'                                => [
			'type' => 'string',
			'enum' => [ 'CONFIGURED_PCR_PERIOD', 'PCR_EVERY_PES_PACKET', ],
		],
		'M2tsRateMode'                                  => [ 'type' => 'string', 'enum' => [ 'CBR', 'VBR', ], ],
		'M2tsScte35Control'                             => [
			'type' => 'string',
			'enum' => [ 'NONE', 'PASSTHROUGH', ],
		],
		'M2tsSegmentationMarkers'                       => [
			'type' => 'string',
			'enum' => [
				'EBP',
				'EBP_LEGACY',
				'NONE',
				'PSI_SEGSTART',
				'RAI_ADAPT',
				'RAI_SEGSTART',
			],
		],
		'M2tsSegmentationStyle'                         => [
			'type' => 'string',
			'enum' => [ 'MAINTAIN_CADENCE', 'RESET_CADENCE', ],
		],
		'M2tsSettings'                                  => [
			'type'    => 'structure',
			'members' => [
				'AbsentInputAudioBehavior' => [
					'shape'        => 'M2tsAbsentInputAudioBehavior',
					'locationName' => 'absentInputAudioBehavior',
				],
				'Arib'                     => [ 'shape' => 'M2tsArib', 'locationName' => 'arib', ],
				'AribCaptionsPid'          => [ 'shape' => '__string', 'locationName' => 'aribCaptionsPid', ],
				'AribCaptionsPidControl'   => [
					'shape'        => 'M2tsAribCaptionsPidControl',
					'locationName' => 'aribCaptionsPidControl',
				],
				'AudioBufferModel'         => [
					'shape'        => 'M2tsAudioBufferModel',
					'locationName' => 'audioBufferModel',
				],
				'AudioFramesPerPes'        => [ 'shape' => '__integerMin0', 'locationName' => 'audioFramesPerPes', ],
				'AudioPids'                => [ 'shape' => '__string', 'locationName' => 'audioPids', ],
				'AudioStreamType'          => [
					'shape'        => 'M2tsAudioStreamType',
					'locationName' => 'audioStreamType',
				],
				'Bitrate'                  => [ 'shape' => '__integerMin0', 'locationName' => 'bitrate', ],
				'BufferModel'              => [ 'shape' => 'M2tsBufferModel', 'locationName' => 'bufferModel', ],
				'CcDescriptor'             => [ 'shape' => 'M2tsCcDescriptor', 'locationName' => 'ccDescriptor', ],
				'DvbNitSettings'           => [ 'shape' => 'DvbNitSettings', 'locationName' => 'dvbNitSettings', ],
				'DvbSdtSettings'           => [ 'shape' => 'DvbSdtSettings', 'locationName' => 'dvbSdtSettings', ],
				'DvbSubPids'               => [ 'shape' => '__string', 'locationName' => 'dvbSubPids', ],
				'DvbTdtSettings'           => [ 'shape' => 'DvbTdtSettings', 'locationName' => 'dvbTdtSettings', ],
				'DvbTeletextPid'           => [ 'shape' => '__string', 'locationName' => 'dvbTeletextPid', ],
				'Ebif'                     => [ 'shape' => 'M2tsEbifControl', 'locationName' => 'ebif', ],
				'EbpAudioInterval'         => [ 'shape' => 'M2tsAudioInterval', 'locationName' => 'ebpAudioInterval', ],
				'EbpLookaheadMs'           => [
					'shape'        => '__integerMin0Max10000',
					'locationName' => 'ebpLookaheadMs',
				],
				'EbpPlacement'             => [ 'shape' => 'M2tsEbpPlacement', 'locationName' => 'ebpPlacement', ],
				'EcmPid'                   => [ 'shape' => '__string', 'locationName' => 'ecmPid', ],
				'EsRateInPes'              => [ 'shape' => 'M2tsEsRateInPes', 'locationName' => 'esRateInPes', ],
				'EtvPlatformPid'           => [ 'shape' => '__string', 'locationName' => 'etvPlatformPid', ],
				'EtvSignalPid'             => [ 'shape' => '__string', 'locationName' => 'etvSignalPid', ],
				'FragmentTime'             => [ 'shape' => '__doubleMin0', 'locationName' => 'fragmentTime', ],
				'Klv'                      => [ 'shape' => 'M2tsKlv', 'locationName' => 'klv', ],
				'KlvDataPids'              => [ 'shape' => '__string', 'locationName' => 'klvDataPids', ],
				'NullPacketBitrate'        => [ 'shape' => '__doubleMin0', 'locationName' => 'nullPacketBitrate', ],
				'PatInterval'              => [ 'shape' => '__integerMin0Max1000', 'locationName' => 'patInterval', ],
				'PcrControl'               => [ 'shape' => 'M2tsPcrControl', 'locationName' => 'pcrControl', ],
				'PcrPeriod'                => [ 'shape' => '__integerMin0Max500', 'locationName' => 'pcrPeriod', ],
				'PcrPid'                   => [ 'shape' => '__string', 'locationName' => 'pcrPid', ],
				'PmtInterval'              => [ 'shape' => '__integerMin0Max1000', 'locationName' => 'pmtInterval', ],
				'PmtPid'                   => [ 'shape' => '__string', 'locationName' => 'pmtPid', ],
				'ProgramNum'               => [ 'shape' => '__integerMin0Max65535', 'locationName' => 'programNum', ],
				'RateMode'                 => [ 'shape' => 'M2tsRateMode', 'locationName' => 'rateMode', ],
				'Scte27Pids'               => [ 'shape' => '__string', 'locationName' => 'scte27Pids', ],
				'Scte35Control'            => [ 'shape' => 'M2tsScte35Control', 'locationName' => 'scte35Control', ],
				'Scte35Pid'                => [ 'shape' => '__string', 'locationName' => 'scte35Pid', ],
				'SegmentationMarkers'      => [
					'shape'        => 'M2tsSegmentationMarkers',
					'locationName' => 'segmentationMarkers',
				],
				'SegmentationStyle'        => [
					'shape'        => 'M2tsSegmentationStyle',
					'locationName' => 'segmentationStyle',
				],
				'SegmentationTime'         => [ 'shape' => '__doubleMin1', 'locationName' => 'segmentationTime', ],
				'TimedMetadataBehavior'    => [
					'shape'        => 'M2tsTimedMetadataBehavior',
					'locationName' => 'timedMetadataBehavior',
				],
				'TimedMetadataPid'         => [ 'shape' => '__string', 'locationName' => 'timedMetadataPid', ],
				'TransportStreamId'        => [
					'shape'        => '__integerMin0Max65535',
					'locationName' => 'transportStreamId',
				],
				'VideoPid'                 => [ 'shape' => '__string', 'locationName' => 'videoPid', ],
			],
		],
		'M2tsTimedMetadataBehavior'                     => [
			'type' => 'string',
			'enum' => [ 'NO_PASSTHROUGH', 'PASSTHROUGH', ],
		],
		'M3u8PcrControl'                                => [
			'type' => 'string',
			'enum' => [ 'CONFIGURED_PCR_PERIOD', 'PCR_EVERY_PES_PACKET', ],
		],
		'M3u8Scte35Behavior'                            => [
			'type' => 'string',
			'enum' => [ 'NO_PASSTHROUGH', 'PASSTHROUGH', ],
		],
		'M3u8Settings'                                  => [
			'type'    => 'structure',
			'members' => [
				'AudioFramesPerPes'     => [ 'shape' => '__integerMin0', 'locationName' => 'audioFramesPerPes', ],
				'AudioPids'             => [ 'shape' => '__string', 'locationName' => 'audioPids', ],
				'EcmPid'                => [ 'shape' => '__string', 'locationName' => 'ecmPid', ],
				'PatInterval'           => [ 'shape' => '__integerMin0Max1000', 'locationName' => 'patInterval', ],
				'PcrControl'            => [ 'shape' => 'M3u8PcrControl', 'locationName' => 'pcrControl', ],
				'PcrPeriod'             => [ 'shape' => '__integerMin0Max500', 'locationName' => 'pcrPeriod', ],
				'PcrPid'                => [ 'shape' => '__string', 'locationName' => 'pcrPid', ],
				'PmtInterval'           => [ 'shape' => '__integerMin0Max1000', 'locationName' => 'pmtInterval', ],
				'PmtPid'                => [ 'shape' => '__string', 'locationName' => 'pmtPid', ],
				'ProgramNum'            => [ 'shape' => '__integerMin0Max65535', 'locationName' => 'programNum', ],
				'Scte35Behavior'        => [ 'shape' => 'M3u8Scte35Behavior', 'locationName' => 'scte35Behavior', ],
				'Scte35Pid'             => [ 'shape' => '__string', 'locationName' => 'scte35Pid', ],
				'TimedMetadataBehavior' => [
					'shape'        => 'M3u8TimedMetadataBehavior',
					'locationName' => 'timedMetadataBehavior',
				],
				'TimedMetadataPid'      => [ 'shape' => '__string', 'locationName' => 'timedMetadataPid', ],
				'TransportStreamId'     => [
					'shape'        => '__integerMin0Max65535',
					'locationName' => 'transportStreamId',
				],
				'VideoPid'              => [ 'shape' => '__string', 'locationName' => 'videoPid', ],
			],
		],
		'M3u8TimedMetadataBehavior'                     => [
			'type' => 'string',
			'enum' => [ 'NO_PASSTHROUGH', 'PASSTHROUGH', ],
		],
		'MaxResults'                                    => [ 'type' => 'integer', 'min' => 1, 'max' => 1000, ],
		'MediaConnectFlow'                              => [
			'type'    => 'structure',
			'members' => [
				'FlowArn' => [
					'shape'        => '__string',
					'locationName' => 'flowArn',
				],
			],
		],
		'MediaConnectFlowRequest'                       => [
			'type'    => 'structure',
			'members' => [
				'FlowArn' => [
					'shape'        => '__string',
					'locationName' => 'flowArn',
				],
			],
		],
		'MediaPackageGroupSettings'                     => [
			'type'     => 'structure',
			'members'  => [
				'Destination' => [
					'shape'        => 'OutputLocationRef',
					'locationName' => 'destination',
				],
			],
			'required' => [ 'Destination', ],
		],
		'MediaPackageOutputDestinationSettings'         => [
			'type'    => 'structure',
			'members' => [
				'ChannelId' => [
					'shape'        => '__stringMin1',
					'locationName' => 'channelId',
				],
			],
		],
		'MediaPackageOutputSettings'                    => [ 'type' => 'structure', 'members' => [], ],
		'Mp2CodingMode'                                 => [
			'type' => 'string',
			'enum' => [ 'CODING_MODE_1_0', 'CODING_MODE_2_0', ],
		],
		'Mp2Settings'                                   => [
			'type'    => 'structure',
			'members' => [
				'Bitrate'    => [
					'shape'        => '__double',
					'locationName' => 'bitrate',
				],
				'CodingMode' => [
					'shape'        => 'Mp2CodingMode',
					'locationName' => 'codingMode',
				],
				'SampleRate' => [
					'shape'        => '__double',
					'locationName' => 'sampleRate',
				],
			],
		],
		'MsSmoothGroupSettings'                         => [
			'type'     => 'structure',
			'members'  => [
				'AcquisitionPointId'       => [ 'shape' => '__string', 'locationName' => 'acquisitionPointId', ],
				'AudioOnlyTimecodeControl' => [
					'shape'        => 'SmoothGroupAudioOnlyTimecodeControl',
					'locationName' => 'audioOnlyTimecodeControl',
				],
				'CertificateMode'          => [
					'shape'        => 'SmoothGroupCertificateMode',
					'locationName' => 'certificateMode',
				],
				'ConnectionRetryInterval'  => [
					'shape'        => '__integerMin0',
					'locationName' => 'connectionRetryInterval',
				],
				'Destination'              => [ 'shape' => 'OutputLocationRef', 'locationName' => 'destination', ],
				'EventId'                  => [ 'shape' => '__string', 'locationName' => 'eventId', ],
				'EventIdMode'              => [ 'shape' => 'SmoothGroupEventIdMode', 'locationName' => 'eventIdMode', ],
				'EventStopBehavior'        => [
					'shape'        => 'SmoothGroupEventStopBehavior',
					'locationName' => 'eventStopBehavior',
				],
				'FilecacheDuration'        => [ 'shape' => '__integerMin0', 'locationName' => 'filecacheDuration', ],
				'FragmentLength'           => [ 'shape' => '__integerMin1', 'locationName' => 'fragmentLength', ],
				'InputLossAction'          => [
					'shape'        => 'InputLossActionForMsSmoothOut',
					'locationName' => 'inputLossAction',
				],
				'NumRetries'               => [ 'shape' => '__integerMin0', 'locationName' => 'numRetries', ],
				'RestartDelay'             => [ 'shape' => '__integerMin0', 'locationName' => 'restartDelay', ],
				'SegmentationMode'         => [
					'shape'        => 'SmoothGroupSegmentationMode',
					'locationName' => 'segmentationMode',
				],
				'SendDelayMs'              => [ 'shape' => '__integerMin0Max10000', 'locationName' => 'sendDelayMs', ],
				'SparseTrackType'          => [
					'shape'        => 'SmoothGroupSparseTrackType',
					'locationName' => 'sparseTrackType',
				],
				'StreamManifestBehavior'   => [
					'shape'        => 'SmoothGroupStreamManifestBehavior',
					'locationName' => 'streamManifestBehavior',
				],
				'TimestampOffset'          => [ 'shape' => '__string', 'locationName' => 'timestampOffset', ],
				'TimestampOffsetMode'      => [
					'shape'        => 'SmoothGroupTimestampOffsetMode',
					'locationName' => 'timestampOffsetMode',
				],
			],
			'required' => [ 'Destination', ],
		],
		'MsSmoothOutputSettings'                        => [
			'type'    => 'structure',
			'members' => [
				'NameModifier' => [
					'shape'        => '__string',
					'locationName' => 'nameModifier',
				],
			],
		],
		'NetworkInputServerValidation'                  => [
			'type' => 'string',
			'enum' => [
				'CHECK_CRYPTOGRAPHY_AND_VALIDATE_NAME',
				'CHECK_CRYPTOGRAPHY_ONLY',
			],
		],
		'NetworkInputSettings'                          => [
			'type'    => 'structure',
			'members' => [
				'HlsInputSettings' => [
					'shape'        => 'HlsInputSettings',
					'locationName' => 'hlsInputSettings',
				],
				'ServerValidation' => [
					'shape'        => 'NetworkInputServerValidation',
					'locationName' => 'serverValidation',
				],
			],
		],
		'NotFoundException'                             => [
			'type'      => 'structure',
			'members'   => [
				'Message' => [
					'shape'        => '__string',
					'locationName' => 'message',
				],
			],
			'exception' => true,
			'error'     => [ 'httpStatusCode' => 404, ],
		],
		'Offering'                                      => [
			'type'    => 'structure',
			'members' => [
				'Arn'                   => [
					'shape'        => '__string',
					'locationName' => 'arn',
				],
				'CurrencyCode'          => [
					'shape'        => '__string',
					'locationName' => 'currencyCode',
				],
				'Duration'              => [
					'shape'        => '__integer',
					'locationName' => 'duration',
				],
				'DurationUnits'         => [
					'shape'        => 'OfferingDurationUnits',
					'locationName' => 'durationUnits',
				],
				'FixedPrice'            => [
					'shape'        => '__double',
					'locationName' => 'fixedPrice',
				],
				'OfferingDescription'   => [
					'shape'        => '__string',
					'locationName' => 'offeringDescription',
				],
				'OfferingId'            => [
					'shape'        => '__string',
					'locationName' => 'offeringId',
				],
				'OfferingType'          => [
					'shape'        => 'OfferingType',
					'locationName' => 'offeringType',
				],
				'Region'                => [
					'shape'        => '__string',
					'locationName' => 'region',
				],
				'ResourceSpecification' => [
					'shape'        => 'ReservationResourceSpecification',
					'locationName' => 'resourceSpecification',
				],
				'UsagePrice'            => [
					'shape'        => '__double',
					'locationName' => 'usagePrice',
				],
			],
		],
		'OfferingDurationUnits'                         => [ 'type' => 'string', 'enum' => [ 'MONTHS', ], ],
		'OfferingType'                                  => [ 'type' => 'string', 'enum' => [ 'NO_UPFRONT', ], ],
		'Output'                                        => [
			'type'     => 'structure',
			'members'  => [
				'AudioDescriptionNames'   => [
					'shape'        => '__listOf__string',
					'locationName' => 'audioDescriptionNames',
				],
				'CaptionDescriptionNames' => [
					'shape'        => '__listOf__string',
					'locationName' => 'captionDescriptionNames',
				],
				'OutputName'              => [
					'shape'        => '__stringMin1Max255',
					'locationName' => 'outputName',
				],
				'OutputSettings'          => [
					'shape'        => 'OutputSettings',
					'locationName' => 'outputSettings',
				],
				'VideoDescriptionName'    => [
					'shape'        => '__string',
					'locationName' => 'videoDescriptionName',
				],
			],
			'required' => [ 'OutputSettings', ],
		],
		'OutputDestination'                             => [
			'type'    => 'structure',
			'members' => [
				'Id'                   => [
					'shape'        => '__string',
					'locationName' => 'id',
				],
				'MediaPackageSettings' => [
					'shape'        => '__listOfMediaPackageOutputDestinationSettings',
					'locationName' => 'mediaPackageSettings',
				],
				'Settings'             => [
					'shape'        => '__listOfOutputDestinationSettings',
					'locationName' => 'settings',
				],
			],
		],
		'OutputDestinationSettings'                     => [
			'type'    => 'structure',
			'members' => [
				'PasswordParam' => [
					'shape'        => '__string',
					'locationName' => 'passwordParam',
				],
				'StreamName'    => [
					'shape'        => '__string',
					'locationName' => 'streamName',
				],
				'Url'           => [
					'shape'        => '__string',
					'locationName' => 'url',
				],
				'Username'      => [
					'shape'        => '__string',
					'locationName' => 'username',
				],
			],
		],
		'OutputGroup'                                   => [
			'type'     => 'structure',
			'members'  => [
				'Name'                => [
					'shape'        => '__stringMax32',
					'locationName' => 'name',
				],
				'OutputGroupSettings' => [
					'shape'        => 'OutputGroupSettings',
					'locationName' => 'outputGroupSettings',
				],
				'Outputs'             => [
					'shape'        => '__listOfOutput',
					'locationName' => 'outputs',
				],
			],
			'required' => [ 'Outputs', 'OutputGroupSettings', ],
		],
		'OutputGroupSettings'                           => [
			'type'    => 'structure',
			'members' => [
				'ArchiveGroupSettings'      => [
					'shape'        => 'ArchiveGroupSettings',
					'locationName' => 'archiveGroupSettings',
				],
				'FrameCaptureGroupSettings' => [
					'shape'        => 'FrameCaptureGroupSettings',
					'locationName' => 'frameCaptureGroupSettings',
				],
				'HlsGroupSettings'          => [
					'shape'        => 'HlsGroupSettings',
					'locationName' => 'hlsGroupSettings',
				],
				'MediaPackageGroupSettings' => [
					'shape'        => 'MediaPackageGroupSettings',
					'locationName' => 'mediaPackageGroupSettings',
				],
				'MsSmoothGroupSettings'     => [
					'shape'        => 'MsSmoothGroupSettings',
					'locationName' => 'msSmoothGroupSettings',
				],
				'RtmpGroupSettings'         => [
					'shape'        => 'RtmpGroupSettings',
					'locationName' => 'rtmpGroupSettings',
				],
				'UdpGroupSettings'          => [
					'shape'        => 'UdpGroupSettings',
					'locationName' => 'udpGroupSettings',
				],
			],
		],
		'OutputLocationRef'                             => [
			'type'    => 'structure',
			'members' => [
				'DestinationRefId' => [
					'shape'        => '__string',
					'locationName' => 'destinationRefId',
				],
			],
		],
		'OutputSettings'                                => [
			'type'    => 'structure',
			'members' => [
				'ArchiveOutputSettings'      => [
					'shape'        => 'ArchiveOutputSettings',
					'locationName' => 'archiveOutputSettings',
				],
				'FrameCaptureOutputSettings' => [
					'shape'        => 'FrameCaptureOutputSettings',
					'locationName' => 'frameCaptureOutputSettings',
				],
				'HlsOutputSettings'          => [
					'shape'        => 'HlsOutputSettings',
					'locationName' => 'hlsOutputSettings',
				],
				'MediaPackageOutputSettings' => [
					'shape'        => 'MediaPackageOutputSettings',
					'locationName' => 'mediaPackageOutputSettings',
				],
				'MsSmoothOutputSettings'     => [
					'shape'        => 'MsSmoothOutputSettings',
					'locationName' => 'msSmoothOutputSettings',
				],
				'RtmpOutputSettings'         => [
					'shape'        => 'RtmpOutputSettings',
					'locationName' => 'rtmpOutputSettings',
				],
				'UdpOutputSettings'          => [
					'shape'        => 'UdpOutputSettings',
					'locationName' => 'udpOutputSettings',
				],
			],
		],
		'PassThroughSettings'                           => [ 'type' => 'structure', 'members' => [], ],
		'PauseStateScheduleActionSettings'              => [
			'type'    => 'structure',
			'members' => [
				'Pipelines' => [
					'shape'        => '__listOfPipelinePauseStateSettings',
					'locationName' => 'pipelines',
				],
			],
		],
		'PipelineId'                                    => [
			'type' => 'string',
			'enum' => [ 'PIPELINE_0', 'PIPELINE_1', ],
		],
		'PipelinePauseStateSettings'                    => [
			'type'     => 'structure',
			'members'  => [
				'PipelineId' => [
					'shape'        => 'PipelineId',
					'locationName' => 'pipelineId',
				],
			],
			'required' => [ 'PipelineId', ],
		],
		'PurchaseOffering'                              => [
			'type'     => 'structure',
			'members'  => [
				'Count'     => [
					'shape'        => '__integerMin1',
					'locationName' => 'count',
				],
				'Name'      => [
					'shape'        => '__string',
					'locationName' => 'name',
				],
				'RequestId' => [
					'shape'            => '__string',
					'locationName'     => 'requestId',
					'idempotencyToken' => true,
				],
				'Start'     => [
					'shape'        => '__string',
					'locationName' => 'start',
				],
				'Tags'      => [
					'shape'        => 'Tags',
					'locationName' => 'tags',
				],
			],
			'required' => [ 'Count', ],
		],
		'PurchaseOfferingRequest'                       => [
			'type'     => 'structure',
			'members'  => [
				'Count'      => [
					'shape'        => '__integerMin1',
					'locationName' => 'count',
				],
				'Name'       => [
					'shape'        => '__string',
					'locationName' => 'name',
				],
				'OfferingId' => [
					'shape'        => '__string',
					'location'     => 'uri',
					'locationName' => 'offeringId',
				],
				'RequestId'  => [
					'shape'            => '__string',
					'locationName'     => 'requestId',
					'idempotencyToken' => true,
				],
				'Start'      => [
					'shape'        => '__string',
					'locationName' => 'start',
				],
				'Tags'       => [
					'shape'        => 'Tags',
					'locationName' => 'tags',
				],
			],
			'required' => [ 'OfferingId', 'Count', ],
		],
		'PurchaseOfferingResponse'                      => [
			'type'    => 'structure',
			'members' => [
				'Reservation' => [
					'shape'        => 'Reservation',
					'locationName' => 'reservation',
				],
			],
		],
		'PurchaseOfferingResultModel'                   => [
			'type'    => 'structure',
			'members' => [
				'Reservation' => [
					'shape'        => 'Reservation',
					'locationName' => 'reservation',
				],
			],
		],
		'RemixSettings'                                 => [
			'type'     => 'structure',
			'members'  => [
				'ChannelMappings' => [
					'shape'        => '__listOfAudioChannelMapping',
					'locationName' => 'channelMappings',
				],
				'ChannelsIn'      => [
					'shape'        => '__integerMin1Max16',
					'locationName' => 'channelsIn',
				],
				'ChannelsOut'     => [
					'shape'        => '__integerMin1Max8',
					'locationName' => 'channelsOut',
				],
			],
			'required' => [ 'ChannelMappings', ],
		],
		'Reservation'                                   => [
			'type'    => 'structure',
			'members' => [
				'Arn'                   => [ 'shape' => '__string', 'locationName' => 'arn', ],
				'Count'                 => [ 'shape' => '__integer', 'locationName' => 'count', ],
				'CurrencyCode'          => [ 'shape' => '__string', 'locationName' => 'currencyCode', ],
				'Duration'              => [ 'shape' => '__integer', 'locationName' => 'duration', ],
				'DurationUnits'         => [ 'shape' => 'OfferingDurationUnits', 'locationName' => 'durationUnits', ],
				'End'                   => [ 'shape' => '__string', 'locationName' => 'end', ],
				'FixedPrice'            => [ 'shape' => '__double', 'locationName' => 'fixedPrice', ],
				'Name'                  => [ 'shape' => '__string', 'locationName' => 'name', ],
				'OfferingDescription'   => [ 'shape' => '__string', 'locationName' => 'offeringDescription', ],
				'OfferingId'            => [ 'shape' => '__string', 'locationName' => 'offeringId', ],
				'OfferingType'          => [ 'shape' => 'OfferingType', 'locationName' => 'offeringType', ],
				'Region'                => [ 'shape' => '__string', 'locationName' => 'region', ],
				'ReservationId'         => [ 'shape' => '__string', 'locationName' => 'reservationId', ],
				'ResourceSpecification' => [
					'shape'        => 'ReservationResourceSpecification',
					'locationName' => 'resourceSpecification',
				],
				'Start'                 => [ 'shape' => '__string', 'locationName' => 'start', ],
				'State'                 => [ 'shape' => 'ReservationState', 'locationName' => 'state', ],
				'Tags'                  => [ 'shape' => 'Tags', 'locationName' => 'tags', ],
				'UsagePrice'            => [ 'shape' => '__double', 'locationName' => 'usagePrice', ],
			],
		],
		'ReservationCodec'                              => [
			'type' => 'string',
			'enum' => [ 'MPEG2', 'AVC', 'HEVC', 'AUDIO', ],
		],
		'ReservationMaximumBitrate'                     => [
			'type' => 'string',
			'enum' => [ 'MAX_10_MBPS', 'MAX_20_MBPS', 'MAX_50_MBPS', ],
		],
		'ReservationMaximumFramerate'                   => [
			'type' => 'string',
			'enum' => [ 'MAX_30_FPS', 'MAX_60_FPS', ],
		],
		'ReservationResolution'                         => [ 'type' => 'string', 'enum' => [ 'SD', 'HD', 'UHD', ], ],
		'ReservationResourceSpecification'              => [
			'type'    => 'structure',
			'members' => [
				'ChannelClass'     => [
					'shape'        => 'ChannelClass',
					'locationName' => 'channelClass',
				],
				'Codec'            => [
					'shape'        => 'ReservationCodec',
					'locationName' => 'codec',
				],
				'MaximumBitrate'   => [
					'shape'        => 'ReservationMaximumBitrate',
					'locationName' => 'maximumBitrate',
				],
				'MaximumFramerate' => [
					'shape'        => 'ReservationMaximumFramerate',
					'locationName' => 'maximumFramerate',
				],
				'Resolution'       => [
					'shape'        => 'ReservationResolution',
					'locationName' => 'resolution',
				],
				'ResourceType'     => [
					'shape'        => 'ReservationResourceType',
					'locationName' => 'resourceType',
				],
				'SpecialFeature'   => [
					'shape'        => 'ReservationSpecialFeature',
					'locationName' => 'specialFeature',
				],
				'VideoQuality'     => [
					'shape'        => 'ReservationVideoQuality',
					'locationName' => 'videoQuality',
				],
			],
		],
		'ReservationResourceType'                       => [
			'type' => 'string',
			'enum' => [ 'INPUT', 'OUTPUT', 'CHANNEL', ],
		],
		'ReservationSpecialFeature'                     => [
			'type' => 'string',
			'enum' => [ 'ADVANCED_AUDIO', 'AUDIO_NORMALIZATION', ],
		],
		'ReservationState'                              => [
			'type' => 'string',
			'enum' => [ 'ACTIVE', 'EXPIRED', 'CANCELED', 'DELETED', ],
		],
		'ReservationVideoQuality'                       => [
			'type' => 'string',
			'enum' => [ 'STANDARD', 'ENHANCED', 'PREMIUM', ],
		],
		'ResourceConflict'                              => [
			'type'    => 'structure',
			'members' => [
				'Message' => [
					'shape'        => '__string',
					'locationName' => 'message',
				],
			],
		],
		'ResourceNotFound'                              => [
			'type'    => 'structure',
			'members' => [
				'Message' => [
					'shape'        => '__string',
					'locationName' => 'message',
				],
			],
		],
		'RtmpCacheFullBehavior'                         => [
			'type' => 'string',
			'enum' => [ 'DISCONNECT_IMMEDIATELY', 'WAIT_FOR_SERVER', ],
		],
		'RtmpCaptionData'                               => [
			'type' => 'string',
			'enum' => [ 'ALL', 'FIELD1_608', 'FIELD1_AND_FIELD2_608', ],
		],
		'RtmpCaptionInfoDestinationSettings'            => [ 'type' => 'structure', 'members' => [], ],
		'RtmpGroupSettings'                             => [
			'type'    => 'structure',
			'members' => [
				'AuthenticationScheme' => [
					'shape'        => 'AuthenticationScheme',
					'locationName' => 'authenticationScheme',
				],
				'CacheFullBehavior'    => [
					'shape'        => 'RtmpCacheFullBehavior',
					'locationName' => 'cacheFullBehavior',
				],
				'CacheLength'          => [
					'shape'        => '__integerMin30',
					'locationName' => 'cacheLength',
				],
				'CaptionData'          => [
					'shape'        => 'RtmpCaptionData',
					'locationName' => 'captionData',
				],
				'InputLossAction'      => [
					'shape'        => 'InputLossActionForRtmpOut',
					'locationName' => 'inputLossAction',
				],
				'RestartDelay'         => [
					'shape'        => '__integerMin0',
					'locationName' => 'restartDelay',
				],
			],
		],
		'RtmpOutputCertificateMode'                     => [
			'type' => 'string',
			'enum' => [ 'SELF_SIGNED', 'VERIFY_AUTHENTICITY', ],
		],
		'RtmpOutputSettings'                            => [
			'type'     => 'structure',
			'members'  => [
				'CertificateMode'         => [
					'shape'        => 'RtmpOutputCertificateMode',
					'locationName' => 'certificateMode',
				],
				'ConnectionRetryInterval' => [
					'shape'        => '__integerMin1',
					'locationName' => 'connectionRetryInterval',
				],
				'Destination'             => [
					'shape'        => 'OutputLocationRef',
					'locationName' => 'destination',
				],
				'NumRetries'              => [
					'shape'        => '__integerMin0',
					'locationName' => 'numRetries',
				],
			],
			'required' => [ 'Destination', ],
		],
		'ScheduleAction'                                => [
			'type'     => 'structure',
			'members'  => [
				'ActionName'                  => [
					'shape'        => '__string',
					'locationName' => 'actionName',
				],
				'ScheduleActionSettings'      => [
					'shape'        => 'ScheduleActionSettings',
					'locationName' => 'scheduleActionSettings',
				],
				'ScheduleActionStartSettings' => [
					'shape'        => 'ScheduleActionStartSettings',
					'locationName' => 'scheduleActionStartSettings',
				],
			],
			'required' => [
				'ActionName',
				'ScheduleActionStartSettings',
				'ScheduleActionSettings',
			],
		],
		'ScheduleActionSettings'                        => [
			'type'    => 'structure',
			'members' => [
				'HlsTimedMetadataSettings'      => [
					'shape'        => 'HlsTimedMetadataScheduleActionSettings',
					'locationName' => 'hlsTimedMetadataSettings',
				],
				'InputSwitchSettings'           => [
					'shape'        => 'InputSwitchScheduleActionSettings',
					'locationName' => 'inputSwitchSettings',
				],
				'PauseStateSettings'            => [
					'shape'        => 'PauseStateScheduleActionSettings',
					'locationName' => 'pauseStateSettings',
				],
				'Scte35ReturnToNetworkSettings' => [
					'shape'        => 'Scte35ReturnToNetworkScheduleActionSettings',
					'locationName' => 'scte35ReturnToNetworkSettings',
				],
				'Scte35SpliceInsertSettings'    => [
					'shape'        => 'Scte35SpliceInsertScheduleActionSettings',
					'locationName' => 'scte35SpliceInsertSettings',
				],
				'Scte35TimeSignalSettings'      => [
					'shape'        => 'Scte35TimeSignalScheduleActionSettings',
					'locationName' => 'scte35TimeSignalSettings',
				],
				'StaticImageActivateSettings'   => [
					'shape'        => 'StaticImageActivateScheduleActionSettings',
					'locationName' => 'staticImageActivateSettings',
				],
				'StaticImageDeactivateSettings' => [
					'shape'        => 'StaticImageDeactivateScheduleActionSettings',
					'locationName' => 'staticImageDeactivateSettings',
				],
			],
		],
		'ScheduleActionStartSettings'                   => [
			'type'    => 'structure',
			'members' => [
				'FixedModeScheduleActionStartSettings'  => [
					'shape'        => 'FixedModeScheduleActionStartSettings',
					'locationName' => 'fixedModeScheduleActionStartSettings',
				],
				'FollowModeScheduleActionStartSettings' => [
					'shape'        => 'FollowModeScheduleActionStartSettings',
					'locationName' => 'followModeScheduleActionStartSettings',
				],
			],
		],
		'ScheduleDeleteResultModel'                     => [ 'type' => 'structure', 'members' => [], ],
		'ScheduleDescribeResultModel'                   => [
			'type'     => 'structure',
			'members'  => [
				'NextToken'       => [
					'shape'        => '__string',
					'locationName' => 'nextToken',
				],
				'ScheduleActions' => [
					'shape'        => '__listOfScheduleAction',
					'locationName' => 'scheduleActions',
				],
			],
			'required' => [ 'ScheduleActions', ],
		],
		'Scte20Convert608To708'                         => [
			'type' => 'string',
			'enum' => [ 'DISABLED', 'UPCONVERT', ],
		],
		'Scte20PlusEmbeddedDestinationSettings'         => [ 'type' => 'structure', 'members' => [], ],
		'Scte20SourceSettings'                          => [
			'type'    => 'structure',
			'members' => [
				'Convert608To708'        => [
					'shape'        => 'Scte20Convert608To708',
					'locationName' => 'convert608To708',
				],
				'Source608ChannelNumber' => [
					'shape'        => '__integerMin1Max4',
					'locationName' => 'source608ChannelNumber',
				],
			],
		],
		'Scte27DestinationSettings'                     => [ 'type' => 'structure', 'members' => [], ],
		'Scte27SourceSettings'                          => [
			'type'    => 'structure',
			'members' => [
				'Pid' => [
					'shape'        => '__integerMin1',
					'locationName' => 'pid',
				],
			],
		],
		'Scte35AposNoRegionalBlackoutBehavior'          => [ 'type' => 'string', 'enum' => [ 'FOLLOW', 'IGNORE', ], ],
		'Scte35AposWebDeliveryAllowedBehavior'          => [ 'type' => 'string', 'enum' => [ 'FOLLOW', 'IGNORE', ], ],
		'Scte35ArchiveAllowedFlag'                      => [
			'type' => 'string',
			'enum' => [ 'ARCHIVE_NOT_ALLOWED', 'ARCHIVE_ALLOWED', ],
		],
		'Scte35DeliveryRestrictions'                    => [
			'type'     => 'structure',
			'members'  => [
				'ArchiveAllowedFlag'     => [
					'shape'        => 'Scte35ArchiveAllowedFlag',
					'locationName' => 'archiveAllowedFlag',
				],
				'DeviceRestrictions'     => [
					'shape'        => 'Scte35DeviceRestrictions',
					'locationName' => 'deviceRestrictions',
				],
				'NoRegionalBlackoutFlag' => [
					'shape'        => 'Scte35NoRegionalBlackoutFlag',
					'locationName' => 'noRegionalBlackoutFlag',
				],
				'WebDeliveryAllowedFlag' => [
					'shape'        => 'Scte35WebDeliveryAllowedFlag',
					'locationName' => 'webDeliveryAllowedFlag',
				],
			],
			'required' => [
				'DeviceRestrictions',
				'ArchiveAllowedFlag',
				'WebDeliveryAllowedFlag',
				'NoRegionalBlackoutFlag',
			],
		],
		'Scte35Descriptor'                              => [
			'type'     => 'structure',
			'members'  => [
				'Scte35DescriptorSettings' => [
					'shape'        => 'Scte35DescriptorSettings',
					'locationName' => 'scte35DescriptorSettings',
				],
			],
			'required' => [ 'Scte35DescriptorSettings', ],
		],
		'Scte35DescriptorSettings'                      => [
			'type'     => 'structure',
			'members'  => [
				'SegmentationDescriptorScte35DescriptorSettings' => [
					'shape'        => 'Scte35SegmentationDescriptor',
					'locationName' => 'segmentationDescriptorScte35DescriptorSettings',
				],
			],
			'required' => [ 'SegmentationDescriptorScte35DescriptorSettings', ],
		],
		'Scte35DeviceRestrictions'                      => [
			'type' => 'string',
			'enum' => [
				'NONE',
				'RESTRICT_GROUP0',
				'RESTRICT_GROUP1',
				'RESTRICT_GROUP2',
			],
		],
		'Scte35NoRegionalBlackoutFlag'                  => [
			'type' => 'string',
			'enum' => [ 'REGIONAL_BLACKOUT', 'NO_REGIONAL_BLACKOUT', ],
		],
		'Scte35ReturnToNetworkScheduleActionSettings'   => [
			'type'     => 'structure',
			'members'  => [
				'SpliceEventId' => [
					'shape'        => '__integerMin0Max4294967295',
					'locationName' => 'spliceEventId',
				],
			],
			'required' => [ 'SpliceEventId', ],
		],
		'Scte35SegmentationCancelIndicator'             => [
			'type' => 'string',
			'enum' => [
				'SEGMENTATION_EVENT_NOT_CANCELED',
				'SEGMENTATION_EVENT_CANCELED',
			],
		],
		'Scte35SegmentationDescriptor'                  => [
			'type'     => 'structure',
			'members'  => [
				'DeliveryRestrictions'        => [
					'shape'        => 'Scte35DeliveryRestrictions',
					'locationName' => 'deliveryRestrictions',
				],
				'SegmentNum'                  => [ 'shape' => '__integerMin0Max255', 'locationName' => 'segmentNum', ],
				'SegmentationCancelIndicator' => [
					'shape'        => 'Scte35SegmentationCancelIndicator',
					'locationName' => 'segmentationCancelIndicator',
				],
				'SegmentationDuration'        => [
					'shape'        => '__integerMin0Max1099511627775',
					'locationName' => 'segmentationDuration',
				],
				'SegmentationEventId'         => [
					'shape'        => '__integerMin0Max4294967295',
					'locationName' => 'segmentationEventId',
				],
				'SegmentationTypeId'          => [
					'shape'        => '__integerMin0Max255',
					'locationName' => 'segmentationTypeId',
				],
				'SegmentationUpid'            => [ 'shape' => '__string', 'locationName' => 'segmentationUpid', ],
				'SegmentationUpidType'        => [
					'shape'        => '__integerMin0Max255',
					'locationName' => 'segmentationUpidType',
				],
				'SegmentsExpected'            => [
					'shape'        => '__integerMin0Max255',
					'locationName' => 'segmentsExpected',
				],
				'SubSegmentNum'               => [
					'shape'        => '__integerMin0Max255',
					'locationName' => 'subSegmentNum',
				],
				'SubSegmentsExpected'         => [
					'shape'        => '__integerMin0Max255',
					'locationName' => 'subSegmentsExpected',
				],
			],
			'required' => [ 'SegmentationEventId', 'SegmentationCancelIndicator', ],
		],
		'Scte35SpliceInsert'                            => [
			'type'    => 'structure',
			'members' => [
				'AdAvailOffset'          => [
					'shape'        => '__integerMinNegative1000Max1000',
					'locationName' => 'adAvailOffset',
				],
				'NoRegionalBlackoutFlag' => [
					'shape'        => 'Scte35SpliceInsertNoRegionalBlackoutBehavior',
					'locationName' => 'noRegionalBlackoutFlag',
				],
				'WebDeliveryAllowedFlag' => [
					'shape'        => 'Scte35SpliceInsertWebDeliveryAllowedBehavior',
					'locationName' => 'webDeliveryAllowedFlag',
				],
			],
		],
		'Scte35SpliceInsertNoRegionalBlackoutBehavior'  => [ 'type' => 'string', 'enum' => [ 'FOLLOW', 'IGNORE', ], ],
		'Scte35SpliceInsertScheduleActionSettings'      => [
			'type'     => 'structure',
			'members'  => [
				'Duration'      => [
					'shape'        => '__integerMin0Max8589934591',
					'locationName' => 'duration',
				],
				'SpliceEventId' => [
					'shape'        => '__integerMin0Max4294967295',
					'locationName' => 'spliceEventId',
				],
			],
			'required' => [ 'SpliceEventId', ],
		],
		'Scte35SpliceInsertWebDeliveryAllowedBehavior'  => [ 'type' => 'string', 'enum' => [ 'FOLLOW', 'IGNORE', ], ],
		'Scte35TimeSignalApos'                          => [
			'type'    => 'structure',
			'members' => [
				'AdAvailOffset'          => [
					'shape'        => '__integerMinNegative1000Max1000',
					'locationName' => 'adAvailOffset',
				],
				'NoRegionalBlackoutFlag' => [
					'shape'        => 'Scte35AposNoRegionalBlackoutBehavior',
					'locationName' => 'noRegionalBlackoutFlag',
				],
				'WebDeliveryAllowedFlag' => [
					'shape'        => 'Scte35AposWebDeliveryAllowedBehavior',
					'locationName' => 'webDeliveryAllowedFlag',
				],
			],
		],
		'Scte35TimeSignalScheduleActionSettings'        => [
			'type'     => 'structure',
			'members'  => [
				'Scte35Descriptors' => [
					'shape'        => '__listOfScte35Descriptor',
					'locationName' => 'scte35Descriptors',
				],
			],
			'required' => [ 'Scte35Descriptors', ],
		],
		'Scte35WebDeliveryAllowedFlag'                  => [
			'type' => 'string',
			'enum' => [
				'WEB_DELIVERY_NOT_ALLOWED',
				'WEB_DELIVERY_ALLOWED',
			],
		],
		'SmoothGroupAudioOnlyTimecodeControl'           => [
			'type' => 'string',
			'enum' => [ 'PASSTHROUGH', 'USE_CONFIGURED_CLOCK', ],
		],
		'SmoothGroupCertificateMode'                    => [
			'type' => 'string',
			'enum' => [ 'SELF_SIGNED', 'VERIFY_AUTHENTICITY', ],
		],
		'SmoothGroupEventIdMode'                        => [
			'type' => 'string',
			'enum' => [
				'NO_EVENT_ID',
				'USE_CONFIGURED',
				'USE_TIMESTAMP',
			],
		],
		'SmoothGroupEventStopBehavior'                  => [ 'type' => 'string', 'enum' => [ 'NONE', 'SEND_EOS', ], ],
		'SmoothGroupSegmentationMode'                   => [
			'type' => 'string',
			'enum' => [
				'USE_INPUT_SEGMENTATION',
				'USE_SEGMENT_DURATION',
			],
		],
		'SmoothGroupSparseTrackType'                    => [ 'type' => 'string', 'enum' => [ 'NONE', 'SCTE_35', ], ],
		'SmoothGroupStreamManifestBehavior'             => [
			'type' => 'string',
			'enum' => [ 'DO_NOT_SEND', 'SEND', ],
		],
		'SmoothGroupTimestampOffsetMode'                => [
			'type' => 'string',
			'enum' => [
				'USE_CONFIGURED_OFFSET',
				'USE_EVENT_START_DATE',
			],
		],
		'SmpteTtDestinationSettings'                    => [ 'type' => 'structure', 'members' => [], ],
		'StandardHlsSettings'                           => [
			'type'     => 'structure',
			'members'  => [
				'AudioRenditionSets' => [
					'shape'        => '__string',
					'locationName' => 'audioRenditionSets',
				],
				'M3u8Settings'       => [
					'shape'        => 'M3u8Settings',
					'locationName' => 'm3u8Settings',
				],
			],
			'required' => [ 'M3u8Settings', ],
		],
		'StartChannelRequest'                           => [
			'type'     => 'structure',
			'members'  => [
				'ChannelId' => [
					'shape'        => '__string',
					'location'     => 'uri',
					'locationName' => 'channelId',
				],
			],
			'required' => [ 'ChannelId', ],
		],
		'StartChannelResponse'                          => [
			'type'    => 'structure',
			'members' => [
				'Arn'                   => [ 'shape' => '__string', 'locationName' => 'arn', ],
				'ChannelClass'          => [ 'shape' => 'ChannelClass', 'locationName' => 'channelClass', ],
				'Destinations'          => [
					'shape'        => '__listOfOutputDestination',
					'locationName' => 'destinations',
				],
				'EgressEndpoints'       => [
					'shape'        => '__listOfChannelEgressEndpoint',
					'locationName' => 'egressEndpoints',
				],
				'EncoderSettings'       => [ 'shape' => 'EncoderSettings', 'locationName' => 'encoderSettings', ],
				'Id'                    => [ 'shape' => '__string', 'locationName' => 'id', ],
				'InputAttachments'      => [
					'shape'        => '__listOfInputAttachment',
					'locationName' => 'inputAttachments',
				],
				'InputSpecification'    => [ 'shape' => 'InputSpecification', 'locationName' => 'inputSpecification', ],
				'LogLevel'              => [ 'shape' => 'LogLevel', 'locationName' => 'logLevel', ],
				'Name'                  => [ 'shape' => '__string', 'locationName' => 'name', ],
				'PipelinesRunningCount' => [ 'shape' => '__integer', 'locationName' => 'pipelinesRunningCount', ],
				'RoleArn'               => [ 'shape' => '__string', 'locationName' => 'roleArn', ],
				'State'                 => [ 'shape' => 'ChannelState', 'locationName' => 'state', ],
				'Tags'                  => [ 'shape' => 'Tags', 'locationName' => 'tags', ],
			],
		],
		'StaticImageActivateScheduleActionSettings'     => [
			'type'     => 'structure',
			'members'  => [
				'Duration' => [
					'shape'        => '__integerMin0',
					'locationName' => 'duration',
				],
				'FadeIn'   => [
					'shape'        => '__integerMin0',
					'locationName' => 'fadeIn',
				],
				'FadeOut'  => [
					'shape'        => '__integerMin0',
					'locationName' => 'fadeOut',
				],
				'Height'   => [
					'shape'        => '__integerMin1',
					'locationName' => 'height',
				],
				'Image'    => [
					'shape'        => 'InputLocation',
					'locationName' => 'image',
				],
				'ImageX'   => [
					'shape'        => '__integerMin0',
					'locationName' => 'imageX',
				],
				'ImageY'   => [
					'shape'        => '__integerMin0',
					'locationName' => 'imageY',
				],
				'Layer'    => [
					'shape'        => '__integerMin0Max7',
					'locationName' => 'layer',
				],
				'Opacity'  => [
					'shape'        => '__integerMin0Max100',
					'locationName' => 'opacity',
				],
				'Width'    => [
					'shape'        => '__integerMin1',
					'locationName' => 'width',
				],
			],
			'required' => [ 'Image', ],
		],
		'StaticImageDeactivateScheduleActionSettings'   => [
			'type'    => 'structure',
			'members' => [
				'FadeOut' => [
					'shape'        => '__integerMin0',
					'locationName' => 'fadeOut',
				],
				'Layer'   => [
					'shape'        => '__integerMin0Max7',
					'locationName' => 'layer',
				],
			],
		],
		'StaticKeySettings'                             => [
			'type'     => 'structure',
			'members'  => [
				'KeyProviderServer' => [
					'shape'        => 'InputLocation',
					'locationName' => 'keyProviderServer',
				],
				'StaticKeyValue'    => [
					'shape'        => '__stringMin32Max32',
					'locationName' => 'staticKeyValue',
				],
			],
			'required' => [ 'StaticKeyValue', ],
		],
		'StopChannelRequest'                            => [
			'type'     => 'structure',
			'members'  => [
				'ChannelId' => [
					'shape'        => '__string',
					'location'     => 'uri',
					'locationName' => 'channelId',
				],
			],
			'required' => [ 'ChannelId', ],
		],
		'StopChannelResponse'                           => [
			'type'    => 'structure',
			'members' => [
				'Arn'                   => [ 'shape' => '__string', 'locationName' => 'arn', ],
				'ChannelClass'          => [ 'shape' => 'ChannelClass', 'locationName' => 'channelClass', ],
				'Destinations'          => [
					'shape'        => '__listOfOutputDestination',
					'locationName' => 'destinations',
				],
				'EgressEndpoints'       => [
					'shape'        => '__listOfChannelEgressEndpoint',
					'locationName' => 'egressEndpoints',
				],
				'EncoderSettings'       => [ 'shape' => 'EncoderSettings', 'locationName' => 'encoderSettings', ],
				'Id'                    => [ 'shape' => '__string', 'locationName' => 'id', ],
				'InputAttachments'      => [
					'shape'        => '__listOfInputAttachment',
					'locationName' => 'inputAttachments',
				],
				'InputSpecification'    => [ 'shape' => 'InputSpecification', 'locationName' => 'inputSpecification', ],
				'LogLevel'              => [ 'shape' => 'LogLevel', 'locationName' => 'logLevel', ],
				'Name'                  => [ 'shape' => '__string', 'locationName' => 'name', ],
				'PipelinesRunningCount' => [ 'shape' => '__integer', 'locationName' => 'pipelinesRunningCount', ],
				'RoleArn'               => [ 'shape' => '__string', 'locationName' => 'roleArn', ],
				'State'                 => [ 'shape' => 'ChannelState', 'locationName' => 'state', ],
				'Tags'                  => [ 'shape' => 'Tags', 'locationName' => 'tags', ],
			],
		],
		'Tags'                                          => [
			'type'  => 'map',
			'key'   => [ 'shape' => '__string', ],
			'value' => [ 'shape' => '__string', ],
		],
		'TagsModel'                                     => [
			'type'    => 'structure',
			'members' => [
				'Tags' => [
					'shape'        => 'Tags',
					'locationName' => 'tags',
				],
			],
		],
		'TeletextDestinationSettings'                   => [ 'type' => 'structure', 'members' => [], ],
		'TeletextSourceSettings'                        => [
			'type'    => 'structure',
			'members' => [
				'PageNumber' => [
					'shape'        => '__string',
					'locationName' => 'pageNumber',
				],
			],
		],
		'TimecodeConfig'                                => [
			'type'     => 'structure',
			'members'  => [
				'Source'        => [
					'shape'        => 'TimecodeConfigSource',
					'locationName' => 'source',
				],
				'SyncThreshold' => [
					'shape'        => '__integerMin1Max1000000',
					'locationName' => 'syncThreshold',
				],
			],
			'required' => [ 'Source', ],
		],
		'TimecodeConfigSource'                          => [
			'type' => 'string',
			'enum' => [ 'EMBEDDED', 'SYSTEMCLOCK', 'ZEROBASED', ],
		],
		'TooManyRequestsException'                      => [
			'type'      => 'structure',
			'members'   => [
				'Message' => [
					'shape'        => '__string',
					'locationName' => 'message',
				],
			],
			'exception' => true,
			'error'     => [ 'httpStatusCode' => 429, ],
		],
		'TtmlDestinationSettings'                       => [
			'type'    => 'structure',
			'members' => [
				'StyleControl' => [
					'shape'        => 'TtmlDestinationStyleControl',
					'locationName' => 'styleControl',
				],
			],
		],
		'TtmlDestinationStyleControl'                   => [
			'type' => 'string',
			'enum' => [ 'PASSTHROUGH', 'USE_CONFIGURED', ],
		],
		'UdpContainerSettings'                          => [
			'type'    => 'structure',
			'members' => [
				'M2tsSettings' => [
					'shape'        => 'M2tsSettings',
					'locationName' => 'm2tsSettings',
				],
			],
		],
		'UdpGroupSettings'                              => [
			'type'    => 'structure',
			'members' => [
				'InputLossAction'        => [
					'shape'        => 'InputLossActionForUdpOut',
					'locationName' => 'inputLossAction',
				],
				'TimedMetadataId3Frame'  => [
					'shape'        => 'UdpTimedMetadataId3Frame',
					'locationName' => 'timedMetadataId3Frame',
				],
				'TimedMetadataId3Period' => [
					'shape'        => '__integerMin0',
					'locationName' => 'timedMetadataId3Period',
				],
			],
		],
		'UdpOutputSettings'                             => [
			'type'     => 'structure',
			'members'  => [
				'BufferMsec'        => [
					'shape'        => '__integerMin0Max10000',
					'locationName' => 'bufferMsec',
				],
				'ContainerSettings' => [
					'shape'        => 'UdpContainerSettings',
					'locationName' => 'containerSettings',
				],
				'Destination'       => [
					'shape'        => 'OutputLocationRef',
					'locationName' => 'destination',
				],
				'FecOutputSettings' => [
					'shape'        => 'FecOutputSettings',
					'locationName' => 'fecOutputSettings',
				],
			],
			'required' => [ 'Destination', 'ContainerSettings', ],
		],
		'UdpTimedMetadataId3Frame'                      => [
			'type' => 'string',
			'enum' => [ 'NONE', 'PRIV', 'TDRL', ],
		],
		'UnprocessableEntityException'                  => [
			'type'      => 'structure',
			'members'   => [
				'Message'          => [
					'shape'        => '__string',
					'locationName' => 'message',
				],
				'ValidationErrors' => [
					'shape'        => '__listOfValidationError',
					'locationName' => 'validationErrors',
				],
			],
			'exception' => true,
			'error'     => [ 'httpStatusCode' => 422, ],
		],
		'UpdateChannel'                                 => [
			'type'    => 'structure',
			'members' => [
				'Destinations'       => [
					'shape'        => '__listOfOutputDestination',
					'locationName' => 'destinations',
				],
				'EncoderSettings'    => [
					'shape'        => 'EncoderSettings',
					'locationName' => 'encoderSettings',
				],
				'InputAttachments'   => [
					'shape'        => '__listOfInputAttachment',
					'locationName' => 'inputAttachments',
				],
				'InputSpecification' => [
					'shape'        => 'InputSpecification',
					'locationName' => 'inputSpecification',
				],
				'LogLevel'           => [
					'shape'        => 'LogLevel',
					'locationName' => 'logLevel',
				],
				'Name'               => [
					'shape'        => '__string',
					'locationName' => 'name',
				],
				'RoleArn'            => [
					'shape'        => '__string',
					'locationName' => 'roleArn',
				],
			],
		],
		'UpdateChannelClass'                            => [
			'type'     => 'structure',
			'members'  => [
				'ChannelClass' => [
					'shape'        => 'ChannelClass',
					'locationName' => 'channelClass',
				],
				'Destinations' => [
					'shape'        => '__listOfOutputDestination',
					'locationName' => 'destinations',
				],
			],
			'required' => [ 'ChannelClass', ],
		],
		'UpdateChannelClassRequest'                     => [
			'type'     => 'structure',
			'members'  => [
				'ChannelClass' => [
					'shape'        => 'ChannelClass',
					'locationName' => 'channelClass',
				],
				'ChannelId'    => [
					'shape'        => '__string',
					'location'     => 'uri',
					'locationName' => 'channelId',
				],
				'Destinations' => [
					'shape'        => '__listOfOutputDestination',
					'locationName' => 'destinations',
				],
			],
			'required' => [ 'ChannelId', 'ChannelClass', ],
		],
		'UpdateChannelClassResponse'                    => [
			'type'    => 'structure',
			'members' => [
				'Channel' => [
					'shape'        => 'Channel',
					'locationName' => 'channel',
				],
			],
		],
		'UpdateChannelRequest'                          => [
			'type'     => 'structure',
			'members'  => [
				'ChannelId'          => [
					'shape'        => '__string',
					'location'     => 'uri',
					'locationName' => 'channelId',
				],
				'Destinations'       => [
					'shape'        => '__listOfOutputDestination',
					'locationName' => 'destinations',
				],
				'EncoderSettings'    => [
					'shape'        => 'EncoderSettings',
					'locationName' => 'encoderSettings',
				],
				'InputAttachments'   => [
					'shape'        => '__listOfInputAttachment',
					'locationName' => 'inputAttachments',
				],
				'InputSpecification' => [
					'shape'        => 'InputSpecification',
					'locationName' => 'inputSpecification',
				],
				'LogLevel'           => [
					'shape'        => 'LogLevel',
					'locationName' => 'logLevel',
				],
				'Name'               => [
					'shape'        => '__string',
					'locationName' => 'name',
				],
				'RoleArn'            => [
					'shape'        => '__string',
					'locationName' => 'roleArn',
				],
			],
			'required' => [ 'ChannelId', ],
		],
		'UpdateChannelResponse'                         => [
			'type'    => 'structure',
			'members' => [
				'Channel' => [
					'shape'        => 'Channel',
					'locationName' => 'channel',
				],
			],
		],
		'UpdateChannelResultModel'                      => [
			'type'    => 'structure',
			'members' => [
				'Channel' => [
					'shape'        => 'Channel',
					'locationName' => 'channel',
				],
			],
		],
		'UpdateInput'                                   => [
			'type'    => 'structure',
			'members' => [
				'Destinations'        => [
					'shape'        => '__listOfInputDestinationRequest',
					'locationName' => 'destinations',
				],
				'InputSecurityGroups' => [
					'shape'        => '__listOf__string',
					'locationName' => 'inputSecurityGroups',
				],
				'MediaConnectFlows'   => [
					'shape'        => '__listOfMediaConnectFlowRequest',
					'locationName' => 'mediaConnectFlows',
				],
				'Name'                => [
					'shape'        => '__string',
					'locationName' => 'name',
				],
				'RoleArn'             => [
					'shape'        => '__string',
					'locationName' => 'roleArn',
				],
				'Sources'             => [
					'shape'        => '__listOfInputSourceRequest',
					'locationName' => 'sources',
				],
			],
		],
		'UpdateInputRequest'                            => [
			'type'     => 'structure',
			'members'  => [
				'Destinations'        => [
					'shape'        => '__listOfInputDestinationRequest',
					'locationName' => 'destinations',
				],
				'InputId'             => [
					'shape'        => '__string',
					'location'     => 'uri',
					'locationName' => 'inputId',
				],
				'InputSecurityGroups' => [
					'shape'        => '__listOf__string',
					'locationName' => 'inputSecurityGroups',
				],
				'MediaConnectFlows'   => [
					'shape'        => '__listOfMediaConnectFlowRequest',
					'locationName' => 'mediaConnectFlows',
				],
				'Name'                => [
					'shape'        => '__string',
					'locationName' => 'name',
				],
				'RoleArn'             => [
					'shape'        => '__string',
					'locationName' => 'roleArn',
				],
				'Sources'             => [
					'shape'        => '__listOfInputSourceRequest',
					'locationName' => 'sources',
				],
			],
			'required' => [ 'InputId', ],
		],
		'UpdateInputResponse'                           => [
			'type'    => 'structure',
			'members' => [
				'Input' => [
					'shape'        => 'Input',
					'locationName' => 'input',
				],
			],
		],
		'UpdateInputResultModel'                        => [
			'type'    => 'structure',
			'members' => [
				'Input' => [
					'shape'        => 'Input',
					'locationName' => 'input',
				],
			],
		],
		'UpdateInputSecurityGroupRequest'               => [
			'type'     => 'structure',
			'members'  => [
				'InputSecurityGroupId' => [
					'shape'        => '__string',
					'location'     => 'uri',
					'locationName' => 'inputSecurityGroupId',
				],
				'Tags'                 => [
					'shape'        => 'Tags',
					'locationName' => 'tags',
				],
				'WhitelistRules'       => [
					'shape'        => '__listOfInputWhitelistRuleCidr',
					'locationName' => 'whitelistRules',
				],
			],
			'required' => [ 'InputSecurityGroupId', ],
		],
		'UpdateInputSecurityGroupResponse'              => [
			'type'    => 'structure',
			'members' => [
				'SecurityGroup' => [
					'shape'        => 'InputSecurityGroup',
					'locationName' => 'securityGroup',
				],
			],
		],
		'UpdateInputSecurityGroupResultModel'           => [
			'type'    => 'structure',
			'members' => [
				'SecurityGroup' => [
					'shape'        => 'InputSecurityGroup',
					'locationName' => 'securityGroup',
				],
			],
		],
		'UpdateReservation'                             => [
			'type'    => 'structure',
			'members' => [
				'Name' => [
					'shape'        => '__string',
					'locationName' => 'name',
				],
			],
		],
		'UpdateReservationRequest'                      => [
			'type'     => 'structure',
			'members'  => [
				'Name'          => [
					'shape'        => '__string',
					'locationName' => 'name',
				],
				'ReservationId' => [
					'shape'        => '__string',
					'location'     => 'uri',
					'locationName' => 'reservationId',
				],
			],
			'required' => [ 'ReservationId', ],
		],
		'UpdateReservationResponse'                     => [
			'type'    => 'structure',
			'members' => [
				'Reservation' => [
					'shape'        => 'Reservation',
					'locationName' => 'reservation',
				],
			],
		],
		'UpdateReservationResultModel'                  => [
			'type'    => 'structure',
			'members' => [
				'Reservation' => [
					'shape'        => 'Reservation',
					'locationName' => 'reservation',
				],
			],
		],
		'ValidationError'                               => [
			'type'    => 'structure',
			'members' => [
				'ElementPath'  => [
					'shape'        => '__string',
					'locationName' => 'elementPath',
				],
				'ErrorMessage' => [
					'shape'        => '__string',
					'locationName' => 'errorMessage',
				],
			],
		],
		'VideoCodecSettings'                            => [
			'type'    => 'structure',
			'members' => [
				'FrameCaptureSettings' => [
					'shape'        => 'FrameCaptureSettings',
					'locationName' => 'frameCaptureSettings',
				],
				'H264Settings'         => [
					'shape'        => 'H264Settings',
					'locationName' => 'h264Settings',
				],
			],
		],
		'VideoDescription'                              => [
			'type'     => 'structure',
			'members'  => [
				'CodecSettings'   => [
					'shape'        => 'VideoCodecSettings',
					'locationName' => 'codecSettings',
				],
				'Height'          => [
					'shape'        => '__integer',
					'locationName' => 'height',
				],
				'Name'            => [
					'shape'        => '__string',
					'locationName' => 'name',
				],
				'RespondToAfd'    => [
					'shape'        => 'VideoDescriptionRespondToAfd',
					'locationName' => 'respondToAfd',
				],
				'ScalingBehavior' => [
					'shape'        => 'VideoDescriptionScalingBehavior',
					'locationName' => 'scalingBehavior',
				],
				'Sharpness'       => [
					'shape'        => '__integerMin0Max100',
					'locationName' => 'sharpness',
				],
				'Width'           => [
					'shape'        => '__integer',
					'locationName' => 'width',
				],
			],
			'required' => [ 'Name', ],
		],
		'VideoDescriptionRespondToAfd'                  => [
			'type' => 'string',
			'enum' => [ 'NONE', 'PASSTHROUGH', 'RESPOND', ],
		],
		'VideoDescriptionScalingBehavior'               => [
			'type' => 'string',
			'enum' => [ 'DEFAULT', 'STRETCH_TO_OUTPUT', ],
		],
		'VideoSelector'                                 => [
			'type'    => 'structure',
			'members' => [
				'ColorSpace'       => [
					'shape'        => 'VideoSelectorColorSpace',
					'locationName' => 'colorSpace',
				],
				'ColorSpaceUsage'  => [
					'shape'        => 'VideoSelectorColorSpaceUsage',
					'locationName' => 'colorSpaceUsage',
				],
				'SelectorSettings' => [
					'shape'        => 'VideoSelectorSettings',
					'locationName' => 'selectorSettings',
				],
			],
		],
		'VideoSelectorColorSpace'                       => [
			'type' => 'string',
			'enum' => [ 'FOLLOW', 'REC_601', 'REC_709', ],
		],
		'VideoSelectorColorSpaceUsage'                  => [ 'type' => 'string', 'enum' => [ 'FALLBACK', 'FORCE', ], ],
		'VideoSelectorPid'                              => [
			'type'    => 'structure',
			'members' => [
				'Pid' => [
					'shape'        => '__integerMin0Max8191',
					'locationName' => 'pid',
				],
			],
		],
		'VideoSelectorProgramId'                        => [
			'type'    => 'structure',
			'members' => [
				'ProgramId' => [
					'shape'        => '__integerMin0Max65536',
					'locationName' => 'programId',
				],
			],
		],
		'VideoSelectorSettings'                         => [
			'type'    => 'structure',
			'members' => [
				'VideoSelectorPid'       => [
					'shape'        => 'VideoSelectorPid',
					'locationName' => 'videoSelectorPid',
				],
				'VideoSelectorProgramId' => [
					'shape'        => 'VideoSelectorProgramId',
					'locationName' => 'videoSelectorProgramId',
				],
			],
		],
		'WebvttDestinationSettings'                     => [ 'type' => 'structure', 'members' => [], ],
		'__boolean'                                     => [ 'type' => 'boolean', ],
		'__double'                                      => [ 'type' => 'double', ],
		'__doubleMin0'                                  => [ 'type' => 'double', ],
		'__doubleMin1'                                  => [ 'type' => 'double', ],
		'__doubleMinNegative59Max0'                     => [ 'type' => 'double', ],
		'__integer'                                     => [ 'type' => 'integer', ],
		'__integerMin0'                                 => [ 'type' => 'integer', 'min' => 0, ],
		'__integerMin0Max10'                            => [ 'type' => 'integer', 'min' => 0, 'max' => 10, ],
		'__integerMin0Max100'                           => [ 'type' => 'integer', 'min' => 0, 'max' => 100, ],
		'__integerMin0Max1000'                          => [ 'type' => 'integer', 'min' => 0, 'max' => 1000, ],
		'__integerMin0Max10000'                         => [ 'type' => 'integer', 'min' => 0, 'max' => 10000, ],
		'__integerMin0Max1000000'                       => [ 'type' => 'integer', 'min' => 0, 'max' => 1000000, ],
		'__integerMin0Max1099511627775'                 => [ 'type' => 'long', 'min' => 0, 'max' => 1099511627775, ],
		'__integerMin0Max128'                           => [ 'type' => 'integer', 'min' => 0, 'max' => 128, ],
		'__integerMin0Max15'                            => [ 'type' => 'integer', 'min' => 0, 'max' => 15, ],
		'__integerMin0Max255'                           => [ 'type' => 'integer', 'min' => 0, 'max' => 255, ],
		'__integerMin0Max30'                            => [ 'type' => 'integer', 'min' => 0, 'max' => 30, ],
		'__integerMin0Max3600'                          => [ 'type' => 'integer', 'min' => 0, 'max' => 3600, ],
		'__integerMin0Max4294967295'                    => [ 'type' => 'long', 'min' => 0, 'max' => 4294967295, ],
		'__integerMin0Max500'                           => [ 'type' => 'integer', 'min' => 0, 'max' => 500, ],
		'__integerMin0Max600'                           => [ 'type' => 'integer', 'min' => 0, 'max' => 600, ],
		'__integerMin0Max65535'                         => [ 'type' => 'integer', 'min' => 0, 'max' => 65535, ],
		'__integerMin0Max65536'                         => [ 'type' => 'integer', 'min' => 0, 'max' => 65536, ],
		'__integerMin0Max7'                             => [ 'type' => 'integer', 'min' => 0, 'max' => 7, ],
		'__integerMin0Max8191'                          => [ 'type' => 'integer', 'min' => 0, 'max' => 8191, ],
		'__integerMin0Max8589934591'                    => [ 'type' => 'long', 'min' => 0, 'max' => 8589934591, ],
		'__integerMin1'                                 => [ 'type' => 'integer', 'min' => 1, ],
		'__integerMin1000'                              => [ 'type' => 'integer', 'min' => 1000, ],
		'__integerMin1000Max30000'                      => [ 'type' => 'integer', 'min' => 1000, 'max' => 30000, ],
		'__integerMin1Max10'                            => [ 'type' => 'integer', 'min' => 1, 'max' => 10, ],
		'__integerMin1Max1000000'                       => [ 'type' => 'integer', 'min' => 1, 'max' => 1000000, ],
		'__integerMin1Max16'                            => [ 'type' => 'integer', 'min' => 1, 'max' => 16, ],
		'__integerMin1Max20'                            => [ 'type' => 'integer', 'min' => 1, 'max' => 20, ],
		'__integerMin1Max31'                            => [ 'type' => 'integer', 'min' => 1, 'max' => 31, ],
		'__integerMin1Max32'                            => [ 'type' => 'integer', 'min' => 1, 'max' => 32, ],
		'__integerMin1Max3600'                          => [ 'type' => 'integer', 'min' => 1, 'max' => 3600, ],
		'__integerMin1Max4'                             => [ 'type' => 'integer', 'min' => 1, 'max' => 4, ],
		'__integerMin1Max5'                             => [ 'type' => 'integer', 'min' => 1, 'max' => 5, ],
		'__integerMin1Max6'                             => [ 'type' => 'integer', 'min' => 1, 'max' => 6, ],
		'__integerMin1Max8'                             => [ 'type' => 'integer', 'min' => 1, 'max' => 8, ],
		'__integerMin25Max10000'                        => [ 'type' => 'integer', 'min' => 25, 'max' => 10000, ],
		'__integerMin25Max2000'                         => [ 'type' => 'integer', 'min' => 25, 'max' => 2000, ],
		'__integerMin3'                                 => [ 'type' => 'integer', 'min' => 3, ],
		'__integerMin30'                                => [ 'type' => 'integer', 'min' => 30, ],
		'__integerMin4Max20'                            => [ 'type' => 'integer', 'min' => 4, 'max' => 20, ],
		'__integerMin96Max600'                          => [ 'type' => 'integer', 'min' => 96, 'max' => 600, ],
		'__integerMinNegative1000Max1000'               => [ 'type' => 'integer', 'min' => - 1000, 'max' => 1000, ],
		'__integerMinNegative60Max6'                    => [ 'type' => 'integer', 'min' => - 60, 'max' => 6, ],
		'__integerMinNegative60Max60'                   => [ 'type' => 'integer', 'min' => - 60, 'max' => 60, ],
		'__listOfAudioChannelMapping'                   => [
			'type'   => 'list',
			'member' => [ 'shape' => 'AudioChannelMapping', ],
		],
		'__listOfAudioDescription'                      => [
			'type'   => 'list',
			'member' => [ 'shape' => 'AudioDescription', ],
		],
		'__listOfAudioSelector'                         => [
			'type'   => 'list',
			'member' => [ 'shape' => 'AudioSelector', ],
		],
		'__listOfCaptionDescription'                    => [
			'type'   => 'list',
			'member' => [ 'shape' => 'CaptionDescription', ],
		],
		'__listOfCaptionLanguageMapping'                => [
			'type'   => 'list',
			'member' => [ 'shape' => 'CaptionLanguageMapping', ],
		],
		'__listOfCaptionSelector'                       => [
			'type'   => 'list',
			'member' => [ 'shape' => 'CaptionSelector', ],
		],
		'__listOfChannelEgressEndpoint'                 => [
			'type'   => 'list',
			'member' => [ 'shape' => 'ChannelEgressEndpoint', ],
		],
		'__listOfChannelSummary'                        => [
			'type'   => 'list',
			'member' => [ 'shape' => 'ChannelSummary', ],
		],
		'__listOfHlsAdMarkers'                          => [
			'type'   => 'list',
			'member' => [ 'shape' => 'HlsAdMarkers', ],
		],
		'__listOfInput'                                 => [ 'type' => 'list', 'member' => [ 'shape' => 'Input', ], ],
		'__listOfInputAttachment'                       => [
			'type'   => 'list',
			'member' => [ 'shape' => 'InputAttachment', ],
		],
		'__listOfInputChannelLevel'                     => [
			'type'   => 'list',
			'member' => [ 'shape' => 'InputChannelLevel', ],
		],
		'__listOfInputDestination'                      => [
			'type'   => 'list',
			'member' => [ 'shape' => 'InputDestination', ],
		],
		'__listOfInputDestinationRequest'               => [
			'type'   => 'list',
			'member' => [ 'shape' => 'InputDestinationRequest', ],
		],
		'__listOfInputSecurityGroup'                    => [
			'type'   => 'list',
			'member' => [ 'shape' => 'InputSecurityGroup', ],
		],
		'__listOfInputSource'                           => [
			'type'   => 'list',
			'member' => [ 'shape' => 'InputSource', ],
		],
		'__listOfInputSourceRequest'                    => [
			'type'   => 'list',
			'member' => [ 'shape' => 'InputSourceRequest', ],
		],
		'__listOfInputWhitelistRule'                    => [
			'type'   => 'list',
			'member' => [ 'shape' => 'InputWhitelistRule', ],
		],
		'__listOfInputWhitelistRuleCidr'                => [
			'type'   => 'list',
			'member' => [ 'shape' => 'InputWhitelistRuleCidr', ],
		],
		'__listOfMediaConnectFlow'                      => [
			'type'   => 'list',
			'member' => [ 'shape' => 'MediaConnectFlow', ],
		],
		'__listOfMediaConnectFlowRequest'               => [
			'type'   => 'list',
			'member' => [ 'shape' => 'MediaConnectFlowRequest', ],
		],
		'__listOfMediaPackageOutputDestinationSettings' => [
			'type'   => 'list',
			'member' => [ 'shape' => 'MediaPackageOutputDestinationSettings', ],
		],
		'__listOfOffering'                              => [
			'type'   => 'list',
			'member' => [ 'shape' => 'Offering', ],
		],
		'__listOfOutput'                                => [ 'type' => 'list', 'member' => [ 'shape' => 'Output', ], ],
		'__listOfOutputDestination'                     => [
			'type'   => 'list',
			'member' => [ 'shape' => 'OutputDestination', ],
		],
		'__listOfOutputDestinationSettings'             => [
			'type'   => 'list',
			'member' => [ 'shape' => 'OutputDestinationSettings', ],
		],
		'__listOfOutputGroup'                           => [
			'type'   => 'list',
			'member' => [ 'shape' => 'OutputGroup', ],
		],
		'__listOfPipelinePauseStateSettings'            => [
			'type'   => 'list',
			'member' => [ 'shape' => 'PipelinePauseStateSettings', ],
		],
		'__listOfReservation'                           => [
			'type'   => 'list',
			'member' => [ 'shape' => 'Reservation', ],
		],
		'__listOfScheduleAction'                        => [
			'type'   => 'list',
			'member' => [ 'shape' => 'ScheduleAction', ],
		],
		'__listOfScte35Descriptor'                      => [
			'type'   => 'list',
			'member' => [ 'shape' => 'Scte35Descriptor', ],
		],
		'__listOfValidationError'                       => [
			'type'   => 'list',
			'member' => [ 'shape' => 'ValidationError', ],
		],
		'__listOfVideoDescription'                      => [
			'type'   => 'list',
			'member' => [ 'shape' => 'VideoDescription', ],
		],
		'__listOf__string'                              => [
			'type'   => 'list',
			'member' => [ 'shape' => '__string', ],
		],
		'__long'                                        => [ 'type' => 'long', ],
		'__string'                                      => [ 'type' => 'string', ],
		'__stringMax32'                                 => [ 'type' => 'string', 'max' => 32, ],
		'__stringMin1'                                  => [ 'type' => 'string', 'min' => 1, ],
		'__stringMin1Max255'                            => [ 'type' => 'string', 'min' => 1, 'max' => 255, ],
		'__stringMin1Max256'                            => [ 'type' => 'string', 'min' => 1, 'max' => 256, ],
		'__stringMin32Max32'                            => [ 'type' => 'string', 'min' => 32, 'max' => 32, ],
		'__stringMin34Max34'                            => [ 'type' => 'string', 'min' => 34, 'max' => 34, ],
		'__stringMin3Max3'                              => [ 'type' => 'string', 'min' => 3, 'max' => 3, ],
		'__stringMin6Max6'                              => [ 'type' => 'string', 'min' => 6, 'max' => 6, ],
		'__timestampIso8601'                            => [ 'type' => 'timestamp', 'timestampFormat' => 'iso8601', ],
		'__timestampUnix'                               => [
			'type'            => 'timestamp',
			'timestampFormat' => 'unixTimestamp',
		],
	],
];
