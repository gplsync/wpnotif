<?php
// This file was auto-generated from sdk-root/src/data/pinpoint-email/2018-07-26/api-2.json
return [
	'version'    => '2.0',
	'metadata'   => [
		'apiVersion'          => '2018-07-26',
		'endpointPrefix'      => 'email',
		'jsonVersion'         => '1.1',
		'protocol'            => 'rest-json',
		'serviceAbbreviation' => 'Pinpoint Email',
		'serviceFullName'     => 'Amazon Pinpoint Email Service',
		'serviceId'           => 'Pinpoint Email',
		'signatureVersion'    => 'v4',
		'signingName'         => 'ses',
		'uid'                 => 'pinpoint-email-2018-07-26',
	],
	'operations' => [
		'CreateConfigurationSet'                 => [
			'name'   => 'CreateConfigurationSet',
			'http'   => [
				'method'     => 'POST',
				'requestUri' => '/v1/email/configuration-sets',
			],
			'input'  => [ 'shape' => 'CreateConfigurationSetRequest', ],
			'output' => [ 'shape' => 'CreateConfigurationSetResponse', ],
			'errors' => [
				[ 'shape' => 'AlreadyExistsException', ],
				[ 'shape' => 'NotFoundException', ],
				[ 'shape' => 'TooManyRequestsException', ],
				[ 'shape' => 'LimitExceededException', ],
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'ConcurrentModificationException', ],
			],
		],
		'CreateConfigurationSetEventDestination' => [
			'name'   => 'CreateConfigurationSetEventDestination',
			'http'   => [
				'method'     => 'POST',
				'requestUri' => '/v1/email/configuration-sets/{ConfigurationSetName}/event-destinations',
			],
			'input'  => [ 'shape' => 'CreateConfigurationSetEventDestinationRequest', ],
			'output' => [ 'shape' => 'CreateConfigurationSetEventDestinationResponse', ],
			'errors' => [
				[ 'shape' => 'NotFoundException', ],
				[ 'shape' => 'AlreadyExistsException', ],
				[ 'shape' => 'LimitExceededException', ],
				[ 'shape' => 'TooManyRequestsException', ],
				[ 'shape' => 'BadRequestException', ],
			],
		],
		'CreateDedicatedIpPool'                  => [
			'name'   => 'CreateDedicatedIpPool',
			'http'   => [
				'method'     => 'POST',
				'requestUri' => '/v1/email/dedicated-ip-pools',
			],
			'input'  => [ 'shape' => 'CreateDedicatedIpPoolRequest', ],
			'output' => [ 'shape' => 'CreateDedicatedIpPoolResponse', ],
			'errors' => [
				[ 'shape' => 'AlreadyExistsException', ],
				[ 'shape' => 'LimitExceededException', ],
				[ 'shape' => 'TooManyRequestsException', ],
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'ConcurrentModificationException', ],
			],
		],
		'CreateDeliverabilityTestReport'         => [
			'name'   => 'CreateDeliverabilityTestReport',
			'http'   => [
				'method'     => 'POST',
				'requestUri' => '/v1/email/deliverability-dashboard/test',
			],
			'input'  => [ 'shape' => 'CreateDeliverabilityTestReportRequest', ],
			'output' => [ 'shape' => 'CreateDeliverabilityTestReportResponse', ],
			'errors' => [
				[ 'shape' => 'AccountSuspendedException', ],
				[ 'shape' => 'SendingPausedException', ],
				[ 'shape' => 'MessageRejected', ],
				[ 'shape' => 'MailFromDomainNotVerifiedException', ],
				[ 'shape' => 'NotFoundException', ],
				[ 'shape' => 'TooManyRequestsException', ],
				[ 'shape' => 'LimitExceededException', ],
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'ConcurrentModificationException', ],
			],
		],
		'CreateEmailIdentity'                    => [
			'name'   => 'CreateEmailIdentity',
			'http'   => [
				'method'     => 'POST',
				'requestUri' => '/v1/email/identities',
			],
			'input'  => [ 'shape' => 'CreateEmailIdentityRequest', ],
			'output' => [ 'shape' => 'CreateEmailIdentityResponse', ],
			'errors' => [
				[ 'shape' => 'LimitExceededException', ],
				[ 'shape' => 'TooManyRequestsException', ],
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'ConcurrentModificationException', ],
			],
		],
		'DeleteConfigurationSet'                 => [
			'name'   => 'DeleteConfigurationSet',
			'http'   => [
				'method'     => 'DELETE',
				'requestUri' => '/v1/email/configuration-sets/{ConfigurationSetName}',
			],
			'input'  => [ 'shape' => 'DeleteConfigurationSetRequest', ],
			'output' => [ 'shape' => 'DeleteConfigurationSetResponse', ],
			'errors' => [
				[ 'shape' => 'NotFoundException', ],
				[ 'shape' => 'TooManyRequestsException', ],
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'ConcurrentModificationException', ],
			],
		],
		'DeleteConfigurationSetEventDestination' => [
			'name'   => 'DeleteConfigurationSetEventDestination',
			'http'   => [
				'method'     => 'DELETE',
				'requestUri' => '/v1/email/configuration-sets/{ConfigurationSetName}/event-destinations/{EventDestinationName}',
			],
			'input'  => [ 'shape' => 'DeleteConfigurationSetEventDestinationRequest', ],
			'output' => [ 'shape' => 'DeleteConfigurationSetEventDestinationResponse', ],
			'errors' => [
				[ 'shape' => 'NotFoundException', ],
				[ 'shape' => 'TooManyRequestsException', ],
				[ 'shape' => 'BadRequestException', ],
			],
		],
		'DeleteDedicatedIpPool'                  => [
			'name'   => 'DeleteDedicatedIpPool',
			'http'   => [
				'method'     => 'DELETE',
				'requestUri' => '/v1/email/dedicated-ip-pools/{PoolName}',
			],
			'input'  => [ 'shape' => 'DeleteDedicatedIpPoolRequest', ],
			'output' => [ 'shape' => 'DeleteDedicatedIpPoolResponse', ],
			'errors' => [
				[ 'shape' => 'NotFoundException', ],
				[ 'shape' => 'TooManyRequestsException', ],
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'ConcurrentModificationException', ],
			],
		],
		'DeleteEmailIdentity'                    => [
			'name'   => 'DeleteEmailIdentity',
			'http'   => [
				'method'     => 'DELETE',
				'requestUri' => '/v1/email/identities/{EmailIdentity}',
			],
			'input'  => [ 'shape' => 'DeleteEmailIdentityRequest', ],
			'output' => [ 'shape' => 'DeleteEmailIdentityResponse', ],
			'errors' => [
				[ 'shape' => 'NotFoundException', ],
				[ 'shape' => 'TooManyRequestsException', ],
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'ConcurrentModificationException', ],
			],
		],
		'GetAccount'                             => [
			'name'   => 'GetAccount',
			'http'   => [
				'method'     => 'GET',
				'requestUri' => '/v1/email/account',
			],
			'input'  => [ 'shape' => 'GetAccountRequest', ],
			'output' => [ 'shape' => 'GetAccountResponse', ],
			'errors' => [
				[ 'shape' => 'TooManyRequestsException', ],
				[ 'shape' => 'BadRequestException', ],
			],
		],
		'GetBlacklistReports'                    => [
			'name'   => 'GetBlacklistReports',
			'http'   => [
				'method'     => 'GET',
				'requestUri' => '/v1/email/deliverability-dashboard/blacklist-report',
			],
			'input'  => [ 'shape' => 'GetBlacklistReportsRequest', ],
			'output' => [ 'shape' => 'GetBlacklistReportsResponse', ],
			'errors' => [
				[ 'shape' => 'TooManyRequestsException', ],
				[ 'shape' => 'NotFoundException', ],
				[ 'shape' => 'BadRequestException', ],
			],
		],
		'GetConfigurationSet'                    => [
			'name'   => 'GetConfigurationSet',
			'http'   => [
				'method'     => 'GET',
				'requestUri' => '/v1/email/configuration-sets/{ConfigurationSetName}',
			],
			'input'  => [ 'shape' => 'GetConfigurationSetRequest', ],
			'output' => [ 'shape' => 'GetConfigurationSetResponse', ],
			'errors' => [
				[ 'shape' => 'NotFoundException', ],
				[ 'shape' => 'TooManyRequestsException', ],
				[ 'shape' => 'BadRequestException', ],
			],
		],
		'GetConfigurationSetEventDestinations'   => [
			'name'   => 'GetConfigurationSetEventDestinations',
			'http'   => [
				'method'     => 'GET',
				'requestUri' => '/v1/email/configuration-sets/{ConfigurationSetName}/event-destinations',
			],
			'input'  => [ 'shape' => 'GetConfigurationSetEventDestinationsRequest', ],
			'output' => [ 'shape' => 'GetConfigurationSetEventDestinationsResponse', ],
			'errors' => [
				[ 'shape' => 'NotFoundException', ],
				[ 'shape' => 'TooManyRequestsException', ],
				[ 'shape' => 'BadRequestException', ],
			],
		],
		'GetDedicatedIp'                         => [
			'name'   => 'GetDedicatedIp',
			'http'   => [
				'method'     => 'GET',
				'requestUri' => '/v1/email/dedicated-ips/{IP}',
			],
			'input'  => [ 'shape' => 'GetDedicatedIpRequest', ],
			'output' => [ 'shape' => 'GetDedicatedIpResponse', ],
			'errors' => [
				[ 'shape' => 'TooManyRequestsException', ],
				[ 'shape' => 'NotFoundException', ],
				[ 'shape' => 'BadRequestException', ],
			],
		],
		'GetDedicatedIps'                        => [
			'name'   => 'GetDedicatedIps',
			'http'   => [
				'method'     => 'GET',
				'requestUri' => '/v1/email/dedicated-ips',
			],
			'input'  => [ 'shape' => 'GetDedicatedIpsRequest', ],
			'output' => [ 'shape' => 'GetDedicatedIpsResponse', ],
			'errors' => [
				[ 'shape' => 'TooManyRequestsException', ],
				[ 'shape' => 'NotFoundException', ],
				[ 'shape' => 'BadRequestException', ],
			],
		],
		'GetDeliverabilityDashboardOptions'      => [
			'name'   => 'GetDeliverabilityDashboardOptions',
			'http'   => [
				'method'     => 'GET',
				'requestUri' => '/v1/email/deliverability-dashboard',
			],
			'input'  => [ 'shape' => 'GetDeliverabilityDashboardOptionsRequest', ],
			'output' => [ 'shape' => 'GetDeliverabilityDashboardOptionsResponse', ],
			'errors' => [
				[ 'shape' => 'TooManyRequestsException', ],
				[ 'shape' => 'LimitExceededException', ],
				[ 'shape' => 'BadRequestException', ],
			],
		],
		'GetDeliverabilityTestReport'            => [
			'name'   => 'GetDeliverabilityTestReport',
			'http'   => [
				'method'     => 'GET',
				'requestUri' => '/v1/email/deliverability-dashboard/test-reports/{ReportId}',
			],
			'input'  => [ 'shape' => 'GetDeliverabilityTestReportRequest', ],
			'output' => [ 'shape' => 'GetDeliverabilityTestReportResponse', ],
			'errors' => [
				[ 'shape' => 'TooManyRequestsException', ],
				[ 'shape' => 'NotFoundException', ],
				[ 'shape' => 'BadRequestException', ],
			],
		],
		'GetDomainDeliverabilityCampaign'        => [
			'name'   => 'GetDomainDeliverabilityCampaign',
			'http'   => [
				'method'     => 'GET',
				'requestUri' => '/v1/email/deliverability-dashboard/campaigns/{CampaignId}',
			],
			'input'  => [ 'shape' => 'GetDomainDeliverabilityCampaignRequest', ],
			'output' => [ 'shape' => 'GetDomainDeliverabilityCampaignResponse', ],
			'errors' => [
				[ 'shape' => 'TooManyRequestsException', ],
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'NotFoundException', ],
			],
		],
		'GetDomainStatisticsReport'              => [
			'name'   => 'GetDomainStatisticsReport',
			'http'   => [
				'method'     => 'GET',
				'requestUri' => '/v1/email/deliverability-dashboard/statistics-report/{Domain}',
			],
			'input'  => [ 'shape' => 'GetDomainStatisticsReportRequest', ],
			'output' => [ 'shape' => 'GetDomainStatisticsReportResponse', ],
			'errors' => [
				[ 'shape' => 'TooManyRequestsException', ],
				[ 'shape' => 'NotFoundException', ],
				[ 'shape' => 'BadRequestException', ],
			],
		],
		'GetEmailIdentity'                       => [
			'name'   => 'GetEmailIdentity',
			'http'   => [
				'method'     => 'GET',
				'requestUri' => '/v1/email/identities/{EmailIdentity}',
			],
			'input'  => [ 'shape' => 'GetEmailIdentityRequest', ],
			'output' => [ 'shape' => 'GetEmailIdentityResponse', ],
			'errors' => [
				[ 'shape' => 'NotFoundException', ],
				[ 'shape' => 'TooManyRequestsException', ],
				[ 'shape' => 'BadRequestException', ],
			],
		],
		'ListConfigurationSets'                  => [
			'name'   => 'ListConfigurationSets',
			'http'   => [
				'method'     => 'GET',
				'requestUri' => '/v1/email/configuration-sets',
			],
			'input'  => [ 'shape' => 'ListConfigurationSetsRequest', ],
			'output' => [ 'shape' => 'ListConfigurationSetsResponse', ],
			'errors' => [
				[ 'shape' => 'TooManyRequestsException', ],
				[ 'shape' => 'BadRequestException', ],
			],
		],
		'ListDedicatedIpPools'                   => [
			'name'   => 'ListDedicatedIpPools',
			'http'   => [
				'method'     => 'GET',
				'requestUri' => '/v1/email/dedicated-ip-pools',
			],
			'input'  => [ 'shape' => 'ListDedicatedIpPoolsRequest', ],
			'output' => [ 'shape' => 'ListDedicatedIpPoolsResponse', ],
			'errors' => [
				[ 'shape' => 'TooManyRequestsException', ],
				[ 'shape' => 'BadRequestException', ],
			],
		],
		'ListDeliverabilityTestReports'          => [
			'name'   => 'ListDeliverabilityTestReports',
			'http'   => [
				'method'     => 'GET',
				'requestUri' => '/v1/email/deliverability-dashboard/test-reports',
			],
			'input'  => [ 'shape' => 'ListDeliverabilityTestReportsRequest', ],
			'output' => [ 'shape' => 'ListDeliverabilityTestReportsResponse', ],
			'errors' => [
				[ 'shape' => 'TooManyRequestsException', ],
				[ 'shape' => 'NotFoundException', ],
				[ 'shape' => 'BadRequestException', ],
			],
		],
		'ListDomainDeliverabilityCampaigns'      => [
			'name'   => 'ListDomainDeliverabilityCampaigns',
			'http'   => [
				'method'     => 'GET',
				'requestUri' => '/v1/email/deliverability-dashboard/domains/{SubscribedDomain}/campaigns',
			],
			'input'  => [ 'shape' => 'ListDomainDeliverabilityCampaignsRequest', ],
			'output' => [ 'shape' => 'ListDomainDeliverabilityCampaignsResponse', ],
			'errors' => [
				[ 'shape' => 'TooManyRequestsException', ],
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'NotFoundException', ],
			],
		],
		'ListEmailIdentities'                    => [
			'name'   => 'ListEmailIdentities',
			'http'   => [
				'method'     => 'GET',
				'requestUri' => '/v1/email/identities',
			],
			'input'  => [ 'shape' => 'ListEmailIdentitiesRequest', ],
			'output' => [ 'shape' => 'ListEmailIdentitiesResponse', ],
			'errors' => [
				[ 'shape' => 'TooManyRequestsException', ],
				[ 'shape' => 'BadRequestException', ],
			],
		],
		'ListTagsForResource'                    => [
			'name'   => 'ListTagsForResource',
			'http'   => [
				'method'     => 'GET',
				'requestUri' => '/v1/email/tags',
			],
			'input'  => [ 'shape' => 'ListTagsForResourceRequest', ],
			'output' => [ 'shape' => 'ListTagsForResourceResponse', ],
			'errors' => [
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'NotFoundException', ],
				[ 'shape' => 'TooManyRequestsException', ],
			],
		],
		'PutAccountDedicatedIpWarmupAttributes'  => [
			'name'   => 'PutAccountDedicatedIpWarmupAttributes',
			'http'   => [
				'method'     => 'PUT',
				'requestUri' => '/v1/email/account/dedicated-ips/warmup',
			],
			'input'  => [ 'shape' => 'PutAccountDedicatedIpWarmupAttributesRequest', ],
			'output' => [ 'shape' => 'PutAccountDedicatedIpWarmupAttributesResponse', ],
			'errors' => [
				[ 'shape' => 'TooManyRequestsException', ],
				[ 'shape' => 'BadRequestException', ],
			],
		],
		'PutAccountSendingAttributes'            => [
			'name'   => 'PutAccountSendingAttributes',
			'http'   => [
				'method'     => 'PUT',
				'requestUri' => '/v1/email/account/sending',
			],
			'input'  => [ 'shape' => 'PutAccountSendingAttributesRequest', ],
			'output' => [ 'shape' => 'PutAccountSendingAttributesResponse', ],
			'errors' => [
				[ 'shape' => 'TooManyRequestsException', ],
				[ 'shape' => 'BadRequestException', ],
			],
		],
		'PutConfigurationSetDeliveryOptions'     => [
			'name'   => 'PutConfigurationSetDeliveryOptions',
			'http'   => [
				'method'     => 'PUT',
				'requestUri' => '/v1/email/configuration-sets/{ConfigurationSetName}/delivery-options',
			],
			'input'  => [ 'shape' => 'PutConfigurationSetDeliveryOptionsRequest', ],
			'output' => [ 'shape' => 'PutConfigurationSetDeliveryOptionsResponse', ],
			'errors' => [
				[ 'shape' => 'NotFoundException', ],
				[ 'shape' => 'TooManyRequestsException', ],
				[ 'shape' => 'BadRequestException', ],
			],
		],
		'PutConfigurationSetReputationOptions'   => [
			'name'   => 'PutConfigurationSetReputationOptions',
			'http'   => [
				'method'     => 'PUT',
				'requestUri' => '/v1/email/configuration-sets/{ConfigurationSetName}/reputation-options',
			],
			'input'  => [ 'shape' => 'PutConfigurationSetReputationOptionsRequest', ],
			'output' => [ 'shape' => 'PutConfigurationSetReputationOptionsResponse', ],
			'errors' => [
				[ 'shape' => 'NotFoundException', ],
				[ 'shape' => 'TooManyRequestsException', ],
				[ 'shape' => 'BadRequestException', ],
			],
		],
		'PutConfigurationSetSendingOptions'      => [
			'name'   => 'PutConfigurationSetSendingOptions',
			'http'   => [
				'method'     => 'PUT',
				'requestUri' => '/v1/email/configuration-sets/{ConfigurationSetName}/sending',
			],
			'input'  => [ 'shape' => 'PutConfigurationSetSendingOptionsRequest', ],
			'output' => [ 'shape' => 'PutConfigurationSetSendingOptionsResponse', ],
			'errors' => [
				[ 'shape' => 'NotFoundException', ],
				[ 'shape' => 'TooManyRequestsException', ],
				[ 'shape' => 'BadRequestException', ],
			],
		],
		'PutConfigurationSetTrackingOptions'     => [
			'name'   => 'PutConfigurationSetTrackingOptions',
			'http'   => [
				'method'     => 'PUT',
				'requestUri' => '/v1/email/configuration-sets/{ConfigurationSetName}/tracking-options',
			],
			'input'  => [ 'shape' => 'PutConfigurationSetTrackingOptionsRequest', ],
			'output' => [ 'shape' => 'PutConfigurationSetTrackingOptionsResponse', ],
			'errors' => [
				[ 'shape' => 'NotFoundException', ],
				[ 'shape' => 'TooManyRequestsException', ],
				[ 'shape' => 'BadRequestException', ],
			],
		],
		'PutDedicatedIpInPool'                   => [
			'name'   => 'PutDedicatedIpInPool',
			'http'   => [
				'method'     => 'PUT',
				'requestUri' => '/v1/email/dedicated-ips/{IP}/pool',
			],
			'input'  => [ 'shape' => 'PutDedicatedIpInPoolRequest', ],
			'output' => [ 'shape' => 'PutDedicatedIpInPoolResponse', ],
			'errors' => [
				[ 'shape' => 'NotFoundException', ],
				[ 'shape' => 'TooManyRequestsException', ],
				[ 'shape' => 'BadRequestException', ],
			],
		],
		'PutDedicatedIpWarmupAttributes'         => [
			'name'   => 'PutDedicatedIpWarmupAttributes',
			'http'   => [
				'method'     => 'PUT',
				'requestUri' => '/v1/email/dedicated-ips/{IP}/warmup',
			],
			'input'  => [ 'shape' => 'PutDedicatedIpWarmupAttributesRequest', ],
			'output' => [ 'shape' => 'PutDedicatedIpWarmupAttributesResponse', ],
			'errors' => [
				[ 'shape' => 'NotFoundException', ],
				[ 'shape' => 'TooManyRequestsException', ],
				[ 'shape' => 'BadRequestException', ],
			],
		],
		'PutDeliverabilityDashboardOption'       => [
			'name'   => 'PutDeliverabilityDashboardOption',
			'http'   => [
				'method'     => 'PUT',
				'requestUri' => '/v1/email/deliverability-dashboard',
			],
			'input'  => [ 'shape' => 'PutDeliverabilityDashboardOptionRequest', ],
			'output' => [ 'shape' => 'PutDeliverabilityDashboardOptionResponse', ],
			'errors' => [
				[ 'shape' => 'AlreadyExistsException', ],
				[ 'shape' => 'NotFoundException', ],
				[ 'shape' => 'TooManyRequestsException', ],
				[ 'shape' => 'LimitExceededException', ],
				[ 'shape' => 'BadRequestException', ],
			],
		],
		'PutEmailIdentityDkimAttributes'         => [
			'name'   => 'PutEmailIdentityDkimAttributes',
			'http'   => [
				'method'     => 'PUT',
				'requestUri' => '/v1/email/identities/{EmailIdentity}/dkim',
			],
			'input'  => [ 'shape' => 'PutEmailIdentityDkimAttributesRequest', ],
			'output' => [ 'shape' => 'PutEmailIdentityDkimAttributesResponse', ],
			'errors' => [
				[ 'shape' => 'NotFoundException', ],
				[ 'shape' => 'TooManyRequestsException', ],
				[ 'shape' => 'BadRequestException', ],
			],
		],
		'PutEmailIdentityFeedbackAttributes'     => [
			'name'   => 'PutEmailIdentityFeedbackAttributes',
			'http'   => [
				'method'     => 'PUT',
				'requestUri' => '/v1/email/identities/{EmailIdentity}/feedback',
			],
			'input'  => [ 'shape' => 'PutEmailIdentityFeedbackAttributesRequest', ],
			'output' => [ 'shape' => 'PutEmailIdentityFeedbackAttributesResponse', ],
			'errors' => [
				[ 'shape' => 'NotFoundException', ],
				[ 'shape' => 'TooManyRequestsException', ],
				[ 'shape' => 'BadRequestException', ],
			],
		],
		'PutEmailIdentityMailFromAttributes'     => [
			'name'   => 'PutEmailIdentityMailFromAttributes',
			'http'   => [
				'method'     => 'PUT',
				'requestUri' => '/v1/email/identities/{EmailIdentity}/mail-from',
			],
			'input'  => [ 'shape' => 'PutEmailIdentityMailFromAttributesRequest', ],
			'output' => [ 'shape' => 'PutEmailIdentityMailFromAttributesResponse', ],
			'errors' => [
				[ 'shape' => 'NotFoundException', ],
				[ 'shape' => 'TooManyRequestsException', ],
				[ 'shape' => 'BadRequestException', ],
			],
		],
		'SendEmail'                              => [
			'name'   => 'SendEmail',
			'http'   => [
				'method'     => 'POST',
				'requestUri' => '/v1/email/outbound-emails',
			],
			'input'  => [ 'shape' => 'SendEmailRequest', ],
			'output' => [ 'shape' => 'SendEmailResponse', ],
			'errors' => [
				[ 'shape' => 'TooManyRequestsException', ],
				[ 'shape' => 'LimitExceededException', ],
				[ 'shape' => 'AccountSuspendedException', ],
				[ 'shape' => 'SendingPausedException', ],
				[ 'shape' => 'MessageRejected', ],
				[ 'shape' => 'MailFromDomainNotVerifiedException', ],
				[ 'shape' => 'NotFoundException', ],
				[ 'shape' => 'BadRequestException', ],
			],
		],
		'TagResource'                            => [
			'name'   => 'TagResource',
			'http'   => [
				'method'     => 'POST',
				'requestUri' => '/v1/email/tags',
			],
			'input'  => [ 'shape' => 'TagResourceRequest', ],
			'output' => [ 'shape' => 'TagResourceResponse', ],
			'errors' => [
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'ConcurrentModificationException', ],
				[ 'shape' => 'NotFoundException', ],
				[ 'shape' => 'TooManyRequestsException', ],
			],
		],
		'UntagResource'                          => [
			'name'   => 'UntagResource',
			'http'   => [
				'method'     => 'DELETE',
				'requestUri' => '/v1/email/tags',
			],
			'input'  => [ 'shape' => 'UntagResourceRequest', ],
			'output' => [ 'shape' => 'UntagResourceResponse', ],
			'errors' => [
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'ConcurrentModificationException', ],
				[ 'shape' => 'NotFoundException', ],
				[ 'shape' => 'TooManyRequestsException', ],
			],
		],
		'UpdateConfigurationSetEventDestination' => [
			'name'   => 'UpdateConfigurationSetEventDestination',
			'http'   => [
				'method'     => 'PUT',
				'requestUri' => '/v1/email/configuration-sets/{ConfigurationSetName}/event-destinations/{EventDestinationName}',
			],
			'input'  => [ 'shape' => 'UpdateConfigurationSetEventDestinationRequest', ],
			'output' => [ 'shape' => 'UpdateConfigurationSetEventDestinationResponse', ],
			'errors' => [
				[ 'shape' => 'NotFoundException', ],
				[ 'shape' => 'TooManyRequestsException', ],
				[ 'shape' => 'BadRequestException', ],
			],
		],
	],
	'shapes'     => [
		'AccountSuspendedException'                      => [
			'type'      => 'structure',
			'members'   => [],
			'error'     => [ 'httpStatusCode' => 400, ],
			'exception' => true,
		],
		'AlreadyExistsException'                         => [
			'type'      => 'structure',
			'members'   => [],
			'error'     => [ 'httpStatusCode' => 400, ],
			'exception' => true,
		],
		'AmazonResourceName'                             => [ 'type' => 'string', ],
		'BadRequestException'                            => [
			'type'      => 'structure',
			'members'   => [],
			'error'     => [ 'httpStatusCode' => 400, ],
			'exception' => true,
		],
		'BehaviorOnMxFailure'                            => [
			'type' => 'string',
			'enum' => [ 'USE_DEFAULT_VALUE', 'REJECT_MESSAGE', ],
		],
		'BlacklistEntries'                               => [
			'type'   => 'list',
			'member' => [ 'shape' => 'BlacklistEntry', ],
		],
		'BlacklistEntry'                                 => [
			'type'    => 'structure',
			'members' => [
				'RblName'     => [ 'shape' => 'RblName', ],
				'ListingTime' => [ 'shape' => 'Timestamp', ],
				'Description' => [ 'shape' => 'BlacklistingDescription', ],
			],
		],
		'BlacklistItemName'                              => [ 'type' => 'string', ],
		'BlacklistItemNames'                             => [
			'type'   => 'list',
			'member' => [ 'shape' => 'BlacklistItemName', ],
		],
		'BlacklistReport'                                => [
			'type'  => 'map',
			'key'   => [ 'shape' => 'BlacklistItemName', ],
			'value' => [ 'shape' => 'BlacklistEntries', ],
		],
		'BlacklistingDescription'                        => [ 'type' => 'string', ],
		'Body'                                           => [
			'type'    => 'structure',
			'members' => [
				'Text' => [ 'shape' => 'Content', ],
				'Html' => [ 'shape' => 'Content', ],
			],
		],
		'CampaignId'                                     => [ 'type' => 'string', ],
		'Charset'                                        => [ 'type' => 'string', ],
		'CloudWatchDestination'                          => [
			'type'     => 'structure',
			'required' => [ 'DimensionConfigurations', ],
			'members'  => [ 'DimensionConfigurations' => [ 'shape' => 'CloudWatchDimensionConfigurations', ], ],
		],
		'CloudWatchDimensionConfiguration'               => [
			'type'     => 'structure',
			'required' => [
				'DimensionName',
				'DimensionValueSource',
				'DefaultDimensionValue',
			],
			'members'  => [
				'DimensionName'         => [ 'shape' => 'DimensionName', ],
				'DimensionValueSource'  => [ 'shape' => 'DimensionValueSource', ],
				'DefaultDimensionValue' => [ 'shape' => 'DefaultDimensionValue', ],
			],
		],
		'CloudWatchDimensionConfigurations'              => [
			'type'   => 'list',
			'member' => [ 'shape' => 'CloudWatchDimensionConfiguration', ],
		],
		'ConcurrentModificationException'                => [
			'type'      => 'structure',
			'members'   => [],
			'error'     => [ 'httpStatusCode' => 500, ],
			'exception' => true,
		],
		'ConfigurationSetName'                           => [ 'type' => 'string', ],
		'ConfigurationSetNameList'                       => [
			'type'   => 'list',
			'member' => [ 'shape' => 'ConfigurationSetName', ],
		],
		'Content'                                        => [
			'type'     => 'structure',
			'required' => [ 'Data', ],
			'members'  => [
				'Data'    => [ 'shape' => 'MessageData', ],
				'Charset' => [ 'shape' => 'Charset', ],
			],
		],
		'CreateConfigurationSetEventDestinationRequest'  => [
			'type'     => 'structure',
			'required' => [
				'ConfigurationSetName',
				'EventDestinationName',
				'EventDestination',
			],
			'members'  => [
				'ConfigurationSetName' => [
					'shape'        => 'ConfigurationSetName',
					'location'     => 'uri',
					'locationName' => 'ConfigurationSetName',
				],
				'EventDestinationName' => [ 'shape' => 'EventDestinationName', ],
				'EventDestination'     => [ 'shape' => 'EventDestinationDefinition', ],
			],
		],
		'CreateConfigurationSetEventDestinationResponse' => [ 'type' => 'structure', 'members' => [], ],
		'CreateConfigurationSetRequest'                  => [
			'type'     => 'structure',
			'required' => [ 'ConfigurationSetName', ],
			'members'  => [
				'ConfigurationSetName' => [ 'shape' => 'ConfigurationSetName', ],
				'TrackingOptions'      => [ 'shape' => 'TrackingOptions', ],
				'DeliveryOptions'      => [ 'shape' => 'DeliveryOptions', ],
				'ReputationOptions'    => [ 'shape' => 'ReputationOptions', ],
				'SendingOptions'       => [ 'shape' => 'SendingOptions', ],
				'Tags'                 => [ 'shape' => 'TagList', ],
			],
		],
		'CreateConfigurationSetResponse'                 => [ 'type' => 'structure', 'members' => [], ],
		'CreateDedicatedIpPoolRequest'                   => [
			'type'     => 'structure',
			'required' => [ 'PoolName', ],
			'members'  => [
				'PoolName' => [ 'shape' => 'PoolName', ],
				'Tags'     => [ 'shape' => 'TagList', ],
			],
		],
		'CreateDedicatedIpPoolResponse'                  => [ 'type' => 'structure', 'members' => [], ],
		'CreateDeliverabilityTestReportRequest'          => [
			'type'     => 'structure',
			'required' => [ 'FromEmailAddress', 'Content', ],
			'members'  => [
				'ReportName'       => [ 'shape' => 'ReportName', ],
				'FromEmailAddress' => [ 'shape' => 'EmailAddress', ],
				'Content'          => [ 'shape' => 'EmailContent', ],
				'Tags'             => [ 'shape' => 'TagList', ],
			],
		],
		'CreateDeliverabilityTestReportResponse'         => [
			'type'     => 'structure',
			'required' => [ 'ReportId', 'DeliverabilityTestStatus', ],
			'members'  => [
				'ReportId'                 => [ 'shape' => 'ReportId', ],
				'DeliverabilityTestStatus' => [ 'shape' => 'DeliverabilityTestStatus', ],
			],
		],
		'CreateEmailIdentityRequest'                     => [
			'type'     => 'structure',
			'required' => [ 'EmailIdentity', ],
			'members'  => [
				'EmailIdentity' => [ 'shape' => 'Identity', ],
				'Tags'          => [ 'shape' => 'TagList', ],
			],
		],
		'CreateEmailIdentityResponse'                    => [
			'type'    => 'structure',
			'members' => [
				'IdentityType'             => [ 'shape' => 'IdentityType', ],
				'VerifiedForSendingStatus' => [ 'shape' => 'Enabled', ],
				'DkimAttributes'           => [ 'shape' => 'DkimAttributes', ],
			],
		],
		'CustomRedirectDomain'                           => [ 'type' => 'string', ],
		'DailyVolume'                                    => [
			'type'    => 'structure',
			'members' => [
				'StartDate'           => [ 'shape' => 'Timestamp', ],
				'VolumeStatistics'    => [ 'shape' => 'VolumeStatistics', ],
				'DomainIspPlacements' => [ 'shape' => 'DomainIspPlacements', ],
			],
		],
		'DailyVolumes'                                   => [
			'type'   => 'list',
			'member' => [ 'shape' => 'DailyVolume', ],
		],
		'DedicatedIp'                                    => [
			'type'     => 'structure',
			'required' => [
				'Ip',
				'WarmupStatus',
				'WarmupPercentage',
			],
			'members'  => [
				'Ip'               => [ 'shape' => 'Ip', ],
				'WarmupStatus'     => [ 'shape' => 'WarmupStatus', ],
				'WarmupPercentage' => [ 'shape' => 'Percentage100Wrapper', ],
				'PoolName'         => [ 'shape' => 'PoolName', ],
			],
		],
		'DedicatedIpList'                                => [
			'type'   => 'list',
			'member' => [ 'shape' => 'DedicatedIp', ],
		],
		'DefaultDimensionValue'                          => [ 'type' => 'string', ],
		'DeleteConfigurationSetEventDestinationRequest'  => [
			'type'     => 'structure',
			'required' => [
				'ConfigurationSetName',
				'EventDestinationName',
			],
			'members'  => [
				'ConfigurationSetName' => [
					'shape'        => 'ConfigurationSetName',
					'location'     => 'uri',
					'locationName' => 'ConfigurationSetName',
				],
				'EventDestinationName' => [
					'shape'        => 'EventDestinationName',
					'location'     => 'uri',
					'locationName' => 'EventDestinationName',
				],
			],
		],
		'DeleteConfigurationSetEventDestinationResponse' => [ 'type' => 'structure', 'members' => [], ],
		'DeleteConfigurationSetRequest'                  => [
			'type'     => 'structure',
			'required' => [ 'ConfigurationSetName', ],
			'members'  => [
				'ConfigurationSetName' => [
					'shape'        => 'ConfigurationSetName',
					'location'     => 'uri',
					'locationName' => 'ConfigurationSetName',
				],
			],
		],
		'DeleteConfigurationSetResponse'                 => [ 'type' => 'structure', 'members' => [], ],
		'DeleteDedicatedIpPoolRequest'                   => [
			'type'     => 'structure',
			'required' => [ 'PoolName', ],
			'members'  => [
				'PoolName' => [
					'shape'        => 'PoolName',
					'location'     => 'uri',
					'locationName' => 'PoolName',
				],
			],
		],
		'DeleteDedicatedIpPoolResponse'                  => [ 'type' => 'structure', 'members' => [], ],
		'DeleteEmailIdentityRequest'                     => [
			'type'     => 'structure',
			'required' => [ 'EmailIdentity', ],
			'members'  => [
				'EmailIdentity' => [
					'shape'        => 'Identity',
					'location'     => 'uri',
					'locationName' => 'EmailIdentity',
				],
			],
		],
		'DeleteEmailIdentityResponse'                    => [ 'type' => 'structure', 'members' => [], ],
		'DeliverabilityDashboardAccountStatus'           => [
			'type' => 'string',
			'enum' => [ 'ACTIVE', 'PENDING_EXPIRATION', 'DISABLED', ],
		],
		'DeliverabilityTestReport'                       => [
			'type'    => 'structure',
			'members' => [
				'ReportId'                 => [ 'shape' => 'ReportId', ],
				'ReportName'               => [ 'shape' => 'ReportName', ],
				'Subject'                  => [ 'shape' => 'DeliverabilityTestSubject', ],
				'FromEmailAddress'         => [ 'shape' => 'EmailAddress', ],
				'CreateDate'               => [ 'shape' => 'Timestamp', ],
				'DeliverabilityTestStatus' => [ 'shape' => 'DeliverabilityTestStatus', ],
			],
		],
		'DeliverabilityTestReports'                      => [
			'type'   => 'list',
			'member' => [ 'shape' => 'DeliverabilityTestReport', ],
		],
		'DeliverabilityTestStatus'                       => [
			'type' => 'string',
			'enum' => [ 'IN_PROGRESS', 'COMPLETED', ],
		],
		'DeliverabilityTestSubject'                      => [ 'type' => 'string', ],
		'DeliveryOptions'                                => [
			'type'    => 'structure',
			'members' => [
				'TlsPolicy'       => [ 'shape' => 'TlsPolicy', ],
				'SendingPoolName' => [ 'shape' => 'PoolName', ],
			],
		],
		'Destination'                                    => [
			'type'    => 'structure',
			'members' => [
				'ToAddresses'  => [ 'shape' => 'EmailAddressList', ],
				'CcAddresses'  => [ 'shape' => 'EmailAddressList', ],
				'BccAddresses' => [ 'shape' => 'EmailAddressList', ],
			],
		],
		'DimensionName'                                  => [ 'type' => 'string', ],
		'DimensionValueSource'                           => [
			'type' => 'string',
			'enum' => [ 'MESSAGE_TAG', 'EMAIL_HEADER', 'LINK_TAG', ],
		],
		'DkimAttributes'                                 => [
			'type'    => 'structure',
			'members' => [
				'SigningEnabled' => [ 'shape' => 'Enabled', ],
				'Status'         => [ 'shape' => 'DkimStatus', ],
				'Tokens'         => [ 'shape' => 'DnsTokenList', ],
			],
		],
		'DkimStatus'                                     => [
			'type' => 'string',
			'enum' => [
				'PENDING',
				'SUCCESS',
				'FAILED',
				'TEMPORARY_FAILURE',
				'NOT_STARTED',
			],
		],
		'DnsToken'                                       => [ 'type' => 'string', ],
		'DnsTokenList'                                   => [
			'type'   => 'list',
			'member' => [ 'shape' => 'DnsToken', ],
		],
		'Domain'                                         => [ 'type' => 'string', ],
		'DomainDeliverabilityCampaign'                   => [
			'type'    => 'structure',
			'members' => [
				'CampaignId'        => [ 'shape' => 'CampaignId', ],
				'ImageUrl'          => [ 'shape' => 'ImageUrl', ],
				'Subject'           => [ 'shape' => 'Subject', ],
				'FromAddress'       => [ 'shape' => 'Identity', ],
				'SendingIps'        => [ 'shape' => 'IpList', ],
				'FirstSeenDateTime' => [ 'shape' => 'Timestamp', ],
				'LastSeenDateTime'  => [ 'shape' => 'Timestamp', ],
				'InboxCount'        => [ 'shape' => 'Volume', ],
				'SpamCount'         => [ 'shape' => 'Volume', ],
				'ReadRate'          => [ 'shape' => 'Percentage', ],
				'DeleteRate'        => [ 'shape' => 'Percentage', ],
				'ReadDeleteRate'    => [ 'shape' => 'Percentage', ],
				'ProjectedVolume'   => [ 'shape' => 'Volume', ],
				'Esps'              => [ 'shape' => 'Esps', ],
			],
		],
		'DomainDeliverabilityCampaignList'               => [
			'type'   => 'list',
			'member' => [ 'shape' => 'DomainDeliverabilityCampaign', ],
		],
		'DomainDeliverabilityTrackingOption'             => [
			'type'    => 'structure',
			'members' => [
				'Domain'                       => [ 'shape' => 'Domain', ],
				'SubscriptionStartDate'        => [ 'shape' => 'Timestamp', ],
				'InboxPlacementTrackingOption' => [ 'shape' => 'InboxPlacementTrackingOption', ],
			],
		],
		'DomainDeliverabilityTrackingOptions'            => [
			'type'   => 'list',
			'member' => [ 'shape' => 'DomainDeliverabilityTrackingOption', ],
		],
		'DomainIspPlacement'                             => [
			'type'    => 'structure',
			'members' => [
				'IspName'         => [ 'shape' => 'IspName', ],
				'InboxRawCount'   => [ 'shape' => 'Volume', ],
				'SpamRawCount'    => [ 'shape' => 'Volume', ],
				'InboxPercentage' => [ 'shape' => 'Percentage', ],
				'SpamPercentage'  => [ 'shape' => 'Percentage', ],
			],
		],
		'DomainIspPlacements'                            => [
			'type'   => 'list',
			'member' => [ 'shape' => 'DomainIspPlacement', ],
		],
		'EmailAddress'                                   => [ 'type' => 'string', ],
		'EmailAddressList'                               => [
			'type'   => 'list',
			'member' => [ 'shape' => 'EmailAddress', ],
		],
		'EmailContent'                                   => [
			'type'    => 'structure',
			'members' => [
				'Simple' => [ 'shape' => 'Message', ],
				'Raw'    => [ 'shape' => 'RawMessage', ],
			],
		],
		'Enabled'                                        => [ 'type' => 'boolean', ],
		'Esp'                                            => [ 'type' => 'string', ],
		'Esps'                                           => [ 'type' => 'list', 'member' => [ 'shape' => 'Esp', ], ],
		'EventDestination'                               => [
			'type'     => 'structure',
			'required' => [ 'Name', 'MatchingEventTypes', ],
			'members'  => [
				'Name'                       => [ 'shape' => 'EventDestinationName', ],
				'Enabled'                    => [ 'shape' => 'Enabled', ],
				'MatchingEventTypes'         => [ 'shape' => 'EventTypes', ],
				'KinesisFirehoseDestination' => [ 'shape' => 'KinesisFirehoseDestination', ],
				'CloudWatchDestination'      => [ 'shape' => 'CloudWatchDestination', ],
				'SnsDestination'             => [ 'shape' => 'SnsDestination', ],
				'PinpointDestination'        => [ 'shape' => 'PinpointDestination', ],
			],
		],
		'EventDestinationDefinition'                     => [
			'type'    => 'structure',
			'members' => [
				'Enabled'                    => [ 'shape' => 'Enabled', ],
				'MatchingEventTypes'         => [ 'shape' => 'EventTypes', ],
				'KinesisFirehoseDestination' => [ 'shape' => 'KinesisFirehoseDestination', ],
				'CloudWatchDestination'      => [ 'shape' => 'CloudWatchDestination', ],
				'SnsDestination'             => [ 'shape' => 'SnsDestination', ],
				'PinpointDestination'        => [ 'shape' => 'PinpointDestination', ],
			],
		],
		'EventDestinationName'                           => [ 'type' => 'string', ],
		'EventDestinations'                              => [
			'type'   => 'list',
			'member' => [ 'shape' => 'EventDestination', ],
		],
		'EventType'                                      => [
			'type' => 'string',
			'enum' => [
				'SEND',
				'REJECT',
				'BOUNCE',
				'COMPLAINT',
				'DELIVERY',
				'OPEN',
				'CLICK',
				'RENDERING_FAILURE',
			],
		],
		'EventTypes'                                     => [
			'type'   => 'list',
			'member' => [ 'shape' => 'EventType', ],
		],
		'GeneralEnforcementStatus'                       => [ 'type' => 'string', ],
		'GetAccountRequest'                              => [ 'type' => 'structure', 'members' => [], ],
		'GetAccountResponse'                             => [
			'type'    => 'structure',
			'members' => [
				'SendQuota'                    => [ 'shape' => 'SendQuota', ],
				'SendingEnabled'               => [ 'shape' => 'Enabled', ],
				'DedicatedIpAutoWarmupEnabled' => [ 'shape' => 'Enabled', ],
				'EnforcementStatus'            => [ 'shape' => 'GeneralEnforcementStatus', ],
				'ProductionAccessEnabled'      => [ 'shape' => 'Enabled', ],
			],
		],
		'GetBlacklistReportsRequest'                     => [
			'type'     => 'structure',
			'required' => [ 'BlacklistItemNames', ],
			'members'  => [
				'BlacklistItemNames' => [
					'shape'        => 'BlacklistItemNames',
					'location'     => 'querystring',
					'locationName' => 'BlacklistItemNames',
				],
			],
		],
		'GetBlacklistReportsResponse'                    => [
			'type'     => 'structure',
			'required' => [ 'BlacklistReport', ],
			'members'  => [ 'BlacklistReport' => [ 'shape' => 'BlacklistReport', ], ],
		],
		'GetConfigurationSetEventDestinationsRequest'    => [
			'type'     => 'structure',
			'required' => [ 'ConfigurationSetName', ],
			'members'  => [
				'ConfigurationSetName' => [
					'shape'        => 'ConfigurationSetName',
					'location'     => 'uri',
					'locationName' => 'ConfigurationSetName',
				],
			],
		],
		'GetConfigurationSetEventDestinationsResponse'   => [
			'type'    => 'structure',
			'members' => [ 'EventDestinations' => [ 'shape' => 'EventDestinations', ], ],
		],
		'GetConfigurationSetRequest'                     => [
			'type'     => 'structure',
			'required' => [ 'ConfigurationSetName', ],
			'members'  => [
				'ConfigurationSetName' => [
					'shape'        => 'ConfigurationSetName',
					'location'     => 'uri',
					'locationName' => 'ConfigurationSetName',
				],
			],
		],
		'GetConfigurationSetResponse'                    => [
			'type'    => 'structure',
			'members' => [
				'ConfigurationSetName' => [ 'shape' => 'ConfigurationSetName', ],
				'TrackingOptions'      => [ 'shape' => 'TrackingOptions', ],
				'DeliveryOptions'      => [ 'shape' => 'DeliveryOptions', ],
				'ReputationOptions'    => [ 'shape' => 'ReputationOptions', ],
				'SendingOptions'       => [ 'shape' => 'SendingOptions', ],
				'Tags'                 => [ 'shape' => 'TagList', ],
			],
		],
		'GetDedicatedIpRequest'                          => [
			'type'     => 'structure',
			'required' => [ 'Ip', ],
			'members'  => [
				'Ip' => [
					'shape'        => 'Ip',
					'location'     => 'uri',
					'locationName' => 'IP',
				],
			],
		],
		'GetDedicatedIpResponse'                         => [
			'type'    => 'structure',
			'members' => [ 'DedicatedIp' => [ 'shape' => 'DedicatedIp', ], ],
		],
		'GetDedicatedIpsRequest'                         => [
			'type'    => 'structure',
			'members' => [
				'PoolName'  => [
					'shape'        => 'PoolName',
					'location'     => 'querystring',
					'locationName' => 'PoolName',
				],
				'NextToken' => [
					'shape'        => 'NextToken',
					'location'     => 'querystring',
					'locationName' => 'NextToken',
				],
				'PageSize'  => [
					'shape'        => 'MaxItems',
					'location'     => 'querystring',
					'locationName' => 'PageSize',
				],
			],
		],
		'GetDedicatedIpsResponse'                        => [
			'type'    => 'structure',
			'members' => [
				'DedicatedIps' => [ 'shape' => 'DedicatedIpList', ],
				'NextToken'    => [ 'shape' => 'NextToken', ],
			],
		],
		'GetDeliverabilityDashboardOptionsRequest'       => [ 'type' => 'structure', 'members' => [], ],
		'GetDeliverabilityDashboardOptionsResponse'      => [
			'type'     => 'structure',
			'required' => [ 'DashboardEnabled', ],
			'members'  => [
				'DashboardEnabled'                   => [ 'shape' => 'Enabled', ],
				'SubscriptionExpiryDate'             => [ 'shape' => 'Timestamp', ],
				'AccountStatus'                      => [ 'shape' => 'DeliverabilityDashboardAccountStatus', ],
				'ActiveSubscribedDomains'            => [ 'shape' => 'DomainDeliverabilityTrackingOptions', ],
				'PendingExpirationSubscribedDomains' => [ 'shape' => 'DomainDeliverabilityTrackingOptions', ],
			],
		],
		'GetDeliverabilityTestReportRequest'             => [
			'type'     => 'structure',
			'required' => [ 'ReportId', ],
			'members'  => [
				'ReportId' => [
					'shape'        => 'ReportId',
					'location'     => 'uri',
					'locationName' => 'ReportId',
				],
			],
		],
		'GetDeliverabilityTestReportResponse'            => [
			'type'     => 'structure',
			'required' => [
				'DeliverabilityTestReport',
				'OverallPlacement',
				'IspPlacements',
			],
			'members'  => [
				'DeliverabilityTestReport' => [ 'shape' => 'DeliverabilityTestReport', ],
				'OverallPlacement'         => [ 'shape' => 'PlacementStatistics', ],
				'IspPlacements'            => [ 'shape' => 'IspPlacements', ],
				'Message'                  => [ 'shape' => 'MessageContent', ],
				'Tags'                     => [ 'shape' => 'TagList', ],
			],
		],
		'GetDomainDeliverabilityCampaignRequest'         => [
			'type'     => 'structure',
			'required' => [ 'CampaignId', ],
			'members'  => [
				'CampaignId' => [
					'shape'        => 'CampaignId',
					'location'     => 'uri',
					'locationName' => 'CampaignId',
				],
			],
		],
		'GetDomainDeliverabilityCampaignResponse'        => [
			'type'     => 'structure',
			'required' => [ 'DomainDeliverabilityCampaign', ],
			'members'  => [ 'DomainDeliverabilityCampaign' => [ 'shape' => 'DomainDeliverabilityCampaign', ], ],
		],
		'GetDomainStatisticsReportRequest'               => [
			'type'     => 'structure',
			'required' => [ 'Domain', 'StartDate', 'EndDate', ],
			'members'  => [
				'Domain'    => [
					'shape'        => 'Identity',
					'location'     => 'uri',
					'locationName' => 'Domain',
				],
				'StartDate' => [
					'shape'        => 'Timestamp',
					'location'     => 'querystring',
					'locationName' => 'StartDate',
				],
				'EndDate'   => [
					'shape'        => 'Timestamp',
					'location'     => 'querystring',
					'locationName' => 'EndDate',
				],
			],
		],
		'GetDomainStatisticsReportResponse'              => [
			'type'     => 'structure',
			'required' => [ 'OverallVolume', 'DailyVolumes', ],
			'members'  => [
				'OverallVolume' => [ 'shape' => 'OverallVolume', ],
				'DailyVolumes'  => [ 'shape' => 'DailyVolumes', ],
			],
		],
		'GetEmailIdentityRequest'                        => [
			'type'     => 'structure',
			'required' => [ 'EmailIdentity', ],
			'members'  => [
				'EmailIdentity' => [
					'shape'        => 'Identity',
					'location'     => 'uri',
					'locationName' => 'EmailIdentity',
				],
			],
		],
		'GetEmailIdentityResponse'                       => [
			'type'    => 'structure',
			'members' => [
				'IdentityType'             => [ 'shape' => 'IdentityType', ],
				'FeedbackForwardingStatus' => [ 'shape' => 'Enabled', ],
				'VerifiedForSendingStatus' => [ 'shape' => 'Enabled', ],
				'DkimAttributes'           => [ 'shape' => 'DkimAttributes', ],
				'MailFromAttributes'       => [ 'shape' => 'MailFromAttributes', ],
				'Tags'                     => [ 'shape' => 'TagList', ],
			],
		],
		'Identity'                                       => [ 'type' => 'string', ],
		'IdentityInfo'                                   => [
			'type'    => 'structure',
			'members' => [
				'IdentityType'   => [ 'shape' => 'IdentityType', ],
				'IdentityName'   => [ 'shape' => 'Identity', ],
				'SendingEnabled' => [ 'shape' => 'Enabled', ],
			],
		],
		'IdentityInfoList'                               => [
			'type'   => 'list',
			'member' => [ 'shape' => 'IdentityInfo', ],
		],
		'IdentityType'                                   => [
			'type' => 'string',
			'enum' => [
				'EMAIL_ADDRESS',
				'DOMAIN',
				'MANAGED_DOMAIN',
			],
		],
		'ImageUrl'                                       => [ 'type' => 'string', ],
		'InboxPlacementTrackingOption'                   => [
			'type'    => 'structure',
			'members' => [
				'Global'      => [ 'shape' => 'Enabled', ],
				'TrackedIsps' => [ 'shape' => 'IspNameList', ],
			],
		],
		'Ip'                                             => [ 'type' => 'string', ],
		'IpList'                                         => [ 'type' => 'list', 'member' => [ 'shape' => 'Ip', ], ],
		'IspName'                                        => [ 'type' => 'string', ],
		'IspNameList'                                    => [
			'type'   => 'list',
			'member' => [ 'shape' => 'IspName', ],
		],
		'IspPlacement'                                   => [
			'type'    => 'structure',
			'members' => [
				'IspName'             => [ 'shape' => 'IspName', ],
				'PlacementStatistics' => [ 'shape' => 'PlacementStatistics', ],
			],
		],
		'IspPlacements'                                  => [
			'type'   => 'list',
			'member' => [ 'shape' => 'IspPlacement', ],
		],
		'KinesisFirehoseDestination'                     => [
			'type'     => 'structure',
			'required' => [ 'IamRoleArn', 'DeliveryStreamArn', ],
			'members'  => [
				'IamRoleArn'        => [ 'shape' => 'AmazonResourceName', ],
				'DeliveryStreamArn' => [ 'shape' => 'AmazonResourceName', ],
			],
		],
		'LastFreshStart'                                 => [ 'type' => 'timestamp', ],
		'LimitExceededException'                         => [
			'type'      => 'structure',
			'members'   => [],
			'error'     => [ 'httpStatusCode' => 400, ],
			'exception' => true,
		],
		'ListConfigurationSetsRequest'                   => [
			'type'    => 'structure',
			'members' => [
				'NextToken' => [
					'shape'        => 'NextToken',
					'location'     => 'querystring',
					'locationName' => 'NextToken',
				],
				'PageSize'  => [
					'shape'        => 'MaxItems',
					'location'     => 'querystring',
					'locationName' => 'PageSize',
				],
			],
		],
		'ListConfigurationSetsResponse'                  => [
			'type'    => 'structure',
			'members' => [
				'ConfigurationSets' => [ 'shape' => 'ConfigurationSetNameList', ],
				'NextToken'         => [ 'shape' => 'NextToken', ],
			],
		],
		'ListDedicatedIpPoolsRequest'                    => [
			'type'    => 'structure',
			'members' => [
				'NextToken' => [
					'shape'        => 'NextToken',
					'location'     => 'querystring',
					'locationName' => 'NextToken',
				],
				'PageSize'  => [
					'shape'        => 'MaxItems',
					'location'     => 'querystring',
					'locationName' => 'PageSize',
				],
			],
		],
		'ListDedicatedIpPoolsResponse'                   => [
			'type'    => 'structure',
			'members' => [
				'DedicatedIpPools' => [ 'shape' => 'ListOfDedicatedIpPools', ],
				'NextToken'        => [ 'shape' => 'NextToken', ],
			],
		],
		'ListDeliverabilityTestReportsRequest'           => [
			'type'    => 'structure',
			'members' => [
				'NextToken' => [
					'shape'        => 'NextToken',
					'location'     => 'querystring',
					'locationName' => 'NextToken',
				],
				'PageSize'  => [
					'shape'        => 'MaxItems',
					'location'     => 'querystring',
					'locationName' => 'PageSize',
				],
			],
		],
		'ListDeliverabilityTestReportsResponse'          => [
			'type'     => 'structure',
			'required' => [ 'DeliverabilityTestReports', ],
			'members'  => [
				'DeliverabilityTestReports' => [ 'shape' => 'DeliverabilityTestReports', ],
				'NextToken'                 => [ 'shape' => 'NextToken', ],
			],
		],
		'ListDomainDeliverabilityCampaignsRequest'       => [
			'type'     => 'structure',
			'required' => [
				'StartDate',
				'EndDate',
				'SubscribedDomain',
			],
			'members'  => [
				'StartDate'        => [
					'shape'        => 'Timestamp',
					'location'     => 'querystring',
					'locationName' => 'StartDate',
				],
				'EndDate'          => [
					'shape'        => 'Timestamp',
					'location'     => 'querystring',
					'locationName' => 'EndDate',
				],
				'SubscribedDomain' => [
					'shape'        => 'Domain',
					'location'     => 'uri',
					'locationName' => 'SubscribedDomain',
				],
				'NextToken'        => [
					'shape'        => 'NextToken',
					'location'     => 'querystring',
					'locationName' => 'NextToken',
				],
				'PageSize'         => [
					'shape'        => 'MaxItems',
					'location'     => 'querystring',
					'locationName' => 'PageSize',
				],
			],
		],
		'ListDomainDeliverabilityCampaignsResponse'      => [
			'type'     => 'structure',
			'required' => [ 'DomainDeliverabilityCampaigns', ],
			'members'  => [
				'DomainDeliverabilityCampaigns' => [ 'shape' => 'DomainDeliverabilityCampaignList', ],
				'NextToken'                     => [ 'shape' => 'NextToken', ],
			],
		],
		'ListEmailIdentitiesRequest'                     => [
			'type'    => 'structure',
			'members' => [
				'NextToken' => [
					'shape'        => 'NextToken',
					'location'     => 'querystring',
					'locationName' => 'NextToken',
				],
				'PageSize'  => [
					'shape'        => 'MaxItems',
					'location'     => 'querystring',
					'locationName' => 'PageSize',
				],
			],
		],
		'ListEmailIdentitiesResponse'                    => [
			'type'    => 'structure',
			'members' => [
				'EmailIdentities' => [ 'shape' => 'IdentityInfoList', ],
				'NextToken'       => [ 'shape' => 'NextToken', ],
			],
		],
		'ListOfDedicatedIpPools'                         => [
			'type'   => 'list',
			'member' => [ 'shape' => 'PoolName', ],
		],
		'ListTagsForResourceRequest'                     => [
			'type'     => 'structure',
			'required' => [ 'ResourceArn', ],
			'members'  => [
				'ResourceArn' => [
					'shape'        => 'AmazonResourceName',
					'location'     => 'querystring',
					'locationName' => 'ResourceArn',
				],
			],
		],
		'ListTagsForResourceResponse'                    => [
			'type'     => 'structure',
			'required' => [ 'Tags', ],
			'members'  => [ 'Tags' => [ 'shape' => 'TagList', ], ],
		],
		'MailFromAttributes'                             => [
			'type'     => 'structure',
			'required' => [
				'MailFromDomain',
				'MailFromDomainStatus',
				'BehaviorOnMxFailure',
			],
			'members'  => [
				'MailFromDomain'       => [ 'shape' => 'MailFromDomainName', ],
				'MailFromDomainStatus' => [ 'shape' => 'MailFromDomainStatus', ],
				'BehaviorOnMxFailure'  => [ 'shape' => 'BehaviorOnMxFailure', ],
			],
		],
		'MailFromDomainName'                             => [ 'type' => 'string', ],
		'MailFromDomainNotVerifiedException'             => [
			'type'      => 'structure',
			'members'   => [],
			'error'     => [ 'httpStatusCode' => 400, ],
			'exception' => true,
		],
		'MailFromDomainStatus'                           => [
			'type' => 'string',
			'enum' => [
				'PENDING',
				'SUCCESS',
				'FAILED',
				'TEMPORARY_FAILURE',
			],
		],
		'Max24HourSend'                                  => [ 'type' => 'double', ],
		'MaxItems'                                       => [ 'type' => 'integer', ],
		'MaxSendRate'                                    => [ 'type' => 'double', ],
		'Message'                                        => [
			'type'     => 'structure',
			'required' => [ 'Subject', 'Body', ],
			'members'  => [
				'Subject' => [ 'shape' => 'Content', ],
				'Body'    => [ 'shape' => 'Body', ],
			],
		],
		'MessageContent'                                 => [ 'type' => 'string', ],
		'MessageData'                                    => [ 'type' => 'string', ],
		'MessageRejected'                                => [
			'type'      => 'structure',
			'members'   => [],
			'error'     => [ 'httpStatusCode' => 400, ],
			'exception' => true,
		],
		'MessageTag'                                     => [
			'type'     => 'structure',
			'required' => [ 'Name', 'Value', ],
			'members'  => [
				'Name'  => [ 'shape' => 'MessageTagName', ],
				'Value' => [ 'shape' => 'MessageTagValue', ],
			],
		],
		'MessageTagList'                                 => [
			'type'   => 'list',
			'member' => [ 'shape' => 'MessageTag', ],
		],
		'MessageTagName'                                 => [ 'type' => 'string', ],
		'MessageTagValue'                                => [ 'type' => 'string', ],
		'NextToken'                                      => [ 'type' => 'string', ],
		'NotFoundException'                              => [
			'type'      => 'structure',
			'members'   => [],
			'error'     => [ 'httpStatusCode' => 404, ],
			'exception' => true,
		],
		'OutboundMessageId'                              => [ 'type' => 'string', ],
		'OverallVolume'                                  => [
			'type'    => 'structure',
			'members' => [
				'VolumeStatistics'    => [ 'shape' => 'VolumeStatistics', ],
				'ReadRatePercent'     => [ 'shape' => 'Percentage', ],
				'DomainIspPlacements' => [ 'shape' => 'DomainIspPlacements', ],
			],
		],
		'Percentage'                                     => [ 'type' => 'double', ],
		'Percentage100Wrapper'                           => [ 'type' => 'integer', ],
		'PinpointDestination'                            => [
			'type'    => 'structure',
			'members' => [ 'ApplicationArn' => [ 'shape' => 'AmazonResourceName', ], ],
		],
		'PlacementStatistics'                            => [
			'type'    => 'structure',
			'members' => [
				'InboxPercentage'   => [ 'shape' => 'Percentage', ],
				'SpamPercentage'    => [ 'shape' => 'Percentage', ],
				'MissingPercentage' => [ 'shape' => 'Percentage', ],
				'SpfPercentage'     => [ 'shape' => 'Percentage', ],
				'DkimPercentage'    => [ 'shape' => 'Percentage', ],
			],
		],
		'PoolName'                                       => [ 'type' => 'string', ],
		'PutAccountDedicatedIpWarmupAttributesRequest'   => [
			'type'    => 'structure',
			'members' => [ 'AutoWarmupEnabled' => [ 'shape' => 'Enabled', ], ],
		],
		'PutAccountDedicatedIpWarmupAttributesResponse'  => [ 'type' => 'structure', 'members' => [], ],
		'PutAccountSendingAttributesRequest'             => [
			'type'    => 'structure',
			'members' => [ 'SendingEnabled' => [ 'shape' => 'Enabled', ], ],
		],
		'PutAccountSendingAttributesResponse'            => [ 'type' => 'structure', 'members' => [], ],
		'PutConfigurationSetDeliveryOptionsRequest'      => [
			'type'     => 'structure',
			'required' => [ 'ConfigurationSetName', ],
			'members'  => [
				'ConfigurationSetName' => [
					'shape'        => 'ConfigurationSetName',
					'location'     => 'uri',
					'locationName' => 'ConfigurationSetName',
				],
				'TlsPolicy'            => [ 'shape' => 'TlsPolicy', ],
				'SendingPoolName'      => [ 'shape' => 'SendingPoolName', ],
			],
		],
		'PutConfigurationSetDeliveryOptionsResponse'     => [ 'type' => 'structure', 'members' => [], ],
		'PutConfigurationSetReputationOptionsRequest'    => [
			'type'     => 'structure',
			'required' => [ 'ConfigurationSetName', ],
			'members'  => [
				'ConfigurationSetName'     => [
					'shape'        => 'ConfigurationSetName',
					'location'     => 'uri',
					'locationName' => 'ConfigurationSetName',
				],
				'ReputationMetricsEnabled' => [ 'shape' => 'Enabled', ],
			],
		],
		'PutConfigurationSetReputationOptionsResponse'   => [ 'type' => 'structure', 'members' => [], ],
		'PutConfigurationSetSendingOptionsRequest'       => [
			'type'     => 'structure',
			'required' => [ 'ConfigurationSetName', ],
			'members'  => [
				'ConfigurationSetName' => [
					'shape'        => 'ConfigurationSetName',
					'location'     => 'uri',
					'locationName' => 'ConfigurationSetName',
				],
				'SendingEnabled'       => [ 'shape' => 'Enabled', ],
			],
		],
		'PutConfigurationSetSendingOptionsResponse'      => [ 'type' => 'structure', 'members' => [], ],
		'PutConfigurationSetTrackingOptionsRequest'      => [
			'type'     => 'structure',
			'required' => [ 'ConfigurationSetName', ],
			'members'  => [
				'ConfigurationSetName' => [
					'shape'        => 'ConfigurationSetName',
					'location'     => 'uri',
					'locationName' => 'ConfigurationSetName',
				],
				'CustomRedirectDomain' => [ 'shape' => 'CustomRedirectDomain', ],
			],
		],
		'PutConfigurationSetTrackingOptionsResponse'     => [ 'type' => 'structure', 'members' => [], ],
		'PutDedicatedIpInPoolRequest'                    => [
			'type'     => 'structure',
			'required' => [ 'Ip', 'DestinationPoolName', ],
			'members'  => [
				'Ip'                  => [
					'shape'        => 'Ip',
					'location'     => 'uri',
					'locationName' => 'IP',
				],
				'DestinationPoolName' => [ 'shape' => 'PoolName', ],
			],
		],
		'PutDedicatedIpInPoolResponse'                   => [ 'type' => 'structure', 'members' => [], ],
		'PutDedicatedIpWarmupAttributesRequest'          => [
			'type'     => 'structure',
			'required' => [ 'Ip', 'WarmupPercentage', ],
			'members'  => [
				'Ip'               => [
					'shape'        => 'Ip',
					'location'     => 'uri',
					'locationName' => 'IP',
				],
				'WarmupPercentage' => [ 'shape' => 'Percentage100Wrapper', ],
			],
		],
		'PutDedicatedIpWarmupAttributesResponse'         => [ 'type' => 'structure', 'members' => [], ],
		'PutDeliverabilityDashboardOptionRequest'        => [
			'type'     => 'structure',
			'required' => [ 'DashboardEnabled', ],
			'members'  => [
				'DashboardEnabled'  => [ 'shape' => 'Enabled', ],
				'SubscribedDomains' => [ 'shape' => 'DomainDeliverabilityTrackingOptions', ],
			],
		],
		'PutDeliverabilityDashboardOptionResponse'       => [ 'type' => 'structure', 'members' => [], ],
		'PutEmailIdentityDkimAttributesRequest'          => [
			'type'     => 'structure',
			'required' => [ 'EmailIdentity', ],
			'members'  => [
				'EmailIdentity'  => [
					'shape'        => 'Identity',
					'location'     => 'uri',
					'locationName' => 'EmailIdentity',
				],
				'SigningEnabled' => [ 'shape' => 'Enabled', ],
			],
		],
		'PutEmailIdentityDkimAttributesResponse'         => [ 'type' => 'structure', 'members' => [], ],
		'PutEmailIdentityFeedbackAttributesRequest'      => [
			'type'     => 'structure',
			'required' => [ 'EmailIdentity', ],
			'members'  => [
				'EmailIdentity'          => [
					'shape'        => 'Identity',
					'location'     => 'uri',
					'locationName' => 'EmailIdentity',
				],
				'EmailForwardingEnabled' => [ 'shape' => 'Enabled', ],
			],
		],
		'PutEmailIdentityFeedbackAttributesResponse'     => [ 'type' => 'structure', 'members' => [], ],
		'PutEmailIdentityMailFromAttributesRequest'      => [
			'type'     => 'structure',
			'required' => [ 'EmailIdentity', ],
			'members'  => [
				'EmailIdentity'       => [
					'shape'        => 'Identity',
					'location'     => 'uri',
					'locationName' => 'EmailIdentity',
				],
				'MailFromDomain'      => [ 'shape' => 'MailFromDomainName', ],
				'BehaviorOnMxFailure' => [ 'shape' => 'BehaviorOnMxFailure', ],
			],
		],
		'PutEmailIdentityMailFromAttributesResponse'     => [ 'type' => 'structure', 'members' => [], ],
		'RawMessage'                                     => [
			'type'     => 'structure',
			'required' => [ 'Data', ],
			'members'  => [ 'Data' => [ 'shape' => 'RawMessageData', ], ],
		],
		'RawMessageData'                                 => [ 'type' => 'blob', ],
		'RblName'                                        => [ 'type' => 'string', ],
		'ReportId'                                       => [ 'type' => 'string', ],
		'ReportName'                                     => [ 'type' => 'string', ],
		'ReputationOptions'                              => [
			'type'    => 'structure',
			'members' => [
				'ReputationMetricsEnabled' => [ 'shape' => 'Enabled', ],
				'LastFreshStart'           => [ 'shape' => 'LastFreshStart', ],
			],
		],
		'SendEmailRequest'                               => [
			'type'     => 'structure',
			'required' => [ 'Destination', 'Content', ],
			'members'  => [
				'FromEmailAddress'               => [ 'shape' => 'EmailAddress', ],
				'Destination'                    => [ 'shape' => 'Destination', ],
				'ReplyToAddresses'               => [ 'shape' => 'EmailAddressList', ],
				'FeedbackForwardingEmailAddress' => [ 'shape' => 'EmailAddress', ],
				'Content'                        => [ 'shape' => 'EmailContent', ],
				'EmailTags'                      => [ 'shape' => 'MessageTagList', ],
				'ConfigurationSetName'           => [ 'shape' => 'ConfigurationSetName', ],
			],
		],
		'SendEmailResponse'                              => [
			'type'    => 'structure',
			'members' => [ 'MessageId' => [ 'shape' => 'OutboundMessageId', ], ],
		],
		'SendQuota'                                      => [
			'type'    => 'structure',
			'members' => [
				'Max24HourSend'   => [ 'shape' => 'Max24HourSend', ],
				'MaxSendRate'     => [ 'shape' => 'MaxSendRate', ],
				'SentLast24Hours' => [ 'shape' => 'SentLast24Hours', ],
			],
		],
		'SendingOptions'                                 => [
			'type'    => 'structure',
			'members' => [ 'SendingEnabled' => [ 'shape' => 'Enabled', ], ],
		],
		'SendingPausedException'                         => [
			'type'      => 'structure',
			'members'   => [],
			'error'     => [ 'httpStatusCode' => 400, ],
			'exception' => true,
		],
		'SendingPoolName'                                => [ 'type' => 'string', ],
		'SentLast24Hours'                                => [ 'type' => 'double', ],
		'SnsDestination'                                 => [
			'type'     => 'structure',
			'required' => [ 'TopicArn', ],
			'members'  => [ 'TopicArn' => [ 'shape' => 'AmazonResourceName', ], ],
		],
		'Subject'                                        => [ 'type' => 'string', ],
		'Tag'                                            => [
			'type'     => 'structure',
			'required' => [ 'Key', 'Value', ],
			'members'  => [
				'Key'   => [ 'shape' => 'TagKey', ],
				'Value' => [ 'shape' => 'TagValue', ],
			],
		],
		'TagKey'                                         => [ 'type' => 'string', ],
		'TagKeyList'                                     => [ 'type' => 'list', 'member' => [ 'shape' => 'TagKey', ], ],
		'TagList'                                        => [ 'type' => 'list', 'member' => [ 'shape' => 'Tag', ], ],
		'TagResourceRequest'                             => [
			'type'     => 'structure',
			'required' => [ 'ResourceArn', 'Tags', ],
			'members'  => [
				'ResourceArn' => [ 'shape' => 'AmazonResourceName', ],
				'Tags'        => [ 'shape' => 'TagList', ],
			],
		],
		'TagResourceResponse'                            => [ 'type' => 'structure', 'members' => [], ],
		'TagValue'                                       => [ 'type' => 'string', ],
		'Timestamp'                                      => [ 'type' => 'timestamp', ],
		'TlsPolicy'                                      => [
			'type' => 'string',
			'enum' => [ 'REQUIRE', 'OPTIONAL', ],
		],
		'TooManyRequestsException'                       => [
			'type'      => 'structure',
			'members'   => [],
			'error'     => [ 'httpStatusCode' => 429, ],
			'exception' => true,
		],
		'TrackingOptions'                                => [
			'type'     => 'structure',
			'required' => [ 'CustomRedirectDomain', ],
			'members'  => [ 'CustomRedirectDomain' => [ 'shape' => 'CustomRedirectDomain', ], ],
		],
		'UntagResourceRequest'                           => [
			'type'     => 'structure',
			'required' => [ 'ResourceArn', 'TagKeys', ],
			'members'  => [
				'ResourceArn' => [
					'shape'        => 'AmazonResourceName',
					'location'     => 'querystring',
					'locationName' => 'ResourceArn',
				],
				'TagKeys'     => [
					'shape'        => 'TagKeyList',
					'location'     => 'querystring',
					'locationName' => 'TagKeys',
				],
			],
		],
		'UntagResourceResponse'                          => [ 'type' => 'structure', 'members' => [], ],
		'UpdateConfigurationSetEventDestinationRequest'  => [
			'type'     => 'structure',
			'required' => [
				'ConfigurationSetName',
				'EventDestinationName',
				'EventDestination',
			],
			'members'  => [
				'ConfigurationSetName' => [
					'shape'        => 'ConfigurationSetName',
					'location'     => 'uri',
					'locationName' => 'ConfigurationSetName',
				],
				'EventDestinationName' => [
					'shape'        => 'EventDestinationName',
					'location'     => 'uri',
					'locationName' => 'EventDestinationName',
				],
				'EventDestination'     => [ 'shape' => 'EventDestinationDefinition', ],
			],
		],
		'UpdateConfigurationSetEventDestinationResponse' => [ 'type' => 'structure', 'members' => [], ],
		'Volume'                                         => [ 'type' => 'long', ],
		'VolumeStatistics'                               => [
			'type'    => 'structure',
			'members' => [
				'InboxRawCount'  => [ 'shape' => 'Volume', ],
				'SpamRawCount'   => [ 'shape' => 'Volume', ],
				'ProjectedInbox' => [ 'shape' => 'Volume', ],
				'ProjectedSpam'  => [ 'shape' => 'Volume', ],
			],
		],
		'WarmupStatus'                                   => [
			'type' => 'string',
			'enum' => [ 'IN_PROGRESS', 'DONE', ],
		],
	],
];
