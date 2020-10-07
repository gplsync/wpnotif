<?php
// This file was auto-generated from sdk-root/src/data/neptune/2014-10-31/paginators-1.json
return [
	'pagination' => [
		'DescribeDBEngineVersions'           => [
			'input_token'  => 'Marker',
			'limit_key'    => 'MaxRecords',
			'output_token' => 'Marker',
			'result_key'   => 'DBEngineVersions',
		],
		'DescribeDBInstances'                => [
			'input_token'  => 'Marker',
			'limit_key'    => 'MaxRecords',
			'output_token' => 'Marker',
			'result_key'   => 'DBInstances',
		],
		'DescribeDBParameterGroups'          => [
			'input_token'  => 'Marker',
			'limit_key'    => 'MaxRecords',
			'output_token' => 'Marker',
			'result_key'   => 'DBParameterGroups',
		],
		'DescribeDBParameters'               => [
			'input_token'  => 'Marker',
			'limit_key'    => 'MaxRecords',
			'output_token' => 'Marker',
			'result_key'   => 'Parameters',
		],
		'DescribeDBSubnetGroups'             => [
			'input_token'  => 'Marker',
			'limit_key'    => 'MaxRecords',
			'output_token' => 'Marker',
			'result_key'   => 'DBSubnetGroups',
		],
		'DescribeEngineDefaultParameters'    => [
			'input_token'  => 'Marker',
			'limit_key'    => 'MaxRecords',
			'output_token' => 'EngineDefaults.Marker',
			'result_key'   => 'EngineDefaults.Parameters',
		],
		'DescribeEventSubscriptions'         => [
			'input_token'  => 'Marker',
			'limit_key'    => 'MaxRecords',
			'output_token' => 'Marker',
			'result_key'   => 'EventSubscriptionsList',
		],
		'DescribeEvents'                     => [
			'input_token'  => 'Marker',
			'limit_key'    => 'MaxRecords',
			'output_token' => 'Marker',
			'result_key'   => 'Events',
		],
		'DescribeOrderableDBInstanceOptions' => [ 'input_token'  => 'Marker',
		                                          'limit_key'    => 'MaxRecords',
		                                          'output_token' => 'Marker',
		                                          'result_key'   => 'OrderableDBInstanceOptions',
		],
		'ListTagsForResource'                => [ 'result_key' => 'TagList', ],
	],
];
