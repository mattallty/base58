# Base-58 encoder/decoder in PHP

## Using base-58 encoding for shortening URLs

This class can be used to convert integers (base 10) to base-58 strings.
Base-58 contains alphanumeric characters minus "1" (number 1), "l" (letter l), "0" (number 0), and O (letter O)
to prevent mistyping.

## Install Base58 using composer
```
{
    "require" : "allty/base58"
}
```

## Usage
```php
use Allty\Utils\Base58;

// We will usually use something like a auto-incremented key from MySQL
$url_id = 627868726;

// encode() (shorten)
$short = Base58::encode($url_id); // "XtZuS"

// decode()
$decoded = Base58::decode($short); // 627868726

```

