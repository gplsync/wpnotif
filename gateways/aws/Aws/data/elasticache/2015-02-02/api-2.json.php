<?php
// This file was auto-generated from sdk-root/src/data/elasticache/2015-02-02/api-2.json
return [
	'version'    => '2.0',
	'metadata'   => [
		'apiVersion'       => '2015-02-02',
		'endpointPrefix'   => 'elasticache',
		'protocol'         => 'query',
		'serviceFullName'  => 'Amazon ElastiCache',
		'serviceId'        => 'ElastiCache',
		'signatureVersion' => 'v4',
		'uid'              => 'elasticache-2015-02-02',
		'xmlNamespace'     => 'http://elasticache.amazonaws.com/doc/2015-02-02/',
	],
	'operations' => [
		'AddTagsToResource'                        => [
			'name'   => 'AddTagsToResource',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'AddTagsToResourceMessage', ],
			'output' => [
				'shape'         => 'TagListMessage',
				'resultWrapper' => 'AddTagsToResourceResult',
			],
			'errors' => [
				[ 'shape' => 'CacheClusterNotFoundFault', ],
				[ 'shape' => 'SnapshotNotFoundFault', ],
				[ 'shape' => 'TagQuotaPerResourceExceeded', ],
				[ 'shape' => 'InvalidARNFault', ],
			],
		],
		'AuthorizeCacheSecurityGroupIngress'       => [
			'name'   => 'AuthorizeCacheSecurityGroupIngress',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'AuthorizeCacheSecurityGroupIngressMessage', ],
			'output' => [
				'shape'         => 'AuthorizeCacheSecurityGroupIngressResult',
				'resultWrapper' => 'AuthorizeCacheSecurityGroupIngressResult',
			],
			'errors' => [
				[ 'shape' => 'CacheSecurityGroupNotFoundFault', ],
				[ 'shape' => 'InvalidCacheSecurityGroupStateFault', ],
				[ 'shape' => 'AuthorizationAlreadyExistsFault', ],
				[ 'shape' => 'InvalidParameterValueException', ],
				[ 'shape' => 'InvalidParameterCombinationException', ],
			],
		],
		'BatchApplyUpdateAction'                   => [
			'name'   => 'BatchApplyUpdateAction',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'BatchApplyUpdateActionMessage', ],
			'output' => [
				'shape'         => 'UpdateActionResultsMessage',
				'resultWrapper' => 'BatchApplyUpdateActionResult',
			],
			'errors' => [
				[ 'shape' => 'ServiceUpdateNotFoundFault', ],
				[ 'shape' => 'InvalidParameterValueException', ],
			],
		],
		'BatchStopUpdateAction'                    => [
			'name'   => 'BatchStopUpdateAction',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'BatchStopUpdateActionMessage', ],
			'output' => [
				'shape'         => 'UpdateActionResultsMessage',
				'resultWrapper' => 'BatchStopUpdateActionResult',
			],
			'errors' => [
				[ 'shape' => 'ServiceUpdateNotFoundFault', ],
				[ 'shape' => 'InvalidParameterValueException', ],
			],
		],
		'CopySnapshot'                             => [
			'name'   => 'CopySnapshot',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'CopySnapshotMessage', ],
			'output' => [
				'shape'         => 'CopySnapshotResult',
				'resultWrapper' => 'CopySnapshotResult',
			],
			'errors' => [
				[ 'shape' => 'SnapshotAlreadyExistsFault', ],
				[ 'shape' => 'SnapshotNotFoundFault', ],
				[ 'shape' => 'SnapshotQuotaExceededFault', ],
				[ 'shape' => 'InvalidSnapshotStateFault', ],
				[ 'shape' => 'InvalidParameterValueException', ],
				[ 'shape' => 'InvalidParameterCombinationException', ],
			],
		],
		'CreateCacheCluster'                       => [
			'name'   => 'CreateCacheCluster',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'CreateCacheClusterMessage', ],
			'output' => [
				'shape'         => 'CreateCacheClusterResult',
				'resultWrapper' => 'CreateCacheClusterResult',
			],
			'errors' => [
				[ 'shape' => 'ReplicationGroupNotFoundFault', ],
				[ 'shape' => 'InvalidReplicationGroupStateFault', ],
				[ 'shape' => 'CacheClusterAlreadyExistsFault', ],
				[ 'shape' => 'InsufficientCacheClusterCapacityFault', ],
				[ 'shape' => 'CacheSecurityGroupNotFoundFault', ],
				[ 'shape' => 'CacheSubnetGroupNotFoundFault', ],
				[ 'shape' => 'ClusterQuotaForCustomerExceededFault', ],
				[ 'shape' => 'NodeQuotaForClusterExceededFault', ],
				[ 'shape' => 'NodeQuotaForCustomerExceededFault', ],
				[ 'shape' => 'CacheParameterGroupNotFoundFault', ],
				[ 'shape' => 'InvalidVPCNetworkStateFault', ],
				[ 'shape' => 'TagQuotaPerResourceExceeded', ],
				[ 'shape' => 'InvalidParameterValueException', ],
				[ 'shape' => 'InvalidParameterCombinationException', ],
			],
		],
		'CreateCacheParameterGroup'                => [
			'name'   => 'CreateCacheParameterGroup',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'CreateCacheParameterGroupMessage', ],
			'output' => [
				'shape'         => 'CreateCacheParameterGroupResult',
				'resultWrapper' => 'CreateCacheParameterGroupResult',
			],
			'errors' => [
				[ 'shape' => 'CacheParameterGroupQuotaExceededFault', ],
				[ 'shape' => 'CacheParameterGroupAlreadyExistsFault', ],
				[ 'shape' => 'InvalidCacheParameterGroupStateFault', ],
				[ 'shape' => 'InvalidParameterValueException', ],
				[ 'shape' => 'InvalidParameterCombinationException', ],
			],
		],
		'CreateCacheSecurityGroup'                 => [
			'name'   => 'CreateCacheSecurityGroup',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'CreateCacheSecurityGroupMessage', ],
			'output' => [
				'shape'         => 'CreateCacheSecurityGroupResult',
				'resultWrapper' => 'CreateCacheSecurityGroupResult',
			],
			'errors' => [
				[ 'shape' => 'CacheSecurityGroupAlreadyExistsFault', ],
				[ 'shape' => 'CacheSecurityGroupQuotaExceededFault', ],
				[ 'shape' => 'InvalidParameterValueException', ],
				[ 'shape' => 'InvalidParameterCombinationException', ],
			],
		],
		'CreateCacheSubnetGroup'                   => [
			'name'   => 'CreateCacheSubnetGroup',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'CreateCacheSubnetGroupMessage', ],
			'output' => [
				'shape'         => 'CreateCacheSubnetGroupResult',
				'resultWrapper' => 'CreateCacheSubnetGroupResult',
			],
			'errors' => [
				[ 'shape' => 'CacheSubnetGroupAlreadyExistsFault', ],
				[ 'shape' => 'CacheSubnetGroupQuotaExceededFault', ],
				[ 'shape' => 'CacheSubnetQuotaExceededFault', ],
				[ 'shape' => 'InvalidSubnet', ],
			],
		],
		'CreateReplicationGroup'                   => [
			'name'   => 'CreateReplicationGroup',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'CreateReplicationGroupMessage', ],
			'output' => [
				'shape'         => 'CreateReplicationGroupResult',
				'resultWrapper' => 'CreateReplicationGroupResult',
			],
			'errors' => [
				[ 'shape' => 'CacheClusterNotFoundFault', ],
				[ 'shape' => 'InvalidCacheClusterStateFault', ],
				[ 'shape' => 'ReplicationGroupAlreadyExistsFault', ],
				[ 'shape' => 'InsufficientCacheClusterCapacityFault', ],
				[ 'shape' => 'CacheSecurityGroupNotFoundFault', ],
				[ 'shape' => 'CacheSubnetGroupNotFoundFault', ],
				[ 'shape' => 'ClusterQuotaForCustomerExceededFault', ],
				[ 'shape' => 'NodeQuotaForClusterExceededFault', ],
				[ 'shape' => 'NodeQuotaForCustomerExceededFault', ],
				[ 'shape' => 'CacheParameterGroupNotFoundFault', ],
				[ 'shape' => 'InvalidVPCNetworkStateFault', ],
				[ 'shape' => 'TagQuotaPerResourceExceeded', ],
				[ 'shape' => 'NodeGroupsPerReplicationGroupQuotaExceededFault', ],
				[ 'shape' => 'InvalidParameterValueException', ],
				[ 'shape' => 'InvalidParameterCombinationException', ],
			],
		],
		'CreateSnapshot'                           => [
			'name'   => 'CreateSnapshot',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'CreateSnapshotMessage', ],
			'output' => [
				'shape'         => 'CreateSnapshotResult',
				'resultWrapper' => 'CreateSnapshotResult',
			],
			'errors' => [
				[ 'shape' => 'SnapshotAlreadyExistsFault', ],
				[ 'shape' => 'CacheClusterNotFoundFault', ],
				[ 'shape' => 'ReplicationGroupNotFoundFault', ],
				[ 'shape' => 'InvalidCacheClusterStateFault', ],
				[ 'shape' => 'InvalidReplicationGroupStateFault', ],
				[ 'shape' => 'SnapshotQuotaExceededFault', ],
				[ 'shape' => 'SnapshotFeatureNotSupportedFault', ],
				[ 'shape' => 'InvalidParameterCombinationException', ],
				[ 'shape' => 'InvalidParameterValueException', ],
			],
		],
		'DecreaseReplicaCount'                     => [
			'name'   => 'DecreaseReplicaCount',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DecreaseReplicaCountMessage', ],
			'output' => [
				'shape'         => 'DecreaseReplicaCountResult',
				'resultWrapper' => 'DecreaseReplicaCountResult',
			],
			'errors' => [
				[ 'shape' => 'ReplicationGroupNotFoundFault', ],
				[ 'shape' => 'InvalidReplicationGroupStateFault', ],
				[ 'shape' => 'InvalidCacheClusterStateFault', ],
				[ 'shape' => 'InvalidVPCNetworkStateFault', ],
				[ 'shape' => 'InsufficientCacheClusterCapacityFault', ],
				[ 'shape' => 'ClusterQuotaForCustomerExceededFault', ],
				[ 'shape' => 'NodeGroupsPerReplicationGroupQuotaExceededFault', ],
				[ 'shape' => 'NodeQuotaForCustomerExceededFault', ],
				[ 'shape' => 'ServiceLinkedRoleNotFoundFault', ],
				[ 'shape' => 'NoOperationFault', ],
				[ 'shape' => 'InvalidParameterValueException', ],
				[ 'shape' => 'InvalidParameterCombinationException', ],
			],
		],
		'DeleteCacheCluster'                       => [
			'name'   => 'DeleteCacheCluster',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DeleteCacheClusterMessage', ],
			'output' => [
				'shape'         => 'DeleteCacheClusterResult',
				'resultWrapper' => 'DeleteCacheClusterResult',
			],
			'errors' => [
				[ 'shape' => 'CacheClusterNotFoundFault', ],
				[ 'shape' => 'InvalidCacheClusterStateFault', ],
				[ 'shape' => 'SnapshotAlreadyExistsFault', ],
				[ 'shape' => 'SnapshotFeatureNotSupportedFault', ],
				[ 'shape' => 'SnapshotQuotaExceededFault', ],
				[ 'shape' => 'InvalidParameterValueException', ],
				[ 'shape' => 'InvalidParameterCombinationException', ],
			],
		],
		'DeleteCacheParameterGroup'                => [
			'name'   => 'DeleteCacheParameterGroup',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DeleteCacheParameterGroupMessage', ],
			'errors' => [
				[ 'shape' => 'InvalidCacheParameterGroupStateFault', ],
				[ 'shape' => 'CacheParameterGroupNotFoundFault', ],
				[ 'shape' => 'InvalidParameterValueException', ],
				[ 'shape' => 'InvalidParameterCombinationException', ],
			],
		],
		'DeleteCacheSecurityGroup'                 => [
			'name'   => 'DeleteCacheSecurityGroup',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DeleteCacheSecurityGroupMessage', ],
			'errors' => [
				[ 'shape' => 'InvalidCacheSecurityGroupStateFault', ],
				[ 'shape' => 'CacheSecurityGroupNotFoundFault', ],
				[ 'shape' => 'InvalidParameterValueException', ],
				[ 'shape' => 'InvalidParameterCombinationException', ],
			],
		],
		'DeleteCacheSubnetGroup'                   => [
			'name'   => 'DeleteCacheSubnetGroup',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DeleteCacheSubnetGroupMessage', ],
			'errors' => [
				[ 'shape' => 'CacheSubnetGroupInUse', ],
				[ 'shape' => 'CacheSubnetGroupNotFoundFault', ],
			],
		],
		'DeleteReplicationGroup'                   => [
			'name'   => 'DeleteReplicationGroup',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DeleteReplicationGroupMessage', ],
			'output' => [
				'shape'         => 'DeleteReplicationGroupResult',
				'resultWrapper' => 'DeleteReplicationGroupResult',
			],
			'errors' => [
				[ 'shape' => 'ReplicationGroupNotFoundFault', ],
				[ 'shape' => 'InvalidReplicationGroupStateFault', ],
				[ 'shape' => 'SnapshotAlreadyExistsFault', ],
				[ 'shape' => 'SnapshotFeatureNotSupportedFault', ],
				[ 'shape' => 'SnapshotQuotaExceededFault', ],
				[ 'shape' => 'InvalidParameterValueException', ],
				[ 'shape' => 'InvalidParameterCombinationException', ],
			],
		],
		'DeleteSnapshot'                           => [
			'name'   => 'DeleteSnapshot',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DeleteSnapshotMessage', ],
			'output' => [
				'shape'         => 'DeleteSnapshotResult',
				'resultWrapper' => 'DeleteSnapshotResult',
			],
			'errors' => [
				[ 'shape' => 'SnapshotNotFoundFault', ],
				[ 'shape' => 'InvalidSnapshotStateFault', ],
				[ 'shape' => 'InvalidParameterValueException', ],
				[ 'shape' => 'InvalidParameterCombinationException', ],
			],
		],
		'DescribeCacheClusters'                    => [
			'name'   => 'DescribeCacheClusters',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DescribeCacheClustersMessage', ],
			'output' => [
				'shape'         => 'CacheClusterMessage',
				'resultWrapper' => 'DescribeCacheClustersResult',
			],
			'errors' => [
				[ 'shape' => 'CacheClusterNotFoundFault', ],
				[ 'shape' => 'InvalidParameterValueException', ],
				[ 'shape' => 'InvalidParameterCombinationException', ],
			],
		],
		'DescribeCacheEngineVersions'              => [
			'name'   => 'DescribeCacheEngineVersions',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DescribeCacheEngineVersionsMessage', ],
			'output' => [
				'shape'         => 'CacheEngineVersionMessage',
				'resultWrapper' => 'DescribeCacheEngineVersionsResult',
			],
		],
		'DescribeCacheParameterGroups'             => [
			'name'   => 'DescribeCacheParameterGroups',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DescribeCacheParameterGroupsMessage', ],
			'output' => [
				'shape'         => 'CacheParameterGroupsMessage',
				'resultWrapper' => 'DescribeCacheParameterGroupsResult',
			],
			'errors' => [
				[ 'shape' => 'CacheParameterGroupNotFoundFault', ],
				[ 'shape' => 'InvalidParameterValueException', ],
				[ 'shape' => 'InvalidParameterCombinationException', ],
			],
		],
		'DescribeCacheParameters'                  => [
			'name'   => 'DescribeCacheParameters',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DescribeCacheParametersMessage', ],
			'output' => [
				'shape'         => 'CacheParameterGroupDetails',
				'resultWrapper' => 'DescribeCacheParametersResult',
			],
			'errors' => [
				[ 'shape' => 'CacheParameterGroupNotFoundFault', ],
				[ 'shape' => 'InvalidParameterValueException', ],
				[ 'shape' => 'InvalidParameterCombinationException', ],
			],
		],
		'DescribeCacheSecurityGroups'              => [
			'name'   => 'DescribeCacheSecurityGroups',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DescribeCacheSecurityGroupsMessage', ],
			'output' => [
				'shape'         => 'CacheSecurityGroupMessage',
				'resultWrapper' => 'DescribeCacheSecurityGroupsResult',
			],
			'errors' => [
				[ 'shape' => 'CacheSecurityGroupNotFoundFault', ],
				[ 'shape' => 'InvalidParameterValueException', ],
				[ 'shape' => 'InvalidParameterCombinationException', ],
			],
		],
		'DescribeCacheSubnetGroups'                => [
			'name'   => 'DescribeCacheSubnetGroups',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DescribeCacheSubnetGroupsMessage', ],
			'output' => [
				'shape'         => 'CacheSubnetGroupMessage',
				'resultWrapper' => 'DescribeCacheSubnetGroupsResult',
			],
			'errors' => [ [ 'shape' => 'CacheSubnetGroupNotFoundFault', ], ],
		],
		'DescribeEngineDefaultParameters'          => [
			'name'   => 'DescribeEngineDefaultParameters',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DescribeEngineDefaultParametersMessage', ],
			'output' => [
				'shape'         => 'DescribeEngineDefaultParametersResult',
				'resultWrapper' => 'DescribeEngineDefaultParametersResult',
			],
			'errors' => [
				[ 'shape' => 'InvalidParameterValueException', ],
				[ 'shape' => 'InvalidParameterCombinationException', ],
			],
		],
		'DescribeEvents'                           => [
			'name'   => 'DescribeEvents',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DescribeEventsMessage', ],
			'output' => [
				'shape'         => 'EventsMessage',
				'resultWrapper' => 'DescribeEventsResult',
			],
			'errors' => [
				[ 'shape' => 'InvalidParameterValueException', ],
				[ 'shape' => 'InvalidParameterCombinationException', ],
			],
		],
		'DescribeReplicationGroups'                => [
			'name'   => 'DescribeReplicationGroups',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DescribeReplicationGroupsMessage', ],
			'output' => [
				'shape'         => 'ReplicationGroupMessage',
				'resultWrapper' => 'DescribeReplicationGroupsResult',
			],
			'errors' => [
				[ 'shape' => 'ReplicationGroupNotFoundFault', ],
				[ 'shape' => 'InvalidParameterValueException', ],
				[ 'shape' => 'InvalidParameterCombinationException', ],
			],
		],
		'DescribeReservedCacheNodes'               => [
			'name'   => 'DescribeReservedCacheNodes',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DescribeReservedCacheNodesMessage', ],
			'output' => [
				'shape'         => 'ReservedCacheNodeMessage',
				'resultWrapper' => 'DescribeReservedCacheNodesResult',
			],
			'errors' => [
				[ 'shape' => 'ReservedCacheNodeNotFoundFault', ],
				[ 'shape' => 'InvalidParameterValueException', ],
				[ 'shape' => 'InvalidParameterCombinationException', ],
			],
		],
		'DescribeReservedCacheNodesOfferings'      => [
			'name'   => 'DescribeReservedCacheNodesOfferings',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DescribeReservedCacheNodesOfferingsMessage', ],
			'output' => [
				'shape'         => 'ReservedCacheNodesOfferingMessage',
				'resultWrapper' => 'DescribeReservedCacheNodesOfferingsResult',
			],
			'errors' => [
				[ 'shape' => 'ReservedCacheNodesOfferingNotFoundFault', ],
				[ 'shape' => 'InvalidParameterValueException', ],
				[ 'shape' => 'InvalidParameterCombinationException', ],
			],
		],
		'DescribeServiceUpdates'                   => [
			'name'   => 'DescribeServiceUpdates',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DescribeServiceUpdatesMessage', ],
			'output' => [
				'shape'         => 'ServiceUpdatesMessage',
				'resultWrapper' => 'DescribeServiceUpdatesResult',
			],
			'errors' => [
				[ 'shape' => 'ServiceUpdateNotFoundFault', ],
				[ 'shape' => 'InvalidParameterValueException', ],
				[ 'shape' => 'InvalidParameterCombinationException', ],
			],
		],
		'DescribeSnapshots'                        => [
			'name'   => 'DescribeSnapshots',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DescribeSnapshotsMessage', ],
			'output' => [
				'shape'         => 'DescribeSnapshotsListMessage',
				'resultWrapper' => 'DescribeSnapshotsResult',
			],
			'errors' => [
				[ 'shape' => 'CacheClusterNotFoundFault', ],
				[ 'shape' => 'SnapshotNotFoundFault', ],
				[ 'shape' => 'InvalidParameterValueException', ],
				[ 'shape' => 'InvalidParameterCombinationException', ],
			],
		],
		'DescribeUpdateActions'                    => [
			'name'   => 'DescribeUpdateActions',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DescribeUpdateActionsMessage', ],
			'output' => [
				'shape'         => 'UpdateActionsMessage',
				'resultWrapper' => 'DescribeUpdateActionsResult',
			],
			'errors' => [
				[ 'shape' => 'InvalidParameterValueException', ],
				[ 'shape' => 'InvalidParameterCombinationException', ],
			],
		],
		'IncreaseReplicaCount'                     => [
			'name'   => 'IncreaseReplicaCount',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'IncreaseReplicaCountMessage', ],
			'output' => [
				'shape'         => 'IncreaseReplicaCountResult',
				'resultWrapper' => 'IncreaseReplicaCountResult',
			],
			'errors' => [
				[ 'shape' => 'ReplicationGroupNotFoundFault', ],
				[ 'shape' => 'InvalidReplicationGroupStateFault', ],
				[ 'shape' => 'InvalidCacheClusterStateFault', ],
				[ 'shape' => 'InvalidVPCNetworkStateFault', ],
				[ 'shape' => 'InsufficientCacheClusterCapacityFault', ],
				[ 'shape' => 'ClusterQuotaForCustomerExceededFault', ],
				[ 'shape' => 'NodeGroupsPerReplicationGroupQuotaExceededFault', ],
				[ 'shape' => 'NodeQuotaForCustomerExceededFault', ],
				[ 'shape' => 'NoOperationFault', ],
				[ 'shape' => 'InvalidParameterValueException', ],
				[ 'shape' => 'InvalidParameterCombinationException', ],
			],
		],
		'ListAllowedNodeTypeModifications'         => [
			'name'   => 'ListAllowedNodeTypeModifications',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'ListAllowedNodeTypeModificationsMessage', ],
			'output' => [
				'shape'         => 'AllowedNodeTypeModificationsMessage',
				'resultWrapper' => 'ListAllowedNodeTypeModificationsResult',
			],
			'errors' => [
				[ 'shape' => 'CacheClusterNotFoundFault', ],
				[ 'shape' => 'ReplicationGroupNotFoundFault', ],
				[ 'shape' => 'InvalidParameterCombinationException', ],
				[ 'shape' => 'InvalidParameterValueException', ],
			],
		],
		'ListTagsForResource'                      => [
			'name'   => 'ListTagsForResource',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'ListTagsForResourceMessage', ],
			'output' => [
				'shape'         => 'TagListMessage',
				'resultWrapper' => 'ListTagsForResourceResult',
			],
			'errors' => [
				[ 'shape' => 'CacheClusterNotFoundFault', ],
				[ 'shape' => 'SnapshotNotFoundFault', ],
				[ 'shape' => 'InvalidARNFault', ],
			],
		],
		'ModifyCacheCluster'                       => [
			'name'   => 'ModifyCacheCluster',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'ModifyCacheClusterMessage', ],
			'output' => [
				'shape'         => 'ModifyCacheClusterResult',
				'resultWrapper' => 'ModifyCacheClusterResult',
			],
			'errors' => [
				[ 'shape' => 'InvalidCacheClusterStateFault', ],
				[ 'shape' => 'InvalidCacheSecurityGroupStateFault', ],
				[ 'shape' => 'InsufficientCacheClusterCapacityFault', ],
				[ 'shape' => 'CacheClusterNotFoundFault', ],
				[ 'shape' => 'NodeQuotaForClusterExceededFault', ],
				[ 'shape' => 'NodeQuotaForCustomerExceededFault', ],
				[ 'shape' => 'CacheSecurityGroupNotFoundFault', ],
				[ 'shape' => 'CacheParameterGroupNotFoundFault', ],
				[ 'shape' => 'InvalidVPCNetworkStateFault', ],
				[ 'shape' => 'InvalidParameterValueException', ],
				[ 'shape' => 'InvalidParameterCombinationException', ],
			],
		],
		'ModifyCacheParameterGroup'                => [
			'name'   => 'ModifyCacheParameterGroup',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'ModifyCacheParameterGroupMessage', ],
			'output' => [
				'shape'         => 'CacheParameterGroupNameMessage',
				'resultWrapper' => 'ModifyCacheParameterGroupResult',
			],
			'errors' => [
				[ 'shape' => 'CacheParameterGroupNotFoundFault', ],
				[ 'shape' => 'InvalidCacheParameterGroupStateFault', ],
				[ 'shape' => 'InvalidParameterValueException', ],
				[ 'shape' => 'InvalidParameterCombinationException', ],
			],
		],
		'ModifyCacheSubnetGroup'                   => [
			'name'   => 'ModifyCacheSubnetGroup',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'ModifyCacheSubnetGroupMessage', ],
			'output' => [
				'shape'         => 'ModifyCacheSubnetGroupResult',
				'resultWrapper' => 'ModifyCacheSubnetGroupResult',
			],
			'errors' => [
				[ 'shape' => 'CacheSubnetGroupNotFoundFault', ],
				[ 'shape' => 'CacheSubnetQuotaExceededFault', ],
				[ 'shape' => 'SubnetInUse', ],
				[ 'shape' => 'InvalidSubnet', ],
			],
		],
		'ModifyReplicationGroup'                   => [
			'name'   => 'ModifyReplicationGroup',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'ModifyReplicationGroupMessage', ],
			'output' => [
				'shape'         => 'ModifyReplicationGroupResult',
				'resultWrapper' => 'ModifyReplicationGroupResult',
			],
			'errors' => [
				[ 'shape' => 'ReplicationGroupNotFoundFault', ],
				[ 'shape' => 'InvalidReplicationGroupStateFault', ],
				[ 'shape' => 'InvalidCacheClusterStateFault', ],
				[ 'shape' => 'InvalidCacheSecurityGroupStateFault', ],
				[ 'shape' => 'InsufficientCacheClusterCapacityFault', ],
				[ 'shape' => 'CacheClusterNotFoundFault', ],
				[ 'shape' => 'NodeQuotaForClusterExceededFault', ],
				[ 'shape' => 'NodeQuotaForCustomerExceededFault', ],
				[ 'shape' => 'CacheSecurityGroupNotFoundFault', ],
				[ 'shape' => 'CacheParameterGroupNotFoundFault', ],
				[ 'shape' => 'InvalidVPCNetworkStateFault', ],
				[ 'shape' => 'InvalidParameterValueException', ],
				[ 'shape' => 'InvalidParameterCombinationException', ],
			],
		],
		'ModifyReplicationGroupShardConfiguration' => [
			'name'   => 'ModifyReplicationGroupShardConfiguration',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'ModifyReplicationGroupShardConfigurationMessage', ],
			'output' => [
				'shape'         => 'ModifyReplicationGroupShardConfigurationResult',
				'resultWrapper' => 'ModifyReplicationGroupShardConfigurationResult',
			],
			'errors' => [
				[ 'shape' => 'ReplicationGroupNotFoundFault', ],
				[ 'shape' => 'InvalidReplicationGroupStateFault', ],
				[ 'shape' => 'InvalidCacheClusterStateFault', ],
				[ 'shape' => 'InvalidVPCNetworkStateFault', ],
				[ 'shape' => 'InsufficientCacheClusterCapacityFault', ],
				[ 'shape' => 'NodeGroupsPerReplicationGroupQuotaExceededFault', ],
				[ 'shape' => 'NodeQuotaForCustomerExceededFault', ],
				[ 'shape' => 'InvalidParameterValueException', ],
				[ 'shape' => 'InvalidParameterCombinationException', ],
			],
		],
		'PurchaseReservedCacheNodesOffering'       => [
			'name'   => 'PurchaseReservedCacheNodesOffering',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'PurchaseReservedCacheNodesOfferingMessage', ],
			'output' => [
				'shape'         => 'PurchaseReservedCacheNodesOfferingResult',
				'resultWrapper' => 'PurchaseReservedCacheNodesOfferingResult',
			],
			'errors' => [
				[ 'shape' => 'ReservedCacheNodesOfferingNotFoundFault', ],
				[ 'shape' => 'ReservedCacheNodeAlreadyExistsFault', ],
				[ 'shape' => 'ReservedCacheNodeQuotaExceededFault', ],
				[ 'shape' => 'InvalidParameterValueException', ],
				[ 'shape' => 'InvalidParameterCombinationException', ],
			],
		],
		'RebootCacheCluster'                       => [
			'name'   => 'RebootCacheCluster',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'RebootCacheClusterMessage', ],
			'output' => [
				'shape'         => 'RebootCacheClusterResult',
				'resultWrapper' => 'RebootCacheClusterResult',
			],
			'errors' => [
				[ 'shape' => 'InvalidCacheClusterStateFault', ],
				[ 'shape' => 'CacheClusterNotFoundFault', ],
			],
		],
		'RemoveTagsFromResource'                   => [
			'name'   => 'RemoveTagsFromResource',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'RemoveTagsFromResourceMessage', ],
			'output' => [
				'shape'         => 'TagListMessage',
				'resultWrapper' => 'RemoveTagsFromResourceResult',
			],
			'errors' => [
				[ 'shape' => 'CacheClusterNotFoundFault', ],
				[ 'shape' => 'SnapshotNotFoundFault', ],
				[ 'shape' => 'InvalidARNFault', ],
				[ 'shape' => 'TagNotFoundFault', ],
			],
		],
		'ResetCacheParameterGroup'                 => [
			'name'   => 'ResetCacheParameterGroup',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'ResetCacheParameterGroupMessage', ],
			'output' => [
				'shape'         => 'CacheParameterGroupNameMessage',
				'resultWrapper' => 'ResetCacheParameterGroupResult',
			],
			'errors' => [
				[ 'shape' => 'InvalidCacheParameterGroupStateFault', ],
				[ 'shape' => 'CacheParameterGroupNotFoundFault', ],
				[ 'shape' => 'InvalidParameterValueException', ],
				[ 'shape' => 'InvalidParameterCombinationException', ],
			],
		],
		'RevokeCacheSecurityGroupIngress'          => [
			'name'   => 'RevokeCacheSecurityGroupIngress',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'RevokeCacheSecurityGroupIngressMessage', ],
			'output' => [
				'shape'         => 'RevokeCacheSecurityGroupIngressResult',
				'resultWrapper' => 'RevokeCacheSecurityGroupIngressResult',
			],
			'errors' => [
				[ 'shape' => 'CacheSecurityGroupNotFoundFault', ],
				[ 'shape' => 'AuthorizationNotFoundFault', ],
				[ 'shape' => 'InvalidCacheSecurityGroupStateFault', ],
				[ 'shape' => 'InvalidParameterValueException', ],
				[ 'shape' => 'InvalidParameterCombinationException', ],
			],
		],
		'TestFailover'                             => [
			'name'   => 'TestFailover',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'TestFailoverMessage', ],
			'output' => [
				'shape'         => 'TestFailoverResult',
				'resultWrapper' => 'TestFailoverResult',
			],
			'errors' => [
				[ 'shape' => 'APICallRateForCustomerExceededFault', ],
				[ 'shape' => 'InvalidCacheClusterStateFault', ],
				[ 'shape' => 'InvalidReplicationGroupStateFault', ],
				[ 'shape' => 'NodeGroupNotFoundFault', ],
				[ 'shape' => 'ReplicationGroupNotFoundFault', ],
				[ 'shape' => 'TestFailoverNotAvailableFault', ],
				[ 'shape' => 'InvalidParameterValueException', ],
				[ 'shape' => 'InvalidParameterCombinationException', ],
			],
		],
	],
	'shapes'     => [
		'APICallRateForCustomerExceededFault'             => [
			'type'      => 'structure',
			'members'   => [],
			'error'     => [
				'code'           => 'APICallRateForCustomerExceeded',
				'httpStatusCode' => 400,
				'senderFault'    => true,
			],
			'exception' => true,
		],
		'AZMode'                                          => [
			'type' => 'string',
			'enum' => [ 'single-az', 'cross-az', ],
		],
		'AddTagsToResourceMessage'                        => [
			'type'     => 'structure',
			'required' => [ 'ResourceName', 'Tags', ],
			'members'  => [
				'ResourceName' => [ 'shape' => 'String', ],
				'Tags'         => [ 'shape' => 'TagList', ],
			],
		],
		'AllowedNodeGroupId'                              => [
			'type'    => 'string',
			'max'     => 4,
			'min'     => 1,
			'pattern' => '\\d+',
		],
		'AllowedNodeTypeModificationsMessage'             => [
			'type'    => 'structure',
			'members' => [ 'ScaleUpModifications' => [ 'shape' => 'NodeTypeList', ], ],
		],
		'AuthorizationAlreadyExistsFault'                 => [
			'type'      => 'structure',
			'members'   => [],
			'error'     => [
				'code'           => 'AuthorizationAlreadyExists',
				'httpStatusCode' => 400,
				'senderFault'    => true,
			],
			'exception' => true,
		],
		'AuthorizationNotFoundFault'                      => [
			'type'      => 'structure',
			'members'   => [],
			'error'     => [
				'code'           => 'AuthorizationNotFound',
				'httpStatusCode' => 404,
				'senderFault'    => true,
			],
			'exception' => true,
		],
		'AuthorizeCacheSecurityGroupIngressMessage'       => [
			'type'     => 'structure',
			'required' => [
				'CacheSecurityGroupName',
				'EC2SecurityGroupName',
				'EC2SecurityGroupOwnerId',
			],
			'members'  => [
				'CacheSecurityGroupName'  => [ 'shape' => 'String', ],
				'EC2SecurityGroupName'    => [ 'shape' => 'String', ],
				'EC2SecurityGroupOwnerId' => [ 'shape' => 'String', ],
			],
		],
		'AuthorizeCacheSecurityGroupIngressResult'        => [
			'type'    => 'structure',
			'members' => [ 'CacheSecurityGroup' => [ 'shape' => 'CacheSecurityGroup', ], ],
		],
		'AutomaticFailoverStatus'                         => [
			'type' => 'string',
			'enum' => [ 'enabled', 'disabled', 'enabling', 'disabling', ],
		],
		'AvailabilityZone'                                => [
			'type'    => 'structure',
			'members' => [ 'Name' => [ 'shape' => 'String', ], ],
			'wrapper' => true,
		],
		'AvailabilityZonesList'                           => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'String',
				'locationName' => 'AvailabilityZone',
			],
		],
		'AwsQueryErrorMessage'                            => [ 'type' => 'string', ],
		'BatchApplyUpdateActionMessage'                   => [
			'type'     => 'structure',
			'required' => [ 'ReplicationGroupIds', 'ServiceUpdateName', ],
			'members'  => [
				'ReplicationGroupIds' => [ 'shape' => 'ReplicationGroupIdList', ],
				'ServiceUpdateName'   => [ 'shape' => 'String', ],
			],
		],
		'BatchStopUpdateActionMessage'                    => [
			'type'     => 'structure',
			'required' => [ 'ReplicationGroupIds', 'ServiceUpdateName', ],
			'members'  => [
				'ReplicationGroupIds' => [ 'shape' => 'ReplicationGroupIdList', ],
				'ServiceUpdateName'   => [ 'shape' => 'String', ],
			],
		],
		'Boolean'                                         => [ 'type' => 'boolean', ],
		'BooleanOptional'                                 => [ 'type' => 'boolean', ],
		'CacheCluster'                                    => [
			'type'    => 'structure',
			'members' => [
				'CacheClusterId'             => [ 'shape' => 'String', ],
				'ConfigurationEndpoint'      => [ 'shape' => 'Endpoint', ],
				'ClientDownloadLandingPage'  => [ 'shape' => 'String', ],
				'CacheNodeType'              => [ 'shape' => 'String', ],
				'Engine'                     => [ 'shape' => 'String', ],
				'EngineVersion'              => [ 'shape' => 'String', ],
				'CacheClusterStatus'         => [ 'shape' => 'String', ],
				'NumCacheNodes'              => [ 'shape' => 'IntegerOptional', ],
				'PreferredAvailabilityZone'  => [ 'shape' => 'String', ],
				'CacheClusterCreateTime'     => [ 'shape' => 'TStamp', ],
				'PreferredMaintenanceWindow' => [ 'shape' => 'String', ],
				'PendingModifiedValues'      => [ 'shape' => 'PendingModifiedValues', ],
				'NotificationConfiguration'  => [ 'shape' => 'NotificationConfiguration', ],
				'CacheSecurityGroups'        => [ 'shape' => 'CacheSecurityGroupMembershipList', ],
				'CacheParameterGroup'        => [ 'shape' => 'CacheParameterGroupStatus', ],
				'CacheSubnetGroupName'       => [ 'shape' => 'String', ],
				'CacheNodes'                 => [ 'shape' => 'CacheNodeList', ],
				'AutoMinorVersionUpgrade'    => [ 'shape' => 'Boolean', ],
				'SecurityGroups'             => [ 'shape' => 'SecurityGroupMembershipList', ],
				'ReplicationGroupId'         => [ 'shape' => 'String', ],
				'SnapshotRetentionLimit'     => [ 'shape' => 'IntegerOptional', ],
				'SnapshotWindow'             => [ 'shape' => 'String', ],
				'AuthTokenEnabled'           => [ 'shape' => 'BooleanOptional', ],
				'TransitEncryptionEnabled'   => [ 'shape' => 'BooleanOptional', ],
				'AtRestEncryptionEnabled'    => [ 'shape' => 'BooleanOptional', ],
			],
			'wrapper' => true,
		],
		'CacheClusterAlreadyExistsFault'                  => [
			'type'      => 'structure',
			'members'   => [],
			'error'     => [
				'code'           => 'CacheClusterAlreadyExists',
				'httpStatusCode' => 400,
				'senderFault'    => true,
			],
			'exception' => true,
		],
		'CacheClusterList'                                => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'CacheCluster',
				'locationName' => 'CacheCluster',
			],
		],
		'CacheClusterMessage'                             => [
			'type'    => 'structure',
			'members' => [
				'Marker'        => [ 'shape' => 'String', ],
				'CacheClusters' => [ 'shape' => 'CacheClusterList', ],
			],
		],
		'CacheClusterNotFoundFault'                       => [
			'type'      => 'structure',
			'members'   => [],
			'error'     => [
				'code'           => 'CacheClusterNotFound',
				'httpStatusCode' => 404,
				'senderFault'    => true,
			],
			'exception' => true,
		],
		'CacheEngineVersion'                              => [
			'type'    => 'structure',
			'members' => [
				'Engine'                        => [ 'shape' => 'String', ],
				'EngineVersion'                 => [ 'shape' => 'String', ],
				'CacheParameterGroupFamily'     => [ 'shape' => 'String', ],
				'CacheEngineDescription'        => [ 'shape' => 'String', ],
				'CacheEngineVersionDescription' => [ 'shape' => 'String', ],
			],
		],
		'CacheEngineVersionList'                          => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'CacheEngineVersion',
				'locationName' => 'CacheEngineVersion',
			],
		],
		'CacheEngineVersionMessage'                       => [
			'type'    => 'structure',
			'members' => [
				'Marker'              => [ 'shape' => 'String', ],
				'CacheEngineVersions' => [ 'shape' => 'CacheEngineVersionList', ],
			],
		],
		'CacheNode'                                       => [
			'type'    => 'structure',
			'members' => [
				'CacheNodeId'              => [ 'shape' => 'String', ],
				'CacheNodeStatus'          => [ 'shape' => 'String', ],
				'CacheNodeCreateTime'      => [ 'shape' => 'TStamp', ],
				'Endpoint'                 => [ 'shape' => 'Endpoint', ],
				'ParameterGroupStatus'     => [ 'shape' => 'String', ],
				'SourceCacheNodeId'        => [ 'shape' => 'String', ],
				'CustomerAvailabilityZone' => [ 'shape' => 'String', ],
			],
		],
		'CacheNodeIdsList'                                => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'String',
				'locationName' => 'CacheNodeId',
			],
		],
		'CacheNodeList'                                   => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'CacheNode',
				'locationName' => 'CacheNode',
			],
		],
		'CacheNodeTypeSpecificParameter'                  => [
			'type'    => 'structure',
			'members' => [
				'ParameterName'               => [ 'shape' => 'String', ],
				'Description'                 => [ 'shape' => 'String', ],
				'Source'                      => [ 'shape' => 'String', ],
				'DataType'                    => [ 'shape' => 'String', ],
				'AllowedValues'               => [ 'shape' => 'String', ],
				'IsModifiable'                => [ 'shape' => 'Boolean', ],
				'MinimumEngineVersion'        => [ 'shape' => 'String', ],
				'CacheNodeTypeSpecificValues' => [ 'shape' => 'CacheNodeTypeSpecificValueList', ],
				'ChangeType'                  => [ 'shape' => 'ChangeType', ],
			],
		],
		'CacheNodeTypeSpecificParametersList'             => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'CacheNodeTypeSpecificParameter',
				'locationName' => 'CacheNodeTypeSpecificParameter',
			],
		],
		'CacheNodeTypeSpecificValue'                      => [
			'type'    => 'structure',
			'members' => [
				'CacheNodeType' => [ 'shape' => 'String', ],
				'Value'         => [ 'shape' => 'String', ],
			],
		],
		'CacheNodeTypeSpecificValueList'                  => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'CacheNodeTypeSpecificValue',
				'locationName' => 'CacheNodeTypeSpecificValue',
			],
		],
		'CacheParameterGroup'                             => [
			'type'    => 'structure',
			'members' => [
				'CacheParameterGroupName'   => [ 'shape' => 'String', ],
				'CacheParameterGroupFamily' => [ 'shape' => 'String', ],
				'Description'               => [ 'shape' => 'String', ],
			],
			'wrapper' => true,
		],
		'CacheParameterGroupAlreadyExistsFault'           => [
			'type'      => 'structure',
			'members'   => [],
			'error'     => [
				'code'           => 'CacheParameterGroupAlreadyExists',
				'httpStatusCode' => 400,
				'senderFault'    => true,
			],
			'exception' => true,
		],
		'CacheParameterGroupDetails'                      => [
			'type'    => 'structure',
			'members' => [
				'Marker'                          => [ 'shape' => 'String', ],
				'Parameters'                      => [ 'shape' => 'ParametersList', ],
				'CacheNodeTypeSpecificParameters' => [ 'shape' => 'CacheNodeTypeSpecificParametersList', ],
			],
		],
		'CacheParameterGroupList'                         => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'CacheParameterGroup',
				'locationName' => 'CacheParameterGroup',
			],
		],
		'CacheParameterGroupNameMessage'                  => [
			'type'    => 'structure',
			'members' => [ 'CacheParameterGroupName' => [ 'shape' => 'String', ], ],
		],
		'CacheParameterGroupNotFoundFault'                => [
			'type'      => 'structure',
			'members'   => [],
			'error'     => [
				'code'           => 'CacheParameterGroupNotFound',
				'httpStatusCode' => 404,
				'senderFault'    => true,
			],
			'exception' => true,
		],
		'CacheParameterGroupQuotaExceededFault'           => [
			'type'      => 'structure',
			'members'   => [],
			'error'     => [
				'code'           => 'CacheParameterGroupQuotaExceeded',
				'httpStatusCode' => 400,
				'senderFault'    => true,
			],
			'exception' => true,
		],
		'CacheParameterGroupStatus'                       => [
			'type'    => 'structure',
			'members' => [
				'CacheParameterGroupName' => [ 'shape' => 'String', ],
				'ParameterApplyStatus'    => [ 'shape' => 'String', ],
				'CacheNodeIdsToReboot'    => [ 'shape' => 'CacheNodeIdsList', ],
			],
		],
		'CacheParameterGroupsMessage'                     => [
			'type'    => 'structure',
			'members' => [
				'Marker'               => [ 'shape' => 'String', ],
				'CacheParameterGroups' => [ 'shape' => 'CacheParameterGroupList', ],
			],
		],
		'CacheSecurityGroup'                              => [
			'type'    => 'structure',
			'members' => [
				'OwnerId'                => [ 'shape' => 'String', ],
				'CacheSecurityGroupName' => [ 'shape' => 'String', ],
				'Description'            => [ 'shape' => 'String', ],
				'EC2SecurityGroups'      => [ 'shape' => 'EC2SecurityGroupList', ],
			],
			'wrapper' => true,
		],
		'CacheSecurityGroupAlreadyExistsFault'            => [
			'type'      => 'structure',
			'members'   => [],
			'error'     => [
				'code'           => 'CacheSecurityGroupAlreadyExists',
				'httpStatusCode' => 400,
				'senderFault'    => true,
			],
			'exception' => true,
		],
		'CacheSecurityGroupMembership'                    => [
			'type'    => 'structure',
			'members' => [
				'CacheSecurityGroupName' => [ 'shape' => 'String', ],
				'Status'                 => [ 'shape' => 'String', ],
			],
		],
		'CacheSecurityGroupMembershipList'                => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'CacheSecurityGroupMembership',
				'locationName' => 'CacheSecurityGroup',
			],
		],
		'CacheSecurityGroupMessage'                       => [
			'type'    => 'structure',
			'members' => [
				'Marker'              => [ 'shape' => 'String', ],
				'CacheSecurityGroups' => [ 'shape' => 'CacheSecurityGroups', ],
			],
		],
		'CacheSecurityGroupNameList'                      => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'String',
				'locationName' => 'CacheSecurityGroupName',
			],
		],
		'CacheSecurityGroupNotFoundFault'                 => [
			'type'      => 'structure',
			'members'   => [],
			'error'     => [
				'code'           => 'CacheSecurityGroupNotFound',
				'httpStatusCode' => 404,
				'senderFault'    => true,
			],
			'exception' => true,
		],
		'CacheSecurityGroupQuotaExceededFault'            => [
			'type'      => 'structure',
			'members'   => [],
			'error'     => [
				'code'           => 'QuotaExceeded.CacheSecurityGroup',
				'httpStatusCode' => 400,
				'senderFault'    => true,
			],
			'exception' => true,
		],
		'CacheSecurityGroups'                             => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'CacheSecurityGroup',
				'locationName' => 'CacheSecurityGroup',
			],
		],
		'CacheSubnetGroup'                                => [
			'type'    => 'structure',
			'members' => [
				'CacheSubnetGroupName'        => [ 'shape' => 'String', ],
				'CacheSubnetGroupDescription' => [ 'shape' => 'String', ],
				'VpcId'                       => [ 'shape' => 'String', ],
				'Subnets'                     => [ 'shape' => 'SubnetList', ],
			],
			'wrapper' => true,
		],
		'CacheSubnetGroupAlreadyExistsFault'              => [
			'type'      => 'structure',
			'members'   => [],
			'error'     => [
				'code'           => 'CacheSubnetGroupAlreadyExists',
				'httpStatusCode' => 400,
				'senderFault'    => true,
			],
			'exception' => true,
		],
		'CacheSubnetGroupInUse'                           => [
			'type'      => 'structure',
			'members'   => [],
			'error'     => [
				'code'           => 'CacheSubnetGroupInUse',
				'httpStatusCode' => 400,
				'senderFault'    => true,
			],
			'exception' => true,
		],
		'CacheSubnetGroupMessage'                         => [
			'type'    => 'structure',
			'members' => [
				'Marker'            => [ 'shape' => 'String', ],
				'CacheSubnetGroups' => [ 'shape' => 'CacheSubnetGroups', ],
			],
		],
		'CacheSubnetGroupNotFoundFault'                   => [
			'type'      => 'structure',
			'members'   => [],
			'error'     => [
				'code'           => 'CacheSubnetGroupNotFoundFault',
				'httpStatusCode' => 400,
				'senderFault'    => true,
			],
			'exception' => true,
		],
		'CacheSubnetGroupQuotaExceededFault'              => [
			'type'      => 'structure',
			'members'   => [],
			'error'     => [
				'code'           => 'CacheSubnetGroupQuotaExceeded',
				'httpStatusCode' => 400,
				'senderFault'    => true,
			],
			'exception' => true,
		],
		'CacheSubnetGroups'                               => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'CacheSubnetGroup',
				'locationName' => 'CacheSubnetGroup',
			],
		],
		'CacheSubnetQuotaExceededFault'                   => [
			'type'      => 'structure',
			'members'   => [],
			'error'     => [
				'code'           => 'CacheSubnetQuotaExceededFault',
				'httpStatusCode' => 400,
				'senderFault'    => true,
			],
			'exception' => true,
		],
		'ChangeType'                                      => [
			'type' => 'string',
			'enum' => [ 'immediate', 'requires-reboot', ],
		],
		'ClusterIdList'                                   => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'String',
				'locationName' => 'ClusterId',
			],
		],
		'ClusterQuotaForCustomerExceededFault'            => [
			'type'      => 'structure',
			'members'   => [],
			'error'     => [
				'code'           => 'ClusterQuotaForCustomerExceeded',
				'httpStatusCode' => 400,
				'senderFault'    => true,
			],
			'exception' => true,
		],
		'ConfigureShard'                                  => [
			'type'     => 'structure',
			'required' => [ 'NodeGroupId', 'NewReplicaCount', ],
			'members'  => [
				'NodeGroupId'                => [ 'shape' => 'AllowedNodeGroupId', ],
				'NewReplicaCount'            => [ 'shape' => 'Integer', ],
				'PreferredAvailabilityZones' => [ 'shape' => 'PreferredAvailabilityZoneList', ],
			],
		],
		'CopySnapshotMessage'                             => [
			'type'     => 'structure',
			'required' => [ 'SourceSnapshotName', 'TargetSnapshotName', ],
			'members'  => [
				'SourceSnapshotName' => [ 'shape' => 'String', ],
				'TargetSnapshotName' => [ 'shape' => 'String', ],
				'TargetBucket'       => [ 'shape' => 'String', ],
			],
		],
		'CopySnapshotResult'                              => [
			'type'    => 'structure',
			'members' => [ 'Snapshot' => [ 'shape' => 'Snapshot', ], ],
		],
		'CreateCacheClusterMessage'                       => [
			'type'     => 'structure',
			'required' => [ 'CacheClusterId', ],
			'members'  => [
				'CacheClusterId'             => [ 'shape' => 'String', ],
				'ReplicationGroupId'         => [ 'shape' => 'String', ],
				'AZMode'                     => [ 'shape' => 'AZMode', ],
				'PreferredAvailabilityZone'  => [ 'shape' => 'String', ],
				'PreferredAvailabilityZones' => [ 'shape' => 'PreferredAvailabilityZoneList', ],
				'NumCacheNodes'              => [ 'shape' => 'IntegerOptional', ],
				'CacheNodeType'              => [ 'shape' => 'String', ],
				'Engine'                     => [ 'shape' => 'String', ],
				'EngineVersion'              => [ 'shape' => 'String', ],
				'CacheParameterGroupName'    => [ 'shape' => 'String', ],
				'CacheSubnetGroupName'       => [ 'shape' => 'String', ],
				'CacheSecurityGroupNames'    => [ 'shape' => 'CacheSecurityGroupNameList', ],
				'SecurityGroupIds'           => [ 'shape' => 'SecurityGroupIdsList', ],
				'Tags'                       => [ 'shape' => 'TagList', ],
				'SnapshotArns'               => [ 'shape' => 'SnapshotArnsList', ],
				'SnapshotName'               => [ 'shape' => 'String', ],
				'PreferredMaintenanceWindow' => [ 'shape' => 'String', ],
				'Port'                       => [ 'shape' => 'IntegerOptional', ],
				'NotificationTopicArn'       => [ 'shape' => 'String', ],
				'AutoMinorVersionUpgrade'    => [ 'shape' => 'BooleanOptional', ],
				'SnapshotRetentionLimit'     => [ 'shape' => 'IntegerOptional', ],
				'SnapshotWindow'             => [ 'shape' => 'String', ],
				'AuthToken'                  => [ 'shape' => 'String', ],
			],
		],
		'CreateCacheClusterResult'                        => [
			'type'    => 'structure',
			'members' => [ 'CacheCluster' => [ 'shape' => 'CacheCluster', ], ],
		],
		'CreateCacheParameterGroupMessage'                => [
			'type'     => 'structure',
			'required' => [
				'CacheParameterGroupName',
				'CacheParameterGroupFamily',
				'Description',
			],
			'members'  => [
				'CacheParameterGroupName'   => [ 'shape' => 'String', ],
				'CacheParameterGroupFamily' => [ 'shape' => 'String', ],
				'Description'               => [ 'shape' => 'String', ],
			],
		],
		'CreateCacheParameterGroupResult'                 => [
			'type'    => 'structure',
			'members' => [ 'CacheParameterGroup' => [ 'shape' => 'CacheParameterGroup', ], ],
		],
		'CreateCacheSecurityGroupMessage'                 => [
			'type'     => 'structure',
			'required' => [ 'CacheSecurityGroupName', 'Description', ],
			'members'  => [
				'CacheSecurityGroupName' => [ 'shape' => 'String', ],
				'Description'            => [ 'shape' => 'String', ],
			],
		],
		'CreateCacheSecurityGroupResult'                  => [
			'type'    => 'structure',
			'members' => [ 'CacheSecurityGroup' => [ 'shape' => 'CacheSecurityGroup', ], ],
		],
		'CreateCacheSubnetGroupMessage'                   => [
			'type'     => 'structure',
			'required' => [
				'CacheSubnetGroupName',
				'CacheSubnetGroupDescription',
				'SubnetIds',
			],
			'members'  => [
				'CacheSubnetGroupName'        => [ 'shape' => 'String', ],
				'CacheSubnetGroupDescription' => [ 'shape' => 'String', ],
				'SubnetIds'                   => [ 'shape' => 'SubnetIdentifierList', ],
			],
		],
		'CreateCacheSubnetGroupResult'                    => [
			'type'    => 'structure',
			'members' => [ 'CacheSubnetGroup' => [ 'shape' => 'CacheSubnetGroup', ], ],
		],
		'CreateReplicationGroupMessage'                   => [
			'type'     => 'structure',
			'required' => [ 'ReplicationGroupId', 'ReplicationGroupDescription', ],
			'members'  => [
				'ReplicationGroupId'          => [ 'shape' => 'String', ],
				'ReplicationGroupDescription' => [ 'shape' => 'String', ],
				'PrimaryClusterId'            => [ 'shape' => 'String', ],
				'AutomaticFailoverEnabled'    => [ 'shape' => 'BooleanOptional', ],
				'NumCacheClusters'            => [ 'shape' => 'IntegerOptional', ],
				'PreferredCacheClusterAZs'    => [ 'shape' => 'AvailabilityZonesList', ],
				'NumNodeGroups'               => [ 'shape' => 'IntegerOptional', ],
				'ReplicasPerNodeGroup'        => [ 'shape' => 'IntegerOptional', ],
				'NodeGroupConfiguration'      => [ 'shape' => 'NodeGroupConfigurationList', ],
				'CacheNodeType'               => [ 'shape' => 'String', ],
				'Engine'                      => [ 'shape' => 'String', ],
				'EngineVersion'               => [ 'shape' => 'String', ],
				'CacheParameterGroupName'     => [ 'shape' => 'String', ],
				'CacheSubnetGroupName'        => [ 'shape' => 'String', ],
				'CacheSecurityGroupNames'     => [ 'shape' => 'CacheSecurityGroupNameList', ],
				'SecurityGroupIds'            => [ 'shape' => 'SecurityGroupIdsList', ],
				'Tags'                        => [ 'shape' => 'TagList', ],
				'SnapshotArns'                => [ 'shape' => 'SnapshotArnsList', ],
				'SnapshotName'                => [ 'shape' => 'String', ],
				'PreferredMaintenanceWindow'  => [ 'shape' => 'String', ],
				'Port'                        => [ 'shape' => 'IntegerOptional', ],
				'NotificationTopicArn'        => [ 'shape' => 'String', ],
				'AutoMinorVersionUpgrade'     => [ 'shape' => 'BooleanOptional', ],
				'SnapshotRetentionLimit'      => [ 'shape' => 'IntegerOptional', ],
				'SnapshotWindow'              => [ 'shape' => 'String', ],
				'AuthToken'                   => [ 'shape' => 'String', ],
				'TransitEncryptionEnabled'    => [ 'shape' => 'BooleanOptional', ],
				'AtRestEncryptionEnabled'     => [ 'shape' => 'BooleanOptional', ],
			],
		],
		'CreateReplicationGroupResult'                    => [
			'type'    => 'structure',
			'members' => [ 'ReplicationGroup' => [ 'shape' => 'ReplicationGroup', ], ],
		],
		'CreateSnapshotMessage'                           => [
			'type'     => 'structure',
			'required' => [ 'SnapshotName', ],
			'members'  => [
				'ReplicationGroupId' => [ 'shape' => 'String', ],
				'CacheClusterId'     => [ 'shape' => 'String', ],
				'SnapshotName'       => [ 'shape' => 'String', ],
			],
		],
		'CreateSnapshotResult'                            => [
			'type'    => 'structure',
			'members' => [ 'Snapshot' => [ 'shape' => 'Snapshot', ], ],
		],
		'DecreaseReplicaCountMessage'                     => [
			'type'     => 'structure',
			'required' => [ 'ReplicationGroupId', 'ApplyImmediately', ],
			'members'  => [
				'ReplicationGroupId'   => [ 'shape' => 'String', ],
				'NewReplicaCount'      => [ 'shape' => 'IntegerOptional', ],
				'ReplicaConfiguration' => [ 'shape' => 'ReplicaConfigurationList', ],
				'ReplicasToRemove'     => [ 'shape' => 'RemoveReplicasList', ],
				'ApplyImmediately'     => [ 'shape' => 'Boolean', ],
			],
		],
		'DecreaseReplicaCountResult'                      => [
			'type'    => 'structure',
			'members' => [ 'ReplicationGroup' => [ 'shape' => 'ReplicationGroup', ], ],
		],
		'DeleteCacheClusterMessage'                       => [
			'type'     => 'structure',
			'required' => [ 'CacheClusterId', ],
			'members'  => [
				'CacheClusterId'          => [ 'shape' => 'String', ],
				'FinalSnapshotIdentifier' => [ 'shape' => 'String', ],
			],
		],
		'DeleteCacheClusterResult'                        => [
			'type'    => 'structure',
			'members' => [ 'CacheCluster' => [ 'shape' => 'CacheCluster', ], ],
		],
		'DeleteCacheParameterGroupMessage'                => [
			'type'     => 'structure',
			'required' => [ 'CacheParameterGroupName', ],
			'members'  => [ 'CacheParameterGroupName' => [ 'shape' => 'String', ], ],
		],
		'DeleteCacheSecurityGroupMessage'                 => [
			'type'     => 'structure',
			'required' => [ 'CacheSecurityGroupName', ],
			'members'  => [ 'CacheSecurityGroupName' => [ 'shape' => 'String', ], ],
		],
		'DeleteCacheSubnetGroupMessage'                   => [
			'type'     => 'structure',
			'required' => [ 'CacheSubnetGroupName', ],
			'members'  => [ 'CacheSubnetGroupName' => [ 'shape' => 'String', ], ],
		],
		'DeleteReplicationGroupMessage'                   => [
			'type'     => 'structure',
			'required' => [ 'ReplicationGroupId', ],
			'members'  => [
				'ReplicationGroupId'      => [ 'shape' => 'String', ],
				'RetainPrimaryCluster'    => [ 'shape' => 'BooleanOptional', ],
				'FinalSnapshotIdentifier' => [ 'shape' => 'String', ],
			],
		],
		'DeleteReplicationGroupResult'                    => [
			'type'    => 'structure',
			'members' => [ 'ReplicationGroup' => [ 'shape' => 'ReplicationGroup', ], ],
		],
		'DeleteSnapshotMessage'                           => [
			'type'     => 'structure',
			'required' => [ 'SnapshotName', ],
			'members'  => [ 'SnapshotName' => [ 'shape' => 'String', ], ],
		],
		'DeleteSnapshotResult'                            => [
			'type'    => 'structure',
			'members' => [ 'Snapshot' => [ 'shape' => 'Snapshot', ], ],
		],
		'DescribeCacheClustersMessage'                    => [
			'type'    => 'structure',
			'members' => [
				'CacheClusterId'                          => [ 'shape' => 'String', ],
				'MaxRecords'                              => [ 'shape' => 'IntegerOptional', ],
				'Marker'                                  => [ 'shape' => 'String', ],
				'ShowCacheNodeInfo'                       => [ 'shape' => 'BooleanOptional', ],
				'ShowCacheClustersNotInReplicationGroups' => [ 'shape' => 'BooleanOptional', ],
			],
		],
		'DescribeCacheEngineVersionsMessage'              => [
			'type'    => 'structure',
			'members' => [
				'Engine'                    => [ 'shape' => 'String', ],
				'EngineVersion'             => [ 'shape' => 'String', ],
				'CacheParameterGroupFamily' => [ 'shape' => 'String', ],
				'MaxRecords'                => [ 'shape' => 'IntegerOptional', ],
				'Marker'                    => [ 'shape' => 'String', ],
				'DefaultOnly'               => [ 'shape' => 'Boolean', ],
			],
		],
		'DescribeCacheParameterGroupsMessage'             => [
			'type'    => 'structure',
			'members' => [
				'CacheParameterGroupName' => [ 'shape' => 'String', ],
				'MaxRecords'              => [ 'shape' => 'IntegerOptional', ],
				'Marker'                  => [ 'shape' => 'String', ],
			],
		],
		'DescribeCacheParametersMessage'                  => [
			'type'     => 'structure',
			'required' => [ 'CacheParameterGroupName', ],
			'members'  => [
				'CacheParameterGroupName' => [ 'shape' => 'String', ],
				'Source'                  => [ 'shape' => 'String', ],
				'MaxRecords'              => [ 'shape' => 'IntegerOptional', ],
				'Marker'                  => [ 'shape' => 'String', ],
			],
		],
		'DescribeCacheSecurityGroupsMessage'              => [
			'type'    => 'structure',
			'members' => [
				'CacheSecurityGroupName' => [ 'shape' => 'String', ],
				'MaxRecords'             => [ 'shape' => 'IntegerOptional', ],
				'Marker'                 => [ 'shape' => 'String', ],
			],
		],
		'DescribeCacheSubnetGroupsMessage'                => [
			'type'    => 'structure',
			'members' => [
				'CacheSubnetGroupName' => [ 'shape' => 'String', ],
				'MaxRecords'           => [ 'shape' => 'IntegerOptional', ],
				'Marker'               => [ 'shape' => 'String', ],
			],
		],
		'DescribeEngineDefaultParametersMessage'          => [
			'type'     => 'structure',
			'required' => [ 'CacheParameterGroupFamily', ],
			'members'  => [
				'CacheParameterGroupFamily' => [ 'shape' => 'String', ],
				'MaxRecords'                => [ 'shape' => 'IntegerOptional', ],
				'Marker'                    => [ 'shape' => 'String', ],
			],
		],
		'DescribeEngineDefaultParametersResult'           => [
			'type'    => 'structure',
			'members' => [ 'EngineDefaults' => [ 'shape' => 'EngineDefaults', ], ],
		],
		'DescribeEventsMessage'                           => [
			'type'    => 'structure',
			'members' => [
				'SourceIdentifier' => [ 'shape' => 'String', ],
				'SourceType'       => [ 'shape' => 'SourceType', ],
				'StartTime'        => [ 'shape' => 'TStamp', ],
				'EndTime'          => [ 'shape' => 'TStamp', ],
				'Duration'         => [ 'shape' => 'IntegerOptional', ],
				'MaxRecords'       => [ 'shape' => 'IntegerOptional', ],
				'Marker'           => [ 'shape' => 'String', ],
			],
		],
		'DescribeReplicationGroupsMessage'                => [
			'type'    => 'structure',
			'members' => [
				'ReplicationGroupId' => [ 'shape' => 'String', ],
				'MaxRecords'         => [ 'shape' => 'IntegerOptional', ],
				'Marker'             => [ 'shape' => 'String', ],
			],
		],
		'DescribeReservedCacheNodesMessage'               => [
			'type'    => 'structure',
			'members' => [
				'ReservedCacheNodeId'          => [ 'shape' => 'String', ],
				'ReservedCacheNodesOfferingId' => [ 'shape' => 'String', ],
				'CacheNodeType'                => [ 'shape' => 'String', ],
				'Duration'                     => [ 'shape' => 'String', ],
				'ProductDescription'           => [ 'shape' => 'String', ],
				'OfferingType'                 => [ 'shape' => 'String', ],
				'MaxRecords'                   => [ 'shape' => 'IntegerOptional', ],
				'Marker'                       => [ 'shape' => 'String', ],
			],
		],
		'DescribeReservedCacheNodesOfferingsMessage'      => [
			'type'    => 'structure',
			'members' => [
				'ReservedCacheNodesOfferingId' => [ 'shape' => 'String', ],
				'CacheNodeType'                => [ 'shape' => 'String', ],
				'Duration'                     => [ 'shape' => 'String', ],
				'ProductDescription'           => [ 'shape' => 'String', ],
				'OfferingType'                 => [ 'shape' => 'String', ],
				'MaxRecords'                   => [ 'shape' => 'IntegerOptional', ],
				'Marker'                       => [ 'shape' => 'String', ],
			],
		],
		'DescribeServiceUpdatesMessage'                   => [
			'type'    => 'structure',
			'members' => [
				'ServiceUpdateName'   => [ 'shape' => 'String', ],
				'ServiceUpdateStatus' => [ 'shape' => 'ServiceUpdateStatusList', ],
				'MaxRecords'          => [ 'shape' => 'IntegerOptional', ],
				'Marker'              => [ 'shape' => 'String', ],
			],
		],
		'DescribeSnapshotsListMessage'                    => [
			'type'    => 'structure',
			'members' => [
				'Marker'    => [ 'shape' => 'String', ],
				'Snapshots' => [ 'shape' => 'SnapshotList', ],
			],
		],
		'DescribeSnapshotsMessage'                        => [
			'type'    => 'structure',
			'members' => [
				'ReplicationGroupId'  => [ 'shape' => 'String', ],
				'CacheClusterId'      => [ 'shape' => 'String', ],
				'SnapshotName'        => [ 'shape' => 'String', ],
				'SnapshotSource'      => [ 'shape' => 'String', ],
				'Marker'              => [ 'shape' => 'String', ],
				'MaxRecords'          => [ 'shape' => 'IntegerOptional', ],
				'ShowNodeGroupConfig' => [ 'shape' => 'BooleanOptional', ],
			],
		],
		'DescribeUpdateActionsMessage'                    => [
			'type'    => 'structure',
			'members' => [
				'ServiceUpdateName'         => [ 'shape' => 'String', ],
				'ReplicationGroupIds'       => [ 'shape' => 'ReplicationGroupIdList', ],
				'ServiceUpdateStatus'       => [ 'shape' => 'ServiceUpdateStatusList', ],
				'ServiceUpdateTimeRange'    => [ 'shape' => 'TimeRangeFilter', ],
				'UpdateActionStatus'        => [ 'shape' => 'UpdateActionStatusList', ],
				'ShowNodeLevelUpdateStatus' => [ 'shape' => 'BooleanOptional', ],
				'MaxRecords'                => [ 'shape' => 'IntegerOptional', ],
				'Marker'                    => [ 'shape' => 'String', ],
			],
		],
		'Double'                                          => [ 'type' => 'double', ],
		'EC2SecurityGroup'                                => [
			'type'    => 'structure',
			'members' => [
				'Status'                  => [ 'shape' => 'String', ],
				'EC2SecurityGroupName'    => [ 'shape' => 'String', ],
				'EC2SecurityGroupOwnerId' => [ 'shape' => 'String', ],
			],
		],
		'EC2SecurityGroupList'                            => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'EC2SecurityGroup',
				'locationName' => 'EC2SecurityGroup',
			],
		],
		'Endpoint'                                        => [
			'type'    => 'structure',
			'members' => [
				'Address' => [ 'shape' => 'String', ],
				'Port'    => [ 'shape' => 'Integer', ],
			],
		],
		'EngineDefaults'                                  => [
			'type'    => 'structure',
			'members' => [
				'CacheParameterGroupFamily'       => [ 'shape' => 'String', ],
				'Marker'                          => [ 'shape' => 'String', ],
				'Parameters'                      => [ 'shape' => 'ParametersList', ],
				'CacheNodeTypeSpecificParameters' => [ 'shape' => 'CacheNodeTypeSpecificParametersList', ],
			],
			'wrapper' => true,
		],
		'Event'                                           => [
			'type'    => 'structure',
			'members' => [
				'SourceIdentifier' => [ 'shape' => 'String', ],
				'SourceType'       => [ 'shape' => 'SourceType', ],
				'Message'          => [ 'shape' => 'String', ],
				'Date'             => [ 'shape' => 'TStamp', ],
			],
		],
		'EventList'                                       => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'Event',
				'locationName' => 'Event',
			],
		],
		'EventsMessage'                                   => [
			'type'    => 'structure',
			'members' => [
				'Marker' => [ 'shape' => 'String', ],
				'Events' => [ 'shape' => 'EventList', ],
			],
		],
		'IncreaseReplicaCountMessage'                     => [
			'type'     => 'structure',
			'required' => [ 'ReplicationGroupId', 'ApplyImmediately', ],
			'members'  => [
				'ReplicationGroupId'   => [ 'shape' => 'String', ],
				'NewReplicaCount'      => [ 'shape' => 'IntegerOptional', ],
				'ReplicaConfiguration' => [ 'shape' => 'ReplicaConfigurationList', ],
				'ApplyImmediately'     => [ 'shape' => 'Boolean', ],
			],
		],
		'IncreaseReplicaCountResult'                      => [
			'type'    => 'structure',
			'members' => [ 'ReplicationGroup' => [ 'shape' => 'ReplicationGroup', ], ],
		],
		'InsufficientCacheClusterCapacityFault'           => [
			'type'      => 'structure',
			'members'   => [],
			'error'     => [
				'code'           => 'InsufficientCacheClusterCapacity',
				'httpStatusCode' => 400,
				'senderFault'    => true,
			],
			'exception' => true,
		],
		'Integer'                                         => [ 'type' => 'integer', ],
		'IntegerOptional'                                 => [ 'type' => 'integer', ],
		'InvalidARNFault'                                 => [
			'type'      => 'structure',
			'members'   => [],
			'error'     => [
				'code'           => 'InvalidARN',
				'httpStatusCode' => 400,
				'senderFault'    => true,
			],
			'exception' => true,
		],
		'InvalidCacheClusterStateFault'                   => [
			'type'      => 'structure',
			'members'   => [],
			'error'     => [
				'code'           => 'InvalidCacheClusterState',
				'httpStatusCode' => 400,
				'senderFault'    => true,
			],
			'exception' => true,
		],
		'InvalidCacheParameterGroupStateFault'            => [
			'type'      => 'structure',
			'members'   => [],
			'error'     => [
				'code'           => 'InvalidCacheParameterGroupState',
				'httpStatusCode' => 400,
				'senderFault'    => true,
			],
			'exception' => true,
		],
		'InvalidCacheSecurityGroupStateFault'             => [
			'type'      => 'structure',
			'members'   => [],
			'error'     => [
				'code'           => 'InvalidCacheSecurityGroupState',
				'httpStatusCode' => 400,
				'senderFault'    => true,
			],
			'exception' => true,
		],
		'InvalidParameterCombinationException'            => [
			'type'      => 'structure',
			'members'   => [ 'message' => [ 'shape' => 'AwsQueryErrorMessage', ], ],
			'error'     => [
				'code'           => 'InvalidParameterCombination',
				'httpStatusCode' => 400,
				'senderFault'    => true,
			],
			'exception' => true,
			'synthetic' => true,
		],
		'InvalidParameterValueException'                  => [
			'type'      => 'structure',
			'members'   => [ 'message' => [ 'shape' => 'AwsQueryErrorMessage', ], ],
			'error'     => [
				'code'           => 'InvalidParameterValue',
				'httpStatusCode' => 400,
				'senderFault'    => true,
			],
			'exception' => true,
			'synthetic' => true,
		],
		'InvalidReplicationGroupStateFault'               => [
			'type'      => 'structure',
			'members'   => [],
			'error'     => [
				'code'           => 'InvalidReplicationGroupState',
				'httpStatusCode' => 400,
				'senderFault'    => true,
			],
			'exception' => true,
		],
		'InvalidSnapshotStateFault'                       => [
			'type'      => 'structure',
			'members'   => [],
			'error'     => [
				'code'           => 'InvalidSnapshotState',
				'httpStatusCode' => 400,
				'senderFault'    => true,
			],
			'exception' => true,
		],
		'InvalidSubnet'                                   => [
			'type'      => 'structure',
			'members'   => [],
			'error'     => [
				'code'           => 'InvalidSubnet',
				'httpStatusCode' => 400,
				'senderFault'    => true,
			],
			'exception' => true,
		],
		'InvalidVPCNetworkStateFault'                     => [
			'type'      => 'structure',
			'members'   => [],
			'error'     => [
				'code'           => 'InvalidVPCNetworkStateFault',
				'httpStatusCode' => 400,
				'senderFault'    => true,
			],
			'exception' => true,
		],
		'KeyList'                                         => [
			'type'   => 'list',
			'member' => [ 'shape' => 'String', ],
		],
		'ListAllowedNodeTypeModificationsMessage'         => [
			'type'    => 'structure',
			'members' => [
				'CacheClusterId'     => [ 'shape' => 'String', ],
				'ReplicationGroupId' => [ 'shape' => 'String', ],
			],
		],
		'ListTagsForResourceMessage'                      => [
			'type'     => 'structure',
			'required' => [ 'ResourceName', ],
			'members'  => [ 'ResourceName' => [ 'shape' => 'String', ], ],
		],
		'ModifyCacheClusterMessage'                       => [
			'type'     => 'structure',
			'required' => [ 'CacheClusterId', ],
			'members'  => [
				'CacheClusterId'             => [ 'shape' => 'String', ],
				'NumCacheNodes'              => [ 'shape' => 'IntegerOptional', ],
				'CacheNodeIdsToRemove'       => [ 'shape' => 'CacheNodeIdsList', ],
				'AZMode'                     => [ 'shape' => 'AZMode', ],
				'NewAvailabilityZones'       => [ 'shape' => 'PreferredAvailabilityZoneList', ],
				'CacheSecurityGroupNames'    => [ 'shape' => 'CacheSecurityGroupNameList', ],
				'SecurityGroupIds'           => [ 'shape' => 'SecurityGroupIdsList', ],
				'PreferredMaintenanceWindow' => [ 'shape' => 'String', ],
				'NotificationTopicArn'       => [ 'shape' => 'String', ],
				'CacheParameterGroupName'    => [ 'shape' => 'String', ],
				'NotificationTopicStatus'    => [ 'shape' => 'String', ],
				'ApplyImmediately'           => [ 'shape' => 'Boolean', ],
				'EngineVersion'              => [ 'shape' => 'String', ],
				'AutoMinorVersionUpgrade'    => [ 'shape' => 'BooleanOptional', ],
				'SnapshotRetentionLimit'     => [ 'shape' => 'IntegerOptional', ],
				'SnapshotWindow'             => [ 'shape' => 'String', ],
				'CacheNodeType'              => [ 'shape' => 'String', ],
			],
		],
		'ModifyCacheClusterResult'                        => [
			'type'    => 'structure',
			'members' => [ 'CacheCluster' => [ 'shape' => 'CacheCluster', ], ],
		],
		'ModifyCacheParameterGroupMessage'                => [
			'type'     => 'structure',
			'required' => [
				'CacheParameterGroupName',
				'ParameterNameValues',
			],
			'members'  => [
				'CacheParameterGroupName' => [ 'shape' => 'String', ],
				'ParameterNameValues'     => [ 'shape' => 'ParameterNameValueList', ],
			],
		],
		'ModifyCacheSubnetGroupMessage'                   => [
			'type'     => 'structure',
			'required' => [ 'CacheSubnetGroupName', ],
			'members'  => [
				'CacheSubnetGroupName'        => [ 'shape' => 'String', ],
				'CacheSubnetGroupDescription' => [ 'shape' => 'String', ],
				'SubnetIds'                   => [ 'shape' => 'SubnetIdentifierList', ],
			],
		],
		'ModifyCacheSubnetGroupResult'                    => [
			'type'    => 'structure',
			'members' => [ 'CacheSubnetGroup' => [ 'shape' => 'CacheSubnetGroup', ], ],
		],
		'ModifyReplicationGroupMessage'                   => [
			'type'     => 'structure',
			'required' => [ 'ReplicationGroupId', ],
			'members'  => [
				'ReplicationGroupId'          => [ 'shape' => 'String', ],
				'ReplicationGroupDescription' => [ 'shape' => 'String', ],
				'PrimaryClusterId'            => [ 'shape' => 'String', ],
				'SnapshottingClusterId'       => [ 'shape' => 'String', ],
				'AutomaticFailoverEnabled'    => [ 'shape' => 'BooleanOptional', ],
				'CacheSecurityGroupNames'     => [ 'shape' => 'CacheSecurityGroupNameList', ],
				'SecurityGroupIds'            => [ 'shape' => 'SecurityGroupIdsList', ],
				'PreferredMaintenanceWindow'  => [ 'shape' => 'String', ],
				'NotificationTopicArn'        => [ 'shape' => 'String', ],
				'CacheParameterGroupName'     => [ 'shape' => 'String', ],
				'NotificationTopicStatus'     => [ 'shape' => 'String', ],
				'ApplyImmediately'            => [ 'shape' => 'Boolean', ],
				'EngineVersion'               => [ 'shape' => 'String', ],
				'AutoMinorVersionUpgrade'     => [ 'shape' => 'BooleanOptional', ],
				'SnapshotRetentionLimit'      => [ 'shape' => 'IntegerOptional', ],
				'SnapshotWindow'              => [ 'shape' => 'String', ],
				'CacheNodeType'               => [ 'shape' => 'String', ],
				'NodeGroupId'                 => [ 'shape' => 'String', 'deprecated' => true, ],
			],
		],
		'ModifyReplicationGroupResult'                    => [
			'type'    => 'structure',
			'members' => [ 'ReplicationGroup' => [ 'shape' => 'ReplicationGroup', ], ],
		],
		'ModifyReplicationGroupShardConfigurationMessage' => [
			'type'     => 'structure',
			'required' => [
				'ReplicationGroupId',
				'NodeGroupCount',
				'ApplyImmediately',
			],
			'members'  => [
				'ReplicationGroupId'      => [ 'shape' => 'String', ],
				'NodeGroupCount'          => [ 'shape' => 'Integer', ],
				'ApplyImmediately'        => [ 'shape' => 'Boolean', ],
				'ReshardingConfiguration' => [ 'shape' => 'ReshardingConfigurationList', ],
				'NodeGroupsToRemove'      => [ 'shape' => 'NodeGroupsToRemoveList', ],
				'NodeGroupsToRetain'      => [ 'shape' => 'NodeGroupsToRetainList', ],
			],
		],
		'ModifyReplicationGroupShardConfigurationResult'  => [
			'type'    => 'structure',
			'members' => [ 'ReplicationGroup' => [ 'shape' => 'ReplicationGroup', ], ],
		],
		'NoOperationFault'                                => [
			'type'      => 'structure',
			'members'   => [],
			'error'     => [
				'code'           => 'NoOperationFault',
				'httpStatusCode' => 400,
				'senderFault'    => true,
			],
			'exception' => true,
		],
		'NodeGroup'                                       => [
			'type'    => 'structure',
			'members' => [
				'NodeGroupId'      => [ 'shape' => 'String', ],
				'Status'           => [ 'shape' => 'String', ],
				'PrimaryEndpoint'  => [ 'shape' => 'Endpoint', ],
				'ReaderEndpoint'   => [ 'shape' => 'Endpoint', ],
				'Slots'            => [ 'shape' => 'String', ],
				'NodeGroupMembers' => [ 'shape' => 'NodeGroupMemberList', ],
			],
		],
		'NodeGroupConfiguration'                          => [
			'type'    => 'structure',
			'members' => [
				'NodeGroupId'              => [ 'shape' => 'AllowedNodeGroupId', ],
				'Slots'                    => [ 'shape' => 'String', ],
				'ReplicaCount'             => [ 'shape' => 'IntegerOptional', ],
				'PrimaryAvailabilityZone'  => [ 'shape' => 'String', ],
				'ReplicaAvailabilityZones' => [ 'shape' => 'AvailabilityZonesList', ],
			],
		],
		'NodeGroupConfigurationList'                      => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'NodeGroupConfiguration',
				'locationName' => 'NodeGroupConfiguration',
			],
		],
		'NodeGroupList'                                   => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'NodeGroup',
				'locationName' => 'NodeGroup',
			],
		],
		'NodeGroupMember'                                 => [
			'type'    => 'structure',
			'members' => [
				'CacheClusterId'            => [ 'shape' => 'String', ],
				'CacheNodeId'               => [ 'shape' => 'String', ],
				'ReadEndpoint'              => [ 'shape' => 'Endpoint', ],
				'PreferredAvailabilityZone' => [ 'shape' => 'String', ],
				'CurrentRole'               => [ 'shape' => 'String', ],
			],
		],
		'NodeGroupMemberList'                             => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'NodeGroupMember',
				'locationName' => 'NodeGroupMember',
			],
		],
		'NodeGroupMemberUpdateStatus'                     => [
			'type'    => 'structure',
			'members' => [
				'CacheClusterId'               => [ 'shape' => 'String', ],
				'CacheNodeId'                  => [ 'shape' => 'String', ],
				'NodeUpdateStatus'             => [ 'shape' => 'NodeUpdateStatus', ],
				'NodeDeletionDate'             => [ 'shape' => 'TStamp', ],
				'NodeUpdateStartDate'          => [ 'shape' => 'TStamp', ],
				'NodeUpdateEndDate'            => [ 'shape' => 'TStamp', ],
				'NodeUpdateInitiatedBy'        => [ 'shape' => 'NodeUpdateInitiatedBy', ],
				'NodeUpdateInitiatedDate'      => [ 'shape' => 'TStamp', ],
				'NodeUpdateStatusModifiedDate' => [ 'shape' => 'TStamp', ],
			],
		],
		'NodeGroupMemberUpdateStatusList'                 => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'NodeGroupMemberUpdateStatus',
				'locationName' => 'NodeGroupMemberUpdateStatus',
			],
		],
		'NodeGroupNotFoundFault'                          => [
			'type'      => 'structure',
			'members'   => [],
			'error'     => [
				'code'           => 'NodeGroupNotFoundFault',
				'httpStatusCode' => 404,
				'senderFault'    => true,
			],
			'exception' => true,
		],
		'NodeGroupUpdateStatus'                           => [
			'type'    => 'structure',
			'members' => [
				'NodeGroupId'                 => [ 'shape' => 'String', ],
				'NodeGroupMemberUpdateStatus' => [ 'shape' => 'NodeGroupMemberUpdateStatusList', ],
			],
		],
		'NodeGroupUpdateStatusList'                       => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'NodeGroupUpdateStatus',
				'locationName' => 'NodeGroupUpdateStatus',
			],
		],
		'NodeGroupsPerReplicationGroupQuotaExceededFault' => [
			'type'      => 'structure',
			'members'   => [],
			'error'     => [
				'code'           => 'NodeGroupsPerReplicationGroupQuotaExceeded',
				'httpStatusCode' => 400,
				'senderFault'    => true,
			],
			'exception' => true,
		],
		'NodeGroupsToRemoveList'                          => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'AllowedNodeGroupId',
				'locationName' => 'NodeGroupToRemove',
			],
		],
		'NodeGroupsToRetainList'                          => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'AllowedNodeGroupId',
				'locationName' => 'NodeGroupToRetain',
			],
		],
		'NodeQuotaForClusterExceededFault'                => [
			'type'      => 'structure',
			'members'   => [],
			'error'     => [
				'code'           => 'NodeQuotaForClusterExceeded',
				'httpStatusCode' => 400,
				'senderFault'    => true,
			],
			'exception' => true,
		],
		'NodeQuotaForCustomerExceededFault'               => [
			'type'      => 'structure',
			'members'   => [],
			'error'     => [
				'code'           => 'NodeQuotaForCustomerExceeded',
				'httpStatusCode' => 400,
				'senderFault'    => true,
			],
			'exception' => true,
		],
		'NodeSnapshot'                                    => [
			'type'    => 'structure',
			'members' => [
				'CacheClusterId'         => [ 'shape' => 'String', ],
				'NodeGroupId'            => [ 'shape' => 'String', ],
				'CacheNodeId'            => [ 'shape' => 'String', ],
				'NodeGroupConfiguration' => [ 'shape' => 'NodeGroupConfiguration', ],
				'CacheSize'              => [ 'shape' => 'String', ],
				'CacheNodeCreateTime'    => [ 'shape' => 'TStamp', ],
				'SnapshotCreateTime'     => [ 'shape' => 'TStamp', ],
			],
			'wrapper' => true,
		],
		'NodeSnapshotList'                                => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'NodeSnapshot',
				'locationName' => 'NodeSnapshot',
			],
		],
		'NodeTypeList'                                    => [
			'type'   => 'list',
			'member' => [ 'shape' => 'String', ],
		],
		'NodeUpdateInitiatedBy'                           => [
			'type' => 'string',
			'enum' => [ 'system', 'customer', ],
		],
		'NodeUpdateStatus'                                => [
			'type' => 'string',
			'enum' => [
				'not-applied',
				'waiting-to-start',
				'in-progress',
				'stopping',
				'stopped',
				'complete',
			],
		],
		'NotificationConfiguration'                       => [
			'type'    => 'structure',
			'members' => [
				'TopicArn'    => [ 'shape' => 'String', ],
				'TopicStatus' => [ 'shape' => 'String', ],
			],
		],
		'Parameter'                                       => [
			'type'    => 'structure',
			'members' => [
				'ParameterName'        => [ 'shape' => 'String', ],
				'ParameterValue'       => [ 'shape' => 'String', ],
				'Description'          => [ 'shape' => 'String', ],
				'Source'               => [ 'shape' => 'String', ],
				'DataType'             => [ 'shape' => 'String', ],
				'AllowedValues'        => [ 'shape' => 'String', ],
				'IsModifiable'         => [ 'shape' => 'Boolean', ],
				'MinimumEngineVersion' => [ 'shape' => 'String', ],
				'ChangeType'           => [ 'shape' => 'ChangeType', ],
			],
		],
		'ParameterNameValue'                              => [
			'type'    => 'structure',
			'members' => [
				'ParameterName'  => [ 'shape' => 'String', ],
				'ParameterValue' => [ 'shape' => 'String', ],
			],
		],
		'ParameterNameValueList'                          => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'ParameterNameValue',
				'locationName' => 'ParameterNameValue',
			],
		],
		'ParametersList'                                  => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'Parameter',
				'locationName' => 'Parameter',
			],
		],
		'PendingAutomaticFailoverStatus'                  => [
			'type' => 'string',
			'enum' => [ 'enabled', 'disabled', ],
		],
		'PendingModifiedValues'                           => [
			'type'    => 'structure',
			'members' => [
				'NumCacheNodes'        => [ 'shape' => 'IntegerOptional', ],
				'CacheNodeIdsToRemove' => [ 'shape' => 'CacheNodeIdsList', ],
				'EngineVersion'        => [ 'shape' => 'String', ],
				'CacheNodeType'        => [ 'shape' => 'String', ],
			],
		],
		'PreferredAvailabilityZoneList'                   => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'String',
				'locationName' => 'PreferredAvailabilityZone',
			],
		],
		'ProcessedUpdateAction'                           => [
			'type'    => 'structure',
			'members' => [
				'ReplicationGroupId' => [ 'shape' => 'String', ],
				'ServiceUpdateName'  => [ 'shape' => 'String', ],
				'UpdateActionStatus' => [ 'shape' => 'UpdateActionStatus', ],
			],
		],
		'ProcessedUpdateActionList'                       => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'ProcessedUpdateAction',
				'locationName' => 'ProcessedUpdateAction',
			],
		],
		'PurchaseReservedCacheNodesOfferingMessage'       => [
			'type'     => 'structure',
			'required' => [ 'ReservedCacheNodesOfferingId', ],
			'members'  => [
				'ReservedCacheNodesOfferingId' => [ 'shape' => 'String', ],
				'ReservedCacheNodeId'          => [ 'shape' => 'String', ],
				'CacheNodeCount'               => [ 'shape' => 'IntegerOptional', ],
			],
		],
		'PurchaseReservedCacheNodesOfferingResult'        => [
			'type'    => 'structure',
			'members' => [ 'ReservedCacheNode' => [ 'shape' => 'ReservedCacheNode', ], ],
		],
		'RebootCacheClusterMessage'                       => [
			'type'     => 'structure',
			'required' => [
				'CacheClusterId',
				'CacheNodeIdsToReboot',
			],
			'members'  => [
				'CacheClusterId'       => [ 'shape' => 'String', ],
				'CacheNodeIdsToReboot' => [ 'shape' => 'CacheNodeIdsList', ],
			],
		],
		'RebootCacheClusterResult'                        => [
			'type'    => 'structure',
			'members' => [ 'CacheCluster' => [ 'shape' => 'CacheCluster', ], ],
		],
		'RecurringCharge'                                 => [
			'type'    => 'structure',
			'members' => [
				'RecurringChargeAmount'    => [ 'shape' => 'Double', ],
				'RecurringChargeFrequency' => [ 'shape' => 'String', ],
			],
			'wrapper' => true,
		],
		'RecurringChargeList'                             => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'RecurringCharge',
				'locationName' => 'RecurringCharge',
			],
		],
		'RemoveReplicasList'                              => [
			'type'   => 'list',
			'member' => [ 'shape' => 'String', ],
		],
		'RemoveTagsFromResourceMessage'                   => [
			'type'     => 'structure',
			'required' => [ 'ResourceName', 'TagKeys', ],
			'members'  => [
				'ResourceName' => [ 'shape' => 'String', ],
				'TagKeys'      => [ 'shape' => 'KeyList', ],
			],
		],
		'ReplicaConfigurationList'                        => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'ConfigureShard',
				'locationName' => 'ConfigureShard',
			],
		],
		'ReplicationGroup'                                => [
			'type'    => 'structure',
			'members' => [
				'ReplicationGroupId'       => [ 'shape' => 'String', ],
				'Description'              => [ 'shape' => 'String', ],
				'Status'                   => [ 'shape' => 'String', ],
				'PendingModifiedValues'    => [ 'shape' => 'ReplicationGroupPendingModifiedValues', ],
				'MemberClusters'           => [ 'shape' => 'ClusterIdList', ],
				'NodeGroups'               => [ 'shape' => 'NodeGroupList', ],
				'SnapshottingClusterId'    => [ 'shape' => 'String', ],
				'AutomaticFailover'        => [ 'shape' => 'AutomaticFailoverStatus', ],
				'ConfigurationEndpoint'    => [ 'shape' => 'Endpoint', ],
				'SnapshotRetentionLimit'   => [ 'shape' => 'IntegerOptional', ],
				'SnapshotWindow'           => [ 'shape' => 'String', ],
				'ClusterEnabled'           => [ 'shape' => 'BooleanOptional', ],
				'CacheNodeType'            => [ 'shape' => 'String', ],
				'AuthTokenEnabled'         => [ 'shape' => 'BooleanOptional', ],
				'TransitEncryptionEnabled' => [ 'shape' => 'BooleanOptional', ],
				'AtRestEncryptionEnabled'  => [ 'shape' => 'BooleanOptional', ],
			],
			'wrapper' => true,
		],
		'ReplicationGroupAlreadyExistsFault'              => [
			'type'      => 'structure',
			'members'   => [],
			'error'     => [
				'code'           => 'ReplicationGroupAlreadyExists',
				'httpStatusCode' => 400,
				'senderFault'    => true,
			],
			'exception' => true,
		],
		'ReplicationGroupIdList'                          => [
			'type'   => 'list',
			'member' => [ 'shape' => 'String', ],
			'max'    => 20,
		],
		'ReplicationGroupList'                            => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'ReplicationGroup',
				'locationName' => 'ReplicationGroup',
			],
		],
		'ReplicationGroupMessage'                         => [
			'type'    => 'structure',
			'members' => [
				'Marker'            => [ 'shape' => 'String', ],
				'ReplicationGroups' => [ 'shape' => 'ReplicationGroupList', ],
			],
		],
		'ReplicationGroupNotFoundFault'                   => [
			'type'      => 'structure',
			'members'   => [],
			'error'     => [
				'code'           => 'ReplicationGroupNotFoundFault',
				'httpStatusCode' => 404,
				'senderFault'    => true,
			],
			'exception' => true,
		],
		'ReplicationGroupPendingModifiedValues'           => [
			'type'    => 'structure',
			'members' => [
				'PrimaryClusterId'        => [ 'shape' => 'String', ],
				'AutomaticFailoverStatus' => [ 'shape' => 'PendingAutomaticFailoverStatus', ],
				'Resharding'              => [ 'shape' => 'ReshardingStatus', ],
			],
		],
		'ReservedCacheNode'                               => [
			'type'    => 'structure',
			'members' => [
				'ReservedCacheNodeId'          => [ 'shape' => 'String', ],
				'ReservedCacheNodesOfferingId' => [ 'shape' => 'String', ],
				'CacheNodeType'                => [ 'shape' => 'String', ],
				'StartTime'                    => [ 'shape' => 'TStamp', ],
				'Duration'                     => [ 'shape' => 'Integer', ],
				'FixedPrice'                   => [ 'shape' => 'Double', ],
				'UsagePrice'                   => [ 'shape' => 'Double', ],
				'CacheNodeCount'               => [ 'shape' => 'Integer', ],
				'ProductDescription'           => [ 'shape' => 'String', ],
				'OfferingType'                 => [ 'shape' => 'String', ],
				'State'                        => [ 'shape' => 'String', ],
				'RecurringCharges'             => [ 'shape' => 'RecurringChargeList', ],
				'ReservationARN'               => [ 'shape' => 'String', ],
			],
			'wrapper' => true,
		],
		'ReservedCacheNodeAlreadyExistsFault'             => [
			'type'      => 'structure',
			'members'   => [],
			'error'     => [
				'code'           => 'ReservedCacheNodeAlreadyExists',
				'httpStatusCode' => 404,
				'senderFault'    => true,
			],
			'exception' => true,
		],
		'ReservedCacheNodeList'                           => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'ReservedCacheNode',
				'locationName' => 'ReservedCacheNode',
			],
		],
		'ReservedCacheNodeMessage'                        => [
			'type'    => 'structure',
			'members' => [
				'Marker'             => [ 'shape' => 'String', ],
				'ReservedCacheNodes' => [ 'shape' => 'ReservedCacheNodeList', ],
			],
		],
		'ReservedCacheNodeNotFoundFault'                  => [
			'type'      => 'structure',
			'members'   => [],
			'error'     => [
				'code'           => 'ReservedCacheNodeNotFound',
				'httpStatusCode' => 404,
				'senderFault'    => true,
			],
			'exception' => true,
		],
		'ReservedCacheNodeQuotaExceededFault'             => [
			'type'      => 'structure',
			'members'   => [],
			'error'     => [
				'code'           => 'ReservedCacheNodeQuotaExceeded',
				'httpStatusCode' => 400,
				'senderFault'    => true,
			],
			'exception' => true,
		],
		'ReservedCacheNodesOffering'                      => [
			'type'    => 'structure',
			'members' => [
				'ReservedCacheNodesOfferingId' => [ 'shape' => 'String', ],
				'CacheNodeType'                => [ 'shape' => 'String', ],
				'Duration'                     => [ 'shape' => 'Integer', ],
				'FixedPrice'                   => [ 'shape' => 'Double', ],
				'UsagePrice'                   => [ 'shape' => 'Double', ],
				'ProductDescription'           => [ 'shape' => 'String', ],
				'OfferingType'                 => [ 'shape' => 'String', ],
				'RecurringCharges'             => [ 'shape' => 'RecurringChargeList', ],
			],
			'wrapper' => true,
		],
		'ReservedCacheNodesOfferingList'                  => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'ReservedCacheNodesOffering',
				'locationName' => 'ReservedCacheNodesOffering',
			],
		],
		'ReservedCacheNodesOfferingMessage'               => [
			'type'    => 'structure',
			'members' => [
				'Marker'                      => [ 'shape' => 'String', ],
				'ReservedCacheNodesOfferings' => [ 'shape' => 'ReservedCacheNodesOfferingList', ],
			],
		],
		'ReservedCacheNodesOfferingNotFoundFault'         => [
			'type'      => 'structure',
			'members'   => [],
			'error'     => [
				'code'           => 'ReservedCacheNodesOfferingNotFound',
				'httpStatusCode' => 404,
				'senderFault'    => true,
			],
			'exception' => true,
		],
		'ResetCacheParameterGroupMessage'                 => [
			'type'     => 'structure',
			'required' => [ 'CacheParameterGroupName', ],
			'members'  => [
				'CacheParameterGroupName' => [ 'shape' => 'String', ],
				'ResetAllParameters'      => [ 'shape' => 'Boolean', ],
				'ParameterNameValues'     => [ 'shape' => 'ParameterNameValueList', ],
			],
		],
		'ReshardingConfiguration'                         => [
			'type'    => 'structure',
			'members' => [
				'NodeGroupId'                => [ 'shape' => 'AllowedNodeGroupId', ],
				'PreferredAvailabilityZones' => [ 'shape' => 'AvailabilityZonesList', ],
			],
		],
		'ReshardingConfigurationList'                     => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'ReshardingConfiguration',
				'locationName' => 'ReshardingConfiguration',
			],
		],
		'ReshardingStatus'                                => [
			'type'    => 'structure',
			'members' => [ 'SlotMigration' => [ 'shape' => 'SlotMigration', ], ],
		],
		'RevokeCacheSecurityGroupIngressMessage'          => [
			'type'     => 'structure',
			'required' => [
				'CacheSecurityGroupName',
				'EC2SecurityGroupName',
				'EC2SecurityGroupOwnerId',
			],
			'members'  => [
				'CacheSecurityGroupName'  => [ 'shape' => 'String', ],
				'EC2SecurityGroupName'    => [ 'shape' => 'String', ],
				'EC2SecurityGroupOwnerId' => [ 'shape' => 'String', ],
			],
		],
		'RevokeCacheSecurityGroupIngressResult'           => [
			'type'    => 'structure',
			'members' => [ 'CacheSecurityGroup' => [ 'shape' => 'CacheSecurityGroup', ], ],
		],
		'SecurityGroupIdsList'                            => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'String',
				'locationName' => 'SecurityGroupId',
			],
		],
		'SecurityGroupMembership'                         => [
			'type'    => 'structure',
			'members' => [
				'SecurityGroupId' => [ 'shape' => 'String', ],
				'Status'          => [ 'shape' => 'String', ],
			],
		],
		'SecurityGroupMembershipList'                     => [
			'type'   => 'list',
			'member' => [ 'shape' => 'SecurityGroupMembership', ],
		],
		'ServiceLinkedRoleNotFoundFault'                  => [
			'type'      => 'structure',
			'members'   => [],
			'error'     => [
				'code'           => 'ServiceLinkedRoleNotFoundFault',
				'httpStatusCode' => 400,
				'senderFault'    => true,
			],
			'exception' => true,
		],
		'ServiceUpdate'                                   => [
			'type'    => 'structure',
			'members' => [
				'ServiceUpdateName'                     => [ 'shape' => 'String', ],
				'ServiceUpdateReleaseDate'              => [ 'shape' => 'TStamp', ],
				'ServiceUpdateEndDate'                  => [ 'shape' => 'TStamp', ],
				'ServiceUpdateSeverity'                 => [ 'shape' => 'ServiceUpdateSeverity', ],
				'ServiceUpdateRecommendedApplyByDate'   => [ 'shape' => 'TStamp', ],
				'ServiceUpdateStatus'                   => [ 'shape' => 'ServiceUpdateStatus', ],
				'ServiceUpdateDescription'              => [ 'shape' => 'String', ],
				'ServiceUpdateType'                     => [ 'shape' => 'ServiceUpdateType', ],
				'Engine'                                => [ 'shape' => 'String', ],
				'EngineVersion'                         => [ 'shape' => 'String', ],
				'AutoUpdateAfterRecommendedApplyByDate' => [ 'shape' => 'BooleanOptional', ],
				'EstimatedUpdateTime'                   => [ 'shape' => 'String', ],
			],
		],
		'ServiceUpdateList'                               => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'ServiceUpdate',
				'locationName' => 'ServiceUpdate',
			],
		],
		'ServiceUpdateNotFoundFault'                      => [
			'type'      => 'structure',
			'members'   => [],
			'error'     => [
				'code'           => 'ServiceUpdateNotFoundFault',
				'httpStatusCode' => 404,
				'senderFault'    => true,
			],
			'exception' => true,
		],
		'ServiceUpdateSeverity'                           => [
			'type' => 'string',
			'enum' => [ 'critical', 'important', 'medium', 'low', ],
		],
		'ServiceUpdateStatus'                             => [
			'type' => 'string',
			'enum' => [ 'available', 'cancelled', 'expired', ],
		],
		'ServiceUpdateStatusList'                         => [
			'type'   => 'list',
			'member' => [ 'shape' => 'ServiceUpdateStatus', ],
			'max'    => 3,
		],
		'ServiceUpdateType'                               => [ 'type' => 'string', 'enum' => [ 'security-update', ], ],
		'ServiceUpdatesMessage'                           => [
			'type'    => 'structure',
			'members' => [
				'Marker'         => [ 'shape' => 'String', ],
				'ServiceUpdates' => [ 'shape' => 'ServiceUpdateList', ],
			],
		],
		'SlaMet'                                          => [ 'type' => 'string', 'enum' => [ 'yes', 'no', 'n/a', ], ],
		'SlotMigration'                                   => [
			'type'    => 'structure',
			'members' => [ 'ProgressPercentage' => [ 'shape' => 'Double', ], ],
		],
		'Snapshot'                                        => [
			'type'    => 'structure',
			'members' => [
				'SnapshotName'                => [ 'shape' => 'String', ],
				'ReplicationGroupId'          => [ 'shape' => 'String', ],
				'ReplicationGroupDescription' => [ 'shape' => 'String', ],
				'CacheClusterId'              => [ 'shape' => 'String', ],
				'SnapshotStatus'              => [ 'shape' => 'String', ],
				'SnapshotSource'              => [ 'shape' => 'String', ],
				'CacheNodeType'               => [ 'shape' => 'String', ],
				'Engine'                      => [ 'shape' => 'String', ],
				'EngineVersion'               => [ 'shape' => 'String', ],
				'NumCacheNodes'               => [ 'shape' => 'IntegerOptional', ],
				'PreferredAvailabilityZone'   => [ 'shape' => 'String', ],
				'CacheClusterCreateTime'      => [ 'shape' => 'TStamp', ],
				'PreferredMaintenanceWindow'  => [ 'shape' => 'String', ],
				'TopicArn'                    => [ 'shape' => 'String', ],
				'Port'                        => [ 'shape' => 'IntegerOptional', ],
				'CacheParameterGroupName'     => [ 'shape' => 'String', ],
				'CacheSubnetGroupName'        => [ 'shape' => 'String', ],
				'VpcId'                       => [ 'shape' => 'String', ],
				'AutoMinorVersionUpgrade'     => [ 'shape' => 'Boolean', ],
				'SnapshotRetentionLimit'      => [ 'shape' => 'IntegerOptional', ],
				'SnapshotWindow'              => [ 'shape' => 'String', ],
				'NumNodeGroups'               => [ 'shape' => 'IntegerOptional', ],
				'AutomaticFailover'           => [ 'shape' => 'AutomaticFailoverStatus', ],
				'NodeSnapshots'               => [ 'shape' => 'NodeSnapshotList', ],
			],
			'wrapper' => true,
		],
		'SnapshotAlreadyExistsFault'                      => [
			'type'      => 'structure',
			'members'   => [],
			'error'     => [
				'code'           => 'SnapshotAlreadyExistsFault',
				'httpStatusCode' => 400,
				'senderFault'    => true,
			],
			'exception' => true,
		],
		'SnapshotArnsList'                                => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'String',
				'locationName' => 'SnapshotArn',
			],
		],
		'SnapshotFeatureNotSupportedFault'                => [
			'type'      => 'structure',
			'members'   => [],
			'error'     => [
				'code'           => 'SnapshotFeatureNotSupportedFault',
				'httpStatusCode' => 400,
				'senderFault'    => true,
			],
			'exception' => true,
		],
		'SnapshotList'                                    => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'Snapshot',
				'locationName' => 'Snapshot',
			],
		],
		'SnapshotNotFoundFault'                           => [
			'type'      => 'structure',
			'members'   => [],
			'error'     => [
				'code'           => 'SnapshotNotFoundFault',
				'httpStatusCode' => 404,
				'senderFault'    => true,
			],
			'exception' => true,
		],
		'SnapshotQuotaExceededFault'                      => [
			'type'      => 'structure',
			'members'   => [],
			'error'     => [
				'code'           => 'SnapshotQuotaExceededFault',
				'httpStatusCode' => 400,
				'senderFault'    => true,
			],
			'exception' => true,
		],
		'SourceType'                                      => [
			'type' => 'string',
			'enum' => [
				'cache-cluster',
				'cache-parameter-group',
				'cache-security-group',
				'cache-subnet-group',
				'replication-group',
			],
		],
		'String'                                          => [ 'type' => 'string', ],
		'Subnet'                                          => [
			'type'    => 'structure',
			'members' => [
				'SubnetIdentifier'       => [ 'shape' => 'String', ],
				'SubnetAvailabilityZone' => [ 'shape' => 'AvailabilityZone', ],
			],
		],
		'SubnetIdentifierList'                            => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'String',
				'locationName' => 'SubnetIdentifier',
			],
		],
		'SubnetInUse'                                     => [
			'type'      => 'structure',
			'members'   => [],
			'error'     => [
				'code'           => 'SubnetInUse',
				'httpStatusCode' => 400,
				'senderFault'    => true,
			],
			'exception' => true,
		],
		'SubnetList'                                      => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'Subnet',
				'locationName' => 'Subnet',
			],
		],
		'TStamp'                                          => [ 'type' => 'timestamp', ],
		'Tag'                                             => [
			'type'    => 'structure',
			'members' => [
				'Key'   => [ 'shape' => 'String', ],
				'Value' => [ 'shape' => 'String', ],
			],
		],
		'TagList'                                         => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'Tag',
				'locationName' => 'Tag',
			],
		],
		'TagListMessage'                                  => [
			'type'    => 'structure',
			'members' => [ 'TagList' => [ 'shape' => 'TagList', ], ],
		],
		'TagNotFoundFault'                                => [
			'type'      => 'structure',
			'members'   => [],
			'error'     => [
				'code'           => 'TagNotFound',
				'httpStatusCode' => 404,
				'senderFault'    => true,
			],
			'exception' => true,
		],
		'TagQuotaPerResourceExceeded'                     => [
			'type'      => 'structure',
			'members'   => [],
			'error'     => [
				'code'           => 'TagQuotaPerResourceExceeded',
				'httpStatusCode' => 400,
				'senderFault'    => true,
			],
			'exception' => true,
		],
		'TestFailoverMessage'                             => [
			'type'     => 'structure',
			'required' => [ 'ReplicationGroupId', 'NodeGroupId', ],
			'members'  => [
				'ReplicationGroupId' => [ 'shape' => 'String', ],
				'NodeGroupId'        => [ 'shape' => 'AllowedNodeGroupId', ],
			],
		],
		'TestFailoverNotAvailableFault'                   => [
			'type'      => 'structure',
			'members'   => [],
			'error'     => [
				'code'           => 'TestFailoverNotAvailableFault',
				'httpStatusCode' => 400,
				'senderFault'    => true,
			],
			'exception' => true,
		],
		'TestFailoverResult'                              => [
			'type'    => 'structure',
			'members' => [ 'ReplicationGroup' => [ 'shape' => 'ReplicationGroup', ], ],
		],
		'TimeRangeFilter'                                 => [
			'type'    => 'structure',
			'members' => [
				'StartTime' => [ 'shape' => 'TStamp', ],
				'EndTime'   => [ 'shape' => 'TStamp', ],
			],
		],
		'UnprocessedUpdateAction'                         => [
			'type'    => 'structure',
			'members' => [
				'ReplicationGroupId' => [ 'shape' => 'String', ],
				'ServiceUpdateName'  => [ 'shape' => 'String', ],
				'ErrorType'          => [ 'shape' => 'String', ],
				'ErrorMessage'       => [ 'shape' => 'String', ],
			],
		],
		'UnprocessedUpdateActionList'                     => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'UnprocessedUpdateAction',
				'locationName' => 'UnprocessedUpdateAction',
			],
		],
		'UpdateAction'                                    => [
			'type'    => 'structure',
			'members' => [
				'ReplicationGroupId'                  => [ 'shape' => 'String', ],
				'ServiceUpdateName'                   => [ 'shape' => 'String', ],
				'ServiceUpdateReleaseDate'            => [ 'shape' => 'TStamp', ],
				'ServiceUpdateSeverity'               => [ 'shape' => 'ServiceUpdateSeverity', ],
				'ServiceUpdateStatus'                 => [ 'shape' => 'ServiceUpdateStatus', ],
				'ServiceUpdateRecommendedApplyByDate' => [ 'shape' => 'TStamp', ],
				'ServiceUpdateType'                   => [ 'shape' => 'ServiceUpdateType', ],
				'UpdateActionAvailableDate'           => [ 'shape' => 'TStamp', ],
				'UpdateActionStatus'                  => [ 'shape' => 'UpdateActionStatus', ],
				'NodesUpdated'                        => [ 'shape' => 'String', ],
				'UpdateActionStatusModifiedDate'      => [ 'shape' => 'TStamp', ],
				'SlaMet'                              => [ 'shape' => 'SlaMet', ],
				'NodeGroupUpdateStatus'               => [ 'shape' => 'NodeGroupUpdateStatusList', ],
				'EstimatedUpdateTime'                 => [ 'shape' => 'String', ],
			],
		],
		'UpdateActionList'                                => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'UpdateAction',
				'locationName' => 'UpdateAction',
			],
		],
		'UpdateActionResultsMessage'                      => [
			'type'    => 'structure',
			'members' => [
				'ProcessedUpdateActions'   => [ 'shape' => 'ProcessedUpdateActionList', ],
				'UnprocessedUpdateActions' => [ 'shape' => 'UnprocessedUpdateActionList', ],
			],
		],
		'UpdateActionStatus'                              => [
			'type' => 'string',
			'enum' => [
				'not-applied',
				'waiting-to-start',
				'in-progress',
				'stopping',
				'stopped',
				'complete',
			],
		],
		'UpdateActionStatusList'                          => [
			'type'   => 'list',
			'member' => [ 'shape' => 'UpdateActionStatus', ],
			'max'    => 6,
		],
		'UpdateActionsMessage'                            => [
			'type'    => 'structure',
			'members' => [
				'Marker'        => [ 'shape' => 'String', ],
				'UpdateActions' => [ 'shape' => 'UpdateActionList', ],
			],
		],
	],
];
