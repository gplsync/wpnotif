<?php
// This file was auto-generated from sdk-root/src/data/resource-groups/2017-11-27/api-2.json
return [
	'version'    => '2.0',
	'metadata'   => [
		'apiVersion'          => '2017-11-27',
		'endpointPrefix'      => 'resource-groups',
		'protocol'            => 'rest-json',
		'serviceAbbreviation' => 'Resource Groups',
		'serviceFullName'     => 'AWS Resource Groups',
		'serviceId'           => 'Resource Groups',
		'signatureVersion'    => 'v4',
		'signingName'         => 'resource-groups',
		'uid'                 => 'resource-groups-2017-11-27',
	],
	'operations' => [
		'CreateGroup'        => [
			'name'   => 'CreateGroup',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/groups', ],
			'input'  => [ 'shape' => 'CreateGroupInput', ],
			'output' => [ 'shape' => 'CreateGroupOutput', ],
			'errors' => [
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'ForbiddenException', ],
				[ 'shape' => 'MethodNotAllowedException', ],
				[ 'shape' => 'TooManyRequestsException', ],
				[ 'shape' => 'InternalServerErrorException', ],
			],
		],
		'DeleteGroup'        => [
			'name'   => 'DeleteGroup',
			'http'   => [ 'method' => 'DELETE', 'requestUri' => '/groups/{GroupName}', ],
			'input'  => [ 'shape' => 'DeleteGroupInput', ],
			'output' => [ 'shape' => 'DeleteGroupOutput', ],
			'errors' => [
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'ForbiddenException', ],
				[ 'shape' => 'NotFoundException', ],
				[ 'shape' => 'MethodNotAllowedException', ],
				[ 'shape' => 'TooManyRequestsException', ],
				[ 'shape' => 'InternalServerErrorException', ],
			],
		],
		'GetGroup'           => [
			'name'   => 'GetGroup',
			'http'   => [ 'method' => 'GET', 'requestUri' => '/groups/{GroupName}', ],
			'input'  => [ 'shape' => 'GetGroupInput', ],
			'output' => [ 'shape' => 'GetGroupOutput', ],
			'errors' => [
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'ForbiddenException', ],
				[ 'shape' => 'NotFoundException', ],
				[ 'shape' => 'MethodNotAllowedException', ],
				[ 'shape' => 'TooManyRequestsException', ],
				[ 'shape' => 'InternalServerErrorException', ],
			],
		],
		'GetGroupQuery'      => [
			'name'   => 'GetGroupQuery',
			'http'   => [ 'method' => 'GET', 'requestUri' => '/groups/{GroupName}/query', ],
			'input'  => [ 'shape' => 'GetGroupQueryInput', ],
			'output' => [ 'shape' => 'GetGroupQueryOutput', ],
			'errors' => [
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'ForbiddenException', ],
				[ 'shape' => 'NotFoundException', ],
				[ 'shape' => 'MethodNotAllowedException', ],
				[ 'shape' => 'TooManyRequestsException', ],
				[ 'shape' => 'InternalServerErrorException', ],
			],
		],
		'GetTags'            => [
			'name'   => 'GetTags',
			'http'   => [ 'method' => 'GET', 'requestUri' => '/resources/{Arn}/tags', ],
			'input'  => [ 'shape' => 'GetTagsInput', ],
			'output' => [ 'shape' => 'GetTagsOutput', ],
			'errors' => [
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'ForbiddenException', ],
				[ 'shape' => 'NotFoundException', ],
				[ 'shape' => 'MethodNotAllowedException', ],
				[ 'shape' => 'TooManyRequestsException', ],
				[ 'shape' => 'InternalServerErrorException', ],
			],
		],
		'ListGroupResources' => [
			'name'   => 'ListGroupResources',
			'http'   => [
				'method'     => 'POST',
				'requestUri' => '/groups/{GroupName}/resource-identifiers-list',
			],
			'input'  => [ 'shape' => 'ListGroupResourcesInput', ],
			'output' => [ 'shape' => 'ListGroupResourcesOutput', ],
			'errors' => [
				[ 'shape' => 'UnauthorizedException', ],
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'ForbiddenException', ],
				[ 'shape' => 'NotFoundException', ],
				[ 'shape' => 'MethodNotAllowedException', ],
				[ 'shape' => 'TooManyRequestsException', ],
				[ 'shape' => 'InternalServerErrorException', ],
			],
		],
		'ListGroups'         => [
			'name'   => 'ListGroups',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/groups-list', ],
			'input'  => [ 'shape' => 'ListGroupsInput', ],
			'output' => [ 'shape' => 'ListGroupsOutput', ],
			'errors' => [
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'ForbiddenException', ],
				[ 'shape' => 'MethodNotAllowedException', ],
				[ 'shape' => 'TooManyRequestsException', ],
				[ 'shape' => 'InternalServerErrorException', ],
			],
		],
		'SearchResources'    => [
			'name'   => 'SearchResources',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/resources/search', ],
			'input'  => [ 'shape' => 'SearchResourcesInput', ],
			'output' => [ 'shape' => 'SearchResourcesOutput', ],
			'errors' => [
				[ 'shape' => 'UnauthorizedException', ],
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'ForbiddenException', ],
				[ 'shape' => 'MethodNotAllowedException', ],
				[ 'shape' => 'TooManyRequestsException', ],
				[ 'shape' => 'InternalServerErrorException', ],
			],
		],
		'Tag'                => [
			'name'   => 'Tag',
			'http'   => [ 'method' => 'PUT', 'requestUri' => '/resources/{Arn}/tags', ],
			'input'  => [ 'shape' => 'TagInput', ],
			'output' => [ 'shape' => 'TagOutput', ],
			'errors' => [
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'ForbiddenException', ],
				[ 'shape' => 'NotFoundException', ],
				[ 'shape' => 'MethodNotAllowedException', ],
				[ 'shape' => 'TooManyRequestsException', ],
				[ 'shape' => 'InternalServerErrorException', ],
			],
		],
		'Untag'              => [
			'name'   => 'Untag',
			'http'   => [ 'method' => 'PATCH', 'requestUri' => '/resources/{Arn}/tags', ],
			'input'  => [ 'shape' => 'UntagInput', ],
			'output' => [ 'shape' => 'UntagOutput', ],
			'errors' => [
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'ForbiddenException', ],
				[ 'shape' => 'NotFoundException', ],
				[ 'shape' => 'MethodNotAllowedException', ],
				[ 'shape' => 'TooManyRequestsException', ],
				[ 'shape' => 'InternalServerErrorException', ],
			],
		],
		'UpdateGroup'        => [
			'name'   => 'UpdateGroup',
			'http'   => [ 'method' => 'PUT', 'requestUri' => '/groups/{GroupName}', ],
			'input'  => [ 'shape' => 'UpdateGroupInput', ],
			'output' => [ 'shape' => 'UpdateGroupOutput', ],
			'errors' => [
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'ForbiddenException', ],
				[ 'shape' => 'NotFoundException', ],
				[ 'shape' => 'MethodNotAllowedException', ],
				[ 'shape' => 'TooManyRequestsException', ],
				[ 'shape' => 'InternalServerErrorException', ],
			],
		],
		'UpdateGroupQuery'   => [
			'name'   => 'UpdateGroupQuery',
			'http'   => [ 'method' => 'PUT', 'requestUri' => '/groups/{GroupName}/query', ],
			'input'  => [ 'shape' => 'UpdateGroupQueryInput', ],
			'output' => [ 'shape' => 'UpdateGroupQueryOutput', ],
			'errors' => [
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'ForbiddenException', ],
				[ 'shape' => 'NotFoundException', ],
				[ 'shape' => 'MethodNotAllowedException', ],
				[ 'shape' => 'TooManyRequestsException', ],
				[ 'shape' => 'InternalServerErrorException', ],
			],
		],
	],
	'shapes'     => [
		'BadRequestException'          => [
			'type'      => 'structure',
			'members'   => [ 'Message' => [ 'shape' => 'ErrorMessage', ], ],
			'error'     => [ 'httpStatusCode' => 400, ],
			'exception' => true,
		],
		'CreateGroupInput'             => [
			'type'     => 'structure',
			'required' => [ 'Name', 'ResourceQuery', ],
			'members'  => [
				'Name'          => [ 'shape' => 'GroupName', ],
				'Description'   => [ 'shape' => 'GroupDescription', ],
				'ResourceQuery' => [ 'shape' => 'ResourceQuery', ],
				'Tags'          => [ 'shape' => 'Tags', ],
			],
		],
		'CreateGroupOutput'            => [
			'type'    => 'structure',
			'members' => [
				'Group'         => [ 'shape' => 'Group', ],
				'ResourceQuery' => [ 'shape' => 'ResourceQuery', ],
				'Tags'          => [ 'shape' => 'Tags', ],
			],
		],
		'DeleteGroupInput'             => [
			'type'     => 'structure',
			'required' => [ 'GroupName', ],
			'members'  => [
				'GroupName' => [
					'shape'        => 'GroupName',
					'location'     => 'uri',
					'locationName' => 'GroupName',
				],
			],
		],
		'DeleteGroupOutput'            => [
			'type'    => 'structure',
			'members' => [ 'Group' => [ 'shape' => 'Group', ], ],
		],
		'ErrorMessage'                 => [ 'type' => 'string', 'max' => 1024, 'min' => 1, ],
		'ForbiddenException'           => [
			'type'      => 'structure',
			'members'   => [ 'Message' => [ 'shape' => 'ErrorMessage', ], ],
			'error'     => [ 'httpStatusCode' => 403, ],
			'exception' => true,
		],
		'GetGroupInput'                => [
			'type'     => 'structure',
			'required' => [ 'GroupName', ],
			'members'  => [
				'GroupName' => [
					'shape'        => 'GroupName',
					'location'     => 'uri',
					'locationName' => 'GroupName',
				],
			],
		],
		'GetGroupOutput'               => [
			'type'    => 'structure',
			'members' => [ 'Group' => [ 'shape' => 'Group', ], ],
		],
		'GetGroupQueryInput'           => [
			'type'     => 'structure',
			'required' => [ 'GroupName', ],
			'members'  => [
				'GroupName' => [
					'shape'        => 'GroupName',
					'location'     => 'uri',
					'locationName' => 'GroupName',
				],
			],
		],
		'GetGroupQueryOutput'          => [
			'type'    => 'structure',
			'members' => [ 'GroupQuery' => [ 'shape' => 'GroupQuery', ], ],
		],
		'GetTagsInput'                 => [
			'type'     => 'structure',
			'required' => [ 'Arn', ],
			'members'  => [
				'Arn' => [
					'shape'        => 'GroupArn',
					'location'     => 'uri',
					'locationName' => 'Arn',
				],
			],
		],
		'GetTagsOutput'                => [
			'type'    => 'structure',
			'members' => [
				'Arn'  => [ 'shape' => 'GroupArn', ],
				'Tags' => [ 'shape' => 'Tags', ],
			],
		],
		'Group'                        => [
			'type'     => 'structure',
			'required' => [ 'GroupArn', 'Name', ],
			'members'  => [
				'GroupArn'    => [ 'shape' => 'GroupArn', ],
				'Name'        => [ 'shape' => 'GroupName', ],
				'Description' => [ 'shape' => 'GroupDescription', ],
			],
		],
		'GroupArn'                     => [
			'type'    => 'string',
			'max'     => 1600,
			'min'     => 12,
			'pattern' => 'arn:aws(-[a-z]+)*:resource-groups:[a-z]{2}-[a-z]+-\\d{1}:[0-9]{12}:group/[a-zA-Z0-9_\\.-]{1,128}',
		],
		'GroupDescription'             => [ 'type' => 'string', 'max' => 512, 'pattern' => '[\\sa-zA-Z0-9_\\.-]*', ],
		'GroupFilter'                  => [
			'type'     => 'structure',
			'required' => [ 'Name', 'Values', ],
			'members'  => [
				'Name'   => [ 'shape' => 'GroupFilterName', ],
				'Values' => [ 'shape' => 'GroupFilterValues', ],
			],
		],
		'GroupFilterList'              => [ 'type' => 'list', 'member' => [ 'shape' => 'GroupFilter', ], ],
		'GroupFilterName'              => [ 'type' => 'string', 'enum' => [ 'resource-type', ], ],
		'GroupFilterValue'             => [
			'type'    => 'string',
			'max'     => 128,
			'min'     => 1,
			'pattern' => 'AWS::(AllSupported|[a-zA-Z0-9]+::[a-zA-Z0-9]+)',
		],
		'GroupFilterValues'            => [
			'type'   => 'list',
			'member' => [ 'shape' => 'GroupFilterValue', ],
			'max'    => 5,
			'min'    => 1,
		],
		'GroupIdentifier'              => [
			'type'    => 'structure',
			'members' => [
				'GroupName' => [ 'shape' => 'GroupName', ],
				'GroupArn'  => [ 'shape' => 'GroupArn', ],
			],
		],
		'GroupIdentifierList'          => [ 'type' => 'list', 'member' => [ 'shape' => 'GroupIdentifier', ], ],
		'GroupList'                    => [ 'type' => 'list', 'member' => [ 'shape' => 'Group', ], ],
		'GroupName'                    => [
			'type'    => 'string',
			'max'     => 128,
			'min'     => 1,
			'pattern' => '[a-zA-Z0-9_\\.-]+',
		],
		'GroupQuery'                   => [
			'type'     => 'structure',
			'required' => [ 'GroupName', 'ResourceQuery', ],
			'members'  => [
				'GroupName'     => [ 'shape' => 'GroupName', ],
				'ResourceQuery' => [ 'shape' => 'ResourceQuery', ],
			],
		],
		'InternalServerErrorException' => [
			'type'      => 'structure',
			'members'   => [ 'Message' => [ 'shape' => 'ErrorMessage', ], ],
			'error'     => [ 'httpStatusCode' => 500, ],
			'exception' => true,
		],
		'ListGroupResourcesInput'      => [
			'type'     => 'structure',
			'required' => [ 'GroupName', ],
			'members'  => [
				'GroupName'  => [
					'shape'        => 'GroupName',
					'location'     => 'uri',
					'locationName' => 'GroupName',
				],
				'Filters'    => [ 'shape' => 'ResourceFilterList', ],
				'MaxResults' => [
					'shape'        => 'MaxResults',
					'location'     => 'querystring',
					'locationName' => 'maxResults',
				],
				'NextToken'  => [
					'shape'        => 'NextToken',
					'location'     => 'querystring',
					'locationName' => 'nextToken',
				],
			],
		],
		'ListGroupResourcesOutput'     => [
			'type'    => 'structure',
			'members' => [
				'ResourceIdentifiers' => [ 'shape' => 'ResourceIdentifierList', ],
				'NextToken'           => [ 'shape' => 'NextToken', ],
				'QueryErrors'         => [ 'shape' => 'QueryErrorList', ],
			],
		],
		'ListGroupsInput'              => [
			'type'    => 'structure',
			'members' => [
				'Filters'    => [ 'shape' => 'GroupFilterList', ],
				'MaxResults' => [
					'shape'        => 'MaxResults',
					'location'     => 'querystring',
					'locationName' => 'maxResults',
				],
				'NextToken'  => [
					'shape'        => 'NextToken',
					'location'     => 'querystring',
					'locationName' => 'nextToken',
				],
			],
		],
		'ListGroupsOutput'             => [
			'type'    => 'structure',
			'members' => [
				'GroupIdentifiers' => [ 'shape' => 'GroupIdentifierList', ],
				'Groups'           => [
					'shape'             => 'GroupList',
					'deprecated'        => true,
					'deprecatedMessage' => 'This field is deprecated, use GroupIdentifiers instead.',
				],
				'NextToken'        => [ 'shape' => 'NextToken', ],
			],
		],
		'MaxResults'                   => [ 'type' => 'integer', 'max' => 50, 'min' => 1, ],
		'MethodNotAllowedException'    => [
			'type'      => 'structure',
			'members'   => [ 'Message' => [ 'shape' => 'ErrorMessage', ], ],
			'error'     => [ 'httpStatusCode' => 405, ],
			'exception' => true,
		],
		'NextToken'                    => [
			'type'    => 'string',
			'max'     => 8192,
			'min'     => 0,
			'pattern' => '^[a-zA-Z0-9+/]*={0,2}$',
		],
		'NotFoundException'            => [
			'type'      => 'structure',
			'members'   => [ 'Message' => [ 'shape' => 'ErrorMessage', ], ],
			'error'     => [ 'httpStatusCode' => 404, ],
			'exception' => true,
		],
		'Query'                        => [ 'type' => 'string', 'max' => 4096, 'pattern' => '[\\s\\S]*', ],
		'QueryError'                   => [
			'type'    => 'structure',
			'members' => [
				'ErrorCode' => [ 'shape' => 'QueryErrorCode', ],
				'Message'   => [ 'shape' => 'QueryErrorMessage', ],
			],
		],
		'QueryErrorCode'               => [
			'type' => 'string',
			'enum' => [
				'CLOUDFORMATION_STACK_INACTIVE',
				'CLOUDFORMATION_STACK_NOT_EXISTING',
			],
		],
		'QueryErrorList'               => [ 'type' => 'list', 'member' => [ 'shape' => 'QueryError', ], ],
		'QueryErrorMessage'            => [ 'type' => 'string', ],
		'QueryType'                    => [
			'type'    => 'string',
			'enum'    => [ 'TAG_FILTERS_1_0', 'CLOUDFORMATION_STACK_1_0', ],
			'max'     => 128,
			'min'     => 1,
			'pattern' => '^\\w+$',
		],
		'ResourceArn'                  => [
			'type'    => 'string',
			'pattern' => 'arn:aws(-[a-z]+)*:[a-z0-9\\-]*:([a-z]{2}-[a-z]+-\\d{1})?:([0-9]{12})?:.+',
		],
		'ResourceFilter'               => [
			'type'     => 'structure',
			'required' => [ 'Name', 'Values', ],
			'members'  => [
				'Name'   => [ 'shape' => 'ResourceFilterName', ],
				'Values' => [ 'shape' => 'ResourceFilterValues', ],
			],
		],
		'ResourceFilterList'           => [ 'type' => 'list', 'member' => [ 'shape' => 'ResourceFilter', ], ],
		'ResourceFilterName'           => [ 'type' => 'string', 'enum' => [ 'resource-type', ], ],
		'ResourceFilterValue'          => [
			'type'    => 'string',
			'max'     => 128,
			'min'     => 1,
			'pattern' => 'AWS::[a-zA-Z0-9]+::[a-zA-Z0-9]+',
		],
		'ResourceFilterValues'         => [
			'type'   => 'list',
			'member' => [ 'shape' => 'ResourceFilterValue', ],
			'max'    => 5,
			'min'    => 1,
		],
		'ResourceIdentifier'           => [
			'type'    => 'structure',
			'members' => [
				'ResourceArn'  => [ 'shape' => 'ResourceArn', ],
				'ResourceType' => [ 'shape' => 'ResourceType', ],
			],
		],
		'ResourceIdentifierList'       => [ 'type' => 'list', 'member' => [ 'shape' => 'ResourceIdentifier', ], ],
		'ResourceQuery'                => [
			'type'     => 'structure',
			'required' => [ 'Type', 'Query', ],
			'members'  => [
				'Type'  => [ 'shape' => 'QueryType', ],
				'Query' => [ 'shape' => 'Query', ],
			],
		],
		'ResourceType'                 => [ 'type' => 'string', 'pattern' => 'AWS::[a-zA-Z0-9]+::\\w+', ],
		'SearchResourcesInput'         => [
			'type'     => 'structure',
			'required' => [ 'ResourceQuery', ],
			'members'  => [
				'ResourceQuery' => [ 'shape' => 'ResourceQuery', ],
				'MaxResults'    => [ 'shape' => 'MaxResults', ],
				'NextToken'     => [ 'shape' => 'NextToken', ],
			],
		],
		'SearchResourcesOutput'        => [
			'type'    => 'structure',
			'members' => [
				'ResourceIdentifiers' => [ 'shape' => 'ResourceIdentifierList', ],
				'NextToken'           => [ 'shape' => 'NextToken', ],
				'QueryErrors'         => [ 'shape' => 'QueryErrorList', ],
			],
		],
		'TagInput'                     => [
			'type'     => 'structure',
			'required' => [ 'Arn', 'Tags', ],
			'members'  => [
				'Arn'  => [
					'shape'        => 'GroupArn',
					'location'     => 'uri',
					'locationName' => 'Arn',
				],
				'Tags' => [ 'shape' => 'Tags', ],
			],
		],
		'TagKey'                       => [
			'type'    => 'string',
			'max'     => 128,
			'min'     => 1,
			'pattern' => '^([\\p{L}\\p{Z}\\p{N}_.:/=+\\-@]*)$',
		],
		'TagKeyList'                   => [ 'type' => 'list', 'member' => [ 'shape' => 'TagKey', ], ],
		'TagOutput'                    => [
			'type'    => 'structure',
			'members' => [
				'Arn'  => [ 'shape' => 'GroupArn', ],
				'Tags' => [ 'shape' => 'Tags', ],
			],
		],
		'TagValue'                     => [
			'type'    => 'string',
			'max'     => 256,
			'min'     => 0,
			'pattern' => '^([\\p{L}\\p{Z}\\p{N}_.:/=+\\-@]*)$',
		],
		'Tags'                         => [
			'type'  => 'map',
			'key'   => [ 'shape' => 'TagKey', ],
			'value' => [ 'shape' => 'TagValue', ],
		],
		'TooManyRequestsException'     => [
			'type'      => 'structure',
			'members'   => [ 'Message' => [ 'shape' => 'ErrorMessage', ], ],
			'error'     => [ 'httpStatusCode' => 429, ],
			'exception' => true,
		],
		'UnauthorizedException'        => [
			'type'      => 'structure',
			'members'   => [ 'Message' => [ 'shape' => 'ErrorMessage', ], ],
			'error'     => [ 'httpStatusCode' => 401, ],
			'exception' => true,
		],
		'UntagInput'                   => [
			'type'     => 'structure',
			'required' => [ 'Arn', 'Keys', ],
			'members'  => [
				'Arn'  => [
					'shape'        => 'GroupArn',
					'location'     => 'uri',
					'locationName' => 'Arn',
				],
				'Keys' => [ 'shape' => 'TagKeyList', ],
			],
		],
		'UntagOutput'                  => [
			'type'    => 'structure',
			'members' => [
				'Arn'  => [ 'shape' => 'GroupArn', ],
				'Keys' => [ 'shape' => 'TagKeyList', ],
			],
		],
		'UpdateGroupInput'             => [
			'type'     => 'structure',
			'required' => [ 'GroupName', ],
			'members'  => [
				'GroupName'   => [
					'shape'        => 'GroupName',
					'location'     => 'uri',
					'locationName' => 'GroupName',
				],
				'Description' => [ 'shape' => 'GroupDescription', ],
			],
		],
		'UpdateGroupOutput'            => [
			'type'    => 'structure',
			'members' => [ 'Group' => [ 'shape' => 'Group', ], ],
		],
		'UpdateGroupQueryInput'        => [
			'type'     => 'structure',
			'required' => [ 'GroupName', 'ResourceQuery', ],
			'members'  => [
				'GroupName'     => [
					'shape'        => 'GroupName',
					'location'     => 'uri',
					'locationName' => 'GroupName',
				],
				'ResourceQuery' => [ 'shape' => 'ResourceQuery', ],
			],
		],
		'UpdateGroupQueryOutput'       => [
			'type'    => 'structure',
			'members' => [ 'GroupQuery' => [ 'shape' => 'GroupQuery', ], ],
		],
	],
];
