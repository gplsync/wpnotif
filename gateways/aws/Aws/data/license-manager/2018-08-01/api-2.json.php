<?php
// This file was auto-generated from sdk-root/src/data/license-manager/2018-08-01/api-2.json
return [
	'version'    => '2.0',
	'metadata'   => [
		'apiVersion'       => '2018-08-01',
		'endpointPrefix'   => 'license-manager',
		'jsonVersion'      => '1.1',
		'protocol'         => 'json',
		'serviceFullName'  => 'AWS License Manager',
		'serviceId'        => 'License Manager',
		'signatureVersion' => 'v4',
		'targetPrefix'     => 'AWSLicenseManager',
		'uid'              => 'license-manager-2018-08-01',
	],
	'operations' => [
		'CreateLicenseConfiguration'              => [
			'name'   => 'CreateLicenseConfiguration',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'CreateLicenseConfigurationRequest', ],
			'output' => [ 'shape' => 'CreateLicenseConfigurationResponse', ],
			'errors' => [
				[ 'shape' => 'InvalidParameterValueException', ],
				[ 'shape' => 'ServerInternalException', ],
				[ 'shape' => 'ResourceLimitExceededException', ],
				[ 'shape' => 'AuthorizationException', ],
				[ 'shape' => 'AccessDeniedException', ],
				[ 'shape' => 'RateLimitExceededException', ],
			],
		],
		'DeleteLicenseConfiguration'              => [
			'name'   => 'DeleteLicenseConfiguration',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DeleteLicenseConfigurationRequest', ],
			'output' => [ 'shape' => 'DeleteLicenseConfigurationResponse', ],
			'errors' => [
				[ 'shape' => 'InvalidParameterValueException', ],
				[ 'shape' => 'ServerInternalException', ],
				[ 'shape' => 'AuthorizationException', ],
				[ 'shape' => 'AccessDeniedException', ],
				[ 'shape' => 'RateLimitExceededException', ],
			],
		],
		'GetLicenseConfiguration'                 => [
			'name'   => 'GetLicenseConfiguration',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'GetLicenseConfigurationRequest', ],
			'output' => [ 'shape' => 'GetLicenseConfigurationResponse', ],
			'errors' => [
				[ 'shape' => 'InvalidParameterValueException', ],
				[ 'shape' => 'ServerInternalException', ],
				[ 'shape' => 'AuthorizationException', ],
				[ 'shape' => 'AccessDeniedException', ],
				[ 'shape' => 'RateLimitExceededException', ],
			],
		],
		'GetServiceSettings'                      => [
			'name'   => 'GetServiceSettings',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'GetServiceSettingsRequest', ],
			'output' => [ 'shape' => 'GetServiceSettingsResponse', ],
			'errors' => [
				[ 'shape' => 'ServerInternalException', ],
				[ 'shape' => 'AuthorizationException', ],
				[ 'shape' => 'AccessDeniedException', ],
				[ 'shape' => 'RateLimitExceededException', ],
			],
		],
		'ListAssociationsForLicenseConfiguration' => [
			'name'   => 'ListAssociationsForLicenseConfiguration',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'ListAssociationsForLicenseConfigurationRequest', ],
			'output' => [ 'shape' => 'ListAssociationsForLicenseConfigurationResponse', ],
			'errors' => [
				[ 'shape' => 'InvalidParameterValueException', ],
				[ 'shape' => 'FilterLimitExceededException', ],
				[ 'shape' => 'ServerInternalException', ],
				[ 'shape' => 'AuthorizationException', ],
				[ 'shape' => 'AccessDeniedException', ],
				[ 'shape' => 'RateLimitExceededException', ],
			],
		],
		'ListLicenseConfigurations'               => [
			'name'   => 'ListLicenseConfigurations',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'ListLicenseConfigurationsRequest', ],
			'output' => [ 'shape' => 'ListLicenseConfigurationsResponse', ],
			'errors' => [
				[ 'shape' => 'InvalidParameterValueException', ],
				[ 'shape' => 'ServerInternalException', ],
				[ 'shape' => 'FilterLimitExceededException', ],
				[ 'shape' => 'AuthorizationException', ],
				[ 'shape' => 'AccessDeniedException', ],
				[ 'shape' => 'RateLimitExceededException', ],
			],
		],
		'ListLicenseSpecificationsForResource'    => [
			'name'   => 'ListLicenseSpecificationsForResource',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'ListLicenseSpecificationsForResourceRequest', ],
			'output' => [ 'shape' => 'ListLicenseSpecificationsForResourceResponse', ],
			'errors' => [
				[ 'shape' => 'InvalidParameterValueException', ],
				[ 'shape' => 'ServerInternalException', ],
				[ 'shape' => 'AuthorizationException', ],
				[ 'shape' => 'AccessDeniedException', ],
				[ 'shape' => 'RateLimitExceededException', ],
			],
		],
		'ListResourceInventory'                   => [
			'name'   => 'ListResourceInventory',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'ListResourceInventoryRequest', ],
			'output' => [ 'shape' => 'ListResourceInventoryResponse', ],
			'errors' => [
				[ 'shape' => 'InvalidParameterValueException', ],
				[ 'shape' => 'ServerInternalException', ],
				[ 'shape' => 'FilterLimitExceededException', ],
				[ 'shape' => 'FailedDependencyException', ],
				[ 'shape' => 'AuthorizationException', ],
				[ 'shape' => 'AccessDeniedException', ],
				[ 'shape' => 'RateLimitExceededException', ],
			],
		],
		'ListTagsForResource'                     => [
			'name'   => 'ListTagsForResource',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'ListTagsForResourceRequest', ],
			'output' => [ 'shape' => 'ListTagsForResourceResponse', ],
			'errors' => [
				[ 'shape' => 'InvalidParameterValueException', ],
				[ 'shape' => 'ServerInternalException', ],
				[ 'shape' => 'AuthorizationException', ],
				[ 'shape' => 'AccessDeniedException', ],
				[ 'shape' => 'RateLimitExceededException', ],
			],
		],
		'ListUsageForLicenseConfiguration'        => [
			'name'   => 'ListUsageForLicenseConfiguration',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'ListUsageForLicenseConfigurationRequest', ],
			'output' => [ 'shape' => 'ListUsageForLicenseConfigurationResponse', ],
			'errors' => [
				[ 'shape' => 'InvalidParameterValueException', ],
				[ 'shape' => 'FilterLimitExceededException', ],
				[ 'shape' => 'ServerInternalException', ],
				[ 'shape' => 'AuthorizationException', ],
				[ 'shape' => 'AccessDeniedException', ],
				[ 'shape' => 'RateLimitExceededException', ],
			],
		],
		'TagResource'                             => [
			'name'   => 'TagResource',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'TagResourceRequest', ],
			'output' => [ 'shape' => 'TagResourceResponse', ],
			'errors' => [
				[ 'shape' => 'InvalidParameterValueException', ],
				[ 'shape' => 'ServerInternalException', ],
				[ 'shape' => 'AuthorizationException', ],
				[ 'shape' => 'AccessDeniedException', ],
				[ 'shape' => 'RateLimitExceededException', ],
			],
		],
		'UntagResource'                           => [
			'name'   => 'UntagResource',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'UntagResourceRequest', ],
			'output' => [ 'shape' => 'UntagResourceResponse', ],
			'errors' => [
				[ 'shape' => 'InvalidParameterValueException', ],
				[ 'shape' => 'ServerInternalException', ],
				[ 'shape' => 'AuthorizationException', ],
				[ 'shape' => 'AccessDeniedException', ],
				[ 'shape' => 'RateLimitExceededException', ],
			],
		],
		'UpdateLicenseConfiguration'              => [
			'name'   => 'UpdateLicenseConfiguration',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'UpdateLicenseConfigurationRequest', ],
			'output' => [ 'shape' => 'UpdateLicenseConfigurationResponse', ],
			'errors' => [
				[ 'shape' => 'InvalidParameterValueException', ],
				[ 'shape' => 'ServerInternalException', ],
				[ 'shape' => 'AuthorizationException', ],
				[ 'shape' => 'AccessDeniedException', ],
				[ 'shape' => 'RateLimitExceededException', ],
			],
		],
		'UpdateLicenseSpecificationsForResource'  => [
			'name'   => 'UpdateLicenseSpecificationsForResource',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'UpdateLicenseSpecificationsForResourceRequest', ],
			'output' => [ 'shape' => 'UpdateLicenseSpecificationsForResourceResponse', ],
			'errors' => [
				[ 'shape' => 'InvalidParameterValueException', ],
				[ 'shape' => 'InvalidResourceStateException', ],
				[ 'shape' => 'LicenseUsageException', ],
				[ 'shape' => 'ServerInternalException', ],
				[ 'shape' => 'AuthorizationException', ],
				[ 'shape' => 'AccessDeniedException', ],
				[ 'shape' => 'RateLimitExceededException', ],
			],
		],
		'UpdateServiceSettings'                   => [
			'name'   => 'UpdateServiceSettings',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'UpdateServiceSettingsRequest', ],
			'output' => [ 'shape' => 'UpdateServiceSettingsResponse', ],
			'errors' => [
				[ 'shape' => 'InvalidParameterValueException', ],
				[ 'shape' => 'ServerInternalException', ],
				[ 'shape' => 'AuthorizationException', ],
				[ 'shape' => 'AccessDeniedException', ],
				[ 'shape' => 'RateLimitExceededException', ],
			],
		],
	],
	'shapes'     => [
		'AccessDeniedException'                           => [
			'type'      => 'structure',
			'members'   => [ 'Message' => [ 'shape' => 'Message', ], ],
			'exception' => true,
		],
		'AuthorizationException'                          => [
			'type'      => 'structure',
			'members'   => [ 'Message' => [ 'shape' => 'Message', ], ],
			'exception' => true,
		],
		'Boolean'                                         => [ 'type' => 'boolean', ],
		'BoxBoolean'                                      => [ 'type' => 'boolean', ],
		'BoxInteger'                                      => [ 'type' => 'integer', ],
		'BoxLong'                                         => [ 'type' => 'long', ],
		'ConsumedLicenseSummary'                          => [
			'type'    => 'structure',
			'members' => [
				'ResourceType'     => [ 'shape' => 'ResourceType', ],
				'ConsumedLicenses' => [ 'shape' => 'BoxLong', ],
			],
		],
		'ConsumedLicenseSummaryList'                      => [
			'type'   => 'list',
			'member' => [ 'shape' => 'ConsumedLicenseSummary', ],
		],
		'CreateLicenseConfigurationRequest'               => [
			'type'     => 'structure',
			'required' => [ 'Name', 'LicenseCountingType', ],
			'members'  => [
				'Name'                  => [ 'shape' => 'String', ],
				'Description'           => [ 'shape' => 'String', ],
				'LicenseCountingType'   => [ 'shape' => 'LicenseCountingType', ],
				'LicenseCount'          => [ 'shape' => 'BoxLong', ],
				'LicenseCountHardLimit' => [ 'shape' => 'BoxBoolean', ],
				'LicenseRules'          => [ 'shape' => 'StringList', ],
				'Tags'                  => [ 'shape' => 'TagList', ],
			],
		],
		'CreateLicenseConfigurationResponse'              => [
			'type'    => 'structure',
			'members' => [ 'LicenseConfigurationArn' => [ 'shape' => 'String', ], ],
		],
		'DateTime'                                        => [ 'type' => 'timestamp', ],
		'DeleteLicenseConfigurationRequest'               => [
			'type'     => 'structure',
			'required' => [ 'LicenseConfigurationArn', ],
			'members'  => [ 'LicenseConfigurationArn' => [ 'shape' => 'String', ], ],
		],
		'DeleteLicenseConfigurationResponse'              => [ 'type' => 'structure', 'members' => [], ],
		'FailedDependencyException'                       => [
			'type'      => 'structure',
			'members'   => [ 'Message' => [ 'shape' => 'Message', ], ],
			'exception' => true,
			'fault'     => true,
		],
		'Filter'                                          => [
			'type'    => 'structure',
			'members' => [
				'Name'   => [ 'shape' => 'FilterName', ],
				'Values' => [ 'shape' => 'FilterValues', ],
			],
		],
		'FilterLimitExceededException'                    => [
			'type'      => 'structure',
			'members'   => [ 'Message' => [ 'shape' => 'Message', ], ],
			'exception' => true,
		],
		'FilterName'                                      => [ 'type' => 'string', ],
		'FilterValue'                                     => [ 'type' => 'string', ],
		'FilterValues'                                    => [
			'type'   => 'list',
			'member' => [ 'shape' => 'FilterValue', ],
		],
		'Filters'                                         => [
			'type'   => 'list',
			'member' => [ 'shape' => 'Filter', ],
		],
		'GetLicenseConfigurationRequest'                  => [
			'type'     => 'structure',
			'required' => [ 'LicenseConfigurationArn', ],
			'members'  => [ 'LicenseConfigurationArn' => [ 'shape' => 'String', ], ],
		],
		'GetLicenseConfigurationResponse'                 => [
			'type'    => 'structure',
			'members' => [
				'LicenseConfigurationId'     => [ 'shape' => 'String', ],
				'LicenseConfigurationArn'    => [ 'shape' => 'String', ],
				'Name'                       => [ 'shape' => 'String', ],
				'Description'                => [ 'shape' => 'String', ],
				'LicenseCountingType'        => [ 'shape' => 'LicenseCountingType', ],
				'LicenseRules'               => [ 'shape' => 'StringList', ],
				'LicenseCount'               => [ 'shape' => 'BoxLong', ],
				'LicenseCountHardLimit'      => [ 'shape' => 'BoxBoolean', ],
				'ConsumedLicenses'           => [ 'shape' => 'BoxLong', ],
				'Status'                     => [ 'shape' => 'String', ],
				'OwnerAccountId'             => [ 'shape' => 'String', ],
				'ConsumedLicenseSummaryList' => [ 'shape' => 'ConsumedLicenseSummaryList', ],
				'ManagedResourceSummaryList' => [ 'shape' => 'ManagedResourceSummaryList', ],
				'Tags'                       => [ 'shape' => 'TagList', ],
			],
		],
		'GetServiceSettingsRequest'                       => [ 'type' => 'structure', 'members' => [], ],
		'GetServiceSettingsResponse'                      => [
			'type'    => 'structure',
			'members' => [
				'S3BucketArn'                  => [ 'shape' => 'String', ],
				'SnsTopicArn'                  => [ 'shape' => 'String', ],
				'OrganizationConfiguration'    => [ 'shape' => 'OrganizationConfiguration', ],
				'EnableCrossAccountsDiscovery' => [ 'shape' => 'BoxBoolean', ],
			],
		],
		'InvalidParameterValueException'                  => [
			'type'      => 'structure',
			'members'   => [ 'Message' => [ 'shape' => 'Message', ], ],
			'exception' => true,
			'synthetic' => true,
		],
		'InvalidResourceStateException'                   => [
			'type'      => 'structure',
			'members'   => [ 'Message' => [ 'shape' => 'Message', ], ],
			'exception' => true,
		],
		'InventoryFilter'                                 => [
			'type'     => 'structure',
			'required' => [ 'Name', 'Condition', ],
			'members'  => [
				'Name'      => [ 'shape' => 'String', ],
				'Condition' => [ 'shape' => 'InventoryFilterCondition', ],
				'Value'     => [ 'shape' => 'String', ],
			],
		],
		'InventoryFilterCondition'                        => [
			'type' => 'string',
			'enum' => [ 'EQUALS', 'NOT_EQUALS', 'BEGINS_WITH', 'CONTAINS', ],
		],
		'InventoryFilterList'                             => [
			'type'   => 'list',
			'member' => [ 'shape' => 'InventoryFilter', ],
		],
		'LicenseConfiguration'                            => [
			'type'    => 'structure',
			'members' => [
				'LicenseConfigurationId'     => [ 'shape' => 'String', ],
				'LicenseConfigurationArn'    => [ 'shape' => 'String', ],
				'Name'                       => [ 'shape' => 'String', ],
				'Description'                => [ 'shape' => 'String', ],
				'LicenseCountingType'        => [ 'shape' => 'LicenseCountingType', ],
				'LicenseRules'               => [ 'shape' => 'StringList', ],
				'LicenseCount'               => [ 'shape' => 'BoxLong', ],
				'LicenseCountHardLimit'      => [ 'shape' => 'BoxBoolean', ],
				'ConsumedLicenses'           => [ 'shape' => 'BoxLong', ],
				'Status'                     => [ 'shape' => 'String', ],
				'OwnerAccountId'             => [ 'shape' => 'String', ],
				'ConsumedLicenseSummaryList' => [ 'shape' => 'ConsumedLicenseSummaryList', ],
				'ManagedResourceSummaryList' => [ 'shape' => 'ManagedResourceSummaryList', ],
			],
		],
		'LicenseConfigurationAssociation'                 => [
			'type'    => 'structure',
			'members' => [
				'ResourceArn'     => [ 'shape' => 'String', ],
				'ResourceType'    => [ 'shape' => 'ResourceType', ],
				'ResourceOwnerId' => [ 'shape' => 'String', ],
				'AssociationTime' => [ 'shape' => 'DateTime', ],
			],
		],
		'LicenseConfigurationAssociations'                => [
			'type'   => 'list',
			'member' => [ 'shape' => 'LicenseConfigurationAssociation', ],
		],
		'LicenseConfigurationStatus'                      => [
			'type' => 'string',
			'enum' => [ 'AVAILABLE', 'DISABLED', ],
		],
		'LicenseConfigurationUsage'                       => [
			'type'    => 'structure',
			'members' => [
				'ResourceArn'      => [ 'shape' => 'String', ],
				'ResourceType'     => [ 'shape' => 'ResourceType', ],
				'ResourceStatus'   => [ 'shape' => 'String', ],
				'ResourceOwnerId'  => [ 'shape' => 'String', ],
				'AssociationTime'  => [ 'shape' => 'DateTime', ],
				'ConsumedLicenses' => [ 'shape' => 'BoxLong', ],
			],
		],
		'LicenseConfigurationUsageList'                   => [
			'type'   => 'list',
			'member' => [ 'shape' => 'LicenseConfigurationUsage', ],
		],
		'LicenseConfigurations'                           => [
			'type'   => 'list',
			'member' => [ 'shape' => 'LicenseConfiguration', ],
		],
		'LicenseCountingType'                             => [
			'type' => 'string',
			'enum' => [ 'vCPU', 'Instance', 'Core', 'Socket', ],
		],
		'LicenseSpecification'                            => [
			'type'     => 'structure',
			'required' => [ 'LicenseConfigurationArn', ],
			'members'  => [ 'LicenseConfigurationArn' => [ 'shape' => 'String', ], ],
		],
		'LicenseSpecifications'                           => [
			'type'   => 'list',
			'member' => [ 'shape' => 'LicenseSpecification', ],
		],
		'LicenseUsageException'                           => [
			'type'      => 'structure',
			'members'   => [ 'Message' => [ 'shape' => 'Message', ], ],
			'exception' => true,
		],
		'ListAssociationsForLicenseConfigurationRequest'  => [
			'type'     => 'structure',
			'required' => [ 'LicenseConfigurationArn', ],
			'members'  => [
				'LicenseConfigurationArn' => [ 'shape' => 'String', ],
				'MaxResults'              => [ 'shape' => 'BoxInteger', ],
				'NextToken'               => [ 'shape' => 'String', ],
			],
		],
		'ListAssociationsForLicenseConfigurationResponse' => [
			'type'    => 'structure',
			'members' => [
				'LicenseConfigurationAssociations' => [ 'shape' => 'LicenseConfigurationAssociations', ],
				'NextToken'                        => [ 'shape' => 'String', ],
			],
		],
		'ListLicenseConfigurationsRequest'                => [
			'type'    => 'structure',
			'members' => [
				'LicenseConfigurationArns' => [ 'shape' => 'StringList', ],
				'MaxResults'               => [ 'shape' => 'BoxInteger', ],
				'NextToken'                => [ 'shape' => 'String', ],
				'Filters'                  => [ 'shape' => 'Filters', ],
			],
		],
		'ListLicenseConfigurationsResponse'               => [
			'type'    => 'structure',
			'members' => [
				'LicenseConfigurations' => [ 'shape' => 'LicenseConfigurations', ],
				'NextToken'             => [ 'shape' => 'String', ],
			],
		],
		'ListLicenseSpecificationsForResourceRequest'     => [
			'type'     => 'structure',
			'required' => [ 'ResourceArn', ],
			'members'  => [
				'ResourceArn' => [ 'shape' => 'String', ],
				'MaxResults'  => [ 'shape' => 'BoxInteger', ],
				'NextToken'   => [ 'shape' => 'String', ],
			],
		],
		'ListLicenseSpecificationsForResourceResponse'    => [
			'type'    => 'structure',
			'members' => [
				'LicenseSpecifications' => [ 'shape' => 'LicenseSpecifications', ],
				'NextToken'             => [ 'shape' => 'String', ],
			],
		],
		'ListResourceInventoryRequest'                    => [
			'type'    => 'structure',
			'members' => [
				'MaxResults' => [ 'shape' => 'BoxInteger', ],
				'NextToken'  => [ 'shape' => 'String', ],
				'Filters'    => [ 'shape' => 'InventoryFilterList', ],
			],
		],
		'ListResourceInventoryResponse'                   => [
			'type'    => 'structure',
			'members' => [
				'ResourceInventoryList' => [ 'shape' => 'ResourceInventoryList', ],
				'NextToken'             => [ 'shape' => 'String', ],
			],
		],
		'ListTagsForResourceRequest'                      => [
			'type'     => 'structure',
			'required' => [ 'ResourceArn', ],
			'members'  => [ 'ResourceArn' => [ 'shape' => 'String', ], ],
		],
		'ListTagsForResourceResponse'                     => [
			'type'    => 'structure',
			'members' => [ 'Tags' => [ 'shape' => 'TagList', ], ],
		],
		'ListUsageForLicenseConfigurationRequest'         => [
			'type'     => 'structure',
			'required' => [ 'LicenseConfigurationArn', ],
			'members'  => [
				'LicenseConfigurationArn' => [ 'shape' => 'String', ],
				'MaxResults'              => [ 'shape' => 'BoxInteger', ],
				'NextToken'               => [ 'shape' => 'String', ],
				'Filters'                 => [ 'shape' => 'Filters', ],
			],
		],
		'ListUsageForLicenseConfigurationResponse'        => [
			'type'    => 'structure',
			'members' => [
				'LicenseConfigurationUsageList' => [ 'shape' => 'LicenseConfigurationUsageList', ],
				'NextToken'                     => [ 'shape' => 'String', ],
			],
		],
		'ManagedResourceSummary'                          => [
			'type'    => 'structure',
			'members' => [
				'ResourceType'     => [ 'shape' => 'ResourceType', ],
				'AssociationCount' => [ 'shape' => 'BoxLong', ],
			],
		],
		'ManagedResourceSummaryList'                      => [
			'type'   => 'list',
			'member' => [ 'shape' => 'ManagedResourceSummary', ],
		],
		'Message'                                         => [ 'type' => 'string', ],
		'OrganizationConfiguration'                       => [
			'type'     => 'structure',
			'required' => [ 'EnableIntegration', ],
			'members'  => [ 'EnableIntegration' => [ 'shape' => 'Boolean', ], ],
		],
		'RateLimitExceededException'                      => [
			'type'      => 'structure',
			'members'   => [ 'Message' => [ 'shape' => 'Message', ], ],
			'exception' => true,
		],
		'ResourceInventory'                               => [
			'type'    => 'structure',
			'members' => [
				'ResourceId'              => [ 'shape' => 'String', ],
				'ResourceType'            => [ 'shape' => 'ResourceType', ],
				'ResourceArn'             => [ 'shape' => 'String', ],
				'Platform'                => [ 'shape' => 'String', ],
				'PlatformVersion'         => [ 'shape' => 'String', ],
				'ResourceOwningAccountId' => [ 'shape' => 'String', ],
			],
		],
		'ResourceInventoryList'                           => [
			'type'   => 'list',
			'member' => [ 'shape' => 'ResourceInventory', ],
		],
		'ResourceLimitExceededException'                  => [
			'type'      => 'structure',
			'members'   => [ 'Message' => [ 'shape' => 'Message', ], ],
			'exception' => true,
		],
		'ResourceType'                                    => [
			'type' => 'string',
			'enum' => [ 'EC2_INSTANCE', 'EC2_HOST', 'EC2_AMI', ],
		],
		'ServerInternalException'                         => [
			'type'      => 'structure',
			'members'   => [ 'Message' => [ 'shape' => 'Message', ], ],
			'exception' => true,
			'fault'     => true,
		],
		'String'                                          => [ 'type' => 'string', ],
		'StringList'                                      => [
			'type'   => 'list',
			'member' => [ 'shape' => 'String', ],
		],
		'Tag'                                             => [
			'type'    => 'structure',
			'members' => [
				'Key'   => [ 'shape' => 'String', ],
				'Value' => [ 'shape' => 'String', ],
			],
		],
		'TagKeyList'                                      => [
			'type'   => 'list',
			'member' => [ 'shape' => 'String', ],
		],
		'TagList'                                         => [ 'type' => 'list', 'member' => [ 'shape' => 'Tag', ], ],
		'TagResourceRequest'                              => [
			'type'     => 'structure',
			'required' => [ 'ResourceArn', 'Tags', ],
			'members'  => [
				'ResourceArn' => [ 'shape' => 'String', ],
				'Tags'        => [ 'shape' => 'TagList', ],
			],
		],
		'TagResourceResponse'                             => [ 'type' => 'structure', 'members' => [], ],
		'UntagResourceRequest'                            => [
			'type'     => 'structure',
			'required' => [ 'ResourceArn', 'TagKeys', ],
			'members'  => [
				'ResourceArn' => [ 'shape' => 'String', ],
				'TagKeys'     => [ 'shape' => 'TagKeyList', ],
			],
		],
		'UntagResourceResponse'                           => [ 'type' => 'structure', 'members' => [], ],
		'UpdateLicenseConfigurationRequest'               => [
			'type'     => 'structure',
			'required' => [ 'LicenseConfigurationArn', ],
			'members'  => [
				'LicenseConfigurationArn'    => [ 'shape' => 'String', ],
				'LicenseConfigurationStatus' => [ 'shape' => 'LicenseConfigurationStatus', ],
				'LicenseRules'               => [ 'shape' => 'StringList', ],
				'LicenseCount'               => [ 'shape' => 'BoxLong', ],
				'LicenseCountHardLimit'      => [ 'shape' => 'BoxBoolean', ],
				'Name'                       => [ 'shape' => 'String', ],
				'Description'                => [ 'shape' => 'String', ],
			],
		],
		'UpdateLicenseConfigurationResponse'              => [ 'type' => 'structure', 'members' => [], ],
		'UpdateLicenseSpecificationsForResourceRequest'   => [
			'type'     => 'structure',
			'required' => [ 'ResourceArn', ],
			'members'  => [
				'ResourceArn'                 => [ 'shape' => 'String', ],
				'AddLicenseSpecifications'    => [ 'shape' => 'LicenseSpecifications', ],
				'RemoveLicenseSpecifications' => [ 'shape' => 'LicenseSpecifications', ],
			],
		],
		'UpdateLicenseSpecificationsForResourceResponse'  => [ 'type' => 'structure', 'members' => [], ],
		'UpdateServiceSettingsRequest'                    => [
			'type'    => 'structure',
			'members' => [
				'S3BucketArn'                  => [ 'shape' => 'String', ],
				'SnsTopicArn'                  => [ 'shape' => 'String', ],
				'OrganizationConfiguration'    => [ 'shape' => 'OrganizationConfiguration', ],
				'EnableCrossAccountsDiscovery' => [ 'shape' => 'BoxBoolean', ],
			],
		],
		'UpdateServiceSettingsResponse'                   => [ 'type' => 'structure', 'members' => [], ],
	],
];
