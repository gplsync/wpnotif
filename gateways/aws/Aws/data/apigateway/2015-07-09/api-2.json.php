<?php
// This file was auto-generated from sdk-root/src/data/apigateway/2015-07-09/api-2.json
return [
	'version'    => '2.0',
	'metadata'   => [
		'apiVersion'       => '2015-07-09',
		'endpointPrefix'   => 'apigateway',
		'protocol'         => 'rest-json',
		'serviceFullName'  => 'Amazon API Gateway',
		'serviceId'        => 'API Gateway',
		'signatureVersion' => 'v4',
		'uid'              => 'apigateway-2015-07-09',
	],
	'operations' => [
		'CreateApiKey'               => [
			'name'   => 'CreateApiKey',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/apikeys', 'responseCode' => 201, ],
			'input'  => [ 'shape' => 'CreateApiKeyRequest', ],
			'output' => [ 'shape' => 'ApiKey', ],
			'errors' => [
				[ 'shape' => 'UnauthorizedException', ],
				[ 'shape' => 'NotFoundException', ],
				[ 'shape' => 'TooManyRequestsException', ],
				[ 'shape' => 'LimitExceededException', ],
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'ConflictException', ],
			],
		],
		'CreateAuthorizer'           => [
			'name'   => 'CreateAuthorizer',
			'http'   => [
				'method'       => 'POST',
				'requestUri'   => '/restapis/{restapi_id}/authorizers',
				'responseCode' => 201,
			],
			'input'  => [ 'shape' => 'CreateAuthorizerRequest', ],
			'output' => [ 'shape' => 'Authorizer', ],
			'errors' => [
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'UnauthorizedException', ],
				[ 'shape' => 'NotFoundException', ],
				[ 'shape' => 'LimitExceededException', ],
				[ 'shape' => 'TooManyRequestsException', ],
			],
		],
		'CreateBasePathMapping'      => [
			'name'   => 'CreateBasePathMapping',
			'http'   => [
				'method'       => 'POST',
				'requestUri'   => '/domainnames/{domain_name}/basepathmappings',
				'responseCode' => 201,
			],
			'input'  => [ 'shape' => 'CreateBasePathMappingRequest', ],
			'output' => [ 'shape' => 'BasePathMapping', ],
			'errors' => [
				[ 'shape' => 'UnauthorizedException', ],
				[ 'shape' => 'ConflictException', ],
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'NotFoundException', ],
				[ 'shape' => 'TooManyRequestsException', ],
			],
		],
		'CreateDeployment'           => [
			'name'   => 'CreateDeployment',
			'http'   => [
				'method'       => 'POST',
				'requestUri'   => '/restapis/{restapi_id}/deployments',
				'responseCode' => 201,
			],
			'input'  => [ 'shape' => 'CreateDeploymentRequest', ],
			'output' => [ 'shape' => 'Deployment', ],
			'errors' => [
				[ 'shape' => 'UnauthorizedException', ],
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'NotFoundException', ],
				[ 'shape' => 'ConflictException', ],
				[ 'shape' => 'LimitExceededException', ],
				[ 'shape' => 'TooManyRequestsException', ],
				[ 'shape' => 'ServiceUnavailableException', ],
			],
		],
		'CreateDocumentationPart'    => [
			'name'   => 'CreateDocumentationPart',
			'http'   => [
				'method'       => 'POST',
				'requestUri'   => '/restapis/{restapi_id}/documentation/parts',
				'responseCode' => 201,
			],
			'input'  => [ 'shape' => 'CreateDocumentationPartRequest', ],
			'output' => [ 'shape' => 'DocumentationPart', ],
			'errors' => [
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'ConflictException', ],
				[ 'shape' => 'UnauthorizedException', ],
				[ 'shape' => 'NotFoundException', ],
				[ 'shape' => 'LimitExceededException', ],
				[ 'shape' => 'TooManyRequestsException', ],
			],
		],
		'CreateDocumentationVersion' => [
			'name'   => 'CreateDocumentationVersion',
			'http'   => [
				'method'       => 'POST',
				'requestUri'   => '/restapis/{restapi_id}/documentation/versions',
				'responseCode' => 201,
			],
			'input'  => [ 'shape' => 'CreateDocumentationVersionRequest', ],
			'output' => [ 'shape' => 'DocumentationVersion', ],
			'errors' => [
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'ConflictException', ],
				[ 'shape' => 'UnauthorizedException', ],
				[ 'shape' => 'NotFoundException', ],
				[ 'shape' => 'LimitExceededException', ],
				[ 'shape' => 'TooManyRequestsException', ],
			],
		],
		'CreateDomainName'           => [
			'name'   => 'CreateDomainName',
			'http'   => [
				'method'       => 'POST',
				'requestUri'   => '/domainnames',
				'responseCode' => 201,
			],
			'input'  => [ 'shape' => 'CreateDomainNameRequest', ],
			'output' => [ 'shape' => 'DomainName', ],
			'errors' => [
				[ 'shape' => 'UnauthorizedException', ],
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'ConflictException', ],
				[ 'shape' => 'TooManyRequestsException', ],
			],
		],
		'CreateModel'                => [
			'name'   => 'CreateModel',
			'http'   => [
				'method'       => 'POST',
				'requestUri'   => '/restapis/{restapi_id}/models',
				'responseCode' => 201,
			],
			'input'  => [ 'shape' => 'CreateModelRequest', ],
			'output' => [ 'shape' => 'Model', ],
			'errors' => [
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'UnauthorizedException', ],
				[ 'shape' => 'NotFoundException', ],
				[ 'shape' => 'ConflictException', ],
				[ 'shape' => 'LimitExceededException', ],
				[ 'shape' => 'TooManyRequestsException', ],
			],
		],
		'CreateRequestValidator'     => [
			'name'   => 'CreateRequestValidator',
			'http'   => [
				'method'       => 'POST',
				'requestUri'   => '/restapis/{restapi_id}/requestvalidators',
				'responseCode' => 201,
			],
			'input'  => [ 'shape' => 'CreateRequestValidatorRequest', ],
			'output' => [ 'shape' => 'RequestValidator', ],
			'errors' => [
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'UnauthorizedException', ],
				[ 'shape' => 'NotFoundException', ],
				[ 'shape' => 'LimitExceededException', ],
				[ 'shape' => 'TooManyRequestsException', ],
			],
		],
		'CreateResource'             => [
			'name'   => 'CreateResource',
			'http'   => [
				'method'       => 'POST',
				'requestUri'   => '/restapis/{restapi_id}/resources/{parent_id}',
				'responseCode' => 201,
			],
			'input'  => [ 'shape' => 'CreateResourceRequest', ],
			'output' => [ 'shape' => 'Resource', ],
			'errors' => [
				[ 'shape' => 'UnauthorizedException', ],
				[ 'shape' => 'NotFoundException', ],
				[ 'shape' => 'ConflictException', ],
				[ 'shape' => 'LimitExceededException', ],
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'TooManyRequestsException', ],
			],
		],
		'CreateRestApi'              => [
			'name'   => 'CreateRestApi',
			'http'   => [
				'method'       => 'POST',
				'requestUri'   => '/restapis',
				'responseCode' => 201,
			],
			'input'  => [ 'shape' => 'CreateRestApiRequest', ],
			'output' => [ 'shape' => 'RestApi', ],
			'errors' => [
				[ 'shape' => 'UnauthorizedException', ],
				[ 'shape' => 'LimitExceededException', ],
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'TooManyRequestsException', ],
			],
		],
		'CreateStage'                => [
			'name'   => 'CreateStage',
			'http'   => [
				'method'       => 'POST',
				'requestUri'   => '/restapis/{restapi_id}/stages',
				'responseCode' => 201,
			],
			'input'  => [ 'shape' => 'CreateStageRequest', ],
			'output' => [ 'shape' => 'Stage', ],
			'errors' => [
				[ 'shape' => 'UnauthorizedException', ],
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'NotFoundException', ],
				[ 'shape' => 'ConflictException', ],
				[ 'shape' => 'LimitExceededException', ],
				[ 'shape' => 'TooManyRequestsException', ],
			],
		],
		'CreateUsagePlan'            => [
			'name'   => 'CreateUsagePlan',
			'http'   => [
				'method'       => 'POST',
				'requestUri'   => '/usageplans',
				'responseCode' => 201,
			],
			'input'  => [ 'shape' => 'CreateUsagePlanRequest', ],
			'output' => [ 'shape' => 'UsagePlan', ],
			'errors' => [
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'UnauthorizedException', ],
				[ 'shape' => 'TooManyRequestsException', ],
				[ 'shape' => 'LimitExceededException', ],
				[ 'shape' => 'ConflictException', ],
				[ 'shape' => 'NotFoundException', ],
			],
		],
		'CreateUsagePlanKey'         => [
			'name'   => 'CreateUsagePlanKey',
			'http'   => [
				'method'       => 'POST',
				'requestUri'   => '/usageplans/{usageplanId}/keys',
				'responseCode' => 201,
			],
			'input'  => [ 'shape' => 'CreateUsagePlanKeyRequest', ],
			'output' => [ 'shape' => 'UsagePlanKey', ],
			'errors' => [
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'ConflictException', ],
				[ 'shape' => 'UnauthorizedException', ],
				[ 'shape' => 'NotFoundException', ],
				[ 'shape' => 'TooManyRequestsException', ],
			],
		],
		'CreateVpcLink'              => [
			'name'   => 'CreateVpcLink',
			'http'   => [
				'method'       => 'POST',
				'requestUri'   => '/vpclinks',
				'responseCode' => 202,
			],
			'input'  => [ 'shape' => 'CreateVpcLinkRequest', ],
			'output' => [ 'shape' => 'VpcLink', ],
			'errors' => [
				[ 'shape' => 'UnauthorizedException', ],
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'TooManyRequestsException', ],
			],
		],
		'DeleteApiKey'               => [
			'name'   => 'DeleteApiKey',
			'http'   => [
				'method'       => 'DELETE',
				'requestUri'   => '/apikeys/{api_Key}',
				'responseCode' => 202,
			],
			'input'  => [ 'shape' => 'DeleteApiKeyRequest', ],
			'errors' => [
				[ 'shape' => 'UnauthorizedException', ],
				[ 'shape' => 'NotFoundException', ],
				[ 'shape' => 'TooManyRequestsException', ],
			],
		],
		'DeleteAuthorizer'           => [
			'name'   => 'DeleteAuthorizer',
			'http'   => [
				'method'       => 'DELETE',
				'requestUri'   => '/restapis/{restapi_id}/authorizers/{authorizer_id}',
				'responseCode' => 202,
			],
			'input'  => [ 'shape' => 'DeleteAuthorizerRequest', ],
			'errors' => [
				[ 'shape' => 'UnauthorizedException', ],
				[ 'shape' => 'NotFoundException', ],
				[ 'shape' => 'TooManyRequestsException', ],
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'ConflictException', ],
			],
		],
		'DeleteBasePathMapping'      => [
			'name'   => 'DeleteBasePathMapping',
			'http'   => [
				'method'       => 'DELETE',
				'requestUri'   => '/domainnames/{domain_name}/basepathmappings/{base_path}',
				'responseCode' => 202,
			],
			'input'  => [ 'shape' => 'DeleteBasePathMappingRequest', ],
			'errors' => [
				[ 'shape' => 'UnauthorizedException', ],
				[ 'shape' => 'NotFoundException', ],
				[ 'shape' => 'ConflictException', ],
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'TooManyRequestsException', ],
			],
		],
		'DeleteClientCertificate'    => [
			'name'   => 'DeleteClientCertificate',
			'http'   => [
				'method'       => 'DELETE',
				'requestUri'   => '/clientcertificates/{clientcertificate_id}',
				'responseCode' => 202,
			],
			'input'  => [ 'shape' => 'DeleteClientCertificateRequest', ],
			'errors' => [
				[ 'shape' => 'UnauthorizedException', ],
				[ 'shape' => 'TooManyRequestsException', ],
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'NotFoundException', ],
			],
		],
		'DeleteDeployment'           => [
			'name'   => 'DeleteDeployment',
			'http'   => [
				'method'       => 'DELETE',
				'requestUri'   => '/restapis/{restapi_id}/deployments/{deployment_id}',
				'responseCode' => 202,
			],
			'input'  => [ 'shape' => 'DeleteDeploymentRequest', ],
			'errors' => [
				[ 'shape' => 'UnauthorizedException', ],
				[ 'shape' => 'NotFoundException', ],
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'TooManyRequestsException', ],
			],
		],
		'DeleteDocumentationPart'    => [
			'name'   => 'DeleteDocumentationPart',
			'http'   => [
				'method'       => 'DELETE',
				'requestUri'   => '/restapis/{restapi_id}/documentation/parts/{part_id}',
				'responseCode' => 202,
			],
			'input'  => [ 'shape' => 'DeleteDocumentationPartRequest', ],
			'errors' => [
				[ 'shape' => 'UnauthorizedException', ],
				[ 'shape' => 'NotFoundException', ],
				[ 'shape' => 'TooManyRequestsException', ],
				[ 'shape' => 'ConflictException', ],
				[ 'shape' => 'BadRequestException', ],
			],
		],
		'DeleteDocumentationVersion' => [
			'name'   => 'DeleteDocumentationVersion',
			'http'   => [
				'method'       => 'DELETE',
				'requestUri'   => '/restapis/{restapi_id}/documentation/versions/{doc_version}',
				'responseCode' => 202,
			],
			'input'  => [ 'shape' => 'DeleteDocumentationVersionRequest', ],
			'errors' => [
				[ 'shape' => 'UnauthorizedException', ],
				[ 'shape' => 'NotFoundException', ],
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'ConflictException', ],
				[ 'shape' => 'TooManyRequestsException', ],
			],
		],
		'DeleteDomainName'           => [
			'name'   => 'DeleteDomainName',
			'http'   => [
				'method'       => 'DELETE',
				'requestUri'   => '/domainnames/{domain_name}',
				'responseCode' => 202,
			],
			'input'  => [ 'shape' => 'DeleteDomainNameRequest', ],
			'errors' => [
				[ 'shape' => 'UnauthorizedException', ],
				[ 'shape' => 'NotFoundException', ],
				[ 'shape' => 'TooManyRequestsException', ],
			],
		],
		'DeleteGatewayResponse'      => [
			'name'   => 'DeleteGatewayResponse',
			'http'   => [
				'method'       => 'DELETE',
				'requestUri'   => '/restapis/{restapi_id}/gatewayresponses/{response_type}',
				'responseCode' => 202,
			],
			'input'  => [ 'shape' => 'DeleteGatewayResponseRequest', ],
			'errors' => [
				[ 'shape' => 'UnauthorizedException', ],
				[ 'shape' => 'NotFoundException', ],
				[ 'shape' => 'TooManyRequestsException', ],
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'ConflictException', ],
			],
		],
		'DeleteIntegration'          => [
			'name'   => 'DeleteIntegration',
			'http'   => [
				'method'       => 'DELETE',
				'requestUri'   => '/restapis/{restapi_id}/resources/{resource_id}/methods/{http_method}/integration',
				'responseCode' => 204,
			],
			'input'  => [ 'shape' => 'DeleteIntegrationRequest', ],
			'errors' => [
				[ 'shape' => 'UnauthorizedException', ],
				[ 'shape' => 'NotFoundException', ],
				[ 'shape' => 'TooManyRequestsException', ],
				[ 'shape' => 'ConflictException', ],
			],
		],
		'DeleteIntegrationResponse'  => [
			'name'   => 'DeleteIntegrationResponse',
			'http'   => [
				'method'       => 'DELETE',
				'requestUri'   => '/restapis/{restapi_id}/resources/{resource_id}/methods/{http_method}/integration/responses/{status_code}',
				'responseCode' => 204,
			],
			'input'  => [ 'shape' => 'DeleteIntegrationResponseRequest', ],
			'errors' => [
				[ 'shape' => 'UnauthorizedException', ],
				[ 'shape' => 'NotFoundException', ],
				[ 'shape' => 'TooManyRequestsException', ],
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'ConflictException', ],
			],
		],
		'DeleteMethod'               => [
			'name'   => 'DeleteMethod',
			'http'   => [
				'method'       => 'DELETE',
				'requestUri'   => '/restapis/{restapi_id}/resources/{resource_id}/methods/{http_method}',
				'responseCode' => 204,
			],
			'input'  => [ 'shape' => 'DeleteMethodRequest', ],
			'errors' => [
				[ 'shape' => 'UnauthorizedException', ],
				[ 'shape' => 'NotFoundException', ],
				[ 'shape' => 'TooManyRequestsException', ],
				[ 'shape' => 'ConflictException', ],
			],
		],
		'DeleteMethodResponse'       => [
			'name'   => 'DeleteMethodResponse',
			'http'   => [
				'method'       => 'DELETE',
				'requestUri'   => '/restapis/{restapi_id}/resources/{resource_id}/methods/{http_method}/responses/{status_code}',
				'responseCode' => 204,
			],
			'input'  => [ 'shape' => 'DeleteMethodResponseRequest', ],
			'errors' => [
				[ 'shape' => 'UnauthorizedException', ],
				[ 'shape' => 'NotFoundException', ],
				[ 'shape' => 'TooManyRequestsException', ],
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'ConflictException', ],
			],
		],
		'DeleteModel'                => [
			'name'   => 'DeleteModel',
			'http'   => [
				'method'       => 'DELETE',
				'requestUri'   => '/restapis/{restapi_id}/models/{model_name}',
				'responseCode' => 202,
			],
			'input'  => [ 'shape' => 'DeleteModelRequest', ],
			'errors' => [
				[ 'shape' => 'UnauthorizedException', ],
				[ 'shape' => 'NotFoundException', ],
				[ 'shape' => 'TooManyRequestsException', ],
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'ConflictException', ],
			],
		],
		'DeleteRequestValidator'     => [
			'name'   => 'DeleteRequestValidator',
			'http'   => [
				'method'       => 'DELETE',
				'requestUri'   => '/restapis/{restapi_id}/requestvalidators/{requestvalidator_id}',
				'responseCode' => 202,
			],
			'input'  => [ 'shape' => 'DeleteRequestValidatorRequest', ],
			'errors' => [
				[ 'shape' => 'UnauthorizedException', ],
				[ 'shape' => 'NotFoundException', ],
				[ 'shape' => 'TooManyRequestsException', ],
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'ConflictException', ],
			],
		],
		'DeleteResource'             => [
			'name'   => 'DeleteResource',
			'http'   => [
				'method'       => 'DELETE',
				'requestUri'   => '/restapis/{restapi_id}/resources/{resource_id}',
				'responseCode' => 202,
			],
			'input'  => [ 'shape' => 'DeleteResourceRequest', ],
			'errors' => [
				[ 'shape' => 'UnauthorizedException', ],
				[ 'shape' => 'NotFoundException', ],
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'ConflictException', ],
				[ 'shape' => 'TooManyRequestsException', ],
			],
		],
		'DeleteRestApi'              => [
			'name'   => 'DeleteRestApi',
			'http'   => [
				'method'       => 'DELETE',
				'requestUri'   => '/restapis/{restapi_id}',
				'responseCode' => 202,
			],
			'input'  => [ 'shape' => 'DeleteRestApiRequest', ],
			'errors' => [
				[ 'shape' => 'UnauthorizedException', ],
				[ 'shape' => 'NotFoundException', ],
				[ 'shape' => 'TooManyRequestsException', ],
				[ 'shape' => 'BadRequestException', ],
			],
		],
		'DeleteStage'                => [
			'name'   => 'DeleteStage',
			'http'   => [
				'method'       => 'DELETE',
				'requestUri'   => '/restapis/{restapi_id}/stages/{stage_name}',
				'responseCode' => 202,
			],
			'input'  => [ 'shape' => 'DeleteStageRequest', ],
			'errors' => [
				[ 'shape' => 'UnauthorizedException', ],
				[ 'shape' => 'NotFoundException', ],
				[ 'shape' => 'TooManyRequestsException', ],
				[ 'shape' => 'BadRequestException', ],
			],
		],
		'DeleteUsagePlan'            => [
			'name'   => 'DeleteUsagePlan',
			'http'   => [
				'method'       => 'DELETE',
				'requestUri'   => '/usageplans/{usageplanId}',
				'responseCode' => 202,
			],
			'input'  => [ 'shape' => 'DeleteUsagePlanRequest', ],
			'errors' => [
				[ 'shape' => 'UnauthorizedException', ],
				[ 'shape' => 'TooManyRequestsException', ],
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'NotFoundException', ],
			],
		],
		'DeleteUsagePlanKey'         => [
			'name'   => 'DeleteUsagePlanKey',
			'http'   => [
				'method'       => 'DELETE',
				'requestUri'   => '/usageplans/{usageplanId}/keys/{keyId}',
				'responseCode' => 202,
			],
			'input'  => [ 'shape' => 'DeleteUsagePlanKeyRequest', ],
			'errors' => [
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'ConflictException', ],
				[ 'shape' => 'UnauthorizedException', ],
				[ 'shape' => 'NotFoundException', ],
				[ 'shape' => 'TooManyRequestsException', ],
			],
		],
		'DeleteVpcLink'              => [
			'name'   => 'DeleteVpcLink',
			'http'   => [
				'method'       => 'DELETE',
				'requestUri'   => '/vpclinks/{vpclink_id}',
				'responseCode' => 202,
			],
			'input'  => [ 'shape' => 'DeleteVpcLinkRequest', ],
			'errors' => [
				[ 'shape' => 'UnauthorizedException', ],
				[ 'shape' => 'NotFoundException', ],
				[ 'shape' => 'TooManyRequestsException', ],
				[ 'shape' => 'BadRequestException', ],
			],
		],
		'FlushStageAuthorizersCache' => [
			'name'   => 'FlushStageAuthorizersCache',
			'http'   => [
				'method'       => 'DELETE',
				'requestUri'   => '/restapis/{restapi_id}/stages/{stage_name}/cache/authorizers',
				'responseCode' => 202,
			],
			'input'  => [ 'shape' => 'FlushStageAuthorizersCacheRequest', ],
			'errors' => [
				[ 'shape' => 'UnauthorizedException', ],
				[ 'shape' => 'NotFoundException', ],
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'TooManyRequestsException', ],
			],
		],
		'FlushStageCache'            => [
			'name'   => 'FlushStageCache',
			'http'   => [
				'method'       => 'DELETE',
				'requestUri'   => '/restapis/{restapi_id}/stages/{stage_name}/cache/data',
				'responseCode' => 202,
			],
			'input'  => [ 'shape' => 'FlushStageCacheRequest', ],
			'errors' => [
				[ 'shape' => 'UnauthorizedException', ],
				[ 'shape' => 'NotFoundException', ],
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'TooManyRequestsException', ],
			],
		],
		'GenerateClientCertificate'  => [
			'name'   => 'GenerateClientCertificate',
			'http'   => [
				'method'       => 'POST',
				'requestUri'   => '/clientcertificates',
				'responseCode' => 201,
			],
			'input'  => [ 'shape' => 'GenerateClientCertificateRequest', ],
			'output' => [ 'shape' => 'ClientCertificate', ],
			'errors' => [
				[ 'shape' => 'UnauthorizedException', ],
				[ 'shape' => 'TooManyRequestsException', ],
				[ 'shape' => 'LimitExceededException', ],
			],
		],
		'GetAccount'                 => [
			'name'   => 'GetAccount',
			'http'   => [ 'method' => 'GET', 'requestUri' => '/account', ],
			'input'  => [ 'shape' => 'GetAccountRequest', ],
			'output' => [ 'shape' => 'Account', ],
			'errors' => [
				[ 'shape' => 'UnauthorizedException', ],
				[ 'shape' => 'NotFoundException', ],
				[ 'shape' => 'TooManyRequestsException', ],
			],
		],
		'GetApiKey'                  => [
			'name'   => 'GetApiKey',
			'http'   => [ 'method' => 'GET', 'requestUri' => '/apikeys/{api_Key}', ],
			'input'  => [ 'shape' => 'GetApiKeyRequest', ],
			'output' => [ 'shape' => 'ApiKey', ],
			'errors' => [
				[ 'shape' => 'UnauthorizedException', ],
				[ 'shape' => 'NotFoundException', ],
				[ 'shape' => 'TooManyRequestsException', ],
			],
		],
		'GetApiKeys'                 => [
			'name'   => 'GetApiKeys',
			'http'   => [ 'method' => 'GET', 'requestUri' => '/apikeys', ],
			'input'  => [ 'shape' => 'GetApiKeysRequest', ],
			'output' => [ 'shape' => 'ApiKeys', ],
			'errors' => [
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'UnauthorizedException', ],
				[ 'shape' => 'TooManyRequestsException', ],
			],
		],
		'GetAuthorizer'              => [
			'name'   => 'GetAuthorizer',
			'http'   => [
				'method'     => 'GET',
				'requestUri' => '/restapis/{restapi_id}/authorizers/{authorizer_id}',
			],
			'input'  => [ 'shape' => 'GetAuthorizerRequest', ],
			'output' => [ 'shape' => 'Authorizer', ],
			'errors' => [
				[ 'shape' => 'UnauthorizedException', ],
				[ 'shape' => 'NotFoundException', ],
				[ 'shape' => 'TooManyRequestsException', ],
			],
		],
		'GetAuthorizers'             => [
			'name'   => 'GetAuthorizers',
			'http'   => [
				'method'     => 'GET',
				'requestUri' => '/restapis/{restapi_id}/authorizers',
			],
			'input'  => [ 'shape' => 'GetAuthorizersRequest', ],
			'output' => [ 'shape' => 'Authorizers', ],
			'errors' => [
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'UnauthorizedException', ],
				[ 'shape' => 'NotFoundException', ],
				[ 'shape' => 'TooManyRequestsException', ],
			],
		],
		'GetBasePathMapping'         => [
			'name'   => 'GetBasePathMapping',
			'http'   => [
				'method'     => 'GET',
				'requestUri' => '/domainnames/{domain_name}/basepathmappings/{base_path}',
			],
			'input'  => [ 'shape' => 'GetBasePathMappingRequest', ],
			'output' => [ 'shape' => 'BasePathMapping', ],
			'errors' => [
				[ 'shape' => 'UnauthorizedException', ],
				[ 'shape' => 'NotFoundException', ],
				[ 'shape' => 'TooManyRequestsException', ],
			],
		],
		'GetBasePathMappings'        => [
			'name'   => 'GetBasePathMappings',
			'http'   => [
				'method'     => 'GET',
				'requestUri' => '/domainnames/{domain_name}/basepathmappings',
			],
			'input'  => [ 'shape' => 'GetBasePathMappingsRequest', ],
			'output' => [ 'shape' => 'BasePathMappings', ],
			'errors' => [
				[ 'shape' => 'UnauthorizedException', ],
				[ 'shape' => 'NotFoundException', ],
				[ 'shape' => 'TooManyRequestsException', ],
			],
		],
		'GetClientCertificate'       => [
			'name'   => 'GetClientCertificate',
			'http'   => [
				'method'     => 'GET',
				'requestUri' => '/clientcertificates/{clientcertificate_id}',
			],
			'input'  => [ 'shape' => 'GetClientCertificateRequest', ],
			'output' => [ 'shape' => 'ClientCertificate', ],
			'errors' => [
				[ 'shape' => 'UnauthorizedException', ],
				[ 'shape' => 'NotFoundException', ],
				[ 'shape' => 'TooManyRequestsException', ],
			],
		],
		'GetClientCertificates'      => [
			'name'   => 'GetClientCertificates',
			'http'   => [ 'method' => 'GET', 'requestUri' => '/clientcertificates', ],
			'input'  => [ 'shape' => 'GetClientCertificatesRequest', ],
			'output' => [ 'shape' => 'ClientCertificates', ],
			'errors' => [
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'UnauthorizedException', ],
				[ 'shape' => 'TooManyRequestsException', ],
			],
		],
		'GetDeployment'              => [
			'name'   => 'GetDeployment',
			'http'   => [
				'method'     => 'GET',
				'requestUri' => '/restapis/{restapi_id}/deployments/{deployment_id}',
			],
			'input'  => [ 'shape' => 'GetDeploymentRequest', ],
			'output' => [ 'shape' => 'Deployment', ],
			'errors' => [
				[ 'shape' => 'UnauthorizedException', ],
				[ 'shape' => 'NotFoundException', ],
				[ 'shape' => 'TooManyRequestsException', ],
				[ 'shape' => 'ServiceUnavailableException', ],
			],
		],
		'GetDeployments'             => [
			'name'   => 'GetDeployments',
			'http'   => [
				'method'     => 'GET',
				'requestUri' => '/restapis/{restapi_id}/deployments',
			],
			'input'  => [ 'shape' => 'GetDeploymentsRequest', ],
			'output' => [ 'shape' => 'Deployments', ],
			'errors' => [
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'UnauthorizedException', ],
				[ 'shape' => 'TooManyRequestsException', ],
				[ 'shape' => 'ServiceUnavailableException', ],
			],
		],
		'GetDocumentationPart'       => [
			'name'   => 'GetDocumentationPart',
			'http'   => [
				'method'     => 'GET',
				'requestUri' => '/restapis/{restapi_id}/documentation/parts/{part_id}',
			],
			'input'  => [ 'shape' => 'GetDocumentationPartRequest', ],
			'output' => [ 'shape' => 'DocumentationPart', ],
			'errors' => [
				[ 'shape' => 'UnauthorizedException', ],
				[ 'shape' => 'NotFoundException', ],
				[ 'shape' => 'TooManyRequestsException', ],
			],
		],
		'GetDocumentationParts'      => [
			'name'   => 'GetDocumentationParts',
			'http'   => [
				'method'     => 'GET',
				'requestUri' => '/restapis/{restapi_id}/documentation/parts',
			],
			'input'  => [ 'shape' => 'GetDocumentationPartsRequest', ],
			'output' => [ 'shape' => 'DocumentationParts', ],
			'errors' => [
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'UnauthorizedException', ],
				[ 'shape' => 'NotFoundException', ],
				[ 'shape' => 'TooManyRequestsException', ],
			],
		],
		'GetDocumentationVersion'    => [
			'name'   => 'GetDocumentationVersion',
			'http'   => [
				'method'     => 'GET',
				'requestUri' => '/restapis/{restapi_id}/documentation/versions/{doc_version}',
			],
			'input'  => [ 'shape' => 'GetDocumentationVersionRequest', ],
			'output' => [ 'shape' => 'DocumentationVersion', ],
			'errors' => [
				[ 'shape' => 'UnauthorizedException', ],
				[ 'shape' => 'NotFoundException', ],
				[ 'shape' => 'TooManyRequestsException', ],
			],
		],
		'GetDocumentationVersions'   => [
			'name'   => 'GetDocumentationVersions',
			'http'   => [
				'method'     => 'GET',
				'requestUri' => '/restapis/{restapi_id}/documentation/versions',
			],
			'input'  => [ 'shape' => 'GetDocumentationVersionsRequest', ],
			'output' => [ 'shape' => 'DocumentationVersions', ],
			'errors' => [
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'UnauthorizedException', ],
				[ 'shape' => 'NotFoundException', ],
				[ 'shape' => 'TooManyRequestsException', ],
			],
		],
		'GetDomainName'              => [
			'name'   => 'GetDomainName',
			'http'   => [
				'method'     => 'GET',
				'requestUri' => '/domainnames/{domain_name}',
			],
			'input'  => [ 'shape' => 'GetDomainNameRequest', ],
			'output' => [ 'shape' => 'DomainName', ],
			'errors' => [
				[ 'shape' => 'UnauthorizedException', ],
				[ 'shape' => 'NotFoundException', ],
				[ 'shape' => 'ServiceUnavailableException', ],
				[ 'shape' => 'TooManyRequestsException', ],
			],
		],
		'GetDomainNames'             => [
			'name'   => 'GetDomainNames',
			'http'   => [ 'method' => 'GET', 'requestUri' => '/domainnames', ],
			'input'  => [ 'shape' => 'GetDomainNamesRequest', ],
			'output' => [ 'shape' => 'DomainNames', ],
			'errors' => [
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'UnauthorizedException', ],
				[ 'shape' => 'TooManyRequestsException', ],
			],
		],
		'GetExport'                  => [
			'name'   => 'GetExport',
			'http'   => [
				'method'       => 'GET',
				'requestUri'   => '/restapis/{restapi_id}/stages/{stage_name}/exports/{export_type}',
				'responseCode' => 200,
			],
			'input'  => [ 'shape' => 'GetExportRequest', ],
			'output' => [ 'shape' => 'ExportResponse', ],
			'errors' => [
				[ 'shape' => 'UnauthorizedException', ],
				[ 'shape' => 'NotFoundException', ],
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'ConflictException', ],
				[ 'shape' => 'TooManyRequestsException', ],
			],
		],
		'GetGatewayResponse'         => [
			'name'   => 'GetGatewayResponse',
			'http'   => [
				'method'     => 'GET',
				'requestUri' => '/restapis/{restapi_id}/gatewayresponses/{response_type}',
			],
			'input'  => [ 'shape' => 'GetGatewayResponseRequest', ],
			'output' => [ 'shape' => 'GatewayResponse', ],
			'errors' => [
				[ 'shape' => 'UnauthorizedException', ],
				[ 'shape' => 'NotFoundException', ],
				[ 'shape' => 'TooManyRequestsException', ],
			],
		],
		'GetGatewayResponses'        => [
			'name'   => 'GetGatewayResponses',
			'http'   => [
				'method'     => 'GET',
				'requestUri' => '/restapis/{restapi_id}/gatewayresponses',
			],
			'input'  => [ 'shape' => 'GetGatewayResponsesRequest', ],
			'output' => [ 'shape' => 'GatewayResponses', ],
			'errors' => [
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'UnauthorizedException', ],
				[ 'shape' => 'NotFoundException', ],
				[ 'shape' => 'TooManyRequestsException', ],
			],
		],
		'GetIntegration'             => [
			'name'   => 'GetIntegration',
			'http'   => [
				'method'     => 'GET',
				'requestUri' => '/restapis/{restapi_id}/resources/{resource_id}/methods/{http_method}/integration',
			],
			'input'  => [ 'shape' => 'GetIntegrationRequest', ],
			'output' => [ 'shape' => 'Integration', ],
			'errors' => [
				[ 'shape' => 'UnauthorizedException', ],
				[ 'shape' => 'NotFoundException', ],
				[ 'shape' => 'TooManyRequestsException', ],
			],
		],
		'GetIntegrationResponse'     => [
			'name'   => 'GetIntegrationResponse',
			'http'   => [
				'method'     => 'GET',
				'requestUri' => '/restapis/{restapi_id}/resources/{resource_id}/methods/{http_method}/integration/responses/{status_code}',
			],
			'input'  => [ 'shape' => 'GetIntegrationResponseRequest', ],
			'output' => [ 'shape' => 'IntegrationResponse', ],
			'errors' => [
				[ 'shape' => 'UnauthorizedException', ],
				[ 'shape' => 'NotFoundException', ],
				[ 'shape' => 'TooManyRequestsException', ],
			],
		],
		'GetMethod'                  => [
			'name'   => 'GetMethod',
			'http'   => [
				'method'     => 'GET',
				'requestUri' => '/restapis/{restapi_id}/resources/{resource_id}/methods/{http_method}',
			],
			'input'  => [ 'shape' => 'GetMethodRequest', ],
			'output' => [ 'shape' => 'Method', ],
			'errors' => [
				[ 'shape' => 'UnauthorizedException', ],
				[ 'shape' => 'NotFoundException', ],
				[ 'shape' => 'TooManyRequestsException', ],
			],
		],
		'GetMethodResponse'          => [
			'name'   => 'GetMethodResponse',
			'http'   => [
				'method'     => 'GET',
				'requestUri' => '/restapis/{restapi_id}/resources/{resource_id}/methods/{http_method}/responses/{status_code}',
			],
			'input'  => [ 'shape' => 'GetMethodResponseRequest', ],
			'output' => [ 'shape' => 'MethodResponse', ],
			'errors' => [
				[ 'shape' => 'UnauthorizedException', ],
				[ 'shape' => 'NotFoundException', ],
				[ 'shape' => 'TooManyRequestsException', ],
			],
		],
		'GetModel'                   => [
			'name'   => 'GetModel',
			'http'   => [
				'method'     => 'GET',
				'requestUri' => '/restapis/{restapi_id}/models/{model_name}',
			],
			'input'  => [ 'shape' => 'GetModelRequest', ],
			'output' => [ 'shape' => 'Model', ],
			'errors' => [
				[ 'shape' => 'UnauthorizedException', ],
				[ 'shape' => 'NotFoundException', ],
				[ 'shape' => 'TooManyRequestsException', ],
			],
		],
		'GetModelTemplate'           => [
			'name'   => 'GetModelTemplate',
			'http'   => [
				'method'     => 'GET',
				'requestUri' => '/restapis/{restapi_id}/models/{model_name}/default_template',
			],
			'input'  => [ 'shape' => 'GetModelTemplateRequest', ],
			'output' => [ 'shape' => 'Template', ],
			'errors' => [
				[ 'shape' => 'UnauthorizedException', ],
				[ 'shape' => 'NotFoundException', ],
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'TooManyRequestsException', ],
			],
		],
		'GetModels'                  => [
			'name'   => 'GetModels',
			'http'   => [
				'method'     => 'GET',
				'requestUri' => '/restapis/{restapi_id}/models',
			],
			'input'  => [ 'shape' => 'GetModelsRequest', ],
			'output' => [ 'shape' => 'Models', ],
			'errors' => [
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'UnauthorizedException', ],
				[ 'shape' => 'NotFoundException', ],
				[ 'shape' => 'TooManyRequestsException', ],
			],
		],
		'GetRequestValidator'        => [
			'name'   => 'GetRequestValidator',
			'http'   => [
				'method'     => 'GET',
				'requestUri' => '/restapis/{restapi_id}/requestvalidators/{requestvalidator_id}',
			],
			'input'  => [ 'shape' => 'GetRequestValidatorRequest', ],
			'output' => [ 'shape' => 'RequestValidator', ],
			'errors' => [
				[ 'shape' => 'UnauthorizedException', ],
				[ 'shape' => 'NotFoundException', ],
				[ 'shape' => 'TooManyRequestsException', ],
			],
		],
		'GetRequestValidators'       => [
			'name'   => 'GetRequestValidators',
			'http'   => [
				'method'     => 'GET',
				'requestUri' => '/restapis/{restapi_id}/requestvalidators',
			],
			'input'  => [ 'shape' => 'GetRequestValidatorsRequest', ],
			'output' => [ 'shape' => 'RequestValidators', ],
			'errors' => [
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'UnauthorizedException', ],
				[ 'shape' => 'NotFoundException', ],
				[ 'shape' => 'TooManyRequestsException', ],
			],
		],
		'GetResource'                => [
			'name'   => 'GetResource',
			'http'   => [
				'method'     => 'GET',
				'requestUri' => '/restapis/{restapi_id}/resources/{resource_id}',
			],
			'input'  => [ 'shape' => 'GetResourceRequest', ],
			'output' => [ 'shape' => 'Resource', ],
			'errors' => [
				[ 'shape' => 'UnauthorizedException', ],
				[ 'shape' => 'NotFoundException', ],
				[ 'shape' => 'TooManyRequestsException', ],
			],
		],
		'GetResources'               => [
			'name'   => 'GetResources',
			'http'   => [
				'method'     => 'GET',
				'requestUri' => '/restapis/{restapi_id}/resources',
			],
			'input'  => [ 'shape' => 'GetResourcesRequest', ],
			'output' => [ 'shape' => 'Resources', ],
			'errors' => [
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'UnauthorizedException', ],
				[ 'shape' => 'NotFoundException', ],
				[ 'shape' => 'TooManyRequestsException', ],
			],
		],
		'GetRestApi'                 => [
			'name'   => 'GetRestApi',
			'http'   => [ 'method' => 'GET', 'requestUri' => '/restapis/{restapi_id}', ],
			'input'  => [ 'shape' => 'GetRestApiRequest', ],
			'output' => [ 'shape' => 'RestApi', ],
			'errors' => [
				[ 'shape' => 'UnauthorizedException', ],
				[ 'shape' => 'NotFoundException', ],
				[ 'shape' => 'TooManyRequestsException', ],
			],
		],
		'GetRestApis'                => [
			'name'   => 'GetRestApis',
			'http'   => [ 'method' => 'GET', 'requestUri' => '/restapis', ],
			'input'  => [ 'shape' => 'GetRestApisRequest', ],
			'output' => [ 'shape' => 'RestApis', ],
			'errors' => [
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'UnauthorizedException', ],
				[ 'shape' => 'TooManyRequestsException', ],
			],
		],
		'GetSdk'                     => [
			'name'   => 'GetSdk',
			'http'   => [
				'method'       => 'GET',
				'requestUri'   => '/restapis/{restapi_id}/stages/{stage_name}/sdks/{sdk_type}',
				'responseCode' => 200,
			],
			'input'  => [ 'shape' => 'GetSdkRequest', ],
			'output' => [ 'shape' => 'SdkResponse', ],
			'errors' => [
				[ 'shape' => 'UnauthorizedException', ],
				[ 'shape' => 'NotFoundException', ],
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'ConflictException', ],
				[ 'shape' => 'TooManyRequestsException', ],
			],
		],
		'GetSdkType'                 => [
			'name'   => 'GetSdkType',
			'http'   => [ 'method' => 'GET', 'requestUri' => '/sdktypes/{sdktype_id}', ],
			'input'  => [ 'shape' => 'GetSdkTypeRequest', ],
			'output' => [ 'shape' => 'SdkType', ],
			'errors' => [
				[ 'shape' => 'UnauthorizedException', ],
				[ 'shape' => 'NotFoundException', ],
				[ 'shape' => 'TooManyRequestsException', ],
			],
		],
		'GetSdkTypes'                => [
			'name'   => 'GetSdkTypes',
			'http'   => [ 'method' => 'GET', 'requestUri' => '/sdktypes', ],
			'input'  => [ 'shape' => 'GetSdkTypesRequest', ],
			'output' => [ 'shape' => 'SdkTypes', ],
			'errors' => [
				[ 'shape' => 'UnauthorizedException', ],
				[ 'shape' => 'TooManyRequestsException', ],
			],
		],
		'GetStage'                   => [
			'name'   => 'GetStage',
			'http'   => [
				'method'     => 'GET',
				'requestUri' => '/restapis/{restapi_id}/stages/{stage_name}',
			],
			'input'  => [ 'shape' => 'GetStageRequest', ],
			'output' => [ 'shape' => 'Stage', ],
			'errors' => [
				[ 'shape' => 'UnauthorizedException', ],
				[ 'shape' => 'NotFoundException', ],
				[ 'shape' => 'TooManyRequestsException', ],
			],
		],
		'GetStages'                  => [
			'name'   => 'GetStages',
			'http'   => [
				'method'     => 'GET',
				'requestUri' => '/restapis/{restapi_id}/stages',
			],
			'input'  => [ 'shape' => 'GetStagesRequest', ],
			'output' => [ 'shape' => 'Stages', ],
			'errors' => [
				[ 'shape' => 'UnauthorizedException', ],
				[ 'shape' => 'NotFoundException', ],
				[ 'shape' => 'TooManyRequestsException', ],
			],
		],
		'GetTags'                    => [
			'name'   => 'GetTags',
			'http'   => [ 'method' => 'GET', 'requestUri' => '/tags/{resource_arn}', ],
			'input'  => [ 'shape' => 'GetTagsRequest', ],
			'output' => [ 'shape' => 'Tags', ],
			'errors' => [
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'UnauthorizedException', ],
				[ 'shape' => 'TooManyRequestsException', ],
				[ 'shape' => 'NotFoundException', ],
				[ 'shape' => 'LimitExceededException', ],
			],
		],
		'GetUsage'                   => [
			'name'   => 'GetUsage',
			'http'   => [
				'method'     => 'GET',
				'requestUri' => '/usageplans/{usageplanId}/usage',
			],
			'input'  => [ 'shape' => 'GetUsageRequest', ],
			'output' => [ 'shape' => 'Usage', ],
			'errors' => [
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'UnauthorizedException', ],
				[ 'shape' => 'NotFoundException', ],
				[ 'shape' => 'TooManyRequestsException', ],
			],
		],
		'GetUsagePlan'               => [
			'name'   => 'GetUsagePlan',
			'http'   => [
				'method'     => 'GET',
				'requestUri' => '/usageplans/{usageplanId}',
			],
			'input'  => [ 'shape' => 'GetUsagePlanRequest', ],
			'output' => [ 'shape' => 'UsagePlan', ],
			'errors' => [
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'UnauthorizedException', ],
				[ 'shape' => 'NotFoundException', ],
				[ 'shape' => 'TooManyRequestsException', ],
			],
		],
		'GetUsagePlanKey'            => [
			'name'   => 'GetUsagePlanKey',
			'http'   => [
				'method'       => 'GET',
				'requestUri'   => '/usageplans/{usageplanId}/keys/{keyId}',
				'responseCode' => 200,
			],
			'input'  => [ 'shape' => 'GetUsagePlanKeyRequest', ],
			'output' => [ 'shape' => 'UsagePlanKey', ],
			'errors' => [
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'UnauthorizedException', ],
				[ 'shape' => 'NotFoundException', ],
				[ 'shape' => 'TooManyRequestsException', ],
			],
		],
		'GetUsagePlanKeys'           => [
			'name'   => 'GetUsagePlanKeys',
			'http'   => [
				'method'     => 'GET',
				'requestUri' => '/usageplans/{usageplanId}/keys',
			],
			'input'  => [ 'shape' => 'GetUsagePlanKeysRequest', ],
			'output' => [ 'shape' => 'UsagePlanKeys', ],
			'errors' => [
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'UnauthorizedException', ],
				[ 'shape' => 'NotFoundException', ],
				[ 'shape' => 'TooManyRequestsException', ],
			],
		],
		'GetUsagePlans'              => [
			'name'   => 'GetUsagePlans',
			'http'   => [ 'method' => 'GET', 'requestUri' => '/usageplans', ],
			'input'  => [ 'shape' => 'GetUsagePlansRequest', ],
			'output' => [ 'shape' => 'UsagePlans', ],
			'errors' => [
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'UnauthorizedException', ],
				[ 'shape' => 'TooManyRequestsException', ],
				[ 'shape' => 'ConflictException', ],
				[ 'shape' => 'NotFoundException', ],
			],
		],
		'GetVpcLink'                 => [
			'name'   => 'GetVpcLink',
			'http'   => [ 'method' => 'GET', 'requestUri' => '/vpclinks/{vpclink_id}', ],
			'input'  => [ 'shape' => 'GetVpcLinkRequest', ],
			'output' => [ 'shape' => 'VpcLink', ],
			'errors' => [
				[ 'shape' => 'UnauthorizedException', ],
				[ 'shape' => 'NotFoundException', ],
				[ 'shape' => 'TooManyRequestsException', ],
			],
		],
		'GetVpcLinks'                => [
			'name'   => 'GetVpcLinks',
			'http'   => [ 'method' => 'GET', 'requestUri' => '/vpclinks', ],
			'input'  => [ 'shape' => 'GetVpcLinksRequest', ],
			'output' => [ 'shape' => 'VpcLinks', ],
			'errors' => [
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'UnauthorizedException', ],
				[ 'shape' => 'TooManyRequestsException', ],
			],
		],
		'ImportApiKeys'              => [
			'name'   => 'ImportApiKeys',
			'http'   => [
				'method'       => 'POST',
				'requestUri'   => '/apikeys?mode=import',
				'responseCode' => 201,
			],
			'input'  => [ 'shape' => 'ImportApiKeysRequest', ],
			'output' => [ 'shape' => 'ApiKeyIds', ],
			'errors' => [
				[ 'shape' => 'UnauthorizedException', ],
				[ 'shape' => 'NotFoundException', ],
				[ 'shape' => 'TooManyRequestsException', ],
				[ 'shape' => 'LimitExceededException', ],
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'ConflictException', ],
			],
		],
		'ImportDocumentationParts'   => [
			'name'   => 'ImportDocumentationParts',
			'http'   => [
				'method'     => 'PUT',
				'requestUri' => '/restapis/{restapi_id}/documentation/parts',
			],
			'input'  => [ 'shape' => 'ImportDocumentationPartsRequest', ],
			'output' => [ 'shape' => 'DocumentationPartIds', ],
			'errors' => [
				[ 'shape' => 'UnauthorizedException', ],
				[ 'shape' => 'NotFoundException', ],
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'LimitExceededException', ],
				[ 'shape' => 'TooManyRequestsException', ],
			],
		],
		'ImportRestApi'              => [
			'name'   => 'ImportRestApi',
			'http'   => [
				'method'       => 'POST',
				'requestUri'   => '/restapis?mode=import',
				'responseCode' => 201,
			],
			'input'  => [ 'shape' => 'ImportRestApiRequest', ],
			'output' => [ 'shape' => 'RestApi', ],
			'errors' => [
				[ 'shape' => 'UnauthorizedException', ],
				[ 'shape' => 'LimitExceededException', ],
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'TooManyRequestsException', ],
				[ 'shape' => 'ConflictException', ],
			],
		],
		'PutGatewayResponse'         => [
			'name'   => 'PutGatewayResponse',
			'http'   => [
				'method'       => 'PUT',
				'requestUri'   => '/restapis/{restapi_id}/gatewayresponses/{response_type}',
				'responseCode' => 201,
			],
			'input'  => [ 'shape' => 'PutGatewayResponseRequest', ],
			'output' => [ 'shape' => 'GatewayResponse', ],
			'errors' => [
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'UnauthorizedException', ],
				[ 'shape' => 'NotFoundException', ],
				[ 'shape' => 'LimitExceededException', ],
				[ 'shape' => 'TooManyRequestsException', ],
			],
		],
		'PutIntegration'             => [
			'name'   => 'PutIntegration',
			'http'   => [
				'method'       => 'PUT',
				'requestUri'   => '/restapis/{restapi_id}/resources/{resource_id}/methods/{http_method}/integration',
				'responseCode' => 201,
			],
			'input'  => [ 'shape' => 'PutIntegrationRequest', ],
			'output' => [ 'shape' => 'Integration', ],
			'errors' => [
				[ 'shape' => 'UnauthorizedException', ],
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'ConflictException', ],
				[ 'shape' => 'NotFoundException', ],
				[ 'shape' => 'TooManyRequestsException', ],
			],
		],
		'PutIntegrationResponse'     => [
			'name'   => 'PutIntegrationResponse',
			'http'   => [
				'method'       => 'PUT',
				'requestUri'   => '/restapis/{restapi_id}/resources/{resource_id}/methods/{http_method}/integration/responses/{status_code}',
				'responseCode' => 201,
			],
			'input'  => [ 'shape' => 'PutIntegrationResponseRequest', ],
			'output' => [ 'shape' => 'IntegrationResponse', ],
			'errors' => [
				[ 'shape' => 'UnauthorizedException', ],
				[ 'shape' => 'NotFoundException', ],
				[ 'shape' => 'LimitExceededException', ],
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'TooManyRequestsException', ],
				[ 'shape' => 'ConflictException', ],
			],
		],
		'PutMethod'                  => [
			'name'   => 'PutMethod',
			'http'   => [
				'method'       => 'PUT',
				'requestUri'   => '/restapis/{restapi_id}/resources/{resource_id}/methods/{http_method}',
				'responseCode' => 201,
			],
			'input'  => [ 'shape' => 'PutMethodRequest', ],
			'output' => [ 'shape' => 'Method', ],
			'errors' => [
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'UnauthorizedException', ],
				[ 'shape' => 'NotFoundException', ],
				[ 'shape' => 'ConflictException', ],
				[ 'shape' => 'LimitExceededException', ],
				[ 'shape' => 'TooManyRequestsException', ],
			],
		],
		'PutMethodResponse'          => [
			'name'   => 'PutMethodResponse',
			'http'   => [
				'method'       => 'PUT',
				'requestUri'   => '/restapis/{restapi_id}/resources/{resource_id}/methods/{http_method}/responses/{status_code}',
				'responseCode' => 201,
			],
			'input'  => [ 'shape' => 'PutMethodResponseRequest', ],
			'output' => [ 'shape' => 'MethodResponse', ],
			'errors' => [
				[ 'shape' => 'UnauthorizedException', ],
				[ 'shape' => 'NotFoundException', ],
				[ 'shape' => 'ConflictException', ],
				[ 'shape' => 'LimitExceededException', ],
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'TooManyRequestsException', ],
			],
		],
		'PutRestApi'                 => [
			'name'   => 'PutRestApi',
			'http'   => [ 'method' => 'PUT', 'requestUri' => '/restapis/{restapi_id}', ],
			'input'  => [ 'shape' => 'PutRestApiRequest', ],
			'output' => [ 'shape' => 'RestApi', ],
			'errors' => [
				[ 'shape' => 'UnauthorizedException', ],
				[ 'shape' => 'LimitExceededException', ],
				[ 'shape' => 'NotFoundException', ],
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'TooManyRequestsException', ],
				[ 'shape' => 'ConflictException', ],
			],
		],
		'TagResource'                => [
			'name'   => 'TagResource',
			'http'   => [
				'method'       => 'PUT',
				'requestUri'   => '/tags/{resource_arn}',
				'responseCode' => 204,
			],
			'input'  => [ 'shape' => 'TagResourceRequest', ],
			'errors' => [
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'UnauthorizedException', ],
				[ 'shape' => 'TooManyRequestsException', ],
				[ 'shape' => 'NotFoundException', ],
				[ 'shape' => 'LimitExceededException', ],
				[ 'shape' => 'ConflictException', ],
			],
		],
		'TestInvokeAuthorizer'       => [
			'name'   => 'TestInvokeAuthorizer',
			'http'   => [
				'method'     => 'POST',
				'requestUri' => '/restapis/{restapi_id}/authorizers/{authorizer_id}',
			],
			'input'  => [ 'shape' => 'TestInvokeAuthorizerRequest', ],
			'output' => [ 'shape' => 'TestInvokeAuthorizerResponse', ],
			'errors' => [
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'UnauthorizedException', ],
				[ 'shape' => 'NotFoundException', ],
				[ 'shape' => 'TooManyRequestsException', ],
			],
		],
		'TestInvokeMethod'           => [
			'name'   => 'TestInvokeMethod',
			'http'   => [
				'method'     => 'POST',
				'requestUri' => '/restapis/{restapi_id}/resources/{resource_id}/methods/{http_method}',
			],
			'input'  => [ 'shape' => 'TestInvokeMethodRequest', ],
			'output' => [ 'shape' => 'TestInvokeMethodResponse', ],
			'errors' => [
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'UnauthorizedException', ],
				[ 'shape' => 'NotFoundException', ],
				[ 'shape' => 'TooManyRequestsException', ],
			],
		],
		'UntagResource'              => [
			'name'   => 'UntagResource',
			'http'   => [
				'method'       => 'DELETE',
				'requestUri'   => '/tags/{resource_arn}',
				'responseCode' => 204,
			],
			'input'  => [ 'shape' => 'UntagResourceRequest', ],
			'errors' => [
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'UnauthorizedException', ],
				[ 'shape' => 'TooManyRequestsException', ],
				[ 'shape' => 'NotFoundException', ],
				[ 'shape' => 'ConflictException', ],
			],
		],
		'UpdateAccount'              => [
			'name'   => 'UpdateAccount',
			'http'   => [ 'method' => 'PATCH', 'requestUri' => '/account', ],
			'input'  => [ 'shape' => 'UpdateAccountRequest', ],
			'output' => [ 'shape' => 'Account', ],
			'errors' => [
				[ 'shape' => 'UnauthorizedException', ],
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'NotFoundException', ],
				[ 'shape' => 'TooManyRequestsException', ],
			],
		],
		'UpdateApiKey'               => [
			'name'   => 'UpdateApiKey',
			'http'   => [ 'method' => 'PATCH', 'requestUri' => '/apikeys/{api_Key}', ],
			'input'  => [ 'shape' => 'UpdateApiKeyRequest', ],
			'output' => [ 'shape' => 'ApiKey', ],
			'errors' => [
				[ 'shape' => 'UnauthorizedException', ],
				[ 'shape' => 'NotFoundException', ],
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'TooManyRequestsException', ],
				[ 'shape' => 'ConflictException', ],
			],
		],
		'UpdateAuthorizer'           => [
			'name'   => 'UpdateAuthorizer',
			'http'   => [
				'method'     => 'PATCH',
				'requestUri' => '/restapis/{restapi_id}/authorizers/{authorizer_id}',
			],
			'input'  => [ 'shape' => 'UpdateAuthorizerRequest', ],
			'output' => [ 'shape' => 'Authorizer', ],
			'errors' => [
				[ 'shape' => 'UnauthorizedException', ],
				[ 'shape' => 'NotFoundException', ],
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'TooManyRequestsException', ],
			],
		],
		'UpdateBasePathMapping'      => [
			'name'   => 'UpdateBasePathMapping',
			'http'   => [
				'method'     => 'PATCH',
				'requestUri' => '/domainnames/{domain_name}/basepathmappings/{base_path}',
			],
			'input'  => [ 'shape' => 'UpdateBasePathMappingRequest', ],
			'output' => [ 'shape' => 'BasePathMapping', ],
			'errors' => [
				[ 'shape' => 'UnauthorizedException', ],
				[ 'shape' => 'NotFoundException', ],
				[ 'shape' => 'ConflictException', ],
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'TooManyRequestsException', ],
			],
		],
		'UpdateClientCertificate'    => [
			'name'   => 'UpdateClientCertificate',
			'http'   => [
				'method'     => 'PATCH',
				'requestUri' => '/clientcertificates/{clientcertificate_id}',
			],
			'input'  => [ 'shape' => 'UpdateClientCertificateRequest', ],
			'output' => [ 'shape' => 'ClientCertificate', ],
			'errors' => [
				[ 'shape' => 'UnauthorizedException', ],
				[ 'shape' => 'TooManyRequestsException', ],
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'NotFoundException', ],
			],
		],
		'UpdateDeployment'           => [
			'name'   => 'UpdateDeployment',
			'http'   => [
				'method'     => 'PATCH',
				'requestUri' => '/restapis/{restapi_id}/deployments/{deployment_id}',
			],
			'input'  => [ 'shape' => 'UpdateDeploymentRequest', ],
			'output' => [ 'shape' => 'Deployment', ],
			'errors' => [
				[ 'shape' => 'UnauthorizedException', ],
				[ 'shape' => 'NotFoundException', ],
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'TooManyRequestsException', ],
				[ 'shape' => 'ServiceUnavailableException', ],
			],
		],
		'UpdateDocumentationPart'    => [
			'name'   => 'UpdateDocumentationPart',
			'http'   => [
				'method'     => 'PATCH',
				'requestUri' => '/restapis/{restapi_id}/documentation/parts/{part_id}',
			],
			'input'  => [ 'shape' => 'UpdateDocumentationPartRequest', ],
			'output' => [ 'shape' => 'DocumentationPart', ],
			'errors' => [
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'UnauthorizedException', ],
				[ 'shape' => 'NotFoundException', ],
				[ 'shape' => 'ConflictException', ],
				[ 'shape' => 'LimitExceededException', ],
				[ 'shape' => 'TooManyRequestsException', ],
			],
		],
		'UpdateDocumentationVersion' => [
			'name'   => 'UpdateDocumentationVersion',
			'http'   => [
				'method'     => 'PATCH',
				'requestUri' => '/restapis/{restapi_id}/documentation/versions/{doc_version}',
			],
			'input'  => [ 'shape' => 'UpdateDocumentationVersionRequest', ],
			'output' => [ 'shape' => 'DocumentationVersion', ],
			'errors' => [
				[ 'shape' => 'UnauthorizedException', ],
				[ 'shape' => 'NotFoundException', ],
				[ 'shape' => 'ConflictException', ],
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'TooManyRequestsException', ],
			],
		],
		'UpdateDomainName'           => [
			'name'   => 'UpdateDomainName',
			'http'   => [
				'method'     => 'PATCH',
				'requestUri' => '/domainnames/{domain_name}',
			],
			'input'  => [ 'shape' => 'UpdateDomainNameRequest', ],
			'output' => [ 'shape' => 'DomainName', ],
			'errors' => [
				[ 'shape' => 'UnauthorizedException', ],
				[ 'shape' => 'NotFoundException', ],
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'ConflictException', ],
				[ 'shape' => 'TooManyRequestsException', ],
			],
		],
		'UpdateGatewayResponse'      => [
			'name'   => 'UpdateGatewayResponse',
			'http'   => [
				'method'     => 'PATCH',
				'requestUri' => '/restapis/{restapi_id}/gatewayresponses/{response_type}',
			],
			'input'  => [ 'shape' => 'UpdateGatewayResponseRequest', ],
			'output' => [ 'shape' => 'GatewayResponse', ],
			'errors' => [
				[ 'shape' => 'UnauthorizedException', ],
				[ 'shape' => 'NotFoundException', ],
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'TooManyRequestsException', ],
			],
		],
		'UpdateIntegration'          => [
			'name'   => 'UpdateIntegration',
			'http'   => [
				'method'     => 'PATCH',
				'requestUri' => '/restapis/{restapi_id}/resources/{resource_id}/methods/{http_method}/integration',
			],
			'input'  => [ 'shape' => 'UpdateIntegrationRequest', ],
			'output' => [ 'shape' => 'Integration', ],
			'errors' => [
				[ 'shape' => 'UnauthorizedException', ],
				[ 'shape' => 'NotFoundException', ],
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'TooManyRequestsException', ],
				[ 'shape' => 'ConflictException', ],
			],
		],
		'UpdateIntegrationResponse'  => [
			'name'   => 'UpdateIntegrationResponse',
			'http'   => [
				'method'     => 'PATCH',
				'requestUri' => '/restapis/{restapi_id}/resources/{resource_id}/methods/{http_method}/integration/responses/{status_code}',
			],
			'input'  => [ 'shape' => 'UpdateIntegrationResponseRequest', ],
			'output' => [ 'shape' => 'IntegrationResponse', ],
			'errors' => [
				[ 'shape' => 'UnauthorizedException', ],
				[ 'shape' => 'NotFoundException', ],
				[ 'shape' => 'ConflictException', ],
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'TooManyRequestsException', ],
			],
		],
		'UpdateMethod'               => [
			'name'   => 'UpdateMethod',
			'http'   => [
				'method'     => 'PATCH',
				'requestUri' => '/restapis/{restapi_id}/resources/{resource_id}/methods/{http_method}',
			],
			'input'  => [ 'shape' => 'UpdateMethodRequest', ],
			'output' => [ 'shape' => 'Method', ],
			'errors' => [
				[ 'shape' => 'UnauthorizedException', ],
				[ 'shape' => 'NotFoundException', ],
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'ConflictException', ],
				[ 'shape' => 'TooManyRequestsException', ],
			],
		],
		'UpdateMethodResponse'       => [
			'name'   => 'UpdateMethodResponse',
			'http'   => [
				'method'       => 'PATCH',
				'requestUri'   => '/restapis/{restapi_id}/resources/{resource_id}/methods/{http_method}/responses/{status_code}',
				'responseCode' => 201,
			],
			'input'  => [ 'shape' => 'UpdateMethodResponseRequest', ],
			'output' => [ 'shape' => 'MethodResponse', ],
			'errors' => [
				[ 'shape' => 'UnauthorizedException', ],
				[ 'shape' => 'NotFoundException', ],
				[ 'shape' => 'ConflictException', ],
				[ 'shape' => 'LimitExceededException', ],
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'TooManyRequestsException', ],
			],
		],
		'UpdateModel'                => [
			'name'   => 'UpdateModel',
			'http'   => [
				'method'     => 'PATCH',
				'requestUri' => '/restapis/{restapi_id}/models/{model_name}',
			],
			'input'  => [ 'shape' => 'UpdateModelRequest', ],
			'output' => [ 'shape' => 'Model', ],
			'errors' => [
				[ 'shape' => 'UnauthorizedException', ],
				[ 'shape' => 'NotFoundException', ],
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'ConflictException', ],
				[ 'shape' => 'TooManyRequestsException', ],
			],
		],
		'UpdateRequestValidator'     => [
			'name'   => 'UpdateRequestValidator',
			'http'   => [
				'method'     => 'PATCH',
				'requestUri' => '/restapis/{restapi_id}/requestvalidators/{requestvalidator_id}',
			],
			'input'  => [ 'shape' => 'UpdateRequestValidatorRequest', ],
			'output' => [ 'shape' => 'RequestValidator', ],
			'errors' => [
				[ 'shape' => 'UnauthorizedException', ],
				[ 'shape' => 'NotFoundException', ],
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'TooManyRequestsException', ],
			],
		],
		'UpdateResource'             => [
			'name'   => 'UpdateResource',
			'http'   => [
				'method'     => 'PATCH',
				'requestUri' => '/restapis/{restapi_id}/resources/{resource_id}',
			],
			'input'  => [ 'shape' => 'UpdateResourceRequest', ],
			'output' => [ 'shape' => 'Resource', ],
			'errors' => [
				[ 'shape' => 'UnauthorizedException', ],
				[ 'shape' => 'NotFoundException', ],
				[ 'shape' => 'ConflictException', ],
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'TooManyRequestsException', ],
			],
		],
		'UpdateRestApi'              => [
			'name'   => 'UpdateRestApi',
			'http'   => [
				'method'     => 'PATCH',
				'requestUri' => '/restapis/{restapi_id}',
			],
			'input'  => [ 'shape' => 'UpdateRestApiRequest', ],
			'output' => [ 'shape' => 'RestApi', ],
			'errors' => [
				[ 'shape' => 'UnauthorizedException', ],
				[ 'shape' => 'NotFoundException', ],
				[ 'shape' => 'ConflictException', ],
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'TooManyRequestsException', ],
			],
		],
		'UpdateStage'                => [
			'name'   => 'UpdateStage',
			'http'   => [
				'method'     => 'PATCH',
				'requestUri' => '/restapis/{restapi_id}/stages/{stage_name}',
			],
			'input'  => [ 'shape' => 'UpdateStageRequest', ],
			'output' => [ 'shape' => 'Stage', ],
			'errors' => [
				[ 'shape' => 'UnauthorizedException', ],
				[ 'shape' => 'NotFoundException', ],
				[ 'shape' => 'ConflictException', ],
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'TooManyRequestsException', ],
			],
		],
		'UpdateUsage'                => [
			'name'   => 'UpdateUsage',
			'http'   => [
				'method'     => 'PATCH',
				'requestUri' => '/usageplans/{usageplanId}/keys/{keyId}/usage',
			],
			'input'  => [ 'shape' => 'UpdateUsageRequest', ],
			'output' => [ 'shape' => 'Usage', ],
			'errors' => [
				[ 'shape' => 'UnauthorizedException', ],
				[ 'shape' => 'TooManyRequestsException', ],
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'NotFoundException', ],
			],
		],
		'UpdateUsagePlan'            => [
			'name'   => 'UpdateUsagePlan',
			'http'   => [
				'method'     => 'PATCH',
				'requestUri' => '/usageplans/{usageplanId}',
			],
			'input'  => [ 'shape' => 'UpdateUsagePlanRequest', ],
			'output' => [ 'shape' => 'UsagePlan', ],
			'errors' => [
				[ 'shape' => 'UnauthorizedException', ],
				[ 'shape' => 'TooManyRequestsException', ],
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'NotFoundException', ],
				[ 'shape' => 'ConflictException', ],
			],
		],
		'UpdateVpcLink'              => [
			'name'   => 'UpdateVpcLink',
			'http'   => [
				'method'     => 'PATCH',
				'requestUri' => '/vpclinks/{vpclink_id}',
			],
			'input'  => [ 'shape' => 'UpdateVpcLinkRequest', ],
			'output' => [ 'shape' => 'VpcLink', ],
			'errors' => [
				[ 'shape' => 'UnauthorizedException', ],
				[ 'shape' => 'NotFoundException', ],
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'ConflictException', ],
				[ 'shape' => 'TooManyRequestsException', ],
			],
		],
	],
	'shapes'     => [
		'AccessLogSettings'                      => [
			'type'    => 'structure',
			'members' => [
				'format'         => [ 'shape' => 'String', ],
				'destinationArn' => [ 'shape' => 'String', ],
			],
		],
		'Account'                                => [
			'type'    => 'structure',
			'members' => [
				'cloudwatchRoleArn' => [ 'shape' => 'String', ],
				'throttleSettings'  => [ 'shape' => 'ThrottleSettings', ],
				'features'          => [ 'shape' => 'ListOfString', ],
				'apiKeyVersion'     => [ 'shape' => 'String', ],
			],
		],
		'ApiKey'                                 => [
			'type'    => 'structure',
			'members' => [
				'id'              => [ 'shape' => 'String', ],
				'value'           => [ 'shape' => 'String', ],
				'name'            => [ 'shape' => 'String', ],
				'customerId'      => [ 'shape' => 'String', ],
				'description'     => [ 'shape' => 'String', ],
				'enabled'         => [ 'shape' => 'Boolean', ],
				'createdDate'     => [ 'shape' => 'Timestamp', ],
				'lastUpdatedDate' => [ 'shape' => 'Timestamp', ],
				'stageKeys'       => [ 'shape' => 'ListOfString', ],
				'tags'            => [ 'shape' => 'MapOfStringToString', ],
			],
		],
		'ApiKeyIds'                              => [
			'type'    => 'structure',
			'members' => [
				'ids'      => [ 'shape' => 'ListOfString', ],
				'warnings' => [ 'shape' => 'ListOfString', ],
			],
		],
		'ApiKeySourceType'                       => [ 'type' => 'string', 'enum' => [ 'HEADER', 'AUTHORIZER', ], ],
		'ApiKeys'                                => [
			'type'    => 'structure',
			'members' => [
				'warnings' => [ 'shape' => 'ListOfString', ],
				'position' => [ 'shape' => 'String', ],
				'items'    => [ 'shape' => 'ListOfApiKey', 'locationName' => 'item', ],
			],
		],
		'ApiKeysFormat'                          => [ 'type' => 'string', 'enum' => [ 'csv', ], ],
		'ApiStage'                               => [
			'type'    => 'structure',
			'members' => [
				'apiId'    => [ 'shape' => 'String', ],
				'stage'    => [ 'shape' => 'String', ],
				'throttle' => [ 'shape' => 'MapOfApiStageThrottleSettings', ],
			],
		],
		'Authorizer'                             => [
			'type'    => 'structure',
			'members' => [
				'id'                           => [ 'shape' => 'String', ],
				'name'                         => [ 'shape' => 'String', ],
				'type'                         => [ 'shape' => 'AuthorizerType', ],
				'providerARNs'                 => [ 'shape' => 'ListOfARNs', ],
				'authType'                     => [ 'shape' => 'String', ],
				'authorizerUri'                => [ 'shape' => 'String', ],
				'authorizerCredentials'        => [ 'shape' => 'String', ],
				'identitySource'               => [ 'shape' => 'String', ],
				'identityValidationExpression' => [ 'shape' => 'String', ],
				'authorizerResultTtlInSeconds' => [ 'shape' => 'NullableInteger', ],
			],
		],
		'AuthorizerType'                         => [
			'type' => 'string',
			'enum' => [ 'TOKEN', 'REQUEST', 'COGNITO_USER_POOLS', ],
		],
		'Authorizers'                            => [
			'type'    => 'structure',
			'members' => [
				'position' => [ 'shape' => 'String', ],
				'items'    => [
					'shape'        => 'ListOfAuthorizer',
					'locationName' => 'item',
				],
			],
		],
		'BadRequestException'                    => [
			'type'      => 'structure',
			'members'   => [ 'message' => [ 'shape' => 'String', ], ],
			'error'     => [ 'httpStatusCode' => 400, ],
			'exception' => true,
		],
		'BasePathMapping'                        => [
			'type'    => 'structure',
			'members' => [
				'basePath'  => [ 'shape' => 'String', ],
				'restApiId' => [ 'shape' => 'String', ],
				'stage'     => [ 'shape' => 'String', ],
			],
		],
		'BasePathMappings'                       => [
			'type'    => 'structure',
			'members' => [
				'position' => [ 'shape' => 'String', ],
				'items'    => [
					'shape'        => 'ListOfBasePathMapping',
					'locationName' => 'item',
				],
			],
		],
		'Blob'                                   => [ 'type' => 'blob', ],
		'Boolean'                                => [ 'type' => 'boolean', ],
		'CacheClusterSize'                       => [
			'type' => 'string',
			'enum' => [ '0.5', '1.6', '6.1', '13.5', '28.4', '58.2', '118', '237', ],
		],
		'CacheClusterStatus'                     => [
			'type' => 'string',
			'enum' => [
				'CREATE_IN_PROGRESS',
				'AVAILABLE',
				'DELETE_IN_PROGRESS',
				'NOT_AVAILABLE',
				'FLUSH_IN_PROGRESS',
			],
		],
		'CanarySettings'                         => [
			'type'    => 'structure',
			'members' => [
				'percentTraffic'         => [ 'shape' => 'Double', ],
				'deploymentId'           => [ 'shape' => 'String', ],
				'stageVariableOverrides' => [ 'shape' => 'MapOfStringToString', ],
				'useStageCache'          => [ 'shape' => 'Boolean', ],
			],
		],
		'ClientCertificate'                      => [
			'type'    => 'structure',
			'members' => [
				'clientCertificateId'   => [ 'shape' => 'String', ],
				'description'           => [ 'shape' => 'String', ],
				'pemEncodedCertificate' => [ 'shape' => 'String', ],
				'createdDate'           => [ 'shape' => 'Timestamp', ],
				'expirationDate'        => [ 'shape' => 'Timestamp', ],
				'tags'                  => [ 'shape' => 'MapOfStringToString', ],
			],
		],
		'ClientCertificates'                     => [
			'type'    => 'structure',
			'members' => [
				'position' => [ 'shape' => 'String', ],
				'items'    => [
					'shape'        => 'ListOfClientCertificate',
					'locationName' => 'item',
				],
			],
		],
		'ConflictException'                      => [
			'type'      => 'structure',
			'members'   => [ 'message' => [ 'shape' => 'String', ], ],
			'error'     => [ 'httpStatusCode' => 409, ],
			'exception' => true,
		],
		'ConnectionType'                         => [ 'type' => 'string', 'enum' => [ 'INTERNET', 'VPC_LINK', ], ],
		'ContentHandlingStrategy'                => [
			'type' => 'string',
			'enum' => [ 'CONVERT_TO_BINARY', 'CONVERT_TO_TEXT', ],
		],
		'CreateApiKeyRequest'                    => [
			'type'    => 'structure',
			'members' => [
				'name'               => [ 'shape' => 'String', ],
				'description'        => [ 'shape' => 'String', ],
				'enabled'            => [ 'shape' => 'Boolean', ],
				'generateDistinctId' => [ 'shape' => 'Boolean', ],
				'value'              => [ 'shape' => 'String', ],
				'stageKeys'          => [ 'shape' => 'ListOfStageKeys', ],
				'customerId'         => [ 'shape' => 'String', ],
				'tags'               => [ 'shape' => 'MapOfStringToString', ],
			],
		],
		'CreateAuthorizerRequest'                => [
			'type'     => 'structure',
			'required' => [ 'restApiId', 'name', 'type', ],
			'members'  => [
				'restApiId'                    => [
					'shape'        => 'String',
					'location'     => 'uri',
					'locationName' => 'restapi_id',
				],
				'name'                         => [ 'shape' => 'String', ],
				'type'                         => [ 'shape' => 'AuthorizerType', ],
				'providerARNs'                 => [ 'shape' => 'ListOfARNs', ],
				'authType'                     => [ 'shape' => 'String', ],
				'authorizerUri'                => [ 'shape' => 'String', ],
				'authorizerCredentials'        => [ 'shape' => 'String', ],
				'identitySource'               => [ 'shape' => 'String', ],
				'identityValidationExpression' => [ 'shape' => 'String', ],
				'authorizerResultTtlInSeconds' => [ 'shape' => 'NullableInteger', ],
			],
		],
		'CreateBasePathMappingRequest'           => [
			'type'     => 'structure',
			'required' => [ 'domainName', 'restApiId', ],
			'members'  => [
				'domainName' => [
					'shape'        => 'String',
					'location'     => 'uri',
					'locationName' => 'domain_name',
				],
				'basePath'   => [ 'shape' => 'String', ],
				'restApiId'  => [ 'shape' => 'String', ],
				'stage'      => [ 'shape' => 'String', ],
			],
		],
		'CreateDeploymentRequest'                => [
			'type'     => 'structure',
			'required' => [ 'restApiId', ],
			'members'  => [
				'restApiId'           => [
					'shape'        => 'String',
					'location'     => 'uri',
					'locationName' => 'restapi_id',
				],
				'stageName'           => [ 'shape' => 'String', ],
				'stageDescription'    => [ 'shape' => 'String', ],
				'description'         => [ 'shape' => 'String', ],
				'cacheClusterEnabled' => [ 'shape' => 'NullableBoolean', ],
				'cacheClusterSize'    => [ 'shape' => 'CacheClusterSize', ],
				'variables'           => [ 'shape' => 'MapOfStringToString', ],
				'canarySettings'      => [ 'shape' => 'DeploymentCanarySettings', ],
				'tracingEnabled'      => [ 'shape' => 'NullableBoolean', ],
			],
		],
		'CreateDocumentationPartRequest'         => [
			'type'     => 'structure',
			'required' => [ 'restApiId', 'location', 'properties', ],
			'members'  => [
				'restApiId'  => [
					'shape'        => 'String',
					'location'     => 'uri',
					'locationName' => 'restapi_id',
				],
				'location'   => [ 'shape' => 'DocumentationPartLocation', ],
				'properties' => [ 'shape' => 'String', ],
			],
		],
		'CreateDocumentationVersionRequest'      => [
			'type'     => 'structure',
			'required' => [ 'restApiId', 'documentationVersion', ],
			'members'  => [
				'restApiId'            => [
					'shape'        => 'String',
					'location'     => 'uri',
					'locationName' => 'restapi_id',
				],
				'documentationVersion' => [ 'shape' => 'String', ],
				'stageName'            => [ 'shape' => 'String', ],
				'description'          => [ 'shape' => 'String', ],
			],
		],
		'CreateDomainNameRequest'                => [
			'type'     => 'structure',
			'required' => [ 'domainName', ],
			'members'  => [
				'domainName'              => [ 'shape' => 'String', ],
				'certificateName'         => [ 'shape' => 'String', ],
				'certificateBody'         => [ 'shape' => 'String', ],
				'certificatePrivateKey'   => [ 'shape' => 'String', ],
				'certificateChain'        => [ 'shape' => 'String', ],
				'certificateArn'          => [ 'shape' => 'String', ],
				'regionalCertificateName' => [ 'shape' => 'String', ],
				'regionalCertificateArn'  => [ 'shape' => 'String', ],
				'endpointConfiguration'   => [ 'shape' => 'EndpointConfiguration', ],
				'tags'                    => [ 'shape' => 'MapOfStringToString', ],
				'securityPolicy'          => [ 'shape' => 'SecurityPolicy', ],
			],
		],
		'CreateModelRequest'                     => [
			'type'     => 'structure',
			'required' => [ 'restApiId', 'name', 'contentType', ],
			'members'  => [
				'restApiId'   => [
					'shape'        => 'String',
					'location'     => 'uri',
					'locationName' => 'restapi_id',
				],
				'name'        => [ 'shape' => 'String', ],
				'description' => [ 'shape' => 'String', ],
				'schema'      => [ 'shape' => 'String', ],
				'contentType' => [ 'shape' => 'String', ],
			],
		],
		'CreateRequestValidatorRequest'          => [
			'type'     => 'structure',
			'required' => [ 'restApiId', ],
			'members'  => [
				'restApiId'                 => [
					'shape'        => 'String',
					'location'     => 'uri',
					'locationName' => 'restapi_id',
				],
				'name'                      => [ 'shape' => 'String', ],
				'validateRequestBody'       => [ 'shape' => 'Boolean', ],
				'validateRequestParameters' => [ 'shape' => 'Boolean', ],
			],
		],
		'CreateResourceRequest'                  => [
			'type'     => 'structure',
			'required' => [ 'restApiId', 'parentId', 'pathPart', ],
			'members'  => [
				'restApiId' => [
					'shape'        => 'String',
					'location'     => 'uri',
					'locationName' => 'restapi_id',
				],
				'parentId'  => [
					'shape'        => 'String',
					'location'     => 'uri',
					'locationName' => 'parent_id',
				],
				'pathPart'  => [ 'shape' => 'String', ],
			],
		],
		'CreateRestApiRequest'                   => [
			'type'     => 'structure',
			'required' => [ 'name', ],
			'members'  => [
				'name'                   => [ 'shape' => 'String', ],
				'description'            => [ 'shape' => 'String', ],
				'version'                => [ 'shape' => 'String', ],
				'cloneFrom'              => [ 'shape' => 'String', ],
				'binaryMediaTypes'       => [ 'shape' => 'ListOfString', ],
				'minimumCompressionSize' => [ 'shape' => 'NullableInteger', ],
				'apiKeySource'           => [ 'shape' => 'ApiKeySourceType', ],
				'endpointConfiguration'  => [ 'shape' => 'EndpointConfiguration', ],
				'policy'                 => [ 'shape' => 'String', ],
				'tags'                   => [ 'shape' => 'MapOfStringToString', ],
			],
		],
		'CreateStageRequest'                     => [
			'type'     => 'structure',
			'required' => [ 'restApiId', 'stageName', 'deploymentId', ],
			'members'  => [
				'restApiId'            => [
					'shape'        => 'String',
					'location'     => 'uri',
					'locationName' => 'restapi_id',
				],
				'stageName'            => [ 'shape' => 'String', ],
				'deploymentId'         => [ 'shape' => 'String', ],
				'description'          => [ 'shape' => 'String', ],
				'cacheClusterEnabled'  => [ 'shape' => 'Boolean', ],
				'cacheClusterSize'     => [ 'shape' => 'CacheClusterSize', ],
				'variables'            => [ 'shape' => 'MapOfStringToString', ],
				'documentationVersion' => [ 'shape' => 'String', ],
				'canarySettings'       => [ 'shape' => 'CanarySettings', ],
				'tracingEnabled'       => [ 'shape' => 'Boolean', ],
				'tags'                 => [ 'shape' => 'MapOfStringToString', ],
			],
		],
		'CreateUsagePlanKeyRequest'              => [
			'type'     => 'structure',
			'required' => [ 'usagePlanId', 'keyId', 'keyType', ],
			'members'  => [
				'usagePlanId' => [
					'shape'        => 'String',
					'location'     => 'uri',
					'locationName' => 'usageplanId',
				],
				'keyId'       => [ 'shape' => 'String', ],
				'keyType'     => [ 'shape' => 'String', ],
			],
		],
		'CreateUsagePlanRequest'                 => [
			'type'     => 'structure',
			'required' => [ 'name', ],
			'members'  => [
				'name'        => [ 'shape' => 'String', ],
				'description' => [ 'shape' => 'String', ],
				'apiStages'   => [ 'shape' => 'ListOfApiStage', ],
				'throttle'    => [ 'shape' => 'ThrottleSettings', ],
				'quota'       => [ 'shape' => 'QuotaSettings', ],
				'tags'        => [ 'shape' => 'MapOfStringToString', ],
			],
		],
		'CreateVpcLinkRequest'                   => [
			'type'     => 'structure',
			'required' => [ 'name', 'targetArns', ],
			'members'  => [
				'name'        => [ 'shape' => 'String', ],
				'description' => [ 'shape' => 'String', ],
				'targetArns'  => [ 'shape' => 'ListOfString', ],
				'tags'        => [ 'shape' => 'MapOfStringToString', ],
			],
		],
		'DeleteApiKeyRequest'                    => [
			'type'     => 'structure',
			'required' => [ 'apiKey', ],
			'members'  => [
				'apiKey' => [
					'shape'        => 'String',
					'location'     => 'uri',
					'locationName' => 'api_Key',
				],
			],
		],
		'DeleteAuthorizerRequest'                => [
			'type'     => 'structure',
			'required' => [ 'restApiId', 'authorizerId', ],
			'members'  => [
				'restApiId'    => [
					'shape'        => 'String',
					'location'     => 'uri',
					'locationName' => 'restapi_id',
				],
				'authorizerId' => [
					'shape'        => 'String',
					'location'     => 'uri',
					'locationName' => 'authorizer_id',
				],
			],
		],
		'DeleteBasePathMappingRequest'           => [
			'type'     => 'structure',
			'required' => [ 'domainName', 'basePath', ],
			'members'  => [
				'domainName' => [
					'shape'        => 'String',
					'location'     => 'uri',
					'locationName' => 'domain_name',
				],
				'basePath'   => [
					'shape'        => 'String',
					'location'     => 'uri',
					'locationName' => 'base_path',
				],
			],
		],
		'DeleteClientCertificateRequest'         => [
			'type'     => 'structure',
			'required' => [ 'clientCertificateId', ],
			'members'  => [
				'clientCertificateId' => [
					'shape'        => 'String',
					'location'     => 'uri',
					'locationName' => 'clientcertificate_id',
				],
			],
		],
		'DeleteDeploymentRequest'                => [
			'type'     => 'structure',
			'required' => [ 'restApiId', 'deploymentId', ],
			'members'  => [
				'restApiId'    => [
					'shape'        => 'String',
					'location'     => 'uri',
					'locationName' => 'restapi_id',
				],
				'deploymentId' => [
					'shape'        => 'String',
					'location'     => 'uri',
					'locationName' => 'deployment_id',
				],
			],
		],
		'DeleteDocumentationPartRequest'         => [
			'type'     => 'structure',
			'required' => [ 'restApiId', 'documentationPartId', ],
			'members'  => [
				'restApiId'           => [
					'shape'        => 'String',
					'location'     => 'uri',
					'locationName' => 'restapi_id',
				],
				'documentationPartId' => [
					'shape'        => 'String',
					'location'     => 'uri',
					'locationName' => 'part_id',
				],
			],
		],
		'DeleteDocumentationVersionRequest'      => [
			'type'     => 'structure',
			'required' => [ 'restApiId', 'documentationVersion', ],
			'members'  => [
				'restApiId'            => [
					'shape'        => 'String',
					'location'     => 'uri',
					'locationName' => 'restapi_id',
				],
				'documentationVersion' => [
					'shape'        => 'String',
					'location'     => 'uri',
					'locationName' => 'doc_version',
				],
			],
		],
		'DeleteDomainNameRequest'                => [
			'type'     => 'structure',
			'required' => [ 'domainName', ],
			'members'  => [
				'domainName' => [
					'shape'        => 'String',
					'location'     => 'uri',
					'locationName' => 'domain_name',
				],
			],
		],
		'DeleteGatewayResponseRequest'           => [
			'type'     => 'structure',
			'required' => [ 'restApiId', 'responseType', ],
			'members'  => [
				'restApiId'    => [
					'shape'        => 'String',
					'location'     => 'uri',
					'locationName' => 'restapi_id',
				],
				'responseType' => [
					'shape'        => 'GatewayResponseType',
					'location'     => 'uri',
					'locationName' => 'response_type',
				],
			],
		],
		'DeleteIntegrationRequest'               => [
			'type'     => 'structure',
			'required' => [ 'restApiId', 'resourceId', 'httpMethod', ],
			'members'  => [
				'restApiId'  => [
					'shape'        => 'String',
					'location'     => 'uri',
					'locationName' => 'restapi_id',
				],
				'resourceId' => [
					'shape'        => 'String',
					'location'     => 'uri',
					'locationName' => 'resource_id',
				],
				'httpMethod' => [
					'shape'        => 'String',
					'location'     => 'uri',
					'locationName' => 'http_method',
				],
			],
		],
		'DeleteIntegrationResponseRequest'       => [
			'type'     => 'structure',
			'required' => [
				'restApiId',
				'resourceId',
				'httpMethod',
				'statusCode',
			],
			'members'  => [
				'restApiId'  => [
					'shape'        => 'String',
					'location'     => 'uri',
					'locationName' => 'restapi_id',
				],
				'resourceId' => [
					'shape'        => 'String',
					'location'     => 'uri',
					'locationName' => 'resource_id',
				],
				'httpMethod' => [
					'shape'        => 'String',
					'location'     => 'uri',
					'locationName' => 'http_method',
				],
				'statusCode' => [
					'shape'        => 'StatusCode',
					'location'     => 'uri',
					'locationName' => 'status_code',
				],
			],
		],
		'DeleteMethodRequest'                    => [
			'type'     => 'structure',
			'required' => [ 'restApiId', 'resourceId', 'httpMethod', ],
			'members'  => [
				'restApiId'  => [
					'shape'        => 'String',
					'location'     => 'uri',
					'locationName' => 'restapi_id',
				],
				'resourceId' => [
					'shape'        => 'String',
					'location'     => 'uri',
					'locationName' => 'resource_id',
				],
				'httpMethod' => [
					'shape'        => 'String',
					'location'     => 'uri',
					'locationName' => 'http_method',
				],
			],
		],
		'DeleteMethodResponseRequest'            => [
			'type'     => 'structure',
			'required' => [
				'restApiId',
				'resourceId',
				'httpMethod',
				'statusCode',
			],
			'members'  => [
				'restApiId'  => [
					'shape'        => 'String',
					'location'     => 'uri',
					'locationName' => 'restapi_id',
				],
				'resourceId' => [
					'shape'        => 'String',
					'location'     => 'uri',
					'locationName' => 'resource_id',
				],
				'httpMethod' => [
					'shape'        => 'String',
					'location'     => 'uri',
					'locationName' => 'http_method',
				],
				'statusCode' => [
					'shape'        => 'StatusCode',
					'location'     => 'uri',
					'locationName' => 'status_code',
				],
			],
		],
		'DeleteModelRequest'                     => [
			'type'     => 'structure',
			'required' => [ 'restApiId', 'modelName', ],
			'members'  => [
				'restApiId' => [
					'shape'        => 'String',
					'location'     => 'uri',
					'locationName' => 'restapi_id',
				],
				'modelName' => [
					'shape'        => 'String',
					'location'     => 'uri',
					'locationName' => 'model_name',
				],
			],
		],
		'DeleteRequestValidatorRequest'          => [
			'type'     => 'structure',
			'required' => [ 'restApiId', 'requestValidatorId', ],
			'members'  => [
				'restApiId'          => [
					'shape'        => 'String',
					'location'     => 'uri',
					'locationName' => 'restapi_id',
				],
				'requestValidatorId' => [
					'shape'        => 'String',
					'location'     => 'uri',
					'locationName' => 'requestvalidator_id',
				],
			],
		],
		'DeleteResourceRequest'                  => [
			'type'     => 'structure',
			'required' => [ 'restApiId', 'resourceId', ],
			'members'  => [
				'restApiId'  => [
					'shape'        => 'String',
					'location'     => 'uri',
					'locationName' => 'restapi_id',
				],
				'resourceId' => [
					'shape'        => 'String',
					'location'     => 'uri',
					'locationName' => 'resource_id',
				],
			],
		],
		'DeleteRestApiRequest'                   => [
			'type'     => 'structure',
			'required' => [ 'restApiId', ],
			'members'  => [
				'restApiId' => [
					'shape'        => 'String',
					'location'     => 'uri',
					'locationName' => 'restapi_id',
				],
			],
		],
		'DeleteStageRequest'                     => [
			'type'     => 'structure',
			'required' => [ 'restApiId', 'stageName', ],
			'members'  => [
				'restApiId' => [
					'shape'        => 'String',
					'location'     => 'uri',
					'locationName' => 'restapi_id',
				],
				'stageName' => [
					'shape'        => 'String',
					'location'     => 'uri',
					'locationName' => 'stage_name',
				],
			],
		],
		'DeleteUsagePlanKeyRequest'              => [
			'type'     => 'structure',
			'required' => [ 'usagePlanId', 'keyId', ],
			'members'  => [
				'usagePlanId' => [
					'shape'        => 'String',
					'location'     => 'uri',
					'locationName' => 'usageplanId',
				],
				'keyId'       => [
					'shape'        => 'String',
					'location'     => 'uri',
					'locationName' => 'keyId',
				],
			],
		],
		'DeleteUsagePlanRequest'                 => [
			'type'     => 'structure',
			'required' => [ 'usagePlanId', ],
			'members'  => [
				'usagePlanId' => [
					'shape'        => 'String',
					'location'     => 'uri',
					'locationName' => 'usageplanId',
				],
			],
		],
		'DeleteVpcLinkRequest'                   => [
			'type'     => 'structure',
			'required' => [ 'vpcLinkId', ],
			'members'  => [
				'vpcLinkId' => [
					'shape'        => 'String',
					'location'     => 'uri',
					'locationName' => 'vpclink_id',
				],
			],
		],
		'Deployment'                             => [
			'type'    => 'structure',
			'members' => [
				'id'          => [ 'shape' => 'String', ],
				'description' => [ 'shape' => 'String', ],
				'createdDate' => [ 'shape' => 'Timestamp', ],
				'apiSummary'  => [ 'shape' => 'PathToMapOfMethodSnapshot', ],
			],
		],
		'DeploymentCanarySettings'               => [
			'type'    => 'structure',
			'members' => [
				'percentTraffic'         => [ 'shape' => 'Double', ],
				'stageVariableOverrides' => [ 'shape' => 'MapOfStringToString', ],
				'useStageCache'          => [ 'shape' => 'Boolean', ],
			],
		],
		'Deployments'                            => [
			'type'    => 'structure',
			'members' => [
				'position' => [ 'shape' => 'String', ],
				'items'    => [
					'shape'        => 'ListOfDeployment',
					'locationName' => 'item',
				],
			],
		],
		'DocumentationPart'                      => [
			'type'    => 'structure',
			'members' => [
				'id'         => [ 'shape' => 'String', ],
				'location'   => [ 'shape' => 'DocumentationPartLocation', ],
				'properties' => [ 'shape' => 'String', ],
			],
		],
		'DocumentationPartIds'                   => [
			'type'    => 'structure',
			'members' => [
				'ids'      => [ 'shape' => 'ListOfString', ],
				'warnings' => [ 'shape' => 'ListOfString', ],
			],
		],
		'DocumentationPartLocation'              => [
			'type'     => 'structure',
			'required' => [ 'type', ],
			'members'  => [
				'type'       => [ 'shape' => 'DocumentationPartType', ],
				'path'       => [ 'shape' => 'String', ],
				'method'     => [ 'shape' => 'String', ],
				'statusCode' => [ 'shape' => 'DocumentationPartLocationStatusCode', ],
				'name'       => [ 'shape' => 'String', ],
			],
		],
		'DocumentationPartLocationStatusCode'    => [ 'type' => 'string', 'pattern' => '^([1-5]\\d\\d|\\*|\\s*)$', ],
		'DocumentationPartType'                  => [
			'type' => 'string',
			'enum' => [
				'API',
				'AUTHORIZER',
				'MODEL',
				'RESOURCE',
				'METHOD',
				'PATH_PARAMETER',
				'QUERY_PARAMETER',
				'REQUEST_HEADER',
				'REQUEST_BODY',
				'RESPONSE',
				'RESPONSE_HEADER',
				'RESPONSE_BODY',
			],
		],
		'DocumentationParts'                     => [
			'type'    => 'structure',
			'members' => [
				'position' => [ 'shape' => 'String', ],
				'items'    => [
					'shape'        => 'ListOfDocumentationPart',
					'locationName' => 'item',
				],
			],
		],
		'DocumentationVersion'                   => [
			'type'    => 'structure',
			'members' => [
				'version'     => [ 'shape' => 'String', ],
				'createdDate' => [ 'shape' => 'Timestamp', ],
				'description' => [ 'shape' => 'String', ],
			],
		],
		'DocumentationVersions'                  => [
			'type'    => 'structure',
			'members' => [
				'position' => [ 'shape' => 'String', ],
				'items'    => [
					'shape'        => 'ListOfDocumentationVersion',
					'locationName' => 'item',
				],
			],
		],
		'DomainName'                             => [
			'type'    => 'structure',
			'members' => [
				'domainName'               => [ 'shape' => 'String', ],
				'certificateName'          => [ 'shape' => 'String', ],
				'certificateArn'           => [ 'shape' => 'String', ],
				'certificateUploadDate'    => [ 'shape' => 'Timestamp', ],
				'regionalDomainName'       => [ 'shape' => 'String', ],
				'regionalHostedZoneId'     => [ 'shape' => 'String', ],
				'regionalCertificateName'  => [ 'shape' => 'String', ],
				'regionalCertificateArn'   => [ 'shape' => 'String', ],
				'distributionDomainName'   => [ 'shape' => 'String', ],
				'distributionHostedZoneId' => [ 'shape' => 'String', ],
				'endpointConfiguration'    => [ 'shape' => 'EndpointConfiguration', ],
				'domainNameStatus'         => [ 'shape' => 'DomainNameStatus', ],
				'domainNameStatusMessage'  => [ 'shape' => 'String', ],
				'securityPolicy'           => [ 'shape' => 'SecurityPolicy', ],
				'tags'                     => [ 'shape' => 'MapOfStringToString', ],
			],
		],
		'DomainNameStatus'                       => [
			'type' => 'string',
			'enum' => [ 'AVAILABLE', 'UPDATING', 'PENDING', ],
		],
		'DomainNames'                            => [
			'type'    => 'structure',
			'members' => [
				'position' => [ 'shape' => 'String', ],
				'items'    => [
					'shape'        => 'ListOfDomainName',
					'locationName' => 'item',
				],
			],
		],
		'Double'                                 => [ 'type' => 'double', ],
		'EndpointConfiguration'                  => [
			'type'    => 'structure',
			'members' => [ 'types' => [ 'shape' => 'ListOfEndpointType', ], ],
		],
		'EndpointType'                           => [
			'type' => 'string',
			'enum' => [ 'REGIONAL', 'EDGE', 'PRIVATE', ],
		],
		'ExportResponse'                         => [
			'type'    => 'structure',
			'members' => [
				'contentType'        => [
					'shape'        => 'String',
					'location'     => 'header',
					'locationName' => 'Content-Type',
				],
				'contentDisposition' => [
					'shape'        => 'String',
					'location'     => 'header',
					'locationName' => 'Content-Disposition',
				],
				'body'               => [ 'shape' => 'Blob', ],
			],
			'payload' => 'body',
		],
		'FlushStageAuthorizersCacheRequest'      => [
			'type'     => 'structure',
			'required' => [ 'restApiId', 'stageName', ],
			'members'  => [
				'restApiId' => [
					'shape'        => 'String',
					'location'     => 'uri',
					'locationName' => 'restapi_id',
				],
				'stageName' => [
					'shape'        => 'String',
					'location'     => 'uri',
					'locationName' => 'stage_name',
				],
			],
		],
		'FlushStageCacheRequest'                 => [
			'type'     => 'structure',
			'required' => [ 'restApiId', 'stageName', ],
			'members'  => [
				'restApiId' => [
					'shape'        => 'String',
					'location'     => 'uri',
					'locationName' => 'restapi_id',
				],
				'stageName' => [
					'shape'        => 'String',
					'location'     => 'uri',
					'locationName' => 'stage_name',
				],
			],
		],
		'GatewayResponse'                        => [
			'type'    => 'structure',
			'members' => [
				'responseType'       => [ 'shape' => 'GatewayResponseType', ],
				'statusCode'         => [ 'shape' => 'StatusCode', ],
				'responseParameters' => [ 'shape' => 'MapOfStringToString', ],
				'responseTemplates'  => [ 'shape' => 'MapOfStringToString', ],
				'defaultResponse'    => [ 'shape' => 'Boolean', ],
			],
		],
		'GatewayResponseType'                    => [
			'type' => 'string',
			'enum' => [
				'DEFAULT_4XX',
				'DEFAULT_5XX',
				'RESOURCE_NOT_FOUND',
				'UNAUTHORIZED',
				'INVALID_API_KEY',
				'ACCESS_DENIED',
				'AUTHORIZER_FAILURE',
				'AUTHORIZER_CONFIGURATION_ERROR',
				'INVALID_SIGNATURE',
				'EXPIRED_TOKEN',
				'MISSING_AUTHENTICATION_TOKEN',
				'INTEGRATION_FAILURE',
				'INTEGRATION_TIMEOUT',
				'API_CONFIGURATION_ERROR',
				'UNSUPPORTED_MEDIA_TYPE',
				'BAD_REQUEST_PARAMETERS',
				'BAD_REQUEST_BODY',
				'REQUEST_TOO_LARGE',
				'THROTTLED',
				'QUOTA_EXCEEDED',
			],
		],
		'GatewayResponses'                       => [
			'type'    => 'structure',
			'members' => [
				'position' => [ 'shape' => 'String', ],
				'items'    => [
					'shape'        => 'ListOfGatewayResponse',
					'locationName' => 'item',
				],
			],
		],
		'GenerateClientCertificateRequest'       => [
			'type'    => 'structure',
			'members' => [
				'description' => [ 'shape' => 'String', ],
				'tags'        => [ 'shape' => 'MapOfStringToString', ],
			],
		],
		'GetAccountRequest'                      => [ 'type' => 'structure', 'members' => [], ],
		'GetApiKeyRequest'                       => [
			'type'     => 'structure',
			'required' => [ 'apiKey', ],
			'members'  => [
				'apiKey'       => [
					'shape'        => 'String',
					'location'     => 'uri',
					'locationName' => 'api_Key',
				],
				'includeValue' => [
					'shape'        => 'NullableBoolean',
					'location'     => 'querystring',
					'locationName' => 'includeValue',
				],
			],
		],
		'GetApiKeysRequest'                      => [
			'type'    => 'structure',
			'members' => [
				'position'      => [
					'shape'        => 'String',
					'location'     => 'querystring',
					'locationName' => 'position',
				],
				'limit'         => [
					'shape'        => 'NullableInteger',
					'location'     => 'querystring',
					'locationName' => 'limit',
				],
				'nameQuery'     => [
					'shape'        => 'String',
					'location'     => 'querystring',
					'locationName' => 'name',
				],
				'customerId'    => [
					'shape'        => 'String',
					'location'     => 'querystring',
					'locationName' => 'customerId',
				],
				'includeValues' => [
					'shape'        => 'NullableBoolean',
					'location'     => 'querystring',
					'locationName' => 'includeValues',
				],
			],
		],
		'GetAuthorizerRequest'                   => [
			'type'     => 'structure',
			'required' => [ 'restApiId', 'authorizerId', ],
			'members'  => [
				'restApiId'    => [
					'shape'        => 'String',
					'location'     => 'uri',
					'locationName' => 'restapi_id',
				],
				'authorizerId' => [
					'shape'        => 'String',
					'location'     => 'uri',
					'locationName' => 'authorizer_id',
				],
			],
		],
		'GetAuthorizersRequest'                  => [
			'type'     => 'structure',
			'required' => [ 'restApiId', ],
			'members'  => [
				'restApiId' => [
					'shape'        => 'String',
					'location'     => 'uri',
					'locationName' => 'restapi_id',
				],
				'position'  => [
					'shape'        => 'String',
					'location'     => 'querystring',
					'locationName' => 'position',
				],
				'limit'     => [
					'shape'        => 'NullableInteger',
					'location'     => 'querystring',
					'locationName' => 'limit',
				],
			],
		],
		'GetBasePathMappingRequest'              => [
			'type'     => 'structure',
			'required' => [ 'domainName', 'basePath', ],
			'members'  => [
				'domainName' => [
					'shape'        => 'String',
					'location'     => 'uri',
					'locationName' => 'domain_name',
				],
				'basePath'   => [
					'shape'        => 'String',
					'location'     => 'uri',
					'locationName' => 'base_path',
				],
			],
		],
		'GetBasePathMappingsRequest'             => [
			'type'     => 'structure',
			'required' => [ 'domainName', ],
			'members'  => [
				'domainName' => [
					'shape'        => 'String',
					'location'     => 'uri',
					'locationName' => 'domain_name',
				],
				'position'   => [
					'shape'        => 'String',
					'location'     => 'querystring',
					'locationName' => 'position',
				],
				'limit'      => [
					'shape'        => 'NullableInteger',
					'location'     => 'querystring',
					'locationName' => 'limit',
				],
			],
		],
		'GetClientCertificateRequest'            => [
			'type'     => 'structure',
			'required' => [ 'clientCertificateId', ],
			'members'  => [
				'clientCertificateId' => [
					'shape'        => 'String',
					'location'     => 'uri',
					'locationName' => 'clientcertificate_id',
				],
			],
		],
		'GetClientCertificatesRequest'           => [
			'type'    => 'structure',
			'members' => [
				'position' => [
					'shape'        => 'String',
					'location'     => 'querystring',
					'locationName' => 'position',
				],
				'limit'    => [
					'shape'        => 'NullableInteger',
					'location'     => 'querystring',
					'locationName' => 'limit',
				],
			],
		],
		'GetDeploymentRequest'                   => [
			'type'     => 'structure',
			'required' => [ 'restApiId', 'deploymentId', ],
			'members'  => [
				'restApiId'    => [
					'shape'        => 'String',
					'location'     => 'uri',
					'locationName' => 'restapi_id',
				],
				'deploymentId' => [
					'shape'        => 'String',
					'location'     => 'uri',
					'locationName' => 'deployment_id',
				],
				'embed'        => [
					'shape'        => 'ListOfString',
					'location'     => 'querystring',
					'locationName' => 'embed',
				],
			],
		],
		'GetDeploymentsRequest'                  => [
			'type'     => 'structure',
			'required' => [ 'restApiId', ],
			'members'  => [
				'restApiId' => [
					'shape'        => 'String',
					'location'     => 'uri',
					'locationName' => 'restapi_id',
				],
				'position'  => [
					'shape'        => 'String',
					'location'     => 'querystring',
					'locationName' => 'position',
				],
				'limit'     => [
					'shape'        => 'NullableInteger',
					'location'     => 'querystring',
					'locationName' => 'limit',
				],
			],
		],
		'GetDocumentationPartRequest'            => [
			'type'     => 'structure',
			'required' => [ 'restApiId', 'documentationPartId', ],
			'members'  => [
				'restApiId'           => [
					'shape'        => 'String',
					'location'     => 'uri',
					'locationName' => 'restapi_id',
				],
				'documentationPartId' => [
					'shape'        => 'String',
					'location'     => 'uri',
					'locationName' => 'part_id',
				],
			],
		],
		'GetDocumentationPartsRequest'           => [
			'type'     => 'structure',
			'required' => [ 'restApiId', ],
			'members'  => [
				'restApiId'      => [
					'shape'        => 'String',
					'location'     => 'uri',
					'locationName' => 'restapi_id',
				],
				'type'           => [
					'shape'        => 'DocumentationPartType',
					'location'     => 'querystring',
					'locationName' => 'type',
				],
				'nameQuery'      => [
					'shape'        => 'String',
					'location'     => 'querystring',
					'locationName' => 'name',
				],
				'path'           => [
					'shape'        => 'String',
					'location'     => 'querystring',
					'locationName' => 'path',
				],
				'position'       => [
					'shape'        => 'String',
					'location'     => 'querystring',
					'locationName' => 'position',
				],
				'limit'          => [
					'shape'        => 'NullableInteger',
					'location'     => 'querystring',
					'locationName' => 'limit',
				],
				'locationStatus' => [
					'shape'        => 'LocationStatusType',
					'location'     => 'querystring',
					'locationName' => 'locationStatus',
				],
			],
		],
		'GetDocumentationVersionRequest'         => [
			'type'     => 'structure',
			'required' => [ 'restApiId', 'documentationVersion', ],
			'members'  => [
				'restApiId'            => [
					'shape'        => 'String',
					'location'     => 'uri',
					'locationName' => 'restapi_id',
				],
				'documentationVersion' => [
					'shape'        => 'String',
					'location'     => 'uri',
					'locationName' => 'doc_version',
				],
			],
		],
		'GetDocumentationVersionsRequest'        => [
			'type'     => 'structure',
			'required' => [ 'restApiId', ],
			'members'  => [
				'restApiId' => [
					'shape'        => 'String',
					'location'     => 'uri',
					'locationName' => 'restapi_id',
				],
				'position'  => [
					'shape'        => 'String',
					'location'     => 'querystring',
					'locationName' => 'position',
				],
				'limit'     => [
					'shape'        => 'NullableInteger',
					'location'     => 'querystring',
					'locationName' => 'limit',
				],
			],
		],
		'GetDomainNameRequest'                   => [
			'type'     => 'structure',
			'required' => [ 'domainName', ],
			'members'  => [
				'domainName' => [
					'shape'        => 'String',
					'location'     => 'uri',
					'locationName' => 'domain_name',
				],
			],
		],
		'GetDomainNamesRequest'                  => [
			'type'    => 'structure',
			'members' => [
				'position' => [
					'shape'        => 'String',
					'location'     => 'querystring',
					'locationName' => 'position',
				],
				'limit'    => [
					'shape'        => 'NullableInteger',
					'location'     => 'querystring',
					'locationName' => 'limit',
				],
			],
		],
		'GetExportRequest'                       => [
			'type'     => 'structure',
			'required' => [ 'restApiId', 'stageName', 'exportType', ],
			'members'  => [
				'restApiId'  => [
					'shape'        => 'String',
					'location'     => 'uri',
					'locationName' => 'restapi_id',
				],
				'stageName'  => [
					'shape'        => 'String',
					'location'     => 'uri',
					'locationName' => 'stage_name',
				],
				'exportType' => [
					'shape'        => 'String',
					'location'     => 'uri',
					'locationName' => 'export_type',
				],
				'parameters' => [
					'shape'    => 'MapOfStringToString',
					'location' => 'querystring',
				],
				'accepts'    => [
					'shape'        => 'String',
					'location'     => 'header',
					'locationName' => 'Accept',
				],
			],
		],
		'GetGatewayResponseRequest'              => [
			'type'     => 'structure',
			'required' => [ 'restApiId', 'responseType', ],
			'members'  => [
				'restApiId'    => [
					'shape'        => 'String',
					'location'     => 'uri',
					'locationName' => 'restapi_id',
				],
				'responseType' => [
					'shape'        => 'GatewayResponseType',
					'location'     => 'uri',
					'locationName' => 'response_type',
				],
			],
		],
		'GetGatewayResponsesRequest'             => [
			'type'     => 'structure',
			'required' => [ 'restApiId', ],
			'members'  => [
				'restApiId' => [
					'shape'        => 'String',
					'location'     => 'uri',
					'locationName' => 'restapi_id',
				],
				'position'  => [
					'shape'        => 'String',
					'location'     => 'querystring',
					'locationName' => 'position',
				],
				'limit'     => [
					'shape'        => 'NullableInteger',
					'location'     => 'querystring',
					'locationName' => 'limit',
				],
			],
		],
		'GetIntegrationRequest'                  => [
			'type'     => 'structure',
			'required' => [ 'restApiId', 'resourceId', 'httpMethod', ],
			'members'  => [
				'restApiId'  => [
					'shape'        => 'String',
					'location'     => 'uri',
					'locationName' => 'restapi_id',
				],
				'resourceId' => [
					'shape'        => 'String',
					'location'     => 'uri',
					'locationName' => 'resource_id',
				],
				'httpMethod' => [
					'shape'        => 'String',
					'location'     => 'uri',
					'locationName' => 'http_method',
				],
			],
		],
		'GetIntegrationResponseRequest'          => [
			'type'     => 'structure',
			'required' => [
				'restApiId',
				'resourceId',
				'httpMethod',
				'statusCode',
			],
			'members'  => [
				'restApiId'  => [
					'shape'        => 'String',
					'location'     => 'uri',
					'locationName' => 'restapi_id',
				],
				'resourceId' => [
					'shape'        => 'String',
					'location'     => 'uri',
					'locationName' => 'resource_id',
				],
				'httpMethod' => [
					'shape'        => 'String',
					'location'     => 'uri',
					'locationName' => 'http_method',
				],
				'statusCode' => [
					'shape'        => 'StatusCode',
					'location'     => 'uri',
					'locationName' => 'status_code',
				],
			],
		],
		'GetMethodRequest'                       => [
			'type'     => 'structure',
			'required' => [ 'restApiId', 'resourceId', 'httpMethod', ],
			'members'  => [
				'restApiId'  => [
					'shape'        => 'String',
					'location'     => 'uri',
					'locationName' => 'restapi_id',
				],
				'resourceId' => [
					'shape'        => 'String',
					'location'     => 'uri',
					'locationName' => 'resource_id',
				],
				'httpMethod' => [
					'shape'        => 'String',
					'location'     => 'uri',
					'locationName' => 'http_method',
				],
			],
		],
		'GetMethodResponseRequest'               => [
			'type'     => 'structure',
			'required' => [
				'restApiId',
				'resourceId',
				'httpMethod',
				'statusCode',
			],
			'members'  => [
				'restApiId'  => [
					'shape'        => 'String',
					'location'     => 'uri',
					'locationName' => 'restapi_id',
				],
				'resourceId' => [
					'shape'        => 'String',
					'location'     => 'uri',
					'locationName' => 'resource_id',
				],
				'httpMethod' => [
					'shape'        => 'String',
					'location'     => 'uri',
					'locationName' => 'http_method',
				],
				'statusCode' => [
					'shape'        => 'StatusCode',
					'location'     => 'uri',
					'locationName' => 'status_code',
				],
			],
		],
		'GetModelRequest'                        => [
			'type'     => 'structure',
			'required' => [ 'restApiId', 'modelName', ],
			'members'  => [
				'restApiId' => [
					'shape'        => 'String',
					'location'     => 'uri',
					'locationName' => 'restapi_id',
				],
				'modelName' => [
					'shape'        => 'String',
					'location'     => 'uri',
					'locationName' => 'model_name',
				],
				'flatten'   => [
					'shape'        => 'Boolean',
					'location'     => 'querystring',
					'locationName' => 'flatten',
				],
			],
		],
		'GetModelTemplateRequest'                => [
			'type'     => 'structure',
			'required' => [ 'restApiId', 'modelName', ],
			'members'  => [
				'restApiId' => [
					'shape'        => 'String',
					'location'     => 'uri',
					'locationName' => 'restapi_id',
				],
				'modelName' => [
					'shape'        => 'String',
					'location'     => 'uri',
					'locationName' => 'model_name',
				],
			],
		],
		'GetModelsRequest'                       => [
			'type'     => 'structure',
			'required' => [ 'restApiId', ],
			'members'  => [
				'restApiId' => [
					'shape'        => 'String',
					'location'     => 'uri',
					'locationName' => 'restapi_id',
				],
				'position'  => [
					'shape'        => 'String',
					'location'     => 'querystring',
					'locationName' => 'position',
				],
				'limit'     => [
					'shape'        => 'NullableInteger',
					'location'     => 'querystring',
					'locationName' => 'limit',
				],
			],
		],
		'GetRequestValidatorRequest'             => [
			'type'     => 'structure',
			'required' => [ 'restApiId', 'requestValidatorId', ],
			'members'  => [
				'restApiId'          => [
					'shape'        => 'String',
					'location'     => 'uri',
					'locationName' => 'restapi_id',
				],
				'requestValidatorId' => [
					'shape'        => 'String',
					'location'     => 'uri',
					'locationName' => 'requestvalidator_id',
				],
			],
		],
		'GetRequestValidatorsRequest'            => [
			'type'     => 'structure',
			'required' => [ 'restApiId', ],
			'members'  => [
				'restApiId' => [
					'shape'        => 'String',
					'location'     => 'uri',
					'locationName' => 'restapi_id',
				],
				'position'  => [
					'shape'        => 'String',
					'location'     => 'querystring',
					'locationName' => 'position',
				],
				'limit'     => [
					'shape'        => 'NullableInteger',
					'location'     => 'querystring',
					'locationName' => 'limit',
				],
			],
		],
		'GetResourceRequest'                     => [
			'type'     => 'structure',
			'required' => [ 'restApiId', 'resourceId', ],
			'members'  => [
				'restApiId'  => [
					'shape'        => 'String',
					'location'     => 'uri',
					'locationName' => 'restapi_id',
				],
				'resourceId' => [
					'shape'        => 'String',
					'location'     => 'uri',
					'locationName' => 'resource_id',
				],
				'embed'      => [
					'shape'        => 'ListOfString',
					'location'     => 'querystring',
					'locationName' => 'embed',
				],
			],
		],
		'GetResourcesRequest'                    => [
			'type'     => 'structure',
			'required' => [ 'restApiId', ],
			'members'  => [
				'restApiId' => [
					'shape'        => 'String',
					'location'     => 'uri',
					'locationName' => 'restapi_id',
				],
				'position'  => [
					'shape'        => 'String',
					'location'     => 'querystring',
					'locationName' => 'position',
				],
				'limit'     => [
					'shape'        => 'NullableInteger',
					'location'     => 'querystring',
					'locationName' => 'limit',
				],
				'embed'     => [
					'shape'        => 'ListOfString',
					'location'     => 'querystring',
					'locationName' => 'embed',
				],
			],
		],
		'GetRestApiRequest'                      => [
			'type'     => 'structure',
			'required' => [ 'restApiId', ],
			'members'  => [
				'restApiId' => [
					'shape'        => 'String',
					'location'     => 'uri',
					'locationName' => 'restapi_id',
				],
			],
		],
		'GetRestApisRequest'                     => [
			'type'    => 'structure',
			'members' => [
				'position' => [
					'shape'        => 'String',
					'location'     => 'querystring',
					'locationName' => 'position',
				],
				'limit'    => [
					'shape'        => 'NullableInteger',
					'location'     => 'querystring',
					'locationName' => 'limit',
				],
			],
		],
		'GetSdkRequest'                          => [
			'type'     => 'structure',
			'required' => [ 'restApiId', 'stageName', 'sdkType', ],
			'members'  => [
				'restApiId'  => [
					'shape'        => 'String',
					'location'     => 'uri',
					'locationName' => 'restapi_id',
				],
				'stageName'  => [
					'shape'        => 'String',
					'location'     => 'uri',
					'locationName' => 'stage_name',
				],
				'sdkType'    => [
					'shape'        => 'String',
					'location'     => 'uri',
					'locationName' => 'sdk_type',
				],
				'parameters' => [
					'shape'    => 'MapOfStringToString',
					'location' => 'querystring',
				],
			],
		],
		'GetSdkTypeRequest'                      => [
			'type'     => 'structure',
			'required' => [ 'id', ],
			'members'  => [
				'id' => [
					'shape'        => 'String',
					'location'     => 'uri',
					'locationName' => 'sdktype_id',
				],
			],
		],
		'GetSdkTypesRequest'                     => [
			'type'    => 'structure',
			'members' => [
				'position' => [
					'shape'        => 'String',
					'location'     => 'querystring',
					'locationName' => 'position',
				],
				'limit'    => [
					'shape'        => 'NullableInteger',
					'location'     => 'querystring',
					'locationName' => 'limit',
				],
			],
		],
		'GetStageRequest'                        => [
			'type'     => 'structure',
			'required' => [ 'restApiId', 'stageName', ],
			'members'  => [
				'restApiId' => [
					'shape'        => 'String',
					'location'     => 'uri',
					'locationName' => 'restapi_id',
				],
				'stageName' => [
					'shape'        => 'String',
					'location'     => 'uri',
					'locationName' => 'stage_name',
				],
			],
		],
		'GetStagesRequest'                       => [
			'type'     => 'structure',
			'required' => [ 'restApiId', ],
			'members'  => [
				'restApiId'    => [
					'shape'        => 'String',
					'location'     => 'uri',
					'locationName' => 'restapi_id',
				],
				'deploymentId' => [
					'shape'        => 'String',
					'location'     => 'querystring',
					'locationName' => 'deploymentId',
				],
			],
		],
		'GetTagsRequest'                         => [
			'type'     => 'structure',
			'required' => [ 'resourceArn', ],
			'members'  => [
				'resourceArn' => [
					'shape'        => 'String',
					'location'     => 'uri',
					'locationName' => 'resource_arn',
				],
				'position'    => [
					'shape'        => 'String',
					'location'     => 'querystring',
					'locationName' => 'position',
				],
				'limit'       => [
					'shape'        => 'NullableInteger',
					'location'     => 'querystring',
					'locationName' => 'limit',
				],
			],
		],
		'GetUsagePlanKeyRequest'                 => [
			'type'     => 'structure',
			'required' => [ 'usagePlanId', 'keyId', ],
			'members'  => [
				'usagePlanId' => [
					'shape'        => 'String',
					'location'     => 'uri',
					'locationName' => 'usageplanId',
				],
				'keyId'       => [
					'shape'        => 'String',
					'location'     => 'uri',
					'locationName' => 'keyId',
				],
			],
		],
		'GetUsagePlanKeysRequest'                => [
			'type'     => 'structure',
			'required' => [ 'usagePlanId', ],
			'members'  => [
				'usagePlanId' => [
					'shape'        => 'String',
					'location'     => 'uri',
					'locationName' => 'usageplanId',
				],
				'position'    => [
					'shape'        => 'String',
					'location'     => 'querystring',
					'locationName' => 'position',
				],
				'limit'       => [
					'shape'        => 'NullableInteger',
					'location'     => 'querystring',
					'locationName' => 'limit',
				],
				'nameQuery'   => [
					'shape'        => 'String',
					'location'     => 'querystring',
					'locationName' => 'name',
				],
			],
		],
		'GetUsagePlanRequest'                    => [
			'type'     => 'structure',
			'required' => [ 'usagePlanId', ],
			'members'  => [
				'usagePlanId' => [
					'shape'        => 'String',
					'location'     => 'uri',
					'locationName' => 'usageplanId',
				],
			],
		],
		'GetUsagePlansRequest'                   => [
			'type'    => 'structure',
			'members' => [
				'position' => [
					'shape'        => 'String',
					'location'     => 'querystring',
					'locationName' => 'position',
				],
				'keyId'    => [
					'shape'        => 'String',
					'location'     => 'querystring',
					'locationName' => 'keyId',
				],
				'limit'    => [
					'shape'        => 'NullableInteger',
					'location'     => 'querystring',
					'locationName' => 'limit',
				],
			],
		],
		'GetUsageRequest'                        => [
			'type'     => 'structure',
			'required' => [ 'usagePlanId', 'startDate', 'endDate', ],
			'members'  => [
				'usagePlanId' => [
					'shape'        => 'String',
					'location'     => 'uri',
					'locationName' => 'usageplanId',
				],
				'keyId'       => [
					'shape'        => 'String',
					'location'     => 'querystring',
					'locationName' => 'keyId',
				],
				'startDate'   => [
					'shape'        => 'String',
					'location'     => 'querystring',
					'locationName' => 'startDate',
				],
				'endDate'     => [
					'shape'        => 'String',
					'location'     => 'querystring',
					'locationName' => 'endDate',
				],
				'position'    => [
					'shape'        => 'String',
					'location'     => 'querystring',
					'locationName' => 'position',
				],
				'limit'       => [
					'shape'        => 'NullableInteger',
					'location'     => 'querystring',
					'locationName' => 'limit',
				],
			],
		],
		'GetVpcLinkRequest'                      => [
			'type'     => 'structure',
			'required' => [ 'vpcLinkId', ],
			'members'  => [
				'vpcLinkId' => [
					'shape'        => 'String',
					'location'     => 'uri',
					'locationName' => 'vpclink_id',
				],
			],
		],
		'GetVpcLinksRequest'                     => [
			'type'    => 'structure',
			'members' => [
				'position' => [
					'shape'        => 'String',
					'location'     => 'querystring',
					'locationName' => 'position',
				],
				'limit'    => [
					'shape'        => 'NullableInteger',
					'location'     => 'querystring',
					'locationName' => 'limit',
				],
			],
		],
		'ImportApiKeysRequest'                   => [
			'type'     => 'structure',
			'required' => [ 'body', 'format', ],
			'members'  => [
				'body'           => [ 'shape' => 'Blob', ],
				'format'         => [
					'shape'        => 'ApiKeysFormat',
					'location'     => 'querystring',
					'locationName' => 'format',
				],
				'failOnWarnings' => [
					'shape'        => 'Boolean',
					'location'     => 'querystring',
					'locationName' => 'failonwarnings',
				],
			],
			'payload'  => 'body',
		],
		'ImportDocumentationPartsRequest'        => [
			'type'     => 'structure',
			'required' => [ 'restApiId', 'body', ],
			'members'  => [
				'restApiId'      => [
					'shape'        => 'String',
					'location'     => 'uri',
					'locationName' => 'restapi_id',
				],
				'mode'           => [
					'shape'        => 'PutMode',
					'location'     => 'querystring',
					'locationName' => 'mode',
				],
				'failOnWarnings' => [
					'shape'        => 'Boolean',
					'location'     => 'querystring',
					'locationName' => 'failonwarnings',
				],
				'body'           => [ 'shape' => 'Blob', ],
			],
			'payload'  => 'body',
		],
		'ImportRestApiRequest'                   => [
			'type'     => 'structure',
			'required' => [ 'body', ],
			'members'  => [
				'failOnWarnings' => [
					'shape'        => 'Boolean',
					'location'     => 'querystring',
					'locationName' => 'failonwarnings',
				],
				'parameters'     => [
					'shape'    => 'MapOfStringToString',
					'location' => 'querystring',
				],
				'body'           => [ 'shape' => 'Blob', ],
			],
			'payload'  => 'body',
		],
		'Integer'                                => [ 'type' => 'integer', ],
		'Integration'                            => [
			'type'    => 'structure',
			'members' => [
				'type'                 => [ 'shape' => 'IntegrationType', ],
				'httpMethod'           => [ 'shape' => 'String', ],
				'uri'                  => [ 'shape' => 'String', ],
				'connectionType'       => [ 'shape' => 'ConnectionType', ],
				'connectionId'         => [ 'shape' => 'String', ],
				'credentials'          => [ 'shape' => 'String', ],
				'requestParameters'    => [ 'shape' => 'MapOfStringToString', ],
				'requestTemplates'     => [ 'shape' => 'MapOfStringToString', ],
				'passthroughBehavior'  => [ 'shape' => 'String', ],
				'contentHandling'      => [ 'shape' => 'ContentHandlingStrategy', ],
				'timeoutInMillis'      => [ 'shape' => 'Integer', ],
				'cacheNamespace'       => [ 'shape' => 'String', ],
				'cacheKeyParameters'   => [ 'shape' => 'ListOfString', ],
				'integrationResponses' => [ 'shape' => 'MapOfIntegrationResponse', ],
			],
		],
		'IntegrationResponse'                    => [
			'type'    => 'structure',
			'members' => [
				'statusCode'         => [ 'shape' => 'StatusCode', ],
				'selectionPattern'   => [ 'shape' => 'String', ],
				'responseParameters' => [ 'shape' => 'MapOfStringToString', ],
				'responseTemplates'  => [ 'shape' => 'MapOfStringToString', ],
				'contentHandling'    => [ 'shape' => 'ContentHandlingStrategy', ],
			],
		],
		'IntegrationType'                        => [
			'type' => 'string',
			'enum' => [ 'HTTP', 'AWS', 'MOCK', 'HTTP_PROXY', 'AWS_PROXY', ],
		],
		'LimitExceededException'                 => [
			'type'      => 'structure',
			'members'   => [
				'retryAfterSeconds' => [
					'shape'        => 'String',
					'location'     => 'header',
					'locationName' => 'Retry-After',
				],
				'message'           => [ 'shape' => 'String', ],
			],
			'error'     => [ 'httpStatusCode' => 429, ],
			'exception' => true,
		],
		'ListOfARNs'                             => [ 'type' => 'list', 'member' => [ 'shape' => 'ProviderARN', ], ],
		'ListOfApiKey'                           => [ 'type' => 'list', 'member' => [ 'shape' => 'ApiKey', ], ],
		'ListOfApiStage'                         => [ 'type' => 'list', 'member' => [ 'shape' => 'ApiStage', ], ],
		'ListOfAuthorizer'                       => [ 'type' => 'list', 'member' => [ 'shape' => 'Authorizer', ], ],
		'ListOfBasePathMapping'                  => [
			'type'   => 'list',
			'member' => [ 'shape' => 'BasePathMapping', ],
		],
		'ListOfClientCertificate'                => [
			'type'   => 'list',
			'member' => [ 'shape' => 'ClientCertificate', ],
		],
		'ListOfDeployment'                       => [ 'type' => 'list', 'member' => [ 'shape' => 'Deployment', ], ],
		'ListOfDocumentationPart'                => [
			'type'   => 'list',
			'member' => [ 'shape' => 'DocumentationPart', ],
		],
		'ListOfDocumentationVersion'             => [
			'type'   => 'list',
			'member' => [ 'shape' => 'DocumentationVersion', ],
		],
		'ListOfDomainName'                       => [ 'type' => 'list', 'member' => [ 'shape' => 'DomainName', ], ],
		'ListOfEndpointType'                     => [ 'type' => 'list', 'member' => [ 'shape' => 'EndpointType', ], ],
		'ListOfGatewayResponse'                  => [
			'type'   => 'list',
			'member' => [ 'shape' => 'GatewayResponse', ],
		],
		'ListOfLong'                             => [ 'type' => 'list', 'member' => [ 'shape' => 'Long', ], ],
		'ListOfModel'                            => [ 'type' => 'list', 'member' => [ 'shape' => 'Model', ], ],
		'ListOfPatchOperation'                   => [ 'type' => 'list', 'member' => [ 'shape' => 'PatchOperation', ], ],
		'ListOfRequestValidator'                 => [
			'type'   => 'list',
			'member' => [ 'shape' => 'RequestValidator', ],
		],
		'ListOfResource'                         => [ 'type' => 'list', 'member' => [ 'shape' => 'Resource', ], ],
		'ListOfRestApi'                          => [ 'type' => 'list', 'member' => [ 'shape' => 'RestApi', ], ],
		'ListOfSdkConfigurationProperty'         => [
			'type'   => 'list',
			'member' => [ 'shape' => 'SdkConfigurationProperty', ],
		],
		'ListOfSdkType'                          => [ 'type' => 'list', 'member' => [ 'shape' => 'SdkType', ], ],
		'ListOfStage'                            => [ 'type' => 'list', 'member' => [ 'shape' => 'Stage', ], ],
		'ListOfStageKeys'                        => [ 'type' => 'list', 'member' => [ 'shape' => 'StageKey', ], ],
		'ListOfString'                           => [ 'type' => 'list', 'member' => [ 'shape' => 'String', ], ],
		'ListOfUsage'                            => [ 'type' => 'list', 'member' => [ 'shape' => 'ListOfLong', ], ],
		'ListOfUsagePlan'                        => [ 'type' => 'list', 'member' => [ 'shape' => 'UsagePlan', ], ],
		'ListOfUsagePlanKey'                     => [ 'type' => 'list', 'member' => [ 'shape' => 'UsagePlanKey', ], ],
		'ListOfVpcLink'                          => [ 'type' => 'list', 'member' => [ 'shape' => 'VpcLink', ], ],
		'LocationStatusType'                     => [
			'type' => 'string',
			'enum' => [ 'DOCUMENTED', 'UNDOCUMENTED', ],
		],
		'Long'                                   => [ 'type' => 'long', ],
		'MapOfApiStageThrottleSettings'          => [
			'type'  => 'map',
			'key'   => [ 'shape' => 'String', ],
			'value' => [ 'shape' => 'ThrottleSettings', ],
		],
		'MapOfIntegrationResponse'               => [
			'type'  => 'map',
			'key'   => [ 'shape' => 'String', ],
			'value' => [ 'shape' => 'IntegrationResponse', ],
		],
		'MapOfKeyUsages'                         => [
			'type'  => 'map',
			'key'   => [ 'shape' => 'String', ],
			'value' => [ 'shape' => 'ListOfUsage', ],
		],
		'MapOfMethod'                            => [
			'type'  => 'map',
			'key'   => [ 'shape' => 'String', ],
			'value' => [ 'shape' => 'Method', ],
		],
		'MapOfMethodResponse'                    => [
			'type'  => 'map',
			'key'   => [ 'shape' => 'String', ],
			'value' => [ 'shape' => 'MethodResponse', ],
		],
		'MapOfMethodSettings'                    => [
			'type'  => 'map',
			'key'   => [ 'shape' => 'String', ],
			'value' => [ 'shape' => 'MethodSetting', ],
		],
		'MapOfMethodSnapshot'                    => [
			'type'  => 'map',
			'key'   => [ 'shape' => 'String', ],
			'value' => [ 'shape' => 'MethodSnapshot', ],
		],
		'MapOfStringToBoolean'                   => [
			'type'  => 'map',
			'key'   => [ 'shape' => 'String', ],
			'value' => [ 'shape' => 'NullableBoolean', ],
		],
		'MapOfStringToList'                      => [
			'type'  => 'map',
			'key'   => [ 'shape' => 'String', ],
			'value' => [ 'shape' => 'ListOfString', ],
		],
		'MapOfStringToString'                    => [
			'type'  => 'map',
			'key'   => [ 'shape' => 'String', ],
			'value' => [ 'shape' => 'String', ],
		],
		'Method'                                 => [
			'type'    => 'structure',
			'members' => [
				'httpMethod'          => [ 'shape' => 'String', ],
				'authorizationType'   => [ 'shape' => 'String', ],
				'authorizerId'        => [ 'shape' => 'String', ],
				'apiKeyRequired'      => [ 'shape' => 'NullableBoolean', ],
				'requestValidatorId'  => [ 'shape' => 'String', ],
				'operationName'       => [ 'shape' => 'String', ],
				'requestParameters'   => [ 'shape' => 'MapOfStringToBoolean', ],
				'requestModels'       => [ 'shape' => 'MapOfStringToString', ],
				'methodResponses'     => [ 'shape' => 'MapOfMethodResponse', ],
				'methodIntegration'   => [ 'shape' => 'Integration', ],
				'authorizationScopes' => [ 'shape' => 'ListOfString', ],
			],
		],
		'MethodResponse'                         => [
			'type'    => 'structure',
			'members' => [
				'statusCode'         => [ 'shape' => 'StatusCode', ],
				'responseParameters' => [ 'shape' => 'MapOfStringToBoolean', ],
				'responseModels'     => [ 'shape' => 'MapOfStringToString', ],
			],
		],
		'MethodSetting'                          => [
			'type'    => 'structure',
			'members' => [
				'metricsEnabled'                         => [ 'shape' => 'Boolean', ],
				'loggingLevel'                           => [ 'shape' => 'String', ],
				'dataTraceEnabled'                       => [ 'shape' => 'Boolean', ],
				'throttlingBurstLimit'                   => [ 'shape' => 'Integer', ],
				'throttlingRateLimit'                    => [ 'shape' => 'Double', ],
				'cachingEnabled'                         => [ 'shape' => 'Boolean', ],
				'cacheTtlInSeconds'                      => [ 'shape' => 'Integer', ],
				'cacheDataEncrypted'                     => [ 'shape' => 'Boolean', ],
				'requireAuthorizationForCacheControl'    => [ 'shape' => 'Boolean', ],
				'unauthorizedCacheControlHeaderStrategy' => [ 'shape' => 'UnauthorizedCacheControlHeaderStrategy', ],
			],
		],
		'MethodSnapshot'                         => [
			'type'    => 'structure',
			'members' => [
				'authorizationType' => [ 'shape' => 'String', ],
				'apiKeyRequired'    => [ 'shape' => 'Boolean', ],
			],
		],
		'Model'                                  => [
			'type'    => 'structure',
			'members' => [
				'id'          => [ 'shape' => 'String', ],
				'name'        => [ 'shape' => 'String', ],
				'description' => [ 'shape' => 'String', ],
				'schema'      => [ 'shape' => 'String', ],
				'contentType' => [ 'shape' => 'String', ],
			],
		],
		'Models'                                 => [
			'type'    => 'structure',
			'members' => [
				'position' => [ 'shape' => 'String', ],
				'items'    => [
					'shape'        => 'ListOfModel',
					'locationName' => 'item',
				],
			],
		],
		'NotFoundException'                      => [
			'type'      => 'structure',
			'members'   => [ 'message' => [ 'shape' => 'String', ], ],
			'error'     => [ 'httpStatusCode' => 404, ],
			'exception' => true,
		],
		'NullableBoolean'                        => [ 'type' => 'boolean', ],
		'NullableInteger'                        => [ 'type' => 'integer', ],
		'Op'                                     => [
			'type' => 'string',
			'enum' => [ 'add', 'remove', 'replace', 'move', 'copy', 'test', ],
		],
		'PatchOperation'                         => [
			'type'    => 'structure',
			'members' => [
				'op'    => [ 'shape' => 'Op', ],
				'path'  => [ 'shape' => 'String', ],
				'value' => [ 'shape' => 'String', ],
				'from'  => [ 'shape' => 'String', ],
			],
		],
		'PathToMapOfMethodSnapshot'              => [
			'type'  => 'map',
			'key'   => [ 'shape' => 'String', ],
			'value' => [ 'shape' => 'MapOfMethodSnapshot', ],
		],
		'ProviderARN'                            => [ 'type' => 'string', ],
		'PutGatewayResponseRequest'              => [
			'type'     => 'structure',
			'required' => [ 'restApiId', 'responseType', ],
			'members'  => [
				'restApiId'          => [
					'shape'        => 'String',
					'location'     => 'uri',
					'locationName' => 'restapi_id',
				],
				'responseType'       => [
					'shape'        => 'GatewayResponseType',
					'location'     => 'uri',
					'locationName' => 'response_type',
				],
				'statusCode'         => [ 'shape' => 'StatusCode', ],
				'responseParameters' => [ 'shape' => 'MapOfStringToString', ],
				'responseTemplates'  => [ 'shape' => 'MapOfStringToString', ],
			],
		],
		'PutIntegrationRequest'                  => [
			'type'     => 'structure',
			'required' => [ 'restApiId', 'resourceId', 'httpMethod', 'type', ],
			'members'  => [
				'restApiId'             => [
					'shape'        => 'String',
					'location'     => 'uri',
					'locationName' => 'restapi_id',
				],
				'resourceId'            => [
					'shape'        => 'String',
					'location'     => 'uri',
					'locationName' => 'resource_id',
				],
				'httpMethod'            => [
					'shape'        => 'String',
					'location'     => 'uri',
					'locationName' => 'http_method',
				],
				'type'                  => [ 'shape' => 'IntegrationType', ],
				'integrationHttpMethod' => [ 'shape' => 'String', 'locationName' => 'httpMethod', ],
				'uri'                   => [ 'shape' => 'String', ],
				'connectionType'        => [ 'shape' => 'ConnectionType', ],
				'connectionId'          => [ 'shape' => 'String', ],
				'credentials'           => [ 'shape' => 'String', ],
				'requestParameters'     => [ 'shape' => 'MapOfStringToString', ],
				'requestTemplates'      => [ 'shape' => 'MapOfStringToString', ],
				'passthroughBehavior'   => [ 'shape' => 'String', ],
				'cacheNamespace'        => [ 'shape' => 'String', ],
				'cacheKeyParameters'    => [ 'shape' => 'ListOfString', ],
				'contentHandling'       => [ 'shape' => 'ContentHandlingStrategy', ],
				'timeoutInMillis'       => [ 'shape' => 'NullableInteger', ],
			],
		],
		'PutIntegrationResponseRequest'          => [
			'type'     => 'structure',
			'required' => [
				'restApiId',
				'resourceId',
				'httpMethod',
				'statusCode',
			],
			'members'  => [
				'restApiId'          => [
					'shape'        => 'String',
					'location'     => 'uri',
					'locationName' => 'restapi_id',
				],
				'resourceId'         => [
					'shape'        => 'String',
					'location'     => 'uri',
					'locationName' => 'resource_id',
				],
				'httpMethod'         => [
					'shape'        => 'String',
					'location'     => 'uri',
					'locationName' => 'http_method',
				],
				'statusCode'         => [
					'shape'        => 'StatusCode',
					'location'     => 'uri',
					'locationName' => 'status_code',
				],
				'selectionPattern'   => [ 'shape' => 'String', ],
				'responseParameters' => [ 'shape' => 'MapOfStringToString', ],
				'responseTemplates'  => [ 'shape' => 'MapOfStringToString', ],
				'contentHandling'    => [ 'shape' => 'ContentHandlingStrategy', ],
			],
		],
		'PutMethodRequest'                       => [
			'type'     => 'structure',
			'required' => [
				'restApiId',
				'resourceId',
				'httpMethod',
				'authorizationType',
			],
			'members'  => [
				'restApiId'           => [
					'shape'        => 'String',
					'location'     => 'uri',
					'locationName' => 'restapi_id',
				],
				'resourceId'          => [
					'shape'        => 'String',
					'location'     => 'uri',
					'locationName' => 'resource_id',
				],
				'httpMethod'          => [
					'shape'        => 'String',
					'location'     => 'uri',
					'locationName' => 'http_method',
				],
				'authorizationType'   => [ 'shape' => 'String', ],
				'authorizerId'        => [ 'shape' => 'String', ],
				'apiKeyRequired'      => [ 'shape' => 'Boolean', ],
				'operationName'       => [ 'shape' => 'String', ],
				'requestParameters'   => [ 'shape' => 'MapOfStringToBoolean', ],
				'requestModels'       => [ 'shape' => 'MapOfStringToString', ],
				'requestValidatorId'  => [ 'shape' => 'String', ],
				'authorizationScopes' => [ 'shape' => 'ListOfString', ],
			],
		],
		'PutMethodResponseRequest'               => [
			'type'     => 'structure',
			'required' => [
				'restApiId',
				'resourceId',
				'httpMethod',
				'statusCode',
			],
			'members'  => [
				'restApiId'          => [
					'shape'        => 'String',
					'location'     => 'uri',
					'locationName' => 'restapi_id',
				],
				'resourceId'         => [
					'shape'        => 'String',
					'location'     => 'uri',
					'locationName' => 'resource_id',
				],
				'httpMethod'         => [
					'shape'        => 'String',
					'location'     => 'uri',
					'locationName' => 'http_method',
				],
				'statusCode'         => [
					'shape'        => 'StatusCode',
					'location'     => 'uri',
					'locationName' => 'status_code',
				],
				'responseParameters' => [ 'shape' => 'MapOfStringToBoolean', ],
				'responseModels'     => [ 'shape' => 'MapOfStringToString', ],
			],
		],
		'PutMode'                                => [ 'type' => 'string', 'enum' => [ 'merge', 'overwrite', ], ],
		'PutRestApiRequest'                      => [
			'type'     => 'structure',
			'required' => [ 'restApiId', 'body', ],
			'members'  => [
				'restApiId'      => [
					'shape'        => 'String',
					'location'     => 'uri',
					'locationName' => 'restapi_id',
				],
				'mode'           => [
					'shape'        => 'PutMode',
					'location'     => 'querystring',
					'locationName' => 'mode',
				],
				'failOnWarnings' => [
					'shape'        => 'Boolean',
					'location'     => 'querystring',
					'locationName' => 'failonwarnings',
				],
				'parameters'     => [
					'shape'    => 'MapOfStringToString',
					'location' => 'querystring',
				],
				'body'           => [ 'shape' => 'Blob', ],
			],
			'payload'  => 'body',
		],
		'QuotaPeriodType'                        => [ 'type' => 'string', 'enum' => [ 'DAY', 'WEEK', 'MONTH', ], ],
		'QuotaSettings'                          => [
			'type'    => 'structure',
			'members' => [
				'limit'  => [ 'shape' => 'Integer', ],
				'offset' => [ 'shape' => 'Integer', ],
				'period' => [ 'shape' => 'QuotaPeriodType', ],
			],
		],
		'RequestValidator'                       => [
			'type'    => 'structure',
			'members' => [
				'id'                        => [ 'shape' => 'String', ],
				'name'                      => [ 'shape' => 'String', ],
				'validateRequestBody'       => [ 'shape' => 'Boolean', ],
				'validateRequestParameters' => [ 'shape' => 'Boolean', ],
			],
		],
		'RequestValidators'                      => [
			'type'    => 'structure',
			'members' => [
				'position' => [ 'shape' => 'String', ],
				'items'    => [
					'shape'        => 'ListOfRequestValidator',
					'locationName' => 'item',
				],
			],
		],
		'Resource'                               => [
			'type'    => 'structure',
			'members' => [
				'id'              => [ 'shape' => 'String', ],
				'parentId'        => [ 'shape' => 'String', ],
				'pathPart'        => [ 'shape' => 'String', ],
				'path'            => [ 'shape' => 'String', ],
				'resourceMethods' => [ 'shape' => 'MapOfMethod', ],
			],
		],
		'Resources'                              => [
			'type'    => 'structure',
			'members' => [
				'position' => [ 'shape' => 'String', ],
				'items'    => [
					'shape'        => 'ListOfResource',
					'locationName' => 'item',
				],
			],
		],
		'RestApi'                                => [
			'type'    => 'structure',
			'members' => [
				'id'                     => [ 'shape' => 'String', ],
				'name'                   => [ 'shape' => 'String', ],
				'description'            => [ 'shape' => 'String', ],
				'createdDate'            => [ 'shape' => 'Timestamp', ],
				'version'                => [ 'shape' => 'String', ],
				'warnings'               => [ 'shape' => 'ListOfString', ],
				'binaryMediaTypes'       => [ 'shape' => 'ListOfString', ],
				'minimumCompressionSize' => [ 'shape' => 'NullableInteger', ],
				'apiKeySource'           => [ 'shape' => 'ApiKeySourceType', ],
				'endpointConfiguration'  => [ 'shape' => 'EndpointConfiguration', ],
				'policy'                 => [ 'shape' => 'String', ],
				'tags'                   => [ 'shape' => 'MapOfStringToString', ],
			],
		],
		'RestApis'                               => [
			'type'    => 'structure',
			'members' => [
				'position' => [ 'shape' => 'String', ],
				'items'    => [
					'shape'        => 'ListOfRestApi',
					'locationName' => 'item',
				],
			],
		],
		'SdkConfigurationProperty'               => [
			'type'    => 'structure',
			'members' => [
				'name'         => [ 'shape' => 'String', ],
				'friendlyName' => [ 'shape' => 'String', ],
				'description'  => [ 'shape' => 'String', ],
				'required'     => [ 'shape' => 'Boolean', ],
				'defaultValue' => [ 'shape' => 'String', ],
			],
		],
		'SdkResponse'                            => [
			'type'    => 'structure',
			'members' => [
				'contentType'        => [
					'shape'        => 'String',
					'location'     => 'header',
					'locationName' => 'Content-Type',
				],
				'contentDisposition' => [
					'shape'        => 'String',
					'location'     => 'header',
					'locationName' => 'Content-Disposition',
				],
				'body'               => [ 'shape' => 'Blob', ],
			],
			'payload' => 'body',
		],
		'SdkType'                                => [
			'type'    => 'structure',
			'members' => [
				'id'                      => [ 'shape' => 'String', ],
				'friendlyName'            => [ 'shape' => 'String', ],
				'description'             => [ 'shape' => 'String', ],
				'configurationProperties' => [ 'shape' => 'ListOfSdkConfigurationProperty', ],
			],
		],
		'SdkTypes'                               => [
			'type'    => 'structure',
			'members' => [
				'position' => [ 'shape' => 'String', ],
				'items'    => [
					'shape'        => 'ListOfSdkType',
					'locationName' => 'item',
				],
			],
		],
		'SecurityPolicy'                         => [ 'type' => 'string', 'enum' => [ 'TLS_1_0', 'TLS_1_2', ], ],
		'ServiceUnavailableException'            => [
			'type'      => 'structure',
			'members'   => [
				'retryAfterSeconds' => [
					'shape'        => 'String',
					'location'     => 'header',
					'locationName' => 'Retry-After',
				],
				'message'           => [ 'shape' => 'String', ],
			],
			'error'     => [ 'httpStatusCode' => 503, ],
			'exception' => true,
			'fault'     => true,
		],
		'Stage'                                  => [
			'type'    => 'structure',
			'members' => [
				'deploymentId'         => [ 'shape' => 'String', ],
				'clientCertificateId'  => [ 'shape' => 'String', ],
				'stageName'            => [ 'shape' => 'String', ],
				'description'          => [ 'shape' => 'String', ],
				'cacheClusterEnabled'  => [ 'shape' => 'Boolean', ],
				'cacheClusterSize'     => [ 'shape' => 'CacheClusterSize', ],
				'cacheClusterStatus'   => [ 'shape' => 'CacheClusterStatus', ],
				'methodSettings'       => [ 'shape' => 'MapOfMethodSettings', ],
				'variables'            => [ 'shape' => 'MapOfStringToString', ],
				'documentationVersion' => [ 'shape' => 'String', ],
				'accessLogSettings'    => [ 'shape' => 'AccessLogSettings', ],
				'canarySettings'       => [ 'shape' => 'CanarySettings', ],
				'tracingEnabled'       => [ 'shape' => 'Boolean', ],
				'webAclArn'            => [ 'shape' => 'String', ],
				'tags'                 => [ 'shape' => 'MapOfStringToString', ],
				'createdDate'          => [ 'shape' => 'Timestamp', ],
				'lastUpdatedDate'      => [ 'shape' => 'Timestamp', ],
			],
		],
		'StageKey'                               => [
			'type'    => 'structure',
			'members' => [
				'restApiId' => [ 'shape' => 'String', ],
				'stageName' => [ 'shape' => 'String', ],
			],
		],
		'Stages'                                 => [
			'type'    => 'structure',
			'members' => [ 'item' => [ 'shape' => 'ListOfStage', ], ],
		],
		'StatusCode'                             => [ 'type' => 'string', 'pattern' => '[1-5]\\d\\d', ],
		'String'                                 => [ 'type' => 'string', ],
		'TagResourceRequest'                     => [
			'type'     => 'structure',
			'required' => [ 'resourceArn', 'tags', ],
			'members'  => [
				'resourceArn' => [
					'shape'        => 'String',
					'location'     => 'uri',
					'locationName' => 'resource_arn',
				],
				'tags'        => [ 'shape' => 'MapOfStringToString', ],
			],
		],
		'Tags'                                   => [
			'type'    => 'structure',
			'members' => [ 'tags' => [ 'shape' => 'MapOfStringToString', ], ],
		],
		'Template'                               => [
			'type'    => 'structure',
			'members' => [ 'value' => [ 'shape' => 'String', ], ],
		],
		'TestInvokeAuthorizerRequest'            => [
			'type'     => 'structure',
			'required' => [ 'restApiId', 'authorizerId', ],
			'members'  => [
				'restApiId'           => [
					'shape'        => 'String',
					'location'     => 'uri',
					'locationName' => 'restapi_id',
				],
				'authorizerId'        => [
					'shape'        => 'String',
					'location'     => 'uri',
					'locationName' => 'authorizer_id',
				],
				'headers'             => [ 'shape' => 'MapOfStringToString', ],
				'multiValueHeaders'   => [ 'shape' => 'MapOfStringToList', ],
				'pathWithQueryString' => [ 'shape' => 'String', ],
				'body'                => [ 'shape' => 'String', ],
				'stageVariables'      => [ 'shape' => 'MapOfStringToString', ],
				'additionalContext'   => [ 'shape' => 'MapOfStringToString', ],
			],
		],
		'TestInvokeAuthorizerResponse'           => [
			'type'    => 'structure',
			'members' => [
				'clientStatus'  => [ 'shape' => 'Integer', ],
				'log'           => [ 'shape' => 'String', ],
				'latency'       => [ 'shape' => 'Long', ],
				'principalId'   => [ 'shape' => 'String', ],
				'policy'        => [ 'shape' => 'String', ],
				'authorization' => [ 'shape' => 'MapOfStringToList', ],
				'claims'        => [ 'shape' => 'MapOfStringToString', ],
			],
		],
		'TestInvokeMethodRequest'                => [
			'type'     => 'structure',
			'required' => [ 'restApiId', 'resourceId', 'httpMethod', ],
			'members'  => [
				'restApiId'           => [
					'shape'        => 'String',
					'location'     => 'uri',
					'locationName' => 'restapi_id',
				],
				'resourceId'          => [
					'shape'        => 'String',
					'location'     => 'uri',
					'locationName' => 'resource_id',
				],
				'httpMethod'          => [
					'shape'        => 'String',
					'location'     => 'uri',
					'locationName' => 'http_method',
				],
				'pathWithQueryString' => [ 'shape' => 'String', ],
				'body'                => [ 'shape' => 'String', ],
				'headers'             => [ 'shape' => 'MapOfStringToString', ],
				'multiValueHeaders'   => [ 'shape' => 'MapOfStringToList', ],
				'clientCertificateId' => [ 'shape' => 'String', ],
				'stageVariables'      => [ 'shape' => 'MapOfStringToString', ],
			],
		],
		'TestInvokeMethodResponse'               => [
			'type'    => 'structure',
			'members' => [
				'status'            => [ 'shape' => 'Integer', ],
				'body'              => [ 'shape' => 'String', ],
				'headers'           => [ 'shape' => 'MapOfStringToString', ],
				'multiValueHeaders' => [ 'shape' => 'MapOfStringToList', ],
				'log'               => [ 'shape' => 'String', ],
				'latency'           => [ 'shape' => 'Long', ],
			],
		],
		'ThrottleSettings'                       => [
			'type'    => 'structure',
			'members' => [
				'burstLimit' => [ 'shape' => 'Integer', ],
				'rateLimit'  => [ 'shape' => 'Double', ],
			],
		],
		'Timestamp'                              => [ 'type' => 'timestamp', ],
		'TooManyRequestsException'               => [
			'type'      => 'structure',
			'members'   => [
				'retryAfterSeconds' => [
					'shape'        => 'String',
					'location'     => 'header',
					'locationName' => 'Retry-After',
				],
				'message'           => [ 'shape' => 'String', ],
			],
			'error'     => [ 'httpStatusCode' => 429, ],
			'exception' => true,
		],
		'UnauthorizedCacheControlHeaderStrategy' => [
			'type' => 'string',
			'enum' => [
				'FAIL_WITH_403',
				'SUCCEED_WITH_RESPONSE_HEADER',
				'SUCCEED_WITHOUT_RESPONSE_HEADER',
			],
		],
		'UnauthorizedException'                  => [
			'type'      => 'structure',
			'members'   => [ 'message' => [ 'shape' => 'String', ], ],
			'error'     => [ 'httpStatusCode' => 401, ],
			'exception' => true,
		],
		'UntagResourceRequest'                   => [
			'type'     => 'structure',
			'required' => [ 'resourceArn', 'tagKeys', ],
			'members'  => [
				'resourceArn' => [
					'shape'        => 'String',
					'location'     => 'uri',
					'locationName' => 'resource_arn',
				],
				'tagKeys'     => [
					'shape'        => 'ListOfString',
					'location'     => 'querystring',
					'locationName' => 'tagKeys',
				],
			],
		],
		'UpdateAccountRequest'                   => [
			'type'    => 'structure',
			'members' => [ 'patchOperations' => [ 'shape' => 'ListOfPatchOperation', ], ],
		],
		'UpdateApiKeyRequest'                    => [
			'type'     => 'structure',
			'required' => [ 'apiKey', ],
			'members'  => [
				'apiKey'          => [
					'shape'        => 'String',
					'location'     => 'uri',
					'locationName' => 'api_Key',
				],
				'patchOperations' => [ 'shape' => 'ListOfPatchOperation', ],
			],
		],
		'UpdateAuthorizerRequest'                => [
			'type'     => 'structure',
			'required' => [ 'restApiId', 'authorizerId', ],
			'members'  => [
				'restApiId'       => [
					'shape'        => 'String',
					'location'     => 'uri',
					'locationName' => 'restapi_id',
				],
				'authorizerId'    => [
					'shape'        => 'String',
					'location'     => 'uri',
					'locationName' => 'authorizer_id',
				],
				'patchOperations' => [ 'shape' => 'ListOfPatchOperation', ],
			],
		],
		'UpdateBasePathMappingRequest'           => [
			'type'     => 'structure',
			'required' => [ 'domainName', 'basePath', ],
			'members'  => [
				'domainName'      => [
					'shape'        => 'String',
					'location'     => 'uri',
					'locationName' => 'domain_name',
				],
				'basePath'        => [
					'shape'        => 'String',
					'location'     => 'uri',
					'locationName' => 'base_path',
				],
				'patchOperations' => [ 'shape' => 'ListOfPatchOperation', ],
			],
		],
		'UpdateClientCertificateRequest'         => [
			'type'     => 'structure',
			'required' => [ 'clientCertificateId', ],
			'members'  => [
				'clientCertificateId' => [
					'shape'        => 'String',
					'location'     => 'uri',
					'locationName' => 'clientcertificate_id',
				],
				'patchOperations'     => [ 'shape' => 'ListOfPatchOperation', ],
			],
		],
		'UpdateDeploymentRequest'                => [
			'type'     => 'structure',
			'required' => [ 'restApiId', 'deploymentId', ],
			'members'  => [
				'restApiId'       => [
					'shape'        => 'String',
					'location'     => 'uri',
					'locationName' => 'restapi_id',
				],
				'deploymentId'    => [
					'shape'        => 'String',
					'location'     => 'uri',
					'locationName' => 'deployment_id',
				],
				'patchOperations' => [ 'shape' => 'ListOfPatchOperation', ],
			],
		],
		'UpdateDocumentationPartRequest'         => [
			'type'     => 'structure',
			'required' => [ 'restApiId', 'documentationPartId', ],
			'members'  => [
				'restApiId'           => [
					'shape'        => 'String',
					'location'     => 'uri',
					'locationName' => 'restapi_id',
				],
				'documentationPartId' => [
					'shape'        => 'String',
					'location'     => 'uri',
					'locationName' => 'part_id',
				],
				'patchOperations'     => [ 'shape' => 'ListOfPatchOperation', ],
			],
		],
		'UpdateDocumentationVersionRequest'      => [
			'type'     => 'structure',
			'required' => [ 'restApiId', 'documentationVersion', ],
			'members'  => [
				'restApiId'            => [
					'shape'        => 'String',
					'location'     => 'uri',
					'locationName' => 'restapi_id',
				],
				'documentationVersion' => [
					'shape'        => 'String',
					'location'     => 'uri',
					'locationName' => 'doc_version',
				],
				'patchOperations'      => [ 'shape' => 'ListOfPatchOperation', ],
			],
		],
		'UpdateDomainNameRequest'                => [
			'type'     => 'structure',
			'required' => [ 'domainName', ],
			'members'  => [
				'domainName'      => [
					'shape'        => 'String',
					'location'     => 'uri',
					'locationName' => 'domain_name',
				],
				'patchOperations' => [ 'shape' => 'ListOfPatchOperation', ],
			],
		],
		'UpdateGatewayResponseRequest'           => [
			'type'     => 'structure',
			'required' => [ 'restApiId', 'responseType', ],
			'members'  => [
				'restApiId'       => [
					'shape'        => 'String',
					'location'     => 'uri',
					'locationName' => 'restapi_id',
				],
				'responseType'    => [
					'shape'        => 'GatewayResponseType',
					'location'     => 'uri',
					'locationName' => 'response_type',
				],
				'patchOperations' => [ 'shape' => 'ListOfPatchOperation', ],
			],
		],
		'UpdateIntegrationRequest'               => [
			'type'     => 'structure',
			'required' => [ 'restApiId', 'resourceId', 'httpMethod', ],
			'members'  => [
				'restApiId'       => [
					'shape'        => 'String',
					'location'     => 'uri',
					'locationName' => 'restapi_id',
				],
				'resourceId'      => [
					'shape'        => 'String',
					'location'     => 'uri',
					'locationName' => 'resource_id',
				],
				'httpMethod'      => [
					'shape'        => 'String',
					'location'     => 'uri',
					'locationName' => 'http_method',
				],
				'patchOperations' => [ 'shape' => 'ListOfPatchOperation', ],
			],
		],
		'UpdateIntegrationResponseRequest'       => [
			'type'     => 'structure',
			'required' => [
				'restApiId',
				'resourceId',
				'httpMethod',
				'statusCode',
			],
			'members'  => [
				'restApiId'       => [
					'shape'        => 'String',
					'location'     => 'uri',
					'locationName' => 'restapi_id',
				],
				'resourceId'      => [
					'shape'        => 'String',
					'location'     => 'uri',
					'locationName' => 'resource_id',
				],
				'httpMethod'      => [
					'shape'        => 'String',
					'location'     => 'uri',
					'locationName' => 'http_method',
				],
				'statusCode'      => [
					'shape'        => 'StatusCode',
					'location'     => 'uri',
					'locationName' => 'status_code',
				],
				'patchOperations' => [ 'shape' => 'ListOfPatchOperation', ],
			],
		],
		'UpdateMethodRequest'                    => [
			'type'     => 'structure',
			'required' => [ 'restApiId', 'resourceId', 'httpMethod', ],
			'members'  => [
				'restApiId'       => [
					'shape'        => 'String',
					'location'     => 'uri',
					'locationName' => 'restapi_id',
				],
				'resourceId'      => [
					'shape'        => 'String',
					'location'     => 'uri',
					'locationName' => 'resource_id',
				],
				'httpMethod'      => [
					'shape'        => 'String',
					'location'     => 'uri',
					'locationName' => 'http_method',
				],
				'patchOperations' => [ 'shape' => 'ListOfPatchOperation', ],
			],
		],
		'UpdateMethodResponseRequest'            => [
			'type'     => 'structure',
			'required' => [
				'restApiId',
				'resourceId',
				'httpMethod',
				'statusCode',
			],
			'members'  => [
				'restApiId'       => [
					'shape'        => 'String',
					'location'     => 'uri',
					'locationName' => 'restapi_id',
				],
				'resourceId'      => [
					'shape'        => 'String',
					'location'     => 'uri',
					'locationName' => 'resource_id',
				],
				'httpMethod'      => [
					'shape'        => 'String',
					'location'     => 'uri',
					'locationName' => 'http_method',
				],
				'statusCode'      => [
					'shape'        => 'StatusCode',
					'location'     => 'uri',
					'locationName' => 'status_code',
				],
				'patchOperations' => [ 'shape' => 'ListOfPatchOperation', ],
			],
		],
		'UpdateModelRequest'                     => [
			'type'     => 'structure',
			'required' => [ 'restApiId', 'modelName', ],
			'members'  => [
				'restApiId'       => [
					'shape'        => 'String',
					'location'     => 'uri',
					'locationName' => 'restapi_id',
				],
				'modelName'       => [
					'shape'        => 'String',
					'location'     => 'uri',
					'locationName' => 'model_name',
				],
				'patchOperations' => [ 'shape' => 'ListOfPatchOperation', ],
			],
		],
		'UpdateRequestValidatorRequest'          => [
			'type'     => 'structure',
			'required' => [ 'restApiId', 'requestValidatorId', ],
			'members'  => [
				'restApiId'          => [
					'shape'        => 'String',
					'location'     => 'uri',
					'locationName' => 'restapi_id',
				],
				'requestValidatorId' => [
					'shape'        => 'String',
					'location'     => 'uri',
					'locationName' => 'requestvalidator_id',
				],
				'patchOperations'    => [ 'shape' => 'ListOfPatchOperation', ],
			],
		],
		'UpdateResourceRequest'                  => [
			'type'     => 'structure',
			'required' => [ 'restApiId', 'resourceId', ],
			'members'  => [
				'restApiId'       => [
					'shape'        => 'String',
					'location'     => 'uri',
					'locationName' => 'restapi_id',
				],
				'resourceId'      => [
					'shape'        => 'String',
					'location'     => 'uri',
					'locationName' => 'resource_id',
				],
				'patchOperations' => [ 'shape' => 'ListOfPatchOperation', ],
			],
		],
		'UpdateRestApiRequest'                   => [
			'type'     => 'structure',
			'required' => [ 'restApiId', ],
			'members'  => [
				'restApiId'       => [
					'shape'        => 'String',
					'location'     => 'uri',
					'locationName' => 'restapi_id',
				],
				'patchOperations' => [ 'shape' => 'ListOfPatchOperation', ],
			],
		],
		'UpdateStageRequest'                     => [
			'type'     => 'structure',
			'required' => [ 'restApiId', 'stageName', ],
			'members'  => [
				'restApiId'       => [
					'shape'        => 'String',
					'location'     => 'uri',
					'locationName' => 'restapi_id',
				],
				'stageName'       => [
					'shape'        => 'String',
					'location'     => 'uri',
					'locationName' => 'stage_name',
				],
				'patchOperations' => [ 'shape' => 'ListOfPatchOperation', ],
			],
		],
		'UpdateUsagePlanRequest'                 => [
			'type'     => 'structure',
			'required' => [ 'usagePlanId', ],
			'members'  => [
				'usagePlanId'     => [
					'shape'        => 'String',
					'location'     => 'uri',
					'locationName' => 'usageplanId',
				],
				'patchOperations' => [ 'shape' => 'ListOfPatchOperation', ],
			],
		],
		'UpdateUsageRequest'                     => [
			'type'     => 'structure',
			'required' => [ 'usagePlanId', 'keyId', ],
			'members'  => [
				'usagePlanId'     => [
					'shape'        => 'String',
					'location'     => 'uri',
					'locationName' => 'usageplanId',
				],
				'keyId'           => [
					'shape'        => 'String',
					'location'     => 'uri',
					'locationName' => 'keyId',
				],
				'patchOperations' => [ 'shape' => 'ListOfPatchOperation', ],
			],
		],
		'UpdateVpcLinkRequest'                   => [
			'type'     => 'structure',
			'required' => [ 'vpcLinkId', ],
			'members'  => [
				'vpcLinkId'       => [
					'shape'        => 'String',
					'location'     => 'uri',
					'locationName' => 'vpclink_id',
				],
				'patchOperations' => [ 'shape' => 'ListOfPatchOperation', ],
			],
		],
		'Usage'                                  => [
			'type'    => 'structure',
			'members' => [
				'usagePlanId' => [ 'shape' => 'String', ],
				'startDate'   => [ 'shape' => 'String', ],
				'endDate'     => [ 'shape' => 'String', ],
				'position'    => [ 'shape' => 'String', ],
				'items'       => [
					'shape'        => 'MapOfKeyUsages',
					'locationName' => 'values',
				],
			],
		],
		'UsagePlan'                              => [
			'type'    => 'structure',
			'members' => [
				'id'          => [ 'shape' => 'String', ],
				'name'        => [ 'shape' => 'String', ],
				'description' => [ 'shape' => 'String', ],
				'apiStages'   => [ 'shape' => 'ListOfApiStage', ],
				'throttle'    => [ 'shape' => 'ThrottleSettings', ],
				'quota'       => [ 'shape' => 'QuotaSettings', ],
				'productCode' => [ 'shape' => 'String', ],
				'tags'        => [ 'shape' => 'MapOfStringToString', ],
			],
		],
		'UsagePlanKey'                           => [
			'type'    => 'structure',
			'members' => [
				'id'    => [ 'shape' => 'String', ],
				'type'  => [ 'shape' => 'String', ],
				'value' => [ 'shape' => 'String', ],
				'name'  => [ 'shape' => 'String', ],
			],
		],
		'UsagePlanKeys'                          => [
			'type'    => 'structure',
			'members' => [
				'position' => [ 'shape' => 'String', ],
				'items'    => [
					'shape'        => 'ListOfUsagePlanKey',
					'locationName' => 'item',
				],
			],
		],
		'UsagePlans'                             => [
			'type'    => 'structure',
			'members' => [
				'position' => [ 'shape' => 'String', ],
				'items'    => [
					'shape'        => 'ListOfUsagePlan',
					'locationName' => 'item',
				],
			],
		],
		'VpcLink'                                => [
			'type'    => 'structure',
			'members' => [
				'id'            => [ 'shape' => 'String', ],
				'name'          => [ 'shape' => 'String', ],
				'description'   => [ 'shape' => 'String', ],
				'targetArns'    => [ 'shape' => 'ListOfString', ],
				'status'        => [ 'shape' => 'VpcLinkStatus', ],
				'statusMessage' => [ 'shape' => 'String', ],
				'tags'          => [ 'shape' => 'MapOfStringToString', ],
			],
		],
		'VpcLinkStatus'                          => [
			'type' => 'string',
			'enum' => [ 'AVAILABLE', 'PENDING', 'DELETING', 'FAILED', ],
		],
		'VpcLinks'                               => [
			'type'    => 'structure',
			'members' => [
				'position' => [ 'shape' => 'String', ],
				'items'    => [
					'shape'        => 'ListOfVpcLink',
					'locationName' => 'item',
				],
			],
		],
	],
];
