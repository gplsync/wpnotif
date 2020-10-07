<?php
// This file was auto-generated from sdk-root/src/data/route53/2013-04-01/api-2.json
return [
	'version'    => '2.0',
	'metadata'   => [
		'apiVersion'          => '2013-04-01',
		'endpointPrefix'      => 'route53',
		'globalEndpoint'      => 'route53.amazonaws.com',
		'protocol'            => 'rest-xml',
		'serviceAbbreviation' => 'Route 53',
		'serviceFullName'     => 'Amazon Route 53',
		'serviceId'           => 'Route 53',
		'signatureVersion'    => 'v4',
		'uid'                 => 'route53-2013-04-01',
	],
	'operations' => [
		'AssociateVPCWithHostedZone'             => [
			'name'   => 'AssociateVPCWithHostedZone',
			'http'   => [
				'method'     => 'POST',
				'requestUri' => '/2013-04-01/hostedzone/{Id}/associatevpc',
			],
			'input'  => [
				'shape'        => 'AssociateVPCWithHostedZoneRequest',
				'locationName' => 'AssociateVPCWithHostedZoneRequest',
				'xmlNamespace' => [ 'uri' => 'https://route53.amazonaws.com/doc/2013-04-01/', ],
			],
			'output' => [ 'shape' => 'AssociateVPCWithHostedZoneResponse', ],
			'errors' => [
				[ 'shape' => 'NoSuchHostedZone', ],
				[ 'shape' => 'NotAuthorizedException', ],
				[ 'shape' => 'InvalidVPCId', ],
				[ 'shape' => 'InvalidInput', ],
				[ 'shape' => 'PublicZoneVPCAssociation', ],
				[ 'shape' => 'ConflictingDomainExists', ],
				[ 'shape' => 'LimitsExceeded', ],
			],
		],
		'ChangeResourceRecordSets'               => [
			'name'   => 'ChangeResourceRecordSets',
			'http'   => [
				'method'     => 'POST',
				'requestUri' => '/2013-04-01/hostedzone/{Id}/rrset/',
			],
			'input'  => [
				'shape'        => 'ChangeResourceRecordSetsRequest',
				'locationName' => 'ChangeResourceRecordSetsRequest',
				'xmlNamespace' => [ 'uri' => 'https://route53.amazonaws.com/doc/2013-04-01/', ],
			],
			'output' => [ 'shape' => 'ChangeResourceRecordSetsResponse', ],
			'errors' => [
				[ 'shape' => 'NoSuchHostedZone', ],
				[ 'shape' => 'NoSuchHealthCheck', ],
				[ 'shape' => 'InvalidChangeBatch', ],
				[ 'shape' => 'InvalidInput', ],
				[ 'shape' => 'PriorRequestNotComplete', ],
			],
		],
		'ChangeTagsForResource'                  => [
			'name'   => 'ChangeTagsForResource',
			'http'   => [
				'method'     => 'POST',
				'requestUri' => '/2013-04-01/tags/{ResourceType}/{ResourceId}',
			],
			'input'  => [
				'shape'        => 'ChangeTagsForResourceRequest',
				'locationName' => 'ChangeTagsForResourceRequest',
				'xmlNamespace' => [ 'uri' => 'https://route53.amazonaws.com/doc/2013-04-01/', ],
			],
			'output' => [ 'shape' => 'ChangeTagsForResourceResponse', ],
			'errors' => [
				[ 'shape' => 'InvalidInput', ],
				[ 'shape' => 'NoSuchHealthCheck', ],
				[ 'shape' => 'NoSuchHostedZone', ],
				[ 'shape' => 'PriorRequestNotComplete', ],
				[ 'shape' => 'ThrottlingException', ],
			],
		],
		'CreateHealthCheck'                      => [
			'name'   => 'CreateHealthCheck',
			'http'   => [
				'method'       => 'POST',
				'requestUri'   => '/2013-04-01/healthcheck',
				'responseCode' => 201,
			],
			'input'  => [
				'shape'        => 'CreateHealthCheckRequest',
				'locationName' => 'CreateHealthCheckRequest',
				'xmlNamespace' => [ 'uri' => 'https://route53.amazonaws.com/doc/2013-04-01/', ],
			],
			'output' => [ 'shape' => 'CreateHealthCheckResponse', ],
			'errors' => [
				[ 'shape' => 'TooManyHealthChecks', ],
				[ 'shape' => 'HealthCheckAlreadyExists', ],
				[ 'shape' => 'InvalidInput', ],
			],
		],
		'CreateHostedZone'                       => [
			'name'   => 'CreateHostedZone',
			'http'   => [
				'method'       => 'POST',
				'requestUri'   => '/2013-04-01/hostedzone',
				'responseCode' => 201,
			],
			'input'  => [
				'shape'        => 'CreateHostedZoneRequest',
				'locationName' => 'CreateHostedZoneRequest',
				'xmlNamespace' => [ 'uri' => 'https://route53.amazonaws.com/doc/2013-04-01/', ],
			],
			'output' => [ 'shape' => 'CreateHostedZoneResponse', ],
			'errors' => [
				[ 'shape' => 'InvalidDomainName', ],
				[ 'shape' => 'HostedZoneAlreadyExists', ],
				[ 'shape' => 'TooManyHostedZones', ],
				[ 'shape' => 'InvalidVPCId', ],
				[ 'shape' => 'InvalidInput', ],
				[ 'shape' => 'DelegationSetNotAvailable', ],
				[ 'shape' => 'ConflictingDomainExists', ],
				[ 'shape' => 'NoSuchDelegationSet', ],
				[ 'shape' => 'DelegationSetNotReusable', ],
			],
		],
		'CreateQueryLoggingConfig'               => [
			'name'   => 'CreateQueryLoggingConfig',
			'http'   => [
				'method'       => 'POST',
				'requestUri'   => '/2013-04-01/queryloggingconfig',
				'responseCode' => 201,
			],
			'input'  => [
				'shape'        => 'CreateQueryLoggingConfigRequest',
				'locationName' => 'CreateQueryLoggingConfigRequest',
				'xmlNamespace' => [ 'uri' => 'https://route53.amazonaws.com/doc/2013-04-01/', ],
			],
			'output' => [ 'shape' => 'CreateQueryLoggingConfigResponse', ],
			'errors' => [
				[ 'shape' => 'ConcurrentModification', ],
				[ 'shape' => 'NoSuchHostedZone', ],
				[ 'shape' => 'NoSuchCloudWatchLogsLogGroup', ],
				[ 'shape' => 'InvalidInput', ],
				[ 'shape' => 'QueryLoggingConfigAlreadyExists', ],
				[ 'shape' => 'InsufficientCloudWatchLogsResourcePolicy', ],
			],
		],
		'CreateReusableDelegationSet'            => [
			'name'   => 'CreateReusableDelegationSet',
			'http'   => [
				'method'       => 'POST',
				'requestUri'   => '/2013-04-01/delegationset',
				'responseCode' => 201,
			],
			'input'  => [
				'shape'        => 'CreateReusableDelegationSetRequest',
				'locationName' => 'CreateReusableDelegationSetRequest',
				'xmlNamespace' => [ 'uri' => 'https://route53.amazonaws.com/doc/2013-04-01/', ],
			],
			'output' => [ 'shape' => 'CreateReusableDelegationSetResponse', ],
			'errors' => [
				[ 'shape' => 'DelegationSetAlreadyCreated', ],
				[ 'shape' => 'LimitsExceeded', ],
				[ 'shape' => 'HostedZoneNotFound', ],
				[ 'shape' => 'InvalidArgument', ],
				[ 'shape' => 'InvalidInput', ],
				[ 'shape' => 'DelegationSetNotAvailable', ],
				[ 'shape' => 'DelegationSetAlreadyReusable', ],
			],
		],
		'CreateTrafficPolicy'                    => [
			'name'   => 'CreateTrafficPolicy',
			'http'   => [
				'method'       => 'POST',
				'requestUri'   => '/2013-04-01/trafficpolicy',
				'responseCode' => 201,
			],
			'input'  => [
				'shape'        => 'CreateTrafficPolicyRequest',
				'locationName' => 'CreateTrafficPolicyRequest',
				'xmlNamespace' => [ 'uri' => 'https://route53.amazonaws.com/doc/2013-04-01/', ],
			],
			'output' => [ 'shape' => 'CreateTrafficPolicyResponse', ],
			'errors' => [
				[ 'shape' => 'InvalidInput', ],
				[ 'shape' => 'TooManyTrafficPolicies', ],
				[ 'shape' => 'TrafficPolicyAlreadyExists', ],
				[ 'shape' => 'InvalidTrafficPolicyDocument', ],
			],
		],
		'CreateTrafficPolicyInstance'            => [
			'name'   => 'CreateTrafficPolicyInstance',
			'http'   => [
				'method'       => 'POST',
				'requestUri'   => '/2013-04-01/trafficpolicyinstance',
				'responseCode' => 201,
			],
			'input'  => [
				'shape'        => 'CreateTrafficPolicyInstanceRequest',
				'locationName' => 'CreateTrafficPolicyInstanceRequest',
				'xmlNamespace' => [ 'uri' => 'https://route53.amazonaws.com/doc/2013-04-01/', ],
			],
			'output' => [ 'shape' => 'CreateTrafficPolicyInstanceResponse', ],
			'errors' => [
				[ 'shape' => 'NoSuchHostedZone', ],
				[ 'shape' => 'InvalidInput', ],
				[ 'shape' => 'TooManyTrafficPolicyInstances', ],
				[ 'shape' => 'NoSuchTrafficPolicy', ],
				[ 'shape' => 'TrafficPolicyInstanceAlreadyExists', ],
			],
		],
		'CreateTrafficPolicyVersion'             => [
			'name'   => 'CreateTrafficPolicyVersion',
			'http'   => [
				'method'       => 'POST',
				'requestUri'   => '/2013-04-01/trafficpolicy/{Id}',
				'responseCode' => 201,
			],
			'input'  => [
				'shape'        => 'CreateTrafficPolicyVersionRequest',
				'locationName' => 'CreateTrafficPolicyVersionRequest',
				'xmlNamespace' => [ 'uri' => 'https://route53.amazonaws.com/doc/2013-04-01/', ],
			],
			'output' => [ 'shape' => 'CreateTrafficPolicyVersionResponse', ],
			'errors' => [
				[ 'shape' => 'NoSuchTrafficPolicy', ],
				[ 'shape' => 'InvalidInput', ],
				[ 'shape' => 'TooManyTrafficPolicyVersionsForCurrentPolicy', ],
				[ 'shape' => 'ConcurrentModification', ],
				[ 'shape' => 'InvalidTrafficPolicyDocument', ],
			],
		],
		'CreateVPCAssociationAuthorization'      => [
			'name'   => 'CreateVPCAssociationAuthorization',
			'http'   => [
				'method'     => 'POST',
				'requestUri' => '/2013-04-01/hostedzone/{Id}/authorizevpcassociation',
			],
			'input'  => [
				'shape'        => 'CreateVPCAssociationAuthorizationRequest',
				'locationName' => 'CreateVPCAssociationAuthorizationRequest',
				'xmlNamespace' => [ 'uri' => 'https://route53.amazonaws.com/doc/2013-04-01/', ],
			],
			'output' => [ 'shape' => 'CreateVPCAssociationAuthorizationResponse', ],
			'errors' => [
				[ 'shape' => 'ConcurrentModification', ],
				[ 'shape' => 'TooManyVPCAssociationAuthorizations', ],
				[ 'shape' => 'NoSuchHostedZone', ],
				[ 'shape' => 'InvalidVPCId', ],
				[ 'shape' => 'InvalidInput', ],
			],
		],
		'DeleteHealthCheck'                      => [
			'name'   => 'DeleteHealthCheck',
			'http'   => [
				'method'     => 'DELETE',
				'requestUri' => '/2013-04-01/healthcheck/{HealthCheckId}',
			],
			'input'  => [ 'shape' => 'DeleteHealthCheckRequest', ],
			'output' => [ 'shape' => 'DeleteHealthCheckResponse', ],
			'errors' => [
				[ 'shape' => 'NoSuchHealthCheck', ],
				[ 'shape' => 'HealthCheckInUse', ],
				[ 'shape' => 'InvalidInput', ],
			],
		],
		'DeleteHostedZone'                       => [
			'name'   => 'DeleteHostedZone',
			'http'   => [
				'method'     => 'DELETE',
				'requestUri' => '/2013-04-01/hostedzone/{Id}',
			],
			'input'  => [ 'shape' => 'DeleteHostedZoneRequest', ],
			'output' => [ 'shape' => 'DeleteHostedZoneResponse', ],
			'errors' => [
				[ 'shape' => 'NoSuchHostedZone', ],
				[ 'shape' => 'HostedZoneNotEmpty', ],
				[ 'shape' => 'PriorRequestNotComplete', ],
				[ 'shape' => 'InvalidInput', ],
				[ 'shape' => 'InvalidDomainName', ],
			],
		],
		'DeleteQueryLoggingConfig'               => [
			'name'   => 'DeleteQueryLoggingConfig',
			'http'   => [
				'method'     => 'DELETE',
				'requestUri' => '/2013-04-01/queryloggingconfig/{Id}',
			],
			'input'  => [ 'shape' => 'DeleteQueryLoggingConfigRequest', ],
			'output' => [ 'shape' => 'DeleteQueryLoggingConfigResponse', ],
			'errors' => [
				[ 'shape' => 'ConcurrentModification', ],
				[ 'shape' => 'NoSuchQueryLoggingConfig', ],
				[ 'shape' => 'InvalidInput', ],
			],
		],
		'DeleteReusableDelegationSet'            => [
			'name'   => 'DeleteReusableDelegationSet',
			'http'   => [
				'method'     => 'DELETE',
				'requestUri' => '/2013-04-01/delegationset/{Id}',
			],
			'input'  => [ 'shape' => 'DeleteReusableDelegationSetRequest', ],
			'output' => [ 'shape' => 'DeleteReusableDelegationSetResponse', ],
			'errors' => [
				[ 'shape' => 'NoSuchDelegationSet', ],
				[ 'shape' => 'DelegationSetInUse', ],
				[ 'shape' => 'DelegationSetNotReusable', ],
				[ 'shape' => 'InvalidInput', ],
			],
		],
		'DeleteTrafficPolicy'                    => [
			'name'   => 'DeleteTrafficPolicy',
			'http'   => [
				'method'     => 'DELETE',
				'requestUri' => '/2013-04-01/trafficpolicy/{Id}/{Version}',
			],
			'input'  => [ 'shape' => 'DeleteTrafficPolicyRequest', ],
			'output' => [ 'shape' => 'DeleteTrafficPolicyResponse', ],
			'errors' => [
				[ 'shape' => 'NoSuchTrafficPolicy', ],
				[ 'shape' => 'InvalidInput', ],
				[ 'shape' => 'TrafficPolicyInUse', ],
				[ 'shape' => 'ConcurrentModification', ],
			],
		],
		'DeleteTrafficPolicyInstance'            => [
			'name'   => 'DeleteTrafficPolicyInstance',
			'http'   => [
				'method'     => 'DELETE',
				'requestUri' => '/2013-04-01/trafficpolicyinstance/{Id}',
			],
			'input'  => [ 'shape' => 'DeleteTrafficPolicyInstanceRequest', ],
			'output' => [ 'shape' => 'DeleteTrafficPolicyInstanceResponse', ],
			'errors' => [
				[ 'shape' => 'NoSuchTrafficPolicyInstance', ],
				[ 'shape' => 'InvalidInput', ],
				[ 'shape' => 'PriorRequestNotComplete', ],
			],
		],
		'DeleteVPCAssociationAuthorization'      => [
			'name'   => 'DeleteVPCAssociationAuthorization',
			'http'   => [
				'method'     => 'POST',
				'requestUri' => '/2013-04-01/hostedzone/{Id}/deauthorizevpcassociation',
			],
			'input'  => [
				'shape'        => 'DeleteVPCAssociationAuthorizationRequest',
				'locationName' => 'DeleteVPCAssociationAuthorizationRequest',
				'xmlNamespace' => [ 'uri' => 'https://route53.amazonaws.com/doc/2013-04-01/', ],
			],
			'output' => [ 'shape' => 'DeleteVPCAssociationAuthorizationResponse', ],
			'errors' => [
				[ 'shape' => 'ConcurrentModification', ],
				[ 'shape' => 'VPCAssociationAuthorizationNotFound', ],
				[ 'shape' => 'NoSuchHostedZone', ],
				[ 'shape' => 'InvalidVPCId', ],
				[ 'shape' => 'InvalidInput', ],
			],
		],
		'DisassociateVPCFromHostedZone'          => [
			'name'   => 'DisassociateVPCFromHostedZone',
			'http'   => [
				'method'     => 'POST',
				'requestUri' => '/2013-04-01/hostedzone/{Id}/disassociatevpc',
			],
			'input'  => [
				'shape'        => 'DisassociateVPCFromHostedZoneRequest',
				'locationName' => 'DisassociateVPCFromHostedZoneRequest',
				'xmlNamespace' => [ 'uri' => 'https://route53.amazonaws.com/doc/2013-04-01/', ],
			],
			'output' => [ 'shape' => 'DisassociateVPCFromHostedZoneResponse', ],
			'errors' => [
				[ 'shape' => 'NoSuchHostedZone', ],
				[ 'shape' => 'InvalidVPCId', ],
				[ 'shape' => 'VPCAssociationNotFound', ],
				[ 'shape' => 'LastVPCAssociation', ],
				[ 'shape' => 'InvalidInput', ],
			],
		],
		'GetAccountLimit'                        => [
			'name'   => 'GetAccountLimit',
			'http'   => [
				'method'     => 'GET',
				'requestUri' => '/2013-04-01/accountlimit/{Type}',
			],
			'input'  => [ 'shape' => 'GetAccountLimitRequest', ],
			'output' => [ 'shape' => 'GetAccountLimitResponse', ],
			'errors' => [ [ 'shape' => 'InvalidInput', ], ],
		],
		'GetChange'                              => [
			'name'   => 'GetChange',
			'http'   => [
				'method'     => 'GET',
				'requestUri' => '/2013-04-01/change/{Id}',
			],
			'input'  => [ 'shape' => 'GetChangeRequest', ],
			'output' => [ 'shape' => 'GetChangeResponse', ],
			'errors' => [
				[ 'shape' => 'NoSuchChange', ],
				[ 'shape' => 'InvalidInput', ],
			],
		],
		'GetCheckerIpRanges'                     => [
			'name'   => 'GetCheckerIpRanges',
			'http'   => [
				'method'     => 'GET',
				'requestUri' => '/2013-04-01/checkeripranges',
			],
			'input'  => [ 'shape' => 'GetCheckerIpRangesRequest', ],
			'output' => [ 'shape' => 'GetCheckerIpRangesResponse', ],
		],
		'GetGeoLocation'                         => [
			'name'   => 'GetGeoLocation',
			'http'   => [
				'method'     => 'GET',
				'requestUri' => '/2013-04-01/geolocation',
			],
			'input'  => [ 'shape' => 'GetGeoLocationRequest', ],
			'output' => [ 'shape' => 'GetGeoLocationResponse', ],
			'errors' => [
				[ 'shape' => 'NoSuchGeoLocation', ],
				[ 'shape' => 'InvalidInput', ],
			],
		],
		'GetHealthCheck'                         => [
			'name'   => 'GetHealthCheck',
			'http'   => [
				'method'     => 'GET',
				'requestUri' => '/2013-04-01/healthcheck/{HealthCheckId}',
			],
			'input'  => [ 'shape' => 'GetHealthCheckRequest', ],
			'output' => [ 'shape' => 'GetHealthCheckResponse', ],
			'errors' => [
				[ 'shape' => 'NoSuchHealthCheck', ],
				[ 'shape' => 'InvalidInput', ],
				[ 'shape' => 'IncompatibleVersion', ],
			],
		],
		'GetHealthCheckCount'                    => [
			'name'   => 'GetHealthCheckCount',
			'http'   => [
				'method'     => 'GET',
				'requestUri' => '/2013-04-01/healthcheckcount',
			],
			'input'  => [ 'shape' => 'GetHealthCheckCountRequest', ],
			'output' => [ 'shape' => 'GetHealthCheckCountResponse', ],
		],
		'GetHealthCheckLastFailureReason'        => [
			'name'   => 'GetHealthCheckLastFailureReason',
			'http'   => [
				'method'     => 'GET',
				'requestUri' => '/2013-04-01/healthcheck/{HealthCheckId}/lastfailurereason',
			],
			'input'  => [ 'shape' => 'GetHealthCheckLastFailureReasonRequest', ],
			'output' => [ 'shape' => 'GetHealthCheckLastFailureReasonResponse', ],
			'errors' => [
				[ 'shape' => 'NoSuchHealthCheck', ],
				[ 'shape' => 'InvalidInput', ],
			],
		],
		'GetHealthCheckStatus'                   => [
			'name'   => 'GetHealthCheckStatus',
			'http'   => [
				'method'     => 'GET',
				'requestUri' => '/2013-04-01/healthcheck/{HealthCheckId}/status',
			],
			'input'  => [ 'shape' => 'GetHealthCheckStatusRequest', ],
			'output' => [ 'shape' => 'GetHealthCheckStatusResponse', ],
			'errors' => [
				[ 'shape' => 'NoSuchHealthCheck', ],
				[ 'shape' => 'InvalidInput', ],
			],
		],
		'GetHostedZone'                          => [
			'name'   => 'GetHostedZone',
			'http'   => [
				'method'     => 'GET',
				'requestUri' => '/2013-04-01/hostedzone/{Id}',
			],
			'input'  => [ 'shape' => 'GetHostedZoneRequest', ],
			'output' => [ 'shape' => 'GetHostedZoneResponse', ],
			'errors' => [
				[ 'shape' => 'NoSuchHostedZone', ],
				[ 'shape' => 'InvalidInput', ],
			],
		],
		'GetHostedZoneCount'                     => [
			'name'   => 'GetHostedZoneCount',
			'http'   => [
				'method'     => 'GET',
				'requestUri' => '/2013-04-01/hostedzonecount',
			],
			'input'  => [ 'shape' => 'GetHostedZoneCountRequest', ],
			'output' => [ 'shape' => 'GetHostedZoneCountResponse', ],
			'errors' => [ [ 'shape' => 'InvalidInput', ], ],
		],
		'GetHostedZoneLimit'                     => [
			'name'   => 'GetHostedZoneLimit',
			'http'   => [
				'method'     => 'GET',
				'requestUri' => '/2013-04-01/hostedzonelimit/{Id}/{Type}',
			],
			'input'  => [ 'shape' => 'GetHostedZoneLimitRequest', ],
			'output' => [ 'shape' => 'GetHostedZoneLimitResponse', ],
			'errors' => [
				[ 'shape' => 'NoSuchHostedZone', ],
				[ 'shape' => 'InvalidInput', ],
				[ 'shape' => 'HostedZoneNotPrivate', ],
			],
		],
		'GetQueryLoggingConfig'                  => [
			'name'   => 'GetQueryLoggingConfig',
			'http'   => [
				'method'     => 'GET',
				'requestUri' => '/2013-04-01/queryloggingconfig/{Id}',
			],
			'input'  => [ 'shape' => 'GetQueryLoggingConfigRequest', ],
			'output' => [ 'shape' => 'GetQueryLoggingConfigResponse', ],
			'errors' => [
				[ 'shape' => 'NoSuchQueryLoggingConfig', ],
				[ 'shape' => 'InvalidInput', ],
			],
		],
		'GetReusableDelegationSet'               => [
			'name'   => 'GetReusableDelegationSet',
			'http'   => [
				'method'     => 'GET',
				'requestUri' => '/2013-04-01/delegationset/{Id}',
			],
			'input'  => [ 'shape' => 'GetReusableDelegationSetRequest', ],
			'output' => [ 'shape' => 'GetReusableDelegationSetResponse', ],
			'errors' => [
				[ 'shape' => 'NoSuchDelegationSet', ],
				[ 'shape' => 'DelegationSetNotReusable', ],
				[ 'shape' => 'InvalidInput', ],
			],
		],
		'GetReusableDelegationSetLimit'          => [
			'name'   => 'GetReusableDelegationSetLimit',
			'http'   => [
				'method'     => 'GET',
				'requestUri' => '/2013-04-01/reusabledelegationsetlimit/{Id}/{Type}',
			],
			'input'  => [ 'shape' => 'GetReusableDelegationSetLimitRequest', ],
			'output' => [ 'shape' => 'GetReusableDelegationSetLimitResponse', ],
			'errors' => [
				[ 'shape' => 'InvalidInput', ],
				[ 'shape' => 'NoSuchDelegationSet', ],
			],
		],
		'GetTrafficPolicy'                       => [
			'name'   => 'GetTrafficPolicy',
			'http'   => [
				'method'     => 'GET',
				'requestUri' => '/2013-04-01/trafficpolicy/{Id}/{Version}',
			],
			'input'  => [ 'shape' => 'GetTrafficPolicyRequest', ],
			'output' => [ 'shape' => 'GetTrafficPolicyResponse', ],
			'errors' => [
				[ 'shape' => 'NoSuchTrafficPolicy', ],
				[ 'shape' => 'InvalidInput', ],
			],
		],
		'GetTrafficPolicyInstance'               => [
			'name'   => 'GetTrafficPolicyInstance',
			'http'   => [
				'method'     => 'GET',
				'requestUri' => '/2013-04-01/trafficpolicyinstance/{Id}',
			],
			'input'  => [ 'shape' => 'GetTrafficPolicyInstanceRequest', ],
			'output' => [ 'shape' => 'GetTrafficPolicyInstanceResponse', ],
			'errors' => [
				[ 'shape' => 'NoSuchTrafficPolicyInstance', ],
				[ 'shape' => 'InvalidInput', ],
			],
		],
		'GetTrafficPolicyInstanceCount'          => [
			'name'   => 'GetTrafficPolicyInstanceCount',
			'http'   => [
				'method'     => 'GET',
				'requestUri' => '/2013-04-01/trafficpolicyinstancecount',
			],
			'input'  => [ 'shape' => 'GetTrafficPolicyInstanceCountRequest', ],
			'output' => [ 'shape' => 'GetTrafficPolicyInstanceCountResponse', ],
		],
		'ListGeoLocations'                       => [
			'name'   => 'ListGeoLocations',
			'http'   => [
				'method'     => 'GET',
				'requestUri' => '/2013-04-01/geolocations',
			],
			'input'  => [ 'shape' => 'ListGeoLocationsRequest', ],
			'output' => [ 'shape' => 'ListGeoLocationsResponse', ],
			'errors' => [ [ 'shape' => 'InvalidInput', ], ],
		],
		'ListHealthChecks'                       => [
			'name'   => 'ListHealthChecks',
			'http'   => [
				'method'     => 'GET',
				'requestUri' => '/2013-04-01/healthcheck',
			],
			'input'  => [ 'shape' => 'ListHealthChecksRequest', ],
			'output' => [ 'shape' => 'ListHealthChecksResponse', ],
			'errors' => [
				[ 'shape' => 'InvalidInput', ],
				[ 'shape' => 'IncompatibleVersion', ],
			],
		],
		'ListHostedZones'                        => [
			'name'   => 'ListHostedZones',
			'http'   => [
				'method'     => 'GET',
				'requestUri' => '/2013-04-01/hostedzone',
			],
			'input'  => [ 'shape' => 'ListHostedZonesRequest', ],
			'output' => [ 'shape' => 'ListHostedZonesResponse', ],
			'errors' => [
				[ 'shape' => 'InvalidInput', ],
				[ 'shape' => 'NoSuchDelegationSet', ],
				[ 'shape' => 'DelegationSetNotReusable', ],
			],
		],
		'ListHostedZonesByName'                  => [
			'name'   => 'ListHostedZonesByName',
			'http'   => [
				'method'     => 'GET',
				'requestUri' => '/2013-04-01/hostedzonesbyname',
			],
			'input'  => [ 'shape' => 'ListHostedZonesByNameRequest', ],
			'output' => [ 'shape' => 'ListHostedZonesByNameResponse', ],
			'errors' => [
				[ 'shape' => 'InvalidInput', ],
				[ 'shape' => 'InvalidDomainName', ],
			],
		],
		'ListQueryLoggingConfigs'                => [
			'name'   => 'ListQueryLoggingConfigs',
			'http'   => [
				'method'     => 'GET',
				'requestUri' => '/2013-04-01/queryloggingconfig',
			],
			'input'  => [ 'shape' => 'ListQueryLoggingConfigsRequest', ],
			'output' => [ 'shape' => 'ListQueryLoggingConfigsResponse', ],
			'errors' => [
				[ 'shape' => 'InvalidInput', ],
				[ 'shape' => 'InvalidPaginationToken', ],
				[ 'shape' => 'NoSuchHostedZone', ],
			],
		],
		'ListResourceRecordSets'                 => [
			'name'   => 'ListResourceRecordSets',
			'http'   => [
				'method'     => 'GET',
				'requestUri' => '/2013-04-01/hostedzone/{Id}/rrset',
			],
			'input'  => [ 'shape' => 'ListResourceRecordSetsRequest', ],
			'output' => [ 'shape' => 'ListResourceRecordSetsResponse', ],
			'errors' => [
				[ 'shape' => 'NoSuchHostedZone', ],
				[ 'shape' => 'InvalidInput', ],
			],
		],
		'ListReusableDelegationSets'             => [
			'name'   => 'ListReusableDelegationSets',
			'http'   => [
				'method'     => 'GET',
				'requestUri' => '/2013-04-01/delegationset',
			],
			'input'  => [ 'shape' => 'ListReusableDelegationSetsRequest', ],
			'output' => [ 'shape' => 'ListReusableDelegationSetsResponse', ],
			'errors' => [ [ 'shape' => 'InvalidInput', ], ],
		],
		'ListTagsForResource'                    => [
			'name'   => 'ListTagsForResource',
			'http'   => [
				'method'     => 'GET',
				'requestUri' => '/2013-04-01/tags/{ResourceType}/{ResourceId}',
			],
			'input'  => [ 'shape' => 'ListTagsForResourceRequest', ],
			'output' => [ 'shape' => 'ListTagsForResourceResponse', ],
			'errors' => [
				[ 'shape' => 'InvalidInput', ],
				[ 'shape' => 'NoSuchHealthCheck', ],
				[ 'shape' => 'NoSuchHostedZone', ],
				[ 'shape' => 'PriorRequestNotComplete', ],
				[ 'shape' => 'ThrottlingException', ],
			],
		],
		'ListTagsForResources'                   => [
			'name'   => 'ListTagsForResources',
			'http'   => [
				'method'     => 'POST',
				'requestUri' => '/2013-04-01/tags/{ResourceType}',
			],
			'input'  => [
				'shape'        => 'ListTagsForResourcesRequest',
				'locationName' => 'ListTagsForResourcesRequest',
				'xmlNamespace' => [ 'uri' => 'https://route53.amazonaws.com/doc/2013-04-01/', ],
			],
			'output' => [ 'shape' => 'ListTagsForResourcesResponse', ],
			'errors' => [
				[ 'shape' => 'InvalidInput', ],
				[ 'shape' => 'NoSuchHealthCheck', ],
				[ 'shape' => 'NoSuchHostedZone', ],
				[ 'shape' => 'PriorRequestNotComplete', ],
				[ 'shape' => 'ThrottlingException', ],
			],
		],
		'ListTrafficPolicies'                    => [
			'name'   => 'ListTrafficPolicies',
			'http'   => [
				'method'     => 'GET',
				'requestUri' => '/2013-04-01/trafficpolicies',
			],
			'input'  => [ 'shape' => 'ListTrafficPoliciesRequest', ],
			'output' => [ 'shape' => 'ListTrafficPoliciesResponse', ],
			'errors' => [ [ 'shape' => 'InvalidInput', ], ],
		],
		'ListTrafficPolicyInstances'             => [
			'name'   => 'ListTrafficPolicyInstances',
			'http'   => [
				'method'     => 'GET',
				'requestUri' => '/2013-04-01/trafficpolicyinstances',
			],
			'input'  => [ 'shape' => 'ListTrafficPolicyInstancesRequest', ],
			'output' => [ 'shape' => 'ListTrafficPolicyInstancesResponse', ],
			'errors' => [
				[ 'shape' => 'InvalidInput', ],
				[ 'shape' => 'NoSuchTrafficPolicyInstance', ],
			],
		],
		'ListTrafficPolicyInstancesByHostedZone' => [
			'name'   => 'ListTrafficPolicyInstancesByHostedZone',
			'http'   => [
				'method'     => 'GET',
				'requestUri' => '/2013-04-01/trafficpolicyinstances/hostedzone',
			],
			'input'  => [ 'shape' => 'ListTrafficPolicyInstancesByHostedZoneRequest', ],
			'output' => [ 'shape' => 'ListTrafficPolicyInstancesByHostedZoneResponse', ],
			'errors' => [
				[ 'shape' => 'InvalidInput', ],
				[ 'shape' => 'NoSuchTrafficPolicyInstance', ],
				[ 'shape' => 'NoSuchHostedZone', ],
			],
		],
		'ListTrafficPolicyInstancesByPolicy'     => [
			'name'   => 'ListTrafficPolicyInstancesByPolicy',
			'http'   => [
				'method'     => 'GET',
				'requestUri' => '/2013-04-01/trafficpolicyinstances/trafficpolicy',
			],
			'input'  => [ 'shape' => 'ListTrafficPolicyInstancesByPolicyRequest', ],
			'output' => [ 'shape' => 'ListTrafficPolicyInstancesByPolicyResponse', ],
			'errors' => [
				[ 'shape' => 'InvalidInput', ],
				[ 'shape' => 'NoSuchTrafficPolicyInstance', ],
				[ 'shape' => 'NoSuchTrafficPolicy', ],
			],
		],
		'ListTrafficPolicyVersions'              => [
			'name'   => 'ListTrafficPolicyVersions',
			'http'   => [
				'method'     => 'GET',
				'requestUri' => '/2013-04-01/trafficpolicies/{Id}/versions',
			],
			'input'  => [ 'shape' => 'ListTrafficPolicyVersionsRequest', ],
			'output' => [ 'shape' => 'ListTrafficPolicyVersionsResponse', ],
			'errors' => [
				[ 'shape' => 'InvalidInput', ],
				[ 'shape' => 'NoSuchTrafficPolicy', ],
			],
		],
		'ListVPCAssociationAuthorizations'       => [
			'name'   => 'ListVPCAssociationAuthorizations',
			'http'   => [
				'method'     => 'GET',
				'requestUri' => '/2013-04-01/hostedzone/{Id}/authorizevpcassociation',
			],
			'input'  => [ 'shape' => 'ListVPCAssociationAuthorizationsRequest', ],
			'output' => [ 'shape' => 'ListVPCAssociationAuthorizationsResponse', ],
			'errors' => [
				[ 'shape' => 'NoSuchHostedZone', ],
				[ 'shape' => 'InvalidInput', ],
				[ 'shape' => 'InvalidPaginationToken', ],
			],
		],
		'TestDNSAnswer'                          => [
			'name'   => 'TestDNSAnswer',
			'http'   => [
				'method'     => 'GET',
				'requestUri' => '/2013-04-01/testdnsanswer',
			],
			'input'  => [ 'shape' => 'TestDNSAnswerRequest', ],
			'output' => [ 'shape' => 'TestDNSAnswerResponse', ],
			'errors' => [
				[ 'shape' => 'NoSuchHostedZone', ],
				[ 'shape' => 'InvalidInput', ],
			],
		],
		'UpdateHealthCheck'                      => [
			'name'   => 'UpdateHealthCheck',
			'http'   => [
				'method'     => 'POST',
				'requestUri' => '/2013-04-01/healthcheck/{HealthCheckId}',
			],
			'input'  => [
				'shape'        => 'UpdateHealthCheckRequest',
				'locationName' => 'UpdateHealthCheckRequest',
				'xmlNamespace' => [ 'uri' => 'https://route53.amazonaws.com/doc/2013-04-01/', ],
			],
			'output' => [ 'shape' => 'UpdateHealthCheckResponse', ],
			'errors' => [
				[ 'shape' => 'NoSuchHealthCheck', ],
				[ 'shape' => 'InvalidInput', ],
				[ 'shape' => 'HealthCheckVersionMismatch', ],
			],
		],
		'UpdateHostedZoneComment'                => [
			'name'   => 'UpdateHostedZoneComment',
			'http'   => [
				'method'     => 'POST',
				'requestUri' => '/2013-04-01/hostedzone/{Id}',
			],
			'input'  => [
				'shape'        => 'UpdateHostedZoneCommentRequest',
				'locationName' => 'UpdateHostedZoneCommentRequest',
				'xmlNamespace' => [ 'uri' => 'https://route53.amazonaws.com/doc/2013-04-01/', ],
			],
			'output' => [ 'shape' => 'UpdateHostedZoneCommentResponse', ],
			'errors' => [
				[ 'shape' => 'NoSuchHostedZone', ],
				[ 'shape' => 'InvalidInput', ],
			],
		],
		'UpdateTrafficPolicyComment'             => [
			'name'   => 'UpdateTrafficPolicyComment',
			'http'   => [
				'method'     => 'POST',
				'requestUri' => '/2013-04-01/trafficpolicy/{Id}/{Version}',
			],
			'input'  => [
				'shape'        => 'UpdateTrafficPolicyCommentRequest',
				'locationName' => 'UpdateTrafficPolicyCommentRequest',
				'xmlNamespace' => [ 'uri' => 'https://route53.amazonaws.com/doc/2013-04-01/', ],
			],
			'output' => [ 'shape' => 'UpdateTrafficPolicyCommentResponse', ],
			'errors' => [
				[ 'shape' => 'InvalidInput', ],
				[ 'shape' => 'NoSuchTrafficPolicy', ],
				[ 'shape' => 'ConcurrentModification', ],
			],
		],
		'UpdateTrafficPolicyInstance'            => [
			'name'   => 'UpdateTrafficPolicyInstance',
			'http'   => [
				'method'     => 'POST',
				'requestUri' => '/2013-04-01/trafficpolicyinstance/{Id}',
			],
			'input'  => [
				'shape'        => 'UpdateTrafficPolicyInstanceRequest',
				'locationName' => 'UpdateTrafficPolicyInstanceRequest',
				'xmlNamespace' => [ 'uri' => 'https://route53.amazonaws.com/doc/2013-04-01/', ],
			],
			'output' => [ 'shape' => 'UpdateTrafficPolicyInstanceResponse', ],
			'errors' => [
				[ 'shape' => 'InvalidInput', ],
				[ 'shape' => 'NoSuchTrafficPolicy', ],
				[ 'shape' => 'NoSuchTrafficPolicyInstance', ],
				[ 'shape' => 'PriorRequestNotComplete', ],
				[ 'shape' => 'ConflictingTypes', ],
			],
		],
	],
	'shapes'     => [
		'AccountLimit'                                   => [
			'type'     => 'structure',
			'required' => [ 'Type', 'Value', ],
			'members'  => [
				'Type'  => [ 'shape' => 'AccountLimitType', ],
				'Value' => [ 'shape' => 'LimitValue', ],
			],
		],
		'AccountLimitType'                               => [
			'type' => 'string',
			'enum' => [
				'MAX_HEALTH_CHECKS_BY_OWNER',
				'MAX_HOSTED_ZONES_BY_OWNER',
				'MAX_TRAFFIC_POLICY_INSTANCES_BY_OWNER',
				'MAX_REUSABLE_DELEGATION_SETS_BY_OWNER',
				'MAX_TRAFFIC_POLICIES_BY_OWNER',
			],
		],
		'AlarmIdentifier'                                => [
			'type'     => 'structure',
			'required' => [ 'Region', 'Name', ],
			'members'  => [
				'Region' => [ 'shape' => 'CloudWatchRegion', ],
				'Name'   => [ 'shape' => 'AlarmName', ],
			],
		],
		'AlarmName'                                      => [ 'type' => 'string', 'max' => 256, 'min' => 1, ],
		'AliasHealthEnabled'                             => [ 'type' => 'boolean', ],
		'AliasTarget'                                    => [
			'type'     => 'structure',
			'required' => [ 'HostedZoneId', 'DNSName', 'EvaluateTargetHealth', ],
			'members'  => [
				'HostedZoneId'         => [ 'shape' => 'ResourceId', ],
				'DNSName'              => [ 'shape' => 'DNSName', ],
				'EvaluateTargetHealth' => [ 'shape' => 'AliasHealthEnabled', ],
			],
		],
		'AssociateVPCComment'                            => [ 'type' => 'string', ],
		'AssociateVPCWithHostedZoneRequest'              => [
			'type'     => 'structure',
			'required' => [ 'HostedZoneId', 'VPC', ],
			'members'  => [
				'HostedZoneId' => [
					'shape'        => 'ResourceId',
					'location'     => 'uri',
					'locationName' => 'Id',
				],
				'VPC'          => [ 'shape' => 'VPC', ],
				'Comment'      => [ 'shape' => 'AssociateVPCComment', ],
			],
		],
		'AssociateVPCWithHostedZoneResponse'             => [
			'type'     => 'structure',
			'required' => [ 'ChangeInfo', ],
			'members'  => [ 'ChangeInfo' => [ 'shape' => 'ChangeInfo', ], ],
		],
		'Change'                                         => [
			'type'     => 'structure',
			'required' => [ 'Action', 'ResourceRecordSet', ],
			'members'  => [
				'Action'            => [ 'shape' => 'ChangeAction', ],
				'ResourceRecordSet' => [ 'shape' => 'ResourceRecordSet', ],
			],
		],
		'ChangeAction'                                   => [
			'type' => 'string',
			'enum' => [ 'CREATE', 'DELETE', 'UPSERT', ],
		],
		'ChangeBatch'                                    => [
			'type'     => 'structure',
			'required' => [ 'Changes', ],
			'members'  => [
				'Comment' => [ 'shape' => 'ResourceDescription', ],
				'Changes' => [ 'shape' => 'Changes', ],
			],
		],
		'ChangeInfo'                                     => [
			'type'     => 'structure',
			'required' => [ 'Id', 'Status', 'SubmittedAt', ],
			'members'  => [
				'Id'          => [ 'shape' => 'ResourceId', ],
				'Status'      => [ 'shape' => 'ChangeStatus', ],
				'SubmittedAt' => [ 'shape' => 'TimeStamp', ],
				'Comment'     => [ 'shape' => 'ResourceDescription', ],
			],
		],
		'ChangeResourceRecordSetsRequest'                => [
			'type'     => 'structure',
			'required' => [ 'HostedZoneId', 'ChangeBatch', ],
			'members'  => [
				'HostedZoneId' => [
					'shape'        => 'ResourceId',
					'location'     => 'uri',
					'locationName' => 'Id',
				],
				'ChangeBatch'  => [ 'shape' => 'ChangeBatch', ],
			],
		],
		'ChangeResourceRecordSetsResponse'               => [
			'type'     => 'structure',
			'required' => [ 'ChangeInfo', ],
			'members'  => [ 'ChangeInfo' => [ 'shape' => 'ChangeInfo', ], ],
		],
		'ChangeStatus'                                   => [ 'type' => 'string', 'enum' => [ 'PENDING', 'INSYNC', ], ],
		'ChangeTagsForResourceRequest'                   => [
			'type'     => 'structure',
			'required' => [ 'ResourceType', 'ResourceId', ],
			'members'  => [
				'ResourceType'  => [
					'shape'        => 'TagResourceType',
					'location'     => 'uri',
					'locationName' => 'ResourceType',
				],
				'ResourceId'    => [
					'shape'        => 'TagResourceId',
					'location'     => 'uri',
					'locationName' => 'ResourceId',
				],
				'AddTags'       => [ 'shape' => 'TagList', ],
				'RemoveTagKeys' => [ 'shape' => 'TagKeyList', ],
			],
		],
		'ChangeTagsForResourceResponse'                  => [ 'type' => 'structure', 'members' => [], ],
		'Changes'                                        => [
			'type'   => 'list',
			'member' => [ 'shape' => 'Change', 'locationName' => 'Change', ],
			'min'    => 1,
		],
		'CheckerIpRanges'                                => [
			'type'   => 'list',
			'member' => [ 'shape' => 'IPAddressCidr', ],
		],
		'ChildHealthCheckList'                           => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'HealthCheckId',
				'locationName' => 'ChildHealthCheck',
			],
			'max'    => 256,
		],
		'CloudWatchAlarmConfiguration'                   => [
			'type'     => 'structure',
			'required' => [
				'EvaluationPeriods',
				'Threshold',
				'ComparisonOperator',
				'Period',
				'MetricName',
				'Namespace',
				'Statistic',
			],
			'members'  => [
				'EvaluationPeriods'  => [ 'shape' => 'EvaluationPeriods', ],
				'Threshold'          => [ 'shape' => 'Threshold', ],
				'ComparisonOperator' => [ 'shape' => 'ComparisonOperator', ],
				'Period'             => [ 'shape' => 'Period', ],
				'MetricName'         => [ 'shape' => 'MetricName', ],
				'Namespace'          => [ 'shape' => 'Namespace', ],
				'Statistic'          => [ 'shape' => 'Statistic', ],
				'Dimensions'         => [ 'shape' => 'DimensionList', ],
			],
		],
		'CloudWatchLogsLogGroupArn'                      => [ 'type' => 'string', ],
		'CloudWatchRegion'                               => [
			'type' => 'string',
			'enum' => [
				'us-east-1',
				'us-east-2',
				'us-west-1',
				'us-west-2',
				'ca-central-1',
				'eu-central-1',
				'eu-west-1',
				'eu-west-2',
				'eu-west-3',
				'ap-east-1',
				'ap-south-1',
				'ap-southeast-1',
				'ap-southeast-2',
				'ap-northeast-1',
				'ap-northeast-2',
				'ap-northeast-3',
				'eu-north-1',
				'sa-east-1',
				'cn-northwest-1',
				'cn-north-1',
			],
			'max'  => 64,
			'min'  => 1,
		],
		'ComparisonOperator'                             => [
			'type' => 'string',
			'enum' => [
				'GreaterThanOrEqualToThreshold',
				'GreaterThanThreshold',
				'LessThanThreshold',
				'LessThanOrEqualToThreshold',
			],
		],
		'ConcurrentModification'                         => [
			'type'      => 'structure',
			'members'   => [ 'message' => [ 'shape' => 'ErrorMessage', ], ],
			'error'     => [ 'httpStatusCode' => 400, ],
			'exception' => true,
		],
		'ConflictingDomainExists'                        => [
			'type'      => 'structure',
			'members'   => [ 'message' => [ 'shape' => 'ErrorMessage', ], ],
			'exception' => true,
		],
		'ConflictingTypes'                               => [
			'type'      => 'structure',
			'members'   => [ 'message' => [ 'shape' => 'ErrorMessage', ], ],
			'error'     => [ 'httpStatusCode' => 400, ],
			'exception' => true,
		],
		'CreateHealthCheckRequest'                       => [
			'type'     => 'structure',
			'required' => [ 'CallerReference', 'HealthCheckConfig', ],
			'members'  => [
				'CallerReference'   => [ 'shape' => 'HealthCheckNonce', ],
				'HealthCheckConfig' => [ 'shape' => 'HealthCheckConfig', ],
			],
		],
		'CreateHealthCheckResponse'                      => [
			'type'     => 'structure',
			'required' => [ 'HealthCheck', 'Location', ],
			'members'  => [
				'HealthCheck' => [ 'shape' => 'HealthCheck', ],
				'Location'    => [
					'shape'        => 'ResourceURI',
					'location'     => 'header',
					'locationName' => 'Location',
				],
			],
		],
		'CreateHostedZoneRequest'                        => [
			'type'     => 'structure',
			'required' => [ 'Name', 'CallerReference', ],
			'members'  => [
				'Name'             => [ 'shape' => 'DNSName', ],
				'VPC'              => [ 'shape' => 'VPC', ],
				'CallerReference'  => [ 'shape' => 'Nonce', ],
				'HostedZoneConfig' => [ 'shape' => 'HostedZoneConfig', ],
				'DelegationSetId'  => [ 'shape' => 'ResourceId', ],
			],
		],
		'CreateHostedZoneResponse'                       => [
			'type'     => 'structure',
			'required' => [
				'HostedZone',
				'ChangeInfo',
				'DelegationSet',
				'Location',
			],
			'members'  => [
				'HostedZone'    => [ 'shape' => 'HostedZone', ],
				'ChangeInfo'    => [ 'shape' => 'ChangeInfo', ],
				'DelegationSet' => [ 'shape' => 'DelegationSet', ],
				'VPC'           => [ 'shape' => 'VPC', ],
				'Location'      => [
					'shape'        => 'ResourceURI',
					'location'     => 'header',
					'locationName' => 'Location',
				],
			],
		],
		'CreateQueryLoggingConfigRequest'                => [
			'type'     => 'structure',
			'required' => [ 'HostedZoneId', 'CloudWatchLogsLogGroupArn', ],
			'members'  => [
				'HostedZoneId'              => [ 'shape' => 'ResourceId', ],
				'CloudWatchLogsLogGroupArn' => [ 'shape' => 'CloudWatchLogsLogGroupArn', ],
			],
		],
		'CreateQueryLoggingConfigResponse'               => [
			'type'     => 'structure',
			'required' => [ 'QueryLoggingConfig', 'Location', ],
			'members'  => [
				'QueryLoggingConfig' => [ 'shape' => 'QueryLoggingConfig', ],
				'Location'           => [
					'shape'        => 'ResourceURI',
					'location'     => 'header',
					'locationName' => 'Location',
				],
			],
		],
		'CreateReusableDelegationSetRequest'             => [
			'type'     => 'structure',
			'required' => [ 'CallerReference', ],
			'members'  => [
				'CallerReference' => [ 'shape' => 'Nonce', ],
				'HostedZoneId'    => [ 'shape' => 'ResourceId', ],
			],
		],
		'CreateReusableDelegationSetResponse'            => [
			'type'     => 'structure',
			'required' => [ 'DelegationSet', 'Location', ],
			'members'  => [
				'DelegationSet' => [ 'shape' => 'DelegationSet', ],
				'Location'      => [
					'shape'        => 'ResourceURI',
					'location'     => 'header',
					'locationName' => 'Location',
				],
			],
		],
		'CreateTrafficPolicyInstanceRequest'             => [
			'type'     => 'structure',
			'required' => [
				'HostedZoneId',
				'Name',
				'TTL',
				'TrafficPolicyId',
				'TrafficPolicyVersion',
			],
			'members'  => [
				'HostedZoneId'         => [ 'shape' => 'ResourceId', ],
				'Name'                 => [ 'shape' => 'DNSName', ],
				'TTL'                  => [ 'shape' => 'TTL', ],
				'TrafficPolicyId'      => [ 'shape' => 'TrafficPolicyId', ],
				'TrafficPolicyVersion' => [ 'shape' => 'TrafficPolicyVersion', ],
			],
		],
		'CreateTrafficPolicyInstanceResponse'            => [
			'type'     => 'structure',
			'required' => [ 'TrafficPolicyInstance', 'Location', ],
			'members'  => [
				'TrafficPolicyInstance' => [ 'shape' => 'TrafficPolicyInstance', ],
				'Location'              => [
					'shape'        => 'ResourceURI',
					'location'     => 'header',
					'locationName' => 'Location',
				],
			],
		],
		'CreateTrafficPolicyRequest'                     => [
			'type'     => 'structure',
			'required' => [ 'Name', 'Document', ],
			'members'  => [
				'Name'     => [ 'shape' => 'TrafficPolicyName', ],
				'Document' => [ 'shape' => 'TrafficPolicyDocument', ],
				'Comment'  => [ 'shape' => 'TrafficPolicyComment', ],
			],
		],
		'CreateTrafficPolicyResponse'                    => [
			'type'     => 'structure',
			'required' => [ 'TrafficPolicy', 'Location', ],
			'members'  => [
				'TrafficPolicy' => [ 'shape' => 'TrafficPolicy', ],
				'Location'      => [
					'shape'        => 'ResourceURI',
					'location'     => 'header',
					'locationName' => 'Location',
				],
			],
		],
		'CreateTrafficPolicyVersionRequest'              => [
			'type'     => 'structure',
			'required' => [ 'Id', 'Document', ],
			'members'  => [
				'Id'       => [
					'shape'        => 'TrafficPolicyId',
					'location'     => 'uri',
					'locationName' => 'Id',
				],
				'Document' => [ 'shape' => 'TrafficPolicyDocument', ],
				'Comment'  => [ 'shape' => 'TrafficPolicyComment', ],
			],
		],
		'CreateTrafficPolicyVersionResponse'             => [
			'type'     => 'structure',
			'required' => [ 'TrafficPolicy', 'Location', ],
			'members'  => [
				'TrafficPolicy' => [ 'shape' => 'TrafficPolicy', ],
				'Location'      => [
					'shape'        => 'ResourceURI',
					'location'     => 'header',
					'locationName' => 'Location',
				],
			],
		],
		'CreateVPCAssociationAuthorizationRequest'       => [
			'type'     => 'structure',
			'required' => [ 'HostedZoneId', 'VPC', ],
			'members'  => [
				'HostedZoneId' => [
					'shape'        => 'ResourceId',
					'location'     => 'uri',
					'locationName' => 'Id',
				],
				'VPC'          => [ 'shape' => 'VPC', ],
			],
		],
		'CreateVPCAssociationAuthorizationResponse'      => [
			'type'     => 'structure',
			'required' => [ 'HostedZoneId', 'VPC', ],
			'members'  => [
				'HostedZoneId' => [ 'shape' => 'ResourceId', ],
				'VPC'          => [ 'shape' => 'VPC', ],
			],
		],
		'DNSName'                                        => [ 'type' => 'string', 'max' => 1024, ],
		'DNSRCode'                                       => [ 'type' => 'string', ],
		'DelegationSet'                                  => [
			'type'     => 'structure',
			'required' => [ 'NameServers', ],
			'members'  => [
				'Id'              => [ 'shape' => 'ResourceId', ],
				'CallerReference' => [ 'shape' => 'Nonce', ],
				'NameServers'     => [ 'shape' => 'DelegationSetNameServers', ],
			],
		],
		'DelegationSetAlreadyCreated'                    => [
			'type'      => 'structure',
			'members'   => [ 'message' => [ 'shape' => 'ErrorMessage', ], ],
			'exception' => true,
		],
		'DelegationSetAlreadyReusable'                   => [
			'type'      => 'structure',
			'members'   => [ 'message' => [ 'shape' => 'ErrorMessage', ], ],
			'exception' => true,
		],
		'DelegationSetInUse'                             => [
			'type'      => 'structure',
			'members'   => [ 'message' => [ 'shape' => 'ErrorMessage', ], ],
			'exception' => true,
		],
		'DelegationSetNameServers'                       => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'DNSName',
				'locationName' => 'NameServer',
			],
			'min'    => 1,
		],
		'DelegationSetNotAvailable'                      => [
			'type'      => 'structure',
			'members'   => [ 'message' => [ 'shape' => 'ErrorMessage', ], ],
			'exception' => true,
		],
		'DelegationSetNotReusable'                       => [
			'type'      => 'structure',
			'members'   => [ 'message' => [ 'shape' => 'ErrorMessage', ], ],
			'exception' => true,
		],
		'DelegationSets'                                 => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'DelegationSet',
				'locationName' => 'DelegationSet',
			],
		],
		'DeleteHealthCheckRequest'                       => [
			'type'     => 'structure',
			'required' => [ 'HealthCheckId', ],
			'members'  => [
				'HealthCheckId' => [
					'shape'        => 'HealthCheckId',
					'location'     => 'uri',
					'locationName' => 'HealthCheckId',
				],
			],
		],
		'DeleteHealthCheckResponse'                      => [ 'type' => 'structure', 'members' => [], ],
		'DeleteHostedZoneRequest'                        => [
			'type'     => 'structure',
			'required' => [ 'Id', ],
			'members'  => [
				'Id' => [
					'shape'        => 'ResourceId',
					'location'     => 'uri',
					'locationName' => 'Id',
				],
			],
		],
		'DeleteHostedZoneResponse'                       => [
			'type'     => 'structure',
			'required' => [ 'ChangeInfo', ],
			'members'  => [ 'ChangeInfo' => [ 'shape' => 'ChangeInfo', ], ],
		],
		'DeleteQueryLoggingConfigRequest'                => [
			'type'     => 'structure',
			'required' => [ 'Id', ],
			'members'  => [
				'Id' => [
					'shape'        => 'QueryLoggingConfigId',
					'location'     => 'uri',
					'locationName' => 'Id',
				],
			],
		],
		'DeleteQueryLoggingConfigResponse'               => [ 'type' => 'structure', 'members' => [], ],
		'DeleteReusableDelegationSetRequest'             => [
			'type'     => 'structure',
			'required' => [ 'Id', ],
			'members'  => [
				'Id' => [
					'shape'        => 'ResourceId',
					'location'     => 'uri',
					'locationName' => 'Id',
				],
			],
		],
		'DeleteReusableDelegationSetResponse'            => [ 'type' => 'structure', 'members' => [], ],
		'DeleteTrafficPolicyInstanceRequest'             => [
			'type'     => 'structure',
			'required' => [ 'Id', ],
			'members'  => [
				'Id' => [
					'shape'        => 'TrafficPolicyInstanceId',
					'location'     => 'uri',
					'locationName' => 'Id',
				],
			],
		],
		'DeleteTrafficPolicyInstanceResponse'            => [ 'type' => 'structure', 'members' => [], ],
		'DeleteTrafficPolicyRequest'                     => [
			'type'     => 'structure',
			'required' => [ 'Id', 'Version', ],
			'members'  => [
				'Id'      => [
					'shape'        => 'TrafficPolicyId',
					'location'     => 'uri',
					'locationName' => 'Id',
				],
				'Version' => [
					'shape'        => 'TrafficPolicyVersion',
					'location'     => 'uri',
					'locationName' => 'Version',
				],
			],
		],
		'DeleteTrafficPolicyResponse'                    => [ 'type' => 'structure', 'members' => [], ],
		'DeleteVPCAssociationAuthorizationRequest'       => [
			'type'     => 'structure',
			'required' => [ 'HostedZoneId', 'VPC', ],
			'members'  => [
				'HostedZoneId' => [
					'shape'        => 'ResourceId',
					'location'     => 'uri',
					'locationName' => 'Id',
				],
				'VPC'          => [ 'shape' => 'VPC', ],
			],
		],
		'DeleteVPCAssociationAuthorizationResponse'      => [ 'type' => 'structure', 'members' => [], ],
		'Dimension'                                      => [
			'type'     => 'structure',
			'required' => [ 'Name', 'Value', ],
			'members'  => [
				'Name'  => [ 'shape' => 'DimensionField', ],
				'Value' => [ 'shape' => 'DimensionField', ],
			],
		],
		'DimensionField'                                 => [ 'type' => 'string', 'max' => 255, 'min' => 1, ],
		'DimensionList'                                  => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'Dimension',
				'locationName' => 'Dimension',
			],
			'max'    => 10,
		],
		'Disabled'                                       => [ 'type' => 'boolean', ],
		'DisassociateVPCComment'                         => [ 'type' => 'string', ],
		'DisassociateVPCFromHostedZoneRequest'           => [
			'type'     => 'structure',
			'required' => [ 'HostedZoneId', 'VPC', ],
			'members'  => [
				'HostedZoneId' => [
					'shape'        => 'ResourceId',
					'location'     => 'uri',
					'locationName' => 'Id',
				],
				'VPC'          => [ 'shape' => 'VPC', ],
				'Comment'      => [ 'shape' => 'DisassociateVPCComment', ],
			],
		],
		'DisassociateVPCFromHostedZoneResponse'          => [
			'type'     => 'structure',
			'required' => [ 'ChangeInfo', ],
			'members'  => [ 'ChangeInfo' => [ 'shape' => 'ChangeInfo', ], ],
		],
		'EnableSNI'                                      => [ 'type' => 'boolean', ],
		'ErrorMessage'                                   => [ 'type' => 'string', ],
		'ErrorMessages'                                  => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'ErrorMessage',
				'locationName' => 'Message',
			],
		],
		'EvaluationPeriods'                              => [ 'type' => 'integer', 'min' => 1, ],
		'FailureThreshold'                               => [ 'type' => 'integer', 'max' => 10, 'min' => 1, ],
		'FullyQualifiedDomainName'                       => [ 'type' => 'string', 'max' => 255, ],
		'GeoLocation'                                    => [
			'type'    => 'structure',
			'members' => [
				'ContinentCode'   => [ 'shape' => 'GeoLocationContinentCode', ],
				'CountryCode'     => [ 'shape' => 'GeoLocationCountryCode', ],
				'SubdivisionCode' => [ 'shape' => 'GeoLocationSubdivisionCode', ],
			],
		],
		'GeoLocationContinentCode'                       => [ 'type' => 'string', 'max' => 2, 'min' => 2, ],
		'GeoLocationContinentName'                       => [ 'type' => 'string', 'max' => 32, 'min' => 1, ],
		'GeoLocationCountryCode'                         => [ 'type' => 'string', 'max' => 2, 'min' => 1, ],
		'GeoLocationCountryName'                         => [ 'type' => 'string', 'max' => 64, 'min' => 1, ],
		'GeoLocationDetails'                             => [
			'type'    => 'structure',
			'members' => [
				'ContinentCode'   => [ 'shape' => 'GeoLocationContinentCode', ],
				'ContinentName'   => [ 'shape' => 'GeoLocationContinentName', ],
				'CountryCode'     => [ 'shape' => 'GeoLocationCountryCode', ],
				'CountryName'     => [ 'shape' => 'GeoLocationCountryName', ],
				'SubdivisionCode' => [ 'shape' => 'GeoLocationSubdivisionCode', ],
				'SubdivisionName' => [ 'shape' => 'GeoLocationSubdivisionName', ],
			],
		],
		'GeoLocationDetailsList'                         => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'GeoLocationDetails',
				'locationName' => 'GeoLocationDetails',
			],
		],
		'GeoLocationSubdivisionCode'                     => [ 'type' => 'string', 'max' => 3, 'min' => 1, ],
		'GeoLocationSubdivisionName'                     => [ 'type' => 'string', 'max' => 64, 'min' => 1, ],
		'GetAccountLimitRequest'                         => [
			'type'     => 'structure',
			'required' => [ 'Type', ],
			'members'  => [
				'Type' => [
					'shape'        => 'AccountLimitType',
					'location'     => 'uri',
					'locationName' => 'Type',
				],
			],
		],
		'GetAccountLimitResponse'                        => [
			'type'     => 'structure',
			'required' => [ 'Limit', 'Count', ],
			'members'  => [
				'Limit' => [ 'shape' => 'AccountLimit', ],
				'Count' => [ 'shape' => 'UsageCount', ],
			],
		],
		'GetChangeRequest'                               => [
			'type'     => 'structure',
			'required' => [ 'Id', ],
			'members'  => [
				'Id' => [
					'shape'        => 'ResourceId',
					'location'     => 'uri',
					'locationName' => 'Id',
				],
			],
		],
		'GetChangeResponse'                              => [
			'type'     => 'structure',
			'required' => [ 'ChangeInfo', ],
			'members'  => [ 'ChangeInfo' => [ 'shape' => 'ChangeInfo', ], ],
		],
		'GetCheckerIpRangesRequest'                      => [ 'type' => 'structure', 'members' => [], ],
		'GetCheckerIpRangesResponse'                     => [
			'type'     => 'structure',
			'required' => [ 'CheckerIpRanges', ],
			'members'  => [ 'CheckerIpRanges' => [ 'shape' => 'CheckerIpRanges', ], ],
		],
		'GetGeoLocationRequest'                          => [
			'type'    => 'structure',
			'members' => [
				'ContinentCode'   => [
					'shape'        => 'GeoLocationContinentCode',
					'location'     => 'querystring',
					'locationName' => 'continentcode',
				],
				'CountryCode'     => [
					'shape'        => 'GeoLocationCountryCode',
					'location'     => 'querystring',
					'locationName' => 'countrycode',
				],
				'SubdivisionCode' => [
					'shape'        => 'GeoLocationSubdivisionCode',
					'location'     => 'querystring',
					'locationName' => 'subdivisioncode',
				],
			],
		],
		'GetGeoLocationResponse'                         => [
			'type'     => 'structure',
			'required' => [ 'GeoLocationDetails', ],
			'members'  => [ 'GeoLocationDetails' => [ 'shape' => 'GeoLocationDetails', ], ],
		],
		'GetHealthCheckCountRequest'                     => [ 'type' => 'structure', 'members' => [], ],
		'GetHealthCheckCountResponse'                    => [
			'type'     => 'structure',
			'required' => [ 'HealthCheckCount', ],
			'members'  => [ 'HealthCheckCount' => [ 'shape' => 'HealthCheckCount', ], ],
		],
		'GetHealthCheckLastFailureReasonRequest'         => [
			'type'     => 'structure',
			'required' => [ 'HealthCheckId', ],
			'members'  => [
				'HealthCheckId' => [
					'shape'        => 'HealthCheckId',
					'location'     => 'uri',
					'locationName' => 'HealthCheckId',
				],
			],
		],
		'GetHealthCheckLastFailureReasonResponse'        => [
			'type'     => 'structure',
			'required' => [ 'HealthCheckObservations', ],
			'members'  => [ 'HealthCheckObservations' => [ 'shape' => 'HealthCheckObservations', ], ],
		],
		'GetHealthCheckRequest'                          => [
			'type'     => 'structure',
			'required' => [ 'HealthCheckId', ],
			'members'  => [
				'HealthCheckId' => [
					'shape'        => 'HealthCheckId',
					'location'     => 'uri',
					'locationName' => 'HealthCheckId',
				],
			],
		],
		'GetHealthCheckResponse'                         => [
			'type'     => 'structure',
			'required' => [ 'HealthCheck', ],
			'members'  => [ 'HealthCheck' => [ 'shape' => 'HealthCheck', ], ],
		],
		'GetHealthCheckStatusRequest'                    => [
			'type'     => 'structure',
			'required' => [ 'HealthCheckId', ],
			'members'  => [
				'HealthCheckId' => [
					'shape'        => 'HealthCheckId',
					'location'     => 'uri',
					'locationName' => 'HealthCheckId',
				],
			],
		],
		'GetHealthCheckStatusResponse'                   => [
			'type'     => 'structure',
			'required' => [ 'HealthCheckObservations', ],
			'members'  => [ 'HealthCheckObservations' => [ 'shape' => 'HealthCheckObservations', ], ],
		],
		'GetHostedZoneCountRequest'                      => [ 'type' => 'structure', 'members' => [], ],
		'GetHostedZoneCountResponse'                     => [
			'type'     => 'structure',
			'required' => [ 'HostedZoneCount', ],
			'members'  => [ 'HostedZoneCount' => [ 'shape' => 'HostedZoneCount', ], ],
		],
		'GetHostedZoneLimitRequest'                      => [
			'type'     => 'structure',
			'required' => [ 'Type', 'HostedZoneId', ],
			'members'  => [
				'Type'         => [
					'shape'        => 'HostedZoneLimitType',
					'location'     => 'uri',
					'locationName' => 'Type',
				],
				'HostedZoneId' => [
					'shape'        => 'ResourceId',
					'location'     => 'uri',
					'locationName' => 'Id',
				],
			],
		],
		'GetHostedZoneLimitResponse'                     => [
			'type'     => 'structure',
			'required' => [ 'Limit', 'Count', ],
			'members'  => [
				'Limit' => [ 'shape' => 'HostedZoneLimit', ],
				'Count' => [ 'shape' => 'UsageCount', ],
			],
		],
		'GetHostedZoneRequest'                           => [
			'type'     => 'structure',
			'required' => [ 'Id', ],
			'members'  => [
				'Id' => [
					'shape'        => 'ResourceId',
					'location'     => 'uri',
					'locationName' => 'Id',
				],
			],
		],
		'GetHostedZoneResponse'                          => [
			'type'     => 'structure',
			'required' => [ 'HostedZone', ],
			'members'  => [
				'HostedZone'    => [ 'shape' => 'HostedZone', ],
				'DelegationSet' => [ 'shape' => 'DelegationSet', ],
				'VPCs'          => [ 'shape' => 'VPCs', ],
			],
		],
		'GetQueryLoggingConfigRequest'                   => [
			'type'     => 'structure',
			'required' => [ 'Id', ],
			'members'  => [
				'Id' => [
					'shape'        => 'QueryLoggingConfigId',
					'location'     => 'uri',
					'locationName' => 'Id',
				],
			],
		],
		'GetQueryLoggingConfigResponse'                  => [
			'type'     => 'structure',
			'required' => [ 'QueryLoggingConfig', ],
			'members'  => [ 'QueryLoggingConfig' => [ 'shape' => 'QueryLoggingConfig', ], ],
		],
		'GetReusableDelegationSetLimitRequest'           => [
			'type'     => 'structure',
			'required' => [ 'Type', 'DelegationSetId', ],
			'members'  => [
				'Type'            => [
					'shape'        => 'ReusableDelegationSetLimitType',
					'location'     => 'uri',
					'locationName' => 'Type',
				],
				'DelegationSetId' => [
					'shape'        => 'ResourceId',
					'location'     => 'uri',
					'locationName' => 'Id',
				],
			],
		],
		'GetReusableDelegationSetLimitResponse'          => [
			'type'     => 'structure',
			'required' => [ 'Limit', 'Count', ],
			'members'  => [
				'Limit' => [ 'shape' => 'ReusableDelegationSetLimit', ],
				'Count' => [ 'shape' => 'UsageCount', ],
			],
		],
		'GetReusableDelegationSetRequest'                => [
			'type'     => 'structure',
			'required' => [ 'Id', ],
			'members'  => [
				'Id' => [
					'shape'        => 'ResourceId',
					'location'     => 'uri',
					'locationName' => 'Id',
				],
			],
		],
		'GetReusableDelegationSetResponse'               => [
			'type'     => 'structure',
			'required' => [ 'DelegationSet', ],
			'members'  => [ 'DelegationSet' => [ 'shape' => 'DelegationSet', ], ],
		],
		'GetTrafficPolicyInstanceCountRequest'           => [ 'type' => 'structure', 'members' => [], ],
		'GetTrafficPolicyInstanceCountResponse'          => [
			'type'     => 'structure',
			'required' => [ 'TrafficPolicyInstanceCount', ],
			'members'  => [ 'TrafficPolicyInstanceCount' => [ 'shape' => 'TrafficPolicyInstanceCount', ], ],
		],
		'GetTrafficPolicyInstanceRequest'                => [
			'type'     => 'structure',
			'required' => [ 'Id', ],
			'members'  => [
				'Id' => [
					'shape'        => 'TrafficPolicyInstanceId',
					'location'     => 'uri',
					'locationName' => 'Id',
				],
			],
		],
		'GetTrafficPolicyInstanceResponse'               => [
			'type'     => 'structure',
			'required' => [ 'TrafficPolicyInstance', ],
			'members'  => [ 'TrafficPolicyInstance' => [ 'shape' => 'TrafficPolicyInstance', ], ],
		],
		'GetTrafficPolicyRequest'                        => [
			'type'     => 'structure',
			'required' => [ 'Id', 'Version', ],
			'members'  => [
				'Id'      => [
					'shape'        => 'TrafficPolicyId',
					'location'     => 'uri',
					'locationName' => 'Id',
				],
				'Version' => [
					'shape'        => 'TrafficPolicyVersion',
					'location'     => 'uri',
					'locationName' => 'Version',
				],
			],
		],
		'GetTrafficPolicyResponse'                       => [
			'type'     => 'structure',
			'required' => [ 'TrafficPolicy', ],
			'members'  => [ 'TrafficPolicy' => [ 'shape' => 'TrafficPolicy', ], ],
		],
		'HealthCheck'                                    => [
			'type'     => 'structure',
			'required' => [
				'Id',
				'CallerReference',
				'HealthCheckConfig',
				'HealthCheckVersion',
			],
			'members'  => [
				'Id'                           => [ 'shape' => 'HealthCheckId', ],
				'CallerReference'              => [ 'shape' => 'HealthCheckNonce', ],
				'LinkedService'                => [ 'shape' => 'LinkedService', ],
				'HealthCheckConfig'            => [ 'shape' => 'HealthCheckConfig', ],
				'HealthCheckVersion'           => [ 'shape' => 'HealthCheckVersion', ],
				'CloudWatchAlarmConfiguration' => [ 'shape' => 'CloudWatchAlarmConfiguration', ],
			],
		],
		'HealthCheckAlreadyExists'                       => [
			'type'      => 'structure',
			'members'   => [ 'message' => [ 'shape' => 'ErrorMessage', ], ],
			'error'     => [ 'httpStatusCode' => 409, ],
			'exception' => true,
		],
		'HealthCheckConfig'                              => [
			'type'     => 'structure',
			'required' => [ 'Type', ],
			'members'  => [
				'IPAddress'                    => [ 'shape' => 'IPAddress', ],
				'Port'                         => [ 'shape' => 'Port', ],
				'Type'                         => [ 'shape' => 'HealthCheckType', ],
				'ResourcePath'                 => [ 'shape' => 'ResourcePath', ],
				'FullyQualifiedDomainName'     => [ 'shape' => 'FullyQualifiedDomainName', ],
				'SearchString'                 => [ 'shape' => 'SearchString', ],
				'RequestInterval'              => [ 'shape' => 'RequestInterval', ],
				'FailureThreshold'             => [ 'shape' => 'FailureThreshold', ],
				'MeasureLatency'               => [ 'shape' => 'MeasureLatency', ],
				'Inverted'                     => [ 'shape' => 'Inverted', ],
				'Disabled'                     => [ 'shape' => 'Disabled', ],
				'HealthThreshold'              => [ 'shape' => 'HealthThreshold', ],
				'ChildHealthChecks'            => [ 'shape' => 'ChildHealthCheckList', ],
				'EnableSNI'                    => [ 'shape' => 'EnableSNI', ],
				'Regions'                      => [ 'shape' => 'HealthCheckRegionList', ],
				'AlarmIdentifier'              => [ 'shape' => 'AlarmIdentifier', ],
				'InsufficientDataHealthStatus' => [ 'shape' => 'InsufficientDataHealthStatus', ],
			],
		],
		'HealthCheckCount'                               => [ 'type' => 'long', ],
		'HealthCheckId'                                  => [ 'type' => 'string', 'max' => 64, ],
		'HealthCheckInUse'                               => [
			'type'       => 'structure',
			'members'    => [ 'message' => [ 'shape' => 'ErrorMessage', ], ],
			'deprecated' => true,
			'error'      => [ 'httpStatusCode' => 400, ],
			'exception'  => true,
		],
		'HealthCheckNonce'                               => [ 'type' => 'string', 'max' => 64, 'min' => 1, ],
		'HealthCheckObservation'                         => [
			'type'    => 'structure',
			'members' => [
				'Region'       => [ 'shape' => 'HealthCheckRegion', ],
				'IPAddress'    => [ 'shape' => 'IPAddress', ],
				'StatusReport' => [ 'shape' => 'StatusReport', ],
			],
		],
		'HealthCheckObservations'                        => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'HealthCheckObservation',
				'locationName' => 'HealthCheckObservation',
			],
		],
		'HealthCheckRegion'                              => [
			'type' => 'string',
			'enum' => [
				'us-east-1',
				'us-west-1',
				'us-west-2',
				'eu-west-1',
				'ap-southeast-1',
				'ap-southeast-2',
				'ap-northeast-1',
				'sa-east-1',
			],
			'max'  => 64,
			'min'  => 1,
		],
		'HealthCheckRegionList'                          => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'HealthCheckRegion',
				'locationName' => 'Region',
			],
			'max'    => 64,
			'min'    => 3,
		],
		'HealthCheckType'                                => [
			'type' => 'string',
			'enum' => [
				'HTTP',
				'HTTPS',
				'HTTP_STR_MATCH',
				'HTTPS_STR_MATCH',
				'TCP',
				'CALCULATED',
				'CLOUDWATCH_METRIC',
			],
		],
		'HealthCheckVersion'                             => [ 'type' => 'long', 'min' => 1, ],
		'HealthCheckVersionMismatch'                     => [
			'type'      => 'structure',
			'members'   => [ 'message' => [ 'shape' => 'ErrorMessage', ], ],
			'error'     => [ 'httpStatusCode' => 409, ],
			'exception' => true,
		],
		'HealthChecks'                                   => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'HealthCheck',
				'locationName' => 'HealthCheck',
			],
		],
		'HealthThreshold'                                => [ 'type' => 'integer', 'max' => 256, 'min' => 0, ],
		'HostedZone'                                     => [
			'type'     => 'structure',
			'required' => [ 'Id', 'Name', 'CallerReference', ],
			'members'  => [
				'Id'                     => [ 'shape' => 'ResourceId', ],
				'Name'                   => [ 'shape' => 'DNSName', ],
				'CallerReference'        => [ 'shape' => 'Nonce', ],
				'Config'                 => [ 'shape' => 'HostedZoneConfig', ],
				'ResourceRecordSetCount' => [ 'shape' => 'HostedZoneRRSetCount', ],
				'LinkedService'          => [ 'shape' => 'LinkedService', ],
			],
		],
		'HostedZoneAlreadyExists'                        => [
			'type'      => 'structure',
			'members'   => [ 'message' => [ 'shape' => 'ErrorMessage', ], ],
			'error'     => [ 'httpStatusCode' => 409, ],
			'exception' => true,
		],
		'HostedZoneConfig'                               => [
			'type'    => 'structure',
			'members' => [
				'Comment'     => [ 'shape' => 'ResourceDescription', ],
				'PrivateZone' => [ 'shape' => 'IsPrivateZone', ],
			],
		],
		'HostedZoneCount'                                => [ 'type' => 'long', ],
		'HostedZoneLimit'                                => [
			'type'     => 'structure',
			'required' => [ 'Type', 'Value', ],
			'members'  => [
				'Type'  => [ 'shape' => 'HostedZoneLimitType', ],
				'Value' => [ 'shape' => 'LimitValue', ],
			],
		],
		'HostedZoneLimitType'                            => [
			'type' => 'string',
			'enum' => [
				'MAX_RRSETS_BY_ZONE',
				'MAX_VPCS_ASSOCIATED_BY_ZONE',
			],
		],
		'HostedZoneNotEmpty'                             => [
			'type'      => 'structure',
			'members'   => [ 'message' => [ 'shape' => 'ErrorMessage', ], ],
			'error'     => [ 'httpStatusCode' => 400, ],
			'exception' => true,
		],
		'HostedZoneNotFound'                             => [
			'type'      => 'structure',
			'members'   => [ 'message' => [ 'shape' => 'ErrorMessage', ], ],
			'exception' => true,
		],
		'HostedZoneNotPrivate'                           => [
			'type'      => 'structure',
			'members'   => [ 'message' => [ 'shape' => 'ErrorMessage', ], ],
			'exception' => true,
		],
		'HostedZoneRRSetCount'                           => [ 'type' => 'long', ],
		'HostedZones'                                    => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'HostedZone',
				'locationName' => 'HostedZone',
			],
		],
		'IPAddress'                                      => [
			'type'    => 'string',
			'max'     => 45,
			'pattern' => '(^((([0-9]|[1-9][0-9]|1[0-9]{2}|2[0-4][0-9]|25[0-5])\\.){3}([0-9]|[1-9][0-9]|1[0-9]{2}|2[0-4][0-9]|25[0-5]))$|^(([0-9a-fA-F]{1,4}:){7,7}[0-9a-fA-F]{1,4}|([0-9a-fA-F]{1,4}:){1,7}:|([0-9a-fA-F]{1,4}:){1,6}:[0-9a-fA-F]{1,4}|([0-9a-fA-F]{1,4}:){1,5}(:[0-9a-fA-F]{1,4}){1,2}|([0-9a-fA-F]{1,4}:){1,4}(:[0-9a-fA-F]{1,4}){1,3}|([0-9a-fA-F]{1,4}:){1,3}(:[0-9a-fA-F]{1,4}){1,4}|([0-9a-fA-F]{1,4}:){1,2}(:[0-9a-fA-F]{1,4}){1,5}|[0-9a-fA-F]{1,4}:((:[0-9a-fA-F]{1,4}){1,6})|:((:[0-9a-fA-F]{1,4}){1,7}|:)|fe80:(:[0-9a-fA-F]{0,4}){0,4}%[0-9a-zA-Z]{1,}|::(ffff(:0{1,4}){0,1}:){0,1}((25[0-5]|(2[0-4]|1{0,1}[0-9]){0,1}[0-9])\\.){3,3}(25[0-5]|(2[0-4]|1{0,1}[0-9]){0,1}[0-9])|([0-9a-fA-F]{1,4}:){1,4}:((25[0-5]|(2[0-4]|1{0,1}[0-9]){0,1}[0-9])\\.){3,3}(25[0-5]|(2[0-4]|1{0,1}[0-9]){0,1}[0-9]))$)',
		],
		'IPAddressCidr'                                  => [ 'type' => 'string', ],
		'IncompatibleVersion'                            => [
			'type'      => 'structure',
			'members'   => [ 'message' => [ 'shape' => 'ErrorMessage', ], ],
			'error'     => [ 'httpStatusCode' => 400, ],
			'exception' => true,
		],
		'InsufficientCloudWatchLogsResourcePolicy'       => [
			'type'      => 'structure',
			'members'   => [ 'message' => [ 'shape' => 'ErrorMessage', ], ],
			'error'     => [ 'httpStatusCode' => 400, ],
			'exception' => true,
		],
		'InsufficientDataHealthStatus'                   => [
			'type' => 'string',
			'enum' => [ 'Healthy', 'Unhealthy', 'LastKnownStatus', ],
		],
		'InvalidArgument'                                => [
			'type'      => 'structure',
			'members'   => [ 'message' => [ 'shape' => 'ErrorMessage', ], ],
			'exception' => true,
		],
		'InvalidChangeBatch'                             => [
			'type'      => 'structure',
			'members'   => [
				'messages' => [ 'shape' => 'ErrorMessages', ],
				'message'  => [ 'shape' => 'ErrorMessage', ],
			],
			'exception' => true,
		],
		'InvalidDomainName'                              => [
			'type'      => 'structure',
			'members'   => [ 'message' => [ 'shape' => 'ErrorMessage', ], ],
			'error'     => [ 'httpStatusCode' => 400, ],
			'exception' => true,
		],
		'InvalidInput'                                   => [
			'type'      => 'structure',
			'members'   => [ 'message' => [ 'shape' => 'ErrorMessage', ], ],
			'error'     => [ 'httpStatusCode' => 400, ],
			'exception' => true,
		],
		'InvalidPaginationToken'                         => [
			'type'      => 'structure',
			'members'   => [ 'message' => [ 'shape' => 'ErrorMessage', ], ],
			'error'     => [ 'httpStatusCode' => 400, ],
			'exception' => true,
		],
		'InvalidTrafficPolicyDocument'                   => [
			'type'      => 'structure',
			'members'   => [ 'message' => [ 'shape' => 'ErrorMessage', ], ],
			'error'     => [ 'httpStatusCode' => 400, ],
			'exception' => true,
		],
		'InvalidVPCId'                                   => [
			'type'      => 'structure',
			'members'   => [ 'message' => [ 'shape' => 'ErrorMessage', ], ],
			'error'     => [ 'httpStatusCode' => 400, ],
			'exception' => true,
		],
		'Inverted'                                       => [ 'type' => 'boolean', ],
		'IsPrivateZone'                                  => [ 'type' => 'boolean', ],
		'LastVPCAssociation'                             => [
			'type'      => 'structure',
			'members'   => [ 'message' => [ 'shape' => 'ErrorMessage', ], ],
			'error'     => [ 'httpStatusCode' => 400, ],
			'exception' => true,
		],
		'LimitValue'                                     => [ 'type' => 'long', 'min' => 1, ],
		'LimitsExceeded'                                 => [
			'type'      => 'structure',
			'members'   => [ 'message' => [ 'shape' => 'ErrorMessage', ], ],
			'exception' => true,
		],
		'LinkedService'                                  => [
			'type'    => 'structure',
			'members' => [
				'ServicePrincipal' => [ 'shape' => 'ServicePrincipal', ],
				'Description'      => [ 'shape' => 'ResourceDescription', ],
			],
		],
		'ListGeoLocationsRequest'                        => [
			'type'    => 'structure',
			'members' => [
				'StartContinentCode'   => [
					'shape'        => 'GeoLocationContinentCode',
					'location'     => 'querystring',
					'locationName' => 'startcontinentcode',
				],
				'StartCountryCode'     => [
					'shape'        => 'GeoLocationCountryCode',
					'location'     => 'querystring',
					'locationName' => 'startcountrycode',
				],
				'StartSubdivisionCode' => [
					'shape'        => 'GeoLocationSubdivisionCode',
					'location'     => 'querystring',
					'locationName' => 'startsubdivisioncode',
				],
				'MaxItems'             => [
					'shape'        => 'PageMaxItems',
					'location'     => 'querystring',
					'locationName' => 'maxitems',
				],
			],
		],
		'ListGeoLocationsResponse'                       => [
			'type'     => 'structure',
			'required' => [
				'GeoLocationDetailsList',
				'IsTruncated',
				'MaxItems',
			],
			'members'  => [
				'GeoLocationDetailsList' => [ 'shape' => 'GeoLocationDetailsList', ],
				'IsTruncated'            => [ 'shape' => 'PageTruncated', ],
				'NextContinentCode'      => [ 'shape' => 'GeoLocationContinentCode', ],
				'NextCountryCode'        => [ 'shape' => 'GeoLocationCountryCode', ],
				'NextSubdivisionCode'    => [ 'shape' => 'GeoLocationSubdivisionCode', ],
				'MaxItems'               => [ 'shape' => 'PageMaxItems', ],
			],
		],
		'ListHealthChecksRequest'                        => [
			'type'    => 'structure',
			'members' => [
				'Marker'   => [
					'shape'        => 'PageMarker',
					'location'     => 'querystring',
					'locationName' => 'marker',
				],
				'MaxItems' => [
					'shape'        => 'PageMaxItems',
					'location'     => 'querystring',
					'locationName' => 'maxitems',
				],
			],
		],
		'ListHealthChecksResponse'                       => [
			'type'     => 'structure',
			'required' => [
				'HealthChecks',
				'Marker',
				'IsTruncated',
				'MaxItems',
			],
			'members'  => [
				'HealthChecks' => [ 'shape' => 'HealthChecks', ],
				'Marker'       => [ 'shape' => 'PageMarker', ],
				'IsTruncated'  => [ 'shape' => 'PageTruncated', ],
				'NextMarker'   => [ 'shape' => 'PageMarker', ],
				'MaxItems'     => [ 'shape' => 'PageMaxItems', ],
			],
		],
		'ListHostedZonesByNameRequest'                   => [
			'type'    => 'structure',
			'members' => [
				'DNSName'      => [
					'shape'        => 'DNSName',
					'location'     => 'querystring',
					'locationName' => 'dnsname',
				],
				'HostedZoneId' => [
					'shape'        => 'ResourceId',
					'location'     => 'querystring',
					'locationName' => 'hostedzoneid',
				],
				'MaxItems'     => [
					'shape'        => 'PageMaxItems',
					'location'     => 'querystring',
					'locationName' => 'maxitems',
				],
			],
		],
		'ListHostedZonesByNameResponse'                  => [
			'type'     => 'structure',
			'required' => [ 'HostedZones', 'IsTruncated', 'MaxItems', ],
			'members'  => [
				'HostedZones'      => [ 'shape' => 'HostedZones', ],
				'DNSName'          => [ 'shape' => 'DNSName', ],
				'HostedZoneId'     => [ 'shape' => 'ResourceId', ],
				'IsTruncated'      => [ 'shape' => 'PageTruncated', ],
				'NextDNSName'      => [ 'shape' => 'DNSName', ],
				'NextHostedZoneId' => [ 'shape' => 'ResourceId', ],
				'MaxItems'         => [ 'shape' => 'PageMaxItems', ],
			],
		],
		'ListHostedZonesRequest'                         => [
			'type'    => 'structure',
			'members' => [
				'Marker'          => [
					'shape'        => 'PageMarker',
					'location'     => 'querystring',
					'locationName' => 'marker',
				],
				'MaxItems'        => [
					'shape'        => 'PageMaxItems',
					'location'     => 'querystring',
					'locationName' => 'maxitems',
				],
				'DelegationSetId' => [
					'shape'        => 'ResourceId',
					'location'     => 'querystring',
					'locationName' => 'delegationsetid',
				],
			],
		],
		'ListHostedZonesResponse'                        => [
			'type'     => 'structure',
			'required' => [
				'HostedZones',
				'Marker',
				'IsTruncated',
				'MaxItems',
			],
			'members'  => [
				'HostedZones' => [ 'shape' => 'HostedZones', ],
				'Marker'      => [ 'shape' => 'PageMarker', ],
				'IsTruncated' => [ 'shape' => 'PageTruncated', ],
				'NextMarker'  => [ 'shape' => 'PageMarker', ],
				'MaxItems'    => [ 'shape' => 'PageMaxItems', ],
			],
		],
		'ListQueryLoggingConfigsRequest'                 => [
			'type'    => 'structure',
			'members' => [
				'HostedZoneId' => [
					'shape'        => 'ResourceId',
					'location'     => 'querystring',
					'locationName' => 'hostedzoneid',
				],
				'NextToken'    => [
					'shape'        => 'PaginationToken',
					'location'     => 'querystring',
					'locationName' => 'nexttoken',
				],
				'MaxResults'   => [
					'shape'        => 'MaxResults',
					'location'     => 'querystring',
					'locationName' => 'maxresults',
				],
			],
		],
		'ListQueryLoggingConfigsResponse'                => [
			'type'     => 'structure',
			'required' => [ 'QueryLoggingConfigs', ],
			'members'  => [
				'QueryLoggingConfigs' => [ 'shape' => 'QueryLoggingConfigs', ],
				'NextToken'           => [ 'shape' => 'PaginationToken', ],
			],
		],
		'ListResourceRecordSetsRequest'                  => [
			'type'     => 'structure',
			'required' => [ 'HostedZoneId', ],
			'members'  => [
				'HostedZoneId'          => [
					'shape'        => 'ResourceId',
					'location'     => 'uri',
					'locationName' => 'Id',
				],
				'StartRecordName'       => [
					'shape'        => 'DNSName',
					'location'     => 'querystring',
					'locationName' => 'name',
				],
				'StartRecordType'       => [
					'shape'        => 'RRType',
					'location'     => 'querystring',
					'locationName' => 'type',
				],
				'StartRecordIdentifier' => [
					'shape'        => 'ResourceRecordSetIdentifier',
					'location'     => 'querystring',
					'locationName' => 'identifier',
				],
				'MaxItems'              => [
					'shape'        => 'PageMaxItems',
					'location'     => 'querystring',
					'locationName' => 'maxitems',
				],
			],
		],
		'ListResourceRecordSetsResponse'                 => [
			'type'     => 'structure',
			'required' => [
				'ResourceRecordSets',
				'IsTruncated',
				'MaxItems',
			],
			'members'  => [
				'ResourceRecordSets'   => [ 'shape' => 'ResourceRecordSets', ],
				'IsTruncated'          => [ 'shape' => 'PageTruncated', ],
				'NextRecordName'       => [ 'shape' => 'DNSName', ],
				'NextRecordType'       => [ 'shape' => 'RRType', ],
				'NextRecordIdentifier' => [ 'shape' => 'ResourceRecordSetIdentifier', ],
				'MaxItems'             => [ 'shape' => 'PageMaxItems', ],
			],
		],
		'ListReusableDelegationSetsRequest'              => [
			'type'    => 'structure',
			'members' => [
				'Marker'   => [
					'shape'        => 'PageMarker',
					'location'     => 'querystring',
					'locationName' => 'marker',
				],
				'MaxItems' => [
					'shape'        => 'PageMaxItems',
					'location'     => 'querystring',
					'locationName' => 'maxitems',
				],
			],
		],
		'ListReusableDelegationSetsResponse'             => [
			'type'     => 'structure',
			'required' => [
				'DelegationSets',
				'Marker',
				'IsTruncated',
				'MaxItems',
			],
			'members'  => [
				'DelegationSets' => [ 'shape' => 'DelegationSets', ],
				'Marker'         => [ 'shape' => 'PageMarker', ],
				'IsTruncated'    => [ 'shape' => 'PageTruncated', ],
				'NextMarker'     => [ 'shape' => 'PageMarker', ],
				'MaxItems'       => [ 'shape' => 'PageMaxItems', ],
			],
		],
		'ListTagsForResourceRequest'                     => [
			'type'     => 'structure',
			'required' => [ 'ResourceType', 'ResourceId', ],
			'members'  => [
				'ResourceType' => [
					'shape'        => 'TagResourceType',
					'location'     => 'uri',
					'locationName' => 'ResourceType',
				],
				'ResourceId'   => [
					'shape'        => 'TagResourceId',
					'location'     => 'uri',
					'locationName' => 'ResourceId',
				],
			],
		],
		'ListTagsForResourceResponse'                    => [
			'type'     => 'structure',
			'required' => [ 'ResourceTagSet', ],
			'members'  => [ 'ResourceTagSet' => [ 'shape' => 'ResourceTagSet', ], ],
		],
		'ListTagsForResourcesRequest'                    => [
			'type'     => 'structure',
			'required' => [ 'ResourceType', 'ResourceIds', ],
			'members'  => [
				'ResourceType' => [
					'shape'        => 'TagResourceType',
					'location'     => 'uri',
					'locationName' => 'ResourceType',
				],
				'ResourceIds'  => [ 'shape' => 'TagResourceIdList', ],
			],
		],
		'ListTagsForResourcesResponse'                   => [
			'type'     => 'structure',
			'required' => [ 'ResourceTagSets', ],
			'members'  => [ 'ResourceTagSets' => [ 'shape' => 'ResourceTagSetList', ], ],
		],
		'ListTrafficPoliciesRequest'                     => [
			'type'    => 'structure',
			'members' => [
				'TrafficPolicyIdMarker' => [
					'shape'        => 'TrafficPolicyId',
					'location'     => 'querystring',
					'locationName' => 'trafficpolicyid',
				],
				'MaxItems'              => [
					'shape'        => 'PageMaxItems',
					'location'     => 'querystring',
					'locationName' => 'maxitems',
				],
			],
		],
		'ListTrafficPoliciesResponse'                    => [
			'type'     => 'structure',
			'required' => [
				'TrafficPolicySummaries',
				'IsTruncated',
				'TrafficPolicyIdMarker',
				'MaxItems',
			],
			'members'  => [
				'TrafficPolicySummaries' => [ 'shape' => 'TrafficPolicySummaries', ],
				'IsTruncated'            => [ 'shape' => 'PageTruncated', ],
				'TrafficPolicyIdMarker'  => [ 'shape' => 'TrafficPolicyId', ],
				'MaxItems'               => [ 'shape' => 'PageMaxItems', ],
			],
		],
		'ListTrafficPolicyInstancesByHostedZoneRequest'  => [
			'type'     => 'structure',
			'required' => [ 'HostedZoneId', ],
			'members'  => [
				'HostedZoneId'                    => [
					'shape'        => 'ResourceId',
					'location'     => 'querystring',
					'locationName' => 'id',
				],
				'TrafficPolicyInstanceNameMarker' => [
					'shape'        => 'DNSName',
					'location'     => 'querystring',
					'locationName' => 'trafficpolicyinstancename',
				],
				'TrafficPolicyInstanceTypeMarker' => [
					'shape'        => 'RRType',
					'location'     => 'querystring',
					'locationName' => 'trafficpolicyinstancetype',
				],
				'MaxItems'                        => [
					'shape'        => 'PageMaxItems',
					'location'     => 'querystring',
					'locationName' => 'maxitems',
				],
			],
		],
		'ListTrafficPolicyInstancesByHostedZoneResponse' => [
			'type'     => 'structure',
			'required' => [
				'TrafficPolicyInstances',
				'IsTruncated',
				'MaxItems',
			],
			'members'  => [
				'TrafficPolicyInstances'          => [ 'shape' => 'TrafficPolicyInstances', ],
				'TrafficPolicyInstanceNameMarker' => [ 'shape' => 'DNSName', ],
				'TrafficPolicyInstanceTypeMarker' => [ 'shape' => 'RRType', ],
				'IsTruncated'                     => [ 'shape' => 'PageTruncated', ],
				'MaxItems'                        => [ 'shape' => 'PageMaxItems', ],
			],
		],
		'ListTrafficPolicyInstancesByPolicyRequest'      => [
			'type'     => 'structure',
			'required' => [
				'TrafficPolicyId',
				'TrafficPolicyVersion',
			],
			'members'  => [
				'TrafficPolicyId'                 => [
					'shape'        => 'TrafficPolicyId',
					'location'     => 'querystring',
					'locationName' => 'id',
				],
				'TrafficPolicyVersion'            => [
					'shape'        => 'TrafficPolicyVersion',
					'location'     => 'querystring',
					'locationName' => 'version',
				],
				'HostedZoneIdMarker'              => [
					'shape'        => 'ResourceId',
					'location'     => 'querystring',
					'locationName' => 'hostedzoneid',
				],
				'TrafficPolicyInstanceNameMarker' => [
					'shape'        => 'DNSName',
					'location'     => 'querystring',
					'locationName' => 'trafficpolicyinstancename',
				],
				'TrafficPolicyInstanceTypeMarker' => [
					'shape'        => 'RRType',
					'location'     => 'querystring',
					'locationName' => 'trafficpolicyinstancetype',
				],
				'MaxItems'                        => [
					'shape'        => 'PageMaxItems',
					'location'     => 'querystring',
					'locationName' => 'maxitems',
				],
			],
		],
		'ListTrafficPolicyInstancesByPolicyResponse'     => [
			'type'     => 'structure',
			'required' => [
				'TrafficPolicyInstances',
				'IsTruncated',
				'MaxItems',
			],
			'members'  => [
				'TrafficPolicyInstances'          => [ 'shape' => 'TrafficPolicyInstances', ],
				'HostedZoneIdMarker'              => [ 'shape' => 'ResourceId', ],
				'TrafficPolicyInstanceNameMarker' => [ 'shape' => 'DNSName', ],
				'TrafficPolicyInstanceTypeMarker' => [ 'shape' => 'RRType', ],
				'IsTruncated'                     => [ 'shape' => 'PageTruncated', ],
				'MaxItems'                        => [ 'shape' => 'PageMaxItems', ],
			],
		],
		'ListTrafficPolicyInstancesRequest'              => [
			'type'    => 'structure',
			'members' => [
				'HostedZoneIdMarker'              => [
					'shape'        => 'ResourceId',
					'location'     => 'querystring',
					'locationName' => 'hostedzoneid',
				],
				'TrafficPolicyInstanceNameMarker' => [
					'shape'        => 'DNSName',
					'location'     => 'querystring',
					'locationName' => 'trafficpolicyinstancename',
				],
				'TrafficPolicyInstanceTypeMarker' => [
					'shape'        => 'RRType',
					'location'     => 'querystring',
					'locationName' => 'trafficpolicyinstancetype',
				],
				'MaxItems'                        => [
					'shape'        => 'PageMaxItems',
					'location'     => 'querystring',
					'locationName' => 'maxitems',
				],
			],
		],
		'ListTrafficPolicyInstancesResponse'             => [
			'type'     => 'structure',
			'required' => [
				'TrafficPolicyInstances',
				'IsTruncated',
				'MaxItems',
			],
			'members'  => [
				'TrafficPolicyInstances'          => [ 'shape' => 'TrafficPolicyInstances', ],
				'HostedZoneIdMarker'              => [ 'shape' => 'ResourceId', ],
				'TrafficPolicyInstanceNameMarker' => [ 'shape' => 'DNSName', ],
				'TrafficPolicyInstanceTypeMarker' => [ 'shape' => 'RRType', ],
				'IsTruncated'                     => [ 'shape' => 'PageTruncated', ],
				'MaxItems'                        => [ 'shape' => 'PageMaxItems', ],
			],
		],
		'ListTrafficPolicyVersionsRequest'               => [
			'type'     => 'structure',
			'required' => [ 'Id', ],
			'members'  => [
				'Id'                         => [
					'shape'        => 'TrafficPolicyId',
					'location'     => 'uri',
					'locationName' => 'Id',
				],
				'TrafficPolicyVersionMarker' => [
					'shape'        => 'TrafficPolicyVersionMarker',
					'location'     => 'querystring',
					'locationName' => 'trafficpolicyversion',
				],
				'MaxItems'                   => [
					'shape'        => 'PageMaxItems',
					'location'     => 'querystring',
					'locationName' => 'maxitems',
				],
			],
		],
		'ListTrafficPolicyVersionsResponse'              => [
			'type'     => 'structure',
			'required' => [
				'TrafficPolicies',
				'IsTruncated',
				'TrafficPolicyVersionMarker',
				'MaxItems',
			],
			'members'  => [
				'TrafficPolicies'            => [ 'shape' => 'TrafficPolicies', ],
				'IsTruncated'                => [ 'shape' => 'PageTruncated', ],
				'TrafficPolicyVersionMarker' => [ 'shape' => 'TrafficPolicyVersionMarker', ],
				'MaxItems'                   => [ 'shape' => 'PageMaxItems', ],
			],
		],
		'ListVPCAssociationAuthorizationsRequest'        => [
			'type'     => 'structure',
			'required' => [ 'HostedZoneId', ],
			'members'  => [
				'HostedZoneId' => [
					'shape'        => 'ResourceId',
					'location'     => 'uri',
					'locationName' => 'Id',
				],
				'NextToken'    => [
					'shape'        => 'PaginationToken',
					'location'     => 'querystring',
					'locationName' => 'nexttoken',
				],
				'MaxResults'   => [
					'shape'        => 'MaxResults',
					'location'     => 'querystring',
					'locationName' => 'maxresults',
				],
			],
		],
		'ListVPCAssociationAuthorizationsResponse'       => [
			'type'     => 'structure',
			'required' => [ 'HostedZoneId', 'VPCs', ],
			'members'  => [
				'HostedZoneId' => [ 'shape' => 'ResourceId', ],
				'NextToken'    => [ 'shape' => 'PaginationToken', ],
				'VPCs'         => [ 'shape' => 'VPCs', ],
			],
		],
		'MaxResults'                                     => [ 'type' => 'string', ],
		'MeasureLatency'                                 => [ 'type' => 'boolean', ],
		'Message'                                        => [ 'type' => 'string', 'max' => 1024, ],
		'MetricName'                                     => [ 'type' => 'string', 'max' => 255, 'min' => 1, ],
		'Nameserver'                                     => [ 'type' => 'string', 'max' => 255, 'min' => 0, ],
		'Namespace'                                      => [ 'type' => 'string', 'max' => 255, 'min' => 1, ],
		'NoSuchChange'                                   => [
			'type'      => 'structure',
			'members'   => [ 'message' => [ 'shape' => 'ErrorMessage', ], ],
			'error'     => [ 'httpStatusCode' => 404, ],
			'exception' => true,
		],
		'NoSuchCloudWatchLogsLogGroup'                   => [
			'type'      => 'structure',
			'members'   => [ 'message' => [ 'shape' => 'ErrorMessage', ], ],
			'error'     => [ 'httpStatusCode' => 404, ],
			'exception' => true,
		],
		'NoSuchDelegationSet'                            => [
			'type'      => 'structure',
			'members'   => [ 'message' => [ 'shape' => 'ErrorMessage', ], ],
			'exception' => true,
		],
		'NoSuchGeoLocation'                              => [
			'type'      => 'structure',
			'members'   => [ 'message' => [ 'shape' => 'ErrorMessage', ], ],
			'error'     => [ 'httpStatusCode' => 404, ],
			'exception' => true,
		],
		'NoSuchHealthCheck'                              => [
			'type'      => 'structure',
			'members'   => [ 'message' => [ 'shape' => 'ErrorMessage', ], ],
			'error'     => [ 'httpStatusCode' => 404, ],
			'exception' => true,
		],
		'NoSuchHostedZone'                               => [
			'type'      => 'structure',
			'members'   => [ 'message' => [ 'shape' => 'ErrorMessage', ], ],
			'error'     => [ 'httpStatusCode' => 404, ],
			'exception' => true,
		],
		'NoSuchQueryLoggingConfig'                       => [
			'type'      => 'structure',
			'members'   => [ 'message' => [ 'shape' => 'ErrorMessage', ], ],
			'error'     => [ 'httpStatusCode' => 404, ],
			'exception' => true,
		],
		'NoSuchTrafficPolicy'                            => [
			'type'      => 'structure',
			'members'   => [ 'message' => [ 'shape' => 'ErrorMessage', ], ],
			'error'     => [ 'httpStatusCode' => 404, ],
			'exception' => true,
		],
		'NoSuchTrafficPolicyInstance'                    => [
			'type'      => 'structure',
			'members'   => [ 'message' => [ 'shape' => 'ErrorMessage', ], ],
			'error'     => [ 'httpStatusCode' => 404, ],
			'exception' => true,
		],
		'Nonce'                                          => [ 'type' => 'string', 'max' => 128, 'min' => 1, ],
		'NotAuthorizedException'                         => [
			'type'      => 'structure',
			'members'   => [ 'message' => [ 'shape' => 'ErrorMessage', ], ],
			'error'     => [ 'httpStatusCode' => 401, ],
			'exception' => true,
		],
		'PageMarker'                                     => [ 'type' => 'string', 'max' => 64, ],
		'PageMaxItems'                                   => [ 'type' => 'string', ],
		'PageTruncated'                                  => [ 'type' => 'boolean', ],
		'PaginationToken'                                => [ 'type' => 'string', 'max' => 256, ],
		'Period'                                         => [ 'type' => 'integer', 'min' => 60, ],
		'Port'                                           => [ 'type' => 'integer', 'max' => 65535, 'min' => 1, ],
		'PriorRequestNotComplete'                        => [
			'type'      => 'structure',
			'members'   => [ 'message' => [ 'shape' => 'ErrorMessage', ], ],
			'error'     => [ 'httpStatusCode' => 400, ],
			'exception' => true,
		],
		'PublicZoneVPCAssociation'                       => [
			'type'      => 'structure',
			'members'   => [ 'message' => [ 'shape' => 'ErrorMessage', ], ],
			'error'     => [ 'httpStatusCode' => 400, ],
			'exception' => true,
		],
		'QueryLoggingConfig'                             => [
			'type'     => 'structure',
			'required' => [
				'Id',
				'HostedZoneId',
				'CloudWatchLogsLogGroupArn',
			],
			'members'  => [
				'Id'                        => [ 'shape' => 'QueryLoggingConfigId', ],
				'HostedZoneId'              => [ 'shape' => 'ResourceId', ],
				'CloudWatchLogsLogGroupArn' => [ 'shape' => 'CloudWatchLogsLogGroupArn', ],
			],
		],
		'QueryLoggingConfigAlreadyExists'                => [
			'type'      => 'structure',
			'members'   => [ 'message' => [ 'shape' => 'ErrorMessage', ], ],
			'error'     => [ 'httpStatusCode' => 409, ],
			'exception' => true,
		],
		'QueryLoggingConfigId'                           => [ 'type' => 'string', 'max' => 36, 'min' => 1, ],
		'QueryLoggingConfigs'                            => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'QueryLoggingConfig',
				'locationName' => 'QueryLoggingConfig',
			],
		],
		'RData'                                          => [ 'type' => 'string', 'max' => 4000, ],
		'RRType'                                         => [
			'type' => 'string',
			'enum' => [
				'SOA',
				'A',
				'TXT',
				'NS',
				'CNAME',
				'MX',
				'NAPTR',
				'PTR',
				'SRV',
				'SPF',
				'AAAA',
				'CAA',
			],
		],
		'RecordData'                                     => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'RecordDataEntry',
				'locationName' => 'RecordDataEntry',
			],
		],
		'RecordDataEntry'                                => [ 'type' => 'string', 'max' => 512, 'min' => 0, ],
		'RequestInterval'                                => [ 'type' => 'integer', 'max' => 30, 'min' => 10, ],
		'ResettableElementName'                          => [
			'type' => 'string',
			'enum' => [
				'FullyQualifiedDomainName',
				'Regions',
				'ResourcePath',
				'ChildHealthChecks',
			],
			'max'  => 64,
			'min'  => 1,
		],
		'ResettableElementNameList'                      => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'ResettableElementName',
				'locationName' => 'ResettableElementName',
			],
			'max'    => 64,
		],
		'ResourceDescription'                            => [ 'type' => 'string', 'max' => 256, ],
		'ResourceId'                                     => [ 'type' => 'string', 'max' => 32, ],
		'ResourcePath'                                   => [ 'type' => 'string', 'max' => 255, ],
		'ResourceRecord'                                 => [
			'type'     => 'structure',
			'required' => [ 'Value', ],
			'members'  => [ 'Value' => [ 'shape' => 'RData', ], ],
		],
		'ResourceRecordSet'                              => [
			'type'     => 'structure',
			'required' => [ 'Name', 'Type', ],
			'members'  => [
				'Name'                    => [ 'shape' => 'DNSName', ],
				'Type'                    => [ 'shape' => 'RRType', ],
				'SetIdentifier'           => [ 'shape' => 'ResourceRecordSetIdentifier', ],
				'Weight'                  => [ 'shape' => 'ResourceRecordSetWeight', ],
				'Region'                  => [ 'shape' => 'ResourceRecordSetRegion', ],
				'GeoLocation'             => [ 'shape' => 'GeoLocation', ],
				'Failover'                => [ 'shape' => 'ResourceRecordSetFailover', ],
				'MultiValueAnswer'        => [ 'shape' => 'ResourceRecordSetMultiValueAnswer', ],
				'TTL'                     => [ 'shape' => 'TTL', ],
				'ResourceRecords'         => [ 'shape' => 'ResourceRecords', ],
				'AliasTarget'             => [ 'shape' => 'AliasTarget', ],
				'HealthCheckId'           => [ 'shape' => 'HealthCheckId', ],
				'TrafficPolicyInstanceId' => [ 'shape' => 'TrafficPolicyInstanceId', ],
			],
		],
		'ResourceRecordSetFailover'                      => [
			'type' => 'string',
			'enum' => [ 'PRIMARY', 'SECONDARY', ],
		],
		'ResourceRecordSetIdentifier'                    => [ 'type' => 'string', 'max' => 128, 'min' => 1, ],
		'ResourceRecordSetMultiValueAnswer'              => [ 'type' => 'boolean', ],
		'ResourceRecordSetRegion'                        => [
			'type' => 'string',
			'enum' => [
				'us-east-1',
				'us-east-2',
				'us-west-1',
				'us-west-2',
				'ca-central-1',
				'eu-west-1',
				'eu-west-2',
				'eu-west-3',
				'eu-central-1',
				'ap-southeast-1',
				'ap-southeast-2',
				'ap-northeast-1',
				'ap-northeast-2',
				'ap-northeast-3',
				'eu-north-1',
				'sa-east-1',
				'cn-north-1',
				'cn-northwest-1',
				'ap-east-1',
				'ap-south-1',
			],
			'max'  => 64,
			'min'  => 1,
		],
		'ResourceRecordSetWeight'                        => [ 'type' => 'long', 'max' => 255, 'min' => 0, ],
		'ResourceRecordSets'                             => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'ResourceRecordSet',
				'locationName' => 'ResourceRecordSet',
			],
		],
		'ResourceRecords'                                => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'ResourceRecord',
				'locationName' => 'ResourceRecord',
			],
			'min'    => 1,
		],
		'ResourceTagSet'                                 => [
			'type'    => 'structure',
			'members' => [
				'ResourceType' => [ 'shape' => 'TagResourceType', ],
				'ResourceId'   => [ 'shape' => 'TagResourceId', ],
				'Tags'         => [ 'shape' => 'TagList', ],
			],
		],
		'ResourceTagSetList'                             => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'ResourceTagSet',
				'locationName' => 'ResourceTagSet',
			],
		],
		'ResourceURI'                                    => [ 'type' => 'string', 'max' => 1024, ],
		'ReusableDelegationSetLimit'                     => [
			'type'     => 'structure',
			'required' => [ 'Type', 'Value', ],
			'members'  => [
				'Type'  => [ 'shape' => 'ReusableDelegationSetLimitType', ],
				'Value' => [ 'shape' => 'LimitValue', ],
			],
		],
		'ReusableDelegationSetLimitType'                 => [
			'type' => 'string',
			'enum' => [ 'MAX_ZONES_BY_REUSABLE_DELEGATION_SET', ],
		],
		'SearchString'                                   => [ 'type' => 'string', 'max' => 255, ],
		'ServicePrincipal'                               => [ 'type' => 'string', 'max' => 128, ],
		'Statistic'                                      => [
			'type' => 'string',
			'enum' => [
				'Average',
				'Sum',
				'SampleCount',
				'Maximum',
				'Minimum',
			],
		],
		'Status'                                         => [ 'type' => 'string', ],
		'StatusReport'                                   => [
			'type'    => 'structure',
			'members' => [
				'Status'      => [ 'shape' => 'Status', ],
				'CheckedTime' => [ 'shape' => 'TimeStamp', ],
			],
		],
		'SubnetMask'                                     => [ 'type' => 'string', 'max' => 3, 'min' => 0, ],
		'TTL'                                            => [ 'type' => 'long', 'max' => 2147483647, 'min' => 0, ],
		'Tag'                                            => [
			'type'    => 'structure',
			'members' => [
				'Key'   => [ 'shape' => 'TagKey', ],
				'Value' => [ 'shape' => 'TagValue', ],
			],
		],
		'TagKey'                                         => [ 'type' => 'string', 'max' => 128, ],
		'TagKeyList'                                     => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'TagKey',
				'locationName' => 'Key',
			],
			'max'    => 10,
			'min'    => 1,
		],
		'TagList'                                        => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'Tag',
				'locationName' => 'Tag',
			],
			'max'    => 10,
			'min'    => 1,
		],
		'TagResourceId'                                  => [ 'type' => 'string', 'max' => 64, ],
		'TagResourceIdList'                              => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'TagResourceId',
				'locationName' => 'ResourceId',
			],
			'max'    => 10,
			'min'    => 1,
		],
		'TagResourceType'                                => [
			'type' => 'string',
			'enum' => [ 'healthcheck', 'hostedzone', ],
		],
		'TagValue'                                       => [ 'type' => 'string', 'max' => 256, ],
		'TestDNSAnswerRequest'                           => [
			'type'     => 'structure',
			'required' => [
				'HostedZoneId',
				'RecordName',
				'RecordType',
			],
			'members'  => [
				'HostedZoneId'          => [
					'shape'        => 'ResourceId',
					'location'     => 'querystring',
					'locationName' => 'hostedzoneid',
				],
				'RecordName'            => [
					'shape'        => 'DNSName',
					'location'     => 'querystring',
					'locationName' => 'recordname',
				],
				'RecordType'            => [
					'shape'        => 'RRType',
					'location'     => 'querystring',
					'locationName' => 'recordtype',
				],
				'ResolverIP'            => [
					'shape'        => 'IPAddress',
					'location'     => 'querystring',
					'locationName' => 'resolverip',
				],
				'EDNS0ClientSubnetIP'   => [
					'shape'        => 'IPAddress',
					'location'     => 'querystring',
					'locationName' => 'edns0clientsubnetip',
				],
				'EDNS0ClientSubnetMask' => [
					'shape'        => 'SubnetMask',
					'location'     => 'querystring',
					'locationName' => 'edns0clientsubnetmask',
				],
			],
		],
		'TestDNSAnswerResponse'                          => [
			'type'     => 'structure',
			'required' => [
				'Nameserver',
				'RecordName',
				'RecordType',
				'RecordData',
				'ResponseCode',
				'Protocol',
			],
			'members'  => [
				'Nameserver'   => [ 'shape' => 'Nameserver', ],
				'RecordName'   => [ 'shape' => 'DNSName', ],
				'RecordType'   => [ 'shape' => 'RRType', ],
				'RecordData'   => [ 'shape' => 'RecordData', ],
				'ResponseCode' => [ 'shape' => 'DNSRCode', ],
				'Protocol'     => [ 'shape' => 'TransportProtocol', ],
			],
		],
		'Threshold'                                      => [ 'type' => 'double', ],
		'ThrottlingException'                            => [
			'type'      => 'structure',
			'members'   => [ 'message' => [ 'shape' => 'ErrorMessage', ], ],
			'error'     => [ 'httpStatusCode' => 400, ],
			'exception' => true,
		],
		'TimeStamp'                                      => [ 'type' => 'timestamp', ],
		'TooManyHealthChecks'                            => [
			'type'      => 'structure',
			'members'   => [ 'message' => [ 'shape' => 'ErrorMessage', ], ],
			'exception' => true,
		],
		'TooManyHostedZones'                             => [
			'type'      => 'structure',
			'members'   => [ 'message' => [ 'shape' => 'ErrorMessage', ], ],
			'error'     => [ 'httpStatusCode' => 400, ],
			'exception' => true,
		],
		'TooManyTrafficPolicies'                         => [
			'type'      => 'structure',
			'members'   => [ 'message' => [ 'shape' => 'ErrorMessage', ], ],
			'error'     => [ 'httpStatusCode' => 400, ],
			'exception' => true,
		],
		'TooManyTrafficPolicyInstances'                  => [
			'type'      => 'structure',
			'members'   => [ 'message' => [ 'shape' => 'ErrorMessage', ], ],
			'error'     => [ 'httpStatusCode' => 400, ],
			'exception' => true,
		],
		'TooManyTrafficPolicyVersionsForCurrentPolicy'   => [
			'type'      => 'structure',
			'members'   => [ 'message' => [ 'shape' => 'ErrorMessage', ], ],
			'error'     => [ 'httpStatusCode' => 400, ],
			'exception' => true,
		],
		'TooManyVPCAssociationAuthorizations'            => [
			'type'      => 'structure',
			'members'   => [ 'message' => [ 'shape' => 'ErrorMessage', ], ],
			'error'     => [ 'httpStatusCode' => 400, ],
			'exception' => true,
		],
		'TrafficPolicies'                                => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'TrafficPolicy',
				'locationName' => 'TrafficPolicy',
			],
		],
		'TrafficPolicy'                                  => [
			'type'     => 'structure',
			'required' => [
				'Id',
				'Version',
				'Name',
				'Type',
				'Document',
			],
			'members'  => [
				'Id'       => [ 'shape' => 'TrafficPolicyId', ],
				'Version'  => [ 'shape' => 'TrafficPolicyVersion', ],
				'Name'     => [ 'shape' => 'TrafficPolicyName', ],
				'Type'     => [ 'shape' => 'RRType', ],
				'Document' => [ 'shape' => 'TrafficPolicyDocument', ],
				'Comment'  => [ 'shape' => 'TrafficPolicyComment', ],
			],
		],
		'TrafficPolicyAlreadyExists'                     => [
			'type'      => 'structure',
			'members'   => [ 'message' => [ 'shape' => 'ErrorMessage', ], ],
			'error'     => [ 'httpStatusCode' => 409, ],
			'exception' => true,
		],
		'TrafficPolicyComment'                           => [ 'type' => 'string', 'max' => 1024, ],
		'TrafficPolicyDocument'                          => [ 'type' => 'string', 'max' => 102400, ],
		'TrafficPolicyId'                                => [ 'type' => 'string', 'max' => 36, 'min' => 1, ],
		'TrafficPolicyInUse'                             => [
			'type'      => 'structure',
			'members'   => [ 'message' => [ 'shape' => 'ErrorMessage', ], ],
			'error'     => [ 'httpStatusCode' => 400, ],
			'exception' => true,
		],
		'TrafficPolicyInstance'                          => [
			'type'     => 'structure',
			'required' => [
				'Id',
				'HostedZoneId',
				'Name',
				'TTL',
				'State',
				'Message',
				'TrafficPolicyId',
				'TrafficPolicyVersion',
				'TrafficPolicyType',
			],
			'members'  => [
				'Id'                   => [ 'shape' => 'TrafficPolicyInstanceId', ],
				'HostedZoneId'         => [ 'shape' => 'ResourceId', ],
				'Name'                 => [ 'shape' => 'DNSName', ],
				'TTL'                  => [ 'shape' => 'TTL', ],
				'State'                => [ 'shape' => 'TrafficPolicyInstanceState', ],
				'Message'              => [ 'shape' => 'Message', ],
				'TrafficPolicyId'      => [ 'shape' => 'TrafficPolicyId', ],
				'TrafficPolicyVersion' => [ 'shape' => 'TrafficPolicyVersion', ],
				'TrafficPolicyType'    => [ 'shape' => 'RRType', ],
			],
		],
		'TrafficPolicyInstanceAlreadyExists'             => [
			'type'      => 'structure',
			'members'   => [ 'message' => [ 'shape' => 'ErrorMessage', ], ],
			'error'     => [ 'httpStatusCode' => 409, ],
			'exception' => true,
		],
		'TrafficPolicyInstanceCount'                     => [ 'type' => 'integer', ],
		'TrafficPolicyInstanceId'                        => [ 'type' => 'string', 'max' => 36, 'min' => 1, ],
		'TrafficPolicyInstanceState'                     => [ 'type' => 'string', ],
		'TrafficPolicyInstances'                         => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'TrafficPolicyInstance',
				'locationName' => 'TrafficPolicyInstance',
			],
		],
		'TrafficPolicyName'                              => [ 'type' => 'string', 'max' => 512, ],
		'TrafficPolicySummaries'                         => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'TrafficPolicySummary',
				'locationName' => 'TrafficPolicySummary',
			],
		],
		'TrafficPolicySummary'                           => [
			'type'     => 'structure',
			'required' => [
				'Id',
				'Name',
				'Type',
				'LatestVersion',
				'TrafficPolicyCount',
			],
			'members'  => [
				'Id'                 => [ 'shape' => 'TrafficPolicyId', ],
				'Name'               => [ 'shape' => 'TrafficPolicyName', ],
				'Type'               => [ 'shape' => 'RRType', ],
				'LatestVersion'      => [ 'shape' => 'TrafficPolicyVersion', ],
				'TrafficPolicyCount' => [ 'shape' => 'TrafficPolicyVersion', ],
			],
		],
		'TrafficPolicyVersion'                           => [ 'type' => 'integer', 'max' => 1000, 'min' => 1, ],
		'TrafficPolicyVersionMarker'                     => [ 'type' => 'string', 'max' => 4, ],
		'TransportProtocol'                              => [ 'type' => 'string', ],
		'UpdateHealthCheckRequest'                       => [
			'type'     => 'structure',
			'required' => [ 'HealthCheckId', ],
			'members'  => [
				'HealthCheckId'                => [
					'shape'        => 'HealthCheckId',
					'location'     => 'uri',
					'locationName' => 'HealthCheckId',
				],
				'HealthCheckVersion'           => [ 'shape' => 'HealthCheckVersion', ],
				'IPAddress'                    => [ 'shape' => 'IPAddress', ],
				'Port'                         => [ 'shape' => 'Port', ],
				'ResourcePath'                 => [ 'shape' => 'ResourcePath', ],
				'FullyQualifiedDomainName'     => [ 'shape' => 'FullyQualifiedDomainName', ],
				'SearchString'                 => [ 'shape' => 'SearchString', ],
				'FailureThreshold'             => [ 'shape' => 'FailureThreshold', ],
				'Inverted'                     => [ 'shape' => 'Inverted', ],
				'Disabled'                     => [ 'shape' => 'Disabled', ],
				'HealthThreshold'              => [ 'shape' => 'HealthThreshold', ],
				'ChildHealthChecks'            => [ 'shape' => 'ChildHealthCheckList', ],
				'EnableSNI'                    => [ 'shape' => 'EnableSNI', ],
				'Regions'                      => [ 'shape' => 'HealthCheckRegionList', ],
				'AlarmIdentifier'              => [ 'shape' => 'AlarmIdentifier', ],
				'InsufficientDataHealthStatus' => [ 'shape' => 'InsufficientDataHealthStatus', ],
				'ResetElements'                => [ 'shape' => 'ResettableElementNameList', ],
			],
		],
		'UpdateHealthCheckResponse'                      => [
			'type'     => 'structure',
			'required' => [ 'HealthCheck', ],
			'members'  => [ 'HealthCheck' => [ 'shape' => 'HealthCheck', ], ],
		],
		'UpdateHostedZoneCommentRequest'                 => [
			'type'     => 'structure',
			'required' => [ 'Id', ],
			'members'  => [
				'Id'      => [
					'shape'        => 'ResourceId',
					'location'     => 'uri',
					'locationName' => 'Id',
				],
				'Comment' => [ 'shape' => 'ResourceDescription', ],
			],
		],
		'UpdateHostedZoneCommentResponse'                => [
			'type'     => 'structure',
			'required' => [ 'HostedZone', ],
			'members'  => [ 'HostedZone' => [ 'shape' => 'HostedZone', ], ],
		],
		'UpdateTrafficPolicyCommentRequest'              => [
			'type'     => 'structure',
			'required' => [ 'Id', 'Version', 'Comment', ],
			'members'  => [
				'Id'      => [
					'shape'        => 'TrafficPolicyId',
					'location'     => 'uri',
					'locationName' => 'Id',
				],
				'Version' => [
					'shape'        => 'TrafficPolicyVersion',
					'location'     => 'uri',
					'locationName' => 'Version',
				],
				'Comment' => [ 'shape' => 'TrafficPolicyComment', ],
			],
		],
		'UpdateTrafficPolicyCommentResponse'             => [
			'type'     => 'structure',
			'required' => [ 'TrafficPolicy', ],
			'members'  => [ 'TrafficPolicy' => [ 'shape' => 'TrafficPolicy', ], ],
		],
		'UpdateTrafficPolicyInstanceRequest'             => [
			'type'     => 'structure',
			'required' => [
				'Id',
				'TTL',
				'TrafficPolicyId',
				'TrafficPolicyVersion',
			],
			'members'  => [
				'Id'                   => [
					'shape'        => 'TrafficPolicyInstanceId',
					'location'     => 'uri',
					'locationName' => 'Id',
				],
				'TTL'                  => [ 'shape' => 'TTL', ],
				'TrafficPolicyId'      => [ 'shape' => 'TrafficPolicyId', ],
				'TrafficPolicyVersion' => [ 'shape' => 'TrafficPolicyVersion', ],
			],
		],
		'UpdateTrafficPolicyInstanceResponse'            => [
			'type'     => 'structure',
			'required' => [ 'TrafficPolicyInstance', ],
			'members'  => [ 'TrafficPolicyInstance' => [ 'shape' => 'TrafficPolicyInstance', ], ],
		],
		'UsageCount'                                     => [ 'type' => 'long', 'min' => 0, ],
		'VPC'                                            => [
			'type'    => 'structure',
			'members' => [
				'VPCRegion' => [ 'shape' => 'VPCRegion', ],
				'VPCId'     => [ 'shape' => 'VPCId', ],
			],
		],
		'VPCAssociationAuthorizationNotFound'            => [
			'type'      => 'structure',
			'members'   => [ 'message' => [ 'shape' => 'ErrorMessage', ], ],
			'error'     => [ 'httpStatusCode' => 404, ],
			'exception' => true,
		],
		'VPCAssociationNotFound'                         => [
			'type'      => 'structure',
			'members'   => [ 'message' => [ 'shape' => 'ErrorMessage', ], ],
			'error'     => [ 'httpStatusCode' => 404, ],
			'exception' => true,
		],
		'VPCId'                                          => [ 'type' => 'string', 'max' => 1024, ],
		'VPCRegion'                                      => [
			'type' => 'string',
			'enum' => [
				'us-east-1',
				'us-east-2',
				'us-west-1',
				'us-west-2',
				'eu-west-1',
				'eu-west-2',
				'eu-west-3',
				'eu-central-1',
				'ap-east-1',
				'ap-southeast-1',
				'ap-southeast-2',
				'ap-south-1',
				'ap-northeast-1',
				'ap-northeast-2',
				'ap-northeast-3',
				'eu-north-1',
				'sa-east-1',
				'ca-central-1',
				'cn-north-1',
			],
			'max'  => 64,
			'min'  => 1,
		],
		'VPCs'                                           => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'VPC',
				'locationName' => 'VPC',
			],
			'min'    => 1,
		],
	],
];