# Base58 : A Base-58 encoder/decoder written in PHP

# Install Base58 using composer
```
{
    "require" : "allty/base58"
}
```

# Usage
```php
use Allty\Utils\Base58;

// We will usually use something like a auto-incremented key from MySQL
$url_id = 627868726;

// encode() (shorten)
$short = Base58::encode($url_id); // "XtZuS"

// decode()
$decoded = Base58::decode($short); // 627868726

```

