<?php
// This file was auto-generated from sdk-root/src/data/backup/2018-11-15/api-2.json
return [
	'version'    => '2.0',
	'metadata'   => [
		'apiVersion'       => '2018-11-15',
		'endpointPrefix'   => 'backup',
		'jsonVersion'      => '1.1',
		'protocol'         => 'rest-json',
		'serviceFullName'  => 'AWS Backup',
		'serviceId'        => 'Backup',
		'signatureVersion' => 'v4',
		'uid'              => 'backup-2018-11-15',
	],
	'operations' => [
		'CreateBackupPlan'                => [
			'name'       => 'CreateBackupPlan',
			'http'       => [ 'method' => 'PUT', 'requestUri' => '/backup/plans/', ],
			'input'      => [ 'shape' => 'CreateBackupPlanInput', ],
			'output'     => [ 'shape' => 'CreateBackupPlanOutput', ],
			'errors'     => [
				[ 'shape' => 'LimitExceededException', ],
				[ 'shape' => 'AlreadyExistsException', ],
				[ 'shape' => 'InvalidParameterValueException', ],
				[ 'shape' => 'MissingParameterValueException', ],
				[ 'shape' => 'ServiceUnavailableException', ],
			],
			'idempotent' => true,
		],
		'CreateBackupSelection'           => [
			'name'       => 'CreateBackupSelection',
			'http'       => [
				'method'     => 'PUT',
				'requestUri' => '/backup/plans/{backupPlanId}/selections/',
			],
			'input'      => [ 'shape' => 'CreateBackupSelectionInput', ],
			'output'     => [ 'shape' => 'CreateBackupSelectionOutput', ],
			'errors'     => [
				[ 'shape' => 'LimitExceededException', ],
				[ 'shape' => 'AlreadyExistsException', ],
				[ 'shape' => 'InvalidParameterValueException', ],
				[ 'shape' => 'MissingParameterValueException', ],
				[ 'shape' => 'ServiceUnavailableException', ],
			],
			'idempotent' => true,
		],
		'CreateBackupVault'               => [
			'name'       => 'CreateBackupVault',
			'http'       => [
				'method'     => 'PUT',
				'requestUri' => '/backup-vaults/{backupVaultName}',
			],
			'input'      => [ 'shape' => 'CreateBackupVaultInput', ],
			'output'     => [ 'shape' => 'CreateBackupVaultOutput', ],
			'errors'     => [
				[ 'shape' => 'InvalidParameterValueException', ],
				[ 'shape' => 'MissingParameterValueException', ],
				[ 'shape' => 'ServiceUnavailableException', ],
				[ 'shape' => 'LimitExceededException', ],
				[ 'shape' => 'AlreadyExistsException', ],
			],
			'idempotent' => true,
		],
		'DeleteBackupPlan'                => [
			'name'   => 'DeleteBackupPlan',
			'http'   => [
				'method'     => 'DELETE',
				'requestUri' => '/backup/plans/{backupPlanId}',
			],
			'input'  => [ 'shape' => 'DeleteBackupPlanInput', ],
			'output' => [ 'shape' => 'DeleteBackupPlanOutput', ],
			'errors' => [
				[ 'shape' => 'ResourceNotFoundException', ],
				[ 'shape' => 'InvalidParameterValueException', ],
				[ 'shape' => 'MissingParameterValueException', ],
				[ 'shape' => 'ServiceUnavailableException', ],
				[ 'shape' => 'InvalidRequestException', ],
			],
		],
		'DeleteBackupSelection'           => [
			'name'   => 'DeleteBackupSelection',
			'http'   => [
				'method'     => 'DELETE',
				'requestUri' => '/backup/plans/{backupPlanId}/selections/{selectionId}',
			],
			'input'  => [ 'shape' => 'DeleteBackupSelectionInput', ],
			'errors' => [
				[ 'shape' => 'ResourceNotFoundException', ],
				[ 'shape' => 'InvalidParameterValueException', ],
				[ 'shape' => 'MissingParameterValueException', ],
				[ 'shape' => 'ServiceUnavailableException', ],
			],
		],
		'DeleteBackupVault'               => [
			'name'   => 'DeleteBackupVault',
			'http'   => [
				'method'     => 'DELETE',
				'requestUri' => '/backup-vaults/{backupVaultName}',
			],
			'input'  => [ 'shape' => 'DeleteBackupVaultInput', ],
			'errors' => [
				[ 'shape' => 'ResourceNotFoundException', ],
				[ 'shape' => 'InvalidParameterValueException', ],
				[ 'shape' => 'MissingParameterValueException', ],
				[ 'shape' => 'ServiceUnavailableException', ],
				[ 'shape' => 'InvalidRequestException', ],
			],
		],
		'DeleteBackupVaultAccessPolicy'   => [
			'name'       => 'DeleteBackupVaultAccessPolicy',
			'http'       => [
				'method'     => 'DELETE',
				'requestUri' => '/backup-vaults/{backupVaultName}/access-policy',
			],
			'input'      => [ 'shape' => 'DeleteBackupVaultAccessPolicyInput', ],
			'errors'     => [
				[ 'shape' => 'ResourceNotFoundException', ],
				[ 'shape' => 'InvalidParameterValueException', ],
				[ 'shape' => 'MissingParameterValueException', ],
				[ 'shape' => 'ServiceUnavailableException', ],
			],
			'idempotent' => true,
		],
		'DeleteBackupVaultNotifications'  => [
			'name'       => 'DeleteBackupVaultNotifications',
			'http'       => [
				'method'     => 'DELETE',
				'requestUri' => '/backup-vaults/{backupVaultName}/notification-configuration',
			],
			'input'      => [ 'shape' => 'DeleteBackupVaultNotificationsInput', ],
			'errors'     => [
				[ 'shape' => 'ResourceNotFoundException', ],
				[ 'shape' => 'InvalidParameterValueException', ],
				[ 'shape' => 'MissingParameterValueException', ],
				[ 'shape' => 'ServiceUnavailableException', ],
			],
			'idempotent' => true,
		],
		'DeleteRecoveryPoint'             => [
			'name'       => 'DeleteRecoveryPoint',
			'http'       => [
				'method'     => 'DELETE',
				'requestUri' => '/backup-vaults/{backupVaultName}/recovery-points/{recoveryPointArn}',
			],
			'input'      => [ 'shape' => 'DeleteRecoveryPointInput', ],
			'errors'     => [
				[ 'shape' => 'ResourceNotFoundException', ],
				[ 'shape' => 'InvalidParameterValueException', ],
				[ 'shape' => 'MissingParameterValueException', ],
				[ 'shape' => 'ServiceUnavailableException', ],
				[ 'shape' => 'InvalidRequestException', ],
			],
			'idempotent' => true,
		],
		'DescribeBackupJob'               => [
			'name'       => 'DescribeBackupJob',
			'http'       => [
				'method'     => 'GET',
				'requestUri' => '/backup-jobs/{backupJobId}',
			],
			'input'      => [ 'shape' => 'DescribeBackupJobInput', ],
			'output'     => [ 'shape' => 'DescribeBackupJobOutput', ],
			'errors'     => [
				[ 'shape' => 'ResourceNotFoundException', ],
				[ 'shape' => 'InvalidParameterValueException', ],
				[ 'shape' => 'MissingParameterValueException', ],
				[ 'shape' => 'ServiceUnavailableException', ],
				[ 'shape' => 'DependencyFailureException', ],
			],
			'idempotent' => true,
		],
		'DescribeBackupVault'             => [
			'name'       => 'DescribeBackupVault',
			'http'       => [
				'method'     => 'GET',
				'requestUri' => '/backup-vaults/{backupVaultName}',
			],
			'input'      => [ 'shape' => 'DescribeBackupVaultInput', ],
			'output'     => [ 'shape' => 'DescribeBackupVaultOutput', ],
			'errors'     => [
				[ 'shape' => 'ResourceNotFoundException', ],
				[ 'shape' => 'InvalidParameterValueException', ],
				[ 'shape' => 'MissingParameterValueException', ],
				[ 'shape' => 'ServiceUnavailableException', ],
			],
			'idempotent' => true,
		],
		'DescribeProtectedResource'       => [
			'name'       => 'DescribeProtectedResource',
			'http'       => [
				'method'     => 'GET',
				'requestUri' => '/resources/{resourceArn}',
			],
			'input'      => [ 'shape' => 'DescribeProtectedResourceInput', ],
			'output'     => [ 'shape' => 'DescribeProtectedResourceOutput', ],
			'errors'     => [
				[ 'shape' => 'MissingParameterValueException', ],
				[ 'shape' => 'InvalidParameterValueException', ],
				[ 'shape' => 'ServiceUnavailableException', ],
				[ 'shape' => 'ResourceNotFoundException', ],
			],
			'idempotent' => true,
		],
		'DescribeRecoveryPoint'           => [
			'name'       => 'DescribeRecoveryPoint',
			'http'       => [
				'method'     => 'GET',
				'requestUri' => '/backup-vaults/{backupVaultName}/recovery-points/{recoveryPointArn}',
			],
			'input'      => [ 'shape' => 'DescribeRecoveryPointInput', ],
			'output'     => [ 'shape' => 'DescribeRecoveryPointOutput', ],
			'errors'     => [
				[ 'shape' => 'ResourceNotFoundException', ],
				[ 'shape' => 'InvalidParameterValueException', ],
				[ 'shape' => 'MissingParameterValueException', ],
				[ 'shape' => 'ServiceUnavailableException', ],
			],
			'idempotent' => true,
		],
		'DescribeRestoreJob'              => [
			'name'       => 'DescribeRestoreJob',
			'http'       => [
				'method'     => 'GET',
				'requestUri' => '/restore-jobs/{restoreJobId}',
			],
			'input'      => [ 'shape' => 'DescribeRestoreJobInput', ],
			'output'     => [ 'shape' => 'DescribeRestoreJobOutput', ],
			'errors'     => [
				[ 'shape' => 'ResourceNotFoundException', ],
				[ 'shape' => 'InvalidParameterValueException', ],
				[ 'shape' => 'MissingParameterValueException', ],
				[ 'shape' => 'ServiceUnavailableException', ],
				[ 'shape' => 'DependencyFailureException', ],
			],
			'idempotent' => true,
		],
		'ExportBackupPlanTemplate'        => [
			'name'   => 'ExportBackupPlanTemplate',
			'http'   => [
				'method'     => 'GET',
				'requestUri' => '/backup/plans/{backupPlanId}/toTemplate/',
			],
			'input'  => [ 'shape' => 'ExportBackupPlanTemplateInput', ],
			'output' => [ 'shape' => 'ExportBackupPlanTemplateOutput', ],
			'errors' => [
				[ 'shape' => 'InvalidParameterValueException', ],
				[ 'shape' => 'MissingParameterValueException', ],
				[ 'shape' => 'ServiceUnavailableException', ],
				[ 'shape' => 'ResourceNotFoundException', ],
			],
		],
		'GetBackupPlan'                   => [
			'name'       => 'GetBackupPlan',
			'http'       => [
				'method'     => 'GET',
				'requestUri' => '/backup/plans/{backupPlanId}/',
			],
			'input'      => [ 'shape' => 'GetBackupPlanInput', ],
			'output'     => [ 'shape' => 'GetBackupPlanOutput', ],
			'errors'     => [
				[ 'shape' => 'ResourceNotFoundException', ],
				[ 'shape' => 'InvalidParameterValueException', ],
				[ 'shape' => 'MissingParameterValueException', ],
				[ 'shape' => 'ServiceUnavailableException', ],
			],
			'idempotent' => true,
		],
		'GetBackupPlanFromJSON'           => [
			'name'   => 'GetBackupPlanFromJSON',
			'http'   => [
				'method'     => 'POST',
				'requestUri' => '/backup/template/json/toPlan',
			],
			'input'  => [ 'shape' => 'GetBackupPlanFromJSONInput', ],
			'output' => [ 'shape' => 'GetBackupPlanFromJSONOutput', ],
			'errors' => [
				[ 'shape' => 'LimitExceededException', ],
				[ 'shape' => 'InvalidParameterValueException', ],
				[ 'shape' => 'MissingParameterValueException', ],
				[ 'shape' => 'ServiceUnavailableException', ],
				[ 'shape' => 'InvalidRequestException', ],
			],
		],
		'GetBackupPlanFromTemplate'       => [
			'name'   => 'GetBackupPlanFromTemplate',
			'http'   => [
				'method'     => 'GET',
				'requestUri' => '/backup/template/plans/{templateId}/toPlan',
			],
			'input'  => [ 'shape' => 'GetBackupPlanFromTemplateInput', ],
			'output' => [ 'shape' => 'GetBackupPlanFromTemplateOutput', ],
			'errors' => [
				[ 'shape' => 'InvalidParameterValueException', ],
				[ 'shape' => 'MissingParameterValueException', ],
				[ 'shape' => 'ServiceUnavailableException', ],
				[ 'shape' => 'ResourceNotFoundException', ],
			],
		],
		'GetBackupSelection'              => [
			'name'       => 'GetBackupSelection',
			'http'       => [
				'method'     => 'GET',
				'requestUri' => '/backup/plans/{backupPlanId}/selections/{selectionId}',
			],
			'input'      => [ 'shape' => 'GetBackupSelectionInput', ],
			'output'     => [ 'shape' => 'GetBackupSelectionOutput', ],
			'errors'     => [
				[ 'shape' => 'ResourceNotFoundException', ],
				[ 'shape' => 'InvalidParameterValueException', ],
				[ 'shape' => 'MissingParameterValueException', ],
				[ 'shape' => 'ServiceUnavailableException', ],
			],
			'idempotent' => true,
		],
		'GetBackupVaultAccessPolicy'      => [
			'name'       => 'GetBackupVaultAccessPolicy',
			'http'       => [
				'method'     => 'GET',
				'requestUri' => '/backup-vaults/{backupVaultName}/access-policy',
			],
			'input'      => [ 'shape' => 'GetBackupVaultAccessPolicyInput', ],
			'output'     => [ 'shape' => 'GetBackupVaultAccessPolicyOutput', ],
			'errors'     => [
				[ 'shape' => 'ResourceNotFoundException', ],
				[ 'shape' => 'InvalidParameterValueException', ],
				[ 'shape' => 'MissingParameterValueException', ],
				[ 'shape' => 'ServiceUnavailableException', ],
			],
			'idempotent' => true,
		],
		'GetBackupVaultNotifications'     => [
			'name'       => 'GetBackupVaultNotifications',
			'http'       => [
				'method'     => 'GET',
				'requestUri' => '/backup-vaults/{backupVaultName}/notification-configuration',
			],
			'input'      => [ 'shape' => 'GetBackupVaultNotificationsInput', ],
			'output'     => [ 'shape' => 'GetBackupVaultNotificationsOutput', ],
			'errors'     => [
				[ 'shape' => 'ResourceNotFoundException', ],
				[ 'shape' => 'InvalidParameterValueException', ],
				[ 'shape' => 'MissingParameterValueException', ],
				[ 'shape' => 'ServiceUnavailableException', ],
			],
			'idempotent' => true,
		],
		'GetRecoveryPointRestoreMetadata' => [
			'name'       => 'GetRecoveryPointRestoreMetadata',
			'http'       => [
				'method'     => 'GET',
				'requestUri' => '/backup-vaults/{backupVaultName}/recovery-points/{recoveryPointArn}/restore-metadata',
			],
			'input'      => [ 'shape' => 'GetRecoveryPointRestoreMetadataInput', ],
			'output'     => [ 'shape' => 'GetRecoveryPointRestoreMetadataOutput', ],
			'errors'     => [
				[ 'shape' => 'ResourceNotFoundException', ],
				[ 'shape' => 'InvalidParameterValueException', ],
				[ 'shape' => 'MissingParameterValueException', ],
				[ 'shape' => 'ServiceUnavailableException', ],
			],
			'idempotent' => true,
		],
		'GetSupportedResourceTypes'       => [
			'name'   => 'GetSupportedResourceTypes',
			'http'   => [
				'method'     => 'GET',
				'requestUri' => '/supported-resource-types',
			],
			'output' => [ 'shape' => 'GetSupportedResourceTypesOutput', ],
			'errors' => [ [ 'shape' => 'ServiceUnavailableException', ], ],
		],
		'ListBackupJobs'                  => [
			'name'       => 'ListBackupJobs',
			'http'       => [ 'method' => 'GET', 'requestUri' => '/backup-jobs/', ],
			'input'      => [ 'shape' => 'ListBackupJobsInput', ],
			'output'     => [ 'shape' => 'ListBackupJobsOutput', ],
			'errors'     => [
				[ 'shape' => 'InvalidParameterValueException', ],
				[ 'shape' => 'ServiceUnavailableException', ],
			],
			'idempotent' => true,
		],
		'ListBackupPlanTemplates'         => [
			'name'   => 'ListBackupPlanTemplates',
			'http'   => [
				'method'     => 'GET',
				'requestUri' => '/backup/template/plans',
			],
			'input'  => [ 'shape' => 'ListBackupPlanTemplatesInput', ],
			'output' => [ 'shape' => 'ListBackupPlanTemplatesOutput', ],
			'errors' => [
				[ 'shape' => 'InvalidParameterValueException', ],
				[ 'shape' => 'MissingParameterValueException', ],
				[ 'shape' => 'ServiceUnavailableException', ],
				[ 'shape' => 'ResourceNotFoundException', ],
			],
		],
		'ListBackupPlanVersions'          => [
			'name'       => 'ListBackupPlanVersions',
			'http'       => [
				'method'     => 'GET',
				'requestUri' => '/backup/plans/{backupPlanId}/versions/',
			],
			'input'      => [ 'shape' => 'ListBackupPlanVersionsInput', ],
			'output'     => [ 'shape' => 'ListBackupPlanVersionsOutput', ],
			'errors'     => [
				[ 'shape' => 'ResourceNotFoundException', ],
				[ 'shape' => 'InvalidParameterValueException', ],
				[ 'shape' => 'MissingParameterValueException', ],
				[ 'shape' => 'ServiceUnavailableException', ],
			],
			'idempotent' => true,
		],
		'ListBackupPlans'                 => [
			'name'       => 'ListBackupPlans',
			'http'       => [ 'method' => 'GET', 'requestUri' => '/backup/plans/', ],
			'input'      => [ 'shape' => 'ListBackupPlansInput', ],
			'output'     => [ 'shape' => 'ListBackupPlansOutput', ],
			'errors'     => [
				[ 'shape' => 'ResourceNotFoundException', ],
				[ 'shape' => 'InvalidParameterValueException', ],
				[ 'shape' => 'MissingParameterValueException', ],
				[ 'shape' => 'ServiceUnavailableException', ],
			],
			'idempotent' => true,
		],
		'ListBackupSelections'            => [
			'name'       => 'ListBackupSelections',
			'http'       => [
				'method'     => 'GET',
				'requestUri' => '/backup/plans/{backupPlanId}/selections/',
			],
			'input'      => [ 'shape' => 'ListBackupSelectionsInput', ],
			'output'     => [ 'shape' => 'ListBackupSelectionsOutput', ],
			'errors'     => [
				[ 'shape' => 'ResourceNotFoundException', ],
				[ 'shape' => 'InvalidParameterValueException', ],
				[ 'shape' => 'MissingParameterValueException', ],
				[ 'shape' => 'ServiceUnavailableException', ],
			],
			'idempotent' => true,
		],
		'ListBackupVaults'                => [
			'name'       => 'ListBackupVaults',
			'http'       => [
				'method'     => 'GET',
				'requestUri' => '/backup-vaults/',
			],
			'input'      => [ 'shape' => 'ListBackupVaultsInput', ],
			'output'     => [ 'shape' => 'ListBackupVaultsOutput', ],
			'errors'     => [
				[ 'shape' => 'ResourceNotFoundException', ],
				[ 'shape' => 'InvalidParameterValueException', ],
				[ 'shape' => 'MissingParameterValueException', ],
				[ 'shape' => 'ServiceUnavailableException', ],
			],
			'idempotent' => true,
		],
		'ListProtectedResources'          => [
			'name'       => 'ListProtectedResources',
			'http'       => [ 'method' => 'GET', 'requestUri' => '/resources/', ],
			'input'      => [ 'shape' => 'ListProtectedResourcesInput', ],
			'output'     => [ 'shape' => 'ListProtectedResourcesOutput', ],
			'errors'     => [
				[ 'shape' => 'InvalidParameterValueException', ],
				[ 'shape' => 'ServiceUnavailableException', ],
			],
			'idempotent' => true,
		],
		'ListRecoveryPointsByBackupVault' => [
			'name'       => 'ListRecoveryPointsByBackupVault',
			'http'       => [
				'method'     => 'GET',
				'requestUri' => '/backup-vaults/{backupVaultName}/recovery-points/',
			],
			'input'      => [ 'shape' => 'ListRecoveryPointsByBackupVaultInput', ],
			'output'     => [ 'shape' => 'ListRecoveryPointsByBackupVaultOutput', ],
			'errors'     => [
				[ 'shape' => 'ResourceNotFoundException', ],
				[ 'shape' => 'InvalidParameterValueException', ],
				[ 'shape' => 'MissingParameterValueException', ],
				[ 'shape' => 'ServiceUnavailableException', ],
			],
			'idempotent' => true,
		],
		'ListRecoveryPointsByResource'    => [
			'name'       => 'ListRecoveryPointsByResource',
			'http'       => [
				'method'     => 'GET',
				'requestUri' => '/resources/{resourceArn}/recovery-points/',
			],
			'input'      => [ 'shape' => 'ListRecoveryPointsByResourceInput', ],
			'output'     => [ 'shape' => 'ListRecoveryPointsByResourceOutput', ],
			'errors'     => [
				[ 'shape' => 'ResourceNotFoundException', ],
				[ 'shape' => 'InvalidParameterValueException', ],
				[ 'shape' => 'MissingParameterValueException', ],
				[ 'shape' => 'ServiceUnavailableException', ],
			],
			'idempotent' => true,
		],
		'ListRestoreJobs'                 => [
			'name'       => 'ListRestoreJobs',
			'http'       => [ 'method' => 'GET', 'requestUri' => '/restore-jobs/', ],
			'input'      => [ 'shape' => 'ListRestoreJobsInput', ],
			'output'     => [ 'shape' => 'ListRestoreJobsOutput', ],
			'errors'     => [
				[ 'shape' => 'ResourceNotFoundException', ],
				[ 'shape' => 'InvalidParameterValueException', ],
				[ 'shape' => 'MissingParameterValueException', ],
				[ 'shape' => 'ServiceUnavailableException', ],
			],
			'idempotent' => true,
		],
		'ListTags'                        => [
			'name'       => 'ListTags',
			'http'       => [
				'method'     => 'GET',
				'requestUri' => '/tags/{resourceArn}/',
			],
			'input'      => [ 'shape' => 'ListTagsInput', ],
			'output'     => [ 'shape' => 'ListTagsOutput', ],
			'errors'     => [
				[ 'shape' => 'ResourceNotFoundException', ],
				[ 'shape' => 'InvalidParameterValueException', ],
				[ 'shape' => 'MissingParameterValueException', ],
				[ 'shape' => 'ServiceUnavailableException', ],
			],
			'idempotent' => true,
		],
		'PutBackupVaultAccessPolicy'      => [
			'name'       => 'PutBackupVaultAccessPolicy',
			'http'       => [
				'method'     => 'PUT',
				'requestUri' => '/backup-vaults/{backupVaultName}/access-policy',
			],
			'input'      => [ 'shape' => 'PutBackupVaultAccessPolicyInput', ],
			'errors'     => [
				[ 'shape' => 'ResourceNotFoundException', ],
				[ 'shape' => 'InvalidParameterValueException', ],
				[ 'shape' => 'MissingParameterValueException', ],
				[ 'shape' => 'ServiceUnavailableException', ],
			],
			'idempotent' => true,
		],
		'PutBackupVaultNotifications'     => [
			'name'       => 'PutBackupVaultNotifications',
			'http'       => [
				'method'     => 'PUT',
				'requestUri' => '/backup-vaults/{backupVaultName}/notification-configuration',
			],
			'input'      => [ 'shape' => 'PutBackupVaultNotificationsInput', ],
			'errors'     => [
				[ 'shape' => 'ResourceNotFoundException', ],
				[ 'shape' => 'InvalidParameterValueException', ],
				[ 'shape' => 'MissingParameterValueException', ],
				[ 'shape' => 'ServiceUnavailableException', ],
			],
			'idempotent' => true,
		],
		'StartBackupJob'                  => [
			'name'       => 'StartBackupJob',
			'http'       => [ 'method' => 'PUT', 'requestUri' => '/backup-jobs', ],
			'input'      => [ 'shape' => 'StartBackupJobInput', ],
			'output'     => [ 'shape' => 'StartBackupJobOutput', ],
			'errors'     => [
				[ 'shape' => 'ResourceNotFoundException', ],
				[ 'shape' => 'InvalidParameterValueException', ],
				[ 'shape' => 'MissingParameterValueException', ],
				[ 'shape' => 'ServiceUnavailableException', ],
				[ 'shape' => 'LimitExceededException', ],
			],
			'idempotent' => true,
		],
		'StartRestoreJob'                 => [
			'name'       => 'StartRestoreJob',
			'http'       => [ 'method' => 'PUT', 'requestUri' => '/restore-jobs', ],
			'input'      => [ 'shape' => 'StartRestoreJobInput', ],
			'output'     => [ 'shape' => 'StartRestoreJobOutput', ],
			'errors'     => [
				[ 'shape' => 'ResourceNotFoundException', ],
				[ 'shape' => 'InvalidParameterValueException', ],
				[ 'shape' => 'MissingParameterValueException', ],
				[ 'shape' => 'ServiceUnavailableException', ],
			],
			'idempotent' => true,
		],
		'StopBackupJob'                   => [
			'name'   => 'StopBackupJob',
			'http'   => [
				'method'     => 'POST',
				'requestUri' => '/backup-jobs/{backupJobId}',
			],
			'input'  => [ 'shape' => 'StopBackupJobInput', ],
			'errors' => [
				[ 'shape' => 'MissingParameterValueException', ],
				[ 'shape' => 'ResourceNotFoundException', ],
				[ 'shape' => 'InvalidParameterValueException', ],
				[ 'shape' => 'InvalidRequestException', ],
				[ 'shape' => 'ServiceUnavailableException', ],
			],
		],
		'TagResource'                     => [
			'name'       => 'TagResource',
			'http'       => [
				'method'     => 'POST',
				'requestUri' => '/tags/{resourceArn}',
			],
			'input'      => [ 'shape' => 'TagResourceInput', ],
			'errors'     => [
				[ 'shape' => 'ResourceNotFoundException', ],
				[ 'shape' => 'InvalidParameterValueException', ],
				[ 'shape' => 'MissingParameterValueException', ],
				[ 'shape' => 'ServiceUnavailableException', ],
				[ 'shape' => 'LimitExceededException', ],
			],
			'idempotent' => true,
		],
		'UntagResource'                   => [
			'name'       => 'UntagResource',
			'http'       => [
				'method'     => 'POST',
				'requestUri' => '/untag/{resourceArn}',
			],
			'input'      => [ 'shape' => 'UntagResourceInput', ],
			'errors'     => [
				[ 'shape' => 'ResourceNotFoundException', ],
				[ 'shape' => 'InvalidParameterValueException', ],
				[ 'shape' => 'MissingParameterValueException', ],
				[ 'shape' => 'ServiceUnavailableException', ],
			],
			'idempotent' => true,
		],
		'UpdateBackupPlan'                => [
			'name'       => 'UpdateBackupPlan',
			'http'       => [
				'method'     => 'POST',
				'requestUri' => '/backup/plans/{backupPlanId}',
			],
			'input'      => [ 'shape' => 'UpdateBackupPlanInput', ],
			'output'     => [ 'shape' => 'UpdateBackupPlanOutput', ],
			'errors'     => [
				[ 'shape' => 'ResourceNotFoundException', ],
				[ 'shape' => 'InvalidParameterValueException', ],
				[ 'shape' => 'MissingParameterValueException', ],
				[ 'shape' => 'ServiceUnavailableException', ],
			],
			'idempotent' => true,
		],
		'UpdateRecoveryPointLifecycle'    => [
			'name'       => 'UpdateRecoveryPointLifecycle',
			'http'       => [
				'method'     => 'POST',
				'requestUri' => '/backup-vaults/{backupVaultName}/recovery-points/{recoveryPointArn}',
			],
			'input'      => [ 'shape' => 'UpdateRecoveryPointLifecycleInput', ],
			'output'     => [ 'shape' => 'UpdateRecoveryPointLifecycleOutput', ],
			'errors'     => [
				[ 'shape' => 'ResourceNotFoundException', ],
				[ 'shape' => 'InvalidParameterValueException', ],
				[ 'shape' => 'MissingParameterValueException', ],
				[ 'shape' => 'ServiceUnavailableException', ],
			],
			'idempotent' => true,
		],
	],
	'shapes'     => [
		'ARN'                                   => [ 'type' => 'string', ],
		'AlreadyExistsException'                => [
			'type'      => 'structure',
			'members'   => [
				'Code'             => [ 'shape' => 'string', ],
				'Message'          => [ 'shape' => 'string', ],
				'CreatorRequestId' => [ 'shape' => 'string', ],
				'Arn'              => [ 'shape' => 'string', ],
				'Type'             => [ 'shape' => 'string', ],
				'Context'          => [ 'shape' => 'string', ],
			],
			'exception' => true,
		],
		'BackupJob'                             => [
			'type'    => 'structure',
			'members' => [
				'BackupJobId'            => [ 'shape' => 'string', ],
				'BackupVaultName'        => [ 'shape' => 'BackupVaultName', ],
				'BackupVaultArn'         => [ 'shape' => 'ARN', ],
				'RecoveryPointArn'       => [ 'shape' => 'ARN', ],
				'ResourceArn'            => [ 'shape' => 'ARN', ],
				'CreationDate'           => [ 'shape' => 'timestamp', ],
				'CompletionDate'         => [ 'shape' => 'timestamp', ],
				'State'                  => [ 'shape' => 'BackupJobState', ],
				'StatusMessage'          => [ 'shape' => 'string', ],
				'PercentDone'            => [ 'shape' => 'string', ],
				'BackupSizeInBytes'      => [ 'shape' => 'Long', ],
				'IamRoleArn'             => [ 'shape' => 'IAMRoleArn', ],
				'CreatedBy'              => [ 'shape' => 'RecoveryPointCreator', ],
				'ExpectedCompletionDate' => [ 'shape' => 'timestamp', ],
				'StartBy'                => [ 'shape' => 'timestamp', ],
				'ResourceType'           => [ 'shape' => 'ResourceType', ],
				'BytesTransferred'       => [ 'shape' => 'Long', ],
			],
		],
		'BackupJobState'                        => [
			'type' => 'string',
			'enum' => [
				'CREATED',
				'PENDING',
				'RUNNING',
				'ABORTING',
				'ABORTED',
				'COMPLETED',
				'FAILED',
				'EXPIRED',
			],
		],
		'BackupJobsList'                        => [ 'type' => 'list', 'member' => [ 'shape' => 'BackupJob', ], ],
		'BackupPlan'                            => [
			'type'     => 'structure',
			'required' => [ 'BackupPlanName', 'Rules', ],
			'members'  => [
				'BackupPlanName' => [ 'shape' => 'BackupPlanName', ],
				'Rules'          => [ 'shape' => 'BackupRules', ],
			],
		],
		'BackupPlanInput'                       => [
			'type'     => 'structure',
			'required' => [ 'BackupPlanName', 'Rules', ],
			'members'  => [
				'BackupPlanName' => [ 'shape' => 'BackupPlanName', ],
				'Rules'          => [ 'shape' => 'BackupRulesInput', ],
			],
		],
		'BackupPlanName'                        => [ 'type' => 'string', ],
		'BackupPlanTemplatesList'               => [
			'type'   => 'list',
			'member' => [ 'shape' => 'BackupPlanTemplatesListMember', ],
		],
		'BackupPlanTemplatesListMember'         => [
			'type'    => 'structure',
			'members' => [
				'BackupPlanTemplateId'   => [ 'shape' => 'string', ],
				'BackupPlanTemplateName' => [ 'shape' => 'string', ],
			],
		],
		'BackupPlanVersionsList'                => [
			'type'   => 'list',
			'member' => [ 'shape' => 'BackupPlansListMember', ],
		],
		'BackupPlansList'                       => [
			'type'   => 'list',
			'member' => [ 'shape' => 'BackupPlansListMember', ],
		],
		'BackupPlansListMember'                 => [
			'type'    => 'structure',
			'members' => [
				'BackupPlanArn'     => [ 'shape' => 'ARN', ],
				'BackupPlanId'      => [ 'shape' => 'string', ],
				'CreationDate'      => [ 'shape' => 'timestamp', ],
				'DeletionDate'      => [ 'shape' => 'timestamp', ],
				'VersionId'         => [ 'shape' => 'string', ],
				'BackupPlanName'    => [ 'shape' => 'BackupPlanName', ],
				'CreatorRequestId'  => [ 'shape' => 'string', ],
				'LastExecutionDate' => [ 'shape' => 'timestamp', ],
			],
		],
		'BackupRule'                            => [
			'type'     => 'structure',
			'required' => [ 'RuleName', 'TargetBackupVaultName', ],
			'members'  => [
				'RuleName'                => [ 'shape' => 'BackupRuleName', ],
				'TargetBackupVaultName'   => [ 'shape' => 'BackupVaultName', ],
				'ScheduleExpression'      => [ 'shape' => 'CronExpression', ],
				'StartWindowMinutes'      => [ 'shape' => 'WindowMinutes', ],
				'CompletionWindowMinutes' => [ 'shape' => 'WindowMinutes', ],
				'Lifecycle'               => [ 'shape' => 'Lifecycle', ],
				'RecoveryPointTags'       => [ 'shape' => 'Tags', ],
				'RuleId'                  => [ 'shape' => 'string', ],
			],
		],
		'BackupRuleInput'                       => [
			'type'     => 'structure',
			'required' => [ 'RuleName', 'TargetBackupVaultName', ],
			'members'  => [
				'RuleName'                => [ 'shape' => 'BackupRuleName', ],
				'TargetBackupVaultName'   => [ 'shape' => 'BackupVaultName', ],
				'ScheduleExpression'      => [ 'shape' => 'CronExpression', ],
				'StartWindowMinutes'      => [ 'shape' => 'WindowMinutes', ],
				'CompletionWindowMinutes' => [ 'shape' => 'WindowMinutes', ],
				'Lifecycle'               => [ 'shape' => 'Lifecycle', ],
				'RecoveryPointTags'       => [ 'shape' => 'Tags', ],
			],
		],
		'BackupRuleName'                        => [ 'type' => 'string', 'pattern' => '^[a-zA-Z0-9\\-\\_\\.]{1,50}$', ],
		'BackupRules'                           => [ 'type' => 'list', 'member' => [ 'shape' => 'BackupRule', ], ],
		'BackupRulesInput'                      => [ 'type' => 'list', 'member' => [ 'shape' => 'BackupRuleInput', ], ],
		'BackupSelection'                       => [
			'type'     => 'structure',
			'required' => [ 'SelectionName', 'IamRoleArn', ],
			'members'  => [
				'SelectionName' => [ 'shape' => 'BackupSelectionName', ],
				'IamRoleArn'    => [ 'shape' => 'IAMRoleArn', ],
				'Resources'     => [ 'shape' => 'ResourceArns', ],
				'ListOfTags'    => [ 'shape' => 'ListOfTags', ],
			],
		],
		'BackupSelectionName'                   => [ 'type' => 'string', 'pattern' => '^[a-zA-Z0-9\\-\\_\\.]{1,50}$', ],
		'BackupSelectionsList'                  => [
			'type'   => 'list',
			'member' => [ 'shape' => 'BackupSelectionsListMember', ],
		],
		'BackupSelectionsListMember'            => [
			'type'    => 'structure',
			'members' => [
				'SelectionId'      => [ 'shape' => 'string', ],
				'SelectionName'    => [ 'shape' => 'BackupSelectionName', ],
				'BackupPlanId'     => [ 'shape' => 'string', ],
				'CreationDate'     => [ 'shape' => 'timestamp', ],
				'CreatorRequestId' => [ 'shape' => 'string', ],
				'IamRoleArn'       => [ 'shape' => 'IAMRoleArn', ],
			],
		],
		'BackupVaultEvent'                      => [
			'type' => 'string',
			'enum' => [
				'BACKUP_JOB_STARTED',
				'BACKUP_JOB_COMPLETED',
				'RESTORE_JOB_STARTED',
				'RESTORE_JOB_COMPLETED',
				'RECOVERY_POINT_MODIFIED',
				'BACKUP_PLAN_CREATED',
				'BACKUP_PLAN_MODIFIED',
			],
		],
		'BackupVaultEvents'                     => [
			'type'   => 'list',
			'member' => [ 'shape' => 'BackupVaultEvent', ],
		],
		'BackupVaultList'                       => [
			'type'   => 'list',
			'member' => [ 'shape' => 'BackupVaultListMember', ],
		],
		'BackupVaultListMember'                 => [
			'type'    => 'structure',
			'members' => [
				'BackupVaultName'        => [ 'shape' => 'BackupVaultName', ],
				'BackupVaultArn'         => [ 'shape' => 'ARN', ],
				'CreationDate'           => [ 'shape' => 'timestamp', ],
				'EncryptionKeyArn'       => [ 'shape' => 'ARN', ],
				'CreatorRequestId'       => [ 'shape' => 'string', ],
				'NumberOfRecoveryPoints' => [ 'shape' => 'long', ],
			],
		],
		'BackupVaultName'                       => [ 'type' => 'string', 'pattern' => '^[a-zA-Z0-9\\-\\_\\.]{1,50}$', ],
		'Boolean'                               => [ 'type' => 'boolean', ],
		'CalculatedLifecycle'                   => [
			'type'    => 'structure',
			'members' => [
				'MoveToColdStorageAt' => [ 'shape' => 'timestamp', ],
				'DeleteAt'            => [ 'shape' => 'timestamp', ],
			],
		],
		'Condition'                             => [
			'type'     => 'structure',
			'required' => [ 'ConditionType', 'ConditionKey', 'ConditionValue', ],
			'members'  => [
				'ConditionType'  => [ 'shape' => 'ConditionType', ],
				'ConditionKey'   => [ 'shape' => 'ConditionKey', ],
				'ConditionValue' => [ 'shape' => 'ConditionValue', ],
			],
		],
		'ConditionKey'                          => [ 'type' => 'string', ],
		'ConditionType'                         => [ 'type' => 'string', 'enum' => [ 'STRINGEQUALS', ], ],
		'ConditionValue'                        => [ 'type' => 'string', ],
		'CreateBackupPlanInput'                 => [
			'type'     => 'structure',
			'required' => [ 'BackupPlan', ],
			'members'  => [
				'BackupPlan'       => [ 'shape' => 'BackupPlanInput', ],
				'BackupPlanTags'   => [ 'shape' => 'Tags', ],
				'CreatorRequestId' => [ 'shape' => 'string', ],
			],
		],
		'CreateBackupPlanOutput'                => [
			'type'    => 'structure',
			'members' => [
				'BackupPlanId'  => [ 'shape' => 'string', ],
				'BackupPlanArn' => [ 'shape' => 'ARN', ],
				'CreationDate'  => [ 'shape' => 'timestamp', ],
				'VersionId'     => [ 'shape' => 'string', ],
			],
		],
		'CreateBackupSelectionInput'            => [
			'type'     => 'structure',
			'required' => [ 'BackupPlanId', 'BackupSelection', ],
			'members'  => [
				'BackupPlanId'     => [
					'shape'        => 'string',
					'location'     => 'uri',
					'locationName' => 'backupPlanId',
				],
				'BackupSelection'  => [ 'shape' => 'BackupSelection', ],
				'CreatorRequestId' => [ 'shape' => 'string', ],
			],
		],
		'CreateBackupSelectionOutput'           => [
			'type'    => 'structure',
			'members' => [
				'SelectionId'  => [ 'shape' => 'string', ],
				'BackupPlanId' => [ 'shape' => 'string', ],
				'CreationDate' => [ 'shape' => 'timestamp', ],
			],
		],
		'CreateBackupVaultInput'                => [
			'type'     => 'structure',
			'required' => [ 'BackupVaultName', ],
			'members'  => [
				'BackupVaultName'  => [
					'shape'        => 'BackupVaultName',
					'location'     => 'uri',
					'locationName' => 'backupVaultName',
				],
				'BackupVaultTags'  => [ 'shape' => 'Tags', ],
				'EncryptionKeyArn' => [ 'shape' => 'ARN', ],
				'CreatorRequestId' => [ 'shape' => 'string', ],
			],
		],
		'CreateBackupVaultOutput'               => [
			'type'    => 'structure',
			'members' => [
				'BackupVaultName' => [ 'shape' => 'BackupVaultName', ],
				'BackupVaultArn'  => [ 'shape' => 'ARN', ],
				'CreationDate'    => [ 'shape' => 'timestamp', ],
			],
		],
		'CronExpression'                        => [ 'type' => 'string', ],
		'DeleteBackupPlanInput'                 => [
			'type'     => 'structure',
			'required' => [ 'BackupPlanId', ],
			'members'  => [
				'BackupPlanId' => [
					'shape'        => 'string',
					'location'     => 'uri',
					'locationName' => 'backupPlanId',
				],
			],
		],
		'DeleteBackupPlanOutput'                => [
			'type'    => 'structure',
			'members' => [
				'BackupPlanId'  => [ 'shape' => 'string', ],
				'BackupPlanArn' => [ 'shape' => 'ARN', ],
				'DeletionDate'  => [ 'shape' => 'timestamp', ],
				'VersionId'     => [ 'shape' => 'string', ],
			],
		],
		'DeleteBackupSelectionInput'            => [
			'type'     => 'structure',
			'required' => [ 'BackupPlanId', 'SelectionId', ],
			'members'  => [
				'BackupPlanId' => [
					'shape'        => 'string',
					'location'     => 'uri',
					'locationName' => 'backupPlanId',
				],
				'SelectionId'  => [
					'shape'        => 'string',
					'location'     => 'uri',
					'locationName' => 'selectionId',
				],
			],
		],
		'DeleteBackupVaultAccessPolicyInput'    => [
			'type'     => 'structure',
			'required' => [ 'BackupVaultName', ],
			'members'  => [
				'BackupVaultName' => [
					'shape'        => 'BackupVaultName',
					'location'     => 'uri',
					'locationName' => 'backupVaultName',
				],
			],
		],
		'DeleteBackupVaultInput'                => [
			'type'     => 'structure',
			'required' => [ 'BackupVaultName', ],
			'members'  => [
				'BackupVaultName' => [
					'shape'        => 'string',
					'location'     => 'uri',
					'locationName' => 'backupVaultName',
				],
			],
		],
		'DeleteBackupVaultNotificationsInput'   => [
			'type'     => 'structure',
			'required' => [ 'BackupVaultName', ],
			'members'  => [
				'BackupVaultName' => [
					'shape'        => 'BackupVaultName',
					'location'     => 'uri',
					'locationName' => 'backupVaultName',
				],
			],
		],
		'DeleteRecoveryPointInput'              => [
			'type'     => 'structure',
			'required' => [ 'BackupVaultName', 'RecoveryPointArn', ],
			'members'  => [
				'BackupVaultName'  => [
					'shape'        => 'BackupVaultName',
					'location'     => 'uri',
					'locationName' => 'backupVaultName',
				],
				'RecoveryPointArn' => [
					'shape'        => 'ARN',
					'location'     => 'uri',
					'locationName' => 'recoveryPointArn',
				],
			],
		],
		'DependencyFailureException'            => [
			'type'      => 'structure',
			'members'   => [
				'Code'    => [ 'shape' => 'string', ],
				'Message' => [ 'shape' => 'string', ],
				'Type'    => [ 'shape' => 'string', ],
				'Context' => [ 'shape' => 'string', ],
			],
			'exception' => true,
			'fault'     => true,
		],
		'DescribeBackupJobInput'                => [
			'type'     => 'structure',
			'required' => [ 'BackupJobId', ],
			'members'  => [
				'BackupJobId' => [
					'shape'        => 'string',
					'location'     => 'uri',
					'locationName' => 'backupJobId',
				],
			],
		],
		'DescribeBackupJobOutput'               => [
			'type'    => 'structure',
			'members' => [
				'BackupJobId'            => [ 'shape' => 'string', ],
				'BackupVaultName'        => [ 'shape' => 'BackupVaultName', ],
				'BackupVaultArn'         => [ 'shape' => 'ARN', ],
				'RecoveryPointArn'       => [ 'shape' => 'ARN', ],
				'ResourceArn'            => [ 'shape' => 'ARN', ],
				'CreationDate'           => [ 'shape' => 'timestamp', ],
				'CompletionDate'         => [ 'shape' => 'timestamp', ],
				'State'                  => [ 'shape' => 'BackupJobState', ],
				'StatusMessage'          => [ 'shape' => 'string', ],
				'PercentDone'            => [ 'shape' => 'string', ],
				'BackupSizeInBytes'      => [ 'shape' => 'Long', ],
				'IamRoleArn'             => [ 'shape' => 'IAMRoleArn', ],
				'CreatedBy'              => [ 'shape' => 'RecoveryPointCreator', ],
				'ResourceType'           => [ 'shape' => 'ResourceType', ],
				'BytesTransferred'       => [ 'shape' => 'Long', ],
				'ExpectedCompletionDate' => [ 'shape' => 'timestamp', ],
				'StartBy'                => [ 'shape' => 'timestamp', ],
			],
		],
		'DescribeBackupVaultInput'              => [
			'type'     => 'structure',
			'required' => [ 'BackupVaultName', ],
			'members'  => [
				'BackupVaultName' => [
					'shape'        => 'string',
					'location'     => 'uri',
					'locationName' => 'backupVaultName',
				],
			],
		],
		'DescribeBackupVaultOutput'             => [
			'type'    => 'structure',
			'members' => [
				'BackupVaultName'        => [ 'shape' => 'string', ],
				'BackupVaultArn'         => [ 'shape' => 'ARN', ],
				'EncryptionKeyArn'       => [ 'shape' => 'ARN', ],
				'CreationDate'           => [ 'shape' => 'timestamp', ],
				'CreatorRequestId'       => [ 'shape' => 'string', ],
				'NumberOfRecoveryPoints' => [ 'shape' => 'long', ],
			],
		],
		'DescribeProtectedResourceInput'        => [
			'type'     => 'structure',
			'required' => [ 'ResourceArn', ],
			'members'  => [
				'ResourceArn' => [
					'shape'        => 'ARN',
					'location'     => 'uri',
					'locationName' => 'resourceArn',
				],
			],
		],
		'DescribeProtectedResourceOutput'       => [
			'type'    => 'structure',
			'members' => [
				'ResourceArn'    => [ 'shape' => 'ARN', ],
				'ResourceType'   => [ 'shape' => 'ResourceType', ],
				'LastBackupTime' => [ 'shape' => 'timestamp', ],
			],
		],
		'DescribeRecoveryPointInput'            => [
			'type'     => 'structure',
			'required' => [ 'BackupVaultName', 'RecoveryPointArn', ],
			'members'  => [
				'BackupVaultName'  => [
					'shape'        => 'BackupVaultName',
					'location'     => 'uri',
					'locationName' => 'backupVaultName',
				],
				'RecoveryPointArn' => [
					'shape'        => 'ARN',
					'location'     => 'uri',
					'locationName' => 'recoveryPointArn',
				],
			],
		],
		'DescribeRecoveryPointOutput'           => [
			'type'    => 'structure',
			'members' => [
				'RecoveryPointArn'    => [ 'shape' => 'ARN', ],
				'BackupVaultName'     => [ 'shape' => 'BackupVaultName', ],
				'BackupVaultArn'      => [ 'shape' => 'ARN', ],
				'ResourceArn'         => [ 'shape' => 'ARN', ],
				'ResourceType'        => [ 'shape' => 'ResourceType', ],
				'CreatedBy'           => [ 'shape' => 'RecoveryPointCreator', ],
				'IamRoleArn'          => [ 'shape' => 'IAMRoleArn', ],
				'Status'              => [ 'shape' => 'RecoveryPointStatus', ],
				'CreationDate'        => [ 'shape' => 'timestamp', ],
				'CompletionDate'      => [ 'shape' => 'timestamp', ],
				'BackupSizeInBytes'   => [ 'shape' => 'Long', ],
				'CalculatedLifecycle' => [ 'shape' => 'CalculatedLifecycle', ],
				'Lifecycle'           => [ 'shape' => 'Lifecycle', ],
				'EncryptionKeyArn'    => [ 'shape' => 'ARN', ],
				'IsEncrypted'         => [ 'shape' => 'boolean', ],
				'StorageClass'        => [ 'shape' => 'StorageClass', ],
				'LastRestoreTime'     => [ 'shape' => 'timestamp', ],
			],
		],
		'DescribeRestoreJobInput'               => [
			'type'     => 'structure',
			'required' => [ 'RestoreJobId', ],
			'members'  => [
				'RestoreJobId' => [
					'shape'        => 'RestoreJobId',
					'location'     => 'uri',
					'locationName' => 'restoreJobId',
				],
			],
		],
		'DescribeRestoreJobOutput'              => [
			'type'    => 'structure',
			'members' => [
				'RestoreJobId'                  => [ 'shape' => 'string', ],
				'RecoveryPointArn'              => [ 'shape' => 'ARN', ],
				'CreationDate'                  => [ 'shape' => 'timestamp', ],
				'CompletionDate'                => [ 'shape' => 'timestamp', ],
				'Status'                        => [ 'shape' => 'RestoreJobStatus', ],
				'StatusMessage'                 => [ 'shape' => 'string', ],
				'PercentDone'                   => [ 'shape' => 'string', ],
				'BackupSizeInBytes'             => [ 'shape' => 'Long', ],
				'IamRoleArn'                    => [ 'shape' => 'IAMRoleArn', ],
				'ExpectedCompletionTimeMinutes' => [ 'shape' => 'Long', ],
				'CreatedResourceArn'            => [ 'shape' => 'ARN', ],
			],
		],
		'ExportBackupPlanTemplateInput'         => [
			'type'     => 'structure',
			'required' => [ 'BackupPlanId', ],
			'members'  => [
				'BackupPlanId' => [
					'shape'        => 'string',
					'location'     => 'uri',
					'locationName' => 'backupPlanId',
				],
			],
		],
		'ExportBackupPlanTemplateOutput'        => [
			'type'    => 'structure',
			'members' => [ 'BackupPlanTemplateJson' => [ 'shape' => 'string', ], ],
		],
		'GetBackupPlanFromJSONInput'            => [
			'type'     => 'structure',
			'required' => [ 'BackupPlanTemplateJson', ],
			'members'  => [ 'BackupPlanTemplateJson' => [ 'shape' => 'string', ], ],
		],
		'GetBackupPlanFromJSONOutput'           => [
			'type'    => 'structure',
			'members' => [ 'BackupPlan' => [ 'shape' => 'BackupPlan', ], ],
		],
		'GetBackupPlanFromTemplateInput'        => [
			'type'     => 'structure',
			'required' => [ 'BackupPlanTemplateId', ],
			'members'  => [
				'BackupPlanTemplateId' => [
					'shape'        => 'string',
					'location'     => 'uri',
					'locationName' => 'templateId',
				],
			],
		],
		'GetBackupPlanFromTemplateOutput'       => [
			'type'    => 'structure',
			'members' => [ 'BackupPlanDocument' => [ 'shape' => 'BackupPlan', ], ],
		],
		'GetBackupPlanInput'                    => [
			'type'     => 'structure',
			'required' => [ 'BackupPlanId', ],
			'members'  => [
				'BackupPlanId' => [
					'shape'        => 'string',
					'location'     => 'uri',
					'locationName' => 'backupPlanId',
				],
				'VersionId'    => [
					'shape'        => 'string',
					'location'     => 'querystring',
					'locationName' => 'versionId',
				],
			],
		],
		'GetBackupPlanOutput'                   => [
			'type'    => 'structure',
			'members' => [
				'BackupPlan'        => [ 'shape' => 'BackupPlan', ],
				'BackupPlanId'      => [ 'shape' => 'string', ],
				'BackupPlanArn'     => [ 'shape' => 'ARN', ],
				'VersionId'         => [ 'shape' => 'string', ],
				'CreatorRequestId'  => [ 'shape' => 'string', ],
				'CreationDate'      => [ 'shape' => 'timestamp', ],
				'DeletionDate'      => [ 'shape' => 'timestamp', ],
				'LastExecutionDate' => [ 'shape' => 'timestamp', ],
			],
		],
		'GetBackupSelectionInput'               => [
			'type'     => 'structure',
			'required' => [ 'BackupPlanId', 'SelectionId', ],
			'members'  => [
				'BackupPlanId' => [
					'shape'        => 'string',
					'location'     => 'uri',
					'locationName' => 'backupPlanId',
				],
				'SelectionId'  => [
					'shape'        => 'string',
					'location'     => 'uri',
					'locationName' => 'selectionId',
				],
			],
		],
		'GetBackupSelectionOutput'              => [
			'type'    => 'structure',
			'members' => [
				'BackupSelection'  => [ 'shape' => 'BackupSelection', ],
				'SelectionId'      => [ 'shape' => 'string', ],
				'BackupPlanId'     => [ 'shape' => 'string', ],
				'CreationDate'     => [ 'shape' => 'timestamp', ],
				'CreatorRequestId' => [ 'shape' => 'string', ],
			],
		],
		'GetBackupVaultAccessPolicyInput'       => [
			'type'     => 'structure',
			'required' => [ 'BackupVaultName', ],
			'members'  => [
				'BackupVaultName' => [
					'shape'        => 'BackupVaultName',
					'location'     => 'uri',
					'locationName' => 'backupVaultName',
				],
			],
		],
		'GetBackupVaultAccessPolicyOutput'      => [
			'type'    => 'structure',
			'members' => [
				'BackupVaultName' => [ 'shape' => 'BackupVaultName', ],
				'BackupVaultArn'  => [ 'shape' => 'ARN', ],
				'Policy'          => [ 'shape' => 'IAMPolicy', ],
			],
		],
		'GetBackupVaultNotificationsInput'      => [
			'type'     => 'structure',
			'required' => [ 'BackupVaultName', ],
			'members'  => [
				'BackupVaultName' => [
					'shape'        => 'BackupVaultName',
					'location'     => 'uri',
					'locationName' => 'backupVaultName',
				],
			],
		],
		'GetBackupVaultNotificationsOutput'     => [
			'type'    => 'structure',
			'members' => [
				'BackupVaultName'   => [ 'shape' => 'BackupVaultName', ],
				'BackupVaultArn'    => [ 'shape' => 'ARN', ],
				'SNSTopicArn'       => [ 'shape' => 'ARN', ],
				'BackupVaultEvents' => [ 'shape' => 'BackupVaultEvents', ],
			],
		],
		'GetRecoveryPointRestoreMetadataInput'  => [
			'type'     => 'structure',
			'required' => [ 'BackupVaultName', 'RecoveryPointArn', ],
			'members'  => [
				'BackupVaultName'  => [
					'shape'        => 'BackupVaultName',
					'location'     => 'uri',
					'locationName' => 'backupVaultName',
				],
				'RecoveryPointArn' => [
					'shape'        => 'ARN',
					'location'     => 'uri',
					'locationName' => 'recoveryPointArn',
				],
			],
		],
		'GetRecoveryPointRestoreMetadataOutput' => [
			'type'    => 'structure',
			'members' => [
				'BackupVaultArn'   => [ 'shape' => 'ARN', ],
				'RecoveryPointArn' => [ 'shape' => 'ARN', ],
				'RestoreMetadata'  => [ 'shape' => 'Metadata', ],
			],
		],
		'GetSupportedResourceTypesOutput'       => [
			'type'    => 'structure',
			'members' => [ 'ResourceTypes' => [ 'shape' => 'ResourceTypes', ], ],
		],
		'IAMPolicy'                             => [ 'type' => 'string', ],
		'IAMRoleArn'                            => [ 'type' => 'string', ],
		'InvalidParameterValueException'        => [
			'type'      => 'structure',
			'members'   => [
				'Code'    => [ 'shape' => 'string', ],
				'Message' => [ 'shape' => 'string', ],
				'Type'    => [ 'shape' => 'string', ],
				'Context' => [ 'shape' => 'string', ],
			],
			'exception' => true,
		],
		'InvalidRequestException'               => [
			'type'      => 'structure',
			'members'   => [
				'Code'    => [ 'shape' => 'string', ],
				'Message' => [ 'shape' => 'string', ],
				'Type'    => [ 'shape' => 'string', ],
				'Context' => [ 'shape' => 'string', ],
			],
			'exception' => true,
		],
		'Lifecycle'                             => [
			'type'    => 'structure',
			'members' => [
				'MoveToColdStorageAfterDays' => [ 'shape' => 'Long', ],
				'DeleteAfterDays'            => [ 'shape' => 'Long', ],
			],
		],
		'LimitExceededException'                => [
			'type'      => 'structure',
			'members'   => [
				'Code'    => [ 'shape' => 'string', ],
				'Message' => [ 'shape' => 'string', ],
				'Type'    => [ 'shape' => 'string', ],
				'Context' => [ 'shape' => 'string', ],
			],
			'exception' => true,
		],
		'ListBackupJobsInput'                   => [
			'type'    => 'structure',
			'members' => [
				'NextToken'         => [
					'shape'        => 'string',
					'location'     => 'querystring',
					'locationName' => 'nextToken',
				],
				'MaxResults'        => [
					'shape'        => 'MaxResults',
					'location'     => 'querystring',
					'locationName' => 'maxResults',
				],
				'ByResourceArn'     => [
					'shape'        => 'ARN',
					'location'     => 'querystring',
					'locationName' => 'resourceArn',
				],
				'ByState'           => [
					'shape'        => 'BackupJobState',
					'location'     => 'querystring',
					'locationName' => 'state',
				],
				'ByBackupVaultName' => [
					'shape'        => 'BackupVaultName',
					'location'     => 'querystring',
					'locationName' => 'backupVaultName',
				],
				'ByCreatedBefore'   => [
					'shape'        => 'timestamp',
					'location'     => 'querystring',
					'locationName' => 'createdBefore',
				],
				'ByCreatedAfter'    => [
					'shape'        => 'timestamp',
					'location'     => 'querystring',
					'locationName' => 'createdAfter',
				],
				'ByResourceType'    => [
					'shape'        => 'ResourceType',
					'location'     => 'querystring',
					'locationName' => 'resourceType',
				],
			],
		],
		'ListBackupJobsOutput'                  => [
			'type'    => 'structure',
			'members' => [
				'BackupJobs' => [ 'shape' => 'BackupJobsList', ],
				'NextToken'  => [ 'shape' => 'string', ],
			],
		],
		'ListBackupPlanTemplatesInput'          => [
			'type'    => 'structure',
			'members' => [
				'NextToken'  => [
					'shape'        => 'string',
					'location'     => 'querystring',
					'locationName' => 'nextToken',
				],
				'MaxResults' => [
					'shape'        => 'MaxResults',
					'location'     => 'querystring',
					'locationName' => 'maxResults',
				],
			],
		],
		'ListBackupPlanTemplatesOutput'         => [
			'type'    => 'structure',
			'members' => [
				'NextToken'               => [ 'shape' => 'string', ],
				'BackupPlanTemplatesList' => [ 'shape' => 'BackupPlanTemplatesList', ],
			],
		],
		'ListBackupPlanVersionsInput'           => [
			'type'     => 'structure',
			'required' => [ 'BackupPlanId', ],
			'members'  => [
				'BackupPlanId' => [
					'shape'        => 'string',
					'location'     => 'uri',
					'locationName' => 'backupPlanId',
				],
				'NextToken'    => [
					'shape'        => 'string',
					'location'     => 'querystring',
					'locationName' => 'nextToken',
				],
				'MaxResults'   => [
					'shape'        => 'MaxResults',
					'location'     => 'querystring',
					'locationName' => 'maxResults',
				],
			],
		],
		'ListBackupPlanVersionsOutput'          => [
			'type'    => 'structure',
			'members' => [
				'NextToken'              => [ 'shape' => 'string', ],
				'BackupPlanVersionsList' => [ 'shape' => 'BackupPlanVersionsList', ],
			],
		],
		'ListBackupPlansInput'                  => [
			'type'    => 'structure',
			'members' => [
				'NextToken'      => [
					'shape'        => 'string',
					'location'     => 'querystring',
					'locationName' => 'nextToken',
				],
				'MaxResults'     => [
					'shape'        => 'MaxResults',
					'location'     => 'querystring',
					'locationName' => 'maxResults',
				],
				'IncludeDeleted' => [
					'shape'        => 'Boolean',
					'location'     => 'querystring',
					'locationName' => 'includeDeleted',
				],
			],
		],
		'ListBackupPlansOutput'                 => [
			'type'    => 'structure',
			'members' => [
				'NextToken'       => [ 'shape' => 'string', ],
				'BackupPlansList' => [ 'shape' => 'BackupPlansList', ],
			],
		],
		'ListBackupSelectionsInput'             => [
			'type'     => 'structure',
			'required' => [ 'BackupPlanId', ],
			'members'  => [
				'BackupPlanId' => [
					'shape'        => 'string',
					'location'     => 'uri',
					'locationName' => 'backupPlanId',
				],
				'NextToken'    => [
					'shape'        => 'string',
					'location'     => 'querystring',
					'locationName' => 'nextToken',
				],
				'MaxResults'   => [
					'shape'        => 'MaxResults',
					'location'     => 'querystring',
					'locationName' => 'maxResults',
				],
			],
		],
		'ListBackupSelectionsOutput'            => [
			'type'    => 'structure',
			'members' => [
				'NextToken'            => [ 'shape' => 'string', ],
				'BackupSelectionsList' => [ 'shape' => 'BackupSelectionsList', ],
			],
		],
		'ListBackupVaultsInput'                 => [
			'type'    => 'structure',
			'members' => [
				'NextToken'  => [
					'shape'        => 'string',
					'location'     => 'querystring',
					'locationName' => 'nextToken',
				],
				'MaxResults' => [
					'shape'        => 'MaxResults',
					'location'     => 'querystring',
					'locationName' => 'maxResults',
				],
			],
		],
		'ListBackupVaultsOutput'                => [
			'type'    => 'structure',
			'members' => [
				'BackupVaultList' => [ 'shape' => 'BackupVaultList', ],
				'NextToken'       => [ 'shape' => 'string', ],
			],
		],
		'ListOfTags'                            => [ 'type' => 'list', 'member' => [ 'shape' => 'Condition', ], ],
		'ListProtectedResourcesInput'           => [
			'type'    => 'structure',
			'members' => [
				'NextToken'  => [
					'shape'        => 'string',
					'location'     => 'querystring',
					'locationName' => 'nextToken',
				],
				'MaxResults' => [
					'shape'        => 'MaxResults',
					'location'     => 'querystring',
					'locationName' => 'maxResults',
				],
			],
		],
		'ListProtectedResourcesOutput'          => [
			'type'    => 'structure',
			'members' => [
				'Results'   => [ 'shape' => 'ProtectedResourcesList', ],
				'NextToken' => [ 'shape' => 'string', ],
			],
		],
		'ListRecoveryPointsByBackupVaultInput'  => [
			'type'     => 'structure',
			'required' => [ 'BackupVaultName', ],
			'members'  => [
				'BackupVaultName' => [
					'shape'        => 'BackupVaultName',
					'location'     => 'uri',
					'locationName' => 'backupVaultName',
				],
				'NextToken'       => [
					'shape'        => 'string',
					'location'     => 'querystring',
					'locationName' => 'nextToken',
				],
				'MaxResults'      => [
					'shape'        => 'MaxResults',
					'location'     => 'querystring',
					'locationName' => 'maxResults',
				],
				'ByResourceArn'   => [
					'shape'        => 'ARN',
					'location'     => 'querystring',
					'locationName' => 'resourceArn',
				],
				'ByResourceType'  => [
					'shape'        => 'ResourceType',
					'location'     => 'querystring',
					'locationName' => 'resourceType',
				],
				'ByBackupPlanId'  => [
					'shape'        => 'string',
					'location'     => 'querystring',
					'locationName' => 'backupPlanId',
				],
				'ByCreatedBefore' => [
					'shape'        => 'timestamp',
					'location'     => 'querystring',
					'locationName' => 'createdBefore',
				],
				'ByCreatedAfter'  => [
					'shape'        => 'timestamp',
					'location'     => 'querystring',
					'locationName' => 'createdAfter',
				],
			],
		],
		'ListRecoveryPointsByBackupVaultOutput' => [
			'type'    => 'structure',
			'members' => [
				'NextToken'      => [ 'shape' => 'string', ],
				'RecoveryPoints' => [ 'shape' => 'RecoveryPointByBackupVaultList', ],
			],
		],
		'ListRecoveryPointsByResourceInput'     => [
			'type'     => 'structure',
			'required' => [ 'ResourceArn', ],
			'members'  => [
				'ResourceArn' => [
					'shape'        => 'ARN',
					'location'     => 'uri',
					'locationName' => 'resourceArn',
				],
				'NextToken'   => [
					'shape'        => 'string',
					'location'     => 'querystring',
					'locationName' => 'nextToken',
				],
				'MaxResults'  => [
					'shape'        => 'MaxResults',
					'location'     => 'querystring',
					'locationName' => 'maxResults',
				],
			],
		],
		'ListRecoveryPointsByResourceOutput'    => [
			'type'    => 'structure',
			'members' => [
				'NextToken'      => [ 'shape' => 'string', ],
				'RecoveryPoints' => [ 'shape' => 'RecoveryPointByResourceList', ],
			],
		],
		'ListRestoreJobsInput'                  => [
			'type'    => 'structure',
			'members' => [
				'NextToken'  => [
					'shape'        => 'string',
					'location'     => 'querystring',
					'locationName' => 'nextToken',
				],
				'MaxResults' => [
					'shape'        => 'MaxResults',
					'location'     => 'querystring',
					'locationName' => 'maxResults',
				],
			],
		],
		'ListRestoreJobsOutput'                 => [
			'type'    => 'structure',
			'members' => [
				'RestoreJobs' => [ 'shape' => 'RestoreJobsList', ],
				'NextToken'   => [ 'shape' => 'string', ],
			],
		],
		'ListTagsInput'                         => [
			'type'     => 'structure',
			'required' => [ 'ResourceArn', ],
			'members'  => [
				'ResourceArn' => [
					'shape'        => 'ARN',
					'location'     => 'uri',
					'locationName' => 'resourceArn',
				],
				'NextToken'   => [
					'shape'        => 'string',
					'location'     => 'querystring',
					'locationName' => 'nextToken',
				],
				'MaxResults'  => [
					'shape'        => 'MaxResults',
					'location'     => 'querystring',
					'locationName' => 'maxResults',
				],
			],
		],
		'ListTagsOutput'                        => [
			'type'    => 'structure',
			'members' => [
				'NextToken' => [ 'shape' => 'string', ],
				'Tags'      => [ 'shape' => 'Tags', ],
			],
		],
		'Long'                                  => [ 'type' => 'long', ],
		'MaxResults'                            => [ 'type' => 'integer', 'max' => 1000, 'min' => 1, ],
		'Metadata'                              => [
			'type'  => 'map',
			'key'   => [ 'shape' => 'MetadataKey', ],
			'value' => [ 'shape' => 'MetadataValue', ],
		],
		'MetadataKey'                           => [ 'type' => 'string', ],
		'MetadataValue'                         => [ 'type' => 'string', ],
		'MissingParameterValueException'        => [
			'type'      => 'structure',
			'members'   => [
				'Code'    => [ 'shape' => 'string', ],
				'Message' => [ 'shape' => 'string', ],
				'Type'    => [ 'shape' => 'string', ],
				'Context' => [ 'shape' => 'string', ],
			],
			'exception' => true,
		],
		'ProtectedResource'                     => [
			'type'    => 'structure',
			'members' => [
				'ResourceArn'    => [ 'shape' => 'ARN', ],
				'ResourceType'   => [ 'shape' => 'ResourceType', ],
				'LastBackupTime' => [ 'shape' => 'timestamp', ],
			],
		],
		'ProtectedResourcesList'                => [
			'type'   => 'list',
			'member' => [ 'shape' => 'ProtectedResource', ],
		],
		'PutBackupVaultAccessPolicyInput'       => [
			'type'     => 'structure',
			'required' => [ 'BackupVaultName', ],
			'members'  => [
				'BackupVaultName' => [
					'shape'        => 'BackupVaultName',
					'location'     => 'uri',
					'locationName' => 'backupVaultName',
				],
				'Policy'          => [ 'shape' => 'IAMPolicy', ],
			],
		],
		'PutBackupVaultNotificationsInput'      => [
			'type'     => 'structure',
			'required' => [
				'BackupVaultName',
				'SNSTopicArn',
				'BackupVaultEvents',
			],
			'members'  => [
				'BackupVaultName'   => [
					'shape'        => 'BackupVaultName',
					'location'     => 'uri',
					'locationName' => 'backupVaultName',
				],
				'SNSTopicArn'       => [ 'shape' => 'ARN', ],
				'BackupVaultEvents' => [ 'shape' => 'BackupVaultEvents', ],
			],
		],
		'RecoveryPointByBackupVault'            => [
			'type'    => 'structure',
			'members' => [
				'RecoveryPointArn'    => [ 'shape' => 'ARN', ],
				'BackupVaultName'     => [ 'shape' => 'BackupVaultName', ],
				'BackupVaultArn'      => [ 'shape' => 'ARN', ],
				'ResourceArn'         => [ 'shape' => 'ARN', ],
				'ResourceType'        => [ 'shape' => 'ResourceType', ],
				'CreatedBy'           => [ 'shape' => 'RecoveryPointCreator', ],
				'IamRoleArn'          => [ 'shape' => 'IAMRoleArn', ],
				'Status'              => [ 'shape' => 'RecoveryPointStatus', ],
				'CreationDate'        => [ 'shape' => 'timestamp', ],
				'CompletionDate'      => [ 'shape' => 'timestamp', ],
				'BackupSizeInBytes'   => [ 'shape' => 'Long', ],
				'CalculatedLifecycle' => [ 'shape' => 'CalculatedLifecycle', ],
				'Lifecycle'           => [ 'shape' => 'Lifecycle', ],
				'EncryptionKeyArn'    => [ 'shape' => 'ARN', ],
				'IsEncrypted'         => [ 'shape' => 'boolean', ],
				'LastRestoreTime'     => [ 'shape' => 'timestamp', ],
			],
		],
		'RecoveryPointByBackupVaultList'        => [
			'type'   => 'list',
			'member' => [ 'shape' => 'RecoveryPointByBackupVault', ],
		],
		'RecoveryPointByResource'               => [
			'type'    => 'structure',
			'members' => [
				'RecoveryPointArn' => [ 'shape' => 'ARN', ],
				'CreationDate'     => [ 'shape' => 'timestamp', ],
				'Status'           => [ 'shape' => 'RecoveryPointStatus', ],
				'EncryptionKeyArn' => [ 'shape' => 'ARN', ],
				'BackupSizeBytes'  => [ 'shape' => 'Long', ],
				'BackupVaultName'  => [ 'shape' => 'BackupVaultName', ],
			],
		],
		'RecoveryPointByResourceList'           => [
			'type'   => 'list',
			'member' => [ 'shape' => 'RecoveryPointByResource', ],
		],
		'RecoveryPointCreator'                  => [
			'type'    => 'structure',
			'members' => [
				'BackupPlanId'      => [ 'shape' => 'string', ],
				'BackupPlanArn'     => [ 'shape' => 'ARN', ],
				'BackupPlanVersion' => [ 'shape' => 'string', ],
				'BackupRuleId'      => [ 'shape' => 'string', ],
			],
		],
		'RecoveryPointStatus'                   => [
			'type' => 'string',
			'enum' => [ 'COMPLETED', 'PARTIAL', 'DELETING', 'EXPIRED', ],
		],
		'ResourceArns'                          => [ 'type' => 'list', 'member' => [ 'shape' => 'ARN', ], ],
		'ResourceNotFoundException'             => [
			'type'      => 'structure',
			'members'   => [
				'Code'    => [ 'shape' => 'string', ],
				'Message' => [ 'shape' => 'string', ],
				'Type'    => [ 'shape' => 'string', ],
				'Context' => [ 'shape' => 'string', ],
			],
			'exception' => true,
		],
		'ResourceType'                          => [ 'type' => 'string', 'pattern' => '^[a-zA-Z0-9\\-\\_\\.]{1,50}$', ],
		'ResourceTypes'                         => [ 'type' => 'list', 'member' => [ 'shape' => 'ResourceType', ], ],
		'RestoreJobId'                          => [ 'type' => 'string', ],
		'RestoreJobStatus'                      => [
			'type' => 'string',
			'enum' => [
				'PENDING',
				'RUNNING',
				'COMPLETED',
				'ABORTED',
				'FAILED',
			],
		],
		'RestoreJobsList'                       => [
			'type'   => 'list',
			'member' => [ 'shape' => 'RestoreJobsListMember', ],
		],
		'RestoreJobsListMember'                 => [
			'type'    => 'structure',
			'members' => [
				'RestoreJobId'                  => [ 'shape' => 'string', ],
				'RecoveryPointArn'              => [ 'shape' => 'ARN', ],
				'CreationDate'                  => [ 'shape' => 'timestamp', ],
				'CompletionDate'                => [ 'shape' => 'timestamp', ],
				'Status'                        => [ 'shape' => 'RestoreJobStatus', ],
				'StatusMessage'                 => [ 'shape' => 'string', ],
				'PercentDone'                   => [ 'shape' => 'string', ],
				'BackupSizeInBytes'             => [ 'shape' => 'Long', ],
				'IamRoleArn'                    => [ 'shape' => 'IAMRoleArn', ],
				'ExpectedCompletionTimeMinutes' => [ 'shape' => 'Long', ],
				'CreatedResourceArn'            => [ 'shape' => 'ARN', ],
			],
		],
		'ServiceUnavailableException'           => [
			'type'      => 'structure',
			'members'   => [
				'Code'    => [ 'shape' => 'string', ],
				'Message' => [ 'shape' => 'string', ],
				'Type'    => [ 'shape' => 'string', ],
				'Context' => [ 'shape' => 'string', ],
			],
			'exception' => true,
			'fault'     => true,
		],
		'StartBackupJobInput'                   => [
			'type'     => 'structure',
			'required' => [ 'BackupVaultName', 'ResourceArn', 'IamRoleArn', ],
			'members'  => [
				'BackupVaultName'       => [ 'shape' => 'BackupVaultName', ],
				'ResourceArn'           => [ 'shape' => 'ARN', ],
				'IamRoleArn'            => [ 'shape' => 'IAMRoleArn', ],
				'IdempotencyToken'      => [ 'shape' => 'string', ],
				'StartWindowMinutes'    => [ 'shape' => 'WindowMinutes', ],
				'CompleteWindowMinutes' => [ 'shape' => 'WindowMinutes', ],
				'Lifecycle'             => [ 'shape' => 'Lifecycle', ],
				'RecoveryPointTags'     => [ 'shape' => 'Tags', ],
			],
		],
		'StartBackupJobOutput'                  => [
			'type'    => 'structure',
			'members' => [
				'BackupJobId'      => [ 'shape' => 'string', ],
				'RecoveryPointArn' => [ 'shape' => 'ARN', ],
				'CreationDate'     => [ 'shape' => 'timestamp', ],
			],
		],
		'StartRestoreJobInput'                  => [
			'type'     => 'structure',
			'required' => [ 'RecoveryPointArn', 'Metadata', 'IamRoleArn', ],
			'members'  => [
				'RecoveryPointArn' => [ 'shape' => 'ARN', ],
				'Metadata'         => [ 'shape' => 'Metadata', ],
				'IamRoleArn'       => [ 'shape' => 'IAMRoleArn', ],
				'IdempotencyToken' => [ 'shape' => 'string', ],
				'ResourceType'     => [ 'shape' => 'ResourceType', ],
			],
		],
		'StartRestoreJobOutput'                 => [
			'type'    => 'structure',
			'members' => [ 'RestoreJobId' => [ 'shape' => 'RestoreJobId', ], ],
		],
		'StopBackupJobInput'                    => [
			'type'     => 'structure',
			'required' => [ 'BackupJobId', ],
			'members'  => [
				'BackupJobId' => [
					'shape'        => 'string',
					'location'     => 'uri',
					'locationName' => 'backupJobId',
				],
			],
		],
		'StorageClass'                          => [ 'type' => 'string', 'enum' => [ 'WARM', 'COLD', 'DELETED', ], ],
		'TagKey'                                => [ 'type' => 'string', ],
		'TagKeyList'                            => [
			'type'      => 'list',
			'member'    => [ 'shape' => 'string', ],
			'sensitive' => true,
		],
		'TagResourceInput'                      => [
			'type'     => 'structure',
			'required' => [ 'ResourceArn', 'Tags', ],
			'members'  => [
				'ResourceArn' => [
					'shape'        => 'ARN',
					'location'     => 'uri',
					'locationName' => 'resourceArn',
				],
				'Tags'        => [ 'shape' => 'Tags', ],
			],
		],
		'TagValue'                              => [ 'type' => 'string', ],
		'Tags'                                  => [
			'type'      => 'map',
			'key'       => [ 'shape' => 'TagKey', ],
			'value'     => [ 'shape' => 'TagValue', ],
			'sensitive' => true,
		],
		'UntagResourceInput'                    => [
			'type'     => 'structure',
			'required' => [ 'ResourceArn', 'TagKeyList', ],
			'members'  => [
				'ResourceArn' => [
					'shape'        => 'ARN',
					'location'     => 'uri',
					'locationName' => 'resourceArn',
				],
				'TagKeyList'  => [ 'shape' => 'TagKeyList', ],
			],
		],
		'UpdateBackupPlanInput'                 => [
			'type'     => 'structure',
			'required' => [ 'BackupPlanId', 'BackupPlan', ],
			'members'  => [
				'BackupPlanId' => [
					'shape'        => 'string',
					'location'     => 'uri',
					'locationName' => 'backupPlanId',
				],
				'BackupPlan'   => [ 'shape' => 'BackupPlanInput', ],
			],
		],
		'UpdateBackupPlanOutput'                => [
			'type'    => 'structure',
			'members' => [
				'BackupPlanId'  => [ 'shape' => 'string', ],
				'BackupPlanArn' => [ 'shape' => 'ARN', ],
				'CreationDate'  => [ 'shape' => 'timestamp', ],
				'VersionId'     => [ 'shape' => 'string', ],
			],
		],
		'UpdateRecoveryPointLifecycleInput'     => [
			'type'     => 'structure',
			'required' => [ 'BackupVaultName', 'RecoveryPointArn', ],
			'members'  => [
				'BackupVaultName'  => [
					'shape'        => 'BackupVaultName',
					'location'     => 'uri',
					'locationName' => 'backupVaultName',
				],
				'RecoveryPointArn' => [
					'shape'        => 'ARN',
					'location'     => 'uri',
					'locationName' => 'recoveryPointArn',
				],
				'Lifecycle'        => [ 'shape' => 'Lifecycle', ],
			],
		],
		'UpdateRecoveryPointLifecycleOutput'    => [
			'type'    => 'structure',
			'members' => [
				'BackupVaultArn'      => [ 'shape' => 'ARN', ],
				'RecoveryPointArn'    => [ 'shape' => 'ARN', ],
				'Lifecycle'           => [ 'shape' => 'Lifecycle', ],
				'CalculatedLifecycle' => [ 'shape' => 'CalculatedLifecycle', ],
			],
		],
		'WindowMinutes'                         => [ 'type' => 'long', ],
		'boolean'                               => [ 'type' => 'boolean', ],
		'long'                                  => [ 'type' => 'long', ],
		'string'                                => [ 'type' => 'string', ],
		'timestamp'                             => [ 'type' => 'timestamp', ],
	],
];
