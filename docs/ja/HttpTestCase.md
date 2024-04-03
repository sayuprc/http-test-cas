# HttpTestCase

## メソッド

|メソッド|説明|備考|
|---|---|---|
|`getClient()`|`Psr\Http\Client\ClientInterface` を実装したクラスのインスタンスを取得します|適宜実装してください|
|`getRequestFactory()`|`Psr\Http\Message\RequestFactoryInterface` を実装したクラスのインスタンスを取得します|適宜実装してください|
|`getUriFactory()`|`Psr\Http\Message\UriFactoryInterface` を実装したクラスのインスタンスを取得します|適宜実装してください|
|`getStreamFactory()`|`Psr\Http\Message\StreamFactoryInterface` を実装したクラスのインスタンスを取得します|適宜実装してください|
|`get($uri, $options)`|GET リクエストを送信します||
|`head($uri, $options)`|HEAD リクエストを送信します||
|`post($uri, $options)`|POST リクエストを送信します||
|`put($uri, $options)`|PUT リクエストを送信します||
|`delete($uri, $options)`|DELETE リクエストを送信します||
|`options($uri, $options)`|OPTIONS リクエストを送信します||
|`patch($uri, $options)`|PATCH リクエストを送信します||
|`sendRequest($method, $uri, $options)`|リクエストを送信します||

## リクエストオプションの形式

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

リクエストに追加する HTTP ヘッダーを定義する配列です。  
配列のキーはフィールド、値は内容を表します。  
値には文字列か配列を使います。

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

GET リクエストに追加するクエリ文字列パラメーターの配列です。

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

`application/x-www-form-urlencoded` で送信するデータの配列です。

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

`application/json` で送信するデータの配列です。

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

`multipart/form-data` で送信するデータの配列です。

`name` と `contents` は必須で、`contents` には文字列かリソースを指定してください。  
`content-type` と `filename` は任意で指定できます。  
`content-type` に指定がない場合は `text/plain` として処理しますが、`filename` が指定されているときは `application/octet-stream` として処理します。  

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
