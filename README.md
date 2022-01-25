# Google Timezone API

This is a PHP 5.5+ SDK for the [Google](https://www.google.com) API v1.

If you have questions, please contact me or open an issue on GitHub.

## Quick Start
```phpg
require __DIR__ . '/vendor/autoload.php';
use \Timezone\Timezone;

$api = new Timezone("your_project_api_key");

$all = $api->timezone->view();

//Responses are simple arrays, e.g.:
$id = $existing['id'];
$first = $all[0];

```

## Framework Integration
coming soon!

## Installation

To integrate this library into your application, use [Composer](https://getcomposer.org).

Add `imManish/google-timezone` to your **composer.json** file:

```json
{
    "require": {
        "imManish/google-timezone": "1.0"
    }
}
```

Then run:

```bash
php composer.phar install
```

## API Overview



### Getting started

Creating a new API instance is very easy. All you need is your Google
API key.

```php
require __DIR__ . '/vendor/autoload.php';
use \Timezone\Timezone;

$api = new Timezone("your_project_api_key");
```

### Resources

The available methods for each resource are available via a public
property on the api, for example:

```php
//Timezone 
$me = $api->timezone->current();
```

### Responses

All responses are arrays of data. Please refer to Google's documentation
for further information.

### Filtering

All `GET` requests accept an optional `array $query` parameter to filter
results. For example:

```php
//Page 2 with 50 results per page
$page2 = $this->timezone->view();
```

Please read the Google documentation for further information on
filtering `GET` requests.

### Author

