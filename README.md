# Array OrderBy

A PHP function to order a multi-dimensional array.

## Install

Normall install via Composer.

## Usage

Throw any array or object with the coordinates of the field you want to sort by:

```php
$evangelists = [
    ['id' => 1, 'name' => 'Paul T.', 'email' => 'paul@corinth.com'],
    ['id' => 2, 'name' => 'Timothy D.', 'email' => 'timothy@antioch.com'],
];

$results = array_orderby($evangelists, ['name' => SORT_DESC, 'email' => SORT_ASC]);

$evangelists = [
    [
    	'id' => 1,
    	'name' => 'Paul T.',
    	'emails' => [
    		'primary' => 'paul@corinth.com',
    		'secondary' => 'saul@tarsus.com',
    	],
    ],
    [
    	'id' => 2,
    	'name' => 'Timothy B.',
    	'emails' => [
    		'primary' => 'timothy@antioch.com',
    		'secondary' => 'timmy@geocities.com',
    	],
    ],
];

$results = array_orderby($evangelists, ['emails.primary' => SORT_DESC]); // dot walking the array
```