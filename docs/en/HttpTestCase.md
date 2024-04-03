# HttpTestCase

## Methods

|Method|Description|Note|
|---|---|---|
|`getClient()`|Get an instance of a class that implements the `Psr\Http\Client\ClientInterface`|You need to implement it|
|`getRequestFactory()`|Get an instance of a class that implements the `Psr\Http\Message\RequestFactoryInterface`|You need to implement it|
|`getUriFactory()`|Get an instance of a class that implements the `Psr\Http\Message\UriFactoryInterface`|You need to implement it|
|`getStreamFactory()`|Get an instance of a class that implements the `Psr\Http\Message\StreamFactoryInterface`|You need to implement it|
|`get($uri, $options)`|Send a GET request||
|`head($uri, $options)`|Send a HEAD request||
|`post($uri, $options)`|Send a POST request||
|`put($uri, $options)`|Send a PUT request||
|`delete($uri, $options)`|Send a DELETE request||
|`options($uri, $options)`|Send a OPTIONS request||
|`patch($uri, $options)`|Send a PATCH request||
|`sendRequest($method, $uri, $options)`|Send a request||

## Request options format

```php
$options = [
    'headers' => [],
    'query' => [],
    'data' => [],
    'json' => [],
    'multipart' => [],
];
```

### headers

An array that defines the headers to be added to the request.
The keys represent the header names, and the values can either be a string indicating a header value or an array of strings representing multiple header values.

```php
$options = [
    'headers' => [
        'Content-Type' => 'application/json',
        'Cookie' => [
            'hoge=foo',
            'fuga=bar',
        ],
    ],
];
```

### query

An array of query string parameters to add to the GET request.

```php
$options = [
    'query' => [
        'hoge' => 'fuga',
        'piyo' => [
            'foo' => 'bar'
        ],
    ],
];
```

### data

An array of data to be sent with the `application/x-www-form-urlencoded` content type.

```php
$options = [
    'data' => [
        'hoge' => 'fuga',
        'piyo' => [
            'foo' => 'bar'
        ],
    ],
];
```

### json

An array of data to be sent with the `application/json` content type.

```php
$options = [
    'json' => [
        'hoge' => 'fuga',
        'piyo' => [
            'foo' => 'bar'
        ],
    ],
];
```

### multipart

An array of data to be sent with the `multipart/form-data` content type.

`name` and `contents` are required fields. `contents` can be a string or a resource.  
Each part can have an optional `content-type` specified. If not specified, text is assumed to be `text/plain`, and files are assumed to be `application/octet-stream`. Additionally, if a part is a file, an optional `filename` can be specified as well.

```php
$options = [
    'multipart' => [
        [
            'name' => 'hoge',
            'contents' => 'foo',
        ],
        [
            'name' => 'file',
            'contents' => fopen('/path/to/file', 'r'),
            'content-type' => 'image/png',
            'filename' => 'file.png',
        ]
    ],
];
```
