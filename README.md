# Google Matrix Api in Laravel

## Requirements

- PHP >= 7.1.3
- Laravel >= 5.5.*

## Installation

Require this package with composer.

```bash
composer require flarone/google-matrix-api
```

To publishes config `config/google-matrix-api.php`, use command:

```bash
php artisan vendor:publish --tag="google-matrix"
```

You must set your [Google Maps API Key](https://developers.google.com/maps/documentation/distance-matrix/get-api-key) GOOGLE_MAPS_MATRIX_API_KEY in your .env file like so:

```bash
GOOGLE_MAPS_MATRIX_API_KEY=ThisIsMyGoogleApiKey
```

## Usage

```php
// Use Facades
use Flarone\GoogleMatrix\Facades\GoogleMatrix;

$matrix = GoogleMatrix::calculate('FromAddress', 'To Address');

// Use Helper Function
$matrix = google_matrix('From Address', 'To Address');
```

## Test

```bash
composer test
```

## Credits

- [Flarone](https://github.com/flarone)

For more info, please visit https://developers.google.com/maps/documentation/distance-matrix/
