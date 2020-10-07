<?php
// This file was auto-generated from sdk-root/src/data/dynamodb/2011-12-05/api-2.json
return [
	'version'    => '2.0',
	'metadata'   => [
		'apiVersion'          => '2011-12-05',
		'endpointPrefix'      => 'dynamodb',
		'jsonVersion'         => '1.0',
		'protocol'            => 'json',
		'serviceAbbreviation' => 'DynamoDB',
		'serviceFullName'     => 'Amazon DynamoDB',
		'serviceId'           => 'DynamoDB',
		'signatureVersion'    => 'v4',
		'targetPrefix'        => 'DynamoDB_20111205',
		'uid'                 => 'dynamodb-2011-12-05',
	],
	'operations' => [
		'BatchGetItem'   => [
			'name'   => 'BatchGetItem',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'BatchGetItemInput', ],
			'output' => [ 'shape' => 'BatchGetItemOutput', ],
			'errors' => [
				[ 'shape' => 'ProvisionedThroughputExceededException', ],
				[ 'shape' => 'ResourceNotFoundException', ],
				[ 'shape' => 'InternalServerError', ],
			],
		],
		'BatchWriteItem' => [
			'name'   => 'BatchWriteItem',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'BatchWriteItemInput', ],
			'output' => [ 'shape' => 'BatchWriteItemOutput', ],
			'errors' => [
				[ 'shape' => 'ProvisionedThroughputExceededException', ],
				[ 'shape' => 'ResourceNotFoundException', ],
				[ 'shape' => 'LimitExceededException', ],
				[ 'shape' => 'InternalServerError', ],
			],
		],
		'CreateTable'    => [
			'name'   => 'CreateTable',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'CreateTableInput', ],
			'output' => [ 'shape' => 'CreateTableOutput', ],
			'errors' => [
				[ 'shape' => 'ResourceInUseException', ],
				[ 'shape' => 'LimitExceededException', ],
				[ 'shape' => 'InternalServerError', ],
			],
		],
		'DeleteItem'     => [
			'name'   => 'DeleteItem',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DeleteItemInput', ],
			'output' => [ 'shape' => 'DeleteItemOutput', ],
			'errors' => [
				[ 'shape' => 'ConditionalCheckFailedException', ],
				[ 'shape' => 'ProvisionedThroughputExceededException', ],
				[ 'shape' => 'ResourceNotFoundException', ],
				[ 'shape' => 'LimitExceededException', ],
				[ 'shape' => 'InternalServerError', ],
			],
		],
		'DeleteTable'    => [
			'name'   => 'DeleteTable',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DeleteTableInput', ],
			'output' => [ 'shape' => 'DeleteTableOutput', ],
			'errors' => [
				[ 'shape' => 'ResourceInUseException', ],
				[ 'shape' => 'ResourceNotFoundException', ],
				[ 'shape' => 'LimitExceededException', ],
				[ 'shape' => 'InternalServerError', ],
			],
		],
		'DescribeTable'  => [
			'name'   => 'DescribeTable',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DescribeTableInput', ],
			'output' => [ 'shape' => 'DescribeTableOutput', ],
			'errors' => [
				[ 'shape' => 'ResourceNotFoundException', ],
				[ 'shape' => 'InternalServerError', ],
			],
		],
		'GetItem'        => [
			'name'   => 'GetItem',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'GetItemInput', ],
			'output' => [ 'shape' => 'GetItemOutput', ],
			'errors' => [
				[ 'shape' => 'ProvisionedThroughputExceededException', ],
				[ 'shape' => 'ResourceNotFoundException', ],
				[ 'shape' => 'InternalServerError', ],
			],
		],
		'ListTables'     => [
			'name'   => 'ListTables',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'ListTablesInput', ],
			'output' => [ 'shape' => 'ListTablesOutput', ],
			'errors' => [ [ 'shape' => 'InternalServerError', ], ],
		],
		'PutItem'        => [
			'name'   => 'PutItem',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'PutItemInput', ],
			'output' => [ 'shape' => 'PutItemOutput', ],
			'errors' => [
				[ 'shape' => 'ConditionalCheckFailedException', ],
				[ 'shape' => 'ProvisionedThroughputExceededException', ],
				[ 'shape' => 'ResourceNotFoundException', ],
				[ 'shape' => 'LimitExceededException', ],
				[ 'shape' => 'InternalServerError', ],
			],
		],
		'Query'          => [
			'name'   => 'Query',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'QueryInput', ],
			'output' => [ 'shape' => 'QueryOutput', ],
			'errors' => [
				[ 'shape' => 'ProvisionedThroughputExceededException', ],
				[ 'shape' => 'ResourceNotFoundException', ],
				[ 'shape' => 'InternalServerError', ],
			],
		],
		'Scan'           => [
			'name'   => 'Scan',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'ScanInput', ],
			'output' => [ 'shape' => 'ScanOutput', ],
			'errors' => [
				[ 'shape' => 'ProvisionedThroughputExceededException', ],
				[ 'shape' => 'ResourceNotFoundException', ],
				[ 'shape' => 'InternalServerError', ],
			],
		],
		'UpdateItem'     => [
			'name'   => 'UpdateItem',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'UpdateItemInput', ],
			'output' => [ 'shape' => 'UpdateItemOutput', ],
			'errors' => [
				[ 'shape' => 'ConditionalCheckFailedException', ],
				[ 'shape' => 'ProvisionedThroughputExceededException', ],
				[ 'shape' => 'ResourceNotFoundException', ],
				[ 'shape' => 'LimitExceededException', ],
				[ 'shape' => 'InternalServerError', ],
			],
		],
		'UpdateTable'    => [
			'name'   => 'UpdateTable',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'UpdateTableInput', ],
			'output' => [ 'shape' => 'UpdateTableOutput', ],
			'errors' => [
				[ 'shape' => 'ResourceInUseException', ],
				[ 'shape' => 'ResourceNotFoundException', ],
				[ 'shape' => 'LimitExceededException', ],
				[ 'shape' => 'InternalServerError', ],
			],
		],
	],
	'shapes'     => [
		'AttributeAction'                        => [ 'type' => 'string', 'enum' => [ 'ADD', 'PUT', 'DELETE', ], ],
		'AttributeMap'                           => [
			'type'  => 'map',
			'key'   => [ 'shape' => 'AttributeName', ],
			'value' => [ 'shape' => 'AttributeValue', ],
		],
		'AttributeName'                          => [ 'type' => 'string', 'max' => 65535, ],
		'AttributeNameList'                      => [
			'type'   => 'list',
			'member' => [ 'shape' => 'AttributeName', ],
			'min'    => 1,
		],
		'AttributeUpdates'                       => [
			'type'  => 'map',
			'key'   => [ 'shape' => 'AttributeName', ],
			'value' => [ 'shape' => 'AttributeValueUpdate', ],
		],
		'AttributeValue'                         => [
			'type'    => 'structure',
			'members' => [
				'S'  => [ 'shape' => 'StringAttributeValue', ],
				'N'  => [ 'shape' => 'NumberAttributeValue', ],
				'B'  => [ 'shape' => 'BinaryAttributeValue', ],
				'SS' => [ 'shape' => 'StringSetAttributeValue', ],
				'NS' => [ 'shape' => 'NumberSetAttributeValue', ],
				'BS' => [ 'shape' => 'BinarySetAttributeValue', ],
			],
		],
		'AttributeValueList'                     => [ 'type' => 'list', 'member' => [ 'shape' => 'AttributeValue', ], ],
		'AttributeValueUpdate'                   => [
			'type'    => 'structure',
			'members' => [
				'Value'  => [ 'shape' => 'AttributeValue', ],
				'Action' => [ 'shape' => 'AttributeAction', ],
			],
		],
		'BatchGetItemInput'                      => [
			'type'     => 'structure',
			'required' => [ 'RequestItems', ],
			'members'  => [ 'RequestItems' => [ 'shape' => 'BatchGetRequestMap', ], ],
		],
		'BatchGetItemOutput'                     => [
			'type'    => 'structure',
			'members' => [
				'Responses'       => [ 'shape' => 'BatchGetResponseMap', ],
				'UnprocessedKeys' => [ 'shape' => 'BatchGetRequestMap', ],
			],
		],
		'BatchGetRequestMap'                     => [
			'type'  => 'map',
			'key'   => [ 'shape' => 'TableName', ],
			'value' => [ 'shape' => 'KeysAndAttributes', ],
			'max'   => 100,
			'min'   => 1,
		],
		'BatchGetResponseMap'                    => [
			'type'  => 'map',
			'key'   => [ 'shape' => 'TableName', ],
			'value' => [ 'shape' => 'BatchResponse', ],
		],
		'BatchResponse'                          => [
			'type'    => 'structure',
			'members' => [
				'Items'                 => [ 'shape' => 'ItemList', ],
				'ConsumedCapacityUnits' => [ 'shape' => 'ConsumedCapacityUnits', ],
			],
		],
		'BatchWriteItemInput'                    => [
			'type'     => 'structure',
			'required' => [ 'RequestItems', ],
			'members'  => [ 'RequestItems' => [ 'shape' => 'BatchWriteItemRequestMap', ], ],
		],
		'BatchWriteItemOutput'                   => [
			'type'    => 'structure',
			'members' => [
				'Responses'        => [ 'shape' => 'BatchWriteResponseMap', ],
				'UnprocessedItems' => [ 'shape' => 'BatchWriteItemRequestMap', ],
			],
		],
		'BatchWriteItemRequestMap'               => [
			'type'  => 'map',
			'key'   => [ 'shape' => 'TableName', ],
			'value' => [ 'shape' => 'WriteRequests', ],
			'max'   => 25,
			'min'   => 1,
		],
		'BatchWriteResponse'                     => [
			'type'    => 'structure',
			'members' => [ 'ConsumedCapacityUnits' => [ 'shape' => 'ConsumedCapacityUnits', ], ],
		],
		'BatchWriteResponseMap'                  => [
			'type'  => 'map',
			'key'   => [ 'shape' => 'TableName', ],
			'value' => [ 'shape' => 'BatchWriteResponse', ],
		],
		'BinaryAttributeValue'                   => [ 'type' => 'blob', ],
		'BinarySetAttributeValue'                => [
			'type'   => 'list',
			'member' => [ 'shape' => 'BinaryAttributeValue', ],
		],
		'BooleanObject'                          => [ 'type' => 'boolean', ],
		'ComparisonOperator'                     => [
			'type' => 'string',
			'enum' => [
				'EQ',
				'NE',
				'IN',
				'LE',
				'LT',
				'GE',
				'GT',
				'BETWEEN',
				'NOT_NULL',
				'NULL',
				'CONTAINS',
				'NOT_CONTAINS',
				'BEGINS_WITH',
			],
		],
		'Condition'                              => [
			'type'     => 'structure',
			'required' => [ 'ComparisonOperator', ],
			'members'  => [
				'AttributeValueList' => [ 'shape' => 'AttributeValueList', ],
				'ComparisonOperator' => [ 'shape' => 'ComparisonOperator', ],
			],
		],
		'ConditionalCheckFailedException'        => [
			'type'      => 'structure',
			'members'   => [ 'message' => [ 'shape' => 'ErrorMessage', ], ],
			'exception' => true,
		],
		'ConsistentRead'                         => [ 'type' => 'boolean', ],
		'ConsumedCapacityUnits'                  => [ 'type' => 'double', ],
		'CreateTableInput'                       => [
			'type'     => 'structure',
			'required' => [ 'TableName', 'KeySchema', 'ProvisionedThroughput', ],
			'members'  => [
				'TableName'             => [ 'shape' => 'TableName', ],
				'KeySchema'             => [ 'shape' => 'KeySchema', ],
				'ProvisionedThroughput' => [ 'shape' => 'ProvisionedThroughput', ],
			],
		],
		'CreateTableOutput'                      => [
			'type'    => 'structure',
			'members' => [ 'TableDescription' => [ 'shape' => 'TableDescription', ], ],
		],
		'Date'                                   => [ 'type' => 'timestamp', ],
		'DeleteItemInput'                        => [
			'type'     => 'structure',
			'required' => [ 'TableName', 'Key', ],
			'members'  => [
				'TableName'    => [ 'shape' => 'TableName', ],
				'Key'          => [ 'shape' => 'Key', ],
				'Expected'     => [ 'shape' => 'ExpectedAttributeMap', ],
				'ReturnValues' => [ 'shape' => 'ReturnValue', ],
			],
		],
		'DeleteItemOutput'                       => [
			'type'    => 'structure',
			'members' => [
				'Attributes'            => [ 'shape' => 'AttributeMap', ],
				'ConsumedCapacityUnits' => [ 'shape' => 'ConsumedCapacityUnits', ],
			],
		],
		'DeleteRequest'                          => [
			'type'     => 'structure',
			'required' => [ 'Key', ],
			'members'  => [ 'Key' => [ 'shape' => 'Key', ], ],
		],
		'DeleteTableInput'                       => [
			'type'     => 'structure',
			'required' => [ 'TableName', ],
			'members'  => [ 'TableName' => [ 'shape' => 'TableName', ], ],
		],
		'DeleteTableOutput'                      => [
			'type'    => 'structure',
			'members' => [ 'TableDescription' => [ 'shape' => 'TableDescription', ], ],
		],
		'DescribeTableInput'                     => [
			'type'     => 'structure',
			'required' => [ 'TableName', ],
			'members'  => [ 'TableName' => [ 'shape' => 'TableName', ], ],
		],
		'DescribeTableOutput'                    => [
			'type'    => 'structure',
			'members' => [ 'Table' => [ 'shape' => 'TableDescription', ], ],
		],
		'ErrorMessage'                           => [ 'type' => 'string', ],
		'ExpectedAttributeMap'                   => [
			'type'  => 'map',
			'key'   => [ 'shape' => 'AttributeName', ],
			'value' => [ 'shape' => 'ExpectedAttributeValue', ],
		],
		'ExpectedAttributeValue'                 => [
			'type'    => 'structure',
			'members' => [
				'Value'  => [ 'shape' => 'AttributeValue', ],
				'Exists' => [ 'shape' => 'BooleanObject', ],
			],
		],
		'FilterConditionMap'                     => [
			'type'  => 'map',
			'key'   => [ 'shape' => 'String', ],
			'value' => [ 'shape' => 'Condition', ],
		],
		'GetItemInput'                           => [
			'type'     => 'structure',
			'required' => [ 'TableName', 'Key', ],
			'members'  => [
				'TableName'       => [ 'shape' => 'TableName', ],
				'Key'             => [ 'shape' => 'Key', ],
				'AttributesToGet' => [ 'shape' => 'AttributeNameList', ],
				'ConsistentRead'  => [ 'shape' => 'ConsistentRead', ],
			],
		],
		'GetItemOutput'                          => [
			'type'    => 'structure',
			'members' => [
				'Item'                  => [ 'shape' => 'AttributeMap', ],
				'ConsumedCapacityUnits' => [ 'shape' => 'ConsumedCapacityUnits', ],
			],
		],
		'Integer'                                => [ 'type' => 'integer', ],
		'InternalServerError'                    => [
			'type'      => 'structure',
			'members'   => [ 'message' => [ 'shape' => 'ErrorMessage', ], ],
			'exception' => true,
			'fault'     => true,
		],
		'ItemList'                               => [ 'type' => 'list', 'member' => [ 'shape' => 'AttributeMap', ], ],
		'Key'                                    => [
			'type'     => 'structure',
			'required' => [ 'HashKeyElement', ],
			'members'  => [
				'HashKeyElement'  => [ 'shape' => 'AttributeValue', ],
				'RangeKeyElement' => [ 'shape' => 'AttributeValue', ],
			],
		],
		'KeyList'                                => [
			'type'   => 'list',
			'member' => [ 'shape' => 'Key', ],
			'max'    => 100,
			'min'    => 1,
		],
		'KeySchema'                              => [
			'type'     => 'structure',
			'required' => [ 'HashKeyElement', ],
			'members'  => [
				'HashKeyElement'  => [ 'shape' => 'KeySchemaElement', ],
				'RangeKeyElement' => [ 'shape' => 'KeySchemaElement', ],
			],
		],
		'KeySchemaAttributeName'                 => [ 'type' => 'string', 'max' => 255, 'min' => 1, ],
		'KeySchemaElement'                       => [
			'type'     => 'structure',
			'required' => [ 'AttributeName', 'AttributeType', ],
			'members'  => [
				'AttributeName' => [ 'shape' => 'KeySchemaAttributeName', ],
				'AttributeType' => [ 'shape' => 'ScalarAttributeType', ],
			],
		],
		'KeysAndAttributes'                      => [
			'type'     => 'structure',
			'required' => [ 'Keys', ],
			'members'  => [
				'Keys'            => [ 'shape' => 'KeyList', ],
				'AttributesToGet' => [ 'shape' => 'AttributeNameList', ],
				'ConsistentRead'  => [ 'shape' => 'ConsistentRead', ],
			],
		],
		'LimitExceededException'                 => [
			'type'      => 'structure',
			'members'   => [ 'message' => [ 'shape' => 'ErrorMessage', ], ],
			'exception' => true,
		],
		'ListTablesInput'                        => [
			'type'    => 'structure',
			'members' => [
				'ExclusiveStartTableName' => [ 'shape' => 'TableName', ],
				'Limit'                   => [ 'shape' => 'ListTablesInputLimit', ],
			],
		],
		'ListTablesInputLimit'                   => [ 'type' => 'integer', 'max' => 100, 'min' => 1, ],
		'ListTablesOutput'                       => [
			'type'    => 'structure',
			'members' => [
				'TableNames'             => [ 'shape' => 'TableNameList', ],
				'LastEvaluatedTableName' => [ 'shape' => 'TableName', ],
			],
		],
		'Long'                                   => [ 'type' => 'long', ],
		'NumberAttributeValue'                   => [ 'type' => 'string', ],
		'NumberSetAttributeValue'                => [
			'type'   => 'list',
			'member' => [ 'shape' => 'NumberAttributeValue', ],
		],
		'PositiveIntegerObject'                  => [ 'type' => 'integer', 'min' => 1, ],
		'PositiveLongObject'                     => [ 'type' => 'long', 'min' => 1, ],
		'ProvisionedThroughput'                  => [
			'type'     => 'structure',
			'required' => [ 'ReadCapacityUnits', 'WriteCapacityUnits', ],
			'members'  => [
				'ReadCapacityUnits'  => [ 'shape' => 'PositiveLongObject', ],
				'WriteCapacityUnits' => [ 'shape' => 'PositiveLongObject', ],
			],
		],
		'ProvisionedThroughputDescription'       => [
			'type'    => 'structure',
			'members' => [
				'LastIncreaseDateTime'   => [ 'shape' => 'Date', ],
				'LastDecreaseDateTime'   => [ 'shape' => 'Date', ],
				'NumberOfDecreasesToday' => [ 'shape' => 'PositiveLongObject', ],
				'ReadCapacityUnits'      => [ 'shape' => 'PositiveLongObject', ],
				'WriteCapacityUnits'     => [ 'shape' => 'PositiveLongObject', ],
			],
		],
		'ProvisionedThroughputExceededException' => [
			'type'      => 'structure',
			'members'   => [ 'message' => [ 'shape' => 'ErrorMessage', ], ],
			'exception' => true,
		],
		'PutItemInput'                           => [
			'type'     => 'structure',
			'required' => [ 'TableName', 'Item', ],
			'members'  => [
				'TableName'    => [ 'shape' => 'TableName', ],
				'Item'         => [ 'shape' => 'PutItemInputAttributeMap', ],
				'Expected'     => [ 'shape' => 'ExpectedAttributeMap', ],
				'ReturnValues' => [ 'shape' => 'ReturnValue', ],
			],
		],
		'PutItemInputAttributeMap'               => [
			'type'  => 'map',
			'key'   => [ 'shape' => 'AttributeName', ],
			'value' => [ 'shape' => 'AttributeValue', ],
		],
		'PutItemOutput'                          => [
			'type'    => 'structure',
			'members' => [
				'Attributes'            => [ 'shape' => 'AttributeMap', ],
				'ConsumedCapacityUnits' => [ 'shape' => 'ConsumedCapacityUnits', ],
			],
		],
		'PutRequest'                             => [
			'type'     => 'structure',
			'required' => [ 'Item', ],
			'members'  => [ 'Item' => [ 'shape' => 'PutItemInputAttributeMap', ], ],
		],
		'QueryInput'                             => [
			'type'     => 'structure',
			'required' => [ 'TableName', 'HashKeyValue', ],
			'members'  => [
				'TableName'         => [ 'shape' => 'TableName', ],
				'AttributesToGet'   => [ 'shape' => 'AttributeNameList', ],
				'Limit'             => [ 'shape' => 'PositiveIntegerObject', ],
				'ConsistentRead'    => [ 'shape' => 'ConsistentRead', ],
				'Count'             => [ 'shape' => 'BooleanObject', ],
				'HashKeyValue'      => [ 'shape' => 'AttributeValue', ],
				'RangeKeyCondition' => [ 'shape' => 'Condition', ],
				'ScanIndexForward'  => [ 'shape' => 'BooleanObject', ],
				'ExclusiveStartKey' => [ 'shape' => 'Key', ],
			],
		],
		'QueryOutput'                            => [
			'type'    => 'structure',
			'members' => [
				'Items'                 => [ 'shape' => 'ItemList', ],
				'Count'                 => [ 'shape' => 'Integer', ],
				'LastEvaluatedKey'      => [ 'shape' => 'Key', ],
				'ConsumedCapacityUnits' => [ 'shape' => 'ConsumedCapacityUnits', ],
			],
		],
		'ResourceInUseException'                 => [
			'type'      => 'structure',
			'members'   => [ 'message' => [ 'shape' => 'ErrorMessage', ], ],
			'exception' => true,
		],
		'ResourceNotFoundException'              => [
			'type'      => 'structure',
			'members'   => [ 'message' => [ 'shape' => 'ErrorMessage', ], ],
			'exception' => true,
		],
		'ReturnValue'                            => [
			'type' => 'string',
			'enum' => [
				'NONE',
				'ALL_OLD',
				'UPDATED_OLD',
				'ALL_NEW',
				'UPDATED_NEW',
			],
		],
		'ScalarAttributeType'                    => [ 'type' => 'string', 'enum' => [ 'S', 'N', 'B', ], ],
		'ScanInput'                              => [
			'type'     => 'structure',
			'required' => [ 'TableName', ],
			'members'  => [
				'TableName'         => [ 'shape' => 'TableName', ],
				'AttributesToGet'   => [ 'shape' => 'AttributeNameList', ],
				'Limit'             => [ 'shape' => 'PositiveIntegerObject', ],
				'Count'             => [ 'shape' => 'BooleanObject', ],
				'ScanFilter'        => [ 'shape' => 'FilterConditionMap', ],
				'ExclusiveStartKey' => [ 'shape' => 'Key', ],
			],
		],
		'ScanOutput'                             => [
			'type'    => 'structure',
			'members' => [
				'Items'                 => [ 'shape' => 'ItemList', ],
				'Count'                 => [ 'shape' => 'Integer', ],
				'ScannedCount'          => [ 'shape' => 'Integer', ],
				'LastEvaluatedKey'      => [ 'shape' => 'Key', ],
				'ConsumedCapacityUnits' => [ 'shape' => 'ConsumedCapacityUnits', ],
			],
		],
		'String'                                 => [ 'type' => 'string', ],
		'StringAttributeValue'                   => [ 'type' => 'string', ],
		'StringSetAttributeValue'                => [
			'type'   => 'list',
			'member' => [ 'shape' => 'StringAttributeValue', ],
		],
		'TableDescription'                       => [
			'type'    => 'structure',
			'members' => [
				'TableName'             => [ 'shape' => 'TableName', ],
				'KeySchema'             => [ 'shape' => 'KeySchema', ],
				'TableStatus'           => [ 'shape' => 'TableStatus', ],
				'CreationDateTime'      => [ 'shape' => 'Date', ],
				'ProvisionedThroughput' => [ 'shape' => 'ProvisionedThroughputDescription', ],
				'TableSizeBytes'        => [ 'shape' => 'Long', ],
				'ItemCount'             => [ 'shape' => 'Long', ],
			],
		],
		'TableName'                              => [
			'type'    => 'string',
			'max'     => 255,
			'min'     => 3,
			'pattern' => '[a-zA-Z0-9_.-]+',
		],
		'TableNameList'                          => [ 'type' => 'list', 'member' => [ 'shape' => 'TableName', ], ],
		'TableStatus'                            => [
			'type' => 'string',
			'enum' => [ 'CREATING', 'UPDATING', 'DELETING', 'ACTIVE', ],
		],
		'UpdateItemInput'                        => [
			'type'     => 'structure',
			'required' => [ 'TableName', 'Key', 'AttributeUpdates', ],
			'members'  => [
				'TableName'        => [ 'shape' => 'TableName', ],
				'Key'              => [ 'shape' => 'Key', ],
				'AttributeUpdates' => [ 'shape' => 'AttributeUpdates', ],
				'Expected'         => [ 'shape' => 'ExpectedAttributeMap', ],
				'ReturnValues'     => [ 'shape' => 'ReturnValue', ],
			],
		],
		'UpdateItemOutput'                       => [
			'type'    => 'structure',
			'members' => [
				'Attributes'            => [ 'shape' => 'AttributeMap', ],
				'ConsumedCapacityUnits' => [ 'shape' => 'ConsumedCapacityUnits', ],
			],
		],
		'UpdateTableInput'                       => [
			'type'     => 'structure',
			'required' => [ 'TableName', 'ProvisionedThroughput', ],
			'members'  => [
				'TableName'             => [ 'shape' => 'TableName', ],
				'ProvisionedThroughput' => [ 'shape' => 'ProvisionedThroughput', ],
			],
		],
		'UpdateTableOutput'                      => [
			'type'    => 'structure',
			'members' => [ 'TableDescription' => [ 'shape' => 'TableDescription', ], ],
		],
		'WriteRequest'                           => [
			'type'    => 'structure',
			'members' => [
				'PutRequest'    => [ 'shape' => 'PutRequest', ],
				'DeleteRequest' => [ 'shape' => 'DeleteRequest', ],
			],
		],
		'WriteRequests'                          => [
			'type'   => 'list',
			'member' => [ 'shape' => 'WriteRequest', ],
			'max'    => 25,
			'min'    => 1,
		],
	],
];
