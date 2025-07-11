# Furious PHP SDK

[![Latest Packagist Version](https://img.shields.io/packagist/v/furious/furious-api-sdk?logo=github&logoColor=white&style=flat-square)](https://packagist.org/packages/furious/furious-api-sdk)
[![Total Downloads](https://img.shields.io/packagist/dt/furious/furious-api-sdk.svg?logo=github&logoColor=white&style=flat-square)](https://packagist.org/packages/furious/furious-api-sdk)

The **Furious PHP SDK** provides convenient access to the [Furious ERP API](https://furious-squad.com) from PHP applications. It is designed for developers building integrations with Furious ERP features such as CRM, project tracking, time management, HR, accounting, and more.

---

## 🚀 Getting Started

### Requirements

* PHP ^7.4

### Installation

```bash
composer require furious/furious-api-sdk
```

---

## ⚙️ SDK Initialization

```php
use Furious\FuriousApiSdk\FuriousApiSdk;
use Furious\FuriousApiSdk\Model\Config;

$config = new Config("https://<my instance url>");
$sdk = new FuriousApiSdk($config, [
  'timeout' => 5
]);
```

---

## 🔐 Authentication

```php
$sdk->authenticate([
  'username' => 'myAPIUsername',
  'password' => 'myAPIPassword'
]);
```

This method sets a valid JWT token for the session, used for all authorized API calls.

---

## 📚 Resource Usage Guide

### Access a Resource

```php
use Furious\FuriousApiSdk\Resource\Absence;

$absence = $sdk->getResource(Absence::class);
```

### Basic Search (no filters)

```php
$results = $absence->search(['pseudo']);
```

### Filtered Search

```php
use Furious\FuriousApiSdk\Query\Filter\Equal;

$results = $absence->search(
  ['pseudo', 'status', 'start_date'],
  [ Equal::set('pseudo', 'john.doe') ]
);
```

### Filtered & Sorted Search

```php
use Furious\FuriousApiSdk\Query\Order\OrderAsc;

$results = $absence->search(
  ['pseudo', 'status', 'start_date'],
  [ Equal::set('pseudo', 'john.doe') ],
  [ OrderAsc::field('start_date') ]
);
```

### Create a Resource

```php
$response = $absence->create([
  'pseudo'     => 'john.doe',
  'start_date' => '2025-01-01',
  'end_date'   => '2025-01-05',
  'entity'     => 'entity_1',
  'half_day'   => '0',
  'type'       => 'home_office'
]);
```

### Update a Resource

```php
$updateResponse = $absence->update([
  'id'         => $absenceId,
  'pseudo'     => 'jane.doe',
  'start_date' => '2025-01-02',
  'end_date'   => '2025-01-06'
]);

```

### Create with Custom Fields

```php
use Furious\FuriousApiSdk\Resource\Contract;

$contract = $sdk->getResource(Contract::class);

$response = $contract->create([
  'name'               => 'Example Company',
  'date_limit'         => '2025-07-03',
  'client_company_id'  => 12345,
  'project_id'         => 12345,
  'content'            => 'Example content',
  'prevenance'         => 123,
  'tacite_reconduction'=> 456,
  'entity'             => 'entity_3',
  'custom_fields'      => [
    [ 'name' => 'custom_field_1', 'value' => 'value_1' ],
    [ 'name' => 'custom_field_2', 'value' => 'value_2' ]
  ]
]);
```

### Advanced Filter: `IsNull`

```php
use Furious\FuriousApiSdk\Query\Filter\IsNull;

$results = $absence->search(
  ['id', 'pseudo', 'end_date'],
  [ IsNull::set('end_date') ]
);
```

### Generate GraphQL Query String

```php
$gql = $absence->buildSearchString(
  ['pseudo', 'start_date'],
  [ Equal::set('pseudo', 'jane.doe') ],
  [ OrderAsc::field('start_date') ]
);

echo $gql;
```

### Batch Create (up to 10 entries)

```php
$response = $absence->create([
  [
    'pseudo'     => 'john.doe',
    'start_date' => '2025-09-01',
    'end_date'   => '2025-09-05',
    'entity'     => 'entity_1',
    'half_day'   => '0',
    'type'       => 'home_office'
  ],
  [
    'pseudo'     => 'jane.doe',
    'start_date' => '2025-10-01',
    'end_date'   => '2025-10-05',
    'entity'     => 'entity_2',
    'half_day'   => '0',
    'type'       => 'home_office'
  ]
]);
```

---

## ❗ Error Handling

All SDK operations may throw:

* `Furious\FuriousApiSdk\Exception\SdkException`
* `Furious\FuriousApiSdk\Exception\ApiException`

Use try/catch blocks to handle them gracefully.
