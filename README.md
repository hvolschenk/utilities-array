# Hvolschenk\\Utilities\\Arrays

Simple functional PHP array utilities

## Installation:

```
php composer.phar require hvolschenk\utilities-arrays
```

## Functions:

#### itemByKey()

Gets an array item by key name

```php
itemByKey(array $array): callable;
```

Example:

```php
<?php
  namespace Sample\Name\Space;
  use function Hvolschenk\Utilities\Arrays\itemByKey;

  $users = [
    'designer' => [
      ['firstName' => 'Jason', 'lastName' => 'Coole']
    ],
    'developer' => [
      ['firstName' => 'Derek', 'lastName' => 'Moonlander']
    ]
  ];
  $usersByDesignation = itemByKey($users);

  $usersByDesignation('designer'); // [['firstName' => 'Jason', 'lastName' => 'Coole']]
  $usersByDesignation('developer'); // [['firstName' => 'Derek', 'lastName' => 'Moonlander']]
  $usersByDesignation('boss'); // NULL

```
