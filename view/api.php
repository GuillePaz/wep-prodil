<?php 
use GraphQL\Type\Schema;
use GraphQL\GraphQL;
use GraphQL\Type\Definition\ObjectType;
use GraphQL\Type\Definition\Type;

$queryType = new ObjectType([
    'name' => 'Query',
    'fields' => [
        'hello' => [
            'type' => Type::string(),
            'resolve' => function () {
                return 'Hello, world!';
            },
        ],
    ],
]);

$schema = new Schema([
    'query' => $queryType,
]);

$requestString = file_get_contents('php://input');
$result = GraphQL::executeQuery($schema, $requestString)->toArray();

echo json_encode($result);