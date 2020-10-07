<?php
// This file was auto-generated from sdk-root/src/data/autoscaling/2011-01-01/api-2.json
return [
	'version'    => '2.0',
	'metadata'   => [
		'apiVersion'       => '2011-01-01',
		'endpointPrefix'   => 'autoscaling',
		'protocol'         => 'query',
		'serviceFullName'  => 'Auto Scaling',
		'serviceId'        => 'Auto Scaling',
		'signatureVersion' => 'v4',
		'uid'              => 'autoscaling-2011-01-01',
		'xmlNamespace'     => 'http://autoscaling.amazonaws.com/doc/2011-01-01/',
	],
	'operations' => [
		'AttachInstances'                      => [
			'name'   => 'AttachInstances',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'AttachInstancesQuery', ],
			'errors' => [
				[ 'shape' => 'ResourceContentionFault', ],
				[ 'shape' => 'ServiceLinkedRoleFailure', ],
			],
		],
		'AttachLoadBalancerTargetGroups'       => [
			'name'   => 'AttachLoadBalancerTargetGroups',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'AttachLoadBalancerTargetGroupsType', ],
			'output' => [
				'shape'         => 'AttachLoadBalancerTargetGroupsResultType',
				'resultWrapper' => 'AttachLoadBalancerTargetGroupsResult',
			],
			'errors' => [
				[ 'shape' => 'ResourceContentionFault', ],
				[ 'shape' => 'ServiceLinkedRoleFailure', ],
			],
		],
		'AttachLoadBalancers'                  => [
			'name'   => 'AttachLoadBalancers',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'AttachLoadBalancersType', ],
			'output' => [
				'shape'         => 'AttachLoadBalancersResultType',
				'resultWrapper' => 'AttachLoadBalancersResult',
			],
			'errors' => [
				[ 'shape' => 'ResourceContentionFault', ],
				[ 'shape' => 'ServiceLinkedRoleFailure', ],
			],
		],
		'BatchDeleteScheduledAction'           => [
			'name'   => 'BatchDeleteScheduledAction',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'BatchDeleteScheduledActionType', ],
			'output' => [
				'shape'         => 'BatchDeleteScheduledActionAnswer',
				'resultWrapper' => 'BatchDeleteScheduledActionResult',
			],
			'errors' => [ [ 'shape' => 'ResourceContentionFault', ], ],
		],
		'BatchPutScheduledUpdateGroupAction'   => [
			'name'   => 'BatchPutScheduledUpdateGroupAction',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'BatchPutScheduledUpdateGroupActionType', ],
			'output' => [
				'shape'         => 'BatchPutScheduledUpdateGroupActionAnswer',
				'resultWrapper' => 'BatchPutScheduledUpdateGroupActionResult',
			],
			'errors' => [
				[ 'shape' => 'AlreadyExistsFault', ],
				[ 'shape' => 'LimitExceededFault', ],
				[ 'shape' => 'ResourceContentionFault', ],
			],
		],
		'CompleteLifecycleAction'              => [
			'name'   => 'CompleteLifecycleAction',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'CompleteLifecycleActionType', ],
			'output' => [
				'shape'         => 'CompleteLifecycleActionAnswer',
				'resultWrapper' => 'CompleteLifecycleActionResult',
			],
			'errors' => [ [ 'shape' => 'ResourceContentionFault', ], ],
		],
		'CreateAutoScalingGroup'               => [
			'name'   => 'CreateAutoScalingGroup',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'CreateAutoScalingGroupType', ],
			'errors' => [
				[ 'shape' => 'AlreadyExistsFault', ],
				[ 'shape' => 'LimitExceededFault', ],
				[ 'shape' => 'ResourceContentionFault', ],
				[ 'shape' => 'ServiceLinkedRoleFailure', ],
			],
		],
		'CreateLaunchConfiguration'            => [
			'name'   => 'CreateLaunchConfiguration',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'CreateLaunchConfigurationType', ],
			'errors' => [
				[ 'shape' => 'AlreadyExistsFault', ],
				[ 'shape' => 'LimitExceededFault', ],
				[ 'shape' => 'ResourceContentionFault', ],
			],
		],
		'CreateOrUpdateTags'                   => [
			'name'   => 'CreateOrUpdateTags',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'CreateOrUpdateTagsType', ],
			'errors' => [
				[ 'shape' => 'LimitExceededFault', ],
				[ 'shape' => 'AlreadyExistsFault', ],
				[ 'shape' => 'ResourceContentionFault', ],
				[ 'shape' => 'ResourceInUseFault', ],
			],
		],
		'DeleteAutoScalingGroup'               => [
			'name'   => 'DeleteAutoScalingGroup',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DeleteAutoScalingGroupType', ],
			'errors' => [
				[ 'shape' => 'ScalingActivityInProgressFault', ],
				[ 'shape' => 'ResourceInUseFault', ],
				[ 'shape' => 'ResourceContentionFault', ],
			],
		],
		'DeleteLaunchConfiguration'            => [
			'name'   => 'DeleteLaunchConfiguration',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'LaunchConfigurationNameType', ],
			'errors' => [
				[ 'shape' => 'ResourceInUseFault', ],
				[ 'shape' => 'ResourceContentionFault', ],
			],
		],
		'DeleteLifecycleHook'                  => [
			'name'   => 'DeleteLifecycleHook',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DeleteLifecycleHookType', ],
			'output' => [
				'shape'         => 'DeleteLifecycleHookAnswer',
				'resultWrapper' => 'DeleteLifecycleHookResult',
			],
			'errors' => [ [ 'shape' => 'ResourceContentionFault', ], ],
		],
		'DeleteNotificationConfiguration'      => [
			'name'   => 'DeleteNotificationConfiguration',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DeleteNotificationConfigurationType', ],
			'errors' => [ [ 'shape' => 'ResourceContentionFault', ], ],
		],
		'DeletePolicy'                         => [
			'name'   => 'DeletePolicy',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DeletePolicyType', ],
			'errors' => [
				[ 'shape' => 'ResourceContentionFault', ],
				[ 'shape' => 'ServiceLinkedRoleFailure', ],
			],
		],
		'DeleteScheduledAction'                => [
			'name'   => 'DeleteScheduledAction',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DeleteScheduledActionType', ],
			'errors' => [ [ 'shape' => 'ResourceContentionFault', ], ],
		],
		'DeleteTags'                           => [
			'name'   => 'DeleteTags',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DeleteTagsType', ],
			'errors' => [
				[ 'shape' => 'ResourceContentionFault', ],
				[ 'shape' => 'ResourceInUseFault', ],
			],
		],
		'DescribeAccountLimits'                => [
			'name'   => 'DescribeAccountLimits',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'output' => [
				'shape'         => 'DescribeAccountLimitsAnswer',
				'resultWrapper' => 'DescribeAccountLimitsResult',
			],
			'errors' => [ [ 'shape' => 'ResourceContentionFault', ], ],
		],
		'DescribeAdjustmentTypes'              => [
			'name'   => 'DescribeAdjustmentTypes',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'output' => [
				'shape'         => 'DescribeAdjustmentTypesAnswer',
				'resultWrapper' => 'DescribeAdjustmentTypesResult',
			],
			'errors' => [ [ 'shape' => 'ResourceContentionFault', ], ],
		],
		'DescribeAutoScalingGroups'            => [
			'name'   => 'DescribeAutoScalingGroups',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'AutoScalingGroupNamesType', ],
			'output' => [
				'shape'         => 'AutoScalingGroupsType',
				'resultWrapper' => 'DescribeAutoScalingGroupsResult',
			],
			'errors' => [
				[ 'shape' => 'InvalidNextToken', ],
				[ 'shape' => 'ResourceContentionFault', ],
			],
		],
		'DescribeAutoScalingInstances'         => [
			'name'   => 'DescribeAutoScalingInstances',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DescribeAutoScalingInstancesType', ],
			'output' => [
				'shape'         => 'AutoScalingInstancesType',
				'resultWrapper' => 'DescribeAutoScalingInstancesResult',
			],
			'errors' => [
				[ 'shape' => 'InvalidNextToken', ],
				[ 'shape' => 'ResourceContentionFault', ],
			],
		],
		'DescribeAutoScalingNotificationTypes' => [
			'name'   => 'DescribeAutoScalingNotificationTypes',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'output' => [
				'shape'         => 'DescribeAutoScalingNotificationTypesAnswer',
				'resultWrapper' => 'DescribeAutoScalingNotificationTypesResult',
			],
			'errors' => [ [ 'shape' => 'ResourceContentionFault', ], ],
		],
		'DescribeLaunchConfigurations'         => [
			'name'   => 'DescribeLaunchConfigurations',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'LaunchConfigurationNamesType', ],
			'output' => [
				'shape'         => 'LaunchConfigurationsType',
				'resultWrapper' => 'DescribeLaunchConfigurationsResult',
			],
			'errors' => [
				[ 'shape' => 'InvalidNextToken', ],
				[ 'shape' => 'ResourceContentionFault', ],
			],
		],
		'DescribeLifecycleHookTypes'           => [
			'name'   => 'DescribeLifecycleHookTypes',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'output' => [
				'shape'         => 'DescribeLifecycleHookTypesAnswer',
				'resultWrapper' => 'DescribeLifecycleHookTypesResult',
			],
			'errors' => [ [ 'shape' => 'ResourceContentionFault', ], ],
		],
		'DescribeLifecycleHooks'               => [
			'name'   => 'DescribeLifecycleHooks',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DescribeLifecycleHooksType', ],
			'output' => [
				'shape'         => 'DescribeLifecycleHooksAnswer',
				'resultWrapper' => 'DescribeLifecycleHooksResult',
			],
			'errors' => [ [ 'shape' => 'ResourceContentionFault', ], ],
		],
		'DescribeLoadBalancerTargetGroups'     => [
			'name'   => 'DescribeLoadBalancerTargetGroups',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DescribeLoadBalancerTargetGroupsRequest', ],
			'output' => [
				'shape'         => 'DescribeLoadBalancerTargetGroupsResponse',
				'resultWrapper' => 'DescribeLoadBalancerTargetGroupsResult',
			],
			'errors' => [ [ 'shape' => 'ResourceContentionFault', ], ],
		],
		'DescribeLoadBalancers'                => [
			'name'   => 'DescribeLoadBalancers',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DescribeLoadBalancersRequest', ],
			'output' => [
				'shape'         => 'DescribeLoadBalancersResponse',
				'resultWrapper' => 'DescribeLoadBalancersResult',
			],
			'errors' => [ [ 'shape' => 'ResourceContentionFault', ], ],
		],
		'DescribeMetricCollectionTypes'        => [
			'name'   => 'DescribeMetricCollectionTypes',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'output' => [
				'shape'         => 'DescribeMetricCollectionTypesAnswer',
				'resultWrapper' => 'DescribeMetricCollectionTypesResult',
			],
			'errors' => [ [ 'shape' => 'ResourceContentionFault', ], ],
		],
		'DescribeNotificationConfigurations'   => [
			'name'   => 'DescribeNotificationConfigurations',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DescribeNotificationConfigurationsType', ],
			'output' => [
				'shape'         => 'DescribeNotificationConfigurationsAnswer',
				'resultWrapper' => 'DescribeNotificationConfigurationsResult',
			],
			'errors' => [
				[ 'shape' => 'InvalidNextToken', ],
				[ 'shape' => 'ResourceContentionFault', ],
			],
		],
		'DescribePolicies'                     => [
			'name'   => 'DescribePolicies',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DescribePoliciesType', ],
			'output' => [
				'shape'         => 'PoliciesType',
				'resultWrapper' => 'DescribePoliciesResult',
			],
			'errors' => [
				[ 'shape' => 'InvalidNextToken', ],
				[ 'shape' => 'ResourceContentionFault', ],
				[ 'shape' => 'ServiceLinkedRoleFailure', ],
			],
		],
		'DescribeScalingActivities'            => [
			'name'   => 'DescribeScalingActivities',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DescribeScalingActivitiesType', ],
			'output' => [
				'shape'         => 'ActivitiesType',
				'resultWrapper' => 'DescribeScalingActivitiesResult',
			],
			'errors' => [
				[ 'shape' => 'InvalidNextToken', ],
				[ 'shape' => 'ResourceContentionFault', ],
			],
		],
		'DescribeScalingProcessTypes'          => [
			'name'   => 'DescribeScalingProcessTypes',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'output' => [
				'shape'         => 'ProcessesType',
				'resultWrapper' => 'DescribeScalingProcessTypesResult',
			],
			'errors' => [ [ 'shape' => 'ResourceContentionFault', ], ],
		],
		'DescribeScheduledActions'             => [
			'name'   => 'DescribeScheduledActions',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DescribeScheduledActionsType', ],
			'output' => [
				'shape'         => 'ScheduledActionsType',
				'resultWrapper' => 'DescribeScheduledActionsResult',
			],
			'errors' => [
				[ 'shape' => 'InvalidNextToken', ],
				[ 'shape' => 'ResourceContentionFault', ],
			],
		],
		'DescribeTags'                         => [
			'name'   => 'DescribeTags',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DescribeTagsType', ],
			'output' => [
				'shape'         => 'TagsType',
				'resultWrapper' => 'DescribeTagsResult',
			],
			'errors' => [
				[ 'shape' => 'InvalidNextToken', ],
				[ 'shape' => 'ResourceContentionFault', ],
			],
		],
		'DescribeTerminationPolicyTypes'       => [
			'name'   => 'DescribeTerminationPolicyTypes',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'output' => [
				'shape'         => 'DescribeTerminationPolicyTypesAnswer',
				'resultWrapper' => 'DescribeTerminationPolicyTypesResult',
			],
			'errors' => [ [ 'shape' => 'ResourceContentionFault', ], ],
		],
		'DetachInstances'                      => [
			'name'   => 'DetachInstances',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DetachInstancesQuery', ],
			'output' => [
				'shape'         => 'DetachInstancesAnswer',
				'resultWrapper' => 'DetachInstancesResult',
			],
			'errors' => [ [ 'shape' => 'ResourceContentionFault', ], ],
		],
		'DetachLoadBalancerTargetGroups'       => [
			'name'   => 'DetachLoadBalancerTargetGroups',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DetachLoadBalancerTargetGroupsType', ],
			'output' => [
				'shape'         => 'DetachLoadBalancerTargetGroupsResultType',
				'resultWrapper' => 'DetachLoadBalancerTargetGroupsResult',
			],
			'errors' => [ [ 'shape' => 'ResourceContentionFault', ], ],
		],
		'DetachLoadBalancers'                  => [
			'name'   => 'DetachLoadBalancers',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DetachLoadBalancersType', ],
			'output' => [
				'shape'         => 'DetachLoadBalancersResultType',
				'resultWrapper' => 'DetachLoadBalancersResult',
			],
			'errors' => [ [ 'shape' => 'ResourceContentionFault', ], ],
		],
		'DisableMetricsCollection'             => [
			'name'   => 'DisableMetricsCollection',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DisableMetricsCollectionQuery', ],
			'errors' => [ [ 'shape' => 'ResourceContentionFault', ], ],
		],
		'EnableMetricsCollection'              => [
			'name'   => 'EnableMetricsCollection',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'EnableMetricsCollectionQuery', ],
			'errors' => [ [ 'shape' => 'ResourceContentionFault', ], ],
		],
		'EnterStandby'                         => [
			'name'   => 'EnterStandby',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'EnterStandbyQuery', ],
			'output' => [
				'shape'         => 'EnterStandbyAnswer',
				'resultWrapper' => 'EnterStandbyResult',
			],
			'errors' => [ [ 'shape' => 'ResourceContentionFault', ], ],
		],
		'ExecutePolicy'                        => [
			'name'   => 'ExecutePolicy',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'ExecutePolicyType', ],
			'errors' => [
				[ 'shape' => 'ScalingActivityInProgressFault', ],
				[ 'shape' => 'ResourceContentionFault', ],
			],
		],
		'ExitStandby'                          => [
			'name'   => 'ExitStandby',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'ExitStandbyQuery', ],
			'output' => [
				'shape'         => 'ExitStandbyAnswer',
				'resultWrapper' => 'ExitStandbyResult',
			],
			'errors' => [ [ 'shape' => 'ResourceContentionFault', ], ],
		],
		'PutLifecycleHook'                     => [
			'name'   => 'PutLifecycleHook',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'PutLifecycleHookType', ],
			'output' => [
				'shape'         => 'PutLifecycleHookAnswer',
				'resultWrapper' => 'PutLifecycleHookResult',
			],
			'errors' => [
				[ 'shape' => 'LimitExceededFault', ],
				[ 'shape' => 'ResourceContentionFault', ],
			],
		],
		'PutNotificationConfiguration'         => [
			'name'   => 'PutNotificationConfiguration',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'PutNotificationConfigurationType', ],
			'errors' => [
				[ 'shape' => 'LimitExceededFault', ],
				[ 'shape' => 'ResourceContentionFault', ],
				[ 'shape' => 'ServiceLinkedRoleFailure', ],
			],
		],
		'PutScalingPolicy'                     => [
			'name'   => 'PutScalingPolicy',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'PutScalingPolicyType', ],
			'output' => [
				'shape'         => 'PolicyARNType',
				'resultWrapper' => 'PutScalingPolicyResult',
			],
			'errors' => [
				[ 'shape' => 'LimitExceededFault', ],
				[ 'shape' => 'ResourceContentionFault', ],
				[ 'shape' => 'ServiceLinkedRoleFailure', ],
			],
		],
		'PutScheduledUpdateGroupAction'        => [
			'name'   => 'PutScheduledUpdateGroupAction',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'PutScheduledUpdateGroupActionType', ],
			'errors' => [
				[ 'shape' => 'AlreadyExistsFault', ],
				[ 'shape' => 'LimitExceededFault', ],
				[ 'shape' => 'ResourceContentionFault', ],
			],
		],
		'RecordLifecycleActionHeartbeat'       => [
			'name'   => 'RecordLifecycleActionHeartbeat',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'RecordLifecycleActionHeartbeatType', ],
			'output' => [
				'shape'         => 'RecordLifecycleActionHeartbeatAnswer',
				'resultWrapper' => 'RecordLifecycleActionHeartbeatResult',
			],
			'errors' => [ [ 'shape' => 'ResourceContentionFault', ], ],
		],
		'ResumeProcesses'                      => [
			'name'   => 'ResumeProcesses',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'ScalingProcessQuery', ],
			'errors' => [
				[ 'shape' => 'ResourceInUseFault', ],
				[ 'shape' => 'ResourceContentionFault', ],
			],
		],
		'SetDesiredCapacity'                   => [
			'name'   => 'SetDesiredCapacity',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'SetDesiredCapacityType', ],
			'errors' => [
				[ 'shape' => 'ScalingActivityInProgressFault', ],
				[ 'shape' => 'ResourceContentionFault', ],
			],
		],
		'SetInstanceHealth'                    => [
			'name'   => 'SetInstanceHealth',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'SetInstanceHealthQuery', ],
			'errors' => [ [ 'shape' => 'ResourceContentionFault', ], ],
		],
		'SetInstanceProtection'                => [
			'name'   => 'SetInstanceProtection',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'SetInstanceProtectionQuery', ],
			'output' => [
				'shape'         => 'SetInstanceProtectionAnswer',
				'resultWrapper' => 'SetInstanceProtectionResult',
			],
			'errors' => [
				[ 'shape' => 'LimitExceededFault', ],
				[ 'shape' => 'ResourceContentionFault', ],
			],
		],
		'SuspendProcesses'                     => [
			'name'   => 'SuspendProcesses',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'ScalingProcessQuery', ],
			'errors' => [
				[ 'shape' => 'ResourceInUseFault', ],
				[ 'shape' => 'ResourceContentionFault', ],
			],
		],
		'TerminateInstanceInAutoScalingGroup'  => [
			'name'   => 'TerminateInstanceInAutoScalingGroup',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'TerminateInstanceInAutoScalingGroupType', ],
			'output' => [
				'shape'         => 'ActivityType',
				'resultWrapper' => 'TerminateInstanceInAutoScalingGroupResult',
			],
			'errors' => [
				[ 'shape' => 'ScalingActivityInProgressFault', ],
				[ 'shape' => 'ResourceContentionFault', ],
			],
		],
		'UpdateAutoScalingGroup'               => [
			'name'   => 'UpdateAutoScalingGroup',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'UpdateAutoScalingGroupType', ],
			'errors' => [
				[ 'shape' => 'ScalingActivityInProgressFault', ],
				[ 'shape' => 'ResourceContentionFault', ],
				[ 'shape' => 'ServiceLinkedRoleFailure', ],
			],
		],
	],
	'shapes'     => [
		'Activities'                                 => [ 'type' => 'list', 'member' => [ 'shape' => 'Activity', ], ],
		'ActivitiesType'                             => [
			'type'     => 'structure',
			'required' => [ 'Activities', ],
			'members'  => [
				'Activities' => [ 'shape' => 'Activities', ],
				'NextToken'  => [ 'shape' => 'XmlString', ],
			],
		],
		'Activity'                                   => [
			'type'     => 'structure',
			'required' => [
				'ActivityId',
				'AutoScalingGroupName',
				'Cause',
				'StartTime',
				'StatusCode',
			],
			'members'  => [
				'ActivityId'           => [ 'shape' => 'XmlString', ],
				'AutoScalingGroupName' => [ 'shape' => 'XmlStringMaxLen255', ],
				'Description'          => [ 'shape' => 'XmlString', ],
				'Cause'                => [ 'shape' => 'XmlStringMaxLen1023', ],
				'StartTime'            => [ 'shape' => 'TimestampType', ],
				'EndTime'              => [ 'shape' => 'TimestampType', ],
				'StatusCode'           => [ 'shape' => 'ScalingActivityStatusCode', ],
				'StatusMessage'        => [ 'shape' => 'XmlStringMaxLen255', ],
				'Progress'             => [ 'shape' => 'Progress', ],
				'Details'              => [ 'shape' => 'XmlString', ],
			],
		],
		'ActivityIds'                                => [ 'type' => 'list', 'member' => [ 'shape' => 'XmlString', ], ],
		'ActivityType'                               => [
			'type'    => 'structure',
			'members' => [ 'Activity' => [ 'shape' => 'Activity', ], ],
		],
		'AdjustmentType'                             => [
			'type'    => 'structure',
			'members' => [ 'AdjustmentType' => [ 'shape' => 'XmlStringMaxLen255', ], ],
		],
		'AdjustmentTypes'                            => [
			'type'   => 'list',
			'member' => [ 'shape' => 'AdjustmentType', ],
		],
		'Alarm'                                      => [
			'type'    => 'structure',
			'members' => [
				'AlarmName' => [ 'shape' => 'XmlStringMaxLen255', ],
				'AlarmARN'  => [ 'shape' => 'ResourceName', ],
			],
		],
		'Alarms'                                     => [ 'type' => 'list', 'member' => [ 'shape' => 'Alarm', ], ],
		'AlreadyExistsFault'                         => [
			'type'      => 'structure',
			'members'   => [ 'message' => [ 'shape' => 'XmlStringMaxLen255', ], ],
			'error'     => [
				'code'           => 'AlreadyExists',
				'httpStatusCode' => 400,
				'senderFault'    => true,
			],
			'exception' => true,
		],
		'AsciiStringMaxLen255'                       => [
			'type'    => 'string',
			'max'     => 255,
			'min'     => 1,
			'pattern' => '[A-Za-z0-9\\-_\\/]+',
		],
		'AssociatePublicIpAddress'                   => [ 'type' => 'boolean', ],
		'AttachInstancesQuery'                       => [
			'type'     => 'structure',
			'required' => [ 'AutoScalingGroupName', ],
			'members'  => [
				'InstanceIds'          => [ 'shape' => 'InstanceIds', ],
				'AutoScalingGroupName' => [ 'shape' => 'ResourceName', ],
			],
		],
		'AttachLoadBalancerTargetGroupsResultType'   => [ 'type' => 'structure', 'members' => [], ],
		'AttachLoadBalancerTargetGroupsType'         => [
			'type'     => 'structure',
			'required' => [ 'AutoScalingGroupName', 'TargetGroupARNs', ],
			'members'  => [
				'AutoScalingGroupName' => [ 'shape' => 'ResourceName', ],
				'TargetGroupARNs'      => [ 'shape' => 'TargetGroupARNs', ],
			],
		],
		'AttachLoadBalancersResultType'              => [ 'type' => 'structure', 'members' => [], ],
		'AttachLoadBalancersType'                    => [
			'type'     => 'structure',
			'required' => [ 'AutoScalingGroupName', 'LoadBalancerNames', ],
			'members'  => [
				'AutoScalingGroupName' => [ 'shape' => 'ResourceName', ],
				'LoadBalancerNames'    => [ 'shape' => 'LoadBalancerNames', ],
			],
		],
		'AutoScalingGroup'                           => [
			'type'     => 'structure',
			'required' => [
				'AutoScalingGroupName',
				'MinSize',
				'MaxSize',
				'DesiredCapacity',
				'DefaultCooldown',
				'AvailabilityZones',
				'HealthCheckType',
				'CreatedTime',
			],
			'members'  => [
				'AutoScalingGroupName'             => [ 'shape' => 'XmlStringMaxLen255', ],
				'AutoScalingGroupARN'              => [ 'shape' => 'ResourceName', ],
				'LaunchConfigurationName'          => [ 'shape' => 'XmlStringMaxLen255', ],
				'LaunchTemplate'                   => [ 'shape' => 'LaunchTemplateSpecification', ],
				'MixedInstancesPolicy'             => [ 'shape' => 'MixedInstancesPolicy', ],
				'MinSize'                          => [ 'shape' => 'AutoScalingGroupMinSize', ],
				'MaxSize'                          => [ 'shape' => 'AutoScalingGroupMaxSize', ],
				'DesiredCapacity'                  => [ 'shape' => 'AutoScalingGroupDesiredCapacity', ],
				'DefaultCooldown'                  => [ 'shape' => 'Cooldown', ],
				'AvailabilityZones'                => [ 'shape' => 'AvailabilityZones', ],
				'LoadBalancerNames'                => [ 'shape' => 'LoadBalancerNames', ],
				'TargetGroupARNs'                  => [ 'shape' => 'TargetGroupARNs', ],
				'HealthCheckType'                  => [ 'shape' => 'XmlStringMaxLen32', ],
				'HealthCheckGracePeriod'           => [ 'shape' => 'HealthCheckGracePeriod', ],
				'Instances'                        => [ 'shape' => 'Instances', ],
				'CreatedTime'                      => [ 'shape' => 'TimestampType', ],
				'SuspendedProcesses'               => [ 'shape' => 'SuspendedProcesses', ],
				'PlacementGroup'                   => [ 'shape' => 'XmlStringMaxLen255', ],
				'VPCZoneIdentifier'                => [ 'shape' => 'XmlStringMaxLen2047', ],
				'EnabledMetrics'                   => [ 'shape' => 'EnabledMetrics', ],
				'Status'                           => [ 'shape' => 'XmlStringMaxLen255', ],
				'Tags'                             => [ 'shape' => 'TagDescriptionList', ],
				'TerminationPolicies'              => [ 'shape' => 'TerminationPolicies', ],
				'NewInstancesProtectedFromScaleIn' => [ 'shape' => 'InstanceProtected', ],
				'ServiceLinkedRoleARN'             => [ 'shape' => 'ResourceName', ],
			],
		],
		'AutoScalingGroupDesiredCapacity'            => [ 'type' => 'integer', ],
		'AutoScalingGroupMaxSize'                    => [ 'type' => 'integer', ],
		'AutoScalingGroupMinSize'                    => [ 'type' => 'integer', ],
		'AutoScalingGroupNames'                      => [
			'type'   => 'list',
			'member' => [ 'shape' => 'ResourceName', ],
		],
		'AutoScalingGroupNamesType'                  => [
			'type'    => 'structure',
			'members' => [
				'AutoScalingGroupNames' => [ 'shape' => 'AutoScalingGroupNames', ],
				'NextToken'             => [ 'shape' => 'XmlString', ],
				'MaxRecords'            => [ 'shape' => 'MaxRecords', ],
			],
		],
		'AutoScalingGroups'                          => [
			'type'   => 'list',
			'member' => [ 'shape' => 'AutoScalingGroup', ],
		],
		'AutoScalingGroupsType'                      => [
			'type'     => 'structure',
			'required' => [ 'AutoScalingGroups', ],
			'members'  => [
				'AutoScalingGroups' => [ 'shape' => 'AutoScalingGroups', ],
				'NextToken'         => [ 'shape' => 'XmlString', ],
			],
		],
		'AutoScalingInstanceDetails'                 => [
			'type'     => 'structure',
			'required' => [
				'InstanceId',
				'AutoScalingGroupName',
				'AvailabilityZone',
				'LifecycleState',
				'HealthStatus',
				'ProtectedFromScaleIn',
			],
			'members'  => [
				'InstanceId'              => [ 'shape' => 'XmlStringMaxLen19', ],
				'AutoScalingGroupName'    => [ 'shape' => 'XmlStringMaxLen255', ],
				'AvailabilityZone'        => [ 'shape' => 'XmlStringMaxLen255', ],
				'LifecycleState'          => [ 'shape' => 'XmlStringMaxLen32', ],
				'HealthStatus'            => [ 'shape' => 'XmlStringMaxLen32', ],
				'LaunchConfigurationName' => [ 'shape' => 'XmlStringMaxLen255', ],
				'LaunchTemplate'          => [ 'shape' => 'LaunchTemplateSpecification', ],
				'ProtectedFromScaleIn'    => [ 'shape' => 'InstanceProtected', ],
			],
		],
		'AutoScalingInstances'                       => [
			'type'   => 'list',
			'member' => [ 'shape' => 'AutoScalingInstanceDetails', ],
		],
		'AutoScalingInstancesType'                   => [
			'type'    => 'structure',
			'members' => [
				'AutoScalingInstances' => [ 'shape' => 'AutoScalingInstances', ],
				'NextToken'            => [ 'shape' => 'XmlString', ],
			],
		],
		'AutoScalingNotificationTypes'               => [
			'type'   => 'list',
			'member' => [ 'shape' => 'XmlStringMaxLen255', ],
		],
		'AvailabilityZones'                          => [
			'type'   => 'list',
			'member' => [ 'shape' => 'XmlStringMaxLen255', ],
			'min'    => 1,
		],
		'BatchDeleteScheduledActionAnswer'           => [
			'type'    => 'structure',
			'members' => [ 'FailedScheduledActions' => [ 'shape' => 'FailedScheduledUpdateGroupActionRequests', ], ],
		],
		'BatchDeleteScheduledActionType'             => [
			'type'     => 'structure',
			'required' => [
				'AutoScalingGroupName',
				'ScheduledActionNames',
			],
			'members'  => [
				'AutoScalingGroupName' => [ 'shape' => 'ResourceName', ],
				'ScheduledActionNames' => [ 'shape' => 'ScheduledActionNames', ],
			],
		],
		'BatchPutScheduledUpdateGroupActionAnswer'   => [
			'type'    => 'structure',
			'members' => [ 'FailedScheduledUpdateGroupActions' => [ 'shape' => 'FailedScheduledUpdateGroupActionRequests', ], ],
		],
		'BatchPutScheduledUpdateGroupActionType'     => [
			'type'     => 'structure',
			'required' => [
				'AutoScalingGroupName',
				'ScheduledUpdateGroupActions',
			],
			'members'  => [
				'AutoScalingGroupName'        => [ 'shape' => 'ResourceName', ],
				'ScheduledUpdateGroupActions' => [ 'shape' => 'ScheduledUpdateGroupActionRequests', ],
			],
		],
		'BlockDeviceEbsDeleteOnTermination'          => [ 'type' => 'boolean', ],
		'BlockDeviceEbsEncrypted'                    => [ 'type' => 'boolean', ],
		'BlockDeviceEbsIops'                         => [ 'type' => 'integer', 'max' => 20000, 'min' => 100, ],
		'BlockDeviceEbsVolumeSize'                   => [ 'type' => 'integer', 'max' => 16384, 'min' => 1, ],
		'BlockDeviceEbsVolumeType'                   => [ 'type' => 'string', 'max' => 255, 'min' => 1, ],
		'BlockDeviceMapping'                         => [
			'type'     => 'structure',
			'required' => [ 'DeviceName', ],
			'members'  => [
				'VirtualName' => [ 'shape' => 'XmlStringMaxLen255', ],
				'DeviceName'  => [ 'shape' => 'XmlStringMaxLen255', ],
				'Ebs'         => [ 'shape' => 'Ebs', ],
				'NoDevice'    => [ 'shape' => 'NoDevice', ],
			],
		],
		'BlockDeviceMappings'                        => [
			'type'   => 'list',
			'member' => [ 'shape' => 'BlockDeviceMapping', ],
		],
		'ClassicLinkVPCSecurityGroups'               => [
			'type'   => 'list',
			'member' => [ 'shape' => 'XmlStringMaxLen255', ],
		],
		'CompleteLifecycleActionAnswer'              => [ 'type' => 'structure', 'members' => [], ],
		'CompleteLifecycleActionType'                => [
			'type'     => 'structure',
			'required' => [
				'LifecycleHookName',
				'AutoScalingGroupName',
				'LifecycleActionResult',
			],
			'members'  => [
				'LifecycleHookName'     => [ 'shape' => 'AsciiStringMaxLen255', ],
				'AutoScalingGroupName'  => [ 'shape' => 'ResourceName', ],
				'LifecycleActionToken'  => [ 'shape' => 'LifecycleActionToken', ],
				'LifecycleActionResult' => [ 'shape' => 'LifecycleActionResult', ],
				'InstanceId'            => [ 'shape' => 'XmlStringMaxLen19', ],
			],
		],
		'Cooldown'                                   => [ 'type' => 'integer', ],
		'CreateAutoScalingGroupType'                 => [
			'type'     => 'structure',
			'required' => [ 'AutoScalingGroupName', 'MinSize', 'MaxSize', ],
			'members'  => [
				'AutoScalingGroupName'             => [ 'shape' => 'XmlStringMaxLen255', ],
				'LaunchConfigurationName'          => [ 'shape' => 'ResourceName', ],
				'LaunchTemplate'                   => [ 'shape' => 'LaunchTemplateSpecification', ],
				'MixedInstancesPolicy'             => [ 'shape' => 'MixedInstancesPolicy', ],
				'InstanceId'                       => [ 'shape' => 'XmlStringMaxLen19', ],
				'MinSize'                          => [ 'shape' => 'AutoScalingGroupMinSize', ],
				'MaxSize'                          => [ 'shape' => 'AutoScalingGroupMaxSize', ],
				'DesiredCapacity'                  => [ 'shape' => 'AutoScalingGroupDesiredCapacity', ],
				'DefaultCooldown'                  => [ 'shape' => 'Cooldown', ],
				'AvailabilityZones'                => [ 'shape' => 'AvailabilityZones', ],
				'LoadBalancerNames'                => [ 'shape' => 'LoadBalancerNames', ],
				'TargetGroupARNs'                  => [ 'shape' => 'TargetGroupARNs', ],
				'HealthCheckType'                  => [ 'shape' => 'XmlStringMaxLen32', ],
				'HealthCheckGracePeriod'           => [ 'shape' => 'HealthCheckGracePeriod', ],
				'PlacementGroup'                   => [ 'shape' => 'XmlStringMaxLen255', ],
				'VPCZoneIdentifier'                => [ 'shape' => 'XmlStringMaxLen2047', ],
				'TerminationPolicies'              => [ 'shape' => 'TerminationPolicies', ],
				'NewInstancesProtectedFromScaleIn' => [ 'shape' => 'InstanceProtected', ],
				'LifecycleHookSpecificationList'   => [ 'shape' => 'LifecycleHookSpecifications', ],
				'Tags'                             => [ 'shape' => 'Tags', ],
				'ServiceLinkedRoleARN'             => [ 'shape' => 'ResourceName', ],
			],
		],
		'CreateLaunchConfigurationType'              => [
			'type'     => 'structure',
			'required' => [ 'LaunchConfigurationName', ],
			'members'  => [
				'LaunchConfigurationName'      => [ 'shape' => 'XmlStringMaxLen255', ],
				'ImageId'                      => [ 'shape' => 'XmlStringMaxLen255', ],
				'KeyName'                      => [ 'shape' => 'XmlStringMaxLen255', ],
				'SecurityGroups'               => [ 'shape' => 'SecurityGroups', ],
				'ClassicLinkVPCId'             => [ 'shape' => 'XmlStringMaxLen255', ],
				'ClassicLinkVPCSecurityGroups' => [ 'shape' => 'ClassicLinkVPCSecurityGroups', ],
				'UserData'                     => [ 'shape' => 'XmlStringUserData', ],
				'InstanceId'                   => [ 'shape' => 'XmlStringMaxLen19', ],
				'InstanceType'                 => [ 'shape' => 'XmlStringMaxLen255', ],
				'KernelId'                     => [ 'shape' => 'XmlStringMaxLen255', ],
				'RamdiskId'                    => [ 'shape' => 'XmlStringMaxLen255', ],
				'BlockDeviceMappings'          => [ 'shape' => 'BlockDeviceMappings', ],
				'InstanceMonitoring'           => [ 'shape' => 'InstanceMonitoring', ],
				'SpotPrice'                    => [ 'shape' => 'SpotPrice', ],
				'IamInstanceProfile'           => [ 'shape' => 'XmlStringMaxLen1600', ],
				'EbsOptimized'                 => [ 'shape' => 'EbsOptimized', ],
				'AssociatePublicIpAddress'     => [ 'shape' => 'AssociatePublicIpAddress', ],
				'PlacementTenancy'             => [ 'shape' => 'XmlStringMaxLen64', ],
			],
		],
		'CreateOrUpdateTagsType'                     => [
			'type'     => 'structure',
			'required' => [ 'Tags', ],
			'members'  => [ 'Tags' => [ 'shape' => 'Tags', ], ],
		],
		'CustomizedMetricSpecification'              => [
			'type'     => 'structure',
			'required' => [ 'MetricName', 'Namespace', 'Statistic', ],
			'members'  => [
				'MetricName' => [ 'shape' => 'MetricName', ],
				'Namespace'  => [ 'shape' => 'MetricNamespace', ],
				'Dimensions' => [ 'shape' => 'MetricDimensions', ],
				'Statistic'  => [ 'shape' => 'MetricStatistic', ],
				'Unit'       => [ 'shape' => 'MetricUnit', ],
			],
		],
		'DeleteAutoScalingGroupType'                 => [
			'type'     => 'structure',
			'required' => [ 'AutoScalingGroupName', ],
			'members'  => [
				'AutoScalingGroupName' => [ 'shape' => 'ResourceName', ],
				'ForceDelete'          => [ 'shape' => 'ForceDelete', ],
			],
		],
		'DeleteLifecycleHookAnswer'                  => [ 'type' => 'structure', 'members' => [], ],
		'DeleteLifecycleHookType'                    => [
			'type'     => 'structure',
			'required' => [ 'LifecycleHookName', 'AutoScalingGroupName', ],
			'members'  => [
				'LifecycleHookName'    => [ 'shape' => 'AsciiStringMaxLen255', ],
				'AutoScalingGroupName' => [ 'shape' => 'ResourceName', ],
			],
		],
		'DeleteNotificationConfigurationType'        => [
			'type'     => 'structure',
			'required' => [ 'AutoScalingGroupName', 'TopicARN', ],
			'members'  => [
				'AutoScalingGroupName' => [ 'shape' => 'ResourceName', ],
				'TopicARN'             => [ 'shape' => 'ResourceName', ],
			],
		],
		'DeletePolicyType'                           => [
			'type'     => 'structure',
			'required' => [ 'PolicyName', ],
			'members'  => [
				'AutoScalingGroupName' => [ 'shape' => 'ResourceName', ],
				'PolicyName'           => [ 'shape' => 'ResourceName', ],
			],
		],
		'DeleteScheduledActionType'                  => [
			'type'     => 'structure',
			'required' => [
				'AutoScalingGroupName',
				'ScheduledActionName',
			],
			'members'  => [
				'AutoScalingGroupName' => [ 'shape' => 'ResourceName', ],
				'ScheduledActionName'  => [ 'shape' => 'ResourceName', ],
			],
		],
		'DeleteTagsType'                             => [
			'type'     => 'structure',
			'required' => [ 'Tags', ],
			'members'  => [ 'Tags' => [ 'shape' => 'Tags', ], ],
		],
		'DescribeAccountLimitsAnswer'                => [
			'type'    => 'structure',
			'members' => [
				'MaxNumberOfAutoScalingGroups'    => [ 'shape' => 'MaxNumberOfAutoScalingGroups', ],
				'MaxNumberOfLaunchConfigurations' => [ 'shape' => 'MaxNumberOfLaunchConfigurations', ],
				'NumberOfAutoScalingGroups'       => [ 'shape' => 'NumberOfAutoScalingGroups', ],
				'NumberOfLaunchConfigurations'    => [ 'shape' => 'NumberOfLaunchConfigurations', ],
			],
		],
		'DescribeAdjustmentTypesAnswer'              => [
			'type'    => 'structure',
			'members' => [ 'AdjustmentTypes' => [ 'shape' => 'AdjustmentTypes', ], ],
		],
		'DescribeAutoScalingInstancesType'           => [
			'type'    => 'structure',
			'members' => [
				'InstanceIds' => [ 'shape' => 'InstanceIds', ],
				'MaxRecords'  => [ 'shape' => 'MaxRecords', ],
				'NextToken'   => [ 'shape' => 'XmlString', ],
			],
		],
		'DescribeAutoScalingNotificationTypesAnswer' => [
			'type'    => 'structure',
			'members' => [ 'AutoScalingNotificationTypes' => [ 'shape' => 'AutoScalingNotificationTypes', ], ],
		],
		'DescribeLifecycleHookTypesAnswer'           => [
			'type'    => 'structure',
			'members' => [ 'LifecycleHookTypes' => [ 'shape' => 'AutoScalingNotificationTypes', ], ],
		],
		'DescribeLifecycleHooksAnswer'               => [
			'type'    => 'structure',
			'members' => [ 'LifecycleHooks' => [ 'shape' => 'LifecycleHooks', ], ],
		],
		'DescribeLifecycleHooksType'                 => [
			'type'     => 'structure',
			'required' => [ 'AutoScalingGroupName', ],
			'members'  => [
				'AutoScalingGroupName' => [ 'shape' => 'ResourceName', ],
				'LifecycleHookNames'   => [ 'shape' => 'LifecycleHookNames', ],
			],
		],
		'DescribeLoadBalancerTargetGroupsRequest'    => [
			'type'     => 'structure',
			'required' => [ 'AutoScalingGroupName', ],
			'members'  => [
				'AutoScalingGroupName' => [ 'shape' => 'ResourceName', ],
				'NextToken'            => [ 'shape' => 'XmlString', ],
				'MaxRecords'           => [ 'shape' => 'MaxRecords', ],
			],
		],
		'DescribeLoadBalancerTargetGroupsResponse'   => [
			'type'    => 'structure',
			'members' => [
				'LoadBalancerTargetGroups' => [ 'shape' => 'LoadBalancerTargetGroupStates', ],
				'NextToken'                => [ 'shape' => 'XmlString', ],
			],
		],
		'DescribeLoadBalancersRequest'               => [
			'type'     => 'structure',
			'required' => [ 'AutoScalingGroupName', ],
			'members'  => [
				'AutoScalingGroupName' => [ 'shape' => 'ResourceName', ],
				'NextToken'            => [ 'shape' => 'XmlString', ],
				'MaxRecords'           => [ 'shape' => 'MaxRecords', ],
			],
		],
		'DescribeLoadBalancersResponse'              => [
			'type'    => 'structure',
			'members' => [
				'LoadBalancers' => [ 'shape' => 'LoadBalancerStates', ],
				'NextToken'     => [ 'shape' => 'XmlString', ],
			],
		],
		'DescribeMetricCollectionTypesAnswer'        => [
			'type'    => 'structure',
			'members' => [
				'Metrics'       => [ 'shape' => 'MetricCollectionTypes', ],
				'Granularities' => [ 'shape' => 'MetricGranularityTypes', ],
			],
		],
		'DescribeNotificationConfigurationsAnswer'   => [
			'type'     => 'structure',
			'required' => [ 'NotificationConfigurations', ],
			'members'  => [
				'NotificationConfigurations' => [ 'shape' => 'NotificationConfigurations', ],
				'NextToken'                  => [ 'shape' => 'XmlString', ],
			],
		],
		'DescribeNotificationConfigurationsType'     => [
			'type'    => 'structure',
			'members' => [
				'AutoScalingGroupNames' => [ 'shape' => 'AutoScalingGroupNames', ],
				'NextToken'             => [ 'shape' => 'XmlString', ],
				'MaxRecords'            => [ 'shape' => 'MaxRecords', ],
			],
		],
		'DescribePoliciesType'                       => [
			'type'    => 'structure',
			'members' => [
				'AutoScalingGroupName' => [ 'shape' => 'ResourceName', ],
				'PolicyNames'          => [ 'shape' => 'PolicyNames', ],
				'PolicyTypes'          => [ 'shape' => 'PolicyTypes', ],
				'NextToken'            => [ 'shape' => 'XmlString', ],
				'MaxRecords'           => [ 'shape' => 'MaxRecords', ],
			],
		],
		'DescribeScalingActivitiesType'              => [
			'type'    => 'structure',
			'members' => [
				'ActivityIds'          => [ 'shape' => 'ActivityIds', ],
				'AutoScalingGroupName' => [ 'shape' => 'ResourceName', ],
				'MaxRecords'           => [ 'shape' => 'MaxRecords', ],
				'NextToken'            => [ 'shape' => 'XmlString', ],
			],
		],
		'DescribeScheduledActionsType'               => [
			'type'    => 'structure',
			'members' => [
				'AutoScalingGroupName' => [ 'shape' => 'ResourceName', ],
				'ScheduledActionNames' => [ 'shape' => 'ScheduledActionNames', ],
				'StartTime'            => [ 'shape' => 'TimestampType', ],
				'EndTime'              => [ 'shape' => 'TimestampType', ],
				'NextToken'            => [ 'shape' => 'XmlString', ],
				'MaxRecords'           => [ 'shape' => 'MaxRecords', ],
			],
		],
		'DescribeTagsType'                           => [
			'type'    => 'structure',
			'members' => [
				'Filters'    => [ 'shape' => 'Filters', ],
				'NextToken'  => [ 'shape' => 'XmlString', ],
				'MaxRecords' => [ 'shape' => 'MaxRecords', ],
			],
		],
		'DescribeTerminationPolicyTypesAnswer'       => [
			'type'    => 'structure',
			'members' => [ 'TerminationPolicyTypes' => [ 'shape' => 'TerminationPolicies', ], ],
		],
		'DetachInstancesAnswer'                      => [
			'type'    => 'structure',
			'members' => [ 'Activities' => [ 'shape' => 'Activities', ], ],
		],
		'DetachInstancesQuery'                       => [
			'type'     => 'structure',
			'required' => [
				'AutoScalingGroupName',
				'ShouldDecrementDesiredCapacity',
			],
			'members'  => [
				'InstanceIds'                    => [ 'shape' => 'InstanceIds', ],
				'AutoScalingGroupName'           => [ 'shape' => 'ResourceName', ],
				'ShouldDecrementDesiredCapacity' => [ 'shape' => 'ShouldDecrementDesiredCapacity', ],
			],
		],
		'DetachLoadBalancerTargetGroupsResultType'   => [ 'type' => 'structure', 'members' => [], ],
		'DetachLoadBalancerTargetGroupsType'         => [
			'type'     => 'structure',
			'required' => [ 'AutoScalingGroupName', 'TargetGroupARNs', ],
			'members'  => [
				'AutoScalingGroupName' => [ 'shape' => 'ResourceName', ],
				'TargetGroupARNs'      => [ 'shape' => 'TargetGroupARNs', ],
			],
		],
		'DetachLoadBalancersResultType'              => [ 'type' => 'structure', 'members' => [], ],
		'DetachLoadBalancersType'                    => [
			'type'     => 'structure',
			'required' => [
				'AutoScalingGroupName',
				'LoadBalancerNames',
			],
			'members'  => [
				'AutoScalingGroupName' => [ 'shape' => 'ResourceName', ],
				'LoadBalancerNames'    => [ 'shape' => 'LoadBalancerNames', ],
			],
		],
		'DisableMetricsCollectionQuery'              => [
			'type'     => 'structure',
			'required' => [ 'AutoScalingGroupName', ],
			'members'  => [
				'AutoScalingGroupName' => [ 'shape' => 'ResourceName', ],
				'Metrics'              => [ 'shape' => 'Metrics', ],
			],
		],
		'DisableScaleIn'                             => [ 'type' => 'boolean', ],
		'Ebs'                                        => [
			'type'    => 'structure',
			'members' => [
				'SnapshotId'          => [ 'shape' => 'XmlStringMaxLen255', ],
				'VolumeSize'          => [ 'shape' => 'BlockDeviceEbsVolumeSize', ],
				'VolumeType'          => [ 'shape' => 'BlockDeviceEbsVolumeType', ],
				'DeleteOnTermination' => [ 'shape' => 'BlockDeviceEbsDeleteOnTermination', ],
				'Iops'                => [ 'shape' => 'BlockDeviceEbsIops', ],
				'Encrypted'           => [ 'shape' => 'BlockDeviceEbsEncrypted', ],
			],
		],
		'EbsOptimized'                               => [ 'type' => 'boolean', ],
		'EnableMetricsCollectionQuery'               => [
			'type'     => 'structure',
			'required' => [ 'AutoScalingGroupName', 'Granularity', ],
			'members'  => [
				'AutoScalingGroupName' => [ 'shape' => 'ResourceName', ],
				'Metrics'              => [ 'shape' => 'Metrics', ],
				'Granularity'          => [ 'shape' => 'XmlStringMaxLen255', ],
			],
		],
		'EnabledMetric'                              => [
			'type'    => 'structure',
			'members' => [
				'Metric'      => [ 'shape' => 'XmlStringMaxLen255', ],
				'Granularity' => [ 'shape' => 'XmlStringMaxLen255', ],
			],
		],
		'EnabledMetrics'                             => [
			'type'   => 'list',
			'member' => [ 'shape' => 'EnabledMetric', ],
		],
		'EnterStandbyAnswer'                         => [
			'type'    => 'structure',
			'members' => [ 'Activities' => [ 'shape' => 'Activities', ], ],
		],
		'EnterStandbyQuery'                          => [
			'type'     => 'structure',
			'required' => [
				'AutoScalingGroupName',
				'ShouldDecrementDesiredCapacity',
			],
			'members'  => [
				'InstanceIds'                    => [ 'shape' => 'InstanceIds', ],
				'AutoScalingGroupName'           => [ 'shape' => 'ResourceName', ],
				'ShouldDecrementDesiredCapacity' => [ 'shape' => 'ShouldDecrementDesiredCapacity', ],
			],
		],
		'EstimatedInstanceWarmup'                    => [ 'type' => 'integer', ],
		'ExecutePolicyType'                          => [
			'type'     => 'structure',
			'required' => [ 'PolicyName', ],
			'members'  => [
				'AutoScalingGroupName' => [ 'shape' => 'ResourceName', ],
				'PolicyName'           => [ 'shape' => 'ResourceName', ],
				'HonorCooldown'        => [ 'shape' => 'HonorCooldown', ],
				'MetricValue'          => [ 'shape' => 'MetricScale', ],
				'BreachThreshold'      => [ 'shape' => 'MetricScale', ],
			],
		],
		'ExitStandbyAnswer'                          => [
			'type'    => 'structure',
			'members' => [ 'Activities' => [ 'shape' => 'Activities', ], ],
		],
		'ExitStandbyQuery'                           => [
			'type'     => 'structure',
			'required' => [ 'AutoScalingGroupName', ],
			'members'  => [
				'InstanceIds'          => [ 'shape' => 'InstanceIds', ],
				'AutoScalingGroupName' => [ 'shape' => 'ResourceName', ],
			],
		],
		'FailedScheduledUpdateGroupActionRequest'    => [
			'type'     => 'structure',
			'required' => [ 'ScheduledActionName', ],
			'members'  => [
				'ScheduledActionName' => [ 'shape' => 'XmlStringMaxLen255', ],
				'ErrorCode'           => [ 'shape' => 'XmlStringMaxLen64', ],
				'ErrorMessage'        => [ 'shape' => 'XmlString', ],
			],
		],
		'FailedScheduledUpdateGroupActionRequests'   => [
			'type'   => 'list',
			'member' => [ 'shape' => 'FailedScheduledUpdateGroupActionRequest', ],
		],
		'Filter'                                     => [
			'type'    => 'structure',
			'members' => [
				'Name'   => [ 'shape' => 'XmlString', ],
				'Values' => [ 'shape' => 'Values', ],
			],
		],
		'Filters'                                    => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
		'ForceDelete'                                => [ 'type' => 'boolean', ],
		'GlobalTimeout'                              => [ 'type' => 'integer', ],
		'HealthCheckGracePeriod'                     => [ 'type' => 'integer', ],
		'HeartbeatTimeout'                           => [ 'type' => 'integer', ],
		'HonorCooldown'                              => [ 'type' => 'boolean', ],
		'Instance'                                   => [
			'type'     => 'structure',
			'required' => [
				'InstanceId',
				'AvailabilityZone',
				'LifecycleState',
				'HealthStatus',
				'ProtectedFromScaleIn',
			],
			'members'  => [
				'InstanceId'              => [ 'shape' => 'XmlStringMaxLen19', ],
				'AvailabilityZone'        => [ 'shape' => 'XmlStringMaxLen255', ],
				'LifecycleState'          => [ 'shape' => 'LifecycleState', ],
				'HealthStatus'            => [ 'shape' => 'XmlStringMaxLen32', ],
				'LaunchConfigurationName' => [ 'shape' => 'XmlStringMaxLen255', ],
				'LaunchTemplate'          => [ 'shape' => 'LaunchTemplateSpecification', ],
				'ProtectedFromScaleIn'    => [ 'shape' => 'InstanceProtected', ],
			],
		],
		'InstanceIds'                                => [
			'type'   => 'list',
			'member' => [ 'shape' => 'XmlStringMaxLen19', ],
		],
		'InstanceMonitoring'                         => [
			'type'    => 'structure',
			'members' => [ 'Enabled' => [ 'shape' => 'MonitoringEnabled', ], ],
		],
		'InstanceProtected'                          => [ 'type' => 'boolean', ],
		'Instances'                                  => [ 'type' => 'list', 'member' => [ 'shape' => 'Instance', ], ],
		'InstancesDistribution'                      => [
			'type'    => 'structure',
			'members' => [
				'OnDemandAllocationStrategy'          => [ 'shape' => 'XmlString', ],
				'OnDemandBaseCapacity'                => [ 'shape' => 'OnDemandBaseCapacity', ],
				'OnDemandPercentageAboveBaseCapacity' => [ 'shape' => 'OnDemandPercentageAboveBaseCapacity', ],
				'SpotAllocationStrategy'              => [ 'shape' => 'XmlString', ],
				'SpotInstancePools'                   => [ 'shape' => 'SpotInstancePools', ],
				'SpotMaxPrice'                        => [ 'shape' => 'MixedInstanceSpotPrice', ],
			],
		],
		'InvalidNextToken'                           => [
			'type'      => 'structure',
			'members'   => [ 'message' => [ 'shape' => 'XmlStringMaxLen255', ], ],
			'error'     => [
				'code'           => 'InvalidNextToken',
				'httpStatusCode' => 400,
				'senderFault'    => true,
			],
			'exception' => true,
		],
		'LaunchConfiguration'                        => [
			'type'     => 'structure',
			'required' => [ 'LaunchConfigurationName', 'ImageId', 'InstanceType', 'CreatedTime', ],
			'members'  => [
				'LaunchConfigurationName'      => [ 'shape' => 'XmlStringMaxLen255', ],
				'LaunchConfigurationARN'       => [ 'shape' => 'ResourceName', ],
				'ImageId'                      => [ 'shape' => 'XmlStringMaxLen255', ],
				'KeyName'                      => [ 'shape' => 'XmlStringMaxLen255', ],
				'SecurityGroups'               => [ 'shape' => 'SecurityGroups', ],
				'ClassicLinkVPCId'             => [ 'shape' => 'XmlStringMaxLen255', ],
				'ClassicLinkVPCSecurityGroups' => [ 'shape' => 'ClassicLinkVPCSecurityGroups', ],
				'UserData'                     => [ 'shape' => 'XmlStringUserData', ],
				'InstanceType'                 => [ 'shape' => 'XmlStringMaxLen255', ],
				'KernelId'                     => [ 'shape' => 'XmlStringMaxLen255', ],
				'RamdiskId'                    => [ 'shape' => 'XmlStringMaxLen255', ],
				'BlockDeviceMappings'          => [ 'shape' => 'BlockDeviceMappings', ],
				'InstanceMonitoring'           => [ 'shape' => 'InstanceMonitoring', ],
				'SpotPrice'                    => [ 'shape' => 'SpotPrice', ],
				'IamInstanceProfile'           => [ 'shape' => 'XmlStringMaxLen1600', ],
				'CreatedTime'                  => [ 'shape' => 'TimestampType', ],
				'EbsOptimized'                 => [ 'shape' => 'EbsOptimized', ],
				'AssociatePublicIpAddress'     => [ 'shape' => 'AssociatePublicIpAddress', ],
				'PlacementTenancy'             => [ 'shape' => 'XmlStringMaxLen64', ],
			],
		],
		'LaunchConfigurationNameType'                => [
			'type'     => 'structure',
			'required' => [ 'LaunchConfigurationName', ],
			'members'  => [ 'LaunchConfigurationName' => [ 'shape' => 'ResourceName', ], ],
		],
		'LaunchConfigurationNames'                   => [
			'type'   => 'list',
			'member' => [ 'shape' => 'ResourceName', ],
		],
		'LaunchConfigurationNamesType'               => [
			'type'    => 'structure',
			'members' => [
				'LaunchConfigurationNames' => [ 'shape' => 'LaunchConfigurationNames', ],
				'NextToken'                => [ 'shape' => 'XmlString', ],
				'MaxRecords'               => [ 'shape' => 'MaxRecords', ],
			],
		],
		'LaunchConfigurations'                       => [
			'type'   => 'list',
			'member' => [ 'shape' => 'LaunchConfiguration', ],
		],
		'LaunchConfigurationsType'                   => [
			'type'     => 'structure',
			'required' => [ 'LaunchConfigurations', ],
			'members'  => [
				'LaunchConfigurations' => [ 'shape' => 'LaunchConfigurations', ],
				'NextToken'            => [ 'shape' => 'XmlString', ],
			],
		],
		'LaunchTemplate'                             => [
			'type'    => 'structure',
			'members' => [
				'LaunchTemplateSpecification' => [ 'shape' => 'LaunchTemplateSpecification', ],
				'Overrides'                   => [ 'shape' => 'Overrides', ],
			],
		],
		'LaunchTemplateName'                         => [
			'type'    => 'string',
			'max'     => 128,
			'min'     => 3,
			'pattern' => '[a-zA-Z0-9\\(\\)\\.-/_]+',
		],
		'LaunchTemplateOverrides'                    => [
			'type'    => 'structure',
			'members' => [ 'InstanceType' => [ 'shape' => 'XmlStringMaxLen255', ], ],
		],
		'LaunchTemplateSpecification'                => [
			'type'    => 'structure',
			'members' => [
				'LaunchTemplateId'   => [ 'shape' => 'XmlStringMaxLen255', ],
				'LaunchTemplateName' => [ 'shape' => 'LaunchTemplateName', ],
				'Version'            => [ 'shape' => 'XmlStringMaxLen255', ],
			],
		],
		'LifecycleActionResult'                      => [ 'type' => 'string', ],
		'LifecycleActionToken'                       => [ 'type' => 'string', 'max' => 36, 'min' => 36, ],
		'LifecycleHook'                              => [
			'type'    => 'structure',
			'members' => [
				'LifecycleHookName'     => [ 'shape' => 'AsciiStringMaxLen255', ],
				'AutoScalingGroupName'  => [ 'shape' => 'ResourceName', ],
				'LifecycleTransition'   => [ 'shape' => 'LifecycleTransition', ],
				'NotificationTargetARN' => [ 'shape' => 'ResourceName', ],
				'RoleARN'               => [ 'shape' => 'ResourceName', ],
				'NotificationMetadata'  => [ 'shape' => 'XmlStringMaxLen1023', ],
				'HeartbeatTimeout'      => [ 'shape' => 'HeartbeatTimeout', ],
				'GlobalTimeout'         => [ 'shape' => 'GlobalTimeout', ],
				'DefaultResult'         => [ 'shape' => 'LifecycleActionResult', ],
			],
		],
		'LifecycleHookNames'                         => [
			'type'   => 'list',
			'member' => [ 'shape' => 'AsciiStringMaxLen255', ],
			'max'    => 50,
		],
		'LifecycleHookSpecification'                 => [
			'type'     => 'structure',
			'required' => [ 'LifecycleHookName', 'LifecycleTransition', ],
			'members'  => [
				'LifecycleHookName'     => [ 'shape' => 'AsciiStringMaxLen255', ],
				'LifecycleTransition'   => [ 'shape' => 'LifecycleTransition', ],
				'NotificationMetadata'  => [ 'shape' => 'XmlStringMaxLen1023', ],
				'HeartbeatTimeout'      => [ 'shape' => 'HeartbeatTimeout', ],
				'DefaultResult'         => [ 'shape' => 'LifecycleActionResult', ],
				'NotificationTargetARN' => [ 'shape' => 'NotificationTargetResourceName', ],
				'RoleARN'               => [ 'shape' => 'ResourceName', ],
			],
		],
		'LifecycleHookSpecifications'                => [
			'type'   => 'list',
			'member' => [ 'shape' => 'LifecycleHookSpecification', ],
		],
		'LifecycleHooks'                             => [
			'type'   => 'list',
			'member' => [ 'shape' => 'LifecycleHook', ],
		],
		'LifecycleState'                             => [
			'type' => 'string',
			'enum' => [
				'Pending',
				'Pending:Wait',
				'Pending:Proceed',
				'Quarantined',
				'InService',
				'Terminating',
				'Terminating:Wait',
				'Terminating:Proceed',
				'Terminated',
				'Detaching',
				'Detached',
				'EnteringStandby',
				'Standby',
			],
		],
		'LifecycleTransition'                        => [ 'type' => 'string', ],
		'LimitExceededFault'                         => [
			'type'      => 'structure',
			'members'   => [ 'message' => [ 'shape' => 'XmlStringMaxLen255', ], ],
			'error'     => [
				'code'           => 'LimitExceeded',
				'httpStatusCode' => 400,
				'senderFault'    => true,
			],
			'exception' => true,
		],
		'LoadBalancerNames'                          => [
			'type'   => 'list',
			'member' => [ 'shape' => 'XmlStringMaxLen255', ],
		],
		'LoadBalancerState'                          => [
			'type'    => 'structure',
			'members' => [
				'LoadBalancerName' => [ 'shape' => 'XmlStringMaxLen255', ],
				'State'            => [ 'shape' => 'XmlStringMaxLen255', ],
			],
		],
		'LoadBalancerStates'                         => [
			'type'   => 'list',
			'member' => [ 'shape' => 'LoadBalancerState', ],
		],
		'LoadBalancerTargetGroupState'               => [
			'type'    => 'structure',
			'members' => [
				'LoadBalancerTargetGroupARN' => [ 'shape' => 'XmlStringMaxLen511', ],
				'State'                      => [ 'shape' => 'XmlStringMaxLen255', ],
			],
		],
		'LoadBalancerTargetGroupStates'              => [
			'type'   => 'list',
			'member' => [ 'shape' => 'LoadBalancerTargetGroupState', ],
		],
		'MaxNumberOfAutoScalingGroups'               => [ 'type' => 'integer', ],
		'MaxNumberOfLaunchConfigurations'            => [ 'type' => 'integer', ],
		'MaxRecords'                                 => [ 'type' => 'integer', ],
		'MetricCollectionType'                       => [
			'type'    => 'structure',
			'members' => [ 'Metric' => [ 'shape' => 'XmlStringMaxLen255', ], ],
		],
		'MetricCollectionTypes'                      => [
			'type'   => 'list',
			'member' => [ 'shape' => 'MetricCollectionType', ],
		],
		'MetricDimension'                            => [
			'type'     => 'structure',
			'required' => [ 'Name', 'Value', ],
			'members'  => [
				'Name'  => [ 'shape' => 'MetricDimensionName', ],
				'Value' => [ 'shape' => 'MetricDimensionValue', ],
			],
		],
		'MetricDimensionName'                        => [ 'type' => 'string', ],
		'MetricDimensionValue'                       => [ 'type' => 'string', ],
		'MetricDimensions'                           => [
			'type'   => 'list',
			'member' => [ 'shape' => 'MetricDimension', ],
		],
		'MetricGranularityType'                      => [
			'type'    => 'structure',
			'members' => [ 'Granularity' => [ 'shape' => 'XmlStringMaxLen255', ], ],
		],
		'MetricGranularityTypes'                     => [
			'type'   => 'list',
			'member' => [ 'shape' => 'MetricGranularityType', ],
		],
		'MetricName'                                 => [ 'type' => 'string', ],
		'MetricNamespace'                            => [ 'type' => 'string', ],
		'MetricScale'                                => [ 'type' => 'double', ],
		'MetricStatistic'                            => [
			'type' => 'string',
			'enum' => [
				'Average',
				'Minimum',
				'Maximum',
				'SampleCount',
				'Sum',
			],
		],
		'MetricType'                                 => [
			'type' => 'string',
			'enum' => [
				'ASGAverageCPUUtilization',
				'ASGAverageNetworkIn',
				'ASGAverageNetworkOut',
				'ALBRequestCountPerTarget',
			],
		],
		'MetricUnit'                                 => [ 'type' => 'string', ],
		'Metrics'                                    => [
			'type'   => 'list',
			'member' => [ 'shape' => 'XmlStringMaxLen255', ],
		],
		'MinAdjustmentMagnitude'                     => [ 'type' => 'integer', ],
		'MinAdjustmentStep'                          => [ 'type' => 'integer', 'deprecated' => true, ],
		'MixedInstanceSpotPrice'                     => [ 'type' => 'string', 'max' => 255, 'min' => 0, ],
		'MixedInstancesPolicy'                       => [
			'type'    => 'structure',
			'members' => [
				'LaunchTemplate'        => [ 'shape' => 'LaunchTemplate', ],
				'InstancesDistribution' => [ 'shape' => 'InstancesDistribution', ],
			],
		],
		'MonitoringEnabled'                          => [ 'type' => 'boolean', ],
		'NoDevice'                                   => [ 'type' => 'boolean', ],
		'NotificationConfiguration'                  => [
			'type'    => 'structure',
			'members' => [
				'AutoScalingGroupName' => [ 'shape' => 'ResourceName', ],
				'TopicARN'             => [ 'shape' => 'ResourceName', ],
				'NotificationType'     => [ 'shape' => 'XmlStringMaxLen255', ],
			],
		],
		'NotificationConfigurations'                 => [
			'type'   => 'list',
			'member' => [ 'shape' => 'NotificationConfiguration', ],
		],
		'NotificationTargetResourceName'             => [
			'type'    => 'string',
			'max'     => 1600,
			'min'     => 0,
			'pattern' => '[\\u0020-\\uD7FF\\uE000-\\uFFFD\\uD800\\uDC00-\\uDBFF\\uDFFF\\r\\n\\t]*',
		],
		'NumberOfAutoScalingGroups'                  => [ 'type' => 'integer', ],
		'NumberOfLaunchConfigurations'               => [ 'type' => 'integer', ],
		'OnDemandBaseCapacity'                       => [ 'type' => 'integer', ],
		'OnDemandPercentageAboveBaseCapacity'        => [ 'type' => 'integer', ],
		'Overrides'                                  => [
			'type'   => 'list',
			'member' => [ 'shape' => 'LaunchTemplateOverrides', ],
		],
		'PoliciesType'                               => [
			'type'    => 'structure',
			'members' => [
				'ScalingPolicies' => [ 'shape' => 'ScalingPolicies', ],
				'NextToken'       => [ 'shape' => 'XmlString', ],
			],
		],
		'PolicyARNType'                              => [
			'type'    => 'structure',
			'members' => [
				'PolicyARN' => [ 'shape' => 'ResourceName', ],
				'Alarms'    => [ 'shape' => 'Alarms', ],
			],
		],
		'PolicyIncrement'                            => [ 'type' => 'integer', ],
		'PolicyNames'                                => [
			'type'   => 'list',
			'member' => [ 'shape' => 'ResourceName', ],
		],
		'PolicyTypes'                                => [
			'type'   => 'list',
			'member' => [ 'shape' => 'XmlStringMaxLen64', ],
		],
		'PredefinedMetricSpecification'              => [
			'type'     => 'structure',
			'required' => [ 'PredefinedMetricType', ],
			'members'  => [
				'PredefinedMetricType' => [ 'shape' => 'MetricType', ],
				'ResourceLabel'        => [ 'shape' => 'XmlStringMaxLen1023', ],
			],
		],
		'ProcessNames'                               => [
			'type'   => 'list',
			'member' => [ 'shape' => 'XmlStringMaxLen255', ],
		],
		'ProcessType'                                => [
			'type'     => 'structure',
			'required' => [ 'ProcessName', ],
			'members'  => [ 'ProcessName' => [ 'shape' => 'XmlStringMaxLen255', ], ],
		],
		'Processes'                                  => [
			'type'   => 'list',
			'member' => [ 'shape' => 'ProcessType', ],
		],
		'ProcessesType'                              => [
			'type'    => 'structure',
			'members' => [ 'Processes' => [ 'shape' => 'Processes', ], ],
		],
		'Progress'                                   => [ 'type' => 'integer', ],
		'PropagateAtLaunch'                          => [ 'type' => 'boolean', ],
		'ProtectedFromScaleIn'                       => [ 'type' => 'boolean', ],
		'PutLifecycleHookAnswer'                     => [ 'type' => 'structure', 'members' => [], ],
		'PutLifecycleHookType'                       => [
			'type'     => 'structure',
			'required' => [
				'LifecycleHookName',
				'AutoScalingGroupName',
			],
			'members'  => [
				'LifecycleHookName'     => [ 'shape' => 'AsciiStringMaxLen255', ],
				'AutoScalingGroupName'  => [ 'shape' => 'ResourceName', ],
				'LifecycleTransition'   => [ 'shape' => 'LifecycleTransition', ],
				'RoleARN'               => [ 'shape' => 'ResourceName', ],
				'NotificationTargetARN' => [ 'shape' => 'NotificationTargetResourceName', ],
				'NotificationMetadata'  => [ 'shape' => 'XmlStringMaxLen1023', ],
				'HeartbeatTimeout'      => [ 'shape' => 'HeartbeatTimeout', ],
				'DefaultResult'         => [ 'shape' => 'LifecycleActionResult', ],
			],
		],
		'PutNotificationConfigurationType'           => [
			'type'     => 'structure',
			'required' => [
				'AutoScalingGroupName',
				'TopicARN',
				'NotificationTypes',
			],
			'members'  => [
				'AutoScalingGroupName' => [ 'shape' => 'ResourceName', ],
				'TopicARN'             => [ 'shape' => 'ResourceName', ],
				'NotificationTypes'    => [ 'shape' => 'AutoScalingNotificationTypes', ],
			],
		],
		'PutScalingPolicyType'                       => [
			'type'     => 'structure',
			'required' => [ 'AutoScalingGroupName', 'PolicyName', ],
			'members'  => [
				'AutoScalingGroupName'        => [ 'shape' => 'ResourceName', ],
				'PolicyName'                  => [ 'shape' => 'XmlStringMaxLen255', ],
				'PolicyType'                  => [ 'shape' => 'XmlStringMaxLen64', ],
				'AdjustmentType'              => [ 'shape' => 'XmlStringMaxLen255', ],
				'MinAdjustmentStep'           => [ 'shape' => 'MinAdjustmentStep', ],
				'MinAdjustmentMagnitude'      => [ 'shape' => 'MinAdjustmentMagnitude', ],
				'ScalingAdjustment'           => [ 'shape' => 'PolicyIncrement', ],
				'Cooldown'                    => [ 'shape' => 'Cooldown', ],
				'MetricAggregationType'       => [ 'shape' => 'XmlStringMaxLen32', ],
				'StepAdjustments'             => [ 'shape' => 'StepAdjustments', ],
				'EstimatedInstanceWarmup'     => [ 'shape' => 'EstimatedInstanceWarmup', ],
				'TargetTrackingConfiguration' => [ 'shape' => 'TargetTrackingConfiguration', ],
			],
		],
		'PutScheduledUpdateGroupActionType'          => [
			'type'     => 'structure',
			'required' => [
				'AutoScalingGroupName',
				'ScheduledActionName',
			],
			'members'  => [
				'AutoScalingGroupName' => [ 'shape' => 'ResourceName', ],
				'ScheduledActionName'  => [ 'shape' => 'XmlStringMaxLen255', ],
				'Time'                 => [ 'shape' => 'TimestampType', ],
				'StartTime'            => [ 'shape' => 'TimestampType', ],
				'EndTime'              => [ 'shape' => 'TimestampType', ],
				'Recurrence'           => [ 'shape' => 'XmlStringMaxLen255', ],
				'MinSize'              => [ 'shape' => 'AutoScalingGroupMinSize', ],
				'MaxSize'              => [ 'shape' => 'AutoScalingGroupMaxSize', ],
				'DesiredCapacity'      => [ 'shape' => 'AutoScalingGroupDesiredCapacity', ],
			],
		],
		'RecordLifecycleActionHeartbeatAnswer'       => [ 'type' => 'structure', 'members' => [], ],
		'RecordLifecycleActionHeartbeatType'         => [
			'type'     => 'structure',
			'required' => [
				'LifecycleHookName',
				'AutoScalingGroupName',
			],
			'members'  => [
				'LifecycleHookName'    => [ 'shape' => 'AsciiStringMaxLen255', ],
				'AutoScalingGroupName' => [ 'shape' => 'ResourceName', ],
				'LifecycleActionToken' => [ 'shape' => 'LifecycleActionToken', ],
				'InstanceId'           => [ 'shape' => 'XmlStringMaxLen19', ],
			],
		],
		'ResourceContentionFault'                    => [
			'type'      => 'structure',
			'members'   => [ 'message' => [ 'shape' => 'XmlStringMaxLen255', ], ],
			'error'     => [
				'code'           => 'ResourceContention',
				'httpStatusCode' => 500,
				'senderFault'    => true,
			],
			'exception' => true,
		],
		'ResourceInUseFault'                         => [
			'type'      => 'structure',
			'members'   => [ 'message' => [ 'shape' => 'XmlStringMaxLen255', ], ],
			'error'     => [
				'code'           => 'ResourceInUse',
				'httpStatusCode' => 400,
				'senderFault'    => true,
			],
			'exception' => true,
		],
		'ResourceName'                               => [
			'type'    => 'string',
			'max'     => 1600,
			'min'     => 1,
			'pattern' => '[\\u0020-\\uD7FF\\uE000-\\uFFFD\\uD800\\uDC00-\\uDBFF\\uDFFF\\r\\n\\t]*',
		],
		'ScalingActivityInProgressFault'             => [
			'type'      => 'structure',
			'members'   => [ 'message' => [ 'shape' => 'XmlStringMaxLen255', ], ],
			'error'     => [
				'code'           => 'ScalingActivityInProgress',
				'httpStatusCode' => 400,
				'senderFault'    => true,
			],
			'exception' => true,
		],
		'ScalingActivityStatusCode'                  => [
			'type' => 'string',
			'enum' => [
				'PendingSpotBidPlacement',
				'WaitingForSpotInstanceRequestId',
				'WaitingForSpotInstanceId',
				'WaitingForInstanceId',
				'PreInService',
				'InProgress',
				'WaitingForELBConnectionDraining',
				'MidLifecycleAction',
				'WaitingForInstanceWarmup',
				'Successful',
				'Failed',
				'Cancelled',
			],
		],
		'ScalingPolicies'                            => [
			'type'   => 'list',
			'member' => [ 'shape' => 'ScalingPolicy', ],
		],
		'ScalingPolicy'                              => [
			'type'    => 'structure',
			'members' => [
				'AutoScalingGroupName'        => [ 'shape' => 'XmlStringMaxLen255', ],
				'PolicyName'                  => [ 'shape' => 'XmlStringMaxLen255', ],
				'PolicyARN'                   => [ 'shape' => 'ResourceName', ],
				'PolicyType'                  => [ 'shape' => 'XmlStringMaxLen64', ],
				'AdjustmentType'              => [ 'shape' => 'XmlStringMaxLen255', ],
				'MinAdjustmentStep'           => [ 'shape' => 'MinAdjustmentStep', ],
				'MinAdjustmentMagnitude'      => [ 'shape' => 'MinAdjustmentMagnitude', ],
				'ScalingAdjustment'           => [ 'shape' => 'PolicyIncrement', ],
				'Cooldown'                    => [ 'shape' => 'Cooldown', ],
				'StepAdjustments'             => [ 'shape' => 'StepAdjustments', ],
				'MetricAggregationType'       => [ 'shape' => 'XmlStringMaxLen32', ],
				'EstimatedInstanceWarmup'     => [ 'shape' => 'EstimatedInstanceWarmup', ],
				'Alarms'                      => [ 'shape' => 'Alarms', ],
				'TargetTrackingConfiguration' => [ 'shape' => 'TargetTrackingConfiguration', ],
			],
		],
		'ScalingProcessQuery'                        => [
			'type'     => 'structure',
			'required' => [ 'AutoScalingGroupName', ],
			'members'  => [
				'AutoScalingGroupName' => [ 'shape' => 'ResourceName', ],
				'ScalingProcesses'     => [ 'shape' => 'ProcessNames', ],
			],
		],
		'ScheduledActionNames'                       => [
			'type'   => 'list',
			'member' => [ 'shape' => 'ResourceName', ],
		],
		'ScheduledActionsType'                       => [
			'type'    => 'structure',
			'members' => [
				'ScheduledUpdateGroupActions' => [ 'shape' => 'ScheduledUpdateGroupActions', ],
				'NextToken'                   => [ 'shape' => 'XmlString', ],
			],
		],
		'ScheduledUpdateGroupAction'                 => [
			'type'    => 'structure',
			'members' => [
				'AutoScalingGroupName' => [ 'shape' => 'XmlStringMaxLen255', ],
				'ScheduledActionName'  => [ 'shape' => 'XmlStringMaxLen255', ],
				'ScheduledActionARN'   => [ 'shape' => 'ResourceName', ],
				'Time'                 => [ 'shape' => 'TimestampType', ],
				'StartTime'            => [ 'shape' => 'TimestampType', ],
				'EndTime'              => [ 'shape' => 'TimestampType', ],
				'Recurrence'           => [ 'shape' => 'XmlStringMaxLen255', ],
				'MinSize'              => [ 'shape' => 'AutoScalingGroupMinSize', ],
				'MaxSize'              => [ 'shape' => 'AutoScalingGroupMaxSize', ],
				'DesiredCapacity'      => [ 'shape' => 'AutoScalingGroupDesiredCapacity', ],
			],
		],
		'ScheduledUpdateGroupActionRequest'          => [
			'type'     => 'structure',
			'required' => [ 'ScheduledActionName', ],
			'members'  => [
				'ScheduledActionName' => [ 'shape' => 'XmlStringMaxLen255', ],
				'StartTime'           => [ 'shape' => 'TimestampType', ],
				'EndTime'             => [ 'shape' => 'TimestampType', ],
				'Recurrence'          => [ 'shape' => 'XmlStringMaxLen255', ],
				'MinSize'             => [ 'shape' => 'AutoScalingGroupMinSize', ],
				'MaxSize'             => [ 'shape' => 'AutoScalingGroupMaxSize', ],
				'DesiredCapacity'     => [ 'shape' => 'AutoScalingGroupDesiredCapacity', ],
			],
		],
		'ScheduledUpdateGroupActionRequests'         => [
			'type'   => 'list',
			'member' => [ 'shape' => 'ScheduledUpdateGroupActionRequest', ],
		],
		'ScheduledUpdateGroupActions'                => [
			'type'   => 'list',
			'member' => [ 'shape' => 'ScheduledUpdateGroupAction', ],
		],
		'SecurityGroups'                             => [ 'type' => 'list', 'member' => [ 'shape' => 'XmlString', ], ],
		'ServiceLinkedRoleFailure'                   => [
			'type'      => 'structure',
			'members'   => [ 'message' => [ 'shape' => 'XmlStringMaxLen255', ], ],
			'error'     => [
				'code'           => 'ServiceLinkedRoleFailure',
				'httpStatusCode' => 500,
				'senderFault'    => true,
			],
			'exception' => true,
		],
		'SetDesiredCapacityType'                     => [
			'type'     => 'structure',
			'required' => [ 'AutoScalingGroupName', 'DesiredCapacity', ],
			'members'  => [
				'AutoScalingGroupName' => [ 'shape' => 'ResourceName', ],
				'DesiredCapacity'      => [ 'shape' => 'AutoScalingGroupDesiredCapacity', ],
				'HonorCooldown'        => [ 'shape' => 'HonorCooldown', ],
			],
		],
		'SetInstanceHealthQuery'                     => [
			'type'     => 'structure',
			'required' => [ 'InstanceId', 'HealthStatus', ],
			'members'  => [
				'InstanceId'               => [ 'shape' => 'XmlStringMaxLen19', ],
				'HealthStatus'             => [ 'shape' => 'XmlStringMaxLen32', ],
				'ShouldRespectGracePeriod' => [ 'shape' => 'ShouldRespectGracePeriod', ],
			],
		],
		'SetInstanceProtectionAnswer'                => [ 'type' => 'structure', 'members' => [], ],
		'SetInstanceProtectionQuery'                 => [
			'type'     => 'structure',
			'required' => [
				'InstanceIds',
				'AutoScalingGroupName',
				'ProtectedFromScaleIn',
			],
			'members'  => [
				'InstanceIds'          => [ 'shape' => 'InstanceIds', ],
				'AutoScalingGroupName' => [ 'shape' => 'ResourceName', ],
				'ProtectedFromScaleIn' => [ 'shape' => 'ProtectedFromScaleIn', ],
			],
		],
		'ShouldDecrementDesiredCapacity'             => [ 'type' => 'boolean', ],
		'ShouldRespectGracePeriod'                   => [ 'type' => 'boolean', ],
		'SpotInstancePools'                          => [ 'type' => 'integer', ],
		'SpotPrice'                                  => [ 'type' => 'string', 'max' => 255, 'min' => 1, ],
		'StepAdjustment'                             => [
			'type'     => 'structure',
			'required' => [ 'ScalingAdjustment', ],
			'members'  => [
				'MetricIntervalLowerBound' => [ 'shape' => 'MetricScale', ],
				'MetricIntervalUpperBound' => [ 'shape' => 'MetricScale', ],
				'ScalingAdjustment'        => [ 'shape' => 'PolicyIncrement', ],
			],
		],
		'StepAdjustments'                            => [
			'type'   => 'list',
			'member' => [ 'shape' => 'StepAdjustment', ],
		],
		'SuspendedProcess'                           => [
			'type'    => 'structure',
			'members' => [
				'ProcessName'      => [ 'shape' => 'XmlStringMaxLen255', ],
				'SuspensionReason' => [ 'shape' => 'XmlStringMaxLen255', ],
			],
		],
		'SuspendedProcesses'                         => [
			'type'   => 'list',
			'member' => [ 'shape' => 'SuspendedProcess', ],
		],
		'Tag'                                        => [
			'type'     => 'structure',
			'required' => [ 'Key', ],
			'members'  => [
				'ResourceId'        => [ 'shape' => 'XmlString', ],
				'ResourceType'      => [ 'shape' => 'XmlString', ],
				'Key'               => [ 'shape' => 'TagKey', ],
				'Value'             => [ 'shape' => 'TagValue', ],
				'PropagateAtLaunch' => [ 'shape' => 'PropagateAtLaunch', ],
			],
		],
		'TagDescription'                             => [
			'type'    => 'structure',
			'members' => [
				'ResourceId'        => [ 'shape' => 'XmlString', ],
				'ResourceType'      => [ 'shape' => 'XmlString', ],
				'Key'               => [ 'shape' => 'TagKey', ],
				'Value'             => [ 'shape' => 'TagValue', ],
				'PropagateAtLaunch' => [ 'shape' => 'PropagateAtLaunch', ],
			],
		],
		'TagDescriptionList'                         => [
			'type'   => 'list',
			'member' => [ 'shape' => 'TagDescription', ],
		],
		'TagKey'                                     => [
			'type'    => 'string',
			'max'     => 128,
			'min'     => 1,
			'pattern' => '[\\u0020-\\uD7FF\\uE000-\\uFFFD\\uD800\\uDC00-\\uDBFF\\uDFFF\\r\\n\\t]*',
		],
		'TagValue'                                   => [
			'type'    => 'string',
			'max'     => 256,
			'min'     => 0,
			'pattern' => '[\\u0020-\\uD7FF\\uE000-\\uFFFD\\uD800\\uDC00-\\uDBFF\\uDFFF\\r\\n\\t]*',
		],
		'Tags'                                       => [ 'type' => 'list', 'member' => [ 'shape' => 'Tag', ], ],
		'TagsType'                                   => [
			'type'    => 'structure',
			'members' => [
				'Tags'      => [ 'shape' => 'TagDescriptionList', ],
				'NextToken' => [ 'shape' => 'XmlString', ],
			],
		],
		'TargetGroupARNs'                            => [
			'type'   => 'list',
			'member' => [ 'shape' => 'XmlStringMaxLen511', ],
		],
		'TargetTrackingConfiguration'                => [
			'type'     => 'structure',
			'required' => [ 'TargetValue', ],
			'members'  => [
				'PredefinedMetricSpecification' => [ 'shape' => 'PredefinedMetricSpecification', ],
				'CustomizedMetricSpecification' => [ 'shape' => 'CustomizedMetricSpecification', ],
				'TargetValue'                   => [ 'shape' => 'MetricScale', ],
				'DisableScaleIn'                => [ 'shape' => 'DisableScaleIn', ],
			],
		],
		'TerminateInstanceInAutoScalingGroupType'    => [
			'type'     => 'structure',
			'required' => [
				'InstanceId',
				'ShouldDecrementDesiredCapacity',
			],
			'members'  => [
				'InstanceId'                     => [ 'shape' => 'XmlStringMaxLen19', ],
				'ShouldDecrementDesiredCapacity' => [ 'shape' => 'ShouldDecrementDesiredCapacity', ],
			],
		],
		'TerminationPolicies'                        => [
			'type'   => 'list',
			'member' => [ 'shape' => 'XmlStringMaxLen1600', ],
		],
		'TimestampType'                              => [ 'type' => 'timestamp', ],
		'UpdateAutoScalingGroupType'                 => [
			'type'     => 'structure',
			'required' => [ 'AutoScalingGroupName', ],
			'members'  => [
				'AutoScalingGroupName'             => [ 'shape' => 'ResourceName', ],
				'LaunchConfigurationName'          => [ 'shape' => 'ResourceName', ],
				'LaunchTemplate'                   => [ 'shape' => 'LaunchTemplateSpecification', ],
				'MixedInstancesPolicy'             => [ 'shape' => 'MixedInstancesPolicy', ],
				'MinSize'                          => [ 'shape' => 'AutoScalingGroupMinSize', ],
				'MaxSize'                          => [ 'shape' => 'AutoScalingGroupMaxSize', ],
				'DesiredCapacity'                  => [ 'shape' => 'AutoScalingGroupDesiredCapacity', ],
				'DefaultCooldown'                  => [ 'shape' => 'Cooldown', ],
				'AvailabilityZones'                => [ 'shape' => 'AvailabilityZones', ],
				'HealthCheckType'                  => [ 'shape' => 'XmlStringMaxLen32', ],
				'HealthCheckGracePeriod'           => [ 'shape' => 'HealthCheckGracePeriod', ],
				'PlacementGroup'                   => [ 'shape' => 'XmlStringMaxLen255', ],
				'VPCZoneIdentifier'                => [ 'shape' => 'XmlStringMaxLen2047', ],
				'TerminationPolicies'              => [ 'shape' => 'TerminationPolicies', ],
				'NewInstancesProtectedFromScaleIn' => [ 'shape' => 'InstanceProtected', ],
				'ServiceLinkedRoleARN'             => [ 'shape' => 'ResourceName', ],
			],
		],
		'Values'                                     => [ 'type' => 'list', 'member' => [ 'shape' => 'XmlString', ], ],
		'XmlString'                                  => [
			'type'    => 'string',
			'pattern' => '[\\u0020-\\uD7FF\\uE000-\\uFFFD\\uD800\\uDC00-\\uDBFF\\uDFFF\\r\\n\\t]*',
		],
		'XmlStringMaxLen1023'                        => [
			'type'    => 'string',
			'max'     => 1023,
			'min'     => 1,
			'pattern' => '[\\u0020-\\uD7FF\\uE000-\\uFFFD\\uD800\\uDC00-\\uDBFF\\uDFFF\\r\\n\\t]*',
		],
		'XmlStringMaxLen1600'                        => [
			'type'    => 'string',
			'max'     => 1600,
			'min'     => 1,
			'pattern' => '[\\u0020-\\uD7FF\\uE000-\\uFFFD\\uD800\\uDC00-\\uDBFF\\uDFFF\\r\\n\\t]*',
		],
		'XmlStringMaxLen19'                          => [
			'type'    => 'string',
			'max'     => 19,
			'min'     => 1,
			'pattern' => '[\\u0020-\\uD7FF\\uE000-\\uFFFD\\uD800\\uDC00-\\uDBFF\\uDFFF\\r\\n\\t]*',
		],
		'XmlStringMaxLen2047'                        => [
			'type'    => 'string',
			'max'     => 2047,
			'min'     => 1,
			'pattern' => '[\\u0020-\\uD7FF\\uE000-\\uFFFD\\uD800\\uDC00-\\uDBFF\\uDFFF\\r\\n\\t]*',
		],
		'XmlStringMaxLen255'                         => [
			'type'    => 'string',
			'max'     => 255,
			'min'     => 1,
			'pattern' => '[\\u0020-\\uD7FF\\uE000-\\uFFFD\\uD800\\uDC00-\\uDBFF\\uDFFF\\r\\n\\t]*',
		],
		'XmlStringMaxLen32'                          => [
			'type'    => 'string',
			'max'     => 32,
			'min'     => 1,
			'pattern' => '[\\u0020-\\uD7FF\\uE000-\\uFFFD\\uD800\\uDC00-\\uDBFF\\uDFFF\\r\\n\\t]*',
		],
		'XmlStringMaxLen511'                         => [
			'type'    => 'string',
			'max'     => 511,
			'min'     => 1,
			'pattern' => '[\\u0020-\\uD7FF\\uE000-\\uFFFD\\uD800\\uDC00-\\uDBFF\\uDFFF\\r\\n\\t]*',
		],
		'XmlStringMaxLen64'                          => [
			'type'    => 'string',
			'max'     => 64,
			'min'     => 1,
			'pattern' => '[\\u0020-\\uD7FF\\uE000-\\uFFFD\\uD800\\uDC00-\\uDBFF\\uDFFF\\r\\n\\t]*',
		],
		'XmlStringUserData'                          => [
			'type'    => 'string',
			'max'     => 21847,
			'pattern' => '[\\u0020-\\uD7FF\\uE000-\\uFFFD\\uD800\\uDC00-\\uDBFF\\uDFFF\\r\\n\\t]*',
		],
	],
];
